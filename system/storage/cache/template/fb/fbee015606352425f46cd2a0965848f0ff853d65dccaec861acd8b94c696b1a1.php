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

/* catalog/view/template/account/register.twig */
class __TwigTemplate_0b02f473f5e1b4a97e13c795690548828e8615d5a005bc38d4967443da541f71 extends Template
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
        echo "  ";
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
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
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
<div id=\"account-register\" class=\"container\">
  <div class=\"row row-responsive\">
    ";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 13
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <h2>";
        // line 14
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <p class=\"already-login\">";
        // line 15
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form id=\"form-register\" action=\"";
        // line 16
        echo ($context["register"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset id=\"account\">
          <legend>";
        // line 18
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          ";
        // line 19
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            // line 20
            echo "          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
            // line 21
            echo ($context["entry_customer_group"] ?? null);
            echo "</label>
            <div class=\"col-sm-12\">
              <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 25
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 25);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 25) == ($context["customer_group_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 25);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "              </select>
            </div>
          </div>
          ";
        }
        // line 31
        echo "          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 33
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 40
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 47
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 48
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 53
        if (($context["config_telephone_display"] ?? null)) {
            // line 54
            echo "            <div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
              <div class=\"col-sm-12 form-floating\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
            // line 56
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
                <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 57
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
        }
        // line 62
        echo "
          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 64
            echo "
            ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 65) == "select")) {
                // line 66
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                echo "\">
                <label for=\"input-custom-field-";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 67);
                echo "</label>
                <div class=\"col-sm-12\">
                  <select name=\"custom_field[";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                echo "\" class=\"form-select\">
                    <option value=\"\">";
                // line 70
                echo ($context["text_select"] ?? null);
                echo "</option>
                    ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 71));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 72
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 72);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                  </select>
                  <div id=\"error-custom-field-";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 79
            echo "
            ";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 80) == "radio")) {
                // line 81
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 82);
                echo "</label>
                <div class=\"col-sm-12\">
                  <div id=\"input-custom-field-";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                echo "\">
                    ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 86
                    echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 87);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 95
            echo "
            ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 96) == "checkbox")) {
                // line 97
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 98
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 98);
                echo "</label>
                <div class=\"col-sm-12\">
                  <div id=\"input-custom-field-";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                echo "\">
                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 102
                    echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 103);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 111
            echo "
            ";
            // line 112
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "text")) {
                // line 113
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "\">
                <label for=\"input-custom-field-";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 114);
                echo "</label>
                <div class=\"col-sm-12\">
                  <input type=\"text\" name=\"custom_field[";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 116);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 116);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 121
            echo "
            ";
            // line 122
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 122) == "textarea")) {
                // line 123
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\">
                <label for=\"input-custom-field-";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                echo "</label>
                <div class=\"col-sm-12\">
                  <textarea name=\"custom_field[";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 126);
                echo "</textarea>
                  <div id=\"error-custom-field-";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 131
            echo "
            ";
            // line 132
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "file")) {
                // line 133
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                echo "</label>
                <div class=\"col-sm-12\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 137
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "]\" value=\"\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                echo "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 144
            echo "
            ";
            // line 145
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 145) == "date")) {
                // line 146
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                echo "\">
                <label for=\"input-custom-field-";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                echo "</label>
                <div class=\"col-sm-12\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 150);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 157
            echo "
            ";
            // line 158
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "time")) {
                // line 159
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\">
                <label for=\"input-custom-field-";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                echo "</label>
                <div class=\"col-sm-12\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 163);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 170
            echo "
            ";
            // line 171
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 171) == "datetime")) {
                // line 172
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\">
                <label for=\"input-custom-field-";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 173);
                echo "</label>
                <div class=\"col-sm-12\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 176);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 183
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "        </fieldset>

        <fieldset>
          <legend>";
        // line 188
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 191
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
              <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 192
        echo ($context["entry_password"] ?? null);
        echo "</label>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend class=\"legend-text\">";
        // line 198
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
          <div class=\"mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 200
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-sm-12\">
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" class=\"form-check-input\"/>
                <label for=\"input-newsletter-yes\" class=\"form-check-label\">";
        // line 204
        echo ($context["text_yes"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" class=\"form-check-input\" checked/>
                <label for=\"input-newsletter-no\" class=\"form-check-label\">";
        // line 208
        echo ($context["text_no"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
        </fieldset>
        ";
        // line 213
        echo ($context["captcha"] ?? null);
        echo "

        <div class=\"d-inline-block pt-2 pd-2 w-100 mb-3\">
          <div class=\"float-end text-right\">
            ";
        // line 217
        if (($context["text_agree"] ?? null)) {
            // line 218
            echo "              <div class=\"form-check form-check-inline\">
                <label class=\"form-check-label\" style=\"font-size: 13px;\">";
            // line 219
            echo ($context["text_agree"] ?? null);
            echo "</label>
                <input type=\"checkbox\" name=\"agree\" value=\"1\" style=\"height: 12px; width: 12px;\" class=\"form-check-input\"/>
              </div>
            ";
        }
        // line 223
        echo "            <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 227
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 229
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language=";
        // line 235
        echo ($context["language"] ?? null);
        echo "',
        dataType: 'json',
        success: function (json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
";
        // line 259
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  707 => 259,  680 => 235,  671 => 229,  666 => 227,  658 => 223,  651 => 219,  648 => 218,  646 => 217,  639 => 213,  631 => 208,  624 => 204,  617 => 200,  612 => 198,  603 => 192,  599 => 191,  593 => 188,  588 => 185,  581 => 183,  574 => 179,  562 => 176,  554 => 173,  549 => 172,  547 => 171,  544 => 170,  537 => 166,  525 => 163,  517 => 160,  512 => 159,  510 => 158,  507 => 157,  500 => 153,  488 => 150,  480 => 147,  475 => 146,  473 => 145,  470 => 144,  463 => 140,  456 => 138,  444 => 137,  438 => 134,  433 => 133,  431 => 132,  428 => 131,  421 => 127,  411 => 126,  404 => 124,  399 => 123,  397 => 122,  394 => 121,  387 => 117,  377 => 116,  370 => 114,  365 => 113,  363 => 112,  360 => 111,  353 => 107,  350 => 106,  333 => 103,  330 => 102,  326 => 101,  322 => 100,  317 => 98,  312 => 97,  310 => 96,  307 => 95,  300 => 91,  297 => 90,  280 => 87,  277 => 86,  273 => 85,  269 => 84,  264 => 82,  259 => 81,  257 => 80,  254 => 79,  247 => 75,  244 => 74,  233 => 72,  229 => 71,  225 => 70,  219 => 69,  212 => 67,  207 => 66,  205 => 65,  202 => 64,  198 => 63,  195 => 62,  187 => 57,  183 => 56,  175 => 54,  173 => 53,  165 => 48,  161 => 47,  152 => 41,  148 => 40,  139 => 34,  135 => 33,  131 => 31,  125 => 27,  110 => 25,  106 => 24,  100 => 21,  97 => 20,  95 => 19,  91 => 18,  86 => 16,  82 => 15,  78 => 14,  73 => 13,  69 => 12,  63 => 8,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/register.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\account\\register.twig");
    }
}
