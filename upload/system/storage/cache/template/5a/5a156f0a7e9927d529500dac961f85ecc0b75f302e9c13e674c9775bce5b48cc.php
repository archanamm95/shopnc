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

/* glamour/template/extension/module/ishiproductsblock.twig */
class __TwigTemplate_c7c9143bdf3a053fa10da07762025492a8fe30d0fbfc2831d94d598a939e2c13 extends \Twig\Template
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
        echo "<section id=\"";
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishiproductsblock container\">
  <div class=\"row\">
  <h3 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h3>
  <ul class=\"ishiproductstab nav nav-tabs clearfix\">
    ";
        // line 5
        if (($context["featured"] ?? null)) {
            // line 6
            echo "      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#featured-products-block";
            // line 7
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_featured"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 10
        echo "    ";
        if (($context["bestseller"] ?? null)) {
            // line 11
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#bestseller-products-block";
            // line 12
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_bestseller"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 15
        echo "    ";
        if (($context["new"] ?? null)) {
            // line 16
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#new-products-block";
            // line 17
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_new"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 20
        echo "    ";
        if (($context["special"] ?? null)) {
            // line 21
            echo "      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#special-products-block";
            // line 22
            echo ($context["tab_randomnumer"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["heading_special"] ?? null);
            echo "</a>
      </li>
    ";
        }
        // line 25
        echo "  ";
        if (($context["category"] ?? null)) {
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                echo "      <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#category-block";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 28);
                echo "-";
                echo ($context["tab_randomnumer"] ?? null);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                echo "</a>
      </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        }
        // line 32
        echo "  </ul>

  <div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"featured-products-block";
        // line 35
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\"> 
            ";
        // line 38
        $context["counter"] = 1;
        // line 39
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["featured"] ?? null));
        echo " 
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 41
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 42
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 43
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 45
                echo "              ";
            }
            // line 46
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 46);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 49);
            echo "\">
                        <img src=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 50);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 51
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 51) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 52
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 52);
                echo "\"/>
                        ";
            }
            // line 54
            echo "                      </a>  
                      ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 55)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 55);
                echo "</span>";
            }
            // line 56
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 56)) {
                // line 57
                echo "                        <div class=\"rating\">
                          ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 59
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 59) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 63
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 68
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                        </div>
                        ";
            } else {
                // line 71
                echo "                        <div class=\"rating\">
                          ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 73
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                        </div>
                      ";
            }
            // line 78
            echo " 
                      ";
            // line 79
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 80
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                        <div class='countdown-container'>
                          <div class='countdown-days counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 84
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-hours counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 88
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-minutes counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 92
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-seconds counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 96
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                          </div>
                        </div>
                      ";
                }
                // line 99
                echo " 
                      ";
            }
            // line 100
            echo " 
                      <div class=\"button-group\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 103
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 104);
            echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                 <symbol id=\"eye-open\" viewBox=\"0 0 750 750\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699C511.626,249.345,509.724,242.778,505.918,236.117zM194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03zM379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                              <span class=\"lblcart\">";
            // line 110
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-wishlist\">
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 115
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 115);
            echo "');\"><i class=\"fa fa-heart\"></i>
                           <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553C474.988,241.811,492.719,206.017,492.719,166.008z\"/>
                              </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                          </button>
                        </div>
                        <div class=\"btn-compare\">  
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 124
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                          </button>
                        </div>
                      </div>
                    </div> 
                    <div class=\"caption\">
                      <h4><a href=\"";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 134);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 135);
            echo "</p>
                      ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136)) {
                // line 137
                echo "                      <p class=\"price\">
                        ";
                // line 138
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                    echo "
                        ";
                } else {
                    // line 141
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 141);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 141);
                    echo "</span> 
                        ";
                }
                // line 143
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 143)) {
                    // line 144
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 144);
                    echo "</span>
                        ";
                }
                // line 146
                echo "                      </p>
                      ";
            }
            // line 148
            echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 149
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 149);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 149)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                          <span class=\"lblcart\">";
            // line 150
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>  
                    </div> 
                  </div>                        
                </div>
        ";
            // line 156
            if ((($context["product_row"] ?? null) != 1)) {
                // line 157
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 158
                    echo "            </div>
          ";
                }
                // line 160
                echo "        ";
            }
            // line 161
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 162
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 167
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\">      
            ";
        // line 170
        $context["counter"] = 1;
        // line 171
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 172
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 173
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 174
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 175
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 177
                echo "              ";
            }
            // line 178
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 178);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 181
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 181);
            echo "\">
                        <img src=\"";
            // line 182
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 182);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 182);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 182);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 183
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 183) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 184
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 184);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 184);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 184);
                echo "\"/>
                        ";
            }
            // line 186
            echo "                      </a>  
                      ";
            // line 187
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 187)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 187);
                echo "</span>";
            }
            // line 188
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 188)) {
                // line 189
                echo "                        <div class=\"rating\">
                          ";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 191
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 191) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 195
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 200
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                echo "                        </div>
                        ";
            } else {
                // line 203
                echo "                        <div class=\"rating\">
                          ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 205
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "                        </div>
                      ";
            }
            // line 210
            echo " 
                      ";
            // line 211
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 212
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "                        <div class='countdown-container'>
                          <div class='countdown-days counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 216
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-hours counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 220
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-minutes counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 224
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-seconds counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 228
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                          </div>
                        </div>
                      ";
                }
                // line 231
                echo " 
                      ";
            }
            // line 232
            echo " 
                      <div class=\"button-group\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 235
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 236
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 236);
            echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                 <symbol id=\"eye-open\" viewBox=\"0 0 750 750\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699C511.626,249.345,509.724,242.778,505.918,236.117zM194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03zM379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                              <span class=\"lblcart\">";
            // line 242
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-wishlist\">
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 247
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 247);
            echo "');\"><i class=\"fa fa-heart\"></i>
                           <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553C474.988,241.811,492.719,206.017,492.719,166.008z\"/>
                              </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                          </button>
                        </div>
                        <div class=\"btn-compare\">  
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 256
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 256);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                          </button>
                        </div>
                      </div>
                    </div> 
                    <div class=\"caption\">
                      <h4><a href=\"";
            // line 266
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 266);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 266);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 267
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 267);
            echo "</p>
                      ";
            // line 268
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 268)) {
                // line 269
                echo "                      <p class=\"price\">
                        ";
                // line 270
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 270)) {
                    // line 271
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 271);
                    echo "
                        ";
                } else {
                    // line 273
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 273);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 273);
                    echo "</span> 
                        ";
                }
                // line 275
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 275)) {
                    // line 276
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 276);
                    echo "</span>
                        ";
                }
                // line 278
                echo "                      </p>
                      ";
            }
            // line 280
            echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 281
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 281);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 281)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                          <span class=\"lblcart\">";
            // line 282
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>  
                    </div> 
                  </div>                        
                </div>
        ";
            // line 288
            if ((($context["product_row"] ?? null) != 1)) {
                // line 289
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 290
                    echo "            </div>
          ";
                }
                // line 292
                echo "        ";
            }
            // line 293
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 294
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"new-products-block";
        // line 299
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 302
        $context["counter"] = 1;
        // line 303
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 304
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 305
            if ((($context["product_row"] ?? null) != 1)) {
                // line 306
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 307
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 309
                echo "            ";
            }
            // line 310
            echo "              <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 310);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 313
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 313);
            echo "\">
                        <img src=\"";
            // line 314
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 314);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 314);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 314);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 315
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 315) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 316
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 316);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 316);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 316);
                echo "\"/>
                        ";
            }
            // line 318
            echo "                      </a>  
                      ";
            // line 319
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 319)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 319);
                echo "</span>";
            }
            // line 320
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 320)) {
                // line 321
                echo "                        <div class=\"rating\">
                          ";
                // line 322
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 323
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 323) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 327
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 332
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo "                        </div>
                        ";
            } else {
                // line 335
                echo "                        <div class=\"rating\">
                          ";
                // line 336
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 337
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                echo "                        </div>
                      ";
            }
            // line 342
            echo " 
                      ";
            // line 343
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 344
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 344)) {
                    // line 345
                    echo "                        <div class='countdown-container'>
                          <div class='countdown-days counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 348
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-hours counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 352
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-minutes counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 356
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-seconds counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 360
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                          </div>
                        </div>
                      ";
                }
                // line 363
                echo " 
                      ";
            }
            // line 364
            echo " 
                      <div class=\"button-group\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 367
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 368
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 368);
            echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                 <symbol id=\"eye-open\" viewBox=\"0 0 750 750\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699C511.626,249.345,509.724,242.778,505.918,236.117zM194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03zM379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                              <span class=\"lblcart\">";
            // line 374
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-wishlist\">
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 379
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 379);
            echo "');\"><i class=\"fa fa-heart\"></i>
                           <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553C474.988,241.811,492.719,206.017,492.719,166.008z\"/>
                              </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                          </button>
                        </div>
                        <div class=\"btn-compare\">  
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 388
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 388);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                          </button>
                        </div>
                      </div>
                    </div> 
                    <div class=\"caption\">
                      <h4><a href=\"";
            // line 398
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 398);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 398);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 399
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 399);
            echo "</p>
                      ";
            // line 400
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 400)) {
                // line 401
                echo "                      <p class=\"price\">
                        ";
                // line 402
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 402)) {
                    // line 403
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 403);
                    echo "
                        ";
                } else {
                    // line 405
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 405);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 405);
                    echo "</span> 
                        ";
                }
                // line 407
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 407)) {
                    // line 408
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 408);
                    echo "</span>
                        ";
                }
                // line 410
                echo "                      </p>
                      ";
            }
            // line 412
            echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 413
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 413);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 413)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                          <span class=\"lblcart\">";
            // line 414
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>  
                    </div> 
                  </div>                        
                </div>
            ";
            // line 420
            if ((($context["product_row"] ?? null) != 1)) {
                // line 421
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 422
                    echo "                </div>
              ";
                }
                // line 424
                echo "            ";
            }
            echo " 
          ";
            // line 425
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 426
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"special-products-block";
        // line 431
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
        // line 434
        $context["counter"] = 1;
        // line 435
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 436
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 437
            if ((($context["product_row"] ?? null) != 1)) {
                // line 438
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 439
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 441
                echo "            ";
            }
            echo "     
              <div class=\"item product-container\" data-countdowntime=\"";
            // line 442
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 442);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 445
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 445);
            echo "\">
                        <img src=\"";
            // line 446
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 446);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 446);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 446);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 447
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 447) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 448
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 448);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 448);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 448);
                echo "\"/>
                        ";
            }
            // line 450
            echo "                      </a>  
                      ";
            // line 451
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 451)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 451);
                echo "</span>";
            }
            // line 452
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 452)) {
                // line 453
                echo "                        <div class=\"rating\">
                          ";
                // line 454
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 455
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 455) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 459
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 464
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 465
                echo "                        </div>
                        ";
            } else {
                // line 467
                echo "                        <div class=\"rating\">
                          ";
                // line 468
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 469
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 473
                echo "                        </div>
                      ";
            }
            // line 474
            echo " 
                      ";
            // line 475
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 476
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 476)) {
                    // line 477
                    echo "                        <div class='countdown-container'>
                          <div class='countdown-days counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 480
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-hours counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 484
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-minutes counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 488
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                          </div>
                          <div class='countdown-seconds counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                    // line 492
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                          </div>
                        </div>
                      ";
                }
                // line 495
                echo " 
                      ";
            }
            // line 496
            echo " 
                      <div class=\"button-group\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 499
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 500
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 500);
            echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                 <symbol id=\"eye-open\" viewBox=\"0 0 750 750\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699C511.626,249.345,509.724,242.778,505.918,236.117zM194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03zM379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                              <span class=\"lblcart\">";
            // line 506
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-wishlist\">
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 511
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 511);
            echo "');\"><i class=\"fa fa-heart\"></i>
                           <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553C474.988,241.811,492.719,206.017,492.719,166.008z\"/>
                              </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                          </button>
                        </div>
                        <div class=\"btn-compare\">  
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 520
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 520);
            echo "');\"><i class=\"fa fa-exchange\"></i>                            
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                          </button>
                        </div>
                      </div>
                    </div> 
                    <div class=\"caption\">
                      <h4><a href=\"";
            // line 530
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 530);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 530);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 531
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 531);
            echo "</p>
                      ";
            // line 532
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 532)) {
                // line 533
                echo "                      <p class=\"price\">
                        ";
                // line 534
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 534)) {
                    // line 535
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 535);
                    echo "
                        ";
                } else {
                    // line 537
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 537);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 537);
                    echo "</span> 
                        ";
                }
                // line 539
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 539)) {
                    // line 540
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 540);
                    echo "</span>
                        ";
                }
                // line 542
                echo "                      </p>
                      ";
            }
            // line 544
            echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 545
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 545);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 545)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                          <span class=\"lblcart\">";
            // line 546
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>  
                    </div> 
                  </div>                        
                </div>
            ";
            // line 552
            if ((($context["product_row"] ?? null) != 1)) {
                // line 553
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 554
                    echo "                </div>
              ";
                }
                // line 556
                echo "            ";
            }
            echo " 
          ";
            // line 557
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 558
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "        
        </div>        
      </div>
    </div>
  
  ";
        // line 563
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 564
            echo "  <div class=\"tab-pane\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 564);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
            // line 567
            $context["counter"] = 1;
            // line 568
            echo "              ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 568)] ?? null) : null));
            // line 569
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 569)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 570
                echo "                ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 571
                    echo "                  ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 572
                        echo "                    <div class=\"multilevel-item\">
                  ";
                    }
                    // line 574
                    echo "                ";
                }
                // line 575
                echo "                  <div class=\"item product-container\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 575);
                echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
                // line 578
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 578);
                echo "\">
                        <img src=\"";
                // line 579
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 579);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 579);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 579);
                echo "\" class=\"img-responsive\"/>
                        ";
                // line 580
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 580) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 581
                    echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 581);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 581);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 581);
                    echo "\"/>
                        ";
                }
                // line 583
                echo "                      </a>  
                      ";
                // line 584
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 584)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 584);
                    echo "</span>";
                }
                // line 585
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 585)) {
                    // line 586
                    echo "                        <div class=\"rating\">
                          ";
                    // line 587
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 588
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 588) < $context["i"])) {
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                        } else {
                            // line 592
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                        }
                        // line 597
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 598
                    echo "                        </div>
                        ";
                } else {
                    // line 600
                    echo "                        <div class=\"rating\">
                          ";
                    // line 601
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 602
                        echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 606
                    echo "                        </div>
                      ";
                }
                // line 607
                echo " 
                      ";
                // line 608
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 609
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 609)) {
                        // line 610
                        echo "                        <div class='countdown-container'>
                          <div class='countdown-days counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                        // line 613
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                          </div>
                          <div class='countdown-hours counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                        // line 617
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                          </div>
                          <div class='countdown-minutes counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                        // line 621
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                          </div>
                          <div class='countdown-seconds counter'>
                            <span class=\"data\"></span>
                            <span class=\"lbl\">";
                        // line 625
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                          </div>
                        </div>
                      ";
                    }
                    // line 628
                    echo " 
                      ";
                }
                // line 629
                echo " 
                      <div class=\"button-group\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 632
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                            <a class=\"quickbox\" href=\"";
                // line 633
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 633);
                echo "\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                 <symbol id=\"eye-open\" viewBox=\"0 0 750 750\"><title>eye-open</title><path d=\"M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699C511.626,249.345,509.724,242.778,505.918,236.117zM194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03zM379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z\"/></symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                              <span class=\"lblcart\">";
                // line 639
                echo ($context["quick_view"] ?? null);
                echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-wishlist\">
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 644
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 644);
                echo "');\"><i class=\"fa fa-heart\"></i>
                           <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553C474.988,241.811,492.719,206.017,492.719,166.008z\"/>
                              </symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                          </button>
                        </div>
                        <div class=\"btn-compare\">  
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 653
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 653);
                echo "');\"><i class=\"fa fa-exchange\"></i>                            
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"report\" viewBox=\"0 0 1050 1050\"><title>report</title><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m480 258.667969h60v220h-60zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m200 118.667969h60v360h-60zm0 0\"/><path d=\"m340-1.332031h60v480h-60zm0 0\"/><path d=\"m60 358.667969h60v120h-60zm0 0\"/><path d=\"m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0\"/><path d=\"m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0\"/><path d=\"m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0\"/><path d=\"m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0\"/><path d=\"m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0\"/></symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#report\" x=\"19%\" y=\"25%\"></use></svg>
                          </button>
                        </div>
                      </div>
                    </div> 
                    <div class=\"caption\">
                      <h4><a href=\"";
                // line 663
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 663);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 663);
                echo "</a></h4>
                      <p class=\"description\">";
                // line 664
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 664);
                echo "</p>
                      ";
                // line 665
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 665)) {
                    // line 666
                    echo "                      <p class=\"price\">
                        ";
                    // line 667
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 667)) {
                        // line 668
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 668);
                        echo "
                        ";
                    } else {
                        // line 670
                        echo "                        <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 670);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 670);
                        echo "</span> 
                        ";
                    }
                    // line 672
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 672)) {
                        // line 673
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 673);
                        echo "</span>
                        ";
                    }
                    // line 675
                    echo "                      </p>
                      ";
                }
                // line 677
                echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
                // line 678
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 678);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 678)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
                          <span class=\"lblcart\">";
                // line 679
                echo ($context["button_cart"] ?? null);
                echo "</span>
                          </button>
                      </div>  
                    </div> 
                  </div>                        
                </div>
                ";
                // line 685
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 686
                    echo "                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 687
                        echo "                    </div>
                  ";
                    }
                    // line 689
                    echo "                ";
                }
                echo " 
              ";
                // line 690
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 691
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
            </div>        
          </div>
        </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 696
        echo "  </div>
