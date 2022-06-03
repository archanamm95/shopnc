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
class __TwigTemplate_409d47514b404eddbd8a06531a9d59e87a2a69b0c53e8659fae296839b107ffc extends \Twig\Template
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
          <symbol id=\"cart\" viewBox=\"0 0 510 510\"><title>cart</title>
                  <path d=\"M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
            v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
            C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
            C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
             M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
            L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
            V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
            H270l22.4,209.2H30z\"></path>
          </symbol> 
        </svg>
        <svg class=\"icon\" viewBox=\"0 0 40 40\"><use xlink:href=\"#cart\" x=\"13%\" y=\"15%\"></use></svg>
      </span>
      <span class=\"cart-content\">
        <span class=\"cart-products-count\">";
        // line 30
        echo ($context["text_items_small"] ?? null);
        echo "</span>
      </span>
</span>
  </button>
  <ul class=\"cart-dropdown\">
    ";
        // line 35
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 36
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "        <tr>
          <td class=\"text-center product-image col-md-3 col-sm-3 col-xs-3\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                    echo "\" class=\"img-responsive\" /></a> ";
                }
                // line 41
                echo "          </td>
          <td class=\"text-left col-md-7 col-sm-7 col-xs-7\">
            <span class=\"quantity-formated\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43);
                echo " x</span>
            <a class=\"cart_block_product_name\" href=\"";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                echo "</a> 
            <span class=\"text-price text-left\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 45);
                echo "</span>
            ";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 47));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 48
                        echo "            - <span class=\"product-detail\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 48);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 48);
                        echo "</span> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "            ";
                }
                // line 50
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 50)) {
                    echo " <br />
            - <span class=\"product-detail\">";
                    // line 51
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 51);
                    echo "</span> ";
                }
                // line 52
                echo "          </td>
          
          <td class=\"text-center col-md-1 col-sm-1 col-xs-1\"><button type=\"button\" onclick=\"cart.remove('";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 54);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 58
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 60);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 62);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 63);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table billing-info\">
          ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 72
                echo "          <tr>
            <td class=\"text-left\"><strong>";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 73);
                echo "</strong></td>
            <td class=\"text-right value\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 74);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </table>
        <div class=\"text-center cart-btn\">
          <a href=\"";
            // line 79
            echo ($context["cart"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-default btn-cartblock\">";
            echo ($context["text_cart"] ?? null);
            echo "</button></a>&nbsp;&nbsp;&nbsp;
          <a href=\"";
            // line 80
            echo ($context["checkout"] ?? null);
            echo "\"><button type=\"button\" class=\"btn btn-primary btn-cartblock\"> ";
            echo ($context["text_checkout"] ?? null);
            echo "</button></a>
        </div>
      </div>
    </li>
    ";
        } else {
            // line 85
            echo "    <li>
      <p class=\"empty text-left\">";
            // line 86
            echo ($context["text_cartempty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 89
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
        return array (  253 => 89,  247 => 86,  244 => 85,  234 => 80,  228 => 79,  224 => 77,  215 => 74,  211 => 73,  208 => 72,  204 => 71,  197 => 66,  186 => 63,  182 => 62,  177 => 60,  173 => 58,  168 => 57,  157 => 54,  153 => 52,  147 => 51,  142 => 50,  139 => 49,  129 => 48,  124 => 47,  122 => 46,  118 => 45,  112 => 44,  108 => 43,  104 => 41,  92 => 40,  89 => 39,  85 => 38,  81 => 36,  79 => 35,  71 => 30,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/common/cart.twig", "");
    }
}
