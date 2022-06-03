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
class __TwigTemplate_8634fe7a7dce5eef9245124b4d7d6bbae48a167ea3ef50da090e33f5fd720eb6 extends \Twig\Template
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
          <div class=\"block_contact col-lg-4 col-md-4 col-sm-12\">
            <div id=\"contact-info-container\">
              <div class=\"block-contact\"> 
                <div class=\"row\">
                 ";
        // line 24
        if (($context["storetelephone"] ?? null)) {
            // line 25
            echo "                  <div class=\"block phone col-lg-12 col-md-12 col-sm-4 col-xs-4\">
                    <span class=\"icon\"><i class=\"fa fa-phone\"></i></span>
                    <div class=\"content\">
                      <div class=\"phone-title hidden-md-down\">";
            // line 28
            echo ($context["text_contact"] ?? null);
            echo "</div>
                      <a href=\"#\">";
            // line 29
            echo ($context["storetelephone"] ?? null);
            echo "</a>
                    </div>
                  </div>
                  ";
        }
        // line 32
        echo " 
                  ";
        // line 33
        if (($context["storeemail"] ?? null)) {
            // line 34
            echo "                  <div class=\"block email col-lg-12 col-md-12 col-sm-4 col-xs-4\">
                    <span class=\"icon\"><i class=\"fa fa-envelope\"></i></span>
                    <div class=\"content\">
                      <div class=\"email-title hidden-md-down\">";
            // line 37
            echo ($context["text_email"] ?? null);
            echo "</div>
                      <a href=\"mailto:";
            // line 38
            echo ($context["storeemail"] ?? null);
            echo "\">";
            echo ($context["storeemail"] ?? null);
            echo "</a>
                    </div>
                  </div>
                  ";
        }
        // line 41
        echo " 
                  ";
        // line 42
        if (($context["storeaddress"] ?? null)) {
            // line 43
            echo "                  <div class=\"block address col-lg-12 col-md-12 col-sm-4 col-xs-4\">
                    <span class=\"icon\"><i class=\"fa fa-map-marker\"></i></span>
                    <div class=\"content\"> 
                      <div class=\"address-title hidden-md-down\">";
            // line 46
            echo ($context["text_address"] ?? null);
            echo "</div> 
                      <a>";
            // line 47
            echo ($context["storeaddress"] ?? null);
            echo "</a>
                    </div>
                  </div>
                  ";
        }
        // line 51
        echo "                </div>
              </div>
            </div>
          </div>   
          <div id+\"_mobile_newsletter\"></div>
          <div class=\"footer-right col-lg-4 col-md-4 col-sm-12\">
            <div class=\"account footer-block\">
              <div class=\"wrapper linkblock\">
                <h5 class=\"hidden-sm hidden-xs\">";
        // line 59
        echo ($context["text_account"] ?? null);
        echo "</h5>
                <div id=\"account-container\">
                  <ul class=\"list-unstyled\">
                    <li><a href=\"";
        // line 62
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 64
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 66
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 68
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 70
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 72
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 74
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 76
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>

                    <li><a href=\"";
        // line 78
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>  
                  </ul>
                </div>
              </div>  
            </div>
          </div>    
          ";
        // line 84
        echo ($context["footermiddle"] ?? null);
        echo "
        </div>
      </div>
    </div>
    <div class=\"footer-after\">
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <div class=\"row\">
          ";
        // line 91
        echo ($context["footerafter"] ?? null);
        echo "
        </div>
      </div>
      <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-aftertext\">
        <p>";
        // line 95
        echo ($context["powered"] ?? null);
        echo "</p>
       </div>
    </div>
    <a id=\"slidetop\" href=\"#\" ></a>
</footer>
";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 101
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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
        return array (  260 => 103,  251 => 101,  247 => 100,  239 => 95,  232 => 91,  222 => 84,  211 => 78,  204 => 76,  197 => 74,  190 => 72,  183 => 70,  176 => 68,  169 => 66,  162 => 64,  155 => 62,  149 => 59,  139 => 51,  132 => 47,  128 => 46,  123 => 43,  121 => 42,  118 => 41,  109 => 38,  105 => 37,  100 => 34,  98 => 33,  95 => 32,  88 => 29,  84 => 28,  79 => 25,  77 => 24,  68 => 18,  61 => 14,  55 => 11,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/footer.twig", "");
    }
}
