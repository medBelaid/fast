<?php

/* EcommerceBundle:Administration:Categories/layout/edit.html.twig */
class __TwigTemplate_094ff5a3d8912dbf57c715e18a987202be958b536748b1aacbc58d4c2725d4c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Categories/layout/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0427969382a676d60fbaf4df601115e7c3500a330c7ae0b81fb182adf54d240d = $this->env->getExtension("native_profiler");
        $__internal_0427969382a676d60fbaf4df601115e7c3500a330c7ae0b81fb182adf54d240d->enter($__internal_0427969382a676d60fbaf4df601115e7c3500a330c7ae0b81fb182adf54d240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Categories/layout/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0427969382a676d60fbaf4df601115e7c3500a330c7ae0b81fb182adf54d240d->leave($__internal_0427969382a676d60fbaf4df601115e7c3500a330c7ae0b81fb182adf54d240d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ede5ba7d3d6556c543a02f98f5c68777caf3f09606233534827033b4ec178c6 = $this->env->getExtension("native_profiler");
        $__internal_2ede5ba7d3d6556c543a02f98f5c68777caf3f09606233534827033b4ec178c6->enter($__internal_2ede5ba7d3d6556c543a02f98f5c68777caf3f09606233534827033b4ec178c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Categories edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("adminCategories");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_2ede5ba7d3d6556c543a02f98f5c68777caf3f09606233534827033b4ec178c6->leave($__internal_2ede5ba7d3d6556c543a02f98f5c68777caf3f09606233534827033b4ec178c6_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Categories/layout/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Categories edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('adminCategories') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
