<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\Coupon42\Controller\Admin;

use Eccube\Controller\AbstractController;
use Eccube\Entity\Category;
use Eccube\Repository\CategoryRepository;
use Eccube\Repository\ProductRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CouponSearchModelController.
 */
class CouponSearchModelController extends AbstractController
{
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * CouponSearchModelController constructor.
     *
     * @param CategoryRepository $categoryRepository
     * @param ProductRepository $productRepository
     */
    public function __construct(CategoryRepository $categoryRepository, ProductRepository $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * search product modal.
     *
     * @param Request   $request
     * @param int       $page_no
     * @param PaginatorInterface $paginator
     *
     * @return array
     * @Route("/%eccube_admin_route%/plugin/coupon/search/product", name="plugin_coupon_search_product")
     * @Route("/%eccube_admin_route%/plugin/coupon/search/product/page/{page_no}", requirements={"page_no" = "\d+"}, name="plugin_coupon_search_product_page")
     * @Template("@Coupon42/admin/search_product.twig")
     */
    public function searchProduct(Request $request, PaginatorInterface $paginator, $page_no = null)
    {
        if (!$request->isXmlHttpRequest()) {
            return null;
        }

        $pageCount = $this->eccubeConfig['eccube_default_page_count'];
        $session = $this->session;
        if ('POST' === $request->getMethod()) {
            log_info('get search data with parameters ', ['id' => $request->get('id'), 'category_id' => $request->get('category_id')]);
            $page_no = 1;
            $searchData = [
                'id' => $request->get('id'),
            ];
            if ($categoryId = $request->get('category_id')) {
                $searchData['category_id'] = $categoryId;
            }
            $session->set('eccube.plugin.coupon.product.search', $searchData);
            $session->set('eccube.plugin.coupon.product.search.page_no', $page_no);
        } else {
            $searchData = (array) $session->get('eccube.plugin.coupon.product.search');
            if (is_null($page_no)) {
                $page_no = intval($session->get('eccube.plugin.coupon.product.search.page_no'));
            } else {
                $session->set('eccube.plugin.coupon.product.search.page_no', $page_no);
            }
        }

        if (!empty($searchData['category_id'])) {
            $searchData['category_id'] = $this->categoryRepository->find($searchData['category_id']);
        }

        $qb = $this->productRepository->getQueryBuilderBySearchDataForAdmin($searchData);
        // ????????????product_id???????????????
        $existProductId = $request->get('exist_product_id');
        if (strlen($existProductId > 0)) {
            $qb->andWhere($qb->expr()->notin('p.id', ':existProductId'))
                ->setParameter('existProductId', explode(',', $existProductId));
        }

        /** @var \Knp\Component\Pager\Pagination\SlidingPagination $pagination */
        $pagination = $paginator->paginate(
            $qb,
            $page_no,
            $pageCount,
            ['wrap-queries' => true]
        );

        return [
            'pagination' => $pagination,
        ];
    }

    /**
     * ???????????????????????????????????????.
     *
     * @param Request     $request
     *
     * @return array
     * @Route("/%eccube_admin_route%/plugin/coupon/search/category", name="plugin_coupon_search_category")
     * @Template("@Coupon42/admin/search_category.twig")
     */
    public function searchCategory(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $categoryId = $request->get('category_id');
            $existCategoryId = $request->get('exist_category_id');

            $existCategoryIds = [0];
            if (strlen($existCategoryId > 0)) {
                $existCategoryIds = explode(',', $existCategoryId);
            }

            if (empty($categoryId)) {
                $categoryId = 0;
            }

            $Category = $this->categoryRepository->find($categoryId);
            $Categories = $this->categoryRepository->getList($Category);

            if (empty($Categories)) {
                log_info('search category not found.');
            }

            // ???????????????????????????????????????
            $list = [];
            if ($categoryId != 0 && !in_array($categoryId, $existCategoryIds)) {
                $name = $Category->getName();
                $list += [$Category->getId() => $name];
            }
            $list += $this->getCategoryList($Categories, $existCategoryIds);

            return [
                'Categories' => $list,
            ];
        }

        return [];
    }

    /**
     * ???????????????????????????????????????.
     *
     * @param Category $Categories
     * @param int      $existCategoryIds
     *
     * @return array
     */
    protected function getCategoryList($Categories, $existCategoryIds)
    {
        $result = [];
        foreach ($Categories as $Category) {
            // ??????ID?????????????????????????????????????????????
            if (count($existCategoryIds) == 0 || !in_array($Category->getId(), $existCategoryIds)) {
                $name = $this->getCategoryFullName($Category);
                $result += [$Category->getId() => $name];
            }
            // ??????????????????????????????????????????????????????
            if (count(($Category->getChildren())) > 0) {
                $childResult = $this->getCategoryList($Category->getChildren(), $existCategoryIds);
                $result += $childResult;
            }
        }

        return $result;
    }

    /**
     * ?????????????????????????????????????????????????????????.
     *
     * @param Category $Category
     *
     * @return string
     */
    protected function getCategoryFullName(Category $Category)
    {
        if (is_null($Category)) {
            return '';
        }
        $fulName = $Category->getName();
        // ?????????????????????????????????????????????????????????.
        if (is_null($Category->getParent())) {
            return $fulName;
        }
        // ?????????????????????????????????
        $ParentCategory = $Category->getParent();
        while (!is_null($ParentCategory)) {
            $fulName = $ParentCategory->getName().'?????????'.$fulName;
            $ParentCategory = $ParentCategory->getParent();
        }

        return $fulName;
    }
}
