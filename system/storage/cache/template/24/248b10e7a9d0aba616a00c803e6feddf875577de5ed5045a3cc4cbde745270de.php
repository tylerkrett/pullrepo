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

/* catalog/view/template/account/reward.twig */
class __TwigTemplate_d6b6c5dfc7c14bd1ca859e27ac845bdb3f3072ba0f697f0e7a2e9ed372e25cc2 extends Template
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
        echo "  ";
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
<div id=\"account-reward\" class=\"container\">
  <div class=\"row row-responsive\">";
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
        echo ($context["text_reward"] ?? null);
        echo "</legend>
      <p>";
        // line 14
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <th class=\"text-start\">";
        // line 19
        echo ($context["column_date_added"] ?? null);
        echo "</th>
              <th class=\"text-start\">";
        // line 20
        echo ($context["column_description"] ?? null);
        echo "</th>
              <th class=\"text-end\">";
        // line 21
        echo ($context["column_points"] ?? null);
        echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 25
        if (($context["rewards"] ?? null)) {
            // line 26
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 27
                echo "                <tr>
                  <td class=\"text-start\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 28);
                echo "</td>
                  <td class=\"text-start\">";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["reward"], "order_id", [], "any", false, false, false, 29)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "href", [], "any", false, false, false, 29);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 29);
                    echo "</a> ";
                } else {
                    // line 30
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 30);
                    echo "
                    ";
                }
                // line 31
                echo "</td>
                  <td class=\"text-end\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 32);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        } else {
            // line 36
            echo "              <tr>
                <td class=\"text-center\" colspan=\"3\"><p>";
            // line 37
            echo ($context["text_no_results"] ?? null);
            echo "</p></td>
              </tr>
            ";
        }
        // line 40
        echo "          </tbody>
        </table>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-sm-6 text-start\">";
        // line 44
        echo ($context["pagination"] ?? null);
        echo "</div>
        <div class=\"col-sm-6 text-end\">";
        // line 45
        echo ($context["results"] ?? null);
        echo "</div>
      </div>
      <div class=\"d-inline-block pt-2 pd-2 w-100\">
        <div class=\"float-end\"><a href=\"";
        // line 48
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 50
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 51
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 53
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 53,  185 => 51,  181 => 50,  174 => 48,  168 => 45,  164 => 44,  158 => 40,  152 => 37,  149 => 36,  146 => 35,  137 => 32,  134 => 31,  128 => 30,  120 => 29,  116 => 28,  113 => 27,  108 => 26,  106 => 25,  99 => 21,  95 => 20,  91 => 19,  81 => 14,  77 => 13,  72 => 12,  68 => 11,  63 => 8,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/reward.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\account\\reward.twig");
    }
}
