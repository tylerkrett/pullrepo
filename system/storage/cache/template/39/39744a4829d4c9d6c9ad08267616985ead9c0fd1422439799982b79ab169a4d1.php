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

/* catalog/view/template/common/currency.twig */
class __TwigTemplate_fff01c3ba0623d626555a1c37510c69af025834dc3510737a0df10ff3e30cb51 extends Template
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
        echo "
";
        // line 2
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 3
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"dropdown\">
      <div data-bs-toggle=\"dropdown\" class=\"dropdown-toggle\">";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 5) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null)))) {
                } elseif ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 5) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null)))) {
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <span class=\"d-md-inline\">";
            echo ($context["text_currency"] ?? null);
            echo " <i class=\"fa fa-angle-down\"></i> </span>
      </div>
      <ul class=\"dropdown-menu\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 9
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 10);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 10);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 10);
                    echo "</a></li>
          ";
                } else {
                    // line 12
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 12);
                    echo "</a></li>
          ";
                }
                // line 14
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\"/> <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 17
            echo ($context["redirect"] ?? null);
            echo "\"/>
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 17,  98 => 15,  92 => 14,  82 => 12,  72 => 10,  69 => 9,  65 => 8,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/currency.twig", "C:\\xampp\\htdocs\\OPC052L03\\catalog\\view\\template\\common\\currency.twig");
    }
}
