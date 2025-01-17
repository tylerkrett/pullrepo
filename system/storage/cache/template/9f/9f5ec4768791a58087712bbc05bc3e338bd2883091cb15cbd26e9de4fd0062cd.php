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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_686d0b2a243b00171966c81d8005f674d7f4036382e4720bba914718e1e85a6d extends Template
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
  <h1 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h1>
  <ul class=\"breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
</div>
<div id=\"account-account\" class=\"container\">
  ";
        // line 11
        if (($context["success"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"wrapper_container row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 15
        echo ($context["content_top"] ?? null);
        echo ($context["content_center"] ?? null);
        echo "
      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
        // line 17
        echo ($context["text_my_account"] ?? null);
        echo "</h2></div>
        <div class=\"a-link-content\">
          <ul class=\"list-unstyled row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-5\">
            <li><a href=\"";
        // line 20
        echo ($context["edit"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-user-edit\"></i>";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 21
        echo ($context["password"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-key\"></i>";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 22
        echo ($context["address"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-address-card\"></i>";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 23
        echo ($context["wishlist"] ?? null);
        echo "\"><i class=\"far fa-2x mb-2 fa-grin-hearts\"></i>";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 24
        echo ($context["newsletter"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-envelope-open-text\"></i>";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
        // line 29
        echo ($context["text_my_orders"] ?? null);
        echo "</h2></div>
        <div class=\"a-link-content\">
            <ul class=\"list-unstyled row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-5\">
              <li><a href=\"";
        // line 32
        echo ($context["order"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-box-open\"></i>";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
              <!-- <li><a href=\"";
        // line 33
        echo ($context["subscription"] ?? null);
        echo "\">";
        echo ($context["text_subscription"] ?? null);
        echo "</a></li> -->
              <li><a href=\"";
        // line 34
        echo ($context["download"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-download\"></i>";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
              ";
        // line 35
        if (($context["reward"] ?? null)) {
            // line 36
            echo "                <li><a href=\"";
            echo ($context["reward"] ?? null);
            echo "\"><i class=\"fas fa-2x mb-2 fa-medal\"></i>";
            echo ($context["text_reward"] ?? null);
            echo "</a></li>
              ";
        }
        // line 38
        echo "              <li><a href=\"";
        echo ($context["return"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-undo\"></i>";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 39
        echo ($context["transaction"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-exchange-alt\"></i>";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
            <!-- <li><a href=\"";
        // line 40
        echo ($context["payment_method"] ?? null);
        echo "\"><i class=\"fas fa-2x mb-2 fa-money-check\"></i>";
        echo ($context["text_payment_method"] ?? null);
        echo "</a></li> -->
            </ul>
        </div>
      </div>
      ";
        // line 44
        if (($context["affiliate"] ?? null)) {
            // line 45
            echo "      <div class=\"a-link-list\">
        <div class=\"a-link-heading\"><h2>";
            // line 46
            echo ($context["text_my_affiliate"] ?? null);
            echo "</h2></div>
        <div class=\"a-link-content affiliate\">
          <ul class=\"list-unstyled row row-cols-2 row-cols-sm-3 row-cols-lg-4\">
            ";
            // line 49
            if ( !($context["tracking"] ?? null)) {
                // line 50
                echo "              <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\"><i class=\"fas fa-2x mb-2 fa-bullhorn\"></i>";
                echo ($context["text_affiliate_add"] ?? null);
                echo "</a></li>
            ";
            } else {
                // line 52
                echo "              <li><a href=\"";
                echo ($context["affiliate"] ?? null);
                echo "\"><i class=\"fas fa-2x mb-2 fa-user-edit\"></i>";
                echo ($context["text_affiliate_edit"] ?? null);
                echo "</a></li>
              <li><a href=\"";
                // line 53
                echo ($context["tracking"] ?? null);
                echo "\"> 
                <svg  version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" 
                     width=\"900px\" height=\"900px\" viewBox=\"0 0 47 47\" xml:space=\"preserve\">
                  <g>
                    <g id=\"Layer_1_110_\">
                      <g>
                        <path d=\"M17.567,15.938l-2.859-2.702c0.333-0.605,0.539-1.29,0.539-2.029c0-2.342-1.897-4.239-4.24-4.239
                          c-2.343,0-4.243,1.896-4.243,4.239c0,2.343,1.9,4.241,4.243,4.241c0.826,0,1.59-0.246,2.242-0.654l2.855,2.699
                          C16.536,16.922,17.023,16.399,17.567,15.938z\"/>
                        <path d=\"M29.66,15.6l3.799-6.393c0.374,0.107,0.762,0.184,1.169,0.184c2.347,0,4.244-1.898,4.244-4.241
                          c0-2.342-1.897-4.239-4.244-4.239c-2.343,0-4.239,1.896-4.239,4.239c0,1.163,0.469,2.214,1.227,2.981l-3.787,6.375
                          C28.48,14.801,29.094,15.169,29.66,15.6z\"/>
                        <path d=\"M42.762,20.952c-1.824,0-3.369,1.159-3.968,2.775l-5.278-0.521c0,0.04,0.006,0.078,0.006,0.117
                          c0,0.688-0.076,1.36-0.213,2.009l5.276,0.521c0.319,2.024,2.062,3.576,4.177,3.576c2.342,0,4.238-1.896,4.238-4.238
                          C47,22.85,45.104,20.952,42.762,20.952z\"/>
                        <path d=\"M28.197,37.624l-1.18-5.156c-0.666,0.232-1.359,0.398-2.082,0.481l1.182,5.157c-1.355,0.709-2.29,2.11-2.29,3.746
                          c0,2.342,1.896,4.237,4.243,4.237c2.342,0,4.238-1.896,4.238-4.237C32.311,39.553,30.479,37.692,28.197,37.624z\"/>
                        <path d=\"M14.357,25.37l-6.57,2.201c-0.758-1.158-2.063-1.926-3.548-1.926C1.896,25.645,0,27.542,0,29.884
                          c0,2.345,1.896,4.242,4.239,4.242c2.341,0,4.242-1.897,4.242-4.242c0-0.098-0.021-0.188-0.029-0.284l6.591-2.207
                          C14.746,26.752,14.51,26.077,14.357,25.37z\"/>
                        <circle cx=\"23.83\" cy=\"23.323\" r=\"7.271\"/>
                      </g>
                    </g>
                  </g>
                </svg>
               ";
                // line 78
                echo ($context["text_tracking"] ?? null);
                echo "</a></li>
            ";
            }
            // line 80
            echo "          </ul>
          
        </div>
      </div>  
      ";
        }
        // line 85
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 86
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 88
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 88,  255 => 86,  250 => 85,  243 => 80,  238 => 78,  210 => 53,  203 => 52,  195 => 50,  193 => 49,  187 => 46,  184 => 45,  182 => 44,  173 => 40,  167 => 39,  160 => 38,  152 => 36,  150 => 35,  144 => 34,  138 => 33,  132 => 32,  126 => 29,  116 => 24,  110 => 23,  104 => 22,  98 => 21,  92 => 20,  86 => 17,  80 => 15,  75 => 14,  69 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/account.twig", "C:\\xampp\\htdocs\\update_v4.0.2.3\\catalog\\view\\template\\account\\account.twig");
    }
}
