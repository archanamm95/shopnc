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

/* glamour/template/checkout/checkout.twig */
class __TwigTemplate_129bbfd16fdb35e09f4629530971213930108accf21a1c1301ec7e1a79c46516 extends \Twig\Template
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
<style>
  .step-title{

color: black;
}
</style>
<div class=\"breadcrumb-container\">
<h1 class=\"page-title\">";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
<ul class=\"breadcrumb\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
</div>
    <!-- Stepper Styles -->
    <link rel=\"stylesheet\" href=\"catalog/view/theme/glamour/css/style.css\">
  <!-- Demo CSS -->
  <link rel=\"stylesheet\" href=\"catalog/view/theme/glamour/css/demo.css\">


 <!-- Abith -->
<div class=\"container\">
    <div class=\"coloumn\">
        <div style=\"width: 60%\" class=\"col-lg-12 text-center p-0 mt-3 mb-2\">
            <div class=\"card px-0 pt-4 pb-0 mt-3 mb-3\">
                <form id=\"msform\">
                    <ul id=\"progressbar\">
                        <li class=\"active\" id=\"checkout\"><strong>CHECKOUT OPTIONS</strong></li>
                        <li id=\"account\"><strong>ADDRESSES</strong></li>
                        ";
        // line 31
        if ((($context["mlm_register_check"] ?? null) == "1")) {
            // line 32
            echo "                        <li id=\"member\"><strong>";
            echo ($context["text_checkout_mlm_register"] ?? null);
            echo "</strong></li>
                        ";
        }
        // line 34
        echo "                        <!-- <li id=\"delivery\"><strong>Delivery Details</strong></li> -->
                        <li id=\"method\"><strong>SHIPPING METHOD</strong></li>
                        <li id=\"payment\"><strong>PAYMENT</strong></li>
                        <!-- <li id=\"confirm\"><strong>Confirm Order</strong></li> -->
                    </ul>
                    <fieldset id=\"checkout_options\">
                        <div class=\"form-card\">
                            <div class=\"row\">
                                <div class=\"col-7\">
                                    <h2 class=\"fs-title\">Checkout Options:</h2>
                                </div>
                            </div> 
                             <div class=\"card-body\" id=\"collapse-checkout-option\">
            
                             <div class=\"panel-body\"></div>
        
                            </div>
                        </div>
                    </fieldset>
                    <fieldset id=\"account_billing\">
                        <div class=\"form-card\">
                            <div class=\"row\">
                                <div class=\"col-7\">
                                    <h2 class=\"fs-title\">Account & Billing Details:</h2>
                                </div>
                            </div>
                             <div class=\"card-body \" id=\"collapse-payment-address\">
                            <div class=\"panel-body\"></div>
                            </div>
                        </div> 
                    </fieldset>
                    <fieldset id=\"delivery_details\">
                        <div class=\"form-card\">
                            <div class=\"row\">
                                <div class=\"col-7\">
                                    <h2 class=\"fs-title\">Delivery Details:</h2>
                                </div>
                            </div>
                             <div class=\"card-body\" id=\"collapse-shipping-address\">
                                <div class=\"panel-body\"></div>
                                </div>
                            </div> 
                    </fieldset>
                    <div   id=\"member_register\">
                        <div class=\"form-card\">
                            <div class=\"row\">
                                <div class=\"col-7\">
                                    <h2 class=\"fs-title\">Member Register:</h2>
                                </div>
                            </div> 
                        </div> 
                        <div class=\"card-body\" id=\"collapse-mlm-register\">
                        <div class=\"panel-body\"></div>
                         </div>
                    </div>
                     <fieldset id=\"delivery_method\">
                        <div class=\"form-card\">
                            <div class=\"row\">
                                <div class=\"col-7\">
                                    <h2 class=\"fs-title\">Shipping Method:</h2>
                                </div>
                            </div> 
                           <div class=\"card-body\" id=\"collapse-shipping-method\">
                            <div class=\"panel-body\"></div>
                            </div>
                        </div> 
                    </fieldset>
                    <fieldset id=\"payment_method\">
                        <div class=\"form-card\">
                            <div class=\"row\">
                                <div class=\"col-7\">
                                    <h2 class=\"fs-title\">Payment Method</h2>
                                </div>
                            </div> 
                        </div> 
                         <div class=\"card-body\" id=\"collapse-payment-method\">
                            <div class=\"panel-body\"></div>
                         </div>
                    </fieldset>
                    <fieldset id=\"confirm_order\">
                        <div class=\"form-card\">
                             <div class=\"card-body\" id=\"collapse-checkout-confirm\">
                                <div class=\"panel-body\"></div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- tables -->
    </div>

    <h3>Your order</h3>
 <div class=\"row justify-content-right\">
    <table style=\"width:40%\" class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
        // line 131
        echo ($context["column_name"] ?? null);
        echo "</td>
        <td class=\"text-left\">";
        // line 132
        echo ($context["column_model"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 133
        echo ($context["column_quantity"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 134
        echo ($context["column_price"] ?? null);
        echo "</td>
        <td class=\"text-right\">";
        // line 135
        echo ($context["column_total"] ?? null);
        echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 141
            echo "    <tr>
      <td class=\"text-left\"><a href=\"";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 142);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 142);
            echo "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
        &nbsp;<small> - ";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 143);
                echo ": ";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 143);
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 144)) {
                echo " <br />
        <span class=\"label label-info\">";
                // line 145
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 145);
                echo "</small> ";
            }
            echo "</td>
      <td class=\"text-left\">";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 146);
            echo "</td>
      <td class=\"text-right\">";
            // line 147
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 147);
            echo "</td>
      <td class=\"text-right\">";
            // line 148
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148);
            echo "</td>
      <td class=\"text-right\">";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 149);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 153
            echo "    <tr>
      <td class=\"text-left\">";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 154);
            echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
            // line 157
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 157);
            echo "</td>
      <td class=\"text-right\">";
            // line 158
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 158);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "      </tbody>
    
    <tfoot>
    
    ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 166
            echo "    <tr>
      <td colspan=\"4\" class=\"text-right\"><strong>";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 167);
            echo ":</strong></td>
      <td class=\"text-right\">";
            // line 168
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 168);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "      </tfoot>
    
  </table>

