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

/* extension/ishiproductsblock/catalog/view/template/module/ishiproductsblock.twig */
class __TwigTemplate_b2c47c926cc1877c25925d5dadc63bfe0f7cfdcbf6aa5ba11424fe05dbc87bb3 extends Template
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
        echo "\" class=\"ishiproductsblock container\">
    <div class=\"section-header\">  
      <h3 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h3>
\t  <p class=\"desc\"> ";
        // line 4
        echo ($context["desc"] ?? null);
        echo "</p>
    </div>
    <ul class=\"ishiproductstab nav nav-tabs clearfix\">
\t    ";
        // line 7
        if (($context["featured"] ?? null)) {
            // line 8
            echo "\t      <li class=\"nav-item\">
\t        <a class=\"nav-link active\" href=\"#featured-products-block";
            // line 9
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-bs-toggle=\"tab\">";
            echo ($context["heading_featured"] ?? null);
            echo "</a>
\t      </li>
\t    ";
        }
        // line 12
        echo "\t    ";
        if (($context["bestseller"] ?? null)) {
            // line 13
            echo "\t      <li class=\"nav-item\">
\t        <a class=\"nav-link\" href=\"#bestseller-products-block";
            // line 14
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-bs-toggle=\"tab\">";
            echo ($context["heading_bestseller"] ?? null);
            echo "</a>
\t      </li>
\t    ";
        }
        // line 17
        echo "\t    ";
        if (($context["new"] ?? null)) {
            // line 18
            echo "\t      <li class=\"nav-item\">
\t        <a class=\"nav-link\" href=\"#new-products-block";
            // line 19
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-bs-toggle=\"tab\">";
            echo ($context["heading_new"] ?? null);
            echo "</a>
\t      </li>
\t    ";
        }
        // line 22
        echo "\t    ";
        if (($context["special"] ?? null)) {
            // line 23
            echo "\t      <li class=\"nav-item\">
\t        <a class=\"nav-link\" href=\"#special-products-block";
            // line 24
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-bs-toggle=\"tab\">";
            echo ($context["heading_special"] ?? null);
            echo "</a>
\t      </li>
\t    ";
        }
        // line 27
        echo "\t\t";
        if (($context["category"] ?? null)) {
            // line 28
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "\t\t\t  <li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link \" href=\"#category-block";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 30);
                echo "-";
                echo ($context["tab_randomnumer"] ?? null);
                echo "\" data-bs-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                echo "</a>
\t\t\t  </li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t";
        }
        // line 34
        echo "\t</ul>
\t<div class=\"tab-content\">
\t\t    <div class=\"tab-pane active\" id=\"featured-products-block";
        // line 36
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
\t\t     <div class=\"block_content\">  
\t\t     \t<div class=\"row\">      
\t\t\t        <div class=\"owl-carousel\"> 
\t\t\t          ";
        // line 40
        $context["counter"] = 1;
        // line 41
        echo "\t\t\t          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["featured"] ?? null));
        echo " 
\t\t\t          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "\t\t\t            ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 44
                echo "\t\t\t              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 45
                    echo "\t\t\t                <div class=\"multilevel-item\">
\t\t\t                  ";
                }
                // line 47
                echo "\t\t\t                  ";
            }
            // line 48
            echo "\t\t\t                <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            echo ($context["cart"] ?? null);
            echo "\" data-oc-target=\"#header-cart\">
\t\t\t\t                <div class=\"item product-container\" data-countdowntime=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 49);
            echo "\"> 
\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t                      <div class=\"image\">
\t\t\t\t                        <a href=\"";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
            echo "\">
\t\t\t\t                          <img src=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
            echo "\" class=\"img-responsive\" />
\t\t\t\t                            ";
            // line 54
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 54) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 55
                echo "\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 55);
                echo "\"/>
\t\t\t\t                            ";
            }
            // line 57
            echo "\t\t\t\t                        </a>
\t\t\t\t                        ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 58)) {
                echo " <span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 58);
                echo "</span> ";
            }
            // line 59
            echo "\t\t\t\t                        <div class=\"button-group\">  
\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
            // line 61
            echo ($context["quick_view"] ?? null);
            echo "\"> 
\t\t\t\t                                <a class=\"quickbox\" href=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 62);
            echo "\">
