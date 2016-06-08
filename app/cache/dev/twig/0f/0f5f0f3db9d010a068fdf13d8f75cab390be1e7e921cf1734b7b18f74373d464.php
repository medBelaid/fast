<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_c71e8d1ecf35fac40ba289a7b594132a5b2c41ac9a63ae05420edd6d3c33efab extends Twig_Template
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
        $__internal_668b5ef819ecf5b07f82a147d6fa650c51a33ae4618c41eb4dc3a99b348e1082 = $this->env->getExtension("native_profiler");
        $__internal_668b5ef819ecf5b07f82a147d6fa650c51a33ae4618c41eb4dc3a99b348e1082->enter($__internal_668b5ef819ecf5b07f82a147d6fa650c51a33ae4618c41eb4dc3a99b348e1082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668b5ef819ecf5b07f82a147d6fa650c51a33ae4618c41eb4dc3a99b348e1082->leave($__internal_668b5ef819ecf5b07f82a147d6fa650c51a33ae4618c41eb4dc3a99b348e1082_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c91a92821c494677a9afe4341a405c6c8302d2f9a45a421a4040a8cdf33a74e6 = $this->env->getExtension("native_profiler");
        $__internal_c91a92821c494677a9afe4341a405c6c8302d2f9a45a421a4040a8cdf33a74e6->enter($__internal_c91a92821c494677a9afe4341a405c6c8302d2f9a45a421a4040a8cdf33a74e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_c91a92821c494677a9afe4341a405c6c8302d2f9a45a421a4040a8cdf33a74e6->leave($__internal_c91a92821c494677a9afe4341a405c6c8302d2f9a45a421a4040a8cdf33a74e6_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_41e535cd0cb38bc7777bc9ad11ab1137a0d4214dba66ea3d9fe2c71b5fb9e191 = $this->env->getExtension("native_profiler");
        $__internal_41e535cd0cb38bc7777bc9ad11ab1137a0d4214dba66ea3d9fe2c71b5fb9e191->enter($__internal_41e535cd0cb38bc7777bc9ad11ab1137a0d4214dba66ea3d9fe2c71b5fb9e191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        
        $__internal_41e535cd0cb38bc7777bc9ad11ab1137a0d4214dba66ea3d9fe2c71b5fb9e191->leave($__internal_41e535cd0cb38bc7777bc9ad11ab1137a0d4214dba66ea3d9fe2c71b5fb9e191_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_022b5b093dde40f68af45e300e0512fd8bd4531e05a5a5f2b56dfe190b06b899 = $this->env->getExtension("native_profiler");
        $__internal_022b5b093dde40f68af45e300e0512fd8bd4531e05a5a5f2b56dfe190b06b899->enter($__internal_022b5b093dde40f68af45e300e0512fd8bd4531e05a5a5f2b56dfe190b06b899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "AssetPath", array())), "html", null, true);
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
        
        $__internal_022b5b093dde40f68af45e300e0512fd8bd4531e05a5a5f2b56dfe190b06b899->leave($__internal_022b5b093dde40f68af45e300e0512fd8bd4531e05a5a5f2b56dfe190b06b899_prof);

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
/*                         <img src="{{ asset(produit.image.AssetPath) }}" alt="{{ produit.image.name }}" width="470" height="310">*/
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
