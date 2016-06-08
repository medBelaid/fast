<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7579b9350c49fde218e7cfd6da563ab92c4f6eb5e55e80a42452f3796b561ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_257ebbcc2c7b8f624511756722770d49f83618c71f97abc59ec0b02665c48c68 = $this->env->getExtension("native_profiler");
        $__internal_257ebbcc2c7b8f624511756722770d49f83618c71f97abc59ec0b02665c48c68->enter($__internal_257ebbcc2c7b8f624511756722770d49f83618c71f97abc59ec0b02665c48c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257ebbcc2c7b8f624511756722770d49f83618c71f97abc59ec0b02665c48c68->leave($__internal_257ebbcc2c7b8f624511756722770d49f83618c71f97abc59ec0b02665c48c68_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_891da4a2811affef5645479794b033df4edd9035f87e5843add8e8a2f89cb3b3 = $this->env->getExtension("native_profiler");
        $__internal_891da4a2811affef5645479794b033df4edd9035f87e5843add8e8a2f89cb3b3->enter($__internal_891da4a2811affef5645479794b033df4edd9035f87e5843add8e8a2f89cb3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande et de manger équilibré.
                    </em>
                    <br /><br />
                    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>

                </div>

                <div class=\"span4 offset2\">
                    <h4>Connexion</h4>
                    <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <label for=\"username\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                    <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
                <div class=\"span10\">
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_891da4a2811affef5645479794b033df4edd9035f87e5843add8e8a2f89cb3b3->leave($__internal_891da4a2811affef5645479794b033df4edd9035f87e5843add8e8a2f89cb3b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 40,  95 => 36,  89 => 33,  84 => 31,  80 => 30,  75 => 28,  71 => 27,  62 => 21,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans }}</div>*/
/* {% endif %}*/
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Connexion</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Pas encore inscrit ?</h4>*/
/*                     <em>*/
/*                         nous vous invitons à vous inscrire<br />*/
/*                         afin de passer votre commande et de manger équilibré.*/
/*                     </em>*/
/*                     <br /><br />*/
/*                     <a href="{{ path('fos_user_registration_register') }}" class="btn btn-primary">S'inscrire</a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     <h4>Connexion</h4>*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                     <input type="password" id="password" name="_password" required="required" />*/
/*                     <br />*/
/*                     <input class="btn btn-primary" type="submit" value="{{ 'security.login.submit'|trans }}" />*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="span10">*/
/*                     <a href="{{ path('fos_user_resetting_request') }}">Mot de passe perdu ?</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
