<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_2c3f571854002aa6fc52091a7d45cd476a5f5ff3d9be4209ea5df171a86b779a extends Twig_Template
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
        $__internal_dd59f90c1240e0c239316e6f560befad1c2ab36be4c93592cd64edd454176ce9 = $this->env->getExtension("native_profiler");
        $__internal_dd59f90c1240e0c239316e6f560befad1c2ab36be4c93592cd64edd454176ce9->enter($__internal_dd59f90c1240e0c239316e6f560befad1c2ab36be4c93592cd64edd454176ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Nos produits</li>
        ";
        // line 4
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 5
        echo "    </ul>
</div>";
        
        $__internal_dd59f90c1240e0c239316e6f560befad1c2ab36be4c93592cd64edd454176ce9->leave($__internal_dd59f90c1240e0c239316e6f560befad1c2ab36be4c93592cd64edd454176ce9_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header">Nos produits</li>*/
/*         {% render(controller('EcommerceBundle:Categories:menu')) %}*/
/*     </ul>*/
/* </div>*/
