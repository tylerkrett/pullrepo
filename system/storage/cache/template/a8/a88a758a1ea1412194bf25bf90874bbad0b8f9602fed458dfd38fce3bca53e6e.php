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

/* extension/ishistoreinfoblock/admin/view/template/module/ishistoreinfoblock.twig */
class __TwigTemplate_ec607baf69d8d5cff153a48ecf5808749e992fba91625e9141f012f062eeafb9 extends Template
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
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
   <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"card panel-default\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i>";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 38
        echo ($context["entry_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"image\" class=\"card image\">
                <img src=\"";
        // line 41
        echo ($context["imagethumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                <input type=\"hidden\" name=\"image\" value=\"";
        // line 42
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                <div class=\"card-body\">
                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 44
        echo ($context["button_edit"] ?? null);
        echo "</button>
                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 45
        echo ($context["button_clear"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-column\">";
        // line 51
        echo ($context["entry_column"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"column\" id=\"input-column\" class=\"form-control\">
                <option value=\"1\" ";
        // line 54
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                <option value=\"2\" ";
        // line 55
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                <option value=\"3\" ";
        // line 56
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                <option value=\"4\" ";
        // line 57
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
              </select>
            </div>
          </div>
            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-alignment\">";
        // line 62
        echo ($context["entry_alignment"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"alignment\" id=\"input-alignment\" class=\"form-control\"> 
                  ";
        // line 65
        if ((($context["alignment1"] ?? null) == 0)) {
            // line 66
            echo "                    <option value=\"0\">";
            echo ($context["entry_alignmentright"] ?? null);
            echo "</option>
                    <option value=\"1\" selected=\"selected\">";
            // line 67
            echo ($context["entry_alignmentleft"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 68
            echo ($context["entry_alignmentcenter"] ?? null);
            echo "</option>
                  ";
        } elseif ((        // line 69
($context["alignment"] ?? null) == 1)) {
            // line 70
            echo "                    <option value=\"0\">";
            echo ($context["entry_alignmentright"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 71
            echo ($context["entry_alignmentleft"] ?? null);
            echo "</option>
                    <option value=\"2\" selected=\"selected\">";
            // line 72
            echo ($context["entry_alignmentcenter"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 74
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["entry_alignmentright"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 75
            echo ($context["entry_alignmentleft"] ?? null);
            echo "</option>
                    <option value=\"2\">";
            // line 76
            echo ($context["entry_alignmentcenter"] ?? null);
            echo "</option>
                  ";
        }
        // line 78
        echo "                  </select>
              </div>
            </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 82
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 85
        if (($context["status"] ?? null)) {
            // line 86
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 89
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 90
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 92
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</style>
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
        // line 130
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishistoreinfoblock/admin/view/template/module/ishistoreinfoblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 130,  280 => 92,  275 => 90,  270 => 89,  265 => 87,  260 => 86,  258 => 85,  252 => 82,  246 => 78,  241 => 76,  237 => 75,  232 => 74,  227 => 72,  223 => 71,  218 => 70,  216 => 69,  212 => 68,  208 => 67,  203 => 66,  201 => 65,  195 => 62,  185 => 57,  179 => 56,  173 => 55,  167 => 54,  161 => 51,  152 => 45,  148 => 44,  143 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishistoreinfoblock/admin/view/template/module/ishistoreinfoblock.twig", "C:\\xampp\\htdocs\\OPC052L03\\extension\\ishistoreinfoblock\\admin\\view\\template\\module\\ishistoreinfoblock.twig");
    }
}
