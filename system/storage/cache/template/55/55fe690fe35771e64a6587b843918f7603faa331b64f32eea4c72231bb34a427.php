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

/* extension/opencart/catalog/view/template/module/account.twig */
class __TwigTemplate_7bbd1cd11478b3eaffb778e74d9833dee30b8f7774887fbb07c174479e22cfe2 extends Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        if ( !($context["logged"] ?? null)) {
            // line 3
            echo "    <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\"><i class=\"fas fa-sign-in-alt fa-fw me-2\"></i>";
            echo ($context["text_login"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 4
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\"><i class=\"fas fa-user-plus fa-fw me-2\"></i>";
            echo ($context["text_register"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 5
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\"><i class=\"fas fa-key fa-fw me-2\"></i>";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
  ";
        }
        // line 7
        echo "  <a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["account_active"] ?? null);
        echo "\"><i class=\"fas fa-user fa-fw me-2\"></i>";
        echo ($context["text_account"] ?? null);
        echo "</a>
  ";
        // line 8
        if (($context["logged"] ?? null)) {
            // line 9
            echo "    <a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item ";
            echo ($context["edit_active"] ?? null);
            echo "\"><i class=\"fas fa-user-edit fa-fw me-2\"></i>";
            echo ($context["text_edit"] ?? null);
            echo "</a> 
    <a href=\"";
            // line 10
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item ";
            echo ($context["pass_active"] ?? null);
            echo "\"><i class=\"fas fa-key fa-fw me-2\"></i>";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 12
        echo "    <a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["address_active"] ?? null);
        echo "\"><i class=\"fas fa-address-book fa-fw me-2\"></i>";
        echo ($context["text_address"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 13
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["wishlist_active"] ?? null);
        echo "\"><i class=\"fas fa-heart fa-fw me-2\"></i>";
        echo ($context["text_wishlist"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 14
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["order_active"] ?? null);
        echo "\"><i class=\"fas fa-box-open fa-fw me-2\"></i>";
        echo ($context["text_order"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 15
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["download_active"] ?? null);
        echo "\"><i class=\"fas fa-download fa-fw me-2\"></i>";
        echo ($context["text_download"] ?? null);
        echo "</a>
    <!-- <a href=\"";
        // line 16
        echo ($context["subscription"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["subs_active"] ?? null);
        echo "\">";
        echo ($context["text_subscription"] ?? null);
        echo "</a>  -->
    <a href=\"";
        // line 17
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["reward_active"] ?? null);
        echo "\"><i class=\"fas fa-medal fa-fw me-2\"></i>";
        echo ($context["text_reward"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 18
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["return_active"] ?? null);
        echo "\"><i class=\"fas fa-undo fa-fw me-2\"></i>";
        echo ($context["text_return"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 19
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["trans_active"] ?? null);
        echo "\"><i class=\"fas fa-exchange-alt fa-fw me-2\"></i>";
        echo ($context["text_transaction"] ?? null);
        echo "</a> 
    <a href=\"";
        // line 20
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item ";
        echo ($context["news_active"] ?? null);
        echo "\"><i class=\"fas fa-envelope fa-fw me-2\"></i>";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
  ";
        // line 21
        if (($context["logged"] ?? null)) {
            // line 22
            echo "    <a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\"><i class=\"fas fa-sign-out-alt fa-fw me-2\"></i>";
            echo ($context["text_logout"] ?? null);
            echo "</a>
  ";
        }
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 24,  166 => 22,  164 => 21,  156 => 20,  148 => 19,  140 => 18,  132 => 17,  124 => 16,  116 => 15,  108 => 14,  100 => 13,  91 => 12,  82 => 10,  73 => 9,  71 => 8,  62 => 7,  55 => 5,  49 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/account.twig", "C:\\xampp\\htdocs\\OPC145\\extension\\opencart\\catalog\\view\\template\\module\\account.twig");
    }
}
