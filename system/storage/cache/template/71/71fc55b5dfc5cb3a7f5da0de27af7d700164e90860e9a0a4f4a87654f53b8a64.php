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

/* extension/ishifeatureproductsblock/catalog/view/template/module/ishifeatureproductsblock.twig */
class __TwigTemplate_3a370da6031c84de775d750e60518eee53d214ee3c80cd74590dfb02987296b6 extends Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishifeatureproductsection container\">
    <div class=\"row\">
  \t\t";
        // line 3
        if (($context["featured"] ?? null)) {
            // line 4
            echo "  \t\t<div class=\"block_content block_content_main col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12\">
  \t\t\t<h3 class=\"home-title\">";
            // line 5
            echo ($context["heading_feature"] ?? null);
            echo "</h3>
  \t\t\t<div class=\"card_block\" data-source-url=\"";
            // line 6
            echo ($context["bgimage"] ?? null);
            echo "\">
  \t\t\t\t
\t\t\t    <div id=\"featured-products-block";
            // line 8
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
\t\t     \t    <div class=\"owl-carousel\"> 
\t\t\t          ";
            // line 10
            $context["counter"] = 1;
            // line 11
            echo "\t\t\t          ";
            $context["lastproduct"] = twig_length_filter($this->env, ($context["featured"] ?? null));
            echo " 
\t\t\t          ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "\t\t\t            ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 14
                    echo "\t\t\t              ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 15
                        echo "\t\t\t                <div class=\"multilevel-item\">
\t\t\t                  ";
                    }
                    // line 17
                    echo "\t\t\t                  ";
                }
                // line 18
                echo "\t\t\t                <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["cart"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
\t\t\t\t                <div class=\"item product-container\" data-countdowntime=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 19);
                echo "\"> 
\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t                    \t<div class=\"row\">
\t\t\t\t\t\t                    <div class=\"image col-lg-6 col-md-5 col-sm-4 col-xs-4 col-12\">
\t\t\t\t\t\t                        <a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">
\t\t\t\t\t\t                          <img src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t                            ";
                // line 25
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 25) != "")) {
                    // line 26
                    echo "\t\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 26);
                    echo "\"/>
\t\t\t\t\t\t                            ";
                }
                // line 28
                echo "\t\t\t\t\t\t                        </a>
\t\t\t\t\t\t                        ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 29)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 29);
                    echo "</span>";
                }
                // line 30
                echo "\t\t\t\t\t\t                        \t\t                      \t  
\t\t\t\t\t\t                    </div>  
\t\t\t\t\t\t                    <div class=\"caption col-lg-6 col-md-7 col-sm-8 col-xs-8 col-12\">
\t\t\t\t\t\t                    \t";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 36
                        echo "\t\t\t\t\t\t                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 36) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                        } else {
                            // line 40
                            echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                        }
                        // line 45
                        echo "\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t                          ";
                } else {
                    // line 48
                    echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 50
                        echo "\t\t\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                              </span>
\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t                        ";
                }
                // line 56
                echo "\t\t\t\t\t\t                        <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 56);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
                echo "</a></h4>
\t\t\t\t\t\t                        <p class=\"description\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 57);
                echo "</p>
\t\t\t\t\t\t                        ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "\t\t\t\t\t\t                        <p class=\"price\">
\t\t\t\t\t\t                          ";
                    // line 60
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 60)) {
                        // line 61
                        echo "\t\t\t\t\t\t                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61);
                        echo "
\t\t\t\t\t\t                          ";
                    } else {
                        // line 63
                        echo "\t\t\t\t\t\t                          <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 63);
                        echo "</span> 
\t\t\t\t\t\t                          ";
                    }
                    // line 65
                    echo "\t\t\t\t\t\t                          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 65)) {
                        // line 66
                        echo "\t\t\t\t\t\t                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 66);
                        echo "</span>
\t\t\t\t\t\t                          ";
                    }
                    // line 68
                    echo "\t\t\t\t\t\t                        </p>
\t\t\t\t\t\t                        ";
                }
                // line 70
                echo "\t\t\t\t\t\t                         
\t\t\t\t\t\t                        

\t\t\t\t\t\t                        <div class=\"button-group desktop\">  
\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
                // line 75
                echo ($context["quick_view"] ?? null);
                echo "\"> 
