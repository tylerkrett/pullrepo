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

/* extension/ishisocialfollowblock/admin/view/template/module/ishisocialfollow.twig */
class __TwigTemplate_657d1108f13ab496186666d4d18af39e245f31ce3a7c8a8b29bc72ab89a85348 extends Template
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
          <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-reply\"></i></a>
        </div>
        <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ol class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"card panel-default\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i>";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
         
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-column\">";
        // line 40
        echo ($context["entry_column"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"column\" id=\"input-column\" class=\"form-control\">
                <option value=\"1\" ";
        // line 43
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                <option value=\"2\" ";
        // line 44
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                <option value=\"3\" ";
        // line 45
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                <option value=\"4\" ";
        // line 46
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
                <option value=\"6\" ";
        // line 47
        if ((($context["column"] ?? null) == 6)) {
            echo " selected=selected ";
        }
        echo ">5</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 52
        echo ($context["entry_facebook"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"facebook\" value=\"";
        // line 54
        echo ($context["facebook"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_facebook"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 55
        if (($context["error_name"] ?? null)) {
            // line 56
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 61
        echo ($context["entry_twitter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"twitter\" value=\"";
        // line 63
        echo ($context["twitter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_twitter"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 64
        if (($context["error_name"] ?? null)) {
            // line 65
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 67
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 70
        echo ($context["entry_youtube"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"youtube\" value=\"";
        // line 72
        echo ($context["youtube"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_youtube"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 73
        if (($context["error_name"] ?? null)) {
            // line 74
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 76
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 79
        echo ($context["entry_gplus"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"gplus\" value=\"";
        // line 81
        echo ($context["gplus"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gplus"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 82
        if (($context["error_name"] ?? null)) {
            // line 83
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 85
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 88
        echo ($context["entry_rss"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"rss\" value=\"";
        // line 90
        echo ($context["rss"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rss"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 91
        if (($context["error_name"] ?? null)) {
            // line 92
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 94
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 97
        echo ($context["entry_pinterest"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"pinterest\" value=\"";
        // line 99
        echo ($context["pinterest"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pinterest"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 100
        if (($context["error_name"] ?? null)) {
            // line 101
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 103
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 106
        echo ($context["entry_vimeo"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"vimeo\" value=\"";
        // line 108
        echo ($context["vimeo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_vimeo"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 109
        if (($context["error_name"] ?? null)) {
            // line 110
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 112
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 115
        echo ($context["entry_instagram"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"instagram\" value=\"";
        // line 117
        echo ($context["instagram"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_instagram"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 118
        if (($context["error_name"] ?? null)) {
            // line 119
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 121
        echo "            </div>
          </div>

          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 125
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 128
        if (($context["status"] ?? null)) {
            // line 129
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 130
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 132
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 133
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 135
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 143
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/ishisocialfollowblock/admin/view/template/module/ishisocialfollow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 143,  394 => 135,  389 => 133,  384 => 132,  379 => 130,  374 => 129,  372 => 128,  366 => 125,  360 => 121,  354 => 119,  352 => 118,  346 => 117,  341 => 115,  336 => 112,  330 => 110,  328 => 109,  322 => 108,  317 => 106,  312 => 103,  306 => 101,  304 => 100,  298 => 99,  293 => 97,  288 => 94,  282 => 92,  280 => 91,  274 => 90,  269 => 88,  264 => 85,  258 => 83,  256 => 82,  250 => 81,  245 => 79,  240 => 76,  234 => 74,  232 => 73,  226 => 72,  221 => 70,  216 => 67,  210 => 65,  208 => 64,  202 => 63,  197 => 61,  192 => 58,  186 => 56,  184 => 55,  178 => 54,  173 => 52,  163 => 47,  157 => 46,  151 => 45,  145 => 44,  139 => 43,  133 => 40,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishisocialfollowblock/admin/view/template/module/ishisocialfollow.twig", "C:\\xampp\\htdocs\\OPC010\\extension\\ishisocialfollowblock\\admin\\view\\template\\module\\ishisocialfollow.twig");
    }
}
