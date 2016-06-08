<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_41be3c879f4fe95396776b5cb98f2113c3bbe3db40ea1b1df2addaa99ea4420c extends Twig_Template
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
        $__internal_178aec5ae6970c11f30ae6cc55f137463d6c03279c332e2317d0c9994764bc1d = $this->env->getExtension("native_profiler");
        $__internal_178aec5ae6970c11f30ae6cc55f137463d6c03279c332e2317d0c9994764bc1d->enter($__internal_178aec5ae6970c11f30ae6cc55f137463d6c03279c332e2317d0c9994764bc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigationAdmin.html.twig"));

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
        
        $__internal_178aec5ae6970c11f30ae6cc55f137463d6c03279c332e2317d0c9994764bc1d->leave($__internal_178aec5ae6970c11f30ae6cc55f137463d6c03279c332e2317d0c9994764bc1d_prof);

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
