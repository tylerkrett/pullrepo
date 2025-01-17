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

/* extension/blogger/catalog/view/template/information/blogger_blogs.twig */
class __TwigTemplate_d2e317af44a5c131ec89e538dde32540c30f74ef10a4ae0487c6722e0a7d69dd extends Template
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
        echo " 
<div class=\"breadcrumb-container\">
  <h2 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h2>
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
    <li><a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo " 
  </ul>
</div>
<div class=\"container\">
  <div class=\"wrapper_container row row-responsive\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 13
            $context["class"] = "col-sm-6";
            echo " 
    ";
        } elseif ((        // line 14
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 15
            $context["class"] = "col-sm-9";
            echo " 
    ";
        } else {
            // line 16
            echo " 
    ";
            // line 17
            $context["class"] = "col-sm-12";
            echo " 
    ";
        }
        // line 18
        echo " 
    <div id=\"content\" class=\"";
        // line 19
        echo ($context["class"] ?? null);
        echo " all-blog\">";
        echo ($context["content_top"] ?? null);
        echo " 
      <h1>";
        // line 20
        echo ($context["text_blogs"] ?? null);
        echo "</h1>
      ";
        // line 21
        if (($context["blogs"] ?? null)) {
            echo " 
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
                echo " 
          <div class=\"sdsarticleCat clearfix row row-responsive\">
            ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 24)) {
                    echo " 
              ";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["blog"], "blog_data", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                        echo " 
                <div class=\"blog-content row\">
                    ";
                        // line 27
                        if (twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 27)) {
                            echo " 
                      <div class=\"blog-left-content articleContent col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"blog-image\">
                          <img src=\"";
                            // line 30
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 30);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" class=\"img-fluid\" />
                          <div class=\"post-image-hover\"> </div>
                          <p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                            // line 32
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "image", [], "any", false, false, false, 32);
                            echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a><a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 32);
                            echo "\"><i class=\"fa fa-link\"></i></a></p>
                        </div>
                      </div>
                    ";
                        }
                        // line 35
                        echo " 
                      <div class=\"blog-right-content smartblog-desc col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"blog-date-comment\">
                          <div class=\"blog-title\"><a href=\"";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 38);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 38);
                        echo "</a></div>
                          <div class=\"flex\">
                              <div class=\"blog-date\">
                                <div class=\"date-time\">
                                <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"       http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"511.634px\" height=\"511.634px\" viewBox=\"0 0 511.634 511.634\" style=\"enable-background:new 0 0 511.634 511.634;\" xml:space=\"preserve\">
                                 <path d=\"M482.513,83.942c-7.225-7.233-15.797-10.85-25.694-10.85h-36.541v-27.41c0-12.56-4.477-23.315-13.422-32.261
                                  C397.906,4.475,387.157,0,374.591,0h-18.268c-12.565,0-23.318,4.475-32.264,13.422c-8.949,8.945-13.422,19.701-13.422,32.261v27.41
                                  h-109.63v-27.41c0-12.56-4.475-23.315-13.422-32.261C178.64,4.475,167.886,0,155.321,0H137.05
                                  c-12.562,0-23.317,4.475-32.264,13.422c-8.945,8.945-13.421,19.701-13.421,32.261v27.41H54.823c-9.9,0-18.464,3.617-25.697,10.85
                                  c-7.233,7.232-10.85,15.8-10.85,25.697v365.453c0,9.89,3.617,18.456,10.85,25.693c7.232,7.231,15.796,10.849,25.697,10.849h401.989
                                  c9.897,0,18.47-3.617,25.694-10.849c7.234-7.234,10.852-15.804,10.852-25.693V109.639
                                  C493.357,99.739,489.743,91.175,482.513,83.942z M137.047,475.088H54.823v-82.23h82.224V475.088z M137.047,374.59H54.823v-91.358
                                  h82.224V374.59z M137.047,264.951H54.823v-82.223h82.224V264.951z M130.627,134.333c-1.809-1.809-2.712-3.946-2.712-6.423V45.686
                                  c0-2.474,0.903-4.617,2.712-6.423c1.809-1.809,3.946-2.712,6.423-2.712h18.271c2.474,0,4.617,0.903,6.423,2.712
                                  c1.809,1.807,2.714,3.949,2.714,6.423v82.224c0,2.478-0.909,4.615-2.714,6.423c-1.807,1.809-3.946,2.712-6.423,2.712H137.05
                                  C134.576,137.046,132.436,136.142,130.627,134.333z M246.683,475.088h-91.365v-82.23h91.365V475.088z M246.683,374.59h-91.365
                                  v-91.358h91.365V374.59z M246.683,264.951h-91.365v-82.223h91.365V264.951z M356.323,475.088h-91.364v-82.23h91.364V475.088z
                                   M356.323,374.59h-91.364v-91.358h91.364V374.59z M356.323,264.951h-91.364v-82.223h91.364V264.951z M349.896,134.333
                                  c-1.807-1.809-2.707-3.946-2.707-6.423V45.686c0-2.474,0.9-4.617,2.707-6.423c1.808-1.809,3.949-2.712,6.427-2.712h18.268
                                  c2.478,0,4.617,0.903,6.427,2.712c1.808,1.807,2.707,3.949,2.707,6.423v82.224c0,2.478-0.903,4.615-2.707,6.423
                                  c-1.807,1.809-3.949,2.712-6.427,2.712h-18.268C353.846,137.046,351.697,136.142,349.896,134.333z M456.812,475.088h-82.228v-82.23
                                  h82.228V475.088z M456.812,374.59h-82.228v-91.358h82.228V374.59z M456.812,264.951h-82.228v-82.223h82.228V264.951z\"></path>
                                 </svg>
                              </div>
                                ";
                        // line 62
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "date_added", [], "any", false, false, false, 62);
                        echo "
                              </div>
                              <div class=\"comment-wrapper\">
                                <i class=\"fa fa-comments\"></i> <span class=\"write-comment-count\">";
                        // line 65
                        echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 65);
                        echo " ";
                        echo ($context["entry_comment"] ?? null);
                        echo "</span>
                                
                              </div>
                          </div>
                          
                        </div>
                        <div class=\"blog-desc\">";
                        // line 71
                        echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 71), 0, 200);
                        echo " </div>      
                        <div class=\"read-more\"><a href=\"";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["topic"], "href", [], "any", false, false, false, 72);
                        echo "\" class=\"btn btn-primary\">";
                        echo ($context["text_read_more"] ?? null);
                        echo "</a></div>  
                      </div>
                </div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo " 
            ";
                } else {
                    // line 76
                    echo " 
              <div class=\"panel-body text-center\">";
                    // line 77
                    echo ($context["text_no_blogs"] ?? null);
                    echo "</div>
            ";
                }
                // line 78
                echo " 
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo " 
      ";
        } else {
            // line 81
            echo " 
        <div class=\"panel-body text-center\">";
            // line 82
            echo ($context["text_no_blogs"] ?? null);
            echo "</div>
      ";
        }
        // line 83
        echo " 
      ";
        // line 84
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
  ";
        // line 86
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 88
        echo ($context["footer"] ?? null);
        echo "
<style type=\"text/css\">
  .flex {
    display: flex;
    align-items: center;
  }
  @media(max-width:991px){
    .flex{
      justify-content: center;
    }
  }
</style>";
    }

    public function getTemplateName()
    {
        return "extension/blogger/catalog/view/template/information/blogger_blogs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 88,  265 => 86,  259 => 84,  256 => 83,  251 => 82,  248 => 81,  244 => 80,  236 => 78,  231 => 77,  228 => 76,  224 => 75,  212 => 72,  208 => 71,  197 => 65,  191 => 62,  162 => 38,  157 => 35,  148 => 32,  139 => 30,  133 => 27,  126 => 25,  122 => 24,  115 => 22,  111 => 21,  107 => 20,  101 => 19,  98 => 18,  93 => 17,  90 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  63 => 7,  53 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/blogger/catalog/view/template/information/blogger_blogs.twig", "C:\\xampp\\htdocs\\OPC052L03\\extension\\blogger\\catalog\\view\\template\\information\\blogger_blogs.twig");
    }
}
