<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_7cb48c298cf34093ec75704f76098f64ade44ccc5fd1d22b7e35a6c3a1e54346 extends Twig_Template
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
        $__internal_c78c87369b2b5b5182727a1a915992acb96facdc11ab44e62581c47a375f6b71 = $this->env->getExtension("native_profiler");
        $__internal_c78c87369b2b5b5182727a1a915992acb96facdc11ab44e62581c47a375f6b71->enter($__internal_c78c87369b2b5b5182727a1a915992acb96facdc11ab44e62581c47a375f6b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78c87369b2b5b5182727a1a915992acb96facdc11ab44e62581c47a375f6b71->leave($__internal_c78c87369b2b5b5182727a1a915992acb96facdc11ab44e62581c47a375f6b71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a3f6ddcda298b8f08111959dc49467a73d4356ce91be78c4eaef810147c2ec0 = $this->env->getExtension("native_profiler");
        $__internal_2a3f6ddcda298b8f08111959dc49467a73d4356ce91be78c4eaef810147c2ec0->enter($__internal_2a3f6ddcda298b8f08111959dc49467a73d4356ce91be78c4eaef810147c2ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->loadTemplate("::modulesUsed/slider.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 9)->display($context);
        // line 10
        echo "            ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "                ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 11)->display($context);
            echo "   
            ";
        } else {
            // line 13
            echo "                ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 13)->display($context);
            echo "   
            ";
        }
        // line 15
        echo "            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 16
        echo "        </div>
        
        <div class=\"span9\">
            ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 20
            echo "                <ul class=\"thumbnails\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 22
                echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produitThumb"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\" width=\"300\" height=\"150\">
                            <div class=\"caption\">
                                <h4>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " dt</p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                ";
                // line 29
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 30
                    echo "                                    <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                ";
                }
                // line 32
                echo "                            </div>
                        </div>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </ul>

                <div class=\"navigation\">
                    ";
            // line 39
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            echo "
                </div>
                
            ";
        } else {
            // line 43
            echo "                Aucun produit
            ";
        }
        // line 45
        echo "        </div>
    </div>
</div>
";
        
        $__internal_2a3f6ddcda298b8f08111959dc49467a73d4356ce91be78c4eaef810147c2ec0->leave($__internal_2a3f6ddcda298b8f08111959dc49467a73d4356ce91be78c4eaef810147c2ec0_prof);

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
        return array (  138 => 45,  134 => 43,  127 => 39,  122 => 36,  113 => 32,  107 => 30,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  86 => 24,  82 => 22,  78 => 21,  75 => 20,  73 => 19,  68 => 16,  65 => 15,  59 => 13,  53 => 11,  50 => 10,  48 => 9,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* {% include '::modulesUsed/slider.html.twig' %}*/
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
/*                             <img src="{{ produit.image.AssetPath|imagine_filter('produitThumb') }}" alt="{{ produit.image.name }}" width="300" height="150">*/
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