\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"quickview-eye-open\" viewBox=\"0 0 900 900\"><title>eye-open</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC447.361,287.923,358.746,385.406,255.997,385.406z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#quickview-eye-open\" x=\"20%\" y=\"18%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lblcart d-none\">Quick View</span>
\t\t\t\t                                </a>
\t\t\t\t                              </div>
\t\t\t\t                            </div>
\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 80
            echo ($context["add_to_wishlist"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\">
\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"heart-fillshape-outline\" viewBox=\"0 0 1050 1050\"><title>heart-fillshape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414c-6.854-6.85-14.087-13.323-21.698-19.41c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824C475.078,202.133,457.19,236.016,421.405,271.795z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-fillshape-outline\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t                            </button>
\t\t\t\t\t                        </div>
\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 89
            echo ($context["add_to_compare"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"report\" viewBox=\"0 0 1200 1200\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"22%\" y=\"28%\"></use></svg>
\t\t\t\t\t                            </button>
\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t                        ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 97)) {
                // line 98
                echo "\t\t\t\t                          <div class=\"rating\">
\t\t\t\t                            ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 100
                    echo "\t\t\t\t                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100) < $context["i"])) {
                        echo " 
\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t                                </span> 
\t\t\t\t                              ";
                    } else {
                        // line 104
                        echo " 
\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t                                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t                                </span> 
\t\t\t\t                              ";
                    }
                    // line 109
                    echo "\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "\t\t\t\t                        </div>
\t\t\t\t                          ";
            } else {
                // line 112
                echo "\t\t\t\t                          <div class=\"rating\">
\t\t\t\t                            ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 114
                    echo "\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t                              </span>
\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "\t\t\t\t                          </div>
\t\t\t\t                        ";
            }
            // line 120
            echo "\t\t\t\t                        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 120)) {
                // line 121
                echo "\t\t\t\t\t                    <div class='countdown-container'>
\t\t\t\t\t                        <div class='countdown-days counter'>
\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t                          <span class=\"lbl\">";
                // line 124
                echo ($context["days_name"] ?? null);
                echo "</span>
\t\t\t\t\t                        </div>
\t\t\t\t\t                        <div class='countdown-hours counter'>
\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t                          <span class=\"lbl\">";
                // line 128
                echo ($context["hours_name"] ?? null);
                echo "</span>
\t\t\t\t\t                        </div>
\t\t\t\t\t                        <div class='countdown-minutes counter'>
\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t                          <span class=\"lbl\">";
                // line 132
                echo ($context["min_name"] ?? null);
                echo "</span>
\t\t\t\t\t                        </div>
\t\t\t\t\t                        <div class='countdown-seconds counter'>
\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t                          <span class=\"lbl\">";
                // line 136
                echo ($context["sec_name"] ?? null);
                echo "</span>
\t\t\t\t\t                        </div>
\t\t\t\t\t                    </div>
\t\t\t\t                      \t";
            }
            // line 140
            echo "\t\t\t\t                      </div>  
\t\t\t\t                    <div class=\"caption\">
\t\t\t\t                    \t  
\t\t\t\t                        <h4><a href=\"";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
            echo "</a></h4>
\t\t\t\t                        <p class=\"description\">";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 144);
            echo "</p>
\t\t\t\t                        ";
            // line 145
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 145)) {
                // line 146
                echo "\t\t\t\t                        <p class=\"price\">
\t\t\t\t                          ";
                // line 147
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 147)) {
                    // line 148
                    echo "\t\t\t\t                          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148);
                    echo "
\t\t\t\t                          ";
                } else {
                    // line 150
                    echo "\t\t\t\t                          <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 150);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 150);
                    echo "</span> 
\t\t\t\t                          ";
                }
                // line 152
                echo "\t\t\t\t                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 152)) {
                    // line 153
                    echo "\t\t\t\t                          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 153);
                    echo "</span>
\t\t\t\t                          ";
                }
                // line 155
                echo "\t\t\t\t                        </p>
\t\t\t\t                        ";
            }
            // line 157
            echo "\t\t\t\t                           \t<div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
            // line 158
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 158)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
\t\t\t\t\t\t\t\t\t               ";
            // line 159
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 159)) {
                echo " <span class=\"lblcart\">";
                echo ($context["button_soldout"] ?? null);
                echo "</span> ";
            } else {
                echo " <span class=\"lblcart\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> ";
            }
            // line 160
            echo "\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t                      \t</div>   
\t\t\t\t                    </div> 
\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 164);
            echo "\"/>
    \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 165);
            echo "\"/>                            
\t\t\t\t                </div>
\t\t\t\t            </form>      
\t\t\t                  ";
            // line 168
            if ((($context["product_row"] ?? null) != 1)) {
                // line 169
                echo "\t\t\t                  ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 170
                    echo "\t\t\t                </div>
\t\t\t              ";
                }
                // line 172
                echo "\t\t\t            ";
            }
            // line 173
            echo "\t\t\t          ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 174
            echo "\t\t\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "\t\t\t        </div>        
\t\t\t      </div>  
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 179
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
\t\t      <div class=\"block_content\">  
\t\t\t      <div class=\"row\">      
\t\t\t        <div class=\"owl-carousel\"> 
\t\t\t          ";
        // line 183
        $context["counter"] = 1;
        // line 184
        echo "\t\t\t          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        echo " 
\t\t\t          ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 186
            echo "\t\t\t            ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 187
                echo "\t\t\t              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 188
                    echo "\t\t\t                <div class=\"multilevel-item\">
\t\t\t                  ";
                }
                // line 190
                echo "\t\t\t                  ";
            }
            // line 191
            echo "\t\t\t                <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            echo ($context["cart"] ?? null);
            echo "\" data-oc-target=\"#header-cart\">
\t\t\t\t                <div class=\"item product-container\" data-countdowntime=\"";
            // line 192
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 192);
            echo "\"> 
\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t                      <div class=\"image\">
\t\t\t\t                        <a href=\"";
            // line 195
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 195);
            echo "\">
\t\t\t\t                          <img src=\"";
            // line 196
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 196);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 196);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 196);
            echo "\" class=\"img-responsive\" />
\t\t\t\t                            ";
            // line 197
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 197) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 198
                echo "\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 198);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 198);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 198);
                echo "\"/>
\t\t\t\t                            ";
            }
            // line 200
            echo "\t\t\t\t                        </a>
\t\t\t\t                        ";
            // line 201
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 201)) {
                echo " <span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 201);
                echo "</span> ";
            }
            // line 202
            echo "\t\t\t\t                        <div class=\"button-group\">  
\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
            // line 204
            echo ($context["quick_view"] ?? null);
            echo "\"> 
\t\t\t\t                                <a class=\"quickbox\" href=\"";
            // line 205
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 205);
            echo "\">
