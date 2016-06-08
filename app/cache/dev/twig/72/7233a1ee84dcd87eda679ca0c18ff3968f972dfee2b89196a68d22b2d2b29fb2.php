<?php

/* UtilisateursBundle:Default:layout/facture.html.twig */
class __TwigTemplate_491c599cacb0060f4fb3d3d2b5aed06475655c67d42a6e3cf479ff8849ded813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "UtilisateursBundle:Default:layout/facture.html.twig", 1);
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
        $__internal_7fbd9dc5619dfe0bf1ab5dfbac5df2d358c5dccc0073edb98ff0fdb071b9a2be = $this->env->getExtension("native_profiler");
        $__internal_7fbd9dc5619dfe0bf1ab5dfbac5df2d358c5dccc0073edb98ff0fdb071b9a2be->enter($__internal_7fbd9dc5619dfe0bf1ab5dfbac5df2d358c5dccc0073edb98ff0fdb071b9a2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:layout/facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbd9dc5619dfe0bf1ab5dfbac5df2d358c5dccc0073edb98ff0fdb071b9a2be->leave($__internal_7fbd9dc5619dfe0bf1ab5dfbac5df2d358c5dccc0073edb98ff0fdb071b9a2be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed39992efabccbd159b7f231b1186ae0f05920658e4b3aedd00aac3e2dde787 = $this->env->getExtension("native_profiler");
        $__internal_1ed39992efabccbd159b7f231b1186ae0f05920658e4b3aedd00aac3e2dde787->enter($__internal_1ed39992efabccbd159b7f231b1186ae0f05920658e4b3aedd00aac3e2dde787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "UtilisateursBundle:Default:layout/facture.html.twig", 8)->display($context);
        // line 9
        echo "            ";
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "UtilisateursBundle:Default:layout/facture.html.twig", 9)->display($context);
        echo "   
            ";
        // line 10
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 11
        echo "            </div>\t\t\t\t
            <div class=\"span9\">
                
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "                    <div class=\"alert alert-success\">
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
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "                    <div class=\"alert alert-errors\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                
                <h2>Factures</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures"))) == 0)) {
            // line 38
            echo "                                <tr>
                                    <td colspan=\"4\"><center>Ancunne facture actuellement.</center></td>
                                </tr>
                            ";
        }
        // line 42
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 43
            echo "                            <tr>
                                <td>ref : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " dt</td>
                                <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturesPDF", array("id" => $this->getAttribute($context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
";
        
        $__internal_1ed39992efabccbd159b7f231b1186ae0f05920658e4b3aedd00aac3e2dde787->leave($__internal_1ed39992efabccbd159b7f231b1186ae0f05920658e4b3aedd00aac3e2dde787_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:layout/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  121 => 43,  116 => 42,  110 => 38,  108 => 37,  93 => 24,  84 => 21,  81 => 20,  76 => 19,  67 => 16,  64 => 15,  60 => 14,  55 => 11,  53 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %} */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*             {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}   */
/*             {% render(controller('EcommerceBundle:Panier:menu')) %}*/
/*             </div>				*/
/*             <div class="span9">*/
/*                 */
/*                 {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                     <div class="alert alert-success">*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*                 {% for flashMessage in app.session.flashbag.get('error') %}*/
/*                     <div class="alert alert-errors">*/
/*                         {{ flashMessage }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*                 */
/*                 <h2>Factures</h2>*/
/*                 <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Références</th>*/
/*                                 <th>Date</th>*/
/*                                 <th>Prix TTC</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% if factures|length == 0 %}*/
/*                                 <tr>*/
/*                                     <td colspan="4"><center>Ancunne facture actuellement.</center></td>*/
/*                                 </tr>*/
/*                             {% endif %}*/
/*                             {% for facture in factures %}*/
/*                             <tr>*/
/*                                 <td>ref : {{ facture.reference }}</td>*/
/*                                 <td>{{ facture.date|date('d/m/Y') }}</td>*/
/*                                 <td>{{ facture.commande.prixTTC }} dt</td>*/
/*                                 <td><a href="{{ path('facturesPDF', { 'id' : facture.id }) }}" target="_blank"><i class="icon-refresh"></i></a></td>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