\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 76);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                <symbol id=\"eye-open\" viewBox=\"0 0 1050 1050\"><title>eye-open</title>
\t\t\t\t\t\t\t\t                                <path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
\t\t\t\t\t\t\t\t                                c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
\t\t\t\t\t\t\t\t                                c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
\t\t\t\t\t\t\t\t                                c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
\t\t\t\t\t\t\t\t                                C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
\t\t\t\t\t\t\t\t                                c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
\t\t\t\t\t\t\t\t                                c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
\t\t\t\t\t\t\t\t                                c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
\t\t\t\t\t\t\t\t                                c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
\t\t\t\t\t\t\t\t                                c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
\t\t\t\t\t\t\t\t                                c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
\t\t\t\t\t\t\t\t                                s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
\t\t\t\t\t\t\t\t                                c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
\t\t\t\t\t\t\t\t                                z\"></path>
\t\t\t\t\t\t\t\t                                </symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t                                  <!-- <span class=\"lblcart\">Quick View</span> -->
\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 101
                echo ($context["add_to_wishlist"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t                            <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1200 1200\"><title>heart-shape-outline</title>
\t\t\t\t\t\t\t\t\t                            <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
\t\t\t\t\t\t\t\t\t                            c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
\t\t\t\t\t\t\t\t\t                            c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
\t\t\t\t\t\t\t\t\t                            l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
\t\t\t\t\t\t\t\t\t                            C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
\t\t\t\t\t\t\t\t\t                            l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
\t\t\t\t\t\t\t\t\t                            c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
\t\t\t\t\t\t\t\t\t                            c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
\t\t\t\t\t\t\t\t\t                            c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
\t\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t\t                            </svg>
\t\t    \t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"28%\" y=\"30%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 119
                echo ($context["add_to_compare"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                <symbol id=\"report\" viewBox=\"0 0 1450 1450\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#report\" x=\"28%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
                // line 127
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 127)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t            \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                              <symbol id=\"shopping-cart-empty-side-view\" viewBox=\"0 0 1100 1100\"><title>shopping-cart-empty-side-view</title>
\t\t\t\t\t\t\t\t                                <path d=\"M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
\t\t\t\t\t\t\t\t                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
\t\t\t\t\t\t\t\t                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
\t\t\t\t\t\t\t\t                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
\t\t\t\t\t\t\t\t                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
\t\t\t\t\t\t\t\t                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z\"></path>
\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-empty-side-view\" x=\"26%\" y=\"25%\"></use></svg>
\t\t\t\t\t\t\t                                <!-- <span class=\"lblcart\">";
                // line 143
                echo ($context["button_cart"] ?? null);
                echo "</span> -->
\t\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        </div>\t\t\t\t                           \t
\t\t\t\t\t\t                    </div> 
\t\t\t\t\t                    </div>  
\t\t\t\t\t                </div> 
\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 150);
                echo "\"/>
    \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 151);
                echo "\"/>                            
\t\t\t\t                </div>
\t\t\t\t            </form>      
\t\t\t                  ";
                // line 154
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 155
                    echo "\t\t\t                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 156
                        echo "\t\t\t                </div>
\t\t\t              ";
                    }
                    // line 158
                    echo "\t\t\t            ";
                }
                // line 159
                echo "\t\t\t          ";
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 160
                echo "\t\t\t          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t        </div>
\t\t\t    </div>
\t\t    </div>
\t    </div>
\t    ";
        }
        // line 166
        echo "\t    ";
        if (($context["bestseller"] ?? null)) {
            // line 167
            echo "\t    <div class=\"block_content block_content_main col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12\">
\t    \t<h3 class=\"home-title\">";
            // line 168
            echo ($context["heading_seller"] ?? null);
            echo "</h3>
\t\t    <div class=\"card_block\" data-source-url=\"";
            // line 169
            echo ($context["bgimage"] ?? null);
            echo "\" style=\"background-image: url(";
            echo ($context["bgimage"] ?? null);
            echo ")\">
\t\t    \t
\t\t\t    <div id=\"bestseller-products-block";
            // line 171
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
\t\t\t      <div class=\"block_content\">  
\t\t\t\t        <div class=\"owl-carousel\"> 
\t\t\t\t          ";
            // line 174
            $context["counter"] = 1;
            // line 175
            echo "\t\t\t\t          ";
            $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
            echo " 
\t\t\t\t          ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 177
                echo "\t\t\t\t            ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 178
                    echo "\t\t\t\t              ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 179
                        echo "\t\t\t\t                <div class=\"multilevel-item\">
\t\t\t\t                  ";
                    }
                    // line 181
                    echo "\t\t\t\t                  ";
                }
                // line 182
                echo "\t\t\t\t                <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["cart"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
\t\t\t\t\t                <div class=\"item product-container\" data-countdowntime=\"";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 183);
                echo "\"> 
\t\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t\t                    \t<div class=\"row\">
\t\t\t\t\t\t                    <div class=\"image col-lg-6 col-md-5 col-sm-4 col-xs-4 col-12\">
\t\t\t\t\t\t                        <a href=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 187);
                echo "\">
\t\t\t\t\t\t                          <img src=\"";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 188);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 188);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 188);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t                            ";
                // line 189
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 189) != "")) {
                    // line 190
                    echo "\t\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 190);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 190);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 190);
                    echo "\"/>
\t\t\t\t\t\t                            ";
                }
                // line 192
                echo "\t\t\t\t\t\t                        </a>
\t\t\t\t\t\t                        ";
                // line 193
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 193)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 193);
                    echo "</span>";
                }
                // line 194
                echo "\t\t\t\t\t\t                       
\t\t\t\t\t\t                        
\t\t\t\t\t\t                    </div>  
\t\t\t\t\t\t                    <div class=\"caption col-lg-6 col-md-7 col-sm-8 col-xs-8 col-12\">
\t\t\t\t\t\t                    \t";
                // line 198
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 201
                        echo "\t\t\t\t\t\t                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 201) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                        } else {
                            // line 205
                            echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                \t<i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                        }
                        // line 210
                        echo "\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t                          ";
                } else {
                    // line 213
                    echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                    // line 214
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 215
                        echo "\t\t\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                              </span>
\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t                        ";
                }
                // line 221
                echo "\t\t\t\t\t\t                        <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 221);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 221);
                echo "</a></h4>
\t\t\t\t\t\t                        <p class=\"description\">";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 222);
                echo "</p>
\t\t\t\t\t\t                        ";
                // line 223
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 223)) {
                    // line 224
                    echo "\t\t\t\t\t\t                        <p class=\"price\">
\t\t\t\t\t\t                          ";
                    // line 225
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 225)) {
                        // line 226
                        echo "\t\t\t\t\t\t                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 226);
                        echo "
\t\t\t\t\t\t                          ";
                    } else {
                        // line 228
                        echo "\t\t\t\t\t\t                          <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 228);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 228);
                        echo "</span> 
\t\t\t\t\t\t                          ";
                    }
                    // line 230
                    echo "\t\t\t\t\t\t                          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 230)) {
                        // line 231
                        echo "\t\t\t\t\t\t                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 231);
                        echo "</span>
