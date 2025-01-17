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

/* extension/ishimaplinkblock/catalog/view/template/module/ishimaplinkblock.twig */
class __TwigTemplate_4180a5338316733f22a5b627a60dc414d39f1e3a0294c94f0f079770b108650a extends Template
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
        echo "\" class=\"ishimaplinkblock\">
    <div class=\"map-container\"> 
        <iframe src=\"";
        // line 3
        echo ($context["link"] ?? null);
        echo "\" style=\"border:0;\" width=\"";
        echo ($context["width"] ?? null);
        echo "\" height=\"";
        echo ($context["height"] ?? null);
        echo "\" frameborder=\"0\"></iframe>
    </div> 
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishimaplinkblock/catalog/view/template/module/ishimaplinkblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishimaplinkblock/catalog/view/template/module/ishimaplinkblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishimaplinkblock\\catalog\\view\\template\\module\\ishimaplinkblock.twig");
    }
}
