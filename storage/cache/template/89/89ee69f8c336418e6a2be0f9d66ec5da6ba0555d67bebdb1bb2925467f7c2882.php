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

/* glamour/template/extension/module/bestseller.twig */
class __TwigTemplate_f50395b281619416a0a5fb7935d445480c14c8a3e0a478def612e89e8007e512 extends \Twig\Template
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
        echo "<style>
  input[type=\"checkbox\"] {
    position: relative;
    top: 0;
    display: inline-block;
    vertical-align: middle;
    margin: 0.4rem;
}
</style>

";
        // line 11
        if ((($context["shop_page"] ?? null) == true)) {
            // line 12
            echo "<section class=\"featured-products clearfix\">  
  <h3 class=\"page-title hidden-sm hidden-xs\">
      REFINE SEARCH
  </h3>
  <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#bestseller-container\" data-toggle=\"collapse\">
    <span class=\"page-title\">";
            // line 17
            echo ($context["heading_title"] ?? null);
            echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
  <div id=\"bestseller-container\" class=\"collapse in data-toggler\">
      
      <div class=\"product-thumb transition\">

        <form id=\"price_filter_form\" class=\"form-horizontal\" role=\"form\" action=\"";
            // line 27
            echo ($context["price_filter_url"] ?? null);
            echo "\" method=\"post\">
       
        <div class=\"caption\">
          
          <h4>PRICE</h4> 
          <ul>
          <li><input type=\"checkbox\" name=\"prices\" value=\"50-100\">RM50.00 -  RM100.00</li>
          <li><input type=\"checkbox\" name=\"prices\" value=\"101-150\">RM101.00 - RM150.00</li>
          <li><input type=\"checkbox\" name=\"prices\" value=\"151-200\">RM151.00 - RM200.00</li>
          <li><input type=\"checkbox\" name=\"prices\" value=\"201-10000\">RM201.00 - Above</li>
          </ul>
           
        </div>

        <button id=\"price_filter\" disabled class=\"btn btn-primary step\" type=\"submit\" aria-expanded=\"false\" >
           REFINE SEARCH
        </button>
        </form>
      </div>
  
  </div>
</section>
";
        }
        // line 50
        echo "
<section class=\"featured-products clearfix\">  
  <h3 class=\"page-title hidden-sm hidden-xs\">
      ";
        // line 53
        echo ($context["heading_title"] ?? null);
        echo "
  </h3>
  <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#bestseller-container\" data-toggle=\"collapse\">
    <span class=\"page-title\">";
        // line 56
        echo ($context["heading_title"] ?? null);
        echo "</span>
    <span class=\"navbar-toggler collapse-icons\">
      <i class=\"fa fa-angle-down add\"></i>
      <i class=\"fa fa-angle-up remove\"></i>
    </span>
  </div>
  <div id=\"bestseller-container\" class=\"collapse in data-toggler\">
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 64
            echo "      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 65);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
            echo "\" class=\"img-responsive\" /></a></div>
        <div class=\"caption\">
          <h4><a href=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 67);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
            echo "</a></h4>
          <p class=\"description\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 68);
            echo "</p>
          ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69)) {
                // line 70
                echo "            <p class=\"price\">
              ";
                // line 71
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
                    echo "
              ";
                } else {
                    // line 74
                    echo "              <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 74);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74);
                    echo "</span>
              ";
                }
                // line 76
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "              <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 77);
                    echo "</span>
              ";
                }
                // line 79
                echo "            </p>
          ";
            }
            // line 81
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "  </div>
</section>  
<script>
\$(document).on('click', 'input[type=\"checkbox\"]', function() { 

  var shop_page_url=\"";
        // line 89
        echo ($context["price_filter_url"] ?? null);
        echo "\";

  if(\$('#price_filter_form input:checked').length > 0)
  {
    \$('#price_filter').prop('disabled', false);
  } 
  else
  {
    \$('#price_filter').prop('disabled', true);
  }

  if(\$('#price_filter_form input:checked').length > 0 == false)
  {
    window.location.href = shop_page_url;
  }

  \$('input[type=\"checkbox\"]').not(this).prop('checked', false);     

});
</script>
";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/bestseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 89,  190 => 84,  182 => 81,  178 => 79,  170 => 77,  167 => 76,  159 => 74,  153 => 72,  151 => 71,  148 => 70,  146 => 69,  142 => 68,  136 => 67,  125 => 65,  122 => 64,  118 => 63,  108 => 56,  102 => 53,  97 => 50,  71 => 27,  58 => 17,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/bestseller.twig", "");
    }
}