\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"quickview-eye-open\" viewBox=\"0 0 900 900\"><title>eye-open</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC447.361,287.923,358.746,385.406,255.997,385.406z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#quickview-eye-open\" x=\"20%\" y=\"18%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lblcart d-none\">Quick View</span>
\t\t\t\t                                </a>
\t\t\t\t                              </div>
\t\t\t\t                            </div>
\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 223
            echo ($context["add_to_wishlist"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\">
\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"heart-fillshape-outline\" viewBox=\"0 0 1050 1050\"><title>heart-fillshape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414c-6.854-6.85-14.087-13.323-21.698-19.41c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824C475.078,202.133,457.19,236.016,421.405,271.795z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-fillshape-outline\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t                            </button>
\t\t\t\t\t                        </div>
\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 232
            echo ($context["add_to_compare"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\">
\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"report\" viewBox=\"0 0 1200 1200\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"22%\" y=\"28%\"></use></svg>
\t\t\t\t\t                            </button>
\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t                        ";
            // line 240
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 240)) {
                // line 241
                echo "\t\t\t\t                          <div class=\"rating\">
\t\t\t\t                            ";
                // line 242
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 243
                    echo "\t\t\t\t                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 243) < $context["i"])) {
                        echo " 
\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t                                </span> 
\t\t\t\t                              ";
                    } else {
                        // line 247
                        echo " 
\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t                                \t<i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t                                </span> 
\t\t\t\t                              ";
                    }
                    // line 252
                    echo "\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "\t\t\t\t                        </div>
\t\t\t\t                          ";
            } else {
                // line 255
                echo "\t\t\t\t                          <div class=\"rating\">
\t\t\t\t                            ";
                // line 256
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 257
                    echo "\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t                              </span>
\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "\t\t\t\t                          </div>
\t\t\t\t                        ";
            }
            // line 263
            echo "\t\t\t\t                        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 263)) {
                // line 264
                echo "\t\t\t\t                      <div class='countdown-container'>
\t\t\t\t                        <div class='countdown-days counter'>
\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t                          <span class=\"lbl\">";
                // line 267
                echo ($context["days_name"] ?? null);
                echo "</span>
\t\t\t\t                        </div>
\t\t\t\t                        <div class='countdown-hours counter'>
\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t                          <span class=\"lbl\">";
                // line 271
                echo ($context["hours_name"] ?? null);
                echo "</span>
\t\t\t\t                        </div>
\t\t\t\t                        <div class='countdown-minutes counter'>
\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t                          <span class=\"lbl\">";
                // line 275
                echo ($context["min_name"] ?? null);
                echo "</span>
\t\t\t\t                        </div>
\t\t\t\t                        <div class='countdown-seconds counter'>
\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t                          <span class=\"lbl\">";
                // line 279
                echo ($context["sec_name"] ?? null);
                echo "</span>
\t\t\t\t                        </div>
\t\t\t\t                      </div>
\t\t\t\t                      ";
            }
            // line 282
            echo " 
\t\t\t\t                      </div>  
\t\t\t\t                      <div class=\"caption\">
\t\t\t\t                      \t 
\t\t\t\t                        <h4><a href=\"";
            // line 286
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 286);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 286);
            echo "</a></h4>
\t\t\t\t                        <p class=\"description\">";
            // line 287
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 287);
            echo "</p>
\t\t\t\t                        ";
            // line 288
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 288)) {
                // line 289
                echo "\t\t\t\t                        <p class=\"price\">
\t\t\t\t                          ";
                // line 290
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 290)) {
                    // line 291
                    echo "\t\t\t\t                          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 291);
                    echo "
\t\t\t\t                          ";
                } else {
                    // line 293
                    echo "\t\t\t\t                          <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 293);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 293);
                    echo "</span> 
\t\t\t\t                          ";
                }
                // line 295
                echo "\t\t\t\t                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 295)) {
                    // line 296
                    echo "\t\t\t\t                          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 296);
                    echo "</span>
\t\t\t\t                          ";
                }
                // line 298
                echo "\t\t\t\t                        </p>
\t\t\t\t                        ";
            }
            // line 299
            echo "  
\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
            // line 301
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 301)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
\t\t\t\t\t\t\t\t               ";
            // line 302
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 302)) {
                echo " <span class=\"lblcart\">";
                echo ($context["button_soldout"] ?? null);
                echo "</span> ";
            } else {
                echo " <span class=\"lblcart\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> ";
            }
            // line 303
            echo "\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t        </div>
\t\t\t\t                      </div>  
\t\t\t\t                    </div>   
\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 307
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 307);
            echo "\"/>
    \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
            // line 308
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 308);
            echo "\"/>                         
\t\t\t\t                </div>
\t\t\t            \t</form>
\t\t\t                  ";
            // line 311
            if ((($context["product_row"] ?? null) != 1)) {
                // line 312
                echo "\t\t\t                  ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 313
                    echo "\t\t\t                </div>
\t\t\t              ";
                }
                // line 315
                echo "\t\t\t            ";
            }
            // line 316
            echo "\t\t\t          ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 317
            echo "\t\t\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        echo "\t\t\t        </div>   
\t\t\t      </div>       
\t\t      </div>
\t\t    </div>
\t\t    <div class=\"tab-pane\" id=\"new-products-block";
        // line 322
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
\t\t    \t
\t\t\t      <div class=\"block_content\"> 
\t\t\t\t      <div class=\"row\">       
\t\t\t\t        <div class=\"owl-carousel\"> 
\t\t\t\t          ";
        // line 327
        $context["counter"] = 1;
        // line 328
        echo "\t\t\t\t          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        echo " 
\t\t\t\t          ";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 330
            echo "\t\t\t\t            ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 331
                echo "\t\t\t\t              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 332
                    echo "\t\t\t\t                <div class=\"multilevel-item\">
