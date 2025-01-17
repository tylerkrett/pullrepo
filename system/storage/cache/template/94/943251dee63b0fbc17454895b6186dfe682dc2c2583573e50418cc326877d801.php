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

/* extension/ishifooterlinkblock/admin/view/template/module/ishifooterlinkblock.twig */
class __TwigTemplate_8ebc9499fea44c435eaacbd79863c22346e184c9dba8861ada0748122be6f069 extends Template
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
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
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
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"card panel-default\">
      <div class=\"card-header\">
        <i class=\"fa fa-pencil\"></i>";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "
      </div>
      <div class=\"card-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-column\">";
        // line 38
        echo ($context["entry_column"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"column\" id=\"input-column\" class=\"form-control\">
                <option value=\"1\" ";
        // line 41
        if ((($context["column"] ?? null) == 1)) {
            echo " selected=selected ";
        }
        echo ">1</option>
                <option value=\"2\" ";
        // line 42
        if ((($context["column"] ?? null) == 2)) {
            echo " selected=selected ";
        }
        echo ">2</option>
                <option value=\"3\" ";
        // line 43
        if ((($context["column"] ?? null) == 3)) {
            echo " selected=selected ";
        }
        echo ">3</option>
                <option value=\"4\" ";
        // line 44
        if ((($context["column"] ?? null) == 4)) {
            echo " selected=selected ";
        }
        echo ">4</option>
                <option value=\"6\" ";
        // line 45
        if ((($context["column"] ?? null) == 6)) {
            echo " selected=selected ";
        }
        echo ">6</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <div class=\"col-sm-4\">
              <div class=\"row\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-showaccount\">";
        // line 52
        echo ($context["entry_showaccount"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <label class=\"switch\">
                    ";
        // line 55
        if (($context["showaccount"] ?? null)) {
            // line 56
            echo "                    <input type=\"checkbox\" name=\"showaccount\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showaccount\" />
                    ";
        } else {
            // line 58
            echo "                    <input type=\"checkbox\" name=\"showaccount\" value=\"1\" class=\"primary\" id=\"input-showaccount\" />
                    ";
        }
        // line 60
        echo "                    <span class=\"slider round\"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class=\"col-sm-4\">
              <div class=\"row\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-showinformation\">";
        // line 67
        echo ($context["entry_showinformation"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <label class=\"switch\">
                    ";
        // line 70
        if (($context["showinformation"] ?? null)) {
            // line 71
            echo "                    <input type=\"checkbox\" name=\"showinformation\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showinformation\" />
                    ";
        } else {
            // line 73
            echo "                    <input type=\"checkbox\" name=\"showinformation\" value=\"1\" class=\"primary\" id=\"input-showinformation\" />
                    ";
        }
        // line 75
        echo "                    <span class=\"slider round\"></span>
                  </label>
                </div>
              </div>
            </div>
            <div class=\"col-sm-4\">
              <div class=\"row\">
                <label class=\"col-sm-6 col-form-label\" for=\"input-showextra\">";
        // line 82
        echo ($context["entry_showextra"] ?? null);
        echo "</label>
                <div class=\"col-sm-6\">
                  <label class=\"switch\">
                    ";
        // line 85
        if (($context["showextra"] ?? null)) {
            // line 86
            echo "                    <input type=\"checkbox\" name=\"showextra\" value=\"1\" class=\"primary checkbox\" checked=\"checked\" id=\"input-showextra\" />
                    ";
        } else {
            // line 88
            echo "                    <input type=\"checkbox\" name=\"showextra\" value=\"1\" class=\"primary checkbox\" id=\"input-showextra\" />
                    ";
        }
        // line 90
        echo "                    <span class=\"slider round\"></span>
                  </label>
                </div>
              </div>
            </div>
          </div>  
          <div class=\"row mb-3\">
            <div class=\"col-sm-4\">
                <div class=\"row\">
                   <label class=\"col-sm-6 col-form-label\" for=\"input-showtitle\">";
        // line 99
        echo ($context["entry_showtitle"] ?? null);
        echo "</label>
                    <div class=\"col-sm-6\">
                      <label class=\"switch\">
                        ";
        // line 102
        if (($context["showtitle"] ?? null)) {
            // line 103
            echo "                          <input type=\"checkbox\" name=\"showtitle\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-category-status\" />
                        ";
        } else {
            // line 105
            echo "                          <input type=\"checkbox\" name=\"showtitle\" value=\"1\" class=\"primary\" id=\"input-showtitle\" />
                        ";
        }
        // line 107
        echo "                        <span class=\"slider round\"></span>
                      </label>
                    </div>
                </div>  
            </div>
            <div class=\"col-sm-8 ";
        // line 112
        if (($context["showtitle"] ?? null)) {
            echo " show ";
        }
        echo "\">
              <div class=\"row\">
                <label class=\"col-sm-4 col-form-label\" for=\"input-footerlinktitle-";
        // line 114
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 114);
        echo "\">";
        echo ($context["entry_footerlinktitle"] ?? null);
        echo "</label>
                <div class=\"col-sm-8\">
                  ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 117
            echo "                    <div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 117);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 117);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 117);
            echo "\" /></span>
                      <input type=\"text\" name=\"footerlinktitle[";
            // line 118
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["footerlinktitle"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_footerlinktitle"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-footerlinktitle-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118);
            echo "\" />
                      ";
            // line 119
            if ((($__internal_compile_1 = ($context["error_footerlinktitle"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 119)] ?? null) : null)) {
                // line 120
                echo "                        <div class=\"text-danger\">";
                echo (($__internal_compile_2 = ($context["error_footerlinktitle"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 120)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 122
            echo "                    </div> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                </div>
              </div>
            </div>
             </div>
             <hr>
          <br />
          <h3><b>Extra Link Configration</b></h3>
          <ul class=\"nav nav-tabs\" id=\"languages\">
            ";
        // line 132
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
            // line 133
            echo "              <li class=\"nav-item\" ><a class=\"nav-link ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 133)) {
                echo " active ";
            }
            echo " fade show\" href=\"#languages";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133);
            echo "\" aria-current=\"page\" data-bs-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 133);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 133);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 133);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 133);
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
        // line 135
        echo "          </ul>
          <div class=\"tab-content show-extra\">
            ";
        // line 137
        $context["image_rows"] = 0;
        // line 138
        echo "            ";
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
            // line 139
            echo "            <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 139)) {
                echo " active ";
            }
            echo " fade show\" role=\"tabpanel\" id=\"languages";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 139);
            echo "\">
              <table id=\"addlinks";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 140);
            echo "\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
            // line 143
            echo ($context["entry_linkname"] ?? null);
            echo "</td>
                    <td class=\"text-left\">";
            // line 144
            echo ($context["entry_link"] ?? null);
            echo "</td>
                    <td></td>
                  </tr>
                </thead>
              <tbody>
                  ";
            // line 149
            if ((($__internal_compile_3 = ($context["ishi_extras"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null)) {
                // line 150
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_4 = ($context["ishi_extras"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 150)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["ishiextra"]) {
                    // line 151
                    echo "                  <tr id=\"image-rows";
                    echo ($context["image_rows"] ?? null);
                    echo "\">
                    <td class=\"text-left\"><input type=\"text\" name=\"ishiextra[";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 152);
                    echo "][";
                    echo ($context["image_rows"] ?? null);
                    echo "][linkname]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishiextra"], "linkname", [], "any", false, false, false, 152);
                    echo "\" placeholder=\"";
                    echo ($context["entry_linkname"] ?? null);
                    echo "\" class=\"form-control\" />
                      ";
                    // line 153
                    if ((($__internal_compile_5 = (($__internal_compile_6 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153)] ?? null) : null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["image_rows"] ?? null)] ?? null) : null)) {
                        // line 154
                        echo "                      <div class=\"text-danger\">";
                        echo (($__internal_compile_7 = (($__internal_compile_8 = ($context["error_banner_image"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["image_rows"] ?? null)] ?? null) : null);
                        echo "</div>
                      ";
                    }
                    // line 155
                    echo "</td>
                    <td class=\"text-left\" style=\"width: 30%;\"><input type=\"text\" name=\"ishiextra[";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 156);
                    echo "][";
                    echo ($context["image_rows"] ?? null);
                    echo "][link]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ishiextra"], "link", [], "any", false, false, false, 156);
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-rows";
                    // line 157
                    echo ($context["image_rows"] ?? null);
                    echo ", .tooltip').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                    // line 159
                    $context["image_rows"] = (($context["image_rows"] ?? null) + 1);
                    // line 160
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishiextra'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                  ";
            }
            // line 162
            echo "                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=\"2\"></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"addLink('";
            // line 166
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 166);
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
        // line 172
        echo "          </div>
          <hr>
          <br>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 176
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 179
        if (($context["status"] ?? null)) {
            // line 180
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 181
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 183
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 184
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 186
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</style>

<script type=\"text/javascript\"><!--
var image_rows = ";
        // line 197
        echo ($context["image_rows"] ?? null);
        echo ";

function addLink(language_id) {
  html  = '<tr id=\"image-rows' + image_rows + '\">'; 
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishiextra[' + language_id + '][' + image_rows + '][linkname]\" value=\"\" placeholder=\"";
        // line 201
        echo ($context["entry_linkname"] ?? null);
        echo "\" class=\"form-control\" /></td>';  
  html += '  <td class=\"text-left\"><input type=\"text\" name=\"ishiextra[' + language_id + '][' + image_rows + '][link]\" value=\"\" placeholder=\"";
        // line 202
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control\" /></td>'; 
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-rows' + image_rows  + ', .tooltip\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 203
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';
  
  \$('#addlinks' + language_id + ' tbody').append(html);
  
  image_rows++;
}

//--></script> 
  <script type=\"text/javascript\"><!--
\$('#languages a:first').tab('show');
//--></script> 

<script type=\"text/javascript\">
  \$(\".checkbox\").change(function() {
      if(this.checked) {
         \$('.show-extra').attr(\"style\", \"display: block !important\");
      }else{
      \$('.show-extra').attr(\"style\", \"display: none !important\");
    }
  });
</script>
<style>
      .showtext,.hidetype1{
        display:none;
      }
      .show,.showtype1{
        display:block;
      }
      /* The switch - the box around the slider */
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

<script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\"><!--
    \$('#language a:first').tab('show');

    \$(document).ready( function() {
      \$('.color').each( function() {
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
        });
      });
    });
  //--></script>
";
        // line 335
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "extension/ishifooterlinkblock/admin/view/template/module/ishifooterlinkblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 335,  583 => 203,  579 => 202,  575 => 201,  568 => 197,  555 => 186,  550 => 184,  545 => 183,  540 => 181,  535 => 180,  533 => 179,  527 => 176,  521 => 172,  499 => 166,  493 => 162,  490 => 161,  484 => 160,  482 => 159,  475 => 157,  465 => 156,  462 => 155,  456 => 154,  454 => 153,  444 => 152,  439 => 151,  434 => 150,  432 => 149,  424 => 144,  420 => 143,  414 => 140,  405 => 139,  387 => 138,  385 => 137,  381 => 135,  352 => 133,  335 => 132,  325 => 124,  318 => 122,  312 => 120,  310 => 119,  300 => 118,  291 => 117,  287 => 116,  280 => 114,  273 => 112,  266 => 107,  262 => 105,  258 => 103,  256 => 102,  250 => 99,  239 => 90,  235 => 88,  231 => 86,  229 => 85,  223 => 82,  214 => 75,  210 => 73,  206 => 71,  204 => 70,  198 => 67,  189 => 60,  185 => 58,  181 => 56,  179 => 55,  173 => 52,  161 => 45,  155 => 44,  149 => 43,  143 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishifooterlinkblock/admin/view/template/module/ishifooterlinkblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishifooterlinkblock\\admin\\view\\template\\module\\ishifooterlinkblock.twig");
    }
}
