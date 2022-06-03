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
class __TwigTemplate_a6dcea567da2e9ef673169f02e9e4f96077bffc1154d35cc98eacbc29d210d41 extends \Twig\Template
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
        echo "\t";
        if (($context["category"] ?? null)) {
            // line 26
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                echo "\t\t  <li class=\"nav-item\">
\t\t\t<a class=\"nav-link\" href=\"#category-block";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 28);
                echo "-";
                echo ($context["tab_randomnumer"] ?? null);
                echo "\" data-toggle=\"tab\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                echo "</a>
\t\t  </li>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t";
        }
        // line 32
        echo "\t</ul>

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
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 173
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>  
                    </div>                         
                </div>
\t\t\t\t";
            // line 178
            if ((($context["product_row"] ?? null) != 1)) {
                // line 179
                echo "\t\t\t\t\t";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 180
                    echo "\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t";
            }
            // line 183
            echo "\t\t\t\t";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 184
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 189
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\">      
            ";
        // line 192
        $context["counter"] = 1;
        // line 193
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 194
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 195
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 196
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 197
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 199
                echo "              ";
            }
            // line 200
            echo "                <div class=\"item product-container\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 200);
            echo "\">
                  <div class=\"product-thumb\">
                    <div class=\"image\">
                      <a href=\"";
            // line 203
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 203);
            echo "\">
                        <img src=\"";
            // line 204
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 204);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 204);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 204);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 204) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 205
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 205) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 206
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 206);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 206);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 206);
                echo "\"/>
                        ";
            }
            // line 208
            echo "                      </a>  
                      ";
            // line 209
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 209)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 209);
                echo "</span>";
            }
            echo " 
                      ";
            // line 210
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 210)) {
                // line 211
                echo "                        <div class=\"rating\">
                          ";
                // line 212
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 213
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 213) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 217
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 222
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "                        </div>
                        ";
            } else {
                // line 225
                echo "                        <div class=\"rating\">
                          ";
                // line 226
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 227
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 231
                echo "                        </div>
                      ";
            }
            // line 232
            echo " 
                      ";
            // line 233
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 234
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 234)) {
                    // line 235
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 238
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 242
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 246
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 250
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 254
                echo "                      ";
            }
            // line 255
            echo "                      <div class=\"button-group\">  
                        <div class=\"btn-quickview\"> 
                          <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 257
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                            <a class=\"quickbox\" href=\"";
            // line 258
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 258);
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
            // line 282
            echo ($context["quick_view"] ?? null);
            echo "</span>
                            </a>
                          </div>
                        </div>
                        <div class=\"btn-wishlist\">
                          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 287
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 287);
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
            // line 296
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 296);
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
            // line 306
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 306);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 306);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 307
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 307);
            echo "</p>
                      ";
            // line 308
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 308)) {
                // line 309
                echo "                      <p class=\"price\">
                        ";
                // line 310
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 310)) {
                    // line 311
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 311);
                    echo "
                        ";
                } else {
                    // line 313
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 313);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 313);
                    echo "</span> 
                        ";
                }
                // line 315
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 315)) {
                    // line 316
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 316);
                    echo "</span>
                        ";
                }
                // line 318
                echo "                      </p>
                      ";
            }
            // line 320
            echo "                      <div class=\"btn-cart\">
                        <button data-toggle=\"tooltip\" title=\"";
            // line 321
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 321);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 321)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                              <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                            </svg>
                            <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                            <span class=\"lblcart\">";
            // line 327
            echo ($context["button_cart"] ?? null);
            echo "</span>
                        </button>
                      </div>
                    </div> 
                  </div>                            
                </div>
