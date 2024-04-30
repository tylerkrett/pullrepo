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

/* extension/ishispecialproductblock/catalog/view/template/module/ishispecialblock.twig */
class __TwigTemplate_8ac95b4cb339c320802615032c58079bb3c2245f4840193eb4056e463afbc305 extends Template
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
        echo "<section class=\"ishispecial\">
  <div class=\"container\"> 
    <div class=\"row\">
      <div class=\"section-header\">  
          <h3 class=\"home-title\">";
        // line 5
        echo ($context["heading"] ?? null);
        echo "</h3>
          <p class=\"desc\"> ";
        // line 6
        echo ($context["desc"] ?? null);
        echo "</p>
      </div>
      <div id=\"";
        // line 8
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishispecialblock owl-carousel\">
        ";
        // line 9
        $context["counter"] = 1;
        // line 10
        echo "        ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "    \t  ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 13
                echo "            ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 14
                    echo "                <div class=\"multilevel-item\">
            ";
                }
                // line 16
                echo "          ";
            }
            // line 17
            echo "            ";
            echo $context["product"];
            echo "
    \t    ";
            // line 18
            if ((($context["product_row"] ?? null) != 1)) {
                // line 19
                echo "            ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 20
                    echo "                </div>
           ";
                }
                // line 22
                echo "           ";
            }
            // line 23
            echo "          ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      </div>
    </div>        
  </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 29
        echo ($context["ishi_randomnumer"] ?? null);
        echo "').owlCarousel({
        loop: false,
        nav: true,    
        dots: false,  
        rewind: true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"], 
        responsive:{
          0:{
              items:";
        // line 38
        echo ($context["mobile_column"] ?? null);
        echo "
          },
          544:{
              items:";
        // line 41
        echo ($context["mobile_column"] ?? null);
        echo "
          },
          768:{ 
              items:";
        // line 44
        echo ($context["tablet_column"] ?? null);
        echo "
          },
          992:{
              items:";
        // line 47
        echo ($context["laptop_column"] ?? null);
        echo "
          },
          1200:{
              items:";
        // line 50
        echo ($context["desktop_column"] ?? null);
        echo "
          }
        }
    });   
  </script>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishispecialproductblock/catalog/view/template/module/ishispecialblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 50,  141 => 47,  135 => 44,  129 => 41,  123 => 38,  111 => 29,  99 => 24,  96 => 23,  93 => 22,  89 => 20,  86 => 19,  84 => 18,  79 => 17,  76 => 16,  72 => 14,  69 => 13,  66 => 12,  61 => 11,  58 => 10,  56 => 9,  52 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishispecialproductblock/catalog/view/template/module/ishispecialblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishispecialproductblock\\catalog\\view\\template\\module\\ishispecialblock.twig");
    }
}