</div>


</div>


    <!-- Start Stepper HTML -->
 <div class=\"container\">
<div class=\"accordion\" id=\"accordionExample\">
</div>
</div>

 <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
    <div class=\"modal-header\">
      <h2 class=\"h2-new modal-title\"><span style=\"color: #525f7f;\">View Your IC/Passport</span></h2>
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
    </div>
     
    <div class=\"modal-body pt-0\" style=\"overflow: auto !important;\">
      <div class=\"col-12\">
        <ol>
          <li>Please upload the front view and back view of IC/passport</li>
           <li>Ensure the resolution/details of photo is clear enough to verify by human eyes</li>
            <li>Maximum 2 photos is allowed to upload</li>
          </ol>
        </div>


        <div class=\"row\" style=\" display: flex;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;\">

          <div class=\"col-12 mt-3 mb-1\">
            <h3 style=\"color: #525f7f;\">Example IC</h3>
          </div>

          <div class=\"col-md-6 col-sm-12\"><label class=\"label2\">IC Front View</label> <img style=\"width: 340px;\" src=\"";
        // line 211
        echo ($context["ic_front"] ?? null);
        echo "\" alt=\"ic front\" class=\"img-fluid\"></div>

          <div class=\"col-md-6 col-sm-12\"><label class=\"label2\">IC Back View</label> <img style=\"width: 340px;\" src=\"";
        // line 213
        echo ($context["ic_back"] ?? null);
        echo "\" alt=\"ic front\" class=\"img-fluid\"></div>

          <div class=\"col-12 mt-3 mb-1\"><h3 style=\"color: #525f7f;\">Example Passport</h3></div>

          <div class=\"col-md-6 col-sm-12\"><label class=\"label2\">Passport Front View</label> <img style=\"height: 463px;\" src=\"";
        // line 217
        echo ($context["passport_front"] ?? null);
        echo "\" alt=\"ic front\" class=\"img-fluid\"></div>

          <div class=\"col-md-6 col-sm-12\"><label class=\"label2\">Passport Back View</label> <img style=\"width: 341px;\" src=\"";
        // line 219
        echo ($context["passport_back"] ?? null);
        echo "\" alt=\"ic front\" class=\"img-fluid\"></div>


           <!-- <h3 style=\"color: #525f7f;\">Front View of IC/Passport</h3> -->
        <div class=\"wrapper\">
          <div class=\"box\" style=\"  display: block;min-width: 300px;height: 300px;margin: 10px;background-color: white;border-radius: 5px;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);overflow: hidden;\">
            <label  class=\"label2\">Front View of IC/Passport</label>
            
            <br>
            <div class=\"js--image-preview\"></div>
            <div class=\"upload-options\">
              <label>
         
            <form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\">

                <input id=\"image1\" name=\"file\" type=\"file\" class=\"image-upload\" accept=\"image/*\" />

                

            </form>

            <input type=\"hidden\" name=\"custom_field[account][10]\" value=\"ads\" id=\"one\">
     
              </label>
            </div>
          </div>
          </div>
          <div class=\"wrapper\">
           
          <!-- <h3>Front View of IC/Passport</h3> -->
          <div class=\"box\" style=\"  display: block;min-width: 300px;height: 300px;margin: 10px;background-color: white;border-radius: 5px;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);overflow: hidden;\">
            <label class=\"label2\">Back View of IC/Passport</label>
            <br>
            <div class=\"js--image-preview\"></div>
            <div class=\"upload-options\">
              <label>

                <form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\">
        
                <input id=\"image2\" type=\"file\" name=\"file\" class=\"image-upload\" accept=\"image/*\" />

                <input type=\"hidden\" name=\"custom_field[account][11]\" value=\"ads\" id=\"input-payment-custom-field11\">

            </form>
               
              </label>
            </div>
          </div>
        </div>
        </div>
      </div>                 
  <div style=\"padding: 15px;text-align: right;\"><button type=\"button\" data-dismiss=\"modal\" class=\"btn-secondary\">Close</button>
  </div> 
    </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$(document).on('change', 'input[name=\\'account\\']', function() {

 
\tif (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {

           
\t\tif (this.value == 'register') {
            
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 284
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t} else {


\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 288
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t}
\t} else {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 293
        echo ($context["text_checkout_account"] ?? null);
        echo "');
\t\t} else {


\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 297
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');

\t\t}
\t}


});

