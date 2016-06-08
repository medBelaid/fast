<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_5157ef8b390cb6880ce4098987877a2c116d4e35da09bfc883702a3d1a252a35 extends Twig_Template
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
        $__internal_b9b8fb17cd7fd3fdc4e3555a694d41fa97d68d73763c2c9d4df3ad5dac894432 = $this->env->getExtension("native_profiler");
        $__internal_b9b8fb17cd7fd3fdc4e3555a694d41fa97d68d73763c2c9d4df3ad5dac894432->enter($__internal_b9b8fb17cd7fd3fdc4e3555a694d41fa97d68d73763c2c9d4df3ad5dac894432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_b9b8fb17cd7fd3fdc4e3555a694d41fa97d68d73763c2c9d4df3ad5dac894432->leave($__internal_b9b8fb17cd7fd3fdc4e3555a694d41fa97d68d73763c2c9d4df3ad5dac894432_prof);

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
