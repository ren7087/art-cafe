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

/* @admin/Product/csv_product.twig */
class __TwigTemplate_f60b241db618f1d8cf1e00e7791c50b323d490e5ddfe19c63ef157907677069d extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "product", 1 => "product_csv_import"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/csv_product.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_csv_upload"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script>
        \$(function() {
            \$('#importCsv').on('click', function() {

                var setupModal = function (modal) {
                    modal.find('button').attr('disabled', 'disabled');
                    \$('.modal-body p', modal).text(\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload_in_progress"), "html", null, true);
        echo "\");
                    \$('.progress', modal).show();
                    return (new \$.Deferred).resolve().promise();
                }

                var addError = function(message) {
                    \$('<li><span class=\"badge bg-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(message))
                        .prependTo('#bulkMessages');
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                };

                var addSuccess = function(message) {
                    \$('<li><span class=\"badge bg-success\">SUCCESS</span> </li>')
                        .append(\$('<span></span>').text(message))
                        .prependTo('#bulkMessages');
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                };

                var split = function(formData) {
                    return function() {
                        var d = new \$.Deferred();
                        \$.ajax({
                            url: '";
        // line 50
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_csv_split");
        echo "',
                            type: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            cache: false,
                        })
                        .then(function(data) {
                            if (data.success) {
                                d.resolve(data)
                            } else {
                                data.message.forEach(function(error) {
                                    addError(error.message)
                                })
                                d.reject(data)
                            }
                        })
                        .catch(function() {
                            d.reject()
                        })
                        return d.promise();
                    }
                }

                var upload = function(file_name, current, total) {
                    return function() {
                        var d = new \$.Deferred();
                        \$.ajax({
                            url: '";
        // line 78
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_csv_split_import");
        echo "',
                            type: 'POST',
                            data: {
                                file_name: file_name + current + '.csv',
                                file_no: current
                            },
                        })
                        .then(function(data) {
                            if (data.success) {
                                addSuccess(data.success_message)
                                \$('.progress-bar', modal).css('width', (current / total * 100) + '%');
                                d.resolve(data)
                            } else {
                                \$('.modal-body p', modal)
                                    .text(data.error_message)

                                data.errors.forEach(function (error) {
                                    addError(error)
                                });

                                \$('.progress-bar', modal)
                                    .clone()
                                    .addClass('bg-danger')
                                    .css('width', 100 - ((current - 1) / total * 100) + '%')
                                    .appendTo('.progress', modal)

                                \$('.progress-bar', modal).addClass('bg-success')

                                // エラー発生以降の分割ファイルをクリア
                                var files = []
                                for (var i = current + 1; i <= total; i++) {
                                    files.push(file_name + i + '.csv')
                                }
                                if (files.length > 0) {
                                    \$.post('";
        // line 112
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_csv_split_cleanup");
        echo "', { files: files })
                                }

                                d.reject(data);
                            }
                        }, function(data) {
                            d.reject(data)
                        })
                        return d.promise()
                    }
                }

                var modal = \$('#importCsvModal')
                var formData = new FormData(\$('#upload-form').get(0))

                setupModal(modal)
                    // CSV分割
                    .then(split(formData))
                    .catch(function() {
                        \$('.modal-body p', modal).text(\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload_error"), "html", null, true);
        echo "\")
                        \$('.progress-bar', modal).css('width', '100%')
                        \$('.progress-bar', modal).addClass('bg-danger')
                        return \$.Deferred().reject();
                    })
                    // 分割したCSVを登録
                    .then(function(data) {
                        var d = \$.Deferred().resolve();
                        for (var i = 1; i <= data.max_file_no; i++) {
                            d = d.then(upload(data.file_name, i, data.max_file_no))
                        }
                        return d.promise()
                    })
                    // 完了メッセージ
                    .then(function() {
                        \$('.modal-body p', modal).text(\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload_complete"), "html", null, true);
        echo "\")
                        \$('.progress-bar', modal).addClass('bg-success');
                    })
                    // モーダルのロック解除
                    .always(function() {
                        \$('.progress-bar', modal).removeClass('progress-bar-animated')
                        // メッセージ行が複数ある場合に詳細表示
                        if (\$('#bulkMessages li').length > 1) {
                            \$('#toggleMessages').show()
                        }
                        modal.find('button').removeAttr('disabled').toggle()
                    })
            })

            \$('#toggleMessages').on('click', function() {
                var display = \$('#bulkMessages li:last').css('display')
                if (display == 'none') {
                    \$('#bulkMessages li').show();
                    \$('#toggleMessages span').text(\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close_detail"), "html", null, true);
        echo "\")
                    \$('#toggleMessages i').removeClass('fa-plus-square-o')
                    \$('#toggleMessages i').addClass('fa-minus-square-o')
                } else {
                    \$('#bulkMessages li:nth-child(n+2)').hide()
                    \$('#toggleMessages span').text(\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.open_detail"), "html", null, true);
        echo "\")
                    \$('#toggleMessages i').removeClass('fa-minus-square-o')
                    \$('#toggleMessages i').addClass('fa-plus-square-o')
                }
            })

            \$('#importCsvDone').on('click', function() {
                location.reload(true);
            });

            \$('#file-select').click(function() {
                \$('#admin_csv_import_import_file').click();
                \$('#admin_csv_import_import_file').on('change', function() {
                    var files = \$(this).prop('files');
                    if (files.length) {
                        \$('#admin_csv_import_import_file_name').text(files[0].name);
                        \$('#upload-button').prop('disabled', false);
                    }
                });
            });
        });
    </script>
";
    }

    // line 193
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.csv_upload"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_upload"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg fa-lg ms-1\"></i></div>
                    </div>
                    <div id=\"ex-csv_product-upload\" class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-2\"><span>";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_select"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <form id=\"upload-form\" method=\"post\" action=\"";
        // line 205
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_csv_split");
        echo "\" enctype=\"multipart/form-data\">
                                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 206), 'widget');
        echo "
                                    <div class=\"mb-2\">
                                        <span id=\"file-select\" class=\"btn btn-ec-regular me-2\">";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "</span>
                                        <span id=\"admin_csv_import_import_file_name\">";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select_empty"), "html", null, true);
        echo "</span>
                                        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "import_file", [], "any", false, false, false, 210), 'widget', ["attr" => ["accept" => "text/csv,text/tsv", "class" => "d-none"]]);
        echo "
                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "import_file", [], "any", false, false, false, 211), 'errors');
        echo "
                                    </div>
                                    <button class=\"btn btn-ec-conversion\" id=\"upload-button\" type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#importCsvModal\" disabled>";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_registration"), "html", null, true);
        echo "</button>
                                    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 215
            echo "                                        <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row justify-content-between\">
                            <div class=\"col-6\">
                                <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.csv_format"), "html", null, true);
        echo "\"><span class=\"align-middle\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_format"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg fa-lg ms-1\"></i></div>
                            </div>
                            <div class=\"col-4 text-end\">
                                <a href=\"";
        // line 229
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_csv_template", ["type" => "product"]);
        echo "\" class=\"btn btn-ec-regular\" id=\"download-button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_skeleton_download"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div id=\"ex-csv_product-format\" class=\"card-body\">
                        <table class=\"table table-striped table-bordered\">
                            <tbody>
                            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
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
        foreach ($context['_seq'] as $context["header"] => $context["key"]) {
            // line 237
            echo "                                <tr>
                                    <th class=\"w-25 align-middle table-ec-lightGray\" id=\"file_format_box__header--";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 238), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["header"], "html", null, true);
            echo "
                                        ";
            // line 239
            if (twig_get_attribute($this->env, $this->source, $context["key"], "required", [], "any", false, false, false, 239)) {
                // line 240
                echo "                                            <span class=\"badge bg-primary ms-1\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
                echo "</span>
                                        ";
            }
            // line 242
            echo "                                    </th>
                                    <td class=\"align-middle\">
                                        ";
            // line 244
            if (twig_get_attribute($this->env, $this->source, $context["key"], "description", [], "any", false, false, false, 244)) {
                // line 245
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["key"], "description", [], "any", false, false, false, 245)), "html", null, true);
                echo "
                                        ";
            }
            // line 247
            echo "                                    </td>
                                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['header'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"importCsvModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"importCsvModal\" aria-hidden=\"true\" data-bs-keyboard=\"false\" data-bs-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-bold\">";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_csv_upload__title"), "html", null, true);
        echo "</h5>
                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body text-start\">
                    <span class=\"badge\"></span>
                    <p class=\"text-start\">";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_csv_upload__message"), "html", null, true);
        echo "</p>
                    <div class=\"progress mb-1\" style=\"display: none\">
                        <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                    </div>
                    <ul id=\"bulkMessages\"></ul>
                    <div id=\"toggleMessages\" style=\"display: none;\">
                        <i class=\"fa fw-bold me-1 fa-plus-square-o\"></i><span>";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.open_detail"), "html", null, true);
        echo "</span>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-ec-sub\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-ec-conversion\" type=\"button\" id=\"importCsv\">";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_registration"), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-ec-regular\" id=\"importCsvDone\" style=\"display: none\" type=\"button\" data-bs-dismiss=\"modal\">";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
        echo "</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Product/csv_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 278,  472 => 277,  468 => 276,  461 => 272,  452 => 266,  444 => 261,  431 => 250,  415 => 247,  409 => 245,  407 => 244,  403 => 242,  397 => 240,  395 => 239,  389 => 238,  386 => 237,  369 => 236,  357 => 229,  349 => 226,  338 => 217,  329 => 215,  325 => 214,  321 => 213,  316 => 211,  312 => 210,  308 => 209,  304 => 208,  299 => 206,  295 => 205,  290 => 203,  281 => 199,  274 => 194,  270 => 193,  243 => 169,  235 => 164,  214 => 146,  196 => 131,  174 => 112,  137 => 78,  106 => 50,  80 => 27,  72 => 21,  68 => 20,  61 => 16,  54 => 15,  49 => 11,  47 => 18,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/csv_product.twig", "/home/xs230941/tas-lab.net/public_html/src/Eccube/Resource/template/admin/Product/csv_product.twig");
    }
}
