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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_4f6a413d260e407a71c443bdaf1b2d2bc4bc449b65e2a57787448f8ff0036eb9 extends Template
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
        echo "</main>
<div id=\"_mobile_column_left\" class=\"container col-3\"></div>
<div id=\"_mobile_column_right\" class=\"container\"></div>
<footer id=\"footer\" class=\"";
        // line 4
        echo ($context["ishome"] ?? null);
        echo "\">
  <div class=\"footer-container\">
    <div class=\"container\">
      <div class=\"footer-before\">
        <div class=\"row\">
          ";
        // line 9
        echo ($context["footer_before"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"footer-middle\">
        <div class=\"row\">
          <div id=\"_mobile_block_newsletter\" class=\"block_newsletter ";
        // line 14
        echo ($context["column_class"] ?? null);
        echo "\"></div>
         ";
        // line 15
        echo ($context["footer_middle"] ?? null);
        echo " 
        </div>
      </div>
    </div>
  </div>
  <div class=\"footer-after\">
    <div class=\"container\">
      <div class=\"row\">         
        <div class=\"col-md-6 col-xs-12px\">
          <p class=\"footer-aftertext\">";
        // line 24
        echo ($context["powered"] ?? null);
        echo "</p>
        </div>
        <div class=\"col-md-6 col-xs-12px\">
          ";
        // line 27
        echo ($context["footer_after"] ?? null);
        echo "
        </div>
      </div>
    </div>
  </div>
    <!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
<a id=\"slidetop\" href=\"#\" ></a>
";
        // line 37
        echo ($context["popup"] ?? null);
        echo "
<div class=\"OpenCart-cookies section\">
  <div id=\"cookieconsent\">
  \t<div class=\"message\">
  \t\t<p> ";
        // line 41
        echo ($context["text_footer_cookies"] ?? null);
        echo " </p>
  \t</div>
  \t<button type=\"button\" class=\"close btn\" data-dismiss=\"modal\">";
        // line 43
        echo ($context["text_got_it"] ?? null);
        echo "</button>
  </div>
</div>
</footer>
";
        // line 47
        echo ($context["cookie"] ?? null);
        echo "
<script src=\"";
        // line 48
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/javascript\"></script>
";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 50
            echo "  <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 50);
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</body></html>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  124 => 50,  120 => 49,  116 => 48,  112 => 47,  105 => 43,  100 => 41,  93 => 37,  80 => 27,  74 => 24,  62 => 15,  58 => 14,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/footer.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\catalog\\view\\template\\common\\footer.twig");
    }
}
