<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_ac5a3da6d26a42e0848faf77c4736788a7585108bcf8cdc07622d1d65e39fba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_d5a6c6fc497b6e6682462baf1b5b4f03de7d103c90ca3cf00666f2312d632204 = $this->env->getExtension("native_profiler");
        $__internal_d5a6c6fc497b6e6682462baf1b5b4f03de7d103c90ca3cf00666f2312d632204->enter($__internal_d5a6c6fc497b6e6682462baf1b5b4f03de7d103c90ca3cf00666f2312d632204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5a6c6fc497b6e6682462baf1b5b4f03de7d103c90ca3cf00666f2312d632204->leave($__internal_d5a6c6fc497b6e6682462baf1b5b4f03de7d103c90ca3cf00666f2312d632204_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf736214f6201287740d64f5b5b96bf070ed8428a1b5cf1dc62961bc0b109bd = $this->env->getExtension("native_profiler");
        $__internal_9cf736214f6201287740d64f5b5b96bf070ed8428a1b5cf1dc62961bc0b109bd->enter($__internal_9cf736214f6201287740d64f5b5b96bf070ed8428a1b5cf1dc62961bc0b109bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 15
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 15)->display($context);
        // line 16
        echo "        </div>
        
        <div class=\"span9\">
            
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            
            <h2>Votre panier</h2>
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
        // line 37
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 38
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 42
        echo "                    
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "                    <tr>
                        <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </select>&nbsp;
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " dt</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " dt</td>
                        </form>
                    </tr>
                    ";
            // line 59
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 60
            echo "                    ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 61
            echo "                    ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            // line 62
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </tbody>
            </table>
            ";
        // line 65
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 66
            echo "            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " dt</dd>
                
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 70
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
            // line 72
            echo "
                <dt>Total TTC :</dt><dd>";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " dt</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            ";
        }
        // line 78
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
";
        
        $__internal_9cf736214f6201287740d64f5b5b96bf070ed8428a1b5cf1dc62961bc0b109bd->leave($__internal_9cf736214f6201287740d64f5b5b96bf070ed8428a1b5cf1dc62961bc0b109bd_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 78,  218 => 76,  212 => 73,  209 => 72,  198 => 70,  194 => 69,  189 => 67,  186 => 66,  184 => 65,  180 => 63,  174 => 62,  171 => 61,  168 => 60,  166 => 59,  160 => 56,  156 => 55,  151 => 53,  148 => 52,  133 => 50,  129 => 49,  123 => 46,  119 => 45,  116 => 44,  112 => 43,  109 => 42,  103 => 38,  101 => 37,  87 => 25,  78 => 22,  75 => 21,  71 => 20,  65 => 16,  63 => 15,  57 => 11,  51 => 10,  44 => 1,  38 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% set totalHT = 0 %}*/
/* {% set totalTTC = 0%}*/
/* {% set refTva = {} %}*/
/* {% for produit in produits %}*/
/*     {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : 0 }) %}*/
/* {% endfor %}*/
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
/*             {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                 <div class="alert alert-success">*/
/*                     {{ flashMessage }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*             */
/*             <h2>Votre panier</h2>*/
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
/*                     {% if produits|length == 0 %}*/
/*                         <tr>*/
/*                             <td colspan="4"><center>Aucun articles dans votre panier</center></td>*/
/*                         </tr>*/
/*                     {% endif %}*/
/*                     */
/*                     {% for produit in produits %}*/
/*                     <tr>*/
/*                         <form action="{{ path('ajouter', { 'id' : produit.id }) }}" method="get">*/
/*                             <td>{{ produit.nom }}</td>*/
/*                             <td>*/
/*                                 <select name="qte" class="span1" onChange="this.form.submit()">*/
/*                                     {% for i in 1..10 %}*/
/*                                         <option value="{{ i }}" {% if i == panier[produit.id] %} selected="selected" {% endif %}>{{ i }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>&nbsp;*/
/*                                 <a href="{{ path('supprimer', { 'id' : produit.id }) }}"><i class="icon-trash"></i></a>*/
/*                             </td>*/
/*                             <td>{{ produit.prix }} dt</td>*/
/*                             <td>{{ produit.prix * panier[produit.id] }} dt</td>*/
/*                         </form>*/
/*                     </tr>*/
/*                     {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}*/
/*                     {% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}*/
/*                     {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : refTva['%' ~ produit.tva.valeur] + ( produit.prix * panier[produit.id])|montantTva(produit.tva.multiplicate) }) %}*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% if produits|length != 0 %}*/
/*             <dl class="dl-horizontal pull-right">*/
/*                 <dt>Total HT :</dt><dd>{{ totalHT }} dt</dd>*/
/*                 */
/*                 {% for key, tva in refTva %}*/
/*                     <dt>TVA {{ key }} :</dt><dd>{{ tva }} dt</dd>*/
/*                 {% endfor %}*/
/* */
/*                 <dt>Total TTC :</dt><dd>{{ totalTTC }} dt</dd>*/
/*             </dl>*/
/*             <div class="clearfix"></div>*/
/*             <a href="{{ path('livraison') }}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*             {% endif %}*/
/*             <a href="{{ path('produits') }}" class="btn btn-primary">Continuer mes achats</a>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
