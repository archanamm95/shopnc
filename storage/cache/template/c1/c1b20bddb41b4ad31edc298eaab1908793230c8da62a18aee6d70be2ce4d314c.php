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

/* glamour/template/common/maintenance.twig */
class __TwigTemplate_35d65a1720da7ca2fac8e977a7ad4bc4a30285e38a0fc1d335acefcda408663f extends \Twig\Template
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
<div id=\"common-maintenance\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-12\">";
        // line 4
        echo ($context["message"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 7
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "glamour/template/common/maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/maintenance.twig", "");
    }
}
