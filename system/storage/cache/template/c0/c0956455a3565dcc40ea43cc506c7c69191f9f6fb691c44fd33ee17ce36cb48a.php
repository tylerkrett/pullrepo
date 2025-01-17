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

/* extension/opencart/admin/view/template/report/customer_activity.twig */
class __TwigTemplate_d33eb3bc9a8b473b05b5e36b4f3a59bb7dbec6c9a7efcd635f66f21922645b94 extends Template
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
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 4
        echo ($context["text_filter"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"input-customer\" class=\"form-label\">";
        // line 7
        echo ($context["entry_customer"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 8
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
          <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"form-label\">";
        // line 12
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
          <div class=\"input-group\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 14
        echo ($context["filter_date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" id=\"input-date-start\" class=\"form-control date\"/>
            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"form-label\">";
        // line 19
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
          <div class=\"input-group\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 21
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" id=\"input-date-end\" class=\"form-control date\"/>
            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-ip\" class=\"form-label\">";
        // line 26
        echo ($context["entry_ip"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_ip\" value=\"";
        echo ($context["filter_ip"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" id=\"input-ip\" class=\"form-control\"/>
        </div>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 29
        echo ($context["button_filter"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col col-lg-9 col-md-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 36
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div id=\"customer-activity\" class=\"card-body\">";
        // line 37
        echo ($context["list"] ?? null);
        echo "</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#product-viewed').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#product-viewed').load(this.href);
});

\$('#button-filter').on('click', function () {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#customer-activity').load('index.php?route=extension/opencart/report/customer_activity.list&user_token=";
        // line 75
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 81
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
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/report/customer_activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 81,  156 => 75,  115 => 37,  111 => 36,  101 => 29,  91 => 26,  81 => 21,  76 => 19,  66 => 14,  61 => 12,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/report/customer_activity.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\extension\\opencart\\admin\\view\\template\\report\\customer_activity.twig");
    }
}
