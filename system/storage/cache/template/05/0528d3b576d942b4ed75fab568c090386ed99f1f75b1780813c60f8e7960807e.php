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

/* extension/ishicontactinfoblock/catalog/view/template/module/ishicontactinfoblock.twig */
class __TwigTemplate_87a6f0d84aa6f30a461ea0c748ec3b0aeb245a5a1e1301f84cf9dd7d95f7c9e6 extends Template
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
        echo "<div id=\"_desktop_contact\" class=\"footer-block ";
        echo ($context["column_class"] ?? null);
        echo " d-lg-none\"> 
    <h5 class=\"d-none d-lg-block\">";
        // line 2
        echo ($context["title"] ?? null);
        echo "</h5>
    <div class=\"block-contact\">
      <div class=\"footer-title clearfix d-lg-none \" href=\"#contact-info-container\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"contact-info-container\">
          <span class=\"h3\">";
        // line 5
        echo ($context["title"] ?? null);
        echo "</span>
          <span class=\"navbar-toggler collapse-icons\">
            <i class=\"fa fa-angle-down add\"></i>
            <i class=\"fa fa-angle-up remove\"></i>
          </span>
      </div> 
      <div id=\"contact-info-container\" class=\"collapse footer-dropdown\">
          <div class=\"block address col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <span class=\"icon\">
                <i class=\"fa-solid fa-location-dot\"></i>
              </span>
              <div class=\"content\">
                <a>";
        // line 17
        echo ($context["config_address"] ?? null);
        echo "</a>
              </div>
          </div>
          <div class=\"block phone col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <span class=\"icon phone\">
                <i class=\"fa fa-phone\"></i>
              </span>
              <div class=\"content\">
                <a href=\"tel:";
        // line 25
        echo ($context["config_telephone"] ?? null);
        echo "\">";
        echo ($context["config_telephone"] ?? null);
        echo "</a>
              </div>
          </div>
          <div class=\"block email col-lg-12 col-md-12 col-sm-12 col-xs-12\">
              <span class=\"icon\">
                <i class=\"fa fa-envelope\"></i>
              </span>
              <div class=\"content\">
                <a href=\"mailto:";
        // line 33
        echo ($context["config_email"] ?? null);
        echo "\">";
        echo ($context["config_email"] ?? null);
        echo "</a>
              </div>
          </div>
          
      </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/ishicontactinfoblock/catalog/view/template/module/ishicontactinfoblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  74 => 25,  63 => 17,  48 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/ishicontactinfoblock/catalog/view/template/module/ishicontactinfoblock.twig", "C:\\xampp\\htdocs\\OPC010\\OPC010_new\\extension\\ishicontactinfoblock\\catalog\\view\\template\\module\\ishicontactinfoblock.twig");
    }
}
