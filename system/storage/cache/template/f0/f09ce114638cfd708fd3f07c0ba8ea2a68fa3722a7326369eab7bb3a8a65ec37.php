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

/* catalog/view/template/product/special.twig */
class __TwigTemplate_d9158ec2448cc777b63626aee1542cd05fb371723faa90967c995ab0d0c85fb0 extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadcrumb-container\">
  <h2 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h2>
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
</div>
<div id=\"product-search\" class=\"container\">
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">
      ";
        // line 13
        if (($context["products"] ?? null)) {
            // line 14
            echo "        <div id=\"display-control\" class=\"product-list-top\">
          <div class=\"row\">
            <div class=\"col-lg-2 d-lg-inline-block d-md-block d-sm-block btn-list-grid\">
              <div class=\"btn-group btn-group-sm\">
                <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 18
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-cells\"></i></button>
                <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 19
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-list\"></i></button>
              </div>
            </div>
            <div class=\"compare-total col-lg-3\"><a href=\"";
            // line 22
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
            <div class=\"pagination-right text-end col-lg-7\">
              <div class=\"sort-by-wrapper\">
                <div class=\"col-md-2 text-end sort-by\">
                  <label for=\"input-sort\" class=\"control-label\">";
            // line 26
            echo ($context["text_sort"] ?? null);
            echo "</label>
                </div>
                <div class=\"col-md-3 text-end sort\">
                  <div class=\"select-wrapper\">
                      <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 32
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 32);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 32) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 32);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                      </select>
                  </div>
                </div>
              </div>
              <div class=\"show-wrapper\">
                <div class=\"col-md-1 text-end show\">
                  <label for=\"input-limit\" class=\"control-label\">";
            // line 40
            echo ($context["text_limit"] ?? null);
            echo "</label> 
                </div>
                <div class=\"col-md-2 text-end limit\"> 
                  <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 45
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 45);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 45) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 45);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 55
                echo "            <div class=\"col\">";
                echo $context["product"];
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </div>
        <div class=\"category-pagination\">
          <div class=\"row\">
            <div class=\"col-sm-6 text-start pagination-desc\">";
            // line 60
            echo ($context["results"] ?? null);
            echo "</div>
            <div class=\"col-sm-6 text-end\">";
            // line 61
            echo ($context["pagination"] ?? null);
            echo "</div>
          </div>
        </div>
      ";
        } else {
            // line 65
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-end\"><a href=\"";
            // line 67
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 69
        echo "</div>
    ";
        // line 70
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 72
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 72,  215 => 70,  212 => 69,  204 => 67,  198 => 65,  191 => 61,  187 => 60,  182 => 57,  173 => 55,  169 => 54,  160 => 47,  145 => 45,  141 => 44,  134 => 40,  126 => 34,  111 => 32,  107 => 31,  99 => 26,  90 => 22,  84 => 19,  80 => 18,  74 => 14,  72 => 13,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/special.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\product\\special.twig");
    }
}
