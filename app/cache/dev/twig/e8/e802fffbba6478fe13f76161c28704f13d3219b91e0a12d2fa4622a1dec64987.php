<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_911a5da66496210153fe25e9f4311d65ca764d704c7d2b8bf3c11a55000ea033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_b73573979ce6de4b383ac5e26271ca7302d77d46c7b2ae21a5c739eaf5a2592e = $this->env->getExtension("native_profiler");
        $__internal_b73573979ce6de4b383ac5e26271ca7302d77d46c7b2ae21a5c739eaf5a2592e->enter($__internal_b73573979ce6de4b383ac5e26271ca7302d77d46c7b2ae21a5c739eaf5a2592e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b73573979ce6de4b383ac5e26271ca7302d77d46c7b2ae21a5c739eaf5a2592e->leave($__internal_b73573979ce6de4b383ac5e26271ca7302d77d46c7b2ae21a5c739eaf5a2592e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd90333c9030c3d5cb60d4d32ab6ad44c534b1d7c44f448d22b08afe2e3e39ce = $this->env->getExtension("native_profiler");
        $__internal_dd90333c9030c3d5cb60d4d32ab6ad44c534b1d7c44f448d22b08afe2e3e39ce->enter($__internal_dd90333c9030c3d5cb60d4d32ab6ad44c534b1d7c44f448d22b08afe2e3e39ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<div id=\"content\">
    <div class=\"block\">
";
        // line 6
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
</div>
";
        
        $__internal_dd90333c9030c3d5cb60d4d32ab6ad44c534b1d7c44f448d22b08afe2e3e39ce->leave($__internal_dd90333c9030c3d5cb60d4d32ab6ad44c534b1d7c44f448d22b08afe2e3e39ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <div id="content">*/
/*     <div class="block">*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