\t\t\t\t                  ";
                }
                // line 334
                echo "\t\t\t\t                  ";
            }
            // line 335
            echo "\t\t\t\t                    <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            echo ($context["cart"] ?? null);
            echo "\" data-oc-target=\"#header-cart\">\t
\t\t\t\t\t\t               \t<div class=\"item product-container\" data-countdowntime=\"";
            // line 336
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 336);
            echo "\"> 
\t\t\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t\t\t                      <div class=\"image\">
\t\t\t\t\t\t                        <a href=\"";
            // line 339
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 339);
            echo "\">
\t\t\t\t\t\t                          <img src=\"";
            // line 340
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 340);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 340);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 340);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t                            ";
            // line 341
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 341) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 342
                echo "\t\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 342);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 342);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 342);
                echo "\"/>
\t\t\t\t\t\t                            ";
            }
            // line 344
            echo "\t\t\t\t\t\t                        </a>
\t\t\t\t\t\t                        ";
            // line 345
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 345)) {
                echo " <span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 345);
                echo "</span> ";
            }
            // line 346
            echo "\t\t\t\t\t\t                        <div class=\"button-group\">  
\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
            // line 348
            echo ($context["quick_view"] ?? null);
            echo "\"> 
\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
            // line 349
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 349);
            echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"quickview-eye-open\" viewBox=\"0 0 900 900\"><title>eye-open</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC447.361,287.923,358.746,385.406,255.997,385.406z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#quickview-eye-open\" x=\"20%\" y=\"18%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lblcart d-none\">Quick View</span>
\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 367
            echo ($context["add_to_wishlist"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"heart-fillshape-outline\" viewBox=\"0 0 1050 1050\"><title>heart-fillshape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414c-6.854-6.85-14.087-13.323-21.698-19.41c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824C475.078,202.133,457.19,236.016,421.405,271.795z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-fillshape-outline\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 376
            echo ($context["add_to_compare"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"report\" viewBox=\"0 0 1200 1200\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"22%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        ";
            // line 384
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 384)) {
                // line 385
                echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                // line 386
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 387
                    echo "\t\t\t\t\t\t                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 387) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                    } else {
                        // line 391
                        echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                    }
                    // line 396
                    echo "\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 397
                echo "\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t                          ";
            } else {
                // line 399
                echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                // line 400
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 401
                    echo "\t\t\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                              </span>
\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 405
                echo "\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        ";
            }
            // line 406
            echo "  
\t\t\t\t\t\t                        ";
            // line 407
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 407)) {
                // line 408
                echo "\t\t\t\t\t\t                      <div class='countdown-container'>
\t\t\t\t\t\t                        <div class='countdown-days counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 411
                echo ($context["days_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        <div class='countdown-hours counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 415
                echo ($context["hours_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        <div class='countdown-minutes counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 419
                echo ($context["min_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        <div class='countdown-seconds counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 423
                echo ($context["sec_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                      </div>
\t\t\t\t\t\t                      ";
            }
            // line 426
            echo " 
\t\t\t\t\t\t                      </div>  
\t\t\t\t\t\t                      <div class=\"caption\">\t
\t\t\t\t\t\t                      \t\t\t\t                      \t
\t\t\t\t\t\t                        <h4><a href=\"";
            // line 430
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 430);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 430);
            echo "</a></h4>
\t\t\t\t\t\t                        <p class=\"description\">";
            // line 431
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 431);
            echo "</p>
\t\t\t\t\t\t                        ";
            // line 432
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 432)) {
                // line 433
                echo "\t\t\t\t\t\t                        <p class=\"price\">
\t\t\t\t\t\t                          ";
                // line 434
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 434)) {
                    // line 435
                    echo "\t\t\t\t\t\t                          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 435);
                    echo "
\t\t\t\t\t\t                          ";
                } else {
                    // line 437
                    echo "\t\t\t\t\t\t                          <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 437);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 437);
                    echo "</span> 
\t\t\t\t\t\t                          ";
                }
                // line 439
                echo "\t\t\t\t\t\t                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 439)) {
                    // line 440
                    echo "\t\t\t\t\t\t                          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 440);
                    echo "</span>
\t\t\t\t\t\t                          ";
                }
                // line 442
                echo "\t\t\t\t\t\t                        </p>
\t\t\t\t\t\t                        ";
            }
            // line 444
            echo "\t\t\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
            // line 445
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 445)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t               ";
            // line 446
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 446)) {
                echo " <span class=\"lblcart\">";
                echo ($context["button_soldout"] ?? null);
                echo "</span> ";
            } else {
                echo " <span class=\"lblcart\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> ";
            }
            // line 447
            echo "\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                      </div>    
\t\t\t\t\t\t                    </div>    
\t\t\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 451
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 451);
            echo "\"/>
\t\t    \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
            // line 452
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 452);
            echo "\"/>                     
\t\t\t\t\t\t                </div>
\t\t\t\t\t                </form> 
\t\t\t\t\t                  ";
            // line 455
            if ((($context["product_row"] ?? null) != 1)) {
                // line 456
                echo "\t\t\t\t\t                  ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 457
                    echo "\t\t\t\t\t            </div>
\t\t\t\t\t            
\t\t\t\t              ";
                }
                // line 460
                echo "\t\t\t\t            ";
            }
            // line 461
            echo "\t\t\t\t          ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 462
            echo "\t\t\t\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "\t\t\t\t        </div>      
\t\t\t\t      </div>    
\t\t\t      </div>
\t\t\t     
\t\t    </div>
\t\t    <div class=\"tab-pane\" id=\"special-products-block";
        // line 468
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
\t\t      <div class=\"block_content\">
\t\t\t      <div class=\"row\">        
\t\t\t        <div class=\"owl-carousel\"> 
\t\t\t          ";
        // line 472
        $context["counter"] = 1;
        // line 473
        echo "\t\t\t          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        echo " 
