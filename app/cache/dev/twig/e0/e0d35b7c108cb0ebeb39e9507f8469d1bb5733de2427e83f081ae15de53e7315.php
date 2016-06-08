<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_f1d029cec3b69cb05e567b39a2093d9fe9dd060608f0231a1e094d8c835ebd1a extends Twig_Template
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
        $__internal_20b81679e9166832513d9d5ed92525ba19bde3fdaa43c0e48455627f4f7f82d8 = $this->env->getExtension("native_profiler");
        $__internal_20b81679e9166832513d9d5ed92525ba19bde3fdaa43c0e48455627f4f7f82d8->enter($__internal_20b81679e9166832513d9d5ed92525ba19bde3fdaa43c0e48455627f4f7f82d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Panier</li>
        <li>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">
                ";
        // line 6
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 7
            echo "                    Aucun article dans votre panier
                ";
        } elseif ((        // line 8
(isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 9
            echo "                    1 article dans votre panier
                ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " articles dans votre panier
                ";
        }
        // line 13
        echo "            </a>
        </li>
    </ul>
</div>";
        
        $__internal_20b81679e9166832513d9d5ed92525ba19bde3fdaa43c0e48455627f4f7f82d8->leave($__internal_20b81679e9166832513d9d5ed92525ba19bde3fdaa43c0e48455627f4f7f82d8_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  43 => 11,  39 => 9,  37 => 8,  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header">Panier</li>*/
/*         <li>*/
/*             <a href="{{ path('panier') }}">*/
/*                 {% if articles == 0 %}*/
/*                     Aucun article dans votre panier*/
/*                 {% elseif articles == 1 %}*/
/*                     1 article dans votre panier*/
/*                 {% else %}*/
/*                     {{ articles }} articles dans votre panier*/
/*                 {% endif %}*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
