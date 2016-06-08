<?php

/* EcommerceBundle:Administration:Commandes/layout/index.html.twig */
class __TwigTemplate_039538161ba35fb4dde3d217b3f8e6e6d16872b24f84c87ede9d135c6783323b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layoutAdmin.html.twig", "EcommerceBundle:Administration:Commandes/layout/index.html.twig", 1);
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
        $__internal_0e6d80affd97c4ca61b7c582856c0db057101db556bcb42b922a0578f09a6b7a = $this->env->getExtension("native_profiler");
        $__internal_0e6d80affd97c4ca61b7c582856c0db057101db556bcb42b922a0578f09a6b7a->enter($__internal_0e6d80affd97c4ca61b7c582856c0db057101db556bcb42b922a0578f09a6b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Administration:Commandes/layout/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6d80affd97c4ca61b7c582856c0db057101db556bcb42b922a0578f09a6b7a->leave($__internal_0e6d80affd97c4ca61b7c582856c0db057101db556bcb42b922a0578f09a6b7a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_902c042184e93d4f47d4ace50987a1da0cec7a157faf6434b3e9272525fd6367 = $this->env->getExtension("native_profiler");
        $__internal_902c042184e93d4f47d4ace50987a1da0cec7a157faf6434b3e9272525fd6367->enter($__internal_902c042184e93d4f47d4ace50987a1da0cec7a157faf6434b3e9272525fd6367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Commandes list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Date</th>
                <th>Reference</th>
                <th>Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "date", array()), "d-m-Y h:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "utilisateur", array()), "username", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminShowFacture", array("id" => $this->getAttribute($context["commande"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
";
        
        $__internal_902c042184e93d4f47d4ace50987a1da0cec7a157faf6434b3e9272525fd6367->leave($__internal_902c042184e93d4f47d4ace50987a1da0cec7a157faf6434b3e9272525fd6367_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration:Commandes/layout/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout/layoutAdmin.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Commandes list</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <th>Reference</th>*/
/*                 <th>Client</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for commande in commandes %}*/
/*             <tr>*/
/*                 <td>{{ commande.date|date('d-m-Y h:i:s') }}</td>*/
/*                 <td>{{ commande.reference }}</td>*/
/*                 <td>{{ commande.utilisateur.username }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('adminShowFacture',{'id': commande.id}) }}"><i class="icon-book"></i></a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
