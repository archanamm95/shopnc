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

/* glamour/template/checkout/shipping_address.twig */
class __TwigTemplate_5293da0961aef99ed56766dc57cf4ad6382e8c0a95df5c5491c44dbb8c4eec7a extends \Twig\Template
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
        echo "<form class=\"form-horizontal\">  
  ";
        // line 2
        if (($context["addresses"] ?? null)) {
            // line 3
            echo "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
  </div>
  <div id=\"shipping-existing\">
    <select  id=\"country_value\" name=\"address_id\" class=\"form-control\">
     ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 11) == ($context["address_id"] ?? null))) {
                    // line 12
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 12);
                    echo "</option>
      ";
                } else {
                    // line 14
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 14);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 14);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 14);
                    echo "</option>

      ";
                }
                // line 17
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
      ";
            // line 23
            echo ($context["text_address_new"] ?? null);
            echo "</label>
  </div>
  ";
        }
        // line 26
        echo "  <br />
  <div id=\"shipping-new\" style=\"display: ";
        // line 27
        if (($context["addresses"] ?? null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 29
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 31
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 35
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 37
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 41
        echo ($context["entry_company"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 43
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 47
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 49
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 53
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 55
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 59
        echo ($context["entry_city"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 61
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 65
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 67
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 71
        echo ($context["entry_country"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
          <option value=\"\">";
        // line 74
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 76
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 76) == ($context["country_id"] ?? null))) {
                // line 77
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 77);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 77);
                echo "</option>
          ";
            } else {
                // line 79
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 79);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 79);
                echo "</option>
           ";
            }
            // line 81
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </select>
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 86
        echo ($context["entry_zone"] ?? null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
        </select>
      </div>
    </div>
   ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 93
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "select")) {
                // line 94
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 94)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 94);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"custom_field[";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 97);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "]\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "\" class=\"form-control\">
          <option value=\"\">";
                // line 98
                echo ($context["text_select"] ?? null);
                echo "</option>
          ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 99));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 100
                    echo "          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "        </select>
      </div>
    </div>
    ";
            }
            // line 106
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "radio")) {
                // line 107
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 107)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 107);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\">
          ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 112
                    echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                    echo "\" />
              ";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 115);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 122
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 122) == "checkbox")) {
                // line 123
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 123)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 123);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                echo "\">
          ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 127));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 128
                    echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 130);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 130);
                    echo "\" />
              ";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 131);
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 138
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 138) == "text")) {
                // line 139
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 139)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 139);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"custom_field[";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 142);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 142);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                echo "\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "\" class=\"form-control\" />
      </div>
    </div>
    ";
            }
            // line 146
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 146) == "textarea")) {
                // line 147
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 147)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 147);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 148
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"custom_field[";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 150);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                echo "\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 150);
                echo "</textarea>
      </div>
    </div>
    ";
            }
            // line 154
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 154) == "file")) {
                // line 155
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 155)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 155);
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                echo "</label>
      <div class=\"col-sm-10\">
        <button type=\"button\" id=\"button-shipping-custom-field";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 159);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "]\" value=\"\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\" />
      </div>
    </div>
    ";
            }
            // line 163
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 163) == "date")) {
                // line 164
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 164)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 164);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 165);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 168);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 168);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 168);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 175
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 175) == "time")) {
                // line 176
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 176)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 176);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 180);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 180);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 187
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 187) == "datetime")) {
                // line 188
                echo "    <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 188)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 188);
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 192);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 192);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 192);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 199
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "  </div>
  <div class=\"buttons clearfix\">

    <div class=\"pull-right\">
      <br>
      <input type=\"button\" value=\"";
        // line 205
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-shipping-address\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />

      <!-- ";
        // line 207
        if ((($context["member_register"] ?? null) != "1")) {
            // line 208
            echo "       <input id=\"previous\" type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previous\" />

      ";
        }
        // line 210
        echo " -->

    </div>
     ";
        // line 213
        if ((($context["member_register"] ?? null) != "1")) {
            // line 214
            echo "    <!--  <div class=\"pull-left\">
  


       <input id=\"previous\" type=\"button\" name=\"previous\" class=\"previous action-button-previous\" value=\"Previous\" />



    </div> -->
    ";
        }
        // line 224
        echo "  </div>
</form>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#shipping-existing').hide();
\t\t\$('#shipping-new').show();
\t} else {
\t\t\$('#shipping-existing').show();
\t\t\$('#shipping-new').hide();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 311
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 316
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 321
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 344
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 350
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 357
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-shipping-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-shipping-address select[name=\\'country_id\\']').trigger('change');
//--></script>

  <script>
 \$(document ).ready(function() {

    \$('#button-shipping-address').click(function() {

      var address = \$('#country_value').find(\":selected\").text();
      var result = address.split(',');
      console.log(result[4]);
      \$.ajax({
              url: 'index.php?route=checkout/checkout&delivery_charge='+result[4],
              dataType: 'html',
              success: function(data) {

                console.log(data);

              },
              error: function(xhr, ajaxOptions, thrownError) {
                  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
        });

        // \$.ajax({
        //       url: 'index.php?route=checkout/checkout&flat_rate='+delivery_charge,
        //       dataType: 'html',
        //       success: function(data) {

        //         // alert(data);

        //       },
        //       error: function(xhr, ajaxOptions, thrownError) {
        //           alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        //       }
        // });

      });

    \$('#account_billing').hide();

    \$('#account').addClass('active');

    var member_register=\"";
        // line 411
        echo ($context["member_register"] ?? null);
        echo "\";

      \$( \"#previous\" ).click(function() {

      \$('#delivery_details').hide();

      \$('#account_billing').show();

      \$('#account_billing').removeClass('opacity');

      \$('#delivery').removeClass('active');

    });

  });

  </script>
";
    }

    public function getTemplateName()
    {
        return "glamour/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  900 => 411,  843 => 357,  833 => 350,  824 => 344,  798 => 321,  790 => 316,  782 => 311,  693 => 224,  681 => 214,  679 => 213,  674 => 210,  669 => 208,  667 => 207,  660 => 205,  653 => 200,  647 => 199,  629 => 192,  621 => 189,  612 => 188,  609 => 187,  591 => 180,  583 => 177,  574 => 176,  571 => 175,  553 => 168,  545 => 165,  536 => 164,  533 => 163,  522 => 159,  514 => 158,  509 => 156,  500 => 155,  497 => 154,  482 => 150,  475 => 148,  466 => 147,  463 => 146,  448 => 142,  441 => 140,  432 => 139,  429 => 138,  423 => 134,  414 => 131,  406 => 130,  402 => 128,  398 => 127,  394 => 126,  389 => 124,  380 => 123,  377 => 122,  371 => 118,  362 => 115,  354 => 114,  350 => 112,  346 => 111,  342 => 110,  337 => 108,  328 => 107,  325 => 106,  319 => 102,  308 => 100,  304 => 99,  300 => 98,  292 => 97,  285 => 95,  276 => 94,  273 => 93,  269 => 92,  260 => 86,  254 => 82,  248 => 81,  240 => 79,  232 => 77,  229 => 76,  225 => 75,  221 => 74,  215 => 71,  206 => 67,  201 => 65,  194 => 61,  189 => 59,  182 => 55,  177 => 53,  170 => 49,  165 => 47,  158 => 43,  153 => 41,  146 => 37,  141 => 35,  134 => 31,  129 => 29,  120 => 27,  117 => 26,  111 => 23,  104 => 18,  98 => 17,  79 => 14,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/checkout/shipping_address.twig", "");
    }
}
