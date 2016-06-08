<?php

/* EcommerceBundle:Administration:Produits/layout/new.html.twig */
class __TwigTemplate_2d38c8c4acc8e59df891bd7695d5ca8b49dc652047c7ea6d1de049d596fad4c5 extends Twig_Template
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
        $__internal_cc5600ddd2f0af61b5def11793586f25352dfe53f4691181b24929164612eb8c = $this->env->getExtension("native_profiler");
        $__internal_cc5600ddd2f0af61b5def11793586f25352dfe53f4691181b24929164612eb8c->enter($__internal_cc5600ddd2f0af61b5def11793586f25352dfe53f4691181b24929164612eb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc5600ddd2f0af61b5def11793586f25352dfe53f4691181b24929164612eb8c->leave($__internal_cc5600ddd2f0af61b5def11793586f25352dfe53f4691181b24929164612eb8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42cd7f8861a97c44d237da834c35e6531012a72eb79f8e65c949611b5b684172 = $this->env->getExtension("native_profiler");
        $__internal_42cd7f8861a97c44d237da834c35e6531012a72eb79f8e65c949611b5b684172->enter($__internal_42cd7f8861a97c44d237da834c35e6531012a72eb79f8e65c949611b5b684172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42cd7f8861a97c44d237da834c35e6531012a72eb79f8e65c949611b5b684172->leave($__internal_42cd7f8861a97c44d237da834c35e6531012a72eb79f8e65c949611b5b684172_prof);

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
