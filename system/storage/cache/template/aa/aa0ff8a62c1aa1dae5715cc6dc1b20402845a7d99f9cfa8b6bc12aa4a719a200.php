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

/* extension/ishilinklist/admin/view/template/module/ishilinklist.twig */
class __TwigTemplate_21d93dcb2d00084cc009ebdbde8354ad2a7b135a31747504d3443aef7bd96e93 extends Template
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
                <button type=\"submit\" form=\"form-ishilinklist\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save\"></i>
                </button>
                <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\">
                    <i class=\"fas fa-reply\"></i>
                </a>
            </div>
            <h1>";
        // line 13
        echo ($context["heading_title1"] ?? null);
        echo "</h1>
            <ol class=\"breadcrumb\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "                    <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ol>
        </div>
    </div>
  <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-danger alert-dismissible\">
          <i class=\"fa fa-exclamation-circle\"></i> 
          ";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
      </div>
    ";
        }
        // line 29
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 30
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>
        ";
            // line 31
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
      </div>
    ";
        }
        // line 35
        echo "    <div class=\"alert alert-info alert-dismissible\">
      <i class=\"fa fa-info-circle\"></i> 
      ";
        // line 37
        echo ($context["text_view_list"] ?? null);
        echo "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    <div class=\"card\">
      <div class=\"card-header\">
          <i class=\"fas fa-pencil-alt\"></i> ";
        // line 42
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 45
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ishilinklist\" class=\"form-horizontal\">
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 46
        echo ($context["module_id"] ?? null);
        echo "\" />
          <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 48
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 50
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 51
        if (($context["error_name"] ?? null)) {
            // line 52
            echo "                      <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 54
        echo "              </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-title-";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 57);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 60
            echo "                <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 60);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 60);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 60);
            echo "\" /></span>
                  <input type=\"text\" name=\"title[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" />
                  ";
            // line 62
            if ((($__internal_compile_1 = ($context["error_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null)) {
                // line 63
                echo "                    <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_title"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 65
            echo "                </div> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-subtitle-";
        // line 70
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 70);
        echo "\">";
        echo ($context["entry_subtitle"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 73
            echo "                <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 73);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 73);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 73);
            echo "\" /></span>
                  <input type=\"text\" name=\"subtitle[";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "]\" value=\"";
            echo (($__internal_compile_3 = ($context["subtitle"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_subtitle"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-subtitle-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "\" />
                  ";
            // line 75
            if ((($__internal_compile_4 = ($context["error_subtitle"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) {
                // line 76
                echo "                    <div class=\"text-danger\">";
                echo (($__internal_compile_5 = ($context["error_subtitle"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null);
                echo "</div>
                  ";
            }
            // line 78
            echo "                </div> 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </div>
          </div>
          <div class=\"row mb-4\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-width\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 84
        echo ($context["help_image"] ?? null);
        echo "\">
                    ";
        // line 85
        echo ($context["entry_image_size"] ?? null);
        echo "
                </span>
            </label>
            <div class=\"col-sm-5\">
                <input type=\"text\" name=\"width\" value=\"";
        // line 89
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    ";
        // line 90
        if (($context["error_width"] ?? null)) {
            // line 91
            echo "                        <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                    ";
        }
        // line 93
        echo "            </div>
            <div class=\"col-sm-5\">
                <input type=\"text\" name=\"height\" value=\"";
        // line 95
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                ";
        // line 96
        if (($context["error_height"] ?? null)) {
            // line 97
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                ";
        }
        // line 99
        echo "            </div>
        </div>
          <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 102
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-select\">
                      ";
        // line 105
        if (($context["status"] ?? null)) {
            // line 106
            echo "                          <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\">";
            // line 107
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 109
            echo "                          <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                          <option value=\"0\" selected=\"selected\">";
            // line 110
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 112
        echo "                  </select>
              </div>
          </div>
          <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 118
        echo ($context["column_title"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 119
        echo ($context["column_status"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 120
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 121
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            ";
        // line 124
        if (($context["linklist_entries"] ?? null)) {
            echo " 
            <tbody>
              ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["linklist_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                echo " 
              <tr>
                <td class=\"text-left\">";
                // line 128
                echo (($__internal_compile_6 = $context["entry"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["title"] ?? null) : null);
                echo "</td>
                <td class=\"text-left\">";
                // line 129
                echo (($__internal_compile_7 = $context["entry"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["status"] ?? null) : null);
                echo "</td>
                <td class=\"text-right\">";
                // line 130
                echo (($__internal_compile_8 = $context["entry"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_added"] ?? null) : null);
                echo "</td>
                <td class=\"text-right\">
                  <a onclick=\"confirm('";
                // line 132
                echo ($context["text_confirm"] ?? null);
                echo "') ? location.href='";
                echo (($__internal_compile_9 = $context["entry"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["delete"] ?? null) : null);
                echo "' : false;\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                  <a href=\"";
                // line 133
                echo (($__internal_compile_10 = $context["entry"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  </td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo " 
            </tbody>
            ";
        }
        // line 138
        echo " 
            <tfoot>
              ";
        // line 140
        if (($context["add_linklist"] ?? null)) {
            echo " 
              <tr>
                <td class=\"text-end\" colspan=\"5\"><button type=\"button\" onclick=\"location = '";
            // line 142
            echo ($context["add_linklist"] ?? null);
            echo "';\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add_blog"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
              ";
        } else {
            // line 144
            echo " 
              <tr>
                <td class=\"text-center\" colspan=\"5\">";
            // line 146
            echo ($context["text_save_module"] ?? null);
            echo "</td>
              </tr>
              ";
        }
        // line 148
        echo " 
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 156
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishilinklist/admin/view/template/module/ishilinklist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 156,  444 => 148,  438 => 146,  434 => 144,  426 => 142,  421 => 140,  417 => 138,  412 => 136,  400 => 133,  392 => 132,  387 => 130,  383 => 129,  379 => 128,  372 => 126,  367 => 124,  361 => 121,  357 => 120,  353 => 119,  349 => 118,  341 => 112,  336 => 110,  331 => 109,  326 => 107,  321 => 106,  319 => 105,  313 => 102,  308 => 99,  302 => 97,  300 => 96,  294 => 95,  290 => 93,  284 => 91,  282 => 90,  276 => 89,  269 => 85,  265 => 84,  259 => 80,  252 => 78,  246 => 76,  244 => 75,  234 => 74,  225 => 73,  221 => 72,  214 => 70,  209 => 67,  202 => 65,  196 => 63,  194 => 62,  184 => 61,  175 => 60,  171 => 59,  164 => 57,  159 => 54,  153 => 52,  151 => 51,  145 => 50,  140 => 48,  135 => 46,  131 => 45,  125 => 42,  117 => 37,  113 => 35,  106 => 31,  103 => 30,  100 => 29,  93 => 25,  89 => 23,  87 => 22,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishilinklist/admin/view/template/module/ishilinklist.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishilinklist\\admin\\view\\template\\module\\ishilinklist.twig");
    }
}
