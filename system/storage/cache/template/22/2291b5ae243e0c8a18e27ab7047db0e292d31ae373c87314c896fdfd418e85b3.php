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

/* catalog/view/template/checkout/voucher.twig */
class __TwigTemplate_0462d8559d36d88c30347e939b83b9b984fa9d1d4057c8989f1fcc223a0f45dd extends Template
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
<div id=\"account-voucher\" class=\"container\">
  ";
        // line 11
        if (($context["error_warning"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row row-responsive\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 15
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <h3>";
        // line 16
        echo ($context["text_voucher"] ?? null);
        echo "</h3>
      <p>";
        // line 17
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form id=\"form-voucher\" action=\"";
        // line 18
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <div class=\"row mb-3 required\">
          <div class=\"col-sm-12 form-floating\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 21
        echo ($context["to_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_to_name"] ?? null);
        echo "\" id=\"input-to-name\" class=\"form-control\"/>
            <label for=\"input-to-name\" class=\"col-sm-4 col-form-label\">";
        // line 22
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
            <div id=\"error-to-name\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          
          <div class=\"col-sm-12 form-floating\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 29
        echo ($context["to_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_to_email"] ?? null);
        echo "\" id=\"input-to-email\" class=\"form-control\"/>
            <label for=\"input-to-email\" class=\"col-sm-4 col-form-label\">";
        // line 30
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
            <div id=\"error-to-email\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3 required\">
          <div class=\"col-sm-12 form-floating\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 36
        echo ($context["from_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_from_name"] ?? null);
        echo "\" id=\"input-from-name\" class=\"form-control\"/>
            <label for=\"input-from-name\" class=\"col-sm-2 col-form-label\">";
        // line 37
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
            <div id=\"error-from-name\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-1 required\">
          <div class=\"col-sm-12 form-floating\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 43
        echo ($context["from_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_from_email"] ?? null);
        echo "\" id=\"input-from-email\" class=\"form-control\"/>
            <label for=\"input-from-email\" class=\"col-sm-2 col-form-label\">";
        // line 44
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
            <div id=\"error-from-email\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-1 required\">
          <label class=\"col-sm-4 col-form-label\">";
        // line 49
        echo ($context["entry_theme"] ?? null);
        echo "</label>
          <div class=\"col-sm-12 form-floating mb-2\">
            <div id=\"input-theme\">
              ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 53
            echo "                <div class=\"form-check\">
                  <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 54);
            echo "\" id=\"input-theme-";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 54);
            echo "\" class=\"form-check-input\"";
            if ((twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 54) == ($context["voucher_theme_id"] ?? null))) {
                echo " checked";
            }
            echo "/>
                  <label for=\"input-theme-";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 55);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 55);
            echo "</label>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </div>
            <div id=\"error-theme\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-12 form-floating\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" placeholder=\"";
        // line 64
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" class=\"form-control form_detail\">";
        echo ($context["message"] ?? null);
        echo "</textarea>
             <label for=\"input-message\" class=\"col-sm-2 col-form-label\"><span data-bs-toggle=\"tooltip\" title=\"";
        // line 65
        echo ($context["help_message"] ?? null);
        echo "\" class=\"col-sm-2 col-form-label certificate-massage\">";
        echo ($context["entry_message"] ?? null);
        echo "</span></label>
          </div>
        </div>
        <div class=\"row mb-3 required \">
          <div class=\"col-sm-12 form-floating\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 70
        echo ($context["amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_amount"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\"/>
            <label for=\"input-amount\" class=\"col-sm-2 col-form-label\"><span data-bs-toggle=\"tooltip\" title=\"";
        // line 71
        echo ($context["help_amount"] ?? null);
        echo "\">";
        echo ($context["entry_amount"] ?? null);
        echo "</span></label>
            <div id=\"error-amount\" class=\"invalid-feedback\"></div>
          </div>
        </div>
        <div class=\"d-inline-block pt-1 pd-2 w-100 \">
          <div class=\"float-end\">
            <div class=\"form-check form-check-inline\">
              <label class=\"form-check-label\" style=\"font-size: 13px;\">";
        // line 78
        echo ($context["text_agree"] ?? null);
        echo "</label>
              <input type=\"checkbox\" name=\"agree\" value=\"1\" style=\"height: 12px; width: 12px;\" class=\"form-check-input\"/>
              &nbsp;
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 82
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 86
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 87
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 89
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 89,  253 => 87,  249 => 86,  242 => 82,  235 => 78,  223 => 71,  217 => 70,  207 => 65,  201 => 64,  193 => 58,  182 => 55,  172 => 54,  169 => 53,  165 => 52,  159 => 49,  151 => 44,  145 => 43,  136 => 37,  130 => 36,  121 => 30,  115 => 29,  105 => 22,  99 => 21,  93 => 18,  89 => 17,  85 => 16,  80 => 15,  75 => 14,  69 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/voucher.twig", "C:\\xampp\\htdocs\\OPC003L01\\catalog\\view\\template\\checkout\\voucher.twig");
    }
}
