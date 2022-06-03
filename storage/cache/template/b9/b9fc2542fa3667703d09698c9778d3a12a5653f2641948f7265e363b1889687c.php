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

/* sale/order_list.twig */
class __TwigTemplate_7ab1ccf1bd8ac534d3d7b9a491192d931a5014315e03beae518dde806e9d707b extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
<div class=\"page-header\">
  <div class=\"container-fluid\">
    <div class=\"pull-right\">
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
    <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
  ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if (($context["success"] ?? null)) {
            // line 26
            echo "
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            // line 27
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 31
        echo "



  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 39
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 43
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 44
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 47
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 48
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 51
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 55
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 56
            echo "              
              <option value=\"0\" selected=\"selected\">";
            // line 57
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        } else {
            // line 60
            echo "              
              <option value=\"0\">";
            // line 61
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        }
        // line 64
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 65
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 65) == ($context["filter_order_status_id"] ?? null))) {
                // line 66
                echo "              
              <option value=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 67);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 67);
                echo "</option>
              
              ";
            } else {
                // line 70
                echo "              
              <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 71);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 71);
                echo "</option>
              
              ";
            }
            // line 74
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 79
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 80
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 83
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 85
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 91
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 93
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>

          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 100
        echo ($context["button_filter"] ?? null);
        echo "</button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 108
        echo ($context["text_list"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 117
        if ((($context["sort"] ?? null) == "o.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 118
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 119
        if ((($context["sort"] ?? null) == "order_status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 120
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 121
        if ((($context["sort"] ?? null) == "o.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 122
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-right\">";
        // line 123
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 128
        if (($context["orders"] ?? null)) {
            // line 129
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 130
                echo "                 
                <tr>
                  <td class=\"text-center\"> ";
                // line 132
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 132), ($context["selected"] ?? null))) {
                    // line 133
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 133);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 135
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 135);
                    echo "\" />
                    ";
                }
                // line 137
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 137);
                echo "\" /></td>
                  <td class=\"text-right\">";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 138);
                echo "</td>
                  <td class=\"text-left\">";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 139);
                echo "</td>
                  <td class=\"text-left\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 140);
                echo "</td>
                  <td class=\"text-right\">";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 141);
                echo "</td>
                  <td class=\"text-left\">";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 142);
                echo "</td>
                  <td class=\"text-left\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 143);
                echo "</td>
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">
                      <div class=\"btn-group\">

                        ";
                // line 147
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 147) == "Pending")) {
                    // line 148
                    echo "
                         <a href=\"";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "approve", [], "any", false, false, false, 149);
                    echo "\" data-toggle=\"tooltip\" title=\"Approve\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i></a>

                        ";
                }
                // line 152
                echo "
                        ";
                // line 153
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 153) == "Processing") && (twig_get_attribute($this->env, $this->source, $context["order"], "tracking_id", [], "any", false, false, false, 153) != "0"))) {
                    // line 154
                    echo "
                         <a onclick=\"linkTrack('";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking_id", [], "any", false, false, false, 155);
                    echo "')\" data-toggle=\"tooltip\" title=\"Track\" class=\"btn btn-primary\"> <i class=\"fa fa-truck\" aria-hidden=\"true\"></i></a>

                        ";
                }
                // line 158
                echo "
                       <a href=\"";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 159);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>

                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                           <li><a href=\"";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 163);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                          <li><a href=\"";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 164);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "                ";
        } else {
            // line 171
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 172
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 175
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 181
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 182
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- <script src=\"www.tracking.my/track-button.js\"></script> -->
<script src=\"tracking.js\"></script>

<script>

  function linkTrack(num)
  {
    console.log(\"click\");
    TrackButton.track({
      tracking_no:num
    });
  }

  </script>


  <script type=\"text/javascript\">


\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 247
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 254
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\tif (confirm('";
        // line 304
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 306
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 322
        echo ($context["delete"] ?? null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 336
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 340
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 340,  727 => 336,  710 => 322,  687 => 306,  682 => 304,  629 => 254,  619 => 247,  551 => 182,  547 => 181,  539 => 175,  533 => 172,  530 => 171,  527 => 170,  513 => 164,  507 => 163,  498 => 159,  495 => 158,  489 => 155,  486 => 154,  484 => 153,  481 => 152,  475 => 149,  472 => 148,  470 => 147,  463 => 143,  459 => 142,  455 => 141,  451 => 140,  447 => 139,  443 => 138,  438 => 137,  432 => 135,  426 => 133,  424 => 132,  420 => 130,  415 => 129,  413 => 128,  405 => 123,  387 => 122,  369 => 121,  351 => 120,  333 => 119,  315 => 118,  297 => 117,  285 => 108,  274 => 100,  262 => 93,  257 => 91,  246 => 85,  241 => 83,  233 => 80,  229 => 79,  223 => 75,  217 => 74,  209 => 71,  206 => 70,  198 => 67,  195 => 66,  192 => 65,  187 => 64,  181 => 61,  178 => 60,  172 => 57,  169 => 56,  167 => 55,  160 => 51,  152 => 48,  148 => 47,  140 => 44,  136 => 43,  129 => 39,  119 => 31,  112 => 27,  109 => 26,  107 => 25,  104 => 24,  96 => 20,  94 => 19,  88 => 15,  77 => 13,  73 => 12,  68 => 10,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
