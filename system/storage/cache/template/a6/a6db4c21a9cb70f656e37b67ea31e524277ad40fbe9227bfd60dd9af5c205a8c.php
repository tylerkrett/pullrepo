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

/* extension/ishifivebannerblock/admin/view/template/module/ishifivebannerblock.twig */
class __TwigTemplate_fe687920f2ae9715640520db36a6eb972dab435cd6e8e54e09a0dc82a64aa14f extends Template
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
      \t<div class=\"float-end\">
\t        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-reply\"></i></a>
    \t</div>
      \t<h1>";
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
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
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
        <form id=\"form-module\" action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\" data-oc-toggle=\"ajax\">
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"nav-item\" ><a href=\"#tab-general\" id=\"tab1\" class=\"nav-link active\" aria-current=\"page\" data-bs-toggle=\"tab\">";
        // line 31
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-banner\" id=\"tab2\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 32
        echo ($context["entry_banner"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active fade show\" role=\"tabpanel\" id=\"tab-general\" aria-labelledby=\"tab1\">
\t\t\t\t\t  <div class=\"row mb-3 required\">
\t\t\t            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t            <div class=\"col-sm-10\">
\t\t\t              <input type=\"text\" name=\"name\" value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t              <div id=\"error-name\" class=\"invalid-feedback\"></div>
\t\t\t            </div>
\t\t\t          </div>
\t\t\t\t\t  <div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-scale\">";
        // line 44
        echo ($context["entry_scale"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t";
        // line 47
        if (($context["scale"] ?? null)) {
            // line 48
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-scale\" />
\t\t\t\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" id=\"input-scale\" />
\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"row mb-3\">
\t\t\t\t\t  \t<div class=\"col-sm-6\">
\t\t\t\t\t  \t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-style\">";
        // line 59
        echo ($context["entry_hoverstyle"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select name=\"style\" id=\"input-style\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinnormal\" ";
        // line 62
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinnormal")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinnormal"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinflip\" ";
        // line 63
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinflip")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinflip"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinrotate\" ";
        // line 64
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinrotate3D\" ";
        // line 65
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate3D")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate3d"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeintop\" ";
        // line 66
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintop")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintop"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinbottom\" ";
        // line 67
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinbottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeintopbottom\" ";
        // line 68
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintopbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintopbottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-doublefadeincenter\" ";
        // line 69
        if ((($context["style"] ?? null) == "ishi-customhover-doublefadeincenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_doublefadeincenter"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeoutcenter\" ";
        // line 70
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcenter"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeoutcorner\" ";
        // line 71
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcorner"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinoutcorner\" ";
        // line 72
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinoutcorner"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinsquare\" ";
        // line 73
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinsquare")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinsquare"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 80
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 83
        if (($context["status"] ?? null)) {
            // line 84
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 85
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 88
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" role=\"tabpanel\" id=\"tab-banner\" aria-labelledby=\"tab2\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\" id=\"bannerstab\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t";
        // line 98
        $context["banner_row"] = 0;
        // line 99
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_banner"]) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item text-start\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link ";
            // line 101
            if ((($context["banner_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" aria-current=\"page\" href=\"#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singlebanner";
            // line 102
            echo ($context["banner_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "').remove(); \$('#bannerstab a:first').tab('show');\"></i>";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "default_name", [], "any", false, false, false, 102);
            echo " 
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            // line 105
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 106
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2>Banner 1</h2>
\t\t\t\t\t\t\t\t   <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 111
        echo ($context["entry_image1"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                <div id=\"image\" class=\"card image\">
\t\t\t\t\t\t                  <img src=\"";
        // line 114
        echo ($context["imagethumb1"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image1\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t                  <input type=\"hidden\" name=\"image1\" value=\"";
        // line 115
        echo ($context["image1"] ?? null);
        echo "\" id=\"input-image1\" />
\t\t\t\t\t\t                  <div class=\"card-body\">
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image1\" data-oc-thumb=\"#thumb-image1\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 117
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image1\" data-oc-thumb=\"#thumb-image1\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 118
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t           
\t\t\t\t\t\t           \t<div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button1-";
        // line 125
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 125);
        echo "\">";
        echo ($context["entry_button1"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 128
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 128);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 128);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 128);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button1[";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["button1"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button1"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button1-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 129);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 130
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 130)] ?? null) : null)) {
                // line 131
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 133
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t\t         
\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button_link1-";
        // line 140
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 140);
        echo "\">";
        echo ($context["entry_button_link1"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 143
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 143);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 143);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 143);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button_link1[";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
            echo "]\" value=\"";
            echo (($__internal_compile_3 = ($context["button_link1"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button_link1"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button_link1-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 144);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 145
            if ((($__internal_compile_4 = ($context["error_title"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145)] ?? null) : null)) {
                // line 146
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_5 = ($context["error_title"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 148
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t\t\t<h2>Banner 2</h2>
\t\t\t\t\t\t\t\t   <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-image2\">";
        // line 155
        echo ($context["entry_image2"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                <div id=\"image\" class=\"card image\">
\t\t\t\t\t\t                  <img src=\"";
        // line 158
        echo ($context["imagethumb2"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image2\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t                  <input type=\"hidden\" name=\"image2\" value=\"";
        // line 159
        echo ($context["image2"] ?? null);
        echo "\" id=\"input-image2\" />
\t\t\t\t\t\t                  <div class=\"card-body\">
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image2\" data-oc-thumb=\"#thumb-image2\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 161
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image2\" data-oc-thumb=\"#thumb-image2\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 162
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button2-";
        // line 169
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 169);
        echo "\">";
        echo ($context["entry_button2"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 172
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 172);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 172);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 172);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button2[";
            // line 173
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 173);
            echo "]\" value=\"";
            echo (($__internal_compile_6 = ($context["button2"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 173)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button2"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button2-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 173);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 174
            if ((($__internal_compile_7 = ($context["error_title"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 174)] ?? null) : null)) {
                // line 175
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_8 = ($context["error_title"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 177
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button_link2-";
        // line 183
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 183);
        echo "\">";
        echo ($context["entry_button_link2"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 186
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 186);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 186);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 186);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button_link2[";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187);
            echo "]\" value=\"";
            echo (($__internal_compile_9 = ($context["button_link2"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button_link2"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button_link2-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 188
            if ((($__internal_compile_10 = ($context["error_title"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                // line 189
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_11 = ($context["error_title"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 189)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 191
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t<h2>Banner 3</h2>
\t\t\t\t\t\t\t\t   <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-image3\">";
        // line 198
        echo ($context["entry_image3"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                <div id=\"image\" class=\"card image\">
\t\t\t\t\t\t                  <img src=\"";
        // line 201
        echo ($context["imagethumb3"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image3\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t                  <input type=\"hidden\" name=\"image3\" value=\"";
        // line 202
        echo ($context["image3"] ?? null);
        echo "\" id=\"input-image3\" />
\t\t\t\t\t\t                  <div class=\"card-body\">
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image3\" data-oc-thumb=\"#thumb-image3\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 204
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image3\" data-oc-thumb=\"#thumb-image3\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 205
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>


\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button3-";
        // line 213
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 213);
        echo "\">";
        echo ($context["entry_button3"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 216
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 216);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 216);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 216);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button3[";
            // line 217
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 217);
            echo "]\" value=\"";
            echo (($__internal_compile_12 = ($context["button3"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 217)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button3"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button3-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 217);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 218
            if ((($__internal_compile_13 = ($context["error_title"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 218)] ?? null) : null)) {
                // line 219
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_14 = ($context["error_title"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 219)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 221
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button_link3-";
        // line 227
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 227);
        echo "\">";
        echo ($context["entry_button_link3"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 230
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 230);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 230);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 230);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button_link3[";
            // line 231
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231);
            echo "]\" value=\"";
            echo (($__internal_compile_15 = ($context["button_link3"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button_link3"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button_link3-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 232
            if ((($__internal_compile_16 = ($context["error_title"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 232)] ?? null) : null)) {
                // line 233
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_17 = ($context["error_title"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 233)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 235
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t        <h2>Banner 4</h2>
\t\t\t\t\t\t\t\t   \t<div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-image4\">";
        // line 242
        echo ($context["entry_image4"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                <div id=\"image\" class=\"card image\">
\t\t\t\t\t\t                  <img src=\"";
        // line 245
        echo ($context["imagethumb4"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image4\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t                  <input type=\"hidden\" name=\"image4\" value=\"";
        // line 246
        echo ($context["image4"] ?? null);
        echo "\" id=\"input-image4\" />
\t\t\t\t\t\t                  <div class=\"card-body\">
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image4\" data-oc-thumb=\"#thumb-image4\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 248
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image4\" data-oc-thumb=\"#thumb-image4\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 249
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button4-";
        // line 256
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 256);
        echo "\">";
        echo ($context["entry_button4"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 259
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 259);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 259);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 259);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button4[";
            // line 260
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 260);
            echo "]\" value=\"";
            echo (($__internal_compile_18 = ($context["button4"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 260)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button4"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button4-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 260);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 261
            if ((($__internal_compile_19 = ($context["error_title"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 261)] ?? null) : null)) {
                // line 262
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_20 = ($context["error_title"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 262)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 264
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t    \t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button_link4-";
        // line 270
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 270);
        echo "\">";
        echo ($context["entry_button_link4"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 273
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 273);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 273);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 273);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button_link4[";
            // line 274
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 274);
            echo "]\" value=\"";
            echo (($__internal_compile_21 = ($context["button_link4"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 274)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button_link4"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button_link4-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 274);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 275
            if ((($__internal_compile_22 = ($context["error_title"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 275)] ?? null) : null)) {
                // line 276
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_23 = ($context["error_title"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 276)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 278
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>\t\t\t

\t\t\t\t\t\t    <h2>Banner 5</h2>
\t\t\t\t\t\t\t\t   <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-image5\">";
        // line 285
        echo ($context["entry_image5"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                <div id=\"image\" class=\"card image\">
\t\t\t\t\t\t                  <img src=\"";
        // line 288
        echo ($context["imagethumb5"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image5\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t\t\t\t\t                  <input type=\"hidden\" name=\"image5\" value=\"";
        // line 289
        echo ($context["image5"] ?? null);
        echo "\" id=\"input-image5\" />
\t\t\t\t\t\t                  <div class=\"card-body\">
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image5\" data-oc-thumb=\"#thumb-image5\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 291
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t\t\t\t\t                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image5\" data-oc-thumb=\"#thumb-image5\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 292
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t                </div>
\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>


\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button5-";
        // line 300
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 300);
        echo "\">";
        echo ($context["entry_button5"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 303
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 303);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 303);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 303);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button5[";
            // line 304
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 304);
            echo "]\" value=\"";
            echo (($__internal_compile_24 = ($context["button5"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 304)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button5"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button5-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 304);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 305
            if ((($__internal_compile_25 = ($context["error_title"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 305)] ?? null) : null)) {
                // line 306
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_26 = ($context["error_title"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 306)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 308
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>

\t\t\t\t\t\t            <div class=\"row mb-3\">
\t\t\t\t\t\t              <label class=\"col-sm-2 col-form-label\" for=\"input-button_link5-";
        // line 314
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 314);
        echo "\">";
        echo ($context["entry_button_link5"] ?? null);
        echo "</label>
\t\t\t\t\t\t              <div class=\"col-sm-10\">
\t\t\t\t\t\t                ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 317
            echo "\t\t\t\t\t\t                  <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 317);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 317);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 317);
            echo "\" /></span>
\t\t\t\t\t\t                    <input type=\"text\" name=\"button_link5[";
            // line 318
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 318);
            echo "]\" value=\"";
            echo (($__internal_compile_27 = ($context["button_link5"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 318)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button_link5"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button_link5-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 318);
            echo "\" />
\t\t\t\t\t\t                    ";
            // line 319
            if ((($__internal_compile_28 = ($context["error_title"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 319)] ?? null) : null)) {
                // line 320
                echo "\t\t\t\t\t\t                      <div class=\"text-danger\">";
                echo (($__internal_compile_29 = ($context["error_title"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 320)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t                    ";
            }
            // line 322
            echo "\t\t\t\t\t\t                  </div> 
\t\t\t\t\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "\t\t\t\t\t\t              </div>
\t\t\t\t\t\t            </div>\t              

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
/* The switch - the box around the slider */
.showtext{
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
        // line 448
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishifivebannerblock/admin/view/template/module/ishifivebannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1141 => 448,  1015 => 324,  1008 => 322,  1002 => 320,  1000 => 319,  990 => 318,  981 => 317,  977 => 316,  970 => 314,  964 => 310,  957 => 308,  951 => 306,  949 => 305,  939 => 304,  930 => 303,  926 => 302,  919 => 300,  908 => 292,  904 => 291,  899 => 289,  893 => 288,  887 => 285,  880 => 280,  873 => 278,  867 => 276,  865 => 275,  855 => 274,  846 => 273,  842 => 272,  835 => 270,  829 => 266,  822 => 264,  816 => 262,  814 => 261,  804 => 260,  795 => 259,  791 => 258,  784 => 256,  774 => 249,  770 => 248,  765 => 246,  759 => 245,  753 => 242,  746 => 237,  739 => 235,  733 => 233,  731 => 232,  721 => 231,  712 => 230,  708 => 229,  701 => 227,  695 => 223,  688 => 221,  682 => 219,  680 => 218,  670 => 217,  661 => 216,  657 => 215,  650 => 213,  639 => 205,  635 => 204,  630 => 202,  624 => 201,  618 => 198,  611 => 193,  604 => 191,  598 => 189,  596 => 188,  586 => 187,  577 => 186,  573 => 185,  566 => 183,  560 => 179,  553 => 177,  547 => 175,  545 => 174,  535 => 173,  526 => 172,  522 => 171,  515 => 169,  505 => 162,  501 => 161,  496 => 159,  490 => 158,  484 => 155,  477 => 150,  470 => 148,  464 => 146,  462 => 145,  452 => 144,  443 => 143,  439 => 142,  432 => 140,  425 => 135,  418 => 133,  412 => 131,  410 => 130,  400 => 129,  391 => 128,  387 => 127,  380 => 125,  370 => 118,  366 => 117,  361 => 115,  355 => 114,  349 => 111,  343 => 107,  337 => 106,  335 => 105,  325 => 102,  317 => 101,  314 => 100,  309 => 99,  307 => 98,  297 => 90,  292 => 88,  287 => 87,  282 => 85,  277 => 84,  275 => 83,  269 => 80,  255 => 73,  247 => 72,  239 => 71,  231 => 70,  223 => 69,  215 => 68,  207 => 67,  199 => 66,  191 => 65,  183 => 64,  175 => 63,  167 => 62,  161 => 59,  152 => 52,  148 => 50,  144 => 48,  142 => 47,  136 => 44,  126 => 39,  121 => 37,  113 => 32,  109 => 31,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifivebannerblock/admin/view/template/module/ishifivebannerblock.twig", "C:\\xampp\\htdocs\\OPC003L03_new\\extension\\ishifivebannerblock\\admin\\view\\template\\module\\ishifivebannerblock.twig");
    }
}