";
        // line 305
        if ( !($context["logged"] ?? null)) {
            // line 306
            echo "\$(document).ready(function() {


    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 316
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        } else {
            // line 326
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 333
            echo ($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 343
        echo "
// Purchase member register



\$(document).delegate('#purchase-button-account', 'click', function() {


   function insertAfter(newElement, referenceElement) {
    referenceElement.parentNode.insertBefore(newElement, referenceElement.nextSibling);
    }

    var eligibility=\"";
        // line 355
        echo ($context["mlm_eligibility"] ?? null);
        echo "\"; 

    var purchase_session=\"";
        // line 357
        echo ($context["purchase_session"] ?? null);
        echo "\";

    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val()+'&eligibility='+eligibility,

        dataType: 'html',
        beforeSend: function() {
          \$('#purchase-button-account').button('loading');
    },
        complete: function() {
      \$('#purchase-button-account').button('reset');
        },
        success: function(html) {

            \$('#checkout_options').hide();
            \$('#account_billing').show();
            \$('#account').attr('class', 'active');
           
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            \$('#collapse-payment-address .panel-body').html(html);

      if (\$('input[name=\\'account\\']:checked').val() == 'register') {
        \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 381
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
      } else {
        \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 383
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
      }

      \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },

        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }



    });

});

// Purchase member register Ends

