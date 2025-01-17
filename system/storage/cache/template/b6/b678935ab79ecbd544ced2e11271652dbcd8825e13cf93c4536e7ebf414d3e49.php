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

/* catalog/view/template/account/order_info.twig */
class __TwigTemplate_2d073da92a35747320d81605971301f0a89ebcceb4aa40ff919c3f8b4fbcf9c2 extends Template
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
<div id=\"account-order\" class=\"container\">
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col-12 col-lg-9\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <legend>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</legend>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-start\" colspan=\"2\">";
        // line 17
        echo ($context["text_order_detail"] ?? null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-start\" style=\"width: 50%;\">";
        // line 22
        if (($context["invoice_no"] ?? null)) {
            echo " <b class=\"bold\">";
            echo ($context["text_invoice_no"] ?? null);
            echo "</b> ";
            echo ($context["invoice_no"] ?? null);
            echo "
                <br/>
              ";
        }
        // line 24
        echo " <b class=\"bold\">";
        echo ($context["text_order_id"] ?? null);
        echo "</b> #";
        echo ($context["order_id"] ?? null);
        echo "
              <br/>
              <b class=\"bold\">";
        // line 26
        echo ($context["text_date_added"] ?? null);
        echo "</b> ";
        echo ($context["date_added"] ?? null);
        echo "</td>
            <td class=\"text-start\" style=\"width: 50%;\">";
        // line 27
        if (($context["payment_method"] ?? null)) {
            echo " <b class=\"bold\">";
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo ($context["payment_method"] ?? null);
            echo "
                <br/>
              ";
        }
        // line 30
        echo "              ";
        if (($context["shipping_method"] ?? null)) {
            echo " <b class=\"bold\">";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b> ";
            echo ($context["shipping_method"] ?? null);
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-start\" style=\"width: 50%; vertical-align: top;\">";
        // line 37
        echo ($context["text_payment_address"] ?? null);
        echo "</td>
            ";
        // line 38
        if (($context["shipping_address"] ?? null)) {
            // line 39
            echo "              <td class=\"text-start\" style=\"width: 50%; vertical-align: top;\">";
            echo ($context["text_shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 40
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-start\">";
        // line 44
        echo ($context["payment_address"] ?? null);
        echo "</td>
            ";
        // line 45
        if (($context["shipping_address"] ?? null)) {
            // line 46
            echo "              <td class=\"text-start\">";
            echo ($context["shipping_address"] ?? null);
            echo "</td>
            ";
        }
        // line 47
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start bold\">";
        // line 54
        echo ($context["column_name"] ?? null);
        echo "</td>
              <td class=\"text-start bold\">";
        // line 55
        echo ($context["column_model"] ?? null);
        echo "</td>
              <td class=\"text-start bold\">";
        // line 56
        echo ($context["column_quantity"] ?? null);
        echo "</td>
              <td class=\"text-start bold\">";
        // line 57
        echo ($context["column_price"] ?? null);
        echo "</td>
              <td class=\"text-start bold\">";
        // line 58
        echo ($context["column_total"] ?? null);
        echo "</td>
              ";
        // line 59
        if (($context["products"] ?? null)) {
            // line 60
            echo "                <td style=\"width: 20px;\"></td>
              ";
        }
        // line 61
        echo " </tr>
          </thead>
          <tbody>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 65
            echo "              <tr>
                <td class=\"text-start\">";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
            echo "
                  ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 68
                echo "                    <br/>
                    &nbsp;
                    <small> - ";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 70);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 70);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-start\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 71);
            echo "</td>
                <td class=\"text-start\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 72);
            echo "</td>
                <td class=\"text-start\">";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73);
            echo "</td>
                <td class=\"text-start\">";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 74);
            echo "</td>
                <td class=\"text-start\" style=\"white-space: nowrap;\">";
            // line 75
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 75)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 75);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_reorder"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-cart-shopping\"></i></a> ";
            }
            echo " <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 75);
            echo "\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_return"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-reply\"></i></a></td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 79
            echo "              <tr>
                <td class=\"text-start\">";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 80);
            echo "</td>
                <td class=\"text-start\"></td>
                <td class=\"text-start\">1</td>
                <td class=\"text-start\">";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 83);
            echo "</td>
                <td class=\"text-start\">";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 84);
            echo "</td>
                ";
            // line 85
            if (($context["products"] ?? null)) {
                // line 86
                echo "                  <td></td>
                ";
            }
            // line 87
            echo " </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "          </tbody>
          <tfoot>
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 92
            echo "              <tr>
                <td colspan=\"3\"></td>
                <td class=\"text-start\"><b>";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 94);
            echo "</b></td>
                <td class=\"text-start\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 95);
            echo "</td>
                ";
            // line 96
            if (($context["products"] ?? null)) {
                // line 97
                echo "                  <td></td>
                ";
            }
            // line 98
            echo " </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "          </tfoot>
        </table>
      </div>
      ";
        // line 103
        if (($context["comment"] ?? null)) {
            // line 104
            echo "        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start\">";
            // line 107
            echo ($context["text_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-start\">";
            // line 112
            echo ($context["comment"] ?? null);
            echo "</td>
            </tr>
          </tbody>
        </table>
      ";
        }
        // line 117
        echo "      ";
        if (($context["histories"] ?? null)) {
            // line 118
            echo "        <h3>";
            echo ($context["text_history"] ?? null);
            echo "</h3>
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-start bold\">";
            // line 122
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td class=\"text-start bold\">";
            // line 123
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-start bold\">";
            // line 124
            echo ($context["column_comment"] ?? null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            ";
            // line 128
            if (($context["histories"] ?? null)) {
                // line 129
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 130
                    echo "                <tr>
                  <td class=\"text-start\">";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 131);
                    echo "</td>
                  <td class=\"text-start\">";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 132);
                    echo "</td>
                  <td class=\"text-start\">";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 133);
                    echo "</td>
                </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "            ";
            } else {
                // line 137
                echo "              <tr>
                <td colspan=\"3\" class=\"text-center\">";
                // line 138
                echo ($context["text_no_results"] ?? null);
                echo "</td>
              </tr>
            ";
            }
            // line 141
            echo "          </tbody>
        </table>
      ";
        }
        // line 144
        echo "      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 145
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 147
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 148
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 150
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 150,  456 => 148,  452 => 147,  445 => 145,  442 => 144,  437 => 141,  431 => 138,  428 => 137,  425 => 136,  416 => 133,  412 => 132,  408 => 131,  405 => 130,  400 => 129,  398 => 128,  391 => 124,  387 => 123,  383 => 122,  375 => 118,  372 => 117,  364 => 112,  356 => 107,  351 => 104,  349 => 103,  344 => 100,  337 => 98,  333 => 97,  331 => 96,  327 => 95,  323 => 94,  319 => 92,  315 => 91,  311 => 89,  304 => 87,  300 => 86,  298 => 85,  294 => 84,  290 => 83,  284 => 80,  281 => 79,  276 => 78,  257 => 75,  253 => 74,  249 => 73,  245 => 72,  241 => 71,  230 => 70,  226 => 68,  222 => 67,  218 => 66,  215 => 65,  211 => 64,  206 => 61,  202 => 60,  200 => 59,  196 => 58,  192 => 57,  188 => 56,  184 => 55,  180 => 54,  171 => 47,  165 => 46,  163 => 45,  159 => 44,  153 => 40,  147 => 39,  145 => 38,  141 => 37,  125 => 30,  115 => 27,  109 => 26,  101 => 24,  91 => 22,  83 => 17,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/order_info.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\account\\order_info.twig");
    }
}
