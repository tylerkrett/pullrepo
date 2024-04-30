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

/* admin/view/template/sale/order.twig */
class __TwigTemplate_13ec832b8059031a372006f5ccf06096a9c9c558d0f6970912daa675e8a6eaa8 extends Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-print\"></i></button>
        <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa-solid fa-truck\"></i></button>
        <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"button\" id=\"button-delete\" data-bs-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-order\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 24
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"input-order-id\" class=\"form-label\">";
        // line 27
        echo ($context["entry_order_id"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_order_id\" value=\"";
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 30
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 31
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-store\" class=\"form-label\">";
        // line 35
        echo ($context["entry_store"] ?? null);
        echo "</label> <select name=\"filter_store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"\"></option>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 38
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 38);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 38) == ($context["filter_store_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 38);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-order-status\" class=\"form-label\">";
        // line 43
        echo ($context["entry_order_status"] ?? null);
        echo "</label> <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                <option value=\"\"></option>
                <option value=\"0\"";
        // line 45
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_missing"] ?? null);
        echo "</option>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 47
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 47);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 47) == ($context["filter_order_status_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 47);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "              </select>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-total\" class=\"form-label\">";
        // line 52
        echo ($context["entry_total"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_total\" value=\"";
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-from\" class=\"form-label\">";
        // line 55
        echo ($context["entry_date_from"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_from\" value=\"";
        // line 57
        echo ($context["filter_date_from"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_from"] ?? null);
        echo "\" id=\"input-date-from\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-date-to\" class=\"form-label\">";
        // line 62
        echo ($context["entry_date_to"] ?? null);
        echo "</label>
              <div class=\"input-group\">
                <input type=\"text\" name=\"filter_date_to\" value=\"";
        // line 64
        echo ($context["filter_date_to"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_to"] ?? null);
        echo "\" id=\"input-date-to\" class=\"form-control date\"/>
                <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
              </div>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 69
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 76
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"order\" class=\"card-body\">";
        // line 77
        echo ($context["list"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#order').on('click', 'thead a, .pagination a', function (e) {
    e.preventDefault();

    \$('#order').load(this.href);
});

\$('#button-filter').on('click', function () {
    url = '';

    var filter_order_id = \$('#input-order-id').val();

    if (filter_order_id) {
        url += '&filter_order_id=' + filter_order_id;
    }

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_store_id = \$('#input-store').val();

    if (filter_store_id !== '') {
        url += '&filter_store_id=' + filter_store_id;
    }

    var filter_order_status_id = \$('#input-order-status').val();

    if (filter_order_status_id !== '') {
        url += '&filter_order_status_id=' + filter_order_status_id;
    }

    var filter_total = \$('#input-total').val();

    if (filter_total) {
        url += '&filter_total=' + encodeURIComponent(filter_total);
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    \$('#order').load('index.php?route=sale/order.list&user_token=";
        // line 135
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 141
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-customer').val(item['label']);
    }
});

\$('input[name^=\\'selected\\']').on('change', function () {
    \$('#button-shipping, #button-invoice').prop('disabled', true);

    var selected = \$('input[name^=\\'selected\\']:checked');

    if (selected.length) {
        \$('#button-invoice').prop('disabled', false);
    }

    for (i = 0; i < selected.length; i++) {
        if (\$(selected[i]).parent().find('input[name^=\\'shipping_method\\']').val()) {
            \$('#button-shipping').prop('disabled', false);

            break;
        }
    }
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('#button-delete').on('click', function (e) {
    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 183
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        \$.ajax({
            url: 'index.php?route=sale/order.call&user_token=";
        // line 185
        echo ($context["user_token"] ?? null);
        echo "&action=sale/order.delete',
            type: 'post',
            data: \$('#form-order').serialize(),
            dataType: 'json',
            beforeSend: function () {
                \$(element).button('loading');
            },
            complete: function () {
                \$(element).button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#order').load(\$('#form-order').attr('data-load'));
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 215
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/sale/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 215,  371 => 185,  366 => 183,  321 => 141,  312 => 135,  251 => 77,  247 => 76,  237 => 69,  227 => 64,  222 => 62,  212 => 57,  207 => 55,  197 => 52,  192 => 49,  177 => 47,  173 => 46,  165 => 45,  160 => 43,  155 => 40,  140 => 38,  136 => 37,  131 => 35,  122 => 31,  118 => 30,  108 => 27,  102 => 24,  93 => 17,  82 => 15,  78 => 14,  73 => 12,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/sale/order.twig", "C:\\xampp\\htdocs\\OPC003L01_new\\admin\\view\\template\\sale\\order.twig");
    }
}
