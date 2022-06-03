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

/* glamour/template/common/header.twig */
class __TwigTemplate_e16687f6f0d4311082abd6b74535432ba5260c3024caebf621c2b1d67d008775 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/";
        // line 26
        echo ($context["activetemplate"] ?? null);
        echo "/stylesheet/owl.carousel.min.css\" rel=\"stylesheet\">
<script src=\"catalog/view/theme/";
        // line 27
        echo ($context["activetemplate"] ?? null);
        echo "/javascripts/owl.carousel.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/theme/";
        // line 28
        echo ($context["activetemplate"] ?? null);
        echo "/javascripts/theme.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/";
        // line 29
        echo ($context["activetemplate"] ?? null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\">


";
        // line 32
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 33
            echo "  
<link href=\"catalog/view/theme/";
            // line 34
            echo ($context["activetemplate"] ?? null);
            echo "/stylesheet/rtl.css\" rel=\"stylesheet\">
";
        }
        // line 36
        echo "
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 38);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 38);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 38);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 41
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/support.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 51
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 51);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 51);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 54
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</head>
<body>
  <main> 
  \t<div id=\"menu_wrapper\"></div>
    <header id=\"header\" class=\"";
        // line 60
        echo ($context["ishome"] ?? null);
        echo "\">
    \t<div class=\"header-nav\">
      \t\t<div class=\"container\">
\t\t\t  <div class=\"row\">
\t\t      \t<div class=\"col-xs-12 col-sm-12 col-md-12 center-nav\">
\t\t      \t\t";
        // line 65
        echo ($context["headerbefore"] ?? null);
        echo "
\t\t    \t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t        <div class=\"desktop-logo\">
\t\t\t          <div id=\"logo\">
\t\t\t            ";
        // line 75
        if (($context["logo"] ?? null)) {
            // line 76
            echo "\t\t\t            <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t            ";
        } else {
            // line 78
            echo "\t\t\t            <span style=\"font-size: 20px;line-height: 20px;\">
\t\t\t              <a href=\"";
            // line 79
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t                ";
            // line 80
            echo ($context["name"] ?? null);
            echo "
\t\t\t              </a>
\t\t\t            </span>
\t\t\t            ";
        }
        // line 84
        echo "\t\t\t          </div>
\t\t\t        </div>
\t\t      \t\t<div class=\"language-selector\">";
        // line 86
        echo ($context["language"] ?? null);
        echo "</div><div class=\"currency-selector\">";
        echo ($context["currency"] ?? null);
        echo "</div>
\t\t\t        <div id=\"_desktop_cart\">
\t\t\t          <div class=\"blockcart\">
\t\t\t            ";
        // line 89
        echo ($context["cart"] ?? null);
        echo "
