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

/* admin/view/template/customer/custom_field_list.twig */
class __TwigTemplate_4d59771d1c7f06d6e95c306e71fb5eeeec37cfc39b8400a330701866f3ce9f35 extends Template
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
        echo "<form id=\"form-custom-field\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#custom-field\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-bordered table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "cfd.name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_location"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "cf.location")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_location"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_type"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "cf.type")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_type"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 10
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "cf.status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end d-none d-lg-table-cell\"><a href=\"";
        // line 11
        echo ($context["sort_sort_order"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "cf.sort_order")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_sort_order"] ?? null);
        echo "</a></td>
\t\t\t\t\t<td class=\"text-end\">";
        // line 12
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 16
        if (($context["custom_fields"] ?? null)) {
            // line 17
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 18
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 19);
                echo "\" class=\"form-check-input\"/></td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 20);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 21);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 22);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-start\">";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "status", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</span>";
                } else {
                    echo "<span class=\"badge bg-danger\">";
                    echo ($context["text_disabled"] ?? null);
                    echo "</span>";
                }
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end d-none d-lg-table-cell\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 25);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"text-end\"><a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "edit", [], "any", false, false, false, 26);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"7\">";
            // line 31
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 text-start\">";
        // line 38
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t<div class=\"col-sm-6 text-end\">";
        // line 39
        echo ($context["results"] ?? null);
        echo "</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/customer/custom_field_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 39,  186 => 38,  180 => 34,  174 => 31,  171 => 30,  168 => 29,  157 => 26,  153 => 25,  142 => 24,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  121 => 18,  116 => 17,  114 => 16,  107 => 12,  95 => 11,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/customer/custom_field_list.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\admin\\view\\template\\customer\\custom_field_list.twig");
    }
}
