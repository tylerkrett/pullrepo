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

/* extension/ishicategoryblock/catalog/view/template/module/ishicategoryblock.twig */
class __TwigTemplate_9319f23740dff33ea230e77859cbfb1b372a3b8e58ac357c7780999489fb5ffc extends Template
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
        echo "\" class=\"ishicategoryblock\">
    <div class=\"row\">
        <div class=\"owl-carousel\">
          ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "                <div class=\"item ishicategory\">
                    <a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
            echo "\">
                        <div class=\"image-container\"><img src=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive\" /></div>
                        <div class=\"text-container\">
                            ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
            echo "
                        </div>
                    </a>    
                </div>  
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
        </div>
    </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 17
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        margin: 30,
        autoplay: false,
        autoplayTimeout:2000,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,    
        rewind: true,
        responsive:{
            0:{
                items:2,
                margin:10,
            },
            544:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            },
            1200:{
                items:4
            }
        }
    });
  </script>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishicategoryblock/catalog/view/template/module/ishicategoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  73 => 13,  62 => 9,  55 => 7,  51 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishicategoryblock/catalog/view/template/module/ishicategoryblock.twig", "C:\\xampp\\htdocs\\OPC052L01_new\\extension\\ishicategoryblock\\catalog\\view\\template\\module\\ishicategoryblock.twig");
    }
}
