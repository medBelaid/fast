<?php

/* ::modulesUsed/navigationAdmin.html.twig */
class __TwigTemplate_ef1fce4feab2326f0f8ca41fa1e533303e19807e6a10bf43ab8cfdc3d1d458ed extends Twig_Template
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
        $__internal_16b846ae4a4acb9fd246de6154ddeab5cf83b929012a9922c551e411d4dc6a69 = $this->env->getExtension("native_profiler");
        $__internal_16b846ae4a4acb9fd246de6154ddeab5cf83b929012a9922c551e411d4dc6a69->enter($__internal_16b846ae4a4acb9fd246de6154ddeab5cf83b929012a9922c551e411d4dc6a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigationAdmin.html.twig"));

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
        
        $__internal_16b846ae4a4acb9fd246de6154ddeab5cf83b929012a9922c551e411d4dc6a69->leave($__internal_16b846ae4a4acb9fd246de6154ddeab5cf83b929012a9922c551e411d4dc6a69_prof);

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
