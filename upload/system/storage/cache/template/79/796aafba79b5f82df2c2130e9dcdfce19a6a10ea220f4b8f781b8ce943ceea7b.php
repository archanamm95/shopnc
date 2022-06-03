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

/* glamour/template/extension/module/latest.twig */
class __TwigTemplate_cc56844775ad2550d1d77a9a5179648ce2f10f0019dc50bc8de8510803122b87 extends \Twig\Template
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
        echo "<section class=\"";
        echo ($context["isspecials"] ?? null);
        echo "\"> 
      <h3 class=\"page-title hidden-sm hidden-xs\">
          ";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "
      </h3>
      <div class=\"block-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#latest-container\" data-toggle=\"collapse\">
        <span class=\"h3\">";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span>
        <span class=\"navbar-toggler collapse-icons\">
          <i class=\"fa fa-angle-down add\"></i>
          <i class=\"fa fa-angle-up remove\"></i>
        </span>
      </div>
      <div id=\"";
        // line 12
        echo ($context["isproduct"] ?? null);
        echo "\" class=\"collapse in data-toggler\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "        <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" class=\"img-responsive\" /></a></div>
        <div class=\"caption\">
          <h4><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
            echo "</a></h4>
          <p class=\"description\">";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 18);
            echo "</p>
          ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19)) {
                // line 20
                echo "            <p class=\"price\">
              ";
                // line 21
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22);
                    echo "
              ";
                } else {
                    // line 24
                    echo "              <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
                    echo "</span>
              ";
                }
                // line 26
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "              <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 27);
                    echo "</span>
              ";
                }
                // line 29
                echo "            </p>
          ";
            }
            // line 31
            echo "        </div>
      </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " 
      </div>
</section>";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  126 => 31,  122 => 29,  114 => 27,  111 => 26,  103 => 24,  97 => 22,  95 => 21,  92 => 20,  90 => 19,  86 => 18,  80 => 17,  69 => 15,  66 => 14,  62 => 13,  58 => 12,  49 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/latest.twig", "");
    }
}
