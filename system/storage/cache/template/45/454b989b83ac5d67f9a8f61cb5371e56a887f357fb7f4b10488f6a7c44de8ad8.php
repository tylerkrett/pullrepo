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

/* extension/ishiservicesblock/catalog/view/template/module/ishiservicesblock.twig */
class __TwigTemplate_2c65f4af3986cbe0745e8061540104d617afb91a94e77f5883fe5f0a7fdc4fcf extends Template
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
        echo "<section class=\"ishiservicesblock\">
    <div class=\"container\">
        <div class=\"section-header\">
            ";
        // line 4
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 5
            echo "                <h3 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h3>
                <p class=\"desc\">";
            // line 6
            echo ($context["desc"] ?? null);
            echo "</p>
            ";
        }
        // line 8
        echo "        </div>
        <div class=\"ishiservices\">            
            <div class=\"row\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 12
            echo "                    <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                        <div class=\"service-img\">
                            <span style=\"background-image: url(";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 14);
            echo ");\"></span>
                        </div>
                        <div class=\"service-block\">
                            <div class=\"service-title\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 17);
            echo "</div>
                            <div class=\"service-desc\">";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 18);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "extension/ishiservicesblock/catalog/view/template/module/ishiservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  79 => 18,  75 => 17,  69 => 14,  63 => 12,  59 => 11,  54 => 8,  49 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiservicesblock/catalog/view/template/module/ishiservicesblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishiservicesblock\\catalog\\view\\template\\module\\ishiservicesblock.twig");
    }
}
