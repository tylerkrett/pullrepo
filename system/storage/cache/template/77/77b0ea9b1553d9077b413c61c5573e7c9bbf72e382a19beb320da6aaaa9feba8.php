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

/* extension/ishitestimonialblock/catalog/view/template/module/ishitestimonialsblock.twig */
class __TwigTemplate_72b5620ed26afb972417ed1688743e39d8ad7ff400e9cdf3a9da307df84d1740 extends Template
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
        echo "\" class=\"ishitestimonialsblock\">
\t<div class=\"container\">
\t\t<div class=\"ishitestimonials-carousel owl-carousel\" >\t\t
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 5
            echo "\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"ishitestimonials-container row\">
\t\t\t\t\t\t<div class=\"testimonial-img col-lg-4 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<img src=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 8);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "username", [], "any", false, false, false, 8);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"testimonial-desc col-lg-8 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"user-description\">
\t\t\t\t\t\t    \t<p> ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "description", [], "any", false, false, false, 12);
            echo " </p>
\t\t\t\t\t     \t</div>\t
\t\t\t\t\t     \t<span class=\"user-name\">
\t\t\t\t\t\t\t\t";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "username", [], "any", false, false, false, 15);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"user-designation\">
\t\t\t\t\t\t\t\t(";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "designation", [], "any", false, false, false, 18);
            echo ")
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</div>\t
\t</div>
</section>
<script type=\"text/javascript\">  
    \$('#";
        // line 28
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:false,
        nav: false,
        margin: 30,
        rewind:true,
\t\tautoplay:";
        // line 33
        echo ($context["autoplay"] ?? null);
        echo ",
\t\tanimateOut: 'slideOutUp',
        animateIn: 'slideInUp',
\t\tautoplayTimeout: 5000,
        autoplayHoverPause: false,
\t\tdots:true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
         responsive:{
          0:{
              items:1
          },
          544:{
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

</script>
<style>

</style>

";
    }

    public function getTemplateName()
    {
        return "extension/ishitestimonialblock/catalog/view/template/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  92 => 28,  86 => 24,  74 => 18,  68 => 15,  62 => 12,  53 => 8,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishitestimonialblock/catalog/view/template/module/ishitestimonialsblock.twig", "C:\\xampp\\htdocs\\OPC001L01\\extension\\ishitestimonialblock\\catalog\\view\\template\\module\\ishitestimonialsblock.twig");
    }
}
