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
class __TwigTemplate_e3f49d4c166540244be254e2ac616cb93287a4079e8da6508689b20028afcb2d extends \Twig\Template
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
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                          <div class='countdown-container'>
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
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 128
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 133
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 142
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 142);
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
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 152);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 153);
            echo "</p>
                      ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 154)) {
                // line 155
                echo "                      <p class=\"price\">
                        ";
                // line 156
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 157);
                    echo "
                        ";
                } else {
                    // line 159
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 159);
                    echo "</span> 
                        ";
                }
                // line 161
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 161)) {
                    // line 162
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 162);
                    echo "</span>
                        ";
                }
                // line 164
                echo "                      </p>
                      ";
            }
            // line 166
            echo "                      <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 167
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 167);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 167)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <span class=\"lblcart\">";
            // line 168
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>  
                    </div>                         
                  </div>
                </div>
        ";
            // line 174
            if ((($context["product_row"] ?? null) != 1)) {
                // line 175
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 176
                    echo "            </div>
          ";
                }
                // line 178
                echo "        ";
            }
            // line 179
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 180
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 185
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\">      
            ";
        // line 188
        $context["counter"] = 1;
        // line 189
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 190
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 191
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 192
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 193
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 195
                echo "              ";
            }
            // line 196
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 196);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 199
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 199);
            echo "\">
                      <img src=\"";
            // line 200
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 200);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 200);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 200);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 200) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 201
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 201) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 202
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 202);
                echo "\"/>
                        ";
            }
            // line 204
            echo "                      </a>  
                      ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 205)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 205);
                echo "</span>";
            }
            echo " 
                      ";
            // line 206
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 206)) {
                // line 207
                echo "                        <div class=\"rating\">
                          ";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 209
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 209) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 213
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 218
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                        </div>
                        ";
            } else {
                // line 221
                echo "                        <div class=\"rating\">
                          ";
                // line 222
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 223
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "                        </div>
                      ";
            }
            // line 228
            echo " 
                      ";
            // line 229
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 230
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 230)) {
                    // line 231
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 234
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 238
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 242
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 246
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 250
                echo "                      ";
            }
            // line 251
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 253
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 254
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 254);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 278
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 283
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 283);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 292
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 292);
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
            // line 302
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 302);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 302);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 303
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 303);
            echo "</p>
                      ";
            // line 304
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 304)) {
                // line 305
                echo "                      <p class=\"price\">
                        ";
                // line 306
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 306)) {
                    // line 307
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 307);
                    echo "
                        ";
                } else {
                    // line 309
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 309);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 309);
                    echo "</span> 
                        ";
                }
                // line 311
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 311)) {
                    // line 312
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 312);
                    echo "</span>
                        ";
                }
                // line 314
                echo "                      </p>
                      ";
            }
            // line 316
            echo "                      <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 317
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 317);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 317)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 323
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>
                    </div>                             
                </div>
                </div>
        ";
            // line 329
            if ((($context["product_row"] ?? null) != 1)) {
                // line 330
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 331
                    echo "            </div>
          ";
                }
                // line 333
                echo "        ";
            }
            // line 334
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 335
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
        // line 340
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 343
        $context["counter"] = 1;
        // line 344
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 345
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 346
            if ((($context["product_row"] ?? null) != 1)) {
                // line 347
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 348
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 350
                echo "            ";
            }
            // line 351
            echo "              <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 351);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 354
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 354);
            echo "\">
                  <img src=\"";
            // line 355
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 355);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 355);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 355);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 355) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 356
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 356) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 357
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 357);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 357);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 357);
                echo "\"/>
                        ";
            }
            // line 359
            echo "                      </a>  
                      ";
            // line 360
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 360)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 360);
                echo "</span>";
            }
            echo " 
                      ";
            // line 361
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 361)) {
                // line 362
                echo "                        <div class=\"rating\">
                          ";
                // line 363
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 364
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 364) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 368
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 373
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                        </div>
                        ";
            } else {
                // line 376
                echo "                        <div class=\"rating\">
                          ";
                // line 377
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 378
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 382
                echo "                        </div>
                      ";
            }
            // line 384
            echo "                      ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 385
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 385)) {
                    // line 386
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 389
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 393
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 397
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 401
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 404
                echo "   
                      ";
            }
            // line 406
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 408
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 409
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 409);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 433
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 438
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 438);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 447
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 447);
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
            // line 457
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 457);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 457);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 458
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 458);
            echo "</p>
                  ";
            // line 459
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 459)) {
                // line 460
                echo "                  <p class=\"price\">
                    ";
                // line 461
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 461)) {
                    // line 462
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 462);
                    echo "
                    ";
                } else {
                    // line 464
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 464);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 464);
                    echo "</span> 
                    ";
                }
                // line 466
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 466)) {
                    // line 467
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 467);
                    echo "</span>
                    ";
                }
                // line 469
                echo "                  </p>
                  ";
            }
            // line 470
            echo " 
                  <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 472
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 472);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 472)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 478
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>
                </div>                           
              </div>
                </div>
            ";
            // line 484
            if ((($context["product_row"] ?? null) != 1)) {
                // line 485
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 486
                    echo "                </div>
              ";
                }
                // line 488
                echo "            ";
            }
            echo " 
          ";
            // line 489
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 490
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
        // line 495
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
        // line 498
        $context["counter"] = 1;
        // line 499
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 500
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 501
            if ((($context["product_row"] ?? null) != 1)) {
                // line 502
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 503
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 505
                echo "            ";
            }
            echo "     
              <div class=\"item product-container\" data-countdowntime=\"";
            // line 506
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 506);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 509
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 509);
            echo "\">
                        <img src=\"";
            // line 510
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 510);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 510);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 510);
            echo "\" class=\"img-responsive\" />
                        ";
            // line 511
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 511) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 512
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 512);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 512);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 512);
                echo "\"/>
                        ";
            }
            // line 514
            echo "                      </a>  
                      ";
            // line 515
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 515)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 515);
                echo "</span>";
            }
            // line 516
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 516)) {
                // line 517
                echo "                        <div class=\"rating\">
                          ";
                // line 518
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 519
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 519) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 523
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 528
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 529
                echo "                        </div>
                        ";
            } else {
                // line 531
                echo "                        <div class=\"rating\">
                          ";
                // line 532
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 533
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 537
                echo "                        </div>
                      ";
            }
            // line 538
            echo " 
                      ";
            // line 539
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 540
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 540)) {
                    // line 541
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 544
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 548
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 552
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 556
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 559
                echo " 
                      ";
            }
            // line 561
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 563
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 564
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 564);
            echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
            // line 588
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 593
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 593);
            echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 602
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 602);
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
            // line 612
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 612);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 612);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 613
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 613);
            echo "</p>
                  ";
            // line 614
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 614)) {
                // line 615
                echo "                  <p class=\"price\">
                    ";
                // line 616
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 616)) {
                    // line 617
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 617);
                    echo "
                    ";
                } else {
                    // line 619
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 619);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 619);
                    echo "</span> 
                    ";
                }
                // line 621
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 621)) {
                    // line 622
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 622);
                    echo "</span>
                    ";
                }
                // line 624
                echo "                  </p>
                  ";
            }
            // line 625
            echo "  
                  <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 627
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 627);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 627)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 633
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>
                </div>
              </div>
                </div>
            ";
            // line 639
            if ((($context["product_row"] ?? null) != 1)) {
                // line 640
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 641
                    echo "                </div>
              ";
                }
                // line 643
                echo "            ";
            }
            echo " 
          ";
            // line 644
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 645
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
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 651
            echo "  <div class=\"tab-pane\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 651);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
            // line 654
            $context["counter"] = 1;
            // line 655
            echo "              ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 655)] ?? null) : null));
            // line 656
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 656)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 657
                echo "                ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 658
                    echo "                  ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 659
                        echo "                    <div class=\"multilevel-item\">
                  ";
                    }
                    // line 661
                    echo "                ";
                }
                // line 662
                echo "                  <div class=\"item product-container\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 662);
                echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
                // line 665
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 665);
                echo "\">
                        <img src=\"";
                // line 666
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 666);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 666);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 666);
                echo "\" class=\"img-responsive\" />
                        ";
                // line 667
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 667) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 668
                    echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 668);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 668);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 668);
                    echo "\"/>
                        ";
                }
                // line 670
                echo "                      </a>  
                      ";
                // line 671
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 671)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 671);
                    echo "</span>";
                }
                echo " 
                       ";
                // line 672
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 672)) {
                    // line 673
                    echo "                        <div class=\"rating\">
                          ";
                    // line 674
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 675
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 675) < $context["i"])) {
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                        } else {
                            // line 679
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                        }
                        // line 684
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 685
                    echo "                        </div>
                        ";
                } else {
                    // line 687
                    echo "                        <div class=\"rating\">
                          ";
                    // line 688
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 689
                        echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 693
                    echo "                        </div>
                      ";
                }
                // line 694
                echo " 
                      ";
                // line 695
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 696
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 696)) {
                        // line 697
                        echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 700
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 704
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 708
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 712
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                            </div>
                          </div>
                        ";
                    }
                    // line 715
                    echo "  
                      ";
                }
                // line 717
                echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 719
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                              <a class=\"quickbox\" href=\"";
                // line 720
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 720);
                echo "\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"eye-open\" viewBox=\"0 0 650 650\"><title>eye-open</title>
                                   <g>
                                      <path d=\"M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                        c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                        c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                        c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                        c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                        c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                        c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                        c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                        c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                        s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z\"/>
                                    </g>
                                    <g>
                                      <path d=\"M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z\"/>
                                    </g></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#eye-open\" x=\"16%\" y=\"14%\"></use></svg>
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                <span class=\"lblcart\">";
                // line 744
                echo ($context["quick_view"] ?? null);
                echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 749
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 749);
                echo "');\"><i class=\"fa fa-heart\"></i>
                             <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                <symbol id=\"heart-shape-outline\" viewBox=\"0 0 850 850\"><title>heart-shape-outline</title><path d=\"M475.366,71.949c-24.175-23.606-57.575-35.404-100.215-35.404c-11.8,0-23.843,2.046-36.117,6.136 c-12.279,4.093-23.702,9.615-34.256,16.562c-10.568,6.945-19.65,13.467-27.269,19.556c-7.61,6.091-14.845,12.564-21.696,19.414 c-6.854-6.85-14.087-13.323-21.698-19.414c-7.616-6.089-16.702-12.607-27.268-19.556c-10.564-6.95-21.985-12.468-34.261-16.562 c-12.275-4.089-24.316-6.136-36.116-6.136c-42.637,0-76.039,11.801-100.211,35.404C12.087,95.55,0,128.286,0,170.16 c0,12.753,2.24,25.891,6.711,39.398c4.471,13.514,9.566,25.031,15.275,34.546c5.708,9.514,12.181,18.792,19.414,27.834 c7.233,9.041,12.519,15.272,15.846,18.698c3.33,3.426,5.948,5.903,7.851,7.427L243.25,469.938 c3.427,3.426,7.614,5.144,12.562,5.144s9.138-1.718,12.563-5.144l177.87-171.31c43.588-43.58,65.38-86.406,65.38-128.472 C511.626,128.279,499.54,95.546,475.366,71.949z M421.405,271.795L255.813,431.391L89.938,271.507 C54.344,235.922,36.55,202.133,36.55,170.156c0-15.415,2.046-29.026,6.136-40.824c4.093-11.8,9.327-21.177,15.703-28.124 c6.377-6.949,14.132-12.607,23.268-16.988c9.141-4.377,18.086-7.328,26.84-8.85c8.754-1.52,18.079-2.281,27.978-2.281 c9.896,0,20.557,2.424,31.977,7.279c11.418,4.853,21.934,10.944,31.545,18.271c9.613,7.332,17.845,14.183,24.7,20.557 c6.851,6.38,12.559,12.229,17.128,17.559c3.424,4.189,8.091,6.283,13.989,6.283c5.9,0,10.562-2.094,13.99-6.283 c4.568-5.33,10.28-11.182,17.131-17.559c6.852-6.374,15.085-13.222,24.694-20.557c9.613-7.327,20.129-13.418,31.553-18.271 c11.416-4.854,22.08-7.279,31.977-7.279s19.219,0.761,27.977,2.281c8.757,1.521,17.702,4.473,26.84,8.85 c9.137,4.38,16.892,10.042,23.267,16.988c6.376,6.947,11.612,16.324,15.705,28.124c4.086,11.798,6.132,25.409,6.132,40.824 C475.078,202.133,457.19,236.016,421.405,271.795z\"/>
                                </symbol>
                              </svg>
                              <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#heart-shape-outline\" x=\"19%\" y=\"21%\"></use></svg>
                            </button>
                          </div>
                          <div class=\"btn-compare\">  
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 758
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 758);
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
                // line 768
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 768);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 768);
                echo "</a></h4>
                      <p class=\"description\">";
                // line 769
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 769);
                echo "</p>
                      ";
                // line 770
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 770)) {
                    // line 771
                    echo "                      <p class=\"price\">
                        ";
                    // line 772
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 772)) {
                        // line 773
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 773);
                        echo "
                        ";
                    } else {
                        // line 775
                        echo "                        <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 775);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 775);
                        echo "</span> 
                        ";
                    }
                    // line 777
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 777)) {
                        // line 778
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 778);
                        echo "</span>
                        ";
                    }
                    // line 780
                    echo "                      </p>
                      ";
                }
                // line 781
                echo " 
                      <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
                // line 783
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 783);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 783)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
                // line 789
                echo ($context["button_cart"] ?? null);
                echo "</span>
                            </button>
                      </div>
                    </div>
                  </div>
                </div>
                ";
                // line 795
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 796
                    echo "                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 797
                        echo "                    </div>
                  ";
                    }
                    // line 799
                    echo "                ";
                }
                echo " 
              ";
                // line 800
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 801
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
        // line 806
        echo "  </div>
