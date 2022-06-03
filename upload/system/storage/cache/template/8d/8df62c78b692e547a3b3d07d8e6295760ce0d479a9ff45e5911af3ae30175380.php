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

/* glamour/template/extension/module/ishispecialblock.twig */
class __TwigTemplate_6b3bc9f6e4dd588fe36ce067fb3cdfbfa7e175ca3c1ec318b065e3eb4a922e81 extends \Twig\Template
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
        echo "<section class=\"ishispecial container\">
  <div class=\"row\">
  <h2 class=\"home-title\">";
        // line 3
        echo ($context["heading"] ?? null);
        echo "</h2>
  <div id=\"";
        // line 4
        echo ($context["ishi_randomnumer"] ?? null);
        echo "\" class=\"ishispecialblock owl-carousel\">
    ";
        // line 5
        $context["counter"] = 1;
        // line 6
        echo "    ";
        $context["lastproduct"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "\t  ";
            if ((($context["product_row"] ?? null) != 1)) {
                // line 9
                echo "        ";
                if (((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 1)) {
                    // line 10
                    echo "            <div class=\"multilevel-item\">
        ";
                }
                // line 12
                echo "      ";
            }
            // line 13
            echo "      <div class=\"product-layout item\" data-countdowntime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 13);
            echo "\">
        <div class=\"product-container\">
          <div class=\"product-thumb\"> 
            <div class=\"image\">
              <a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
            echo "\">
                <img src=\"";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
            echo "\" class=\"img-responsive\" />
                ";
            // line 19
            if (((twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 19) != "") && (($context["hover_image"] ?? null) == 1))) {
                // line 20
                echo "                  <img class=\"product-img-extra img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                echo "\" src= \"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "extra", [], "any", false, false, false, 20);
                echo "\"/>
                ";
            }
            // line 22
            echo "              </a>  
              ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 23)) {
                echo "<span class=\"outstock-overlay\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 23);
                echo "</span>";
            }
            echo " 
              ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 24)) {
                // line 25
                echo "                <div class=\"rating\">
                  ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 27
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 27) < $context["i"])) {
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star gray fa-stack-2x\"></i>
                      </span> 
                    ";
                    } else {
                        // line 31
                        echo " 
                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star yellow fa-stack-2x\"></i>
                      </span> 
                    ";
                    }
                    // line 36
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                </div>
                ";
            } else {
                // line 39
                echo "                <div class=\"rating\">
                  ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 41
                    echo "                  <span class=\"fa fa-stack\">
                    <i class=\"fa fa-star gray fa-stack-2x\"></i>
                    </span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                </div>
              ";
            }
            // line 47
            echo "              ";
            if ((($context["product_counter"] ?? null) == 1)) {
                // line 48
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                  <div class='countdown-container'>
                    <div class='countdown-days counter'>
                      <span class=\"data\"></span>
                      <span class=\"lbl\">";
                    // line 52
                    echo ($context["days_name"] ?? null);
                    echo "</span>
                    </div>
                    <div class='countdown-hours counter'>
                      <span class=\"data\"></span>
                      <span class=\"lbl\">";
                    // line 56
                    echo ($context["hours_name"] ?? null);
                    echo "</span>
                    </div>
                    <div class='countdown-minutes counter'>
                      <span class=\"data\"></span>
                      <span class=\"lbl\">";
                    // line 60
                    echo ($context["min_name"] ?? null);
                    echo "</span>
                    </div>
                    <div class='countdown-seconds counter'>
                      <span class=\"data\"></span>
                      <span class=\"lbl\">";
                    // line 64
                    echo ($context["sec_name"] ?? null);
                    echo "</span>
                    </div>
                  </div>
                ";
                }
                // line 67
                echo "   
              ";
            }
            // line 69
            echo "              <div class=\"button-group\">  
                <div class=\"btn-quickview\"> 
                  <div class=\"quickview-button button\" data-toggle=\"tooltip\" title=\" ";
            // line 71
            echo ($context["quick_view"] ?? null);
            echo "\"> 
                    <a class=\"quickbox\" href=\"";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 72);
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
            // line 96
            echo ($context["quick_view"] ?? null);
            echo "</span>
                    </a>
                  </div>
                </div>
                <div class=\"btn-wishlist\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 101
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 101);
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
            // line 110
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 110);
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
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 120);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 120);
            echo "</a></h4>
              <p class=\"description\">";
            // line 121
            echo (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 121), 0, 60) . "...");
            echo "</p>          
              ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 122)) {
                // line 123
                echo "              <p class=\"price\">
                ";
                // line 124
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 125);
                    echo "
                ";
                } else {
                    // line 127
                    echo "                <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 127);
                    echo "</span> <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 127);
                    echo "</span> 
                ";
                }
                // line 129
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 129)) {
                    // line 130
                    echo "                <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 130);
                    echo "</span>
                ";
                }
                // line 132
                echo "              </p>
              ";
            }
            // line 134
            echo "              <div class=\"btn-cart\">
                <button data-toggle=\"tooltip\" title=\"";
            // line 135
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 135);
            echo "');\" ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "stock_status", [], "any", false, false, false, 135)) {
                echo " class=\"sold-out\" disabled";
            }
            echo ">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" style=\"display: none;\">
                      <symbol id=\"shopping-cart-button1\" viewBox=\"0 0 1000 1000\"><title>shopping-cart-button1</title>
                        <path d=\"M405.387,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S440.588,362.612,405.387,362.612zM405.387,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536c14.083,0,25.536,11.453,25.536,25.536S419.47,451.988,405.387,451.988z\"/><path d=\"M507.927,115.875c-3.626-4.641-9.187-7.348-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574,21.704,0,30.278,0,40.856s8.574,19.152,19.152,19.152h48.085l62.244,260.443c2.062,8.625,9.768,14.702,18.629,14.702h298.135c8.80,0,16.477-6.001,18.59-14.543l46.604-188.329C512.849,126.562,511.553,120.516,507.927,115.875zM431.261,296.85H163.227l-35.853-150.019h341.003L431.261,296.85z\"/><path d=\"M173.646,362.612c-35.202,0-63.84,28.639-63.84,63.84s28.639,63.84,63.84,63.84s63.84-28.639,63.84-63.84S208.847,362.612,173.646,362.612z M173.646,451.988c-14.083,0-25.536-11.453-25.536-25.536s11.453-25.536,25.536-25.536s25.536,11.453,25.536,25.536S187.729,451.988,173.646,451.988z\"/></symbol>
                    </svg>
                    <svg class=\"icon\" viewBox=\"0 0 30 30\"><use xlink:href=\"#shopping-cart-button1\" x=\"18%\" y=\"25%\"></use></svg>
                    <span class=\"lblcart\">";
            // line 141
            echo ($context["button_cart"] ?? null);
            echo "</span>
                </button>
              </div>    
            </div>
          </div>
        </div>
      </div>
