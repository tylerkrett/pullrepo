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

/* extension/ishilinklist/catalog/view/template/module/ishilinklist.twig */
class __TwigTemplate_ae49d30c2a4347611bdab199b65ce1cd6e1a8725f214971db15e0d01f86dff14 extends Template
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
        echo "<section class=\"linklist_block container clearfix\">
\t<div class=\"block_content\">\t\t
        
        <div class=\"section-header\">
\t      <div class=\"subtitle\">";
        // line 5
        echo ($context["subtitle"] ?? null);
        echo "</div>
\t      <h2 class=\"home-title\">";
        // line 6
        echo ($context["title"] ?? null);
        echo "</h2>
\t    </div>
\t\t<div id=\"linklist-carousel\" class=\"owl-carousel\">
\t\t    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["linklists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["linklist"]) {
            echo " 
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"linklist-inner\">
\t\t\t\t\t\t\t<div class=\"linklist\">
\t\t\t\t\t\t\t\t<div class=\"link-img\">
\t\t\t\t\t\t\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["linklist"], "image", [], "any", false, false, false, 14)) {
                echo " 
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["linklist"], "image", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />\t
\t\t\t\t\t\t\t\t\t";
            }
            // line 16
            echo "\t\t
\t\t\t            \t\t</div>\t\t\t
\t\t\t\t\t\t\t\t<div class=\"linklist-desc\">
\t\t\t\t\t\t\t\t\t<h3> ";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["linklist"], "title", [], "any", false, false, false, 19);
            echo " </h3> 
\t\t\t\t\t\t\t\t\t<div class=\"sub-title\">
\t\t\t\t\t\t\t\t\t\t";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["linklist"], "sub_title", [], "any", false, false, false, 21);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["linklist"], "description", [], "any", false, false, false, 24);
            echo "
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div> \t\t\t\t\t
\t\t\t\t\t\t\t</div> \t
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linklist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</div>
\t</div>
\t<script type=\"text/javascript\">
\t\t\$('#linklist-carousel').owlCarousel({
\t        loop:true,
\t\t\tnav:false,
\t\t\tdots:true,
\t\t\tmargin: 30,
\t\t\trewind:true,
\t\t\tautoplay: false,
\t        rtl: \$('html').attr('dir') == 'rtl'? true : false,
\t        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t        responsive:{
\t            0:{
                items:1
\t\t\t\t},
\t\t\t\t544:{
\t\t\t\t\titems:1
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems:3
\t\t\t\t},
\t\t\t\t1300:{
\t\t\t\t\titems:3
\t\t\t\t}
\t        }
\t    }); 
\t</script>
</section>";
    }

    public function getTemplateName()
    {
        return "extension/ishilinklist/catalog/view/template/module/ishilinklist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  92 => 24,  86 => 21,  81 => 19,  76 => 16,  67 => 15,  63 => 14,  53 => 9,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishilinklist/catalog/view/template/module/ishilinklist.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\ishilinklist\\catalog\\view\\template\\module\\ishilinklist.twig");
    }
}
