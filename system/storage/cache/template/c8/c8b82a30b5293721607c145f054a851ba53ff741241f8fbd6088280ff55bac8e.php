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

/* extension/ishispecialproductblock/admin/view/template/module/ishispecialblock.twig */
class __TwigTemplate_f4032941839c5b4e9dea2f272fb374ff1288b199f75b20bcce03dfdcc208ccf4 extends Template
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
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"card panel-default\">
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
          <div class=\"row mb-3\">
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
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 39);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "                <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            echo "\" /></span>
                  <input type=\"text\" name=\"title[";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\" />
                  ";
            // line 44
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null)) {
                // line 45
                echo "                    <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 47
            echo "                </div> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-desc-";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 52);
        echo "\">";
        echo ($context["entry_desc"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 55
            echo "                <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 55);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 55);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55);
            echo "\" /></span>
                  <input type=\"text\" name=\"desc[";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "]\" value=\"";
            echo (($__internal_compile_3 = ($context["desc"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_heading"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "\" />
                  ";
            // line 57
            if ((($__internal_compile_4 = ($context["error_title"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null)) {
                // line 58
                echo "                    <div class=\"text-danger\">";
                echo (($__internal_compile_5 = ($context["error_title"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 60
            echo "                </div> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
      \t\t  <div class=\"col-sm-6\">
              <div class=\"row\">
                  <label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 67
        echo ($context["entry_width"] ?? null);
        echo "</label>
                  <div class=\"col-sm-8\">
                    <input type=\"text\" name=\"width\" value=\"";
        // line 69
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    ";
        // line 70
        if (($context["error_width"] ?? null)) {
            // line 71
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                    ";
        }
        // line 73
        echo "                  </div>
              </div>    
      \t\t\t</div>
      \t\t\t<div class=\"col-sm-6\">
              <div class=\"row\">
                  <label class=\"col-sm-4 col-form-label\" for=\"input-height\">";
        // line 78
        echo ($context["entry_height"] ?? null);
        echo "</label>
                  <div class=\"col-sm-8\">
                    <input type=\"text\" name=\"height\" value=\"";
        // line 80
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    ";
        // line 81
        if (($context["error_height"] ?? null)) {
            // line 82
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                    ";
        }
        // line 84
        echo "                  </div>
              </div>
            </div>  
      </div>
\t\t  <div class=\"row mb-3\">
\t\t\t<div class=\"col-sm-6\">
        <div class=\"row\">
  \t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-limit\">";
        // line 91
        echo ($context["entry_limit"] ?? null);
        echo "</label>
  \t\t\t\t<div class=\"col-sm-8\">
  \t\t\t\t  <input type=\"text\" name=\"limit\" value=\"";
        // line 93
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
  \t\t\t\t</div>
        </div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
        <div class=\"row\">
\t\t\t\t    <label class=\"col-sm-4 col-form-label\" for=\"input-product-row\">";
        // line 99
        echo ($context["entry_productrow"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"product_row\" value=\"";
        // line 101
        echo ($context["product_row"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_productrow"] ?? null);
        echo "\" id=\"input-product-row\" class=\"form-control\" />
            </div>
        </div>    
\t\t\t</div>
          </div>
\t\t  <div class=\"row mb-3\">
  \t\t  <div class=\"col-sm-6\">
          <div class=\"row\">
              <label class=\"col-sm-4 col-form-label\" for=\"input-image-hover\">";
        // line 109
        echo ($context["entry_image_hover"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
        \t\t\t\t<label class=\"switch\">
        \t\t\t\t\t";
        // line 112
        if (($context["hover_image"] ?? null)) {
            // line 113
            echo "        \t\t\t\t\t\t<input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-image-hover\" />
        \t\t\t\t\t";
        } else {
            // line 115
            echo "        \t\t\t\t\t\t<input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" id=\"input-image-hover\" />
        \t\t\t\t\t";
        }
        // line 117
        echo "        \t\t\t\t\t<span class=\"slider round\"></span>
        \t\t\t\t</label>
              </div>
          </div>    
  \t\t\t </div>
\t\t\t</div>
\t\t\t<div class=\"row mb-3\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-product-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 124
        echo ($context["help_productcolumn"] ?? null);
        echo "\">";
        echo ($context["entry_product_column"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-desktop\">";
        // line 128
        echo ($context["entry_desktop"] ?? null);
        echo "</span>
                <input type=\"text\" name=\"desktop_column\" value=\"";
        // line 129
        echo ($context["desktop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_desktop"] ?? null);
        echo "\" id=\"input-desktop\" class=\"form-control col-sm-8\" />
              </div> 
            </div>
            <div class=\"col-sm-3\">
              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-laptop\">";
        // line 133
        echo ($context["entry_laptop"] ?? null);
        echo "</span>
                <input type=\"text\" name=\"laptop_column\" value=\"";
        // line 134
        echo ($context["laptop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_laptop"] ?? null);
        echo "\" id=\"input-laptop\" class=\"form-control col-sm-8\" />
              </div>
            </div>
            <div class=\"col-sm-3\">
              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-tablet\">";
        // line 138
        echo ($context["entry_tablet"] ?? null);
        echo "</span>
                <input type=\"text\" name=\"tablet_column\" value=\"";
        // line 139
        echo ($context["tablet_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tablet"] ?? null);
        echo "\" id=\"input-tablet\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-3\">
            <div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-mobile\">";
        // line 143
        echo ($context["entry_mobile"] ?? null);
        echo "</span>
  \t\t\t\t    <input type=\"text\" name=\"mobile_column\" value=\"";
        // line 144
        echo ($context["mobile_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mobile"] ?? null);
        echo "\" id=\"input-mobile\" class=\"form-control\" />
              </div>
            </div>
          </div>
        </div>
\t\t  </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 151
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 154
        if (($context["status"] ?? null)) {
            // line 155
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 156
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 158
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 159
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 161
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
/* The switch - the box around the slider */
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
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
   <script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 260
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>
<script type=\"text/javascript\">
\$(document).ready( function() {
      \$('.color').each( function() {
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
        });
      });
    });
</script>
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
        // line 320
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/ishispecialproductblock/admin/view/template/module/ishispecialblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 320,  540 => 260,  439 => 161,  434 => 159,  429 => 158,  424 => 156,  419 => 155,  417 => 154,  411 => 151,  399 => 144,  395 => 143,  386 => 139,  382 => 138,  373 => 134,  369 => 133,  360 => 129,  356 => 128,  347 => 124,  338 => 117,  334 => 115,  330 => 113,  328 => 112,  322 => 109,  309 => 101,  304 => 99,  293 => 93,  288 => 91,  279 => 84,  273 => 82,  271 => 81,  265 => 80,  260 => 78,  253 => 73,  247 => 71,  245 => 70,  239 => 69,  234 => 67,  227 => 62,  220 => 60,  214 => 58,  212 => 57,  202 => 56,  193 => 55,  189 => 54,  182 => 52,  177 => 49,  170 => 47,  164 => 45,  162 => 44,  152 => 43,  143 => 42,  139 => 41,  132 => 39,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishispecialproductblock/admin/view/template/module/ishispecialblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishispecialproductblock\\admin\\view\\template\\module\\ishispecialblock.twig");
    }
}
