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
class __TwigTemplate_730fbe18604ef3527d4beec00e432bedd4873257c9beb5aea05327befe8432ed extends \Twig\Template
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
            echo "                  <div class=\"item product-thumb\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 46);
            echo "\"> 
                    <div class=\"image\">
                      <a href=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
            echo "\">
                        <img src=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
            echo "\" class=\"img-responsive\"/>
                        ";
            // line 50
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 50) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 51
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 51);
                echo "\"/>
                        ";
            }
            // line 53
            echo "                      </a>  
                      ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 54)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 54);
                echo "</span>";
            }
            // line 55
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 55)) {
                // line 56
                echo "                        <div class=\"rating\">
                          ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 58
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 58) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 62
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 67
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                        </div>
                        ";
            } else {
                // line 70
                echo "                        <div class=\"rating\">
                          ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 72
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                        </div>
                      ";
            }
            // line 77
            echo " 
                      ";
            // line 78
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 79
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 83
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 87
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 91
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 95
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 98
                echo " 
                      ";
            }
            // line 99
            echo " 
                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 102
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 103);
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
            // line 127
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 132
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
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
            // line 141
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 141);
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
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 151);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 151);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 152);
            echo "</p>
                      ";
            // line 153
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 153)) {
                // line 154
                echo "                      <p class=\"price\">
                        ";
                // line 155
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 155)) {
                    // line 156
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 156);
                    echo "
                        ";
                } else {
                    // line 158
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 158);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 158);
                    echo "</span> 
                        ";
                }
                // line 160
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 160)) {
                    // line 161
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 161);
                    echo "</span>
                        ";
                }
                // line 163
                echo "                      </p>
                      ";
            }
            // line 165
            echo "                      <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 166
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 166);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 166)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 172
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>  
                    </div>                         
                  </div>
\t\t\t\t";
            // line 177
            if ((($context["product_row"] ?? null) != 1)) {
                // line 178
                echo "\t\t\t\t\t";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 179
                    echo "\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 181
                echo "\t\t\t\t";
            }
            // line 182
            echo "\t\t\t\t";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 183
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "        </div>        
      </div>
    </div>

    <div class=\"tab-pane\" id=\"bestseller-products-block";
        // line 188
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">        
        <div class=\"owl-carousel\">      
            ";
        // line 191
        $context["counter"] = 1;
        // line 192
        echo "            ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["bestseller"] ?? null));
        // line 193
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestseller"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 194
            echo "              ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 195
                echo "                ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 196
                    echo "                  <div class=\"multilevel-item\">
                ";
                }
                // line 198
                echo "              ";
            }
            // line 199
            echo "                <div class=\"item product-thumb\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 199);
            echo "\">
                    <div class=\"image\">
                      <a href=\"";
            // line 201
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 201);
            echo "\">
                      <img src=\"";
            // line 202
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 202);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
            echo "\" class=\"img-responsive ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 202) != "")) {
                echo " no-change ";
            }
            echo "\" />
                        ";
            // line 203
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 203) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 204
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 204);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 204);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 204);
                echo "\"/>
                        ";
            }
            // line 206
            echo "                      </a>  
                      ";
            // line 207
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 207)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 207);
                echo "</span>";
            }
            echo " 
                      ";
            // line 208
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 208)) {
                // line 209
                echo "                        <div class=\"rating\">
                          ";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 211
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 211) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 215
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 220
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "                        </div>
                        ";
            } else {
                // line 223
                echo "                        <div class=\"rating\">
                          ";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 225
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "                        </div>
                      ";
            }
            // line 230
            echo " 
                      ";
            // line 231
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 232
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 232)) {
                    // line 233
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 236
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 240
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 244
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 248
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 252
                echo "                      ";
            }
            // line 253
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 255
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 256
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 256);
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
            // line 280
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 285
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 285);
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
            // line 294
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 294);
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
            // line 304
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 304);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 304);
            echo "</a></h4>
                      <p class=\"description\">";
            // line 305
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 305);
            echo "</p>
                      ";
            // line 306
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 306)) {
                // line 307
                echo "                      <p class=\"price\">
                        ";
                // line 308
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 308)) {
                    // line 309
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 309);
                    echo "
                        ";
                } else {
                    // line 311
                    echo "                        <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 311);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 311);
                    echo "</span> 
                        ";
                }
                // line 313
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 313)) {
                    // line 314
                    echo "                        <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 314);
                    echo "</span>
                        ";
                }
                // line 316
                echo "                      </p>
                      ";
            }
            // line 318
            echo "                      <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 319
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 319);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 319)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 325
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>
                    </div>                             
                </div>