\t\t\t          ";
        // line 474
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 475
            echo "\t\t\t            ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 476
                echo "\t\t\t              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 477
                    echo "\t\t\t                <div class=\"multilevel-item\">
\t\t\t                  ";
                }
                // line 479
                echo "\t\t\t                  ";
            }
            // line 480
            echo "\t\t\t                <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            echo ($context["cart"] ?? null);
            echo "\" data-oc-target=\"#header-cart\">  
\t\t\t\t                <div class=\"item product-container\" data-countdowntime=\"";
            // line 481
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 481);
            echo "\"> 
\t\t\t\t                    <div class=\"product-thumb\"> 
\t\t\t\t                        <div class=\"image\">
\t\t\t\t\t                        <a href=\"";
            // line 484
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 484);
            echo "\">
\t\t\t\t\t                          <img src=\"";
            // line 485
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 485);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 485);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 485);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t                            ";
            // line 486
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 486) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 487
                echo "\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 487);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 487);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 487);
                echo "\"/>
\t\t\t\t\t                            ";
            }
            // line 489
            echo "\t\t\t\t\t                        </a>
\t\t\t\t\t                        ";
            // line 490
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 490)) {
                echo " <span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 490);
                echo "</span> ";
            }
            // line 491
            echo "\t \t\t\t\t\t                        <div class=\"button-group\">  
\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
            // line 493
            echo ($context["quick_view"] ?? null);
            echo "\"> 
\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
            // line 494
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 494);
            echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"quickview-eye-open\" viewBox=\"0 0 900 900\"><title>eye-open</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC447.361,287.923,358.746,385.406,255.997,385.406z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#quickview-eye-open\" x=\"20%\" y=\"18%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lblcart d-none\">Quick View</span>
\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 512
            echo ($context["add_to_wishlist"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\">
\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"heart-fillshape-outline\" viewBox=\"0 0 1050 1050\"><title>heart-fillshape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414c-6.854-6.85-14.087-13.323-21.698-19.41c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824C475.078,202.133,457.19,236.016,421.405,271.795z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-fillshape-outline\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
            // line 521
            echo ($context["add_to_compare"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"report\" viewBox=\"0 0 1200 1200\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"22%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        ";
            // line 529
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 529)) {
                // line 530
                echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                // line 531
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 532
                    echo "\t\t\t\t\t\t                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 532) < $context["i"])) {
                        echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                  <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                    } else {
                        // line 536
                        echo " 
\t\t\t\t\t\t                                <span class=\"fa fa-stack\">
\t\t\t\t\t\t                                  <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t                                </span> 
\t\t\t\t\t\t                              ";
                    }
                    // line 541
                    echo "\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 542
                echo "\t\t\t\t\t\t                          </div>
\t\t\t\t\t\t                          ";
            } else {
                // line 544
                echo "\t\t\t\t\t\t                          <div class=\"rating\">
\t\t\t\t\t\t                            ";
                // line 545
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 546
                    echo "\t\t\t\t\t\t                            <span class=\"fa fa-stack\">
\t\t\t\t\t\t                              <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t                              </span>
\t\t\t\t\t\t                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 550
                echo "\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        ";
            }
            // line 552
            echo "\t\t\t\t\t\t                        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 552)) {
                // line 553
                echo "\t\t\t\t\t\t                      <div class='countdown-container'>
\t\t\t\t\t\t                        <div class='countdown-days counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 556
                echo ($context["days_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        <div class='countdown-hours counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 560
                echo ($context["hours_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        <div class='countdown-minutes counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 564
                echo ($context["min_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                        <div class='countdown-seconds counter'>
\t\t\t\t\t\t                          <span class=\"data\"></span>
\t\t\t\t\t\t                          <span class=\"lbl\">";
                // line 568
                echo ($context["sec_name"] ?? null);
                echo "</span>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                      </div>
\t\t\t\t\t\t                      ";
            }
            // line 571
            echo " 
\t\t\t\t                        </div>  
\t\t\t\t                        <div class=\"caption\">
\t\t\t\t                      \t  \t\t
\t\t\t\t\t\t                        <h4><a href=\"";
            // line 575
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 575);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 575);
            echo "</a></h4>
\t\t\t\t\t\t                        <p class=\"description\">";
            // line 576
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 576);
            echo "</p>
\t\t\t\t\t\t                        ";
            // line 577
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 577)) {
                // line 578
                echo "\t\t\t\t\t\t                        <p class=\"price\">
\t\t\t\t\t\t                          ";
                // line 579
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 579)) {
                    // line 580
                    echo "\t\t\t\t\t\t                          ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 580);
                    echo "
\t\t\t\t\t\t                          ";
                } else {
                    // line 582
                    echo "\t\t\t\t\t\t                          <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 582);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 582);
                    echo "</span> 
\t\t\t\t\t\t                          ";
                }
                // line 584
                echo "\t\t\t\t\t\t                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 584)) {
                    // line 585
                    echo "\t\t\t\t\t\t                          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 585);
                    echo "</span>
\t\t\t\t\t\t                          ";
                }
                // line 587
                echo "\t\t\t\t\t\t                        </p>
\t\t\t\t\t\t                        ";
            }
            // line 588
            echo "  
\t\t\t\t\t\t                        <div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
            // line 590
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 590)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
\t\t\t\t\t\t\t\t\t\t               ";
            // line 591
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 591)) {
                echo " <span class=\"lblcart\">";
                echo ($context["button_soldout"] ?? null);
                echo "</span> ";
            } else {
                echo " <span class=\"lblcart\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> ";
            }
            // line 592
            echo "\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t                    </div>   
