<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_054c516d3f072b013aa4252550fc5a1c97ae48b7f7a376edc6dbad99ff47bbc8 extends Twig_Template
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
        $__internal_a604cb005f52c87b8e6548d7c4a899a2add9cf210df038af56cf3da64741b4df = $this->env->getExtension("native_profiler");
        $__internal_a604cb005f52c87b8e6548d7c4a899a2add9cf210df038af56cf3da64741b4df->enter($__internal_a604cb005f52c87b8e6548d7c4a899a2add9cf210df038af56cf3da64741b4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_a604cb005f52c87b8e6548d7c4a899a2add9cf210df038af56cf3da64741b4df->leave($__internal_a604cb005f52c87b8e6548d7c4a899a2add9cf210df038af56cf3da64741b4df_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
