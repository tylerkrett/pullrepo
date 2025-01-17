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

/* extension/ishispecialdealblock/admin/view/template/module/ishispecialdeals.twig */
class __TwigTemplate_bcd6b5ec770ee4157c920154acbee9b66bea6be278935ad795c5a3b4a7ca3a2a extends Template
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
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 36
        echo "              </div>
            </div>
            
         
         <div class=\"row mb-3\">
          <div class=\"col-sm-6\">
            <div class=\"row\">
              <label class=\"col-sm-4 col-form-label\" for=\"input-product-row\"><span data-toggle=\"tooltip\" title=\"";
        // line 43
        echo ($context["help_productrow"] ?? null);
        echo "\">";
        echo ($context["entry_productrow"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"product_row\" value=\"";
        // line 45
        echo ($context["product_row"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_productrow"] ?? null);
        echo "\" id=\"input-product-row\" class=\"form-control\" />
              </div>
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"row\">
              <label class=\"col-sm-4 col-form-label\" for=\"input-limit\">";
        // line 51
        echo ($context["entry_limit"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"limit\" value=\"";
        // line 53
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
              </div>
            </div>
          </div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-6\">
            <div class=\"row\">
              <label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 61
        echo ($context["entry_width"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"width\" value=\"";
        // line 63
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                ";
        // line 64
        if (($context["error_width"] ?? null)) {
            // line 65
            echo "                <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                ";
        }
        // line 67
        echo "              </div>
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"row\">
              <label class=\"col-sm-4 col-form-label\" for=\"input-height\">";
        // line 72
        echo ($context["entry_height"] ?? null);
        echo "</label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"height\" value=\"";
        // line 74
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                ";
        // line 75
        if (($context["error_height"] ?? null)) {
            // line 76
            echo "                <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                ";
        }
        // line 78
        echo "              </div>
            </div>
          </div>
        </div>
  
        <div class=\"row mb-3\">
         <div class=\"col-sm-6\">
            <div class=\"row\">
               <label class=\"col-sm-4 col-form-label\" for=\"input-review\">";
        // line 86
        echo ($context["entry_review"] ?? null);
        echo "</label>
               <div class=\"col-sm-8\">
                <label class=\"switch\">
                  ";
        // line 89
        if (($context["review"] ?? null)) {
            // line 90
            echo "                  <input type=\"checkbox\" name=\"review\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-review\" />
                  ";
        } else {
            // line 92
            echo "                  <input type=\"checkbox\" name=\"review\" value=\"1\" class=\"primary\" id=\"input-review\" />
                  ";
        }
        // line 94
        echo "                  <span class=\"slider round\"></span>
                </label>
              </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"row\">
            <label class=\"col-sm-4 col-form-label\" for=\"input-description\">";
        // line 101
        echo ($context["entry_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <label class=\"switch\">
                ";
        // line 104
        if (($context["description"] ?? null)) {
            // line 105
            echo "                <input type=\"checkbox\" name=\"description\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-description\" />
                ";
        } else {
            // line 107
            echo "                <input type=\"checkbox\" name=\"description\" value=\"1\" class=\"primary\" id=\"input-description\" />
                ";
        }
        // line 109
        echo "                <span class=\"slider round\"></span>
              </label>
            </div>
          </div>
        </div>
    </div>
    <div class=\"row mb-3\">
     <div class=\"col-sm-6\">
      <div class=\"row\">
         <label class=\"col-sm-4 col-form-label\" for=\"input-description\">";
        // line 118
        echo ($context["entry_counter"] ?? null);
        echo "</label>
         <div class=\"col-sm-8\">
          <label class=\"switch\">
            ";
        // line 121
        if (($context["counter"] ?? null)) {
            // line 122
            echo "            <input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-counter\" />
            ";
        } else {
            // line 124
            echo "            <input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" id=\"input-counter\" />
            ";
        }
        // line 126
        echo "            <span class=\"slider round\"></span>
          </label>
        </div>
      </div>
    </div>
    <div class=\"col-sm-6\">
      <div class=\"row\">
         <label class=\"col-sm-4 col-form-label\" for=\"input-left-product\">";
        // line 133
        echo ($context["entry_left_product"] ?? null);
        echo "</label>
         <div class=\"col-sm-8\">
            <label class=\"switch\">
              ";
        // line 136
        if (($context["left_product"] ?? null)) {
            // line 137
            echo "              <input type=\"checkbox\" name=\"left_product\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-left-product\" />
              ";
        } else {
            // line 139
            echo "              <input type=\"checkbox\" name=\"left_product\" value=\"1\" class=\"primary\" id=\"input-left-product\" />
              ";
        }
        // line 141
        echo "              <span class=\"slider round\"></span>
            </label>
          </div>
      </div>
  </div>
</div>
<div class=\"row mb-3\">
  <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 148
        echo ($context["entry_status"] ?? null);
        echo "</label>
  <div class=\"col-sm-10\">
    <select name=\"status\" id=\"input-status\" class=\"form-control\">
      ";
        // line 151
        if (($context["status"] ?? null)) {
            // line 152
            echo "      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
      <option value=\"0\">";
            // line 153
            echo ($context["text_disabled"] ?? null);
            echo "</option>
      ";
        } else {
            // line 155
            echo "      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
      <option value=\"0\" selected=\"selected\">";
            // line 156
            echo ($context["text_disabled"] ?? null);
            echo "</option>
      ";
        }
        // line 158
        echo "    </select>
  </div>
</div>

                <h2>Banner 1</h2>
                   <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 164
        echo ($context["entry_image1"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"image\" class=\"card image\">
                              <img src=\"";
        // line 167
        echo ($context["imagethumb1"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image1\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                              <input type=\"hidden\" name=\"image1\" value=\"";
        // line 168
        echo ($context["image1"] ?? null);
        echo "\" id=\"input-image1\" />
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image1\" data-oc-thumb=\"#thumb-image1\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 170
        echo ($context["button_edit"] ?? null);
        echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image1\" data-oc-thumb=\"#thumb-image1\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 171
        echo ($context["button_clear"] ?? null);
        echo "</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-title1-";
        // line 177
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 177);
        echo "\">";
        echo ($context["entry_title1"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 180
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 180);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 180);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 180);
            echo "\" /></span>
                                <input type=\"text\" name=\"title1[";
            // line 181
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title1"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title1"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title1-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 181);
            echo "\" />
                                ";
            // line 182
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 182)] ?? null) : null)) {
                // line 183
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 183)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 185
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-title-color1\">";
        // line 192
        echo ($context["entry_title_color1"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"title_color1\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 194
        echo ($context["title_color1"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-subtitle1-";
        // line 200
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 200);
        echo "\">";
        echo ($context["entry_subtitle1"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 203
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 203);
            echo "\" /></span>
                                <input type=\"text\" name=\"subtitle1[";
            // line 204
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 204);
            echo "]\" value=\"";
            echo (($__internal_compile_3 = ($context["subtitle1"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 204)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle1"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle1-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 204);
            echo "\" />
                                ";
            // line 205
            if ((($__internal_compile_4 = ($context["error_title"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 205)] ?? null) : null)) {
                // line 206
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_5 = ($context["error_title"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 208
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-subtitle-color1\">";
        // line 215
        echo ($context["entry_subtitle_color1"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"subtitle_color1\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 217
        echo ($context["subtitle_color1"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-button1-";
        // line 223
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 223);
        echo "\">";
        echo ($context["entry_button1"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 226
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 226);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 226);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 226);
            echo "\" /></span>
                                <input type=\"text\" name=\"button1[";
            // line 227
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227);
            echo "]\" value=\"";
            echo (($__internal_compile_6 = ($context["button1"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button1"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button1-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 227);
            echo "\" />
                                ";
            // line 228
            if ((($__internal_compile_7 = ($context["error_title"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 228)] ?? null) : null)) {
                // line 229
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_8 = ($context["error_title"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 229)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 231
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                          </div>
                        </div>
                       
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-btnlink1\">";
        // line 237
        echo ($context["entry_btnlink1"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"btnlink1\" value=\"";
        // line 239
        echo ($context["btnlink1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_btnlink1"] ?? null);
        echo "\" id=\"input-btnlink1\" class=\"form-control\" />
                            ";
        // line 240
        if (($context["error_btnlink1"] ?? null)) {
            // line 241
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_btnlink1"] ?? null);
            echo "</div>
                            ";
        }
        // line 243
        echo "                          </div>
                      </div>



                      <h2>Banner 2</h2>
                   <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 250
        echo ($context["entry_image2"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"image\" class=\"card image\">
                              <img src=\"";
        // line 253
        echo ($context["imagethumb2"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image2\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                              <input type=\"hidden\" name=\"image2\" value=\"";
        // line 254
        echo ($context["image2"] ?? null);
        echo "\" id=\"input-image2\" />
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image2\" data-oc-thumb=\"#thumb-image2\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 256
        echo ($context["button_edit"] ?? null);
        echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image2\" data-oc-thumb=\"#thumb-image2\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 257
        echo ($context["button_clear"] ?? null);
        echo "</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-title2-";
        // line 263
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 263);
        echo "\">";
        echo ($context["entry_title2"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 266
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 266);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 266);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 266);
            echo "\" /></span>
                                <input type=\"text\" name=\"title2[";
            // line 267
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 267);
            echo "]\" value=\"";
            echo (($__internal_compile_9 = ($context["title2"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 267)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title2"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title2-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 267);
            echo "\" />
                                ";
            // line 268
            if ((($__internal_compile_10 = ($context["error_title"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 268)] ?? null) : null)) {
                // line 269
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_11 = ($context["error_title"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 269)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 271
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-title-color2\">";
        // line 278
        echo ($context["entry_title_color2"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"title_color2\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 280
        echo ($context["title_color2"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-subtitle2-";
        // line 286
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 286);
        echo "\">";
        echo ($context["entry_subtitle2"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 288
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 289
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 289);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 289);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 289);
            echo "\" /></span>
                                <input type=\"text\" name=\"subtitle2[";
            // line 290
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 290);
            echo "]\" value=\"";
            echo (($__internal_compile_12 = ($context["subtitle2"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 290)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle2"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle2-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 290);
            echo "\" />
                                ";
            // line 291
            if ((($__internal_compile_13 = ($context["error_title"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 291)] ?? null) : null)) {
                // line 292
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_14 = ($context["error_title"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 292)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 294
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-subtitle-color2\">";
        // line 301
        echo ($context["entry_subtitle_color2"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"subtitle_color2\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 303
        echo ($context["subtitle_color2"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-button2-";
        // line 309
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 309);
        echo "\">";
        echo ($context["entry_button2"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 312
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 312);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 312);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 312);
            echo "\" /></span>
                                <input type=\"text\" name=\"button2[";
            // line 313
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 313);
            echo "]\" value=\"";
            echo (($__internal_compile_15 = ($context["button2"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 313)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button2"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button2-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 313);
            echo "\" />
                                ";
            // line 314
            if ((($__internal_compile_16 = ($context["error_title"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 314)] ?? null) : null)) {
                // line 315
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_17 = ($context["error_title"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 315)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 317
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                          </div>
                        </div>
                       
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-btnlink2\">";
        // line 323
        echo ($context["entry_btnlink2"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"btnlink2\" value=\"";
        // line 325
        echo ($context["btnlink2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_btnlink2"] ?? null);
        echo "\" id=\"input-btnlink2\" class=\"form-control\" />
                            ";
        // line 326
        if (($context["error_btnlink2"] ?? null)) {
            // line 327
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_btnlink2"] ?? null);
            echo "</div>
                            ";
        }
        // line 329
        echo "                          </div>
                      </div>




                      <h2>Banner 3</h2>
                   <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 337
        echo ($context["entry_image3"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"image\" class=\"card image\">
                              <img src=\"";
        // line 340
        echo ($context["imagethumb3"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image3\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                              <input type=\"hidden\" name=\"image3\" value=\"";
        // line 341
        echo ($context["image3"] ?? null);
        echo "\" id=\"input-image3\" />
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image3\" data-oc-thumb=\"#thumb-image3\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 343
        echo ($context["button_edit"] ?? null);
        echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image3\" data-oc-thumb=\"#thumb-image3\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 344
        echo ($context["button_clear"] ?? null);
        echo "</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-title3-";
        // line 350
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 350);
        echo "\">";
        echo ($context["entry_title3"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 353
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 353);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 353);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 353);
            echo "\" /></span>
                                <input type=\"text\" name=\"title3[";
            // line 354
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 354);
            echo "]\" value=\"";
            echo (($__internal_compile_18 = ($context["title3"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 354)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title3"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title3-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 354);
            echo "\" />
                                ";
            // line 355
            if ((($__internal_compile_19 = ($context["error_title"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 355)] ?? null) : null)) {
                // line 356
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_20 = ($context["error_title"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 356)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 358
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 360
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-title-color3\">";
        // line 365
        echo ($context["entry_title_color3"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"title_color3\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 367
        echo ($context["title_color3"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-subtitle3-";
        // line 373
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 373);
        echo "\">";
        echo ($context["entry_subtitle3"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 375
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 376
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 376);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 376);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 376);
            echo "\" /></span>
                                <input type=\"text\" name=\"subtitle3[";
            // line 377
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377);
            echo "]\" value=\"";
            echo (($__internal_compile_21 = ($context["subtitle3"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle3"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle3-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377);
            echo "\" />
                                ";
            // line 378
            if ((($__internal_compile_22 = ($context["error_title"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 378)] ?? null) : null)) {
                // line 379
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_23 = ($context["error_title"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 379)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 381
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 383
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-subtitle-color3\">";
        // line 388
        echo ($context["entry_subtitle_color3"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"subtitle_color3\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 390
        echo ($context["subtitle_color3"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-button3-";
        // line 396
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 396);
        echo "\">";
        echo ($context["entry_button3"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 399
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 399);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 399);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 399);
            echo "\" /></span>
                                <input type=\"text\" name=\"button3[";
            // line 400
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 400);
            echo "]\" value=\"";
            echo (($__internal_compile_24 = ($context["button3"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 400)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button3"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button3-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 400);
            echo "\" />
                                ";
            // line 401
            if ((($__internal_compile_25 = ($context["error_title"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 401)] ?? null) : null)) {
                // line 402
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_26 = ($context["error_title"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 402)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 404
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        echo "                          </div>
                        </div>
                       
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-btnlink3\">";
        // line 410
        echo ($context["entry_btnlink3"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"btnlink3\" value=\"";
        // line 412
        echo ($context["btnlink3"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_btnlink3"] ?? null);
        echo "\" id=\"input-btnlink3\" class=\"form-control\" />
                            ";
        // line 413
        if (($context["error_btnlink3"] ?? null)) {
            // line 414
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_btnlink3"] ?? null);
            echo "</div>
                            ";
        }
        // line 416
        echo "                          </div>
                      </div>



                      <h2>Banner 4</h2>
                   <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 423
        echo ($context["entry_image4"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div id=\"image\" class=\"card image\">
                              <img src=\"";
        // line 426
        echo ($context["imagethumb4"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image4\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                              <input type=\"hidden\" name=\"image4\" value=\"";
        // line 427
        echo ($context["image4"] ?? null);
        echo "\" id=\"input-image4\" />
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image4\" data-oc-thumb=\"#thumb-image4\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 429
        echo ($context["button_edit"] ?? null);
        echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image4\" data-oc-thumb=\"#thumb-image4\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 430
        echo ($context["button_clear"] ?? null);
        echo "</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-title4-";
        // line 436
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 436);
        echo "\">";
        echo ($context["entry_title4"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 439
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 439);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 439);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 439);
            echo "\" /></span>
                                <input type=\"text\" name=\"title4[";
            // line 440
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 440);
            echo "]\" value=\"";
            echo (($__internal_compile_27 = ($context["title4"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 440)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title4"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title4-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 440);
            echo "\" />
                                ";
            // line 441
            if ((($__internal_compile_28 = ($context["error_title"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 441)] ?? null) : null)) {
                // line 442
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_29 = ($context["error_title"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 442)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 444
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 446
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-title-color4\">";
        // line 451
        echo ($context["entry_title_color4"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"title_color4\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 453
        echo ($context["title_color4"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-subtitle4-";
        // line 459
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 459);
        echo "\">";
        echo ($context["entry_subtitle4"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 462
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 462);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 462);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 462);
            echo "\" /></span>
                                <input type=\"text\" name=\"subtitle4[";
            // line 463
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 463);
            echo "]\" value=\"";
            echo (($__internal_compile_30 = ($context["subtitle4"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 463)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle4"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle4-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 463);
            echo "\" />
                                ";
            // line 464
            if ((($__internal_compile_31 = ($context["error_title"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 464)] ?? null) : null)) {
                // line 465
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_32 = ($context["error_title"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 465)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 467
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        echo "                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <div class=\"col-sm-6\">
                            <div class=\"row\">
                              <label class=\"col-sm-4 col-form-label\" for=\"input-subtitle-color4\">";
        // line 474
        echo ($context["entry_subtitle_color4"] ?? null);
        echo "</label>
                              <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"subtitle_color4\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 476
        echo ($context["subtitle_color4"] ?? null);
        echo "\">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-button4-";
        // line 482
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 482);
        echo "\">";
        echo ($context["entry_button4"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            ";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 485
            echo "                              <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 485);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 485);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 485);
            echo "\" /></span>
                                <input type=\"text\" name=\"button4[";
            // line 486
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 486);
            echo "]\" value=\"";
            echo (($__internal_compile_33 = ($context["button4"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 486)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_button4"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-button4-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 486);
            echo "\" />
                                ";
            // line 487
            if ((($__internal_compile_34 = ($context["error_title"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 487)] ?? null) : null)) {
                // line 488
                echo "                                  <div class=\"text-danger\">";
                echo (($__internal_compile_35 = ($context["error_title"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 488)] ?? null) : null);
                echo "</div>
                                ";
            }
            // line 490
            echo "                              </div> 
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 492
        echo "                          </div>
                        </div>
                       
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-btnlink4\">";
        // line 496
        echo ($context["entry_btnlink4"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"btnlink4\" value=\"";
        // line 498
        echo ($context["btnlink4"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_btnlink4"] ?? null);
        echo "\" id=\"input-btnlink4\" class=\"form-control\" />
                            ";
        // line 499
        if (($context["error_btnlink4"] ?? null)) {
            // line 500
            echo "                            <div class=\"text-danger\">";
            echo ($context["error_btnlink4"] ?? null);
            echo "</div>
                            ";
        }
        // line 502
        echo "                          </div>
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
<script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
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
      });
    });
    });
  </script>
";
        // line 610
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/ishispecialdealblock/admin/view/template/module/ishispecialdeals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1431 => 610,  1321 => 502,  1315 => 500,  1313 => 499,  1307 => 498,  1302 => 496,  1296 => 492,  1289 => 490,  1283 => 488,  1281 => 487,  1271 => 486,  1262 => 485,  1258 => 484,  1251 => 482,  1242 => 476,  1237 => 474,  1230 => 469,  1223 => 467,  1217 => 465,  1215 => 464,  1205 => 463,  1196 => 462,  1192 => 461,  1185 => 459,  1176 => 453,  1171 => 451,  1164 => 446,  1157 => 444,  1151 => 442,  1149 => 441,  1139 => 440,  1130 => 439,  1126 => 438,  1119 => 436,  1110 => 430,  1106 => 429,  1101 => 427,  1095 => 426,  1089 => 423,  1080 => 416,  1074 => 414,  1072 => 413,  1066 => 412,  1061 => 410,  1055 => 406,  1048 => 404,  1042 => 402,  1040 => 401,  1030 => 400,  1021 => 399,  1017 => 398,  1010 => 396,  1001 => 390,  996 => 388,  989 => 383,  982 => 381,  976 => 379,  974 => 378,  964 => 377,  955 => 376,  951 => 375,  944 => 373,  935 => 367,  930 => 365,  923 => 360,  916 => 358,  910 => 356,  908 => 355,  898 => 354,  889 => 353,  885 => 352,  878 => 350,  869 => 344,  865 => 343,  860 => 341,  854 => 340,  848 => 337,  838 => 329,  832 => 327,  830 => 326,  824 => 325,  819 => 323,  813 => 319,  806 => 317,  800 => 315,  798 => 314,  788 => 313,  779 => 312,  775 => 311,  768 => 309,  759 => 303,  754 => 301,  747 => 296,  740 => 294,  734 => 292,  732 => 291,  722 => 290,  713 => 289,  709 => 288,  702 => 286,  693 => 280,  688 => 278,  681 => 273,  674 => 271,  668 => 269,  666 => 268,  656 => 267,  647 => 266,  643 => 265,  636 => 263,  627 => 257,  623 => 256,  618 => 254,  612 => 253,  606 => 250,  597 => 243,  591 => 241,  589 => 240,  583 => 239,  578 => 237,  572 => 233,  565 => 231,  559 => 229,  557 => 228,  547 => 227,  538 => 226,  534 => 225,  527 => 223,  518 => 217,  513 => 215,  506 => 210,  499 => 208,  493 => 206,  491 => 205,  481 => 204,  472 => 203,  468 => 202,  461 => 200,  452 => 194,  447 => 192,  440 => 187,  433 => 185,  427 => 183,  425 => 182,  415 => 181,  406 => 180,  402 => 179,  395 => 177,  386 => 171,  382 => 170,  377 => 168,  371 => 167,  365 => 164,  357 => 158,  352 => 156,  347 => 155,  342 => 153,  337 => 152,  335 => 151,  329 => 148,  320 => 141,  316 => 139,  312 => 137,  310 => 136,  304 => 133,  295 => 126,  291 => 124,  287 => 122,  285 => 121,  279 => 118,  268 => 109,  264 => 107,  260 => 105,  258 => 104,  252 => 101,  243 => 94,  239 => 92,  235 => 90,  233 => 89,  227 => 86,  217 => 78,  211 => 76,  209 => 75,  203 => 74,  198 => 72,  191 => 67,  185 => 65,  183 => 64,  177 => 63,  172 => 61,  159 => 53,  154 => 51,  143 => 45,  136 => 43,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishispecialdealblock/admin/view/template/module/ishispecialdeals.twig", "C:\\xampp\\htdocs\\OPC052L01_new\\extension\\ishispecialdealblock\\admin\\view\\template\\module\\ishispecialdeals.twig");
    }
}