// Checkout
\$(document).delegate('#button-account', 'click', function() {

    if(\$('#guest_register').is(':checked') == true)
    {
        var guest_checkout=\"1\";
    }
    else
    {
        var guest_checkout=\"0\";
    }

   function insertAfter(newElement, referenceElement) {
    referenceElement.parentNode.insertBefore(newElement, referenceElement.nextSibling);
    }

    var eligibility=\"";
        // line 417
        echo ($context["mlm_eligibility"] ?? null);
        echo "\"; 
    var purchase_session=\"";
        // line 418
        echo ($context["purchase_session"] ?? null);
        echo "\";

    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val()+'&eligibility='+eligibility+'&guest_checkout='+guest_checkout,

        dataType: 'html',
        beforeSend: function() {
          \$('#button-account').button('loading');
    },
        complete: function() {
      \$('#button-account').button('reset');
        },
        success: function(html) {

            \$('#checkout_options').hide();
            \$('#account_billing').show();
            \$('#account').attr('class', 'active');

            \$('#collapseOne').hide();
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            \$('#collapse-payment-address .panel-body').html(html);

      if (\$('input[name=\\'account\\']:checked').val() == 'register') {
        \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 442
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
      } else {
        \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 444
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
      }

      \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },

        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }

    });

});

// Checkout
\$(document).delegate('#button-account', 'click', function() {

  if(\$('#member_register').is(\":checked\") == true)
  {
        \$.ajax({
          url: 'index.php?route=checkout/checkout&member=1',
          success: function(response) {
          },
          error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  }

  return false;

   function insertAfter(newElement, referenceElement) {
    referenceElement.parentNode.insertBefore(newElement, referenceElement.nextSibling);
    }

    var eligibility=\"";
        // line 479
        echo ($context["mlm_eligibility"] ?? null);
        echo "\"; 

    var purchase_session=\"";
        // line 481
        echo ($context["purchase_session"] ?? null);
        echo "\";

    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val()+'&eligibility='+eligibility,

        dataType: 'html',
        beforeSend: function() {
        \t\$('#button-account').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-account').button('reset');
        },
        success: function(html) {
           
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            \$('#collapse-payment-address .panel-body').html(html);

\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 501
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 503
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t}

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },

        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }

    });

});