\t\t\t\t\t\t                          ";
                    }
                    // line 233
                    echo "\t\t\t\t\t\t                        </p>
\t\t\t\t\t\t                        ";
                }
                // line 234
                echo "  
\t\t\t\t\t\t                        
\t\t\t\t\t\t                        <div class=\"button-group desktop\">  
\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
                // line 238
                echo ($context["quick_view"] ?? null);
                echo "\"> 
\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 239);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                <symbol id=\"eye-open\" viewBox=\"0 0 1050 1050\"><title>eye-open</title>
\t\t\t\t\t\t\t\t                                <path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
\t\t\t\t\t\t\t\t                                c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
\t\t\t\t\t\t\t\t                                c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
\t\t\t\t\t\t\t\t                                c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
\t\t\t\t\t\t\t\t                                C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
\t\t\t\t\t\t\t\t                                c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
\t\t\t\t\t\t\t\t                                c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
\t\t\t\t\t\t\t\t                                c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
\t\t\t\t\t\t\t\t                                c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
\t\t\t\t\t\t\t\t                                c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
\t\t\t\t\t\t\t\t                                c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
\t\t\t\t\t\t\t\t                                s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
\t\t\t\t\t\t\t\t                                c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
\t\t\t\t\t\t\t\t                                z\"></path>
\t\t\t\t\t\t\t\t                                </symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t                                  <!-- <span class=\"lblcart\">Quick View</span> -->
\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 264
                echo ($context["add_to_wishlist"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t                            <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1200 1200\"><title>heart-shape-outline</title>
\t\t\t\t\t\t\t\t\t                            <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
\t\t\t\t\t\t\t\t\t                            c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
\t\t\t\t\t\t\t\t\t                            c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
\t\t\t\t\t\t\t\t\t                            l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
\t\t\t\t\t\t\t\t\t                            C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
\t\t\t\t\t\t\t\t\t                            l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
\t\t\t\t\t\t\t\t\t                            c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
\t\t\t\t\t\t\t\t\t                            c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
\t\t\t\t\t\t\t\t\t                            c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
\t\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t\t                            </svg>
\t\t    \t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"28%\" y=\"30%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 282
                echo ($context["add_to_compare"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                <symbol id=\"report\" viewBox=\"0 0 1450 1450\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#report\" x=\"28%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
                // line 290
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 290)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t            \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                              <symbol id=\"shopping-cart-empty-side-view\" viewBox=\"0 0 1100 1100\"><title>shopping-cart-empty-side-view</title>
\t\t\t\t\t\t\t\t                                <path d=\"M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
\t\t\t\t\t\t\t\t                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
\t\t\t\t\t\t\t\t                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
\t\t\t\t\t\t\t\t                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
\t\t\t\t\t\t\t\t                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
\t\t\t\t\t\t\t\t                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z\"></path>
\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-empty-side-view\" x=\"26%\" y=\"25%\"></use></svg>
\t\t\t\t\t\t\t                                <!-- <span class=\"lblcart\">";
                // line 306
                echo ($context["button_cart"] ?? null);
                echo "</span> -->
\t\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                    </div>  
\t\t\t\t\t\t                    </div>
\t\t\t\t\t                 </div>   
\t\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 313
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 313);
                echo "\"/>
\t    \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 314
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 314);
                echo "\"/>                         
\t\t\t\t\t                </div>
\t\t\t\t            \t</form>
\t\t\t\t                  ";
                // line 317
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 318
                    echo "\t\t\t\t                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 319
                        echo "\t\t\t\t                </div>
\t\t\t\t              ";
                    }
                    // line 321
                    echo "\t\t\t\t            ";
                }
                // line 322
                echo "\t\t\t\t          ";
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 323
                echo "\t\t\t\t          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            echo "\t\t\t\t        </div>   
\t\t\t      </div>
\t\t\t    </div>
    \t\t</div>
     \t</div>
\t    ";
        }
        // line 330
        echo "\t    ";
        if (($context["new"] ?? null)) {
            // line 331
            echo "\t    <div class=\"block_content block_content_main col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12\">
\t\t    <div class=\"card_block\" data-source-url=\"";
            // line 332
            echo ($context["bgimage"] ?? null);
            echo "\" style=\"background-image: url(";
            echo ($context["bgimage"] ?? null);
            echo ")\">
\t\t    \t<h3 class=\"home-title\">";
            // line 333
            echo ($context["heading_sale"] ?? null);
            echo "</h3>
\t\t\t    <div id=\"new-products-block";
            // line 334
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
\t\t    \t
\t\t\t      <div class=\"block_content\"> 
\t\t\t\t        <div class=\"owl-carousel\"> 
\t\t\t\t          ";
            // line 338
            $context["counter"] = 1;
            // line 339
            echo "\t\t\t\t          ";
            $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
            echo " 
\t\t\t\t          ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 341
                echo "\t\t\t\t            ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 342
                    echo "\t\t\t\t              ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 343
                        echo "\t\t\t\t                <div class=\"multilevel-item\">
\t\t\t\t                  ";
                    }
                    // line 345
                    echo "\t\t\t\t                  ";
                }
                // line 346
                echo "\t\t\t\t                    <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["cart"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">\t
\t\t\t\t\t\t               \t<div class=\"item product-container\" data-countdowntime=\"";
                // line 347
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 347);
                echo "\"> 
\t\t\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t\t\t                    \t<div class=\"row\">
\t\t\t\t\t\t                    \t\t<div class=\"image col-lg-6 col-md-5 col-sm-4 col-xs-4 col-12\">
\t\t\t\t\t\t                    \t\t\t<a href=\"";
                // line 351
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 351);
                echo "\">
