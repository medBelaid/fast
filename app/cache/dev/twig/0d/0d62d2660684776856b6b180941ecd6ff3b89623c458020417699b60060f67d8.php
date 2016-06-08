<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_ed194503ad214a7c1f6025fa8c07dad6b3b1294e33a564a8bd5c8bcfa4b34743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cba9fcde35ba6a94df0ab187cb263ac81abf14b2debe5d74a741f3b06b4fb676 = $this->env->getExtension("native_profiler");
        $__internal_cba9fcde35ba6a94df0ab187cb263ac81abf14b2debe5d74a741f3b06b4fb676->enter($__internal_cba9fcde35ba6a94df0ab187cb263ac81abf14b2debe5d74a741f3b06b4fb676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba9fcde35ba6a94df0ab187cb263ac81abf14b2debe5d74a741f3b06b4fb676->leave($__internal_cba9fcde35ba6a94df0ab187cb263ac81abf14b2debe5d74a741f3b06b4fb676_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c40c72875c984b84b8dcfd15b26eb20e67cdc8ebafd36f48abe42771e6bc3997 = $this->env->getExtension("native_profiler");
        $__internal_c40c72875c984b84b8dcfd15b26eb20e67cdc8ebafd36f48abe42771e6bc3997->enter($__internal_c40c72875c984b84b8dcfd15b26eb20e67cdc8ebafd36f48abe42771e6bc3997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_c40c72875c984b84b8dcfd15b26eb20e67cdc8ebafd36f48abe42771e6bc3997->leave($__internal_c40c72875c984b84b8dcfd15b26eb20e67cdc8ebafd36f48abe42771e6bc3997_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_1127d585a2d206ff8b43564e2b291dc3a62602205d60ea7526334f4b480faccb = $this->env->getExtension("native_profiler");
        $__internal_1127d585a2d206ff8b43564e2b291dc3a62602205d60ea7526334f4b480faccb->enter($__internal_1127d585a2d206ff8b43564e2b291dc3a62602205d60ea7526334f4b480faccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        
        $__internal_1127d585a2d206ff8b43564e2b291dc3a62602205d60ea7526334f4b480faccb->leave($__internal_1127d585a2d206ff8b43564e2b291dc3a62602205d60ea7526334f4b480faccb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_09699478d6e085dfac053d83b6bd883d8399a63164e25f90d54b079870a5eb25 = $this->env->getExtension("native_profiler");
        $__internal_09699478d6e085dfac053d83b6bd883d8399a63164e25f90d54b079870a5eb25->enter($__internal_09699478d6e085dfac053d83b6bd883d8399a63164e25f90d54b079870a5eb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
                ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 11)->display($context);
        // line 12
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 13
        echo "            </div>\t

            <div class=\"span9\">
                <div class=\"row\">
                    <div class=\"span5\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "AssetPath", array()), "produit"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "name", array()), "html", null, true);
        echo "\" width=\"470\" height=\"310\">
                    </div>

                    <div class=\"span4\">
                        <h4>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
                        <h5>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
                        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
                        <h4>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo " dt</h4>
                        ";
        // line 26
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()), array(), "array", true, true)) {
            // line 27
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <select name=\"qte\" class=\"span1\">
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 30
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>
                        ";
        } else {
            // line 39
            echo "                            <div>
                                <a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\" class=\"btn btn-primary\">Le produit est déjà dans votre panier</a>
                            </div>
                        ";
        }
        // line 43
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_09699478d6e085dfac053d83b6bd883d8399a63164e25f90d54b079870a5eb25->leave($__internal_09699478d6e085dfac053d83b6bd883d8399a63164e25f90d54b079870a5eb25_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  144 => 40,  141 => 39,  132 => 32,  121 => 30,  117 => 29,  111 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  84 => 18,  77 => 13,  74 => 12,  72 => 11,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block titre %}{{ produit.nom }}{% endblock %}*/
/* {% block description %}{{ produit.description }}{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*                 {% render(controller('EcommerceBundle:Panier:menu')) %}*/
/*             </div>	*/
/* */
/*             <div class="span9">*/
/*                 <div class="row">*/
/*                     <div class="span5">*/
/*                         <img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" alt="{{ produit.image.name }}" width="470" height="310">*/
/*                     </div>*/
/* */
/*                     <div class="span4">*/
/*                         <h4>{{ produit.nom }}</h4>*/
/*                         <h5>{{ produit.categorie.nom }}</h5>*/
/*                         <p>{{ produit.description }}</p>*/
/*                         <h4>{{ produit.prix|tva(produit.tva.multiplicate) }} dt</h4>*/
/*                         {% if panier[produit.id] is not defined %}*/
/*                         <form action="{{ path('ajouter', { 'id' : produit.id }) }}" method="get">*/
/*                             <select name="qte" class="span1">*/
/*                                 {% for i in 1..10 %}*/
/*                                     <option value="{{ i }}">{{ i }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/* */
/*                             <div>*/
/*                                 <button class="btn btn-primary">Ajouter au panier</button>*/
/*                             </div>*/
/*                         </form>*/
/*                         {% else %}*/
/*                             <div>*/
/*                                 <a href="{{ path('panier') }}" class="btn btn-primary">Le produit est déjà dans votre panier</a>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
