<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_8de2508f608c93dc7cbc54d2e82eae46004969151cc8622132a64fda884f75d6 extends Twig_Template
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
        $__internal_886af1d687897822f9feae104b2057c079a78ea4d345c1fd0a99e437a6fabe9b = $this->env->getExtension("native_profiler");
        $__internal_886af1d687897822f9feae104b2057c079a78ea4d345c1fd0a99e437a6fabe9b->enter($__internal_886af1d687897822f9feae104b2057c079a78ea4d345c1fd0a99e437a6fabe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

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
                    <p>&copy; Copyright 2016 - Mohamed Belaid</p>
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
        
        $__internal_886af1d687897822f9feae104b2057c079a78ea4d345c1fd0a99e437a6fabe9b->leave($__internal_886af1d687897822f9feae104b2057c079a78ea4d345c1fd0a99e437a6fabe9b_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_15cfa01a23ea144c6922d8bc321164a79020109af263b8732261c9a177552ce7 = $this->env->getExtension("native_profiler");
        $__internal_15cfa01a23ea144c6922d8bc321164a79020109af263b8732261c9a177552ce7->enter($__internal_15cfa01a23ea144c6922d8bc321164a79020109af263b8732261c9a177552ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Ecommerce Fruits & légumes - By DevAndClick";
        
        $__internal_15cfa01a23ea144c6922d8bc321164a79020109af263b8732261c9a177552ce7->leave($__internal_15cfa01a23ea144c6922d8bc321164a79020109af263b8732261c9a177552ce7_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_3516c2530ca355659ca4c1e3578c4b6311acf644d85b03d88d3ab02b87db938d = $this->env->getExtension("native_profiler");
        $__internal_3516c2530ca355659ca4c1e3578c4b6311acf644d85b03d88d3ab02b87db938d->enter($__internal_3516c2530ca355659ca4c1e3578c4b6311acf644d85b03d88d3ab02b87db938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_3516c2530ca355659ca4c1e3578c4b6311acf644d85b03d88d3ab02b87db938d->leave($__internal_3516c2530ca355659ca4c1e3578c4b6311acf644d85b03d88d3ab02b87db938d_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_6c573702f59b2aa7d02c54238df1b3366eb5da0d87b1242ad9b8e90dc2a0bee7 = $this->env->getExtension("native_profiler");
        $__internal_6c573702f59b2aa7d02c54238df1b3366eb5da0d87b1242ad9b8e90dc2a0bee7->enter($__internal_6c573702f59b2aa7d02c54238df1b3366eb5da0d87b1242ad9b8e90dc2a0bee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_6c573702f59b2aa7d02c54238df1b3366eb5da0d87b1242ad9b8e90dc2a0bee7->leave($__internal_6c573702f59b2aa7d02c54238df1b3366eb5da0d87b1242ad9b8e90dc2a0bee7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12b69e384f3554339692000b075c4ea361c0fe5594a82e06a5dfcd5c28d9d675 = $this->env->getExtension("native_profiler");
        $__internal_12b69e384f3554339692000b075c4ea361c0fe5594a82e06a5dfcd5c28d9d675->enter($__internal_12b69e384f3554339692000b075c4ea361c0fe5594a82e06a5dfcd5c28d9d675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12b69e384f3554339692000b075c4ea361c0fe5594a82e06a5dfcd5c28d9d675->leave($__internal_12b69e384f3554339692000b075c4ea361c0fe5594a82e06a5dfcd5c28d9d675_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ab611f8de0b0dc17e1dbd98b8be46b054760c71c3ceb11c04cd83f7f4eaae04 = $this->env->getExtension("native_profiler");
        $__internal_8ab611f8de0b0dc17e1dbd98b8be46b054760c71c3ceb11c04cd83f7f4eaae04->enter($__internal_8ab611f8de0b0dc17e1dbd98b8be46b054760c71c3ceb11c04cd83f7f4eaae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ab611f8de0b0dc17e1dbd98b8be46b054760c71c3ceb11c04cd83f7f4eaae04->leave($__internal_8ab611f8de0b0dc17e1dbd98b8be46b054760c71c3ceb11c04cd83f7f4eaae04_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f83c8bafe42f9eee7076b214b4a0444a455cd68a6608ac3489de213d246c0c7c = $this->env->getExtension("native_profiler");
        $__internal_f83c8bafe42f9eee7076b214b4a0444a455cd68a6608ac3489de213d246c0c7c->enter($__internal_f83c8bafe42f9eee7076b214b4a0444a455cd68a6608ac3489de213d246c0c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f83c8bafe42f9eee7076b214b4a0444a455cd68a6608ac3489de213d246c0c7c->leave($__internal_f83c8bafe42f9eee7076b214b4a0444a455cd68a6608ac3489de213d246c0c7c_prof);

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
/*                     <p>&copy; Copyright 2016 - Mohamed Belaid</p>*/
/*                 </div>*/
/*             </div>*/
/* 	</footer>	*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*         <script src="{{ asset('bundles/pages/ckeditor/ckeditor.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