\t    ";
            // line 148
            if ((($context["product_row"] ?? null) != 1)) {
                // line 149
                echo "        ";
                if ((((($context["counter"] ?? null) % ($context["product_row"] ?? null)) == 0) || (($context["counter"] ?? null) == ($context["lastproduct"] ?? null)))) {
                    // line 150
                    echo "      </div>
       ";
                }
                // line 152
                echo "       ";
            }
            // line 153
            echo "      ";
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 154
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
  </div>
  </div>
  <script type=\"text/javascript\">
    \$('#";
        // line 158
        echo ($context["ishi_randomnumer"] ?? null);
        echo "').owlCarousel({
        loop:true,
        nav:true,    
        dots:false,  
        rewind: true,
        rtl: \$('html').attr('dir') == 'rtl'? true : false,
        navText: [\"<i class='fa fa-angle-left'></i>\",\"<i class='fa fa-angle-right'></i>\"],
        responsive:{
          0:{
              items:";
        // line 167
        echo ($context["mobile_column"] ?? null);
        echo "
          },
          544:{
              items:";
        // line 170
        echo ($context["tablet_column"] ?? null);
        echo "
          },
          768:{ 
              items:";
        // line 173
        echo ($context["laptop_column"] ?? null);
        echo "
          },
          992:{
              items:";
        // line 176
        echo ($context["laptop_column"] ?? null);
        echo "
          },
          1200:{
              items:";
        // line 179
        echo ($context["desktop_column"] ?? null);
        echo "
          }
        }
    });   
  </script>
</section>";
    }

    public function getTemplateName()
    {
        return "glamour/template/extension/module/ishispecialblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 179,  415 => 176,  409 => 173,  403 => 170,  397 => 167,  385 => 158,  374 => 154,  371 => 153,  368 => 152,  364 => 150,  361 => 149,  359 => 148,  349 => 141,  334 => 135,  331 => 134,  327 => 132,  319 => 130,  316 => 129,  308 => 127,  302 => 125,  300 => 124,  297 => 123,  295 => 122,  291 => 121,  285 => 120,  270 => 110,  256 => 101,  248 => 96,  221 => 72,  217 => 71,  213 => 69,  209 => 67,  202 => 64,  195 => 60,  188 => 56,  181 => 52,  176 => 49,  173 => 48,  170 => 47,  166 => 45,  157 => 41,  153 => 40,  150 => 39,  146 => 37,  140 => 36,  133 => 31,  124 => 27,  120 => 26,  117 => 25,  115 => 24,  107 => 23,  104 => 22,  94 => 20,  92 => 19,  84 => 18,  80 => 17,  72 => 13,  69 => 12,  65 => 10,  62 => 9,  59 => 8,  54 => 7,  51 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/extension/module/ishispecialblock.twig", "");
    }
}
