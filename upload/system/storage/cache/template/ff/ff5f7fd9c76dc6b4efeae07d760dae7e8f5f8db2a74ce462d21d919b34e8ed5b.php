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
class __TwigTemplate_3e0faaa9d647caf0968be47f0279cb657542567ca38087815f2a4f1fb3f6fad9 extends \Twig\Template
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
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>  
                    </div>                         
                  </div>
                </div>
        ";
            // line 173
            if ((($context["product_row"] ?? null) != 1)) {
                // line 174
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 175
                    echo "            </div>
          ";
                }
                // line 177
                echo "        ";
            }
            // line 178
            echo "        ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 179
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 184
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\">      
            ";
        // line 187
        $context["counter"] = 1;
        // line 188
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 189
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 190
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 191
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 192
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 194
                echo "              ";
            }
            // line 195
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 195);
            echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 198
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 198);
            echo "\">
                      <img src=\"";
            // line 199
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 199);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 199);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 199);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 199) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 200
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 200) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 201
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 201);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 201);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 201);
                echo "\"/>
                        ";
            }
            // line 203
            echo "                      </a>  
                      ";
            // line 204
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 204)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 204);
                echo "</span>";
            }
            echo " 
                      ";
            // line 205
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 205)) {
                // line 206
                echo "                        <div class=\"rating\">
                          ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 208
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 208) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 212
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 217
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "                        </div>
                        ";
            } else {
                // line 220
                echo "                        <div class=\"rating\">
                          ";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 222
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "                        </div>
                      ";
            }
            // line 227
            echo " 
                      ";
            // line 228
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 229
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 229)) {
                    // line 230
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 233
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 237
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 241
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 245
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 249
                echo "                      ";
            }
            // line 250
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 252
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 253
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 253);
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
            // line 277
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 282
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 282);
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
            // line 291
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 291);
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
            // line 301
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 301);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 301);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 302
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 302);
            echo "</p>
                      ";
            // line 303
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 303)) {
                // line 304
                echo "                      <p class=\"price\">
                        ";
                // line 305
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 305)) {
                    // line 306
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 306);
                    echo "
                        ";
                } else {
                    // line 308
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 308);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 308);
                    echo "</span> 
                        ";
                }
                // line 310
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 310)) {
                    // line 311
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 311);
                    echo "</span>
                        ";
                }
                // line 313
                echo "                      </p>
                      ";
            }
            // line 315
            echo "                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 316
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 316);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 316)) {
                echo " class=\"sold-out\" disabled";
            }
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>
                    </div>                             
                </div>
                </div>
        ";
            // line 322
            if ((($context["product_row"] ?? null) != 1)) {
                // line 323
                echo "          ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 324
                    echo "            </div>
          ";
                }
                // line 326
                echo "        ";
            }
            // line 327
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 328
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
        // line 333
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 336
        $context["counter"] = 1;
        // line 337
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 338
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 339
            if ((($context["product_row"] ?? null) != 1)) {
                // line 340
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 341
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 343
                echo "            ";
            }
            // line 344
            echo "              <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 344);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 347
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 347);
            echo "\">
                  <img src=\"";
            // line 348
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 348);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 348);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 348);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 348) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 349
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 349) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 350
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 350);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 350);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 350);
                echo "\"/>
                        ";
            }
            // line 352
            echo "                      </a>  
                      ";
            // line 353
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 353)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 353);
                echo "</span>";
            }
            echo " 
                      ";
            // line 354
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 354)) {
                // line 355
                echo "                        <div class=\"rating\">
                          ";
                // line 356
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 357
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 357) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 361
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 366
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                        </div>
                        ";
            } else {
                // line 369
                echo "                        <div class=\"rating\">
                          ";
                // line 370
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 371
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 375
                echo "                        </div>
                      ";
            }
            // line 377
            echo "                      ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 378
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 378)) {
                    // line 379
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 382
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 386
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 390
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 394
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 397
                echo "   
                      ";
            }
            // line 399
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 401
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 402
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 402);
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
            // line 426
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 431
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 431);
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
            // line 440
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 440);
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
            // line 450
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 450);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 450);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 451
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 451);
            echo "</p>
                  ";
            // line 452
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 452)) {
                // line 453
                echo "                  <p class=\"price\">
                    ";
                // line 454
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 454)) {
                    // line 455
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 455);
                    echo "
                    ";
                } else {
                    // line 457
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 457);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 457);
                    echo "</span> 
                    ";
                }
                // line 459
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 459)) {
                    // line 460
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 460);
                    echo "</span>
                    ";
                }
                // line 462
                echo "                  </p>
                  ";
            }
            // line 463
            echo " 
                  <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 465
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 465);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 465)) {
                echo " class=\"sold-out\" disabled";
            }
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>
                </div>                           
              </div>
                </div>
            ";
            // line 471
            if ((($context["product_row"] ?? null) != 1)) {
                // line 472
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 473
                    echo "                </div>
              ";
                }
                // line 475
                echo "            ";
            }
            echo " 
          ";
            // line 476
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 477
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
        // line 482
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
        // line 485
        $context["counter"] = 1;
        // line 486
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 487
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 488
            if ((($context["product_row"] ?? null) != 1)) {
                // line 489
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 490
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 492
                echo "            ";
            }
            echo "     
              <div class=\"item product-container\" data-countdowntime=\"";
            // line 493
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 493);
            echo "\"> 
                  <div class=\"product-thumb\">
                <div class=\"image\">
                      <a href=\"";
            // line 496
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 496);
            echo "\">
                        <img src=\"";
            // line 497
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 497);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 497);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 497);
            echo "\" class=\"img-responsive\" />
                        ";
            // line 498
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 498) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 499
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 499);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 499);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 499);
                echo "\"/>
                        ";
            }
            // line 501
            echo "                      </a>  
                      ";
            // line 502
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 502)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 502);
                echo "</span>";
            }
            // line 503
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 503)) {
                // line 504
                echo "                        <div class=\"rating\">
                          ";
                // line 505
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 506
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 506) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 510
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 515
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 516
                echo "                        </div>
                        ";
            } else {
                // line 518
                echo "                        <div class=\"rating\">
                          ";
                // line 519
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 520
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 524
                echo "                        </div>
                      ";
            }
            // line 525
            echo " 
                      ";
            // line 526
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 527
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 527)) {
                    // line 528
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 531
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 535
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 539
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 543
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 546
                echo " 
                      ";
            }
            // line 548
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 550
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 551
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 551);
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
            // line 575
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 580
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 580);
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
            // line 589
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 589);
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
            // line 599
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 599);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 599);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 600
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 600);
            echo "</p>
                  ";
            // line 601
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 601)) {
                // line 602
                echo "                  <p class=\"price\">
                    ";
                // line 603
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 603)) {
                    // line 604
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 604);
                    echo "
                    ";
                } else {
                    // line 606
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 606);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 606);
                    echo "</span> 
                    ";
                }
                // line 608
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 608)) {
                    // line 609
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 609);
                    echo "</span>
                    ";
                }
                // line 611
                echo "                  </p>
                  ";
            }
            // line 612
            echo "  
                  <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
            // line 614
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 614);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 614)) {
                echo " class=\"sold-out\" disabled";
            }
            echo "><span class=\"lblcart\">";
            echo ($context["button_cart"] ?? null);
            echo "</span>
                          </button>
                      </div>
                </div>
              </div>
                </div>
            ";
            // line 620
            if ((($context["product_row"] ?? null) != 1)) {
                // line 621
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 622
                    echo "                </div>
              ";
                }
                // line 624
                echo "            ";
            }
            echo " 
          ";
            // line 625
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 626
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
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 632
            echo "  <div class=\"tab-pane\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 632);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
            // line 635
            $context["counter"] = 1;
            // line 636
            echo "              ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 636)] ?? null) : null));
            // line 637
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 637)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 638
                echo "                ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 639
                    echo "                  ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 640
                        echo "                    <div class=\"multilevel-item\">
                  ";
                    }
                    // line 642
                    echo "                ";
                }
                // line 643
                echo "                  <div class=\"item product-container\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 643);
                echo "\"> 
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
                // line 646
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 646);
                echo "\">
                        <img src=\"";
                // line 647
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 647);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 647);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 647);
                echo "\" class=\"img-responsive\" />
                        ";
                // line 648
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 648) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 649
                    echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 649);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 649);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 649);
                    echo "\"/>
                        ";
                }
                // line 651
                echo "                      </a>  
                      ";
                // line 652
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 652)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 652);
                    echo "</span>";
                }
                echo " 
                       ";
                // line 653
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 653)) {
                    // line 654
                    echo "                        <div class=\"rating\">
                          ";
                    // line 655
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 656
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 656) < $context["i"])) {
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                        } else {
                            // line 660
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                        }
                        // line 665
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 666
                    echo "                        </div>
                        ";
                } else {
                    // line 668
                    echo "                        <div class=\"rating\">
                          ";
                    // line 669
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 670
                        echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 674
                    echo "                        </div>
                      ";
                }
                // line 675
                echo " 
                      ";
                // line 676
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 677
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 677)) {
                        // line 678
                        echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 681
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 685
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 689
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 693
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                            </div>
                          </div>
                        ";
                    }
                    // line 696
                    echo "  
                      ";
                }
                // line 698
                echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 700
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                              <a class=\"quickbox\" href=\"";
                // line 701
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 701);
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
                // line 725
                echo ($context["quick_view"] ?? null);
                echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 730
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 730);
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
                // line 739
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 739);
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
                // line 749
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 749);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 749);
                echo "</a></h4>
                      <p class=\"description\">";
                // line 750
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 750);
                echo "</p>
                      ";
                // line 751
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 751)) {
                    // line 752
                    echo "                      <p class=\"price\">
                        ";
                    // line 753
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 753)) {
                        // line 754
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 754);
                        echo "
                        ";
                    } else {
                        // line 756
                        echo "                        <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 756);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 756);
                        echo "</span> 
                        ";
                    }
                    // line 758
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 758)) {
                        // line 759
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 759);
                        echo "</span>
                        ";
                    }
                    // line 761
                    echo "                      </p>
                      ";
                }
                // line 762
                echo " 
                      <div class=\"btn-cart\">
                          <button data-toggle=\"tooltip\" title=\"";
                // line 764
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 764);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 764)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo "><span class=\"lblcart\">";
                echo ($context["button_cart"] ?? null);
                echo "</span>
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
                ";
                // line 770
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 771
                    echo "                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 772
                        echo "                    </div>
                  ";
                    }
                    // line 774
                    echo "                ";
                }
                echo " 
              ";
                // line 775
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 776
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
        // line 781
        echo "  </div>