\t\t\t\t";
            // line 333
            if ((($context["product_row"] ?? null) != 1)) {
                // line 334
                echo "\t\t\t\t\t";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 335
                    echo "\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 337
                echo "\t\t\t\t";
            }
            // line 338
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 339
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
        // line 344
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 347
        $context["counter"] = 1;
        // line 348
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 349
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 350
            if ((($context["product_row"] ?? null) != 1)) {
                // line 351
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 352
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 354
                echo "            ";
            }
            // line 355
            echo "              <div class=\"item product-thumb\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 355);
            echo "\">
                <div class=\"image\">
                      <a href=\"";
            // line 357
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 357);
            echo "\">
                  <img src=\"";
            // line 358
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 358);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 358);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 358);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 358) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 359
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 359) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 360
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 360);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 360);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 360);
                echo "\"/>
                        ";
            }
            // line 362
            echo "                      </a>  
                      ";
            // line 363
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 363)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 363);
                echo "</span>";
            }
            echo " 
                      ";
            // line 364
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 364)) {
                // line 365
                echo "                        <div class=\"rating\">
                          ";
                // line 366
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 367
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 367) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 371
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 376
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 377
                echo "                        </div>
                        ";
            } else {
                // line 379
                echo "                        <div class=\"rating\">
                          ";
                // line 380
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 381
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                echo "                        </div>
                      ";
            }
            // line 387
            echo "                      ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 388
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 388)) {
                    // line 389
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 392
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 396
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 400
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 404
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 407
                echo "   
                      ";
            }
            // line 409
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 411
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 412
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 412);
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
            // line 436
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 441
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 441);
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
            // line 450
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 450);
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
            // line 460
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 460);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 460);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 461
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 461);
            echo "</p>
                  ";
            // line 462
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 462)) {
                // line 463
                echo "                  <p class=\"price\">
                    ";
                // line 464
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 464)) {
                    // line 465
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 465);
                    echo "
                    ";
                } else {
                    // line 467
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 467);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 467);
                    echo "</span> 
                    ";
                }
                // line 469
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 469)) {
                    // line 470
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 470);
                    echo "</span>
                    ";
                }
                // line 472
                echo "                  </p>
                  ";
            }
            // line 473
            echo " 
                  <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 475
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 475);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 475)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 481
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>
                </div>                           
              </div>
            ";
            // line 486
            if ((($context["product_row"] ?? null) != 1)) {
                // line 487
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 488
                    echo "                </div>
              ";
                }
                // line 490
                echo "            ";
            }
            echo "\t
          ";
            // line 491
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 492
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
        // line 497
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
        // line 500
        $context["counter"] = 1;
        // line 501
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 502
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 503
            if ((($context["product_row"] ?? null) != 1)) {
                // line 504
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 505
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 507
                echo "            ";
            }
            echo "\t\t  
              <div class=\"item product-thumb\" data-countdowntime=\"";
            // line 508
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 508);
            echo "\">
                <div class=\"image\">
                      <a href=\"";
            // line 510
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 510);
            echo "\">
                        <img src=\"";
            // line 511
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 511);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 511);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 511);
            echo "\" class=\"img-responsive\" />
                        ";
            // line 512
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 512) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 513
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 513);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 513);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 513);
                echo "\"/>
                        ";
            }
            // line 515
            echo "                      </a>  
                      ";
            // line 516
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 516)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 516);
                echo "</span>";
            }
            // line 517
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 517)) {
                // line 518
                echo "                        <div class=\"rating\">
                          ";
                // line 519
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 520
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 520) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 524
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 529
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 530
                echo "                        </div>
                        ";
            } else {
                // line 532
                echo "                        <div class=\"rating\">
                          ";
                // line 533
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 534
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 538
                echo "                        </div>
                      ";
            }
            // line 539
            echo " 
                      ";
            // line 540
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 541
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 541)) {
                    // line 542
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 545
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 549
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 553
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 557
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 560
                echo " 
                      ";
            }
            // line 562
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 564
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 565
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 565);
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
            // line 589
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 594
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 594);
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
            // line 603
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 603);
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
            // line 613
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 613);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 613);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 614
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 614);
            echo "</p>
                  ";
            // line 615
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 615)) {
                // line 616
                echo "                  <p class=\"price\">
                    ";
                // line 617
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 617)) {
                    // line 618
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 618);
                    echo "
                    ";
                } else {
                    // line 620
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 620);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 620);
                    echo "</span> 
                    ";
                }
                // line 622
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 622)) {
                    // line 623
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 623);
                    echo "</span>
                    ";
                }
                // line 625
                echo "                  </p>
                  ";
            }
            // line 626
            echo "  
                  <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 628
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 628);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 628)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 634
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
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
            echo "\t
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
\t
\t";
        // line 650
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 651
            echo "\t<div class=\"tab-pane\" id=\"category-block";
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
                echo "                  <div class=\"item product-thumb\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 662);
                echo "\">
                    <div class=\"image\">
                      <a href=\"";
                // line 664
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 664);
                echo "\">
                        <img src=\"";
                // line 665
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 665);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 665);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 665);
                echo "\" class=\"img-responsive\" />
                        ";
                // line 666
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 666) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 667
                    echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 667);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 667);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 667);
                    echo "\"/>
                        ";
                }
                // line 669
                echo "                      </a>  
                      ";
                // line 670
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 670)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 670);
                    echo "</span>";
                }
                echo " 
                       ";
                // line 671
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 671)) {
                    // line 672
                    echo "                        <div class=\"rating\">
                          ";
                    // line 673
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 674
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 674) < $context["i"])) {
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                        } else {
                            // line 678
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                        }
                        // line 683
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 684
                    echo "                        </div>
                        ";
                } else {
                    // line 686
                    echo "                        <div class=\"rating\">
                          ";
                    // line 687
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 688
                        echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 692
                    echo "                        </div>
                      ";
                }
                // line 693
                echo " 
                      ";
                // line 694
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 695
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 695)) {
                        // line 696
                        echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 699
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 703
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 707
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 711
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                            </div>
                          </div>
                        ";
                    }
                    // line 714
                    echo "  
                      ";
                }
                // line 716
                echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 718
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                              <a class=\"quickbox\" href=\"";
                // line 719
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 719);
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
                // line 743
                echo ($context["quick_view"] ?? null);
                echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 748
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 748);
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
                // line 757
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 757);
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
                // line 767
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 767);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 767);
                echo "</a></h4>
                      <p class=\"description\">";
                // line 768
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 768);
                echo "</p>
                      ";
                // line 769
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 769)) {
                    // line 770
                    echo "                      <p class=\"price\">
                        ";
                    // line 771
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 771)) {
                        // line 772
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 772);
                        echo "
                        ";
                    } else {
                        // line 774
                        echo "                        <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 774);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 774);
                        echo "</span> 
                        ";
                    }
                    // line 776
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 776)) {
                        // line 777
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 777);
                        echo "</span>
                        ";
                    }
                    // line 779
                    echo "                      </p>
                      ";
                }
                // line 780
                echo " 
                      <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
                // line 782
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 782);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 782)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
                // line 788
                echo ($context["button_cart"] ?? null);
                echo "</span>
                            </button>
                      </div>
                    </div>
                  </div>
                ";
                // line 793
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 794
                    echo "                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 795
                        echo "                    </div>
                  ";
                    }
                    // line 797
                    echo "                ";
                }
                echo "\t
              ";
                // line 798
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 799
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
            </div>        
          </div>
        </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 804
        echo "  </div>