\t\t\t          </div>
\t\t\t        </div>
\t\t\t        <div id=\"_desktop_user_info\"> 
\t\t\t\t        <div class=\"user-info\">
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a title=\"";
        // line 95
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">    
\t\t\t\t\t\t\t\t\t<div class=\"user-logo\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t<symbol id=\"account\" viewBox=\"0 0 710 710\"><title>account</title><path d=\"M256,288.389c-153.837,0-238.56,72.776-238.56,204.925c0,10.321,8.365,18.686,18.686,18.686h439.747c10.321,0,18.686-8.365,18.686-18.686C494.56,361.172,409.837,288.389,256,288.389z M55.492,474.628c7.35-98.806,74.713-148.866,200.508-148.866s193.159,50.06,200.515,148.866H55.492z\"/><path d=\"M256,0c-70.665,0-123.951,54.358-123.951,126.437c0,74.19,55.604,134.54,123.951,134.54s123.951-60.35,123.951-134.534C379.951,54.358,326.665,0,256,0z M256,223.611c-47.743,0-86.579-43.589-86.579-97.168c0-51.611,36.413-89.071,86.579-89.071c49.363,0,86.579,38.288,86.579,89.071C342.579,180.022,303.743,223.611,256,223.611z\"/>
\t\t\t\t\t\t\t\t\t\t\t</symbol>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#account\" x=\"14%\" y=\"16%\"></use></svg>
\t\t\t\t\t\t\t\t\t</div>            
\t\t\t\t\t\t\t\t\t<span class=\"expand-more\">";
        // line 103
        echo ($context["text_account"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t";
        // line 107
        if (($context["logged"] ?? null)) {
            // line 108
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 109
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 110
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 111
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 112
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\"><i class=\"fa fa-user\"></i>  ";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 115
            echo ($context["login"] ?? null);
            echo "\"><i class=\"fa fa-sign-in\"></i>  ";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 116
            echo ($context["wishlist"] ?? null);
            echo "\" id=\"wishlist-total\" title=\"";
            echo ($context["text_wishlist"] ?? null);
            echo "\"><i class=\"fa fa-heart\"></i>  <span class=\"wishlist-text\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</span></a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t\t</ul>             
\t\t\t\t\t\t\t</div>           
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"_desktop_seach_widget\">
\t\t\t            <div id=\"ishisearch_widget\" class=\"search-widget\">
\t\t\t              <div class=\"search-logo\">
\t\t\t              \t<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<symbol id=\"magnifying-glass1\" viewBox=\"0 0 699 699\"><title>magnifying-glass</title><path d=\"M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5 S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9 C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z\"></path></symbol>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#magnifying-glass1\" x=\"15%\" y=\"18%\"></use></svg>
\t\t\t\t\t\t  </div>
\t\t\t              <form>";
        // line 130
        echo ($context["search"] ?? null);
        echo "</form>
\t\t\t            </div>
\t    \t\t\t</div>      
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>  
        ";
        // line 136
        echo ($context["headerafter"] ?? null);
        echo " 
\t      <div class=\"nav-full-width\">
\t        <div class=\"container\">
\t            ";
        // line 139
        echo ($context["menu"] ?? null);
        echo "
\t        </div>
\t      </div>
    </header>
    
    <div id=\"mobile_top_menu_wrapper\" class=\"hidden-lg hidden-md\" style=\"display:none;\">
      <div id=\"top_menu_closer\">
        <i class=\"fa fa-close\"></i>
      </div>
      <div class=\"js-top-menu mobile\" id=\"_mobile_top_menu\"></div>
    </div>
    <div id=\"spin-wrapper\"></div>
\t<div id=\"siteloader\">
\t\t";
        // line 152
        if ((($context["loader"] ?? null) == "loader_1")) {
            // line 153
            echo "\t\t<div class=\"loader loader-1\"></div>
\t\t";
        } elseif ((        // line 154
($context["loader"] ?? null) == "loader_2")) {
            // line 155
            echo "\t\t<div class=\"loader loader-2\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t\t";
        } elseif ((        // line 166
($context["loader"] ?? null) == "loader_3")) {
            // line 167
            echo "\t\t<div class=\"loader loader-3\">
\t      <div></div>
\t      <div></div>
\t      <div></div>
\t  \t</div>
\t\t";
        } else {
            // line 173
            echo "\t\t<div class=\"loader loader-4 la-dark la-2x\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
\t\t";
        }
        // line 181
        echo "\t</div>

<!-- ======= Quick view JS ========= -->
<script> 
function quickbox(){
 \tif (\$(window).width() > 767) {
\t\t\$('.quickview-button').magnificPopup({
\t\ttype:'iframe',
\t\tdelegate: 'a',
\t\tpreloader: true,
\t\ttLoading: 'Loading image #%curr%...',
\t\t});    
 \t}  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});
\$('input[name=\\'search\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/search/autocomplete&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(result) {
\t\t\t\tvar products = result.products;
\t\t\t\t\$('.ajaxishi-search ul li').remove();
\t\t\t\t  \$.each(products, function(index,product) {
\t\t\t\t\tvar html = '<li>';
\t\t\t\t\t\thtml += '<div>';
\t\t\t\t\t\thtml += '<a href=\"' + product.url + '\" title=\"' + product.name + '\">';
\t\t\t\t\t\thtml += '<div class=\"product-image\"><img alt=\"' + product.name + '\" src=\"' + product.image + '\"></div>';
\t\t\t\t\t\thtml += '<div class=\"product-desc\">';
\t\t\t\t\t\thtml += '<div class=\"product-name\">' + product.name + '</div>';
\t\t\t\t\t\tif (product.special) {
                            html += '<div class=\"product-price\"><span class=\"special\">' + product.price + '</span><span class=\"price\">' + product.special + '</span></div>';
                        } else {
                            html += '<div class=\"product-price\"><span class=\"price\">' + product.price + '</span></div>';
\t\t\t\t\t\t}
\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t\thtml += '</li>';
\t\t\t\t\t\t\$('.ajaxishi-search ul').append(html);
\t\t\t\t  });
\t\t\t\t  \$('.ajaxishi-search').css('display','block');
                return false;
\t\t\t}
\t\t});
\t},
\t'select': function(product) {
\t\t\$('input[name=\\'filter_name\\']').val(product.name);
\t}
});
</script>";
    }

    public function getTemplateName()
    {
        return "glamour/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 181,  419 => 173,  411 => 167,  409 => 166,  396 => 155,  394 => 154,  391 => 153,  389 => 152,  373 => 139,  367 => 136,  358 => 130,  344 => 118,  335 => 116,  329 => 115,  322 => 114,  315 => 112,  309 => 111,  303 => 110,  297 => 109,  290 => 108,  288 => 107,  281 => 103,  270 => 95,  261 => 89,  253 => 86,  249 => 84,  242 => 80,  238 => 79,  235 => 78,  223 => 76,  221 => 75,  208 => 65,  200 => 60,  194 => 56,  186 => 54,  182 => 53,  171 => 51,  167 => 50,  158 => 43,  149 => 41,  145 => 40,  132 => 38,  128 => 37,  125 => 36,  120 => 34,  117 => 33,  115 => 32,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/header.twig", "");
    }
}
