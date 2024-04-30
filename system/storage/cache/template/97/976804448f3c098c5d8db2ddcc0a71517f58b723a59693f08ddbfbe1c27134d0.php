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

/* catalog/view/template/product/review.twig */
class __TwigTemplate_d0f8b7c299fdf1dfaee59d6a15010fcb53d91392d04cdd5595119e68cc9ce5d8 extends Template
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
        echo "<form id=\"form-review\">
  <div id=\"review\">";
        // line 2
        echo ($context["list"] ?? null);
        echo "</div>
    <div id=\"review_content\">
      <h2>";
        // line 4
        echo ($context["text_write"] ?? null);
        echo "</h2>
      ";
        // line 5
        if (($context["review_guest"] ?? null)) {
            // line 6
            echo "        <div class=\"mb-3 required\">
          <label for=\"input-name\" class=\"form-label\">";
            // line 7
            echo ($context["entry_name"] ?? null);
            echo "</label>
          <input type=\"text\" name=\"name\" value=\"";
            // line 8
            echo ($context["customer_name"] ?? null);
            echo "\" id=\"input-name\" class=\"form-control\"/>
          <div id=\"error-name\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mb-3 required\">
          <label for=\"input-text\" class=\"form-label\">";
            // line 12
            echo ($context["entry_review"] ?? null);
            echo "</label>
          <textarea name=\"text\" rows=\"5\" id=\"input-text\" class=\"form-control\"></textarea>
          <div id=\"error-text\" class=\"invalid-feedback\"></div>
          <div class=\"invalid-feedback\">";
            // line 15
            echo ($context["text_note"] ?? null);
            echo "</div>
        </div>
        <div class=\"mb-3 required\">
          <label class=\"form-label\">";
            // line 18
            echo ($context["entry_rating"] ?? null);
            echo "</label>
          <div id=\"input-rating\">
            ";
            // line 20
            echo ($context["entry_bad"] ?? null);
            echo "&nbsp;
            <input type=\"radio\" name=\"rating\" value=\"1\" class=\"form-check-input\"/>
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"2\" class=\"form-check-input\"/>
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"3\" class=\"form-check-input\"/>
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"4\" class=\"form-check-input\"/>
            &nbsp;
            <input type=\"radio\" name=\"rating\" value=\"5\" class=\"form-check-input\"/>
            &nbsp;";
            // line 30
            echo ($context["entry_good"] ?? null);
            echo "
          </div>
          <div id=\"error-rating\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 34
            echo ($context["captcha"] ?? null);
            echo "
        <div class=\"d-inline-block pt-2 pd-2 w-100\">
          <div class=\"float-end\">
            <button type=\"submit\" id=\"button-review\" class=\"btn btn-primary\">";
            // line 37
            echo ($context["button__submit"] ?? null);
            echo "</button>
          </div>
        </div>
      ";
        } else {
            // line 41
            echo "        ";
            echo ($context["text_login"] ?? null);
            echo "
      ";
        }
        // line 43
        echo "    </div>
</form>
<script type=\"text/javascript\"><!--
\$('#review').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#review').load(this.href);
});

// Forms
\$('#form-review').on('submit', function (e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=product/review|write&language=";
        // line 59
        echo ($context["language"] ?? null);
        echo "&review_token=";
        echo ($context["review_token"] ?? null);
        echo "&product_id=";
        echo ($context["product_id"] ?? null);
        echo "',
        type: 'post',
        data: \$('#form-review').serialize(),
        dataType: 'json',
        cache: false,
        contentType: 'application/x-www-form-urlencoded',
        processData: false,
        beforeSend: function () {
            \$('#button-review').prop('disabled', true).addClass('loading');
        },
        complete: function () {
            \$('#button-review').prop('disabled', false).removeClass('loading');
        },
        success: function (json) {
            \$('.alert-dismissible').remove();
            \$('#form-review').find('.is-invalid').removeClass('is-invalid');
            \$('#form-review').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
              if (json['error']['warning']) {
                  \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
              }

              for (key in json['error']) {
                  \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                  \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
              }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#input-text').val('');
                \$('#input-rating input[type=\\'radio\\']').prop('checked', false);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
    
    \$(\".review-content\").click(function(e) {
      \$('html, body').animate({scrollTop: \$(\"#review_content\").offset().top- 55});
    })
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 59,  121 => 43,  115 => 41,  108 => 37,  102 => 34,  95 => 30,  82 => 20,  77 => 18,  71 => 15,  65 => 12,  58 => 8,  54 => 7,  51 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/review.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\product\\review.twig");
    }
}
