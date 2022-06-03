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
class __TwigTemplate_8cd9c6673bde3dfdd8d6a4fa982be1604a1d324f3cda1f37f3e2c7cda6acf7ca extends \Twig\Template
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
          <symbol id=\"shopping-cart\" viewBox=\"0 0 700 700\"><title>shopping-cart</title>
              <path d=\"m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0\"></path>
                <path d=\"m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0\"></path>
                <path d=\"m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0\"></path>
             </symbol> 
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#shopping-cart\" x=\"12%\" y=\"16%\"></use></svg>
      </span>
      <span class=\"cart-img hidden-lg hidden-md\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">   
          <symbol id=\"shopping-cart-empty-side-view\" viewBox=\"0 0 600 600\"><title>shopping-cart-empty-side-view</title><path d=\"M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708 c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179 c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591 l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916 c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012 s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675 c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432 c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221 c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814 c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117 S337.916,409.814,327.373,409.814z\"/></symbol>
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-empty-side-view\" x=\"11%\" y=\"16%\"></use></svg>
      </span>
      <span class=\"cart-content\">
        <span class=\"cart-products-count\">";
        // line 21
        echo ($context["text_items_small"] ?? null);
        echo "</span>
      </span>
</span>
  </button>
  <ul class=\"cart-dropdown\">
    ";
        // line 26
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 27
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 30
                echo "        <tr>
          <td class=\"text-center product-image col-md-3 col-sm-3 col-xs-3\">";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                    echo "\" class=\"img-responsive\" /></a> ";
                }
                // line 32
                echo "          </td>
          <td class=\"text-left col-md-7 col-sm-7 col-xs-7\">
            <span class=\"quantity-formated\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34);
                echo " x</span>
            <a class=\"cart_block_product_name\" href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 35);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35);
                echo "</a> 
            <span class=\"text-price text-left\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 36);
                echo "</span>
            ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 38));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 39
                        echo "            - <span class=\"product-detail\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 39);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 39);
                        echo "</span> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 41)) {
                    echo " <br />
            - <span class=\"product-detail\">";
                    // line 42
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 42);
                    echo "</span> ";
                }
                // line 43
                echo "          </td>
          
          <td class=\"text-center col-md-1 col-sm-1 col-xs-1\"><button type=\"button\" onclick=\"cart.remove('";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 45);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 49
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 51);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 53);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 54);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table billing-info\">
          ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 63
                echo "          <tr>
            <td class=\"text-left\"><strong>";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 64);
                echo "</strong></td>
            <td class=\"text-right value\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 65);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </table>
        <div class=\"text-center cart-btn\">
          <a href=\"";
            // line 70
            echo ($context["cart"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-default btn-cartblock\">";
            echo ($context["text_cart"] ?? null);
            echo "</button></a>&nbsp;&nbsp;&nbsp;
          <a href=\"";
            // line 71
            echo ($context["checkout"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary btn-cartblock\"> ";
            echo ($context["text_checkout"] ?? null);
            echo "</button></a>
        </div>
      </div>
    </li>
    ";
        } else {
            // line 76
            echo "    <li>
      <p class=\"empty text-left\">";
            // line 77
            echo ($context["text_cartempty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 80
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
        return array (  244 => 80,  238 => 77,  235 => 76,  225 => 71,  219 => 70,  215 => 68,  206 => 65,  202 => 64,  199 => 63,  195 => 62,  188 => 57,  177 => 54,  173 => 53,  168 => 51,  164 => 49,  159 => 48,  148 => 45,  144 => 43,  138 => 42,  133 => 41,  130 => 40,  120 => 39,  115 => 38,  113 => 37,  109 => 36,  103 => 35,  99 => 34,  95 => 32,  83 => 31,  80 => 30,  76 => 29,  72 => 27,  70 => 26,  62 => 21,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/cart.twig", "");
    }
}
