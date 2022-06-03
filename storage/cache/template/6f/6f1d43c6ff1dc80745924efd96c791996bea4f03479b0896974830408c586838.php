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

/* glamour/template/checkout/mlm_register.twig */
class __TwigTemplate_ad88f0473c2d360d0ba33341f3fa023aedccf852b9656316c520005a52dcb4c5 extends \Twig\Template
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
        echo "    
    <style >

      .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: x-large;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

  .h2-new {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}

  .modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 0 solid rgba(0, 0, 0, 0.2);
    border-radius: 0.4375
rem
;
    box-shadow: 0 15px 35px rgb(50 50 93 / 20%), 0 5px 15px rgb(0 0 0 / 17%);
    outline: 0;
}
    .modal-title {
    margin-bottom: 0;
    line-height: 1.1;
    }

  

      .modal-header {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 1.25rem;
    border-bottom: 0 solid #e9ecef;
    border-top-left-radius: 0.4375rem;
    border-top-right-radius: 0.4375rem;
  }
  .pt-0, .py-0 {
    padding-top: 0 !important;
}
/*.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}*/
.col-12 {
    flex: 0 0 100%;
    max-width: 100%;
}
ol, ul, dl {
    margin-top: 0;
    margin-bottom: 1
rem
;
}
ol {
       display: block;
    list-style-type: decimal;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
    font-size: 16px;
    font-weight: 900;
    color: #333;
}

.label2 {
    font-size: 14px;
    font-weight: 600;
    color: #232323;
}

