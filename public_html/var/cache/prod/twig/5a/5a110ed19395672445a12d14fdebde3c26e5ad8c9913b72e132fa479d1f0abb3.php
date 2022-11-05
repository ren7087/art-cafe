<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/Content/page.twig */
class __TwigTemplate_cc40ad057b408549805d9c738697b887670f37f2e318b67c89b002b86ca5c4ba extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "content", 1 => "page"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/page.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <script>
        // searchWordの実行
        \$('#search-page').on('input', function() {
            searchWord(\$(this).val(), \$('table.table tbody tr'));
        });
    </script>
";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row justify-content-between mb-2\">
                    <div class=\"col-9\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 33
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_new");
        echo "\">
                            ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "
                        </a>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"input-group mb-3\">
                                    <div class=\"input-group-text\">
                                        <span id=\"basic-addon1\"><i class=\"fa fa-search\"></i></span>
                                    </div>
                                    <input id=\"search-page\" class=\"form-control\" type=\"search\" aria-label=\"Search\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <table class=\"table table-sm\">
                            <thead>
                            <th class=\"border-0 pt-2 pb-2 ps-3\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 ps-3\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_route_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 ps-3\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_url"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 ps-3\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.page_file_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.layout_name"), "html", null, true);
        echo "</th>
                            <th class=\"border-0 pt-2 pb-2 pe-3\"></th>
                            </thead>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Page"]) {
            // line 62
            echo "                                <tr id=\"ex-page-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                                    <td class=\"align-middle ps-3\">
                                        <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</a>
                                    </td>
                                    <td class=\"align-middle ps-3 text-break\">
                                        ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                    </td>
                                    <td class=\"align-middle ps-3 text-break\">
                                        ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "routecollection", [], "any", false, false, false, 70), "get", [0 => twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 70)], "method", false, false, false, 70)) {
                // line 71
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["router"] ?? null), "routecollection", [], "any", false, false, false, 71), "get", [0 => twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 71)], "method", false, false, false, 71), "path", [], "any", false, false, false, 71), "html", null, true);
                echo "
                                        ";
            } else {
                // line 73
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "url", [], "any", false, false, false, 73), "html", null, true);
                echo "
                                        ";
            }
            // line 75
            echo "                                    </td>
                                    <td class=\"align-middle ps-3 text-break\">
                                        ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["Page"], "file_name", [], "any", false, false, false, 77)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "file_name", [], "any", false, false, false, 77), "html", null, true);
                echo ".twig";
            }
            // line 78
            echo "                                    </td>
                                    ";
            // line 80
            echo "                                    <td class=\"align-middle";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "layouts", [], "any", false, false, false, 80)) < 2)) ? (" pb-4") : (""));
            echo " text-nowrap\">
                                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Page"], "layouts", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["Layout"]) {
                // line 82
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Layout"], "device_type", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82) == twig_constant("Eccube\\Entity\\Master\\DeviceType::DEVICE_TYPE_PC"))) {
                    // line 83
                    echo "                                                ";
                    $context["icon"] = "fa-desktop";
                    // line 84
                    echo "                                            ";
                } else {
                    // line 85
                    echo "                                                ";
                    $context["icon"] = "fa-mobile fa-2x";
                    // line 86
                    echo "                                            ";
                }
                // line 87
                echo "                                            <div class=\"d-block\">
                                                <i class=\"fa ";
                // line 88
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " me-2\"></i>
                                                <span>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Layout"], "name", [], "any", false, false, false, 89), "html", null, true);
                echo "</span>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                    </td>
                                    <td class=\"align-middle pe-3\">
                                        <div class=\"row justify-content-end\">
                                            ";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, $context["Page"], "edit_type", [], "any", false, false, false, 95) == twig_constant("Eccube\\Entity\\Page::EDIT_TYPE_USER"))) {
                // line 96
                echo "                                                <div class=\"col-auto text-center\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\" data-bs-target=\"#delete_";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 97), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"modal fade\" id=\"delete_";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\"
                                                     aria-labelledby=\"delete_";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 102), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title fw-bold\">";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\">

                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body text-start\">
                                                                <p class=\"text-start\">";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Page"], "name", [], "any", false, false, false, 112)]), "html", null, true);
                echo "</p>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                <a class=\"btn btn-ec-delete\" href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_page_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Page"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                echo "\"
                                                                        ";
                // line 117
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 123
            echo "                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@admin/Content/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 127,  294 => 123,  283 => 117,  279 => 116,  275 => 115,  269 => 112,  260 => 106,  253 => 102,  249 => 101,  242 => 97,  237 => 96,  235 => 95,  230 => 92,  221 => 89,  217 => 88,  214 => 87,  211 => 86,  208 => 85,  205 => 84,  202 => 83,  199 => 82,  195 => 81,  190 => 80,  187 => 78,  182 => 77,  178 => 75,  172 => 73,  166 => 71,  164 => 70,  158 => 67,  150 => 64,  144 => 62,  140 => 61,  134 => 58,  130 => 57,  126 => 56,  122 => 55,  118 => 54,  95 => 34,  91 => 33,  84 => 28,  80 => 27,  70 => 19,  66 => 18,  59 => 16,  52 => 15,  47 => 11,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/page.twig", "/home/xs230941/tas-lab.net/public_html/src/Eccube/Resource/template/admin/Content/page.twig");
    }
}
