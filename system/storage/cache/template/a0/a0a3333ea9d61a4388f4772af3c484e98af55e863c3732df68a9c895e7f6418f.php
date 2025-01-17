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

/* extension/newslettersubscribepopup/catalog/view/template/module/newslettersubscribepopup.twig */
class __TwigTemplate_c08e32fda67abecc2c97459cdbb3c7da3827179f240bd76d5142daf2143f23d5 extends Template
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
        echo "<div id=\"opencartpopup\">
\t<!-- <div id=\"newsletter-popup-overlay\"></div> -->
\t<div id=\"ishi-newslatterpopup\">
\t\t<div id=\"newsletter_popbox\" class=\"ishi-newslatterpopup\" tabindex=\"-1\"></div>
\t\t\t<div id=\"popup-bg-color\" class=\"popup-bg-color\" style=\"background-color: ";
        // line 5
        echo ($context["bg_color"] ?? null);
        echo "\">
\t\t\t\t<div id=\"modalclose-newsletter\" onclick=\"myFunction()\">
\t\t\t\t\t<svg aria-hidden=\"true\" focusable=\"false\" role=\"presentation\" class=\"icon\" viewBox=\"0 0 16 17\">
\t\t\t\t\t    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z\" fill=\"currentColor\"></path>
\t\t   \t\t    </svg>
\t\t\t\t</div>
\t\t\t\t<div class=\"popup-contact-info\">
\t\t\t\t\t<div class=\"pop-container\">
\t\t\t\t\t\t<div class=\"row popup-contact-info-row\">
\t\t\t\t\t\t  <div class=\"newsletter-popup-image col-xxl-4 col-xl-3 col-lg-3 col-md-12 d-lg-inline-block d-none\">
\t\t\t\t\t\t   \t<img src=\"";
        // line 15
        echo ($context["newsletter_banner"] ?? null);
        echo "\" alt=\"newsletterpop-banner\" class=\"img-fluid\">
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  <div class=\"newsletter-text col-xxl-8 col-xl-9 col-lg-9 col-md-12 col-sm-12\">
\t\t\t\t\t\t  \t<div class=\"row\">
\t\t\t\t\t\t  \t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-sm-12 popup-text\">
\t\t\t\t\t\t  \t\t\t<h3 class=\"popup-title\">";
        // line 20
        echo ($context["title"] ?? null);
        echo "</h3>
\t\t\t\t\t\t  \t\t\t<p class=\"popup-desc\"> ";
        // line 21
        echo ($context["desc"] ?? null);
        echo "</p>
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t  \t\t<div class=\"col-lg-6 col-md-6 col-sm-12 newsletter-container\">
\t\t\t\t\t\t  \t\t\t<form name=\"newslettersubscribepopup-form\"id=\"newslettersubscribepopup-form\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text-email form-control\" placeholder=\"";
        // line 25
        echo ($context["entry_email"] ?? null);
        echo "\" value=\"\" name=\"subscribepop_email\" id=\"subscribepop_email\">
\t\t\t\t\t\t\t\t\t\t<a class=\"button btn-submit btn-primary\" onclick=\"email_subscribepop()\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"subscribe-btn d-md-block d-none\">";
        // line 27
        echo ($context["entry_button"] ?? null);
        echo "</span>
