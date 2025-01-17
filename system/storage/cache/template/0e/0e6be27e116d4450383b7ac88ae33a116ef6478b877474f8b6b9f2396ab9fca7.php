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

/* catalog/view/template/account/download.twig */
class __TwigTemplate_858b52a4dcc015101949f23e41ca9f4390b529291a994c3a2197bd13ed6c076b extends Template
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
  <h1 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h1>
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
<div id=\"account-download\" class=\"container\">
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 12
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <legend>";
        // line 13
        echo ($context["text_download"] ?? null);
        echo "</legend>
      ";
        // line 14
        if (($context["downloads"] ?? null)) {
            // line 15
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-end\">";
            // line 19
            echo ($context["column_order_id"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 20
            echo ($context["column_name"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 21
            echo ($context["column_size"] ?? null);
            echo "</td>
                <td class=\"text-start\">";
            // line 22
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 28
                echo "                <tr>
                  <td class=\"text-end\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["download"], "order_id", [], "any", false, false, false, 29);
                echo "</td>
                  <td class=\"text-start\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 30);
                echo "</td>
                  <td class=\"text-start\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["download"], "size", [], "any", false, false, false, 31);
                echo "</td>
                  <td class=\"text-start\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 32);
                echo "</td>
                  <td><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["download"], "href", [], "any", false, false, false, 33);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_download"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-cloud-arrow-down\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 40
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 41
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 44
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 46
        echo "      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 47
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 49
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 50
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 52
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/download.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 52,  178 => 50,  174 => 49,  167 => 47,  164 => 46,  158 => 44,  152 => 41,  148 => 40,  142 => 36,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  112 => 28,  108 => 27,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  82 => 15,  80 => 14,  76 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/download.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\account\\download.twig");
    }
}
