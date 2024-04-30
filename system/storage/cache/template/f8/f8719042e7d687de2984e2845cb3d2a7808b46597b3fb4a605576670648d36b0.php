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

/* admin/view/template/marketing/affiliate_form.twig */
class __TwigTemplate_324f3ed1367861d7718335b8c11faf9fe8d35e4231450d97c4029293fff99e3f extends Template
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
        <button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 6
        echo ($context["save"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-affiliate\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 23
        echo ($context["tab_history"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-transaction\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_transaction"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        echo ($context["tab_report"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>";
        // line 30
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\" class=\"tab-pane active\">
                  <label for=\"input-customer\" class=\"col-sm-2 col-form-label\">";
        // line 32
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"customer\" value=\"";
        // line 34
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\"";
        if (($context["customer_id"] ?? null)) {
            echo " disabled";
        }
        echo " autocomplete=\"off\"/>
                    <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 35
        echo ($context["customer_id"] ?? null);
        echo "\" id=\"input-customer-id\"/>
                    <input type=\"hidden\" name=\"customer_group_id\" value=\"";
        // line 36
        echo ($context["customer_group_id"] ?? null);
        echo "\" id=\"input-customer-group\"/>
                    <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
                    <div id=\"error-customer\" class=\"invalid-feedback\"></div>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-company\" class=\"col-sm-2 col-form-label\">";
        // line 43
        echo ($context["entry_company"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"company\" value=\"";
        // line 45
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-website\" class=\"col-sm-2 col-form-label\">";
        // line 50
        echo ($context["entry_website"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
        // line 52
        echo ($context["website"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_website"] ?? null);
        echo "\" id=\"input-website\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"row mb-3 required\">
                  <label for=\"input-tracking\" class=\"col-sm-2 col-form-label\">";
        // line 57
        echo ($context["entry_tracking"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tracking\" value=\"";
        // line 59
        echo ($context["tracking"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tracking"] ?? null);
        echo "\" id=\"input-tracking\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 60
        echo ($context["help_tracking"] ?? null);
        echo "</div>
                    <div id=\"error-tracking\" class=\"invalid-feedback\"></div>
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"input-commission\" class=\"col-sm-2 col-form-label\">";
        // line 66
        echo ($context["entry_commission"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"commission\" value=\"";
        // line 68
        echo ($context["commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_commission"] ?? null);
        echo "\" id=\"input-commission\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 69
        echo ($context["help_commission"] ?? null);
        echo "</div>
                  </div>
                </div>

                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 74
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 74) == "affiliate")) {
                // line 75
                echo "
                    ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 76) == "select")) {
                    // line 77
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 78);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"custom_field[";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    echo "\" class=\"form-select\">
                            <option value=\"\">";
                    // line 81
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                            ";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 83
                        echo "                              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83) == (($__internal_compile_1 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 83);
                        echo "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                          </select>
                          <div id=\"error-custom-field-";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 90
                echo "
                    ";
                // line 91
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 91) == "radio")) {
                    // line 92
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 93);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 96
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 96));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 97
                        echo "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                        // line 98
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98) == (($__internal_compile_3 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 98);
                        echo "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "                          </div>
                          <div id=\"error-custom-field-";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 106
                echo "
                    ";
                // line 107
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 107) == "checkbox")) {
                    // line 108
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 109);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-custom-field-";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 112));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 113
                        echo "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[";
                        // line 114
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114), (($__internal_compile_5 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                        echo "</label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "                          </div>
                          <div id=\"error-custom-field-";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 122
                echo "
                    ";
                // line 123
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "text")) {
                    // line 124
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"custom_field[";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_6 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) ? ((($__internal_compile_7 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 127)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 127);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 132
                echo "
                    ";
                // line 133
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "textarea")) {
                    // line 134
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"custom_field[";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_compile_8 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)) ? ((($__internal_compile_9 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 137)));
                    echo "</textarea>
                          <div id=\"error-custom-field-";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 142
                echo "
                    ";
                // line 143
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "file")) {
                    // line 144
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 148
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                            <input type=\"text\" name=\"custom_field[";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_10 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null)) ? ((($__internal_compile_11 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    echo "\" class=\"form-control\" readonly/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    echo "\"";
                    if ( !(($__internal_compile_12 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    echo ($context["button_download"] ?? null);
                    echo "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 151
                    echo ($context["button_clear"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                    echo "\"";
                    if ( !(($__internal_compile_13 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null)) {
                        echo " disabled";
                    }
                    echo " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
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
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "date")) {
                    // line 159
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_14 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) ? ((($__internal_compile_15 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 163)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    echo "\" class=\"form-control date\"/>
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
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 171) == "time")) {
                    // line 172
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 173);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_16 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) ? ((($__internal_compile_17 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 176)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    echo "\" class=\"form-control time\"/>
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
                // line 184
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 184) == "datetime")) {
                    // line 185
                    echo "                      <div class=\"row mb-3 custom-field custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    echo "\">
                        <label for=\"input-custom-field-";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 186);
                    echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"custom_field[";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    echo "]\" value=\"";
                    echo (((($__internal_compile_18 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null)) ? ((($__internal_compile_19 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 189)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    echo "\" class=\"form-control datetime\"/>
                            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                          </div>
                          <div id=\"error-custom-field-";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                    echo "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 196
                echo "
                  ";
            }
            // line 198
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "              </fieldset>

              <fieldset>
                <legend>";
        // line 202
        echo ($context["text_payment"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-tax\" class=\"col-sm-2 col-form-label\">";
        // line 204
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"tax\" value=\"";
        // line 206
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 210
        echo ($context["entry_payment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment\" value=\"cheque\" id=\"input-payment-cheque\" class=\"form-check-input\"";
        // line 213
        if ((($context["payment"] ?? null) == "cheque")) {
            echo " checked";
        }
        echo "/>
                      <label for=\"input-payment-cheque\" class=\"form-check-label\">";
        // line 214
        echo ($context["text_cheque"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment\" value=\"paypal\" id=\"input-payment-paypal\" class=\"form-check-input\"";
        // line 217
        if ((($context["payment"] ?? null) == "paypal")) {
            echo " checked";
        }
        echo "/>
                      <label for=\"input-payment-paypal\" class=\"form-check-label\">";
        // line 218
        echo ($context["text_paypal"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment\" value=\"bank\" id=\"input-payment-bank\" class=\"form-check-input\"";
        // line 221
        if ((($context["payment"] ?? null) == "bank")) {
            echo " checked";
        }
        echo "/>
                      <label for=\"input-payment-bank\" class=\"form-check-label\">";
        // line 222
        echo ($context["text_bank"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div id=\"payment-cheque\" class=\"payment\">
                  <div class=\"row mb-3 required\">
                    <label for=\"input-cheque\" class=\"col-sm-2 col-form-label\">";
        // line 228
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"cheque\" value=\"";
        // line 230
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\"/>
                      <div id=\"error-cheque\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                </div>
                <div id=\"payment-paypal\" class=\"payment\">
                  <div class=\"row mb-3 required\">
                    <label for=\"input-paypal\" class=\"col-sm-2 col-form-label\">";
        // line 237
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"paypal\" value=\"";
        // line 239
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\"/>
                      <div id=\"error-paypal\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                </div>
                <div id=\"payment-bank\" class=\"payment\">
                  <div class=\"row mb-3\">
                    <label for=\"input-bank-name\" class=\"col-sm-2 col-form-label\">";
        // line 246
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_name\" value=\"";
        // line 248
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-bank-branch-number\" class=\"col-sm-2 col-form-label\">";
        // line 252
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 254
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-bank-swift-code\" class=\"col-sm-2 col-form-label\">";
        // line 258
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 260
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-bank-account-name\" class=\"col-sm-2 col-form-label\">";
        // line 264
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 266
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\"/>
                      <div id=\"error-bank-account-name\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-bank-account-number\" class=\"col-sm-2 col-form-label\">";
        // line 271
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 273
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\"/>
                      <div id=\"error-bank-account-number\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 280
        echo ($context["text_other"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 282
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"status\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 286
        if (($context["status"] ?? null)) {
            echo " checked";
        }
        echo "/>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 294
        echo ($context["text_history"] ?? null);
        echo "</legend>
                <div id=\"history\">";
        // line 295
        echo ($context["history"] ?? null);
        echo "</div>
              </fieldset>
              <br/>
              <fieldset>
                <legend>";
        // line 299
        echo ($context["text_history_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 301
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 303
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 308
        echo ($context["button_history_add"] ?? null);
        echo "</button>
              </div>
            </div>
            <div id=\"tab-transaction\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 313
        echo ($context["text_transaction"] ?? null);
        echo "</legend>
                <div id=\"transaction\">";
        // line 314
        echo ($context["transaction"] ?? null);
        echo "</div>
              </fieldset>
              <br/>
              <fieldset>
                <legend>";
        // line 318
        echo ($context["text_transaction_add"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-transaction\" class=\"col-sm-2 col-form-label\">";
        // line 320
        echo ($context["entry_description"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
        // line 322
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-transaction\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-amount\" class=\"col-sm-2 col-form-label\">";
        // line 326
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
        // line 328
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-transaction\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 333
        echo ($context["button_transaction_add"] ?? null);
        echo "</button>
              </div>
            </div>
            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 338
        echo ($context["text_report"] ?? null);
        echo "</legend>
                <div id=\"report\">";
        // line 339
        echo ($context["report"] ?? null);
        echo "</div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 352
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-customer').val(item['label']);
        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);

        \$('#input-customer-group').trigger('change');
    }
});

\$('#input-customer-group').on('change', function () {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 377
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
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

\$('#history').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#button-history').on('click', function (e) {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/customer.addHistory&user_token=";
        // line 411
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$('#input-comment').val()),
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=customer/customer.history&user_token=";
        // line 431
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-history').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#transaction').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#transaction').load(this.href);
});

\$('#button-transaction').on('click', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=customer/customer.addTransaction&user_token=";
        // line 452
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val(),
        type: 'post',
        dataType: 'json',
        data: 'description=' + encodeURIComponent(\$('#input-transaction').val()) + '&amount=' + encodeURIComponent(\$('#input-amount').val()),
        beforeSend: function () {
            \$('#button-transaction').button('loading');
        },
        complete: function () {
            \$('#button-transaction').button('reset');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#transaction').load('index.php?route=customer/customer.transaction&user_token=";
        // line 472
        echo ($context["user_token"] ?? null);
        echo "&customer_id=' + \$('#input-customer-id').val());

                \$('#input-transaction').val('');
                \$('#input-amount').val('');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#report').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#report').load(this.href);
});

\$('input[name=\\'payment\\']').on('change', function () {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');
//--></script>
";
        // line 498
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketing/affiliate_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1119 => 498,  1090 => 472,  1067 => 452,  1043 => 431,  1020 => 411,  983 => 377,  955 => 352,  939 => 339,  935 => 338,  927 => 333,  919 => 328,  914 => 326,  907 => 322,  902 => 320,  897 => 318,  890 => 314,  886 => 313,  878 => 308,  870 => 303,  865 => 301,  860 => 299,  853 => 295,  849 => 294,  836 => 286,  829 => 282,  824 => 280,  812 => 273,  807 => 271,  797 => 266,  792 => 264,  783 => 260,  778 => 258,  769 => 254,  764 => 252,  755 => 248,  750 => 246,  738 => 239,  733 => 237,  721 => 230,  716 => 228,  707 => 222,  701 => 221,  695 => 218,  689 => 217,  683 => 214,  677 => 213,  671 => 210,  662 => 206,  657 => 204,  652 => 202,  647 => 199,  641 => 198,  637 => 196,  630 => 192,  618 => 189,  610 => 186,  605 => 185,  603 => 184,  600 => 183,  593 => 179,  581 => 176,  573 => 173,  568 => 172,  566 => 171,  563 => 170,  556 => 166,  544 => 163,  536 => 160,  531 => 159,  529 => 158,  526 => 157,  519 => 153,  508 => 151,  498 => 150,  490 => 149,  478 => 148,  472 => 145,  467 => 144,  465 => 143,  462 => 142,  455 => 138,  445 => 137,  438 => 135,  433 => 134,  431 => 133,  428 => 132,  421 => 128,  411 => 127,  404 => 125,  399 => 124,  397 => 123,  394 => 122,  387 => 118,  384 => 117,  363 => 114,  360 => 113,  356 => 112,  352 => 111,  347 => 109,  342 => 108,  340 => 107,  337 => 106,  330 => 102,  327 => 101,  306 => 98,  303 => 97,  299 => 96,  295 => 95,  290 => 93,  285 => 92,  283 => 91,  280 => 90,  273 => 86,  270 => 85,  255 => 83,  251 => 82,  247 => 81,  241 => 80,  234 => 78,  229 => 77,  227 => 76,  224 => 75,  221 => 74,  217 => 73,  210 => 69,  204 => 68,  199 => 66,  190 => 60,  184 => 59,  179 => 57,  169 => 52,  164 => 50,  154 => 45,  149 => 43,  139 => 36,  135 => 35,  125 => 34,  120 => 32,  115 => 30,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  90 => 20,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketing/affiliate_form.twig", "C:\\xampp\\htdocs\\OPC052L03\\admin\\view\\template\\marketing\\affiliate_form.twig");
    }
}