\t\t\t\t\t\t\t\t                          <img src=\"";
                // line 352
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 352);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 352);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 352);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t                            ";
                // line 353
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 353) != "")) {
                    // line 354
                    echo "\t\t\t\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 354);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 354);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 354);
                    echo "\"/>
\t\t\t\t\t\t\t\t                            ";
                }
                // line 356
                echo "\t\t\t\t\t\t\t\t                        </a>
\t\t\t\t\t\t\t\t                        ";
                // line 357
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 357)) {
                    echo " <span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 357);
                    echo "</span> ";
                }
                // line 358
                echo "\t\t\t\t\t\t                    \t\t</div>
\t\t\t\t\t\t                    \t\t<div class=\"caption col-lg-6 col-md-7 col-sm-8 col-xs-8 col-12\">
\t\t\t\t\t\t                    \t\t\t";
                // line 360
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 360)) {
                    // line 361
                    echo "\t\t\t\t\t\t\t\t\t                        <div class=\"rating\">
\t\t\t\t\t\t\t\t\t                            ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 363
                        echo "\t\t\t\t\t\t\t\t\t                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 363) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t\t\t\t                              ";
                        } else {
                            // line 367
                            echo " 
\t\t\t\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t                                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t\t\t\t                              ";
                        }
                        // line 372
                        echo "\t\t\t\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 373
                    echo "\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t                          ";
                } else {
                    // line 375
                    echo "\t\t\t\t\t\t\t\t\t                        <div class=\"rating\">
\t\t\t\t\t\t\t\t\t                            ";
                    // line 376
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 377
                        echo "\t\t\t\t\t\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t                              </span>
\t\t\t\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 381
                    echo "\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t                    ";
                }
                // line 383
                echo "\t\t\t\t\t\t                    \t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 383);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 383);
                echo "</a></h4>
\t\t\t\t\t\t\t\t                        <p class=\"description\">";
                // line 384
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 384);
                echo "</p>
\t\t\t\t\t\t\t\t                        ";
                // line 385
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 385)) {
                    // line 386
                    echo "\t\t\t\t\t\t\t\t                        <p class=\"price\">
\t\t\t\t\t\t\t\t                          ";
                    // line 387
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 387)) {
                        // line 388
                        echo "\t\t\t\t\t\t\t\t                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 388);
                        echo "
\t\t\t\t\t\t\t\t                          ";
                    } else {
                        // line 390
                        echo "\t\t\t\t\t\t\t\t                          <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 390);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 390);
                        echo "</span> 
\t\t\t\t\t\t\t\t                          ";
                    }
                    // line 392
                    echo "\t\t\t\t\t\t\t\t                          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 392)) {
                        // line 393
                        echo "\t\t\t\t\t\t\t\t                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 393);
                        echo "</span>
\t\t\t\t\t\t\t\t                          ";
                    }
                    // line 395
                    echo "\t\t\t\t\t\t\t\t                        </p>
\t\t\t\t\t\t\t\t                        ";
                }
                // line 397
                echo "\t\t\t\t\t\t\t\t                        
\t\t\t\t\t\t\t\t\t                     <div class=\"button-group\">  
\t\t\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
                // line 400
                echo ($context["quick_view"] ?? null);
                echo "\"> 
\t\t\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
                // line 401
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 401);
                echo "\">
\t\t\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                        <symbol id=\"eye-open\" viewBox=\"0 0 1100 1100\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
\t\t\t\t\t\t\t\t                                    </svg>
\t\t\t\t\t\t\t\t                                    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"26%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t\t\t                                  <span class=\"labelcart\">";
                // line 406
                echo ($context["quick_view"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 411
                echo ($context["add_to_wishlist"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t      \t\t\t\t\t    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t                            <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1200 1200\"><title>heart-shape-outline</title>
\t\t\t\t\t\t\t\t\t\t                            <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
\t\t\t\t\t\t\t\t\t\t                            c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
\t\t\t\t\t\t\t\t\t\t                            c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
\t\t\t\t\t\t\t\t\t\t                            l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
\t\t\t\t\t\t\t\t\t\t                            C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
\t\t\t\t\t\t\t\t\t\t                            l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
\t\t\t\t\t\t\t\t\t\t                            c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
\t\t\t\t\t\t\t\t\t\t                            c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
\t\t\t\t\t\t\t\t\t\t                            c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
\t\t\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t\t\t                            </svg>
\t\t\t    \t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"28%\" y=\"30%\"></use></svg>
\t\t\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 429
                echo ($context["add_to_compare"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t                                <symbol id=\"report\" viewBox=\"0 0 1450 1450\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t\t                              </svg>
\t\t\t\t\t\t\t\t\t                              <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#report\" x=\"28%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
                // line 437
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 437)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t            \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t                              <symbol id=\"shopping-cart-empty-side-view\" viewBox=\"0 0 1100 1100\"><title>shopping-cart-empty-side-view</title>
\t\t\t\t\t\t\t\t\t\t                                <path d=\"M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t\t\t                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
\t\t\t\t\t\t\t\t\t\t                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z\"></path>
\t\t\t\t\t\t\t\t\t\t                                <path d=\"M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t\t\t                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
\t\t\t\t\t\t\t\t\t\t                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z\"></path>
\t\t\t\t\t\t\t\t\t\t                                <path d=\"M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
\t\t\t\t\t\t\t\t\t\t                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
\t\t\t\t\t\t\t\t\t\t                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
\t\t\t\t\t\t\t\t\t\t                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z\"></path>
\t\t\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-empty-side-view\" x=\"26%\" y=\"25%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t               <span class=\"lblcart d-none\">";
                // line 453
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        \t\t</div>
\t\t\t\t\t\t                    \t\t</div>
\t\t\t\t\t\t                    \t</div>
\t\t\t\t\t\t                      
\t\t\t\t\t\t                    </div>    
\t\t\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 461
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 461);
                echo "\"/>
\t\t    \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 462
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 462);
                echo "\"/>                     
\t\t\t\t\t\t                </div>
\t\t\t\t\t                </form> 
\t\t\t\t\t                  ";
                // line 465
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 466
                    echo "\t\t\t\t\t                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 467
                        echo "\t\t\t\t\t            </div>
\t\t\t\t\t            
\t\t\t\t              ";
                    }
                    // line 470
                    echo "\t\t\t\t            ";
                }
                // line 471
                echo "\t\t\t\t          ";
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 472
                echo "\t\t\t\t          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 473
            echo "\t\t\t\t        </div>     
\t\t\t      </div>
\t\t       </div>
    \t\t</div>
\t\t</div>
\t    ";
        }
        // line 479
        echo "\t    ";
        if (($context["special"] ?? null)) {
            // line 480
            echo "\t    <div class=\"block_content block_content_main col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12\">
\t    \t<h3 class=\"home-title\">";
            // line 481
            echo ($context["heading_offer"] ?? null);
            echo "</h3>
\t        <div class=\"card_block\" data-source-url=\"";
            // line 482
            echo ($context["bgimage"] ?? null);
            echo "\" style=\"background-image: url(";
            echo ($context["bgimage"] ?? null);
            echo ")\">\t
\t        \t
\t\t\t    <div id=\"special-products-block";
            // line 484
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
\t\t      <div class=\"block_content\">
\t\t\t      <div class=\"row\">        
\t\t\t        <div class=\"owl-carousel\"> 
\t\t\t          ";
            // line 488
            $context["counter"] = 1;
            // line 489
            echo "\t\t\t          ";
            $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
            echo " 
\t\t\t          ";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 491
                echo "\t\t\t            ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 492
                    echo "\t\t\t              ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 493
                        echo "\t\t\t              \t
\t\t\t            <div class=\"multilevel-item\">
\t\t\t                  ";
                    }
                    // line 496
                    echo "\t\t\t                  ";
                }
                // line 497
                echo "\t\t\t                <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["cart"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">  
