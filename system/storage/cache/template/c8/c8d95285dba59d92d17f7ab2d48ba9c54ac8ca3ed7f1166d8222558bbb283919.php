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

/* extension/ishifaqblock/catalog/view/template/module/ishifaqblock.twig */
class __TwigTemplate_a13a7974d724565e6c533c9edd3036b5e284bf223d8198beafc471166c8fc258 extends Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishifaqblock\">
  <div  class=\"container\">
    <div id=\"accordion\">
      ";
        // line 4
        $context["item"] = 1;
        // line 5
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 6
            echo "      <div class=\"card\">
          <div class=\"card-header\">
            <a class=\"btn\" data-bs-toggle=\"collapse\" href=\"#collapseOne_";
            // line 8
            echo ($context["item"] ?? null);
            echo "\" ";
            if ((($context["item"] ?? null) == 1)) {
                echo " aria-expanded=\"true\" ";
            }
            echo ">
              <span class=\"category-count\">";
            // line 9
            if ((($context["item"] ?? null) < 9)) {
                echo " ";
                echo ($context["item"] ?? null);
                echo ". ";
            } else {
                echo " ";
                echo ($context["item"] ?? null);
                echo " ";
            }
            echo "</span>
              ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["faq"], "title", [], "any", false, false, false, 10)) {
                // line 11
                echo "              <div class=\"faq-width\">";
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "title", [], "any", false, false, false, 11);
                echo "</div>
              ";
            }
            // line 13
            echo "            </a>
          </div>
          <div id=\"collapseOne_";
            // line 15
            echo ($context["item"] ?? null);
            echo "\" class=\"collapse accordion__content ";
            if ((($context["item"] ?? null) == 1)) {
                echo "show";
            }
            echo "\" data-bs-parent=\"#accordion\">
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["faq"], "description", [], "any", false, false, false, 16)) {
                // line 17
                echo "            <div class=\"card-body\">
              ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["faq"], "description", [], "any", false, false, false, 18);
                echo "
            </div>
            ";
            }
            // line 21
            echo "          </div>
        </div>
      ";
            // line 23
            $context["item"] = (($context["item"] ?? null) + 1);
            // line 24
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishifaqblock/catalog/view/template/module/ishifaqblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  112 => 24,  110 => 23,  106 => 21,  100 => 18,  97 => 17,  95 => 16,  87 => 15,  83 => 13,  77 => 11,  75 => 10,  63 => 9,  55 => 8,  51 => 6,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifaqblock/catalog/view/template/module/ishifaqblock.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\extension\\ishifaqblock\\catalog\\view\\template\\module\\ishifaqblock.twig");
    }
}
