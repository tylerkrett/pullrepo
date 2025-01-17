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

/* extension/newslettersubscribe/admin/view/template/module/newslettersubscribe.twig */
class __TwigTemplate_1bd8abecaa2be710aa08d925cc9996ac58d5792bbe5f7d460b0d86f334d0f5af extends Template
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
\t    <div class=\"container-fluid\">
\t      <div class=\"float-end\">
\t        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
\t        <a onclick=\"location = '";
        // line 7
        echo ($context["export_csv"] ?? null);
        echo "'\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_export"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></a>
\t        <a href=\"";
        // line 8
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
\t      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t      <ol class=\"breadcrumb\">
\t        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t      </ol>
\t    </div>
  \t</div>
\t<div class=\"container-fluid\">
\t   ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t    <i class=\"fa fa-exclamation-circle\"></i> 
\t\t    ";
            // line 21
            echo ($context["error_warning"] ?? null);
            echo "
\t\t    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t</div>
\t\t";
        }
        // line 25
        echo "\t    <div class=\"card panel-default\">
\t\t    <div class=\"card-header\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_edit"] ?? null);
        echo "
\t\t    </div>
\t\t    <div class=\"card-body\">
\t\t        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t          <div class=\"row mb-3\">
\t\t            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t            <div class=\"col-sm-10\">
\t\t              <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t              ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "\t\t              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t              ";
        }
        // line 37
        echo "\t\t            </div>
