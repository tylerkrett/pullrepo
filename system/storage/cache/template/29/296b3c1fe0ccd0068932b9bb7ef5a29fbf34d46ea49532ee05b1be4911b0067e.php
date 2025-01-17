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

/* extension/ishifivebannerblock/catalog/view/template/module/ishifivebannerblock.twig */
class __TwigTemplate_b634cfcd172538af169baef202e9ccc39222edfc5418d46b7728133f6f5833f0 extends Template
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
        echo "<section class=\"ishifivebannerblock\">
  <div class=\"row\">
    <div class=\"banner-left col-md-4 col-sm-6 col-xs-6\">
      <div class=\"bannerblock1 bannerblock\">
        <a href=\"";
        // line 5
        echo ($context["button_link1"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 6
        echo ($context["image1"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
        echo "\" class=\"img-fluid\" />
          <div class=\"banner_btn\"><span class=\"btn-primary\">";
        // line 7
        echo ($context["button1"] ?? null);
        echo "</span></div>
        </a> 
      </div>
      <div class=\"bannerblock2 bannerblock\">
        <a href=\"";
        // line 11
        echo ($context["button_link2"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 12
        echo ($context["image2"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 12);
        echo "\" class=\"img-fluid\" />
          <div class=\"banner_btn\"><span class=\"btn-primary\">";
        // line 13
        echo ($context["button2"] ?? null);
        echo "</span></div>
        </a>
      </div>
    </div>
    <div class=\"banner-center col-md-4 col-sm-6 col-xs-6\">
      <div class=\"bannerblock3 bannerblock\">
        <a href=\"";
        // line 19
        echo ($context["button_link3"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 20
        echo ($context["image3"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 20);
        echo "\" class=\"img-fluid\" />
          <div class=\"banner_btn\"><span class=\"btn-primary\">";
        // line 21
        echo ($context["button3"] ?? null);
        echo "</span></div>
        </a>
      </div>
    </div>
    <div class=\"banner-right col-md-4 col-sm-12 col-xs-6\">
      <div class=\"bannerblock4 bannerblock\">
        <a href=\"";
        // line 27
        echo ($context["button_link4"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 28
        echo ($context["image4"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 28);
        echo "\" class=\"img-fluid\" />
          <div class=\"banner_btn\"><span class=\"btn-primary\">";
        // line 29
        echo ($context["button4"] ?? null);
        echo "</span></div>
        </a>
      </div>
      <div class=\"bannerblock5 bannerblock\">
        <a href=\"";
        // line 33
        echo ($context["button_link5"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 34
        echo ($context["image5"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 34);
        echo "\" class=\"img-fluid\" />
          <div class=\"banner_btn\"><span class=\"btn-primary\">";
        // line 35
        echo ($context["button5"] ?? null);
        echo "</span></div>
        </a>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishifivebannerblock/catalog/view/template/module/ishifivebannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 35,  139 => 34,  131 => 33,  124 => 29,  118 => 28,  110 => 27,  101 => 21,  95 => 20,  87 => 19,  78 => 13,  72 => 12,  64 => 11,  57 => 7,  51 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifivebannerblock/catalog/view/template/module/ishifivebannerblock.twig", "C:\\xampp\\htdocs\\OPC003L03_new\\extension\\ishifivebannerblock\\catalog\\view\\template\\module\\ishifivebannerblock.twig");
    }
}
