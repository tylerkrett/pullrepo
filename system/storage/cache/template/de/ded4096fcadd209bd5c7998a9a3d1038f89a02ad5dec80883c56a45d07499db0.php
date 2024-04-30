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

/* extension/ishioffersblock/catalog/view/template/module/ishioffersblock.twig */
class __TwigTemplate_6499ccb5797d5fd215cbb01fdda10c030902d7817ee2a1c81e5105c69a958b71 extends Template
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
        echo "<div id=\"ishioffersblock\">
    <div class=\"container\">
\t    <div class=\"offer-background\">
            <div id=\"offer-carousel\" class=\"owl-carousel\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            echo " 
                    <div class=\"item\">
                        <p>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["offer"], "title", [], "any", false, false, false, 7);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </div>
        </div>
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
</div>
<script type=\"text/javascript\">
        \$('#offer-carousel.owl-carousel').owlCarousel({
            loop:true,
            nav:false,
            dots:false,
            autoplay:true,
            animateIn: 'slideInUp',
            margin: 0,
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
            responsive:{
                    0:{
                        items:1
                    },
                    576:{
                        items:1
                    },
                    768:{
                        items:1
                    },
                    992:{
                        items:1
                    },
                    1200:{
                        items:1
                    }
                }
        });
</script>";
    }

    public function getTemplateName()
    {
        return "extension/ishioffersblock/catalog/view/template/module/ishioffersblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  50 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishioffersblock/catalog/view/template/module/ishioffersblock.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\extension\\ishioffersblock\\catalog\\view\\template\\module\\ishioffersblock.twig");
    }
}
