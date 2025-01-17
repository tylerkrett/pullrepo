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

/* extension/ishislider/admin/view/template/module/ishislider.twig */
class __TwigTemplate_39f65c4d24090b703572770b85645127c85391d84f636fc066ac15a835e14a03 extends Template
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
          <i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
        </div>
        <div class=\"panel-body\">
          <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
            <div class=\"row pt-3 pb-3\">
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
\t\t          <div class=\"row pt-3 pb-3\">
        \t\t\t <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 41
        echo ($context["entry_width"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 43
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    </div>
                  </div>
        \t\t\t  </div>
  \t\t\t         <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-height\">";
        // line 49
        echo ($context["entry_height"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 51
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row pt-3 pb-3\">
               <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-mobilewidth\">";
        // line 59
        echo ($context["entry_mobilewidth"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"mobilewidth\" value=\"";
        // line 61
        echo ($context["mobilewidth"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mobilewidth"] ?? null);
        echo "\" id=\"input-mobilewidth\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                 <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-mobileheight\">";
        // line 67
        echo ($context["entry_mobileheight"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"mobileheight\" value=\"";
        // line 69
        echo ($context["mobileheight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mobileheight"] ?? null);
        echo "\" id=\"input-mobileheight\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
            </div>
         <div class=\"row pt-3 pb-3\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 75
        echo ($context["entry_status"] ?? null);
        echo "</label>
          <div class=\"col-sm-10 pr-3\">
            <select name=\"status\" id=\"input-status\" class=\"form-control\">
              ";
        // line 78
        if (($context["status"] ?? null)) {
            // line 79
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 80
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 82
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 83
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 85
        echo "            </select>
          </div>
        </div>
        <h3>";
        // line 88
        echo ($context["entry_carousel"] ?? null);
        echo "</h3><hr/>
      <div class=\"row mb-3\">
        <div class=\"col-sm-6\">
          <div class=\"row\">
            <label class=\"col-sm-3 col-form-label\" for=\"input-autoplay\">";
        // line 92
        echo ($context["text_autoplay"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <label class=\"switch\">
                ";
        // line 95
        if (($context["autoplay"] ?? null)) {
            // line 96
            echo "                  <input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
                ";
        } else {
            // line 98
            echo "                  <input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
                ";
        }
        // line 100
        echo "                <span class=\"slider round\"></span>
              </label>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6\">
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-sm-6\">
          <div class=\"row\">
            <label class=\"col-sm-3 col-form-label\" for=\"input-navigation\">";
        // line 111
        echo ($context["text_navigation"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <label class=\"switch\">
                ";
        // line 114
        if (($context["navigation"] ?? null)) {
            // line 115
            echo "                  <input type=\"checkbox\" name=\"navigation\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-navigation\" />
                ";
        } else {
            // line 117
            echo "                  <input type=\"checkbox\" name=\"navigation\" value=\"1\" class=\"primary\" id=\"input-navigation\" />
                ";
        }
        // line 119
        echo "                <span class=\"slider round\"></span>
              </label>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"row\">
            <label class=\"col-sm-3 col-form-label\" for=\"input-navigation-style\">";
        // line 126
        echo ($context["text_navigation_style"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <select name=\"navigation_style\" id=\"input-navigation-style\" class=\"form-control\">
                <option value=\"ishi-style-nav1\" ";
        // line 129
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav1")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav1"] ?? null);
        echo "</option>
                <option value=\"ishi-style-nav2\" ";
        // line 130
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav2")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav2"] ?? null);
        echo "</option>
                <option value=\"ishi-style-nav3\" ";
        // line 131
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav3")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav3"] ?? null);
        echo "</option>
                <option value=\"ishi-style-nav4\" ";
        // line 132
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav4")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav4"] ?? null);
        echo "</option>
                <option value=\"ishi-style-nav5\" ";
        // line 133
        if ((($context["navigation_style"] ?? null) == "ishi-style-nav5")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_nav5"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-sm-6\">
          <div class=\"row\">
            <label class=\"col-sm-3 col-form-label\" for=\"input-dot\">";
        // line 142
        echo ($context["text_dot"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <label class=\"switch\">
                ";
        // line 145
        if (($context["dot"] ?? null)) {
            // line 146
            echo "                  <input type=\"checkbox\" name=\"dot\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-dot\" />
                ";
        } else {
            // line 148
            echo "                  <input type=\"checkbox\" name=\"dot\" value=\"1\" class=\"primary\" id=\"input-dot\" />
                ";
        }
        // line 150
        echo "                <span class=\"slider round\"></span>
              </label>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"row\">
            <label class=\"col-sm-3 col-form-label\" for=\"input-dot-style\">";
        // line 157
        echo ($context["text_dot_style"] ?? null);
        echo "</label>
            <div class=\"col-sm-9\">
              <select name=\"dot_style\" id=\"input-dot-style\" class=\"form-control\">
                <option value=\"ishi-style-dot1\" ";
        // line 160
        if ((($context["dot_style"] ?? null) == "ishi-style-dot1")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot1"] ?? null);
        echo "</option>
                <option value=\"ishi-style-dot2\" ";
        // line 161
        if ((($context["dot_style"] ?? null) == "ishi-style-dot2")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot2"] ?? null);
        echo "</option>
                <option value=\"ishi-style-dot3\" ";
        // line 162
        if ((($context["dot_style"] ?? null) == "ishi-style-dot3")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot3"] ?? null);
        echo "</option>
                <option value=\"ishi-style-dot4\" ";
        // line 163
        if ((($context["dot_style"] ?? null) == "ishi-style-dot4")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot4"] ?? null);
        echo "</option>
                <option value=\"ishi-style-dot5\" ";
        // line 164
        if ((($context["dot_style"] ?? null) == "ishi-style-dot5")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["entry_dot5"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
        </div>
            </div>
        <div class=\"tab-pane\" id=\"tab-design\">
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 172
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
            // line 173
            echo "            <li class=\"nav-item\"><a class=\"nav-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 173)) {
                echo " active ";
            }
            echo "\" href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 173);
            echo "\" aria-current=\"page\" data-bs-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 173);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 173);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 173);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 173);
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
        // line 175
        echo "          </ul>
          <div class=\"tab-content\" style=\"overflow: scroll; overflow-y: hidden;\">
           ";
        // line 177
        $context["slider_row"] = 0;
        // line 178
        echo "           ";
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
            // line 179
            echo "           <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 179)) {
                echo " active ";
            }
            echo " fade show\" role=\"tabpanel\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 179);
            echo "\">
            <table id=\"images";
            // line 180
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
            echo "\" class=\"table table-striped table-bordered table-hover table-responsive\">
             <thead>
               <tr>
                <td class=\"text-left\">";
            // line 183
            echo ($context["entry_slider_title"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 184
            echo ($context["entry_titlecolor"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 185
            echo ($context["entry_titlebgcolor"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 186
            echo ($context["entry_subtitle"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 187
            echo ($context["entry_subtitlecolor"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 188
            echo ($context["entry_desc"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 189
            echo ($context["entry_desccolor"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 190
            echo ($context["entry_btntext"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 191
            echo ($context["entry_textalignment"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 192
            echo ($context["entry_textposition"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 193
            echo ($context["entry_mobiletextalignment"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 194
            echo ($context["entry_mobiletextposition"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 195
            echo ($context["entry_link"] ?? null);
            echo "</td>
                <td class=\"text-center\">";
            // line 196
            echo ($context["entry_image"] ?? null);
            echo "</td>
                <td class=\"text-center\">";
            // line 197
            echo ($context["entry_imagehover"] ?? null);
            echo "</td>
                <td></td>
               </tr>
             </thead>
             <tbody>
               ";
            // line 202
            if ((($__internal_compile_0 = ($context["sliders"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 202)] ?? null) : null)) {
                // line 203
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["sliders"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 203)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                    // line 204
                    echo "               <tr id=\"slider-row";
                    echo ($context["slider_row"] ?? null);
                    echo "\">
                  <td class=\"text-left\"><input type=\"text\" name=\"slider[";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 205);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "title", [], "any", false, false, false, 205);
                    echo "\" placeholder=\"";
                    echo ($context["entry_slider_title"] ?? null);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 206
                    if ((($__internal_compile_2 = (($__internal_compile_3 = ($context["error_slider"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 206)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["slider_row"] ?? null)] ?? null) : null)) {
                        // line 207
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_4 = (($__internal_compile_5 = ($context["error_slider"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 207)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["slider_row"] ?? null)] ?? null) : null);
                        echo "</div>
                  ";
                    }
                    // line 208
                    echo "</td>
                  <td class=\"text-left\">
                    <input type=\"text\" name=\"slider[";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 210);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][titlecolor]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "titlecolor", [], "any", false, false, false, 210);
                    echo "\" placeholder=\"";
                    echo ($context["entry_titlecolor"] ?? null);
                    echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>
                    ";
                    // line 211
                    if ((($__internal_compile_6 = (($__internal_compile_7 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 211)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 212
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_compile_8 = (($__internal_compile_9 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 212)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 214
                    echo "                  </td>

                  <td class=\"text-left\">
                    <input type=\"text\" name=\"slider[";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 217);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][titlebgcolor]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "titlebgcolor", [], "any", false, false, false, 217);
                    echo "\" placeholder=\"";
                    echo ($context["entry_titlebgcolor"] ?? null);
                    echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>
                    ";
                    // line 218
                    if ((($__internal_compile_10 = (($__internal_compile_11 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 218)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 219
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_compile_12 = (($__internal_compile_13 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 219)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 221
                    echo "                  </td>
                    

                    <td class=\"text-left\"><input type=\"text\" name=\"slider[";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 224);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][subtitle]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "subtitle", [], "any", false, false, false, 224);
                    echo "\" placeholder=\"";
                    echo ($context["entry_slider_subtitle"] ?? null);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 225
                    if ((($__internal_compile_14 = (($__internal_compile_15 = ($context["error_slider"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 225)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["slider_row"] ?? null)] ?? null) : null)) {
                        // line 226
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_16 = (($__internal_compile_17 = ($context["error_slider"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 226)] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["slider_row"] ?? null)] ?? null) : null);
                        echo "</div>
                  ";
                    }
                    // line 227
                    echo "</td>

                  <td class=\"text-left\">
                    <input type=\"text\" name=\"slider[";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 230);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][subtitlecolor]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "subtitlecolor", [], "any", false, false, false, 230);
                    echo "\" placeholder=\"";
                    echo ($context["entry_subtitlecolor"] ?? null);
                    echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>
                    ";
                    // line 231
                    if ((($__internal_compile_18 = (($__internal_compile_19 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231)] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 232
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_compile_20 = (($__internal_compile_21 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 232)] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                    ";
                    }
                    // line 234
                    echo "                  </td>
                  <td class=\"text-left\"><input type=\"text\" name=\"slider[";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 235);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][desc]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "desc", [], "any", false, false, false, 235);
                    echo "\" placeholder=\"";
                    echo ($context["entry_desc"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"slider[";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 236);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][desccolor]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "desccolor", [], "any", false, false, false, 236);
                    echo "\" placeholder=\"";
                    echo ($context["entry_desccolor"] ?? null);
                    echo "\"  data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/>
                      ";
                    // line 237
                    if ((($__internal_compile_22 = (($__internal_compile_23 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237)] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[($context["image_row"] ?? null)] ?? null) : null)) {
                        // line 238
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_24 = (($__internal_compile_25 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 238)] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[($context["image_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 240
                    echo "                    </td>
                    <td class=\"text-left\">
                      <input type=\"text\" name=\"slider[";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 242);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][btntext]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "btntext", [], "any", false, false, false, 242);
                    echo "\" placeholder=\"";
                    echo ($context["entry_btntext"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 243
                    if ((($__internal_compile_26 = (($__internal_compile_27 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 243)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[($context["slider_row"] ?? null)] ?? null) : null)) {
                        // line 244
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_28 = (($__internal_compile_29 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 244)] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[($context["slider_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 246
                    echo "                    </td>
                    <td class=\"text-left\">
                      <select name=\"slider[";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 248);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][textalignment]\">
                        <option ";
                    // line 249
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "textalignment", [], "any", false, false, false, 249) == "left")) {
                        echo " selected ";
                    }
                    echo " value=\"left\">Left</option> 
                        <option ";
                    // line 250
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "textalignment", [], "any", false, false, false, 250) == "right")) {
                        echo " selected ";
                    }
                    echo " value=\"right\">Right</option> 
                        <option ";
                    // line 251
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "textalignment", [], "any", false, false, false, 251) == "center")) {
                        echo " selected ";
                    }
                    echo " value=\"center\">Center</option>
                      </select>
                      ";
                    // line 253
                    if ((($__internal_compile_30 = (($__internal_compile_31 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 253)] ?? null) : null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[($context["slider_row"] ?? null)] ?? null) : null)) {
                        // line 254
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_32 = (($__internal_compile_33 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 254)] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[($context["slider_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 256
                    echo "                    </td>
                    <td class=\"text-left\">
                      <select name=\"slider[";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 258);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][textposition]\" >
                        <option ";
                    // line 259
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "textposition", [], "any", false, false, false, 259) == "slider-content-left")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-left\">Left</option> 
                        <option ";
                    // line 260
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "textposition", [], "any", false, false, false, 260) == "slider-content-right")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-right\">Right</option> 
                        <option ";
                    // line 261
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "textposition", [], "any", false, false, false, 261) == "slider-content-center")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-center\">Center</option>
                      </select>
                      ";
                    // line 263
                    if ((($__internal_compile_34 = (($__internal_compile_35 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 263)] ?? null) : null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[($context["slider_row"] ?? null)] ?? null) : null)) {
                        // line 264
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_36 = (($__internal_compile_37 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 264)] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[($context["slider_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 266
                    echo "                    </td>
                    <td class=\"text-left\">
                      <select name=\"slider[";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 268);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][mobiletextalignment]\">
                        <option ";
                    // line 269
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "mobiletextalignment", [], "any", false, false, false, 269) == "left")) {
                        echo " selected ";
                    }
                    echo " value=\"left\">Left</option> 
                        <option ";
                    // line 270
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "mobiletextalignment", [], "any", false, false, false, 270) == "right")) {
                        echo " selected ";
                    }
                    echo " value=\"right\">Right</option> 
                        <option ";
                    // line 271
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "mobiletextalignment", [], "any", false, false, false, 271) == "center")) {
                        echo " selected ";
                    }
                    echo " value=\"center\">Center</option>
                      </select>
                      ";
                    // line 273
                    if ((($__internal_compile_38 = (($__internal_compile_39 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 273)] ?? null) : null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[($context["slider_row"] ?? null)] ?? null) : null)) {
                        // line 274
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_40 = (($__internal_compile_41 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 274)] ?? null) : null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[($context["slider_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 276
                    echo "                    </td>
                    <td class=\"text-left\">
                      <select name=\"slider[";
                    // line 278
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 278);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][mobiletextposition]\" >
                        <option ";
                    // line 279
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "mobiletextposition", [], "any", false, false, false, 279) == "slider-content-left")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-left\">Left</option> 
                        <option ";
                    // line 280
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "mobiletextposition", [], "any", false, false, false, 280) == "slider-content-right")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-right\">Right</option> 
                        <option ";
                    // line 281
                    if ((twig_get_attribute($this->env, $this->source, $context["slider"], "mobiletextposition", [], "any", false, false, false, 281) == "slider-content-center")) {
                        echo " selected ";
                    }
                    echo " value=\"slider-content-center\">Center</option>
                      </select>
                      ";
                    // line 283
                    if ((($__internal_compile_42 = (($__internal_compile_43 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 283)] ?? null) : null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[($context["slider_row"] ?? null)] ?? null) : null)) {
                        // line 284
                        echo "                        <div class=\"text-danger\">";
                        echo (($__internal_compile_44 = (($__internal_compile_45 = ($context["error_ishi_image"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 284)] ?? null) : null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[($context["slider_row"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 286
                    echo "                    </td>
                    <td class=\"text-left\"><input type=\"text\" name=\"slider[";
                    // line 287
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 287);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "link", [], "any", false, false, false, 287);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                <td class=\"text-center\" style=\"width: 15%;\">
                  <img src=\"";
                    // line 289
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "thumb", [], "any", false, false, false, 289);
                    echo "\" alt=\"\" title=\"\" id=\"thumb-image";
                    echo ($context["slider_row"] ?? null);
                    echo "\" data-oc-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"card-img-top\"/>
                  <input type=\"hidden\" name=\"slider[";
                    // line 290
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 290);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "image", [], "any", false, false, false, 290);
                    echo "\" id=\"input-image";
                    echo ($context["slider_row"] ?? null);
                    echo "\"/>
                  <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image";
                    // line 292
                    echo ($context["slider_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["slider_row"] ?? null);
                    echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                    echo ($context["button_edit"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image";
                    // line 293
                    echo ($context["slider_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["slider_row"] ?? null);
                    echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    echo ($context["button_clear"] ?? null);
                    echo "</button>
                  </div>
                </td>
                <td class=\"text-center\" style=\"width: 15%;\">
                  <img src=\"";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "thumbhover", [], "any", false, false, false, 297);
                    echo "\" alt=\"\" title=\"\" id=\"thumb-imagehover";
                    echo ($context["slider_row"] ?? null);
                    echo "\" data-oc-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"card-img-top\"/>
                  <input type=\"hidden\" name=\"slider[";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 298);
                    echo "][";
                    echo ($context["slider_row"] ?? null);
                    echo "][imagehover]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["slider"], "imagehover", [], "any", false, false, false, 298);
                    echo "\" id=\"input-imagehover";
                    echo ($context["slider_row"] ?? null);
                    echo "\"/>
                  <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-imagehover";
                    // line 300
                    echo ($context["slider_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-imagehover";
                    echo ($context["slider_row"] ?? null);
                    echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                    echo ($context["button_edit"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-imagehover";
                    // line 301
                    echo ($context["slider_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-imagehover";
                    echo ($context["slider_row"] ?? null);
                    echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    echo ($context["button_clear"] ?? null);
                    echo "</button>
                  </div>
                </td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#slider-row";
                    // line 304
                    echo ($context["slider_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
                    // line 306
                    $context["slider_row"] = (($context["slider_row"] ?? null) + 1);
                    // line 307
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 308
                echo "                ";
            }
            // line 309
            echo "              </tbody>
              <tfoot>
               <tr>
                <td colspan=\"15\"></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"addslider('";
            // line 313
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 313);
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
        // line 319
        echo "      </div>
    </div>
  </form>
</div>
</div>
</div>
<style>
/* The switch - the box around the slider */
.show-title{
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
.table-responsive {
    overflow: scroll;
    overflow-y: hidden;
    width: 100%;
}
.table-responsive .form-control{
    width: auto;
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
<script type=\"text/javascript\"><!--
  \$(\".checkbox\").change(function() {
      if(this.checked) {
         \$('.show-title').attr(\"style\", \"display: block !important\");
      }else{
  \t\t\$('.show-title').attr(\"style\", \"display: none !important\");
  \t}
  });

  var slider_row = ";
        // line 421
        echo ($context["slider_row"] ?? null);
        echo ";

  function addslider(language_id) {
  html  = '<tr id=\"slider-row' + slider_row + '\">';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][title]\" value=\"\" placeholder=\"";
        // line 425
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][titlecolor]\" value=\"\" placeholder=\"";
        // line 426
        echo ($context["entry_titlecolor"] ?? null);
        echo "\" class=\"form-control themecolor\" data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/></td>';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][titlebgcolor]\" value=\"\" placeholder=\"";
        // line 427
        echo ($context["entry_titlebgcolor"] ?? null);
        echo "\" class=\"form-control themecolor\" data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/></td>';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][subtitle]\" value=\"\" placeholder=\"";
        // line 428
        echo ($context["entry_subtitle"] ?? null);
        echo "\" class=\"form-control\" /></td>'; 
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][subtitlecolor]\" value=\"\" placeholder=\"";
        // line 429
        echo ($context["entry_subtitlecolor"] ?? null);
        echo "\" class=\"form-control themecolor\" data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/></td>';
   html += '  <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][desc]\" value=\"\" placeholder=\"";
        // line 430
        echo ($context["entry_desc"] ?? null);
        echo "\" class=\"form-control\" /></td>';  
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][desccolor]\" value=\"\" placeholder=\"";
        // line 431
        echo ($context["entry_desccolor"] ?? null);
        echo "\" class=\"form-control themecolor\" data-property=\"color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"/></td>';
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][btntext]\" value=\"\" placeholder=\"";
        // line 432
        echo ($context["entry_btntext"] ?? null);
        echo "\" class=\"form-control\" /></td>';  
  html += '  <td class=\"text-left\"><select name=\"slider[' + language_id + '][' + slider_row + '][textalignment]\"><option value=\"left\">Left</option> <option value=\"right\">Right</option> <option value=\"center\">Center</option> /select></td>';  
  html += '  <td class=\"text-left\"><select name=\"slider[' + language_id + '][' + slider_row + '][textposition]\"><option value=\"left\">Left</option> <option value=\"right\">Right</option> <option value=\"center\">Center</option> /select></td>'; 
   html += '  <td class=\"text-left\"><select name=\"slider[' + language_id + '][' + slider_row + '][mobiletextalignment]\"><option value=\"left\">Left</option> <option value=\"right\">Right</option> <option value=\"center\">Center</option> /select></td>';  
  html += '  <td class=\"text-left\"><select name=\"slider[' + language_id + '][' + slider_row + '][mobiletextposition]\"><option value=\"left\">Left</option> <option value=\"right\">Right</option> <option value=\"center\">Center</option> /select></td>'; 
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"slider[' + language_id + '][' + slider_row + '][link]\" value=\"\" placeholder=\"";
        // line 437
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '<td class=\"text-center\"><img src=\"";
        // line 438
        echo twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "thumb", [], "any", false, false, false, 438);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + slider_row + '\"  data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/><input type=\"hidden\" name=\"slider[' + language_id + '][' + slider_row + '][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "image", [], "any", false, false, false, 438);
        echo "\" id=\"input-image' + slider_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image' + slider_row + '\" data-oc-thumb=\"#thumb-image' + slider_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button><button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image' + slider_row + '\" data-oc-thumb=\"#thumb-image' + slider_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></td>';
   html += '<td class=\"text-center\"><img src=\"";
        // line 439
        echo twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "thumbhover", [], "any", false, false, false, 439);
        echo "\" alt=\"\" title=\"\" id=\"thumb-imagehover' + slider_row + '\"  data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/><input type=\"hidden\" name=\"slider[' + language_id + '][' + slider_row + '][imagehover]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["slider"] ?? null), "imagehover", [], "any", false, false, false, 439);
        echo "\" id=\"input-imagehover' + slider_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-imagehover' + slider_row + '\" data-oc-thumb=\"#thumb-imagehover' + slider_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button><button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-imagehover' + slider_row + '\" data-oc-thumb=\"#thumb-imagehover' + slider_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></td>';
   html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#slider-row' + slider_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 440
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
   html += '</tr>';
   
   \$('#images' + language_id + ' tbody').append(html);
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
   slider_row++;
 }
 //--></script>
</div>
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
        // line 504
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishislider/admin/view/template/module/ishislider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1274 => 504,  1207 => 440,  1195 => 439,  1183 => 438,  1179 => 437,  1171 => 432,  1167 => 431,  1163 => 430,  1159 => 429,  1155 => 428,  1151 => 427,  1147 => 426,  1143 => 425,  1136 => 421,  1032 => 319,  1010 => 313,  1004 => 309,  1001 => 308,  995 => 307,  993 => 306,  986 => 304,  976 => 301,  968 => 300,  957 => 298,  949 => 297,  938 => 293,  930 => 292,  919 => 290,  911 => 289,  900 => 287,  897 => 286,  891 => 284,  889 => 283,  882 => 281,  876 => 280,  870 => 279,  864 => 278,  860 => 276,  854 => 274,  852 => 273,  845 => 271,  839 => 270,  833 => 269,  827 => 268,  823 => 266,  817 => 264,  815 => 263,  808 => 261,  802 => 260,  796 => 259,  790 => 258,  786 => 256,  780 => 254,  778 => 253,  771 => 251,  765 => 250,  759 => 249,  753 => 248,  749 => 246,  743 => 244,  741 => 243,  731 => 242,  727 => 240,  721 => 238,  719 => 237,  709 => 236,  699 => 235,  696 => 234,  690 => 232,  688 => 231,  678 => 230,  673 => 227,  667 => 226,  665 => 225,  655 => 224,  650 => 221,  644 => 219,  642 => 218,  632 => 217,  627 => 214,  621 => 212,  619 => 211,  609 => 210,  605 => 208,  599 => 207,  597 => 206,  587 => 205,  582 => 204,  577 => 203,  575 => 202,  567 => 197,  563 => 196,  559 => 195,  555 => 194,  551 => 193,  547 => 192,  543 => 191,  539 => 190,  535 => 189,  531 => 188,  527 => 187,  523 => 186,  519 => 185,  515 => 184,  511 => 183,  505 => 180,  496 => 179,  478 => 178,  476 => 177,  472 => 175,  443 => 173,  426 => 172,  411 => 164,  403 => 163,  395 => 162,  387 => 161,  379 => 160,  373 => 157,  364 => 150,  360 => 148,  356 => 146,  354 => 145,  348 => 142,  332 => 133,  324 => 132,  316 => 131,  308 => 130,  300 => 129,  294 => 126,  285 => 119,  281 => 117,  277 => 115,  275 => 114,  269 => 111,  256 => 100,  252 => 98,  248 => 96,  246 => 95,  240 => 92,  233 => 88,  228 => 85,  223 => 83,  218 => 82,  213 => 80,  208 => 79,  206 => 78,  200 => 75,  189 => 69,  184 => 67,  173 => 61,  168 => 59,  155 => 51,  150 => 49,  139 => 43,  134 => 41,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishislider/admin/view/template/module/ishislider.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishislider\\admin\\view\\template\\module\\ishislider.twig");
    }
}
