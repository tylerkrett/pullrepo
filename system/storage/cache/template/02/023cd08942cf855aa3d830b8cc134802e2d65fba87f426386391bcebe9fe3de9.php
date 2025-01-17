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

/* extension/ishistoryblock/catalog/view/template/module/ishistoryblock.twig */
class __TwigTemplate_b24ae6f92db0dc1bc07b43cfe662fb6400399f8b6b335c51a32426b8d311e7fd extends Template
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
        echo "<section class=\"ishistoryblock\">
\t<div class=\"container\">
\t\t<div class=\"row valign-wrapper\">
\t\t\t<div class=\"video-box col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"video-container\">
\t\t\t\t\t";
        // line 6
        if ((($context["videolink"] ?? null) != ($context["blank"] ?? null))) {
            // line 7
            echo "\t\t\t\t        <video autoplay muted loop playsinline  preload=\"auto\" class=\"video-div\">
\t\t\t\t          <source src=\"";
            // line 8
            echo ($context["videolink"] ?? null);
            echo "\" type=\"video/mp4\">
\t\t\t\t          <source src=\"";
            // line 9
            echo ($context["videolink"] ?? null);
            echo "\" type=\"video/ogg\">
\t\t\t\t        </video>
\t\t\t\t    ";
        }
        // line 11
        echo "\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"text-wrapper col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<div class=\"story-container\">
\t    \t\t\t";
        // line 16
        echo ($context["html"] ?? null);
        echo "
\t    \t\t\t<div class=\"story-des\">
\t\t\t\t\t    <p>";
        // line 18
        echo ($context["desc"] ?? null);
        echo "</p>
     \t\t\t\t</div>
\t    \t\t\t<a href=\"";
        // line 20
        echo ($context["btnlink"] ?? null);
        echo "\" class=\"btn btn-primary\">
\t\t\t            ";
        // line 21
        echo ($context["btnname"] ?? null);
        echo "
\t\t          \t</a>
     \t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "extension/ishistoryblock/catalog/view/template/module/ishistoryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  76 => 20,  71 => 18,  66 => 16,  59 => 11,  53 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishistoryblock/catalog/view/template/module/ishistoryblock.twig", "C:\\xampp\\htdocs\\OPC052L03\\extension\\ishistoryblock\\catalog\\view\\template\\module\\ishistoryblock.twig");
    }
}
