<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f3808951288b2fc8d157c269171292d98f43a00217c3dc4411a785070dc128e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_965777a1c98d0b2d0fe4c58ade3df7b26d9408db60b30b56ba1cdf81ebf6aabf = $this->env->getExtension("native_profiler");
        $__internal_965777a1c98d0b2d0fe4c58ade3df7b26d9408db60b30b56ba1cdf81ebf6aabf->enter($__internal_965777a1c98d0b2d0fe4c58ade3df7b26d9408db60b30b56ba1cdf81ebf6aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965777a1c98d0b2d0fe4c58ade3df7b26d9408db60b30b56ba1cdf81ebf6aabf->leave($__internal_965777a1c98d0b2d0fe4c58ade3df7b26d9408db60b30b56ba1cdf81ebf6aabf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cedeb0d45f13dcb263375ca86f214708854c996569a164f7fed083b4ee5d8ed2 = $this->env->getExtension("native_profiler");
        $__internal_cedeb0d45f13dcb263375ca86f214708854c996569a164f7fed083b4ee5d8ed2->enter($__internal_cedeb0d45f13dcb263375ca86f214708854c996569a164f7fed083b4ee5d8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                <strong>";
                // line 8
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "</div>
";
        
        $__internal_cedeb0d45f13dcb263375ca86f214708854c996569a164f7fed083b4ee5d8ed2->leave($__internal_cedeb0d45f13dcb263375ca86f214708854c996569a164f7fed083b4ee5d8ed2_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55e59ac7d76745c7993011fe2c30193130f239a316d8f2ba3992a4512fe316d6 = $this->env->getExtension("native_profiler");
        $__internal_55e59ac7d76745c7993011fe2c30193130f239a316d8f2ba3992a4512fe316d6->enter($__internal_55e59ac7d76745c7993011fe2c30193130f239a316d8f2ba3992a4512fe316d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_55e59ac7d76745c7993011fe2c30193130f239a316d8f2ba3992a4512fe316d6->leave($__internal_55e59ac7d76745c7993011fe2c30193130f239a316d8f2ba3992a4512fe316d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  86 => 13,  78 => 15,  76 => 13,  73 => 12,  67 => 11,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}        */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     {% for type, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="alert alert-{{ type }}">*/
/*                 <strong>{{ message }}</strong>*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/
/* {% endblock %}*/
