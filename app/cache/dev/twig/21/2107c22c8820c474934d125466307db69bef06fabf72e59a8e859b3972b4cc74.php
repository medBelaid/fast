<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c982732ca41ab414df36eaca13aebc7e6a20e3a4541b290806d4e66ed673b12e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43aefef7f50d069ee54c2266ed52cccd761331a5994558b2d20fb68f84562def = $this->env->getExtension("native_profiler");
        $__internal_43aefef7f50d069ee54c2266ed52cccd761331a5994558b2d20fb68f84562def->enter($__internal_43aefef7f50d069ee54c2266ed52cccd761331a5994558b2d20fb68f84562def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43aefef7f50d069ee54c2266ed52cccd761331a5994558b2d20fb68f84562def->leave($__internal_43aefef7f50d069ee54c2266ed52cccd761331a5994558b2d20fb68f84562def_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45169ad4b11d13e820b557f1062607b6289a41e992dc7b1c6ef05edd0bf338ab = $this->env->getExtension("native_profiler");
        $__internal_45169ad4b11d13e820b557f1062607b6289a41e992dc7b1c6ef05edd0bf338ab->enter($__internal_45169ad4b11d13e820b557f1062607b6289a41e992dc7b1c6ef05edd0bf338ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_45169ad4b11d13e820b557f1062607b6289a41e992dc7b1c6ef05edd0bf338ab->leave($__internal_45169ad4b11d13e820b557f1062607b6289a41e992dc7b1c6ef05edd0bf338ab_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0bdd74e914723121e8ffe0b58104a67e98b05402ea6bc6ee070a894af9cae949 = $this->env->getExtension("native_profiler");
        $__internal_0bdd74e914723121e8ffe0b58104a67e98b05402ea6bc6ee070a894af9cae949->enter($__internal_0bdd74e914723121e8ffe0b58104a67e98b05402ea6bc6ee070a894af9cae949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0bdd74e914723121e8ffe0b58104a67e98b05402ea6bc6ee070a894af9cae949->leave($__internal_0bdd74e914723121e8ffe0b58104a67e98b05402ea6bc6ee070a894af9cae949_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29de41c71312665147706fb53a930696e8658264e2ffda99f6daf80d6535b8f0 = $this->env->getExtension("native_profiler");
        $__internal_29de41c71312665147706fb53a930696e8658264e2ffda99f6daf80d6535b8f0->enter($__internal_29de41c71312665147706fb53a930696e8658264e2ffda99f6daf80d6535b8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_29de41c71312665147706fb53a930696e8658264e2ffda99f6daf80d6535b8f0->leave($__internal_29de41c71312665147706fb53a930696e8658264e2ffda99f6daf80d6535b8f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
