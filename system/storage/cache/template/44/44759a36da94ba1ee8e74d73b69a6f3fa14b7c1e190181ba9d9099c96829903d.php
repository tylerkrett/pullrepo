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

/* extension/ishislider/catalog/view/template/module/ishislider.twig */
class __TwigTemplate_8670bd373f914e9bdfa67989b3df77c1f7755f143dd22e20754a5a37b8cde808 extends Template
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
        echo "\" class=\"ishislider\">
        <div class=\"owl-carousel\">
            ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishisliders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishislider"]) {
            // line 4
            echo "                <div class=\"item\">
                    <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "link", [], "any", false, false, false, 5);
            echo "\" class=\"slideshow__link\">
                        <img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "image", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "title", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive desktop-slider\" />
                        <img src=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "imagehover", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "title", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive mobile-slider\" />
                        <div class=\"container\">
                          <div class=\"slider-content col-lg-6 col-md-6 col-sm-6 col-xs-6 ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "textposition", [], "any", false, false, false, 9);
            echo " desktop-slider\" style=\"text-align:";
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "textalignment", [], "any", false, false, false, 9);
            echo "\">
                            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "subtitle", [], "any", false, false, false, 10)) {
                // line 11
                echo "                              <div class=\"sub-title\" style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "subtitlecolor", [], "any", false, false, false, 11);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "subtitle", [], "any", false, false, false, 11);
                echo "</div>
                            ";
            }
            // line 13
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "title", [], "any", false, false, false, 13)) {
                // line 14
                echo "                              <div class=\"main-title\" style=\"color:";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "titlecolor", [], "any", false, false, false, 14);
                echo ";background-color:";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "titlebgcolor", [], "any", false, false, false, 14);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "title", [], "any", false, false, false, 14);
                echo "</div>
                            ";
            }
            // line 16
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "desc", [], "any", false, false, false, 16)) {
                // line 17
                echo "                              <div class=\"desc\" style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "desccolor", [], "any", false, false, false, 17);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "desc", [], "any", false, false, false, 17);
                echo "</div>
                            ";
            }
            // line 19
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "btntext", [], "any", false, false, false, 19)) {
                // line 20
                echo "                              <div class=\"slider-btn\"><span class=\"btn-primary btn\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "btntext", [], "any", false, false, false, 20);
                echo "</span></div>
                            ";
            }
            // line 22
            echo "                          </div>

                          <div class=\"slider-content col-lg-5 col-md-6 col-sm-6 col-xs-6 col-6 ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "mobiletextposition", [], "any", false, false, false, 24);
            echo " mobile-slider\" style=\"text-align:";
            echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "mobiletextalignment", [], "any", false, false, false, 24);
            echo "\">
                            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "subtitle", [], "any", false, false, false, 25)) {
                // line 26
                echo "                              <div class=\"sub-title\" style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "subtitlecolor", [], "any", false, false, false, 26);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "subtitle", [], "any", false, false, false, 26);
                echo "</div>
                            ";
            }
            // line 28
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "title", [], "any", false, false, false, 28)) {
                // line 29
                echo "                              <div class=\"main-title\" style=\"color:";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "titlecolor", [], "any", false, false, false, 29);
                echo ";background-color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "titlebgcolor", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "title", [], "any", false, false, false, 29);
                echo "</div>
                            ";
            }
            // line 31
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "desc", [], "any", false, false, false, 31)) {
                // line 32
                echo "                              <div class=\"desc\" style=\"color: ";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "desccolor", [], "any", false, false, false, 32);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "desc", [], "any", false, false, false, 32);
                echo "</div>
                            ";
            }
            // line 34
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["ishislider"], "btntext", [], "any", false, false, false, 34)) {
                // line 35
                echo "                              <div class=\"slider-btn\"><span class=\"btn-primary btn\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishislider"], "btntext", [], "any", false, false, false, 35);
                echo "</span></div>
                            ";
            }
            // line 37
            echo "                          </div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishislider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
      <script type=\"text/javascript\">
        \$('#";
        // line 44
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
            loop:true,
            nav:";
        // line 46
        echo ($context["navigation"] ?? null);
        echo ",
            dots:";
        // line 47
        echo ($context["dot"] ?? null);
        echo ",
            autoplay:";
        // line 48
        echo ($context["autoplay"] ?? null);
        echo ",
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            animateOut: 'fadeOut',
            dotsClass: 'owl-dots ";
        // line 51
        echo ($context["dot_style"] ?? null);
        echo "',
            navClass: [\"owl-prev ";
        // line 52
        echo ($context["navigation_style"] ?? null);
        echo "\",\"owl-next ";
        echo ($context["navigation_style"] ?? null);
        echo "\"],
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
            responsive:{
                0:{
                    items:1
                }
            }
        });
      </script>
</section>
<div id=\"_mobile_servicesblock\"></div>";
    }

    public function getTemplateName()
    {
        return "extension/ishislider/catalog/view/template/module/ishislider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 52,  202 => 51,  196 => 48,  192 => 47,  188 => 46,  183 => 44,  179 => 42,  169 => 37,  163 => 35,  160 => 34,  152 => 32,  149 => 31,  139 => 29,  136 => 28,  128 => 26,  126 => 25,  120 => 24,  116 => 22,  110 => 20,  107 => 19,  99 => 17,  96 => 16,  86 => 14,  83 => 13,  75 => 11,  73 => 10,  67 => 9,  60 => 7,  54 => 6,  50 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishislider/catalog/view/template/module/ishislider.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishislider\\catalog\\view\\template\\module\\ishislider.twig");
    }
}
