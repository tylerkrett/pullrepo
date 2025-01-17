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

/* catalog/view/template/account/affiliate.twig */
class __TwigTemplate_e16275f0dee94a229b9e3a582f5c3298cd42f8c4cfecfd1feb8ecc0d5dae8677 extends Template
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
  <h2 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h2>
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
<div id=\"account-affiliate\" class=\"container\">
  <div class=\"row row-responsive\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <form id=\"form-affiliate\" action=\"";
        // line 13
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">

        <fieldset>
          <legend>";
        // line 16
        echo ($context["text_my_affiliate"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-10 form-floating input\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 19
        echo ($context["company"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-company\" class=\"form-control\"/>
              <label for=\"input-company\" class=\"col-sm-2 col-form-label\">";
        // line 20
        echo ($context["entry_company"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating input\">
              <input type=\"text\" name=\"website\" value=\"";
        // line 25
        echo ($context["website"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_website"] ?? null);
        echo "\" id=\"input-website\" class=\"form-control\"/>
              <label for=\"input-website\" class=\"col-sm-2 col-form-label\">";
        // line 26
        echo ($context["entry_website"] ?? null);
        echo "</label>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>";
        // line 32
        echo ($context["text_payment"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 input form-floating\">
              <input type=\"text\" name=\"tax\" value=\"";
        // line 35
        echo ($context["tax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tax"] ?? null);
        echo "\" id=\"input-tax\" class=\"form-control\"/>
              <label for=\"input-tax\" class=\"col-sm-2 col-form-label\">";
        // line 36
        echo ($context["entry_tax"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"mb-3 required\">
            <label class=\"col-sm-12 col-form-label\">";
        // line 40
        echo ($context["entry_payment"] ?? null);
        echo "</label>
            <div class=\"col-sm-12 form-floating\">
              <div class=\"form-check\">
                <input type=\"radio\" name=\"payment\" value=\"cheque\" id=\"input-payment-cheque\" class=\"form-check-input\"";
        // line 43
        if ((($context["payment"] ?? null) == "cheque")) {
            echo " checked";
        }
        echo "/> <label for=\"input-payment-cheque\" class=\"form-check-label\">";
        echo ($context["text_cheque"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check\">
                <input type=\"radio\" name=\"payment\" value=\"paypal\" id=\"input-payment-paypal\" class=\"form-check-input\"";
        // line 46
        if ((($context["payment"] ?? null) == "paypal")) {
            echo " checked";
        }
        echo "/> <label for=\"input-payment-paypal\" class=\"form-check-label\">";
        echo ($context["text_paypal"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check\">
                <input type=\"radio\" name=\"payment\" value=\"bank\" id=\"input-payment-bank\" class=\"form-check-input\"";
        // line 49
        if ((($context["payment"] ?? null) == "bank")) {
            echo " checked";
        }
        echo "/> <label for=\"input-payment-bank\" class=\"form-check-label\">";
        echo ($context["text_bank"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-3 required required payment\" id=\"payment-cheque\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"cheque\" value=\"";
        // line 55
        echo ($context["cheque"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cheque"] ?? null);
        echo "\" id=\"input-cheque\" class=\"form-control\"/>
               <label for=\"input-cheque\" class=\"col-sm-2 col-form-label\">";
        // line 56
        echo ($context["entry_cheque"] ?? null);
        echo "</label>
              <div id=\"error-cheque\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required required payment\" id=\"payment-paypal\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"paypal\" value=\"";
        // line 62
        echo ($context["paypal"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_paypal"] ?? null);
        echo "\" id=\"input-paypal\" class=\"form-control\"/>
              <label for=\"input-paypal\" class=\"col-sm-2 col-form-label\">";
        // line 63
        echo ($context["entry_paypal"] ?? null);
        echo "</label>
              <div id=\"error-paypal\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div id=\"payment-bank\" class=\"payment\">
            <div class=\"row mb-3 required\">
              <div class=\"col-sm-12 form-floating\">
                <input type=\"text\" name=\"bank_name\" value=\"";
        // line 70
        echo ($context["bank_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_name"] ?? null);
        echo "\" id=\"input-bank-name\" class=\"form-control\"/>
                <label for=\"input-bank-name\" class=\"col-sm-2 col-form-label\">";
        // line 71
        echo ($context["entry_bank_name"] ?? null);
        echo "</label>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <div class=\"col-sm-12 form-floating\">
                <input type=\"text\" name=\"bank_branch_number\" value=\"";
        // line 76
        echo ($context["bank_branch_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "\" id=\"input-bank-branch-number\" class=\"form-control\"/>
                <label for=\"input-bank-branch-number\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_bank_branch_number"] ?? null);
        echo "</label>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <div class=\"col-sm-12 form-floating\">
                <input type=\"text\" name=\"bank_swift_code\" value=\"";
        // line 82
        echo ($context["bank_swift_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "\" id=\"input-bank-swift-code\" class=\"form-control\"/>
                <label for=\"input-bank-swift-code\" class=\"col-sm-2 col-form-label\">";
        // line 83
        echo ($context["entry_bank_swift_code"] ?? null);
        echo "</label>
              </div>
            </div>
            <div class=\"row mb-3 required required row\">
              <div class=\"col-sm-12 form-floating\">
                <input type=\"text\" name=\"bank_account_name\" value=\"";
        // line 88
        echo ($context["bank_account_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_name"] ?? null);
        echo "\" id=\"input-bank-account-name\" class=\"form-control\"/>
                <label for=\"input-bank-account-name\" class=\"col-sm-2 col-form-label\">";
        // line 89
        echo ($context["entry_bank_account_name"] ?? null);
        echo "</label>
                <div id=\"error-bank-account-name\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required required row\">
              <div class=\"col-sm-12 form-floating\">
                <input type=\"text\" name=\"bank_account_number\" value=\"";
        // line 95
        echo ($context["bank_account_number"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bank_account_number"] ?? null);
        echo "\" id=\"input-bank-account-number\" class=\"form-control\"/>
                <label for=\"input-bank-account-number\" class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_bank_account_number"] ?? null);
        echo "</label>
                <div id=\"error-bank-account-number\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </div>
          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 102
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 102) == "affiliate")) {
                // line 103
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 103) == "select")) {
                    // line 104
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 104)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 105);
                    echo "</label>
                  <div class=\"col-sm-12\">
                    <select name=\"custom_field[";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "]\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "\" class=\"form-select\">
                      <option value=\"\">";
                    // line 108
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 110
                        echo "                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                        echo "\"";
                        if (((($__internal_compile_0 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110) == (($__internal_compile_1 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110)] ?? null) : null)))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 110);
                        echo "</option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "                    </select>
                    <div id=\"error-custom-field-";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 117
                echo "
              ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 118) == "radio")) {
                    // line 119
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 119)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 120);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-custom-field-";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    echo "\">
                      ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 123));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 124
                        echo "                        <div class=\"form-check\">
                          <input type=\"radio\" name=\"custom_field[";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_2 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125) == (($__internal_compile_3 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 125);
                        echo "</label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                    </div>
                    <div id=\"error-custom-field-";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 133
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 134)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    echo "</label>
                  <div class=\"col-sm-10 form-floating\">
                    <div id=\"input-custom-field-";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "\">
                      ";
                    // line 138
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 138));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 139
                        echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"custom_field[";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        echo "\" id=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        echo "\" class=\"form-check-input\"";
                        if (((($__internal_compile_4 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140), (($__internal_compile_5 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)))) {
                            echo " checked";
                        }
                        echo "/> <label for=\"input-custom-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 140);
                        echo "\" class=\"form-check-label\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 140);
                        echo "</label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                    </div>
                    <div id=\"error-custom-field-";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 148
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "text")) {
                    // line 149
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 149)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    echo "]\" value=\"";
                    if ((($__internal_compile_6 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null)) {
                        echo (($__internal_compile_7 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 152);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    echo "\" class=\"form-control\"/>
                    <div id=\"error-custom-field-";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 157
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 157) == "textarea")) {
                    // line 158
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 158)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 159);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    echo "\" class=\"form-control\">";
                    if ((($__internal_compile_8 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null)) {
                        echo (($__internal_compile_9 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 161);
                    }
                    echo "</textarea>
                    <div id=\"error-custom-field-";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 166
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 166) == "file")) {
                    // line 167
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 167)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label class=\"col-sm-2 col-form-label\">";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 168);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 171
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-target=\"#input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                    echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                      <input type=\"hidden\" name=\"custom_field[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "]\" value=\"";
                    if ((($__internal_compile_10 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172)] ?? null) : null)) {
                        echo (($__internal_compile_11 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172)] ?? null) : null);
                    }
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "\"/>
                    </div>
                    <div id=\"error-custom-field-";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 178
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 178) == "date")) {
                    // line 179
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 179)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    echo "]\" value=\"";
                    if ((($__internal_compile_12 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null)) {
                        echo (($__internal_compile_13 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 183);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 183);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-control date\"/>
                      <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                    </div>
                    <div id=\"error-custom-field-";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 190
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 190) == "time")) {
                    // line 191
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 191)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 192);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                    echo "]\" value=\"";
                    if ((($__internal_compile_14 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) {
                        echo (($__internal_compile_15 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                    echo "\" class=\"form-control time\"/>
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
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "datetime")) {
                    // line 203
                    echo "                <div class=\"row mb-3 required";
                    if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 203)) {
                        echo " required";
                    }
                    echo " custom-field\">
                  <label for=\"input-custom-field-";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                    echo "\" class=\"col-sm-2 col-form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 204);
                    echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"custom_field[";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                    echo "]\" value=\"";
                    if ((($__internal_compile_16 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null)) {
                        echo (($__internal_compile_17 = ($context["affiliate_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 207);
                    }
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 207);
                    echo "\" id=\"input-custom-field-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                    echo "\" class=\"form-control datetime\"/>
                      <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                    </div>
                    <div id=\"error-custom-field-";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                    echo "\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              ";
                }
                // line 214
                echo "            ";
            }
            // line 215
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        </fieldset>

        <div class=\"pt-2 pd-2 d-inline-block w-100\">
          <div class=\"float-end\">
            ";
        // line 220
        if (($context["text_agree"] ?? null)) {
            // line 221
            echo "              <div class=\"form-check form-check-inline\">
                <label class=\"form-check-label\">";
            // line 222
            echo ($context["text_agree"] ?? null);
            echo "</label>
                <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
                &nbsp;
              </div>
            ";
        }
        // line 227
        echo "            <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>

      </form>
      ";
        // line 232
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 233
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment\\']').on('change', function () {
    \$('.payment').hide();

    \$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');
//--></script>
";
        // line 244
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/affiliate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 244,  742 => 233,  738 => 232,  729 => 227,  721 => 222,  718 => 221,  716 => 220,  710 => 216,  704 => 215,  701 => 214,  694 => 210,  678 => 207,  670 => 204,  663 => 203,  660 => 202,  653 => 198,  637 => 195,  629 => 192,  622 => 191,  619 => 190,  612 => 186,  596 => 183,  588 => 180,  581 => 179,  578 => 178,  571 => 174,  560 => 172,  548 => 171,  542 => 168,  535 => 167,  532 => 166,  525 => 162,  511 => 161,  504 => 159,  497 => 158,  494 => 157,  487 => 153,  473 => 152,  466 => 150,  459 => 149,  456 => 148,  449 => 144,  446 => 143,  425 => 140,  422 => 139,  418 => 138,  414 => 137,  409 => 135,  402 => 134,  399 => 133,  392 => 129,  389 => 128,  368 => 125,  365 => 124,  361 => 123,  357 => 122,  352 => 120,  345 => 119,  343 => 118,  340 => 117,  333 => 113,  330 => 112,  315 => 110,  311 => 109,  307 => 108,  301 => 107,  294 => 105,  287 => 104,  284 => 103,  281 => 102,  277 => 101,  269 => 96,  263 => 95,  254 => 89,  248 => 88,  240 => 83,  234 => 82,  226 => 77,  220 => 76,  212 => 71,  206 => 70,  196 => 63,  190 => 62,  181 => 56,  175 => 55,  162 => 49,  152 => 46,  142 => 43,  136 => 40,  129 => 36,  123 => 35,  117 => 32,  108 => 26,  102 => 25,  94 => 20,  88 => 19,  82 => 16,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/affiliate.twig", "C:\\xampp\\htdocs\\OPC003L01\\catalog\\view\\template\\account\\affiliate.twig");
    }
}
