<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_e207b16015f83f5b2e961054d1fc69ac230341b6f63c70b9e43f397fbc0e5e6b extends Twig_Template
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
        $__internal_95bb20a82895b8804418e1d778a85a6f2c5803e74c960865923223cb256d2c92 = $this->env->getExtension("native_profiler");
        $__internal_95bb20a82895b8804418e1d778a85a6f2c5803e74c960865923223cb256d2c92->enter($__internal_95bb20a82895b8804418e1d778a85a6f2c5803e74c960865923223cb256d2c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

        // line 1
        echo "<div class=\"search panelinputinner\">
    <form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\">
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
        <button type=\"submit\" class=\"coolbutton\"><span class=\"icon-arrow3-right\"></span></button>
    </form>
</div>";
        
        $__internal_95bb20a82895b8804418e1d778a85a6f2c5803e74c960865923223cb256d2c92->leave($__internal_95bb20a82895b8804418e1d778a85a6f2c5803e74c960865923223cb256d2c92_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="search panelinputinner">*/
/*     <form action="{{ path('rechercheProduits') }}" method="POST">*/
/*         {{ form_widget(form.recherche) }}*/
/*         <button type="submit" class="coolbutton"><span class="icon-arrow3-right"></span></button>*/
/*     </form>*/
/* </div>*/
