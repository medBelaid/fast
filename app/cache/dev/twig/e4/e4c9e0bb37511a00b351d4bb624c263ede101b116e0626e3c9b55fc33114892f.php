<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_de236e43c9111d731ef0263398e8042eb93eda6878461bea31346f542069eb32 extends Twig_Template
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
        $__internal_b87c34045ee61c57d64cb4d33aeb7baa90d131e04620d8acd9fc60af68cf9f1c = $this->env->getExtension("native_profiler");
        $__internal_b87c34045ee61c57d64cb4d33aeb7baa90d131e04620d8acd9fc60af68cf9f1c->enter($__internal_b87c34045ee61c57d64cb4d33aeb7baa90d131e04620d8acd9fc60af68cf9f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
        <div class=\"bigTitle\">Connexion</div>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <h4>Inscription</h4>
                    <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
";
        
        $__internal_b87c34045ee61c57d64cb4d33aeb7baa90d131e04620d8acd9fc60af68cf9f1c->leave($__internal_b87c34045ee61c57d64cb4d33aeb7baa90d131e04620d8acd9fc60af68cf9f1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 19,  44 => 17,  38 => 16,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*         <div class="bigTitle">Connexion</div>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Pas encore inscrit ?</h4>*/
/*                     <em>*/
/*                         nous vous invitons à vous inscrire<br />*/
/*                         afin de passer votre commande et de manger équilibré.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     <h4>Inscription</h4>*/
/*                     <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*                         {{ form_widget(form) }}*/
/*                         <br />*/
/*                         <input class="btn btn-primary" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
