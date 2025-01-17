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

/* catalog/view/template/account/returns_form.twig */
class __TwigTemplate_16d10a3937d36064760efd2772c49d21218aaa78331bc793def740f7d4ebcbe9 extends Template
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
<div id=\"account-return\" class=\"container\">
  <div class=\"row row-responsive\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <h2>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <p>";
        // line 14
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form id=\"form-return\" action=\"";
        // line 15
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 17
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
           
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 21
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
               <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 29
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 30
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 37
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 45
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
              <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 53
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
              <label for=\"input-order-id\" class=\"col-sm-2 col-form-label\">";
        // line 54
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating\">
              <label for=\"input-date-ordered\" class=\"col-sm-12 col-form-label\">";
        // line 60
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
              <div class=\"col-sm-12 col-md-4\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 63
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" id=\"input-date-ordered\" class=\"form-control date\"/>
                  <div class=\"input-group-text btn-primary\"><i class=\"fa-regular fa-calendar\"></i></div>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 71
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 75
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
              <label for=\"input-product\" class=\"col-sm-2 col-form-label\">";
        // line 76
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 82
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
              <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 83
        echo ($context["entry_model"] ?? null);
        echo "</label>
              <div id=\"error-model\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <div class=\"col-sm-12 form-floating\">
              <input type=\"text\" name=\"quantity\" value=\"1\" placeholder=\"";
        // line 89
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
              <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 90
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"row required\">
            <label class=\"col-sm-12 col-form-label\">";
        // line 94
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-12 form-floating\">
              <div id=\"input-reason\">
                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 98
            echo "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"return_reason_id\" value=\"";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 99);
            echo "\" id=\"input-return-reason-";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 99);
            echo "\" class=\"form-check-input\"/> <label for=\"input-return-reason-";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 99);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 99);
            echo "</label>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "              </div>
              <div id=\"error-reason\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row required\">
            <label class=\"col-sm-12 col-form-label\">";
        // line 107
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-12 form-floating\">
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/> <label for=\"input-opened-yes\" class=\"form-check-label\">";
        // line 110
        echo ($context["text_yes"] ?? null);
        echo "</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/> <label for=\"input-opened-no\" class=\"form-check-label\">";
        // line 113
        echo ($context["text_no"] ?? null);
        echo "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-comment\" class=\"col-sm-12 col-form-label\">";
        // line 118
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-12 form-floating\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 120
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control form_detail\"></textarea>
            </div>
          </div>
          ";
        // line 123
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-start\"><a href=\"";
        // line 126
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"float-end\">
            ";
        // line 128
        if (($context["text_agree"] ?? null)) {
            // line 129
            echo "              <div class=\"form-check form-check-inline\">
                <label class=\"form-check-label\">";
            // line 130
            echo ($context["text_agree"] ?? null);
            echo "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
                &nbsp;
              </div>
            ";
        }
        // line 134
        echo "            <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_submit"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 138
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 139
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 141
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/returns_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 141,  347 => 139,  343 => 138,  335 => 134,  328 => 130,  325 => 129,  323 => 128,  316 => 126,  310 => 123,  304 => 120,  299 => 118,  291 => 113,  285 => 110,  279 => 107,  272 => 102,  257 => 99,  254 => 98,  250 => 97,  244 => 94,  237 => 90,  233 => 89,  224 => 83,  218 => 82,  209 => 76,  201 => 75,  194 => 71,  181 => 63,  175 => 60,  166 => 54,  160 => 53,  150 => 46,  144 => 45,  134 => 38,  128 => 37,  118 => 30,  112 => 29,  102 => 22,  96 => 21,  89 => 17,  84 => 15,  80 => 14,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/returns_form.twig", "C:\\xampp\\htdocs\\OPC003L01\\catalog\\view\\template\\account\\returns_form.twig");
    }
}
