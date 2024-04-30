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

/* catalog/view/template/account/address_form.twig */
class __TwigTemplate_f6e4e3508d6256ba3c723da6cfd2afb88b451632184aad7fe329ff0a05d7625a extends Template
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
        echo "
<div class=\"breadcrumb-container\">
  <h1 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
</div>
<div id=\"account-address\" class=\"container\">
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <form id=\"form-address\" action=\"";
        // line 13
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 17
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 18
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 24
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 25
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 31
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\"/>
              <label for=\"input-company\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_company"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"address_1\" value=\"";
        // line 37
        echo ($context["address_1"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-address-1\" class=\"form-control\"/>
               <label for=\"input-address-1\" class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
              <div id=\"error-address-1\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"address_2\" value=\"";
        // line 44
        echo ($context["address_2"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-address-2\" class=\"form-control\"/>
              <label for=\"input-address-2\" class=\"col-sm-2 col-form-label\">";
        // line 45
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"city\" value=\"";
        // line 50
        echo ($context["city"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-city\" class=\"form-control\"/>
              <label for=\"input-city\" class=\"col-sm-2 col-form-label\">";
        // line 51
        echo ($context["entry_city"] ?? null);
        echo "</label>
              <div id=\"error-city\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"postcode\" value=\"";
        // line 57
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\"/>
              <label for=\"input-postcode\" class=\"col-sm-2 col-form-label\">";
        // line 58
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
              <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <select name=\"country_id\" id=\"input-country\" class=\"form-select\">
                <option value=\"\">";
        // line 65
        echo ($context["text_select"] ?? null);
        echo "</option>
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 67
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 67);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 67) == ($context["country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 67);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "              </select>
               <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 70
        echo ($context["entry_country"] ?? null);
        echo "</label>
              <div id=\"error-country\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <select name=\"zone_id\" id=\"input-zone\" class=\"form-select\"></select>
               <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_zone"] ?? null);
        echo "</label>
              <div id=\"error-zone\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 83
            echo "
            ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 84) == "select")) {
                // line 85
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 85)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 86);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <select name=\"custom_field[";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 88);
                echo "\" class=\"form-select\">
                    <option value=\"\">";
                // line 89
                echo ($context["text_select"] ?? null);
                echo "</option>
                    ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 90));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 91
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                    echo "\"";
                    if (((($__internal_compile_0 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91) == (($__internal_compile_1 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91)] ?? null) : null)))) {
                        echo " selected";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 91);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                  </select>
                  <div id=\"error-custom-field-";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 98
            echo "
            ";
            // line 99
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "radio")) {
                // line 100
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 100)) {
                    echo " required";
                }
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <div id=\"input-custom-field-";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                echo "\">
                    ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 104));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 105
                    echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_2 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106) == (($__internal_compile_3 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 106);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 114
            echo "
            ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "checkbox")) {
                // line 116
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 116)) {
                    echo " required";
                }
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 117);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <div id=\"input-custom-field-";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                echo "\">
                    ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 121
                    echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                    echo "\" class=\"form-check-input\"";
                    if (((($__internal_compile_4 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122), (($__internal_compile_5 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)))) {
                        echo " checked";
                    }
                    echo "/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 130
            echo "
            ";
            // line 131
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 131) == "text")) {
                // line 132
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 132)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <input type=\"text\" name=\"custom_field[";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "]\" value=\"";
                if ((($__internal_compile_6 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null)) {
                    echo (($__internal_compile_7 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 135);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 140
            echo "
            ";
            // line 141
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 141) == "textarea")) {
                // line 142
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 142)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 143);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <textarea name=\"custom_field[";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_8 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null)) {
                    echo (($__internal_compile_9 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 145);
                }
                echo "</textarea>
                  <div id=\"error-custom-field-";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 150
            echo "
            ";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 151) == "file")) {
                // line 152
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 152)) {
                    echo " required";
                }
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 156
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "]\" value=\"";
                if ((($__internal_compile_10 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null)) {
                    echo (($__internal_compile_11 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null);
                }
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                echo "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 163
            echo "
            ";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 164) == "date")) {
                // line 165
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 165)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 166);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "]\" value=\"";
                if ((($__internal_compile_12 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null)) {
                    echo (($__internal_compile_13 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 169);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 176
            echo "
            ";
            // line 177
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 177) == "time")) {
                // line 178
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 178)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 179);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "]\" value=\"";
                if ((($__internal_compile_14 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182)] ?? null) : null)) {
                    echo (($__internal_compile_15 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 182);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 182);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 189
            echo "
            ";
            // line 190
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 190) == "datetime")) {
                // line 191
                echo "              <div class=\"row mb-3";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 191)) {
                    echo " required";
                }
                echo "\">
                <label for=\"input-custom-field-";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 192);
                echo "</label>
                <div class=\"col-sm-12 input\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "]\" value=\"";
                if ((($__internal_compile_16 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) {
                    echo (($__internal_compile_17 = ($context["address_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 202
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
          <div class=\"mb-3 newsletter-box\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 206
        echo ($context["entry_default"] ?? null);
        echo "</label>
            <div class=\"col-sm-12\">
              <div class=\"form-check-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" id=\"input-default-yes\" class=\"form-check-input\"";
        // line 209
        if (($context["default"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-default-yes\" class=\"form-check-label\">";
        echo ($context["text_yes"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" id=\"input-default-no\" class=\"form-check-input\"";
        // line 212
        if ( !($context["default"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-default-no\" class=\"form-check-label\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-start\">
            <a href=\"";
        // line 219
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
          </div>
          <div class=\"float-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 222
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 226
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 227
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
        // line 234
        echo ($context["language"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            if (json['postcode_required'] == '1') {
                \$('#input-postcode').parent().parent().addClass('required');
            } else {
                \$('#input-postcode').parent().parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 249
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 255
        echo ($context["zone_id"] ?? null);
        echo "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>   ";
        // line 262
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 275
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/address_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 275,  775 => 262,  765 => 255,  756 => 249,  738 => 234,  728 => 227,  724 => 226,  717 => 222,  709 => 219,  695 => 212,  685 => 209,  679 => 206,  675 => 204,  668 => 202,  661 => 198,  645 => 195,  637 => 192,  630 => 191,  628 => 190,  625 => 189,  618 => 185,  602 => 182,  594 => 179,  587 => 178,  585 => 177,  582 => 176,  575 => 172,  559 => 169,  551 => 166,  544 => 165,  542 => 164,  539 => 163,  532 => 159,  521 => 157,  509 => 156,  503 => 153,  496 => 152,  494 => 151,  491 => 150,  484 => 146,  470 => 145,  463 => 143,  456 => 142,  454 => 141,  451 => 140,  444 => 136,  430 => 135,  423 => 133,  416 => 132,  414 => 131,  411 => 130,  404 => 126,  401 => 125,  380 => 122,  377 => 121,  373 => 120,  369 => 119,  364 => 117,  357 => 116,  355 => 115,  352 => 114,  345 => 110,  342 => 109,  321 => 106,  318 => 105,  314 => 104,  310 => 103,  305 => 101,  298 => 100,  296 => 99,  293 => 98,  286 => 94,  283 => 93,  268 => 91,  264 => 90,  260 => 89,  254 => 88,  247 => 86,  240 => 85,  238 => 84,  235 => 83,  231 => 82,  223 => 77,  213 => 70,  210 => 69,  195 => 67,  191 => 66,  187 => 65,  177 => 58,  171 => 57,  162 => 51,  156 => 50,  148 => 45,  142 => 44,  133 => 38,  127 => 37,  119 => 32,  113 => 31,  104 => 25,  98 => 24,  89 => 18,  83 => 17,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/address_form.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\account\\address_form.twig");
    }
}
