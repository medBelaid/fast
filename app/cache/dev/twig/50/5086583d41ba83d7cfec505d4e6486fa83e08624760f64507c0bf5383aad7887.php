<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_0a80823472143ea63651e2bf96c9b9ee4c9960d210082122bc6958244bc42c65 extends Twig_Template
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
        $__internal_9bb25529430363891f0cbd1bd8c293fb7591a75ed8d529a063eb65a2d869777d = $this->env->getExtension("native_profiler");
        $__internal_9bb25529430363891f0cbd1bd8c293fb7591a75ed8d529a063eb65a2d869777d->enter($__internal_9bb25529430363891f0cbd1bd8c293fb7591a75ed8d529a063eb65a2d869777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"\"fr>
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

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no\" />


        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link href=\"http://fonts.googleapis.com/css?family=Lato:100,400,700|Lato:100,400,700|Lato:100,400,700|Lato:100,400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/styles.scssf6e3.css?12592113263448129181"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\"  />
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/flexsliderf6e3.css?12592113263448129181"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\"  />
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery.fancybox-1.3.4f6e3.css?12592113263448129181"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\"  />
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("themes_support/option_selection-04f21dade47c181126ac61b64d757485f84671daadfa90e4956a522cda4c2948.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery.masonry.minf6e3.js?12592113263448129181"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery.imagesloaded.minf6e3.js?12592113263448129181"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/mainf6e3.js?12592113263448129181"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery.flexslider-minf6e3.js?12592113263448129181"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery.fancybox-1.3.4.packf6e3.js?12592113263448129181"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    </head>
    <body class=\"template-index\">
    <div class=\"bodywrap cf\">
        <div id=\"navbar\">
            <div id=\"navpanel\">
                <div id=\"shoplogo\"><a href=\"index.php\" title=\"Fast Print Sahline\">

                        <span class=\"logotext\">FAST PRINT SAHLINE</span>

                    </a></div>

                ";
        // line 44
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 45
        echo "
                <div class=\"searchnavwrap panelinputblock\">

                    ";
        // line 48
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 49
        echo "
                    <button data-target=\".mainnav > ul\" data-speed=\"200\" class=\"btn-opts togglebutton\" type=\"button\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                </div>

                ";
        // line 53
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "::layout/layout.html.twig", 53)->display($context);
        // line 54
        echo "
                <div class=\"footer desktop-only\">

                    ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 58
            echo "                        ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "::layout/layout.html.twig", 58)->display($context);
            // line 59
            echo "                    ";
        } else {
            // line 60
            echo "                        ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "::layout/layout.html.twig", 60)->display($context);
            // line 61
            echo "                    ";
        }
        // line 62
        echo "
                    <div class=\"registerform\">
                        <span class=\"title\">Inscrivez &agrave; la newsletter</span>

                        <form method=\"post\" action=\"https://flamingo-theme.myshopify.com/contact#contact_form\" id=\"contact_form\" class=\"contact-form\" accept-charset=\"UTF-8\"><input type=\"hidden\" value=\"customer\" name=\"form_type\" /><input type=\"hidden\" name=\"utf8\" value=\"✓\" />


                            <div class=\"panelinputblock\">
                                <div class=\"panelinputinner\">
                                    <input type=\"hidden\" id=\"contact_tags\" name=\"contact[tags]\" value=\"prospect,newsletter\"/>
                                    <input type=\"email\" class=\"text required\" value=\"\" name=\"contact[email]\" placeholder=\"Entrez votre email ...\" />
                                    <button type=\"submit\" class=\"coolbutton\"><span class=\"icon-arrow3-right\"></span></button>
                                </div>
                            </div>

                        </form>

                    </div>



                    <div class=\"social-links infooter\">

                        <a title=\"Twitter\" class=\"twitter\" target=\"_blank\" href=\"https://twitter.com/fpsahline\"><i class=\"icon-twitter\"></i><span>Twitter</span></a>


                        <a title=\"Facebook\" class=\"facebook\" target=\"_blank\" href=\"https://www.facebook.com/Fast-Print-Sahline-Page-159463767738172/?fref=ts\"><i class=\"icon-facebook\"></i><span>Facebook</span></a>
                        <a title=\"Pinterest\" class=\"pinterest\" target=\"_blank\" href=\"https://fr.pinterest.com/fpsimpression/\"><i class=\"icon-pinterest\"></i><span>Pinterest</span></a>


                    </div><!-- .social-links -->


                    <div class=\"copy\">
                        <p>&copy; Copyright ";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Mohamed Belaid</p>
                    </div>

                </div></div></div>

        ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 109
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 110
        echo "                        </ul>
                    </div> 

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                    </div>
                </div>

            </div>
        </footer>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "    </div></body>
