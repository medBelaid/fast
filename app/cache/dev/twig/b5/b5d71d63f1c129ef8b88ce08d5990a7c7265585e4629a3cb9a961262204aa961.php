<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_24e90dceef9880d009223cd9b6377a241f032eb55c27d4cc38129411b3d0171a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_881e185e3993c2577eb5063d3c706432cf9c7c3a9651af5ca3e644df668e70ad = $this->env->getExtension("native_profiler");
        $__internal_881e185e3993c2577eb5063d3c706432cf9c7c3a9651af5ca3e644df668e70ad->enter($__internal_881e185e3993c2577eb5063d3c706432cf9c7c3a9651af5ca3e644df668e70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"index.php\">Administration</a>
                </div>
            </div>
        </div>
            
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 31
        $this->loadTemplate("::modulesUsed/navigationAdmin.html.twig", "::layout/layoutAdmin.html.twig", 31)->display($context);
        // line 32
        echo "                <div class=\"span9\">
                    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>

        <hr />
\t<footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright 2014 - DevAndClick</p>
                </div>
            </div>
\t</footer>\t
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/pages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>";
        
        $__internal_881e185e3993c2577eb5063d3c706432cf9c7c3a9651af5ca3e644df668e70ad->leave($__internal_881e185e3993c2577eb5063d3c706432cf9c7c3a9651af5ca3e644df668e70ad_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_37e83ff6cf37789887456c0c5ae463a6bee7d631ea52938583b6be6d4757a553 = $this->env->getExtension("native_profiler");
        $__internal_37e83ff6cf37789887456c0c5ae463a6bee7d631ea52938583b6be6d4757a553->enter($__internal_37e83ff6cf37789887456c0c5ae463a6bee7d631ea52938583b6be6d4757a553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Ecommerce Fruits & légumes - By DevAndClick";
        
        $__internal_37e83ff6cf37789887456c0c5ae463a6bee7d631ea52938583b6be6d4757a553->leave($__internal_37e83ff6cf37789887456c0c5ae463a6bee7d631ea52938583b6be6d4757a553_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_a5d4a5d491c2610ac7fd995d4af7e321f46b1c2fad55f620bb85cee35a305b3a = $this->env->getExtension("native_profiler");
        $__internal_a5d4a5d491c2610ac7fd995d4af7e321f46b1c2fad55f620bb85cee35a305b3a->enter($__internal_a5d4a5d491c2610ac7fd995d4af7e321f46b1c2fad55f620bb85cee35a305b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_a5d4a5d491c2610ac7fd995d4af7e321f46b1c2fad55f620bb85cee35a305b3a->leave($__internal_a5d4a5d491c2610ac7fd995d4af7e321f46b1c2fad55f620bb85cee35a305b3a_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_ec744b10811523ddfa68c40244cbcb2143124654c7ae545c8800e4e5c42e2b3c = $this->env->getExtension("native_profiler");
        $__internal_ec744b10811523ddfa68c40244cbcb2143124654c7ae545c8800e4e5c42e2b3c->enter($__internal_ec744b10811523ddfa68c40244cbcb2143124654c7ae545c8800e4e5c42e2b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_ec744b10811523ddfa68c40244cbcb2143124654c7ae545c8800e4e5c42e2b3c->leave($__internal_ec744b10811523ddfa68c40244cbcb2143124654c7ae545c8800e4e5c42e2b3c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_901d58ba689cf3be537a9510d30e1d43f359307ed947260c014b9c5909c08a66 = $this->env->getExtension("native_profiler");
        $__internal_901d58ba689cf3be537a9510d30e1d43f359307ed947260c014b9c5909c08a66->enter($__internal_901d58ba689cf3be537a9510d30e1d43f359307ed947260c014b9c5909c08a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_901d58ba689cf3be537a9510d30e1d43f359307ed947260c014b9c5909c08a66->leave($__internal_901d58ba689cf3be537a9510d30e1d43f359307ed947260c014b9c5909c08a66_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fea60e00ddc416811f8f7e08ca605dfe36e5dfa04f98a274ec7460c14157d3dc = $this->env->getExtension("native_profiler");
        $__internal_fea60e00ddc416811f8f7e08ca605dfe36e5dfa04f98a274ec7460c14157d3dc->enter($__internal_fea60e00ddc416811f8f7e08ca605dfe36e5dfa04f98a274ec7460c14157d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fea60e00ddc416811f8f7e08ca605dfe36e5dfa04f98a274ec7460c14157d3dc->leave($__internal_fea60e00ddc416811f8f7e08ca605dfe36e5dfa04f98a274ec7460c14157d3dc_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33443d9a3bd16b5e7a28d1f6525dc8b714f527027fffdf89c1d4fc47b0d2ff33 = $this->env->getExtension("native_profiler");
        $__internal_33443d9a3bd16b5e7a28d1f6525dc8b714f527027fffdf89c1d4fc47b0d2ff33->enter($__internal_33443d9a3bd16b5e7a28d1f6525dc8b714f527027fffdf89c1d4fc47b0d2ff33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_33443d9a3bd16b5e7a28d1f6525dc8b714f527027fffdf89c1d4fc47b0d2ff33->leave($__internal_33443d9a3bd16b5e7a28d1f6525dc8b714f527027fffdf89c1d4fc47b0d2ff33_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 50,  175 => 33,  164 => 12,  153 => 7,  142 => 6,  130 => 5,  122 => 51,  120 => 50,  116 => 49,  112 => 48,  108 => 47,  93 => 34,  91 => 33,  88 => 32,  86 => 31,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}Ecommerce Fruits & légumes - By DevAndClick{% endblock %}</title>*/
/*         <meta name="keywords" content="{% block motsCles %}{% endblock %}" />*/
/*         <meta name="description" content="{% block description %}{% endblock %}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="brand" href="index.php">Administration</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*             */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% include '::modulesUsed/navigationAdmin.html.twig' %}*/
/*                 <div class="span9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr />*/
/* 	<footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*             <div class="row">*/
/*                 <div class="span4">*/
/*                     <p>&copy; Copyright 2014 - DevAndClick</p>*/
/*                 </div>*/
/*             </div>*/
/* 	</footer>	*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('bundles/pages/ckeditor/ckeditor.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
