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

/* extension/ishisocialfollowblock/catalog/view/template/module/ishisocialfollow.twig */
class __TwigTemplate_b600072eef8190f1d149a948f1165fba4f5f419e7cb69a32f366c8726c62de02 extends Template
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
        echo "<div class=\"block-social ";
        echo ($context["column_class"] ?? null);
        echo " \">
    <div id=\"social-container\">
      <ul>
        ";
        // line 4
        if (($context["facebook"] ?? null)) {
            // line 5
            echo "          <li class=\"facebook\"><a href=\"";
            echo ($context["facebook"] ?? null);
            echo "\" ><i class=\"fa-brands fa-facebook-f\"></i></a></li>
        ";
        }
        // line 7
        echo "        ";
        if (($context["twitter"] ?? null)) {
            // line 8
            echo "          <li class=\"twitter\"><a href=\"";
            echo ($context["twitter"] ?? null);
            echo "\" ><i class=\"fa-brands fa-twitter\"></i></a></li>
        ";
        }
        // line 10
        echo "        ";
        if (($context["youtube"] ?? null)) {
            // line 11
            echo "          <li class=\"youtube\"><a href=\"";
            echo ($context["youtube"] ?? null);
            echo "\" ><i class=\"fa-brands fa-youtube\"></i></a></li>
        ";
        }
        // line 13
        echo "        ";
        if (($context["gplus"] ?? null)) {
            // line 14
            echo "          <li class=\"googleplus\"><a href=\"";
            echo ($context["gplus"] ?? null);
            echo "\"><i class=\"fa-brands fa-google-plus\"></i></a></li>
        ";
        }
        // line 16
        echo "        ";
        if (($context["rss"] ?? null)) {
            // line 17
            echo "          <li class=\"rss\"><a href=\"";
            echo ($context["rss"] ?? null);
            echo "\" ><i class=\"fa-brands fa-rss\"></i></a></li>
        ";
        }
        // line 19
        echo "        ";
        if (($context["pinterest"] ?? null)) {
            // line 20
            echo "          <li class=\"pinterest\"><a href=\"";
            echo ($context["pinterest"] ?? null);
            echo "\" ><i class=\"fa-brands fa-pinterest\"></i></a></li>
        ";
        }
        // line 22
        echo "        ";
        if (($context["vimeo"] ?? null)) {
            // line 23
            echo "          <li class=\"vimeo\"><a href=\"";
            echo ($context["vimeo"] ?? null);
            echo "\" ><i class=\"fa-brands fa-vimeo\"></i></a></li>
        ";
        }
        // line 25
        echo "        ";
        if (($context["instagram"] ?? null)) {
            // line 26
            echo "          <li class=\"instagram\"><a href=\"";
            echo ($context["instagram"] ?? null);
            echo "\" ><i class=\"fa-brands fa-instagram\"></i></a></li>
        ";
        }
        // line 27
        echo "   
      </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/ishisocialfollowblock/catalog/view/template/module/ishisocialfollow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  109 => 26,  106 => 25,  100 => 23,  97 => 22,  91 => 20,  88 => 19,  82 => 17,  79 => 16,  73 => 14,  70 => 13,  64 => 11,  61 => 10,  55 => 8,  52 => 7,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishisocialfollowblock/catalog/view/template/module/ishisocialfollow.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishisocialfollowblock\\catalog\\view\\template\\module\\ishisocialfollow.twig");
    }
}
