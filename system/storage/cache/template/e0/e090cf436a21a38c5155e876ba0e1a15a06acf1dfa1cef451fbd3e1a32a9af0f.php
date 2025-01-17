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

/* catalog/view/template/product/quick_view.twig */
class __TwigTemplate_9e72a287e25199e1a621b20192b197d308a495c290d13d805d4bc55cde0a0f25 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 12
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 15
        echo "  <script src=\"";
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 16
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        echo ($context["bootstrapmin"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 18
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 19
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  ";
        // line 20
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 21
            echo "  <link href=\"";
            echo ($context["rtl"] ?? null);
            echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  ";
        }
        // line 23
        echo "  <link href=\"";
        echo ($context["temporaryvariables"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 24
        echo ($context["basecss"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 25
        echo ($context["owlcss"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
  
  <link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700\">
  <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <script src=\"catalog/view/javascript/popper.min.js\" type=\"text/javascript\"></script>
  <!-- <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script> -->
  <script src=\"catalog/view/javascript/typed.min.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/theme.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/bootstrap.esm.min.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/support.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/owl.carousel.min.js\" type=\"text/javascript\"></script>
  
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 44
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 44);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 44);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 44);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 47
            echo "    <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 47);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 50
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 50);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 50);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 53
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</head>
<div class=\"quickview\">
  <div class=\"quickview-container\">   
      <div id=\"content\" class=\"productpage-quickview\">";
        // line 58
        echo ($context["content_top"] ?? null);
        echo " ";
        echo ($context["content_center"] ?? null);
        echo "
        <h2 class=\"page-title hidden\">";
        // line 59
        echo ($context["heading_title"] ?? null);
        echo "</h2>    
        <div class=\"row\">     
          <div class=\"col-md-6 col-sm-6 col-xs-12 product-left\">
            <div class=\"product-info\">
              ";
        // line 63
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            echo " 
                <div class=\"left product-image thumbnails\">
                  ";
            // line 65
            if (($context["thumb"] ?? null)) {
                echo "      
                    <div class=\"image\"><a class=\"thumbnail\" title=\"";
                // line 66
                echo ($context["heading_title"] ?? null);
                echo "\"><img id=\"czzoom\" src=\"";
                echo ($context["popup"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\" class=\"img-fluid\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></div> 
                    ";
            }
            // line 67
            echo " 
                    ";
            // line 68
            if (($context["images"] ?? null)) {
                echo " 
                    ";
                // line 69
                $context["sliderFor"] = 3;
                // line 70
                echo "                    ";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo " 
                  ";
            }
            // line 72
            echo "                </div>
              ";
        }
        // line 73
        echo " 
            </div>
          </div>
          <div class=\"col-md-6 col-sm-6 col-xs-12 product-right\">
            <h3 class=\"product-title\">";
        // line 77
        echo ($context["heading_title"] ?? null);
        echo "</h3>        
            ";
        // line 78
        if (($context["review_status"] ?? null)) {
            echo " 
              <div class=\"rating-wrapper\">            
                ";
            // line 80
            $context["i"] = 1;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " 
                ";
                // line 81
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo " 
                <span class=\"fa fa-stack\"><i class=\"fa fa-star gray off fa-stack-1x\"></i></span>
                ";
                } else {
                    // line 83
                    echo " 
                <span class=\"fa fa-stack\"><i class=\"fa fa-star yellow fa-stack-1x\"></i></span>
                ";
                }
                // line 85
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo " 
                <a class=\"review-count\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 87
            echo ($context["reviews"] ?? null);
            echo "</a>
                <a class=\"write-review\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\"><i class=\"fa fa-pencil\"></i> ";
            // line 88
            echo ($context["text_write"] ?? null);
            echo "</a>
              </div>
            ";
        }
        // line 90
        echo " 
             ";
        // line 91
        if (($context["price"] ?? null)) {
            echo " 
              <ul class=\"list-unstyled price\">
                ";
            // line 93
            if ( !($context["special"] ?? null)) {
                echo " 
                <li>
                  <h4 class=\"product-price\">";
                // line 95
                echo ($context["price"] ?? null);
                echo "</h4>
                </li>
                ";
            } else {
                // line 97
                echo " 
                <li><span class=\"old-price\" style=\"text-decoration: line-through;\">";
                // line 98
                echo ($context["price"] ?? null);
                echo "</span></li>
                <li>
                  <h3 class=\"special-price\">";
                // line 100
                echo ($context["special"] ?? null);
                echo "</h3>
                </li>
                ";
            }
            // line 102
            echo " 
                ";
            // line 103
            if (($context["tax"] ?? null)) {
                echo " 
                <li class=\"price-tax\">";
                // line 104
                echo ($context["text_tax"] ?? null);
                echo "&nbsp;<span>";
                echo ($context["tax"] ?? null);
                echo "</span></li>
                ";
            }
            // line 105
            echo " 
               <!--  ";
            // line 106
            if (($context["points"] ?? null)) {
                echo " 
                <li class=\"rewardpoint\">";
                // line 107
                echo ($context["text_points"] ?? null);
                echo "&nbsp;&nbsp;<span>";
                echo ($context["points"] ?? null);
                echo "</span></li>
                ";
            }
            // line 108
            echo "  -->
                ";
            // line 109
            if (($context["discounts"] ?? null)) {
                echo " 
                ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    echo " 
                <li class=\"discount\">";
                    // line 111
                    echo (($__internal_compile_0 = $context["discount"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["quantity"] ?? null) : null);
                    echo ($context["text_discount"] ?? null);
                    echo (($__internal_compile_1 = $context["discount"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["price"] ?? null) : null);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo " 
                ";
            }
            // line 113
            echo " 
              </ul>
            ";
        }
        // line 115
        echo "        
            <ul class=\"list-unstyled attr clearfix\">
              ";
        // line 117
        if (($context["manufacturer"] ?? null)) {
            echo " 
              <li><span>";
            // line 118
            echo ($context["text_manufacturer"] ?? null);
            echo "</span>&nbsp; <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
              ";
        }
        // line 119
        echo " 
              <li><span>";
        // line 120
        echo ($context["text_model"] ?? null);
        echo "</span>&nbsp; ";
        echo ($context["model"] ?? null);
        echo "</li>
              ";
        // line 121
        if (($context["reward"] ?? null)) {
            echo " 
              <li><span>";
            // line 122
            echo ($context["text_reward"] ?? null);
            echo "</span>&nbsp; ";
            echo ($context["reward"] ?? null);
            echo "</li>
              ";
        }
        // line 123
        echo " 
              <li><span>";
        // line 124
        echo ($context["text_stock"] ?? null);
        echo "</span>&nbsp; ";
        echo ($context["stock_status"] ?? null);
        echo "</li>
            </ul>
            <div id=\"product2\">
              <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 127
        echo ($context["cart"] ?? null);
        echo "\" data-oc-target=\"#header-cart\">
              ";
        // line 128
        if (($context["options"] ?? null)) {
            // line 129
            echo "              <!-- <h4>";
            echo ($context["text_option"] ?? null);
            echo "</h4> -->
              ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 131
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 131) == "select")) {
                    // line 132
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 132)) {
                        echo " required ";
                    }
                    echo " mb-2 col-6\">
                <label class=\"control-label\" for=\"input-option";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 133);
                    echo "</label>
                <select name=\"option[";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    echo "]\" id=\"input-option-";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    echo "\" class=\"form-control\">
                  <option value=\"\">";
                    // line 135
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                  ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 137
                        echo "                  <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 137);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 137);
                        echo "
                  ";
                        // line 138
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 138)) {
                            // line 139
                            echo "                  (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 139);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 139);
                            echo ")
                  ";
                        }
                        // line 140
                        echo " </option>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    echo "                </select>
                <div id=\"error-option-";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    echo "\" class=\"invalid-feedback\"></div>
              </div>
              ";
                }
                // line 146
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "radio")) {
                    // line 147
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 147)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label radio-text\">";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148);
                    echo "</label>
                <div id=\"input-option";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 150
                        echo "                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"option[";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 152);
                        echo "\" />
                      ";
                        // line 153
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 153)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 153);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 153);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 153)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 153);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 153);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                      ";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 154);
                        echo "
                      ";
                        // line 155
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 155)) {
                            // line 156
                            echo "                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 156);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 156);
                            echo ")
                      ";
                        }
                        // line 157
                        echo " </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 159
                    echo " 
                </div>
              </div>
              ";
                }
                // line 163
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "checkbox")) {
                    // line 164
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 164)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label checkbox-text\">";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 165);
                    echo "</label>
                <div id=\"input-option";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 166));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 167
                        echo "                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\" name=\"option[";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 169);
                        echo "\" />
                      ";
                        // line 170
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 170)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 170);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 170);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 170)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 170);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 170);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 171
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 171);
                        echo "
                      ";
                        // line 172
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 172)) {
                            // line 173
                            echo "                      (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 173);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 173);
                            echo ")
                      ";
                        }
                        // line 174
                        echo " </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "                </div>
              </div>
              ";
                }
                // line 180
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) == "text")) {
                    // line 181
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 181)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                    echo "</label>
                <input type=\"text\" name=\"option[";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 183);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\" class=\"form-control\" />
              </div>
              ";
                }
                // line 186
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 186) == "textarea")) {
                    // line 187
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 187)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 188);
                    echo "</label>
                <textarea name=\"option[";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 189);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 189);
                    echo "</textarea>
              </div>
              ";
                }
                // line 192
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 192) == "file")) {
                    // line 193
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 193)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\">";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "</label>
                <button type=\"button\" id=\"button-upload";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block btn-file\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                <input type=\"hidden\" name=\"option[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "\" />
              </div>
              ";
                }
                // line 199
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "date")) {
                    // line 200
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"option[";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 203);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
              ";
                }
                // line 210
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 210) == "datetime")) {
                    // line 211
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 211)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 212);
                    echo "</label>
                <div class=\"input-group datetime\">
                  <input type=\"text\" name=\"option[";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 214);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
              ";
                }
                // line 221
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 221) == "time")) {
                    // line 222
                    echo "              <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 222)) {
                        echo " required ";
                    }
                    echo "\">
                <label class=\"control-label\" for=\"input-option";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 223);
                    echo "</label>
                <div class=\"input-group time\">
                  <input type=\"text\" name=\"option[";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 225);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
              ";
                }
                // line 232
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            echo "              ";
        }
        // line 234
        echo "              ";
        if (($context["recurrings"] ?? null)) {
            // line 235
            echo "              <h3>";
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 238
            echo ($context["text_select"] ?? null);
            echo "</option>
                  ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 240
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 240);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 240);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
              ";
        }
        // line 246
        echo "              
