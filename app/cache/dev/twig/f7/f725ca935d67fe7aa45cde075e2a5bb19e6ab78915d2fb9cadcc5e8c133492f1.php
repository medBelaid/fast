<?php

/* EcommerceBundle:Administration:Produits/layout/show.html.twig */
class __TwigTemplate_48c2674c89ad5fd157c2b56429b12a23d5a9b6e2f84358ad949fc8a3ab26760c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Produits/layout/show.html.twig", 1);
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
        $__internal_0114869974ccab86a5bc3f50fb0488e4230b77e6f8a71d7fda64ee622fbc3ecf = $this->env->getExtension("native_profiler");
        $__internal_0114869974ccab86a5bc3f50fb0488e4230b77e6f8a71d7fda64ee622fbc3ecf->enter($__internal_0114869974ccab86a5bc3f50fb0488e4230b77e6f8a71d7fda64ee622fbc3ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0114869974ccab86a5bc3f50fb0488e4230b77e6f8a71d7fda64ee622fbc3ecf->leave($__internal_0114869974ccab86a5bc3f50fb0488e4230b77e6f8a71d7fda64ee622fbc3ecf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d752f46447ef33974c8bd66e6d9a596fec39de504af5103f976d927cf2a468a = $this->env->getExtension("native_profiler");
        $__internal_3d752f46447ef33974c8bd66e6d9a596fec39de504af5103f976d927cf2a468a->enter($__internal_3d752f46447ef33974c8bd66e6d9a596fec39de504af5103f976d927cf2a468a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produits</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponible</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disponible", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_3d752f46447ef33974c8bd66e6d9a596fec39de504af5103f976d927cf2a468a->leave($__internal_3d752f46447ef33974c8bd66e6d9a596fec39de504af5103f976d927cf2a468a_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  94 => 38,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Produits</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ entity.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prix</th>*/
/*                 <td>{{ entity.prix }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Disponible</th>*/
/*                 <td>{{ entity.disponible }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('adminProduits') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('adminProduits_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
