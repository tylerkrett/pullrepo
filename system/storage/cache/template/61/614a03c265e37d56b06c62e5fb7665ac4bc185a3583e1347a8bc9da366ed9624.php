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

/* catalog/view/template/product/search.twig */
class __TwigTemplate_b517fb84cd7a8a24129c7fad721bbc7a239c0f70a57fc4f6908cf6709ca73c43 extends Template
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
<div id=\"product-search\"> 
  <div class=\"container\">
    <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 14
        echo ($context["content_top"] ?? null);
        echo "
       <!--  <legend>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</legend> -->
      <div class=\"col\"><label for=\"input-search\" class=\"col-form-label\">";
        // line 16
        echo ($context["entry_search"] ?? null);
        echo "</label></div>
        <div class=\"row row-cols-1 row-cols-md-2\">
          <div class=\"col\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 19
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control mb-3\"/>
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"";
        // line 21
        if (($context["description"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-description\" class=\"form-check-label\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"col\">
            <select name=\"category_id\" id=\"input-category\" class=\"form-select mb-3\">
              <option value=\"0\">";
        // line 26
        echo ($context["text_category"] ?? null);
        echo "</option>
              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 28
            echo "                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28) == ($context["category_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
            echo "</option>
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 30
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 30);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                    echo " selected";
                }
                echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 30);
                echo "</option>
                  ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 32
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 32);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 32) == ($context["category_id"] ?? null))) {
                        echo " selected";
                    }
                    echo ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 32);
                    echo "</option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </select>
            <div class=\"form-check mb-3\">
              <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"";
        // line 38
        if (($context["sub_category"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-sub-category\" class=\"form-check-label\">";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
            </div>
          </div>
        </div>
          <div class=\"col\">
            <button type=\"button\" id=\"button-search\" class=\"btn btn-primary\">";
        // line 43
        echo ($context["button_search"] ?? null);
        echo "</button>
            <input type=\"hidden\" value=\"";
        // line 44
        echo ($context["language"] ?? null);
        echo "\" id=\"langauge\">
          </div>
        <hr/>
        <h3 class=\"search_heading mb-3\">";
        // line 47
        echo ($context["text_search"] ?? null);
        echo "</h3>
        ";
        // line 48
        if (($context["products"] ?? null)) {
            // line 49
            echo "        <div id=\"display-control\" class=\"product-list-top\">
          <div class=\"row\">
            <div class=\"col-lg-2 d-lg-inline-block d-md-block d-sm-block btn-list-grid\">
              <div class=\"btn-group btn-group-sm\">
                <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 53
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-cells\"></i></button>
                <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 54
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-list\"></i></button>
              </div>
            </div>
            <div class=\"compare-total col-lg-3\"><a href=\"";
            // line 57
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
            <div class=\"pagination-right text-end col-lg-7\">
              <div class=\"sort-by-wrapper\">
                <div class=\"col-md-2 text-end sort-by\">
                  <label for=\"input-sort\" class=\"control-label\">";
            // line 61
            echo ($context["text_sort"] ?? null);
            echo "</label>
                </div>
                <div class=\"col-md-3 text-end sort\">
                  <div class=\"select-wrapper\">
                      <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 67
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 67);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 67) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 67);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                      </select>
                  </div>
                </div>
              </div>
              <div class=\"show-wrapper\">
                <div class=\"col-md-1 text-end show\">
                  <label for=\"input-limit\" class=\"control-label\">";
            // line 75
            echo ($context["text_limit"] ?? null);
            echo "</label> 
                </div>
                <div class=\"col-md-2 text-end limit\"> 
                  <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 80
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 80);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 80) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 80);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 90
                echo "              <div class=\"col\">";
                echo $context["product"];
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "        </div>
        <div class=\"row pagi category-pagination\" style=\"margin: 30px 0;\">
          <div class=\"col-sm-6 text-start\">";
            // line 94
            echo ($context["results"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 95
            echo ($context["pagination"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 98
        echo "        ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 99
        echo ($context["column_right"] ?? null);
        echo "
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#button-search').bind('click', function() {
    url = 'index.php?route=product/search';

    var search = \$('#content input[name=\\'search\\']').prop('value');

    if (search) {
      url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

    if (category_id > 0) {
      url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

    if (sub_category) {
      url += '&sub_category=true';
    }

    var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

    if (filter_description) {
      url += '&description=true';
    }

    var langauge = \$('#langauge').prop('value');
    url += '&language='+langauge;

    location = url;
  });

  \$('#content input[name=\\'search\\']').bind('keydown', function(e) {
    if (e.keyCode == 13) {
      \$('#button-search').trigger('click');
    }
  });

  \$('select[name=\\'category_id\\']').on('change', function() {
    if (this.value == '0') {
      \$('input[name=\\'sub_category\\']').prop('disabled', true);
    } else {
      \$('input[name=\\'sub_category\\']').prop('disabled', false);
    }
  });

  \$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 153
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 153,  330 => 99,  325 => 98,  319 => 95,  315 => 94,  311 => 92,  302 => 90,  298 => 89,  289 => 82,  274 => 80,  270 => 79,  263 => 75,  255 => 69,  240 => 67,  236 => 66,  228 => 61,  219 => 57,  213 => 54,  209 => 53,  203 => 49,  201 => 48,  197 => 47,  191 => 44,  187 => 43,  175 => 38,  171 => 36,  165 => 35,  159 => 34,  144 => 32,  140 => 31,  129 => 30,  125 => 29,  114 => 28,  110 => 27,  106 => 26,  94 => 21,  87 => 19,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  63 => 9,  52 => 7,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/search.twig", "C:\\xampp\\htdocs\\OPC001L01_2.3\\catalog\\view\\template\\product\\search.twig");
    }
}
