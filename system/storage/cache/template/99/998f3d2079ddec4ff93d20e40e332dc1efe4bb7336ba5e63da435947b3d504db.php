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

/* extension/ishifeaturesblock/admin/view/template/module/ishifeaturesblock.twig */
class __TwigTemplate_83402e773e460b94706df974a63fb2a1d221b460dd70fb3563fbbcfa896bfeab extends Template
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
                  <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 40);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "                      <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            echo "\" /></span>
                        <input type=\"text\" name=\"title[";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\" />
                        ";
            // line 45
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null)) {
                // line 46
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 48
            echo "                      </div> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-subtitle-";
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 53);
        echo "\">";
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 56
            echo "                      <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 56);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 56);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 56);
            echo "\" /></span>
                        <input type=\"text\" name=\"subtitle[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "]\" value=\"";
            echo (($__internal_compile_3 = ($context["subtitle"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "\" />
                        ";
            // line 58
            if ((($__internal_compile_4 = ($context["error_subtitle"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58)] ?? null) : null)) {
                // line 59
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_5 = ($context["error_subtitle"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 61
            echo "                      </div> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-desctitle-";
        // line 66
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 66);
        echo "\">";
        echo ($context["entry_desc"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 69
            echo "                      <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 69);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 69);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 69);
            echo "\" /></span>
                        <input type=\"text\" name=\"desctitle[";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            echo "]\" value=\"";
            echo (($__internal_compile_6 = ($context["desctitle"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_desc"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-desctitle-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            echo "\" />
                        ";
            // line 71
            if ((($__internal_compile_7 = ($context["error_desctitle"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null)) {
                // line 72
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_8 = ($context["error_desctitle"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 74
            echo "                      </div> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-btn-";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 79);
        echo "\">";
        echo ($context["entry_btn"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 82
            echo "                      <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 82);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 82);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 82);
            echo "\" /></span>
                        <input type=\"text\" name=\"btn[";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "]\" value=\"";
            echo (($__internal_compile_9 = ($context["btn"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_btn"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-btn-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "\" />
                        ";
            // line 84
            if ((($__internal_compile_10 = ($context["error_btn"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null)) {
                // line 85
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_11 = ($context["error_btn"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 87
            echo "                      </div> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-btnlink-";
        // line 92
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 92);
        echo "\">";
        echo ($context["entry_btnlink"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 95
            echo "                      <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 95);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 95);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 95);
            echo "\" /></span>
                        <input type=\"text\" name=\"btnlink[";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
            echo "]\" value=\"";
            echo (($__internal_compile_12 = ($context["btnlink"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_btnlink"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-btnlink-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
            echo "\" />
                        ";
            // line 97
            if ((($__internal_compile_13 = ($context["error_btnlink"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null)) {
                // line 98
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_compile_14 = ($context["error_btnlink"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 100
            echo "                      </div> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-width\">";
        // line 105
        echo ($context["entry_width"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"width\" value=\"";
        // line 107
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    ";
        // line 108
        if (($context["error_width"] ?? null)) {
            // line 109
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                    ";
        }
        // line 111
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-height\">";
        // line 114
        echo ($context["entry_height"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"height\" value=\"";
        // line 116
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    ";
        // line 117
        if (($context["error_height"] ?? null)) {
            // line 118
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                    ";
        }
        // line 120
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 123
        echo ($context["entry_bg_img"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 126
        echo ($context["imagethumb2"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-bg_img\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                      <input type=\"hidden\" name=\"bg_img\" value=\"";
        // line 127
        echo ($context["bg_img"] ?? null);
        echo "\" id=\"input-bg_img\" />
                      <div class=\"card-body\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-bg_img\" data-oc-thumb=\"#thumb-bg_img\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 129
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-bg_img\" data-oc-thumb=\"#thumb-bg_img\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 130
        echo ($context["button_clear"] ?? null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                  <label class=\"col-sm-2 col-form-label\" for=\"input-bgcolor\">";
        // line 134
        echo ($context["entry_bgcolor"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <input type=\"text\" name=\"bgcolor\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 136
        echo ($context["bgcolor"] ?? null);
        echo "\">
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 140
        echo ($context["entry_gif_img"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div id=\"image\" class=\"card image\">
                      <img src=\"";
        // line 143
        echo ($context["gifthumb2"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-gif_img\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                      <input type=\"hidden\" name=\"gif_img\" value=\"";
        // line 144
        echo ($context["gif_img"] ?? null);
        echo "\" id=\"input-gif_img\" />
                      <div class=\"card-body\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-gif_img\" data-oc-thumb=\"#thumb-gif_img\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 146
        echo ($context["button_edit"] ?? null);
        echo "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-gif_img\" data-oc-thumb=\"#thumb-gif_img\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 147
        echo ($context["button_clear"] ?? null);
        echo "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 153
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                      ";
        // line 156
        if (($context["status"] ?? null)) {
            // line 157
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 158
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 160
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 161
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 163
        echo "                    </select>
                  </div>
                </div>
                <br />
                <ul class=\"nav nav-tabs\" id=\"language\">
                  ";
        // line 168
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
            // line 169
            echo "                  <li class=\"nav-item\"><a class=\"nav-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 169)) {
                echo " active ";
            }
            echo "\" href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
            echo "\" aria-current=\"page\" data-bs-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 169);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 169);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 169);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 169);
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
        // line 171
        echo "                </ul>
                <div class=\"tab-content\">
                  ";
        // line 173
        $context["image_row"] = 0;
        // line 174
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
            // line 175
            echo "                  <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 175)) {
                echo " active ";
            }
            echo " fade show\" role=\"tabpanel\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 175);
            echo "\">
                    <table id=\"images";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 176);
            echo "\" class=\"table table-striped table-bordered table-hover\">
                      <thead>
                        <tr>
                          <td class=\"text-left\">";
            // line 179
            echo ($context["entry_title"] ?? null);
            echo "</td>
                          <td class=\"text-left\">";
            // line 180
            echo ($context["entry_desc"] ?? null);
            echo "</td>
                          <td class=\"text-center\">";
            // line 181
            echo ($context["entry_image"] ?? null);
            echo "</td>
                          <td class=\"text-left\">";
            // line 182
            echo ($context["entry_sort_order"] ?? null);
            echo "</td>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody>
                        ";
            // line 187
            if ((($__internal_compile_15 = ($context["ishi_banners"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 187)] ?? null) : null)) {
                // line 188
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_16 = ($context["ishi_banners"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 188)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ishibanner"]) {
                    // line 189
                    echo "                        <tr id=\"image-row";
                    echo ($context["image_row"] ?? null);
                    echo "\">
                          <td class=\"text-left\"><input type=\"text\" name=\"ishibanner[";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 190);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "title", [], "any", false, false, false, 190);
                    echo "\" placeholder=\"";
                    echo ($context["entry_title"] ?? null);
                    echo "\" class=\"form-control\" />
                            ";
                    // line 191
                    if ((($__internal_compile_17 = (($__internal_compile_18 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 191)] ?? null) : null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 192
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_compile_19 = (($__internal_compile_20 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 192)] ?? null) : null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 193
                    echo "</td>
                          <td class=\"text-left\"><input type=\"text\" name=\"ishibanner[";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 194);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][desc]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "desc", [], "any", false, false, false, 194);
                    echo "\" placeholder=\"";
                    echo ($context["entry_desc"] ?? null);
                    echo "\" class=\"form-control\" />
                            ";
                    // line 195
                    if ((($__internal_compile_21 = (($__internal_compile_22 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195)] ?? null) : null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 196
                        echo "                            <div class=\"text-danger\">";
                        echo (($__internal_compile_23 = (($__internal_compile_24 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 196)] ?? null) : null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                            ";
                    }
                    // line 197
                    echo "</td>
                          <td class=\"text-center\">
                              <img src=\"";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "thumb", [], "any", false, false, false, 199);
                    echo "\" alt=\"\" title=\"\" id=\"thumb-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"img-thumbnail\" data-oc-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"img-thumbnail\"/>
                              <input type=\"hidden\" name=\"ishibanner[";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 200);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "image", [], "any", false, false, false, 200);
                    echo "\" id=\"input-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" />
                              <div class=\"card-body\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image";
                    // line 202
                    echo ($context["image_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                    echo ($context["button_edit"] ?? null);
                    echo "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image";
                    // line 203
                    echo ($context["image_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["image_row"] ?? null);
                    echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    echo ($context["button_clear"] ?? null);
                    echo "</button>
                              </div>
                          </td>
                          <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"ishibanner[";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206);
                    echo "][";
                    echo ($context["image_row"] ?? null);
                    echo "][sort_order]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishibanner"], "sort_order", [], "any", false, false, false, 206);
                    echo "\" placeholder=\"";
                    echo ($context["entry_sort_order"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                          <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
                    // line 207
                    echo ($context["image_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
                    // line 209
                    $context["image_row"] = (($context["image_row"] ?? null) + 1);
                    // line 210
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishibanner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "                        ";
            }
            // line 212
            echo "                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan=\"6\"></td>
                          <td class=\"text-left\"><button type=\"button\" onclick=\"addImage('";
            // line 216
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 216);
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
        // line 222
        echo "                </div>
              </form>
           </div>
        </div>
      </div>
    </div>
</div>
";
        // line 229
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 231
        echo ($context["image_row"] ?? null);
        echo ";

function addImage(language_id) {
\thtml  = '<tr id=\"image-row' + image_row + '\">';\t
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishibanner[' + language_id + '][' + image_row + '][title]\" value=\"\" placeholder=\"";
        // line 235
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishibanner[' + language_id + '][' + image_row + '][desc]\" value=\"\" placeholder=\"";
        // line 236
        echo ($context["entry_desc"] ?? null);
        echo "\" class=\"form-control\" /></td>';  
\thtml += '  <td class=\"text-center\"><img src=\"";
        // line 237
        echo twig_get_attribute($this->env, $this->source, ($context["ishibanner"] ?? null), "thumb", [], "any", false, false, false, 237);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + image_row + '\" class=\"img-thumbnail\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"img-thumbnail\"/><input type=\"hidden\" name=\"ishibanner[' + language_id + '][' + image_row + '][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["ishibanner"] ?? null), "image", [], "any", false, false, false, 237);
        echo "\" id=\"input-image' + image_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image' + image_row + '\" data-oc-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button><button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image' + image_row + '\" data-oc-thumb=\"#thumb-image' + image_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></td>';  \t
  html += '  <td class=\"text-right\" style=\"width: 10%;\"><input type=\"text\" name=\"ishibanner[' + language_id + '][' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 238
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 239
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
        return "extension/ishifeaturesblock/admin/view/template/module/ishifeaturesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  834 => 239,  830 => 238,  818 => 237,  814 => 236,  810 => 235,  803 => 231,  798 => 229,  789 => 222,  767 => 216,  761 => 212,  758 => 211,  752 => 210,  750 => 209,  743 => 207,  733 => 206,  723 => 203,  715 => 202,  704 => 200,  696 => 199,  692 => 197,  686 => 196,  684 => 195,  674 => 194,  671 => 193,  665 => 192,  663 => 191,  653 => 190,  648 => 189,  643 => 188,  641 => 187,  633 => 182,  629 => 181,  625 => 180,  621 => 179,  615 => 176,  606 => 175,  588 => 174,  586 => 173,  582 => 171,  553 => 169,  536 => 168,  529 => 163,  524 => 161,  519 => 160,  514 => 158,  509 => 157,  507 => 156,  501 => 153,  492 => 147,  488 => 146,  483 => 144,  477 => 143,  471 => 140,  464 => 136,  459 => 134,  452 => 130,  448 => 129,  443 => 127,  437 => 126,  431 => 123,  426 => 120,  420 => 118,  418 => 117,  412 => 116,  407 => 114,  402 => 111,  396 => 109,  394 => 108,  388 => 107,  383 => 105,  378 => 102,  371 => 100,  365 => 98,  363 => 97,  353 => 96,  344 => 95,  340 => 94,  333 => 92,  328 => 89,  321 => 87,  315 => 85,  313 => 84,  303 => 83,  294 => 82,  290 => 81,  283 => 79,  278 => 76,  271 => 74,  265 => 72,  263 => 71,  253 => 70,  244 => 69,  240 => 68,  233 => 66,  228 => 63,  221 => 61,  215 => 59,  213 => 58,  203 => 57,  194 => 56,  190 => 55,  183 => 53,  178 => 50,  171 => 48,  165 => 46,  163 => 45,  153 => 44,  144 => 43,  140 => 42,  133 => 40,  128 => 37,  122 => 35,  120 => 34,  114 => 33,  109 => 31,  104 => 29,  101 => 28,  93 => 24,  91 => 23,  85 => 20,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifeaturesblock/admin/view/template/module/ishifeaturesblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishifeaturesblock\\admin\\view\\template\\module\\ishifeaturesblock.twig");
    }
}
