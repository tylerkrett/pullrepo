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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_858b906f6caf905f3a026adbd02f4ec6c7d96d9f74bd0d7e8ac3e604039129c7 extends Template
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
<div id=\"checkout-checkout\" class=\"container\">
  <div class=\"row row-responsive\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <div class=\"row row-responsive\">
        <div class=\"col-md-7 mb-3\">

          ";
        // line 16
        if (($context["register"] ?? null)) {
            // line 17
            echo "            <div id=\"checkout-register\">";
            echo ($context["register"] ?? null);
            echo "</div>
          ";
        }
        // line 19
        echo "
          ";
        // line 20
        if (($context["payment_address"] ?? null)) {
            // line 21
            echo "            <div id=\"checkout-payment-address\">";
            echo ($context["payment_address"] ?? null);
            echo "</div>
          ";
        }
        // line 23
        echo "
          ";
        // line 24
        if (($context["shipping_address"] ?? null)) {
            // line 25
            echo "            <div id=\"checkout-shipping-address\">";
            echo ($context["shipping_address"] ?? null);
            echo "</div>
          ";
        }
        // line 27
        echo "
        </div>
        <div class=\"col-md-5\">
          ";
        // line 30
        if (($context["shipping_method"] ?? null)) {
            // line 31
            echo "            <div id=\"checkout-shipping-method\" class=\"mb-3\">";
            echo ($context["shipping_method"] ?? null);
            echo "</div>
          ";
        }
        // line 33
        echo "          <div id=\"checkout-payment-method\" class=\"mb-4\">";
        echo ($context["payment_method"] ?? null);
        echo "</div>

          <div id=\"checkout-confirm\">";
        // line 35
        echo ($context["confirm"] ?? null);
        echo "</div>

        </div>
      </div>
    </div>
    ";
        // line 40
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 42
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 44
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  141 => 42,  136 => 40,  128 => 35,  122 => 33,  116 => 31,  114 => 30,  109 => 27,  103 => 25,  101 => 24,  98 => 23,  92 => 21,  90 => 20,  87 => 19,  81 => 17,  79 => 16,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/checkout.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\checkout\\checkout.twig");
    }
}
