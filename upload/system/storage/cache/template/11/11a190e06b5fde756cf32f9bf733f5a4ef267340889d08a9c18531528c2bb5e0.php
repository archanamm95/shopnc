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

/* extension/module/ishiproductsblock.twig */
class __TwigTemplate_7484da86c569633c175e2c497a744cb64395f330677389ba25874fc6d44d3a6b extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid\">
\t\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t";
        }
        // line 22
        echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title-";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 38);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 41);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 41);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 41);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
            // line 43
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["error_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-showcategory\">";
        // line 52
        echo ($context["entry_categoty_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 55
        if (($context["showcategory"] ?? null)) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showcategory\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-category-status\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showcategory\" value=\"1\" class=\"primary\" id=\"input-showcategory\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-category\">";
        // line 65
        echo ($context["entry_categoty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 67
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 70);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 70);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 71);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-showfeatured\">";
        // line 79
        echo ($context["entry_showfeatured"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 82
        if (($context["showfeatured"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showfeatured\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showfeatured\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showfeatured\" value=\"1\" class=\"primary\" id=\"input-showfeatured\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
        // line 94
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<div id=\"featured-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"featured-product";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 97);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 97);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[]\" value=\"";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 98);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\" for=\"input-showbestseller\">";
        // line 107
        echo ($context["entry_showbestseller"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 110
        if (($context["showbestseller"] ?? null)) {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showbestseller\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showbestseller\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showbestseller\" value=\"1\" class=\"primary\" id=\"input-showbestseller\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\" for=\"input-shownew\">";
        // line 120
        echo ($context["entry_shownew"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 123
        if (($context["shownew"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shownew\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-shownew\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"shownew\" value=\"1\" class=\"primary\" id=\"input-shownew\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-6 control-label\" for=\"input-showspecial\">";
        // line 133
        echo ($context["entry_showspecial"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 136
        if (($context["showspecial"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showspecial\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-showspecial\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"showspecial\" value=\"1\" class=\"primary\" id=\"input-showspecial\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 141
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-limit\">";
        // line 148
        echo ($context["entry_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"limit\" value=\"";
        // line 150
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product-row\"><span data-toggle=\"tooltip\" title=\"";
        // line 154
        echo ($context["help_productrow"] ?? null);
        echo "\">";
        echo ($context["entry_productrow"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_row\" value=\"";
        // line 156
        echo ($context["product_row"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_productrow"] ?? null);
        echo "\" id=\"input-product-row\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-image-hover\">";
        // line 162
        echo ($context["entry_image_hover"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 165
        if (($context["hover_image"] ?? null)) {
            // line 166
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-image-hover\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" id=\"input-image-hover\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 170
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-counter\">";
        // line 175
        echo ($context["entry_counter"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 178
        if (($context["counter"] ?? null)) {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-counter\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" id=\"input-counter\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 189
        echo ($context["help_productcolumn"] ?? null);
        echo "\">";
        echo ($context["entry_product_column"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-desktop\">";
        // line 192
        echo ($context["entry_desktop"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"desktop_column\" value=\"";
        // line 193
        echo ($context["desktop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_desktop"] ?? null);
        echo "\" id=\"input-desktop\" class=\"form-control col-sm-8\" />
\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-laptop\">";
        // line 197
        echo ($context["entry_laptop"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"laptop_column\" value=\"";
        // line 198
        echo ($context["laptop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_laptop"] ?? null);
        echo "\" id=\"input-laptop\" class=\"form-control col-sm-8\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-tablet\">";
        // line 202
        echo ($context["entry_tablet"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"tablet_column\" value=\"";
        // line 203
        echo ($context["tablet_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tablet"] ?? null);
        echo "\" id=\"input-tablet\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-mobile\">";
        // line 207
        echo ($context["entry_mobile"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"mobile_column\" value=\"";
        // line 208
        echo ($context["mobile_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mobile"] ?? null);
        echo "\" id=\"input-mobile\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 215
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
        // line 217
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 218
        if (($context["error_width"] ?? null)) {
            // line 219
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 224
        echo ($context["entry_height"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
        // line 226
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 227
        if (($context["error_height"] ?? null)) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 234
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 237
        if (($context["status"] ?? null)) {
            // line 238
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 239
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 241
            echo "\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 242
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<style>
\t\t\t/* The switch - the box around the slider */
\t\t\t.switch {
\t\t\t\tposition: relative;
\t\t\t\tdisplay: inline-block;
\t\t\t\twidth: 60px;
\t\t\t\theight: 34px;
\t\t\t}

\t\t\t/* Hide default HTML checkbox */
\t\t\t.switch input {display:none;}

\t\t\t/* The slider */
\t\t\t.slider {
\t\t\t\tposition: absolute;
\t\t\t\tcursor: pointer;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t\tbottom: 0;
\t\t\t\tbackground-color: #ccc;
\t\t\t\t-webkit-transition: .4s;
\t\t\t\ttransition: .4s;
\t\t\t}

\t\t\t.slider:before {
\t\t\t\tposition: absolute;
\t\t\t\tcontent: \"\";
\t\t\t\theight: 26px;
\t\t\t\twidth: 26px;
\t\t\t\tleft: 4px;
\t\t\t\tbottom: 4px;
\t\t\t\tbackground-color: white;
\t\t\t\t-webkit-transition: .4s;
\t\t\t\ttransition: .4s;
\t\t\t}
\t\t\tinput.default:checked + .slider {
\t\t\t\tbackground-color: #444;
\t\t\t}
\t\t\tinput.primary:checked + .slider {
\t\t\t\tbackground-color: #2196F3;
\t\t\t}
\t\t\tinput.success:checked + .slider {
\t\t\t\tbackground-color: #8bc34a;
\t\t\t}
\t\t\tinput.info:checked + .slider {
\t\t\t\tbackground-color: #3de0f5;
\t\t\t}
\t\t\tinput.warning:checked + .slider {
\t\t\t\tbackground-color: #FFC107;
\t\t\t}
\t\t\tinput.danger:checked + .slider {
\t\t\t\tbackground-color: #f44336;
\t\t\t}

\t\t\tinput:focus + .slider {
\t\t\t\tbox-shadow: 0 0 1px #2196F3;
\t\t\t}

\t\t\tinput:checked + .slider:before {
\t\t\t\t-webkit-transform: translateX(26px);
\t\t\t\t-ms-transform: translateX(26px);
\t\t\t\ttransform: translateX(26px);
\t\t\t}

\t\t\t/* Rounded sliders */
\t\t\t.slider.round {
\t\t\t\tborder-radius: 34px;
\t\t\t}

\t\t\t.slider.round:before {
\t\t\t\tborder-radius: 50%;
\t\t\t}
\t\t</style>
\t\t<script type=\"text/javascript\"><!--
\t\t\t\$('input[name=\\'product_name\\']').autocomplete({
\t\t\t\tsource: function(request, response) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 329
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\t\treturn {
\t\t\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}));
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t},
\t\t\t\tselect: function(item) {
\t\t\t\t\t\$('input[name=\\'product_name\\']').val('');

\t\t\t\t\t\$('#featured-product' + item['value']).remove();

\t\t\t\t\t\$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t\t\t}
\t\t\t});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 354
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});


\$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
\t\$('#language a:first').tab('show');
//--></script>
</div>
";
        // line 388
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ishiproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 388,  711 => 354,  683 => 329,  596 => 244,  591 => 242,  586 => 241,  581 => 239,  576 => 238,  574 => 237,  568 => 234,  562 => 230,  556 => 228,  554 => 227,  548 => 226,  543 => 224,  538 => 221,  532 => 219,  530 => 218,  524 => 217,  519 => 215,  507 => 208,  503 => 207,  494 => 203,  490 => 202,  481 => 198,  477 => 197,  468 => 193,  464 => 192,  456 => 189,  448 => 183,  444 => 181,  440 => 179,  438 => 178,  432 => 175,  425 => 170,  421 => 168,  417 => 166,  415 => 165,  409 => 162,  398 => 156,  391 => 154,  382 => 150,  377 => 148,  368 => 141,  364 => 139,  360 => 137,  358 => 136,  352 => 133,  345 => 128,  341 => 126,  337 => 124,  335 => 123,  329 => 120,  322 => 115,  318 => 113,  314 => 111,  312 => 110,  306 => 107,  298 => 101,  289 => 98,  282 => 97,  278 => 96,  273 => 94,  266 => 92,  259 => 87,  255 => 85,  251 => 83,  249 => 82,  243 => 79,  235 => 73,  226 => 71,  219 => 70,  215 => 69,  210 => 67,  205 => 65,  198 => 60,  194 => 58,  190 => 56,  188 => 55,  182 => 52,  176 => 48,  169 => 46,  163 => 44,  161 => 43,  151 => 42,  142 => 41,  138 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishiproductsblock.twig", "");
    }
}
