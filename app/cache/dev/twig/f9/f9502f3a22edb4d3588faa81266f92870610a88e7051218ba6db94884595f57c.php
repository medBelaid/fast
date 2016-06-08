<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_d598c0f34bfd8622ce70b3994eb480dc1fe467130842f16d50070fe5ab643438 extends Twig_Template
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
        $__internal_baca34fac0e4fa40f76ff189e092ac03993ff8930927d0ae7b575d8e55bb6631 = $this->env->getExtension("native_profiler");
        $__internal_baca34fac0e4fa40f76ff189e092ac03993ff8930927d0ae7b575d8e55bb6631->enter($__internal_baca34fac0e4fa40f76ff189e092ac03993ff8930927d0ae7b575d8e55bb6631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>";
        
        $__internal_baca34fac0e4fa40f76ff189e092ac03993ff8930927d0ae7b575d8e55bb6631->leave($__internal_baca34fac0e4fa40f76ff189e092ac03993ff8930927d0ae7b575d8e55bb6631_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_556b9f5f66acb8b6f52d8e4c77edf912cfaba105c1ac5ecd4dd511d9bc820c8e = $this->env->getExtension("native_profiler");
        $__internal_556b9f5f66acb8b6f52d8e4c77edf912cfaba105c1ac5ecd4dd511d9bc820c8e->enter($__internal_556b9f5f66acb8b6f52d8e4c77edf912cfaba105c1ac5ecd4dd511d9bc820c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Fast Print Sahline - By Mohamed Belaid";
        
        $__internal_556b9f5f66acb8b6f52d8e4c77edf912cfaba105c1ac5ecd4dd511d9bc820c8e->leave($__internal_556b9f5f66acb8b6f52d8e4c77edf912cfaba105c1ac5ecd4dd511d9bc820c8e_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_9f27eedcc52db0edca69edecabd7243fc3da769512f3cd6b75a7b22e2a2ec70d = $this->env->getExtension("native_profiler");
        $__internal_9f27eedcc52db0edca69edecabd7243fc3da769512f3cd6b75a7b22e2a2ec70d->enter($__internal_9f27eedcc52db0edca69edecabd7243fc3da769512f3cd6b75a7b22e2a2ec70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_9f27eedcc52db0edca69edecabd7243fc3da769512f3cd6b75a7b22e2a2ec70d->leave($__internal_9f27eedcc52db0edca69edecabd7243fc3da769512f3cd6b75a7b22e2a2ec70d_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_2368297b00ab301899d70ae9c135441064b9ba20aa52457abe89414952b873e2 = $this->env->getExtension("native_profiler");
        $__internal_2368297b00ab301899d70ae9c135441064b9ba20aa52457abe89414952b873e2->enter($__internal_2368297b00ab301899d70ae9c135441064b9ba20aa52457abe89414952b873e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_2368297b00ab301899d70ae9c135441064b9ba20aa52457abe89414952b873e2->leave($__internal_2368297b00ab301899d70ae9c135441064b9ba20aa52457abe89414952b873e2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_784f07a7e5ba792ddbc9164bf418c58f4124f6e60555bdded38cd20627359572 = $this->env->getExtension("native_profiler");
        $__internal_784f07a7e5ba792ddbc9164bf418c58f4124f6e60555bdded38cd20627359572->enter($__internal_784f07a7e5ba792ddbc9164bf418c58f4124f6e60555bdded38cd20627359572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_784f07a7e5ba792ddbc9164bf418c58f4124f6e60555bdded38cd20627359572->leave($__internal_784f07a7e5ba792ddbc9164bf418c58f4124f6e60555bdded38cd20627359572_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_c21539e55729b104c1ba1f2fbec7fa6065c1143fe3b3286f6febff28d24b7146 = $this->env->getExtension("native_profiler");
        $__internal_c21539e55729b104c1ba1f2fbec7fa6065c1143fe3b3286f6febff28d24b7146->enter($__internal_c21539e55729b104c1ba1f2fbec7fa6065c1143fe3b3286f6febff28d24b7146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c21539e55729b104c1ba1f2fbec7fa6065c1143fe3b3286f6febff28d24b7146->leave($__internal_c21539e55729b104c1ba1f2fbec7fa6065c1143fe3b3286f6febff28d24b7146_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6a49d0810f80a0d7ebf3a0fde047946049f973a9f6e6e9579fa164d543c33bb = $this->env->getExtension("native_profiler");
        $__internal_b6a49d0810f80a0d7ebf3a0fde047946049f973a9f6e6e9579fa164d543c33bb->enter($__internal_b6a49d0810f80a0d7ebf3a0fde047946049f973a9f6e6e9579fa164d543c33bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b6a49d0810f80a0d7ebf3a0fde047946049f973a9f6e6e9579fa164d543c33bb->leave($__internal_b6a49d0810f80a0d7ebf3a0fde047946049f973a9f6e6e9579fa164d543c33bb_prof);

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
        return array (  211 => 63,  200 => 31,  189 => 12,  178 => 7,  167 => 6,  155 => 5,  147 => 64,  145 => 63,  141 => 62,  137 => 61,  129 => 56,  120 => 50,  112 => 45,  105 => 40,  103 => 39,  94 => 32,  92 => 31,  86 => 27,  84 => 26,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
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
/*         <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
