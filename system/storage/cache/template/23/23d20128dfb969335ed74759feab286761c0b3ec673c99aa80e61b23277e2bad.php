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

/* extension/language_german/admin/view/template/language/german.twig */
class __TwigTemplate_68d4c0d1b9da3d3924443fad284592acee57339af077f8b75bbd4a1f7f65b789 extends Template
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
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-language\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <legend>";
        // line 20
        echo ($context["text_headline"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <div class=\"col-sm-10\">
            <p>";
        // line 23
        echo ($context["text_translation"] ?? null);
        echo ": ";
        echo ($context["text_translator"] ?? null);
        echo "<br>
               ";
        // line 24
        echo ($context["text_version"] ?? null);
        echo ": ";
        echo ($context["language_german_version"] ?? null);
        echo "</p>
            </div>
          </div>
          <div class=\"col-sm-10\">
            <p><b>";
        // line 28
        echo ($context["text_frontend"] ?? null);
        echo "</b></p>
          </div>
        <form id=\"form-language\" action=\"";
        // line 30
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          ";
        // line 31
        if (($context["language_de_status"] ?? null)) {
            // line 32
            echo "          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
            // line 33
            echo ($context["entry_language_de_de_name"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"checkbox\" name=\"language_german_de_de_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
            // line 36
            if (($context["language_german_de_de_status"] ?? null)) {
                echo " checked";
            }
            echo "/>
              </div>
            </div>
          </div>
          ";
        }
        // line 41
        echo "          ";
        if (($context["language_at_status"] ?? null)) {
            // line 42
            echo "          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
            // line 43
            echo ($context["entry_language_de_at_name"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"checkbox\" name=\"language_german_de_at_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
            // line 46
            if (($context["language_german_de_at_status"] ?? null)) {
                echo " checked";
            }
            echo "/>
              </div>
            </div>
          </div>
          ";
        }
        // line 51
        echo "          ";
        if (($context["language_ch_status"] ?? null)) {
            // line 52
            echo "          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
            // line 53
            echo ($context["entry_language_de_ch_name"] ?? null);
            echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"checkbox\" name=\"language_german_de_ch_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
            // line 56
            if (($context["language_german_de_ch_status"] ?? null)) {
                echo " checked";
            }
            echo "/>
              </div>
            </div>
          </div>
          ";
        }
        // line 61
        echo "          <div class=\"row mb-3\">
            <label for=\"input-status\" class=\"col-sm-2 col-form-label\">";
        // line 62
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"language_german_status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"language_german_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 66
        if (($context["language_german_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <div class=\"col-sm-10\">
            <p>";
        // line 72
        echo ($context["text_improfment"] ?? null);
        echo "</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 80
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/language_german/admin/view/template/language/german.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 80,  204 => 72,  193 => 66,  186 => 62,  183 => 61,  173 => 56,  167 => 53,  164 => 52,  161 => 51,  151 => 46,  145 => 43,  142 => 42,  139 => 41,  129 => 36,  123 => 33,  120 => 32,  118 => 31,  114 => 30,  109 => 28,  100 => 24,  94 => 23,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/language_german/admin/view/template/language/german.twig", "C:\\xampp\\htdocs\\OPC125L01_new\\extension\\language_german\\admin\\view\\template\\language\\german.twig");
    }
}