\t\t\t\t                    </div>  
\t\t\t\t                    <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 596
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 596);
            echo "\"/>
    \t\t\t\t\t\t\t  \t<input type=\"hidden\" name=\"quantity\" value=\"";
            // line 597
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 597);
            echo "\"/>                      
\t\t\t\t                </div>
\t\t\t\t            </form>
\t\t\t\t                  ";
            // line 600
            if ((($context["product_row"] ?? null) != 1)) {
                // line 601
                echo "\t\t\t\t                  ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 602
                    echo "\t\t\t\t            
\t\t\t\t             </div>    
\t\t\t              ";
                }
                // line 605
                echo "\t\t\t            ";
            }
            // line 606
            echo "\t\t\t          ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 607
            echo "\t\t\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 608
        echo "\t\t\t        </div>        
\t\t\t      </div>  
\t\t      </div>
\t\t    </div>
\t\t\t";
        // line 612
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 613
            echo "\t\t\t<div class=\"tab-pane \" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 613);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
\t\t\t    <div class=\"block_content\">  
\t\t\t\t    <div class=\"row\">     
\t\t\t\t        <div class=\"owl-carousel\">
\t\t\t\t          \t";
            // line 617
            $context["counter"] = 1;
            // line 618
            echo "\t\t\t\t            ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_compile_0 = ($context["category"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 618)] ?? null) : null));
            // line 619
            echo "\t\t\t\t            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["category"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 619)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 620
                echo "\t\t\t\t            ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 621
                    echo "\t\t\t\t            ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 622
                        echo "\t\t\t\t            <div class=\"multilevel-item\">
\t\t\t\t            ";
                    }
                    // line 624
                    echo "\t\t\t\t            ";
                }
                // line 625
                echo "\t\t\t\t                <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["cart"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">  
\t\t\t\t\t                    <div class=\"item product-container\" data-countdowntime=\"";
                // line 626
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 626);
                echo "\">
\t\t\t\t\t\t                    <div class=\"product-thumb\">
\t\t\t\t\t\t                        <div class=\"image\">
\t\t\t\t\t\t                          <a href=\"";
                // line 629
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 629);
                echo "\">
\t\t\t\t\t\t                            <img src=\"";
                // line 630
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 630);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 630);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 630);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t                            ";
                // line 631
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 631) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 632
                    echo "\t\t\t\t\t\t                              <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 632);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 632);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 632);
                    echo "\"/>
\t\t\t\t\t\t                            ";
                }
                // line 634
                echo "\t\t\t\t\t\t                          </a>
\t\t\t\t\t\t      \t\t\t\t        ";
                // line 635
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 635)) {
                    echo " <span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 635);
                    echo "</span> ";
                }
                // line 636
                echo "\t\t\t\t\t\t      \t\t\t\t        <div class=\"button-group\">  
\t\t\t\t\t\t\t                            <div class=\"btn-quickview\"> 
\t\t\t\t\t\t\t                              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
                // line 638
                echo ($context["quick_view"] ?? null);
                echo "\"> 
\t\t\t\t\t\t\t                                <a class=\"quickbox\" href=\"";
                // line 639
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 639);
                echo "\">
\t\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"quickview-eye-open\" viewBox=\"0 0 900 900\"><title>eye-open</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tc26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tC447.361,287.923,358.746,385.406,255.997,385.406z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#quickview-eye-open\" x=\"20%\" y=\"18%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lblcart d-none\">Quick View</span>
\t\t\t\t\t\t\t                                </a>
\t\t\t\t\t\t\t                              </div>
\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t                            <div class=\"btn-wishlist\">
\t\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 657
                echo ($context["add_to_wishlist"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t                               <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"heart-fillshape-outline\" viewBox=\"0 0 1050 1050\"><title>heart-fillshape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414c-6.854-6.85-14.087-13.323-21.698-19.41c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824C475.078,202.133,457.19,236.016,421.405,271.795z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-fillshape-outline\" x=\"24%\" y=\"26%\"></use></svg>
\t\t\t\t\t\t\t\t                            </button>
\t\t\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t\t\t                        <div class=\"btn-compare\"> 
\t\t\t\t\t\t\t\t                            <button type=\"submit\" formaction=\"";
                // line 666
                echo ($context["add_to_compare"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"report\" viewBox=\"0 0 1200 1200\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"22%\" y=\"28%\"></use></svg>
\t\t\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t                        ";
                // line 674
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 674)) {
                    // line 675
                    echo "\t\t\t\t\t\t\t                            <div class=\"rating\">
\t\t\t\t\t\t\t                              ";
                    // line 676
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 677
                        echo "\t\t\t\t\t\t\t                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 677) < $context["i"])) {
                            echo " 
\t\t\t\t\t\t\t                                  <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t                                    <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t\t                                  </span> 
\t\t\t\t\t\t\t                                ";
                        } else {
                            // line 681
                            echo " 
\t\t\t\t\t\t\t                                  <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t                                    <i class=\"fa fa-star yellow fa-stack-2x\"></i>
\t\t\t\t\t\t\t                                  </span> 
\t\t\t\t\t\t\t                                ";
                        }
                        // line 686
                        echo "\t\t\t\t\t\t\t                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 687
                    echo "\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t                            ";
                } else {
                    // line 689
                    echo "\t\t\t\t\t\t\t                            <div class=\"rating\">
\t\t\t\t\t\t\t                              ";
                    // line 690
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 691
                        echo "\t\t\t\t\t\t\t                              <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
\t\t\t\t\t\t\t                                </span>
\t\t\t\t\t\t\t                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 695
                    echo "\t\t\t\t\t\t\t                            </div>
\t\t\t\t\t\t\t                        ";
                }
                // line 697
                echo "\t\t\t\t\t\t                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 697)) {
                    // line 698
                    echo "\t\t\t\t\t        \t\t\t            <div class='countdown-container'>
\t\t\t\t\t        \t\t\t                <div class='countdown-days counter'>
\t\t\t\t\t        \t\t\t                  <span class=\"data\"></span>
\t\t\t\t\t        \t\t\t                  <span class=\"lbl\">";
                    // line 701
                    echo ($context["days_name"] ?? null);
                    echo "</span>
\t\t\t\t\t        \t\t\t                </div>
\t\t\t\t\t        \t\t\t                <div class='countdown-hours counter'>
\t\t\t\t\t        \t\t\t                  <span class=\"data\"></span>
\t\t\t\t\t        \t\t\t                  <span class=\"lbl\">";
                    // line 705
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
\t\t\t\t\t        \t\t\t                </div>
\t\t\t\t\t        \t\t\t                <div class='countdown-minutes counter'>
\t\t\t\t\t        \t\t\t                  <span class=\"data\"></span>
\t\t\t\t\t        \t\t\t                  <span class=\"lbl\">";
                    // line 709
                    echo ($context["min_name"] ?? null);
                    echo "</span>
\t\t\t\t\t        \t\t\t                </div>
\t\t\t\t\t        \t\t\t                <div class='countdown-seconds counter'>
\t\t\t\t\t        \t\t\t                  <span class=\"data\"></span>
\t\t\t\t\t        \t\t\t                  <span class=\"lbl\">";
                    // line 713
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
\t\t\t\t\t        \t\t\t                </div>
\t\t\t\t\t        \t\t\t            </div>
\t\t\t\t\t\t      \t                  ";
                }
                // line 716
                echo " 