</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 784
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
        // line 793
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 796
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 799
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 802
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 805
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 811
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
        return array (  1889 => 811,  1880 => 805,  1874 => 802,  1868 => 799,  1862 => 796,  1856 => 793,  1844 => 784,  1839 => 781,  1824 => 776,  1822 => 775,  1817 => 774,  1813 => 772,  1810 => 771,  1808 => 770,  1791 => 764,  1787 => 762,  1783 => 761,  1775 => 759,  1772 => 758,  1764 => 756,  1758 => 754,  1756 => 753,  1753 => 752,  1751 => 751,  1747 => 750,  1741 => 749,  1726 => 739,  1712 => 730,  1704 => 725,  1677 => 701,  1673 => 700,  1669 => 698,  1665 => 696,  1658 => 693,  1651 => 689,  1644 => 685,  1637 => 681,  1632 => 678,  1629 => 677,  1627 => 676,  1624 => 675,  1620 => 674,  1611 => 670,  1607 => 669,  1604 => 668,  1600 => 666,  1594 => 665,  1587 => 660,  1578 => 656,  1574 => 655,  1571 => 654,  1569 => 653,  1561 => 652,  1558 => 651,  1548 => 649,  1546 => 648,  1538 => 647,  1534 => 646,  1527 => 643,  1524 => 642,  1520 => 640,  1517 => 639,  1514 => 638,  1509 => 637,  1506 => 636,  1504 => 635,  1495 => 632,  1491 => 631,  1479 => 626,  1477 => 625,  1472 => 624,  1468 => 622,  1465 => 621,  1463 => 620,  1446 => 614,  1442 => 612,  1438 => 611,  1430 => 609,  1427 => 608,  1419 => 606,  1413 => 604,  1411 => 603,  1408 => 602,  1406 => 601,  1402 => 600,  1396 => 599,  1381 => 589,  1367 => 580,  1359 => 575,  1332 => 551,  1328 => 550,  1324 => 548,  1320 => 546,  1313 => 543,  1306 => 539,  1299 => 535,  1292 => 531,  1287 => 528,  1284 => 527,  1282 => 526,  1279 => 525,  1275 => 524,  1266 => 520,  1262 => 519,  1259 => 518,  1255 => 516,  1249 => 515,  1242 => 510,  1233 => 506,  1229 => 505,  1226 => 504,  1223 => 503,  1217 => 502,  1214 => 501,  1204 => 499,  1202 => 498,  1194 => 497,  1190 => 496,  1184 => 493,  1179 => 492,  1175 => 490,  1172 => 489,  1170 => 488,  1163 => 487,  1160 => 486,  1158 => 485,  1152 => 482,  1140 => 477,  1138 => 476,  1133 => 475,  1129 => 473,  1126 => 472,  1124 => 471,  1107 => 465,  1103 => 463,  1099 => 462,  1091 => 460,  1088 => 459,  1080 => 457,  1074 => 455,  1072 => 454,  1069 => 453,  1067 => 452,  1063 => 451,  1057 => 450,  1042 => 440,  1028 => 431,  1020 => 426,  993 => 402,  989 => 401,  985 => 399,  981 => 397,  974 => 394,  967 => 390,  960 => 386,  953 => 382,  948 => 379,  945 => 378,  942 => 377,  938 => 375,  929 => 371,  925 => 370,  922 => 369,  918 => 367,  912 => 366,  905 => 361,  896 => 357,  892 => 356,  889 => 355,  887 => 354,  879 => 353,  876 => 352,  866 => 350,  864 => 349,  852 => 348,  848 => 347,  841 => 344,  838 => 343,  834 => 341,  831 => 340,  829 => 339,  822 => 338,  819 => 337,  817 => 336,  811 => 333,  799 => 328,  796 => 327,  793 => 326,  789 => 324,  786 => 323,  784 => 322,  767 => 316,  764 => 315,  760 => 313,  752 => 311,  749 => 310,  741 => 308,  735 => 306,  733 => 305,  730 => 304,  728 => 303,  724 => 302,  718 => 301,  703 => 291,  689 => 282,  681 => 277,  654 => 253,  650 => 252,  646 => 250,  643 => 249,  636 => 245,  629 => 241,  622 => 237,  615 => 233,  610 => 230,  607 => 229,  605 => 228,  602 => 227,  598 => 226,  589 => 222,  585 => 221,  582 => 220,  578 => 218,  572 => 217,  565 => 212,  556 => 208,  552 => 207,  549 => 206,  547 => 205,  539 => 204,  536 => 203,  526 => 201,  524 => 200,  512 => 199,  508 => 198,  501 => 195,  498 => 194,  494 => 192,  491 => 191,  488 => 190,  483 => 189,  480 => 188,  478 => 187,  472 => 184,  466 => 180,  460 => 179,  457 => 178,  454 => 177,  450 => 175,  447 => 174,  445 => 173,  428 => 167,  425 => 166,  421 => 164,  413 => 162,  410 => 161,  402 => 159,  396 => 157,  394 => 156,  391 => 155,  389 => 154,  385 => 153,  379 => 152,  364 => 142,  350 => 133,  342 => 128,  315 => 104,  311 => 103,  306 => 100,  302 => 99,  295 => 96,  288 => 92,  281 => 88,  274 => 84,  269 => 81,  266 => 80,  264 => 79,  261 => 78,  257 => 77,  248 => 73,  244 => 72,  241 => 71,  237 => 69,  231 => 68,  224 => 63,  215 => 59,  211 => 58,  208 => 57,  205 => 56,  199 => 55,  196 => 54,  186 => 52,  184 => 51,  176 => 50,  172 => 49,  165 => 46,  162 => 45,  158 => 43,  155 => 42,  152 => 41,  148 => 40,  143 => 39,  141 => 38,  135 => 35,  130 => 32,  127 => 31,  114 => 28,  111 => 27,  106 => 26,  103 => 25,  95 => 22,  92 => 21,  89 => 20,  81 => 17,  78 => 16,  75 => 15,  67 => 12,  64 => 11,  61 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishiproductsblock.twig", "");
    }
}
