<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_90022fb9a87cab26021672e4ab331858c905f0a7c7a88383ea2a0204917125b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 1);
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
        $__internal_2079150607e7eb515090388ccea7b5a73336c2f1f1a6201d970c1dda654ff685 = $this->env->getExtension("native_profiler");
        $__internal_2079150607e7eb515090388ccea7b5a73336c2f1f1a6201d970c1dda654ff685->enter($__internal_2079150607e7eb515090388ccea7b5a73336c2f1f1a6201d970c1dda654ff685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2079150607e7eb515090388ccea7b5a73336c2f1f1a6201d970c1dda654ff685->leave($__internal_2079150607e7eb515090388ccea7b5a73336c2f1f1a6201d970c1dda654ff685_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21222a282e8ecd18ddc1dac9d543cfa8b2c0b94274c9d11855a7393513ee874a = $this->env->getExtension("native_profiler");
        $__internal_21222a282e8ecd18ddc1dac9d543cfa8b2c0b94274c9d11855a7393513ee874a->enter($__internal_21222a282e8ecd18ddc1dac9d543cfa8b2c0b94274c9d11855a7393513ee874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
        
        <div class=\"span9\">
            
            
            <h2>Valider mon panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 26
            echo "                    <tr>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "
                        </td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " dt</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " dt</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
            </table>
            
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " dt</dd>
                
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 42
            echo "                    <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " dt</dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                <dt>Total TTC :</dt><dd>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " dt</dd>
            </dl>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de livraison</h4></dt>
                    <dt>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"span3 pull-left\">
                <dl class=\"pull-left\">
                    <dt><h4>Adresse de facturation</h4></dt>
                    <dt>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                    <dt>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                </dl>
            </div>
            
            <div class=\"clearfix\"></div>
            
            <form action=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\"/>
                <input name=\"token\" type=\"hidden\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "token", array()), "html", null, true);
        echo "\" />
                <input name=\"prix\" type=\"hidden\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\" />
                <input name=\"date\" type=\"hidden\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
            </form>
            
            <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
        </div>

    </div>
</div>
";
        
        $__internal_21222a282e8ecd18ddc1dac9d543cfa8b2c0b94274c9d11855a7393513ee874a->leave($__internal_21222a282e8ecd18ddc1dac9d543cfa8b2c0b94274c9d11855a7393513ee874a_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 75,  193 => 71,  189 => 70,  185 => 69,  181 => 68,  168 => 62,  164 => 61,  158 => 60,  144 => 53,  140 => 52,  134 => 51,  125 => 45,  122 => 44,  111 => 42,  107 => 41,  102 => 39,  96 => 35,  87 => 32,  83 => 31,  78 => 29,  73 => 27,  70 => 26,  66 => 25,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*         </div>*/
/*         */
/*         <div class="span9">*/
/*             */
/*             */
/*             <h2>Valider mon panier</h2>*/
/*             <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Références</th>*/
/*                         <th>Quantité</th>*/
/*                         <th>Prix unitaire</th>*/
/*                         <th>Total HT</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for produit in commande.commande.produit %}*/
/*                     <tr>*/
/*                         <td>{{ produit.reference }}</td>*/
/*                         <td>*/
/*                             {{ produit.quantite }}*/
/*                         </td>*/
/*                         <td>{{ produit.prixHT }} dt</td>*/
/*                         <td>{{ produit.prixHT * produit.quantite }} dt</td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             */
/*             <dl class="dl-horizontal pull-right">*/
/*                 <dt>Total HT :</dt><dd>{{ commande.commande.prixHT }} dt</dd>*/
/*                 */
/*                 {% for key, tva in commande.commande.tva %}*/
/*                     <dt>TVA {{ key }} :</dt><dd>{{ tva }} dt</dd>*/
/*                 {% endfor %}*/
/* */
/*                 <dt>Total TTC :</dt><dd>{{ commande.commande.prixTTC }} dt</dd>*/
/*             </dl>*/
/*             */
/*             <div class="span3 pull-left">*/
/*                 <dl class="pull-left">*/
/*                     <dt><h4>Adresse de livraison</h4></dt>*/
/*                     <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>*/
/*                     <dt>{{ commande.commande.livraison.adresse }}</dt>*/
/*                     <dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>*/
/*                 </dl>*/
/*             </div>*/
/*             */
/*             <div class="span3 pull-left">*/
/*                 <dl class="pull-left">*/
/*                     <dt><h4>Adresse de facturation</h4></dt>*/
/*                     <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>*/
/*                     <dt>{{ commande.commande.facturation.adresse }}</dt>*/
/*                     <dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>*/
/*                 </dl>*/
/*             </div>*/
/*             */
/*             <div class="clearfix"></div>*/
/*             */
/*             <form action="{{ path('validationCommande', { 'id' : commande.id }) }}" method="POST"/>*/
/*                 <input name="token" type="hidden" value="{{ commande.commande.token }}" />*/
/*                 <input name="prix" type="hidden" value="{{ commande.commande.prixTTC }}" />*/
/*                 <input name="date" type="hidden" value="{{ commande.date|date('dmyhms') }}" />*/
/*                 <button type="submit" class="btn btn-success pull-right">Payer</button>*/
/*             </form>*/
/*             */
/*             <a href="{{ path('livraison') }}" class="btn btn-primary">retour</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
