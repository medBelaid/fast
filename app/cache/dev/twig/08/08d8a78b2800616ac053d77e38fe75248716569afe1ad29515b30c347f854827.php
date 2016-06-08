<?php

/* UtilisateursBundle:Default:layout/facturePDF.html.twig */
class __TwigTemplate_02e772720caafda86980a208b9b3f288881f33fa50fc93bb71357f827427a1d5 extends Twig_Template
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
        $__internal_b76c40d290ce2535d65d9cc990959989985c59a98702cf574516507fc3610c96 = $this->env->getExtension("native_profiler");
        $__internal_b76c40d290ce2535d65d9cc990959989985c59a98702cf574516507fc3610c96->enter($__internal_b76c40d290ce2535d65d9cc990959989985c59a98702cf574516507fc3610c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:layout/facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"./css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>Fast Print Sahline</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            echo "                <tr>
                    <td class=\"color\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " dt</td>
                    <td class=\"color\">";
            // line 45
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " dt</td>
                    <td class=\"color\">";
            // line 46
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixTTC", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " dt</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " dt</td>
            </tr>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 56
            echo "            <tr>
                <td width=\"110\">TVA <span class=\"color min\">";
            // line 57
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</span> :</td>
                <td width=\"100\" class=\"color\">";
            // line 58
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " dt</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " dt</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "
        </div>
    </body>
</html>";
        
        $__internal_b76c40d290ce2535d65d9cc990959989985c59a98702cf574516507fc3610c96->leave($__internal_b76c40d290ce2535d65d9cc990959989985c59a98702cf574516507fc3610c96_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 69,  158 => 67,  151 => 63,  147 => 61,  138 => 58,  134 => 57,  131 => 56,  127 => 55,  122 => 53,  116 => 49,  107 => 46,  103 => 45,  99 => 44,  95 => 43,  91 => 42,  88 => 41,  84 => 40,  67 => 30,  63 => 29,  57 => 28,  50 => 24,  46 => 23,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>Facture</title>*/
/*         <link href="./css/facture.css" rel="stylesheet" type="text/css" />*/
/*     </head>*/
/*     <body>*/
/*         <h1>Fast Print Sahline</h1>*/
/*         <table id="enTete">*/
/*             <tr>*/
/*                 <td colspan="1"></td>*/
/*                 <td colspan="1"><h1>Facture</h1></td>*/
/*                 <td colspan="1"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td width="80">Page</td>*/
/*                 <td width="100">Date</td>*/
/*                 <td width="120">Ref</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td class="color">[[page_nb]]</td>*/
/*                 <td class="color">{{ facture.date|date('d-m-Y') }}</td>*/
/*                 <td class="color">{{ facture.reference }}</td>*/
/*             </tr>*/
/*         </table>*/
/*         <ul id="coordonnes">*/
/*             <li>{{ facture.commande.facturation.nom }} {{ facture.commande.facturation.prenom }}</li>*/
/*             <li>{{ facture.commande.facturation.adresse}}</li>*/
/*             <li>{{ facture.commande.facturation.cp }} {{ facture.commande.facturation.ville }} - {{ facture.commande.facturation.pays }}</li>*/
/*         </ul>*/
/*         <table id="entity">*/
/*             <tr>*/
/*                 <td width="280">DESIGNATION</td>*/
/*                 <td width="105">QUANTITE</td>*/
/*                 <td width="100">P.U - HT</td>*/
/*                 <td width="105">MONTANT HT</td>*/
/*                 <td width="105">MONTANT TTC</td>*/
/*             </tr>*/
/*                 {% for produit in facture.commande.produit %}*/
/*                 <tr>*/
/*                     <td class="color">{{ produit.reference }}</td>*/
/*                     <td class="color">{{ produit.quantite }}</td>*/
/*                     <td class="color">{{ produit.prixHT }} dt</td>*/
/*                     <td class="color">{{ produit.prixHT * produit.quantite }} dt</td>*/
/*                     <td class="color">{{ produit.prixTTC * produit.quantite }} dt</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*         </table>*/
/*         <table id="total">*/
/*             <tr>*/
/*                 <td width="110">TOTAL HT :</td>*/
/*                 <td width="100" class="color">{{ facture.commande.prixHT }} dt</td>*/
/*             </tr>*/
/*             {% for key, tva in facture.commande.tva %}*/
/*             <tr>*/
/*                 <td width="110">TVA <span class="color min">{{ key }}</span> :</td>*/
/*                 <td width="100" class="color">{{ tva }} dt</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             <tr>*/
/*                 <td width="110">TOTAL TTC :</td>*/
/*                 <td width="100" class="color">{{ facture.commande.prixTTC }} dt</td>*/
/*             </tr>*/
/*         </table>*/
/*         <div id="footer">*/
/*             <span class="color strong">{{ adresse }}</span>*/
/*             <br />*/
/*             {{ telephone }}*/
/*         </div>*/
/*     </body>*/
/* </html>*/