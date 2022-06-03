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
class __TwigTemplate_388e62152346edd2549086c18e9267d6e83e40f0227e0658db9feac566c0c9e1 extends \Twig\Template
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
\t\t\t</a>
\t\t\t";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "showtext", [], "any", false, false, false, 8) == 1)) {
                // line 9
                echo "\t\t\t\t<div class=\"banner-desc\">      \t
\t\t\t\t\t<div class=\"banner-data\">
\t\t\t\t\t\t";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "\t\t\t\t\t\t<div class=\"banner-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t\t\t\t<div class=\"banner-subtitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 15);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"banner-btn\">
\t\t\t\t\t\t";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 20);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 25
            echo "\t\t</div>
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
        return array (  115 => 28,  107 => 25,  102 => 22,  94 => 20,  92 => 19,  88 => 17,  82 => 15,  79 => 14,  73 => 12,  71 => 11,  67 => 9,  65 => 8,  58 => 6,  52 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishibannerblock.twig", "");
    }
}
