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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_b74bd9c8ee5d7379383f245b539b2e35731649400e235e7d04b397793bd3e510 extends Template
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
        echo "<div id=\"search\">
    <span class=\"search-tag\">";
        // line 2
        echo ($context["serch_product"] ?? null);
        echo "</span>
    <input id=\"ajax-search-text\" type=\"text\" name=\"search\" value=\"";
        // line 3
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\">
    <div class=\"ajaxishi-search\" style=\"display: none;\"><ul></ul></div>
    <span class=\"input-group-btn\">
        <button id=\"ajax-search-btn\" type=\"button\" data-lang=\"";
        // line 6
        echo ($context["language"] ?? null);
        echo "\" data-lang=\"";
        echo ($context["language"] ?? null);
        echo "\" class=\"btn btn-light btn-lg\"><i class=\"fa fa-search\"></i></button>
    </span>
</div>
<script>
    (function() {
        document.getElementById('ajax-search-text').addEventListener('keypress', function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                document.getElementById('ajax-search-btn').click();
            }
        });
    }());
</script>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/search.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\catalog\\view\\template\\common\\search.twig");
    }
}
