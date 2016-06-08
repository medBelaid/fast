<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aae7e8118a67e8b711283f7187a328a10d8194c8ff7670193b24f33d8b6089df extends Twig_Template
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
        $__internal_d459136640a738530edd1f35a82fe91b3113fbcdde6f8625560bdd4b3425e81e = $this->env->getExtension("native_profiler");
        $__internal_d459136640a738530edd1f35a82fe91b3113fbcdde6f8625560bdd4b3425e81e->enter($__internal_d459136640a738530edd1f35a82fe91b3113fbcdde6f8625560bdd4b3425e81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d459136640a738530edd1f35a82fe91b3113fbcdde6f8625560bdd4b3425e81e->leave($__internal_d459136640a738530edd1f35a82fe91b3113fbcdde6f8625560bdd4b3425e81e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be69dd9ab78ba2cf8edc6cc5326b5f88297fb8162e567c72635bb2f3f3df4e0e = $this->env->getExtension("native_profiler");
        $__internal_be69dd9ab78ba2cf8edc6cc5326b5f88297fb8162e567c72635bb2f3f3df4e0e->enter($__internal_be69dd9ab78ba2cf8edc6cc5326b5f88297fb8162e567c72635bb2f3f3df4e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_be69dd9ab78ba2cf8edc6cc5326b5f88297fb8162e567c72635bb2f3f3df4e0e->leave($__internal_be69dd9ab78ba2cf8edc6cc5326b5f88297fb8162e567c72635bb2f3f3df4e0e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_608913ef9c62ddd94bc9fe39b960dc02fcc2962a49992a40639c109da2826f52 = $this->env->getExtension("native_profiler");
        $__internal_608913ef9c62ddd94bc9fe39b960dc02fcc2962a49992a40639c109da2826f52->enter($__internal_608913ef9c62ddd94bc9fe39b960dc02fcc2962a49992a40639c109da2826f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_608913ef9c62ddd94bc9fe39b960dc02fcc2962a49992a40639c109da2826f52->leave($__internal_608913ef9c62ddd94bc9fe39b960dc02fcc2962a49992a40639c109da2826f52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d58ab9ee482f633e7cf00aa8196923d75eac70de84d405fef7b26d646df0b530 = $this->env->getExtension("native_profiler");
        $__internal_d58ab9ee482f633e7cf00aa8196923d75eac70de84d405fef7b26d646df0b530->enter($__internal_d58ab9ee482f633e7cf00aa8196923d75eac70de84d405fef7b26d646df0b530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d58ab9ee482f633e7cf00aa8196923d75eac70de84d405fef7b26d646df0b530->leave($__internal_d58ab9ee482f633e7cf00aa8196923d75eac70de84d405fef7b26d646df0b530_prof);

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
