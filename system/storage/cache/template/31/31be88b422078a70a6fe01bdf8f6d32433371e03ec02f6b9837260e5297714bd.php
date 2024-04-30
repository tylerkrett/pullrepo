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

/* extension/ishifaqblock/admin/view/template/module/ishifaqblock.twig */
class __TwigTemplate_42210de300af2c2c906ec697e2b63e19140d1ef79da6277a5d6cb1828e61f275 extends Template
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
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
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
        echo "      </ol>
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
        <i class=\"fa fa-pencil\"></i>";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"tab-pane\" id=\"tab-design\">
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\" ><a href=\"#tab-general\" id=\"tab1\" class=\"nav-link active\" aria-current=\"page\" data-bs-toggle=\"tab\">";
        // line 31
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-faq\" id=\"tab2\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 32
        echo ($context["entry_faq"] ?? null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                    ";
        // line 40
        if (($context["error_name"] ?? null)) {
            // line 41
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                    ";
        }
        // line 43
        echo "                  </div>
                </div>
             
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 47
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
        // line 50
        if (($context["status"] ?? null)) {
            // line 51
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 52
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 54
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 55
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 57
        echo "                    </select>
                  </div>
                </div>
              </div>

              <div class=\"tab-pane\" id=\"tab-faq\">
                <div class=\"row\">
                  <div class=\"col-sm-2\">
                    <ul class=\"nav nav-pills nav-justified\" id=\"faqstab\" style=\"display: block;\">
                      ";
        // line 66
        $context["faq_row"] = 0;
        // line 67
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_faq"]) {
            // line 68
            echo "                      <li class=\"nav-item text-start\">
                        <a class=\"nav-link ";
            // line 69
            if ((($context["faq_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" aria-current=\"page\" href=\"#tab-singlefaq";
            echo ($context["faq_row"] ?? null);
            echo "\" data-bs-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singlefaq";
            echo ($context["faq_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-singlefaq";
            echo ($context["faq_row"] ?? null);
            echo "').remove(); \$('#faqstab a:first').tab('show');\"></i>";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_faq"], "default_name", [], "any", false, false, false, 69);
            echo " </a></li>
                      ";
            // line 70
            $context["faq_row"] = (($context["faq_row"] ?? null) + 1);
            // line 71
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                      <li class=\"nav-item text-start\"><button type=\"button\" class=\"btn btn-block\" onclick=\"addfaqtab();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["entry_addfaq"] ?? null);
        echo " </button></li>
                    </ul>
                  </div>
                  <div class=\"col-sm-10\">
                     <div class=\"tab-content\" id=\"ishi_faqtabs\">";
        // line 76
        $context["faq_row"] = 0;
        // line 77
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_faqs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_faq"]) {
            // line 78
            echo "                     <div class=\"tab-pane ";
            if ((($context["faq_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" id=\"tab-singlefaq";
            echo ($context["faq_row"] ?? null);
            echo "\">

                      <div class=\"row mb-3 tab-singlefaq";
            // line 80
            echo ($context["faq_row"] ?? null);
            echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
            // line 81
            echo ($context["faq_row"] ?? null);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 84
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 84);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 84);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 84);
                echo "\" /></span>
                            <input type=\"text\" name=\"ishifaq[";
                // line 85
                echo ($context["faq_row"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                echo "]\" value=\"";
                echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["ishi_faq"], "title", [], "any", false, false, false, 85)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" id=\"input-title-";
                echo ($context["faq_row"] ?? null);
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
                echo "]\" />
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        </div>
                      </div>


                      <div class=\"row mb-3 tab-singlefaq ";
            // line 92
            echo ($context["faq_row"] ?? null);
            echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-description-";
            // line 93
            echo ($context["faq_row"] ?? null);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 96
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 96);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 96);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 96);
                echo "\" /></span>
                            <input type=\"text\" name=\"ishifaq[";
                // line 97
                echo ($context["faq_row"] ?? null);
                echo "][description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
                echo "]\" value=\"";
                echo (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["ishi_faq"], "description", [], "any", false, false, false, 97)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_description"] ?? null);
                echo "\" class=\"form-control textarea\" id=\"input-description-";
                echo ($context["faq_row"] ?? null);
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
                echo "]\" />
                            </div> 
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                        </div>
                      </div>
                     </div>
                     ";
            // line 103
            $context["faq_row"] = (($context["faq_row"] ?? null) + 1);
            // line 104
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<style>
/* The switch - the box around the slider */
.showtext{
  display:none;
}
.show{
  display:block;
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

.form-control.textarea{
  height: 120px;
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

<script type=\"text/javascript\">
function boxDisable(e, t) {
var id = e + 'show';

    if (t.is(':checked')) {
    \$('.'+id).attr(\"style\", \"display: block !important\");
    } else {
      \$('.'+id).attr(\"style\", \"display: none !important\");
    }
}
var faq_row = ";
        // line 213
        echo ($context["faq_row"] ?? null);
        echo ";
function addfaqtab() {
    var newtab = 'tab-singlefaq'+ faq_row;

    html  = '<div class=\"tab-pane\" id=\"tab-singlefaq'+ faq_row +'\">';

    html  += '<div class=\"row mb-3 tab-singlefaq'+ faq_row +'\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 220
        echo ($context["entry_title"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 223
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 224
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 224);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishifaq['+ faq_row +'][title][";
            // line 225
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 225);
            echo "]\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "    html  += '</div>';
    html  += '</div>';


    html  += '<div class=\"row mb-3 tab-singlefaq'+ faq_row +'\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 233
        echo ($context["entry_description"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 236
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 237
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 237);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 237);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 237);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishifaq['+ faq_row +'][description][";
            // line 238
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 238);
            echo "]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" class=\"form-control textarea\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "    html  += '</div>';
    html  += '</div>';
    
    \$('#tab-faq #ishi_faqtabs').append(html);
    
    \$('#faqstab > li:last-child').before('<li class=\"nav-item text-start\"><a class=\"nav-link\" href=\"#tab-singlefaq' + faq_row + '\" data-bs-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#faqstab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singlefaq' + faq_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singlefaq' + faq_row + '\\').remove();\"></i> ";
        // line 246
        echo ($context["entry_faq"] ?? null);
        echo " </li>');
     
    \$('#faqstab a[href=\\'#tab-singlefaq' + faq_row + '\\']').tab('show');

    faq_row++;

    \$('#faqstab a:first').tab('show');
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
  }
  
</script>

<script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\"><!--
    \$('#language a:first').tab('show');

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
  //--></script>
";
        // line 311
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishifaqblock/admin/view/template/module/ishifaqblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 311,  543 => 246,  536 => 241,  525 => 238,  517 => 237,  514 => 236,  510 => 235,  505 => 233,  498 => 228,  487 => 225,  479 => 224,  476 => 223,  472 => 222,  467 => 220,  457 => 213,  347 => 105,  341 => 104,  339 => 103,  334 => 100,  315 => 97,  306 => 96,  302 => 95,  295 => 93,  291 => 92,  285 => 88,  266 => 85,  257 => 84,  253 => 83,  246 => 81,  242 => 80,  232 => 78,  227 => 77,  225 => 76,  217 => 72,  211 => 71,  209 => 70,  195 => 69,  192 => 68,  187 => 67,  185 => 66,  174 => 57,  169 => 55,  164 => 54,  159 => 52,  154 => 51,  152 => 50,  146 => 47,  140 => 43,  134 => 41,  132 => 40,  126 => 39,  121 => 37,  113 => 32,  109 => 31,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifaqblock/admin/view/template/module/ishifaqblock.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\extension\\ishifaqblock\\admin\\view\\template\\module\\ishifaqblock.twig");
    }
}