</html>";
        
        $__internal_9bb25529430363891f0cbd1bd8c293fb7591a75ed8d529a063eb65a2d869777d->leave($__internal_9bb25529430363891f0cbd1bd8c293fb7591a75ed8d529a063eb65a2d869777d_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_058267ef50f812735e89d18ccd33eaa8c2701dfcf5288a30ca2ba29c16555d95 = $this->env->getExtension("native_profiler");
        $__internal_058267ef50f812735e89d18ccd33eaa8c2701dfcf5288a30ca2ba29c16555d95->enter($__internal_058267ef50f812735e89d18ccd33eaa8c2701dfcf5288a30ca2ba29c16555d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Fast Print Sahline - By Mohamed Belaid";
        
        $__internal_058267ef50f812735e89d18ccd33eaa8c2701dfcf5288a30ca2ba29c16555d95->leave($__internal_058267ef50f812735e89d18ccd33eaa8c2701dfcf5288a30ca2ba29c16555d95_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_15bfe365458320f358f1c6e107c25ed8baf9464e6a9bc94fecad5d47d0e2bceb = $this->env->getExtension("native_profiler");
        $__internal_15bfe365458320f358f1c6e107c25ed8baf9464e6a9bc94fecad5d47d0e2bceb->enter($__internal_15bfe365458320f358f1c6e107c25ed8baf9464e6a9bc94fecad5d47d0e2bceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_15bfe365458320f358f1c6e107c25ed8baf9464e6a9bc94fecad5d47d0e2bceb->leave($__internal_15bfe365458320f358f1c6e107c25ed8baf9464e6a9bc94fecad5d47d0e2bceb_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_2ac7c15ee236fa797e1b123430c3dd070501bb99e4fbb52ba8549da7f2dd4ee8 = $this->env->getExtension("native_profiler");
        $__internal_2ac7c15ee236fa797e1b123430c3dd070501bb99e4fbb52ba8549da7f2dd4ee8->enter($__internal_2ac7c15ee236fa797e1b123430c3dd070501bb99e4fbb52ba8549da7f2dd4ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_2ac7c15ee236fa797e1b123430c3dd070501bb99e4fbb52ba8549da7f2dd4ee8->leave($__internal_2ac7c15ee236fa797e1b123430c3dd070501bb99e4fbb52ba8549da7f2dd4ee8_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7cd9fb5f37049c3cf5c099954a6fef61c1ec6cab40c6719903be7b6996ed9d01 = $this->env->getExtension("native_profiler");
        $__internal_7cd9fb5f37049c3cf5c099954a6fef61c1ec6cab40c6719903be7b6996ed9d01->enter($__internal_7cd9fb5f37049c3cf5c099954a6fef61c1ec6cab40c6719903be7b6996ed9d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7cd9fb5f37049c3cf5c099954a6fef61c1ec6cab40c6719903be7b6996ed9d01->leave($__internal_7cd9fb5f37049c3cf5c099954a6fef61c1ec6cab40c6719903be7b6996ed9d01_prof);

    }

    // line 101
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1b769e987fcbef8a646333f1958d7e04cdc58691d0752e7c6175e1c10d2b7ce = $this->env->getExtension("native_profiler");
        $__internal_d1b769e987fcbef8a646333f1958d7e04cdc58691d0752e7c6175e1c10d2b7ce->enter($__internal_d1b769e987fcbef8a646333f1958d7e04cdc58691d0752e7c6175e1c10d2b7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d1b769e987fcbef8a646333f1958d7e04cdc58691d0752e7c6175e1c10d2b7ce->leave($__internal_d1b769e987fcbef8a646333f1958d7e04cdc58691d0752e7c6175e1c10d2b7ce_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40334a96261e02110cc5ae7aeb03cefa88fbdb157795541fbee3062daffdcc0e = $this->env->getExtension("native_profiler");
        $__internal_40334a96261e02110cc5ae7aeb03cefa88fbdb157795541fbee3062daffdcc0e->enter($__internal_40334a96261e02110cc5ae7aeb03cefa88fbdb157795541fbee3062daffdcc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_40334a96261e02110cc5ae7aeb03cefa88fbdb157795541fbee3062daffdcc0e->leave($__internal_40334a96261e02110cc5ae7aeb03cefa88fbdb157795541fbee3062daffdcc0e_prof);

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
        return array (  319 => 127,  308 => 101,  297 => 17,  286 => 7,  275 => 6,  263 => 5,  255 => 128,  253 => 127,  249 => 126,  240 => 120,  232 => 115,  225 => 110,  223 => 109,  214 => 102,  212 => 101,  204 => 96,  168 => 62,  165 => 61,  162 => 60,  159 => 59,  156 => 58,  154 => 57,  149 => 54,  147 => 53,  141 => 49,  139 => 48,  134 => 45,  132 => 44,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  69 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang=""fr>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}Fast Print Sahline - By Mohamed Belaid{% endblock %}</title>*/
/*         <meta name="keywords" content="{% block motsCles %}{% endblock %}" />*/
/*         <meta name="description" content="{% block description %}{% endblock %}" />*/
/* */
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0, user-scalable=no" />*/
/* */
/* */
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <link href="http://fonts.googleapis.com/css?family=Lato:100,400,700|Lato:100,400,700|Lato:100,400,700|Lato:100,400,700" rel="stylesheet" type="text/css" />*/
/*         <link href="{{ asset('assets/styles.scssf6e3.css?12592113263448129181') }}" rel="stylesheet" type="text/css"  media="all"  />*/
/*         <link href="{{ asset('assets/flexsliderf6e3.css?12592113263448129181') }}" rel="stylesheet" type="text/css"  media="all"  />*/
/*         <link href="{{ asset('assets/jquery.fancybox-1.3.4f6e3.css?12592113263448129181') }}" rel="stylesheet" type="text/css"  media="all"  />*/
/*         <script src="{{ asset('themes_support/option_selection-04f21dade47c181126ac61b64d757485f84671daadfa90e4956a522cda4c2948.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/jquery.masonry.minf6e3.js?12592113263448129181') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/jquery.imagesloaded.minf6e3.js?12592113263448129181') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/mainf6e3.js?12592113263448129181') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/jquery.flexslider-minf6e3.js?12592113263448129181') }}" type="text/javascript"></script>*/
/*         <script src="{{ asset('assets/jquery.fancybox-1.3.4.packf6e3.js?12592113263448129181') }}" type="text/javascript"></script>*/
/* */
/*     </head>*/
/*     <body class="template-index">*/
/*     <div class="bodywrap cf">*/
/*         <div id="navbar">*/
/*             <div id="navpanel">*/
/*                 <div id="shoplogo"><a href="index.php" title="Fast Print Sahline">*/
/* */
/*                         <span class="logotext">FAST PRINT SAHLINE</span>*/
/* */
/*                     </a></div>*/
/* */
/*                 {% render(controller('EcommerceBundle:Panier:menu')) %}*/
/* */
/*                 <div class="searchnavwrap panelinputblock">*/
/* */
/*                     {% render(controller('EcommerceBundle:Produits:recherche')) %}*/
/* */
/*                     <button data-target=".mainnav > ul" data-speed="200" class="btn-opts togglebutton" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>*/
/*                 </div>*/
/* */
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/* */
/*                 <div class="footer desktop-only">*/
/* */
/*                     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*                     {% else %}*/
/*                         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}*/
/*                     {% endif %}*/
/* */
/*                     <div class="registerform">*/
/*                         <span class="title">Inscrivez &agrave; la newsletter</span>*/
/* */
/*                         <form method="post" action="https://flamingo-theme.myshopify.com/contact#contact_form" id="contact_form" class="contact-form" accept-charset="UTF-8"><input type="hidden" value="customer" name="form_type" /><input type="hidden" name="utf8" value="✓" />*/
/* */
/* */
/*                             <div class="panelinputblock">*/
/*                                 <div class="panelinputinner">*/
/*                                     <input type="hidden" id="contact_tags" name="contact[tags]" value="prospect,newsletter"/>*/
/*                                     <input type="email" class="text required" value="" name="contact[email]" placeholder="Entrez votre email ..." />*/
/*                                     <button type="submit" class="coolbutton"><span class="icon-arrow3-right"></span></button>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </form>*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/*                     <div class="social-links infooter">*/
/* */
/*                         <a title="Twitter" class="twitter" target="_blank" href="https://twitter.com/fpsahline"><i class="icon-twitter"></i><span>Twitter</span></a>*/
/* */
/* */
/*                         <a title="Facebook" class="facebook" target="_blank" href="https://www.facebook.com/Fast-Print-Sahline-Page-159463767738172/?fref=ts"><i class="icon-facebook"></i><span>Facebook</span></a>*/
/*                         <a title="Pinterest" class="pinterest" target="_blank" href="https://fr.pinterest.com/fpsimpression/"><i class="icon-pinterest"></i><span>Pinterest</span></a>*/
/* */
/* */
/*                     </div><!-- .social-links -->*/
/* */
/* */
/*                     <div class="copy">*/
/*                         <p>&copy; Copyright {{ "now"|date('Y') }} - Mohamed Belaid</p>*/
/*                     </div>*/
/* */
/*                 </div></div></div>*/
/* */
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
/*             </div>*/
/*         </footer>*/
/*         <script src="{{ asset('../js/bootstrap.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </div></body>*/
/* </html>*/