\t\t\t\t";
            // line 330
            if ((($context["product_row"] ?? null) != 1)) {
                // line 331
                echo "\t\t\t\t\t";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 332
                    echo "\t\t\t\t\t  </div>
\t\t\t\t\t";
                }
                // line 334
                echo "\t\t\t\t";
            }
            // line 335
            echo "            ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 336
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
        // line 341
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\"> 
          ";
        // line 344
        $context["counter"] = 1;
        // line 345
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["new"] ?? null));
        // line 346
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 347
            if ((($context["product_row"] ?? null) != 1)) {
                // line 348
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 349
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 351
                echo "            ";
            }
            // line 352
            echo "              <div class=\"item product-thumb\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 352);
            echo "\">
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
            ";
            // line 483
            if ((($context["product_row"] ?? null) != 1)) {
                // line 484
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 485
                    echo "                </div>
              ";
                }
                // line 487
                echo "            ";
            }
            echo "\t
          ";
            // line 488
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 489
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
        // line 494
        echo ($context["tab_randomnumer"] ?? null);
        echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
        // line 497
        $context["counter"] = 1;
        // line 498
        echo "          ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["special"] ?? null));
        // line 499
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["special"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo "  
            ";
            // line 500
            if ((($context["product_row"] ?? null) != 1)) {
                // line 501
                echo "              ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 502
                    echo "                <div class=\"multilevel-item\">
              ";
                }
                // line 504
                echo "            ";
            }
            echo "\t\t  
              <div class=\"item product-thumb\" data-countdowntime=\"";
            // line 505
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 505);
            echo "\">
                <div class=\"image\">
                      <a href=\"";
            // line 507
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 507);
            echo "\">
                        <img src=\"";
            // line 508
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 508);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 508);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 508);
            echo "\" class=\"img-responsive\" />
                        ";
            // line 509
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 509) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 510
                echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 510);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 510);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 510);
                echo "\"/>
                        ";
            }
            // line 512
            echo "                      </a>  
                      ";
            // line 513
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 513)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 513);
                echo "</span>";
            }
            // line 514
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 514)) {
                // line 515
                echo "                        <div class=\"rating\">
                          ";
                // line 516
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 517
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 517) < $context["i"])) {
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                    } else {
                        // line 521
                        echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                    }
                    // line 526
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 527
                echo "                        </div>
                        ";
            } else {
                // line 529
                echo "                        <div class=\"rating\">
                          ";
                // line 530
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 531
                    echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 535
                echo "                        </div>
                      ";
            }
            // line 536
            echo " 
                      ";
            // line 537
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 538
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 538)) {
                    // line 539
                    echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 542
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 546
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 550
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                    // line 554
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                            </div>
                          </div>
                        ";
                }
                // line 557
                echo " 
                      ";
            }
            // line 559
            echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 561
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                              <a class=\"quickbox\" href=\"";
            // line 562
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 562);
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
            // line 586
            echo ($context["quick_view"] ?? null);
            echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 591
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 591);
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
            // line 600
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 600);
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
            // line 610
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 610);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 610);
            echo "</a></h4>
                  <p class=\"description\">";
            // line 611
            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 611);
            echo "</p>
                  ";
            // line 612
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 612)) {
                // line 613
                echo "                  <p class=\"price\">
                    ";
                // line 614
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 614)) {
                    // line 615
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 615);
                    echo "
                    ";
                } else {
                    // line 617
                    echo "                    <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 617);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 617);
                    echo "</span> 
                    ";
                }
                // line 619
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 619)) {
                    // line 620
                    echo "                    <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 620);
                    echo "</span>
                    ";
                }
                // line 622
                echo "                  </p>
                  ";
            }
            // line 623
            echo "  
                  <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
            // line 625
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 625);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 625)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
            // line 631
            echo ($context["button_cart"] ?? null);
            echo "</span>
                            </button>
                      </div>
                </div>
              </div>
            ";
            // line 636
            if ((($context["product_row"] ?? null) != 1)) {
                // line 637
                echo "              ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 638
                    echo "                </div>
              ";
                }
                // line 640
                echo "            ";
            }
            echo "\t
          ";
            // line 641
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 642
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
        // line 647
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 648
            echo "\t<div class=\"tab-pane\" id=\"category-block";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 648);
            echo "-";
            echo ($context["tab_randomnumer"] ?? null);
            echo "\">
      <div class=\"block_content\">       
        <div class=\"owl-carousel\">
          ";
            // line 651
            $context["counter"] = 1;
            // line 652
            echo "              ";
            $context["lastproduct"] = twig_length_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 652)] ?? null) : null));
            // line 653
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["cat"], "category_id", [], "any", false, false, false, 653)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 654
                echo "                ";
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 655
                    echo "                  ";
                    if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                        // line 656
                        echo "                    <div class=\"multilevel-item\">
                  ";
                    }
                    // line 658
                    echo "                ";
                }
                // line 659
                echo "                  <div class=\"item product-thumb\" data-countdowntime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 659);
                echo "\">
                    <div class=\"image\">
                      <a href=\"";
                // line 661
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 661);
                echo "\">
                        <img src=\"";
                // line 662
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 662);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 662);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 662);
                echo "\" class=\"img-responsive\" />
                        ";
                // line 663
                if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 663) != "") && (($context["hover_image"] ?? null) == 1))) {
                    // line 664
                    echo "                          <img class=\"product-img-extra img-responsive\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 664);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 664);
                    echo "\" src= \"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 664);
                    echo "\"/>
                        ";
                }
                // line 666
                echo "                      </a>  
                      ";
                // line 667
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 667)) {
                    echo "<span class=\"outstock-overlay\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 667);
                    echo "</span>";
                }
                echo " 
                       ";
                // line 668
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 668)) {
                    // line 669
                    echo "                        <div class=\"rating\">
                          ";
                    // line 670
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 671
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 671) < $context["i"])) {
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star gray fa-stack-2x\"></i>
                              </span> 
                            ";
                        } else {
                            // line 675
                            echo " 
                              <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                              </span> 
                            ";
                        }
                        // line 680
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 681
                    echo "                        </div>
                        ";
                } else {
                    // line 683
                    echo "                        <div class=\"rating\">
                          ";
                    // line 684
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 685
                        echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star gray fa-stack-2x\"></i>
                            </span>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 689
                    echo "                        </div>
                      ";
                }
                // line 690
                echo " 
                      ";
                // line 691
                if ((($context["product_counter"] ?? null) == 1)) {
                    // line 692
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 692)) {
                        // line 693
                        echo "                          <div class='countdown-container'>
                            <div class='countdown-days counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 696
                        echo ($context["days_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-hours counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 700
                        echo ($context["hours_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-minutes counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 704
                        echo ($context["min_name"] ?? null);
                        echo "</span>
                            </div>
                            <div class='countdown-seconds counter'>
                              <span class=\"data\"></span>
                              <span class=\"lbl\">";
                        // line 708
                        echo ($context["sec_name"] ?? null);
                        echo "</span>
                            </div>
                          </div>
                        ";
                    }
                    // line 711
                    echo "  
                      ";
                }
                // line 713
                echo "                      <div class=\"button-group\">  
                          <div class=\"btn-quickview\"> 
                            <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
                // line 715
                echo ($context["quick_view"] ?? null);
                echo "\"> 
                              <a class=\"quickbox\" href=\"";
                // line 716
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 716);
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
                // line 740
                echo ($context["quick_view"] ?? null);
                echo "</span>
                              </a>
                            </div>
                          </div>
                          <div class=\"btn-wishlist\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 745
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 745);
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
                // line 754
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 754);
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
                // line 764
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 764);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 764);
                echo "</a></h4>
                      <p class=\"description\">";
                // line 765
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 765);
                echo "</p>
                      ";
                // line 766
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 766)) {
                    // line 767
                    echo "                      <p class=\"price\">
                        ";
                    // line 768
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 768)) {
                        // line 769
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 769);
                        echo "
                        ";
                    } else {
                        // line 771
                        echo "                        <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 771);
                        echo "</span> <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 771);
                        echo "</span> 
                        ";
                    }
                    // line 773
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 773)) {
                        // line 774
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 774);
                        echo "</span>
                        ";
                    }
                    // line 776
                    echo "                      </p>
                      ";
                }
                // line 777
                echo " 
                      <div class=\"btn-cart\">
                            <button data-toggle=\"tooltip\" title=\"";
                // line 779
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 779);
                echo "');\" ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 779)) {
                    echo " class=\"sold-out\" disabled";
                }
                echo ">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                                  <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                                    <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                                </svg>
                                <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                                <span class=\"lblcart\">";
                // line 785
                echo ($context["button_cart"] ?? null);
                echo "</span>
                            </button>
                      </div>
                    </div>
                  </div>
                ";
                // line 790
                if ((($context["product_row"] ?? null) != 1)) {
                    // line 791
                    echo "                  ";
                    if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                        // line 792
                        echo "                    </div>
                  ";
                    }
                    // line 794
                    echo "                ";
                }
                echo "\t
              ";
                // line 795
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 796
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
        // line 801
        echo "  </div>
