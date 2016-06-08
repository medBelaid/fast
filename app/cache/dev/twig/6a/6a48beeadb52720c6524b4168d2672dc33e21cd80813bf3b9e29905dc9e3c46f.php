<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef433ad13a50e623b6d101817e4dda6833850c668db32d2800f3d941c9131ddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3092b8780f5c4a0085f8aaf4f34ad93ebe4e8d9319b5885edcfadb2ad7773a68 = $this->env->getExtension("native_profiler");
        $__internal_3092b8780f5c4a0085f8aaf4f34ad93ebe4e8d9319b5885edcfadb2ad7773a68->enter($__internal_3092b8780f5c4a0085f8aaf4f34ad93ebe4e8d9319b5885edcfadb2ad7773a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3092b8780f5c4a0085f8aaf4f34ad93ebe4e8d9319b5885edcfadb2ad7773a68->leave($__internal_3092b8780f5c4a0085f8aaf4f34ad93ebe4e8d9319b5885edcfadb2ad7773a68_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c89411686680e93b9f19422ccfc4d6c3f8fdef1588ab868bf8f050e4526d10e = $this->env->getExtension("native_profiler");
        $__internal_6c89411686680e93b9f19422ccfc4d6c3f8fdef1588ab868bf8f050e4526d10e->enter($__internal_6c89411686680e93b9f19422ccfc4d6c3f8fdef1588ab868bf8f050e4526d10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c89411686680e93b9f19422ccfc4d6c3f8fdef1588ab868bf8f050e4526d10e->leave($__internal_6c89411686680e93b9f19422ccfc4d6c3f8fdef1588ab868bf8f050e4526d10e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2c144b86c46004ea8222507a22233f448f79b3ece47e7780e9d99ad4cfd0c3d = $this->env->getExtension("native_profiler");
        $__internal_d2c144b86c46004ea8222507a22233f448f79b3ece47e7780e9d99ad4cfd0c3d->enter($__internal_d2c144b86c46004ea8222507a22233f448f79b3ece47e7780e9d99ad4cfd0c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2c144b86c46004ea8222507a22233f448f79b3ece47e7780e9d99ad4cfd0c3d->leave($__internal_d2c144b86c46004ea8222507a22233f448f79b3ece47e7780e9d99ad4cfd0c3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffd30880d37aed952d81775958dfb62ce08c647c472cbba6ace0e620ac0c2cc0 = $this->env->getExtension("native_profiler");
        $__internal_ffd30880d37aed952d81775958dfb62ce08c647c472cbba6ace0e620ac0c2cc0->enter($__internal_ffd30880d37aed952d81775958dfb62ce08c647c472cbba6ace0e620ac0c2cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffd30880d37aed952d81775958dfb62ce08c647c472cbba6ace0e620ac0c2cc0->leave($__internal_ffd30880d37aed952d81775958dfb62ce08c647c472cbba6ace0e620ac0c2cc0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
