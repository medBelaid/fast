<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_586fb1279bc8404d07a7801773a20367a50e9cc74001e0532ffcd1621b10be8d extends Twig_Template
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
        $__internal_965fd551ff518d711ba71f1ffbcdf28427cfa136522775a30466f3bfad777d41 = $this->env->getExtension("native_profiler");
        $__internal_965fd551ff518d711ba71f1ffbcdf28427cfa136522775a30466f3bfad777d41->enter($__internal_965fd551ff518d711ba71f1ffbcdf28427cfa136522775a30466f3bfad777d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
                    <a class=\"brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Fast Print Sahline</a>
                    <div class=\"nav-collapse collapse\">
                        ";
        // line 26
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 27
        echo "                    </div>
                </div>
            </div>
        </div>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 39
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 40
        echo "                        </ul>
                    </div> 

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Mohamed Belaid</p>
                    </div>
                </div>
            </div>
        </footer>\t
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </body>
</html>";
        
        $__internal_965fd551ff518d711ba71f1ffbcdf28427cfa136522775a30466f3bfad777d41->leave($__internal_965fd551ff518d711ba71f1ffbcdf28427cfa136522775a30466f3bfad777d41_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_4d472a19e3c0080f62fb7b6df2f70c93e51e2f06f11bbed4a987dff8117ff024 = $this->env->getExtension("native_profiler");
        $__internal_4d472a19e3c0080f62fb7b6df2f70c93e51e2f06f11bbed4a987dff8117ff024->enter($__internal_4d472a19e3c0080f62fb7b6df2f70c93e51e2f06f11bbed4a987dff8117ff024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Fast Print Sahline - By Mohamed Belaid";
        
        $__internal_4d472a19e3c0080f62fb7b6df2f70c93e51e2f06f11bbed4a987dff8117ff024->leave($__internal_4d472a19e3c0080f62fb7b6df2f70c93e51e2f06f11bbed4a987dff8117ff024_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_eb29a93732ddfae8117ea63c5a93ce26f7b2f24ad70df4086348d3dec7745a0a = $this->env->getExtension("native_profiler");
        $__internal_eb29a93732ddfae8117ea63c5a93ce26f7b2f24ad70df4086348d3dec7745a0a->enter($__internal_eb29a93732ddfae8117ea63c5a93ce26f7b2f24ad70df4086348d3dec7745a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_eb29a93732ddfae8117ea63c5a93ce26f7b2f24ad70df4086348d3dec7745a0a->leave($__internal_eb29a93732ddfae8117ea63c5a93ce26f7b2f24ad70df4086348d3dec7745a0a_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_4ff3b5a10f241adb212b8d129b30d0d4ca8b697563fb5c714f62d577aaae8141 = $this->env->getExtension("native_profiler");
        $__internal_4ff3b5a10f241adb212b8d129b30d0d4ca8b697563fb5c714f62d577aaae8141->enter($__internal_4ff3b5a10f241adb212b8d129b30d0d4ca8b697563fb5c714f62d577aaae8141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_4ff3b5a10f241adb212b8d129b30d0d4ca8b697563fb5c714f62d577aaae8141->leave($__internal_4ff3b5a10f241adb212b8d129b30d0d4ca8b697563fb5c714f62d577aaae8141_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c9cab6cf90f5f9f4a9489faec6fc3e9c7a226edfd015463068cb82b9945eaa6 = $this->env->getExtension("native_profiler");
        $__internal_2c9cab6cf90f5f9f4a9489faec6fc3e9c7a226edfd015463068cb82b9945eaa6->enter($__internal_2c9cab6cf90f5f9f4a9489faec6fc3e9c7a226edfd015463068cb82b9945eaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c9cab6cf90f5f9f4a9489faec6fc3e9c7a226edfd015463068cb82b9945eaa6->leave($__internal_2c9cab6cf90f5f9f4a9489faec6fc3e9c7a226edfd015463068cb82b9945eaa6_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_72c3047920cc61bc9e083ca56338fd7d9a19804113352d98902fde9957d3acb8 = $this->env->getExtension("native_profiler");
        $__internal_72c3047920cc61bc9e083ca56338fd7d9a19804113352d98902fde9957d3acb8->enter($__internal_72c3047920cc61bc9e083ca56338fd7d9a19804113352d98902fde9957d3acb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72c3047920cc61bc9e083ca56338fd7d9a19804113352d98902fde9957d3acb8->leave($__internal_72c3047920cc61bc9e083ca56338fd7d9a19804113352d98902fde9957d3acb8_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0af43ef27e516e5e3b688fb0249c0bf3a4f6dc36ad409e7f344a86fcc8177606 = $this->env->getExtension("native_profiler");
        $__internal_0af43ef27e516e5e3b688fb0249c0bf3a4f6dc36ad409e7f344a86fcc8177606->enter($__internal_0af43ef27e516e5e3b688fb0249c0bf3a4f6dc36ad409e7f344a86fcc8177606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0af43ef27e516e5e3b688fb0249c0bf3a4f6dc36ad409e7f344a86fcc8177606->leave($__internal_0af43ef27e516e5e3b688fb0249c0bf3a4f6dc36ad409e7f344a86fcc8177606_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 64,  204 => 31,  193 => 12,  182 => 7,  171 => 6,  159 => 5,  151 => 65,  149 => 64,  145 => 63,  141 => 62,  137 => 61,  129 => 56,  120 => 50,  112 => 45,  105 => 40,  103 => 39,  94 => 32,  92 => 31,  86 => 27,  84 => 26,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}Fast Print Sahline - By Mohamed Belaid{% endblock %}</title>*/
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
/*                     <a class="brand" href="{{ path('produits') }}">Fast Print Sahline</a>*/
/*                     <div class="nav-collapse collapse">*/
/*                         {% render(controller('EcommerceBundle:Produits:recherche')) %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% block body %}{% endblock %}*/
/*         <hr />*/
/*         <footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="span4 offset1">*/
/*                         <h4>Informations</h4>*/
/*                         <ul class="nav nav-stacked">*/
/*                             {% render(controller('PagesBundle:Pages:menu')) %}*/
/*                         </ul>*/
/*                     </div> */
/* */
/*                     <div class="span4">*/
/*                         <h4>Notre entrepôt</h4>*/
/*                         <p><i class="icon-map-marker"></i>&nbsp;{{ adresse }}</p>*/
/*                     </div>*/
/* */
/*                     <div class="span2">*/
/*                         <h4>Nous contacter</h4>*/
/*                         <p><i class="icon-phone"></i>&nbsp;Tel: {{ telephone }}</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="span4">*/
/*                         <p>&copy; Copyright {{ "now"|date('Y') }} - Mohamed Belaid</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>	*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('js/slider.js') }}"></script>*/
/*         <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
