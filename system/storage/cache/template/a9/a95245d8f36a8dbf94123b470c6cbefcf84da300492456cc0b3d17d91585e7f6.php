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

/* catalog/view/template/common/language.twig */
class __TwigTemplate_ba03e459f54f05ac9e8c9d5466eb8bfe9780f4dcb0c30afcddca4ad75d5bbc65 extends Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "  <div class=\"dropdown\">
    <div class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
      <span class=\"d-md-inline\">";
            // line 4
            echo ($context["text_language"] ?? null);
            echo " <i class=\"fa fa-angle-down\"></i> </span>
    </div>
    <ul class=\"dropdown-menu\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 8
                echo "        <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 8);
                echo "\" class=\"dropdown-item\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                echo "\"/> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  53 => 8,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/language.twig", "C:\\xampp\\htdocs\\OPC052L01_new\\catalog\\view\\template\\common\\language.twig");
    }
}
