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

/* extension/ishiaboutusblock/admin/view/template/module/ishiaboutusblock.twig */
class __TwigTemplate_68b16a6eee656c3ae7cda8cf6183c4add13b2f42111c8795b8d8127a574702df extends Template
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
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
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
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 39
        echo ($context["entry_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"image\" class=\"card image\">
                <img src=\"";
        // line 42
        echo ($context["imagethumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
                <input type=\"hidden\" name=\"image\" value=\"";
        // line 43
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                <div class=\"card-body\">
                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 45
        echo ($context["button_edit"] ?? null);
        echo "</button>
                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 46
        echo ($context["button_clear"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-style1\">";
        // line 52
        echo ($context["entry_hoverstyle"] ?? null);
        echo "</label>
            <div class=\"col-sm-4\">
              <select name=\"style1\" id=\"input-style1\" class=\"form-control\">
                <option value=\"ishi-customhover-fadeinnormal\" ";
        // line 55
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeinnormal")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinnormal"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeinflip\" ";
        // line 56
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeinflip")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinflip"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeinrotate\" ";
        // line 57
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeinrotate")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeinrotate3D\" ";
        // line 58
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeinrotate3D")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate3d"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeintop\" ";
        // line 59
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeintop")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintop"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeinbottom\" ";
        // line 60
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeinbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinbottom"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeintopbottom\" ";
        // line 61
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeintopbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintopbottom"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-doublefadeincenter\" ";
        // line 62
        if ((($context["style1"] ?? null) == "ishi-customhover-doublefadeincenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_doublefadeincenter"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeoutcenter\" ";
        // line 63
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeoutcenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcenter"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeoutcorner\" ";
        // line 64
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcorner"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeinoutcorner\" ";
        // line 65
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeinoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinoutcorner"] ?? null);
        echo "</option>
                <option value=\"ishi-customhover-fadeinsquare\" ";
        // line 66
        if ((($context["style1"] ?? null) == "ishi-customhover-fadeinsquare")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinsquare"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-btnname-";
        // line 71
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 71);
        echo "\">";
        echo ($context["entry_btnname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 74
            echo "                <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 74);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 74);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 74);
            echo "\" /></span>
                  <input type=\"text\" name=\"btnname[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["btnname"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_btnname"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-btnname-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\" />
                  ";
            // line 76
            if ((($__internal_compile_1 = ($context["error_btnname"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null)) {
                // line 77
                echo "                    <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_btnname"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 79
            echo "                </div> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-btnlink-";
        // line 84
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 84);
        echo "\">";
        echo ($context["entry_btnlink"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 87
            echo "                <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 87);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 87);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 87);
            echo "\" /></span>
                  <input type=\"text\" name=\"btnlink[";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
            echo "]\" value=\"";
            echo (($__internal_compile_3 = ($context["btnlink"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_btnlink"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-btnlink-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 88);
            echo "\" />
                  ";
            // line 89
            if ((($__internal_compile_4 = ($context["error_btnlink"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null)) {
                // line 90
                echo "                    <div class=\"text-danger\">";
                echo (($__internal_compile_5 = ($context["error_btnlink"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 92
            echo "                </div> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </div>
          </div>
               <!--  <div class=\"row mb-3 required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-position\">";
        // line 97
        echo ($context["entry_position"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"position\" id=\"input-position\" class=\"form-control\"> 
                        <option value=\"0\">";
        // line 100
        echo ($context["entry_positionright"] ?? null);
        echo "</option>
                        <option value=\"1\" selected=\"selected\">";
        // line 101
        echo ($context["entry_positionleft"] ?? null);
        echo "</option>
                      </select>
                  </div>
                </div> -->
                <div class=\"row mb-3 required\">
                  <label class=\"col-sm-2 col-form-label\" for=\"input-position\">";
        // line 106
        echo ($context["entry_position"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"position\" id=\"input-position\" class=\"form-control\"> 
                      ";
        // line 109
        if ((($context["position"] ?? null) == 1)) {
            // line 110
            echo "                        <option value=\"0\">";
            echo ($context["entry_positionright"] ?? null);
            echo "</option>
                        <option value=\"1\" selected=\"selected\">";
            // line 111
            echo ($context["entry_positionleft"] ?? null);
            echo "</option>
                      ";
        } elseif ((        // line 112
($context["position"] ?? null) == 0)) {
            // line 113
            echo "                        <option value=\"0\" selected=\"selected\">";
            echo ($context["entry_positionright"] ?? null);
            echo "</option>
                        <option value=\"1\">";
            // line 114
            echo ($context["entry_positionleft"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 116
            echo "                      ";
        }
        // line 117
        echo "                      </select>
                  </div>
                </div>
          <!-- 
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-width\">";
        // line 122
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 124
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 125
        if (($context["error_width"] ?? null)) {
            // line 126
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 128
        echo "            </div>
            <label class=\"col-sm-2 col-form-label\" for=\"input-height\">";
        // line 129
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-4\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 131
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 132
        if (($context["error_height"] ?? null)) {
            // line 133
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 135
        echo "            </div>
            </div> -->\t\t
          <div class=\"tab-pane\">
            <ul class=\"nav nav-tabs\" id=\"language\">
              ";
        // line 139
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
            // line 140
            echo "              <li class=\"nav-item\"><a class=\"nav-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 140)) {
                echo " active ";
            }
            echo "\" href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
            echo "\" data-bs-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 140);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 140);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 140);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 140);
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
        // line 142
        echo "            </ul>
            <div class=\"tab-content\">
              ";
        // line 144
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
            // line 145
            echo "              <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 145)) {
                echo " active ";
            }
            echo " fade show\" role=\"tabpanel\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 145);
            echo "\">
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2  col-form-label\" for=\"input-description";
            // line 147
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_description[";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149);
            echo "\" data-oc-toggle=\"ckeditor\" class=\"form-control\">";
            echo (((($__internal_compile_6 = ($context["module_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["module_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null), "description", [], "any", false, false, false, 149)) : (""));
            echo "</textarea>
                  </div>
                </div>
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
        // line 154
        echo "              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 155
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 158
        if (($context["status"] ?? null)) {
            // line 159
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 160
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 162
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 163
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 165
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  ";
        // line 174
        echo ($context["footer"] ?? null);
        echo "
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

textarea.form-control {
  min-height: 150px;
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
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
    
   <script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
\t<link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 270
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });
  //--></script>
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
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'";
        // line 302
        echo ($context["ckeditor"] ?? null);
        echo "'
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/ishiaboutusblock/admin/view/template/module/ishiaboutusblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 302,  722 => 270,  623 => 174,  612 => 165,  607 => 163,  602 => 162,  597 => 160,  592 => 159,  590 => 158,  584 => 155,  581 => 154,  556 => 149,  549 => 147,  539 => 145,  522 => 144,  518 => 142,  489 => 140,  472 => 139,  466 => 135,  460 => 133,  458 => 132,  452 => 131,  447 => 129,  444 => 128,  438 => 126,  436 => 125,  430 => 124,  425 => 122,  418 => 117,  415 => 116,  410 => 114,  405 => 113,  403 => 112,  399 => 111,  394 => 110,  392 => 109,  386 => 106,  378 => 101,  374 => 100,  368 => 97,  363 => 94,  356 => 92,  350 => 90,  348 => 89,  338 => 88,  329 => 87,  325 => 86,  318 => 84,  313 => 81,  306 => 79,  300 => 77,  298 => 76,  288 => 75,  279 => 74,  275 => 73,  268 => 71,  256 => 66,  248 => 65,  240 => 64,  232 => 63,  224 => 62,  216 => 61,  208 => 60,  200 => 59,  192 => 58,  184 => 57,  176 => 56,  168 => 55,  162 => 52,  153 => 46,  149 => 45,  144 => 43,  138 => 42,  132 => 39,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiaboutusblock/admin/view/template/module/ishiaboutusblock.twig", "C:\\xampp\\htdocs\\OPC003L01\\extension\\ishiaboutusblock\\admin\\view\\template\\module\\ishiaboutusblock.twig");
    }
}