\t\t          </div>
\t\t          <div class=\"row mb-3\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 40
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            echo "\" /></span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\" />
\t\t\t\t\t\t</div> 
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row mb-3\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-mobile_title\">";
        // line 50
        echo ($context["entry_mobile_title"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 53
            echo "\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 53);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 53);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 53);
            echo "\" /></span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"mobile_title[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "]\" value=\"";
            echo (($__internal_compile_1 = ($context["mobile_title"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_mobile_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-mobile_title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" />
\t\t\t\t\t\t</div> 
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row mb-3 required\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-column\">";
        // line 60
        echo ($context["entry_column"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<select name=\"column\" id=\"input-column\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"1\" ";
        // line 63
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
\t\t\t\t\t\t<option value=\"2\" ";
        // line 64
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
\t\t\t\t\t\t<option value=\"3\" ";
        // line 65
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
\t\t\t\t\t\t<option value=\"4\" ";
        // line 66
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 71
        echo ($context["entry_facebook"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"facebook\" value=\"";
        // line 73
        echo ($context["facebook"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_facebook"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 74
        if (($context["error_name"] ?? null)) {
            // line 75
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 80
        echo ($context["entry_twitter"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"twitter\" value=\"";
        // line 82
        echo ($context["twitter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_twitter"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 83
        if (($context["error_name"] ?? null)) {
            // line 84
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 89
        echo ($context["entry_youtube"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"youtube\" value=\"";
        // line 91
        echo ($context["youtube"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_youtube"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 92
        if (($context["error_name"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 98
        echo ($context["entry_gplus"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"gplus\" value=\"";
        // line 100
        echo ($context["gplus"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gplus"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 101
        if (($context["error_name"] ?? null)) {
            // line 102
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 107
        echo ($context["entry_rss"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"rss\" value=\"";
        // line 109
        echo ($context["rss"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rss"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 110
        if (($context["error_name"] ?? null)) {
            // line 111
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 116
        echo ($context["entry_pinterest"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"pinterest\" value=\"";
        // line 118
        echo ($context["pinterest"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pinterest"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 119
        if (($context["error_name"] ?? null)) {
            // line 120
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 125
        echo ($context["entry_vimeo"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"vimeo\" value=\"";
        // line 127
        echo ($context["vimeo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_vimeo"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 128
        if (($context["error_name"] ?? null)) {
            // line 129
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 131
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 134
        echo ($context["entry_instagram"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"instagram\" value=\"";
        // line 136
        echo ($context["instagram"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_instagram"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t";
        // line 137
        if (($context["error_name"] ?? null)) {
            // line 138
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t          <div class=\"row mb-3\">
\t\t            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 143
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t            <div class=\"col-sm-10\">
\t\t              <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t                ";
        // line 146
        if (($context["status"] ?? null)) {
            // line 147
            echo "\t\t                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t                <option value=\"0\">";
            // line 148
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t                ";
        } else {
            // line 150
            echo "\t\t                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t                <option value=\"0\" selected=\"selected\">";
            // line 151
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t                ";
        }
        // line 153
        echo "\t\t              </select>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"row mb-3\">
\t\t            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 157
        echo ($context["tab_list"] ?? null);
        echo "</label>
\t\t            <div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"left\">No</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"left\">Email</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"right\">Action</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 170
        if (($context["users"] ?? null)) {
            // line 171
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["user"]) {
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 174
                if ((($__internal_compile_2 = $context["user"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["selected"] ?? null) : null)) {
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_3 = $context["user"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 177
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_compile_4 = $context["user"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"left\">";
                // line 180
                echo ((($context["page_nav"] ?? null) + $context["key"]) + 1);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"left\">";
                // line 181
                echo (($__internal_compile_5 = $context["user"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["email_id"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"left\">";
                // line 182
                echo (($__internal_compile_6 = $context["user"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["name"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"right\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_7 = $context["user"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["action"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t\t [ <a href=\"";
                    echo (($__internal_compile_8 = $context["action"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_compile_9 = $context["action"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["text"] ?? null) : null);
                    echo "</a> ]
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t  <td class=\"center\" colspan=\"6\">";
            // line 192
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"pagination col-sm-6 text-start\">";
        // line 198
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-end\">";
        // line 199
        echo ($context["results"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t            </div>
\t\t          </div>\t\t  
\t\t        </form>
\t\t    </div>
\t\t</div>
\t</div>
  \t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  \t<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  \t<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  \t<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
 \t<script type=\"text/javascript\"><!--
\tfunction addModule() {
\t\tvar user_token = Math.random().toString(36).substr(2);
\t\t\t\t
\t\thtml  = '<tr id=\"module-row' + user_token + '\">';
\t\thtml += '  <td class=\"text-right\">' + (\$('tbody tr').length + 1) + '</td>';
\t\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"newslettersubscribe_module[' + user_token + '][limit]\" value=\"5\" placeholder=\"";
        // line 218
        echo ($context["entry_limit"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"newslettersubscribe_module[' + user_token + '][width]\" value=\"200\" placeholder=\"";
        // line 219
        echo ($context["entry_width"] ?? null);
        echo "\" class=\"form-control\" /> <input type=\"text\" name=\"newslettersubscribe_module[' + user_token + '][height]\" value=\"200\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
\t\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#module-row' + user_token + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 220
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\thtml += '</tr>';
\t\t
\t\t\$('#module tbody').append(html);
\t}
\t//--></script>
</div> 
<script  type =\"text/javascript\">
\t\$('#module li:first-child a').tab('show');
\t\$('#input-description').summernote({
\t\theight: 300
\t});
</script> 
<script type=\"text/javascript\"><!--\t
\$('select[name=\\'to\\']').bind('change', function() {
\t\$('#mail .to').hide();
\t\$('#mail #to-' + \$(this).val().replace('_', '-')).show();
\t
});

\$('select[name=\\'to\\']').trigger('change');
//--></script> 


<script type=\"text/javascript\"><!--
\$.widget('custom.catcomplete', \$.ui.autocomplete, {
\t_renderMenu: function(ul, items) {
\t\tvar self = this, currentCategory = '';
\t\t
\t\t\$.each(items, function(index, item) {
\t\t\tif (item.category != currentCategory) {
\t\t\t\tul.append('<li class=\"ui-autocomplete-category\">' + item.category + '</li>');
\t\t\t\t
\t\t\t\tcurrentCategory = item.category;
\t\t\t}
\t\t\t
\t\t\tself._renderItemData (ul, item);
\t\t});
\t}
});

\$('input[name=\\'customers\\']').catcomplete({
\tdelay: 500,
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=sale/customer/autocomplete&user_token=";
        // line 265
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item.customer_group,
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.customer_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t\t
\t}, 
\tselect: function(event, ui) {
\t\t\$('#customer' + ui.item.value).remove();
\t\t
\t\t\$('#customer').append('<div id=\"customer' + ui.item.value + '\">' + ui.item.label + '<img src=\"view/image/delete.png\" alt=\"\" /><input type=\"hidden\" name=\"customer[]\" value=\"' + ui.item.value + '\" /></div>');

\t\t\$('#customer div:odd').attr('class', 'odd');
\t\t\$('#customer div:even').attr('class', 'even');
\t\t\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});

\$('#customer div img').bind('click', function() {
\t\$(this).parent().remove();
\t
\t\$('#customer div:odd').attr('class', 'odd');
\t\$('#customer div:even').attr('class', 'even');\t
});
//--></script> 
<script type=\"text/javascript\"><!--\t
\$('input[name=\\'affiliates\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=sale/affiliate/autocomplete&user_token=";
        // line 306
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.affiliate_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t\t
\t}, 
\tselect: function(event, ui) {
\t\t\$('#affiliate' + ui.item.value).remove();
\t\t
\t\t\$('#affiliate').append('<div id=\"affiliate' + ui.item.value + '\">' + ui.item.label + '<img src=\"view/image/delete.png\" alt=\"\" /><input type=\"hidden\" name=\"affiliate[]\" value=\"' + ui.item.value + '\" /></div>');

\t\t\$('#affiliate div:odd').attr('class', 'odd');
\t\t\$('#affiliate div:even').attr('class', 'even');
\t\t\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});

\$('#affiliate div img').bind('click', function() {
\t\$(this).parent().remove();
\t
\t\$('#affiliate div:odd').attr('class', 'odd');
\t\$('#affiliate div:even').attr('class', 'even');\t
});

\$('input[name=\\'products\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 345
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.product_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t}, 
\tselect: function(event, ui) {
\t\t\$('#product' + ui.item.value).remove();
\t\t
\t\t\$('#product').append('<div id=\"product' + ui.item.value + '\">' + ui.item.label + '<img src=\"view/image/delete.png\" alt=\"\" /><input type=\"hidden\" name=\"product[]\" value=\"' + ui.item.value + '\" /></div>');

\t\t\$('#product div:odd').attr('class', 'odd');
\t\t\$('#product div:even').attr('class', 'even');
\t\t\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});

\$('#product div img').bind('click', function() {
\t\$(this).parent().remove();
\t
\t\$('#product div:odd').attr('class', 'odd');
\t\$('#product div:even').attr('class', 'even');\t
});

function send(url) { 
\t
\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('#form-html').serialize(),\t\t
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-send').attr('disabled', true);
\t\t\t\$('#button-send').before('<span class=\"wait\"><img src=\"view/image/loading.gif\" alt=\"\" />&nbsp;</span>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-send').attr('disabled', false);
\t\t\t//\$('.wait').html('Sent mail successfully');
\t\t},\t\t\t\t
\t\tsuccess: function(json) {
\t\t\t\$('.success, .warning, .error').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('.box').before('<div class=\"warning\" style=\"display: none;\">' + json['error']['warning'] + '</div>');
\t\t\t
\t\t\t\t\t\$('.warning').fadeIn('slow');
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']['subject']) {
\t\t\t\t\t\$('input[name=\\'subject\\']').after('<span class=\"error\">' + json['error']['subject'] + '</span>');
\t\t\t\t}\t
\t\t\t\t
\t\t\t\tif (json['error']['message']) {
\t\t\t\t\t\$('textarea[name=\\'message\\']').parent().append('<span class=\"error\">' + json['error']['message'] + '</span>');
\t\t\t\t}\t\t\t\t\t\t\t\t\t
\t\t\t}\t\t\t
\t\t\t
\t\t\tif (json['next']) {
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.box').before('<div class=\"success\">' + json['success'] + '</div>');
\t\t\t\t\t
\t\t\t\t\tsend(json['next']);
\t\t\t\t}\t\t
\t\t\t} else {
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.box').before('<div class=\"success\" style=\"display: none;\">' + json['success'] + '</div>');
\t\t\t
\t\t\t\t\t\$('.success').fadeIn('slow');
\t\t\t\t}\t\t\t\t\t
\t\t\t}\t\t\t\t
\t\t}
\t});
}
//--></script>
<style>
/* The switch - the box around the slider */
.showtext{
\tdisplay:none;
}
.show{
\tdisplay:block;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: \"\";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #8bc34a;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<script type=\"text/javascript\">
    \$(document).ready( function() {
      \$('.themecolor').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
      change: function(hex, opacity) {
        jQuery('.panel .mail-preview iframe').contents().find(jQuery(this).attr('data-target')).css(jQuery(this).attr('data-property'), hex);
      }
        });

      });
    });
  </script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.min.js\"></script> 
";
        // line 542
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/newslettersubscribe/admin/view/template/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  942 => 542,  742 => 345,  700 => 306,  656 => 265,  608 => 220,  602 => 219,  598 => 218,  576 => 199,  572 => 198,  567 => 195,  561 => 192,  558 => 191,  555 => 190,  547 => 187,  536 => 185,  532 => 184,  527 => 182,  523 => 181,  519 => 180,  516 => 179,  510 => 177,  504 => 175,  502 => 174,  498 => 172,  493 => 171,  491 => 170,  475 => 157,  469 => 153,  464 => 151,  459 => 150,  454 => 148,  449 => 147,  447 => 146,  441 => 143,  436 => 140,  430 => 138,  428 => 137,  422 => 136,  417 => 134,  412 => 131,  406 => 129,  404 => 128,  398 => 127,  393 => 125,  388 => 122,  382 => 120,  380 => 119,  374 => 118,  369 => 116,  364 => 113,  358 => 111,  356 => 110,  350 => 109,  345 => 107,  340 => 104,  334 => 102,  332 => 101,  326 => 100,  321 => 98,  316 => 95,  310 => 93,  308 => 92,  302 => 91,  297 => 89,  292 => 86,  286 => 84,  284 => 83,  278 => 82,  273 => 80,  268 => 77,  262 => 75,  260 => 74,  254 => 73,  249 => 71,  239 => 66,  233 => 65,  227 => 64,  221 => 63,  215 => 60,  210 => 57,  195 => 54,  186 => 53,  182 => 52,  177 => 50,  172 => 47,  157 => 44,  148 => 43,  144 => 42,  139 => 40,  134 => 37,  128 => 35,  126 => 34,  120 => 33,  115 => 31,  110 => 29,  104 => 26,  101 => 25,  94 => 21,  90 => 19,  88 => 18,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/newslettersubscribe/admin/view/template/module/newslettersubscribe.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\newslettersubscribe\\admin\\view\\template\\module\\newslettersubscribe.twig");
    }
}
