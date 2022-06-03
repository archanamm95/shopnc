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

/* glamour/template/checkout/register.twig */
class __TwigTemplate_02a3d79053fdd3531684b792aaf99922b7f5c4a5f23f1d418402355f10fc38b6 extends \Twig\Template
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
        echo ($context["email_exist_in_mlm"] ?? null);
        echo "
<div class=\"row\">
  <div class=\"col-sm-6\">
    <fieldset id=\"account\">
      <legend>";
        // line 5
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
      <div class=\"form-group\" style=\"display: ";
        // line 6
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <label class=\"control-label\">";
        // line 7
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 9
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 9) == ($context["customer_group_id"] ?? null))) {
                // line 10
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 12);
                echo "\" checked=\"checked\" />
            ";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 13);
                echo "</label>
        </div>
        ";
            } else {
                // line 16
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 18);
                echo "\" />
            ";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 19);
                echo "</label>
        </div>
        ";
            }
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 24
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 25
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 28
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 29
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\" id=\"email_div\">
        <label class=\"control-label\" for=\"input-payment-email\">";
        // line 32
        echo ($context["entry_email"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 33
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>

      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 37
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\" />
      </div>
      <!-- Guest checkout -->
      
      ";
        // line 42
        if ((($context["guest_checkout"] ?? null) == "1")) {
            // line 43
            echo "      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
            // line 44
            echo ($context["entry_country"] ?? null);
            echo "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
            // line 46
            echo ($context["text_select"] ?? null);
            echo "</option>

         ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 49
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 49) == ($context["country_id"] ?? null))) {
                    // line 50
                    echo "          
          <option value=\"";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 51);
                    echo "</option>
          
          ";
                } else {
                    // line 54
                    echo "
          <option value=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 55);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 55);
                    echo "</option>

          ";
                }
                // line 58
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
            // line 63
            echo ($context["entry_zone"] ?? null);
            echo "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        }
        // line 68
        echo "
      ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 70
            echo "      
      ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 71) == "account")) {
                // line 72
                echo "      
      ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 73) == "select")) {
                    // line 74
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 74);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 75);
                    echo "</label>
        <select name=\"custom_field[";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 76);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 77
                    echo ($context["text_select"] ?? null);
                    echo "</option>
          
          
          
          ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 82
                        echo "          
          
          
          <option value=\"";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 85);
                        echo "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "        
        
        
        </select>
      </div>
      ";
                }
                // line 96
                echo "      
      ";
                // line 97
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 97) == "radio")) {
                    // line 98
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 98);
                    echo "\">
        <label class=\"control-label\">";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 99);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 101
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 103);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                        echo "\" />
              ";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo " </div>
      </div>
      ";
                }
                // line 109
                echo "      
      ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 110) == "checkbox")) {
                    // line 111
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 111);
                    echo "\">
        <label class=\"control-label\">";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 112);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 113));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 114
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 116
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 116);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 116);
                        echo "\" />
              ";
                        // line 117
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 117);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo " </div>
      </div>
      ";
                }
                // line 122
                echo "      
      ";
                // line 123
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "text")) {
                    // line 124
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 124);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 126);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 126);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 129
                echo "      
      ";
                // line 130
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "textarea")) {
                    // line 131
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 131);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 133
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 133);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 133);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 133);
                    echo "</textarea>
      </div>
      ";
                }
                // line 136
                echo "      
      ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "file")) {
                    // line 138
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 138);
                    echo "\">
        <label class=\"control-label\">";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 142);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                    echo "\" />
      </div>
      ";
                }
                // line 145
                echo "      
      ";
                // line 146
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 146) == "date")) {
                    // line 147
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 147);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 150);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 150);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 156
                echo "      
      ";
                // line 157
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 157) == "time")) {
                    // line 158
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 158);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 159);
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 161);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 161);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 167
                echo "      
      ";
                // line 168
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 168) == "datetime")) {
                    // line 169
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 169);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 172);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 172);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 172);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 178
                echo "      
      ";
            }
            // line 180
            echo "      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "    </fieldset>
    <fieldset style=\"display: contents;\" id=\"password_div\">
      <legend>";
        // line 184
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
      <div class=\"form-group required\" >
        <label class=\"control-label\" for=\"input-payment-password\">";
        // line 186
        echo ($context["entry_password"] ?? null);
        echo "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 187
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-payment-password\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\" >
        <label class=\"control-label\" for=\"input-payment-confirm\">";
        // line 190
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
        <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 191
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-payment-confirm\" class=\"form-control\" />
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 197
        echo ($context["text_your_address"] ?? null);
        echo "</legend>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-company\">";
        // line 199
        echo ($context["entry_company"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 200
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 203
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 204
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 207
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 208
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-city\">";
        // line 211
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 212
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 215
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 216
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
      ";
        // line 218
        if ((($context["guest_checkout"] ?? null) == ($context["empty"] ?? null))) {
            // line 219
            echo "      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
            // line 220
            echo ($context["entry_country"] ?? null);
            echo "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
            // line 222
            echo ($context["text_select"] ?? null);
            echo "</option>
         ";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 224
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 224) == ($context["country_id"] ?? null))) {
                    // line 225
                    echo "
          <option value=\"";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 226);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 226);
                    echo "</option>

          ";
                } else {
                    // line 229
                    echo "          
          <option value=\"";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 230);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 230);
                    echo "</option>

          ";
                }
                // line 233
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "        </select>
      </div>
     
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
            // line 238
            echo ($context["entry_zone"] ?? null);
            echo "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
       ";
        }
        // line 243
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 244
            echo "      
      ";
            // line 245
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 245) == "address")) {
                // line 246
                echo "      
      ";
                // line 247
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 247) == "select")) {
                    // line 248
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 248);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 249);
                    echo "</label>
        <select name=\"custom_field[";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 250);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 251
                    echo ($context["text_select"] ?? null);
                    echo "</option>
          
          
          
          ";
                    // line 255
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 255));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 256
                        echo "          
          
          
          <option value=\"";
                        // line 259
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 259);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 259);
                        echo "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 264
                    echo "        
        
        
        </select>
      </div>
      ";
                }
                // line 270
                echo "      
      ";
                // line 271
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 271) == "radio")) {
                    // line 272
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 272);
                    echo "\">
        <label class=\"control-label\">";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 273);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 274
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 274));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 275
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 277
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 277);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 277);
                        echo "\" />
              ";
                        // line 278
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 278);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo " </div>
      </div>
      ";
                }
                // line 283
                echo "      
      ";
                // line 284
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 284) == "checkbox")) {
                    // line 285
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 285);
                    echo "\">
        <label class=\"control-label\">";
                    // line 286
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 286);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 287
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 287));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 288
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 290
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 290);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 290);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 290);
                        echo "\" />
              ";
                        // line 291
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 291);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 293
                    echo " </div>
      </div>
      ";
                }
                // line 296
                echo "      
      ";
                // line 297
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 297) == "text")) {
                    // line 298
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 298);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 298);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 299);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 299);
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 300
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 300);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 300);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 300);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300);
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 303
                echo "      
      ";
                // line 304
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 304) == "textarea")) {
                    // line 305
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 305);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 305);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 306
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 306);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 306);
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 307);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 307);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 307);
                    echo "</textarea>
      </div>
      ";
                }
                // line 310
                echo "      
      ";
                // line 311
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 311) == "file")) {
                    // line 312
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 312);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 312);
                    echo "\">
        <label class=\"control-label\">";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 313);
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 316);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 316);
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 316);
                    echo "\" />
      </div>
      ";
                }
                // line 319
                echo "      
      ";
                // line 320
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 320) == "date")) {
                    // line 321
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 321);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 321);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 322);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 322);
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 324);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 324);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 324);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 330
                echo "      
      ";
                // line 331
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 331) == "time")) {
                    // line 332
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 332);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 332);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 333
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 333);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 333);
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 335
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 335);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 335);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 335);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 335);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 335);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 341
                echo "      
      ";
                // line 342
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 342) == "datetime")) {
                    // line 343
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 343);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 343);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 344
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 344);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 344);
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 346);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 346);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 346);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 346);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 346);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 352
                echo "      
      ";
            }
            // line 354
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "    </fieldset>

    ";
        // line 357
        echo ($context["captcha"] ?? null);
        echo "</div>
