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

/* glamour/template/account/login.twig */
class __TwigTemplate_e60a137bf480fda305fbd6a8744c6883f04e3e779fc941d84c0d2ac1d5513137 extends \Twig\Template
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
        echo "

<div id=\"account-login\" class=\"container\">
    ";
        // line 4
        if (($context["success"] ?? null)) {
            // line 5
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
    ";
        }
        // line 7
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 8
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 10
        echo "  <div class=\"wrapper_container row\"> 
    
    <div id=\"content\" class=\"";
        // line 12
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
      <div class=\"col-sm-4\">
      </div>
        
        <div class=\"col-sm-4\">
          <div class=\"well\">
           <h2><b>";
        // line 19
        echo ($context["text_login"] ?? null);
        echo "</b></h2>
           
            <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">E-Mail/Username</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 24
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"E-Mail/Username\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 27
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 28
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 29
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 30
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 31
        if (($context["redirect"] ?? null)) {
            // line 32
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 34
        echo "            </form>
          </div>
        </div>
        <div class=\"col-sm-4\">
      </div>
      </div>
      </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "glamour/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  115 => 32,  113 => 31,  109 => 30,  103 => 29,  97 => 28,  93 => 27,  87 => 24,  81 => 21,  76 => 19,  64 => 12,  60 => 10,  54 => 8,  51 => 7,  45 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/account/login.twig", "");
    }
}
