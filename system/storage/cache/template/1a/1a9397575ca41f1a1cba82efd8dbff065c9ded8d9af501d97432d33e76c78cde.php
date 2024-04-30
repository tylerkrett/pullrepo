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

/* extension/ishiextensivesearchblock/catalog/view/template/module/ishiextensivesearchblock.twig */
class __TwigTemplate_1240d66a8159985c5732383ee76d08d42f8fcb3a0f070dfd8c2cd83993c6bf25 extends Template
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
        echo "
<section class=\"ishicategorysearch\" id=\"ishicategorysearch\" data-source-url=\"";
        // line 2
        echo ($context["bgimage"] ?? null);
        echo "\" style=\"background-color: ";
        echo ($context["bg_color"] ?? null);
        echo ";background-image: url(";
        echo ($context["image"] ?? null);
        echo ")\">
    <div class=\"search-img-left\">
      <img src=\"";
        // line 4
        echo ($context["banner1_image"] ?? null);
        echo " \" alt=\"search-img\" />
    </div>
    <div class=\"container\">
        <div class=\"search-block\">
          <div class=\"section-header\">
            <h3 class=\"subtitle\">";
        // line 9
        echo ($context["subtitle"] ?? null);
        echo "</h3>
            <h3 class=\"home-title\">";
        // line 10
        echo ($context["heading"] ?? null);
        echo "</h3>
            <div class=\"desc\">";
        // line 11
        echo ($context["desc"] ?? null);
        echo "</div>
        </div>
        <div id=\"search\">
\t\t\t <input id=\"ajax-search-text\" type=\"text\" name=\"search\" value=\"";
        // line 14
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\">
\t\t    <div class=\"ajaxishi-search\" style=\"display: none;\"><ul></ul></div>
\t\t    <div class=\"search-button\">
              \t<button id=\"ajax-search-btn\" type=\"submit\" class=\"search-submit btn-default\">
                \t<span class=\"serch-text\">";
        // line 18
        echo ($context["text_btn"] ?? null);
        echo "</span>
              \t</button>
            </div>
\t\t    </div>
        </div>
    </div>
    <div class=\"search-img-right\">
        <img src=\"";
        // line 25
        echo ($context["banner1_image"] ?? null);
        echo " \" alt=\"search-img\" />
    </div>
</section>
<script>
\t\$( \"input[name=\\'search\\']\" ).keyup(function( event ) {
  \$('input[name=\\'search\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=product/search|autocomplete&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(result) {
          var products = result.products;
          \$('.ajaxishi-search ul li').remove();
            \$.each(products, function(index,product) {
            var html = '<li>';
              html += '<div>';
              html += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
              html += '<div class=\"product-image\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
              html += '<div class=\"product-desc\">';
              html += '<div class=\"product-name\">' + product.name + '</div>';
              if (product.special) {
                              html += '<div class=\"product-price\"><span class=\"special\">' + product.price + '</span><span class=\"price\">' + product.special + '</span></div>';
                          } else {
                              html += '<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
              }
              html += '</div>';
              html += '</a>';
              html += '</div>';
              html += '</li>';
              \$('.ajaxishi-search ul').append(html);
            });
            \$('.ajaxishi-search').css('display','block');
                  return false;
        }
      });
    },
    'select': function(product) {
      \$('input[name=\\'filter_name\\']').val(product.name);
    }
  });
});
</script>
<script>
    (function() {
        document.getElementById('ajax-search-text').addEventListener('keypress', function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                document.getElementById('ajax-search-btn').click();
            }
        });
    }());
</script>";
    }

    public function getTemplateName()
    {
        return "extension/ishiextensivesearchblock/catalog/view/template/module/ishiextensivesearchblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  80 => 18,  71 => 14,  65 => 11,  61 => 10,  57 => 9,  49 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiextensivesearchblock/catalog/view/template/module/ishiextensivesearchblock.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishiextensivesearchblock\\catalog\\view\\template\\module\\ishiextensivesearchblock.twig");
    }
}
