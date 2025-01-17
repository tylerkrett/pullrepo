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

/* extension/ishiaboutusservicesblock/catalog/view/template/module/ishiaboutusservicesblock.twig */
class __TwigTemplate_53addc0130d64c465c2435176bfdd882661fb735e221f8b1bdc6ae1e33e907af extends Template
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
        echo "<section class=\"ishiabout-us-services clearfix\">    
    <div class=\"container\">
        <div class=\"row\" id=\"services\">
            ";
        // line 4
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 5
            echo "            <div class=\"section-header\">
                <h2 class=\"home-title\">";
            // line 6
            echo ($context["title"] ?? null);
            echo "</h2>
            </div>
            ";
        }
        // line 9
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 10
            echo "                    <div class=\"services ";
            echo ($context["class"] ?? null);
            echo "\">
                        <a href=\"#\" class=\"service-bg\">
                            <div class=\"service-img\">
                                <img src=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 13);
            echo "\" class=\"img-fluid\">
                            </div>
                            <div class=\"service-block\">
                                <div class=\"service-title\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 16);
            echo "</div>
                                <div class=\"service-desc\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "description", [], "any", false, false, false, 17);
            echo "</div>
                            </div>
                        </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "extension/ishiaboutusservicesblock/catalog/view/template/module/ishiaboutusservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  75 => 17,  71 => 16,  65 => 13,  58 => 10,  53 => 9,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiaboutusservicesblock/catalog/view/template/module/ishiaboutusservicesblock.twig", "C:\\xampp\\htdocs\\OPC052L01\\extension\\ishiaboutusservicesblock\\catalog\\view\\template\\module\\ishiaboutusservicesblock.twig");
    }
}