\t\t\t\t\t\t                        </div>                  
\t\t\t\t\t\t                        <div class=\"caption\">   
\t\t\t\t\t\t                          <h4><a href=\"";
                // line 719
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 719);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 719);
                echo "</a></h4>
\t\t\t\t\t\t                          <p class=\"description\">";
                // line 720
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 720);
                echo "</p>
\t\t\t\t\t\t                          ";
                // line 721
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 721)) {
                    // line 722
                    echo "\t\t\t\t\t\t                          <p class=\"price\">
\t\t\t\t\t\t                            ";
                    // line 723
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 723)) {
                        // line 724
                        echo "\t\t\t\t\t\t                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 724);
                        echo "
\t\t\t\t\t\t                            ";
                    } else {
                        // line 726
                        echo "\t\t\t\t\t\t                            <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 726);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 726);
                        echo "</span> 
\t\t\t\t\t\t                            ";
                    }
                    // line 728
                    echo "\t\t\t\t\t\t                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 728)) {
                        // line 729
                        echo "\t\t\t\t\t\t                            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 729);
                        echo "</span>
\t\t\t\t\t\t                            ";
                    }
                    // line 731
                    echo "\t\t\t\t\t\t                          </p>
\t\t\t\t\t\t                          ";
                }
                // line 733
                echo "\t\t\t\t\t\t                          \t<div class=\"btn-cart\">
\t\t\t\t\t\t\t\t\t\t\t            <button type=\"submit\" formaction=\"";
                // line 734
                echo ($context["add_to_cart"] ?? null);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 734)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t               ";
                // line 735
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 735)) {
                    echo " <span class=\"lblcart\">";
                    echo ($context["button_soldout"] ?? null);
                    echo "</span> ";
                } else {
                    echo " <span class=\"lblcart\">";
                    echo ($context["button_cart"] ?? null);
                    echo "</span> ";
                }
                // line 736
                echo "\t\t\t\t\t\t\t\t\t\t\t            </button>
\t\t\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t                        </div>
\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t                </div> 
\t\t\t\t\t\t                <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 741
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 741);
                echo "\"/>
    \t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
                // line 742
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 742);
                echo "\"/>
\t\t\t\t\t\t        </form>         
\t\t\t\t\t        ";
                // line 744
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 745
                    echo "\t\t\t\t\t        ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 746
                        echo "\t\t\t\t\t        </div>   
\t\t\t\t            ";
                    }
                    // line 748
                    echo "\t\t\t\t            ";
                }
                echo "\t
\t\t\t\t            ";
                // line 749
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 750
                echo "\t\t\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
