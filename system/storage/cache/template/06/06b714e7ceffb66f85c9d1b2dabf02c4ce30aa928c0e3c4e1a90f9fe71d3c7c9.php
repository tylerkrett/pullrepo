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

/* catalog/view/template/account/returns_info.twig */
class __TwigTemplate_1ba67ef5e00a220ebf16c03d771b9ea0d293aee80312858475b08d71d09a6a7e extends Template
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
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <legend>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</legend>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-start\" colspan=\"2\">";
        // line 17
        echo ($context["text_return_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-start\" style=\"width: 50%;\"><b>";
        // line 22
        echo ($context["text_return_id"] ?? null);
        echo "</b> #";
        echo ($context["return_id"] ?? null);
        echo "
              <br/>
              <b>";
        // line 24
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-start\" style=\"width: 50%;\"><b>";
        // line 25
        echo ($context["text_orders_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "
              <br/>
              <b>";
        // line 27
        echo ($context["text_date_ordered"] ?? null);
        echo "</b> ";
        echo ($context["date_ordered"] ?? null);
        echo "</td>
          </tr>
        </tbody>
      </table>
      <h3>";
        // line 31
        echo ($context["text_product"] ?? null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 36
        echo ($context["column_product"] ?? null);
        echo "</td>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 37
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 38
        echo ($context["column_quantity"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-start\">";
        // line 43
        echo ($context["product"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 44
        echo ($context["model"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 45
        echo ($context["quantity"] ?? null);
        echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h3>";
        // line 50
        echo ($context["text_reason"] ?? null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"list table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 55
        echo ($context["column_reason"] ?? null);
        echo "</td>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 56
        echo ($context["column_opened"] ?? null);
        echo "</td>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 57
        echo ($context["column_action"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-start\">";
        // line 62
        echo ($context["reason"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 63
        echo ($context["opened"] ?? null);
        echo "</td>
              <td class=\"text-start\">";
        // line 64
        echo ($context["action"] ?? null);
        echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      ";
        // line 69
        if (($context["comment"] ?? null)) {
            // line 70
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-start bold\">";
            // line 74
            echo ($context["text_comment"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class=\"text-start\">";
            // line 79
            echo ($context["comment"] ?? null);
            echo "</td>
              </tr>
            </tbody>
          </table>
        </div>
      ";
        }
        // line 85
        echo "      <h3>";
        echo ($context["text_history"] ?? null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 90
        echo ($context["column_date_added"] ?? null);
        echo "</td>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 91
        echo ($context["column_status"] ?? null);
        echo "</td>
              <td class=\"text-start bold\" style=\"width: 33.3%;\">";
        // line 92
        echo ($context["column_comment"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
        // line 96
        if (($context["histories"] ?? null)) {
            // line 97
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 98
                echo "                <tr>
                  <td class=\"text-start\">";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 99);
                echo "</td>
                  <td class=\"text-start\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 100);
                echo "</td>
                  <td class=\"text-start\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 101);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            ";
        } else {
            // line 105
            echo "              <tr>
                <td colspan=\"3\" class=\"text-center\">";
            // line 106
            echo ($context["text_no_results"] ?? null);
            echo "</td>
              </tr>
            ";
        }
        // line 109
        echo "          </tbody>
        </table>
      </div>
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 113
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 115
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 116
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 118
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/returns_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 118,  305 => 116,  301 => 115,  294 => 113,  288 => 109,  282 => 106,  279 => 105,  276 => 104,  267 => 101,  263 => 100,  259 => 99,  256 => 98,  251 => 97,  249 => 96,  242 => 92,  238 => 91,  234 => 90,  225 => 85,  216 => 79,  208 => 74,  202 => 70,  200 => 69,  192 => 64,  188 => 63,  184 => 62,  176 => 57,  172 => 56,  168 => 55,  160 => 50,  152 => 45,  148 => 44,  144 => 43,  136 => 38,  132 => 37,  128 => 36,  120 => 31,  111 => 27,  104 => 25,  98 => 24,  91 => 22,  83 => 17,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/returns_info.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\account\\returns_info.twig");
    }
}
