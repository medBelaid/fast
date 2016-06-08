<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_50012f115389556186a924f9e6bd11deebdc3263d9a38bd59078de8a3a5b0a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
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
        $__internal_cff2bee59d38f4b09575856c30e2cbac1fb02e81a27be653b8ad6b2e44941549 = $this->env->getExtension("native_profiler");
        $__internal_cff2bee59d38f4b09575856c30e2cbac1fb02e81a27be653b8ad6b2e44941549->enter($__internal_cff2bee59d38f4b09575856c30e2cbac1fb02e81a27be653b8ad6b2e44941549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cff2bee59d38f4b09575856c30e2cbac1fb02e81a27be653b8ad6b2e44941549->leave($__internal_cff2bee59d38f4b09575856c30e2cbac1fb02e81a27be653b8ad6b2e44941549_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c27506b6da86ff5122d901a4a6ff7f07df73b1db37613a4ac0e898e324b76f46 = $this->env->getExtension("native_profiler");
        $__internal_c27506b6da86ff5122d901a4a6ff7f07df73b1db37613a4ac0e898e324b76f46->enter($__internal_c27506b6da86ff5122d901a4a6ff7f07df73b1db37613a4ac0e898e324b76f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 10
            echo "                ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 10)->display($context);
            echo "   
            ";
        } else {
            // line 12
            echo "                ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 12)->display($context);
            echo "   
            ";
        }
        // line 14
        echo "            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 15
        echo "        </div>
        
        <div class=\"span9\">
            ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 19
            echo "                <ul class=\"thumbnails\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 21
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\" width=\"300\" height=\"150\">
                            <div class=\"caption\">
                                <h4>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                <p>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " dt</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                ";
                // line 28
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 29
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                ";
                }
                // line 31
                echo "                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                </ul>

                <div class=\"navigation\">
                    ";
            // line 38
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            echo "
                </div>
                
            ";
        } else {
            // line 42
            echo "                Aucun produit
            ";
        }
        // line 44
        echo "        </div>
    </div>
</div>
";
        
        $__internal_c27506b6da86ff5122d901a4a6ff7f07df73b1db37613a4ac0e898e324b76f46->leave($__internal_c27506b6da86ff5122d901a4a6ff7f07df73b1db37613a4ac0e898e324b76f46_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  132 => 42,  125 => 38,  120 => 35,  111 => 31,  105 => 29,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  84 => 23,  80 => 21,  76 => 20,  73 => 19,  71 => 18,  66 => 15,  63 => 14,  57 => 12,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}   */
/*             {% else %}*/
/*                 {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}   */
/*             {% endif %}*/
/*             {% render(controller('EcommerceBundle:Panier:menu')) %}*/
/*         </div>*/
/*         */
/*         <div class="span9">*/
/*             {% if produits|length != 0 %}*/
/*                 <ul class="thumbnails">*/
/*                 {% for produit in produits %}*/
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ asset(produit.image.AssetPath) }}" alt="{{ produit.image.name }}" width="300" height="150">*/
/*                             <div class="caption">*/
/*                                 <h4>{{ produit.nom }}</h4>*/
/*                                 <p>{{ produit.prix|tva(produit.tva.multiplicate) }} dt</p>*/
/*                                 <a class="btn btn-primary" href="{{ path('presentation', { 'id' : produit.id }) }}">Plus d'infos</a>*/
/*                                 {% if panier[produit.id] is not defined %}*/
/*                                     <a class="btn btn-success" href="{{ path('ajouter', { 'id' : produit.id }) }}">Ajouter au panier</a>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/* */
/*                 <div class="navigation">*/
/*                     {{ knp_pagination_render(produits) }}*/
/*                 </div>*/
/*                 */
/*             {% else %}*/
/*                 Aucun produit*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
