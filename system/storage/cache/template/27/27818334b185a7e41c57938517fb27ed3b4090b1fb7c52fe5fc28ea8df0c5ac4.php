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

/* catalog/view/template/product/review_list.twig */
class __TwigTemplate_65a2600ed13009e6e6eb1dbcdf38b2b7ea2bfebd3bc0945d3432cab227dca6f5 extends Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "    <table class=\"table table-striped table-bordered\">
      <tr>
        <td style=\"width: 50%;\"><strong>";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5);
                echo "</strong></td>
        <td class=\"text-end\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 6);
                echo "</td>
      </tr>
      <tr>
        <td colspan=\"2\"><p class=\"mb-2\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 9);
                echo "</p>
          <div class=\"rating\">
            ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 12
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 12) < $context["i"])) {
                        // line 13
                        echo "                <span class=\"fa fa-stack\">
                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
                </span>
              ";
                    } else {
                        // line 17
                        echo "                <span class=\"fs fa-stack\">
                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                </span>
              ";
                    }
                    // line 21
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "          </div>
        </td>
      </tr>
    </table>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  <div class=\"text-end\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 29
            echo "  <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  98 => 27,  88 => 22,  82 => 21,  76 => 17,  70 => 13,  67 => 12,  63 => 11,  58 => 9,  52 => 6,  48 => 5,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/review_list.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\product\\review_list.twig");
    }
}