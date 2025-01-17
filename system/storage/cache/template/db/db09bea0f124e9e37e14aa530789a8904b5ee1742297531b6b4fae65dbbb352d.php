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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_f34db48e5590fbfd76bbcdab9e8fcc4950049c39b5d93810d1ebbb1133f8259c extends Template
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
<div id=\"product-info\" class=\"container\">
  <div class=\"row\">
  ";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col-lg-9 col-12\">
      ";
        // line 14
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row product-row\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 product-left float-start\">
          <div class=\"product-left-title d-lg-none d-md-none d-sm-block\">
              <h1 class=\"product-title\">";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
              <ul class=\"list-unstyled price\">
                ";
        // line 20
        if ( !($context["special"] ?? null)) {
            // line 21
            echo "                  <li>
                    <h2 class=\"product-price\">";
            // line 22
            echo ($context["price"] ?? null);
            echo "</h2>
                  </li>
                  ";
        } else {
            // line 25
            echo "                  <li class=\"product-price\">
                    <h2>";
            // line 26
            echo ($context["special"] ?? null);
            echo "</h2>
                  </li>
                  <li class=\"product-dis\"><span style=\"text-decoration: line-through;\">";
            // line 28
            echo ($context["price"] ?? null);
            echo "</span></li>
                  ";
        }
        // line 30
        echo "              </ul>
          </div>
          ";
        // line 32
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 33
            echo "            <div class=\"image magnific-popup\">
              ";
            // line 34
            if (($context["thumb"] ?? null)) {
                // line 35
                echo "                <a href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail mb-3\"/></a>
              ";
            }
            // line 37
            echo "            </div>

              ";
            // line 39
            if (($context["images"] ?? null)) {
                // line 40
                echo "                <div class=\"image_show\">  
                  <div id=\"slider_carousel\" class=\"owl-carousel\">
                    ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 43
                    echo "                      <div class=\"image-additional item\">
                        <a class=\"thumbnail\" href=\"";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 44);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"> 
                          <img src=\"";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 45);
                    echo "\" class=\"img-thumbnail\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                  </div>
                </div> 
              ";
            }
            // line 52
            echo "          ";
        }
        // line 53
        echo "        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12 product-right float-end\" data-countdowntime=\"";
        // line 54
        echo ($context["date_end"] ?? null);
        echo "\">
          <div class=\"product-left-title d-none d-lg-block d-md-block\">
              <h1 class=\"product-title\">";
        // line 56
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          </div>
          ";
        // line 58
        if (($context["review_status"] ?? null)) {
            // line 59
            echo "              <div class=\"rating-wrapper\">
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 61
                echo "                  ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo " 
                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star gray fa-stack-2x\"></i>
                    </span> 
                  ";
                } else {
                    // line 65
                    echo " 
                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                    </span> 
                  ";
                }
                // line 70
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                 <div  href=\"#review_content\" onclick=\"myFunction()\" class=\"review-count\">";
            echo ($context["text_reviews"] ?? null);
            echo "</div> / 
                 <div href=\"#headingTwo\" onclick=\"myFunction()\" class=\"review-content write-review\"><i class=\"fa fa-pencil\"></i> ";
            // line 72
            echo ($context["text_write"] ?? null);
            echo "</div>
              </div>
          ";
        }
        // line 74
        echo " 
          <ul class=\"list-unstyled price\">
            ";
        // line 76
        if ( !($context["special"] ?? null)) {
            // line 77
            echo "              <li>
                <h2 class=\"product-price\">";
            // line 78
            echo ($context["price"] ?? null);
            echo "</h2>
              </li>
              ";
        } else {
            // line 81
            echo "               <li class=\"product-dis\"><span style=\"text-decoration: line-through;\">";
            echo ($context["price"] ?? null);
            echo "</span></li>
              <li class=\"product-price\">
                <h2>";
            // line 83
            echo ($context["special"] ?? null);
            echo "</h2>
              </li>
             
              ";
        }
        // line 87
        echo "          </ul>
          ";
        // line 88
        if ((($context["date_end"] ?? null) && (($context["product_page_counter"] ?? null) == 1))) {
            // line 89
            echo "          <div class='countdown-container'>
              <div class='countdown-days counter'>
                <span class=\"data\"></span>
                <span class=\"lbl\">";
            // line 92
            echo ($context["days_name"] ?? null);
            echo "</span>
              </div>
              <div class='countdown-hours counter'>
                <span class=\"data\"></span>
                <span class=\"lbl\">";
            // line 96
            echo ($context["hours_name"] ?? null);
            echo "</span>
              </div>
              <div class='countdown-minutes counter'>
                <span class=\"data\"></span>
                <span class=\"lbl\">";
            // line 100
            echo ($context["min_name"] ?? null);
            echo "</span>
              </div>
              <div class='countdown-seconds counter'>
                <span class=\"data\"></span>
                <span class=\"lbl\">";
            // line 104
            echo ($context["sec_name"] ?? null);
            echo "</span>
              </div>
          </div>
        ";
        }
        // line 108
        echo "          <div class=\"inner-box-desc\">
            <ul class=\"list-unstyled\">
              ";
        // line 110
        if (($context["manufacturer"] ?? null)) {
            // line 111
            echo "                <li class=\"brand\">";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
              ";
        }
        // line 113
        echo "              <li class=\"model\">";
        echo ($context["text_model"] ?? null);
        echo "
              <span>";
        // line 114
        echo ($context["model"] ?? null);
        echo "</span> 
            </li>
              <li class=\"stock\">";
        // line 116
        echo ($context["text_stock"] ?? null);
        echo "
                <span>";
        // line 117
        echo ($context["stock"] ?? null);
        echo " </span> 
              </li>
            </ul>
          </div>
          <form method=\"post\" data-oc-toggle=\"ajax\">
            <div class=\"form-group\">
              <button type=\"submit\" formaction=\"";
        // line 123
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" class=\"wishlist\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\">
                <i class=\"fa-regular fa-heart\"></i> ";
        // line 124
        echo ($context["button_wishlist"] ?? null);
        echo "
              </button> &nbsp; &nbsp;
              <button type=\"submit\" formaction=\"";
        // line 126
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\" class=\"compare\">
                <svg version=\"1.1\" id=\"Icons\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                   viewBox=\"0 0 32 32\" style=\"enable-background:new 0 0 32 32;\" xml:space=\"preserve\">
                  <path d=\"M24,14c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4L26.6,9l-3.3-3.3c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l4,4
                    c0.4,0.4,0.4,1,0,1.4l-4,4C24.5,13.9,24.3,14,24,14z\"/>
                  <path d=\"M24,28c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l3.3-3.3l-3.3-3.3c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l4,4
                    c0.4,0.4,0.4,1,0,1.4l-4,4C24.5,27.9,24.3,28,24,28z\"/>
                  <path d=\"M7,24H4c-0.6,0-1-0.4-1-1s0.4-1,1-1h3c3.3,0,6-2.7,6-6c0-4.4,3.6-8,8-8h5c0.6,0,1,0.4,1,1s-0.4,1-1,1h-5c-3.3,0-6,2.7-6,6
                    C15,20.4,11.4,24,7,24z\"/>
                  <path d=\"M11.9,12c-0.3,0-0.5-0.1-0.7-0.3C10.1,10.6,8.6,10,7,10H4c-0.6,0-1-0.4-1-1s0.4-1,1-1h3c2.1,0,4.1,0.8,5.6,2.3
                    c0.4,0.4,0.4,1,0,1.4C12.4,11.9,12.2,12,11.9,12z\"/>
                  <path d=\"M26,24h-5c-2.1,0-4.1-0.8-5.6-2.2c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0C18,21.4,19.4,22,21,22h5c0.6,0,1,0.4,1,1
                    S26.6,24,26,24z\"/>
                </svg>
                <span class=\"compare_text\">";
        // line 140
        echo ($context["button_compare"] ?? null);
        echo "</span>
            </button>
            </div>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 143
        echo ($context["product_id"] ?? null);
        echo "\"/>
          </form>
          <div id=\"product\">
            <form id=\"form-product\">
              ";
        // line 147
        if (($context["options"] ?? null)) {
            // line 148
            echo "              <!--   <h3>";
            echo ($context["text_option"] ?? null);
            echo "</h3> -->
              <div class=\"avilable-option\">
                ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 151
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 151) == "select")) {
                    // line 152
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-6 col-8 mb-4";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 152)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153);
                    echo "</label> <select name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 153);
                    echo "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 154
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                        ";
                    // line 155
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 155));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 156
                        echo "                          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 156);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 156);
                        echo "
                            ";
                        // line 157
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 157)) {
                            // line 158
                            echo "                              (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 158);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 158);
                            echo ")
                            ";
                        }
                        // line 159
                        echo "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "                      </select>
                      <div id=\"error-option-";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 165
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 165) == "radio")) {
                    // line 166
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 166)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 167);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                    echo "\">
                        ";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 169));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 170
                        echo "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 171);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 171);
                        echo "\" class=\"form-check-input\"/> 
                            <label for=\"input-option-value-";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 172);
                        echo "\" class=\"form-check-label\">";
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 172)) {
                            // line 173
                            echo "                              <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 173);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 173);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 173);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 174
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 174);
                        echo "
                              ";
                        // line 175
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 175)) {
                            // line 176
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 176);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176);
                            echo ")
                              ";
                        }
                        // line 178
                        echo "                            </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 185
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) == "checkbox")) {
                    // line 186
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 186)) {
                        echo " required";
                    }
                    echo "\">
                      <label class=\"form-label\">";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 187);
                    echo "</label>
                      <div id=\"input-option-";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\">

                        ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 191
                        echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\" id=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\" class=\"form-check-input\"/> <label for=\"input-option-value-";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\" class=\"form-check-label\">
                              ";
                        // line 193
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 193)) {
                            // line 194
                            echo "                                <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 194);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 194);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194)) {
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 194);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194);
                            }
                            echo "\" class=\"img-thumbnail\"/>";
                        }
                        // line 195
                        echo "                              ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 195);
                        echo "
                              ";
                        // line 196
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 196)) {
                            // line 197
                            echo "                                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 197);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 197);
                            echo ")
                              ";
                        }
                        // line 198
                        echo "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "                      </div>
                      <div id=\"error-option-";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 205
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "text")) {
                    // line 206
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 207);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 211
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 211) == "textarea")) {
                    // line 212
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 212)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label> <textarea name=\"option[";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 213);
                    echo "</textarea>
                      <div id=\"error-option-";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 217
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 217) == "file")) {
                    // line 218
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 218)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"button-upload-";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 219);
                    echo "</label>
                      <div>
                        <button type=\"button\" id=\"button-upload-";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 221);
                    echo "\" data-oc-toggle=\"upload\" data-oc-size-max=\"";
                    echo ($context["config_file_max_size"] ?? null);
                    echo "\" data-oc-size-error=\"";
                    echo ($context["error_upload_size"] ?? null);
                    echo "\" data-oc-url=\"";
                    echo ($context["upload"] ?? null);
                    echo "\" data-oc-target=\"#input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 221);
                    echo "\" class=\"btn btn-default\"><i class=\"fa-solid fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                        <input type=\"hidden\" name=\"option[";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "]\" value=\"\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "\"/>
                      </div>
                      <div id=\"error-option-";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 227
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 227) == "date")) {
                    // line 228
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 228)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 229);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 231);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "\" class=\"form-control date\"/>
                        <div class=\"input-group-text btn-default\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 234);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 237
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 237) == "datetime")) {
                    // line 238
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 238)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 239);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 241);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                    echo "\" class=\"form-control datetime\"/>
                        <div class=\"input-group-text btn-default\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 244
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 244);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 247
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 247) == "time")) {
                    // line 248
                    echo "                    <div class=\"product_option col-lg-6 col-md-12 col-sm-12 mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 248)) {
                        echo " required";
                    }
                    echo "\">
                      <label for=\"input-option-";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "\" class=\"form-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 249);
                    echo "</label>
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"option[";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 251);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 251);
                    echo "\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 251);
                    echo "\" class=\"form-control time\"/>
                        <div class=\"input-group-text btn-default\"><i class=\"fa-regular fa-calendar\"></i></div>
                      </div>
                      <div id=\"error-option-";
                    // line 254
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 254);
                    echo "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 257
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "                ";
        }
        // line 259
        echo "                ";
        if (($context["subscription_plans"] ?? null)) {
            // line 260
            echo "                  <hr/>
                  <h3>";
            // line 261
            echo ($context["text_subscription"] ?? null);
            echo "</h3>
                  <div class=\"mb-3 required\">
                    <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                      <option value=\"\">";
            // line 264
            echo ($context["text_select"] ?? null);
            echo "</option>
                      ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 266
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 266);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 266);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "                    </select>
                    ";
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 270
                echo "                      <div id=\"subscription-description-";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 270);
                echo "\" class=\"form-text subscription d-none\">";
                echo twig_get_attribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 270);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription_plan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "                    <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                  </div>
                ";
        }
        // line 275
        echo "
                  <!-- <div class=\"form-group qut\">
                    <label for=\"input-quantity\" class=\"control-label form-label\">";
        // line 277
        echo ($context["entry_qty"] ?? null);
        echo " :</label> 
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 278
        echo ($context["maximum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> 
                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 279
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                    <div id=\"error-quantity\" class=\"form-text\"></div>
                      ";
        // line 281
        if ((($context["stock_statusclass"] ?? null) == "")) {
            echo "<button type=\"submit\" formaction=\"";
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>";
        }
        // line 282
        echo "                  </div> -->

                  <label for=\"input-quantity\" class=\"control-label form-label\">";
        // line 284
        echo ($context["entry_qty"] ?? null);
        echo " :</label> 
                  <div class=\"form-group qut\">
                    <div class=\"plus-minus-input\">
                      <div class=\"input-group-button\">
                        <button type=\"button\" class=\"button hollow circle\" data-quantity=\"minus\" data-field=\"quantity\">
                          <i class=\"fa fa-minus\" aria-hidden=\"true\"></i>
                        </button>
                      </div>
                      <input type=\"number\" name=\"quantity\" value=\"";
        // line 292
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> 
                      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 293
        echo ($context["product_id"] ?? null);
        echo "\" id=\"input-product-id\"/>
                      <div class=\"input-group-button\">
                        <button type=\"button\" class=\"button hollow circle\" data-quantity=\"plus\" data-field=\"quantity\">
                          <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </button>
                      </div>
                  </div>
                  </div>
                  <div id=\"error-quantity\" class=\"form-text\"></div>
                      ";
        // line 302
        if ((($context["stock_statusclass"] ?? null) == "")) {
            echo "<button type=\"submit\" formaction=\"";
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>";
        }
        // line 303
        echo "             
                ";
        // line 304
        if ((($context["minimum"] ?? null) > 1)) {
            // line 305
            echo "                  <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
                ";
        }
        // line 307
        echo "                
               <!--  <div class=\"trusted-img\">
                  <img class=\" img-fluid\" src=\"../../../image/catalog/trust_img.png\">
                </div> -->
              </div>
            </form>
            <div class=\"tabs_info clearfix\">
                  <div id=\"accordion\" class=\"panel-group\" role=\"tablist\">
                    ";
        // line 315
        $context["item"] = 1;
        // line 316
        echo "                    <div class=\"accordion-item\">
                      <div class=\"accordion-header\" role=\"tab\" id=\"headingOne\">
                        <a data-bs-toggle=\"collapse\" data-bs-target=\"#tab-description\" data-bs-parent=\"#accordion\" ";
        // line 318
        if ((($context["item"] ?? null) == 1)) {
            echo " aria-expanded=\"true\" ";
        }
        echo " aria-controls=\"tab-description\"> 
                          ";
        // line 319
        echo ($context["tab_description"] ?? null);
        echo " 
                        </a>
                      </div> 
                      <div id=\"tab-description\" class=\"collapse accordion__content ";
        // line 322
        if ((($context["item"] ?? null) == 1)) {
            echo "show";
        }
        echo "\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordion\">
                         <div class=\"tab-description\">";
        // line 323
        echo ($context["description"] ?? null);
        echo "</div>   
                      </div> 
                    </div> 
                    ";
        // line 326
        $context["item"] = (($context["item"] ?? null) + 1);
        // line 327
        echo "                    ";
        $context["item"] = 1;
        // line 328
        echo "                    <div class=\"accordion-item\">
                      <div class=\"accordion-header\" role=\"tab\" id=\"headingTwo\">
                        ";
        // line 330
        if (($context["review_status"] ?? null)) {
            // line 331
            echo "                          <a data-bs-toggle=\"collapse\" data-bs-target=\"#tab-review\" data-bs-parent=\"#accordion\" ";
            if ((($context["item"] ?? null) == 1)) {
                echo " aria-expanded=\"false\" ";
            }
            echo " aria-controls=\"tab-review\">";
            echo ($context["tab_review"] ?? null);
            echo "</a>
                        ";
        }
        // line 333
        echo "                      </div>
                      <div id=\"tab-review\" class=\"collapse accordion__content ";
        // line 334
        if ((($context["item"] ?? null) == 1)) {
        }
        echo "\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordion\">     
                        ";
        // line 335
        if (($context["review_status"] ?? null)) {
            // line 336
            echo "                          <div class=\"panel-body\">
                           ";
            // line 337
            echo ($context["review"] ?? null);
            echo "
                          </div>
                        ";
        }
        // line 340
        echo "                      </div>
                    </div> 
                    ";
        // line 342
        $context["item"] = (($context["item"] ?? null) + 1);
        // line 343
        echo "
                    ";
        // line 344
        if (($context["attribute_groups"] ?? null)) {
            // line 345
            echo "                      <div class=\"accordion-item\">
                        <div class=\"accordion-header\" role=\"tab\" id=\"headingThree\">
                          ";
            // line 347
            if (($context["attribute_groups"] ?? null)) {
                // line 348
                echo "                            <a data-bs-toggle=\"collapse\" data-bs-target=\"#tab-specification\" data-bs-parent=\"#accordion\" aria-expanded=\"false\">";
                echo ($context["tab_attribute"] ?? null);
                echo "</a>
                          ";
            }
            // line 350
            echo "                        </div> 
                        <div id=\"tab-specification\" class=\"accordion-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">            
                          ";
            // line 352
            if (($context["attribute_groups"] ?? null)) {
                // line 353
                echo "                            <div class=\"panel-body\">
                              <table class=\"table table-bordered\">
                                ";
                // line 355
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                    // line 356
                    echo "                                <thead>
                                  <tr>
                                    <td colspan=\"2\"><strong>";
                    // line 358
                    echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 358);
                    echo "</strong></td>
                                  </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 362));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 363
                        echo "                                <tr>
                                  <td>";
                        // line 364
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 364);
                        echo "</td>
                                  <td>";
                        // line 365
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 365);
                        echo "</td>
                                </tr>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 368
                    echo "                                  </tbody>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 370
                echo "                              </table>
                            </div>
                          ";
            }
            // line 372
            echo "  
                        </div> 
                      </div>  
                    ";
        }
        // line 375
        echo " 
                  </div>
                </div>
          </div>
        </div>
          ";
        // line 380
        if (($context["products"] ?? null)) {
            // line 381
            echo "            <div class=\"related-product\">
              <div class=\"section-header\">  
                <h3 class=\"home-title\">";
            // line 383
            echo ($context["text_related"] ?? null);
            echo "</h3>
              </div>
              <div class=\"row\">
                  <div class=\"related-carousel owl-carousel\">
                ";
            // line 387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 388
                echo "                  <div class=\"item\">
                    ";
                // line 389
                echo $context["product"];
                echo "
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            echo "                  </div>
              </div>
            </div>
          ";
        }
        // line 395
        echo "  
      </div>    
      <script type=\"text/javascript\">
        \$('.related-carousel.owl-carousel').owlCarousel({
          loop:false,
          nav: true,  
          dots: false,      
          rewind: true,
          rtl: \$('html').attr('dir') == 'rtl'? true : false,  
          navText: [\"<i class='fa fa-arrow-left'></i>\",\"<i class='fa fa-arrow-right'></i>\"], 
          responsive:{
                0:{
                    items:2
                },
                544:{
                    items:2
                },
                768:{
                    items:3
                },
                992:{
                    items:3
                },
                1200:{
                    items:3
                }
            }
        }); 
      </script> 
      ";
        // line 424
        if (($context["tags"] ?? null)) {
            // line 425
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
          ";
            // line 426
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 427
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 427);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 427);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "end", [], "any", false, false, false, 427)) {
                    echo ",";
                }
                // line 428
                echo "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 429
            echo "        </p>
      ";
        }
        // line 431
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 433
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-subscription').on('change', function (e) {
    var element = this;

    \$('.subscription').addClass('d-none');

    \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
});

