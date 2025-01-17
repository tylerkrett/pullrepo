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

/* extension/ishispecialdealblock/catalog/view/template/module/ishispecialdeals.twig */
class __TwigTemplate_3f7801d64e7027fc47e7dbb3fb33a6f7b14ced8f0fb66d4e2292e12ca9cd73e4 extends Template
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
        echo "\" class=\"ishispecialdeals\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"bannerblock1 bannerblock vertical_banner col-lg-3 col-md-6 col-sm-6 col-xs-6\">
        <a href=\"";
        // line 5
        echo ($context["btnlink1"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 6
        echo ($context["image1"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 6);
        echo "\" class=\"img-fluid\" />
          <div class=\"vertical_banner_content\">
              <div class=\"banner_subtitle\" style=\"color:";
        // line 8
        echo ($context["subtitle_color1"] ?? null);
        echo "\">";
        echo ($context["subtitle1"] ?? null);
        echo "</div>
              <div class=\"banner_title\" style=\"color:";
        // line 9
        echo ($context["title_color1"] ?? null);
        echo "\">";
        echo ($context["title1"] ?? null);
        echo "</div>
              <div class=\"banner_btn\" >";
        // line 10
        echo ($context["button1"] ?? null);
        echo "</div>
          </div>
        </a>  
      </div> 
      <div class=\"bannerblock2 bannerblock vertical_banner col-lg-3 col-md-6 col-sm-6 col-xs-6\">
        <a href=\"";
        // line 15
        echo ($context["btnlink2"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 16
        echo ($context["image2"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 16);
        echo "\" class=\"img-fluid\" />
          <div class=\"vertical_banner_content\">
              <div class=\"banner_subtitle\" style=\"color:";
        // line 18
        echo ($context["subtitle_color2"] ?? null);
        echo "\">";
        echo ($context["subtitle2"] ?? null);
        echo "</div>
              <div class=\"banner_title\" style=\"color:";
        // line 19
        echo ($context["title_color2"] ?? null);
        echo "\">";
        echo ($context["title2"] ?? null);
        echo "</div>
              <div class=\"banner_btn\" >";
        // line 20
        echo ($context["button2"] ?? null);
        echo "</div>
          </div>
        </a>  
      </div>
      <div class=\"specialdeal col-lg-6 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"ishispecialdeals-content\" >
            ";
        // line 26
        if (($context["title"] ?? null)) {
            // line 27
            echo "              <h2 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h2>
            ";
        }
        // line 29
        echo "              <div class=\"owl-carousel\">
                ";
        // line 30
        $context["counter"] = 1;
        // line 31
        echo "                ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "   
                  ";
            // line 33
            if ((($context["product_row"] ?? null) != 1)) {
                // line 34
                echo "                    ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 35
                    echo "                      <div class=\"multilevel-item\">
                    ";
                }
                // line 37
                echo "                  ";
            }
            // line 38
            echo "                    <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 38);
            echo "\">
                      <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
            // line 39
            echo ($context["cart"] ?? null);
            echo "\" data-oc-target=\"#header-cart\">
                        <div class=\"product-thumb row\">
                            
                            <div class=\"image \">
                              <div class=\"img-box\">
                                <a href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
            echo "\">
                                  <img src=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 45);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 45);
            echo "\" class=\"img-responsive\" />
                                  ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 46) != "")) {
                // line 47
                echo "                                    <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 47);
                echo "\"/>
                                  ";
            }
            // line 49
            echo "                                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 49)) {
                echo " <span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 49);
                echo "</span> ";
            }
            // line 50
            echo "                                </a> 
                                ";
            // line 51
            if ((($context["review"] ?? null) == 1)) {
                // line 52
                echo "                               
                              ";
            }
            // line 53
            echo "   
                              <div class=\"btn-cart\">
                                      <button type=\"submit\" formaction=\"";
            // line 55
            echo ($context["add_to_cart"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_cart"] ?? null);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 55)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                          <span class=\"lblcart\">";
            // line 56
            echo ($context["button_cart"] ?? null);
            echo "</span>
                                      </button>
                                </div>   
                              </div>
                            </div>
                            <div class=\"caption \">
                               <div class=\"rating\">
                                  ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 64
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 64) < $context["i"])) {
                    echo " 
                                      <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star gray fa-stack-2x\"></i>
                                      </span> 
                                    ";
                } else {
                    // line 68
                    echo " 
                                      <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                                      </span> 
                                    ";
                }
                // line 73
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                </div>
                              <h4><a href=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
            echo "</a></h4>
                              ";
            // line 76
            if ((($context["description"] ?? null) == 1)) {
                // line 77
                echo "                                <p class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 77);
                echo "</p>
                              ";
            }
            // line 79
            echo "                              ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79)) {
                // line 80
                echo "                                <p class=\"price\">
                                ";
                // line 81
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                    echo "
                                ";
                } else {
                    // line 84
                    echo "                                <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 84);
                    echo "</span>
                                ";
                }
                // line 86
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                                <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 87);
                    echo "</span>
                                ";
                }
                // line 89
                echo "                                </p>
                              ";
            }
            // line 90
            echo " 
                                  
                              ";
            // line 92
            if ((($context["displaycounter"] ?? null) == 1)) {
                // line 93
                echo "                                <div class='countdown-container'>
                                  <div class=\"countdown-text\">";
                // line 94
                echo ($context["counter_title"] ?? null);
                echo "</div>
                                  <span class=\"count-icon\"></span>
                                  <div class='countdown-days counter'>
                                  <span class=\"data\"></span>
                                  <span class=\"lbl\">";
                // line 98
                echo ($context["days_name"] ?? null);
                echo "</span>
                                  </div>
                                  <div class='countdown-hours counter'>
                                  <span class=\"data\"></span>
                                  <span class=\"lbl\">";
                // line 102
                echo ($context["hours_name"] ?? null);
                echo "</span>
                                  </div>
                                  <div class='countdown-minutes counter'>
                                  <span class=\"data\"></span>
                                  <span class=\"lbl\">";
                // line 106
                echo ($context["min_name"] ?? null);
                echo "</span>
                                  </div>
                                  <div class='countdown-seconds counter'>
                                  <span class=\"data\"></span>
                                  <span class=\"lbl\">";
                // line 110
                echo ($context["sec_name"] ?? null);
                echo "</span>
                                  </div>
                                </div>
                              ";
            }
            // line 113
            echo " 
                              <div class=\"button-group\">
                                    <div class=\"btn-quickview\"> 
                                        <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
            // line 116
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                                          <a class=\"quickbox\" href=\"";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 117);
            echo "\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                              <symbol id=\"eye-open1\" viewBox=\"0 0 1000 1000\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"></path></symbol>
                                            </svg>
                                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open1\" x=\"24%\" y=\"25%\"></use></svg>
                                            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                          </a>
                                        </div>
                                    </div>
                                    <div class=\"btn-wishlist\">
                                      <button type=\"submit\" formaction=\"";
            // line 127
            echo ($context["add_to_wishlist"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_wishlist"] ?? null);
            echo "\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                          <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1030 1030\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"></path>
                                          </symbol>
                                        </svg>
                                        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"24%\" y=\"28%\"></use></svg>
                                      </button>
                                    </div>
                                    <div class=\"btn-compare\"> 
                                      <button type=\"submit\" formaction=\"";
            // line 136
            echo ($context["add_to_compare"] ?? null);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_compare"] ?? null);
            echo "\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                          <symbol id=\"report\" viewBox=\"0 0 1300 1300\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
                                        </svg>
                                        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"25%\" y=\"29%\"></use></svg>
                                        <i class=\"fa-solid fa-arrow-right-arrow-left\"></i>
                                      </button>
                                    </div>
                                    
                              </div> 
                                                   
                            </div>
                          <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
            echo "\"/>
                          <input type=\"hidden\" name=\"quantity\" value=\"";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 149);
            echo "\"/>
                        </div>
                      </form> 
                    </div>
                  ";
            // line 153
            if ((($context["product_row"] ?? null) != 1)) {
                // line 154
                echo "                    ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 155
                    echo "                      </div>
                    ";
                }
                // line 157
                echo "                  ";
            }
            // line 158
            echo "                  ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 159
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "       
              </div>
        </div>
        
        <script type=\"text/javascript\">
          \$(\"#";
        // line 164
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .item\").each(function() {
            var container = \$(this).find('.countdown-container');
            var time = \$(this).data('countdowntime');
            \$(container).countdown(time, function(event) {
              \$(this).find(\".countdown-days .data\").html(event.strftime('%D'));
              \$(this).find(\".countdown-hours .data\").html(event.strftime('%H'));
              \$(this).find(\".countdown-minutes .data\").html(event.strftime('%M'));
              \$(this).find(\".countdown-seconds .data\").html(event.strftime('%S'));
              });
          });

          \$('#";
        // line 175
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
              loop:false,
              autoplay:false,
              nav: false,
              rewind:true,
              dots: false,
              rtl: \$('html').attr('dir') == 'rtl'? true : false,
              navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
              responsive:{
                  0:{
                      items:2
                  },
                  576:{
                      items:2
                  },
                  768:{
                      items:2
                  },
                  992:{
                      items:2
                  },
                  1200:{
                      items:2
                  }
              }
          });

          \$(document).on('click','#";
        // line 202
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .product-img-extra',function () {
            \$(this).parents('.product-thumb').find('.image img').attr('src',\$(this).attr('src'));
          });
        </script>
      </div>
      <div class=\"bannerblock3 bannerblock horizontal_banner col-lg-6 col-md-12 col-sm-12 col-xs-12 clearfix\">
        <a href=\"";
        // line 208
        echo ($context["btnlink3"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
          <img src=\"";
        // line 209
        echo ($context["image3"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 209);
        echo "\" class=\"img-fluid\" />
          <div class=\"horizontal_banner_content\">
              <div class=\"banner_subtitle\" style=\"color:";
        // line 211
        echo ($context["subtitle_color3"] ?? null);
        echo "\">";
        echo ($context["subtitle3"] ?? null);
        echo "</div>
              <div class=\"banner_title\" style=\"color:";
        // line 212
        echo ($context["title_color3"] ?? null);
        echo "\">";
        echo ($context["title3"] ?? null);
        echo "</div>
              <div class=\"banner_btn\" style=\"background-color:";
        // line 213
        echo ($context["subtitle_color3"] ?? null);
        echo ";border-color:";
        echo ($context["subtitle_color3"] ?? null);
        echo "\">";
        echo ($context["button3"] ?? null);
        echo "</div>
          </div>
        </a>  
      </div>
      <div class=\"bannerblock4 bannerblock horizontal_banner col-lg-6 col-md-12 col-sm-12 col-xs-12\"> 
          <a href=\"";
        // line 218
        echo ($context["btnlink4"] ?? null);
        echo "\" class=\"";
        echo ($context["style"] ?? null);
        echo " ";
        echo ($context["scale"] ?? null);
        echo "\">
            <img src=\"";
        // line 219
        echo ($context["image4"] ?? null);
        echo "\" alt=\"banner\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 219);
        echo "\" class=\"img-fluid\" />
            <div class=\"horizontal_banner_content\">
              <div class=\"banner_subtitle\" style=\"color:";
        // line 221
        echo ($context["subtitle_color4"] ?? null);
        echo "\">";
        echo ($context["subtitle4"] ?? null);
        echo "</div>
              <div class=\"banner_title\" style=\"color:";
        // line 222
        echo ($context["title_color4"] ?? null);
        echo "\">";
        echo ($context["title4"] ?? null);
        echo "</div>
              <div class=\"banner_btn\" style=\"background-color:";
        // line 223
        echo ($context["subtitle_color4"] ?? null);
        echo ";border-color:";
        echo ($context["subtitle_color3"] ?? null);
        echo "\">";
        echo ($context["button4"] ?? null);
        echo "</div>
            </div>
          </a>  
      </div>
    </div>
  </div>
</section>







";
    }

    public function getTemplateName()
    {
        return "extension/ishispecialdealblock/catalog/view/template/module/ishispecialdeals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 223,  556 => 222,  550 => 221,  543 => 219,  535 => 218,  523 => 213,  517 => 212,  511 => 211,  504 => 209,  496 => 208,  487 => 202,  457 => 175,  443 => 164,  431 => 159,  428 => 158,  425 => 157,  421 => 155,  418 => 154,  416 => 153,  409 => 149,  405 => 148,  388 => 136,  374 => 127,  361 => 117,  357 => 116,  352 => 113,  345 => 110,  338 => 106,  331 => 102,  324 => 98,  317 => 94,  314 => 93,  312 => 92,  308 => 90,  304 => 89,  296 => 87,  293 => 86,  285 => 84,  279 => 82,  277 => 81,  274 => 80,  271 => 79,  265 => 77,  263 => 76,  257 => 75,  254 => 74,  248 => 73,  241 => 68,  232 => 64,  228 => 63,  218 => 56,  208 => 55,  204 => 53,  200 => 52,  198 => 51,  195 => 50,  188 => 49,  178 => 47,  176 => 46,  168 => 45,  164 => 44,  156 => 39,  151 => 38,  148 => 37,  144 => 35,  141 => 34,  139 => 33,  132 => 32,  129 => 31,  127 => 30,  124 => 29,  118 => 27,  116 => 26,  107 => 20,  101 => 19,  95 => 18,  88 => 16,  80 => 15,  72 => 10,  66 => 9,  60 => 8,  53 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishispecialdealblock/catalog/view/template/module/ishispecialdeals.twig", "C:\\xampp\\htdocs\\OPC052L01_new\\extension\\ishispecialdealblock\\catalog\\view\\template\\module\\ishispecialdeals.twig");
    }
}
