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

/* extension/ishicategoryblock/admin/view/template/module/ishicategoryblock.twig */
class __TwigTemplate_f4247d524b654c8f8eae7b3ac0025a4767280fda6dc0a262961a2af93cc5dc30 extends Template
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
      <div class=\"card panel-default\">
         <div class=\"card-header\">
          <i class=\"fa fa-pencil\"></i> ";
        // line 20
        echo ($context["text_edit"] ?? null);
        echo "
         </div>
        <div class=\"card-body\">
          ";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
          ";
        }
        // line 28
        echo "          <div class=\"card-body\">
              <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                    ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                    ";
        }
        // line 37
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-width\">";
        // line 40
        echo ($context["entry_width"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"width\" value=\"";
        // line 42
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    ";
        // line 43
        if (($context["error_width"] ?? null)) {
            // line 44
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                    ";
        }
        // line 46
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-height\">";
        // line 49
        echo ($context["entry_height"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"height\" value=\"";
        // line 51
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    ";
        // line 52
        if (($context["error_height"] ?? null)) {
            // line 53
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                    ";
        }
        // line 55
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 58
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
        // line 61
        if (($context["status"] ?? null)) {
            // line 62
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 63
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 65
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 66
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 68
        echo "                    </select>
                  </div>
                </div>
                <br />
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
            echo "                  <li class=\"nav-item\"><a class=\"nav-link ";
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
        echo "                </ul>
                <div class=\"tab-content\">
                  ";
        // line 78
        $context["image_row"] = 0;
        // line 79
        echo "                  ";
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
            echo "                  <div class=\"tab-pane ";
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
                          <td class=\"text-left\">";
            // line 84
            echo ($context["entry_title"] ?? null);
            echo "</td>
                          <td class=\"text-left\">";
            // line 85
            echo ($context["entry_link"] ?? null);
            echo "</td>
                          <td class=\"text-center\">";
            // line 86
            echo ($context["entry_image"] ?? null);
            echo "</td>
                          <td class=\"text-left\">";
            // line 87
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
            // line 92
            if ((($__internal_compile_0 = ($context["ishi_banners"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 92)] ?? null) : null)) {
                // line 93
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["ishi_banners"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ishibanner"]) {
                    // line 94
                    echo "                        <tr id=\"image-row";
                    echo ($context["image_row"] ?? null);
                    echo "\">
                          <td class=\"text-left\"><input type=\"text\" name=\"ishibanner[";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "title", [], "any", false, false, false, 95);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
                            ";
                    // line 96
                    if ((($__internal_compile_2 = (($__internal_compile_3 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 97
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_compile_4 = (($__internal_compile_5 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 98
                    echo "</td>
                          <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"ishibanner[";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "link", [], "any", false, false, false, 99);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                          <td class=\"text-center\">
                              <img src=\"";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "thumb", [], "any", false, false, false, 101);
                    echo "\" alt=\"\" title=\"\" id=\"thumb-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"img-thumbnail\" data-oc-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"img-thumbnail\"/>
                              <input type=\"hidden\" name=\"ishibanner[";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "image", [], "any", false, false, false, 102);
                    echo "\" id=\"input-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" />
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image";
                    // line 104
                    echo ($context["image_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                    echo ($context["button_edit"] ?? null);
                    echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image";
                    // line 105
                    echo ($context["image_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    echo ($context["button_clear"] ?? null);
                    echo "</button>
                              </div>
                          </td>
                          <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"ishibanner[";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "sort_order", [], "any", false, false, false, 108);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                          <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                    // line 109
                    echo ($context["image_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
                    // line 111
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 112
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishibanner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                        ";
            }
            // line 114
            echo "                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan=\"4\"></td>
                          <td class=\"text-left\"><button type=\"button\" onclick=\"addImage('";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
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
        // line 124
        echo "                </div>
              </form>
           </div>
        </div>
      </div>
    </div>
</div>
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
  <script type=\"text/javascript\">
    \$('#language a:first').tab('show');
  </script>
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
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'";
        // line 173
        echo ($context["ckeditor"] ?? null);
        echo "'
});
</script>
";
        // line 176
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 178
        echo ($context["image_row"] ?? null);
        echo ";

function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';\t
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishibanner[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 182
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"ishibanner[' + language_id + '][' + image_row + '][link]\" value=\"\" placeholder=\"";
        // line 183
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t\t
\thtml += '  <td class=\"text-center\"><img src=\"";
        // line 184
        echo twig_get_attribute($this->env, $this->source, ($context["ishibanner"] ?? null), "thumb", [], "any", false, false, false, 184);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + image_row + '\" class=\"img-thumbnail\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"img-thumbnail\"/><input type=\"hidden\" name=\"ishibanner[' + language_id + '][' + image_row + '][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishibanner"] ?? null), "image", [], "any", false, false, false, 184);
        echo "\" id=\"input-image' + image_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image' + image_row + '\" data-oc-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button><button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image' + image_row + '\" data-oc-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></td>';  \t
  html += '  <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"ishibanner[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 185
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 186
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#images' + language_id + ' tbody').append(html);
\t
\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script> ";
    }

    public function getTemplateName()
    {
        return "extension/ishicategoryblock/admin/view/template/module/ishicategoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 186,  547 => 185,  535 => 184,  531 => 183,  527 => 182,  520 => 178,  515 => 176,  509 => 173,  458 => 124,  436 => 118,  430 => 114,  427 => 113,  421 => 112,  419 => 111,  412 => 109,  402 => 108,  392 => 105,  384 => 104,  373 => 102,  365 => 101,  354 => 99,  351 => 98,  345 => 97,  343 => 96,  333 => 95,  328 => 94,  323 => 93,  321 => 92,  313 => 87,  309 => 86,  305 => 85,  301 => 84,  295 => 81,  286 => 80,  268 => 79,  266 => 78,  262 => 76,  233 => 74,  216 => 73,  209 => 68,  204 => 66,  199 => 65,  194 => 63,  189 => 62,  187 => 61,  181 => 58,  176 => 55,  170 => 53,  168 => 52,  162 => 51,  157 => 49,  152 => 46,  146 => 44,  144 => 43,  138 => 42,  133 => 40,  128 => 37,  122 => 35,  120 => 34,  114 => 33,  109 => 31,  104 => 29,  101 => 28,  93 => 24,  91 => 23,  85 => 20,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishicategoryblock/admin/view/template/module/ishicategoryblock.twig", "C:\\xampp\\htdocs\\OPC052L01_new\\extension\\ishicategoryblock\\admin\\view\\template\\module\\ishicategoryblock.twig");
    }
}
