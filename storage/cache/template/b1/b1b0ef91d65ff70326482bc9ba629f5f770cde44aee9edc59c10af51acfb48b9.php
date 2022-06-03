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

/* glamour/template/account/order_list.twig */
class __TwigTemplate_58a9bb84544ac5683e2f363f4375d5a3cfbd4908ccb5eced1cce9fc6eab72ed7 extends \Twig\Template
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
        echo "</h1>
  <ul class=\"breadcrumb\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
</div>
<div id=\"account-order\" class=\"container\">
  <div class=\"wrapper_container row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 20
        if (($context["orders"] ?? null)) {
            // line 21
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 25
            echo ($context["column_order_id"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 26
            echo ($context["column_customer"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 27
            echo ($context["column_product"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 28
            echo ($context["column_status"] ?? null);
            echo "</td>
              <td class=\"text-right\">";
            // line 29
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-left\">";
            // line 30
            echo ($context["column_date_added"] ?? null);
            echo "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 36
                echo "            <tr>
              <td class=\"text-right\">#";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 37);
                echo "</td>
              <td class=\"text-left\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 38);
                echo "</td>
              <td class=\"text-right\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 39);
                echo "</td>
              <td class=\"text-left\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 40);
                echo "</td>
              <td class=\"text-right\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 41);
                echo "</td>
              <td class=\"text-left\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 42);
                echo "</td>
              <td class=\"text-right\">

                ";
                // line 45
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45) == "Processing") && (twig_get_attribute($this->env, $this->source, $context["order"], "tracking_id", [], "any", false, false, false, 45) != "0"))) {
                    // line 46
                    echo "
                <a onclick=\"linkTrack('";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "tracking_id", [], "any", false, false, false, 47);
                    echo "')\" data-toggle=\"tooltip\" title=\"Track\" class=\"btn btn-primary\"> <i class=\"fa fa-truck\" aria-hidden=\"true\"></i></a>

                ";
                }
                // line 50
                echo "
                <a href=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 51);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "          </tbody>
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 58
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 59
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        } else {
            // line 62
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 64
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 65
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 67
        echo ($context["content_middle"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 68
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script src=\"tracking.js\"></script>

<script>

  function linkTrack(num)
  {
    TrackButton.track({
      tracking_no:num
    });
  }

  </script>
";
        // line 82
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "glamour/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 82,  229 => 68,  224 => 67,  217 => 65,  214 => 64,  208 => 62,  202 => 59,  198 => 58,  192 => 54,  181 => 51,  178 => 50,  172 => 47,  169 => 46,  167 => 45,  161 => 42,  157 => 41,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  138 => 36,  134 => 35,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  100 => 21,  98 => 20,  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  71 => 12,  67 => 11,  62 => 8,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/account/order_list.twig", "");
    }
}
