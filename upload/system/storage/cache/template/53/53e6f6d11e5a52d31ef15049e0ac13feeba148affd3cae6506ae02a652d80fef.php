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

/* glamour/template/extension/module/ishitestimonialsblock.twig */
class __TwigTemplate_7748ceabb271a1b4ce6ffda7d8a40ecb1d9b06e848e938dc68ff200a883f7602 extends \Twig\Template
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
        echo "<div id=\"";
        echo ($context["random_id"] ?? null);
        echo "\" class=\"ishitestimonials col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix\" style=\"background-image: url(";
        echo ($context["bgimage"] ?? null);
        echo ")\">
\t\t<div  class=\"ishitestimonials-container\" data-source-url=\"";
        // line 2
        echo ($context["bgimage"] ?? null);
        echo "\" >
\t\t\t";
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "\t\t\t\t<h2 class=\"home-title\">";
            echo ($context["title"] ?? null);
            echo "</h2>
\t\t\t";
        }
        // line 6
        echo "\t\t\t<div class=\"owl-carousel\">\t\t\t\t
\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishitestimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishitestimonial"]) {
            // line 8
            echo "\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"user-details\">
\t\t\t\t\t\t\t<div class=\"user-description\">
\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "description", [], "any", false, false, false, 11);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"user-detail\">
\t\t\t\t\t\t\t\t<span class=\"user-name\">
\t\t\t\t\t\t\t\t\t";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 15);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"user-designation\">
\t\t\t\t\t\t\t\t\t";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "designation", [], "any", false, false, false, 18);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"testimonial-img\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "image", [], "any", false, false, false, 22);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishitestimonial"], "username", [], "any", false, false, false, 22);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishitestimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t    <script type=\"text/javascript\">  
\t        \$('#";
        // line 30
        echo ($context["random_id"] ?? null);
        echo " .owl-carousel').owlCarousel({
\t            loop:true,
\t            nav: true,
\t\t\t\tautoplay:";
        // line 33
        echo ($context["autoplay"] ?? null);
        echo ",
\t            rtl: \$('html').attr('dir') == 'rtl'? true : false,
\t            navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t            items:1
\t        });
\t         \$(\"#";
        // line 38
        echo ($context["random_id"] ?? null);
        echo "\").find(\".owl-item\").each(function(i){var t=\$(this).find(\".testimonial-img\").html(),o=\".owl-dot:eq(\"+i+\")\";\$(\"#";
        echo ($context["random_id"] ?? null);
        echo "\").find(\".owl-dots\").find(o).html(t)});
\t    </script>
\t\t<style>
\t\t\t#";
        // line 41
        echo ($context["random_id"] ?? null);
        echo "{
\t\t\t\tbackground-color: ";
        // line 42
        echo ($context["bgcolor"] ?? null);
        echo "
\t\t\t}
\t\t</style>
</div>";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  129 => 41,  121 => 38,  113 => 33,  107 => 30,  101 => 26,  88 => 22,  81 => 18,  75 => 15,  68 => 11,  63 => 8,  59 => 7,  56 => 6,  50 => 4,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishitestimonialsblock.twig", "");
    }
}
