<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_1188064d51761a49614559e5965abe161fb1bf770414acef6de7bccfa20b5ae2 extends Twig_Template
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
        $__internal_46c7430c7f22c217299d6323f376e98507e9ec180681b62fb5229f4b85228af2 = $this->env->getExtension("native_profiler");
        $__internal_46c7430c7f22c217299d6323f376e98507e9ec180681b62fb5229f4b85228af2->enter($__internal_46c7430c7f22c217299d6323f376e98507e9ec180681b62fb5229f4b85228af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

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
        
        $__internal_46c7430c7f22c217299d6323f376e98507e9ec180681b62fb5229f4b85228af2->leave($__internal_46c7430c7f22c217299d6323f376e98507e9ec180681b62fb5229f4b85228af2_prof);

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
