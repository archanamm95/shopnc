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

/* extension/module/ishitestimonialsblock.twig */
class __TwigTemplate_6e9591f4715d88f8874de7f2327d91848f54cd65e1757bf939720280b844fb7d extends \Twig\Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-testimonial\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_testinmonial"] ?? null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <input type=\"text\" name=\"name\" value=\"";
        // line 38
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t  ";
        // line 39
        if (($context["error_name"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t\t  ";
        }
        // line 42
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 45
        echo ($context["entry_image"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 47
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"";
        // line 48
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-parallax\">";
        // line 54
        echo ($context["entry_parallax"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if (($context["parallax"] ?? null)) {
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"parallax\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-parallax\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"parallax\" value=\"1\" class=\"primary\" id=\"input-parallax\" />
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-bgcolor\">";
        // line 67
        echo ($context["entry_bgcolor"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"bgcolor\" class=\"form-control color\" data-swatches=\"#fff|#000|#f00|#0f0|#00f|#ff0|rgba(0,0,255,0.5)\"  value=\"";
        // line 69
        echo ($context["bgcolor"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-autoplay\">";
        // line 74
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  \t<label class=\"switch\">
\t\t\t\t\t\t\t\t";
        // line 77
        if (($context["autoplay"] ?? null)) {
            // line 78
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autoplay\" value=\"1\" class=\"primary\" id=\"input-autoplay\" />
\t\t\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 87
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 90
        if (($context["status"] ?? null)) {
            // line 91
            echo "\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\">";
            // line 92
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 95
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t  </select>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"tab-testimonial\">
\t\t\t\t\t<div class=\"tab-pane\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t\t\t\t  ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 105
            echo "\t\t\t\t\t\t  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 105);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 105);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 105);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 105);
            echo "</a></li>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t  ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 110
            echo "\t\t\t\t\t\t  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            echo "\">\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title\">";
            // line 112
            echo ($context["entry_testimonial_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_testimonial_title"] ?? null);
            echo "\" id=\"input-title\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked countul\" id=\"testimonialtab\">
\t\t\t\t\t\t\t\t\t\t";
            // line 120
            $context["testimonial_row"] = 0;
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["ishi_testimonials"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 121)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"countli\"><a href=\"#tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "\\']').parent().remove(); \$('#tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 122);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "').remove(); \$('#testimonialtab a:first').tab('show');\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "username", [], "any", false, false, false, 122);
                echo " </a></li>
\t\t\t\t\t\t\t\t\t\t";
                // line 123
                $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-block\" onclick=\"addtestimonial(";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 125);
            echo ");\"><i class=\"fa fa-plus-circle\"></i> ";
            echo ($context["entry_addtestimonial"] ?? null);
            echo " </button></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"ishi_addtestimonial\">
\t\t\t\t\t\t\t\t";
            // line 130
            $context["testimonial_row"] = 0;
            // line 131
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["ishi_testimonials"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 131)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["ishi_testimonial"]) {
                // line 132
                echo "\t\t\t\t\t\t\t\t <div class=\"tab-pane\" id=\"tab-singletestimonial";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 132);
                echo "lan";
                echo ($context["testimonial_row"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 134);
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_image"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 136);
                echo ($context["testimonial_row"] ?? null);
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "thumb", [], "any", false, false, false, 136);
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "placeholder", [], "any", false, false, false, 136);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ishitestimonial[";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][image]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "image", [], "any", false, false, false, 137);
                echo "\" id=\"input-image-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 137);
                echo ($context["testimonial_row"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 141);
                echo "-";
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_description"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea name=\"ishitestimonial[";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][description]\" placeholder=\"";
                echo ($context["entry_description"] ?? null);
                echo "\" rows=\"4\" id=\"input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 143);
                echo "-";
                echo ($context["testimonial_row"] ?? null);
                echo "\" data-toggle=\"summernote\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "description", [], "any", false, false, false, 143);
                echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-username-";
                // line 147
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_username"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishitestimonial[";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][username]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "username", [], "any", false, false, false, 149);
                echo "\" placeholder=\"";
                echo ($context["entry_username"] ?? null);
                echo "\" class=\"form-control\" id=\"input-username-";
                echo ($context["testimonial_row"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-designation-";
                // line 153
                echo ($context["testimonial_row"] ?? null);
                echo "\">";
                echo ($context["entry_designation"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishitestimonial[";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 155);
                echo "][";
                echo ($context["testimonial_row"] ?? null);
                echo "][designation]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ishi_testimonial"], "designation", [], "any", false, false, false, 155);
                echo "\" placeholder=\"";
                echo ($context["entry_designation"] ?? null);
                echo "\" class=\"form-control\" id=\"input-designation-";
                echo ($context["testimonial_row"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t ";
                // line 159
                $context["testimonial_row"] = (($context["testimonial_row"] ?? null) + 1);
                // line 160
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </form>
      </div>
    </div>
\t  <style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: \"\";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}
input.default:checked + .slider {
  background-color: #444;
}
input.primary:checked + .slider {
  background-color: #2196F3;
}
input.success:checked + .slider {
  background-color: #8bc34a;
}
input.info:checked + .slider {
  background-color: #3de0f5;
}
input.warning:checked + .slider {
  background-color: #FFC107;
}
input.danger:checked + .slider {
  background-color: #f44336;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  </style>
<script type=\"text/javascript\">

var testimonial_row = \$(\".countli\").length;
function addtestimonial(language_id) {
\t\thtml  = '<div class=\"tab-pane\" id=\"tab-singletestimonial'+ language_id +'lan'+ testimonial_row +'\">';
\t\t\t\t\t\t\t\t
\t\thtml  += '<div class=\"form-group\"> <label class=\"col-sm-2 control-label\" for=\"thumb-image'+ language_id +'-'+ testimonial_row +'\">";
        // line 254
        echo ($context["entry_testimonial_image"] ?? null);
        echo "</label> <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image'+ language_id +'-'+ testimonial_row +'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        echo ($context["testimonial_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["testimonial_placeholder"] ?? null);
        echo "\"/></a><input type=\"hidden\" name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][image]\" value=\"";
        echo ($context["testimonial_image"] ?? null);
        echo "\" id=\"input-image'+ language_id +'-'+ testimonial_row +'\" /></div></div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
        html  += '<label class=\"col-sm-2 control-label\" for=\"input-description'+ language_id +'-'+ testimonial_row +'\">";
        // line 257
        echo ($context["entry_description"] ?? null);
        echo "</label>';
        html  += '<div class=\"col-sm-10\">';
        html  += '<textarea name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][description]\" placeholder=\"";
        // line 259
        echo ($context["entry_description"] ?? null);
        echo "\" rows=\"4\" id=\"input-description'+ language_id +'-'+ testimonial_row +'\" data-toggle=\"summernote\" class=\"form-control\"></textarea>';
        html  += '</div>';
        html  += '</div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-username'+ language_id +'-'+ testimonial_row +'\">";
        // line 264
        echo ($context["entry_username"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<input type=\"text\" name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][username]\" placeholder=\"";
        // line 266
        echo ($context["entry_username"] ?? null);
        echo "\" class=\"form-control\"/>';
\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-designation'+ language_id +'-'+ testimonial_row +'\">";
        // line 271
        echo ($context["entry_designation"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<input type=\"text\" name=\"ishitestimonial['+ language_id +']['+ testimonial_row +'][designation]\" value=\"\" placeholder=\"";
        // line 273
        echo ($context["entry_designation"] ?? null);
        echo "\" class=\"form-control\"/>';\t\t
\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\t\$('#tab-testimonial #language'+ language_id +' #ishi_addtestimonial').append(html);

\t\t\$('#language'+ language_id +' #testimonialtab > li:last-child').before('<li><a href=\"#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#testimonialtab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\\').remove();\"></i> ";
        // line 279
        echo ($context["entry_testinmonial"] ?? null);
        echo " </li>');
\t\t 
\t\t\$('#language'+ language_id +' #testimonialtab a[href=\\'#tab-singletestimonial'+ language_id +'lan' + testimonial_row + '\\']').tab('show');

\t\ttestimonial_row++;
\t}
";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 286
            echo "\tvar ln = '";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 286);
            echo "' + ' a:first';
\t
\t\$('#language' + ln).tab('show');
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "</script>
<script src=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.js\" type=\"text/javascript\"></script>
\t<link href=\"view/javascript/bootstrap/colorpicker/jquery.minicolors.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\">
\$(document).ready( function() {
      \$('.color').each( function() {
        \$(this).minicolors({
          control: \$(this).attr('data-control') || 'hue',
          defaultValue: \$(this).attr('data-defaultValue') || '',
          format: \$(this).attr('data-format') || 'hex',
          keywords: \$(this).attr('data-keywords') || '',
          inline: \$(this).attr('data-inline') === 'true',
          letterCase: \$(this).attr('data-letterCase') || 'lowercase',
          opacity: \$(this).attr('data-opacity'),
          position: \$(this).attr('data-position') || 'bottom',
          swatches: \$(this).attr('data-swatches') ? \$(this).attr('data-swatches').split('|') : [],
          change: function(value, opacity) {
            if( !value ) return;
            if( opacity ) value += ', ' + opacity;
            if( typeof console === 'object' ) {
              console.log(value);
            }
          },
          theme: 'bootstrap',
        });
      });
    });
</script>
</div>
";
        // line 326
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishitestimonialsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  694 => 326,  656 => 290,  645 => 286,  641 => 285,  632 => 279,  623 => 273,  618 => 271,  610 => 266,  605 => 264,  597 => 259,  592 => 257,  580 => 254,  490 => 166,  480 => 161,  474 => 160,  472 => 159,  457 => 155,  450 => 153,  435 => 149,  428 => 147,  411 => 143,  402 => 141,  388 => 137,  379 => 136,  371 => 134,  363 => 132,  358 => 131,  356 => 130,  345 => 125,  339 => 124,  337 => 123,  320 => 122,  315 => 121,  313 => 120,  300 => 114,  295 => 112,  289 => 110,  285 => 109,  281 => 107,  264 => 105,  260 => 104,  251 => 97,  246 => 95,  241 => 94,  236 => 92,  231 => 91,  229 => 90,  223 => 87,  216 => 82,  212 => 80,  208 => 78,  206 => 77,  200 => 74,  192 => 69,  187 => 67,  180 => 62,  176 => 60,  172 => 58,  170 => 57,  164 => 54,  155 => 48,  149 => 47,  144 => 45,  139 => 42,  133 => 40,  131 => 39,  125 => 38,  120 => 36,  112 => 31,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishitestimonialsblock.twig", "");
    }
}
