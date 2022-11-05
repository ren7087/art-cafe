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

/* default_frame.twig */
class __TwigTemplate_ffceed6710d855255c49ff291c4ea705406193cae5ff9fc4ff0c4ff49311faed extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
<head prefix=\"og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# product: https://ogp.me/ns/product#\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">
    <title>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 17), "html", null, true);
        if ((array_key_exists("subtitle", $context) &&  !twig_test_empty(($context["subtitle"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        } elseif ((array_key_exists("title", $context) &&  !twig_test_empty(($context["title"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        echo "</title>
    ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", [], "any", false, false, false, 18))) {
            // line 19
            echo "        ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", [], "any", false, false, false, 19)));
            echo "
        ";
            // line 20
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, false, 20))) {
                // line 21
                echo "            <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
        ";
            }
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "        ";
            echo twig_include($this->env, $context, "meta.twig");
            echo "
    ";
        }
        // line 26
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", [], "any", false, false, false, 26))) {
            // line 27
            echo "        <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
    ";
        }
        // line 29
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", [], "any", false, false, false, 29))) {
            // line 30
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
    ";
        }
        // line 32
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_robots", [], "any", false, false, false, 32))) {
            // line 33
            echo "        <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_robots", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
    ";
        }
        // line 35
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico", "user_data"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front.bundle.js", "bundle"), "html", null, true);
        echo "\"></script>
    ";
        // line 39
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 40
        echo "    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });
    </script>
    ";
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", [], "any", false, false, false, 50)) {
            // line 51
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", [], "any", false, false, false, 51)]);
            echo "
    ";
        }
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        if (array_key_exists("plugin_assets", $context)) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => ($context["plugin_assets"] ?? null)]);
        }
        // line 55
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/customize.css", "user_data"), "html", null, true);
        echo "\">
</head>
<body id=\"page_";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 57), "get", [0 => "_route"], "method", false, false, false, 57), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("body_class", $context)) ? (_twig_default_filter(($context["body_class"] ?? null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", [], "any", false, false, false, 59)) {
            // line 60
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", [], "any", false, false, false, 60)]);
            echo "
";
        }
        // line 62
        echo "
";
        // line 63
        if (($context["isMaintenance"] ?? null)) {
            // line 64
            echo "    <div class=\"ec-maintenanceAlert\">
        <div>
            <div class=\"ec-maintenanceAlert__icon\"><img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"/></div>
            ";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メンテナンスモードが有効になっています。"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 71
        echo "
<div class=\"ec-layoutRole\">
    ";
        // line 74
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", [], "any", false, false, false, 74)) {
            // line 75
            echo "        <header class=\"ec-layoutRole__header\">
            ";
            // line 76
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", [], "any", false, false, false, 76)]);
            echo "
        </header>
    ";
        }
        // line 79
        echo "
    ";
        // line 81
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", [], "any", false, false, false, 81)) {
            // line 82
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 83
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", [], "any", false, false, false, 83)]);
            echo "
        </div>
    ";
        }
        // line 86
        echo "
    <div class=\"ec-layoutRole__contents\">
        ";
        // line 89
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", [], "any", false, false, false, 89)) {
            // line 90
            echo "            <aside class=\"ec-layoutRole__left\">
                ";
            // line 91
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", [], "any", false, false, false, 91)]);
            echo "
            </aside>
        ";
        }
        // line 94
        echo "
        ";
        // line 95
        $context["layoutRoleMain"] = "ec-layoutRole__main";
        // line 96
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", [], "any", false, false, false, 96) == 2)) {
            // line 97
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 98
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", [], "any", false, false, false, 98) == 3)) {
            // line 99
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainBetweenColumn";
            // line 100
            echo "        ";
        }
        // line 101
        echo "
        <main class=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["layoutRoleMain"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 104
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", [], "any", false, false, false, 104)) {
            // line 105
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 106
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", [], "any", false, false, false, 106)]);
            echo "
                </div>
            ";
        }
        // line 109
        echo "
            ";
        // line 111
        echo "            ";
        $this->displayBlock('main', $context, $blocks);
        // line 112
        echo "
            ";
        // line 114
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", [], "any", false, false, false, 114)) {
            // line 115
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 116
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", [], "any", false, false, false, 116)]);
            echo "
                </div>
            ";
        }
        // line 119
        echo "        </main>

        ";
        // line 122
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", [], "any", false, false, false, 122)) {
            // line 123
            echo "            <aside class=\"ec-layoutRole__right\">
                ";
            // line 124
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", [], "any", false, false, false, 124)]);
            echo "
            </aside>
        ";
        }
        // line 127
        echo "    </div>

    ";
        // line 130
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", [], "any", false, false, false, 130)) {
            // line 131
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 132
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", [], "any", false, false, false, 132)]);
            echo "
        </div>
    ";
        }
        // line 135
        echo "
    ";
        // line 137
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", [], "any", false, false, false, 137)) {
            // line 138
            echo "        <footer class=\"ec-layoutRole__footer\">
            ";
            // line 139
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", [], "any", false, false, false, 139)]);
            echo "
        </footer>
    ";
        }
        // line 142
        echo "</div><!-- ec-layoutRole -->

