<?php

/* PagesBundle:Default:pages/layout/pages.html.twig */
class __TwigTemplate_17e425170dba33d9e2818e41d393fd915e120fe7af14dc72fd6db30a39bc96bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:pages/layout/pages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38743e62acc2dba02b7974139e51feb7905633adf771fa8536268e5f41d6f843 = $this->env->getExtension("native_profiler");
        $__internal_38743e62acc2dba02b7974139e51feb7905633adf771fa8536268e5f41d6f843->enter($__internal_38743e62acc2dba02b7974139e51feb7905633adf771fa8536268e5f41d6f843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38743e62acc2dba02b7974139e51feb7905633adf771fa8536268e5f41d6f843->leave($__internal_38743e62acc2dba02b7974139e51feb7905633adf771fa8536268e5f41d6f843_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2440ff28d49b656058d4359ab8f6fd5e9423658ddfb176ce87645d36efa2e017 = $this->env->getExtension("native_profiler");
        $__internal_2440ff28d49b656058d4359ab8f6fd5e9423658ddfb176ce87645d36efa2e017->enter($__internal_2440ff28d49b656058d4359ab8f6fd5e9423658ddfb176ce87645d36efa2e017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
        <div class=\"span12\">
            ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_2440ff28d49b656058d4359ab8f6fd5e9423658ddfb176ce87645d36efa2e017->leave($__internal_2440ff28d49b656058d4359ab8f6fd5e9423658ddfb176ce87645d36efa2e017_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <h1>{{ page.titre }}</h1>*/
/*         <div class="span12">*/
/*             {{ page.contenu|raw }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
