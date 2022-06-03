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

/* glamour/template/checkout/cart.twig */
class __TwigTemplate_cd41c4c6d8d99a1dbb66a3113afa4a1ae1215324b300d0a8a57ae89911b63988 extends \Twig\Template
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
<div class=\"breadcrumb-container\">
  <h1 class=\"page-title\">";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
    ";
        // line 4
        if (($context["weight"] ?? null)) {
            // line 5
            echo "    &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
    ";
        }
        // line 7
        echo "  </h1>
  <ul class=\"breadcrumb\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </ul>
</div>
<div id=\"checkout-cart\" class=\"container\">
  <div class=\"wrapper_container row\">";
        // line 15
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 16
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      
      ";
        // line 25
        if (($context["attention"] ?? null)) {
            // line 26
            echo "      <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 30
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 31
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 35
        echo "      ";
        if (($context["error_warning"] ?? null)) {
            // line 36
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 40
        echo "      <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
              <td>asdsad</td>
                <td class=\"text-center\">";
        // line 46
        echo ($context["column_image"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 47
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 48
        echo ($context["column_model"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 49
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 50
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 51
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "            <tr>
              <td class=\"text-center\">";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left\"><a href=\"";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 59);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 59)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 60
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 60)) {
                // line 61
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 62);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 62);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                ";
            }
            // line 64
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 64)) {
                echo " <br />
                <small>";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 65);
                echo "</small> ";
            }
            // line 66
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 66)) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 67
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 67);
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 68);
            echo "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 70);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 70);
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 73
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 73);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right unit-price\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75);
            echo "</td>
              <td class=\"text-right total-price\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 76);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 80
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 82);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 87
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 87);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 89);
            echo "</td>
              <td class=\"text-right\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 90);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      <div class=\"row\">
        <div class=\"col-md-12\">
        ";
        // line 100
        if (($context["modules"] ?? null)) {
            // line 101
            echo "          <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
          <p>";
            // line 102
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
        </div>
        <div class=\"panel-group col-sm-8\" id=\"accordion\"> ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 105
                echo "          ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo " 
        </div>
        ";
        }
        // line 109
        echo "        <div class=\"col-sm-4 sub-total-table\">
            <table class=\"table table-bordered\">
              ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 112
            echo "              <tr>
                <td class=\"text-right\"><strong>";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 113);
            echo ":</strong></td>
                <td class=\"text-right total-amount\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 114);
            echo "</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "            </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 121
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 122
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 124
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 125
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 127
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "glamour/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 127,  413 => 125,  408 => 124,  401 => 122,  395 => 121,  389 => 117,  380 => 114,  376 => 113,  373 => 112,  369 => 111,  365 => 109,  360 => 106,  351 => 105,  347 => 104,  342 => 102,  337 => 101,  335 => 100,  326 => 93,  317 => 90,  313 => 89,  306 => 87,  298 => 82,  294 => 80,  289 => 79,  280 => 76,  276 => 75,  269 => 73,  265 => 72,  258 => 70,  253 => 68,  245 => 67,  240 => 66,  236 => 65,  231 => 64,  228 => 63,  219 => 62,  212 => 61,  209 => 60,  201 => 59,  187 => 58,  184 => 57,  180 => 56,  172 => 51,  168 => 50,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  142 => 40,  134 => 36,  131 => 35,  123 => 31,  120 => 30,  112 => 26,  110 => 25,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  82 => 16,  78 => 15,  73 => 12,  62 => 10,  58 => 9,  54 => 7,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/checkout/cart.twig", "");
    }
}
