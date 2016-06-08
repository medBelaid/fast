<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_aa1f3e1cc8ac68be5b4fd0af7d5bafac9bdc811cdcfefca1ea687ee8910efe9c extends Twig_Template
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
        $__internal_d132bb8f5ab29fb1f0b2a4cd0e9634debe67179451c99600deceeb89f76e3dc2 = $this->env->getExtension("native_profiler");
        $__internal_d132bb8f5ab29fb1f0b2a4cd0e9634debe67179451c99600deceeb89f76e3dc2->enter($__internal_d132bb8f5ab29fb1f0b2a4cd0e9634debe67179451c99600deceeb89f76e3dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        ";
        // line 3
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 4
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("adminCommande");
            echo "\">Administration</a></li>
        ";
        }
        // line 6
        echo "        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
        </li>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("factures");
        echo "\">Mes factures</a>
        </li>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
        </li>
    </ul>
</div>";
        
        $__internal_d132bb8f5ab29fb1f0b2a4cd0e9634debe67179451c99600deceeb89f76e3dc2->leave($__internal_d132bb8f5ab29fb1f0b2a4cd0e9634debe67179451c99600deceeb89f76e3dc2_prof);

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
        return array (  61 => 19,  55 => 16,  49 => 13,  43 => 10,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         <li><a href="{{ path('adminCommande') }}">Administration</a></li>*/
/*         {% endif %}*/
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