<!--                 <label class=\"control-label mb-2\" for=\"input-quantity\">";
        // line 247
        echo ($context["entry_qty"] ?? null);
        echo "</label>
                <div class=\"form-group mb-4\">
                <input type=\"text\" name=\"quantity\" value=\"";
        // line 249
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 250
        echo ($context["product_id"] ?? null);
        echo "\" /> -->
                 <!-- ";
        // line 251
        if ((($context["stock_statusclass"] ?? null) == "")) {
            echo "<button type=\"submit\" id=\"button-cart\" formaction=\"";
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-primary btn-lg btn-block\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\">
                 ";
            // line 252
            echo ($context["button_cart"] ?? null);
            echo "
                  </button> -->


                <label class=\"control-label mb-2\" for=\"input-quantity\">";
            // line 256
            echo ($context["entry_qty"] ?? null);
            echo "</label>
                <div class=\"form-group mb-4\">
                  <div class=\"plus-minus-input\">
                    <div class=\"input-group-button\">
                      <button type=\"button\" class=\"button hollow circle\" data-quantity=\"minus\" data-field=\"quantity\">
                        <i class=\"fa fa-minus\" aria-hidden=\"true\"></i>
                      </button>
                    </div>
                    <input type=\"text\" name=\"quantity\" value=\"";
            // line 264
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 265
            echo ($context["product_id"] ?? null);
            echo "\" />
                    <div class=\"input-group-button\">
                      <button type=\"button\" class=\"button hollow circle\" data-quantity=\"plus\" data-field=\"quantity\">
                        <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                      </button>
                    </div>
                    ";
            // line 271
            if ((($context["stock_statusclass"] ?? null) == "")) {
                echo "<button type=\"submit\" id=\"button-cart\" formaction=\"";
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" class=\"btn btn-primary btn-lg btn-block\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\">
                   ";
                // line 272
                echo ($context["button_cart"] ?? null);
                echo "
                    </button>
                    ";
            }
            // line 275
            echo "
                  </div>
                </div>


                <!-- <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 280
            echo ($context["product_id"] ?? null);
            echo "\"/>
                <input type=\"hidden\" name=\"quantity\" value=\"";
            // line 281
            echo ($context["minimum"] ?? null);
            echo "\"/> -->
                ";
        }
        // line 283
        echo "                </div>
              ";
        // line 284
        if ((($context["minimum"] ?? null) > 1)) {
            // line 285
            echo "              <div class=\"alert alert-info quantity-height\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
              ";
        }
        // line 287
        echo "            </form>
            </div>                  
          </div>    
        </div>
      </div>
      ";
        // line 292
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
    \$.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
      dataType: 'json',
      beforeSend: function() {
        \$('#recurring-description').html('');
      },
      success: function(json) {
        alert()

        if (json['success']) {
          \$('#recurring-description').html(json['success']);
        }
      }
    });
  });