\t\t\t\t    \t</div>        
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 756
        echo "\t</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 758
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
                items:";
        // line 767
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            576:{
                items:";
        // line 770
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 773
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 776
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 779
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
        return "extension/ishiproductsblock/catalog/view/template/module/ishiproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1896 => 779,  1890 => 776,  1884 => 773,  1878 => 770,  1872 => 767,  1860 => 758,  1856 => 756,  1840 => 750,  1838 => 749,  1833 => 748,  1829 => 746,  1826 => 745,  1824 => 744,  1819 => 742,  1815 => 741,  1808 => 736,  1798 => 735,  1788 => 734,  1785 => 733,  1781 => 731,  1773 => 729,  1770 => 728,  1762 => 726,  1756 => 724,  1754 => 723,  1751 => 722,  1749 => 721,  1745 => 720,  1739 => 719,  1734 => 716,  1727 => 713,  1720 => 709,  1713 => 705,  1706 => 701,  1701 => 698,  1698 => 697,  1694 => 695,  1685 => 691,  1681 => 690,  1678 => 689,  1674 => 687,  1668 => 686,  1661 => 681,  1652 => 677,  1648 => 676,  1645 => 675,  1643 => 674,  1630 => 666,  1616 => 657,  1595 => 639,  1591 => 638,  1587 => 636,  1581 => 635,  1578 => 634,  1568 => 632,  1566 => 631,  1558 => 630,  1554 => 629,  1548 => 626,  1543 => 625,  1540 => 624,  1536 => 622,  1533 => 621,  1530 => 620,  1525 => 619,  1522 => 618,  1520 => 617,  1510 => 613,  1506 => 612,  1500 => 608,  1494 => 607,  1491 => 606,  1488 => 605,  1483 => 602,  1480 => 601,  1478 => 600,  1472 => 597,  1468 => 596,  1462 => 592,  1452 => 591,  1442 => 590,  1438 => 588,  1434 => 587,  1426 => 585,  1423 => 584,  1415 => 582,  1409 => 580,  1407 => 579,  1404 => 578,  1402 => 577,  1398 => 576,  1392 => 575,  1386 => 571,  1379 => 568,  1372 => 564,  1365 => 560,  1358 => 556,  1353 => 553,  1350 => 552,  1346 => 550,  1337 => 546,  1333 => 545,  1330 => 544,  1326 => 542,  1320 => 541,  1313 => 536,  1304 => 532,  1300 => 531,  1297 => 530,  1295 => 529,  1282 => 521,  1268 => 512,  1247 => 494,  1243 => 493,  1239 => 491,  1233 => 490,  1230 => 489,  1220 => 487,  1218 => 486,  1210 => 485,  1206 => 484,  1200 => 481,  1195 => 480,  1192 => 479,  1188 => 477,  1185 => 476,  1182 => 475,  1178 => 474,  1173 => 473,  1171 => 472,  1164 => 468,  1157 => 463,  1151 => 462,  1148 => 461,  1145 => 460,  1140 => 457,  1137 => 456,  1135 => 455,  1129 => 452,  1125 => 451,  1119 => 447,  1109 => 446,  1099 => 445,  1096 => 444,  1092 => 442,  1084 => 440,  1081 => 439,  1073 => 437,  1067 => 435,  1065 => 434,  1062 => 433,  1060 => 432,  1056 => 431,  1050 => 430,  1044 => 426,  1037 => 423,  1030 => 419,  1023 => 415,  1016 => 411,  1011 => 408,  1009 => 407,  1006 => 406,  1002 => 405,  993 => 401,  989 => 400,  986 => 399,  982 => 397,  976 => 396,  969 => 391,  960 => 387,  956 => 386,  953 => 385,  951 => 384,  938 => 376,  924 => 367,  903 => 349,  899 => 348,  895 => 346,  889 => 345,  886 => 344,  876 => 342,  874 => 341,  866 => 340,  862 => 339,  856 => 336,  851 => 335,  848 => 334,  844 => 332,  841 => 331,  838 => 330,  834 => 329,  829 => 328,  827 => 327,  819 => 322,  813 => 318,  807 => 317,  804 => 316,  801 => 315,  797 => 313,  794 => 312,  792 => 311,  786 => 308,  782 => 307,  776 => 303,  766 => 302,  756 => 301,  752 => 299,  748 => 298,  740 => 296,  737 => 295,  729 => 293,  723 => 291,  721 => 290,  718 => 289,  716 => 288,  712 => 287,  706 => 286,  700 => 282,  693 => 279,  686 => 275,  679 => 271,  672 => 267,  667 => 264,  664 => 263,  660 => 261,  651 => 257,  647 => 256,  644 => 255,  640 => 253,  634 => 252,  627 => 247,  618 => 243,  614 => 242,  611 => 241,  609 => 240,  596 => 232,  582 => 223,  561 => 205,  557 => 204,  553 => 202,  547 => 201,  544 => 200,  534 => 198,  532 => 197,  524 => 196,  520 => 195,  514 => 192,  509 => 191,  506 => 190,  502 => 188,  499 => 187,  496 => 186,  492 => 185,  487 => 184,  485 => 183,  478 => 179,  472 => 175,  466 => 174,  463 => 173,  460 => 172,  456 => 170,  453 => 169,  451 => 168,  445 => 165,  441 => 164,  435 => 160,  425 => 159,  415 => 158,  412 => 157,  408 => 155,  400 => 153,  397 => 152,  389 => 150,  383 => 148,  381 => 147,  378 => 146,  376 => 145,  372 => 144,  366 => 143,  361 => 140,  354 => 136,  347 => 132,  340 => 128,  333 => 124,  328 => 121,  325 => 120,  321 => 118,  312 => 114,  308 => 113,  305 => 112,  301 => 110,  295 => 109,  288 => 104,  279 => 100,  275 => 99,  272 => 98,  270 => 97,  257 => 89,  243 => 80,  222 => 62,  218 => 61,  214 => 59,  208 => 58,  205 => 57,  195 => 55,  193 => 54,  185 => 53,  181 => 52,  175 => 49,  170 => 48,  167 => 47,  163 => 45,  160 => 44,  157 => 43,  153 => 42,  148 => 41,  146 => 40,  139 => 36,  135 => 34,  132 => 33,  119 => 30,  116 => 29,  111 => 28,  108 => 27,  100 => 24,  97 => 23,  94 => 22,  86 => 19,  83 => 18,  80 => 17,  72 => 14,  69 => 13,  66 => 12,  58 => 9,  55 => 8,  53 => 7,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiproductsblock/catalog/view/template/module/ishiproductsblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishiproductsblock\\catalog\\view\\template\\module\\ishiproductsblock.twig");
    }
}
