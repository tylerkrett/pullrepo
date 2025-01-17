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

/* extension/blogger/admin/view/template/module/blogger/form.twig */
class __TwigTemplate_12aa26b11c9f2fbbc507a22da632de271de917a2fc16db6f326a31b483972551 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"float-end\">
                <button type=\"submit\" form=\"form-blogger\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i>
                </button>
                <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\">
                    <i class=\"fa fa-reply\"></i>
                </a>
            </div>
        <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ol class=\"breadcrumb\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "                    <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ol>
        </div>
    </div>
    <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
   ";
        }
        // line 27
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <i class=\"fas fa-pencil-alt\"></i> ";
        // line 29
        echo ($context["text_form"] ?? null);
        echo "
        </div>
        <div class=\"card-body\">
            <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-module\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 34
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                    <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-general\">
                        <ul class=\"nav nav-tabs\">
                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                              <li class=\"nav-item\"><a href=\"#language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
            echo "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 41)) {
                echo " active";
            }
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 41);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 41);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 41);
            echo "</a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                      </ul>
                        <div class=\"tab-content\">
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "                            <div id=\"language-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\" class=\"tab-pane";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 46)) {
                echo " active";
            }
            echo "\">
                               <div class=\"row mb-3 required\">
                                    <label for=\"input-name-";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                                    
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"blogger_description[";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "][title]\" value=\"";
            echo (((($__internal_compile_0 = ($context["blogger_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["blogger_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null), "title", [], "any", false, false, false, 51)) : (""));
            echo "\" data-oc-toggle=\"ckeditor\"
                                        placeholder=\"";
            // line 52
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            echo "\" class=\"form-control\" />
                                            ";
            // line 53
            if ((($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) {
                // line 54
                echo "                                                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_title"] ?? null), "language", [], "any", false, false, false, 54), "language_id", [], "any", false, false, false, 54);
                echo "</div>
                                            ";
            }
            // line 56
            echo "                                    </div>
                                </div>
                                            <div class=\"row mb-3 required\">
                                                <label for=\"input-name-";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                                  <div class=\"col-sm-10\">
                                                    <textarea name=\"blogger_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" data-oc-toggle=\"ckeditor\" data-toggle=\"summernote\" class=\"form-control\">";
            echo (((($__internal_compile_3 = ($context["blogger_description"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["blogger_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "description", [], "any", false, false, false, 61)) : (""));
            echo "</textarea>
                                                    ";
            // line 62
            if ((($__internal_compile_5 = ($context["error_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) {
                // line 63
                echo "                                                        <div class=\"text-danger\">";
                echo (($__internal_compile_6 = ($context["error_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null);
                echo "</div>
                                                    ";
            }
            // line 65
            echo "                                                </div>
                                            </div>
                                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab-data\">
                                <div class=\"row mb-3 required\">
                                    <label for=\"input-name-";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 73);
        echo "\" class=\"col-sm-2 col-form-label\">";
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-select\">
                                        ";
        // line 76
        if (($context["status"] ?? null)) {
            // line 77
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 78
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 80
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 81
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 83
        echo "                                    </select>
                                </div>
                                </div>
                                <div class=\"row mb-3 required\">
                                    <label for=\"input-name-";
        // line 87
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 87);
        echo "\" class=\"col-sm-2 col-form-label\">";
        echo ($context["entry_image"] ?? null);
        echo "</label> 

                                       <div id=\"image\" class=\"card image\">
                              <img src=\"";
        // line 90
        echo ($context["thumb"] ?? null);
        echo " \" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 92
        echo ($context["button_edit"] ?? null);
        echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 93
        echo ($context["button_clear"] ?? null);
        echo "</button>
                              </div>
                            </div>
                                </div>
                                <div class=\"row mb-3 required\">
                                    <label for=\"input-name-";
        // line 98
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 98);
        echo "\" class=\"col-sm-2 col-form-label\">";
        echo ($context["entry_module"] ?? null);
        echo "</label> 
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_id\" id=\"input-module\" class=\"form-select\">
                                            <option value=\"\">";
        // line 101
        echo ($context["text_unallocated"] ?? null);
        echo "</option>
                                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogger_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 103
            echo "                                                <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 103);
            echo "\">
                                                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["module"], "module", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 105
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["module"], "module_id", [], "any", false, false, false, 105) == ($context["module_id"] ?? null))) {
                    // line 106
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "module_id", [], "any", false, false, false, 106);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 106);
                    echo "</option>
                                                        ";
                } else {
                    // line 108
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "module_id", [], "any", false, false, false, 108);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 108);
                    echo "</option>
                                                        ";
                }
                // line 110
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                                </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                        </select>
                                        ";
        // line 114
        if (($context["error_module"] ?? null)) {
            // line 115
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_module"] ?? null);
            echo "</div>
                                        ";
        }
        // line 117
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
        language:'";
        // line 128
        echo ($context["ckeditor"] ?? null);
        echo "'
    });

    // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function () {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }
</script>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor();
//--></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
";
        // line 152
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/blogger/admin/view/template/module/blogger/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 152,  426 => 128,  413 => 117,  407 => 115,  405 => 114,  402 => 113,  395 => 111,  389 => 110,  381 => 108,  373 => 106,  370 => 105,  366 => 104,  361 => 103,  357 => 102,  353 => 101,  345 => 98,  337 => 93,  333 => 92,  324 => 90,  316 => 87,  310 => 83,  305 => 81,  300 => 80,  295 => 78,  290 => 77,  288 => 76,  280 => 73,  274 => 69,  257 => 65,  251 => 63,  249 => 62,  239 => 61,  232 => 59,  227 => 56,  221 => 54,  219 => 53,  213 => 52,  207 => 51,  199 => 48,  189 => 46,  172 => 45,  168 => 43,  141 => 41,  124 => 40,  116 => 35,  112 => 34,  107 => 32,  101 => 29,  97 => 27,  89 => 23,  87 => 22,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/blogger/admin/view/template/module/blogger/form.twig", "C:\\xampp\\htdocs\\OPC003L01_new\\extension\\blogger\\admin\\view\\template\\module\\blogger\\form.twig");
    }
}
