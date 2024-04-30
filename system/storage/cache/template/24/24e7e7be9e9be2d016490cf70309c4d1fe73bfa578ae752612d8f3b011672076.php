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

/* extension/ishicartservicesblock/catalog/view/template/module/ishicartservicesblock.twig */
class __TwigTemplate_3445a703087b9e42ef2f112fae87fcf3d2d43965bd63c142a84353d197365610 extends Template
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
        echo "<div class=\"ishi-cart-services\">
    <div id=\"cart-services\" class=\"owl-carousel\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishiservices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishiservice"]) {
            // line 4
            echo "            <div class=\"item\">
                <div class=\"services\">
                    <div class=\"service-img\">
                        ";
            // line 8
            echo "                        <img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "image", [], "any", false, false, false, 8);
            echo "\" class=\"image-fluid\" >
                    </div>
                    <div class=\"service-block\">
                        <div class=\"service-title\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "title", [], "any", false, false, false, 11);
            echo "</div>
                        <div class=\"service-desc\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["ishiservice"], "desc", [], "any", false, false, false, 12);
            echo "</div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
</div>
<script type=\"text/javascript\">
        \$('.owl-carousel').owlCarousel({
            loop: true  ,
            nav: false,
            dots: true,
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            autoplay: true, 
            responsive:{
                0:{
                    items:1
                },
                544:{
                    items:1
                },
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "extension/ishicartservicesblock/catalog/view/template/module/ishicartservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  61 => 12,  57 => 11,  50 => 8,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishicartservicesblock/catalog/view/template/module/ishicartservicesblock.twig", "C:\\xampp\\htdocs\\OPC052L03\\extension\\ishicartservicesblock\\catalog\\view\\template\\module\\ishicartservicesblock.twig");
    }
}
