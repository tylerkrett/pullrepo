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

/* extension/opencart/catalog/view/template/module/productcard.twig */
class __TwigTemplate_a9227b731e04b1bb3bd23840f57230b78efaa326dc0912349ec3f919dbef486c extends Template
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
        echo "<form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["cart"] ?? null);
        echo "\" data-oc-target=\"#header-cart\">
  <div class=\"product-container product-layout clearfix\">
    <div class=\"product-thumb\" data-countdowntime=\"";
        // line 3
        echo ($context["date_end"] ?? null);
        echo "\">
      <div class=\"image\">
        <a href=\"";
        // line 5
        echo ($context["href"] ?? null);
        echo "\">
        <img src=\"";
        // line 6
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/>
        ";
        // line 7
        if (((($context["extra"] ?? null) != "") && (($context["hover"] ?? null) == 1))) {
            // line 8
            echo "          <img class=\"product-img-extra img-responsive\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" src= \"";
            echo ($context["extra"] ?? null);
            echo "\"/>
        ";
        }
        // line 10
        echo "        </a>
        ";
        // line 11
        if (($context["stock_status"] ?? null)) {
            echo "<span class=\"outstock-overlay\">";
            echo ($context["stock_status"] ?? null);
            echo "</span>";
        }
        echo " 
        ";
        // line 12
        if (($context["review_status"] ?? null)) {
            // line 13
            echo "          <div class=\"rating\">
              ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "                ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 16
                    echo "                  <span class=\"fa fa-stack\">
                    <i class=\"fa fa-star gray fa-stack-2x\"></i>
                  </span> 
                ";
                } else {
                    // line 20
                    echo "                  <span class=\"fa fa-stack\">
                    <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                  </span> 
                ";
                }
                // line 24
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "          </div>
          ";
        } else {
            // line 27
            echo "          <div class=\"rating\">
              ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "              <span class=\"fa fa-stack\">
                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                </span>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "          </div>
        ";
        }
        // line 35
        echo "        <div class=\"button-group\">
          <div class=\"btn-quickview\"> 
              <div class=\"quickview-button button\" data-bs-toggle=\"tooltip\" title=\" ";
        // line 37
        echo ($context["quick_view"] ?? null);
        echo "\"> 
                <a class=\"quickbox\" href=\"";
        // line 38
        echo ($context["quick"] ?? null);
        echo "\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                    <symbol id=\"eye-open\" viewBox=\"0 0 1050 1050\"><title>eye-open</title>
                    <path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                    z\"></path>
                    </symbol>
                  </svg>
                  <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"26%\" y=\"26%\"></use></svg>
                  <span class=\"labelcart\">";
        // line 58
        echo ($context["quick_view"] ?? null);
        echo "</span>
                </a>
              </div>
          </div>
          <div class=\"btn-wishlist\">
            <button type=\"submit\" formaction=\"";
        // line 63
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                  <symbol id=\"heart-shape-outline\" viewBox=\"0 0 1200 1200\"><title>heart-shape-outline</title>
                  <path d=\"M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z\"></path>
                  </symbol>
              </svg>
              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"28%\" y=\"30%\"></use></svg>
            </button>
          </div>
          <div class=\"btn-compare\"> 
            <button type=\"submit\" formaction=\"";
        // line 81
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                <symbol id=\"report\" viewBox=\"0 0 1450 1450\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m480 258.667969h60v220h-60zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m200 118.667969h60v360h-60zm0 0\"></path><path d=\"m340-1.332031h60v480h-60zm0 0\"></path><path d=\"m60 358.667969h60v120h-60zm0 0\"></path><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"></path><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"></path><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"></path><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"></path><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"></path></symbol>
              </svg>
              <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#report\" x=\"28%\" y=\"30%\"></use></svg>
            </button>
          </div>
        </div>
        ";
        // line 89
        if (($context["date_end"] ?? null)) {
            // line 90
            echo "          <div class='countdown-container'>
            <div class='countdown-days counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
            // line 93
            echo ($context["days_name"] ?? null);
            echo "</span>
            </div>
            <div class='countdown-hours counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
            // line 97
            echo ($context["hours_name"] ?? null);
            echo "</span>
            </div>
            <div class='countdown-minutes counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
            // line 101
            echo ($context["min_name"] ?? null);
            echo "</span>
            </div>
            <div class='countdown-seconds counter'>
              <span class=\"data\"></span>
              <span class=\"lbl\">";
            // line 105
            echo ($context["sec_name"] ?? null);
            echo "</span>
            </div>
          </div>
        ";
        }
        // line 108
        echo "   
      </div>
      <div class=\"caption\">
          <h4><a href=\"";
        // line 111
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
          <p class=\"d-none\">";
        // line 112
        echo ($context["description"] ?? null);
        echo "</p>
          <div class=\"price\">
              ";
        // line 114
        if ( !($context["special"] ?? null)) {
            // line 115
            echo "                <span class=\"price-new\">";
            echo ($context["price"] ?? null);
            echo "</span>
              ";
        } else {
            // line 117
            echo "                <span class=\"price-old\">";
            echo ($context["price"] ?? null);
            echo "</span> <span class=\"price-new\">";
            echo ($context["special"] ?? null);
            echo "</span> 
              ";
        }
        // line 119
        echo "              ";
        if (($context["tax"] ?? null)) {
            // line 120
            echo "                <span class=\"price-tax\">";
            echo ($context["text_tax"] ?? null);
            echo " ";
            echo ($context["tax"] ?? null);
            echo "</span>
              ";
        }
        // line 122
        echo "            </div>
            <div class=\"btn-cart\">
              <button type=\"submit\" formaction=\"";
        // line 124
        echo ($context["add_to_cart"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\" ";
        if (($context["stock_status"] ?? null)) {
            echo " class=\"sold-out\" disabled";
        }
        echo ">
                <span class=\"lblcart\">";
        // line 125
        echo ($context["button_cart"] ?? null);
        echo "</span>
              </button>
          </div>
          
      </div>
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 130
        echo ($context["product_id"] ?? null);
        echo "\"/>
      <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 131
        echo ($context["minimum"] ?? null);
        echo "\"/>
    </div>
  </div> 
</form>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/productcard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 131,  312 => 130,  304 => 125,  294 => 124,  290 => 122,  282 => 120,  279 => 119,  271 => 117,  265 => 115,  263 => 114,  258 => 112,  252 => 111,  247 => 108,  240 => 105,  233 => 101,  226 => 97,  219 => 93,  214 => 90,  212 => 89,  199 => 81,  176 => 63,  168 => 58,  145 => 38,  141 => 37,  137 => 35,  133 => 33,  124 => 29,  120 => 28,  117 => 27,  113 => 25,  107 => 24,  101 => 20,  95 => 16,  92 => 15,  88 => 14,  85 => 13,  83 => 12,  75 => 11,  72 => 10,  62 => 8,  60 => 7,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/productcard.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\opencart\\catalog\\view\\template\\module\\productcard.twig");
    }
}
