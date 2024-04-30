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

/* extension/ishitestimonialblock/admin/view/template/module/ishitestimonialsblock.twig */
class __TwigTemplate_c2292f4738e6dc24dc07a9f061dd9b91ce2e4a332b629017a0a0c42dcd95fccf extends Template
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
\t\t\t          <div class=\"row mb-3\">
\t\t\t          \t<div class=\"col-sm-6\">
\t\t\t          \t\t<div class=\"row\">
\t\t\t          \t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 46
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"width\" value=\"";
        // line 48
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t  ";
        // line 49
        if (($context["error_width"] ?? null)) {
            // line 50
            echo "\t\t\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t  ";
        }
        // line 52
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t          \t\t</div>
\t\t\t          \t</div> 
\t\t\t          \t<div class=\"col-sm-6\">
\t\t\t          \t\t<div class=\"row\">
\t\t\t          \t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-height\">";
        // line 57
        echo ($context["entry_height"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t  <input type=\"text\" name=\"height\" value=\"";
        // line 59
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t  ";
        // line 60
        if (($context["error_height"] ?? null)) {
            // line 61
            echo "\t\t\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t  ";
        }
        // line 63
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t          \t\t</div>
\t\t\t          \t</div> 
\t\t\t          </div>
\t\t\t          \t<div class=\"row mb-3\">
\t\t\t          \t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-autoplay\">";
        // line 70
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 73
        if (($context["autoplay"] ?? null)) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  <div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 85
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 88
        if (($context["status"] ?? null)) {
            // line 89
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 90
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 92
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 93
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" role=\"tabpanel\" id=\"tab-banner\" aria-labelledby=\"tab2\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-justified\" id=\"bannerstab\" style=\"display: block;\">
\t\t\t\t\t\t\t\t\t";
        // line 103
        $context["testimonial_row"] = 0;
        // line 104
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
            // line 105
            echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item text-start\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link ";
            // line 106
            if ((($context["testimonial_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" aria-current=\"page\" href=\"#tab-singlebanner";
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singlebanner";
            // line 107
            echo ($context["testimonial_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-singlebanner";
            echo ($context["testimonial_row"] ?? null);
            echo "').remove(); \$('#bannerstab a:first').tab('show');\"></i>";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "default_name", [], "any", false, false, false, 107);
            echo " 
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            // line 110
            $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
            // line 111
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-block\" onclick=\"addbannertab();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["entry_addbanner"] ?? null);
        echo " </button></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t <div class=\"tab-content\" id=\"ishi_bannertabs\">
\t\t\t\t\t\t\t\t \t";
        // line 117
        $context["testimonial_row"] = 0;
        // line 118
        echo "\t\t\t\t\t\t\t\t \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t <div class=\"tab-pane ";
            if ((($context["testimonial_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" id=\"tab-singlebanner";
            echo ($context["testimonial_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t \t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
            // line 121
            echo ($context["entry_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"image\" class=\"card image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 124
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "thumb", [], "any", false, false, false, 124);
            echo "\" alt=\"\" title=\"\" id=\"thumb-banner-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ishitestimonial[";
            // line 125
            echo ($context["testimonial_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "image", [], "any", false, false, false, 125);
            echo "\" id=\"input-banner-";
            echo ($context["testimonial_row"] ?? null);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-banner-";
            // line 127
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-banner-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-banner-";
            // line 128
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-banner-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t                \t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-description-";
            // line 135
            echo ($context["testimonial_row"] ?? null);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"ishitestimonial[";
            // line 137
            echo ($context["testimonial_row"] ?? null);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" rows=\"4\" id=\"input-description-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-oc-toggle=\"ckeditor\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "description", [], "any", false, false, false, 138);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3 tab-singlebanner";
            // line 143
            echo ($context["testimonial_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-username-";
            // line 144
            echo ($context["testimonial_row"] ?? null);
            echo "\">";
            echo ($context["entry_username"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishitestimonial[";
            // line 147
            echo ($context["testimonial_row"] ?? null);
            echo "][username]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "username", [], "any", false, false, false, 147);
            echo "\" placeholder=\"";
            echo ($context["entry_username"] ?? null);
            echo "\" class=\"form-control\" id=\"input-username-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3 tab-singlebanner";
            // line 152
            echo ($context["testimonial_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-designation-";
            // line 153
            echo ($context["testimonial_row"] ?? null);
            echo "\">";
            echo ($context["entry_designation"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishitestimonial[";
            // line 156
            echo ($context["testimonial_row"] ?? null);
            echo "][designation]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "designation", [], "any", false, false, false, 156);
            echo "\" placeholder=\"";
            echo ($context["entry_designation"] ?? null);
            echo "\" class=\"form-control\" id=\"input-designation-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t \t\t</div>
\t\t\t\t\t\t\t\t \t";
            // line 161
            $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
            // line 162
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</div>
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
function boxDisable(e, t) {
var id = e + 'show';

    if (t.is(':checked')) {
\t\t\$('.'+id).attr(\"style\", \"display: flex !important\");
    } else {
      \$('.'+id).attr(\"style\", \"display: none !important\");
    }
}
var testimonial_row = ";
        // line 266
        echo ($context["testimonial_row"] ?? null);
        echo ";
function addbannertab() {
\t\tvar newtab = 'tab-singlebanner'+ testimonial_row;

\t\thtml  = '<div class=\"tab-pane\" id=\"tab-singlebanner'+ testimonial_row +'\">';

\t\thtml  += '<div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">";
        // line 272
        echo ($context["entry_image"] ?? null);
        echo "</label><div class=\"col-sm-10\"><div id=\"image\" class=\"card image\"><img src=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_testimonial"] ?? null), "thumb", [], "any", false, false, false, 272);
        echo "\" alt=\"\" title=\"\" id=\"thumb-banner' + testimonial_row + '\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/><input type=\"hidden\" name=\"ishitestimonial['+ testimonial_row +'][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_testimonial"] ?? null), "image", [], "any", false, false, false, 272);
        echo "\" id=\"input-banner' + testimonial_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-banner' + testimonial_row + '\" data-oc-thumb=\"#thumb-banner' + testimonial_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button> <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-banner' + testimonial_row + '\" data-oc-thumb=\"#thumb-banner' + testimonial_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></div></div></div>'

\t\thtml  += '<div class=\"row mb-3\">';
\t\thtml  += '<label class=\"col-sm-2 col-form-label\" for=\"input-description-'+ testimonial_row +'\">";
        // line 275
        echo ($context["entry_description"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<textarea name=\"ishitestimonial['+ testimonial_row +'][description]\" placeholder=\"";
        // line 277
        echo ($context["entry_description"] ?? null);
        echo "\" rows=\"4\" id=\"input-description-'+ testimonial_row +'\" data-oc-toggle=\"ckeditor\" class=\"form-control\"></textarea>';
\t\thtml  += '</div>';
\t\thtml  += '</div>';

\t\thtml  += '<div class=\"row mb-3 tab-singlebanner'+ testimonial_row +'\">';
\t\thtml  += '<label class=\"col-sm-2 col-form-label\" for=\"input-username-'+ testimonial_row +'\">";
        // line 282
        echo ($context["entry_username"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<div class=\"input-group\">';
\t\thtml  += '<input type=\"text\" name=\"ishitestimonial['+ testimonial_row +'][username]\" placeholder=\"";
        // line 285
        echo ($context["entry_username"] ?? null);
        echo "\" class=\"form-control\" id=\"input-username-{'+ testimonial_row +'\"/>';
\t\thtml  += '</div>'; 
\t\thtml  += '</div>';
\t\thtml  += '</div>';

\t\thtml  += '<div class=\"row mb-3 tab-singlebanner'+ testimonial_row +'\">';
\t\thtml  += '<label class=\"col-sm-2 col-form-label\" for=\"input-designation-'+ testimonial_row +'\">";
        // line 291
        echo ($context["entry_designation"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<div class=\"input-group\">';
\t\thtml  += '<input type=\"text\" name=\"ishitestimonial['+ testimonial_row +'][designation]\" placeholder=\"";
        // line 294
        echo ($context["entry_designation"] ?? null);
        echo "\" class=\"form-control\" id=\"input-designation-{'+ testimonial_row +'\"/>';
\t\thtml  += '</div>'; 
\t\thtml  += '</div>';
\t\thtml  += '</div>';

\t\t\$('#tab-banner #ishi_bannertabs').append(html);
\t\t
\t\t\$('#bannerstab > li:last-child').before('<li class=\"nav-item text-start\"><a class=\"nav-link\"  href=\"#tab-singlebanner' + testimonial_row + '\" data-bs-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#bannerstab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singlebanner' + testimonial_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singlebanner' + testimonial_row + '\\').remove();\"></i> ";
        // line 301
        echo ($context["entry_banner"] ?? null);
        echo " </li>');
\t\t 
\t\t\$('#bannerstab a[href=\\'#tab-singlebanner' + testimonial_row + '\\']').tab('show');

\t\ttestimonial_row++;
\t\t\$('.themecolor').each( function() {
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
\t}
\t\$('#bannerstab a:first').tab('show');
</script>
<<script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
\t<link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
\t<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
\t<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$('#language a:first').tab('show');
\t</script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready( function() {
\t\t\$('.color').each( function() {
\t\t\t\$(this).minicolors({
\t\t\tcontrol: \$(this).attr('data-control') || 'hue',
\t\t\tdefaultValue: \$(this).attr('data-defaultValue') || '',
\t\t\tformat: \$(this).attr('data-format') || 'hex',
\t\t\tkeywords: \$(this).attr('data-keywords') || '',
\t\t\tinline: \$(this).attr('data-inline') === 'true',
\t\t\tletterCase: \$(this).attr('data-letterCase') || 'lowercase',
\t\t\topacity: \$(this).attr('data-opacity'),
\t\t\tposition: \$(this).attr('data-position') || 'bottom',
\t\t\tswatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
\t\t\tchange: function(value, opacity) {
\t\t\t\tif( !value ) return;
\t\t\t\tif( opacity ) value += ', ' + opacity;
\t\t\t\tif( typeof console === 'object' ) {
\t\t\t\tconsole.log(value);
\t\t\t\t}
\t\t\t},
\t\t\ttheme: 'bootstrap',
\t\t\t});
\t\t});
\t\t});
\t</script>
\t<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'";
        // line 370
        echo ($context["ckeditor"] ?? null);
        echo "'
});
//--></script>
";
        // line 373
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishitestimonialblock/admin/view/template/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 373,  691 => 370,  619 => 301,  609 => 294,  603 => 291,  594 => 285,  588 => 282,  580 => 277,  575 => 275,  559 => 272,  550 => 266,  445 => 163,  439 => 162,  437 => 161,  423 => 156,  415 => 153,  411 => 152,  397 => 147,  389 => 144,  385 => 143,  377 => 138,  369 => 137,  362 => 135,  348 => 128,  340 => 127,  331 => 125,  323 => 124,  317 => 121,  307 => 119,  302 => 118,  300 => 117,  291 => 112,  285 => 111,  283 => 110,  273 => 107,  265 => 106,  262 => 105,  257 => 104,  255 => 103,  245 => 95,  240 => 93,  235 => 92,  230 => 90,  225 => 89,  223 => 88,  217 => 85,  208 => 78,  204 => 76,  200 => 74,  198 => 73,  192 => 70,  183 => 63,  177 => 61,  175 => 60,  169 => 59,  164 => 57,  157 => 52,  151 => 50,  149 => 49,  143 => 48,  138 => 46,  126 => 39,  121 => 37,  113 => 32,  109 => 31,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishitestimonialblock/admin/view/template/module/ishitestimonialsblock.twig", "C:\\xampp\\htdocs\\OPC001L01\\extension\\ishitestimonialblock\\admin\\view\\template\\module\\ishitestimonialsblock.twig");
    }
}