</div>
<div class=\"checkbox\">
  <label for=\"newsletter\">
    <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
    ";
        // line 362
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
</div>
";
        // line 364
        if (($context["shipping_required"] ?? null)) {
            // line 365
            echo "<div class=\"checkbox\">
  <label>
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
    ";
            // line 368
            echo ($context["entry_shipping"] ?? null);
            echo "</label>
</div>
";
        }
        // line 371
        if (($context["text_agree"] ?? null)) {
            // line 372
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">";
            // line 373
            echo ($context["text_agree"] ?? null);
            echo " 
    &nbsp;
    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    <input type=\"button\" value=\"";
            // line 376
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />


 <!--   a <button data-loading-text=\"";
            // line 379
            echo ($context["text_loading"] ?? null);
            echo "\" id=\"button-register\" value=\"";
            echo ($context["button_continue"] ?? null);
            echo "\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary step\" type=\"button\" data-bs-toggle=\"collapse\"
            data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
           Continue
        </button> -->

   <!--  <button data-loading-text=\"";
            // line 384
            echo ($context["text_loading"] ?? null);
            echo "\" id=\"button-register\" value=\"";
            echo ($context["button_continue"] ?? null);
            echo "\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary step\" type=\"button\" data-bs-toggle=\"collapse\"
            data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
           Continue
        </button> -->

  </div>
</div>


<!--  <button data-loading-text=\"";
            // line 393
            echo ($context["text_loading"] ?? null);
            echo "\" id=\"button-register\" value=\"";
            echo ($context["button_continue"] ?? null);
            echo "\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary step\" type=\"button\" data-bs-toggle=\"collapse\"
            data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
           Continue
        </button> -->

";
        } else {
            // line 399
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
            // line 401
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\" />

  <!--  n<button data-loading-text=\"";
            // line 403
            echo ($context["text_loading"] ?? null);
            echo "\" id=\"button-register\" value=\"";
            echo ($context["button_continue"] ?? null);
            echo "\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary step\" type=\"button\" data-bs-toggle=\"collapse\"
            data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
           Continue
        </button> -->


  </div>
</div>

  <button class=\"step-button text-center collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
            data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
            2
        </button>

        
";
        }
        // line 418
        echo " 
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
  if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
    \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
  }
  if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
    \$('#account .form-group:last').after(this);
  }
  if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
    \$('#account .form-group:last').after(this);
  }
  if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
    \$('#account .form-group:first').before(this);
  }
});
\$('#address .form-group[data-sort]').detach().each(function() {
  if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
    \$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
  }
  if (\$(this).attr('data-sort') > \$('#address .form-group').length) {
    \$('#address .form-group:last').after(this);
  }
  if (\$(this).attr('data-sort') == \$('#address .form-group').length) {
    \$('#address .form-group:last').after(this);
  }
  if (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
    \$('#address .form-group:first').before(this);
  }
});
\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
  \$.ajax({
    url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
    dataType: 'json',
    success: function(json) {
      \$('#collapse-payment-address .custom-field').hide();
      \$('#collapse-payment-address .custom-field').removeClass('required');
      for (i = 0; i < json.length; i++) {
        custom_field = json[i];
        \$('#payment-custom-field' + custom_field['custom_field_id']).show();
        if (custom_field['required']) {
          \$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
        }
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
});
\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
  var node = this;
  \$('#form-upload').remove();
  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
  \$('#form-upload input[name=\\'file\\']').trigger('click');
  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }
  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);
      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();
          if (json['error']) {
            \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }
          if (json['success']) {
            alert(json['success']);
            \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 517
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});
\$('.time').datetimepicker({
  language: '";
        // line 521
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});
\$('.datetime').datetimepicker({
  language: '";
        // line 525
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
  \$.ajax({
    url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
    dataType: 'json',
    beforeSend: function() {
      \$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
    },
    complete: function() {
      \$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
    },
    success: function(json) {
      if (json['postcode_required'] == '1') {
        \$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
      } else {
        \$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
      }
      html = '<option value=\"\">";
        // line 547
        echo ($context["text_select"] ?? null);
        echo "</option>';
      if (json['zone'] && json['zone'] != '') {
        for (i = 0; i < json['zone'].length; i++) {
          html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
          if (json['zone'][i]['zone_id'] == '";
        // line 551
        echo ($context["zone_id"] ?? null);
        echo "') {
            html += ' selected=\"selected\"';
          }
          html += '>' + json['zone'][i]['name'] + '</option>';
        }
      } else {
        html += '<option value=\"0\" selected=\"selected\">";
        // line 557
        echo ($context["text_none"] ?? null);
        echo "</option>';
      }
      \$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
});
\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script> 

 <script>
 \$(document ).ready(function() {

    var guest_checkout=\"";
        // line 572
        echo ($context["guest_checkout"] ?? null);
        echo "\";
    var purchase_session=\"";
        // line 573
        echo ($context["purchase_session"] ?? null);
        echo "\";
    var mlm_company=\"";
        // line 574
        echo ($context["MLM_COMPANY"] ?? null);
        echo "\";
    var member_register=\"";
        // line 575
        echo ($context["purchase_link_member_register"] ?? null);
        echo "\";
     if(purchase_session != mlm_company && member_register != \"1\")
    {
      let random = (Math.random() + 1).toString(36).substring(7);
      \$('#input-payment-email').val(random+\"@cc.com\");
      \$('#input-payment-password').val(random+\"@cc.com\");
      \$('#input-payment-confirm').val(random+\"@cc.com\");
      \$('#email_div').hide();  
      \$('#password_div').hide();  
    }
  });
  </script>

  <script>
  \$( document ).ready(function() {

     \$( \"#input-payment-email\" ).after( \"<p id='email-error' style='color: red;'></p>\" );

    \$(\"#input-payment-email\").on(\"keyup change\", function(e) {
      if( this.value.length > 5 )
      {
       
      \$.ajax({
          url: 'index.php?route=checkout/register/check_email_exist',
          dataType:'html',
          data : 'email='+this.value,
          type : 'post',
   
          success: function(data) {

            if(data == \"true\")
            {
              \$( \"#email-error\" ).text( \"Email ID Already Exist\" );
              \$( \"#button-register\" ).prop(\"disabled\",true);
            }
            else
            {
              \$( \"#email-error\" ).text( \"\" );
              \$( \"#button-register\" ).prop(\"disabled\",false);
            }
           
          },
          error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
      }
    });
    });
  </script>";
    }

    public function getTemplateName()
    {
        return "glamour/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1446 => 575,  1442 => 574,  1438 => 573,  1434 => 572,  1416 => 557,  1407 => 551,  1400 => 547,  1375 => 525,  1368 => 521,  1361 => 517,  1260 => 418,  1237 => 403,  1230 => 401,  1226 => 399,  1213 => 393,  1197 => 384,  1185 => 379,  1177 => 376,  1171 => 373,  1168 => 372,  1166 => 371,  1160 => 368,  1155 => 365,  1153 => 364,  1148 => 362,  1140 => 357,  1136 => 355,  1130 => 354,  1126 => 352,  1109 => 346,  1102 => 344,  1095 => 343,  1093 => 342,  1090 => 341,  1073 => 335,  1066 => 333,  1059 => 332,  1057 => 331,  1054 => 330,  1037 => 324,  1030 => 322,  1023 => 321,  1021 => 320,  1018 => 319,  1008 => 316,  1000 => 315,  995 => 313,  988 => 312,  986 => 311,  983 => 310,  969 => 307,  963 => 306,  956 => 305,  954 => 304,  951 => 303,  937 => 300,  931 => 299,  924 => 298,  922 => 297,  919 => 296,  914 => 293,  905 => 291,  897 => 290,  893 => 288,  887 => 287,  883 => 286,  876 => 285,  874 => 284,  871 => 283,  866 => 280,  857 => 278,  849 => 277,  845 => 275,  839 => 274,  835 => 273,  828 => 272,  826 => 271,  823 => 270,  815 => 264,  802 => 259,  797 => 256,  793 => 255,  786 => 251,  778 => 250,  772 => 249,  765 => 248,  763 => 247,  760 => 246,  758 => 245,  755 => 244,  750 => 243,  742 => 238,  736 => 234,  730 => 233,  722 => 230,  719 => 229,  711 => 226,  708 => 225,  705 => 224,  701 => 223,  697 => 222,  692 => 220,  689 => 219,  687 => 218,  680 => 216,  676 => 215,  670 => 212,  666 => 211,  660 => 208,  656 => 207,  650 => 204,  646 => 203,  640 => 200,  636 => 199,  631 => 197,  622 => 191,  618 => 190,  612 => 187,  608 => 186,  603 => 184,  599 => 182,  592 => 180,  588 => 178,  571 => 172,  564 => 170,  557 => 169,  555 => 168,  552 => 167,  535 => 161,  528 => 159,  521 => 158,  519 => 157,  516 => 156,  499 => 150,  492 => 148,  485 => 147,  483 => 146,  480 => 145,  470 => 142,  462 => 141,  457 => 139,  450 => 138,  448 => 137,  445 => 136,  431 => 133,  425 => 132,  418 => 131,  416 => 130,  413 => 129,  399 => 126,  393 => 125,  386 => 124,  384 => 123,  381 => 122,  376 => 119,  367 => 117,  359 => 116,  355 => 114,  349 => 113,  345 => 112,  338 => 111,  336 => 110,  333 => 109,  328 => 106,  319 => 104,  311 => 103,  307 => 101,  301 => 100,  297 => 99,  290 => 98,  288 => 97,  285 => 96,  277 => 90,  264 => 85,  259 => 82,  255 => 81,  248 => 77,  240 => 76,  234 => 75,  227 => 74,  225 => 73,  222 => 72,  220 => 71,  217 => 70,  213 => 69,  210 => 68,  202 => 63,  196 => 59,  190 => 58,  182 => 55,  179 => 54,  171 => 51,  168 => 50,  165 => 49,  161 => 48,  156 => 46,  151 => 44,  148 => 43,  146 => 42,  139 => 38,  135 => 37,  128 => 33,  124 => 32,  118 => 29,  114 => 28,  108 => 25,  104 => 24,  95 => 22,  89 => 19,  85 => 18,  81 => 16,  75 => 13,  71 => 12,  67 => 10,  64 => 9,  60 => 8,  56 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/checkout/register.twig", "");
    }
}