</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 699
        echo ($context["ishi_randomnumer"] ?? null);
        echo " .owl-carousel').owlCarousel({
        loop:false,
        nav:true,  
        dots:false, 
        rewind: true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
            0:{
                items:";
        // line 708
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 711
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 714
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 717
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 720
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 726
        echo ($context["ishi_randomnumer"] ?? null);
        echo " li a:first').tab('show');
//--></script>
</section>";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/ishiproductsblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1802 => 726,  1793 => 720,  1787 => 717,  1781 => 714,  1775 => 711,  1769 => 708,  1757 => 699,  1752 => 696,  1737 => 691,  1735 => 690,  1730 => 689,  1726 => 687,  1723 => 686,  1721 => 685,  1712 => 679,  1702 => 678,  1699 => 677,  1695 => 675,  1687 => 673,  1684 => 672,  1676 => 670,  1670 => 668,  1668 => 667,  1665 => 666,  1663 => 665,  1659 => 664,  1653 => 663,  1638 => 653,  1624 => 644,  1616 => 639,  1607 => 633,  1603 => 632,  1598 => 629,  1594 => 628,  1587 => 625,  1580 => 621,  1573 => 617,  1566 => 613,  1561 => 610,  1558 => 609,  1556 => 608,  1553 => 607,  1549 => 606,  1540 => 602,  1536 => 601,  1533 => 600,  1529 => 598,  1523 => 597,  1516 => 592,  1507 => 588,  1503 => 587,  1500 => 586,  1497 => 585,  1491 => 584,  1488 => 583,  1478 => 581,  1476 => 580,  1468 => 579,  1464 => 578,  1457 => 575,  1454 => 574,  1450 => 572,  1447 => 571,  1444 => 570,  1439 => 569,  1436 => 568,  1434 => 567,  1425 => 564,  1421 => 563,  1409 => 558,  1407 => 557,  1402 => 556,  1398 => 554,  1395 => 553,  1393 => 552,  1384 => 546,  1374 => 545,  1371 => 544,  1367 => 542,  1359 => 540,  1356 => 539,  1348 => 537,  1342 => 535,  1340 => 534,  1337 => 533,  1335 => 532,  1331 => 531,  1325 => 530,  1310 => 520,  1296 => 511,  1288 => 506,  1279 => 500,  1275 => 499,  1270 => 496,  1266 => 495,  1259 => 492,  1252 => 488,  1245 => 484,  1238 => 480,  1233 => 477,  1230 => 476,  1228 => 475,  1225 => 474,  1221 => 473,  1212 => 469,  1208 => 468,  1205 => 467,  1201 => 465,  1195 => 464,  1188 => 459,  1179 => 455,  1175 => 454,  1172 => 453,  1169 => 452,  1163 => 451,  1160 => 450,  1150 => 448,  1148 => 447,  1140 => 446,  1136 => 445,  1130 => 442,  1125 => 441,  1121 => 439,  1118 => 438,  1116 => 437,  1109 => 436,  1106 => 435,  1104 => 434,  1098 => 431,  1086 => 426,  1084 => 425,  1079 => 424,  1075 => 422,  1072 => 421,  1070 => 420,  1061 => 414,  1051 => 413,  1048 => 412,  1044 => 410,  1036 => 408,  1033 => 407,  1025 => 405,  1019 => 403,  1017 => 402,  1014 => 401,  1012 => 400,  1008 => 399,  1002 => 398,  987 => 388,  973 => 379,  965 => 374,  956 => 368,  952 => 367,  947 => 364,  943 => 363,  936 => 360,  929 => 356,  922 => 352,  915 => 348,  910 => 345,  907 => 344,  905 => 343,  902 => 342,  898 => 341,  889 => 337,  885 => 336,  882 => 335,  878 => 333,  872 => 332,  865 => 327,  856 => 323,  852 => 322,  849 => 321,  846 => 320,  840 => 319,  837 => 318,  827 => 316,  825 => 315,  817 => 314,  813 => 313,  806 => 310,  803 => 309,  799 => 307,  796 => 306,  794 => 305,  787 => 304,  784 => 303,  782 => 302,  776 => 299,  764 => 294,  761 => 293,  758 => 292,  754 => 290,  751 => 289,  749 => 288,  740 => 282,  730 => 281,  727 => 280,  723 => 278,  715 => 276,  712 => 275,  704 => 273,  698 => 271,  696 => 270,  693 => 269,  691 => 268,  687 => 267,  681 => 266,  666 => 256,  652 => 247,  644 => 242,  635 => 236,  631 => 235,  626 => 232,  622 => 231,  615 => 228,  608 => 224,  601 => 220,  594 => 216,  589 => 213,  586 => 212,  584 => 211,  581 => 210,  577 => 209,  568 => 205,  564 => 204,  561 => 203,  557 => 201,  551 => 200,  544 => 195,  535 => 191,  531 => 190,  528 => 189,  525 => 188,  519 => 187,  516 => 186,  506 => 184,  504 => 183,  496 => 182,  492 => 181,  485 => 178,  482 => 177,  478 => 175,  475 => 174,  472 => 173,  467 => 172,  464 => 171,  462 => 170,  456 => 167,  450 => 163,  444 => 162,  441 => 161,  438 => 160,  434 => 158,  431 => 157,  429 => 156,  420 => 150,  410 => 149,  407 => 148,  403 => 146,  395 => 144,  392 => 143,  384 => 141,  378 => 139,  376 => 138,  373 => 137,  371 => 136,  367 => 135,  361 => 134,  346 => 124,  332 => 115,  324 => 110,  315 => 104,  311 => 103,  306 => 100,  302 => 99,  295 => 96,  288 => 92,  281 => 88,  274 => 84,  269 => 81,  266 => 80,  264 => 79,  261 => 78,  257 => 77,  248 => 73,  244 => 72,  241 => 71,  237 => 69,  231 => 68,  224 => 63,  215 => 59,  211 => 58,  208 => 57,  205 => 56,  199 => 55,  196 => 54,  186 => 52,  184 => 51,  176 => 50,  172 => 49,  165 => 46,  162 => 45,  158 => 43,  155 => 42,  152 => 41,  148 => 40,  143 => 39,  141 => 38,  135 => 35,  130 => 32,  127 => 31,  114 => 28,  111 => 27,  106 => 26,  103 => 25,  95 => 22,  92 => 21,  89 => 20,  81 => 17,  78 => 16,  75 => 15,  67 => 12,  64 => 11,  61 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishiproductsblock.twig", "");
    }
}
