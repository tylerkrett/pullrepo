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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_082a94f56d3637b118033e5ecb0911dc97a49626d2956fcc83400b30073633aa extends Template
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
<div id=\"checkout-cart\" class=\"container\">
  ";
        // line 11
        if (($context["attention"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
            echo ($context["attention"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 14
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 17
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 20
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 21
        echo ($context["content_top"] ?? null);
        echo "
      <legend>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</legend>
      <div id=\"shopping-cart\">";
        // line 23
        echo ($context["list"] ?? null);
        echo "</div>
      ";
        // line 24
        if (($context["modules"] ?? null)) {
            // line 25
            echo "      <div class=\"col-md-12\">
        <h2>";
            // line 26
            echo ($context["text_next"] ?? null);
            echo "</h2>
        <p>";
            // line 27
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
      </div>  
        <div id=\"accordion\" class=\"accordion\">
          ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 31
                echo "            ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </div>

      ";
        }
        // line 36
        echo "      <br/>
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-start\"><a href=\"";
        // line 38
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"float-end\"><a href=\"";
        // line 39
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 41
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 42
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('submit', 'form', function (e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function () {
            \$(button).prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$(button).prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // if (json['success']) {
            //     \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            // }

            \$('#shopping-cart').load('index.php?route=checkout/cart|list&language=";
        // line 82
        echo ($context["language"] ?? null);
        echo "', {}, function () {
                \$('#header-cart').load('index.php?route=common/cart|info&language=";
        // line 83
        echo ($context["language"] ?? null);
        echo "');
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 92
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 92,  211 => 83,  207 => 82,  164 => 42,  160 => 41,  153 => 39,  147 => 38,  143 => 36,  138 => 33,  129 => 31,  125 => 30,  119 => 27,  115 => 26,  112 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  93 => 20,  87 => 18,  84 => 17,  78 => 15,  75 => 14,  69 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/cart.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\catalog\\view\\template\\checkout\\cart.twig");
    }
}