\t\t\t\t                <div class=\"item product-container\" data-countdowntime=\"";
                // line 498
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 498);
                echo "\"> 
\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t                    \t\t<div class=\"row\">
\t\t\t\t                    \t\t\t<div class=\"image col-lg-6 col-md-5 col-sm-4 col-xs-4 col-12\">
\t\t\t\t                    \t\t\t\t<a href=\"";
                // line 502
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 502);
                echo "\">
\t\t\t\t\t\t\t                          <img src=\"";
                // line 503
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 503);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 503);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 503);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t                            ";
                // line 504
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 504) != "")) {
                    // line 505
                    echo "\t\t\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 505);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 505);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 505);
                    echo "\"/>
\t\t\t\t\t\t\t                            ";
                }
                // line 507
                echo "\t\t\t\t\t\t\t                        </a>
\t\t\t\t\t\t\t                        ";
                // line 508
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 508)) {
                    echo " <span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 508);
                    echo "</span> ";
                }
                // line 509
                echo "\t\t\t\t                    \t\t\t</div>
\t\t\t\t                    \t\t\t<div class=\"caption col-lg-6 col-md-7 col-sm-8 col-xs-8 col-12\">
\t\t\t\t                    \t\t\t\t";
                // line 511
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 511)) {
                    // line 512
                    echo "\t\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t\t                            ";
                    // line 513
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 514
                        echo "\t\t\t\t\t\t\t                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 514) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t\t                              ";
                        } else {
                            // line 518
                            echo " 
\t\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t                                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t\t                              ";
                        }
                        // line 523
                        echo "\t\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 524
                    echo "\t\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t\t                          ";
                } else {
                    // line 526
                    echo "\t\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t\t                            ";
                    // line 527
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 528
                        echo "\t\t\t\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t\t                              </span>
\t\t\t\t\t\t\t                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 532
                    echo "\t\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t\t                        ";
                }
                // line 534
                echo "\t\t\t\t                    \t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 534);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 534);
                echo "</a></h4>
\t\t\t\t\t\t\t\t                    <p class=\"description\">";
                // line 535
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 535);
                echo "</p>
\t\t\t\t\t\t\t\t                        ";
                // line 536
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 536)) {
                    // line 537
                    echo "\t\t\t\t\t\t\t\t                        <p class=\"price\">
\t\t\t\t\t\t\t\t                          ";
                    // line 538
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 538)) {
                        // line 539
                        echo "\t\t\t\t\t\t\t\t                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 539);
                        echo "
\t\t\t\t\t\t\t\t                          ";
                    } else {
                        // line 541
                        echo "\t\t\t\t\t\t\t\t                          <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 541);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 541);
                        echo "</span> 
\t\t\t\t\t\t\t\t                          ";
                    }
                    // line 543
                    echo "\t\t\t\t\t\t\t\t                          ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 543)) {
                        // line 544
                        echo "\t\t\t\t\t\t\t\t                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 544);
                        echo "</span>
\t\t\t\t\t\t\t\t                          ";
                    }
                    // line 546
                    echo "\t\t\t\t\t\t\t\t                        </p>
\t\t\t\t\t\t\t\t                        ";
                }
                // line 548
                echo "\t\t\t\t\t\t\t\t                    
\t\t\t\t\t\t\t                        <div class=\"button-group\">  
\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
                // line 551
                echo ($context["quick_view"] ?? null);
                echo "\"> 
\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
                // line 552
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 552);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t                                        <symbol id=\"eye-open\" viewBox=\"0 0 1100 1100\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
\t\t\t\t\t\t                                    </svg>
\t\t\t\t\t\t\t                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"26%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t                                  <span class=\"labelcart\">";
                // line 557
                echo ($context["quick_view"] ?? null);
                echo "</span>
