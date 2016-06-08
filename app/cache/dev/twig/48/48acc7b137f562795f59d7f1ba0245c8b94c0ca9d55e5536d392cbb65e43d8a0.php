<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_d492930e61b3f94719686a02a9b8bfbe57ccb41c40f946878010dac32d873991 extends Twig_Template
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
        $__internal_91ebb74f28c6c562438a0094ab5386bd740131c929fdb400a89012c3685d9cb6 = $this->env->getExtension("native_profiler");
        $__internal_91ebb74f28c6c562438a0094ab5386bd740131c929fdb400a89012c3685d9cb6->enter($__internal_91ebb74f28c6c562438a0094ab5386bd740131c929fdb400a89012c3685d9cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

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
        
        $__internal_91ebb74f28c6c562438a0094ab5386bd740131c929fdb400a89012c3685d9cb6->leave($__internal_91ebb74f28c6c562438a0094ab5386bd740131c929fdb400a89012c3685d9cb6_prof);

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
