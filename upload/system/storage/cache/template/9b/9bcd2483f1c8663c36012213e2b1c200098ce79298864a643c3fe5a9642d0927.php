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

/* glamour/template/common/footer.twig */
class __TwigTemplate_96b7364fc49f1c28579a8739dad3c86f507fc67c2e0b02080c214cea3b36142d extends \Twig\Template
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
        echo "<div id=\"_mobile_column_left\" class=\"container\"></div>
<div id=\"_mobile_column_right\" class=\"container\"></div>
<footer id=\"footer\" class=\"";
        // line 3
        echo ($context["ishome"] ?? null);
        echo "\">
    <div class=\"footer-before\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"footer-left col-lg-4 col-md-4 col-sm-12\">
            <div class=\"ishistoreinfoblock\">
              <div id=\"ishistoreinfo-container\" class=\"ishistoreinfo-inner\">
                <a href=\"";
        // line 10
        echo ($context["storehome"] ?? null);
        echo "\" class=\"store-logo\">
                  <img src=\"";
        // line 11
        echo ($context["footerlogo"] ?? null);
        echo "\" alt=\"footer-logo\">
                </a>
                <div class=\"store-description\">
                  <p>";
        // line 14
        echo ($context["storecomment"] ?? null);
        echo "</p>
                </div>
              </div>
            </div>
              ";
        // line 18
        echo ($context["footerbefore"] ?? null);
        echo "   
          </div>  
          <div id=\"_desktop_contact\">       
            <div class=\"block_contact col-lg-4 col-md-4 col-sm-12\">
              <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#contact-info-container\" data-toggle=\"collapse\">
                <span class=\"h3\">";
        // line 23
        echo ($context["text_storeinformation"] ?? null);
        echo "</span>
                <span class=\"navbar-toggler collapse-icons\">
                  <i class=\"fa fa-angle-down add\"></i>
                  <i class=\"fa fa-angle-up remove\"></i>
                </span>
              </div>
              <div id=\"contact-info-container\" class=\"collapse footer-dropdown\">
                <div class=\"block-contact\"> 
                  <div class=\"row\">
                   ";
        // line 32
        if (($context["storetelephone"] ?? null)) {
            // line 33
            echo "                    <div class=\"block phone col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-phone\"></i></span>
                      <div class=\"content\">
                        <div class=\"phone-title hidden-md-down\">";
            // line 36
            echo ($context["text_contact"] ?? null);
            echo "</div>
                        <a href=\"#\">";
            // line 37
            echo ($context["storetelephone"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 40
        echo " 
                    ";
        // line 41
        if (($context["storeemail"] ?? null)) {
            // line 42
            echo "                    <div class=\"block email col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-envelope\"></i></span>
                      <div class=\"content\">
                        <div class=\"email-title hidden-md-down\">";
            // line 45
            echo ($context["text_email"] ?? null);
            echo "</div>
                        <a href=\"mailto:";
            // line 46
            echo ($context["storeemail"] ?? null);
            echo "\">";
            echo ($context["storeemail"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 49
        echo " 
                    ";
        // line 50
        if (($context["storeaddress"] ?? null)) {
            // line 51
            echo "                    <div class=\"block address col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                      <span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span>
                      <div class=\"content\"> 
                        <div class=\"address-title hidden-md-down\">";
            // line 54
            echo ($context["text_address"] ?? null);
            echo "</div> 
                        <a>";
            // line 55
            echo ($context["storeaddress"] ?? null);
            echo "</a>
                      </div>
                    </div>
                    ";
        }
        // line 59
        echo "                  </div>
                </div>
              </div>
            </div>  
          </div> 
          <div id=\"_mobile_newsletter\"></div>
          <div class=\"footer-right col-lg-4 col-md-4 col-sm-12\">
            <div class=\"account footer-block\">
              <div class=\"wrapper linkblock\">
                <h5 class=\"hidden-sm hidden-xs\">";
        // line 68
        echo ($context["text_account"] ?? null);
        echo "</h5>
                <div class=\"footer-title clearfix  hidden-lg hidden-md collapsed\" data-target=\"#contact-info-container\" data-toggle=\"collapse\">
                  <span class=\"h3\">";
        // line 70
        echo ($context["text_account"] ?? null);
        echo "</span>
                  <span class=\"navbar-toggler collapse-icons\">
                    <i class=\"fa fa-angle-down add\"></i>
                    <i class=\"fa fa-angle-up remove\"></i>
                  </span>
                </div>
                <div id=\"account-container\" class=\"collapse footer-dropdown\">
                  <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 78
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 80
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 82
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 84
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 86
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 88
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 90
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 92
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 94
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>  
                  </ul>
                </div>
              </div>  
            </div>
            <div id=\"_mobile_contact\">
          </div>    
          ";
        // line 101
        echo ($context["footermiddle"] ?? null);
        echo "
        </div>
      </div>
    </div>
    <div class=\"footer-after\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"row\">
          ";
        // line 108
        echo ($context["footerafter"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-aftertext\">
        <p>";
        // line 112
        echo ($context["powered"] ?? null);
        echo "</p>
       </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 118
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "glamour/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 120,  274 => 118,  270 => 117,  262 => 112,  255 => 108,  245 => 101,  233 => 94,  226 => 92,  219 => 90,  212 => 88,  205 => 86,  198 => 84,  191 => 82,  184 => 80,  177 => 78,  166 => 70,  161 => 68,  150 => 59,  143 => 55,  139 => 54,  134 => 51,  132 => 50,  129 => 49,  120 => 46,  116 => 45,  111 => 42,  109 => 41,  106 => 40,  99 => 37,  95 => 36,  90 => 33,  88 => 32,  76 => 23,  68 => 18,  61 => 14,  55 => 11,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/footer.twig", "");
    }
}