</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 809
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
        // line 818
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 821
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 824
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 827
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 830
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 836
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
        return array (  1919 => 836,  1910 => 830,  1904 => 827,  1898 => 824,  1892 => 821,  1886 => 818,  1874 => 809,  1869 => 806,  1854 => 801,  1852 => 800,  1847 => 799,  1843 => 797,  1840 => 796,  1838 => 795,  1829 => 789,  1814 => 783,  1810 => 781,  1806 => 780,  1798 => 778,  1795 => 777,  1787 => 775,  1781 => 773,  1779 => 772,  1776 => 771,  1774 => 770,  1770 => 769,  1764 => 768,  1749 => 758,  1735 => 749,  1727 => 744,  1700 => 720,  1696 => 719,  1692 => 717,  1688 => 715,  1681 => 712,  1674 => 708,  1667 => 704,  1660 => 700,  1655 => 697,  1652 => 696,  1650 => 695,  1647 => 694,  1643 => 693,  1634 => 689,  1630 => 688,  1627 => 687,  1623 => 685,  1617 => 684,  1610 => 679,  1601 => 675,  1597 => 674,  1594 => 673,  1592 => 672,  1584 => 671,  1581 => 670,  1571 => 668,  1569 => 667,  1561 => 666,  1557 => 665,  1550 => 662,  1547 => 661,  1543 => 659,  1540 => 658,  1537 => 657,  1532 => 656,  1529 => 655,  1527 => 654,  1518 => 651,  1514 => 650,  1502 => 645,  1500 => 644,  1495 => 643,  1491 => 641,  1488 => 640,  1486 => 639,  1477 => 633,  1462 => 627,  1458 => 625,  1454 => 624,  1446 => 622,  1443 => 621,  1435 => 619,  1429 => 617,  1427 => 616,  1424 => 615,  1422 => 614,  1418 => 613,  1412 => 612,  1397 => 602,  1383 => 593,  1375 => 588,  1348 => 564,  1344 => 563,  1340 => 561,  1336 => 559,  1329 => 556,  1322 => 552,  1315 => 548,  1308 => 544,  1303 => 541,  1300 => 540,  1298 => 539,  1295 => 538,  1291 => 537,  1282 => 533,  1278 => 532,  1275 => 531,  1271 => 529,  1265 => 528,  1258 => 523,  1249 => 519,  1245 => 518,  1242 => 517,  1239 => 516,  1233 => 515,  1230 => 514,  1220 => 512,  1218 => 511,  1210 => 510,  1206 => 509,  1200 => 506,  1195 => 505,  1191 => 503,  1188 => 502,  1186 => 501,  1179 => 500,  1176 => 499,  1174 => 498,  1168 => 495,  1156 => 490,  1154 => 489,  1149 => 488,  1145 => 486,  1142 => 485,  1140 => 484,  1131 => 478,  1116 => 472,  1112 => 470,  1108 => 469,  1100 => 467,  1097 => 466,  1089 => 464,  1083 => 462,  1081 => 461,  1078 => 460,  1076 => 459,  1072 => 458,  1066 => 457,  1051 => 447,  1037 => 438,  1029 => 433,  1002 => 409,  998 => 408,  994 => 406,  990 => 404,  983 => 401,  976 => 397,  969 => 393,  962 => 389,  957 => 386,  954 => 385,  951 => 384,  947 => 382,  938 => 378,  934 => 377,  931 => 376,  927 => 374,  921 => 373,  914 => 368,  905 => 364,  901 => 363,  898 => 362,  896 => 361,  888 => 360,  885 => 359,  875 => 357,  873 => 356,  861 => 355,  857 => 354,  850 => 351,  847 => 350,  843 => 348,  840 => 347,  838 => 346,  831 => 345,  828 => 344,  826 => 343,  820 => 340,  808 => 335,  805 => 334,  802 => 333,  798 => 331,  795 => 330,  793 => 329,  784 => 323,  769 => 317,  766 => 316,  762 => 314,  754 => 312,  751 => 311,  743 => 309,  737 => 307,  735 => 306,  732 => 305,  730 => 304,  726 => 303,  720 => 302,  705 => 292,  691 => 283,  683 => 278,  656 => 254,  652 => 253,  648 => 251,  645 => 250,  638 => 246,  631 => 242,  624 => 238,  617 => 234,  612 => 231,  609 => 230,  607 => 229,  604 => 228,  600 => 227,  591 => 223,  587 => 222,  584 => 221,  580 => 219,  574 => 218,  567 => 213,  558 => 209,  554 => 208,  551 => 207,  549 => 206,  541 => 205,  538 => 204,  528 => 202,  526 => 201,  514 => 200,  510 => 199,  503 => 196,  500 => 195,  496 => 193,  493 => 192,  490 => 191,  485 => 190,  482 => 189,  480 => 188,  474 => 185,  468 => 181,  462 => 180,  459 => 179,  456 => 178,  452 => 176,  449 => 175,  447 => 174,  438 => 168,  428 => 167,  425 => 166,  421 => 164,  413 => 162,  410 => 161,  402 => 159,  396 => 157,  394 => 156,  391 => 155,  389 => 154,  385 => 153,  379 => 152,  364 => 142,  350 => 133,  342 => 128,  315 => 104,  311 => 103,  306 => 100,  302 => 99,  295 => 96,  288 => 92,  281 => 88,  274 => 84,  269 => 81,  266 => 80,  264 => 79,  261 => 78,  257 => 77,  248 => 73,  244 => 72,  241 => 71,  237 => 69,  231 => 68,  224 => 63,  215 => 59,  211 => 58,  208 => 57,  205 => 56,  199 => 55,  196 => 54,  186 => 52,  184 => 51,  176 => 50,  172 => 49,  165 => 46,  162 => 45,  158 => 43,  155 => 42,  152 => 41,  148 => 40,  143 => 39,  141 => 38,  135 => 35,  130 => 32,  127 => 31,  114 => 28,  111 => 27,  106 => 26,  103 => 25,  95 => 22,  92 => 21,  89 => 20,  81 => 17,  78 => 16,  75 => 15,  67 => 12,  64 => 11,  61 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishiproductsblock.twig", "");
    }
}
