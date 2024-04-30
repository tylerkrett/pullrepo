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

/* extension/newslettersubscribepopup/admin/view/template/module/newslettersubscribepopup.twig */
class __TwigTemplate_501e93ca9a3b8c8c6c51c12a53462d79bfa05d1dc1e944831ca82398beaed9e2 extends Template
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
\t        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
\t      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t      <ol class=\"breadcrumb\">
\t        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t      </ol>
\t    </div>
  \t</div>
\t<div class=\"container-fluid\">
\t   ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t    <i class=\"fa fa-exclamation-circle\"></i> 
\t\t    ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "
\t\t    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t</div>
\t\t";
        }
        // line 24
        echo "\t    <div class=\"card panel-default\">
\t\t    <div class=\"card-header\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "
\t\t    </div>
\t\t    <div class=\"card-body\">
\t\t        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t          <div class=\"row mb-3\">
\t\t            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t            <div class=\"col-sm-10\">
\t\t              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t              ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "\t\t              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t              ";
        }
        // line 36
        echo "\t\t            </div>
\t\t          </div>
\t\t          <div class=\"row mb-3\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 39
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            echo "\" /></span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = ($context["title"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\" />
\t\t\t\t\t\t</div> 
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t  <div class=\"row mb-3\">
\t\t\t\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-title\">";
        // line 49
        echo ($context["entry_desc"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 52
            echo "\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon input-group-text\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 52);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 52);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 52);
            echo "\" /></span>
\t\t\t\t\t\t\t<input type=\"text\" name=\"desc[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "]\" value=\"";
            echo (($__internal_compile_1 = ($context["desc"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_desc"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-desc-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" />
\t\t\t\t\t\t</div> 
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t          <div class=\"row mb-3\">
\t\t          \t<div class=\"col-sm-6 row\">
\t\t                <label class=\"col-sm-4 col-form-label\" for=\"input-newsletter_banner\">";
        // line 60
        echo ($context["entry_newsletter_banner"] ?? null);
        echo "</label>
\t\t                <div class=\"col-sm-8\">
\t\t                  <div id=\"image\" class=\"card image\">
\t\t                  <img src=\"";
        // line 63
        echo ($context["imagethumb1"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-newsletter_banner\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" />
\t\t                  <input type=\"hidden\" name=\"newsletter_banner\" value=\"";
        // line 64
        echo ($context["newsletter_banner"] ?? null);
        echo "\" id=\"input-newsletter_banner\" />
\t\t                  <div class=\"card-body\">
\t\t                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-newsletter_banner\" data-oc-thumb=\"#thumb-newsletter_banner\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 66
        echo ($context["button_edit"] ?? null);
        echo "</button>
\t\t                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-newsletter_banner\" data-oc-thumb=\"#thumb-newsletter_banner\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 67
        echo ($context["button_clear"] ?? null);
        echo "</button>
\t\t                  </div>
\t\t                  </div>
\t\t                </div>
\t\t            </div>
\t\t            <div class=\"col-sm-6\">
\t\t                <div class=\"row\">
\t\t                  <label class=\"col-sm-4 col-form-label\" for=\"input-bg_color\">";
        // line 74
        echo ($context["entry_bg_color"] ?? null);
        echo "</label>
\t\t                  <div class=\"col-sm-8\">
\t\t                    <input type=\"text\" name=\"bg_color\" class=\"form-control themecolor\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 76
        echo ($context["bg_color"] ?? null);
        echo "\">
\t\t                  </div>
\t\t                </div>
\t\t            </div>
\t\t          </div>

\t\t          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 83
        echo ($context["entry_facebook"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"facebook\" value=\"";
        // line 85
        echo ($context["facebook"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_facebook"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 86
        if (($context["error_name"] ?? null)) {
            // line 87
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 89
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 92
        echo ($context["entry_twitter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"twitter\" value=\"";
        // line 94
        echo ($context["twitter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_twitter"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 95
        if (($context["error_name"] ?? null)) {
            // line 96
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 98
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 101
        echo ($context["entry_youtube"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"youtube\" value=\"";
        // line 103
        echo ($context["youtube"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_youtube"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 104
        if (($context["error_name"] ?? null)) {
            // line 105
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 107
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 110
        echo ($context["entry_gplus"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"gplus\" value=\"";
        // line 112
        echo ($context["gplus"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gplus"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 113
        if (($context["error_name"] ?? null)) {
            // line 114
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 116
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 119
        echo ($context["entry_rss"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"rss\" value=\"";
        // line 121
        echo ($context["rss"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rss"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 122
        if (($context["error_name"] ?? null)) {
            // line 123
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 125
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 128
        echo ($context["entry_pinterest"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"pinterest\" value=\"";
        // line 130
        echo ($context["pinterest"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pinterest"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 131
        if (($context["error_name"] ?? null)) {
            // line 132
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 134
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 137
        echo ($context["entry_vimeo"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"vimeo\" value=\"";
        // line 139
        echo ($context["vimeo"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_vimeo"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 140
        if (($context["error_name"] ?? null)) {
            // line 141
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 143
        echo "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 146
        echo ($context["entry_instagram"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"instagram\" value=\"";
        // line 148
        echo ($context["instagram"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_instagram"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 149
        if (($context["error_name"] ?? null)) {
            // line 150
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 152
        echo "            </div>
          </div>
\t\t          
\t\t          <div class=\"row mb-3\">
\t\t            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 156
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t            <div class=\"col-sm-10\">
\t\t              <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t                ";
        // line 159
        if (($context["status"] ?? null)) {
            // line 160
            echo "\t\t                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t                <option value=\"0\">";
            // line 161
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t                ";
        } else {
            // line 163
            echo "\t\t                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t                <option value=\"0\" selected=\"selected\">";
            // line 164
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t                ";
        }
        // line 166
        echo "\t\t              </select>
\t\t            </div>
\t\t          </div>
\t\t          \t  
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
        // line 184
        echo ($context["entry_limit"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"newslettersubscribe_module[' + user_token + '][width]\" value=\"200\" placeholder=\"";
        // line 185
        echo ($context["entry_width"] ?? null);
        echo "\" class=\"form-control\" /> <input type=\"text\" name=\"newslettersubscribe_module[' + user_token + '][height]\" value=\"200\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" /></td>';\t
\t\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#module-row' + user_token + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 186
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
        // line 231
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
        // line 272
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
        // line 311
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
        // line 508
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/newslettersubscribepopup/admin/view/template/module/newslettersubscribepopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  841 => 508,  641 => 311,  599 => 272,  555 => 231,  507 => 186,  501 => 185,  497 => 184,  477 => 166,  472 => 164,  467 => 163,  462 => 161,  457 => 160,  455 => 159,  449 => 156,  443 => 152,  437 => 150,  435 => 149,  429 => 148,  424 => 146,  419 => 143,  413 => 141,  411 => 140,  405 => 139,  400 => 137,  395 => 134,  389 => 132,  387 => 131,  381 => 130,  376 => 128,  371 => 125,  365 => 123,  363 => 122,  357 => 121,  352 => 119,  347 => 116,  341 => 114,  339 => 113,  333 => 112,  328 => 110,  323 => 107,  317 => 105,  315 => 104,  309 => 103,  304 => 101,  299 => 98,  293 => 96,  291 => 95,  285 => 94,  280 => 92,  275 => 89,  269 => 87,  267 => 86,  261 => 85,  256 => 83,  246 => 76,  241 => 74,  231 => 67,  227 => 66,  222 => 64,  216 => 63,  210 => 60,  204 => 56,  189 => 53,  180 => 52,  176 => 51,  171 => 49,  166 => 46,  151 => 43,  142 => 42,  138 => 41,  133 => 39,  128 => 36,  122 => 34,  120 => 33,  114 => 32,  109 => 30,  104 => 28,  98 => 25,  95 => 24,  88 => 20,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/newslettersubscribepopup/admin/view/template/module/newslettersubscribepopup.twig", "C:\\xampp\\htdocs\\OPC052L03\\extension\\newslettersubscribepopup\\admin\\view\\template\\module\\newslettersubscribepopup.twig");
    }
}
