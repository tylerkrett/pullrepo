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

/* extension/ishifeaturesblock/catalog/view/template/module/ishifeaturesblock.twig */
class __TwigTemplate_fd540da8ecf39f228fe9fa7a55005e5c05bd0233ea6bfdf94241f4278f0f3dd2 extends Template
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
        echo "\" class=\"ishifeaturesblock clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"feature-left col-lg-6 col-md-12  col-sm-12 col-xs-12\">
                <div class=\"img-container feature-img1\">
                    <img src=\"";
        // line 6
        echo ($context["bg_img"] ?? null);
        echo "\" alt=\"feature-img1\" />
                </div>
                <div class=\"img-container feature-img2\">
                    <img src=\"";
        // line 9
        echo ($context["gif_img"] ?? null);
        echo "\" alt=\"feature-img2\" />
                </div>
            </div>
            <div class=\"features-right col-lg-6 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"features-container\">
                    <div class=\"section-header\">
                        <div class=\"subtitle\">";
        // line 15
        echo ($context["subtitle"] ?? null);
        echo "</div>
                        <h3 class=\"home-title\">";
        // line 16
        echo ($context["heading"] ?? null);
        echo "</h3>
                    </div>    
                    <div class=\"features-des\"><p>";
        // line 18
        echo ($context["desctitle"] ?? null);
        echo "</p></div>
                </div>
                <div class=\"ishifeatures\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 22
            echo "                        <div class=\"features\">
                            <div class=\"features-img\">
                                <img src=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 24);
            echo "\" alt=\"feature-img\">
                            </div>
                            <div class=\"features-block\">
                                <div class=\"features-title\">";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 27);
            echo "</div>
                                <div class=\"features-desc\">";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "desc", [], "any", false, false, false, 28);
            echo "</div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    <div class=\"features-btn\">
                        <a href=\"";
        // line 33
        echo ($context["btnlink"] ?? null);
        echo "\" class=\"btn-theme btn-default\">";
        echo ($context["btn"] ?? null);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "extension/ishifeaturesblock/catalog/view/template/module/ishifeaturesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  104 => 32,  94 => 28,  90 => 27,  84 => 24,  80 => 22,  76 => 21,  70 => 18,  65 => 16,  61 => 15,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifeaturesblock/catalog/view/template/module/ishifeaturesblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishifeaturesblock\\catalog\\view\\template\\module\\ishifeaturesblock.twig");
    }
}
