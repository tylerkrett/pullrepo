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

/* extension/blogger/catalog/view/template/information/blogger.twig */
class __TwigTemplate_13f5ccc977e4b235a2e5d9037a72647b835cc6cb01f39f7acca5983106329271 extends Template
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
    <h2 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h2>
    <ul class=\"breadcrumb\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "            <li><a href=\"";
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
        echo "        </ul>
</div>
<div class=\"container\">
  <div class=\"wrapper_container row\">
    ";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " single-blog\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"page-item-title\">
        <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      </div>
      ";
        // line 24
        if ((($__internal_compile_0 = ($context["blogs"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["image"] ?? null) : null)) {
            echo " 
            <div class=\"blog-img\">
                <img src=\"";
            // line 26
            echo (($__internal_compile_1 = ($context["blogs"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["image"] ?? null) : null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-responsive\" />
            </div>
      ";
        }
        // line 29
        echo "      <div class=\"blog-date\">";
        echo ($context["date"] ?? null);
        echo "</div>
      <div class=\"blog-desc\"> ";
        // line 30
        echo ($context["description"] ?? null);
        echo " </div>
      ";
        // line 31
        if (($context["success"] ?? null)) {
            echo " 
        <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 32
            echo ($context["success"] ?? null);
            echo "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
      ";
        }
        // line 34
        echo "      <div class=\"smartblogcomments\">
          ";
        // line 35
        if (($context["blog_comments"] ?? null)) {
            echo " 
                <div class=\"reply-title\">";
            // line 36
            echo ($context["text_your_comments"] ?? null);
            echo "</div>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blog_comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog_comment"]) {
                echo " 
                    <div class=\"view-comment\">
                        <div class=\"user_icon\"><i class=\"fa fa-user-o\"></i></div>
                        <div class=\"user_list\">
                            <div class=\"name\"><span>";
                // line 41
                echo ($context["entry_author"] ?? null);
                echo "</span> : ";
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "author", [], "any", false, false, false, 41);
                echo "</div>
                            <div class=\"date\"><span>";
                // line 42
                echo ($context["text_date_added"] ?? null);
                echo "</span> : ";
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "date_added", [], "any", false, false, false, 42);
                echo "</div>
                            <div class=\"comment-text\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["blog_comment"], "comment", [], "any", false, false, false, 43);
                echo "</div>
                        </div>
                    </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog_comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo " 
          ";
        }
        // line 48
        echo "      </div>
      ";
        // line 49
        if (($context["allow_comments"] ?? null)) {
            // line 50
            echo "      <div class=\"panel panel-default\" id=\"add-comment\">
        ";
            // line 51
            if ((($context["login_required"] ?? null) &&  !($context["is_logged"] ?? null))) {
                echo " 
            <p class=\"text-start login-required\">";
                // line 52
                echo ($context["text_login_required"] ?? null);
                echo "</p>
        ";
            } else {
                // line 53
                echo " 
            <form action=\"";
                // line 54
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                <div class=\"card panel-default\">
                    <div class=\"form-group required row\">
                        <label class=\"col-sm-3 control-label\" for=\"input-author\">";
                // line 57
                echo ($context["entry_author"] ?? null);
                echo "</label>
                        <div class=\"col-sm-9\">
                          <input type=\"text\" name=\"author\" value=\"";
                // line 59
                echo ($context["author"] ?? null);
                echo "\" id=\"input-author\" placeholder=\"";
                echo ($context["entry_author"] ?? null);
                echo "\" class=\"form-control\" />
                          ";
                // line 60
                if (($context["error_author"] ?? null)) {
                    echo " 
                          <div class=\"text-danger\">";
                    // line 61
                    echo ($context["error_author"] ?? null);
                    echo "</div>
                          ";
                }
                // line 62
                echo " 
                        </div>
                    </div>
                    <div class=\"form-group required row\">
                        <label class=\"col-sm-3 control-label\" for=\"input-email\">";
                // line 66
                echo ($context["entry_email"] ?? null);
                echo "</label>
                        <div class=\"col-sm-9\">
                          <input type=\"text\" name=\"email\" value=\"";
                // line 68
                echo ($context["email"] ?? null);
                echo "\" id=\"input-email\" placeholder=\"";
                echo ($context["entry_email"] ?? null);
                echo "\" class=\"form-control\" />
                          ";
                // line 69
                if (($context["error_email"] ?? null)) {
                    echo " 
                          <div class=\"text-danger\">";
                    // line 70
                    echo ($context["error_email"] ?? null);
                    echo "</div>
                          ";
                }
                // line 71
                echo " 
                        </div>
                    </div>
                    <div class=\"form-group row required\">
                        <label class=\"col-sm-3 control-label\" for=\"input-comment\">";
                // line 75
                echo ($context["entry_comment"] ?? null);
                echo "</label>
                        <div class=\"col-sm-9\">
                          <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\" />";
                // line 77
                echo ($context["comment"] ?? null);
                echo "</textarea>
                          ";
                // line 78
                if (($context["error_comment"] ?? null)) {
                    echo " 
                          <div class=\"text-danger\">";
                    // line 79
                    echo ($context["error_comment"] ?? null);
                    echo "</div>
                          ";
                }
                // line 80
                echo " 
                        </div>
                    </div>
                </div>
              ";
                // line 84
                echo ($context["captcha"] ?? null);
                echo " 
              <input type=\"hidden\" name=\"auto_approve\" value=\"";
                // line 85
                echo ($context["auto_approve"] ?? null);
                echo "\" />
              <div class=\"col-sm-3\"></div>
              <div class=\"col-sm-10 submit-btn buttons text-start\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 88
                echo ($context["button_submit"] ?? null);
                echo "\" title=\"";
                echo ($context["button_submit"] ?? null);
                echo "\" />
              </div>
            </form>
        ";
            }
            // line 92
            echo "      </div>
      <div class=\"buttons text-right\"></div>
      
     ";
        }
        // line 96
        echo "    ";
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 97
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 99
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/blogger/catalog/view/template/information/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 99,  317 => 97,  311 => 96,  305 => 92,  296 => 88,  290 => 85,  286 => 84,  280 => 80,  275 => 79,  271 => 78,  267 => 77,  262 => 75,  256 => 71,  251 => 70,  247 => 69,  241 => 68,  236 => 66,  230 => 62,  225 => 61,  221 => 60,  215 => 59,  210 => 57,  204 => 54,  201 => 53,  196 => 52,  192 => 51,  189 => 50,  187 => 49,  184 => 48,  180 => 46,  170 => 43,  164 => 42,  158 => 41,  149 => 37,  145 => 36,  141 => 35,  138 => 34,  133 => 32,  129 => 31,  125 => 30,  120 => 29,  110 => 26,  105 => 24,  100 => 22,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  68 => 12,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/blogger/catalog/view/template/information/blogger.twig", "C:\\xampp\\htdocs\\OPC001L01_2.3\\extension\\blogger\\catalog\\view\\template\\information\\blogger.twig");
    }
}
