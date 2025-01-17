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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_fa40b3ec8c752fbbc86dca7ea5830f28f1439d67b3818cf90b4d567a69a28adb extends Template
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
            echo "    <li class=\"breadcrumb-item\"><a href=\"";
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
<div id=\"account-login\" class=\"container\">
  ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 14
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 17
        echo "  <div class=\"wrapper_container row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 18
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-lg-6 col-sm-12\">
          <div class=\"card mb-3\">
            <div class=\"card-body\">
              <h2>";
        // line 23
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
              <p><strong>";
        // line 24
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
              <p class=\"mb-4\">";
        // line 25
        echo ($context["text_register_account"] ?? null);
        echo "</p>
              <a href=\"";
        // line 26
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
        </div>
        <div class=\"col-lg-6 col-sm-12\">
          <div class=\"card mb-3\">
            <div class=\"card-body\">
              <form id=\"form-login\" action=\"";
        // line 32
        echo ($context["login"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
                <h2>";
        // line 33
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
                <p><strong>";
        // line 34
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
                <div class=\"mb-3\">
                  <label for=\"input-email\" class=\"col-form-label\">";
        // line 36
        echo ($context["entry_email"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"email\" value=\"";
        // line 37
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
                <div class=\"mb-4\">
                  <label for=\"input-password\" class=\"col-form-label\">";
        // line 40
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 41
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control mb-3\"/>
                  <a href=\"";
        // line 42
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"forgotten-link\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 44
        echo ($context["button_login"] ?? null);
        echo "</button>
                ";
        // line 45
        if (($context["redirect"] ?? null)) {
            // line 46
            echo "                  <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                ";
        }
        // line 48
        echo "              </form>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 53
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 54
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 56,  186 => 54,  182 => 53,  175 => 48,  169 => 46,  167 => 45,  163 => 44,  156 => 42,  150 => 41,  146 => 40,  138 => 37,  134 => 36,  129 => 34,  125 => 33,  121 => 32,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  89 => 18,  84 => 17,  78 => 15,  75 => 14,  69 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/login.twig", "C:\\xampp\\htdocs\\OPC003L01\\catalog\\view\\template\\account\\login.twig");
    }
}
