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

/* extension/ishipaymentblock/catalog/view/template/module/ishipaymentblock.twig */
class __TwigTemplate_51fc33c4587377dfa6155753356bb54ea576e51ccd69a79f680a2de26d47c4f7 extends Template
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
        echo "<div id=\"_desktop_paymentblock  \" class=\"ishipaymentblock ";
        echo ($context["column_class"] ?? null);
        echo "\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "      <div class=\"paymentblock\"> 
        <a href=\"";
            // line 4
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4);
            echo "\">
          <img src=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
            echo "\" class=\"img-responsive\" />
        </a>
      </div>   
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo " 
</div>";
    }

    public function getTemplateName()
    {
        return "extension/ishipaymentblock/catalog/view/template/module/ishipaymentblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  53 => 5,  49 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishipaymentblock/catalog/view/template/module/ishipaymentblock.twig", "C:\\xampp\\htdocs\\OPC052L01_new\\extension\\ishipaymentblock\\catalog\\view\\template\\module\\ishipaymentblock.twig");
    }
}
