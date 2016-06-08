<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_56c99c932b7f786f1d44d7e44f53c5bfbc4181d4bc33ccf13550a6e428f3bbf2 extends Twig_Template
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
        $__internal_bbfd761e7bc264a8b6a2b187fadedc1ac2e95072300aa82aa04fa67ce4a2bfb0 = $this->env->getExtension("native_profiler");
        $__internal_bbfd761e7bc264a8b6a2b187fadedc1ac2e95072300aa82aa04fa67ce4a2bfb0->enter($__internal_bbfd761e7bc264a8b6a2b187fadedc1ac2e95072300aa82aa04fa67ce4a2bfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

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
        
        $__internal_bbfd761e7bc264a8b6a2b187fadedc1ac2e95072300aa82aa04fa67ce4a2bfb0->leave($__internal_bbfd761e7bc264a8b6a2b187fadedc1ac2e95072300aa82aa04fa67ce4a2bfb0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d01e19346c3afd7834b947647163dc6f6fe674acbae9f15bb78c25f470e0467 = $this->env->getExtension("native_profiler");
        $__internal_1d01e19346c3afd7834b947647163dc6f6fe674acbae9f15bb78c25f470e0467->enter($__internal_1d01e19346c3afd7834b947647163dc6f6fe674acbae9f15bb78c25f470e0467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div id=\"content\">
    <div class=\"block\">
            
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
        <h1 class=\"pagetitle double-padded\">Votre panier</h1>

            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 34
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 38
        echo "                    
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "                    <tr>
                        <form action=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">

                            <td>
                                <a class=\"remove toggler\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément?')\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">×</a>
                                <div class=\"image\">
                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produit"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "\" width=\"100\" height=\"50\"></a>
                                </div>
                            </td>

                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                            <td><input id=\"quantity\" name=\"qte\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"), "html", null, true);
            echo "\" size=\"2\" /></td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " dt</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " dt</td>
                        </form>
                    </tr>
                    ";
            // line 56
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 57
            echo "                    ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 58
            echo "                    ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            // line 59
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </tbody>
            </table>
            ";
        // line 62
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 63
            echo "            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo " dt</dd>
                
                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 67
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
            // line 69
            echo "
                <dt>Total TTC :</dt><dd>";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo " dt</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn pull-right\">Valider mon panier</a>
            ";
        }
        // line 75
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn\">Continuer mes achats</a>
        </div></div>

";
        
        $__internal_1d01e19346c3afd7834b947647163dc6f6fe674acbae9f15bb78c25f470e0467->leave($__internal_1d01e19346c3afd7834b947647163dc6f6fe674acbae9f15bb78c25f470e0467_prof);

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
        return array (  209 => 75,  204 => 73,  198 => 70,  195 => 69,  184 => 67,  180 => 66,  175 => 64,  172 => 63,  170 => 62,  166 => 60,  160 => 59,  157 => 58,  154 => 57,  152 => 56,  146 => 53,  142 => 52,  138 => 51,  134 => 50,  123 => 46,  118 => 44,  112 => 41,  109 => 40,  105 => 39,  102 => 38,  96 => 34,  94 => 33,  78 => 19,  69 => 16,  66 => 15,  62 => 14,  57 => 11,  51 => 10,  44 => 1,  38 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
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
/*     <div id="content">*/
/*     <div class="block">*/
/*             */
/*             {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                 <div class="alert alert-success">*/
/*                     {{ flashMessage }}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*         <h1 class="pagetitle double-padded">Votre panier</h1>*/
/* */
/*             <table class="table table-striped table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Photo</th>*/
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
/* */
/*                             <td>*/
/*                                 <a class="remove toggler" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément?')" href="{{ path('supprimer', { 'id' : produit.id }) }}">×</a>*/
/*                                 <div class="image">*/
/*                                     <a href="{{ path('presentation', { 'id' : produit.id }) }}"><img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" alt="{{ produit.nom }}" width="100" height="50"></a>*/
/*                                 </div>*/
/*                             </td>*/
/* */
/*                             <td>{{ produit.nom }}</td>*/
/*                             <td><input id="quantity" name="qte" value="{{ panier[produit.id] }}" size="2" /></td>*/
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
/*             <a href="{{ path('livraison') }}" class="btn pull-right">Valider mon panier</a>*/
/*             {% endif %}*/
/*             <a href="{{ path('produits') }}" class="btn">Continuer mes achats</a>*/
/*         </div></div>*/
/* */
/* {% endblock %}*/
