<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14fc010cf1f9f69d00954e64ebfb223f47d92e4fa27bf0393a8b67a814d23a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445516500c319dc4c18ca6edb497bb35c356e7da8aee2559dd37b19744f0396b = $this->env->getExtension("native_profiler");
        $__internal_445516500c319dc4c18ca6edb497bb35c356e7da8aee2559dd37b19744f0396b->enter($__internal_445516500c319dc4c18ca6edb497bb35c356e7da8aee2559dd37b19744f0396b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445516500c319dc4c18ca6edb497bb35c356e7da8aee2559dd37b19744f0396b->leave($__internal_445516500c319dc4c18ca6edb497bb35c356e7da8aee2559dd37b19744f0396b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80a1699a3744b0fb2726935238881b03514c004196758fc695e87c1e0f93ea73 = $this->env->getExtension("native_profiler");
        $__internal_80a1699a3744b0fb2726935238881b03514c004196758fc695e87c1e0f93ea73->enter($__internal_80a1699a3744b0fb2726935238881b03514c004196758fc695e87c1e0f93ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80a1699a3744b0fb2726935238881b03514c004196758fc695e87c1e0f93ea73->leave($__internal_80a1699a3744b0fb2726935238881b03514c004196758fc695e87c1e0f93ea73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8db5508ea6455e3ca4b3096abd82ba148f0046f473861bd75f1d501af491b4c = $this->env->getExtension("native_profiler");
        $__internal_f8db5508ea6455e3ca4b3096abd82ba148f0046f473861bd75f1d501af491b4c->enter($__internal_f8db5508ea6455e3ca4b3096abd82ba148f0046f473861bd75f1d501af491b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f8db5508ea6455e3ca4b3096abd82ba148f0046f473861bd75f1d501af491b4c->leave($__internal_f8db5508ea6455e3ca4b3096abd82ba148f0046f473861bd75f1d501af491b4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f21ed46c4c740c30dc2b0c72b1bb9a1804349791093b2b2d9c614de85cd5de53 = $this->env->getExtension("native_profiler");
        $__internal_f21ed46c4c740c30dc2b0c72b1bb9a1804349791093b2b2d9c614de85cd5de53->enter($__internal_f21ed46c4c740c30dc2b0c72b1bb9a1804349791093b2b2d9c614de85cd5de53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f21ed46c4c740c30dc2b0c72b1bb9a1804349791093b2b2d9c614de85cd5de53->leave($__internal_f21ed46c4c740c30dc2b0c72b1bb9a1804349791093b2b2d9c614de85cd5de53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