</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 807
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
        // line 816
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 819
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 822
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 825
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 828
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 834
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
        return array (  1917 => 834,  1908 => 828,  1902 => 825,  1896 => 822,  1890 => 819,  1884 => 816,  1872 => 807,  1867 => 804,  1852 => 799,  1850 => 798,  1845 => 797,  1841 => 795,  1838 => 794,  1836 => 793,  1828 => 788,  1813 => 782,  1809 => 780,  1805 => 779,  1797 => 777,  1794 => 776,  1786 => 774,  1780 => 772,  1778 => 771,  1775 => 770,  1773 => 769,  1769 => 768,  1763 => 767,  1748 => 757,  1734 => 748,  1726 => 743,  1699 => 719,  1695 => 718,  1691 => 716,  1687 => 714,  1680 => 711,  1673 => 707,  1666 => 703,  1659 => 699,  1654 => 696,  1651 => 695,  1649 => 694,  1646 => 693,  1642 => 692,  1633 => 688,  1629 => 687,  1626 => 686,  1622 => 684,  1616 => 683,  1609 => 678,  1600 => 674,  1596 => 673,  1593 => 672,  1591 => 671,  1583 => 670,  1580 => 669,  1570 => 667,  1568 => 666,  1560 => 665,  1556 => 664,  1550 => 662,  1547 => 661,  1543 => 659,  1540 => 658,  1537 => 657,  1532 => 656,  1529 => 655,  1527 => 654,  1518 => 651,  1514 => 650,  1502 => 645,  1500 => 644,  1495 => 643,  1491 => 641,  1488 => 640,  1486 => 639,  1478 => 634,  1463 => 628,  1459 => 626,  1455 => 625,  1447 => 623,  1444 => 622,  1436 => 620,  1430 => 618,  1428 => 617,  1425 => 616,  1423 => 615,  1419 => 614,  1413 => 613,  1398 => 603,  1384 => 594,  1376 => 589,  1349 => 565,  1345 => 564,  1341 => 562,  1337 => 560,  1330 => 557,  1323 => 553,  1316 => 549,  1309 => 545,  1304 => 542,  1301 => 541,  1299 => 540,  1296 => 539,  1292 => 538,  1283 => 534,  1279 => 533,  1276 => 532,  1272 => 530,  1266 => 529,  1259 => 524,  1250 => 520,  1246 => 519,  1243 => 518,  1240 => 517,  1234 => 516,  1231 => 515,  1221 => 513,  1219 => 512,  1211 => 511,  1207 => 510,  1202 => 508,  1197 => 507,  1193 => 505,  1190 => 504,  1188 => 503,  1181 => 502,  1178 => 501,  1176 => 500,  1170 => 497,  1158 => 492,  1156 => 491,  1151 => 490,  1147 => 488,  1144 => 487,  1142 => 486,  1134 => 481,  1119 => 475,  1115 => 473,  1111 => 472,  1103 => 470,  1100 => 469,  1092 => 467,  1086 => 465,  1084 => 464,  1081 => 463,  1079 => 462,  1075 => 461,  1069 => 460,  1054 => 450,  1040 => 441,  1032 => 436,  1005 => 412,  1001 => 411,  997 => 409,  993 => 407,  986 => 404,  979 => 400,  972 => 396,  965 => 392,  960 => 389,  957 => 388,  954 => 387,  950 => 385,  941 => 381,  937 => 380,  934 => 379,  930 => 377,  924 => 376,  917 => 371,  908 => 367,  904 => 366,  901 => 365,  899 => 364,  891 => 363,  888 => 362,  878 => 360,  876 => 359,  864 => 358,  860 => 357,  854 => 355,  851 => 354,  847 => 352,  844 => 351,  842 => 350,  835 => 349,  832 => 348,  830 => 347,  824 => 344,  812 => 339,  809 => 338,  806 => 337,  802 => 335,  799 => 334,  797 => 333,  788 => 327,  773 => 321,  770 => 320,  766 => 318,  758 => 316,  755 => 315,  747 => 313,  741 => 311,  739 => 310,  736 => 309,  734 => 308,  730 => 307,  724 => 306,  709 => 296,  695 => 287,  687 => 282,  660 => 258,  656 => 257,  652 => 255,  649 => 254,  642 => 250,  635 => 246,  628 => 242,  621 => 238,  616 => 235,  613 => 234,  611 => 233,  608 => 232,  604 => 231,  595 => 227,  591 => 226,  588 => 225,  584 => 223,  578 => 222,  571 => 217,  562 => 213,  558 => 212,  555 => 211,  553 => 210,  545 => 209,  542 => 208,  532 => 206,  530 => 205,  518 => 204,  514 => 203,  507 => 200,  504 => 199,  500 => 197,  497 => 196,  494 => 195,  489 => 194,  486 => 193,  484 => 192,  478 => 189,  472 => 185,  466 => 184,  463 => 183,  460 => 182,  456 => 180,  453 => 179,  451 => 178,  443 => 173,  428 => 167,  425 => 166,  421 => 164,  413 => 162,  410 => 161,  402 => 159,  396 => 157,  394 => 156,  391 => 155,  389 => 154,  385 => 153,  379 => 152,  364 => 142,  350 => 133,  342 => 128,  315 => 104,  311 => 103,  306 => 100,  302 => 99,  295 => 96,  288 => 92,  281 => 88,  274 => 84,  269 => 81,  266 => 80,  264 => 79,  261 => 78,  257 => 77,  248 => 73,  244 => 72,  241 => 71,  237 => 69,  231 => 68,  224 => 63,  215 => 59,  211 => 58,  208 => 57,  205 => 56,  199 => 55,  196 => 54,  186 => 52,  184 => 51,  176 => 50,  172 => 49,  165 => 46,  162 => 45,  158 => 43,  155 => 42,  152 => 41,  148 => 40,  143 => 39,  141 => 38,  135 => 35,  130 => 32,  127 => 31,  114 => 28,  111 => 27,  106 => 26,  103 => 25,  95 => 22,  92 => 21,  89 => 20,  81 => 17,  78 => 16,  75 => 15,  67 => 12,  64 => 11,  61 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishiproductsblock.twig", "");
    }
}
