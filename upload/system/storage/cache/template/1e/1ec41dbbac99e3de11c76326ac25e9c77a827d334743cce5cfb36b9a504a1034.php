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

/* glamour/template/common/cart.twig */
class __TwigTemplate_19c265a5848309934631083ab6cc91e1565d5d99946e2371e3f08aeecdcb1ba6 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg\">
    <span class=\"cart-link\">
      <span class=\"cart-img hidden-xs hidden-sm\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">          
            <symbol id=\"shopping-bag\" viewBox=\"0 0 680 680\"><title>shopping-bag</title><path d=\"M42.8,426.5c0,35.2,28.6,63.8,63.8,63.8s63.8-28.6,63.8-63.8s-28.6-63.8-63.8-63.8C71.4,362.6,42.8,391.3,42.8,426.5zM81.1,426.5c0-14.1,11.5-25.5,25.5-25.5s25.5,11.5,25.5,25.5S120.7,452,106.6,452S81.1,440.5,81.1,426.5z\"/><path d=\"M0.6,132.3l46.6,188.3c2.1,8.5,9.8,14.5,18.6,14.5h298.1c8.9,0,16.6-6.1,18.6-14.7L444.8,60h48.1c10.6,0,19.2-8.6,19.2-19.2s-8.6-19.2-19.2-19.2h-63.2c-8.9,0-16.6,6.1-18.6,14.7l-17.2,72.1H19.1c-5.9,0-11.5,2.7-15.1,7.3S-0.9,126.6,0.6,132.3z M43.6,146.8h341l-35.9,150h-268L43.6,146.8z\"/><path d=\"M274.5,426.5c0,35.2,28.6,63.8,63.8,63.8s63.8-28.6,63.8-63.8s-28.6-63.8-63.8-63.8C303.1,362.6,274.5,391.3,274.5,426.5zM312.8,426.5c0-14.1,11.5-25.5,25.5-25.5c14.1,0,25.5,11.5,25.5,25.5S352.4,452,338.4,452S312.8,440.5,312.8,426.5z\"/>
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-bag\" x=\"16%\" y=\"13%\"></use></svg>
      </span>
      <span class=\"cart-img hidden-lg hidden-md\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">   
          <symbol id=\"shopping-cart-empty-side-view\" viewBox=\"0 0 600 600\"><title>shopping-cart-empty-side-view</title><path d=\"M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708 c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179 c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591 l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916 c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012 s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675 c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432 c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221 c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814 c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117 S337.916,409.814,327.373,409.814z\"/></symbol>
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-empty-side-view\" x=\"11%\" y=\"16%\"></use></svg>
      </span>
      <span class=\"cart-content\">
        <span class=\"cart-products-count\">";
        // line 17
        echo ($context["text_items_small"] ?? null);
        echo "</span>
      </span>
</span>
  </button>
  <ul class=\"cart-dropdown\">
    ";
        // line 22
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 23
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "        <tr>
          <td class=\"text-center product-image col-md-3 col-sm-3 col-xs-3\">";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                    echo "\" class=\"img-responsive\" /></a> ";
                }
                // line 28
                echo "          </td>
          <td class=\"text-left col-md-7 col-sm-7 col-xs-7\">
            <span class=\"quantity-formated\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 30);
                echo " x</span>
            <a class=\"cart_block_product_name\" href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "</a> 
            <span class=\"text-price text-left\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 32);
                echo "</span>
            ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 35
                        echo "            - <span class=\"product-detail\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 35);
                        echo "</span> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 37)) {
                    echo " <br />
            - <span class=\"product-detail\">";
                    // line 38
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 38);
                    echo "</span> ";
                }
                // line 39
                echo "          </td>
          
          <td class=\"text-center col-md-1 col-sm-1 col-xs-1\"><button type=\"button\" onclick=\"cart.remove('";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 41);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 45
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 47);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 49);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 50);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table billing-info\">
          ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 59
                echo "          <tr>
            <td class=\"text-left\"><strong>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 60);
                echo "</strong></td>
            <td class=\"text-right value\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 61);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </table>
        <div class=\"text-center cart-btn\">
          <a href=\"";
            // line 66
            echo ($context["cart"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-default btn-cartblock\"> <i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</button></a>&nbsp;&nbsp;&nbsp;
          <a href=\"";
            // line 67
            echo ($context["checkout"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary btn-cartblock\"> <i class=\"fa fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</button></a>
        </div>
      </div>
    </li>
    ";
        } else {
            // line 72
            echo "    <li>
      <p class=\"empty text-left\">";
            // line 73
            echo ($context["text_cartempty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 76
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "glamour/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 76,  234 => 73,  231 => 72,  221 => 67,  215 => 66,  211 => 64,  202 => 61,  198 => 60,  195 => 59,  191 => 58,  184 => 53,  173 => 50,  169 => 49,  164 => 47,  160 => 45,  155 => 44,  144 => 41,  140 => 39,  134 => 38,  129 => 37,  126 => 36,  116 => 35,  111 => 34,  109 => 33,  105 => 32,  99 => 31,  95 => 30,  91 => 28,  79 => 27,  76 => 26,  72 => 25,  68 => 23,  66 => 22,  58 => 17,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/cart.twig", "");
    }
}
