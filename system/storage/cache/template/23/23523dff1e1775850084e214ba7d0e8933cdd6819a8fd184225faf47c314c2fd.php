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

/* extension/opencart/catalog/view/template/payment/cod.twig */
class __TwigTemplate_ff277705949130ea45749bd2eceaf0fd20d5e60211c166c0f60bb59fc12b07e9 extends Template
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
        echo "<div class=\"text-end\">
  <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\">";
        // line 2
        echo ($context["button_confirm"] ?? null);
        echo "</button>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=extension/opencart/payment/cod.confirm&language=";
        // line 9
        echo ($context["language"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function () {
            \$(element).button('loading');
        },
        complete: function () {
            \$(element).button('reset');
        },
        success: function (json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['redirect']) {
                location = json['redirect'];
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/payment/cod.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/payment/cod.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\opencart\\catalog\\view\\template\\payment\\cod.twig");
    }
}