\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 562
                echo ($context["add_to_wishlist"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t                            <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1200 1200\"><title>heart-shape-outline</title>
\t\t\t\t\t\t\t\t\t                            <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
\t\t\t\t\t\t\t\t\t                            c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
\t\t\t\t\t\t\t\t\t                            c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
\t\t\t\t\t\t\t\t\t                            l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
\t\t\t\t\t\t\t\t\t                            C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
\t\t\t\t\t\t\t\t\t                            l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
\t\t\t\t\t\t\t\t\t                            c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
\t\t\t\t\t\t\t\t\t                            c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
\t\t\t\t\t\t\t\t\t                            c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
\t\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t\t                            </svg>
\t\t    \t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"28%\" y=\"30%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 580
                echo ($context["add_to_compare"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                <symbol id=\"report\" viewBox=\"0 0 1450 1450\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#report\" x=\"28%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
                // line 588
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 588)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t            \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                              <symbol id=\"shopping-cart-empty-side-view\" viewBox=\"0 0 1100 1100\"><title>shopping-cart-empty-side-view</title>
\t\t\t\t\t\t\t\t                                <path d=\"M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
\t\t\t\t\t\t\t\t                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
\t\t\t\t\t\t\t\t                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
\t\t\t\t\t\t\t\t                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
\t\t\t\t\t\t\t\t                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
\t\t\t\t\t\t\t\t                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z\"></path>
\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-empty-side-view\" x=\"26%\" y=\"25%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t               <span class=\"lblcart d-none\">";
                // line 604
                echo ($context["button_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        </div>
\t\t\t\t                    \t\t\t</div>
\t\t\t\t                    \t\t</div>
\t\t\t\t\t                     
\t\t\t\t                    </div> 
\t\t\t\t                    \t<input type=\"hidden\" name=\"product_id\" value=\"";
                // line 612
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 612);
                echo "\"/>
    \t\t\t\t\t\t\t  \t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 613
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 613);
                echo "\"/>                        
\t\t\t\t                </div>
\t\t\t\t            </form>
\t\t\t\t                  ";
                // line 616
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 617
                    echo "\t\t\t\t                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 618
                        echo "\t\t\t\t       </div>
\t\t\t\t                
\t\t\t              ";
                    }
                    // line 621
                    echo "\t\t\t            ";
                }
                // line 622
                echo "\t\t\t          ";
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 623
                echo "\t\t\t          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 624
            echo "\t\t\t        </div>        
\t\t\t      </div>  
\t\t      </div>
\t\t    </div>
\t\t\t</div>
\t\t</div>
\t    ";
        }
        // line 631
        echo "\t\t<div class=\"row\">
\t\t";
        // line 632
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 633
            echo "\t\t<div class=\"block_content block_content_main col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12\">
\t\t\t<h3 class=\"home-title\">";
            // line 634
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 634);
            echo "</h3>
\t\t\t<div class=\"card_block\">\t
\t\t\t\t
\t\t\t\t<div class=\"tab-pane ";
            // line 637
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 637)) {
                echo "active";
            }
            echo "\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 637);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
\t\t            <div class=\"owl-carousel\">
\t\t\t          ";
            // line 639
            $context["counter"] = 1;
            // line 640
            echo "\t\t\t              ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_compile_0 = ($context["category"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 640)] ?? null) : null));
            // line 641
            echo "\t\t\t              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["category"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 641)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 642
                echo "\t\t\t                ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 643
                    echo "\t\t\t                  ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 644
                        echo "\t\t\t                    <div class=\"multilevel-item\">
\t\t\t                      ";
                    }
                    // line 646
                    echo "\t\t\t                      ";
                }
                // line 647
                echo "\t\t\t                    <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["cart"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">  
\t\t\t\t                    <div class=\"item product-container\" data-countdowntime=\"";
                // line 648
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 648);
                echo "\">
\t\t\t\t\t                    <div class=\"product-thumb\">
\t\t\t\t\t                    \t<div class=\"row\">
\t\t\t\t\t                        <div class=\"image col-lg-6 col-md-5 col-sm-4 col-xs-4 col-12\">
\t\t\t\t\t                          <a href=\"";
                // line 652
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 652);
                echo "\">
\t\t\t\t\t                            <img src=\"";
                // line 653
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 653);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 653);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 653);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t                            ";
                // line 654
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 654) != "")) {
                    // line 655
                    echo "\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 655);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 655);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 655);
                    echo "\"/>
\t\t\t\t\t                            ";
                }
                // line 657
                echo "\t\t\t\t\t                          </a >
\t\t\t\t\t                          ";
                // line 658
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 658)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 658);
                    echo "</span>";
                }
                // line 659
                echo "\t\t\t\t\t                        </div>                  
\t\t\t\t\t                        <div class=\"caption col-lg-6 col-md-7 col-sm-8 col-xs-8 col-12\"> 
\t\t\t\t\t                        \t";
                // line 661
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 661)) {
                    // line 662
                    echo "\t\t\t\t\t\t                            <div class=\"rating\">
\t\t\t\t\t\t                              ";
                    // line 663
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 664
                        echo "\t\t\t\t\t\t                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 664) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t                                  <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                    <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                                  </span> 
\t\t\t\t\t\t                                ";
                        } else {
                            // line 668
                            echo " 
\t\t\t\t\t\t                                  <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                    <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t                                  </span> 
\t\t\t\t\t\t                                ";
                        }
                        // line 673
                        echo "\t\t\t\t\t\t                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 674
                    echo "\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                            ";
                } else {
                    // line 676
                    echo "\t\t\t\t\t\t                            <div class=\"rating\">
\t\t\t\t\t\t                              ";
                    // line 677
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 678
                        echo "\t\t\t\t\t\t                              <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 682
                    echo "\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                        ";
                }
                // line 683
                echo " 
