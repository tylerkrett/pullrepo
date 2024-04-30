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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_6a7560f2630357c1423e05a7d4b89a6649c1549b7a1233f71508c85f32c94f7d extends Template
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
<div id=\"common-home\">
 ";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
    <div class=\"content-middle\">
        <div class=\"container\">
            <div class=\"row\">
            ";
        // line 8
        echo ($context["content_middle"] ?? null);
        echo "
            </div>
        </div>
    </div>
        ";
        // line 12
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 14
        echo ($context["column_right"] ?? null);
        echo "</div>

";
        // line 16
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  65 => 14,  60 => 12,  53 => 8,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\catalog\\view\\template\\common\\home.twig");
    }
}
