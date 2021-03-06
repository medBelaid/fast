<?php

/* EcommerceBundle:Administration:Produits/layout/index.html.twig */
class __TwigTemplate_0edee3bf3482c5eb526ccbe701a04bfd3cc36d415bf9512e82c41b7d3ba91f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Produits/layout/index.html.twig", 1);
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
        $__internal_7c333ae4bf9bc2da428db5d56db50b6398753e6ce2edbe29096763f3ecb85d93 = $this->env->getExtension("native_profiler");
        $__internal_7c333ae4bf9bc2da428db5d56db50b6398753e6ce2edbe29096763f3ecb85d93->enter($__internal_7c333ae4bf9bc2da428db5d56db50b6398753e6ce2edbe29096763f3ecb85d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Produits/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c333ae4bf9bc2da428db5d56db50b6398753e6ce2edbe29096763f3ecb85d93->leave($__internal_7c333ae4bf9bc2da428db5d56db50b6398753e6ce2edbe29096763f3ecb85d93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5b69b7788242f3004ef637cc8edc3e07a6eb29adfaf2cfbc4d42decbcdde64 = $this->env->getExtension("native_profiler");
        $__internal_5d5b69b7788242f3004ef637cc8edc3e07a6eb29adfaf2cfbc4d42decbcdde64->enter($__internal_5d5b69b7788242f3004ef637cc8edc3e07a6eb29adfaf2cfbc4d42decbcdde64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Produits list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disponible", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("adminProduits_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_5d5b69b7788242f3004ef637cc8edc3e07a6eb29adfaf2cfbc4d42decbcdde64->leave($__internal_5d5b69b7788242f3004ef637cc8edc3e07a6eb29adfaf2cfbc4d42decbcdde64_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Produits/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  88 => 27,  78 => 23,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Produits list</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <th>Prix</th>*/
/*                 <th>Disponible</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>{{ entity.prix }}</td>*/
/*                 <td>{{ entity.disponible }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('adminProduits_show', { 'id': entity.id }) }}"><i class="icon-book"></i></a>*/
/*                     <a href="{{ path('adminProduits_edit', { 'id': entity.id }) }}"><i class="icon-edit"></i></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('adminProduits_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
