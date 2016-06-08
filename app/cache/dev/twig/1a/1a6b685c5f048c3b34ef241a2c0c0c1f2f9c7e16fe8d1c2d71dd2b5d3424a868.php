<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_9c8a6ffeefd8df58f283c0654257c2d5b6d0a8ee9ce82a4b4528c21a7208cd80 extends Twig_Template
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
        $__internal_ee371bc6f3ee50c356423c278c872db549775c63dda3aecb72e3d317765e8ff4 = $this->env->getExtension("native_profiler");
        $__internal_ee371bc6f3ee50c356423c278c872db549775c63dda3aecb72e3d317765e8ff4->enter($__internal_ee371bc6f3ee50c356423c278c872db549775c63dda3aecb72e3d317765e8ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigationAdmin.html.twig"));

        // line 1
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\">Produits</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("adminCategories");
        echo "\">Catégories produits</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"ajout-edit.php\">Clients</a>
            </li>
            <li>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("adminCommande");
        echo "\">Commandes</a>
            </li>
        </ul>
    </div>
    
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("adminPages");
        echo "\">Pages</a>
            </li>
        </ul>
    </div>    
</div>";
        
        $__internal_ee371bc6f3ee50c356423c278c872db549775c63dda3aecb72e3d317765e8ff4->leave($__internal_ee371bc6f3ee50c356423c278c872db549775c63dda3aecb72e3d317765e8ff4_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 28,  49 => 20,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* <div class="span3">*/
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('adminProduits') }}">Produits</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('adminCategories') }}">Catégories produits</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="ajout-edit.php">Clients</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('adminCommande') }}">Commandes</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('adminPages') }}">Pages</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>    */
/* </div>*/
