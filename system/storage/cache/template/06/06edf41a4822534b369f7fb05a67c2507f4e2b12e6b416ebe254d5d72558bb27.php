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

/* admin/view/template/report/online_list.twig */
class __TwigTemplate_a61e7108326b823e3de35844a551f88275a8a7d47c067f8fd2661ae60f1b03ea extends Template
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
        echo "<div class=\"table-responsive\">
\t<table class=\"table table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-start\">";
        // line 5
        echo ($context["column_ip"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-start\">";
        // line 6
        echo ($context["column_customer"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-start\">";
        // line 7
        echo ($context["column_url"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-start\">";
        // line 8
        echo ($context["column_referer"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-start\">";
        // line 9
        echo ($context["column_date_added"] ?? null);
        echo "</td>
\t\t\t\t<td class=\"text-end\">";
        // line 10
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 14
        if (($context["customers"] ?? null)) {
            // line 15
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 16
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-start\"><a href=\"https://whatismyipaddress.com/ip/";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 17);
                echo "\" rel=\"noreferrer\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 17);
                echo "</a></td>
\t\t\t\t\t\t<td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 18);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-start\"><a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "url", [], "any", false, false, false, 19);
                echo "\" rel=\"noreferrer\" target=\"_blank\">";
                echo twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "url", [], "any", false, false, false, 19), "", 30), "<br/>");
                echo "</a></td>
\t\t\t\t\t\t<td class=\"text-start\">";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 20)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 20);
                    echo "\" rel=\"noreferrer\" target=\"_blank\">";
                    echo twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 20), "", 30), "<br/>");
                    echo "</a>";
                }
                echo "</td>
\t\t\t\t\t\t<td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 21);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-end\">";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 22)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 22);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>";
                } else {
                    echo "<button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa-solid fa-pencil\"></i></button>";
                }
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">";
            // line 27
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 30
        echo "\t\t</tbody>
\t</table>
</div>
<div class=\"row\">
\t<div class=\"col-sm-6 text-start\">";
        // line 34
        echo ($context["pagination"] ?? null);
        echo "</div>
\t<div class=\"col-sm-6 text-end\">";
        // line 35
        echo ($context["results"] ?? null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/report/online_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 35,  147 => 34,  141 => 30,  135 => 27,  132 => 26,  129 => 25,  110 => 22,  106 => 21,  96 => 20,  90 => 19,  86 => 18,  80 => 17,  77 => 16,  72 => 15,  70 => 14,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/report/online_list.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\admin\\view\\template\\report\\online_list.twig");
    }
}
