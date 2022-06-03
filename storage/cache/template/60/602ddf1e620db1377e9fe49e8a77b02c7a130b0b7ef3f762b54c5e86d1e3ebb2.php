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

/* glamour/template/checkout/shipping_method.twig */
class __TwigTemplate_e0fb5a60e182a0f3de8245a94341fc5ab1fce7ae9a77b0e35e0a9be21b32d2fe extends \Twig\Template
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
        if (($context["error_warning"] ?? null)) {
            echo " 
<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 2
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 4
        if (($context["shipping_methods"] ?? null)) {
            // line 5
            echo "<p>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</p>
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 7
                echo "<p><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 7);
                echo "</strong></p>
";
                // line 8
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 8)) {
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 9));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 10
                        echo "<div class=\"radio\">
  <label> ";
                        // line 11
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 11) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 12
                            echo "    ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 12);
                            // line 13
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 13);
                            echo "\" checked=\"checked\" />
    ";
                        } else {
                            // line 15
                            echo "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 15);
                            echo "\" />
    ";
                        }
                        // line 17
                        echo "    ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 17);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 17);
                        echo "</label>
</div>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 21
                    echo "<div class=\"alert alert-danger alert-dismissible\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 21);
                    echo "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        echo "<p><strong>";
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 27
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <br>
    <input type=\"button\" value=\"";
        // line 32
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-shipping-method\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
  </div>
  <div class=\"pull-left\">
    <input id=\"prev\" type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previous\" />
  </div>
</div>
<script>
 \$(document ).ready(function() {

    var delivery_charge=\"";
        // line 41
        echo ($context["delivery_details"] ?? null);
        echo "\";

    // alert(delivery_charge);
    \$.ajax({
              url: 'index.php?route=checkout/checkout&flat_rate='+delivery_charge,
              dataType: 'html',
              success: function(data) {

                // alert(data);

                // if(data == \"free\")
                // {

                //   alert(\"freee\");
                // }

                // console.log(data);

              },
              error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
        });


    var member_register= \"";
        // line 66
        echo ($context["member_register"] ?? null);
        echo "\";
    \$('#account_billing').hide();
    \$('#method').addClass('active');

  \$(\"#prev\").click(function() {

    if(member_register == \"1\")
    {
      \$('#delivery_method').hide();
      \$('#delivery_details').remove();
      \$('#member_register').show();
      \$('#method').removeClass('active');
      \$('#member').addClass('active');
    }
    else
    {
      \$('#method').removeClass('active');
      \$('#account').addClass('active');
      \$('#delivery_method').hide();
      \$('#delivery_details').show();
      \$('#delivery_details').show();
    }
    \$('#delivery_details').show();
   
  });

  });
</script>
";
    }

    public function getTemplateName()
    {
        return "glamour/template/checkout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 66,  140 => 41,  126 => 32,  118 => 27,  112 => 25,  101 => 21,  88 => 17,  82 => 15,  76 => 13,  73 => 12,  71 => 11,  68 => 10,  64 => 9,  62 => 8,  57 => 7,  53 => 6,  48 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/checkout/shipping_method.twig", "");
    }
}
