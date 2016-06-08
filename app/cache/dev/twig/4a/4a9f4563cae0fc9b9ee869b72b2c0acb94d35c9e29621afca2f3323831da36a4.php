<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_64eb34634c335aebab7ec51175c5c24273001ea17ae868925c11561e78851346 extends Twig_Template
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
        $__internal_ef6350f92c28bfdc038917b9518f7d3ee58acfb49e204e4e645e077c1e6fd445 = $this->env->getExtension("native_profiler");
        $__internal_ef6350f92c28bfdc038917b9518f7d3ee58acfb49e204e4e645e077c1e6fd445->enter($__internal_ef6350f92c28bfdc038917b9518f7d3ee58acfb49e204e4e645e077c1e6fd445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"account-links\">

  <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" id=\"customer_login_link\">Se connecter</a>
  <br/>
  <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" id=\"customer_register_link\">S'inscrire</a>

</div>";
        
        $__internal_ef6350f92c28bfdc038917b9518f7d3ee58acfb49e204e4e645e077c1e6fd445->leave($__internal_ef6350f92c28bfdc038917b9518f7d3ee58acfb49e204e4e645e077c1e6fd445_prof);

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
        return array (  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <div class="account-links">*/
/* */
/*   <a href="{{ path('fos_user_security_login') }}" id="customer_login_link">Se connecter</a>*/
/*   <br/>*/
/*   <a href="{{ path('fos_user_registration_register') }}" id="customer_register_link">S'inscrire</a>*/
/* */
/* </div>*/
