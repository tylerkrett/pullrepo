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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_18db333813572978373335c8390b7856ece2c5349f1f183c4dcd8410b3e98612 extends Template
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
        echo "
";
        // line 2
        if (($context["categories"] ?? null)) {
            // line 3
            echo "    <div id=\"_desktop_top_menu\" class=\"menu js-top-menu d-lg-inline-block d-none col-lg-6 col-md-6\">
        ";
            // line 5
            echo "          <ul id=\"top-menu\" class=\"top-menu\" data-depth=\"0\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 7
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "            ";
                    $context["temprand"] = twig_random($this->env, 10000);
                    // line 9
                    echo "            <li class=\"top_level_category dropdown\">
              <a class=\"dropdown-item\" href=\"";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10);
                    echo "</a>
              <span class=\"pull-xs-right d-lg-none\">
                  <span data-bs-target=\"#top_sub_menu_";
                    // line 12
                    echo ($context["temprand"] ?? null);
                    echo "\" data-bs-toggle=\"collapse\" class=\"navbar-toggler collapse-icons\">
                    <i class=\"fa fa-angle-down add\"></i>
                    <i class=\"fa fa-angle-up remove\"></i>
                  </span>
              </span>
              <div id=\"top_sub_menu_";
                    // line 17
                    echo ($context["temprand"] ?? null);
                    echo "\" class=\"dropdown-menu popover sub-menu collapse\">
                  ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 18), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "                  <ul class=\"list-unstyled childs_1 category_dropdownmenu ";
                        if ((twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 19) <= 1)) {
                            echo " ";
                            echo "single-dropdown-menu";
                            echo " ";
                        } else {
                            echo " ";
                            echo "multiple-dropdown-menu";
                            echo " ";
                        }
                        echo "\" data-depth=\"1\">

                    ";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            echo "   ";
                            // line 22
                            echo "                    ";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 22)) {
                                // line 23
                                echo "                    ";
                                $context["temprand"] = twig_random($this->env, 10000);
                                // line 24
                                echo "                      <li class=\"category dropdown sub-category\">
                        <a class=\"dropdown-item dropdown-submenu\" href=\"";
                                // line 25
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 25);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 25);
                                echo "</a>
                        <span class=\"pull-xs-right d-lg-none\">
                            <span data-bs-target=\"#top_sub_menu_";
                                // line 27
                                echo ($context["temprand"] ?? null);
                                echo "\" data-bs-toggle=\"collapse\" class=\"navbar-toggler collapse-icons\">
                              <i class=\"fa fa-angle-down add\"></i>
                              <i class=\"fa fa-angle-up remove\"></i>
                            </span>
                        </span>
                        <div id=\"top_sub_menu_";
                                // line 32
                                echo ($context["temprand"] ?? null);
                                echo "\" class=\"dropdown-inner collapse\">
                            ";
                                // line 33
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 33), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 33)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 33), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 34
                                    echo "                            <ul class=\"list-unstyled childs_2 top-menu\" data-depth=\"2\">
                              ";
                                    // line 35
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 36
                                        echo "                              <li class=\"category\">
                                <a class=\"dropdown-item\" href=\"";
                                        // line 37
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 37);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 37);
                                        echo "</a>
                              </li>
                              ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 40
                                    echo "                            </ul>
                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 42
                                echo "                        </div>
                      </li>
                    ";
                            } else {
                                // line 45
                                echo "                      <li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 45);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 45);
                                echo "</a></li>
                    ";
                            }
                            // line 46
                            echo "   ";
                            // line 47
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "                  </ul>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "              </div>
            </li>
            ";
                } else {
                    // line 53
                    echo "            <li class=\"maintitle\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 53);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                    echo "</a></li>
            ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
            if ((($context["blog_enable"] ?? null) == true)) {
                // line 57
                echo "            <li> <a href=\"";
                echo ($context["all_blogs"] ?? null);
                echo "\">
              <span data-hover=\"";
                // line 58
                echo ($context["text_blog"] ?? null);
                echo "\">";
                echo ($context["text_blog"] ?? null);
                echo "</span>
            </a></li>       
            ";
            }
            // line 60
            echo "   
          </ul>
    </div> 
    
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 60,  218 => 58,  213 => 57,  210 => 56,  204 => 55,  196 => 53,  191 => 50,  184 => 48,  178 => 47,  176 => 46,  168 => 45,  163 => 42,  156 => 40,  145 => 37,  142 => 36,  138 => 35,  135 => 34,  131 => 33,  127 => 32,  119 => 27,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  98 => 21,  84 => 19,  80 => 18,  76 => 17,  68 => 12,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/menu.twig", "C:\\xampp\\htdocs\\OPC052L03\\catalog\\view\\template\\common\\menu.twig");
    }
}
