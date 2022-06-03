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

/* extension/module/ishispecialblock.twig */
class __TwigTemplate_5f17384f012cfd761b82c40d8553f6a32962d5f8bec54844207d2594cf60faa7 extends \Twig\Template
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
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title-";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 38);
        echo "\">";
        echo ($context["entry_heading"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 41);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 41);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 41);
            echo "\" /></span>
\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_heading"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "\" />
\t\t\t\t\t\t";
            // line 43
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["error_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null)) {
                // line 44
                echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t</div> 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</div>
\t\t   </div>
          <div class=\"form-group\">
\t\t  <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 52
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 54
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 55
        if (($context["error_width"] ?? null)) {
            // line 56
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo "            </div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 61
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 63
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 64
        if (($context["error_height"] ?? null)) {
            // line 65
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 67
        echo "            </div>
          </div>
          </div>
\t\t  <div class=\"form-group\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-limit\">";
        // line 72
        echo ($context["entry_limit"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t  <input type=\"text\" name=\"limit\" value=\"";
        // line 74
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"input-product-row\">";
        // line 78
        echo ($context["entry_productrow"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"product_row\" value=\"";
        // line 80
        echo ($context["product_row"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_productrow"] ?? null);
        echo "\" id=\"input-product-row\" class=\"form-control\" />
            </div>
\t\t\t</div>
          </div>
\t\t  <div class=\"form-group\">
        <div class=\"col-sm-6\">
          <label class=\"col-sm-4 control-label\" for=\"input-image-hover\">";
        // line 86
        echo ($context["entry_image_hover"] ?? null);
        echo "</label>
          <div class=\"col-sm-8\">
            <label class=\"switch\">
              ";
        // line 89
        if (($context["hover_image"] ?? null)) {
            // line 90
            echo "                <input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-image-hover\" />
              ";
        } else {
            // line 92
            echo "                <input type=\"checkbox\" name=\"hover_image\" value=\"1\" class=\"primary\" id=\"input-image-hover\" />
              ";
        }
        // line 94
        echo "              <span class=\"slider round\"></span>
            </label>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <label class=\"col-sm-4 control-label\" for=\"input-counter\">";
        // line 99
        echo ($context["entry_counter"] ?? null);
        echo "</label>
          <div class=\"col-sm-8\">
            <label class=\"switch\">
              ";
        // line 102
        if (($context["counter"] ?? null)) {
            // line 103
            echo "              <input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-counter\" />
              ";
        } else {
            // line 105
            echo "              <input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" id=\"input-counter\" />
              ";
        }
        // line 107
        echo "              <span class=\"slider round\"></span>
            </label>
          </div>
        </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
        <label class=\"col-sm-2 control-label\" for=\"input-product-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 113
        echo ($context["help_productcolumn"] ?? null);
        echo "\">";
        echo ($context["entry_product_column"] ?? null);
        echo "</span></label>
        <div class=\"col-sm-10\">
          <div class=\"col-sm-3\">
            <div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-desktop\">";
        // line 116
        echo ($context["entry_desktop"] ?? null);
        echo "</span>
              <input type=\"text\" name=\"desktop_column\" value=\"";
        // line 117
        echo ($context["desktop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_desktop"] ?? null);
        echo "\" id=\"input-desktop\" class=\"form-control col-sm-8\" />
            </div> 
          </div>
          <div class=\"col-sm-3\">
            <div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-laptop\">";
        // line 121
        echo ($context["entry_laptop"] ?? null);
        echo "</span>
              <input type=\"text\" name=\"laptop_column\" value=\"";
        // line 122
        echo ($context["laptop_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_laptop"] ?? null);
        echo "\" id=\"input-laptop\" class=\"form-control col-sm-8\" />
            </div>
          </div>
          <div class=\"col-sm-3\">
            <div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-tablet\">";
        // line 126
        echo ($context["entry_tablet"] ?? null);
        echo "</span>
              <input type=\"text\" name=\"tablet_column\" value=\"";
        // line 127
        echo ($context["tablet_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tablet"] ?? null);
        echo "\" id=\"input-tablet\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"col-sm-3\">
          <div class=\"input-group\"><span class=\"input-group-addon\" for=\"input-mobile\">";
        // line 131
        echo ($context["entry_mobile"] ?? null);
        echo "</span>
\t\t\t\t    <input type=\"text\" name=\"mobile_column\" value=\"";
        // line 132
        echo ($context["mobile_column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mobile"] ?? null);
        echo "\" id=\"input-mobile\" class=\"form-control\" />
            </div>
          </div>
        </div>
\t\t  </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 138
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 141
        if (($context["status"] ?? null)) {
            // line 142
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 143
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 145
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 146
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 148
        echo "              </select>
            </div>
          </div>
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
";
        // line 230
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ishispecialblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 230,  399 => 148,  394 => 146,  389 => 145,  384 => 143,  379 => 142,  377 => 141,  371 => 138,  360 => 132,  356 => 131,  347 => 127,  343 => 126,  334 => 122,  330 => 121,  321 => 117,  317 => 116,  309 => 113,  301 => 107,  297 => 105,  293 => 103,  291 => 102,  285 => 99,  278 => 94,  274 => 92,  270 => 90,  268 => 89,  262 => 86,  251 => 80,  246 => 78,  237 => 74,  232 => 72,  225 => 67,  219 => 65,  217 => 64,  211 => 63,  206 => 61,  201 => 58,  195 => 56,  193 => 55,  187 => 54,  182 => 52,  176 => 48,  169 => 46,  163 => 44,  161 => 43,  151 => 42,  142 => 41,  138 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishispecialblock.twig", "");
    }
}