// Login
\$(document).delegate('#button-login', 'click', function() {

    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-login').button('loading');
\t\t},
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'email\\']').parent().addClass('has-error');
\t\t\t\t\$('input[name=\\'password\\']').parent().addClass('has-error');
\t\t   }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {

                var eligibility=\"";
        // line 554
        echo ($context["mlm_eligibility"] ?? null);
        echo "\";

                var purchase_session=\"";
        // line 556
        echo ($context["purchase_session"] ?? null);
        echo "\";

                var purchase_session_sponsor=\"";
        // line 558
        echo ($context["purchase_session_sponsor"] ?? null);
        echo "\"

                var mlm_company=\"";
        // line 560
        echo ($context["MLM_COMPANY"] ?? null);
        echo "\";

                var logged=\"";
        // line 562
        echo ($context["logged"] ?? null);
        echo "\";

    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),

        dataType: 'json',
        beforeSend: function() {

\t\t\t\$('#button-register').button('loading');
\t\t},
        success: function(json) {

            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {

                \$('#button-register').button('reset');

                if (json['error']['warning']) {
                
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
\t\t\t\tfor (i in json['error']) {

\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {

                ";
        // line 604
        if (($context["shipping_required"] ?? null)) {
            // line 605
            echo "                var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');
                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 618
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 627
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

   \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 631
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 632
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 633
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                }
                ";
        } else {
            // line 642
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 648
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 652
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 659
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 669
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {

    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-payment-address').button('loading');
\t\t},
        complete: function() {

\t\t\t\$('#button-payment-address').button('reset');
        },
        success: function(json) {

            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {

                    \$('#account_billing').remove();
                    \$('#delivery_details').show();

                   \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {

                        \$('#collapse-shipping-address .panel-body').html(html);

                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 734
        echo ($context["text_checkout_shipping_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
        // line 738
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo "');
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 739
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 740
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {

                    \$.ajax({
            
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {

                            \$('#collapse-shipping-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {

                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });

                });

                 ";
        // line 763
        if (($context["shipping_required"] ?? null)) {
            // line 764
            echo "
                ";
        } else {
            // line 766
            echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 773
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 777
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t\t
\t\t\t\t});
                ";
        }
        // line 795
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {

    // console.log(\$(' #collapse-shipping-address select').val());

    var country_id=\$(\"#country_value option:selected\").val();

    // Working

        //   \$.ajax({
        //       url: 'index.php?route=checkout/checkout&country_id='+country_id,
        //       success: function(data) {

        //         if(data == \"129\" || data == \"188\")
        //         {
        //             console.log(\"free shipping\");

        //             \$.ajax({
        //               url: 'index.php?route=checkout/checkout&flat_rate=free',
        //               dataType: 'html',
        //               success: function(data) {

        //                console.log(data);

        //             },
        //             error: function(xhr, ajaxOptions, thrownError) {
        //               alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        //             }
        //             });

        //         }
        //         else
        //         {
        //             console.log(\"paid shipping\");
        //             \$.ajax({
        //               url: 'index.php?route=checkout/checkout&flat_rate=paid',
        //               dataType: 'html',
        //               success: function(data) {

        //                 console.log(data);

        //             // alert(data);

        //             },
        //             error: function(xhr, ajaxOptions, thrownError) {
        //               alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        //             }
        //             });

 
        //         }

        //       },
        //       error: function(xhr, ajaxOptions, thrownError) {
        //           alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        //       }
        // });

    // Working ENds

    \$('#delivery_method').hide();

    var mlm_register_check=\"";
        // line 865
        echo ($context["mlm_register_check"] ?? null);
        echo "\";

    var logged=\"";
        // line 867
        echo ($context["logged"] ?? null);
        echo "\";

    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),


        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t    },
        success: function(json) {

            \$('#account_billing').remove();
            \$('#delivery_details').hide();
      
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {

                if(mlm_register_check == \"1\")
                {
                    // alert(\"eeeee\");

                    \$('#member_register').show();

                    \$.ajax({
                    url: 'index.php?route=checkout/mlm_register',
                    dataType: 'html',
                    success: function(html) {
                       
                        \$('#collapse-mlm-register .panel-body').html(html);

                        \$('#collapse-mlm-register').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-mlm-register\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 923
        echo ($context["text_checkout_mlm_register"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');


                        \$('a[href=\\'#collapse-mlm-register\\']').trigger('click');

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
        // line 928
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo "');
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 929
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 930
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');


                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {

                    \$.ajax({
                        url: 'index.php?route=checkout/mlm_register',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-mlm-register .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });

                });

                    
                }
                else
                {

                \$('#delivery_method').show();

                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 968
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 972
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 973
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
\t\t\t\t\t\t
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});


                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
       \t\t\$('#button-guest').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 1048
        if (($context["shipping_required"] ?? null)) {
            // line 1049
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1066
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t    \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1075
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1079
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1080
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1096
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 1100
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1101
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1102
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 1110
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1119
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1123
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 1130
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#mlm-register', 'click', function() {


    var purchase_session_sponsor=\"";
        // line 1141
        echo ($context["purchase_session_sponsor"] ?? null);
        echo "\";

    var referal_sponsor=\"";
        // line 1143
        echo ($context["referral_session"] ?? null);
        echo "\";

    var mlm_company=\"";
        // line 1145
        echo ($context["MLM_COMPANY"] ?? null);
        echo "\";

    var mlm_register_check=\"";
        // line 1147
        echo ($context["mlm_register_check"] ?? null);
        echo "\";


    \$('#ic_required').remove();

 
   if(\$('#image1').val() == '' && \$('#image2').val() == '')
    {

        \$(\"<div id='ic_required' style='color: red;font-size: 15px;'>Front & Back IC Required</div>\").insertAfter('#input-payment-custom-field9');

        return false;

    }
    else if(\$('#image1').val() == '')
    {

        \$(\"<div id='ic_required' style='color: red;font-size: 15px;'>Front IC Required</div>\").insertAfter('#input-payment-custom-field9');

        return false;
    }
    else if(\$('#image2').val() == '')
    {

        \$(\"<div id='ic_required' style='color: red;font-size: 15px;'>Back IC Required</div>\").insertAfter('#input-payment-custom-field9');

        return false;

    }

    var purchase_session=\"";
        // line 1177
        echo ($context["purchase_session"] ?? null);
        echo "\";

    \$.ajax({
        url: 'index.php?route=checkout/mlm_register/save',
        type: 'post',
         data: \$('#collapse-mlm-register input[type=\\'text\\'], #collapse-mlm-register input[type=\\'date\\'], #collapse-mlm-register input[type=\\'datetime-local\\'], #collapse-mlm-register input[type=\\'time\\'], #collapse-mlm-register input[type=\\'password\\'], #collapse-mlm-register input[type=\\'hidden\\'], #collapse-mlm-register input[type=\\'checkbox\\']:checked, #collapse-mlm-register input[type=\\'radio\\']:checked, #collapse-mlm-register textarea, #collapse-payment-address select'),

        dataType: 'json',
        beforeSend: function() {

            \$('#mlm-register').button('loading');
        },
         success: function(json) {

           
             

           \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {

                location = json['redirect'];
            } else if (json['error']) {

                \$('#mlm-register').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-mlm-register .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                for (i in json['error']) {
                    var element = \$('#input-payment-' + i.replace('_', '-'));

                    if (\$(element).parent().hasClass('input-group')) {
                        \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    } else {
                        \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    }
                }

                // Highlight any found errors
                \$('.text-danger').parent().addClass('has-error');
            }
            else
            {
                    \$('#member_register').hide();
                    

                     \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {

                        \$('#collapse-shipping-method .panel-body').html(html);

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1236
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 1240
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1241
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                        
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });

                \$('#delivery_method').show();
                  
            }
            
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1326
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 1330
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1331
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {
    
    \$('#delivery_method').hide();
    \$('#payment_method').show();

    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-shipping-method').button('loading');
\t\t},
        success: function(json) {

            \$('#collapseFive').remove();

            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1382
        echo ($context["text_checkout_payment_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1386
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
         \t\$('#button-payment-method').button('loading');
\t\t},
        success: function(json) {

            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {

                \$('#button-payment-method').button('reset');
                
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {

                \$('#payment_method').hide();
                \$('#confirm_order').show();

                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-checkout-confirm .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1436
        echo ($context["text_checkout_confirm"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
\t\t\t\t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});


</script>

    <script>

    \$(document ).ready(function() {

    var eligibility=\"";
        // line 1459
        echo ($context["mlm_eligibility"] ?? null);
        echo "\";

    var purchase_session=\"";
        // line 1461
        echo ($context["purchase_session"] ?? null);
        echo "\";

    \$(\"#input-payment-custom-field12\").prop(\"readonly\", true);

    \$('#input-payment-custom-field12').prop('readonly', true);

    
    \$(document).on('change','#input-payment-custom-field12',function(){

        var value=this.value;

        var url='?route=account/register&sponsor_name='+this.value;

        if(value.length > 0)
        {

        \$.ajax({
              url: url,
              type: 'GET',
              dataType: 'html', 
              success: function(res) {

                console.log(res);

                if (res == \"true\") {

                  \$('#input-payment-custom-field12').val(value);

                   \$('.validation').remove();

                }
                else
                {

                  \$('#input-payment-custom-field12').val(res);

                  \$(\"#input-payment-custom-field12\").parent().after(\"<div id='sponsor_error' class='validation' style='color: red;position: absolute;left: 105px;top: 54px;'>Sponsor not found</div>\");

                  \$('.validation').delay(3000).fadeOut(400);

                }

              }
          })

        }

    });

    \$(document).on('change','#input-payment-custom-field16',function(){

        var value=this.value;
        var url='?route=account/register&sponsor_name='+this.value;
        if(value.length > 0)
        {

        \$.ajax({
              url: url,
              type: 'GET',
              dataType: 'html', 
              success: function(res) {

                console.log(res);

                if (res == \"true\") {

                  \$('#input-payment-custom-field16').val(value);

                   \$('.validation').remove();

                }
                else
                {

                  \$('#input-payment-custom-field16').val(res);

                  \$(\"#input-payment-custom-field16\").parent().after(\"<div id='sponsor_error' class='validation' style='color: red;position: absolute;left: 105px;top: 54px;'>Sponsor not found</div>\");

                  \$('.validation').delay(3000).fadeOut(400);

                }

              }
          })

        }

    });

    });
    </script>


     <script>


    function initImageUpload(box) {


  let uploadField = box.querySelector('.image-upload');


    uploadField.addEventListener('change', getFile);


  

  function getFile(e){
  
    let file = e.currentTarget.files[0];
    checkType(file);

    var node=this;

    // console.log(new FormData(\$('#form-upload')[0]));

     \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        // beforeSend: function() {
        //     // console.log(\"1\");
        //   // \$(node).button('loading');
        // },
        // complete: function() {
        //     // console.log(\"2\");
        //   // \$(node).button('reset');
        // },
        success: function(json) {

      
            // console.log(\"3\");
          \$('.text-danger').remove();

          if (json['error']) {

            \$(node).parent().after('<div class=\"text-danger\">Front IC Required</div>');
          }

          if (json['success']) {


            \$('#one').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });


  }
  
  function previewImage(file){

    let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
    }
    reader.readAsDataURL(file);
    thumb.className += ' js--no-default';
  }

  function checkType(file){

    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
  let box = boxes[i];
  initDropEffect(box);
  initImageUpload(box);
}

/// drop-effect
function initDropEffect(box){

  let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
  
  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);

  function fireRipple(e){
 
    area = e.currentTarget
    // create drop
    if(!drop){
      drop = document.createElement('span');
      drop.className = 'drop';
      this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue(\"width\");
    areaHeight = getComputedStyle(this, null).getPropertyValue(\"height\");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue(\"width\");
    dropHeight = getComputedStyle(this, null).getPropertyValue(\"height\");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
  }
}

  </script>

  <script>
    \$(document).ready(function() {
 
    \$('#member_register').hide();

    });
  </script>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj\" crossorigin=\"anonymous\"></script>

";
        // line 1712
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "glamour/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2130 => 1712,  1876 => 1461,  1871 => 1459,  1845 => 1436,  1792 => 1386,  1785 => 1382,  1731 => 1331,  1727 => 1330,  1720 => 1326,  1632 => 1241,  1628 => 1240,  1621 => 1236,  1559 => 1177,  1526 => 1147,  1521 => 1145,  1516 => 1143,  1511 => 1141,  1498 => 1130,  1488 => 1123,  1481 => 1119,  1470 => 1110,  1459 => 1102,  1455 => 1101,  1451 => 1100,  1444 => 1096,  1425 => 1080,  1421 => 1079,  1414 => 1075,  1402 => 1066,  1383 => 1049,  1381 => 1048,  1303 => 973,  1299 => 972,  1292 => 968,  1251 => 930,  1247 => 929,  1243 => 928,  1235 => 923,  1176 => 867,  1171 => 865,  1099 => 795,  1078 => 777,  1071 => 773,  1062 => 766,  1058 => 764,  1056 => 763,  1030 => 740,  1026 => 739,  1022 => 738,  1015 => 734,  947 => 669,  935 => 659,  925 => 652,  918 => 648,  910 => 642,  898 => 633,  894 => 632,  890 => 631,  883 => 627,  871 => 618,  856 => 605,  854 => 604,  809 => 562,  804 => 560,  799 => 558,  794 => 556,  789 => 554,  735 => 503,  730 => 501,  707 => 481,  702 => 479,  664 => 444,  659 => 442,  632 => 418,  628 => 417,  591 => 383,  586 => 381,  559 => 357,  554 => 355,  540 => 343,  527 => 333,  518 => 326,  505 => 316,  493 => 306,  491 => 305,  480 => 297,  473 => 293,  465 => 288,  458 => 284,  390 => 219,  385 => 217,  378 => 213,  373 => 211,  331 => 171,  322 => 168,  318 => 167,  315 => 166,  311 => 165,  305 => 161,  296 => 158,  292 => 157,  286 => 154,  283 => 153,  278 => 152,  269 => 149,  265 => 148,  261 => 147,  257 => 146,  249 => 145,  244 => 144,  235 => 143,  225 => 142,  222 => 141,  218 => 140,  210 => 135,  206 => 134,  202 => 133,  198 => 132,  194 => 131,  95 => 34,  89 => 32,  87 => 31,  68 => 14,  57 => 12,  53 => 11,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/checkout/checkout.twig", "");
    }
}
