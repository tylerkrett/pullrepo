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

/* admin/view/template/design/layout_form.twig */
class __TwigTemplate_4c74a473bc9eb21e72d9270899d8b1203ecd9ed69bb6256036752f1313089b6c extends Template
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
        <button type=\"submit\" form=\"form-layout\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        echo ($context["text_form"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-layout\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 24
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 26
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                <div id=\"error-name\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <br/>
            <table id=\"route\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-start\">";
        // line 34
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-start\">";
        // line 35
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 40
        $context["route_row"] = 0;
        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 42
            echo "                  <tr id=\"route-row-";
            echo ($context["route_row"] ?? null);
            echo "\">
                    <td class=\"text-start\"><select name=\"layout_route[";
            // line 43
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-select\">
                        <option value=\"0\">";
            // line 44
            echo ($context["text_default"] ?? null);
            echo "</option>
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 46
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 46);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 46))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 46);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                      </select></td>
                    <td class=\"text-start\"><input type=\"text\" name=\"layout_route[";
            // line 49
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 49);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\"/></td>
                    <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#route-row-";
            // line 50
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 52
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addRoute();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 58
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 64
        echo ($context["text_module"] ?? null);
        echo "</legend>
            ";
        // line 65
        $context["module_row"] = 0;
        // line 66
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 71
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 76
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 76) == "column_left")) {
                // line 77
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 80
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 82
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 82);
                    echo "\">
                                    ";
                    // line 83
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 83)) {
                        // line 84
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 84);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 84) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 84))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 84);
                        echo "</option>
                                    ";
                    } else {
                        // line 86
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 86));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 87
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 87);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 87) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 87))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 87);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 89
                        echo "                                    ";
                    }
                    // line 90
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 92);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 92);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 92);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 93
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 97
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 98
                echo "                      ";
            }
            // line 99
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-left');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 103
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-header-before\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 112
        echo ($context["text_header_before"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 117
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 117) == "header_before")) {
                // line 118
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 121
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 123
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 123);
                    echo "\">
                                    ";
                    // line 124
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 124)) {
                        // line 125
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 125);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 125) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 125))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 125);
                        echo "</option>
                                    ";
                    } else {
                        // line 127
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 127));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 128
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 128);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 128) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 128))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 128);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo "                                    ";
                    }
                    // line 131
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 133);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 133);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 133);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 134
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 138
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 139
                echo "                      ";
            }
            // line 140
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('header-before');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 144
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-header-after\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 151
        echo ($context["text_header_after"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 156
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 156) == "header_after")) {
                // line 157
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 160
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 162
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 162);
                    echo "\">
                                    ";
                    // line 163
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 163)) {
                        // line 164
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 164);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 164) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 164))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 164);
                        echo "</option>
                                    ";
                    } else {
                        // line 166
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 166));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 167
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 167);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 167) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 167))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 167);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 169
                        echo "                                    ";
                    }
                    // line 170
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 172);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 172);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 172);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 173
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 177
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 178
                echo "                      ";
            }
            // line 179
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('header-after');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 183
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>

                <table id=\"module-cart_service\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 191
        echo ($context["text_cart_service"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 196
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 196) == "cart_service")) {
                // line 197
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 200
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 202
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 202);
                    echo "\">
                                    ";
                    // line 203
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 203)) {
                        // line 204
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 204);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 204) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 204))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 204);
                        echo "</option>
                                    ";
                    } else {
                        // line 206
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 206));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 207
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 207);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 207) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 207))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 207);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 209
                        echo "                                    ";
                    }
                    // line 210
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 212);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 212);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 212);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 213
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 217
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 218
                echo "                      ";
            }
            // line 219
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('cart_service');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 223
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>


                <table id=\"module-content-top\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 232
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 237
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 237) == "content_top")) {
                // line 238
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 241
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 242
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 243
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 243);
                    echo "\">
                                    ";
                    // line 244
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 244)) {
                        // line 245
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 245);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 245) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 245))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 245);
                        echo "</option>
                                    ";
                    } else {
                        // line 247
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 247));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 248
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 248);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 248) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 248))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 248);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 250
                        echo "                                    ";
                    }
                    // line 251
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 253);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 253);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 253);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 254
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 258
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 259
                echo "                      ";
            }
            // line 260
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-top');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 264
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                
                <table id=\"module-content_middle\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 272
        echo ($context["text_content_middle"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 277
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 277) == "content_middle")) {
                // line 278
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 281
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 283
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 283);
                    echo "\">
                                    ";
                    // line 284
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 284)) {
                        // line 285
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 285);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 285) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 285))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 285);
                        echo "</option>
                                    ";
                    } else {
                        // line 287
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 287));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 288
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 288);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 288) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 288))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 288);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 290
                        echo "                                    ";
                    }
                    // line 291
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 293
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 293);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 293);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 293);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 294
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 298
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 299
                echo "                      ";
            }
            // line 300
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content_middle');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 304
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 311
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 316
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 316) == "content_bottom")) {
                // line 317
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 320
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 321
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 322
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 322);
                    echo "\">
                                    ";
                    // line 323
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 323)) {
                        // line 324
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 324);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 324) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 324))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 324);
                        echo "</option>
                                    ";
                    } else {
                        // line 326
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 326));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 327
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 327);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 327) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 327))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 327);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 329
                        echo "                                    ";
                    }
                    // line 330
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 332
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 332);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 332);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 332);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 333
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 337
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 338
                echo "                      ";
            }
            // line 339
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-bottom');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 343
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-footer-before\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 350
        echo ($context["text_footer_before"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 355
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 355) == "footer_before")) {
                // line 356
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 359
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 360
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 361
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 361);
                    echo "\">
                                    ";
                    // line 362
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 362)) {
                        // line 363
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 363);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 363) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 363))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 363);
                        echo "</option>
                                    ";
                    } else {
                        // line 365
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 365));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 366
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 366);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 366) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 366))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 366);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 368
                        echo "                                    ";
                    }
                    // line 369
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 371
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 371);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 371);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 371);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 372
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 376
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 377
                echo "                      ";
            }
            // line 378
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('footer-before');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 382
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-footer-middle\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 389
        echo ($context["text_footer_middle"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 394
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 394) == "footer_middle")) {
                // line 395
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 398
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 399
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 400
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 400);
                    echo "\">
                                    ";
                    // line 401
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 401)) {
                        // line 402
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 402);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 402) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 402))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 402);
                        echo "</option>
                                    ";
                    } else {
                        // line 404
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 404));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 405
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 405);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 405) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 405))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 405);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 407
                        echo "                                    ";
                    }
                    // line 408
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 410
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 410);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 410);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 410);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 411
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 415
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 416
                echo "                      ";
            }
            // line 417
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('footer-middle');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 421
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-footer-after\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 428
        echo ($context["text_footer_after"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 433
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 433) == "footer_after")) {
                // line 434
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 437
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 438
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 439
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 439);
                    echo "\">
                                    ";
                    // line 440
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 440)) {
                        // line 441
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 441);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 441) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 441))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 441);
                        echo "</option>
                                    ";
                    } else {
                        // line 443
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 443));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 444
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 444);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 444) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 444))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 444);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 446
                        echo "                                    ";
                    }
                    // line 447
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 449
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 449);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 449);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 449);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 450
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 454
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 455
                echo "                      ";
            }
            // line 456
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('footer-after');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 460
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-popup\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 467
        echo ($context["text_popup"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 472
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 472) == "popup")) {
                // line 473
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-start\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 476
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 477
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 478
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 478);
                    echo "\">
                                    ";
                    // line 479
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 479)) {
                        // line 480
                        echo "                                      <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 480);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 480) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 480))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 480);
                        echo "</option>
                                    ";
                    } else {
                        // line 482
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 482));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 483
                            echo "                                        <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 483);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 483) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 483))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 483);
                            echo "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 485
                        echo "                                    ";
                    }
                    // line 486
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 488
                echo "                              </select><input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 488);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 488);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 488);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 489
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 493
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 494
                echo "                      ";
            }
            // line 495
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 496
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('popup');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 499
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 508
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 512
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 513
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 513) == "column_right")) {
                // line 514
                echo "                        <tr id=\"module-row-";
                echo ($context["module_row"] ?? null);
                echo "\">
                          <td class=\"text-end\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 517
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-select input-sm\">
                                ";
                // line 518
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 519
                    echo "                                  <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 519);
                    echo "\">
                                    ";
                    // line 520
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 520)) {
                        // line 521
                        echo "                                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 521);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 521) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 521))) {
                            echo " selected";
                        }
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 521);
                        echo "</option>
                                  ";
                    } else {
                        // line 523
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 523));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 524
                            echo "                                      <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 524);
                            echo "\"";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 524) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 524))) {
                                echo " selected";
                            }
                            echo ">";
                            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 524);
                            echo "</option>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 526
                        echo "                                    ";
                    }
                    // line 527
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 529
                echo "                              </select> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 529);
                echo "\"/> <input type=\"hidden\" name=\"layout_module[";
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 529);
                echo "\"/> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 529);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 530
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 534
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 535
                echo "                      ";
            }
            // line 536
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-right');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 540
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
          <input type=\"hidden\" name=\"layout_id\" value=\"";
        // line 547
        echo ($context["layout_id"] ?? null);
        echo "\" id=\"input-layout-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var route_row = ";
        // line 554
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
    html = '<tr id=\"route-row-' + route_row + '\">';
    html += '  <td class=\"text-start\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-select\">';
    html += '  <option value=\"0\">";
        // line 559
        echo ($context["text_default"] ?? null);
        echo "</option>';
  ";
        // line 560
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 561
            echo "    html += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 561);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 561), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-start\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 564
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#route-row-' + route_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 565
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#route tbody').append(html);

    route_row++;
}