\$('#form-product').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart|add&language=";
        // line 449
        echo ($context["language"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function () {
            \$('#button-cart').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-cart').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#header-cart').load('index.php?route=common/cart|info', function() {
                  \$(\".cart-link\").click();
                }); 
            }

            
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function () {
    \$('.magnific-popup').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
<script type=\"text/javascript\">
    \$( document ).ready(function() {
      \$(document).on(\"click\",\".thumbnail-img\",function(){
          var largeimg = \$(this).data(\"src\");
          \$('.thumbnail-large').attr('src', largeimg);
      });
    });
  </script>
<script>
  \$('.image_show').magnificPopup({
      type:'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
    \$('#slider_carousel').owlCarousel({
      loop:false,
      nav:true, 
      margin: 15,
      dots: false, 
      rewind: true,
      rtl: \$('html').attr('dir') == 'rtl'? true : false,  
      navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
      responsive:{
            0:{
                items:2
            },
            443:{
                items:3
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1199:{
                items:3
            },
            1200:{
                items:4
            }
        }
    }); 

</script>
<script>
  
   \$(\".review-count\").click(function(e) {
      var element = document.getElementById(\"tab-review\");
      element.classList.add(\"show\");
     \$('html, body').animate({scrollTop: \$(\"#headingTwo\").offset().top- 170});
   })

   \$(\".review-content\").click(function(e) {
      var element = document.getElementById(\"tab-review\");
      element.classList.add(\"show\");
     \$('html, body').animate({scrollTop: \$(\"#review_content\").offset().top- 185});
   })


jQuery(document).ready(function(){
    // This button will increment the value
    \$('[data-quantity=\"plus\"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = \$(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt(\$('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            \$('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            \$('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    \$('[data-quantity=\"minus\"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = \$(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt(\$('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            \$('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            \$('input[name='+fieldName+']').val(0);
        }
    });
});


</script>
";
        // line 598
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1429 => 598,  1277 => 449,  1258 => 433,  1252 => 431,  1248 => 429,  1234 => 428,  1225 => 427,  1208 => 426,  1203 => 425,  1201 => 424,  1170 => 395,  1164 => 392,  1155 => 389,  1152 => 388,  1148 => 387,  1141 => 383,  1137 => 381,  1135 => 380,  1128 => 375,  1122 => 372,  1117 => 370,  1110 => 368,  1101 => 365,  1097 => 364,  1094 => 363,  1090 => 362,  1083 => 358,  1079 => 356,  1075 => 355,  1071 => 353,  1069 => 352,  1065 => 350,  1059 => 348,  1057 => 347,  1053 => 345,  1051 => 344,  1048 => 343,  1046 => 342,  1042 => 340,  1036 => 337,  1033 => 336,  1031 => 335,  1026 => 334,  1023 => 333,  1013 => 331,  1011 => 330,  1007 => 328,  1004 => 327,  1002 => 326,  996 => 323,  990 => 322,  984 => 319,  978 => 318,  974 => 316,  972 => 315,  962 => 307,  956 => 305,  954 => 304,  951 => 303,  941 => 302,  929 => 293,  925 => 292,  914 => 284,  910 => 282,  900 => 281,  895 => 279,  891 => 278,  887 => 277,  883 => 275,  878 => 272,  867 => 270,  863 => 269,  860 => 268,  849 => 266,  845 => 265,  841 => 264,  835 => 261,  832 => 260,  829 => 259,  826 => 258,  820 => 257,  814 => 254,  804 => 251,  797 => 249,  790 => 248,  787 => 247,  781 => 244,  771 => 241,  764 => 239,  757 => 238,  754 => 237,  748 => 234,  738 => 231,  731 => 229,  724 => 228,  721 => 227,  715 => 224,  708 => 222,  694 => 221,  687 => 219,  680 => 218,  677 => 217,  671 => 214,  657 => 213,  650 => 212,  647 => 211,  641 => 208,  627 => 207,  620 => 206,  617 => 205,  611 => 202,  608 => 201,  600 => 198,  593 => 197,  591 => 196,  586 => 195,  573 => 194,  571 => 193,  561 => 192,  558 => 191,  554 => 190,  549 => 188,  545 => 187,  538 => 186,  535 => 185,  529 => 182,  526 => 181,  518 => 178,  511 => 176,  509 => 175,  504 => 174,  491 => 173,  487 => 172,  479 => 171,  476 => 170,  472 => 169,  468 => 168,  464 => 167,  457 => 166,  454 => 165,  448 => 162,  445 => 161,  438 => 159,  431 => 158,  429 => 157,  422 => 156,  418 => 155,  414 => 154,  404 => 153,  397 => 152,  394 => 151,  390 => 150,  384 => 148,  382 => 147,  375 => 143,  369 => 140,  350 => 126,  345 => 124,  339 => 123,  330 => 117,  326 => 116,  321 => 114,  316 => 113,  306 => 111,  304 => 110,  300 => 108,  293 => 104,  286 => 100,  279 => 96,  272 => 92,  267 => 89,  265 => 88,  262 => 87,  255 => 83,  249 => 81,  243 => 78,  240 => 77,  238 => 76,  234 => 74,  228 => 72,  223 => 71,  217 => 70,  210 => 65,  201 => 61,  197 => 60,  194 => 59,  192 => 58,  187 => 56,  182 => 54,  179 => 53,  176 => 52,  171 => 49,  157 => 45,  151 => 44,  148 => 43,  144 => 42,  140 => 40,  138 => 39,  134 => 37,  120 => 35,  118 => 34,  115 => 33,  113 => 32,  109 => 30,  104 => 28,  99 => 26,  96 => 25,  90 => 22,  87 => 21,  85 => 20,  80 => 18,  73 => 14,  68 => 12,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\OPC052L03\\catalog\\view\\template\\product\\product.twig");
    }
}
