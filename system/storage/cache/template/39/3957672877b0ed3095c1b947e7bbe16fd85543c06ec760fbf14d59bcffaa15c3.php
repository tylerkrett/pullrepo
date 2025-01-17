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

/* extension/ishiaboutusservicesblock/admin/view/template/module/ishiaboutusservicesblock.twig */
class __TwigTemplate_c86308da37153716189d8f8fe62339ce0f7f67b29d5cec2d4a771811be198d77 extends Template
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
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 23
        echo "      <div class=\"card panel-default\">
        <div class=\"card-header\">
          <i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
        </div>
        <div class=\"card-body\">
          <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
            <div class=\"row pt-3 pb-3\">
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
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 36
        echo "              </div>
            </div>
            <div class=\"row pt-3 pb-3\">
              <div class=\"col-sm-6\">
                <div class=\"row\">
                  <label class=\"col-sm-4 col-form-label\" for=\"input-column\">";
        // line 41
        echo ($context["entry_column"] ?? null);
        echo "</label>
                  <div class=\"col-sm-8\">
                    <select name=\"column\" id=\"input-column\" class=\"form-control\">
                      <option value=\"1\" ";
        // line 44
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                      <option value=\"2\" ";
        // line 45
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                      <option value=\"3\" ";
        // line 46
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                      <option value=\"4\" ";
        // line 47
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
\t\t          <div class=\"row pt-3 pb-3\">
        \t\t\t <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-width\">";
        // line 56
        echo ($context["entry_width"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 58
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    </div>
                  </div>
        \t\t\t  </div>
  \t\t\t         <div class=\"col-sm-6\">
                  <div class=\"row\">
                    <label class=\"col-sm-4 col-form-label\" for=\"input-height\">";
        // line 64
        echo ($context["entry_height"] ?? null);
        echo "</label>
                    <div class=\"col-sm-8\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 66
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
\t\t          <div class=\"row mb-3\">
                <div class=\"col-sm-4\">
                  <div class=\"row\">
                    <label class=\"col-sm-6 col-form-label\" for=\"input-showtitle\">";
        // line 74
        echo ($context["entry_showtitle"] ?? null);
        echo "</label>
                      <div class=\"col-sm-4\">
                       <label class=\"switch\">
                          ";
        // line 77
        if (($context["showtitle"] ?? null)) {
            // line 78
            echo "                            <input type=\"checkbox\" name=\"showtitle\" value=\"1\" class=\"primary checkbox\" checked=\"checked\" id=\"input-category-status\" />
                          ";
        } else {
            // line 80
            echo "                            <input type=\"checkbox\" name=\"showtitle\" value=\"1\" class=\"primary checkbox\" id=\"input-showtitle\" />
                          ";
        }
        // line 82
        echo "                          <span class=\"slider round\"></span>
                        </label>
                      </div>
                  </div>  
                </div>
                <div class=\"col-sm-4 ";
        // line 87
        if (($context["showtitle"] ?? null)) {
            echo " show ";
        }
        echo "\">
                    <div class=\"row\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 89
        echo ($context["entry_title"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 92
            echo "                          <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 92);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 92);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 92);
            echo "\" /></span>
                            <input type=\"text\" name=\"title[";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\" />
                          </div> 
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                      </div>
                    </div>  
                </div>
              </div>
                
         <div class=\"row pt-3 pb-3\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 102
        echo ($context["entry_status"] ?? null);
        echo "</label>
          <div class=\"col-sm-10 pr-3\">
            <select name=\"status\" id=\"input-status\" class=\"form-control\">
              ";
        // line 105
        if (($context["status"] ?? null)) {
            // line 106
            echo "              <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\">";
            // line 107
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 109
            echo "              <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
              <option value=\"0\" selected=\"selected\">";
            // line 110
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        }
        // line 112
        echo "            </select>
          </div>
        </div>
        <div class=\"tab-pane\" id=\"tab-design\">
          <ul class=\"nav nav-tabs\" id=\"language\">
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 118
            echo "            <li class=\"nav-item\"><a class=\"nav-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 118)) {
                echo " active ";
            }
            echo "\" href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "\" aria-current=\"page\" data-bs-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 118);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 118);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 118);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 118);
            echo "</a></li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "          </ul>
          <div class=\"tab-content\">
           ";
        // line 122
        $context["service_row"] = 0;
        // line 123
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 124
            echo "           <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 124)) {
                echo " active ";
            }
            echo " fade show\" role=\"tabpanel\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 124);
            echo "\">
            <table id=\"images";
            // line 125
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
            echo "\" class=\"table table-striped table-bordered table-hover\">
             <thead>
               <tr>
                 <td class=\"text-center\">";
            // line 128
            echo ($context["entry_image"] ?? null);
            echo "</td>
                 <td class=\"text-left\">";
            // line 129
            echo ($context["entry_service_title"] ?? null);
            echo "</td>
                 <td class=\"text-left\">";
            // line 130
            echo ($context["entry_description"] ?? null);
            echo "</td>
                 <td></td>
               </tr>
             </thead>
             <tbody>
               ";
            // line 135
            if ((($__internal_compile_1 = ($context["services"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 135)] ?? null) : null)) {
                // line 136
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_2 = ($context["services"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                    // line 137
                    echo "               <tr id=\"service-row";
                    echo ($context["service_row"] ?? null);
                    echo "\">

                <td class=\"text-center\">
                  <img src=\"";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "thumb", [], "any", false, false, false, 140);
                    echo "\" alt=\"\" title=\"\" id=\"thumb-image";
                    echo ($context["service_row"] ?? null);
                    echo "\" data-oc-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" class=\"img-thumbnail\"/>
                  <input type=\"hidden\" name=\"service[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][image]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 141);
                    echo "\" id=\"input-image";
                    echo ($context["service_row"] ?? null);
                    echo "\"/>
                  <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image";
                    // line 143
                    echo ($context["service_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["service_row"] ?? null);
                    echo "\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
                    echo ($context["button_edit"] ?? null);
                    echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image";
                    // line 144
                    echo ($context["service_row"] ?? null);
                    echo "\" data-oc-thumb=\"#thumb-image";
                    echo ($context["service_row"] ?? null);
                    echo "\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
                    echo ($context["button_clear"] ?? null);
                    echo "</button>
                  </div>
                </td>
                  <td class=\"text-left\"><input type=\"text\" name=\"service[";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 147);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][title]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 147);
                    echo "\" placeholder=\"";
                    echo ($context["entry_service_title"] ?? null);
                    echo "\" class=\"form-control\" />
                    ";
                    // line 148
                    if ((($__internal_compile_3 = (($__internal_compile_4 = ($context["error_service"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 148)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["service_row"] ?? null)] ?? null) : null)) {
                        // line 149
                        echo "                    <div class=\"text-danger\">";
                        echo (($__internal_compile_5 = (($__internal_compile_6 = ($context["error_service"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["service_row"] ?? null)] ?? null) : null);
                        echo "</div>
                  ";
                    }
                    // line 150
                    echo "</td>
                  <td class=\"text-left\"><input type=\"text\" name=\"service[";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 151);
                    echo "][";
                    echo ($context["service_row"] ?? null);
                    echo "][description]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 151);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#service-row";
                    // line 152
                    echo ($context["service_row"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
                    // line 154
                    $context["service_row"] = (($context["service_row"] ?? null) + 1);
                    // line 155
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "                ";
            }
            // line 157
            echo "              </tbody>

             

              <tfoot>
               <tr>
                <td colspan=\"3\"></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"addService('";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 164);
            echo "');\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_banner_add"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "      </div>
    </div>
  </form>
</div>
</div>
</div>
<style>
/* The switch - the box around the slider */
.show-title{
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
<script type=\"text/javascript\"><!--
  \$(\".checkbox\").change(function() {
      if(this.checked) {
         \$('.show-title').attr(\"style\", \"display: block !important\");
      }else{
  \t\t\$('.show-title').attr(\"style\", \"display: none !important\");
  \t}
  });

  var service_row = ";
        // line 265
        echo ($context["service_row"] ?? null);
        echo ";

  function addService(language_id) {
   html  = '<tr id=\"service-row' + service_row + '\">';
  html += '<td class=\"text-center\"><img src=\"";
        // line 269
        echo twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "thumb", [], "any", false, false, false, 269);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image' + service_row + '\"  data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"img-thumbnail\"/><input type=\"hidden\" name=\"service[' + language_id + '][' + service_row + '][image]\" value=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "image", [], "any", false, false, false, 269);
        echo "\" id=\"input-image' + service_row + '\"/><div class=\"card-body\"><button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image' + service_row + '\" data-oc-thumb=\"#thumb-image' + service_row + '\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        echo ($context["button_edit"] ?? null);
        echo "</button><button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image' + service_row + '\" data-oc-thumb=\"#thumb-image' + service_row + '\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        echo ($context["button_clear"] ?? null);
        echo "</button></div></td>';
   html += '  <td class=\"text-left\"><input type=\"text\" name=\"service[' + language_id + '][' + service_row + '][title]\" value=\"\" placeholder=\"";
        // line 270
        echo ($context["entry_title"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
   html += '  <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"service[' + language_id + '][' + service_row + '][description]\" value=\"\" placeholder=\"";
        // line 271
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
   html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#service-row' + service_row  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 272
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
   html += '</tr>';
   
   \$('#images' + language_id + ' tbody').append(html);
   
   service_row++;
 }
//--></script>
</div>

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
        // line 313
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/ishiaboutusservicesblock/admin/view/template/module/ishiaboutusservicesblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 313,  668 => 272,  664 => 271,  660 => 270,  648 => 269,  641 => 265,  544 => 170,  522 => 164,  513 => 157,  510 => 156,  504 => 155,  502 => 154,  495 => 152,  485 => 151,  482 => 150,  476 => 149,  474 => 148,  464 => 147,  454 => 144,  446 => 143,  435 => 141,  427 => 140,  420 => 137,  415 => 136,  413 => 135,  405 => 130,  401 => 129,  397 => 128,  391 => 125,  382 => 124,  364 => 123,  362 => 122,  358 => 120,  329 => 118,  312 => 117,  305 => 112,  300 => 110,  295 => 109,  290 => 107,  285 => 106,  283 => 105,  277 => 102,  269 => 96,  254 => 93,  245 => 92,  241 => 91,  236 => 89,  229 => 87,  222 => 82,  218 => 80,  214 => 78,  212 => 77,  206 => 74,  193 => 66,  188 => 64,  177 => 58,  172 => 56,  158 => 47,  152 => 46,  146 => 45,  140 => 44,  134 => 41,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiaboutusservicesblock/admin/view/template/module/ishiaboutusservicesblock.twig", "C:\\xampp\\htdocs\\OPC010\\extension\\ishiaboutusservicesblock\\admin\\view\\template\\module\\ishiaboutusservicesblock.twig");
    }
}
