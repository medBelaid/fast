<?php

/* EcommerceBundle:Administration:Categories/layout/index.html.twig */
class __TwigTemplate_6526a2c1acc2b4b4b6df4b885fc5808e7d2e0278cb77270568a569d80d34df66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Categories/layout/index.html.twig", 1);
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
        $__internal_75fd9dc5822b5a916e6fe8e425a4433d308c687da28d1733012ec7c6b199154b = $this->env->getExtension("native_profiler");
        $__internal_75fd9dc5822b5a916e6fe8e425a4433d308c687da28d1733012ec7c6b199154b->enter($__internal_75fd9dc5822b5a916e6fe8e425a4433d308c687da28d1733012ec7c6b199154b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Categories/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fd9dc5822b5a916e6fe8e425a4433d308c687da28d1733012ec7c6b199154b->leave($__internal_75fd9dc5822b5a916e6fe8e425a4433d308c687da28d1733012ec7c6b199154b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d37dda382f3479dd45b3466934abfbef996c220a40ffb79c523ce2ca0dd480 = $this->env->getExtension("native_profiler");
        $__internal_06d37dda382f3479dd45b3466934abfbef996c220a40ffb79c523ce2ca0dd480->enter($__internal_06d37dda382f3479dd45b3466934abfbef996c220a40ffb79c523ce2ca0dd480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Categories list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminCategories_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminCategories_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminCategories_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("adminCategories_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_06d37dda382f3479dd45b3466934abfbef996c220a40ffb79c523ce2ca0dd480->leave($__internal_06d37dda382f3479dd45b3466934abfbef996c220a40ffb79c523ce2ca0dd480_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Categories/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  85 => 25,  75 => 21,  71 => 20,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Categories list</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('adminCategories_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('adminCategories_show', { 'id': entity.id }) }}"><i class="icon-book"></i></a>*/
/*                     <a href="{{ path('adminCategories_edit', { 'id': entity.id }) }}"><i class="icon-edit"></i></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('adminCategories_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