.btn2 {
    display: inline-block;
    font-weight: 600;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1pxsolid transparent;
    padding: 0.625rem1.25rem;
    font-size: 0.9rem;
    line-height: 1.5;
    border-radius: 0.375rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.el-upload-dragger:hover {
    border-color: #409EFF;
}

.el-upload-dragger {
    background-color: #fff;
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    box-sizing: border-box;
    width: 360px;
    height: 180px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

upload-dragger {
    -webkit-box-sizing: border-box;
    cursor: pointer;
}

/*label {
    display: inline-block;
    margin-bottom: 0.5rem;
}*/








      </style>


      <style>

     @import url(https://fonts.googleapis.com/icon?family=Material+Icons);
  @import url(\"https://fonts.googleapis.com/css?family=Raleway\");


.wrapper {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

 

.box {
  display: block;
  min-width: 300px;
  height: 300px;
  margin: 10px;
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  overflow: hidden;
}

.upload-options {
  position: relative;
  height: 75px;
  background-color: cadetblue;
  cursor: pointer;
  overflow: hidden;
  text-align: center;
  transition: background-color ease-in-out 150ms;
}
.upload-options:hover {
  background-color: #7fb1b3;
}
.upload-options input {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.upload-options label {
  display: flex;
  align-items: center;
  width: 100%;
  height: 100%;
  font-weight: 400;
  text-overflow: ellipsis;
  white-space: nowrap;
  cursor: pointer;
  overflow: hidden;
}
.upload-options label::after {
  content: \"add\";
  font-family: \"Material Icons\";
  position: absolute;
  font-size: 2.5rem;
  color: #e6e6e6;
  top: calc(50% - 2.5rem);
  left: calc(50% - 1.25rem);
  z-index: 0;
}
.upload-options label span {
  display: inline-block;
  width: 50%;
  height: 100%;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  vertical-align: middle;
  text-align: center;
}
.upload-options label span:hover i.material-icons {
  color: lightgray;
}

.js--image-preview {
  height: 225px;
  width: 100%;
  position: relative;
  overflow: hidden;
  background-image: url(\"\");
  background-color: white;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}
.js--image-preview::after {
  content: \"photo_size_select_actual\";
  font-family: \"Material Icons\";
  position: relative;
  font-size: 4.5em;
  color: #e6e6e6;
  top: calc(50% - 3rem);
  left: calc(50% - 2.25rem);
  z-index: 0;
}
.js--image-preview.js--no-default::after {
  display: none;
}
.js--image-preview:nth-child(2) {
  background-image: url(\"http://bastianandre.at/giphy.gif\");
}

i.material-icons {
  transition: color 100ms ease-in-out;
  font-size: 2.25em;
  line-height: 55px;
  color: white;
  display: block;
}

.drop {
  display: block;
  position: absolute;
  background: rgba(95, 158, 160, 0.2);
  border-radius: 100%;
  transform: scale(0);
}

.animate {
  -webkit-animation: ripple 0.4s linear;
          animation: ripple 0.4s linear;
}

@-webkit-keyframes ripple {
  100% {
    opacity: 0;
    transform: scale(2.5);
  }
}

@keyframes ripple {
  100% {
    opacity: 0;
    transform: scale(2.5);
  }
}
.btn2:hover {
    box-shadow: 0 7px 14px rgb(50 50 93 / 10%), 0 3px 6px rgb(0 0 0 / 8%);
    transform: translateY(-1px);
}

.btn-secondary2:hover {
    color: #212529;
    background-color: white;
    border-color: white;
}
.btn-secondary2 {
    color: #212529;
    background-color: #fff;
    border-color: #fff;
    box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
}

.btn2 {
    position: relative;
    text-transform: none;
    transition: all 0.15s ease;
    letter-spacing: 0.025em;
    font-size: 0.875rem;
    will-change: transform;
}

.btn2 {
    /* display: inline-block; */
    font-weight: 600;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1pxsolid transparent;
    padding: 0.625rem1.25rem;
    font-size: 0.9rem;
    line-height: 1.5;
    border-radius: 0.375rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

/*input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}*/
.form-group {
    margin-bottom: 15px;
    text-align-last: left;
}
  </style>

    



      <div class=\"form-group required\">
    
      ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 354
            echo "      
      ";
            // line 355
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 355) == "account")) {
                // line 356
                echo "      
      ";
                // line 357
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 357) == "select")) {
                    // line 358
                    echo "      <div class=\"form-group required\">

      <div id=\"payment-custom-field";
                    // line 360
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360);
                    echo "\" class=\"col-sm-10\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 360);
                    echo "\">
        <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 362
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 362);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 362);
                    echo "</label>
      </div>
        <select name=\"custom_field[";
                    // line 364
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 364);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 364);
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 365
                    echo ($context["text_select"] ?? null);
                    echo "</option>
          
          ";
                    // line 367
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 367));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 368
                        echo "          
          <option value=\"";
                        // line 369
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 369);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 369);
                        echo "</option>
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 372
                    echo "        
        </select>
      </div>

      </div>
      ";
                }
                // line 378
                echo "      
      ";
                // line 379
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 379) == "radio")) {
                    // line 380
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 380);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 380);
                    echo "\">
        <label class=\"control-label\">";
                    // line 381
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 381);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 382
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 382);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 382));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 383
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 385
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 385);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 385);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 385);
                        echo "\" />
              ";
                        // line 386
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 386);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 388
                    echo " </div>
      </div>
      ";
                }
                // line 391
                echo "      
      ";
                // line 392
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 392) == "checkbox")) {
                    // line 393
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 393);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 393);
                    echo "\">
        <label class=\"control-label\">";
                    // line 394
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 394);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 395
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 395);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 395));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 396
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 398
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 398);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 398);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 398);
                        echo "\" />
              ";
                        // line 399
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 399);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 401
                    echo " </div>
      </div>
      ";
                }
                // line 404
                echo "      
      ";
                // line 405
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 405) == "text")) {
                    // line 406
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 406);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 406);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 407
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 407);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 407);
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 408);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 408);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 408);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 408);
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 411
                echo "      
      ";
                // line 412
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 412) == "textarea")) {
                    // line 413
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 413);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 413);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 414
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 414);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 414);
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 415
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 415);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 415);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 415);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 415);
                    echo "</textarea>
      </div>
      ";
                }
                // line 418
                echo "      
    <!--   ";
                // line 419
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 419) == "file")) {
                    // line 420
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 420);
                    echo "\">
        <label class=\"control-label\">";
                    // line 421
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 421);
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 423
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 423);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 424
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 424);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 424);
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 424);
                    echo "\" />
      </div>
      ";
                }
                // line 426
                echo " -->
      
      ";
                // line 428
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 428) == "date")) {
                    // line 429
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 429);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 430
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 430);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 430);
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 432
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 432);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 432);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 432);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 432);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 432);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 438
                echo "      
      ";
                // line 439
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 439) == "time")) {
                    // line 440
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 440);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 440);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 441
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 441);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 441);
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 443
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 443);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 443);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 443);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 449
                echo "      
      ";
                // line 450
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 450) == "datetime")) {
                    // line 451
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 451);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 451);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 452
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 452);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 452);
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 454
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 454);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 454);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 454);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 454);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 460
                echo "      
      ";
            }
            // line 462
            echo "      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 464
        echo "
    </div>
 


