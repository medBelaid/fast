<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a93e1188d367aabff1d095c4cc3e1fa924f63b3c4a2f04b1854c83495c63ce3d extends Twig_Template
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
        $__internal_3e5d317aadb1be94e013c79e063ecc354f379a380f20af607cd5d1766a8a6740 = $this->env->getExtension("native_profiler");
        $__internal_3e5d317aadb1be94e013c79e063ecc354f379a380f20af607cd5d1766a8a6740->enter($__internal_3e5d317aadb1be94e013c79e063ecc354f379a380f20af607cd5d1766a8a6740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5d317aadb1be94e013c79e063ecc354f379a380f20af607cd5d1766a8a6740->leave($__internal_3e5d317aadb1be94e013c79e063ecc354f379a380f20af607cd5d1766a8a6740_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abab0af6ae7fdc6c259ca5007f602c64bd236d5f13018ba8210f7d830ef9f173 = $this->env->getExtension("native_profiler");
        $__internal_abab0af6ae7fdc6c259ca5007f602c64bd236d5f13018ba8210f7d830ef9f173->enter($__internal_abab0af6ae7fdc6c259ca5007f602c64bd236d5f13018ba8210f7d830ef9f173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_abab0af6ae7fdc6c259ca5007f602c64bd236d5f13018ba8210f7d830ef9f173->leave($__internal_abab0af6ae7fdc6c259ca5007f602c64bd236d5f13018ba8210f7d830ef9f173_prof);

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
