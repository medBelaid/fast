<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_d879191e22f23b023cf040a64b02a422ecb60c1233502fd083a1d60f27b93da1 extends Twig_Template
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
        $__internal_b43a2944fc1eb738746a68bfa0b0462123d55bfe3cd63326c3cfe837fca20c57 = $this->env->getExtension("native_profiler");
        $__internal_b43a2944fc1eb738746a68bfa0b0462123d55bfe3cd63326c3cfe837fca20c57->enter($__internal_b43a2944fc1eb738746a68bfa0b0462123d55bfe3cd63326c3cfe837fca20c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

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
        
        $__internal_b43a2944fc1eb738746a68bfa0b0462123d55bfe3cd63326c3cfe837fca20c57->leave($__internal_b43a2944fc1eb738746a68bfa0b0462123d55bfe3cd63326c3cfe837fca20c57_prof);

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
