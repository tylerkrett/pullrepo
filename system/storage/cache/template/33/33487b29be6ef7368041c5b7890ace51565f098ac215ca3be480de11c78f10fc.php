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

/* extension/ishiinstagramblock/catalog/view/template/module/ishiinstagramblock.twig */
class __TwigTemplate_eb42a459e6ac858b8aff18444717f073010d27f022061de62f7675f046b5ca34 extends Template
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
        echo "<div id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishiinstagramblock\">
    <div class=\"home-title\">  
        <a>
        ";
        // line 4
        echo ($context["heading"] ?? null);
        echo "<span> @";
        echo ($context["username"] ?? null);
        echo "</span>
        </a>
    </div>
    <div class=\"ishiinstagram-inner\">
        <div id=\"ishiinstagram-carousel\" class=\"owl-carousel\">
        </div>
    </div>
<script type=\"text/javascript\">
jQuery(document).ready(function (\$) {
  var userFeed = new Instafeed({
      get: 'user',
      target: \"ishiinstagram-carousel\",
      userId: '";
        // line 16
        echo ($context["userid"] ?? null);
        echo "',
      accessToken: '";
        // line 17
        echo ($context["accesstoken"] ?? null);
        echo "',
      resolution: 'standard_resolution',
      sortBy: '";
        // line 19
        echo ($context["sortby"] ?? null);
        echo "',
      limit: 6,
      template:'<div class=\"item\"><a href=";
        // line 21
        echo "{{link";
        echo "}} target=\"_blank\" id=";
        echo "{{id";
        echo "}}><img src=";
        echo "{{image";
        echo "}} /><div class=\"image-overlay\"><span></span></div><span class=\"instagram\"><i class=\"fa-brands fa-instagram\"></i></span></a><div class=\"text-container\"><span class=\"likes\"><span class=\"likes-count\">";
        echo "{{likes";
        echo "}}</span><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></span><span class=\"comments\"><span class=\"comments-count\">";
        echo "{{comments";
        echo "}}</span><i class=\"fa fa-comments\" aria-hidden=\"true\"></i></span></div></div>',
      links: false,
      after: function(){
        \$('#ishiinstagram-carousel.owl-carousel').owlCarousel({
            loop:true,
            dots:false,
            nav:false,
            margin: 0,
            autoplay:false,
            autoplayTimeout:5000,
            smartSpeed: 2500,
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            responsive:{
                0:{
                    items:2
                },
                350:{
                    items:2
                },
                480:{
                    items:2
                },
                544:{
                    items:2
                },
                768:{
                    items:3
                },
                992:{
                    items:4
                },
                1200: {
                    items:6
                }
            }
        });
        insertDummyData();
        resizeInstagramTitle();
      }
  });
    userFeed.run();
});

function insertDummyData() {

    \$(\"#ishiinstagram-carousel .owl-item\").each(function(){
      \$(this).find(\".comments-count\").text(niceNumberDisplay(Math.floor((Math.random() * 10000) + 1)));
      \$(this).find(\".likes-count\").text(niceNumberDisplay(Math.floor((Math.random() * 100000) + 1)));
    });
}
function niceNumberDisplay(num) {
    var n = parseFloat(num);
    if(n > 1000000) {
        return Math.round(n / 1000000) + 'm';
    } else if(n > 1000) {
        return Math.round(n / 1000) + 'k';
    } else {
        return n.toFixed(0);
    }
}

function resizeInstagramTitle() {
    \$('.ishiinstagramblock .home-title.special').css('width',\$('#ishiinstagram-carousel .owl-item').css('width'));
}

</script>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/ishiinstagramblock/catalog/view/template/module/ishiinstagramblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  70 => 19,  65 => 17,  61 => 16,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishiinstagramblock/catalog/view/template/module/ishiinstagramblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishiinstagramblock\\catalog\\view\\template\\module\\ishiinstagramblock.twig");
    }
}
