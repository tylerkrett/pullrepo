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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_8fb7066442fe6faf40178b8e108866d1ffb41a1cf1c238f977dc5ff8dbb2f14c extends Template
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
        echo "<span class=\"cart-link\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasRight\" aria-controls=\"offcanvasRight\">
      <span class=\"cart-img d-none d-lg-inline-block\">
               <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
          <symbol id=\"shopping-cart\" viewBox=\"0 0 700 700\"><title>shopping-cart</title>
              <path d=\"m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0\"></path>
              <path d=\"m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0\"></path>
              <path d=\"m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0\"></path>
          </symbol> 
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#shopping-cart\" x=\"12%\" y=\"16%\"></use></svg>
      </span>
      <span class=\"cart-img d-lg-none d-md-inline-block\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
          <symbol id=\"cart-responsive\" viewBox=\"0 0 510 510\"><title>cart-responsive</title>
            <path d=\"M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
            v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
            C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
            C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
            M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
            L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
            V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
            H270l22.4,209.2H30z\"></path>
          </symbol>
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#cart-responsive\" x=\"13%\" y=\"15%\"></use></svg>
      </span>
      <span class=\"cart-content\">
        <span class=\"cart-name d-none\">";
        // line 28
        echo ($context["text_cartname"] ?? null);
        echo "</span>
        <span class=\"cart-products-count\">";
        // line 29
        echo ($context["text_items_small"] ?? null);
        echo "</span>
      </span>
  </span>
  <div class=\"cart-dropdown offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasRight\" aria-labelledby=\"offcanvasRightLabel\">
    <div class=\"offcanvas-header\">
      <h3 id=\"offcanvasRightLabel\">";
        // line 34
        echo ($context["text_name"] ?? null);
        echo "</h3>
      <button id=\"btnHinge\" type=\"button\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\">
       <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"   15px\" height=\"15px\" viewBox=\"0 0 16 16\" enable-background=\"new 0 0 16 16\" xml:space=\"preserve\">  <image id=\"image0\" width=\"16\" height=\"16\" x=\"0\" y=\"0\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAQAAADlauupAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZ
                cwAAAGAAAABgAPBrQs8AAAAHdElNRQfmBQUKKyJdcBQmAAAAk0lEQVQ4y2NgoAZQ2n38uMoke3ti
                1Sv/d3BQWnD+PMIARRsbZf8XL5ReODkR0qw4ydZWWePlS+UiR0dUVxBhCE7NxBiipGhjg1czukJk
                Q7CJEW0IyZqRQ1pZ4+VLZY2XL5X/OzjgUsdEkqnEAoq8QFEg4lNIMJ0Qk5BwWkBKUsZqiNLpc+fw
                RRU6UJlkb4+SmSgBAPl3bzbjMveUAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIyLTA1LTA1VDEwOjQz
                OjM0KzAwOjAw2j712QAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMi0wNS0wNVQxMDo0MzozNCswMDow
                MKtjTWUAAAAASUVORK5CYII=\"></image>
                </svg>
      </button>
    </div>
    <div>
      ";
        // line 48
        echo ($context["cart_service"] ?? null);
        echo "    
    </div>
    <div class=\"offcanvas-body clearfix\">
    
    
      ";
        // line 53
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 54
            echo "        <li class=\"cart-scroll\">
          <div class=\"slimScrollDiv\">
            <div class=\"cart-item\">
              ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 58
                echo "                <div style=\"padding: 10px;\" class=alert_div>
                  <div class=\"alert alert-success\">
                      <p>1  x ";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 60);
                echo " </p>
                       <form action=\"";
                // line 61
                echo ($context["voucher_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                      <input type=\"hidden\" name=\"key\" value=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 62);
                echo "\"/>
                      <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 63
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-xmark\"></i></button>
                    </form>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "              <table class=\"table table-sm table-striped\">
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 70
                echo "                  <tr class=\"cart-box\" style=\"border-color: #eeeeee;\">
                    <td class=\"text-start product-image\">";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 71)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 71);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                    echo "\" class=\"img-thumbnail\"/>
                      <div class=\"caption-detail\">
                        <span class=\"text-center\">";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 73);
                    echo " x</span>
                        ";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                    echo "
                        <span class=\"text-start text-price\">";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 75);
                    echo "</span>
                        ";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 76)) {
                        // line 77
                        echo "                          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 77));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 78
                            echo "                            <span class=\"product-detail\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 78);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 78);
                            echo "</span> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 79
                        echo "                        ";
                    }
                    // line 80
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 80)) {
                        // line 81
                        echo "                          <br/>
                          <span class=\"product-detail\">";
                        // line 82
                        echo ($context["text_subscription"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 82);
                        echo "</span>
                        ";
                    }
                    // line 84
                    echo "                      </div>
                    ";
                }
                // line 86
                echo "                    </a>
                  </td>
                    <td class=\"text-end close_button\">
                      <form action=\"";
                // line 89
                echo ($context["product_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                        <input type=\"hidden\" name=\"key\" value=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 90);
                echo "\">
                        <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 91
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger removeCart-dr\">
                          <svg aria-hidden=\"true\" focusable=\"false\" role=\"presentation\" class=\"icon icon-remove\" viewBox=\"0 0 16 16\">          
                            <path d=\"M14 3h-3.53a3.07 3.07 0 00-.6-1.65C9.44.82 8.8.5 8 .5s-1.44.32-1.87.85A3.06 3.06 0 005.53 3H2a.5.5 0 000 1h1.25v10c0 .28.22.5.5.5h8.5a.5.5 0 00.5-.5V4H14a.5.5 0 000-1zM6.91 1.98c.23-.29.58-.48 1.09-.48s.85.19 1.09.48c.2.24.3.6.36 1.02h-2.9c.05-.42.17-.78.36-1.02zm4.84 11.52h-7.5V4h7.5v9.5z\" fill=\"currentColor\"></path>
                            <path d=\"M6.55 5.25a.5.5 0 00-.5.5v6a.5.5 0 001 0v-6a.5.5 0 00-.5-.5zM9.45 5.25a.5.5 0 00-.5.5v6a.5.5 0 001 0v-6a.5.5 0 00-.5-.5z\" fill=\"currentColor\"></path>
                          </svg>
                        </button>
                        <script>
                          \$(\".removeCart-dr\").click(function(){
                            \$(\"body\").css(\"overflow:show\");
                          });
                        </script>
                      </form>
                    </td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "              </table>
            </div>
          </div>
        </li> 
    </div>
    <div class=\"sticky\">
        <div class=\"table billing-info\">
          ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 114
                echo "          <div class=\"border-remove\">
            <div class=\"text-start\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 115);
                echo "</div>
            <div class=\"text-end value\">";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 116);
                echo "</div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "        </div>
        <div class=\"text-center cart-btn\">
          <a href=\"";
            // line 121
            echo ($context["cart"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-default btn-cartblock\">";
            echo ($context["text_carts"] ?? null);
            echo "</button></a>&nbsp;
          <a href=\"";
            // line 122
            echo ($context["checkout"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary btn-cartblock\"> ";
            echo ($context["text_checkout"] ?? null);
            echo "</button></a>
        </div>
    </div>
      ";
        } else {
            // line 126
            echo "    <div class=\"cart-detail\">
      <p class=\"empty text-left\">";
            // line 127
            echo ($context["text_no_results"] ?? null);
            echo "</p>
    </div>
      ";
        }
        // line 130
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 130,  302 => 127,  299 => 126,  290 => 122,  284 => 121,  280 => 119,  271 => 116,  267 => 115,  264 => 114,  260 => 113,  251 => 106,  230 => 91,  226 => 90,  220 => 89,  215 => 86,  211 => 84,  204 => 82,  201 => 81,  198 => 80,  195 => 79,  185 => 78,  180 => 77,  178 => 76,  174 => 75,  170 => 74,  166 => 73,  153 => 71,  150 => 70,  146 => 69,  143 => 68,  132 => 63,  128 => 62,  122 => 61,  118 => 60,  114 => 58,  110 => 57,  105 => 54,  103 => 53,  95 => 48,  78 => 34,  70 => 29,  66 => 28,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cart.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\catalog\\view\\template\\common\\cart.twig");
    }
}
