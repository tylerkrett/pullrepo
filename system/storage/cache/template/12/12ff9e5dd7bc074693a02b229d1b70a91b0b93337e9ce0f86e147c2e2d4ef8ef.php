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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_9ef0b172d770ec57971032daaa8c88ad91487a489c429ed210fad1cacd5dd88a extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadcrumb-container\">
  <h2 class=\"page-title\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h2>
  <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </ul>
</div>
<div id=\"product-category\" class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 13
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 14
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 15
            echo "      <div class=\"category_banner\">
          <div class=\"col-sm-12 category-title\">";
            // line 16
            echo ($context["heading_title"] ?? null);
            echo "</div>
          ";
            // line 17
            if (($context["description"] ?? null)) {
                // line 18
                echo "            <div class=\"col-sm-12 category_description\">";
                echo ($context["description"] ?? null);
                echo "</div>
          ";
            }
            // line 20
            echo "      ";
        }
        // line 21
        echo "      ";
        if ((($context["subcategory_type"] ?? null) != "none")) {
            // line 22
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 23
                echo "          <div class=\"refine-search col-sm-12\">
            <div class=\" category-list\">
              <ul class=\"";
                // line 25
                if ((($context["subcategory_type"] ?? null) == "slider")) {
                    echo " owl-carousel ";
                } else {
                    echo "row";
                }
                echo "\">
                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 27
                    echo "                  <li class=\"item ";
                    if ((($context["subcategory_type"] ?? null) == "grid")) {
                        echo " col-md-3 col-sm-3 col-xs-4 ";
                    }
                    echo "\">
                    <a href=\"";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 28);
                    echo "\">
                      <img src=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "subcategory_image", [], "any", false, false, false, 29);
                    echo "\" />
                      <span class=\"subcategory-title\">";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</span>
                    </a>
                  </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "              </ul>
            </div>
          </div>
        ";
            }
            // line 38
            echo "      ";
        }
        // line 39
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 40
            echo "        <div id=\"display-control\" class=\"product-list-top\">
          <div class=\"row\">
            <div class=\"col-lg-2 d-lg-inline-block d-md-block d-sm-block btn-list-grid\">
              <div class=\"btn-group btn-group-sm\">
                <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 44
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-cells\"></i></button>
                <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 45
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-list\"></i></button>
              </div>
            </div>
            <div class=\"compare-total col-lg-3\"><a href=\"";
            // line 48
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
            <div class=\"pagination-right text-end col-lg-7\">
              <div class=\"sort-by-wrapper\">
                <div class=\"col-md-2 text-end sort-by\">
                  <label for=\"input-sort\" class=\"control-label\">";
            // line 52
            echo ($context["text_sort"] ?? null);
            echo "</label>
                </div>
                <div class=\"col-md-3 text-end sort\">
                  <div class=\"select-wrapper\">
                      <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 58
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 58);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 58) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 58);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                      </select>
                  </div>
                </div>
              </div>
              <div class=\"show-wrapper\">
                <div class=\"col-md-1 text-end show\">
                  <label for=\"input-limit\" class=\"control-label\">";
            // line 66
            echo ($context["text_limit"] ?? null);
            echo "</label> 
                </div>
                <div class=\"col-md-2 text-end limit\"> 
                  <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 71
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 71);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 71) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 71);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                echo "              <div class=\"col\">";
                echo $context["product"];
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </div>
        <div class=\"category-pagination\">
          <div class=\"row\">
            <div class=\"col-sm-6 text-start pagination-desc\">";
            // line 86
            echo ($context["results"] ?? null);
            echo "</div>
            <div class=\"col-sm-6 text-end\">";
            // line 87
            echo ($context["pagination"] ?? null);
            echo "</div>
          </div>
        </div>
      ";
        }
        // line 91
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 92
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-end\"><a href=\"";
            // line 94
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 97
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 98
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
";
        // line 101
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\">
  \$('.category-list .owl-carousel').owlCarousel({
    loop:false,
    nav:true,    
    margin: 0,
    dots: false,      
    rewind: true,
    rtl: \$('html').attr('dir') == 'rtl'? true : false,  
    navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
    responsive:{
          0:{
              items:2
          },
          576:{
              items:3
          },
          767:{
              items:3
          },
          991:{
              items:3
          },
          1200:{
              items:4
          }
      }
  });   
</script>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 101,  303 => 98,  298 => 97,  290 => 94,  284 => 92,  281 => 91,  274 => 87,  270 => 86,  265 => 83,  256 => 81,  252 => 80,  243 => 73,  228 => 71,  224 => 70,  217 => 66,  209 => 60,  194 => 58,  190 => 57,  182 => 52,  173 => 48,  167 => 45,  163 => 44,  157 => 40,  154 => 39,  151 => 38,  145 => 34,  135 => 30,  131 => 29,  127 => 28,  120 => 27,  116 => 26,  108 => 25,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  89 => 18,  87 => 17,  83 => 16,  80 => 15,  78 => 14,  74 => 13,  70 => 12,  65 => 9,  54 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/category.twig", "C:\\xampp\\htdocs\\OPC001L01_2.3\\catalog\\view\\template\\product\\category.twig");
    }
}
