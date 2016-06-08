<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_02ae736324bf61531002ccfdec1eddad87b0d0959a3adce58afcbe5233063929 extends Twig_Template
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
        $__internal_f177a3a49ff8d49c20c9cc1de4fb544ee0c95b3741a121814345af9a4f899e8c = $this->env->getExtension("native_profiler");
        $__internal_f177a3a49ff8d49c20c9cc1de4fb544ee0c95b3741a121814345af9a4f899e8c->enter($__internal_f177a3a49ff8d49c20c9cc1de4fb544ee0c95b3741a121814345af9a4f899e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f177a3a49ff8d49c20c9cc1de4fb544ee0c95b3741a121814345af9a4f899e8c->leave($__internal_f177a3a49ff8d49c20c9cc1de4fb544ee0c95b3741a121814345af9a4f899e8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c750e9e16d0dc7ef8857b6339dceaeabc2d96c3ebe0ef6f6ce94fb375f7eb0b9 = $this->env->getExtension("native_profiler");
        $__internal_c750e9e16d0dc7ef8857b6339dceaeabc2d96c3ebe0ef6f6ce94fb375f7eb0b9->enter($__internal_c750e9e16d0dc7ef8857b6339dceaeabc2d96c3ebe0ef6f6ce94fb375f7eb0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c750e9e16d0dc7ef8857b6339dceaeabc2d96c3ebe0ef6f6ce94fb375f7eb0b9->leave($__internal_c750e9e16d0dc7ef8857b6339dceaeabc2d96c3ebe0ef6f6ce94fb375f7eb0b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_527892b389656388a81ebf49aaea2e9ba83e83fcff2934819fd73452adc6ac81 = $this->env->getExtension("native_profiler");
        $__internal_527892b389656388a81ebf49aaea2e9ba83e83fcff2934819fd73452adc6ac81->enter($__internal_527892b389656388a81ebf49aaea2e9ba83e83fcff2934819fd73452adc6ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_527892b389656388a81ebf49aaea2e9ba83e83fcff2934819fd73452adc6ac81->leave($__internal_527892b389656388a81ebf49aaea2e9ba83e83fcff2934819fd73452adc6ac81_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23dec5388b8dd725948a17ae543f0a227db3d34bffa71af430dbd6dd9ebddde2 = $this->env->getExtension("native_profiler");
        $__internal_23dec5388b8dd725948a17ae543f0a227db3d34bffa71af430dbd6dd9ebddde2->enter($__internal_23dec5388b8dd725948a17ae543f0a227db3d34bffa71af430dbd6dd9ebddde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_23dec5388b8dd725948a17ae543f0a227db3d34bffa71af430dbd6dd9ebddde2->leave($__internal_23dec5388b8dd725948a17ae543f0a227db3d34bffa71af430dbd6dd9ebddde2_prof);

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