<div class=\"buttons clearfix\">
  <div class=\"pull-right\">

    <!-- <input type=\"button\" value=\"";
        // line 472
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"mlm-register\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" /> -->

      <button data-loading-text=\"";
        // line 474
        echo ($context["text_loading"] ?? null);
        echo "\" id=\"mlm-register\" value=\"";
        echo ($context["button_continue"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary step\" type=\"button\" data-bs-toggle=\"collapse\"
            data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
           Continue
        </button>
  </div>
</div>


 <input type=\"hidden\" name=\"custom_field[account][10]\" value=\"ads\" id=\"one\">


<input type=\"hidden\" id=\"sponsor\" value=\"";
        // line 485
        echo ($context["referral_session"] ?? null);
        echo "\">



<script type=\"text/javascript\">

  \$('#payment-custom-field16').hide();
  \$('#input-payment-custom-field12').prop('readonly', true);

// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
  if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
    \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
  }

  if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
    \$('#account .form-group:last').after(this);
  }

  if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
    \$('#account .form-group:last').after(this);
  }

  if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
    \$('#account .form-group:first').before(this);
  }
});

\$('#address .form-group[data-sort]').detach().each(function() {
  if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
    \$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
  }

  if (\$(this).attr('data-sort') > \$('#address .form-group').length) {
    \$('#address .form-group:last').after(this);
  }

  if (\$(this).attr('data-sort') == \$('#address .form-group').length) {
    \$('#address .form-group:last').after(this);
  }

  if (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
    \$('#address .form-group:first').before(this);
  }
});

</script> 
<script type=\"text/javascript\">
\$('.date').datetimepicker({
  language: '";
        // line 534
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.time').datetimepicker({
  language: '";
        // line 539
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 544
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});
</script> 
<script type=\"text/javascript\">
\$('#collapse-mlm-register button[id^=\\'button-payment-custom-field\\']').on('click', function() {

  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');


  if (typeof timer != 'undefined') {

      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);
      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {

            // alert(\$(node).parent());

            \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
</script> 

<script>
  \$( document ).ready(function() {

    \$('#member').addClass('active');
    \$('#member_register').show();

    var referal_username = \$('#sponsor').val();
    \$('#input-payment-custom-field12').val(referal_username);

    \$(\"<i style='padding: 8px 7px 1px 5px;' class='fa fa-upload'></i><a data-target='#myModal' data-toggle='modal' class='MainNavText' id='ic_help' href='#myModal' style='font-weight: 400;font-size: 18px;' >IC Upload</a>\").insertAfter(\"#input-payment-custom-field9\");

    });
  </script>


 

    
";
    }

    public function getTemplateName()
    {
        return "glamour/template/checkout/mlm_register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  880 => 544,  872 => 539,  864 => 534,  812 => 485,  794 => 474,  787 => 472,  777 => 464,  770 => 462,  766 => 460,  749 => 454,  742 => 452,  735 => 451,  733 => 450,  730 => 449,  713 => 443,  706 => 441,  699 => 440,  697 => 439,  694 => 438,  677 => 432,  670 => 430,  663 => 429,  661 => 428,  657 => 426,  647 => 424,  639 => 423,  634 => 421,  627 => 420,  625 => 419,  622 => 418,  608 => 415,  602 => 414,  595 => 413,  593 => 412,  590 => 411,  576 => 408,  570 => 407,  563 => 406,  561 => 405,  558 => 404,  553 => 401,  544 => 399,  536 => 398,  532 => 396,  526 => 395,  522 => 394,  515 => 393,  513 => 392,  510 => 391,  505 => 388,  496 => 386,  488 => 385,  484 => 383,  478 => 382,  474 => 381,  467 => 380,  465 => 379,  462 => 378,  454 => 372,  443 => 369,  440 => 368,  436 => 367,  431 => 365,  423 => 364,  416 => 362,  409 => 360,  405 => 358,  403 => 357,  400 => 356,  398 => 355,  395 => 354,  391 => 353,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "glamour/template/checkout/mlm_register.twig", "");
    }
}
