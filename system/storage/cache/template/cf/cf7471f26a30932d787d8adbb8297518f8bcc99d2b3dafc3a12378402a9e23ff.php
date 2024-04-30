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

/* extension/ishibannerblock/admin/view/template/module/ishibannerblock.twig */
class __TwigTemplate_79cac866e09537c2cab9b8087b27131852a4d7c766945b6d29809e5aa3c73c71 extends Template
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
          <div class=\"tab-pane\" id=\"tab-design\">
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\" ><a href=\"#tab-general\" id=\"tab1\" class=\"nav-link active\" aria-current=\"page\" data-bs-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-banner\" id=\"tab2\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 31
        echo ($context["entry_banner"] ?? null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                    ";
        // line 39
        if (($context["error_name"] ?? null)) {
            // line 40
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                    ";
        }
        // line 42
        echo "                  </div>
                </div>
                <div class=\"row mb-3 required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-width\">";
        // line 45
        echo ($context["entry_width"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"width\" value=\"";
        // line 47
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                  ";
        // line 48
        if (($context["error_width"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                  ";
        }
        // line 51
        echo "                </div>
              </div>

              <div class=\"row mb-3 required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-height\">";
        // line 55
        echo ($context["entry_height"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"height\" value=\"";
        // line 57
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                  ";
        // line 58
        if (($context["error_height"] ?? null)) {
            // line 59
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                  ";
        }
        // line 61
        echo "                </div>
              </div>

              <div class=\"row mb-3 required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-column\">";
        // line 65
        echo ($context["entry_column"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"column\" id=\"input-column\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 68
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                    <option value=\"2\" ";
        // line 69
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                    <option value=\"3\" ";
        // line 70
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                    <option value=\"4\" ";
        // line 71
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-style\">";
        // line 78
        echo ($context["entry_hoverstyle"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <select name=\"style\" id=\"input-style\" class=\"form-control\">
                        <option value=\"ishi-customhover-fadeinnormal\" ";
        // line 81
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinnormal")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinnormal"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeinflip\" ";
        // line 82
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinflip")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinflip"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeinrotate\" ";
        // line 83
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeinrotate3D\" ";
        // line 84
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate3D")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate3d"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeintop\" ";
        // line 85
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintop")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintop"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeinbottom\" ";
        // line 86
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinbottom"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeintopbottom\" ";
        // line 87
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintopbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintopbottom"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-doublefadeincenter\" ";
        // line 88
        if ((($context["style"] ?? null) == "ishi-customhover-doublefadeincenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_doublefadeincenter"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeoutcenter\" ";
        // line 89
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcenter"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeoutcorner\" ";
        // line 90
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcorner"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeinoutcorner\" ";
        // line 91
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinoutcorner"] ?? null);
        echo "</option>
                        <option value=\"ishi-customhover-fadeinsquare\" ";
        // line 92
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinsquare")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinsquare"] ?? null);
        echo "</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-scale\">";
        // line 100
        echo ($context["entry_scale"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"switch\">
                  ";
        // line 103
        if (($context["scale"] ?? null)) {
            // line 104
            echo "                    <input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-scale\" />
                  ";
        } else {
            // line 106
            echo "                    <input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" id=\"input-scale\" />
                  ";
        }
        // line 108
        echo "                    <span class=\"slider round\"></span>
                  </label>
                </div>
              </div>
                <!-- <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
        // line 113
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 113);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 116
            echo "                      <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 116);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 116);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 116);
            echo "\" /></span>
                        <input type=\"text\" name=\"title[";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "\" />
                        ";
            // line 118
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null)) {
                // line 119
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 121
            echo "                      </div> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                  </div>
                </div> -->
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 126
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
        // line 129
        if (($context["status"] ?? null)) {
            // line 130
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 131
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 133
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 134
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 136
        echo "                    </select>
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-banner\">
                <div class=\"row\">
                  <div class=\"col-sm-2\">
                    <ul class=\"nav nav-pills nav-justified\" id=\"bannerstab\" style=\"display: block;\">
                      ";
        // line 144
        $context["banner_row"] = 0;
        // line 145
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_banner"]) {
            // line 146
            echo "                      <li class=\"nav-item text-start\">
                        <a class=\"nav-link ";
            // line 147
            if ((($context["banner_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" aria-current=\"page\" href=\"#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\" data-bs-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "').remove(); \$('#bannerstab a:first').tab('show');\"></i>";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "default_name", [], "any", false, false, false, 147);
            echo " </a></li>
                      ";
            // line 148
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 149
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                      <li class=\"nav-item text-start\"><button type=\"button\" class=\"btn btn-block\" onclick=\"addbannertab();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["entry_addbanner"] ?? null);
        echo " </button></li>
                    </ul>
                  </div>
                  <div class=\"col-sm-10\">
                     <div class=\"tab-content\" id=\"ishi_bannertabs\">";
        // line 154
        $context["banner_row"] = 0;
        // line 155
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_banner"]) {
            // line 156
            echo "                     <div class=\"tab-pane ";
            if ((($context["banner_row"] ?? null) == 0)) {
                echo "active";
            }
            echo "\" id=\"tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\">
                      
                      <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
            // line 159
            echo ($context["entry_image"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"image\" class=\"card image\">
                              <img src=\"";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "thumb", [], "any", false, false, false, 162);
            echo "\" alt=\"\" title=\"\" id=\"thumb-banner-";
            echo ($context["banner_row"] ?? null);
            echo "\" data-oc-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\" class=\"card-img-top\"/> 
                              <input type=\"hidden\" name=\"ishibanner[";
            // line 163
            echo ($context["banner_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "image", [], "any", false, false, false, 163);
            echo "\" id=\"input-banner-";
            echo ($context["banner_row"] ?? null);
            echo "\"/>
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-banner-";
            // line 165
            echo ($context["banner_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-banner-";
            echo ($context["banner_row"] ?? null);
            echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
            echo ($context["button_edit"] ?? null);
            echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-banner-";
            // line 166
            echo ($context["banner_row"] ?? null);
            echo "\" data-oc-thumb=\"#thumb-banner-";
            echo ($context["banner_row"] ?? null);
            echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
            echo ($context["button_clear"] ?? null);
            echo "</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-showtext\">";
            // line 173
            echo ($context["entry_showtext"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <label class=\"switch\">
                              ";
            // line 176
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 176)) {
                // line 177
                echo "                                <input type=\"checkbox\" name=\"ishibanner[";
                echo ($context["banner_row"] ?? null);
                echo "][showtext]\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showtext\" onclick=\"boxDisable('tab-singlebanner";
                echo ($context["banner_row"] ?? null);
                echo "', \$(this));\" />
                              ";
            } else {
                // line 179
                echo "                                <input type=\"checkbox\" name=\"ishibanner[";
                echo ($context["banner_row"] ?? null);
                echo "][showtext]\" value=\"1\" class=\"primary\" id=\"input-showtext\" onclick=\"boxDisable('tab-singlebanner";
                echo ($context["banner_row"] ?? null);
                echo "', \$(this));\" />
                              ";
            }
            // line 181
            echo "                              <span class=\"slider round\"></span>
                            </label>
                          </div>
                        </div>

                        <div class=\"row mb-3 showtext ";
            // line 186
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 186)) {
                echo " show ";
            }
            echo " tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "show\" ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 186)) {
                echo " style=\"display: flex\" ";
            }
            echo ">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
            // line 187
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 190
                echo "                              <div class=\"input-group\"> <span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 190);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 190);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 190);
                echo "\" /></span>
                              <input type=\"text\" name=\"ishibanner[";
                // line 191
                echo ($context["banner_row"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 191);
                echo "]\" value=\"";
                echo (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "title", [], "any", false, false, false, 191)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 191)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" id=\"input-title-";
                echo ($context["banner_row"] ?? null);
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
            echo "                          </div>
                        </div>

                        <div class=\"row mb-3 showtext ";
            // line 197
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 197)) {
                echo " show ";
            }
            echo " tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "show\" ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 197)) {
                echo " style=\"display: flex\" ";
            }
            echo ">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-link-";
            // line 198
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_titlecolor"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"ishibanner[";
            // line 200
            echo ($context["banner_row"] ?? null);
            echo "][titlecolor]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "titlecolor", [], "any", false, false, false, 200);
            echo "\" placeholder=\"";
            echo ($context["entry_titlecolor"] ?? null);
            echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/> 
                          </div>
                        </div>

                        <div class=\"row mb-3 showtext ";
            // line 204
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 204)) {
                echo " show ";
            }
            echo " tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "show\" ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 204)) {
                echo " style=\"display: flex\" ";
            }
            echo ">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-subtitle-";
            // line 205
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_subtitle"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 208
                echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 208);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 208);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 208);
                echo "\" /></span>
                              <input type=\"text\" name=\"ishibanner[";
                // line 209
                echo ($context["banner_row"] ?? null);
                echo "][subtitle][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 209);
                echo "]\" value=\"";
                echo (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "subtitle", [], "any", false, false, false, 209)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 209)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_subtitle"] ?? null);
                echo "\" class=\"form-control\" id=\"input-subtitle-";
                echo ($context["banner_row"] ?? null);
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 209);
                echo "]\" />
                              </div> 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 212
            echo "                          </div>
                        </div>

                        <div class=\"row mb-3 showtext ";
            // line 215
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 215)) {
                echo " show ";
            }
            echo " tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "show\" ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 215)) {
                echo " style=\"display: flex\" ";
            }
            echo ">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-link-";
            // line 216
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_subtitlecolor"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"ishibanner[";
            // line 218
            echo ($context["banner_row"] ?? null);
            echo "][subtitlecolor]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "subtitlecolor", [], "any", false, false, false, 218);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitlecolor"] ?? null);
            echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>  
                          </div>
                        </div>

                        <div class=\"row mb-3 showtext ";
            // line 222
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 222)) {
                echo " show ";
            }
            echo " tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "show\" ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 222)) {
                echo " style=\"display: flex\" ";
            }
            echo ">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-department-";
            // line 223
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_button"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 226
                echo "                              <div class=\"input-group\"> <span class=\"input-group-addon input-group-text\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 226);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 226);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 226);
                echo "\" /></span>
                              <input type=\"text\" name=\"ishibanner[";
                // line 227
                echo ($context["banner_row"] ?? null);
                echo "][button_name][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227);
                echo "]\" value=\"";
                echo (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "button_name", [], "any", false, false, false, 227)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_button"] ?? null);
                echo "\" class=\"form-control\" id=\"input-department-";
                echo ($context["banner_row"] ?? null);
                echo "[";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227);
                echo "]\"/>
                              </div> 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "                          </div>
                        </div>

                        <div class=\"row mb-3 showtext ";
            // line 233
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 233)) {
                echo " show ";
            }
            echo " tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "show\" ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 233)) {
                echo " style=\"display: flex\" ";
            }
            echo ">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-position\">";
            // line 234
            echo ($context["entry_position"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"ishibanner[";
            // line 236
            echo ($context["banner_row"] ?? null);
            echo "][position]\" id=\"input-position\" class=\"form-control\"> 
                              ";
            // line 237
            if ((twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "position", [], "any", false, false, false, 237) == 1)) {
                // line 238
                echo "                                <option value=\"0\">";
                echo ($context["entry_positionright"] ?? null);
                echo "</option>
                                <option value=\"1\" selected=\"selected\">";
                // line 239
                echo ($context["entry_positionleft"] ?? null);
                echo "</option>
                                <option value=\"2\">";
                // line 240
                echo ($context["entry_positioncenter"] ?? null);
                echo "</option>
                              ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 241
$context["ishi_banner"], "position", [], "any", false, false, false, 241) == 2)) {
                // line 242
                echo "                                <option value=\"1\">";
                echo ($context["entry_positionleft"] ?? null);
                echo "</option>
                                <option value=\"2\"  selected=\"selected\">";
                // line 243
                echo ($context["entry_positioncenter"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 244
                echo ($context["entry_positionright"] ?? null);
                echo "</option>
                              ";
            } else {
                // line 246
                echo "                                <option value=\"1\">";
                echo ($context["entry_positionleft"] ?? null);
                echo "</option>
                                <option value=\"2\">";
                // line 247
                echo ($context["entry_positioncenter"] ?? null);
                echo "</option>
                                <option value=\"0\"  selected=\"selected\">";
                // line 248
                echo ($context["entry_positionright"] ?? null);
                echo "</option>
                              ";
            }
            // line 250
            echo "                              </select>
                          </div>
                        </div>

                        <div class=\"row mb-3 showtext ";
            // line 254
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 254)) {
                echo " show ";
            }
            echo " tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "show\" ";
            if (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "showtext", [], "any", false, false, false, 254)) {
                echo " style=\"display: flex\" ";
            }
            echo ">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-alignment\">";
            // line 255
            echo ($context["entry_alignment"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"ishibanner[";
            // line 257
            echo ($context["banner_row"] ?? null);
            echo "][alignment]\" id=\"input-alignment\" class=\"form-control\"> 
                              ";
            // line 258
            if ((twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "alignment", [], "any", false, false, false, 258) == 1)) {
                // line 259
                echo "                                <option value=\"0\">";
                echo ($context["entry_alignmentright"] ?? null);
                echo "</option>
                                <option value=\"1\" selected=\"selected\">";
                // line 260
                echo ($context["entry_alignmentleft"] ?? null);
                echo "</option>
                                <option value=\"2\">";
                // line 261
                echo ($context["entry_alignmentcenter"] ?? null);
                echo "</option>
                              ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 262
$context["ishi_banner"], "alignment", [], "any", false, false, false, 262) == 2)) {
                // line 263
                echo "                                <option value=\"0\">";
                echo ($context["entry_alignmentright"] ?? null);
                echo "</option>
                                <option value=\"1\">";
                // line 264
                echo ($context["entry_alignmentleft"] ?? null);
                echo "</option>
                                <option value=\"2\" selected=\"selected\">";
                // line 265
                echo ($context["entry_alignmentcenter"] ?? null);
                echo "</option>
                              ";
            } else {
                // line 267
                echo "                                <option value=\"0\" selected=\"selected\">";
                echo ($context["entry_alignmentright"] ?? null);
                echo "</option>
                                <option value=\"1\">";
                // line 268
                echo ($context["entry_alignmentleft"] ?? null);
                echo "</option>
                                <option value=\"2\">";
                // line 269
                echo ($context["entry_alignmentcenter"] ?? null);
                echo "</option>
                              ";
            }
            // line 271
            echo "                              </select>
                          </div>
                        </div>

                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-link-";
            // line 276
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_link"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"ishibanner[";
            // line 278
            echo ($context["banner_row"] ?? null);
            echo "][link]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "link", [], "any", false, false, false, 278)) ? (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "link", [], "any", false, false, false, 278)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_link"] ?? null);
            echo "\" class=\"form-control\" id=\"input-link-";
            echo ($context["banner_row"] ?? null);
            echo "\"/>
                        </div>
                      </div>  
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\" for=\"input-sort-order-";
            // line 282
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_sortorder"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"ishibanner[";
            // line 284
            echo ($context["banner_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "sort_order", [], "any", false, false, false, 284)) ? (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "sort_order", [], "any", false, false, false, 284)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_sortorder"] ?? null);
            echo "\" class=\"form-control\" id=\"input-sort-order-";
            echo ($context["banner_row"] ?? null);
            echo "\"/>
                        </div>
                      </div>
                     </div>
                     ";
            // line 288
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 289
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
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
    \$('.'+id).attr(\"style\", \"display: flex !important\");
    } else {
      \$('.'+id).attr(\"style\", \"display: none !important\");
    }
}
var banner_row = ";
        // line 394
        echo ($context["banner_row"] ?? null);
        echo ";
function addbannertab() {
    var newtab = 'tab-singlebanner'+ banner_row;

    html  = '<div class=\"tab-pane\" id=\"tab-singlebanner'+ banner_row +'\">';
    
    html  += '<div class=\"row mb-3\"><label class=\"col-sm-2 col-form-label\">";
        // line 400
        echo ($context["entry_image"] ?? null);
        echo "</label><div class=\"col-sm-10\"><div id=\"image\" class=\"card image\"><img src=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_banner"] ?? null), "thumb", [], "any", false, false, false, 400);
        echo "\" alt=\"\" title=\"\" id=\"thumb-banner' + banner_row + '\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/><input type=\"hidden\" name=\"ishibanner['+ banner_row +'][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_banner"] ?? null), "image", [], "any", false, false, false, 400);
        echo "\" id=\"input-banner' + banner_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-banner' + banner_row + '\" data-oc-thumb=\"#thumb-banner' + banner_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button> <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-banner' + banner_row + '\" data-oc-thumb=\"#thumb-banner' + banner_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></div></div></div>'

    html  += '<div class=\"row mb-3\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-showtext'+ banner_row +'\">";
        // line 403
        echo ($context["entry_showtext"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    html  += '<label class=\"switch\">';
    html  += '<input type=\"checkbox\" name=\"ishibanner['+ banner_row +'][showtext]\" value=\"1\" class=\"primary\" id=\"input-showtext'+ banner_row +'\" onclick=\"boxDisable(\\''+ newtab +'\\',\$(this));\"/>';
    html  += '<span class=\"slider round\"></span>';
    html  += '</label>';
    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 showtext tab-singlebanner'+ banner_row +'show\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 413
        echo ($context["entry_title"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';                   
    ";
        // line 415
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 416
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 417
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 417);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 417);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 417);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][title][";
            // line 418
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 418);
            echo "]\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 showtext tab-singlebanner'+ banner_row +'show\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-link-";
        // line 425
        echo ($context["banner_row"] ?? null);
        echo "\">";
        echo ($context["entry_titlecolor"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">'; 
    html  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][titlecolor]\" value=\"";
        // line 427
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_banner"] ?? null), "titlecolor", [], "any", false, false, false, 427);
        echo "\" placeholder=\"";
        echo ($context["entry_titlecolor"] ?? null);
        echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>';   
    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 showtext tab-singlebanner'+ banner_row +'show\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 432
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';                   
    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 435
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 436
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 436);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 436);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 436);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][subtitle][";
            // line 437
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 437);
            echo "]\" placeholder=\"";
            echo ($context["entry_subtitle"] ?? null);
            echo "\" class=\"form-control\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 showtext tab-singlebanner'+ banner_row +'show\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-link-";
        // line 444
        echo ($context["banner_row"] ?? null);
        echo "\">";
        echo ($context["entry_subtitlecolor"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">'; 
    html  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][subtitlecolor]\" value=\"";
        // line 446
        echo twig_get_attribute($this->env, $this->source, ($context["ishi_banner"] ?? null), "subtitlecolor", [], "any", false, false, false, 446);
        echo "\" placeholder=\"";
        echo ($context["entry_subtitlecolor"] ?? null);
        echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>';    
    html  += '</div>';
    html  += '</div>';
    
    html  += '<div class=\"row mb-3 showtext tab-singlebanner'+ banner_row +'show\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-department\">";
        // line 451
        echo ($context["entry_button"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 454
            echo "    html  += '<div class=\"input-group\">';
    html  += '<span class=\"input-group-addon input-group-text\"><img src=\"language/";
            // line 455
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 455);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 455);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 455);
            echo "\" /></span>'
    html  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][button_name][";
            // line 456
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 456);
            echo "]\" value=\"\" placeholder=\"";
            echo ($context["entry_button"] ?? null);
            echo "\" class=\"form-control\"/>';
    html  += '</div>'; 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 459
        echo "    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 showtext tab-singlebanner'+ banner_row +'show\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-department\">";
        // line 463
        echo ($context["entry_position"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    html  += '<select name=\"ishibanner['+ banner_row +'][position]\" id=\"input-position\" class=\"form-control\">';
      ";
        // line 466
        if ((twig_get_attribute($this->env, $this->source, ($context["ishi_banner"] ?? null), "position", [], "any", false, false, false, 466) == 1)) {
            // line 467
            echo "    html  += '<option value=\"0\">";
            echo ($context["entry_positionright"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"1\" selected=\"selected\">";
            // line 469
            echo ($context["entry_positionleft"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"2\">";
            // line 471
            echo ($context["entry_positioncenter"] ?? null);
            echo "';
    html  += '</option>';
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 473
($context["ishi_banner"] ?? null), "position", [], "any", false, false, false, 473) == 2)) {
            // line 474
            echo "    html  += '<option value=\"1\">";
            echo ($context["entry_positionleft"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"2\"  selected=\"selected\">";
            // line 476
            echo ($context["entry_positioncenter"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"0\">";
            // line 478
            echo ($context["entry_positionright"] ?? null);
            echo "';
    html  += '</option>';
      ";
        } else {
            // line 481
            echo "    html  += '<option value=\"1\">";
            echo ($context["entry_positionleft"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"2\">";
            // line 483
            echo ($context["entry_positioncenter"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"0\"  selected=\"selected\">";
            // line 485
            echo ($context["entry_positionright"] ?? null);
            echo "';
    html  += '</option>';
      ";
        }
        // line 488
        echo "    html  += '</select>';
    html  += '</div>';
    html  += '</div>';

    html  += '<div class=\"row mb-3 showtext tab-singlebanner'+ banner_row +'show\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-department\">";
        // line 493
        echo ($context["entry_alignment"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    html  += '<select name=\"ishibanner['+ banner_row +'][alignment]\" id=\"input-alignment\" class=\"form-control\">';
      ";
        // line 496
        if ((twig_get_attribute($this->env, $this->source, ($context["ishi_banner"] ?? null), "alignment", [], "any", false, false, false, 496) == 1)) {
            // line 497
            echo "    html  += '<option value=\"0\">";
            echo ($context["entry_alignmentright"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"1\" selected=\"selected\">";
            // line 499
            echo ($context["entry_alignmentleft"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"2\">";
            // line 501
            echo ($context["entry_alignmentcenter"] ?? null);
            echo "';
    html  += '</option>';
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 503
($context["ishi_banner"] ?? null), "alignment", [], "any", false, false, false, 503) == 2)) {
            // line 504
            echo "    html  += '<option value=\"1\">";
            echo ($context["entry_alignmentleft"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"2\"  selected=\"selected\">";
            // line 506
            echo ($context["entry_alignmentcenter"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"0\">";
            // line 508
            echo ($context["entry_alignmentright"] ?? null);
            echo "';
    html  += '</option>';
      ";
        } else {
            // line 511
            echo "    html  += '<option value=\"1\">";
            echo ($context["entry_alignmentleft"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"2\">";
            // line 513
            echo ($context["entry_alignmentcenter"] ?? null);
            echo "';
    html  += '</option>';
    html  += '<option value=\"0\"  selected=\"selected\">";
            // line 515
            echo ($context["entry_alignmentright"] ?? null);
            echo "';
    html  += '</option>';
      ";
        }
        // line 518
        echo "    html  += '</select>';
    html  += '</div>';
    html  += '</div>';  
 

    html  += '<div class=\"row mb-3\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-contactno'+ banner_row +'\">";
        // line 524
        echo ($context["entry_link"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    html  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][link]\" value=\"\" placeholder=\"";
        // line 526
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" id=\"input-link'+ banner_row +'\" />';
    html  += '<span>";
        // line 527
        echo ($context["help_contact"] ?? null);
        echo "</span>';
    html  += '</div>';
    html  += '</div>';
    
    html  += '<div class=\"row mb-3\">';
    html  += '<label class=\"col-sm-2 col-form-label\" for=\"input-sort-order-'+ banner_row +'\">";
        // line 532
        echo ($context["entry_sortorder"] ?? null);
        echo "</label>';
    html  += '<div class=\"col-sm-10\">';
    html  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][sort_order]\" value=\"1\" placeholder=\"";
        // line 534
        echo ($context["entry_sortorder"] ?? null);
        echo "\" class=\"form-control\" id=\"input-sort-order-'+ banner_row +'\" />';
    html  += '</div>';
    html  += '</div>';
    
    \$('#tab-banner #ishi_bannertabs').append(html);
    
    \$('#bannerstab > li:last-child').before('<li class=\"nav-item text-start\"><a class=\"nav-link\" href=\"#tab-singlebanner' + banner_row + '\" data-bs-toggle=\"tab\" aria-expanded=\"true\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#bannerstab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singlebanner' + banner_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singlebanner' + banner_row + '\\').remove();\"></i> ";
        // line 540
        echo ($context["entry_banner"] ?? null);
        echo " </li>');
     
    \$('#bannerstab a[href=\\'#tab-singlebanner' + banner_row + '\\']').tab('show');

    banner_row++;

    \$('#bannerstab a:first').tab('show');
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
        // line 608
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishibannerblock/admin/view/template/module/ishibannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1531 => 608,  1460 => 540,  1451 => 534,  1446 => 532,  1438 => 527,  1434 => 526,  1429 => 524,  1421 => 518,  1415 => 515,  1410 => 513,  1404 => 511,  1398 => 508,  1393 => 506,  1387 => 504,  1385 => 503,  1380 => 501,  1375 => 499,  1369 => 497,  1367 => 496,  1361 => 493,  1354 => 488,  1348 => 485,  1343 => 483,  1337 => 481,  1331 => 478,  1326 => 476,  1320 => 474,  1318 => 473,  1313 => 471,  1308 => 469,  1302 => 467,  1300 => 466,  1294 => 463,  1288 => 459,  1277 => 456,  1269 => 455,  1266 => 454,  1262 => 453,  1257 => 451,  1247 => 446,  1240 => 444,  1234 => 440,  1223 => 437,  1215 => 436,  1212 => 435,  1208 => 434,  1203 => 432,  1193 => 427,  1186 => 425,  1180 => 421,  1169 => 418,  1161 => 417,  1158 => 416,  1154 => 415,  1149 => 413,  1136 => 403,  1120 => 400,  1111 => 394,  1005 => 290,  999 => 289,  997 => 288,  984 => 284,  977 => 282,  964 => 278,  957 => 276,  950 => 271,  945 => 269,  941 => 268,  936 => 267,  931 => 265,  927 => 264,  922 => 263,  920 => 262,  916 => 261,  912 => 260,  907 => 259,  905 => 258,  901 => 257,  896 => 255,  884 => 254,  878 => 250,  873 => 248,  869 => 247,  864 => 246,  859 => 244,  855 => 243,  850 => 242,  848 => 241,  844 => 240,  840 => 239,  835 => 238,  833 => 237,  829 => 236,  824 => 234,  812 => 233,  807 => 230,  788 => 227,  779 => 226,  775 => 225,  768 => 223,  756 => 222,  745 => 218,  738 => 216,  726 => 215,  721 => 212,  702 => 209,  693 => 208,  689 => 207,  682 => 205,  670 => 204,  659 => 200,  652 => 198,  640 => 197,  635 => 194,  616 => 191,  607 => 190,  603 => 189,  596 => 187,  584 => 186,  577 => 181,  569 => 179,  561 => 177,  559 => 176,  553 => 173,  539 => 166,  531 => 165,  522 => 163,  514 => 162,  508 => 159,  497 => 156,  492 => 155,  490 => 154,  482 => 150,  476 => 149,  474 => 148,  460 => 147,  457 => 146,  452 => 145,  450 => 144,  440 => 136,  435 => 134,  430 => 133,  425 => 131,  420 => 130,  418 => 129,  412 => 126,  407 => 123,  400 => 121,  394 => 119,  392 => 118,  382 => 117,  373 => 116,  369 => 115,  362 => 113,  355 => 108,  351 => 106,  347 => 104,  345 => 103,  339 => 100,  324 => 92,  316 => 91,  308 => 90,  300 => 89,  292 => 88,  284 => 87,  276 => 86,  268 => 85,  260 => 84,  252 => 83,  244 => 82,  236 => 81,  230 => 78,  218 => 71,  212 => 70,  206 => 69,  200 => 68,  194 => 65,  188 => 61,  182 => 59,  180 => 58,  174 => 57,  169 => 55,  163 => 51,  157 => 49,  155 => 48,  149 => 47,  144 => 45,  139 => 42,  133 => 40,  131 => 39,  125 => 38,  120 => 36,  112 => 31,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishibannerblock/admin/view/template/module/ishibannerblock.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\extension\\ishibannerblock\\admin\\view\\template\\module\\ishibannerblock.twig");
    }
}
