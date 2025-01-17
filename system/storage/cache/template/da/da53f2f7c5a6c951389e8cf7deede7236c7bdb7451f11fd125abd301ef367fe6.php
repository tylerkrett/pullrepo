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

/* extension/ishishopreassurance/admin/view/template/module/ishishopreassurance.twig */
class __TwigTemplate_e6028526cadc541d0d7962aeb7177a553865d55449c0e8c87255acb6f8a15601 extends Template
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
          <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-reply\"></i></a>
        </div>
        <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ol class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ol>
    </div>
    </div>
    <div class=\"container-fluid\">
      ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 23
        echo "      <div class=\"card panel-default\">
        <div class=\"card-header\">
          <i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
        </div>
        <div class=\"card-body\">
          <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
            <div class=\"row pt-3 pb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 36
        echo "              </div>
            </div>            
\t\t          <div class=\"row pt-3 pb-3\">
        \t\t\t <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 41
        echo ($context["entry_width"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 43
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    </div>
                  </div>
        \t\t\t  </div>
  \t\t\t         <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-height\">";
        // line 49
        echo ($context["entry_height"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 51
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
               
         <div class=\"row pt-3 pb-3\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 58
        echo ($context["entry_status"] ?? null);
        echo "</label>
          <div class=\"col-sm-10 pr-3\">
            <select name=\"status\" id=\"input-status\" class=\"form-control\">
              ";
        // line 61
        if (($context["status"] ?? null)) {
            // line 62
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 63
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 65
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 66
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 68
        echo "            </select>
          </div>
        </div>
        <div class=\"tab-pane\" id=\"tab-design\">
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 73
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
            // line 74
            echo "            <li class=\"nav-item\"><a class=\"nav-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                echo " active ";
            }
            echo "\" href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "\" aria-current=\"page\" data-bs-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 74);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 74);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 74);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 74);
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
        // line 76
        echo "          </ul>
          <div class=\"tab-content\">
           ";
        // line 78
        $context["service_row"] = 0;
        // line 79
        echo "           ";
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
            // line 80
            echo "           <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 80)) {
                echo " active ";
            }
            echo " fade show\" role=\"tabpanel\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\">
            <table id=\"images";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "\" class=\"table table-striped table-bordered table-hover\">
             <thead>
               <tr>
                 <td class=\"text-center\">";
            // line 84
            echo ($context["entry_image"] ?? null);
            echo "</td>
                 <td class=\"text-left\">";
            // line 85
            echo ($context["entry_service_title"] ?? null);
            echo "</td>
                 <td class=\"text-left\">";
            // line 86
            echo ($context["entry_desc"] ?? null);
            echo "</td>
               </tr>
             </thead>
             <tbody>
               ";
            // line 90
            if ((($__internal_compile_0 = ($context["services"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null)) {
                // line 91
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["services"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                    // line 92
                    echo "               <tr id=\"service-row";
                    echo ($context["service_row"] ?? null);
                    echo "\">

                <td class=\"text-center\">
                  <img src=\"";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "thumb", [], "any", false, false, false, 95);
                    echo "\" alt=\"\" title=\"\" id=\"thumb-image";
                    echo ($context["service_row"] ?? null);
                    echo "\" data-oc-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"img-thumbnail\"/>
                  <input type=\"hidden\" name=\"service[";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 96);
                    echo "\" id=\"input-image";
                    echo ($context["service_row"] ?? null);
                    echo "\"/>
                  <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image";
                    // line 98
                    echo ($context["service_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["service_row"] ?? null);
                    echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                    echo ($context["button_edit"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image";
                    // line 99
                    echo ($context["service_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["service_row"] ?? null);
                    echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    echo ($context["button_clear"] ?? null);
                    echo "</button>
                  </div>
                </td>
                  <td class=\"text-left\"><input type=\"text\" name=\"service[";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 102);
                    echo "\" placeholder=\"";
                    echo ($context["entry_service_title"] ?? null);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 103
                    if ((($__internal_compile_2 = (($__internal_compile_3 = ($context["error_service"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["service_row"] ?? null)] ?? null) : null)) {
                        // line 104
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_4 = (($__internal_compile_5 = ($context["error_service"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["service_row"] ?? null)] ?? null) : null);
                        echo "</div>
                  ";
                    }
                    // line 105
                    echo "</td>
                  <td class=\"text-left\"><input type=\"text\" name=\"service[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 106);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][desc]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "desc", [], "any", false, false, false, 106);
                    echo "\" placeholder=\"";
                    echo ($context["entry_service_desc"] ?? null);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 107
                    if ((($__internal_compile_6 = (($__internal_compile_7 = ($context["error_service"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["service_row"] ?? null)] ?? null) : null)) {
                        // line 108
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_8 = (($__internal_compile_9 = ($context["error_service"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["service_row"] ?? null)] ?? null) : null);
                        echo "</div>
                  ";
                    }
                    // line 109
                    echo "</td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#service-row";
                    // line 110
                    echo ($context["service_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
                    // line 112
                    $context["service_row"] = (($context["service_row"] ?? null) + 1);
                    // line 113
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "                ";
            }
            // line 115
            echo "              </tbody>             

              <tfoot>
               <tr>
                <td colspan=\"3\"></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"addService('";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
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
        // line 126
        echo "      </div>
    </div>
  </form>
</div>
</div>
</div>
<style>
/* The switch - the box around the slider */
.show-title{
\tdisplay:none;
}
.show{
\tdisplay:block;
}
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
<script type=\"text/javascript\"><!--
  \$(\".checkbox\").change(function() {
      if(this.checked) {
         \$('.show-title').attr(\"style\", \"display: block !important\");
      }else{
  \t\t\$('.show-title').attr(\"style\", \"display: none !important\");
  \t}
  });

  var service_row = ";
        // line 221
        echo ($context["service_row"] ?? null);
        echo ";

  function addService(language_id) {
  html  = '<tr id=\"service-row' + service_row + '\">';
  html += '<td class=\"text-center\"><img src=\"";
        // line 225
        echo twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "thumb", [], "any", false, false, false, 225);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + service_row + '\"  data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"img-thumbnail\"/><input type=\"hidden\" name=\"service[' + language_id + '][' + service_row + '][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "image", [], "any", false, false, false, 225);
        echo "\" id=\"input-image' + service_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image' + service_row + '\" data-oc-thumb=\"#thumb-image' + service_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button><button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image' + service_row + '\" data-oc-thumb=\"#thumb-image' + service_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></td>';

   html += '  <td class=\"text-left\"><input type=\"text\" name=\"service[' + language_id + '][' + service_row + '][title]\" value=\"\" placeholder=\"";
        // line 227
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
   html += '  <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"service[' + language_id + '][' + service_row + '][desc]\" value=\"\" placeholder=\"";
        // line 228
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
   html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#service-row' + service_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 229
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
   html += '</tr>';
   
   \$('#images' + language_id + ' tbody').append(html);
   
   service_row++;
 }
//--></script>
</div>

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
        // line 270
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishishopreassurance/admin/view/template/module/ishishopreassurance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 270,  567 => 229,  563 => 228,  559 => 227,  546 => 225,  539 => 221,  442 => 126,  420 => 120,  413 => 115,  410 => 114,  404 => 113,  402 => 112,  395 => 110,  392 => 109,  386 => 108,  384 => 107,  374 => 106,  371 => 105,  365 => 104,  363 => 103,  353 => 102,  343 => 99,  335 => 98,  324 => 96,  316 => 95,  309 => 92,  304 => 91,  302 => 90,  295 => 86,  291 => 85,  287 => 84,  281 => 81,  272 => 80,  254 => 79,  252 => 78,  248 => 76,  219 => 74,  202 => 73,  195 => 68,  190 => 66,  185 => 65,  180 => 63,  175 => 62,  173 => 61,  167 => 58,  155 => 51,  150 => 49,  139 => 43,  134 => 41,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishishopreassurance/admin/view/template/module/ishishopreassurance.twig", "C:\\xampp\\htdocs\\OPC052L03\\extension\\ishishopreassurance\\admin\\view\\template\\module\\ishishopreassurance.twig");
    }
}
