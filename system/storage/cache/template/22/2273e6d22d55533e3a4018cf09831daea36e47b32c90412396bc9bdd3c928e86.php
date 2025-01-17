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

/* catalog/view/template/account/order_list.twig */
class __TwigTemplate_a4b571877dec988a2ef4d6d84d33941f1ab24946e9899ff669ffbbf8e4c5ef39 extends Template
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
<div id=\"account-order\" class=\"container\">
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
        echo ($context["text_history"] ?? null);
        echo "</legend>
      ";
        // line 14
        if (($context["orders"] ?? null)) {
            // line 15
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-start bold\">";
            // line 19
            echo ($context["column_order_id"] ?? null);
            echo "</td>
                <td class=\"text-start bold\">";
            // line 20
            echo ($context["column_customer"] ?? null);
            echo "</td>
                <td class=\"text-start bold\">";
            // line 21
            echo ($context["column_product"] ?? null);
            echo "</td>
                <td class=\"text-start bold\">";
            // line 22
            echo ($context["column_status"] ?? null);
            echo "</td>
                <td class=\"text-start bold\">";
            // line 23
            echo ($context["column_total"] ?? null);
            echo "</td>
                <td class=\"text-start bold\">";
            // line 24
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td class=\"text-center bold\">";
            // line 25
            echo ($context["column_action"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 30
                echo "                <tr>
                  <td class=\"text-start\">#";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 31);
                echo "</td>
                  <td class=\"text-start\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 32);
                echo "</td>
                  <td class=\"text-start\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 33);
                echo "</td>
                  <td class=\"text-start\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 34);
                echo "</td>
                  <td class=\"text-start\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 35);
                echo "</td>
                  <td class=\"text-start\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 36);
                echo "</td>
                  <td class=\"text-center\"><a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 37);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-eye\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row mb-3\">
          <div class=\"col-sm-6 text-start\">";
            // line 44
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 45
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 48
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 50
        echo "      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 51
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 53
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 54
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 56,  197 => 54,  193 => 53,  186 => 51,  183 => 50,  177 => 48,  171 => 45,  167 => 44,  161 => 40,  150 => 37,  146 => 36,  142 => 35,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  123 => 30,  119 => 29,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  82 => 15,  80 => 14,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_list.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\account\\order_list.twig");
    }
}
