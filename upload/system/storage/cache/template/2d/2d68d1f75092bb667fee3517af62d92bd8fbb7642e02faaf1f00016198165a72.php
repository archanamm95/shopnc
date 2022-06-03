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

/* glamour/template/extension/module/ishigalleryblock.twig */
class __TwigTemplate_018174d85e37994a04a148ae4f62a0af6c3d870f070535b34c6d63c108fcbb8f extends \Twig\Template
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
        echo "\" class=\"ishigalleryblock clearfix\">
\t<div class=\"bannerblock container\">
  \t\t<h2 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h2>
\t\t<div class=\"galleryfilter\">   
\t\t\t";
        // line 5
        $context["tags"] = "";
        // line 6
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7) != ($context["blank"] ?? null))) {
                // line 8
                echo "\t\t\t\t";
                $context["checkarray"] = twig_split_filter($this->env, ($context["tags"] ?? null), ",");
                // line 9
                echo "\t\t\t\t";
                if (!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9), ($context["tags"] ?? null))) {
                    // line 10
                    echo "\t\t\t\t\t";
                    $context["tags"] = ((($context["tags"] ?? null) . twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10)) . ",");
                    // line 11
                    echo "\t\t\t\t\t<button class=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 11)) {
                        echo "is-active";
                    }
                    echo "\" data-rel=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "reltitle", [], "any", false, false, false, 11);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
                    echo "</button>
\t\t\t\t";
                }
                // line 13
                echo "\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</div>
\t\t<div id=\"portfolio\" class=\"grid\">      
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 18
            echo "\t\t\t\t<div class=\"gallery-container thumbnails col-md-4 col-sm-4 col-xs-6 ";
            echo ($context["scale"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "reltitle", [], "any", false, false, false, 18);
            echo "\" data-category=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "reltitle", [], "any", false, false, false, 18);
            echo "\">
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 19);
            echo "\" class=\"";
            echo ($context["style"] ?? null);
            echo " ";
            echo ($context["scale"] ?? null);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 20);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 20);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t<div class=\"imageoverlay\"></div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t</div>
\t<script type=\"text/javascript\">
\t\t\$(function() {
\t\t\tvar selectedClass = '';
\t\t\t\t\$(\"button\").click(function(){ 
\t\t\t\tselectedClass = \$(this).attr(\"data-rel\"); 
\t\t\t\t\$(\"#portfolio\").fadeTo(100, 0.1);
\t\t\t\t\$(\"#portfolio .gallery-container\").not(\".\"+selectedClass).fadeOut().removeClass('scale-anm');
\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\$(\".\"+selectedClass).fadeIn().addClass('scale-anm');
\t\t\t\t\t\$(\"#portfolio\").fadeTo(300, 1);
\t\t\t\t}, 300); 
\t\t\t\t\$( '.galleryfilter button' ).removeClass('is-active');
\t\t\t\t\$( this ).addClass('is-active');
\t\t\t\t});
\t\t\t});
\t\t\tvar defaultClass = \$('button.is-active').attr(\"data-rel\");
\t\t\t\$(\"#portfolio .gallery-container\").not(\".\"+defaultClass).fadeOut().removeClass('scale-anm');
\t\t\t\$(\".\"+defaultClass).fadeIn().addClass('scale-anm');   

\t\t\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype:'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\tenabled: true,
\t\t\tnavigateByImgClick: true
\t\t\t}
\t\t});
\t</script>
</section>";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/ishigalleryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 25,  134 => 20,  126 => 19,  117 => 18,  113 => 17,  109 => 15,  95 => 14,  92 => 13,  80 => 11,  77 => 10,  74 => 9,  71 => 8,  68 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishigalleryblock.twig", "");
    }
}
