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

/* extension/ishitestimonialblock/catalog/view/template/module/ishitestimonialblock.twig */
class __TwigTemplate_bc9875b88b8f715b46b5ee913d6de80a11db483979eaf8932a0557bb089981fd extends Template
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
        echo "\" class=\"ishitestimonials ";
        echo ($context["column_class"] ?? null);
        echo "\">
    <div class=\"section-header\">  
      <h3 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h3>
    </div>
    <div  class=\"ishitestimonials-container\">
      <div class=\"testimonial-block\">
        <div class=\"owl-carousel\">        
          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 9
            echo "            <div class=\"item\">
              <div class=\"testimonial-img\">
                  <img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 11);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "username", [], "any", false, false, false, 11);
            echo "\">
                </div>       
              <div class=\"user-details\">
                ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "username", [], "any", false, false, false, 14)) {
                // line 15
                echo "                <span class=\"user-name\">
                  ";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "username", [], "any", false, false, false, 16);
                echo "
                </span>
                ";
            }
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "designation", [], "any", false, false, false, 19)) {
                // line 20
                echo "                <span class=\"user-designation\">
                  ";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "designation", [], "any", false, false, false, 21);
                echo "
                </span>
                ";
            }
            // line 24
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["testimonial"], "description", [], "any", false, false, false, 24)) {
                // line 25
                echo "                <div class=\"user-description\">
                  ";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "description", [], "any", false, false, false, 26);
                echo "
                </div>
                ";
            }
            // line 29
            echo "                
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    
        </div>
      </div>
     </div>
    </div>
      <script type=\"text/javascript\">  
          \$('#";
        // line 38
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
              loop:false,
              nav: false,
              rewind:true,
              dots:true,
        autoplay:";
        // line 43
        echo ($context["autoplay"] ?? null);
        echo ",
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
      #";
        // line 66
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .ishitestimonials-container{
        background-color: ";
        // line 67
        echo ($context["bg_color"] ?? null);
        echo "
      }
    </style>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishitestimonialblock/catalog/view/template/module/ishitestimonialblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 67,  155 => 66,  129 => 43,  121 => 38,  113 => 32,  104 => 29,  98 => 26,  95 => 25,  92 => 24,  86 => 21,  83 => 20,  80 => 19,  74 => 16,  71 => 15,  69 => 14,  61 => 11,  57 => 9,  53 => 8,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishitestimonialblock/catalog/view/template/module/ishitestimonialblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishitestimonialblock\\catalog\\view\\template\\module\\ishitestimonialblock.twig");
    }
}
