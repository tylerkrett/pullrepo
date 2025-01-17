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

/* extension/ishifeatureproductsblock/admin/view/template/module/ishifeatureproductsblock.twig */
class __TwigTemplate_f87fa0d70c436715373352c263b8c9ec0871930dc0a4e721317ef9d921d1cfa0 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
    <div class=\"container-fluid\">
        <div class=\"float-end\">
          <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-reply\"></i></a>
        </div>
        <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ol class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ol>
    </div>
    </div>
\t\t<div class=\"container-fluid\">
\t\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "\t\t\t<div class=\"card panel-default\">
\t\t\t\t<div class=\"card-header\">
\t\t        \t<i class=\"fa fa-pencil\"></i>";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
\t\t      \t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-title-";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 39);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_heading"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-showcategory\">";
        // line 55
        echo ($context["entry_categoty_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 58
        if (($context["showcategory"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showcategory\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-category-status\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showcategory\" value=\"1\" class=\"primary\" id=\"input-showcategory\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t                <label class=\"col-sm-4 col-form-label\">";
        // line 70
        echo ($context["entry_category"] ?? null);
        echo "</label>
\t\t\t\t\t                <div class=\"col-sm-8\">
\t\t\t\t\t                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 72
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
\t\t\t\t\t                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
\t\t\t\t\t                  <div class=\"input-group\">
\t\t\t\t\t                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t                      <table id=\"product-category\" class=\"table table-sm m-0\">
\t\t\t\t\t                        <tbody>
\t\t\t\t\t                          ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 79
            echo "\t\t\t\t\t                            <tr id=\"product-category-";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 79);
            echo "\">
\t\t\t\t\t                              <td>";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 80);
            echo "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 80);
            echo "\"/></td>
\t\t\t\t\t                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
\t\t\t\t\t                            </tr>
\t\t\t\t\t                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t                        </tbody>
\t\t\t\t\t                      </table>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    ";
        // line 87
        if (($context["master_id"] ?? null)) {
            // line 88
            echo "\t\t\t\t\t                      <div class=\"input-group-text\">
\t\t\t\t\t                        <div class=\"form-check form-switch\">
\t\t\t\t\t                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 90
            if (twig_get_attribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 90)) {
                echo " checked";
            }
            echo "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
\t\t\t\t\t                        </div>
\t\t\t\t\t                      </div>
\t\t\t\t\t                    ";
        }
        // line 94
        echo "\t\t\t\t\t                  </div>
\t\t\t\t\t                  <div class=\"form-text\">";
        // line 95
        echo ($context["help_category"] ?? null);
        echo "</div>
\t\t\t\t\t                </div>
\t\t\t\t\t            </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-showfeatured\">";
        // line 103
        echo ($context["entry_showfeatured"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 106
        if (($context["showfeatured"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showfeatured\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showfeatured\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showfeatured\" value=\"1\" class=\"primary\" id=\"input-showfeatured\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t            <label class=\"col-sm-4 col-form-label\">";
        // line 118
        echo ($context["entry_product"] ?? null);
        echo "</label>
\t\t\t\t\t\t            <div class=\"col-sm-8\">
\t\t\t\t\t\t              <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 120
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
\t\t\t\t\t\t              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
\t\t\t\t\t\t              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t                <table id=\"featured-product\" class=\"table table-sm m-0\">
\t\t\t\t\t\t                  <tbody>
\t\t\t\t\t\t                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 126
            echo "\t\t\t\t\t\t                      <tr id=\"featured-product-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 126);
            echo "\">
\t\t\t\t\t\t                        <td>";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 127);
            echo "<input type=\"hidden\" name=\"product[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 127);
            echo "\"/></td>
\t\t\t\t\t\t                        <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>
\t\t\t\t\t\t                      </tr>
\t\t\t\t\t\t                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t\t\t\t                  </tbody>
\t\t\t\t\t\t                </table>
\t\t\t\t\t\t              </div>
\t\t\t\t\t\t              <div class=\"form-text text-muted\">";
        // line 134
        echo ($context["help_product"] ?? null);
        echo "</div>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6 col-form-label\" for=\"input-showbestseller\">";
        // line 142
        echo ($context["entry_showbestseller"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 145
        if (($context["showbestseller"] ?? null)) {
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showbestseller\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showbestseller\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showbestseller\" value=\"1\" class=\"primary\" id=\"input-showbestseller\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6 col-form-label\" for=\"input-shownew\">";
        // line 157
        echo ($context["entry_shownew"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 160
        if (($context["shownew"] ?? null)) {
            // line 161
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shownew\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-shownew\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 163
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shownew\" value=\"1\" class=\"primary\" id=\"input-shownew\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6 col-form-label\" for=\"input-showspecial\">";
        // line 172
        echo ($context["entry_showspecial"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 175
        if (($context["showspecial"] ?? null)) {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showspecial\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showspecial\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showspecial\" value=\"1\" class=\"primary\" id=\"input-showspecial\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 180
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-limit\">";
        // line 189
        echo ($context["entry_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"limit\" value=\"";
        // line 191
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-product-row\"><span data-toggle=\"tooltip\" title=\"";
        // line 197
        echo ($context["help_productrow"] ?? null);
        echo "\">";
        echo ($context["entry_productrow"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_row\" value=\"";
        // line 199
        echo ($context["product_row"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_productrow"] ?? null);
        echo "\" id=\"input-product-row\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-image-hover\">";
        // line 207
        echo ($context["entry_image_hover"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 210
        if (($context["hover_image"] ?? null)) {
            // line 211
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-image-hover\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" id=\"input-image-hover\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-product-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 222
        echo ($context["help_productcolumn"] ?? null);
        echo "\">";
        echo ($context["entry_product_column"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-desktop\">";
        // line 226
        echo ($context["entry_desktop"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"desktop_column\" value=\"";
        // line 227
        echo ($context["desktop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_desktop"] ?? null);
        echo "\" id=\"input-desktop\" class=\"form-control col-sm-8\" />
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-laptop\">";
        // line 231
        echo ($context["entry_laptop"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"laptop_column\" value=\"";
        // line 232
        echo ($context["laptop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_laptop"] ?? null);
        echo "\" id=\"input-laptop\" class=\"form-control col-sm-8\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-tablet\">";
        // line 236
        echo ($context["entry_tablet"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"tablet_column\" value=\"";
        // line 237
        echo ($context["tablet_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tablet"] ?? null);
        echo "\" id=\"input-tablet\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\" for=\"input-mobile\">";
        // line 241
        echo ($context["entry_mobile"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"mobile_column\" value=\"";
        // line 242
        echo ($context["mobile_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mobile"] ?? null);
        echo "\" id=\"input-mobile\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mb-3 required \">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-column\">";
        // line 249
        echo ($context["entry_column"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"column\" id=\"input-column\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 252
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 253
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 254
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ";
        // line 255
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 262
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
        // line 264
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t";
        // line 265
        if (($context["error_width"] ?? null)) {
            // line 266
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 268
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 mb-3\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 col-form-label\" for=\"input-height\">";
        // line 273
        echo ($context["entry_height"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
        // line 275
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t";
        // line 276
        if (($context["error_height"] ?? null)) {
            // line 277
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 279
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 284
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 287
        if (($context["status"] ?? null)) {
            // line 288
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 289
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 291
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 292
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 294
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<style>
\t\t\t.showtext,.hidetype1{
\t\t\t\tdisplay:none;
\t\t\t}
\t\t\t.show,.showtype1{
\t\t\t\tdisplay:block;
\t\t\t}
\t\t\t/* The switch - the box around the slider */
\t\t\t.switch {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: inline-block;
\t\t\t\twidth: 60px;
\t\t\t\theight: 34px;
\t\t\t}

\t\t\t/* Hide default HTML checkbox */
\t\t\t.switch input {display:none;}

\t\t\t/* The slider */
\t\t\t.slider {
\t\t\t\tposition: absolute;
\t\t\t\tcursor: pointer;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t\tbottom: 0;
\t\t\t\tbackground-color: #ccc;
\t\t\t\t-webkit-transition: .4s;
\t\t\t\ttransition: .4s;
\t\t\t}

\t\t\t.slider:before {
\t\t\t\tposition: absolute;
\t\t\t\tcontent: \"\";
\t\t\t\theight: 26px;
\t\t\t\twidth: 26px;
\t\t\t\tleft: 4px;
\t\t\t\tbottom: 4px;
\t\t\t\tbackground-color: white;
\t\t\t\t-webkit-transition: .4s;
\t\t\t\ttransition: .4s;
\t\t\t}
\t\t\tinput.default:checked + .slider {
\t\t\t\tbackground-color: #444;
\t\t\t}
\t\t\tinput.primary:checked + .slider {
\t\t\t\tbackground-color: #2196F3;
\t\t\t}
\t\t\tinput.success:checked + .slider {
\t\t\t\tbackground-color: #8bc34a;
\t\t\t}
\t\t\tinput.info:checked + .slider {
\t\t\t\tbackground-color: #3de0f5;
\t\t\t}
\t\t\tinput.warning:checked + .slider {
\t\t\t\tbackground-color: #FFC107;
\t\t\t}
\t\t\tinput.danger:checked + .slider {
\t\t\t\tbackground-color: #f44336;
\t\t\t}

\t\t\tinput:focus + .slider {
\t\t\t\tbox-shadow: 0 0 1px #2196F3;
\t\t\t}

\t\t\tinput:checked + .slider:before {
\t\t\t\t-webkit-transform: translateX(26px);
\t\t\t\t-ms-transform: translateX(26px);
\t\t\t\ttransform: translateX(26px);
\t\t\t}

\t\t\t/* Rounded sliders */
\t\t\t.slider.round {
\t\t\t\tborder-radius: 34px;
\t\t\t}

\t\t\t.slider.round:before {
\t\t\t\tborder-radius: 50%;
\t\t\t}
\t\t</style>
\t\t<script type=\"text/javascript\"><!--
\t

// Downloads
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 389
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-product').autocomplete({
    source: function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 423
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    select: function (item) {
        \$('#input-product').val('');

        \$('#featured-product-' + item['value']).remove();

        html  = '<tr id=\"featured-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-circle-minus\"></i></button></td>';
        html += '</tr>';

        \$('#featured-product tbody').append(html);
    }
});

\$('#featured-product').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
});

//--></script>
<script type=\"text/javascript\"><!--
\t\$('#language a:first').tab('show');
//--></script>
</div>
<script type=\"text/javascript\">
    \$(document).ready( function() {
      \$('.themecolor').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
      change: function(hex, opacity) {
        jQuery('.panel .mail-preview iframe').contents().find(jQuery(this).attr('data-target')).css(jQuery(this).attr('data-property'), hex);
      }
        });

      });
    });
\t
  </script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.min.js\"></script> 
";
        // line 490
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/ishifeatureproductsblock/admin/view/template/module/ishifeatureproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  876 => 490,  806 => 423,  769 => 389,  672 => 294,  667 => 292,  662 => 291,  657 => 289,  652 => 288,  650 => 287,  644 => 284,  637 => 279,  631 => 277,  629 => 276,  623 => 275,  618 => 273,  611 => 268,  605 => 266,  603 => 265,  597 => 264,  592 => 262,  580 => 255,  574 => 254,  568 => 253,  562 => 252,  556 => 249,  544 => 242,  540 => 241,  531 => 237,  527 => 236,  518 => 232,  514 => 231,  505 => 227,  501 => 226,  492 => 222,  483 => 215,  479 => 213,  475 => 211,  473 => 210,  467 => 207,  454 => 199,  447 => 197,  436 => 191,  431 => 189,  420 => 180,  416 => 178,  412 => 176,  410 => 175,  404 => 172,  395 => 165,  391 => 163,  387 => 161,  385 => 160,  379 => 157,  370 => 150,  366 => 148,  362 => 146,  360 => 145,  354 => 142,  343 => 134,  338 => 131,  326 => 127,  321 => 126,  317 => 125,  309 => 120,  304 => 118,  295 => 111,  291 => 109,  287 => 107,  285 => 106,  279 => 103,  268 => 95,  265 => 94,  256 => 90,  252 => 88,  250 => 87,  245 => 84,  233 => 80,  228 => 79,  224 => 78,  215 => 72,  210 => 70,  201 => 63,  197 => 61,  193 => 59,  191 => 58,  185 => 55,  177 => 49,  170 => 47,  164 => 45,  162 => 44,  152 => 43,  143 => 42,  139 => 41,  132 => 39,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifeatureproductsblock/admin/view/template/module/ishifeatureproductsblock.twig", "C:\\xampp\\htdocs\\OPC003L03_new\\extension\\ishifeatureproductsblock\\admin\\view\\template\\module\\ishifeatureproductsblock.twig");
    }
}
