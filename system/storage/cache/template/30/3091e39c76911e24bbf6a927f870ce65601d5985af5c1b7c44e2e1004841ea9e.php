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

/* catalog/view/template/account/transaction.twig */
class __TwigTemplate_8a4814b1359a5e2f7d7b14afe0c298a7b6353b6632a522485fbdf059354ef14c extends Template
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
<div id=\"account-transaction\" class=\"container\">
  <div class=\"row row-responsive\">";
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
      <p>";
        // line 14
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th class=\"text-start money_transction\">";
        // line 18
        echo ($context["column_date_added"] ?? null);
        echo "</th>
            <th class=\"text-start money_transction\">";
        // line 19
        echo ($context["column_description"] ?? null);
        echo "</th>
            <th class=\"text-start money_transction\">";
        // line 20
        echo ($context["column_amount"] ?? null);
        echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 24
        if (($context["transactions"] ?? null)) {
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 26
                echo "              <tr>
                <td class=\"text-start\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 27);
                echo "</td>
                <td class=\"text-start\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 28);
                echo "</td>
                <td class=\"text-end\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 29);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "          ";
        } else {
            // line 33
            echo "            <tr>
              <td class=\"text-center\" colspan=\"5\"><p>";
            // line 34
            echo ($context["text_no_results"] ?? null);
            echo "</p></td>
            </tr>
          ";
        }
        // line 37
        echo "        </tbody>
      </table>
      <div class=\"row mb-3\">
        <div class=\"col-sm-6 text-start\">";
        // line 40
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-end\">";
        // line 41
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 44
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 46
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 47
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 49
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 49,  169 => 47,  165 => 46,  158 => 44,  152 => 41,  148 => 40,  143 => 37,  137 => 34,  134 => 33,  131 => 32,  122 => 29,  118 => 28,  114 => 27,  111 => 26,  106 => 25,  104 => 24,  97 => 20,  93 => 19,  89 => 18,  80 => 14,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/transaction.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\account\\transaction.twig");
    }
}
