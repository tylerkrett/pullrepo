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

/* catalog/view/template/product/compare.twig */
class __TwigTemplate_0f73decaf6f7d314a86fc3761ff768f3e0bad4b477f8400318cd8768c5f1895b extends Template
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
<div id=\"product-compare\" class=\"container\">
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo "
    \t<legend>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</legend>
      ";
        // line 14
        if (($context["products"] ?? null)) {
            // line 15
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td colspan=\"";
            // line 19
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
            // line 24
            echo ($context["text_name"] ?? null);
            echo "</td>
              ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "                <td><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "</strong></a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </tr>
            <tr>
              <td>";
            // line 30
            echo ($context["text_image"] ?? null);
            echo "</td>
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 32
                echo "                <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 32);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                    echo "\" class=\"img-fluid border\"/> ";
                }
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </tr>
            <tr>
              <td>";
            // line 36
            echo ($context["text_price"] ?? null);
            echo "</td>
              ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 38
                echo "                <td>";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 39);
                    echo "
                  ";
                } else {
                    // line 41
                    echo "                    <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 41);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41);
                    echo "</span>
                  ";
                }
                // line 42
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </tr>
            <tr>
              <td>";
            // line 46
            echo ($context["text_model"] ?? null);
            echo "</td>
              ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 48
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 48);
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </tr>
            <tr>
              <td>";
            // line 52
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
              ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 54
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 54);
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            </tr>
            <tr>
              <td>";
            // line 58
            echo ($context["text_availability"] ?? null);
            echo "</td>
              ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 60
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 60);
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </tr>
            ";
            // line 63
            if (($context["review_status"] ?? null)) {
                // line 64
                echo "              <tr>
                <td>";
                // line 65
                echo ($context["text_rating"] ?? null);
                echo "</td>
                ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 67
                    echo "                  <td class=\"rating\">
                    ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 69
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 69) < $context["i"])) {
                            // line 70
                            echo "                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                        } else {
                            // line 72
                            echo "                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                        }
                        // line 74
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                    <br/>
                    ";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 76);
                    echo "
                  </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "              </tr>
            ";
            }
            // line 81
            echo "            <tr>
              <td>";
            // line 82
            echo ($context["text_summary"] ?? null);
            echo "</td>
              ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 84
                echo "                <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 84);
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            </tr>
            <tr>
              <td>";
            // line 88
            echo ($context["text_weight"] ?? null);
            echo "</td>
              ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 90
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 90);
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tr>
            <tr>
              <td>";
            // line 94
            echo ($context["text_dimension"] ?? null);
            echo "</td>
              ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 96);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 96);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 96);
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo " </tr>
          </tbody>
          ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 100
                echo "            <thead>
              <tr>
                <td colspan=\"";
                // line 102
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 102);
                echo "</strong></td>
              </tr>
            </thead>
            ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 106
                    echo "              <tbody>
                <tr>
                  <td>";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 108);
                    echo "</td>
                  ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 110
                        echo "                    <td>";
                        if ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 110)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null)) {
                            echo (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 110)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null);
                        }
                        echo "</td>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 112
                    echo "                </tr>
              </tbody>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "          <tr>
            <td></td>
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 119
                echo "              <td class=\"text-start\">
                <form action=\"";
                // line 120
                echo ($context["add_to_cart"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["cart"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <button type=\"submit\" formaction=\"";
                // line 121
                echo ($context["add_to_cart"] ?? null);
                echo "\" id=\"button-confirm\" class=\"btn btn-primary btn-block \"><i class=\"fa-solid fa-cart-shopping fa-fw\"></i></button>
                  <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                echo "\"/> <input type=\"hidden\" name=\"quantity\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 122);
                echo "\"/>
                  <a href=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 123);
                echo "\" class=\"btn btn-danger btn-block\"><i class=\"fa-solid fa-circle-xmark fa-fw\"></i></a>
                </form>
              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "          </tr>
        </table>
        </div>
      ";
        } else {
            // line 131
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-end\"><a href=\"";
            // line 133
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 136
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 137
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 139
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 139,  489 => 137,  484 => 136,  476 => 133,  470 => 131,  464 => 127,  454 => 123,  448 => 122,  444 => 121,  438 => 120,  435 => 119,  431 => 118,  427 => 116,  421 => 115,  413 => 112,  402 => 110,  398 => 109,  394 => 108,  390 => 106,  386 => 105,  378 => 102,  374 => 100,  370 => 99,  366 => 97,  353 => 96,  349 => 95,  345 => 94,  341 => 92,  332 => 90,  328 => 89,  324 => 88,  320 => 86,  311 => 84,  307 => 83,  303 => 82,  300 => 81,  296 => 79,  287 => 76,  284 => 75,  278 => 74,  274 => 72,  270 => 70,  267 => 69,  263 => 68,  260 => 67,  256 => 66,  252 => 65,  249 => 64,  247 => 63,  244 => 62,  235 => 60,  231 => 59,  227 => 58,  223 => 56,  214 => 54,  210 => 53,  206 => 52,  202 => 50,  193 => 48,  189 => 47,  185 => 46,  181 => 44,  174 => 42,  166 => 41,  160 => 39,  157 => 38,  153 => 37,  149 => 36,  145 => 34,  128 => 32,  124 => 31,  120 => 30,  116 => 28,  105 => 26,  101 => 25,  97 => 24,  87 => 19,  81 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/compare.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\product\\compare.twig");
    }
}
