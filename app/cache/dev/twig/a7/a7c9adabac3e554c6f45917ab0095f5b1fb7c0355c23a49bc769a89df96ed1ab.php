<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_411617adc23a562ad9bfaf1da1ab4118e94b401e13c1ac5a96e5719a1c7fc270 extends Twig_Template
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
        $__internal_ebf1e730a03a8d8cfd6a0269c0cbef9c5c298af490a9b5bcc1d5594e4139d8c2 = $this->env->getExtension("native_profiler");
        $__internal_ebf1e730a03a8d8cfd6a0269c0cbef9c5c298af490a9b5bcc1d5594e4139d8c2->enter($__internal_ebf1e730a03a8d8cfd6a0269c0cbef9c5c298af490a9b5bcc1d5594e4139d8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("factures");
        echo "\">Mes factures</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
        </li>
    </ul>
</div>";
        
        $__internal_ebf1e730a03a8d8cfd6a0269c0cbef9c5c298af490a9b5bcc1d5594e4139d8c2->leave($__internal_ebf1e730a03a8d8cfd6a0269c0cbef9c5c298af490a9b5bcc1d5594e4139d8c2_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  45 => 13,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_edit') }}">Editer mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_change_password') }}">Changer mon mot de passe</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('factures') }}">Mes factures</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_logout') }}">Deconnexion</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
