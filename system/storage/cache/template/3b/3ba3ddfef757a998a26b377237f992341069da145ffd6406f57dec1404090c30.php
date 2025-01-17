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

/* catalog/view/template/account/address_list.twig */
class __TwigTemplate_61b5b371d956d9df402ade6264d26b2fb4625e42a47cbcc3b375537ccbf6bb52 extends Template
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
        if (($context["addresses"] ?? null)) {
            // line 2
            echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 5
                echo "        <tr>
          <td class=\"text-start\">";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 6);
                echo "</td>
          <td class=\"text-end\"><a href=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["address"], "edit", [], "any", false, false, false, 7);
                echo "\" class=\"btn btn-primary mb-2\">";
                echo ($context["button_edit"] ?? null);
                echo "</a> 
          <a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["address"], "delete", [], "any", false, false, false, 8);
                echo "\" class=\"btn btn-danger button_delete mb-2\">";
                echo ($context["button_delete"] ?? null);
                echo "</a></td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </table>
  </div>
";
        } else {
            // line 14
            echo "  <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  71 => 11,  60 => 8,  54 => 7,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/address_list.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\account\\address_list.twig");
    }
}