//--></script>

<!-- <script>
  \$('#form-product').on('submit', function (e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart|add&language=";
        // line 321
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
                //\$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                parent.\$('#header-cart').load('index.php?route=common/cart|info', function() {
                  parent.\$(\".cart-link\").click();
                  parent.\$.magnificPopup.close();
                }); 
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
  });
</script> -->
<script>
  \$(document).on('submit', 'form[data-oc-toggle=\\'ajax\\']', function (e) {
    e.preventDefault();

    var element = this;

    var form = e.target;

    var action = \$(form).attr('action');

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    var formaction = \$(button).attr('formaction');

    if (formaction !== undefined) {
        action = formaction;
    }

    var method = \$(form).attr('method');

    if (method === undefined) {
        method = 'post';
    }

    var enctype = \$(element).attr('enctype');

    if (enctype === undefined) {
        enctype = 'application/x-www-form-urlencoded';
    }

    // https://github.com/opencart/opencart/issues/9690
    if (typeof CKEDITOR != 'undefined') {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    }

    console.log(e);
    console.log('element ' + element);
    console.log('action ' + action);
    console.log('button ' + button);
    console.log('formaction ' + formaction);
    console.log('method ' + method);
    console.log('enctype ' + enctype);

    \$.ajax({
        url: action,
        type: method,
        data: \$(form).serialize(),
        dataType: 'json',
        cache: false,
        contentType: enctype,
        processData: false,
        beforeSend: function () {
            \$(button).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(button).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$(form).find('.is-invalid').removeClass('is-invalid');
            \$(form).find('.invalid-feedback').removeClass('d-block');

            console.log(json);

            // if (json['redirect']) {
            //     location = json['redirect'].replaceAll('&amp;', '&');
            // }

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                if(action.indexOf(\"/cart|add\") !== -1) {                    
                    // Refresh
                    parent.\$('#header-cart').load('index.php?route=common/cart|info', function() {
                    parent.\$(\".cart-link\").click();
                    parent.\$.magnificPopup.close();
                  }); 
                } 
                else if(action.indexOf(\"/cart|remove\") !== -1) {
                    // shopping-cart
                    if(!(\$(\"div\").find(\"#shopping-cart\"))){
                        \$(\".cart-link\").click();
                        location.reload(\"/cart|remove\") !== -1;
                    }else{
                        location.reload(\"/cart|remove\") !== -1;
                    }
                }
                else {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');   
                    
                    // Refresh
                    var url = \$(form).attr('data-oc-load');
                    var target = \$(form).attr('data-oc-target');

                    if (url !== undefined && target !== undefined) {
                        \$(target).load(url);
                    }
                }
            }

            // Replace any form values that correspond to form names.
            for (key in json) {
                \$(form).find('[name=\\'' + key + '\\']').val(json[key]);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
</script>
<script type=\"text/javascript\">

  \$('button[id^=\\'button-upload\\']').on('click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            \$(node).button('loading');
          },
          complete: function() {
            \$(node).button('reset');
          },
          success: function(json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
</script>


<script type=\"text/javascript\"><!--
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

      \$('#review').fadeOut('slow');

      \$('#review').load(this.href);

      \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 557
        echo ($context["product_id"] ?? null);
        echo "');


  \$('#top').remove();
  \$('.top_button').remove();
//-->  
</script>

<script>
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

<style>
  nav, header, .wrap-breadcrumb {
      display: none;
  }
  .content_product_block { display:none; }
  .content_header_top, .page-title  { display:none; }

  footer {
      display: none;
  }
  .content-top-breadcum {
      display: none;
  }
  #powered {
      display: none;
  }
  #container {
      width: 850px;
  }
  .top_button { display:none !important; }
</style>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/quick_view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1271 => 557,  1032 => 321,  999 => 292,  992 => 287,  986 => 285,  984 => 284,  981 => 283,  976 => 281,  972 => 280,  965 => 275,  959 => 272,  951 => 271,  942 => 265,  938 => 264,  927 => 256,  920 => 252,  912 => 251,  908 => 250,  904 => 249,  899 => 247,  896 => 246,  890 => 242,  879 => 240,  875 => 239,  871 => 238,  864 => 235,  861 => 234,  858 => 233,  852 => 232,  838 => 225,  831 => 223,  824 => 222,  821 => 221,  807 => 214,  800 => 212,  793 => 211,  790 => 210,  776 => 203,  769 => 201,  762 => 200,  759 => 199,  751 => 196,  743 => 195,  739 => 194,  732 => 193,  729 => 192,  717 => 189,  711 => 188,  704 => 187,  701 => 186,  689 => 183,  683 => 182,  676 => 181,  673 => 180,  668 => 177,  660 => 174,  653 => 173,  651 => 172,  646 => 171,  630 => 170,  624 => 169,  620 => 167,  614 => 166,  610 => 165,  603 => 164,  600 => 163,  594 => 159,  586 => 157,  579 => 156,  577 => 155,  573 => 154,  555 => 153,  549 => 152,  545 => 150,  539 => 149,  535 => 148,  528 => 147,  525 => 146,  519 => 143,  516 => 142,  509 => 140,  502 => 139,  500 => 138,  493 => 137,  489 => 136,  485 => 135,  479 => 134,  473 => 133,  466 => 132,  463 => 131,  459 => 130,  454 => 129,  452 => 128,  448 => 127,  440 => 124,  437 => 123,  430 => 122,  426 => 121,  420 => 120,  417 => 119,  408 => 118,  404 => 117,  400 => 115,  395 => 113,  391 => 112,  381 => 111,  375 => 110,  371 => 109,  368 => 108,  361 => 107,  357 => 106,  354 => 105,  347 => 104,  343 => 103,  340 => 102,  334 => 100,  329 => 98,  326 => 97,  320 => 95,  315 => 93,  310 => 91,  307 => 90,  301 => 88,  297 => 87,  294 => 86,  287 => 85,  282 => 83,  276 => 81,  269 => 80,  264 => 78,  260 => 77,  254 => 73,  250 => 72,  244 => 70,  242 => 69,  238 => 68,  235 => 67,  222 => 66,  218 => 65,  213 => 63,  206 => 59,  200 => 58,  195 => 55,  186 => 53,  181 => 52,  170 => 50,  165 => 49,  156 => 47,  151 => 46,  138 => 44,  134 => 43,  113 => 25,  109 => 24,  104 => 23,  98 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/quick_view.twig", "C:\\xampp\\htdocs\\OPC052L03\\catalog\\view\\template\\product\\quick_view.twig");
    }
}
