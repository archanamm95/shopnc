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

/* extension/module/ishigalleryblock.twig */
class __TwigTemplate_95f2c85464317b16882863fdbd80afc06e9c0ad260d2b38fef7727060b17c119 extends \Twig\Template
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
\t\t\t\t\t<li><a href=\"#tab-banner\" data-toggle=\"tab\">";
        // line 31
        echo ($context["entry_banner"] ?? null);
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
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title-";
        // line 45
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 45);
        echo "\">";
        echo ($context["entry_heading"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            echo "\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 48);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 48);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 48);
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_heading"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\" />
\t\t\t\t\t\t\t\t\t";
            // line 50
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["error_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null)) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t   </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t  \t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 59
        echo ($context["entry_width"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"width\" value=\"";
        // line 61
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 62
        if (($context["error_width"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 68
        echo ($context["entry_height"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"height\" value=\"";
        // line 70
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 71
        if (($context["error_height"] ?? null)) {
            // line 72
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t  \t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-style\">";
        // line 79
        echo ($context["entry_hoverstyle"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<select name=\"style\" id=\"input-style\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinnormal\" ";
        // line 82
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinnormal")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinnormal"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinflip\" ";
        // line 83
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinflip")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinflip"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinrotate\" ";
        // line 84
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinrotate3D\" ";
        // line 85
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinrotate3D")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinrotate3d"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeintop\" ";
        // line 86
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintop")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintop"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinbottom\" ";
        // line 87
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinbottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeintopbottom\" ";
        // line 88
        if ((($context["style"] ?? null) == "ishi-customhover-fadeintopbottom")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeintopbottom"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-doublefadeincenter\" ";
        // line 89
        if ((($context["style"] ?? null) == "ishi-customhover-doublefadeincenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_doublefadeincenter"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeoutcenter\" ";
        // line 90
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcenter")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcenter"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeoutcorner\" ";
        // line 91
        if ((($context["style"] ?? null) == "ishi-customhover-fadeoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeoutcorner"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinoutcorner\" ";
        // line 92
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinoutcorner")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinoutcorner"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ishi-customhover-fadeinsquare\" ";
        // line 93
        if ((($context["style"] ?? null) == "ishi-customhover-fadeinsquare")) {
            echo " selected=selected ";
        }
        echo ">";
        echo ($context["entry_fadeinsquare"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-scale\">";
        // line 98
        echo ($context["entry_scale"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t<label class=\"switch\">
\t\t\t\t\t\t\t\t";
        // line 101
        if (($context["scale"] ?? null)) {
            // line 102
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-scale\" />
\t\t\t\t\t\t\t\t";
        } else {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"scale\" value=\"1\" class=\"primary\" id=\"input-scale\" />
\t\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t\t\t\t<span class=\"slider round\"></span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 112
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 115
        if (($context["status"] ?? null)) {
            // line 116
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 120
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t  </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-banner\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" id=\"bannerstab\">
\t\t\t\t\t\t\t\t\t";
        // line 130
        $context["banner_row"] = 0;
        // line 131
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_banner"]) {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "').remove(); \$('#bannerstab a:first').tab('show');\"></i>";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "default_name", [], "any", false, false, false, 132);
            echo " </a></li>
\t\t\t\t\t\t\t\t\t";
            // line 133
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 134
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-block\" onclick=\"addbannertab();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["entry_addbanner"] ?? null);
        echo " </button></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t \t<div class=\"tab-content\" id=\"ishi_bannertabs\">";
        // line 139
        $context["banner_row"] = 0;
        // line 140
        echo "\t\t\t\t\t\t\t\t \t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ishi_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ishi_banner"]) {
            // line 141
            echo "\t\t\t\t\t\t\t\t \t<div class=\"tab-pane\" id=\"tab-singlebanner";
            echo ($context["banner_row"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image-";
            // line 143
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_image"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
            // line 145
            echo ($context["banner_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "thumb", [], "any", false, false, false, 145);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "placeholder", [], "any", false, false, false, 145);
            echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ishibanner[";
            // line 146
            echo ($context["banner_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "image", [], "any", false, false, false, 146);
            echo "\" id=\"input-image-";
            echo ($context["banner_row"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title-";
            // line 150
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 153);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 153);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 153);
                echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishibanner[";
                // line 154
                echo ($context["banner_row"] ?? null);
                echo "][title][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154);
                echo "]\" value=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "title", [], "any", false, false, false, 154)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 154)] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["entry_title"] ?? null);
                echo "\" class=\"form-control\" id=\"input-title-";
                echo ($context["banner_row"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order-";
            // line 160
            echo ($context["banner_row"] ?? null);
            echo "\">";
            echo ($context["entry_sortorder"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ishibanner[";
            // line 162
            echo ($context["banner_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "sort_order", [], "any", false, false, false, 162)) ? (twig_get_attribute($this->env, $this->source, $context["ishi_banner"], "sort_order", [], "any", false, false, false, 162)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_sortorder"] ?? null);
            echo "\" class=\"form-control\" id=\"input-sort-order-";
            echo ($context["banner_row"] ?? null);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t\t \t";
            // line 166
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 167
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ishi_banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </form>
      </div>
    </div>
  </div>
</div>
<style>
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
function boxDisable(e, t) {
var id = e + 'show';

    if (t.is(':checked')) {
\t\t\$('.'+id).attr(\"style\", \"display: block !important\");
    } else {
      \$('.'+id).attr(\"style\", \"display: none !important\");
    }
}
var banner_row = ";
        // line 265
        echo ($context["banner_row"] ?? null);
        echo ";
function addbannertab() {
\t\tvar newtab = 'tab-singlebanner'+ banner_row;

\t\thtml  = '<div class=\"tab-pane\" id=\"tab-singlebanner'+ banner_row +'\">';
\t\t\t\t\t\t\t\t
\t\thtml  += '<div class=\"form-group\"> <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 271
        echo ($context["entry_image"] ?? null);
        echo "</label> <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image-'+ banner_row +'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a><input type=\"hidden\" name=\"ishibanner['+ banner_row +'][image]\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image-'+ banner_row +'\" /></div></div>';
\t\t
\t\thtml  += '<div class=\"form-group showtext tab-singlebanner'+ banner_row +'show\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 274
        echo ($context["entry_title"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';\t\t\t\t\t\t\t\t\t  
\t\t";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 277
            echo "\t\thtml  += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 277);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 277);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 277);
            echo "\" /></span>';
\t\thtml  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][title][";
            // line 278
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 278);
            echo "]\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\"/>';
\t\thtml  += '</div>'; 
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\thtml  += '<div class=\"form-group\">';
\t\thtml  += '<label class=\"col-sm-2 control-label\" for=\"input-sort-order-'+ banner_row +'\">";
        // line 285
        echo ($context["entry_sortorder"] ?? null);
        echo "</label>';
\t\thtml  += '<div class=\"col-sm-10\">';
\t\thtml  += '<input type=\"text\" name=\"ishibanner['+ banner_row +'][sort_order]\" value=\"1\" placeholder=\"";
        // line 287
        echo ($context["entry_sortorder"] ?? null);
        echo "\" class=\"form-control\" id=\"input-sort-order-'+ banner_row +'\" />';
\t\thtml  += '</div>';
\t\thtml  += '</div>';
\t\t
\t\t\$('#tab-banner #ishi_bannertabs').append(html);
\t\t
\t\t\$('#bannerstab > li:last-child').before('<li><a href=\"#tab-singlebanner' + banner_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#bannerstab a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-singlebanner' + banner_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-singlebanner' + banner_row + '\\').remove();\"></i> ";
        // line 293
        echo ($context["entry_banner"] ?? null);
        echo " </li>');
\t\t 
\t\t\$('#bannerstab a[href=\\'#tab-singlebanner' + banner_row + '\\']').tab('show');

\t\tbanner_row++;
\t}
\t\$('#bannerstab a:first').tab('show');
</script>
";
        // line 301
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ishigalleryblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  736 => 301,  725 => 293,  716 => 287,  711 => 285,  705 => 281,  694 => 278,  685 => 277,  681 => 276,  676 => 274,  664 => 271,  655 => 265,  556 => 168,  550 => 167,  548 => 166,  535 => 162,  528 => 160,  523 => 157,  506 => 154,  497 => 153,  493 => 152,  486 => 150,  475 => 146,  467 => 145,  460 => 143,  454 => 141,  449 => 140,  447 => 139,  439 => 135,  433 => 134,  431 => 133,  420 => 132,  415 => 131,  413 => 130,  403 => 122,  398 => 120,  393 => 119,  388 => 117,  383 => 116,  381 => 115,  375 => 112,  367 => 106,  363 => 104,  359 => 102,  357 => 101,  351 => 98,  339 => 93,  331 => 92,  323 => 91,  315 => 90,  307 => 89,  299 => 88,  291 => 87,  283 => 86,  275 => 85,  267 => 84,  259 => 83,  251 => 82,  245 => 79,  238 => 74,  232 => 72,  230 => 71,  224 => 70,  219 => 68,  214 => 65,  208 => 63,  206 => 62,  200 => 61,  195 => 59,  189 => 55,  182 => 53,  176 => 51,  174 => 50,  164 => 49,  155 => 48,  151 => 47,  144 => 45,  139 => 42,  133 => 40,  131 => 39,  125 => 38,  120 => 36,  112 => 31,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishigalleryblock.twig", "");
    }
}
