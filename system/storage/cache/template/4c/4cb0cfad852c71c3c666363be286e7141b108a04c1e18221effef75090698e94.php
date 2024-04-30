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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_c6ff44c16c6818afe6ae491f5be44c1724a7f9ef1f7cb3353286ac805109399b extends Template
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
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
  <link href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap\" rel=\"stylesheet\">
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  <!-- <script src=\"catalog/view/javascript/typed.min.js\" type=\"text/javascript\"></script> -->
  <script src=\"catalog/view/javascript/theme.js\" type=\"text/javascript\"></script>
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
<body>

<div id=\"alert\" class=\"position-fixed top-0 end-0\"></div>
<header id=\"header\" class=\"";
        // line 59
        echo ($context["ishome"] ?? null);
        echo "\">
  <div id=\"menu_wrapper\"></div>
  <div class=\"header-nav\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12 col-sm-4 col-md-4 d-md-inline-block d-none left-nav\">
\t\t\t\t\t<div class=\"contact-email\">
\t\t\t\t\t\t<div class=\"email-img\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\"> 
\t\t\t\t\t\t\t\t<symbol id=\"envelope\" viewBox=\"0 0 400 400\"><title>envelope</title><path d=\"M230,49.585c0-0.263,0.181-0.519,0.169-0.779l-70.24,67.68l70.156,65.518c0.041-0.468-0.085-0.94-0.085-1.418V49.585z\"></path><path d=\"M149.207,126.901l-28.674,27.588c-1.451,1.396-3.325,2.096-5.2,2.096c-1.836,0-3.672-0.67-5.113-2.013l-28.596-26.647L11.01,195.989c1.717,0.617,3.56,1.096,5.49,1.096h197.667c2.866,0,5.554-0.873,7.891-2.175L149.207,126.901z\"></path>
\t\t\t\t\t\t\t\t<path d=\"M115.251,138.757L222.447,35.496c-2.427-1.443-5.252-2.411-8.28-2.411H16.5c-3.943,0-7.556,1.531-10.37,3.866L115.251,138.757z\"></path>
\t\t\t\t\t\t\t\t<path d=\"M0,52.1v128.484c0,1.475,0.339,2.897,0.707,4.256l69.738-67.156L0,52.1z\"></path></symbol>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 40 40\">
\t\t\t\t\t\t\t\t<use xlink:href=\"#envelope\" x=\"31%\" y=\"20%\"></use>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<span class=\"cont-email\">info@gmail.com</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t    </div>
        <div id=\"ishiheaderblock\" class=\"header-nav-left col-lg-4 col-md-4 col-sm-12 col-xs-12 d-md-block d-none\">
          ";
        // line 82
        echo ($context["header_before"] ?? null);
        echo "
          <button type=\"button\" class=\"close d-none\" data-dismiss=\"modal\">×</button>
        </div>
        <div class=\"header-nav-right col-lg-4 col-md-4 col-sm-12 col-xs-12\">
          <div id=\"_desktop_language\" class=\"language-selector header-nav-div\">";
        // line 86
        echo ($context["language"] ?? null);
        echo "</div>
          <div id=\"_desktop_currency\" class=\"currency-selector header-nav-div\">";
        // line 87
        echo ($context["currency"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>    
 <div class=\"header-top-height\">
    <div class=\"header-top\">
      <div class=\"container\">
        <div class=\"row\">
            <div class=\"mobile-width-left col-sm-4 col-xs-4 d-inline-block d-lg-none\"> 
              <div id=\"menu-icon\" class=\"menu-icon hidden-md hidden-lg\">
                <div class=\"nav-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">   
                    <symbol id=\"setup\" viewBox=\"0 0 750 750\"><title>setup</title><g> <rect y=\"46.06\" width=\"344.339\" height=\"29.52\"></rect> </g><g> <rect y=\"156.506\" width=\"344.339\" height=\"29.52\"></rect> </g><g> <rect y=\"268.748\" width=\"344.339\" height=\"29.531\"></rect> </g></symbol>
                    </svg>
                  <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#setup\" x=\"25%\" y=\"25%\"></use></svg>
                </div>
              </div>
              <div id=\"_mobile_seach_widget\"></div>
            </div>
            <div id=\"_mobile_logo\" class=\"col-sm-4 col-xs-4 d-inline-block d-lg-none\"></div>
            <div class=\"mobile-width-right col-sm-4 col-xs-4 d-inline-block d-lg-none\">
              <div id=\"_mobile_user_info\" class=\"d-inline-block d-lg-none\"></div>
              <div id=\"_mobile_cart\"></div>
            </div>
            <div id=\"_desktop_logo\" class=\"desktop-logo col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 d-lg-inline-block d-none\">
              <div id=\"logo\">
                ";
        // line 114
        if (($context["logo"] ?? null)) {
            // line 115
            echo "                  <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></a>
                ";
        } else {
            // line 117
            echo "                  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
                ";
        }
        // line 119
        echo "              </div>
            </div>
            ";
        // line 121
        echo ($context["menu"] ?? null);
        echo "
            <div class=\"desktop-custominfo col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 d-lg-inline-block d-none\"> 
              <div id=\"_desktop_seach_widget\">
                <div class=\"search-widget dropdown\">
                    <div class=\"search-text dropdown-toggle d-lg-inline d-none\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <div class=\"search-logo\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">  
                          <symbol id=\"magnifying-desktop\" viewBox=\"0 0 1200 1200\"><title>magnifying-desktop</title>
                            <path d=\"M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407S377.82,467.8,257.493,467.8z\"></path>
                          </symbol>
                        </svg>
                        <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#magnifying-desktop\" x=\"20%\" y=\"22%\"></use></svg>
                      </div>
                    </div>
                    <div class=\"search-logo d-lg-none d-md-block dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                      <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">   
                        <symbol id=\"magnifying-desktop\" viewBox=\"0 0 1200 1200\"><title>magnifying-desktop</title>
                        <path d=\"M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
                          C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
                          l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
                          c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
                          S377.82,467.8,257.493,467.8z\"></path>
                        </symbol>
                      </svg>
                      <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#magnifying-desktop\" x=\"20%\" y=\"24%\"></use></svg>
                    </div>
                    <form class=\"dropdown-menu\">";
        // line 147
        echo ($context["search"] ?? null);
        echo "</form>
                </div>
              </div>     
              <div id=\"_desktop_user_info\" class=\"d-lg-inline-block d-none header-nav-div\">
              <div class=\"user-info\">
                <ul class=\"list-inline\">
                  <li class=\"list-inline-item\">
                    <div class=\"dropdown\">
                      <div href=\"";
        // line 155
        echo ($context["account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <span class=\"user-name d-none \">";
        // line 156
        echo ($context["text_account"] ?? null);
        echo "
                          <i class=\"fa fa-angle-down\"></i>
                        </span> 
                        <div class=\"user-logo d-none d-lg-inline-block\">
                          <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
                           <symbol id=\"user-desktop\" viewBox=\"0 0 480 480\"><title>user-desktop</title>
                            <path d=\"M187.497,152.427H73.974c-38.111,0-69.117,31.006-69.117,69.117v39.928h251.758v-39.928
                               C256.614,183.433,225.608,152.427,187.497,152.427z M241.614,246.473H19.856v-24.928c0-29.84,24.277-54.117,54.117-54.117h113.523
                               c29.84,0,54.117,24.277,54.117,54.117L241.614,246.473L241.614,246.473z\"></path>
                            <path d=\"M130.735,145.326c40.066,0,72.663-32.597,72.663-72.663S170.802,0,130.735,0S58.072,32.596,58.072,72.663
                               S90.669,145.326,130.735,145.326z M130.735,15c31.796,0,57.663,25.867,57.663,57.663s-25.867,57.663-57.663,57.663
                               s-57.663-25.868-57.663-57.663S98.939,15,130.735,15z\"></path>
                           </symbol> 
                          </svg>
                          <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#user-desktop\" x=\"20%\" y=\"20%\"></use></svg>
                        </div>
                        <div class=\"user-logo d-lg-none d-inline-block\">
                          <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
                            <symbol id=\"user-desktop\" viewBox=\"0 0 480 480\"><title>user-desktop</title>
                              <path d=\"M187.497,152.427H73.974c-38.111,0-69.117,31.006-69.117,69.117v39.928h251.758v-39.928
                               C256.614,183.433,225.608,152.427,187.497,152.427z M241.614,246.473H19.856v-24.928c0-29.84,24.277-54.117,54.117-54.117h113.523
                                 c29.84,0,54.117,24.277,54.117,54.117L241.614,246.473L241.614,246.473z\"></path>
                              <path d=\"M130.735,145.326c40.066,0,72.663-32.597,72.663-72.663S170.802,0,130.735,0S58.072,32.596,58.072,72.663
                                 S90.669,145.326,130.735,145.326z M130.735,15c31.796,0,57.663,25.867,57.663,57.663s-25.867,57.663-57.663,57.663
                                 s-57.663-25.868-57.663-57.663S98.939,15,130.735,15z\"></path>
                            </symbol> 
                          </svg>
                          <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#user-desktop\" x=\"19%\" y=\"22%\"></use></svg>
                        </div>
                      </div>
                      <ul class=\"dropdown-menu dropdown-menu-right\">
                        ";
        // line 187
        if ( !($context["logged"] ?? null)) {
            // line 188
            echo "                          <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 189
            echo ($context["login"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 190
            echo ($context["wishlist"] ?? null);
            echo "\" class=\"dropdown-item\" id=\"wishlist-total\" title=\"";
            echo ($context["text_wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
                        ";
        } else {
            // line 192
            echo "                          <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 193
            echo ($context["order"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 194
            echo ($context["wishlist"] ?? null);
            echo "\" class=\"dropdown-item\" id=\"wishlist-total\" title=\"";
            echo ($context["text_wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 195
            echo ($context["transaction"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 196
            echo ($context["download"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 197
            echo ($context["logout"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 199
        echo "                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>       
              <div id=\"_desktop_cart\">
                <div id=\"header-cart\">
                  <div class=\"blockcart\">
                    ";
        // line 208
        echo ($context["cart"] ?? null);
        echo "
                    <div id=\"cart_wrapper\"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        ";
        // line 215
        echo ($context["header_after"] ?? null);
        echo "
      </div>
    </div>
 </div>
  <div class=\"nav-full-height d-lg-block d-none\">  
    <div class=\"nav-full-width\">
    </div>
  </div>
</header>
<div id=\"mobile_top_menu_wrapper\" class=\"hidden-lg hidden-md\" style=\"display:none;\">
    <div id=\"top_menu_closer\">
        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"15px\" height=\"15px\" viewBox=\"0 0 16 16\" enable-background=\"new 0 0 16 16\" xml:space=\"preserve\">  <image id=\"image0\" width=\"16\" height=\"16\" x=\"0\" y=\"0\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAQAAADlauupAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
      AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZ
      cwAAAGAAAABgAPBrQs8AAAAHdElNRQfmBQUKKyJdcBQmAAAAk0lEQVQ4y2NgoAZQ2n38uMoke3ti
      1Sv/d3BQWnD+PMIARRsbZf8XL5ReODkR0qw4ydZWWePlS+UiR0dUVxBhCE7NxBiipGhjg1czukJk
      Q7CJEW0IyZqRQ1pZ4+VLZY2XL5X/OzjgUsdEkqnEAoq8QFEg4lNIMJ0Qk5BwWkBKUsZqiNLpc+fw
      RRU6UJlkb4+SmSgBAPl3bzbjMveUAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIyLTA1LTA1VDEwOjQz
      OjM0KzAwOjAw2j712QAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMi0wNS0wNVQxMDo0MzozNCswMDow
      MKtjTWUAAAAASUVORK5CYII=\"></image>
      </svg>
    </div>
    <div class=\"js-top-menu mobile\" id=\"_mobile_top_menu\">
    </div>
    <div id=\"_mobile_header\" class=\"left-nav\"></div>
</div>
<script> 
function quickbox(){
  if (\$(window).width() > 767) {
    \$('.quickview-button').magnificPopup({
    type:'iframe',
    delegate: 'a',
    preloader: true,
    tLoading: 'Loading image #%curr%...',
    });    
  }  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});
\$( \"input[name=\\'search\\']\" ).keyup(function( event ) {
  \$('input[name=\\'search\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=product/search|autocomplete&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(result) {
          var products = result.products;
          \$('.ajaxishi-search ul li').remove();
            \$.each(products, function(index,product) {
            var html = '<li>';
              html += '<div>';
              html += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
              html += '<div class=\"product-image\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
              html += '<div class=\"product-desc\">';
              html += '<div class=\"product-name\">' + product.name + '</div>';
              if (product.special) {
                              html += '<div class=\"product-price\"><span class=\"special\">' + product.price + '</span><span class=\"price\">' + product.special + '</span></div>';
                          } else {
                              html += '<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
              }
              html += '</div>';
              html += '</a>';
              html += '</div>';
              html += '</li>';
              \$('.ajaxishi-search ul').append(html);
            });
            \$('.ajaxishi-search').css('display','block');
                  return false;
        }
      });
    },
    'select': function(product) {
      \$('input[name=\\'filter_name\\']').val(product.name);
    }
  });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 215,  447 => 208,  436 => 199,  429 => 197,  423 => 196,  417 => 195,  409 => 194,  403 => 193,  396 => 192,  387 => 190,  381 => 189,  374 => 188,  372 => 187,  338 => 156,  334 => 155,  323 => 147,  294 => 121,  290 => 119,  282 => 117,  270 => 115,  268 => 114,  238 => 87,  234 => 86,  227 => 82,  201 => 59,  195 => 55,  186 => 53,  181 => 52,  170 => 50,  165 => 49,  156 => 47,  151 => 46,  138 => 44,  134 => 43,  113 => 25,  109 => 24,  104 => 23,  98 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\catalog\\view\\template\\common\\header.twig");
    }
}
