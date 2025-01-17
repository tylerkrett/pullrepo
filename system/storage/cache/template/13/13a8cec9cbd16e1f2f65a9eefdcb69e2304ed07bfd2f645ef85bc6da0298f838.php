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

/* extension/opencart/catalog/view/template/module/category.twig */
class __TwigTemplate_7759df9f2f356f80fd6d6e27c8b92ab98118e90d739f2d99cccc7167f425df71 extends Template
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
        echo "<div class=\"box\">
  <h2 class=\"page-title d-none d-lg-block\">
        ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
  </h2>
  <div class=\"block-title clearfix  d-lg-none collapsed\" data-bs-target=\"#box-container\" data-bs-toggle=\"collapse\" aria-expanded=\"false\"  aria-controls=\"box-container\">
      <span class=\"page-title\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span>
      <span class=\"navbar-toggler collapse-icons\">
        <i class=\"fa fa-angle-down add\"></i>
        <i class=\"fa fa-angle-up remove\"></i>
      </span>
  </div>
  <div id=\"box-container\" class=\"collapse data-toggler show\">
      <ul class=\"category-top-menu\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "        <li>
          ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) {
                // line 17
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                echo "\" class=\"list-group-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                echo "</a>
          ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "              <span class=\"navbar-toggler collapse-icons\" data-bs-target=\"#childlist\" data-bs-toggle=\"collapse\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
              </span> 
          ";
                }
                // line 24
                echo "          <div id=\"childlist\" class=\"collapse\">
              <ul class=\"category-sub-menu\">
                ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 28
                        echo "                    <li>
                      ";
                        // line 29
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 29) == ($context["child_id"] ?? null))) {
                            // line 30
                            echo "                         <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 30);
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 30);
                            echo "</a>
                      ";
                        } else {
                            // line 31
                            echo " 
                          <a href=\"";
                            // line 32
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 32);
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 32);
                            echo "</a>
                      ";
                        }
                        // line 34
                        echo "                    </li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "                ";
                }
                // line 37
                echo "              </ul>
          </div>
         ";
            } else {
                // line 39
                echo " 
            <a href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 40);
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 40);
                echo "</a> 
         ";
            }
            // line 41
            echo "   
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  142 => 41,  135 => 40,  132 => 39,  127 => 37,  124 => 36,  117 => 34,  110 => 32,  107 => 31,  99 => 30,  97 => 29,  94 => 28,  89 => 27,  87 => 26,  83 => 24,  76 => 19,  74 => 18,  67 => 17,  65 => 16,  62 => 15,  58 => 14,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/category.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\opencart\\catalog\\view\\template\\module\\category.twig");
    }
}
