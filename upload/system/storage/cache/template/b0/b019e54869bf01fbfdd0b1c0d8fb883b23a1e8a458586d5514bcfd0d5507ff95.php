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

/* glamour/template/extension/module/blogger.twig */
class __TwigTemplate_6689d18050172b0e1cf1ac14ba389c7150f615d80dc6e8a0cb74b306b24a2253 extends \Twig\Template
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
        echo "<div class=\"smartblog_block clearfix\" style=\"background: ";
        echo ($context["bg_color"] ?? null);
        echo ";\">
<div class=\"container\">
\t\t<h3 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h3>
\t\t\t<div id=\"smartblog-carousel\" class=\"owl-carousel\">
\t\t\t\t";
        // line 5
        $context["counter"] = 1;
        // line 6
        echo "\t\t\t\t";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
        // line 7
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo "\t\t\t
\t\t\t\t\t<div class=\"blog_post item\">
\t\t\t\t\t\t<div class=\"news_module_image_holder\">
\t\t\t\t\t\t\t";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 10)) {
                echo " 
\t\t\t\t\t\t\t<a href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 11);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t<div class=\"blog-hover\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a class=\"blogicons icon readmore_link\" title=\"Click to view Read More \" href=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 15);
                echo "\"><i class=\"fa fa-link\"></i></a>
\t\t\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t\t\t<div class=\"smartbloginfo\">
\t\t\t\t\t\t\t\t<div class=\"date-time\">
\t\t\t\t\t\t\t\t\t<span class=\"date_month\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 19);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"write-comment\"> <i class=\"fa fa-comments\"></i> <a href=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 21);
            echo "\"> ";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 21);
            echo " ";
            echo ($context["entry_comment"] ?? null);
            echo "</a> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"blog_content\">\t 
\t\t\t\t\t\t\t<h4 class=\"blog_title\"><a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 26);
            echo "</a> </h4>
\t\t\t\t\t\t\t<div class=\"blog-desc\"> ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 27);
            echo " </div>
\t\t\t\t\t\t\t<div class=\"view-blog\">
\t\t\t\t\t\t\t\t<div class=\"read-more\"><a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a></div> <i class=\"fa fa-long-arrow-right\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t";
            // line 33
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 34
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</div>
</div>\t
\t<script type=\"text/javascript\">
\t\t\$('.smartblog_block .owl-carousel').owlCarousel({
\t\t\tloop:false,
\t\t\tnav:";
        // line 40
        echo ($context["navigation"] ?? null);
        echo ",
\t\t\tdots:false,
\t\t\trewind:true,
\t\t\tmargin:30,
\t\t\trtl: \$('html').attr('dir') == 'rtl'? true : false,
\t\t\tnavText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
\t\t\tautoplay:false, 
\t\t\tresponsive:{
\t\t\t\t0:{
                \titems:1
\t\t\t\t},
\t\t\t\t544:{
\t\t\t\t\titems:1
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems:2
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems:3
\t\t\t\t}
\t\t\t}
\t\t});
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  134 => 35,  128 => 34,  126 => 33,  117 => 29,  112 => 27,  106 => 26,  94 => 21,  89 => 19,  85 => 17,  80 => 15,  70 => 12,  66 => 11,  62 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/blogger.twig", "");
    }
}