\t\t\t \t\t\t\t\t\t\t\t<span class=\"d-md-none\">";
        // line 28
        echo ($context["entry_buttons"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div id=\"notification-normalpopup\"></div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<div class=\"dont-show\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"dono-show-check\" type=\"checkbox\" id=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<span> Don't show again </span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"social-container\">
\t\t\t\t\t\t\t\t\t    <ul>
\t\t\t\t\t\t\t\t\t      ";
        // line 40
        if (($context["facebook"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"facebook\"><a href=\"";
            echo ($context["facebook"] ?? null);
            echo "\" ><i class=\"fa-brands fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 43
        echo "\t\t\t\t\t\t\t\t\t      ";
        if (($context["twitter"] ?? null)) {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"twitter\"><a href=\"";
            echo ($context["twitter"] ?? null);
            echo "\" ><i class=\"fa-brands fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 46
        echo "\t\t\t\t\t\t\t\t\t      ";
        if (($context["youtube"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"youtube\"><a href=\"";
            echo ($context["youtube"] ?? null);
            echo "\" ><i class=\"fa-brands fa-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 49
        echo "\t\t\t\t\t\t\t\t\t      ";
        if (($context["gplus"] ?? null)) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"googleplus\"><a href=\"";
            echo ($context["gplus"] ?? null);
            echo "\"><i class=\"fa-brands fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 52
        echo "\t\t\t\t\t\t\t\t\t      ";
        if (($context["rss"] ?? null)) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"rss\"><a href=\"";
            echo ($context["rss"] ?? null);
            echo "\" ><i class=\"fa-brands fa-rss\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 55
        echo "\t\t\t\t\t\t\t\t\t      ";
        if (($context["pinterest"] ?? null)) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"pinterest\"><a href=\"";
            echo ($context["pinterest"] ?? null);
            echo "\" ><i class=\"fa-brands fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 58
        echo "\t\t\t\t\t\t\t\t\t      ";
        if (($context["vimeo"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"vimeo\"><a href=\"";
            echo ($context["vimeo"] ?? null);
            echo "\" ><i class=\"fa-brands fa-vimeo\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 61
        echo "\t\t\t\t\t\t\t\t\t      ";
        if (($context["instagram"] ?? null)) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t        <li class=\"instagram\"><a href=\"";
            echo ($context["instagram"] ?? null);
            echo "\" ><i class=\"fa-brands fa-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t\t      ";
        }
        // line 63
        echo "   
\t\t\t\t\t\t\t\t\t    </ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  \t\t</div>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script type=\"text/javascript\">

\t\t\t\tfunction email_subscribepop(){
\t\t\t\t\tlet check_checkboxVal = \$(\"#opencartpopup #checkbox\").prop('checked');
\t\t\t\t\tconsole.log(\"check_checkboxVal == \", check_checkboxVal);

\t\t\t\t    \$.ajax({
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\turl: 'index.php?route=extension/newslettersubscribepopup/module/newslettersubscribepopup|subscribe',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tdata:\$(\"#newslettersubscribepopup-form\").serialize(),
\t\t\t\t\t\tsuccess: function (html) {
\t\t\t\t\t\t\tconsole.log(\"responce == \", html);
\t\t\t\t\t\t\tif (/alert-success/.test(html)) {
\t\t\t\t\t\t\t\tif(check_checkboxVal) {
\t\t\t\t\t\t\t\t\tsetTheCookie(\"opencartpopup\", \"true\", 14);
\t\t\t\t\t\t\t\t\t\$(\"#opencartpopup\").hide();
\t\t\t\t\t\t\t\t\tdocument.body.classList.remove(\"active\");
\t\t\t\t\t\t\t\t\tconsole.log(\"cooki set\")
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tdocument.body.classList.remove(\"active\");
\t\t\t\t\t\t\t\t\t\$(\"#opencartpopup\").hide();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}\t\t\t\t\t\t\t
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\teval(html);
\t\t\t\t\t\t} catch (e) {
\t\t\t\t\t\t}\t
\t\t\t\t\t}});\t
\t\t\t\t}
\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\$('#subscribepop_email').keypress(function(e) {
\t\t\t\t\t\tif(e.which == 13) {
\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\temail_subscribepop();
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
               

                // onload add class
\t\t\t    window.onload = function () {

\t\t\t    \tif(getTheCookie(\"opencartpopup\") != \"true\") {
\t\t\t    \t\tdocument.body.classList.add(\"active\");
\t\t            var myElement = document.getElementById('newsletter_popbox');
\t\t            myElement.classList.add('active');

\t\t            var myElement = document.getElementById('popup-bg-color');
\t\t            myElement.classList.add('active');
\t\t\t\t    } else {

\t\t\t\t    }

\t\t\t    \t
\t\t        };

\t\t        \$(\"#modalclose-newsletter,#newsletter_popbox\").click(function(){
\t\t\t\t  \$(\".popup-bg-color,.ishi-newslatterpopup,body\").removeClass(\"active\");
\t\t\t\t});

\t\t        //onload remove class
\t\t\t</script>

\t\t\t<script type=\"text/javascript\">

\t\t\t\tvar hideButton = document.getElementById(\"modalclose-newsletter\");
\t\t\t\tvar sectionToHide = document.getElementById(\"opencart-popup\");


\t\t\t\thideButton.addEventListener(\"click\", function() {
\t\t\t\t    sectionToHide.style.display = \"none\";
\t\t\t\t});

                //section display none     
\t\t\t\tvar hideButton = document.getElementById(\"newsletter_popbox\");
\t\t\t\tvar sectionToHide = document.getElementById(\"opencart-popup\");


\t\t\t\thideButton.addEventListener(\"click\", function() {
\t\t\t\t    sectionToHide.style.display = \"none\";
\t\t\t\t});\t\t\t\t
\t\t\t</script>\t\t\t
\t\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/newslettersubscribepopup/catalog/view/template/module/newslettersubscribepopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  164 => 62,  161 => 61,  155 => 59,  152 => 58,  146 => 56,  143 => 55,  137 => 53,  134 => 52,  128 => 50,  125 => 49,  119 => 47,  116 => 46,  110 => 44,  107 => 43,  101 => 41,  99 => 40,  84 => 28,  80 => 27,  75 => 25,  68 => 21,  64 => 20,  56 => 15,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/newslettersubscribepopup/catalog/view/template/module/newslettersubscribepopup.twig", "C:\\xampp\\htdocs\\OPC052L03\\extension\\newslettersubscribepopup\\catalog\\view\\template\\module\\newslettersubscribepopup.twig");
    }
}
