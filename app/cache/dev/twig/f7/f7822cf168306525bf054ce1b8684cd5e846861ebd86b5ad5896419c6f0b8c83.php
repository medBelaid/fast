<?php

/* EcommerceBundle:Administration:Produits/layout/edit.html.twig */
class __TwigTemplate_6a3e06e7f3e9e757a0a878b6dd1dd2fe7929b62a3475b9e7e3c38a44d834f5eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Produits/layout/edit.html.twig", 1);
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
        $__internal_8bf667b8f029f30f028109886ac949a765b25ebf810926bf28004da37c1a915e = $this->env->getExtension("native_profiler");
        $__internal_8bf667b8f029f30f028109886ac949a765b25ebf810926bf28004da37c1a915e->enter($__internal_8bf667b8f029f30f028109886ac949a765b25ebf810926bf28004da37c1a915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bf667b8f029f30f028109886ac949a765b25ebf810926bf28004da37c1a915e->leave($__internal_8bf667b8f029f30f028109886ac949a765b25ebf810926bf28004da37c1a915e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91ba0f693cc03455e4b8ae9879d0bf25dee53ba2cf409f2abbaaa8650f03518 = $this->env->getExtension("native_profiler");
        $__internal_c91ba0f693cc03455e4b8ae9879d0bf25dee53ba2cf409f2abbaaa8650f03518->enter($__internal_c91ba0f693cc03455e4b8ae9879d0bf25dee53ba2cf409f2abbaaa8650f03518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produits edit</h1>
    
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_c91ba0f693cc03455e4b8ae9879d0bf25dee53ba2cf409f2abbaaa8650f03518->leave($__internal_c91ba0f693cc03455e4b8ae9879d0bf25dee53ba2cf409f2abbaaa8650f03518_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  58 => 12,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Produits edit</h1>*/
/*     */
/*     <form action="{{ path('adminProduits_update', { 'id' : entity.id }) }}" method="POST" {{ form_enctype(edit_form) }}>*/
/*     {{ form(edit_form) }}*/
/*     </form>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('adminProduits') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
