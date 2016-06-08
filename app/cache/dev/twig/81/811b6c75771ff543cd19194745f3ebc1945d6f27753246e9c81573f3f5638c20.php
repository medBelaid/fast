<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_ec5808011a190c701d7a19168a05ab5ae4be09f42e24271594b99c3b77242bf6 extends Twig_Template
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
        $__internal_a1fc524807c4cfb6ee2534cf342b4c27e8917865413ea06bbe44d185a3b7a6af = $this->env->getExtension("native_profiler");
        $__internal_a1fc524807c4cfb6ee2534cf342b4c27e8917865413ea06bbe44d185a3b7a6af->enter($__internal_a1fc524807c4cfb6ee2534cf342b4c27e8917865413ea06bbe44d185a3b7a6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
    <button type=\"submit\" class=\"btn\">Rechercher</button>
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
        
        $__internal_a1fc524807c4cfb6ee2534cf342b4c27e8917865413ea06bbe44d185a3b7a6af->leave($__internal_a1fc524807c4cfb6ee2534cf342b4c27e8917865413ea06bbe44d185a3b7a6af_prof);

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
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('rechercheProduits') }}" method="POST" class="navbar-form form-search pull-right">*/
/*     {{ form_widget(form.recherche) }}*/
/*     <button type="submit" class="btn">Rechercher</button>*/
/*     {{ form_widget(form) }}*/
/* </form>*/
