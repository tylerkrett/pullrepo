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

/* extension/ishibannerblock/catalog/view/template/module/ishibannerblock.twig */
class __TwigTemplate_fe0c55c193aaf68cdaddc03baffed7b7870d071d040c6a2e0888fb53ac16ed33 extends Template
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
        echo "\" class=\"ishibannerblock clearfix ";
        echo ($context["bannerclass"] ?? null);
        echo "\">
  <div class=\"row\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banner_array"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "      <div class=\"bannerblock ";
            echo ($context["column_class"] ?? null);
            echo "\">
        <div class=\"image-container\"> 
          <a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
            echo "\" class=\"";
            echo ($context["style"] ?? null);
            echo " ";
            echo ($context["scale"] ?? null);
            echo "  banner-scale\">
            <img src=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
            echo "\" class=\"img-fluid\">
            ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "showtext", [], "any", false, false, false, 8) == 1)) {
                // line 9
                echo "              <div class=\"banner-data banner-position-";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "position", [], "any", false, false, false, 9);
                echo " banner-alignment-";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "alignment", [], "any", false, false, false, 9);
                echo "\">
                ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                  <div class=\"banner-title\" style=\"color: ";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "titlecolor", [], "any", false, false, false, 11);
                    echo "\">
                    ";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                    echo "
                  </div>
                ";
                }
                // line 15
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                  <div class=\"banner-subtitle\" style=\"color: ";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "subtitlecolor", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 16);
                    echo "</div>
                ";
                }
                // line 18
                echo "                <div class=\"banner-btn\">
                  ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                    <div href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 20);
                    echo "\" class=\"btn btn-primary\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 20);
                    echo "</div>
                  ";
                }
                // line 22
                echo "                </div>
              </div>
            ";
            }
            // line 25
            echo "          </a>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishibannerblock/catalog/view/template/module/ishibannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 29,  120 => 25,  115 => 22,  107 => 20,  105 => 19,  102 => 18,  94 => 16,  91 => 15,  85 => 12,  80 => 11,  78 => 10,  71 => 9,  69 => 8,  63 => 7,  55 => 6,  49 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishibannerblock/catalog/view/template/module/ishibannerblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishibannerblock\\catalog\\view\\template\\module\\ishibannerblock.twig");
    }
}
