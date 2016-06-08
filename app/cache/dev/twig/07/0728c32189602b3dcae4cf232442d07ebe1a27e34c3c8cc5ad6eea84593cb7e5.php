<?php

/* EcommerceBundle:Administration:Produits/layout/new.html.twig */
class __TwigTemplate_0fcd79ddc68c00ad5aab44121f43ad9ec5d7910408c35db3ad05a08d0e120560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Produits/layout/new.html.twig", 1);
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
        $__internal_74ba4d449641c2cca6a167c260e592b429d2bbfde831beb7035c163f2295de71 = $this->env->getExtension("native_profiler");
        $__internal_74ba4d449641c2cca6a167c260e592b429d2bbfde831beb7035c163f2295de71->enter($__internal_74ba4d449641c2cca6a167c260e592b429d2bbfde831beb7035c163f2295de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74ba4d449641c2cca6a167c260e592b429d2bbfde831beb7035c163f2295de71->leave($__internal_74ba4d449641c2cca6a167c260e592b429d2bbfde831beb7035c163f2295de71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a463ec9f2ad584f8394f4bfdbd0f6f92ee96597943543fde16e6d219d2d0323f = $this->env->getExtension("native_profiler");
        $__internal_a463ec9f2ad584f8394f4bfdbd0f6f92ee96597943543fde16e6d219d2d0323f->enter($__internal_a463ec9f2ad584f8394f4bfdbd0f6f92ee96597943543fde16e6d219d2d0323f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produits creation</h1>

    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("adminProduits_create");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </form>
    
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_a463ec9f2ad584f8394f4bfdbd0f6f92ee96597943543fde16e6d219d2d0323f->leave($__internal_a463ec9f2ad584f8394f4bfdbd0f6f92ee96597943543fde16e6d219d2d0323f_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Produits creation</h1>*/
/* */
/*     <form action="{{ path('adminProduits_create') }}" method="POST" {{ form_enctype(form) }}>*/
/*     {{ form(form) }}*/
/*     </form>*/
/*     */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('adminProduits') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
