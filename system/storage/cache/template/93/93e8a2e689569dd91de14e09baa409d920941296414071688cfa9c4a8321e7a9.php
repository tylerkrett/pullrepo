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

/* extension/blogger/admin/view/template/module/blogger.twig */
class __TwigTemplate_13ac77f99674aef0c5eaccd7de8e22c199c0d17f48b1ee4dece04bc9a8791c83 extends Template
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
                    <i class=\"fas fa-save\"></i>
                </button>
                <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\">
                    <i class=\"fas fa-reply\"></i>
                </a>
            </div>
            <h1>";
        // line 13
        echo ($context["heading_title1"] ?? null);
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
            echo "            <div class=\"alert alert-danger alert-dismissible\">
                <i class=\"fa fa-exclamation-circle\"></i> 
                ";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 29
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>
                ";
            // line 31
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        // line 35
        echo "        <div class=\"alert alert-info alert-dismissible\">
            <i class=\"fa fa-info-circle\"></i> 
            ";
        // line 37
        echo ($context["text_view_list"] ?? null);
        echo "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>   
        <div class=\"card\">
            <div class=\"card-header\">
                <i class=\"fas fa-pencil-alt\"></i> ";
        // line 42
        echo ($context["text_edit"] ?? null);
        echo "
            </div>
            <div class=\"card-body\">
                <form action=\"";
        // line 45
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-horizontal\">
                    <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 46
        echo ($context["module_id"] ?? null);
        echo "\" />
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 48
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 50
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                ";
        // line 51
        if (($context["error_name"] ?? null)) {
            // line 52
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 54
        echo "                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 57);
        echo "\">";
        echo ($context["entry_heading"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 60
            echo "                                    <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 60);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 60);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 60);
            echo "\" /></span>
                                        <input type=\"text\" name=\"title[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_heading"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" />
                                        ";
            // line 62
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) {
                // line 63
                echo "                                            <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null);
                echo "</div>
                                        ";
            }
            // line 65
            echo "                                    </div> 
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </div>
                        </div>
                        <div class=\"row mb-3 required\">
                            <label class=\"col-sm-2 col-form-label\" for=\"input-column\">";
        // line 70
        echo ($context["entry_column"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                            <select name=\"column\" id=\"input-column\" class=\"form-control\">
                                <option value=\"1\" ";
        // line 73
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                                <option value=\"2\" ";
        // line 74
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                                <option value=\"3\" ";
        // line 75
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                                <option value=\"4\" ";
        // line 76
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
                            </select>
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 81
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"status\" id=\"input-status\" class=\"form-select\">
                                    ";
        // line 84
        if (($context["status"] ?? null)) {
            // line 85
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 86
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 88
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 89
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 91
        echo "                                </select>
                            </div>
                        </div>
                    <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-width\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 96
        echo ($context["help_image"] ?? null);
        echo "\">
                                ";
        // line 97
        echo ($context["entry_image_size"] ?? null);
        echo "
                            </span>
                        </label>
                        
                        <div class=\"col-sm-5\">
                            <input type=\"text\" name=\"width\" value=\"";
        // line 102
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                                ";
        // line 103
        if (($context["error_width"] ?? null)) {
            // line 104
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                                ";
        }
        // line 106
        echo "                        </div>
                        <div class=\"col-sm-5\">
                            <input type=\"text\" name=\"height\" value=\"";
        // line 108
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                            ";
        // line 109
        if (($context["error_height"] ?? null)) {
            // line 110
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                            ";
        }
        // line 112
        echo "                        </div>
                    </div>
                    <div class=\"row mb-3\">
                    <div class=\"row col-sm-6\">
                        <label class=\"col-sm-4 col-form-label\" for=\"input-limit\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 117
        echo ($context["help_limit"] ?? null);
        echo "\">";
        echo ($context["entry_limit"] ?? null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"limit\" value=\"";
        // line 120
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"row col-sm-6\">
                        <label class=\"col-sm-4 col-form-label\" for=\"input-char-limit\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 125
        echo ($context["help_char_limit"] ?? null);
        echo "\">
                                ";
        // line 126
        echo ($context["entry_char_limit"] ?? null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"char_limit\" value=\"";
        // line 130
        echo ($context["char_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_char_limit"] ?? null);
        echo "\" id=\"input-char-limit\" class=\"form-control\" />
                        </div>
                    </div>
                    </div>
                    <div class=\"row mb-3\">
                        <div class=\"col-sm-4 row\">
                            <label class=\"col-sm-6 col-form-label\" for=\"input-comments\">";
        // line 136
        echo ($context["entry_allow_comments"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <label class=\"switch\">
                                  ";
        // line 139
        if (($context["comments"] ?? null)) {
            // line 140
            echo "                                    <input type=\"checkbox\" name=\"comments\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-comments\" />
                                  ";
        } else {
            // line 142
            echo "                                    <input type=\"checkbox\" name=\"comments\" value=\"1\" class=\"primary\" id=\"input-comments\" />
                                  ";
        }
        // line 144
        echo "                                  <span class=\"slider round\"></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"col-sm-4 row\">
                            <label class=\"col-sm-6 col-form-label\" for=\"input-login\">";
        // line 149
        echo ($context["entry_login_required"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <label class=\"switch\">
                                  ";
        // line 152
        if (($context["login"] ?? null)) {
            // line 153
            echo "                                    <input type=\"checkbox\" name=\"login\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-login\" />
                                  ";
        } else {
            // line 155
            echo "                                    <input type=\"checkbox\" name=\"login\" value=\"1\" class=\"primary\" id=\"input-login\" />
                                  ";
        }
        // line 157
        echo "                                  <span class=\"slider round\"></span>
                                </label>
                            </div>
                        </div>
                        <div class=\"col-sm-4 row\">
                            <label class=\"col-sm-6 col-form-label\" for=\"input-auto_approve\">";
        // line 162
        echo ($context["entry_auto_approve"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <label class=\"switch\">
                                  ";
        // line 165
        if (($context["auto_approve"] ?? null)) {
            // line 166
            echo "                                    <input type=\"checkbox\" name=\"auto_approve\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-auto_approve\" />
                                  ";
        } else {
            // line 168
            echo "                                    <input type=\"checkbox\" name=\"auto_approve\" value=\"1\" class=\"primary\" id=\"input-auto_approve\" />
                                  ";
        }
        // line 170
        echo "                                  <span class=\"slider round\"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead>
                            <tr>
                                <td class=\"text-left\">";
        // line 178
        echo ($context["column_title"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 179
        echo ($context["column_status"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 180
        echo ($context["column_comments"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 181
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 182
        echo ($context["column_action"] ?? null);
        echo "</td>
                            </tr>
                        </thead>
                    ";
        // line 185
        if (($context["blogger_entries"] ?? null)) {
            // line 186
            echo "                        <tbody>
                            ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogger_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 188
                echo "                                <tr>
                                    <td class=\"text-left\">";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 189);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "status", [], "any", false, false, false, 190);
                echo "</td>
                                    <td class=\"text-right\">";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "total_comments", [], "any", false, false, false, 191);
                echo "</td>
                                    <td class=\"text-right\">";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "date_added", [], "any", false, false, false, 192);
                echo "</td>
                                    <td class=\"text-right\">
                                        <a href=\"";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "edit", [], "any", false, false, false, 194);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </a>
                                        
                                        <a href=\"";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "comments", [], "any", false, false, false, 198);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_comments"] ?? null);
                echo "\" class=\"btn btn-info\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a onclick=\"confirm('";
                // line 201
                echo ($context["text_confirm"] ?? null);
                echo "')?location.href='";
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "delete", [], "any", false, false, false, 201);
                echo "' : false;\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\">
                                            <i class=\"fa fa-minus-circle\"></i>
                                        </a>
                                        
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "                        </tbody>
                    ";
        }
        // line 210
        echo "                        <tfoot>
                            ";
        // line 211
        if (($context["add_blog"] ?? null)) {
            // line 212
            echo "                                <tr>
                                    <td class=\"text-end\" colspan=\"5\">
                                        <button type=\"button\" onclick=\"location = '";
            // line 214
            echo ($context["add_blog"] ?? null);
            echo "';\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add_blog"] ?? null);
            echo "\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-plus-circle\"></i>
                                        </button></td>
                                </tr>
                             ";
        } else {
            // line 219
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"5\">";
            // line 220
            echo ($context["text_save_module"] ?? null);
            echo "</td>
                                </tr>
                            ";
        }
        // line 223
        echo "                        </tfoot>
                    </table>
                    <div class=\"row\">
                        <div class=\"pagination col-sm-6 text-start\">";
        // line 226
        echo ($context["pagination"] ?? null);
        echo "</div>
                        <div class=\"col-sm-6 text-end\">";
        // line 227
        echo ($context["results"] ?? null);
        echo "</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
      }

      /* Hide default HTML checkbox */
      .switch input {display:none;}

      /* The slider */
      .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
      }

      .slider:before {
        position: absolute;
        content: \"\";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
      }
      input.default:checked + .slider {
        background-color: #444;
      }
      input.primary:checked + .slider {
        background-color: #2196F3;
      }
      input.success:checked + .slider {
        background-color: #8bc34a;
      }
      input.info:checked + .slider {
        background-color: #3de0f5;
      }
      input.warning:checked + .slider {
        background-color: #FFC107;
      }
      input.danger:checked + .slider {
        background-color: #f44336;
      }

      input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
      }

      input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
      }

      /* Rounded sliders */
      .slider.round {
        border-radius: 34px;
      }

      .slider.round:before {
        border-radius: 50%;
      }
</style>
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\">
    \$(document).ready( function() {
      \$('.themecolor').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
      change: function(hex, opacity) {
        jQuery('.panel .mail-preview iframe').contents().find(jQuery(this).attr('data-target')).css(jQuery(this).attr('data-property'), hex);
      }
        });

      });
    });
  </script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.min.js\"></script> 
";
        // line 342
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/blogger/admin/view/template/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 342,  572 => 227,  568 => 226,  563 => 223,  557 => 220,  554 => 219,  544 => 214,  540 => 212,  538 => 211,  535 => 210,  531 => 208,  514 => 201,  506 => 198,  497 => 194,  492 => 192,  488 => 191,  484 => 190,  480 => 189,  477 => 188,  473 => 187,  470 => 186,  468 => 185,  462 => 182,  458 => 181,  454 => 180,  450 => 179,  446 => 178,  436 => 170,  432 => 168,  428 => 166,  426 => 165,  420 => 162,  413 => 157,  409 => 155,  405 => 153,  403 => 152,  397 => 149,  390 => 144,  386 => 142,  382 => 140,  380 => 139,  374 => 136,  363 => 130,  356 => 126,  352 => 125,  342 => 120,  334 => 117,  327 => 112,  321 => 110,  319 => 109,  313 => 108,  309 => 106,  303 => 104,  301 => 103,  295 => 102,  287 => 97,  283 => 96,  276 => 91,  271 => 89,  266 => 88,  261 => 86,  256 => 85,  254 => 84,  248 => 81,  238 => 76,  232 => 75,  226 => 74,  220 => 73,  214 => 70,  209 => 67,  202 => 65,  196 => 63,  194 => 62,  184 => 61,  175 => 60,  171 => 59,  164 => 57,  159 => 54,  153 => 52,  151 => 51,  145 => 50,  140 => 48,  135 => 46,  131 => 45,  125 => 42,  117 => 37,  113 => 35,  106 => 31,  103 => 30,  100 => 29,  93 => 25,  89 => 23,  87 => 22,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/blogger/admin/view/template/module/blogger.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\blogger\\admin\\view\\template\\module\\blogger.twig");
    }
}
