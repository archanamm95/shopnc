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

/* glamour/template/checkout/login.twig */
class __TwigTemplate_702e0b9c911ac64330bc832b245fe869b27791869cebbd63db329bd27d588f69 extends \Twig\Template
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
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>";
        // line 3
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
    <p>";
        // line 4
        echo ($context["text_checkout"] ?? null);
        echo "</p>
    <div class=\"radio\">
      <label> ";
        // line 6
        if ((($context["account"] ?? null) == "register")) {
            // line 7
            echo "        <!-- Guest Checkout -->
         ";
            // line 8
            if ((($context["purchase_session"] ?? null) != ($context["MLM_COMPANY"] ?? null))) {
                // line 9
                echo "        <input id=\"guest_register\" type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
            } else {
                // line 10
                echo "  
        <input id=\"normal_register\" type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
            }
            // line 13
            echo "        <!-- Code Ends -->
        ";
        } else {
            // line 15
            echo "        <input id=\"normal_register\" type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ((($context["purchase_session"] ?? null) != ($context["MLM_COMPANY"] ?? null))) {
            // line 19
            echo "
          Guest Checkout

        ";
        } else {
            // line 22
            echo "  

        ";
            // line 24
            echo ($context["text_register"] ?? null);
            echo "

        ";
        }
        // line 27
        echo "
      </label>
    </div>
    <p>";
        // line 30
        echo ($context["text_register_account"] ?? null);
        echo "</p>

    ";
        // line 32
        if ((($context["influencer"] ?? null) != "1")) {
            // line 33
            echo "
      ";
            // line 34
            if (((($context["purchase_session"] ?? null) != ($context["MLM_COMPANY"] ?? null)) && (($context["product_total_price"] ?? null) >= "400"))) {
                // line 35
                echo "
       <div class=\"radio\" >
        <label> 

           <input type=\"radio\" name=\"account\" value=\"register\" id=\"member_register_radio\" />

          Member Register
        </label>
      </div>

      <p>Becoming member you are offered a chance to do business with us</p>

      ";
            }
            // line 48
            echo "
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (($context["checkout_guest"] ?? null)) {
            // line 52
            echo "    <div class=\"radio\">
      <label> ";
            // line 53
            if ((($context["account"] ?? null) == "guest")) {
                // line 54
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 56
                echo "        <input type=\"radio\" name=\"account\" value=\"guest\" />
        ";
            }
            // line 58
            echo "        ";
            echo ($context["text_guest"] ?? null);
            echo "</label>
    </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ((($context["purchase_link_member_register"] ?? null) == true)) {
            // line 63
            echo "
    <input type=\"button\" value=\"";
            // line 64
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"purchase-button-account\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary steps\" />



    ";
        } else {
            // line 69
            echo "<!-- 
    <input type=\"button\" value=\"";
            // line 70
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-account\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" /> -->

     <button data-loading-text=\"";
            // line 72
            echo ($context["text_loading"] ?? null);
            echo "\" id=\"button-account\" value=\"";
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary step\" type=\"button\" data-bs-toggle=\"collapse\"
            data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
           Continue
        </button>

    ";
        }
        // line 78
        echo "
  </div>
  <!-- ";
        // line 80
        if ((($context["referral_session"] ?? null) == ($context["MLM_COMPANY"] ?? null))) {
            echo "  
  <div class=\"col-sm-6\">
    <h2>";
            // line 82
            echo ($context["text_returning_customer"] ?? null);
            echo "</h2>
    <p>";
            // line 83
            echo ($context["text_i_am_returning_customer"] ?? null);
            echo "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
            // line 85
            echo ($context["entry_email"] ?? null);
            echo "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
            // line 86
            echo ($context["entry_email"] ?? null);
            echo "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
            // line 89
            echo ($context["entry_password"] ?? null);
            echo "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
            // line 90
            echo ($context["entry_password"] ?? null);
            echo "\" id=\"input-password\" class=\"form-control\" />
      <a href=\"";
            // line 91
            echo ($context["forgotten"] ?? null);
            echo "\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></div>
    <input type=\"button\" value=\"";
            // line 92
            echo ($context["button_login"] ?? null);
            echo "\" id=\"button-login\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        }
        // line 95
        echo " -->
<script>
  
 \$(document ).ready(function() {
     \$('#progress').val('8');
     \$('#login_button').attr('aria-expanded', 'true');
     \$('#account_button').attr('aria-expanded', 'false');
     \$('#mlm_button').attr('aria-expanded', 'false');
     \$('#delivery_button').attr('aria-expanded', 'false');
     \$('#delivery_method').attr('aria-expanded', 'false');
     \$('#payment_button').attr('aria-expanded', 'false');
     \$('#confirm_button').attr('aria-expanded', 'false');
    var purchase_link_member_register =\"";
        // line 107
        echo ($context["purchase_link_member_register"] ?? null);
        echo "\";
    if(purchase_link_member_register == true)
    {
      \$(\"#member_register_radio\").prop(\"checked\", true);
    }
      \$('#member_register_radio').click(function() {
        \$.ajax({
          url: 'index.php?route=checkout/purchase_register',
          dataType: 'html',
          success: function(html) {
             location.reload();
           
          },
          error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
     
    });
     \$('#guest_register').click(function() {
      \$.ajax({
        url: 'index.php?route=checkout/normal_register',
        dataType: 'html',
        success: function(html) {
           
           location.reload();
         
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
   
  });
  });
</script>

<script>
  \$( document ).ready(function() {

    if(\$('#member_register_radio').is(\":checked\") == true)
    {
      \$.ajax({
          url: 'index.php?route=checkout/purchase_register',
          dataType: 'html',
          success: function(html) {
           
          },
          error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
    }
    });
  </script>";
    }

    public function getTemplateName()
    {
        return "glamour/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 107,  246 => 95,  237 => 92,  231 => 91,  227 => 90,  223 => 89,  217 => 86,  213 => 85,  208 => 83,  204 => 82,  199 => 80,  195 => 78,  184 => 72,  177 => 70,  174 => 69,  164 => 64,  161 => 63,  159 => 62,  156 => 61,  149 => 58,  145 => 56,  141 => 54,  139 => 53,  136 => 52,  134 => 51,  131 => 50,  127 => 48,  112 => 35,  110 => 34,  107 => 33,  105 => 32,  100 => 30,  95 => 27,  89 => 24,  85 => 22,  79 => 19,  77 => 18,  74 => 17,  70 => 15,  66 => 13,  61 => 10,  57 => 9,  55 => 8,  52 => 7,  50 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/checkout/login.twig", "");
    }
}
