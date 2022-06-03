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

/* glamour/template/common/home.twig */
class __TwigTemplate_ecbedddc5791e83fa3d2476228507aba96aee83ffd30703ff75096de9a07a051 extends \Twig\Template
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
        echo "
\t";
        // line 2
        echo ($context["header"] ?? null);
        echo "

\t<style>

\t\t.yottie-widget-inner {
    border-radius: 10px;
    overflow: hidden;
    width: 125% !important;
}
\t</style>
\t<div id=\"common-home\">    
\t    ";
        // line 13
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 14
            echo "\t    ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 16
            echo "\t    ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "\t    ";
        } else {
            // line 18
            echo "\t    ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "\t    ";
        }
        echo "    
\t    ";
        // line 20
        echo ($context["content_top"] ?? null);
        echo "
\t    <div class=\"top_home\">
    \t\t";
        // line 22
        echo ($context["content_middle"] ?? null);
        echo "
\t    </div>
\t\t";
        // line 24
        echo ($context["content_bottom"] ?? null);
        echo "
\t    ";
        // line 25
        echo ($context["column_left"] ?? null);
        echo " 
\t    ";
        // line 26
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
\t";
        // line 28
        echo ($context["footer"] ?? null);
        echo " 

\t<script>

\t\t\$( document ).ready(function() {

    \t\$('.yottie-widget-inner').width(300);

    \t// \$('.yottie-widget-inner a').addClass('myclass');

    \t// console.log(\$('.yottie-widget-inner').find('a'));

    \t// \$('.yottie-widget-inner').find('a').addClass('myclass');

    \t // \$('.yottie-widget-inner a').addClass('myclass');

    \t \$('.yottie-widget-inner').find('a').each(function() {


    \t\tconsole.log(\$(this).attr('href'));
\t\t});

\t\t});

\t</script>


";
    }

    public function getTemplateName()
    {
        return "glamour/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  94 => 26,  90 => 25,  86 => 24,  81 => 22,  76 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  54 => 13,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/home.twig", "");
    }
}
