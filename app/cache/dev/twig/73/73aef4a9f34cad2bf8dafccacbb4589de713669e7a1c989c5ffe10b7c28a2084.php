<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_00309eec701a14d01a5eb7cd16d26447551506e1c22982b7665e3ac96b2794b0 extends Twig_Template
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
        $__internal_d0ca8ddeee0cb09a105a31515931a367b57acd8683a4686270d19429eb8ed4dc = $this->env->getExtension("native_profiler");
        $__internal_d0ca8ddeee0cb09a105a31515931a367b57acd8683a4686270d19429eb8ed4dc->enter($__internal_d0ca8ddeee0cb09a105a31515931a367b57acd8683a4686270d19429eb8ed4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ca8ddeee0cb09a105a31515931a367b57acd8683a4686270d19429eb8ed4dc->leave($__internal_d0ca8ddeee0cb09a105a31515931a367b57acd8683a4686270d19429eb8ed4dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e9b95e6db77231dccb9087d911195927408a4fe99b0f4676556c4f394c2363f = $this->env->getExtension("native_profiler");
        $__internal_2e9b95e6db77231dccb9087d911195927408a4fe99b0f4676556c4f394c2363f->enter($__internal_2e9b95e6db77231dccb9087d911195927408a4fe99b0f4676556c4f394c2363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e9b95e6db77231dccb9087d911195927408a4fe99b0f4676556c4f394c2363f->leave($__internal_2e9b95e6db77231dccb9087d911195927408a4fe99b0f4676556c4f394c2363f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_890f3ea48c73c555188171798c628d1937bacbee853d1974719560fc410e04d6 = $this->env->getExtension("native_profiler");
        $__internal_890f3ea48c73c555188171798c628d1937bacbee853d1974719560fc410e04d6->enter($__internal_890f3ea48c73c555188171798c628d1937bacbee853d1974719560fc410e04d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_890f3ea48c73c555188171798c628d1937bacbee853d1974719560fc410e04d6->leave($__internal_890f3ea48c73c555188171798c628d1937bacbee853d1974719560fc410e04d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1429e6dbeb256b53060e5b20e900d74a7272ef128efce732d0876ee1b5be4b75 = $this->env->getExtension("native_profiler");
        $__internal_1429e6dbeb256b53060e5b20e900d74a7272ef128efce732d0876ee1b5be4b75->enter($__internal_1429e6dbeb256b53060e5b20e900d74a7272ef128efce732d0876ee1b5be4b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1429e6dbeb256b53060e5b20e900d74a7272ef128efce732d0876ee1b5be4b75->leave($__internal_1429e6dbeb256b53060e5b20e900d74a7272ef128efce732d0876ee1b5be4b75_prof);

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
