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

/* extension/ishifooterlinkblock/catalog/view/template/module/ishifooterlinkblock.twig */
class __TwigTemplate_6b5f36fa53b6afa8edb5752a419c16cac3a07e492fe661dabeb6effae0777de7 extends Template
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
        echo "    <div class=\"account ";
        echo ($context["column_class"] ?? null);
        echo "\">
      ";
        // line 2
        if ((($context["showtitle"] ?? null) == 1)) {
            // line 3
            echo "      <h5 class=\"d-none d-lg-block\">";
            echo ($context["footerlinktitle"] ?? null);
            echo "</h5>
       ";
        }
        // line 5
        echo "      <div class=\"footer-title clearfix d-lg-none\" href=\"#";
        echo ($context["footerlinktitle"] ?? null);
        echo "\" data-bs-toggle=\"collapse\" aria-expanded=\"false\"  aria-controls=\"";
        echo ($context["footerlinktitle"] ?? null);
        echo "\">
        <span class=\"h3\">";
        // line 6
        echo ($context["footerlinktitle"] ?? null);
        echo "</span>
        <span class=\"navbar-toggler collapse-icons\">
          <i class=\"fa fa-angle-down add\"></i>
          <i class=\"fa fa-angle-up remove\"></i>
        </span>
      </div>
      <div id=\"";
        // line 12
        echo ($context["footerlinktitle"] ?? null);
        echo "\" class=\"collapse footer-dropdown\" aria-expanded=\"false\">
        <ul class=\"list-unstyled\">
          ";
        // line 14
        if (($context["account"] ?? null)) {
            // line 15
            echo "            <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 16
            echo ($context["special"] ?? null);
            echo "\">";
            echo ($context["text_special"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 17
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 18
            echo ($context["newsletter"] ?? null);
            echo "\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a></li>
            <li><a href=\"";
            // line 19
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
          ";
        }
        // line 21
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 22
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 22);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 22);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
            // line 25
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extra"], "link", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["extra"], "linkname", [], "any", false, false, false, 25);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "extension/ishifooterlinkblock/catalog/view/template/module/ishifooterlinkblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 27,  126 => 25,  121 => 24,  110 => 22,  105 => 21,  98 => 19,  92 => 18,  86 => 17,  80 => 16,  73 => 15,  71 => 14,  66 => 12,  57 => 6,  50 => 5,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifooterlinkblock/catalog/view/template/module/ishifooterlinkblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishifooterlinkblock\\catalog\\view\\template\\module\\ishifooterlinkblock.twig");
    }
}