<div class=\"ec-overlayRole\"></div>
<div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
<div class=\"ec-drawerRole\">
    ";
        // line 148
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", [], "any", false, false, false, 148)) {
            // line 149
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", [], "any", false, false, false, 149)]);
            echo "
    ";
        }
        // line 151
        echo "</div>
<div class=\"ec-blockTopBtn pagetop\">";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ページトップへ"), "html", null, true);
        echo "</div>
";
        // line 153
        $this->loadTemplate("@common/lang.twig", "default_frame.twig", 153)->display($context);
        // line 154
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eccube.js"), "html", null, true);
        echo "\"></script>
";
        // line 156
        $this->displayBlock('javascript', $context, $blocks);
        // line 158
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", [], "any", false, false, false, 158)) {
            // line 159
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", [], "any", false, false, false, 159)]);
            echo "
";
        }
        // line 162
        if (array_key_exists("plugin_snippets", $context)) {
            // line 163
            echo "    ";
            echo twig_include($this->env, $context, "snippet.twig", ["snippets" => ($context["plugin_snippets"] ?? null)]);
            echo "
";
        }
        // line 165
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/customize.js", "user_data"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
    }

    // line 39
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 156
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 156,  421 => 111,  415 => 39,  406 => 165,  400 => 163,  398 => 162,  392 => 159,  390 => 158,  388 => 156,  384 => 155,  379 => 154,  377 => 153,  373 => 152,  370 => 151,  364 => 149,  361 => 148,  354 => 142,  348 => 139,  345 => 138,  342 => 137,  339 => 135,  333 => 132,  330 => 131,  327 => 130,  323 => 127,  317 => 124,  314 => 123,  311 => 122,  307 => 119,  301 => 116,  298 => 115,  295 => 114,  292 => 112,  289 => 111,  286 => 109,  280 => 106,  277 => 105,  274 => 104,  270 => 102,  267 => 101,  264 => 100,  261 => 99,  258 => 98,  255 => 97,  252 => 96,  250 => 95,  247 => 94,  241 => 91,  238 => 90,  235 => 89,  231 => 86,  225 => 83,  222 => 82,  219 => 81,  216 => 79,  210 => 76,  207 => 75,  204 => 74,  200 => 71,  193 => 67,  189 => 66,  185 => 64,  183 => 63,  180 => 62,  174 => 60,  172 => 59,  166 => 57,  160 => 55,  155 => 54,  153 => 53,  147 => 51,  144 => 50,  133 => 40,  131 => 39,  127 => 38,  123 => 37,  117 => 35,  111 => 33,  108 => 32,  102 => 30,  99 => 29,  93 => 27,  90 => 26,  84 => 24,  81 => 23,  75 => 21,  73 => 20,  68 => 19,  66 => 18,  55 => 17,  51 => 16,  43 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default_frame.twig", "/home/xs230941/tas-lab.net/public_html/src/Eccube/Resource/template/default/default_frame.twig");
    }
}
