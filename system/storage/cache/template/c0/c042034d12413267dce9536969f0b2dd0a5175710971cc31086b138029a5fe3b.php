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

/* catalog/view/template/account/forgotten.twig */
class __TwigTemplate_078234bb0ea1257d44726cf0a349e436e9e6e372e301499fbc762f217f260c5a extends Template
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
<div id=\"account-forgotten\" class=\"container\">
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
        echo ($context["text_email"] ?? null);
        echo "</p>
      <form id=\"form-forgotten\" action=\"";
        // line 15
        echo ($context["confirm"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 17
        echo ($context["text_your_email"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            
            <div class=\"col-sm-10 form-floating\">
              <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 21
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <label for=\"input-email\" class=\"col-sm-4 col-form-label\">";
        // line 22
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-start\"><a href=\"";
        // line 28
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"float-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 30
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 34
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 35
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 37
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 37,  127 => 35,  123 => 34,  116 => 30,  109 => 28,  100 => 22,  96 => 21,  89 => 17,  84 => 15,  80 => 14,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/forgotten.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\catalog\\view\\template\\account\\forgotten.twig");
    }
}
