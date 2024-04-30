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

/* catalog/view/template/common/success.twig */
class __TwigTemplate_a687a6bfd7de6dd38589018337ba3acfa92e32f26feaa297e34beeeaa0727f3e extends Template
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
            echo "      <li><a href=\"";
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
<div id=\"common-success\" class=\"container\">
  <div class=\"row\">
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <h3 class=\"mb-3 success-title\"><i class=\"fas fa-check-circle text-success\"></i>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      ";
        // line 14
        echo ($context["text_message"] ?? null);
        echo "
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-start\"><a href=\"";
        // line 16
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 18
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 19
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 21
        echo ($context["footer"] ?? null);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  93 => 19,  89 => 18,  82 => 16,  77 => 14,  73 => 13,  68 => 12,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/success.twig", "C:\\xampp\\htdocs\\OPC001L01_2.3\\catalog\\view\\template\\common\\success.twig");
    }
}
