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

/* extension/module/ishispecialdeals.twig */
class __TwigTemplate_3e5ee34ee051c9080c01d3ac56170b00f1ad0bc82c241ddb47fc6cf369830ef9 extends \Twig\Template
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
            echo "          <li><a href=\"";
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
        echo "        </ul>
      </div>
    </div>
    <div class=\"container-fluid\">
      ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 22
        echo "      <div class=\"panel panel-default\">
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
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 35
        echo "              </div>
            </div>
            <div class=\"form-group\">
             <div class=\"col-sm-12\">
              <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 39
        echo ($context["entry_title"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
               ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "               <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 42);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            echo "\" /></span>
                 <input type=\"text\" name=\"title[";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" class=\"form-control\" required id=\"input-title-";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\" />
               </div> 
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "             </div>
           </div>
         </div>
         <div class=\"form-group\">
          <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-product-row\"><span data-toggle=\"tooltip\" title=\"";
        // line 51
        echo ($context["help_productrow"] ?? null);
        echo "\">";
        echo ($context["entry_productrow"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"product_row\" value=\"";
        // line 53
        echo ($context["product_row"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_productrow"] ?? null);
        echo "\" id=\"input-product-row\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-limit\">";
        // line 57
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 59
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-width\">";
        // line 65
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 67
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 68
        if (($context["error_width"] ?? null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 71
        echo "            </div>
          </div>
          <div class=\"col-sm-6\">
            <label class=\"col-sm-4 control-label\" for=\"input-height\">";
        // line 74
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-8\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 76
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 77
        if (($context["error_height"] ?? null)) {
            // line 78
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 80
        echo "            </div>
          </div>
        </div>
        <div class=\"form-group\">
         <div class=\"col-sm-6\">
           <label class=\"col-sm-4 control-label\" for=\"input-review\">";
        // line 85
        echo ($context["entry_review"] ?? null);
        echo "</label>
           <div class=\"col-sm-8\">
            <label class=\"switch\">
              ";
        // line 88
        if (($context["review"] ?? null)) {
            // line 89
            echo "              <input type=\"checkbox\" name=\"review\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-review\" />
              ";
        } else {
            // line 91
            echo "              <input type=\"checkbox\" name=\"review\" value=\"1\" class=\"primary\" id=\"input-review\" />
              ";
        }
        // line 93
        echo "              <span class=\"slider round\"></span>
            </label>
          </div>
        </div>
        <div class=\"col-sm-6\">
         <label class=\"col-sm-4 control-label\" for=\"input-description\">";
        // line 98
        echo ($context["entry_description"] ?? null);
        echo "</label>
         <div class=\"col-sm-8\">
          <label class=\"switch\">
            ";
        // line 101
        if (($context["description"] ?? null)) {
            // line 102
            echo "            <input type=\"checkbox\" name=\"description\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-description\" />
            ";
        } else {
            // line 104
            echo "            <input type=\"checkbox\" name=\"description\" value=\"1\" class=\"primary\" id=\"input-description\" />
            ";
        }
        // line 106
        echo "            <span class=\"slider round\"></span>
          </label>
        </div>
      </div>
    </div>
    <div class=\"form-group\">
     <div class=\"col-sm-6\">
       <label class=\"col-sm-4 control-label\" for=\"input-description\">";
        // line 113
        echo ($context["entry_counter"] ?? null);
        echo "</label>
       <div class=\"col-sm-8\">
        <label class=\"switch\">
          ";
        // line 116
        if (($context["counter"] ?? null)) {
            // line 117
            echo "          <input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-counter\" />
          ";
        } else {
            // line 119
            echo "          <input type=\"checkbox\" name=\"counter\" value=\"1\" class=\"primary\" id=\"input-counter\" />
          ";
        }
        // line 121
        echo "          <span class=\"slider round\"></span>
        </label>
      </div>
    </div>
    <div class=\"col-sm-6\">
     <label class=\"col-sm-4 control-label\" for=\"input-left-product\">";
        // line 126
        echo ($context["entry_left_product"] ?? null);
        echo "</label>
     <div class=\"col-sm-8\">
      <label class=\"switch\">
        ";
        // line 129
        if (($context["left_product"] ?? null)) {
            // line 130
            echo "        <input type=\"checkbox\" name=\"left_product\" value=\"1\" class=\"primary\" checked=\"checked\" id=\"input-left-product\" />
        ";
        } else {
            // line 132
            echo "        <input type=\"checkbox\" name=\"left_product\" value=\"1\" class=\"primary\" id=\"input-left-product\" />
        ";
        }
        // line 134
        echo "        <span class=\"slider round\"></span>
      </label>
    </div>
  </div>
</div>
<div class=\"form-group\">
  <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 140
        echo ($context["entry_status"] ?? null);
        echo "</label>
  <div class=\"col-sm-10\">
    <select name=\"status\" id=\"input-status\" class=\"form-control\">
      ";
        // line 143
        if (($context["status"] ?? null)) {
            // line 144
            echo "      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
      <option value=\"0\">";
            // line 145
            echo ($context["text_disabled"] ?? null);
            echo "</option>
      ";
        } else {
            // line 147
            echo "      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
      <option value=\"0\" selected=\"selected\">";
            // line 148
            echo ($context["text_disabled"] ?? null);
            echo "</option>
      ";
        }
        // line 150
        echo "    </select>
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
        // line 232
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ishispecialdeals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 232,  377 => 150,  372 => 148,  367 => 147,  362 => 145,  357 => 144,  355 => 143,  349 => 140,  341 => 134,  337 => 132,  333 => 130,  331 => 129,  325 => 126,  318 => 121,  314 => 119,  310 => 117,  308 => 116,  302 => 113,  293 => 106,  289 => 104,  285 => 102,  283 => 101,  277 => 98,  270 => 93,  266 => 91,  262 => 89,  260 => 88,  254 => 85,  247 => 80,  241 => 78,  239 => 77,  233 => 76,  228 => 74,  223 => 71,  217 => 69,  215 => 68,  209 => 67,  204 => 65,  193 => 59,  188 => 57,  179 => 53,  172 => 51,  165 => 46,  150 => 43,  141 => 42,  137 => 41,  132 => 39,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ishispecialdeals.twig", "");
    }
}
