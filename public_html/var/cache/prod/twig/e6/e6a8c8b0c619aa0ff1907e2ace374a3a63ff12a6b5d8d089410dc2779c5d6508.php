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

/* meta.twig */
class __TwigTemplate_a6c533b2317a76726c838f4d81cd8282e54d81a12fdb7c4e8d8d794768098272 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1) == "product_detail")) {
            // line 2
            echo "    ";
            $context["meta_og_type"] = "og:product";
            // line 3
            echo "    ";
            $context["meta_description"] = _twig_default_filter(((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_list", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, false, 3))), twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, false, 3));
            // line 4
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 4)]);
            // line 5
            echo "    <meta property=\"og:title\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "\" />
    <meta property=\"og:image\" content=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "main_list_image", [], "any", false, false, false, 6)), "save_image")), "html", null, true);
            echo "\" />
    <meta property=\"product:price:amount\" content=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
    <meta property=\"product:price:currency\" content=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "currency", [], "any", false, false, false, 8), "html", null, true);
            echo "\"/>
    <meta property=\"product:product_link\" content=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\"/>
    <meta property=\"product:retailer_title\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 10), "html", null, true);
            echo "\"/>
    ";
            // line 11
            if ( !twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, false, 11)) {
                // line 12
                echo "        <meta name=\"robots\" content=\"noindex\">
    ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "product_list")) {
            // line 15
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list", ["category_id" => ((twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 15), null)) : (null))]);
            // line 16
            echo "    ";
            if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) == 0)) {
                // line 17
                echo "        <meta name=\"robots\" content=\"noindex\">
    ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["app"] ?? null), "request", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19) == "homepage")) {
            // line 20
            echo "    ";
            $context["meta_og_type"] = "website";
            // line 21
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        } elseif (((        // line 22
array_key_exists("Page", $context) && (twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "edit_type", [], "any", false, false, false, 22) == 0)) && twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "url", [], "any", true, true, false, 22))) {
            // line 23
            echo "    ";
            $context["meta_canonical"] = $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_user_data_route", [], "any", false, false, false, 23), ["route" => twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "url", [], "any", false, false, false, 23)]);
        }
        // line 25
        echo "
<meta property=\"og:type\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("meta_og_type", $context)) ? (_twig_default_filter(($context["meta_og_type"] ?? null), "article")) : ("article")), "html", null, true);
        echo "\"/>
<meta property=\"og:site_name\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\"/>
";
        // line 28
        $context["meta_description"] = ((array_key_exists("meta_description", $context)) ? (_twig_default_filter(($context["meta_description"] ?? null), twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, false, 28))) : (twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, false, 28)));
        // line 29
        if (($context["meta_description"] ?? null)) {
            // line 30
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(($context["meta_description"] ?? null)), 0, 120), "html", null, true);
            echo "\">
    <meta property=\"og:description\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags(($context["meta_description"] ?? null)), 0, 120), "html", null, true);
            echo "\"/>
";
        }
        // line 33
        if (((array_key_exists("meta_canonical", $context)) ? (_twig_default_filter(($context["meta_canonical"] ?? null))) : (""))) {
            // line 34
            echo "    ";
            // line 35
            echo "    ";
            // line 36
            echo "    ";
            if ((array_key_exists("Category", $context) && ($context["Category"] ?? null))) {
                // line 37
                echo "        ";
                if (((array_key_exists("pagination", $context) && twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", true, true, false, 37)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 37), "pageCount", [], "any", false, false, false, 37) > 1))) {
                    // line 38
                    echo "            ";
                    // line 39
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 39), "current", [], "any", false, false, false, 39) == 1)) {
                        // line 40
                        echo "            <meta property=\"og:url\" content=\"";
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "\"/>
            <link rel=\"next\" href=\"";
                        // line 41
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=2\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 41), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => 2]), "html", null, true);
                        echo "\">
            <link rel=\"canonical\" href=\"";
                        // line 42
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "\" />
            ";
                        // line 44
                        echo "            ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 44), "last", [], "any", false, false, false, 44) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 44), "current", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "            <meta property=\"og:url\" content=\"";
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 45), "last", [], "any", false, false, false, 45), "html", null, true);
                        echo "\"/>
            <link rel=\"prev\" href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 46), "previous", [], "any", false, false, false, 46), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 46), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 46), "previous", [], "any", false, false, false, 46)]), "html", null, true);
                        echo "\">
            <link rel=\"canonical\" href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 47), "last", [], "any", false, false, false, 47), "html", null, true);
                        echo "\" />
            ";
                        // line 49
                        echo "            ";
                    } else {
                        // line 50
                        echo "            <meta property=\"og:url\" content=\"";
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 50), "current", [], "any", false, false, false, 50), "html", null, true);
                        echo "\"/>
            <link rel=\"next\" href=\"";
                        // line 51
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 51), "next", [], "any", false, false, false, 51), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 51), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 51), "next", [], "any", false, false, false, 51)]), "html", null, true);
                        echo "\">
            <link rel=\"prev\" href=\"";
                        // line 52
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 52), "previous", [], "any", false, false, false, 52), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 52), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%pageno%ページ目", ["%pageno%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 52), "previous", [], "any", false, false, false, 52)]), "html", null, true);
                        echo "\">
            <link rel=\"canonical\" href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                        echo "&pageno=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 53), "current", [], "any", false, false, false, 53), "html", null, true);
                        echo "\" />
            ";
                    }
                    // line 55
                    echo "        ";
                } else {
                    // line 56
                    echo "        ";
                    // line 57
                    echo "        <meta property=\"og:url\" content=\"";
                    echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                    echo "\"/>
        <link rel=\"canonical\" href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                    echo "\" />
        ";
                }
                // line 60
                echo "    ";
                // line 61
                echo "    ";
            } else {
                // line 62
                echo "    <meta property=\"og:url\" content=\"";
                echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                echo "\"/>
    <link rel=\"canonical\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, ($context["meta_canonical"] ?? null), "html", null, true);
                echo "\" />
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 63,  247 => 62,  244 => 61,  242 => 60,  237 => 58,  232 => 57,  230 => 56,  227 => 55,  220 => 53,  210 => 52,  200 => 51,  193 => 50,  190 => 49,  184 => 47,  174 => 46,  167 => 45,  164 => 44,  160 => 42,  152 => 41,  147 => 40,  144 => 39,  142 => 38,  139 => 37,  136 => 36,  134 => 35,  132 => 34,  130 => 33,  125 => 31,  120 => 30,  118 => 29,  116 => 28,  112 => 27,  108 => 26,  105 => 25,  101 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 19,  87 => 17,  84 => 16,  81 => 15,  79 => 14,  75 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "meta.twig", "/home/xs230941/tas-lab.net/public_html/src/Eccube/Resource/template/default/meta.twig");
    }
}
