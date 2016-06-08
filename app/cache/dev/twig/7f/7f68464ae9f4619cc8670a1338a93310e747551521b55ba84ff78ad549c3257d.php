<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_3cc7b0196e5088f0dc5b566f69ad52fd88338677fed8a54e9a1fb87370186513 extends Twig_Template
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
        $__internal_b3a948a6a69cd04867dfc05b9cd4898c3e24ab00d265c5d6466d6eadc98a52aa = $this->env->getExtension("native_profiler");
        $__internal_b3a948a6a69cd04867dfc05b9cd4898c3e24ab00d265c5d6466d6eadc98a52aa->enter($__internal_b3a948a6a69cd04867dfc05b9cd4898c3e24ab00d265c5d6466d6eadc98a52aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "    <li class=\"\">
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorieProduits", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\" class=\"tier1title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo " </a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b3a948a6a69cd04867dfc05b9cd4898c3e24ab00d265c5d6466d6eadc98a52aa->leave($__internal_b3a948a6a69cd04867dfc05b9cd4898c3e24ab00d265c5d6466d6eadc98a52aa_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for categorie in categories %}*/
/*     <li class="">*/
/*         <a href="{{ path('categorieProduits', { 'categorie' : categorie.id }) }}" class="tier1title">{{ categorie.nom }} </a>*/
/*     </li>*/
/* {% endfor %}*/