\t\t\t\t\t                          <h4><a href=\"";
                // line 684
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 684);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 684);
                echo "</a></h4>
\t\t\t\t\t                          <p class=\"description\">";
                // line 685
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 685);
                echo "</p>
\t\t\t\t\t                          
\t\t\t\t\t                          ";
                // line 687
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 687)) {
                    // line 688
                    echo "\t\t\t\t\t\t                        <p class=\"price\">
\t\t\t\t\t\t                            ";
                    // line 689
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 689)) {
                        // line 690
                        echo "\t\t\t\t\t\t                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 690);
                        echo "
\t\t\t\t\t\t                            ";
                    } else {
                        // line 692
                        echo "\t\t\t\t\t\t                            <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 692);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 692);
                        echo "</span> 
\t\t\t\t\t\t                            ";
                    }
                    // line 694
                    echo "\t\t\t\t\t\t                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 694)) {
                        // line 695
                        echo "\t\t\t\t\t\t                            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 695);
                        echo "</span>
\t\t\t\t\t\t                            ";
                    }
                    // line 697
                    echo "\t\t\t\t\t\t                        </p>
\t\t\t\t\t                          ";
                }
                // line 699
                echo "\t\t\t\t\t                          \t<div class=\"button-group\">  
\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
                // line 701
                echo ($context["quick_view"] ?? null);
                echo "\"> 
\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
                // line 702
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 702);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                <symbol id=\"eye-open\" viewBox=\"0 0 1050 1050\"><title>eye-open</title>
\t\t\t\t\t\t\t\t                                <path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
\t\t\t\t\t\t\t\t                                c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
\t\t\t\t\t\t\t\t                                c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
\t\t\t\t\t\t\t\t                                c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
\t\t\t\t\t\t\t\t                                C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
\t\t\t\t\t\t\t\t                                c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
\t\t\t\t\t\t\t\t                                c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
\t\t\t\t\t\t\t\t                                c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
\t\t\t\t\t\t\t\t                                c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
\t\t\t\t\t\t\t\t                                c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
\t\t\t\t\t\t\t\t                                c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
\t\t\t\t\t\t\t\t                                s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
\t\t\t\t\t\t\t\t                                c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
\t\t\t\t\t\t\t\t                                z\"></path>
\t\t\t\t\t\t\t\t                                </symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t                                  <!-- <span class=\"lblcart\">Quick View</span> -->
\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t\t\t                <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 727
                echo ($context["add_to_wishlist"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t                            <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1200 1200\"><title>heart-shape-outline</title>
\t\t\t\t\t\t\t\t\t                            <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
\t\t\t\t\t\t\t\t\t                            c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
\t\t\t\t\t\t\t\t\t                            c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
\t\t\t\t\t\t\t\t\t                            l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
\t\t\t\t\t\t\t\t\t                            C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
\t\t\t\t\t\t\t\t\t                            l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
\t\t\t\t\t\t\t\t\t                            c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
\t\t\t\t\t\t\t\t\t                            c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
\t\t\t\t\t\t\t\t\t                            c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
\t\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t\t                            </svg>
\t\t    \t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"28%\" y=\"30%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 745
                echo ($context["add_to_compare"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                                <symbol id=\"report\" viewBox=\"0 0 1450 1450\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#report\" x=\"28%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
                // line 753
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 753)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t            \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t                              <symbol id=\"shopping-cart-empty-side-view\" viewBox=\"0 0 1100 1100\"><title>shopping-cart-empty-side-view</title>
\t\t\t\t\t\t\t\t                                <path d=\"M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
\t\t\t\t\t\t\t\t                                c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
\t\t\t\t\t\t\t\t                                S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
\t\t\t\t\t\t\t\t                                c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z\"></path>
\t\t\t\t\t\t\t\t                                <path d=\"M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
\t\t\t\t\t\t\t\t                                L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
\t\t\t\t\t\t\t\t                                c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
\t\t\t\t\t\t\t\t                                C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z\"></path>
\t\t\t\t\t\t\t\t                              </symbol>
\t\t\t\t\t\t\t\t                            </svg>
\t\t\t\t\t\t\t\t                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-empty-side-view\" x=\"26%\" y=\"25%\"></use></svg>
\t\t\t\t\t\t\t                                <!-- <span class=\"lblcart\">";
                // line 769
                echo ($context["button_cart"] ?? null);
                echo "</span> -->
\t\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        </div> 
\t\t\t\t\t                        </div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    </div>
\t\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 776
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 776);
                echo "\"/>
\t\t\t\t\t\t\t\t\t  \t<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 777
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 777);
                echo "\"/>
\t\t\t\t\t                </div>
\t\t\t\t\t            </form>   
\t\t\t                      ";
                // line 780
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 781
                    echo "\t\t\t                      ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 782
                        echo "\t\t\t                    </div>
\t\t\t                  ";
                    }
                    // line 784
                    echo "\t\t\t                ";
                }
                echo "\t
\t\t\t              ";
                // line 785
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 786
                echo "\t\t\t              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