var module_row = ";
        // line 573
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
    html = '<tr id=\"module-row-' + module_row + '\">';
    html += '  <td class=\"text-start\"><div class=\"input-group input-group-sm\">';
    html += '    <select name=\"layout_module[' + module_row + '][code]\" class=\"form-select input-sm\">';
  ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 580
            echo "    html += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 580), "js");
            echo "\">';
  ";
            // line 581
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 581)) {
                // line 582
                echo "    html += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 582);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 582), "js");
                echo "</option>';
  ";
            } else {
                // line 584
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 584));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 585
                    echo "    html += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 585);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 585), "js");
                    echo "</option>';
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 587
                echo "  ";
            }
            // line 588
            echo "    html += '    </optgroup>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "    html += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replaceAll('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
    html += '  <a href=\" data-bs-toggle=\"tooltip\" title=\"";
        // line 593
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row-' + module_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>';
    html += '  </div></td>';
    html += '</tr>';

    \$('#module-' + type + ' tbody').append(html);

    \$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function (i, element) {
        \$(element).val(i);
    });

    \$('#module-' + type + ' select:last').trigger('change');

    module_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-services, #module-content-bottom').on('change', 'select[name*=\\'code\\']', function () {
    var part = this.value.split('.');

    if (typeof part[2] == 'undefined') {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token=";
        // line 612
        echo ($context["user_token"] ?? null);
        echo "');
    } else {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token=";
        // line 614
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[2]);
    }
});
//--></script>
";
        // line 618
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1915 => 618,  1908 => 614,  1903 => 612,  1879 => 593,  1874 => 590,  1867 => 588,  1864 => 587,  1853 => 585,  1848 => 584,  1840 => 582,  1838 => 581,  1833 => 580,  1829 => 579,  1820 => 573,  1809 => 565,  1805 => 564,  1802 => 563,  1791 => 561,  1787 => 560,  1783 => 559,  1775 => 554,  1765 => 547,  1755 => 540,  1750 => 537,  1744 => 536,  1741 => 535,  1739 => 534,  1730 => 530,  1715 => 529,  1708 => 527,  1705 => 526,  1690 => 524,  1685 => 523,  1673 => 521,  1671 => 520,  1666 => 519,  1662 => 518,  1658 => 517,  1651 => 514,  1648 => 513,  1644 => 512,  1637 => 508,  1625 => 499,  1620 => 496,  1614 => 495,  1611 => 494,  1609 => 493,  1600 => 489,  1585 => 488,  1578 => 486,  1575 => 485,  1560 => 483,  1555 => 482,  1543 => 480,  1541 => 479,  1536 => 478,  1532 => 477,  1528 => 476,  1521 => 473,  1518 => 472,  1514 => 471,  1507 => 467,  1497 => 460,  1492 => 457,  1486 => 456,  1483 => 455,  1481 => 454,  1472 => 450,  1457 => 449,  1450 => 447,  1447 => 446,  1432 => 444,  1427 => 443,  1415 => 441,  1413 => 440,  1408 => 439,  1404 => 438,  1400 => 437,  1393 => 434,  1390 => 433,  1386 => 432,  1379 => 428,  1369 => 421,  1364 => 418,  1358 => 417,  1355 => 416,  1353 => 415,  1344 => 411,  1329 => 410,  1322 => 408,  1319 => 407,  1304 => 405,  1299 => 404,  1287 => 402,  1285 => 401,  1280 => 400,  1276 => 399,  1272 => 398,  1265 => 395,  1262 => 394,  1258 => 393,  1251 => 389,  1241 => 382,  1236 => 379,  1230 => 378,  1227 => 377,  1225 => 376,  1216 => 372,  1201 => 371,  1194 => 369,  1191 => 368,  1176 => 366,  1171 => 365,  1159 => 363,  1157 => 362,  1152 => 361,  1148 => 360,  1144 => 359,  1137 => 356,  1134 => 355,  1130 => 354,  1123 => 350,  1113 => 343,  1108 => 340,  1102 => 339,  1099 => 338,  1097 => 337,  1088 => 333,  1073 => 332,  1066 => 330,  1063 => 329,  1048 => 327,  1043 => 326,  1031 => 324,  1029 => 323,  1024 => 322,  1020 => 321,  1016 => 320,  1009 => 317,  1006 => 316,  1002 => 315,  995 => 311,  985 => 304,  980 => 301,  974 => 300,  971 => 299,  969 => 298,  960 => 294,  945 => 293,  938 => 291,  935 => 290,  920 => 288,  915 => 287,  903 => 285,  901 => 284,  896 => 283,  892 => 282,  888 => 281,  881 => 278,  878 => 277,  874 => 276,  867 => 272,  856 => 264,  851 => 261,  845 => 260,  842 => 259,  840 => 258,  831 => 254,  816 => 253,  809 => 251,  806 => 250,  791 => 248,  786 => 247,  774 => 245,  772 => 244,  767 => 243,  763 => 242,  759 => 241,  752 => 238,  749 => 237,  745 => 236,  738 => 232,  726 => 223,  721 => 220,  715 => 219,  712 => 218,  710 => 217,  701 => 213,  686 => 212,  679 => 210,  676 => 209,  661 => 207,  656 => 206,  644 => 204,  642 => 203,  637 => 202,  633 => 201,  629 => 200,  622 => 197,  619 => 196,  615 => 195,  608 => 191,  597 => 183,  592 => 180,  586 => 179,  583 => 178,  581 => 177,  572 => 173,  557 => 172,  550 => 170,  547 => 169,  532 => 167,  527 => 166,  515 => 164,  513 => 163,  508 => 162,  504 => 161,  500 => 160,  493 => 157,  490 => 156,  486 => 155,  479 => 151,  469 => 144,  464 => 141,  458 => 140,  455 => 139,  453 => 138,  444 => 134,  429 => 133,  422 => 131,  419 => 130,  404 => 128,  399 => 127,  387 => 125,  385 => 124,  380 => 123,  376 => 122,  372 => 121,  365 => 118,  362 => 117,  358 => 116,  351 => 112,  339 => 103,  334 => 100,  328 => 99,  325 => 98,  323 => 97,  314 => 93,  299 => 92,  292 => 90,  289 => 89,  274 => 87,  269 => 86,  257 => 84,  255 => 83,  250 => 82,  246 => 81,  242 => 80,  235 => 77,  232 => 76,  228 => 75,  221 => 71,  214 => 66,  212 => 65,  208 => 64,  199 => 58,  193 => 54,  187 => 53,  185 => 52,  178 => 50,  170 => 49,  167 => 48,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  135 => 42,  130 => 41,  128 => 40,  120 => 35,  116 => 34,  103 => 26,  98 => 24,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/design/layout_form.twig", "C:\\xampp\\htdocs\\OPC052L03\\admin\\view\\template\\design\\layout_form.twig");
    }
}
