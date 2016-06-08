<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3acd743576fd4f9617ef19ad481605cd9b5b32933d22bbe0143bff1ec073d29d extends Twig_Template
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
        $__internal_d4666be613afbd8f11a16a027bd2c7b44b4d082042dfe2d7c77600c4fbacd4af = $this->env->getExtension("native_profiler");
        $__internal_d4666be613afbd8f11a16a027bd2c7b44b4d082042dfe2d7c77600c4fbacd4af->enter($__internal_d4666be613afbd8f11a16a027bd2c7b44b4d082042dfe2d7c77600c4fbacd4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4666be613afbd8f11a16a027bd2c7b44b4d082042dfe2d7c77600c4fbacd4af->leave($__internal_d4666be613afbd8f11a16a027bd2c7b44b4d082042dfe2d7c77600c4fbacd4af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f22038bda4617c94e0d986626838fcbe4701d9046816861baff60be8493b86b6 = $this->env->getExtension("native_profiler");
        $__internal_f22038bda4617c94e0d986626838fcbe4701d9046816861baff60be8493b86b6->enter($__internal_f22038bda4617c94e0d986626838fcbe4701d9046816861baff60be8493b86b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f22038bda4617c94e0d986626838fcbe4701d9046816861baff60be8493b86b6->leave($__internal_f22038bda4617c94e0d986626838fcbe4701d9046816861baff60be8493b86b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cc6753f3b299566c585aacf9fb84c121bb4f1dd3ecb58f3d034114a5790ec62 = $this->env->getExtension("native_profiler");
        $__internal_8cc6753f3b299566c585aacf9fb84c121bb4f1dd3ecb58f3d034114a5790ec62->enter($__internal_8cc6753f3b299566c585aacf9fb84c121bb4f1dd3ecb58f3d034114a5790ec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8cc6753f3b299566c585aacf9fb84c121bb4f1dd3ecb58f3d034114a5790ec62->leave($__internal_8cc6753f3b299566c585aacf9fb84c121bb4f1dd3ecb58f3d034114a5790ec62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b1ee6bb60a951001f33a263721fbf8addb48da893b48ee9b098ae6b6cde7e55 = $this->env->getExtension("native_profiler");
        $__internal_0b1ee6bb60a951001f33a263721fbf8addb48da893b48ee9b098ae6b6cde7e55->enter($__internal_0b1ee6bb60a951001f33a263721fbf8addb48da893b48ee9b098ae6b6cde7e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0b1ee6bb60a951001f33a263721fbf8addb48da893b48ee9b098ae6b6cde7e55->leave($__internal_0b1ee6bb60a951001f33a263721fbf8addb48da893b48ee9b098ae6b6cde7e55_prof);

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
