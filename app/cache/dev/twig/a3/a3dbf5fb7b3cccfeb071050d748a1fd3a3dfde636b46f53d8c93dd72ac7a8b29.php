<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_5ef5398b9a5e78c04f94a59524ead366761525a9a9f994d103b1faa103180fe6 extends Twig_Template
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
        $__internal_306343072f49c8b7df4b2c9decce9d89816a03aaeed0b3c8824ba9a0c4b1dc9f = $this->env->getExtension("native_profiler");
        $__internal_306343072f49c8b7df4b2c9decce9d89816a03aaeed0b3c8824ba9a0c4b1dc9f->enter($__internal_306343072f49c8b7df4b2c9decce9d89816a03aaeed0b3c8824ba9a0c4b1dc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

        // line 1
        echo "<div class=\"cartsummary\">
    <span class=\"icon-bag2\"></span>Panier<br>
            <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">
                ";
        // line 4
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 5
            echo "                    Aucun article dans votre panier
                ";
        } elseif ((        // line 6
(isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 7
            echo "                    1 article dans votre panier
                ";
        } else {
            // line 9
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " articles dans votre panier
                ";
        }
        // line 11
        echo "            </a>
</div>

";
        
        $__internal_306343072f49c8b7df4b2c9decce9d89816a03aaeed0b3c8824ba9a0c4b1dc9f->leave($__internal_306343072f49c8b7df4b2c9decce9d89816a03aaeed0b3c8824ba9a0c4b1dc9f_prof);

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
        return array (  47 => 11,  41 => 9,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="cartsummary">*/
/*     <span class="icon-bag2"></span>Panier<br>*/
/*             <a href="{{ path('panier') }}">*/
/*                 {% if articles == 0 %}*/
/*                     Aucun article dans votre panier*/
/*                 {% elseif articles == 1 %}*/
/*                     1 article dans votre panier*/
/*                 {% else %}*/
/*                     {{ articles }} articles dans votre panier*/
/*                 {% endif %}*/
/*             </a>*/
/* </div>*/
/* */
/* */
