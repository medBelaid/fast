<?php

/* PagesBundle:Default:pages/modulesUsed/menu.html.twig */
class __TwigTemplate_87b9d23a707b6605000aa3d0292a1c378df199f116b619d04dfd8a29cd5b1aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b6792f18e150080cbcb5675bda122768e13959065f96c1f0772ba0e384ce9f7 = $this->env->getExtension("native_profiler");
        $__internal_8b6792f18e150080cbcb5675bda122768e13959065f96c1f0772ba0e384ce9f7->enter($__internal_8b6792f18e150080cbcb5675bda122768e13959065f96c1f0772ba0e384ce9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "titre", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8b6792f18e150080cbcb5675bda122768e13959065f96c1f0772ba0e384ce9f7->leave($__internal_8b6792f18e150080cbcb5675bda122768e13959065f96c1f0772ba0e384ce9f7_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for page in pages %}*/
/*     <li><a href="{{ path('page', { 'id' : page.id }) }}">{{ page.titre }}</a>*/
/* {% endfor %}*/
