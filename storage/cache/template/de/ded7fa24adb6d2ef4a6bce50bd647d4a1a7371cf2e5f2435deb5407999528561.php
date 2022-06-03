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

/* glamour/template/extension/module/ishibannerblock.twig */
class __TwigTemplate_d0bf73db1f094a3ffaa7ca4c03d42be33b876e3759c8ec87b3e58a96fa8bab80 extends \Twig\Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishibannerblock clearfix\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t<div class=\"bannerblock ";
            echo ($context["column_class"] ?? null);
            echo "\">
\t\t<div class=\"image-container\">
\t\t\t<a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
            echo "\" class=\"";
            echo ($context["scale"] ?? null);
            echo "\">
\t\t\t\t<img src=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\"> 
\t\t\t\t";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "showtext", [], "any", false, false, false, 7) == 1)) {
                // line 8
                echo "\t\t\t\t\t<div class=\"banner-desc\">      \t
\t\t\t\t\t\t<div class=\"banner-data\">
\t\t\t\t\t\t\t";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "\t\t\t\t\t\t\t<div class=\"banner-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 13
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "\t\t\t\t\t\t\t<div class=\"banner-subtitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 14);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"banner-btn\">
\t\t\t\t\t\t\t";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t<div href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 19);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 19);
                    echo "</div>
\t\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 23
            echo " 
\t\t\t</a>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/ishibannerblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  106 => 23,  101 => 21,  93 => 19,  91 => 18,  87 => 16,  81 => 14,  78 => 13,  72 => 11,  70 => 10,  66 => 8,  64 => 7,  58 => 6,  52 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishibannerblock.twig", "");
    }
}
