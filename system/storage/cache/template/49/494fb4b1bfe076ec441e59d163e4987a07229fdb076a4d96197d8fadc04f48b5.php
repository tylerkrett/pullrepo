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

/* extension/blogger/catalog/view/template/module/blogger.twig */
class __TwigTemplate_cc3e85f028f4b0f334f5b6c4424b2f13b9bcdc6b51151c695a6a78373d8ca708 extends Template
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
        echo "<section class=\"smartblog_block clearfix ";
        echo ($context["column_class"] ?? null);
        echo "\">
    <div class=\"container\">
        <h3 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h3>
        <div class=\"block_content\">
            <div id=\"smartblog-carousel\" class=\"owl-carousel\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "         
                <div class=\"blog_post item\">
                    <div class=\"news_module_image_holder\">
                        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 9)) {
                echo " 
                        <a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 10);
                echo "\">
                            <img src=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
                        </a>
                        <a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 13);
                echo "\"><i class=\"fa fa-link\"></i></a>
                        ";
            }
            // line 15
            echo "                        <div class=\"smartbloginfo\">
                            <div class=\"write-comment d-none\"> <a href=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 16);
            echo "\"> <i class=\"fa fa-comment\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 16);
            echo " ";
            echo ($context["entry_comment"] ?? null);
            echo "</a> </div>
                            <div class=\"month-year\"><span class=\"date_month\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 17);
            echo "</span> <span class=\"day_year\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "month_added", [], "any", false, false, false, 17);
            echo "</span></div>
                        </div>
                    </div>
                    <div class=\"blog_content\">   
                        <h4 class=\"blog_title\"><a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 21);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 21);
            echo "</a> </h4>
                        
                        <div class=\"blog-desc\"> ";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 23);
            echo " </div>
                            <div class=\"read-more\"><a href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 24);
            echo "\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a></div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
        </div>
    </div>  
    <script type=\"text/javascript\">
        \$('.smartblog_block .owl-carousel').owlCarousel({
            loop: false,
            nav:true,
            dots:false,
            margin: 30,
            rtl: \$('html').attr('dir') == 'rtl'? true : false,
            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"], 
            autoplay:false, 
            responsive:{
                0:{
                    items:1
                },
                544:{
                    items:1
                },
                768:{
                    items:2
                },
                992:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });
    </script>
</section>  ";
    }

    public function getTemplateName()
    {
        return "extension/blogger/catalog/view/template/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  110 => 24,  106 => 23,  99 => 21,  90 => 17,  82 => 16,  79 => 15,  74 => 13,  65 => 11,  61 => 10,  57 => 9,  49 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/blogger/catalog/view/template/module/blogger.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\blogger\\catalog\\view\\template\\module\\blogger.twig");
    }
}
