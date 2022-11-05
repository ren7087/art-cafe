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

/* @admin/Content/file.twig */
class __TwigTemplate_93dc46edf0e8d485c1190665aaae6b9bfbdf25bbe872efa0dfdd1f2e8a260d54 extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $context["menus"] = [0 => "content", 1 => "file"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/file.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style>
        .copy-file-path {
            display: none;
        }
    </style>
";
    }

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/file_manager.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        arrTree = ";
        // line 31
        echo ($context["tpl_javascript"] ?? null);
        echo ";
        var paths = ";
        // line 32
        echo ($context["paths"] ?? null);
        echo "; // TODO 仮実装
        \$(function() {
            var bread_crumbs = ";
        // line 34
        echo ($context["now_dir_list"] ?? null);
        echo ";
            var file_path = '';
            var \$delimiter = '<span>&nbsp;/&nbsp;</span>';
            var \$node = \$('#bread');
            var total = bread_crumbs.length;
            for (var i in bread_crumbs) {
                file_path += '/' + bread_crumbs[i];
                if (i == total - 1) {
                    \$li = \$('<li class=\"breadcrumb-item active\" />').text(bread_crumbs[i]);
                } else {
                    \$a = \$('<a href=\"javascript:;\" onclick=\"eccube.fileManager.openFolder(\\'' + file_path.replace(/user_data/, '') + '\\'); return false;\" />')
                        .text(bread_crumbs[i]);
                    \$li = \$('<li class=\"breadcrumb-item\" />').append(\$a);
                }
                \$li.appendTo(\$node);
                if (i < total - 1) \$node.append(\$delimiter);
            }


            \$('.action-copy').on('click',function(){
            \tvar updated = \$(this).parents('tr').find('.updated');
            \tvar copy_file_path = \$(this).parents('tr').find('.copy-file-path');
            \tif (\$(updated).is(':visible')) {
            \t    \$('.updated').each(function() {
            \t        \$(this).show();
            \t    });
            \t    \$('.copy-file-path').each(function() {
            \t        \$(this).hide();
            \t    });
            \t    \$('.action-copy').each(function() {
            \t        \$(this).attr('title', '";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy_path"), "html", null, true);
        echo "');
            \t        \$(this).tooltip('_fixTitle');
            \t    });

               \t    \$(updated).hide();
            \t    \$(copy_file_path).show();
            \t    \$(copy_file_path).find('input:first').focus();
            \t} else {
            \t    \$(updated).show();
            \t    \$(copy_file_path).hide();
            \t}

            });

            \$('.copy-file-path input').focus(function(){
                \$(this).select();
                if (document.execCommand('copy')) {
                    var action_copy = \$(this).parents('tr').find('.action-copy');
                    setTimeout(function() {
                        action_copy.attr('title', '";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy_path_complete"), "html", null, true);
        echo "');
                        action_copy.tooltip('_fixTitle');
                        action_copy.tooltip('show');
                     }, 100);
                }
            });
        });


        eccube.fileManager.viewFileTree('directory_userdata', arrTree, '";
        // line 92
        echo twig_escape_filter($this->env, ($context["tpl_now_dir"] ?? null), "html", null, true);
        echo "', 'tree_select_file', 'tree_status', 'move');


    </script>
";
    }

    // line 97
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"mode\" value=\"\"/>
        <input type=\"hidden\" name=\"now_file\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["tpl_now_dir"] ?? null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"now_dir\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["tpl_now_dir"] ?? null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"tree_select_file\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["tpl_now_dir"] ?? null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"tree_status\" value=\"\"/>
        <input type=\"hidden\" name=\"select_file\" value=\"\"/>
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 105), 'widget');
        echo "
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <nav aria-label=\"breadcrumb\" role=\"navigation\">
                    <ol class=\"breadcrumb mb-2 p-0\" id=\"bread\"></ol>
                </nav>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"card-title\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.add_file__card_title"), "html", null, true);
        echo "</span></div>
                    <div class=\"card-body\">
                        <div id=\"upload_box__file\" class=\"row mb-2\">
                            <div class=\"col-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.file.upload_file"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.add_file"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ms-1\"></i></div>
                            <div class=\"col mb-3\">
                                <div class=\"mb-2\">
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 118), 'widget');
        // line 119
        echo "                                </div>
                                <div class=\"mb-2\">
                                    <a class=\"btn btn-ec-conversion action-upload\" href=\"javascript:;\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('upload','',''); return false;\">";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.add_directory"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "create_file", [], "any", false, false, false, 130), 'widget', ["attr" => ["placeholder" => "admin.content.file.directory_name"]]);
        echo "
                                    </div>
                                    <div class=\"col-auto\">
                                        <a class=\"btn btn-ec-regular action-create\" href=\"javascript:\" onclick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.setModeAndSubmit('create','',''); return false;\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 139
            echo "                            <p class=\"text-danger errormsg\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 139)), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__cols\">
                <div class=\"c-contentsArea__primaryCol\">
                    <div class=\"c-primaryCol\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\"><span class=\"card-title\">";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.file_list__card_title"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#fileList\" aria-expanded=\"false\" aria-controls=\"fileList\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"fileList\">
                                <div class=\"card-body p-0\">

                                    <table class=\"table\">
                                        <tbody>
                                        ";
        // line 159
        if ((($context["tpl_is_top_dir"] ?? null) != false)) {
            // line 160
            echo "                                            <tr>
                                                <td class=\"align-middle text-center\" style=\"width: 10%\"><i class=\"fa fa-folder-o fa-2x\"></i></td>
                                                <td class=\"align-middle\"><a href=\"javascript:;\" onclick=\"eccube.fileManager.openFolder('";
            // line 162
            echo twig_escape_filter($this->env, ($context["tpl_parent_dir"] ?? null), "html", null, true);
            echo "')\"><i class=\"fa fa-reply\"></i></a></td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                                <td class=\"align-middle\">&nbsp;</td>
                                            </tr>
                                        ";
        }
        // line 168
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrFileList"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 169
            echo "                                            <tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 169), "html", null, true);
            echo "\">
                                                <td class=\"align-middle text-center\" onDblClick=\"eccube.fileManager.setTreeStatus('tree_status');eccube.fileManager.doubleClick(arrTree, '";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 170), "html", null, true);
            echo "', ";
            if (twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, false, 170)) {
                echo "true";
            } else {
                echo "false";
            }
            echo ", '";
            echo twig_escape_filter($this->env, ($context["tpl_now_dir"] ?? null), "html", null, true);
            echo "', false)\">
                                                    ";
            // line 171
            if (twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, false, 171)) {
                // line 172
                echo "                                                        <i class=\"fa fa-folder-o fa-2x\"></i>
                                                    ";
            } else {
                // line 174
                echo "                                                        ";
                if (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getExtensionIcon(twig_get_attribute($this->env, $this->source, $context["file"], "extension", [], "any", false, false, false, 174), [], true) == "fa-file-image-o")) {
                    // line 175
                    echo "                                                            <div class=\"d-inline-block p-3 bg-light\"
                                                                 style=\"background: no-repeat center center;
                                                                    background-image: url('";
                    // line 177
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "user_data"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 177), 1), "html", null, true);
                    echo "');
                                                                    background-size: contain; width: 49px; height: 57px;\">
                                                            </div>
                                                        ";
                } else {
                    // line 181
                    echo "                                                            <div class=\"d-inline-block p-3 bg-light\">
                                                                ";
                    // line 182
                    echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getExtensionIcon(twig_get_attribute($this->env, $this->source, $context["file"], "extension", [], "any", false, false, false, 182), ["class" => "fa-2x"]);
                    echo "
                                                            </div>
                                                        ";
                }
                // line 185
                echo "                                                    ";
            }
            // line 186
            echo "                                                </td>
                                                <td class=\"align-middle\">
                                                    ";
            // line 188
            if (twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, false, 188)) {
                // line 189
                echo "                                                        <a href=\"javascript:;\" onclick=\"eccube.setValue('tree_select_file', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 189), "html", null, true);
                echo "', 'form1'); eccube.fileManager.selectFile('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 189), "html", null, true);
                echo "', '#808080');eccube.setModeAndSubmit('move','',''); return false;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, false, 189), "html", null, true);
                echo "</a>
                                                    ";
            } else {
                // line 191
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, false, 191), "html", null, true);
                echo "
                                                    ";
            }
            // line 193
            echo "                                                </td>
                                                <td class=\"align-middle\">
                                                    ";
            // line 195
            if ( !twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, false, 195)) {
                // line 196
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_size", [], "any", false, false, false, 196), "html", null, true);
                echo "
                                                    ";
            }
            // line 198
            echo "                                                </td>
                                                <td class=\"align-middle\">
                                                    <span class=\"updated\">";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_time", [], "any", false, false, false, 200)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.updated"), "html", null, true);
            echo "</span>
                                                    ";
            // line 201
            if ((twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, false, 201) == false)) {
                // line 202
                echo "                                                        <span class=\"copy-file-path\"><input type=\"text\"  class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "user_data"), "html", null, true);
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 202), 1), "html", null, true);
                echo "\"></span>
                                                    ";
            }
            // line 204
            echo "                                                </td>
                                                ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, $context["file"], "is_dir", [], "any", false, false, false, 205)) {
                // line 206
                echo "                                                    <td class=\"align-middle pe-3\">
                                                        <div class=\"text-end\">
                                                            <div class=\"px-1 d-inline-block\">
                                                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                    <a class=\"btn btn-ec-actionIcon action-delete ";
                // line 210
                if ((twig_get_attribute($this->env, $this->source, $context["file"], "is_empty", [], "any", false, false, false, 210) == false)) {
                    echo "disabled";
                }
                echo "\"
                                                                   data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 211), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i></a>
                                                                </div>
                                                                <div class=\"modal fade\" id=\"confirmModal-";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 214), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 214), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">";
                // line 218
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">";
                // line 222
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, false, 222)]), "html", null, true);
                echo "</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 225
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                                <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                                   href=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_file_delete", ["select_file" => twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 227)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                                    ";
                // line 228
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                ";
            } else {
                // line 238
                echo "                                                    <td class=\"align-middle pe-3\">
                                                        <div class=\"text-end\">
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a class=\"btn btn-ec-actionIcon action-copy\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 241
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy_path"), "html", null, true);
                echo "\">
                                                                    <i class=\"fas fa-copy fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a href=\"";
                // line 246
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_file_view");
                echo "?file=";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 246), "url"), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-ec-actionIcon action-view\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.display"), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-eye fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <a href=\"";
                // line 251
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_file_download");
                echo "?select_file=";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 251), "url"), "html", null, true);
                echo "\" class=\"btn btn-ec-actionIcon action-download\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.download"), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-cloud-download fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <div class=\"px-1 d-inline-block\">
                                                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                    <a class=\"btn btn-ec-actionIcon action-delete\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmModal-";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 257), "html", null, true);
                echo "\">
                                                                        <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                    </a>
                                                                </div>
                                                                <div class=\"modal fade\" id=\"confirmModal-";
                // line 261
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 261), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmModal-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 261), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                    <div class=\"modal-dialog\" role=\"document\">
                                                                        <div class=\"modal-content\">
                                                                            <div class=\"modal-header\">
                                                                                <h5 class=\"modal-title fw-bold\">";
                // line 265
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                                <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                                            </div>
                                                                            <div class=\"modal-body text-start\">
                                                                                <p class=\"text-start\">";
                // line 269
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, false, 269)]), "html", null, true);
                echo "</p>
                                                                            </div>
                                                                            <div class=\"modal-footer\">
                                                                                <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
                // line 272
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                                <a class=\"btn btn-ec-delete\" data-confirm=\"false\"
                                                                                   href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_file_delete", ["select_file" => twig_get_attribute($this->env, $this->source, $context["file"], "file_path", [], "any", false, false, false, 274)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                                                                    ";
                // line 275
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                ";
            }
            // line 285
            echo "                                            </tr>
                                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"c-contentsArea__secondaryCol\">
                    <div class=\"c-secondaryCol\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\"><span class=\"card-title\">";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.file.directory_tree"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-4 text-end\"><a data-bs-toggle=\"collapse\" href=\"#folderDirectory\" aria-expanded=\"false\" aria-controls=\"folderDirectory\"><i class=\"fa fa-lg fa-angle-down\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"folderDirectory\">
                                <div class=\"card-body\">
                                    <div class=\"c-directoryTree--folder mb-3\">
                                        <ul id=\"directory_userdata\" class=\"list-unstyled\">
                                            <li>
                                                <label class=\"collapsed\" data-bs-toggle=\"collapse\" href=\"#directory_userdata\" aria-expanded=\"false\" aria-controls=\"directory_userdata\">user_data</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@admin/Content/file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 299,  611 => 287,  596 => 285,  583 => 275,  577 => 274,  572 => 272,  566 => 269,  559 => 265,  550 => 261,  543 => 257,  539 => 256,  527 => 251,  515 => 246,  507 => 241,  502 => 238,  489 => 228,  483 => 227,  478 => 225,  472 => 222,  465 => 218,  456 => 214,  450 => 211,  444 => 210,  440 => 209,  435 => 206,  433 => 205,  430 => 204,  423 => 202,  421 => 201,  415 => 200,  411 => 198,  405 => 196,  403 => 195,  399 => 193,  393 => 191,  383 => 189,  381 => 188,  377 => 186,  374 => 185,  368 => 182,  365 => 181,  357 => 177,  353 => 175,  350 => 174,  346 => 172,  344 => 171,  332 => 170,  327 => 169,  309 => 168,  300 => 162,  296 => 160,  294 => 159,  282 => 150,  271 => 141,  262 => 139,  258 => 138,  250 => 133,  244 => 130,  237 => 126,  229 => 121,  225 => 119,  223 => 118,  215 => 115,  209 => 112,  199 => 105,  193 => 102,  189 => 101,  185 => 100,  181 => 98,  177 => 97,  168 => 92,  156 => 83,  134 => 64,  101 => 34,  96 => 32,  92 => 31,  86 => 29,  82 => 28,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/file.twig", "/home/xs230941/tas-lab.net/public_html/src/Eccube/Resource/template/admin/Content/file.twig");
    }
}
