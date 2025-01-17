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

/* catalog/view/template/checkout/payment_method.twig */
class __TwigTemplate_998dd11aceec0afa44a3d88ec4bf21ee38ac2c00e496a2a59b282cfc7d5743fb extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</legend>
  <div class=\"input-group\">
    <span class=\"input-group-text\"><i class=\"fa fa-credit-card\"></i></span><input type=\"text\" name=\"payment_method\" value=\"";
        // line 4
        echo ($context["payment_method"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_payment_method"] ?? null);
        echo "\" id=\"input-payment-method\" class=\"form-control\" readonly/>
    <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-primary\">Choose</button>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"";
        // line 7
        echo ($context["code"] ?? null);
        echo "\" id=\"input-payment-code\"/>
  <div id=\"error-payment-method\" class=\"invalid-feedback\"></div>
</fieldset>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>";
        // line 12
        echo ($context["text_comments"] ?? null);
        echo "</strong></label> <textarea name=\"comment\" rows=\"4\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
</div>
";
        // line 14
        if (($context["text_agree"] ?? null)) {
            // line 15
            echo "  <div class=\"form-check form-switch form-switch-lg form-check-reverse mt-3\">
    <label class=\"form-check-label\">";
            // line 16
            echo ($context["text_agree"] ?? null);
            echo "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-checkout-agree\" class=\"form-check-input\"/>
  </div>
";
        }
        // line 19
        echo "<script type=\"text/javascript\"><!--
\$('#button-payment-methods').on('click', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.getMethods&language=";
        // line 25
        echo ($context["language"] ?? null);
        echo "',
            dataType: 'json',
            beforeSend: function() {
                \$(element).button('loading');
            },
            complete: function() {
                \$(element).button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#input-payment-method').removeClass('is-invalid');
                \$('#error-payment-method').removeClass('d-block');

                if (json['error']) {
                    \$('#input-payment-method').addClass('is-invalid');
                    \$('#error-payment-method').html(json['error']).addClass('d-block');
                }

                if (json['payment_methods']) {
                    \$('#modal-payment').remove();

                    html = '<div id=\"modal-payment\" class=\"modal\">';
                    html += '  <div class=\"modal-dialog modal-dialog-centered\">';
                    html += '    <div class=\"modal-content\">';
                    html += '      <div class=\"modal-header\">';
                    html += '        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> ";
        // line 51
        echo ($context["text_payment_method"] ?? null);
        echo "</h5>';
                    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                    html += '      </div>';
                    html += '      <div class=\"modal-body\">';
                    html += '        <form id=\"form-payment-method\">';
                    html += '          <p>";
        // line 56
        echo ($context["text_payment"] ?? null);
        echo "</p>';

                    for (i in json['payment_methods']) {
                        html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                        if (!json['payment_methods'][i]['error']) {
                            for (j in json['payment_methods'][i]['option']) {
                                html += '<div class=\"form-check\">';

                                var code = i + '-' + j.replaceAll('_', '-');

                                html += '<input type=\"radio\" name=\"payment_method\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + code + '\"';

                                if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-code').val()) {
                                    html += ' checked';
                                }

                                html += '/>';
                                html += '  <label for=\"input-payment-method-' + code + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                                html += '</div>';
                            }
                        } else {
                            html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                        }
                    }

                    html += '          <div class=\"text-end\">';
                    html += '            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">";
        // line 83
        echo ($context["button_continue"] ?? null);
        echo "</button>';
                    html += '          </div>';
                    html += '        </form>';
                    html += '      </div>';
                    html += '    </div>';
                    html += '  </div>';
                    html += '</div>';

                    \$('body').append(html);

                    \$('#modal-payment').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$(document).on('submit', '#form-payment-method', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.save&language=";
        // line 110
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#form-payment-method').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-payment-method').button('loading');
            },
            complete: function() {
                \$('#button-payment-method').button('reset');
            },
            success: function(json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#modal-payment').modal('hide');

                    \$('#input-payment-method').val(\$('input[name=\\'payment_method\\']:checked').parent().find('label').text());
                    \$('#input-payment-code').val(\$('input[name=\\'payment_method\\']:checked').val());

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 140
        echo ($context["language"] ?? null);
        echo "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Comment
var timer = '';

\$('#input-comment').on('keydown', function() {
    // Request
    clearTimeout(timer);

    timer = setTimeout(function(object) {
        chain.attach(function() {
            return \$.ajax({
                url: 'index.php?route=checkout/payment_method.comment&language=";
        // line 160
        echo ($context["language"] ?? null);
        echo "',
                type: 'post',
                data: \$('#input-comment').serialize(),
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded',
                beforeSend: function() {
                    \$('#button-confirm').button('loading');
                },
                complete: function() {
                    \$('#button-confirm').button('reset');
                },
                success: function(json) {
                    \$('.alert-dismissible').remove();

                    if (json['redirect']) {
                        location = json['redirect'];
                    }

                    if (json['error']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    if (json['success']) {
                        \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    window.setTimeout(function() {
                        \$('.alert-dismissible').fadeTo(1000, 0, function() {
                            \$(this).remove();
                        });
                    }, 3000);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    }, 500, this);
});

/* Agree to terms */
\$('#input-checkout-agree').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.agree&language=";
        // line 206
        echo ($context["language"] ?? null);
        echo "',
            type: 'post',
            data: \$('#input-checkout-agree').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-confirm').button('loading');
            },
            complete: function() {
                \$('#button-confirm').button('reset');
            },
            success: function(json) {
                \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 218
        echo ($context["language"] ?? null);
        echo "');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 218,  289 => 206,  240 => 160,  217 => 140,  184 => 110,  154 => 83,  124 => 56,  116 => 51,  87 => 25,  79 => 19,  73 => 16,  70 => 15,  68 => 14,  61 => 12,  53 => 7,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/checkout/payment_method.twig", "C:\\xampp\\htdocs\\OPC145\\catalog\\view\\template\\checkout\\payment_method.twig");
    }
}
