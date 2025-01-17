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

/* extension/ishistoreinfoblock/catalog/view/template/module/ishistoreinfoblock.twig */
class __TwigTemplate_7df5299e3b431534a92acb2a91180fc519719a8243282d0aee1791fc020c3175 extends Template
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
        echo "<div id=\"_desktop_storeinfo\" class=\"";
        echo ($context["column_class"] ?? null);
        echo "\">
\t<div class=\"ishistoreinfoblock footer-block banner-alignment-";
        // line 2
        echo ($context["alignment"] ?? null);
        echo "\">
\t  <div id=\"ishistoreinfo-container\" class=\"ishistoreinfo-inner\">
\t      <a href=\"";
        // line 4
        echo ($context["storehome"] ?? null);
        echo "\" class=\"store-logo\">
\t        <img src=\"";
        // line 5
        echo ($context["image"] ?? null);
        echo "\" alt=\"footer-logo\">
\t      </a>
\t      <div class=\"store-description\">
\t        <p>";
        // line 8
        echo ($context["config_comment"] ?? null);
        echo "</p>
\t      </div>
\t  </div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/ishistoreinfoblock/catalog/view/template/module/ishistoreinfoblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishistoreinfoblock/catalog/view/template/module/ishistoreinfoblock.twig", "C:\\xampp\\htdocs\\OPC052L01_new\\extension\\ishistoreinfoblock\\catalog\\view\\template\\module\\ishistoreinfoblock.twig");
    }
}
