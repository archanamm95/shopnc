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
class __TwigTemplate_50146eb114a275d4408c5e3332fa5391335d22c80f96bea6899b8d919010eefc extends \Twig\Template
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
\t\t</div>
\t\t";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "showtext", [], "any", false, false, false, 9) == 1)) {
                // line 10
                echo "\t\t<div class=\"banner-desc\">      \t
\t\t\t<div class=\"banner-data\">
\t\t\t\t";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "\t\t\t\t<div class=\"banner-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 13);
                    echo "</div>
\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "\t\t\t\t<div class=\"banner-subtitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "subtitle", [], "any", false, false, false, 16);
                    echo "</div>
\t\t\t\t";
                }
                // line 18
                echo "\t\t\t</div>
\t\t\t<div class=\"banner-btn\">
\t\t\t\t";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 21);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "button_name", [], "any", false, false, false, 21);
                    echo "</a>
\t\t\t\t";
                }
                // line 23
                echo "\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 26
            echo "\t</div>
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
        return array (  115 => 28,  108 => 26,  103 => 23,  95 => 21,  93 => 20,  89 => 18,  83 => 16,  80 => 15,  74 => 13,  72 => 12,  68 => 10,  66 => 9,  58 => 6,  52 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishibannerblock.twig", "");
    }
}