\t\t\t        </div> 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        echo "\t\t</div>
\t</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 795
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:false,
        nav:true,  
        dots:false, 
        rewind: true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:2
            },
            576:{
                items:";
        // line 807
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            768:{
            \tmargin:30,
                items:";
        // line 811
        echo ($context["laptop_column"] ?? null);
        echo "
            },
           
            992:{
                items:";
        // line 815
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
 
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishifeatureproductsblock/catalog/view/template/module/ishifeatureproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1815 => 815,  1808 => 811,  1801 => 807,  1786 => 795,  1781 => 792,  1757 => 786,  1755 => 785,  1750 => 784,  1746 => 782,  1743 => 781,  1741 => 780,  1735 => 777,  1731 => 776,  1721 => 769,  1696 => 753,  1683 => 745,  1660 => 727,  1632 => 702,  1628 => 701,  1624 => 699,  1620 => 697,  1612 => 695,  1609 => 694,  1601 => 692,  1595 => 690,  1593 => 689,  1590 => 688,  1588 => 687,  1583 => 685,  1577 => 684,  1574 => 683,  1570 => 682,  1561 => 678,  1557 => 677,  1554 => 676,  1550 => 674,  1544 => 673,  1537 => 668,  1528 => 664,  1524 => 663,  1521 => 662,  1519 => 661,  1515 => 659,  1509 => 658,  1506 => 657,  1496 => 655,  1494 => 654,  1486 => 653,  1482 => 652,  1475 => 648,  1470 => 647,  1467 => 646,  1463 => 644,  1460 => 643,  1457 => 642,  1452 => 641,  1449 => 640,  1447 => 639,  1436 => 637,  1430 => 634,  1427 => 633,  1410 => 632,  1407 => 631,  1398 => 624,  1392 => 623,  1389 => 622,  1386 => 621,  1381 => 618,  1378 => 617,  1376 => 616,  1370 => 613,  1366 => 612,  1355 => 604,  1330 => 588,  1317 => 580,  1294 => 562,  1286 => 557,  1278 => 552,  1274 => 551,  1269 => 548,  1265 => 546,  1257 => 544,  1254 => 543,  1246 => 541,  1240 => 539,  1238 => 538,  1235 => 537,  1233 => 536,  1229 => 535,  1222 => 534,  1218 => 532,  1209 => 528,  1205 => 527,  1202 => 526,  1198 => 524,  1192 => 523,  1185 => 518,  1176 => 514,  1172 => 513,  1169 => 512,  1167 => 511,  1163 => 509,  1157 => 508,  1154 => 507,  1144 => 505,  1142 => 504,  1134 => 503,  1130 => 502,  1123 => 498,  1118 => 497,  1115 => 496,  1110 => 493,  1107 => 492,  1104 => 491,  1100 => 490,  1095 => 489,  1093 => 488,  1086 => 484,  1079 => 482,  1075 => 481,  1072 => 480,  1069 => 479,  1061 => 473,  1055 => 472,  1052 => 471,  1049 => 470,  1044 => 467,  1041 => 466,  1039 => 465,  1033 => 462,  1029 => 461,  1018 => 453,  993 => 437,  980 => 429,  957 => 411,  949 => 406,  941 => 401,  937 => 400,  932 => 397,  928 => 395,  920 => 393,  917 => 392,  909 => 390,  903 => 388,  901 => 387,  898 => 386,  896 => 385,  892 => 384,  885 => 383,  881 => 381,  872 => 377,  868 => 376,  865 => 375,  861 => 373,  855 => 372,  848 => 367,  839 => 363,  835 => 362,  832 => 361,  830 => 360,  826 => 358,  820 => 357,  817 => 356,  807 => 354,  805 => 353,  797 => 352,  793 => 351,  786 => 347,  781 => 346,  778 => 345,  774 => 343,  771 => 342,  768 => 341,  764 => 340,  759 => 339,  757 => 338,  750 => 334,  746 => 333,  740 => 332,  737 => 331,  734 => 330,  726 => 324,  720 => 323,  717 => 322,  714 => 321,  710 => 319,  707 => 318,  705 => 317,  699 => 314,  695 => 313,  685 => 306,  660 => 290,  647 => 282,  624 => 264,  596 => 239,  592 => 238,  586 => 234,  582 => 233,  574 => 231,  571 => 230,  563 => 228,  557 => 226,  555 => 225,  552 => 224,  550 => 223,  546 => 222,  539 => 221,  535 => 219,  526 => 215,  522 => 214,  519 => 213,  515 => 211,  509 => 210,  502 => 205,  493 => 201,  489 => 200,  486 => 199,  484 => 198,  478 => 194,  472 => 193,  469 => 192,  459 => 190,  457 => 189,  449 => 188,  445 => 187,  438 => 183,  433 => 182,  430 => 181,  426 => 179,  423 => 178,  420 => 177,  416 => 176,  411 => 175,  409 => 174,  403 => 171,  396 => 169,  392 => 168,  389 => 167,  386 => 166,  379 => 161,  373 => 160,  370 => 159,  367 => 158,  363 => 156,  360 => 155,  358 => 154,  352 => 151,  348 => 150,  338 => 143,  313 => 127,  300 => 119,  277 => 101,  249 => 76,  245 => 75,  238 => 70,  234 => 68,  226 => 66,  223 => 65,  215 => 63,  209 => 61,  207 => 60,  204 => 59,  202 => 58,  198 => 57,  191 => 56,  187 => 54,  178 => 50,  174 => 49,  171 => 48,  167 => 46,  161 => 45,  154 => 40,  145 => 36,  141 => 35,  138 => 34,  136 => 33,  131 => 30,  125 => 29,  122 => 28,  112 => 26,  110 => 25,  102 => 24,  98 => 23,  91 => 19,  86 => 18,  83 => 17,  79 => 15,  76 => 14,  73 => 13,  69 => 12,  64 => 11,  62 => 10,  57 => 8,  52 => 6,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifeatureproductsblock/catalog/view/template/module/ishifeatureproductsblock.twig", "C:\\xampp\\htdocs\\OPC003L03_new\\extension\\ishifeatureproductsblock\\catalog\\view\\template\\module\\ishifeatureproductsblock.twig");
    }
}