</div>
  <script type=\"text/javascript\">
    \$('#";
        // line 804
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
        // line 813
        echo ($context["mobile_column"] ?? null);
        echo "
            },
            544:{
                items:";
        // line 816
        echo ($context["tablet_column"] ?? null);
        echo "
            },
            768:{
                items:";
        // line 819
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            992:{
                items:";
        // line 822
        echo ($context["laptop_column"] ?? null);
        echo "
            },
            1200:{
                items:";
        // line 825
        echo ($context["desktop_column"] ?? null);
        echo "
            }
        }
    });   
  </script>
<script type=\"text/javascript\"><!--
\$('#";
        // line 831
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
        return array (  1914 => 831,  1905 => 825,  1899 => 822,  1893 => 819,  1887 => 816,  1881 => 813,  1869 => 804,  1864 => 801,  1849 => 796,  1847 => 795,  1842 => 794,  1838 => 792,  1835 => 791,  1833 => 790,  1825 => 785,  1810 => 779,  1806 => 777,  1802 => 776,  1794 => 774,  1791 => 773,  1783 => 771,  1777 => 769,  1775 => 768,  1772 => 767,  1770 => 766,  1766 => 765,  1760 => 764,  1745 => 754,  1731 => 745,  1723 => 740,  1696 => 716,  1692 => 715,  1688 => 713,  1684 => 711,  1677 => 708,  1670 => 704,  1663 => 700,  1656 => 696,  1651 => 693,  1648 => 692,  1646 => 691,  1643 => 690,  1639 => 689,  1630 => 685,  1626 => 684,  1623 => 683,  1619 => 681,  1613 => 680,  1606 => 675,  1597 => 671,  1593 => 670,  1590 => 669,  1588 => 668,  1580 => 667,  1577 => 666,  1567 => 664,  1565 => 663,  1557 => 662,  1553 => 661,  1547 => 659,  1544 => 658,  1540 => 656,  1537 => 655,  1534 => 654,  1529 => 653,  1526 => 652,  1524 => 651,  1515 => 648,  1511 => 647,  1499 => 642,  1497 => 641,  1492 => 640,  1488 => 638,  1485 => 637,  1483 => 636,  1475 => 631,  1460 => 625,  1456 => 623,  1452 => 622,  1444 => 620,  1441 => 619,  1433 => 617,  1427 => 615,  1425 => 614,  1422 => 613,  1420 => 612,  1416 => 611,  1410 => 610,  1395 => 600,  1381 => 591,  1373 => 586,  1346 => 562,  1342 => 561,  1338 => 559,  1334 => 557,  1327 => 554,  1320 => 550,  1313 => 546,  1306 => 542,  1301 => 539,  1298 => 538,  1296 => 537,  1293 => 536,  1289 => 535,  1280 => 531,  1276 => 530,  1273 => 529,  1269 => 527,  1263 => 526,  1256 => 521,  1247 => 517,  1243 => 516,  1240 => 515,  1237 => 514,  1231 => 513,  1228 => 512,  1218 => 510,  1216 => 509,  1208 => 508,  1204 => 507,  1199 => 505,  1194 => 504,  1190 => 502,  1187 => 501,  1185 => 500,  1178 => 499,  1175 => 498,  1173 => 497,  1167 => 494,  1155 => 489,  1153 => 488,  1148 => 487,  1144 => 485,  1141 => 484,  1139 => 483,  1131 => 478,  1116 => 472,  1112 => 470,  1108 => 469,  1100 => 467,  1097 => 466,  1089 => 464,  1083 => 462,  1081 => 461,  1078 => 460,  1076 => 459,  1072 => 458,  1066 => 457,  1051 => 447,  1037 => 438,  1029 => 433,  1002 => 409,  998 => 408,  994 => 406,  990 => 404,  983 => 401,  976 => 397,  969 => 393,  962 => 389,  957 => 386,  954 => 385,  951 => 384,  947 => 382,  938 => 378,  934 => 377,  931 => 376,  927 => 374,  921 => 373,  914 => 368,  905 => 364,  901 => 363,  898 => 362,  896 => 361,  888 => 360,  885 => 359,  875 => 357,  873 => 356,  861 => 355,  857 => 354,  851 => 352,  848 => 351,  844 => 349,  841 => 348,  839 => 347,  832 => 346,  829 => 345,  827 => 344,  821 => 341,  809 => 336,  806 => 335,  803 => 334,  799 => 332,  796 => 331,  794 => 330,  786 => 325,  771 => 319,  768 => 318,  764 => 316,  756 => 314,  753 => 313,  745 => 311,  739 => 309,  737 => 308,  734 => 307,  732 => 306,  728 => 305,  722 => 304,  707 => 294,  693 => 285,  685 => 280,  658 => 256,  654 => 255,  650 => 253,  647 => 252,  640 => 248,  633 => 244,  626 => 240,  619 => 236,  614 => 233,  611 => 232,  609 => 231,  606 => 230,  602 => 229,  593 => 225,  589 => 224,  586 => 223,  582 => 221,  576 => 220,  569 => 215,  560 => 211,  556 => 210,  553 => 209,  551 => 208,  543 => 207,  540 => 206,  530 => 204,  528 => 203,  516 => 202,  512 => 201,  506 => 199,  503 => 198,  499 => 196,  496 => 195,  493 => 194,  488 => 193,  485 => 192,  483 => 191,  477 => 188,  471 => 184,  465 => 183,  462 => 182,  459 => 181,  455 => 179,  452 => 178,  450 => 177,  442 => 172,  427 => 166,  424 => 165,  420 => 163,  412 => 161,  409 => 160,  401 => 158,  395 => 156,  393 => 155,  390 => 154,  388 => 153,  384 => 152,  378 => 151,  363 => 141,  349 => 132,  341 => 127,  314 => 103,  310 => 102,  305 => 99,  301 => 98,  294 => 95,  287 => 91,  280 => 87,  273 => 83,  268 => 80,  265 => 79,  263 => 78,  260 => 77,  256 => 76,  247 => 72,  243 => 71,  240 => 70,  236 => 68,  230 => 67,  223 => 62,  214 => 58,  210 => 57,  207 => 56,  204 => 55,  198 => 54,  195 => 53,  185 => 51,  183 => 50,  175 => 49,  171 => 48,  165 => 46,  162 => 45,  158 => 43,  155 => 42,  152 => 41,  148 => 40,  143 => 39,  141 => 38,  135 => 35,  130 => 32,  127 => 31,  114 => 28,  111 => 27,  106 => 26,  103 => 25,  95 => 22,  92 => 21,  89 => 20,  81 => 17,  78 => 16,  75 => 15,  67 => 12,  64 => 11,  61 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishiproductsblock.twig", "");
    }
}
