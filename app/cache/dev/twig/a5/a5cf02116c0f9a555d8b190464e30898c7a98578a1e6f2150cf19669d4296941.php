<?php

/* ::modulesUsed/slider.html.twig */
class __TwigTemplate_36d2f9c00b9e7cffd007d2228f35fda428e0e53191da8e2f165de46a5e824bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_477cbd190b14a6417a6a99aa6b03ddcebc4884a3ea785570082af6cde33578b4 = $this->env->getExtension("native_profiler");
        $__internal_477cbd190b14a6417a6a99aa6b03ddcebc4884a3ea785570082af6cde33578b4->enter($__internal_477cbd190b14a6417a6a99aa6b03ddcebc4884a3ea785570082af6cde33578b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/slider.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
        <div id=\"slider\">
            <ul class=\"slides\">
                <li class=\"slide\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/slider/example-slide-350-1.jpg"), "html", null, true);
        echo "\"> </li>
                <li class=\"slide\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/slider/example-slide-350-2.jpg"), "html", null, true);
        echo "\"> </li>
                <li class=\"slide\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/slider/example-slide-350-4.jpg"), "html", null, true);
        echo "\"> </li>
                <li class=\"slide\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/slider/example-slide-350-1.jpg"), "html", null, true);
        echo "\"> </li>
            </ul>
        </div>
        </div>
    </div>
</div>";
        
        $__internal_477cbd190b14a6417a6a99aa6b03ddcebc4884a3ea785570082af6cde33578b4->leave($__internal_477cbd190b14a6417a6a99aa6b03ddcebc4884a3ea785570082af6cde33578b4_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*         <div id="slider">*/
/*             <ul class="slides">*/
/*                 <li class="slide"><img src="{{ asset('img/slider/example-slide-350-1.jpg') }}"> </li>*/
/*                 <li class="slide"><img src="{{ asset('img/slider/example-slide-350-2.jpg') }}"> </li>*/
/*                 <li class="slide"><img src="{{ asset('img/slider/example-slide-350-4.jpg') }}"> </li>*/
/*                 <li class="slide"><img src="{{ asset('img/slider/example-slide-350-1.jpg') }}"> </li>*/
/*             </ul>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
