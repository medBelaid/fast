<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_697e15330d492da17502ca9bb9706ae5c783a9dd7479ac1c825f6298836ca78b extends Twig_Template
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
        $__internal_804d5a46c7743834e6599eedebaed00150e7014bded54d9df8584f5cc3cb9a6b = $this->env->getExtension("native_profiler");
        $__internal_804d5a46c7743834e6599eedebaed00150e7014bded54d9df8584f5cc3cb9a6b->enter($__internal_804d5a46c7743834e6599eedebaed00150e7014bded54d9df8584f5cc3cb9a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

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
        
        $__internal_804d5a46c7743834e6599eedebaed00150e7014bded54d9df8584f5cc3cb9a6b->leave($__internal_804d5a46c7743834e6599eedebaed00150e7014bded54d9df8584f5cc3cb9a6b_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a1ab2cf75993f78a935f0ada9078a126c6d0d2124219f20e08e2cdb46cea4ffa = $this->env->getExtension("native_profiler");
        $__internal_a1ab2cf75993f78a935f0ada9078a126c6d0d2124219f20e08e2cdb46cea4ffa->enter($__internal_a1ab2cf75993f78a935f0ada9078a126c6d0d2124219f20e08e2cdb46cea4ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Ecommerce Fruits & légumes - By DevAndClick";
        
        $__internal_a1ab2cf75993f78a935f0ada9078a126c6d0d2124219f20e08e2cdb46cea4ffa->leave($__internal_a1ab2cf75993f78a935f0ada9078a126c6d0d2124219f20e08e2cdb46cea4ffa_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_55975e86247a65829923dcf9e9ca02a14924bb3e654e016f73e1ea4fbb9d580c = $this->env->getExtension("native_profiler");
        $__internal_55975e86247a65829923dcf9e9ca02a14924bb3e654e016f73e1ea4fbb9d580c->enter($__internal_55975e86247a65829923dcf9e9ca02a14924bb3e654e016f73e1ea4fbb9d580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_55975e86247a65829923dcf9e9ca02a14924bb3e654e016f73e1ea4fbb9d580c->leave($__internal_55975e86247a65829923dcf9e9ca02a14924bb3e654e016f73e1ea4fbb9d580c_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_8fa85a0888c44d75dfb88db650de41a619373430288f7b0bd1063a2101c10834 = $this->env->getExtension("native_profiler");
        $__internal_8fa85a0888c44d75dfb88db650de41a619373430288f7b0bd1063a2101c10834->enter($__internal_8fa85a0888c44d75dfb88db650de41a619373430288f7b0bd1063a2101c10834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_8fa85a0888c44d75dfb88db650de41a619373430288f7b0bd1063a2101c10834->leave($__internal_8fa85a0888c44d75dfb88db650de41a619373430288f7b0bd1063a2101c10834_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d0034966961f537098a54ee3caf256b30e472d87b7ccb17ab2542411ab4e210 = $this->env->getExtension("native_profiler");
        $__internal_6d0034966961f537098a54ee3caf256b30e472d87b7ccb17ab2542411ab4e210->enter($__internal_6d0034966961f537098a54ee3caf256b30e472d87b7ccb17ab2542411ab4e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6d0034966961f537098a54ee3caf256b30e472d87b7ccb17ab2542411ab4e210->leave($__internal_6d0034966961f537098a54ee3caf256b30e472d87b7ccb17ab2542411ab4e210_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc2e15e9593a090f826bc78f857bdc8be6df37aa486b3a0b4fea8a1f53b5d290 = $this->env->getExtension("native_profiler");
        $__internal_cc2e15e9593a090f826bc78f857bdc8be6df37aa486b3a0b4fea8a1f53b5d290->enter($__internal_cc2e15e9593a090f826bc78f857bdc8be6df37aa486b3a0b4fea8a1f53b5d290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc2e15e9593a090f826bc78f857bdc8be6df37aa486b3a0b4fea8a1f53b5d290->leave($__internal_cc2e15e9593a090f826bc78f857bdc8be6df37aa486b3a0b4fea8a1f53b5d290_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_633aa2e339e663268e9e7d91886bb85de617f91f6fb2329459293dc975599c76 = $this->env->getExtension("native_profiler");
        $__internal_633aa2e339e663268e9e7d91886bb85de617f91f6fb2329459293dc975599c76->enter($__internal_633aa2e339e663268e9e7d91886bb85de617f91f6fb2329459293dc975599c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_633aa2e339e663268e9e7d91886bb85de617f91f6fb2329459293dc975599c76->leave($__internal_633aa2e339e663268e9e7d91886bb85de617f91f6fb2329459293dc975599c76_prof);

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
