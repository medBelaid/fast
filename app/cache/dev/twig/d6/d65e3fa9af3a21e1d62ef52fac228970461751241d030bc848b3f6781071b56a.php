<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4433dbd2da30cd3010db77657265658935a9b940f1fa960fffb8eabdb940733b extends Twig_Template
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
        $__internal_006aac368bc4032a24fe713a8894fb3033c7bc053a4b0072a3f5643d972b54a0 = $this->env->getExtension("native_profiler");
        $__internal_006aac368bc4032a24fe713a8894fb3033c7bc053a4b0072a3f5643d972b54a0->enter($__internal_006aac368bc4032a24fe713a8894fb3033c7bc053a4b0072a3f5643d972b54a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006aac368bc4032a24fe713a8894fb3033c7bc053a4b0072a3f5643d972b54a0->leave($__internal_006aac368bc4032a24fe713a8894fb3033c7bc053a4b0072a3f5643d972b54a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1cd0f8b7fdb7256e3e2bdd7a85fe58f58ba97a564a58e77edb72cc4030f0d0d = $this->env->getExtension("native_profiler");
        $__internal_d1cd0f8b7fdb7256e3e2bdd7a85fe58f58ba97a564a58e77edb72cc4030f0d0d->enter($__internal_d1cd0f8b7fdb7256e3e2bdd7a85fe58f58ba97a564a58e77edb72cc4030f0d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1cd0f8b7fdb7256e3e2bdd7a85fe58f58ba97a564a58e77edb72cc4030f0d0d->leave($__internal_d1cd0f8b7fdb7256e3e2bdd7a85fe58f58ba97a564a58e77edb72cc4030f0d0d_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45b7c3be153738a0512db3fe0e424082537ef45f0a25fae26f56f49c97a6830b = $this->env->getExtension("native_profiler");
        $__internal_45b7c3be153738a0512db3fe0e424082537ef45f0a25fae26f56f49c97a6830b->enter($__internal_45b7c3be153738a0512db3fe0e424082537ef45f0a25fae26f56f49c97a6830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 14
        echo "    ";
        
        $__internal_45b7c3be153738a0512db3fe0e424082537ef45f0a25fae26f56f49c97a6830b->leave($__internal_45b7c3be153738a0512db3fe0e424082537ef45f0a25fae26f56f49c97a6830b_prof);

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
