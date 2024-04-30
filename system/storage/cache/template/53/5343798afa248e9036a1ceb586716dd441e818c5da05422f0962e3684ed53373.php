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

/* extension/ishitestimonialblock/admin/view/template/module/ishitestimonialblock.twig */
class __TwigTemplate_0916b4e235d09c15b18a89c42e54c7d865d55631ef6f6ce60e5710c2ef0cbd2f extends Template
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
              <li class=\"nav-item\"><a href=\"#tab-testimonial\" id=\"tab2\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 32
        echo ($context["entry_testimonial"] ?? null);
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
                  <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 47);
        echo "\">";
        echo ($context["entry_heading"] ?? null);
        echo "</label>
                  <div class=\"col-sm-6\">
                    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 50
            echo "                      <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 50);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 50);
            echo "\" /></span>
                        <input type=\"text\" name=\"title[";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_heading"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\" />
                        ";
            // line 52
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52)] ?? null) : null)) {
                // line 53
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 55
            echo "                      </div> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"row col-sm-6\">
                      <label class=\"col-sm-4 col-form-label\" for=\"input-bg_color\">";
        // line 61
        echo ($context["entry_bg_color"] ?? null);
        echo "</label>
                      <div class=\"col-sm-8\">
                        <input type=\"text\" name=\"bg_color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 63
        echo ($context["bg_color"] ?? null);
        echo "\">
                      </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <div class=\"col-sm-6 row required\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 69
        echo ($context["entry_width"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 71
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                      ";
        // line 72
        if (($context["error_width"] ?? null)) {
            // line 73
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                      ";
        }
        // line 75
        echo "                    </div>
                  </div>
                  <div class=\"col-sm-6 row required\">
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
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                      ";
        }
        // line 84
        echo "                    </div>
                  </div>
                </div>
                <div class=\"col-sm-12 row mb-3\">
                  <div class=\"col-sm-6\">
                    <div class=\"row\">
                      <label class=\"col-sm-4 col-form-label\" for=\"input-autoplay\">";
        // line 90
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
                      <div class=\"col-sm-8\">
                        <label class=\"switch\">
                          ";
        // line 93
        if (($context["autoplay"] ?? null)) {
            // line 94
            echo "                            <input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
                          ";
        } else {
            // line 96
            echo "                            <input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
                          ";
        }
        // line 98
        echo "                          <span class=\"slider round\"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-sm-6\">
                    <div class=\"row\">
                      <label class=\"col-sm-4 col-form-label\" for=\"input-column\">";
        // line 105
        echo ($context["entry_column"] ?? null);
        echo "</label>
                      <div class=\"col-sm-8\">
                        <select name=\"column\" id=\"input-column\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 108
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                          <option value=\"2\" ";
        // line 109
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                          <option value=\"3\" ";
        // line 110
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                          <option value=\"4\" ";
        // line 111
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
                          <option value=\"6\" ";
        // line 112
        if ((($context["column"] ?? null) == 6)) {
            echo " selected=selected ";
        }
        echo ">6</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 119
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
        // line 122
        if (($context["status"] ?? null)) {
            // line 123
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 124
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 126
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 127
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 129
        echo "                    </select>
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-testimonial\">
                <div class=\"row\">
                  <div class=\"col-sm-2\">
                    <ul class=\"nav nav-pills nav-justified\" id=\"testimonialstab\" style=\"display: block;\">
                      ";
        // line 137
        $context["testimonial_row"] = 0;
        // line 138
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
            // line 139
            echo "                      <li class=\"nav-item text-start\">
                        <a class=\"nav-link ";
            // line 140
            if ((($context["testimonial_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" aria-current=\"page\" href=\"#tab-singletestimonial";
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-bs-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singletestimonial";
            echo ($context["testimonial_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-singletestimonial";
            echo ($context["testimonial_row"] ?? null);
            echo "').remove(); \$('#testimonialstab a:first').tab('show');\"></i>";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "default_name", [], "any", false, false, false, 140);
            echo " </a></li>
                      ";
            // line 141
            $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
            // line 142
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                      <li class=\"nav-item text-start\"><button type=\"button\" class=\"btn btn-block\" onclick=\"addtestimonialtab();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["entry_addtestimonial"] ?? null);
        echo " </button></li>
                    </ul>
                  </div>
                  <div class=\"col-sm-10\">
                     <div class=\"tab-content\" id=\"ishi_testimonialtabs\">";
        // line 147
        $context["testimonial_row"] = 0;
        // line 148
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
            // line 149
            echo "                     <div class=\"tab-pane ";
            if ((($context["testimonial_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" id=\"tab-singletestimonial";
            echo ($context["testimonial_row"] ?? null);
            echo "\">
                      
                      <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
            // line 152
            echo ($context["entry_image"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"image\" class=\"card image\">
                              <img src=\"";
            // line 155
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "thumb", [], "any", false, false, false, 155);
            echo "\" alt=\"\" title=\"\" id=\"thumb-testimonial-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> 
                              <input type=\"hidden\" name=\"ishitestimonial[";
            // line 156
            echo ($context["testimonial_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "image", [], "any", false, false, false, 156);
            echo "\" id=\"input-testimonial-";
            echo ($context["testimonial_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-testimonial-";
            // line 158
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-testimonial-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-testimonial-";
            // line 159
            echo ($context["testimonial_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-testimonial-";
            echo ($context["testimonial_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class=\"row mb-3 tab-singletestimonial ";
            // line 164
            echo ($context["testimonial_row"] ?? null);
            echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-description-";
            // line 165
            echo ($context["testimonial_row"] ?? null);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 168
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 168);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 168);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 168);
                echo "\" /></span>
                            <input type=\"text\" name=\"ishitestimonial[";
                // line 169
                echo ($context["testimonial_row"] ?? null);
                echo "][description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                echo "]\" value=\"";
                echo (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "description", [], "any", false, false, false, 169)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_description"] ?? null);
                echo "\" class=\"form-control textarea\" id=\"input-description-";
                echo ($context["testimonial_row"] ?? null);
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                echo "]\" />
                            </div> 
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "                        </div>
                      </div>

                      <div class=\"row mb-3 tab-singletestimonial";
            // line 175
            echo ($context["testimonial_row"] ?? null);
            echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-username-";
            // line 176
            echo ($context["testimonial_row"] ?? null);
            echo "\">";
            echo ($context["entry_username"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 179
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 179);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 179);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 179);
                echo "\" /></span>
                            <input type=\"text\" name=\"ishitestimonial[";
                // line 180
                echo ($context["testimonial_row"] ?? null);
                echo "][username][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
                echo "]\" value=\"";
                echo (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "username", [], "any", false, false, false, 180)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_username"] ?? null);
                echo "\" class=\"form-control\" id=\"input-username-";
                echo ($context["testimonial_row"] ?? null);
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
                echo "]\" />
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                        </div>
                      </div>

                      <div class=\"row mb-3 tab-singletestimonial";
            // line 186
            echo ($context["testimonial_row"] ?? null);
            echo "\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-designation-";
            // line 187
            echo ($context["testimonial_row"] ?? null);
            echo "\">";
            echo ($context["entry_designation"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 190
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 190);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 190);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 190);
                echo "\" /></span>
                            <input type=\"text\" name=\"ishitestimonial[";
                // line 191
                echo ($context["testimonial_row"] ?? null);
                echo "][designation][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 191);
                echo "]\" value=\"";
                echo (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "designation", [], "any", false, false, false, 191)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 191)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_designation"] ?? null);
                echo "\"  class=\"form-control\" id=\"input-designation-";
                echo ($context["testimonial_row"] ?? null);
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 191);
                echo "]\" />
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                        </div>
                      </div>
                     
                     
                     </div>
                     ";
            // line 199
            $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
            // line 200
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
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
.form-control.textarea{
  height: 120px;
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
    \$('.'+id).attr(\"style\", \"display: block !important\");
    } else {
      \$('.'+id).attr(\"style\", \"display: none !important\");
    }
}
var testimonial_row = ";
        // line 308
        echo ($context["testimonial_row"] ?? null);
        echo ";
function addtestimonialtab() {
    var newtab = 'tab-singletestimonial'+ testimonial_row;

    html  = '<div class=\"tab-pane\" id=\"tab-singletestimonial'+ testimonial_row +'\">';

    html  += '<div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">";
        // line 314
        echo ($context["entry_image"] ?? null);
        echo "</label><div class=\"col-sm-10\"><div id=\"image\" class=\"card image\"><img src=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_testimonial"] ?? null), "thumb", [], "any", false, false, false, 314);
        echo "\" alt=\"\" title=\"\" id=\"thumb-testimonial' + testimonial_row + '\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/><input type=\"hidden\" name=\"ishitestimonial['+ testimonial_row +'][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_testimonial"] ?? null), "image", [], "any", false, false, false, 314);
        echo "\" id=\"input-testimonial' + testimonial_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-testimonial' + testimonial_row + '\" data-oc-thumb=\"#thumb-testimonial' + testimonial_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button> <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-testimonial' + testimonial_row + '\" data-oc-thumb=\"#thumb-testimonial' + testimonial_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></div></div></div>'

    html  += '<div class=\"row mb-3\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-description-'+ testimonial_row +'\">";
        // line 317
        echo ($context["entry_description"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 320
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 321
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 321);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 321);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 321);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishitestimonial['+ testimonial_row +'][description][";
            // line 322
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 322);
            echo "]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" class=\"form-control textarea\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 tab-singletestimonial'+ testimonial_row +'\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 329
        echo ($context["entry_username"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 332
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 333
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 333);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 333);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 333);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishitestimonial['+ testimonial_row +'][username][";
            // line 334
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 334);
            echo "]\" placeholder=\"";
            echo ($context["entry_username"] ?? null);
            echo "\" class=\"form-control\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 tab-singletestimonial'+ testimonial_row +'\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 341
        echo ($context["entry_designation"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 344
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 345
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 345);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 345);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 345);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishitestimonial['+ testimonial_row +'][designation][";
            // line 346
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 346);
            echo "]\" placeholder=\"";
            echo ($context["entry_designation"] ?? null);
            echo "\" class=\"form-control\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "    html  += '</div>';
    html  += '</div>';
    
    \$('#tab-testimonial #ishi_testimonialtabs').append(html);
    
    \$('#testimonialstab > li:last-child').before('<li class=\"nav-item text-start\"><a class=\"nav-link\" href=\"#tab-singletestimonial' + testimonial_row + '\" data-bs-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#testimonialstab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singletestimonial' + testimonial_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singletestimonial' + testimonial_row + '\\').remove();\"></i> ";
        // line 354
        echo ($context["entry_testimonial"] ?? null);
        echo " </li>');
     
    \$('#testimonialstab a[href=\\'#tab-singletestimonial' + testimonial_row + '\\']').tab('show');

    testimonial_row++;

    \$('#testimonialstab a:first').tab('show');
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

<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 392
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });
  //--></script>
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
//--></script>
";
        // line 437
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishitestimonialblock/admin/view/template/module/ishitestimonialblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  957 => 437,  909 => 392,  868 => 354,  861 => 349,  850 => 346,  842 => 345,  839 => 344,  835 => 343,  830 => 341,  824 => 337,  813 => 334,  805 => 333,  802 => 332,  798 => 331,  793 => 329,  787 => 325,  776 => 322,  768 => 321,  765 => 320,  761 => 319,  756 => 317,  740 => 314,  731 => 308,  622 => 201,  616 => 200,  614 => 199,  607 => 194,  588 => 191,  579 => 190,  575 => 189,  568 => 187,  564 => 186,  559 => 183,  540 => 180,  531 => 179,  527 => 178,  520 => 176,  516 => 175,  511 => 172,  492 => 169,  483 => 168,  479 => 167,  472 => 165,  468 => 164,  456 => 159,  448 => 158,  439 => 156,  431 => 155,  425 => 152,  414 => 149,  409 => 148,  407 => 147,  399 => 143,  393 => 142,  391 => 141,  377 => 140,  374 => 139,  369 => 138,  367 => 137,  357 => 129,  352 => 127,  347 => 126,  342 => 124,  337 => 123,  335 => 122,  329 => 119,  317 => 112,  311 => 111,  305 => 110,  299 => 109,  293 => 108,  287 => 105,  278 => 98,  274 => 96,  270 => 94,  268 => 93,  262 => 90,  254 => 84,  248 => 82,  246 => 81,  240 => 80,  235 => 78,  230 => 75,  224 => 73,  222 => 72,  216 => 71,  211 => 69,  202 => 63,  197 => 61,  191 => 57,  184 => 55,  178 => 53,  176 => 52,  166 => 51,  157 => 50,  153 => 49,  146 => 47,  140 => 43,  134 => 41,  132 => 40,  126 => 39,  121 => 37,  113 => 32,  109 => 31,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishitestimonialblock/admin/view/template/module/ishitestimonialblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishitestimonialblock\\admin\\view\\template\\module\\ishitestimonialblock.twig");
    }
}
