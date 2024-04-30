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

/* extension/newslettersubscribe/catalog/view/template/module/newslettersubscribe.twig */
class __TwigTemplate_62b7cc162cffb6458ae7d4b14d00ba11af00a22a2cd9c8cdf1a63e36c0acef13 extends Template
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
        echo "<div id=\"_desktop_block_newsletter\" class=\"block_newsletter ";
        echo ($context["column_class"] ?? null);
        echo "\">
    <h5 class=\"d-none d-lg-block\">";
        // line 2
        echo ($context["title"] ?? null);
        echo "</h5>
\t<h3 class=\"home-title d-lg-none\">";
        // line 3
        echo ($context["mobile_title"] ?? null);
        echo "</h3>
\t<div id=\"boxes\" class=\"newsletter-block\">
\t\t<div class=\"newsletter-box\">
\t\t\t<div style=\"\" id=\"dialog\" class=\"window\">
\t\t\t\t<div class=\"block phone col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t<span class=\"icon phone\">
\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<a href=\"tel:";
        // line 12
        echo ($context["config_telephone"] ?? null);
        echo "\">";
        echo ($context["config_telephone"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"block email col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<a href=\"mailto:";
        // line 20
        echo ($context["config_email"] ?? null);
        echo "\">";
        echo ($context["config_email"] ?? null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"box\">
\t\t\t\t\t<div id=\"newsletter-container\" class=\"box-content\">
\t\t\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t\t\t<div id=\"frm_subscribe\" class=\"newsletter_form\">
\t\t\t\t\t\t\t\t<form name=\"newslettersubscribe-form\"id=\"newslettersubscribe-form\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-email form-control\" placeholder=\"";
        // line 28
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email\">
\t\t\t\t\t\t\t\t\t<a class=\"button btn-submit btn-primary\" onclick=\"email_subscribe()\">
\t\t\t\t\t\t\t\t\t\t<span class=\"subscribe-btn d-md-block d-none\">";
        // line 30
        echo ($context["entry_button"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-md-none\">";
        // line 31
        echo ($context["entry_buttons"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"social-container\">
\t\t\t\t<ul>
\t\t\t\t";
        // line 42
        if (($context["facebook"] ?? null)) {
            // line 43
            echo "\t\t\t\t\t<li class=\"facebook\"><a href=\"";
            echo ($context["facebook"] ?? null);
            echo "\" ><i class=\"fa-brands fa-facebook-f\"></i></a></li>
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t";
        if (($context["twitter"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t<li class=\"twitter\"><a href=\"";
            echo ($context["twitter"] ?? null);
            echo "\" ><i class=\"fa-brands fa-twitter\"></i></a></li>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        if (($context["youtube"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t<li class=\"youtube\"><a href=\"";
            echo ($context["youtube"] ?? null);
            echo "\" ><i class=\"fa-brands fa-youtube\"></i></a></li>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t";
        if (($context["gplus"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t<li class=\"googleplus\"><a href=\"";
            echo ($context["gplus"] ?? null);
            echo "\"><i class=\"fa-brands fa-google-plus\"></i></a></li>
\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t";
        if (($context["rss"] ?? null)) {
            // line 55
            echo "\t\t\t\t\t<li class=\"rss\"><a href=\"";
            echo ($context["rss"] ?? null);
            echo "\" ><i class=\"fa-brands fa-rss\"></i></a></li>
\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t";
        if (($context["pinterest"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t<li class=\"pinterest\"><a href=\"";
            echo ($context["pinterest"] ?? null);
            echo "\" ><i class=\"fa-brands fa-pinterest\"></i></a></li>
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t";
        if (($context["vimeo"] ?? null)) {
            // line 61
            echo "\t\t\t\t\t<li class=\"vimeo\"><a href=\"";
            echo ($context["vimeo"] ?? null);
            echo "\" ><i class=\"fa-brands fa-vimeo\"></i> </a></li>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t";
        if (($context["instagram"] ?? null)) {
            // line 64
            echo "\t\t\t\t\t<li class=\"instagram\"><a href=\"";
            echo ($context["instagram"] ?? null);
            echo "\" ><i class=\"fa-brands fa-instagram\"></i></a></li>
\t\t\t\t";
        }
        // line 65
        echo "   
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\">
\t\tfunction email_subscribe(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'post',
\t\t\t\turl: 'index.php?route=extension/newslettersubscribe/module/newslettersubscribe|subscribe',
\t\t\t\tdataType: 'html',
\t\t\t\tdata:\$(\"#newslettersubscribe-form\").serialize(),
\t\t\t\tsuccess: function (html) {
\t\t\t\ttry {
\t\t\t\t
\t\t\t\t\teval(html);
\t\t\t\t
\t\t\t\t} catch (e) {
\t\t\t\t}
\t\t\t\t\t
\t\t\t}});\t
\t\t}
\t\t\$(document).ready(function() {
\t\t\t\$('#subscribe_email').keypress(function(e) {
\t\t\t\tif(e.which == 13) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\temail_subscribe();
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/newslettersubscribe/catalog/view/template/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  172 => 64,  169 => 63,  163 => 61,  160 => 60,  154 => 58,  151 => 57,  145 => 55,  142 => 54,  136 => 52,  133 => 51,  127 => 49,  124 => 48,  118 => 46,  115 => 45,  109 => 43,  107 => 42,  93 => 31,  89 => 30,  84 => 28,  71 => 20,  58 => 12,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/newslettersubscribe/catalog/view/template/module/newslettersubscribe.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\newslettersubscribe\\catalog\\view\\template\\module\\newslettersubscribe.twig");
    }
}
