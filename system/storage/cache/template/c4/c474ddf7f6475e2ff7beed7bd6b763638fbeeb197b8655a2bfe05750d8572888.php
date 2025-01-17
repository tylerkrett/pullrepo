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

/* admin/view/template/report/online.twig */
class __TwigTemplate_89f645985f38cea71fc7661fe3bd9f2cb656951e9c8a7b1149f5c5d4311ecc8a extends Template
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
      <div class=\"float-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-online').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-online\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 20
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label class=\"form-label\">";
        // line 23
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"";
        // line 24
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
            </div>
            <div class=\"mb-3\">
              <label for=\"input-ip\" class=\"form-label\">";
        // line 28
        echo ($context["entry_ip"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_ip\" value=\"\" id=\"input-ip\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" class=\"form-control\"/>
            </div>
            <div class=\"text-end\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 31
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 38
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div id=\"online\" class=\"card-body\">";
        // line 39
        echo ($context["list"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#online').on('click', 'thead a, .pagination a', function (e) {
    e.preventDefault();

    \$('#online').load(this.href);
});

\$('#button-filter, #button-refresh').on('click', function () {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#online').load('index.php?route=report/online.list&user_token=";
        // line 67
        echo ($context["user_token"] ?? null);
        echo "' + url);
});

\$('#input-customer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 73
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
//--></script>
";
        // line 90
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/report/online.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 90,  162 => 73,  153 => 67,  122 => 39,  118 => 38,  108 => 31,  100 => 28,  93 => 24,  89 => 23,  83 => 20,  74 => 13,  63 => 11,  59 => 10,  54 => 8,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/report/online.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\admin\\view\\template\\report\\online.twig");
    }
}
