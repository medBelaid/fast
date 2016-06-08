<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_928f4be8ce72a9aa1fb506c72a7162a2ace28b0a172688f91c324fea70a28872 extends Twig_Template
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
        $__internal_b7ffa5e6596900e031ae3be9f766acbc267bbd750ea45119dd2a063f2505ff92 = $this->env->getExtension("native_profiler");
        $__internal_b7ffa5e6596900e031ae3be9f766acbc267bbd750ea45119dd2a063f2505ff92->enter($__internal_b7ffa5e6596900e031ae3be9f766acbc267bbd750ea45119dd2a063f2505ff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

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
        
        $__internal_b7ffa5e6596900e031ae3be9f766acbc267bbd750ea45119dd2a063f2505ff92->leave($__internal_b7ffa5e6596900e031ae3be9f766acbc267bbd750ea45119dd2a063f2505ff92_prof);

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
