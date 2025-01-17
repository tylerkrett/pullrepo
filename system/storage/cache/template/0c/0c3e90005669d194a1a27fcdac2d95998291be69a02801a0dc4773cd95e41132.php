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

/* extension/ishiheaderlinkblock/catalog/view/template/module/ishiheaderlinkblock.twig */
class __TwigTemplate_28934d5c67a28ff044baab7010490eb99c0df061bffb255f02861668c1c15254 extends Template
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
        echo "<div id=\"_desktop_link_menu\">
  <div id=\"header_ishiheaderlinks\" class=\"header-block headerlink-dropdown\">
    <ul class=\"bullet link_container\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 5
            echo "        <li><a class=\"extra-link\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "link", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 5);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
  </div>
</div>
<div id=\"view_text\" class=\"d-none\">View More</div>
<div id=\"menu_text\" class=\"d-none\">Menu</div>

";
    }

    public function getTemplateName()
    {
        return "extension/ishiheaderlinkblock/catalog/view/template/module/ishiheaderlinkblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiheaderlinkblock/catalog/view/template/module/ishiheaderlinkblock.twig", "C:\\xampp\\htdocs\\OPC001L01\\extension\\ishiheaderlinkblock\\catalog\\view\\template\\module\\ishiheaderlinkblock.twig");
    }
}
