<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_3afe8ba4494069240b71aafbfae20681e0a94683c98f3c8ae5c80d54709f2513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3771a9e3d18e86d9831e0701ead284747116ce3068106b9bc65a1ef293af1c8 = $this->env->getExtension("native_profiler");
        $__internal_f3771a9e3d18e86d9831e0701ead284747116ce3068106b9bc65a1ef293af1c8->enter($__internal_f3771a9e3d18e86d9831e0701ead284747116ce3068106b9bc65a1ef293af1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "
    <div class=\"mainnav\">

        <ul>
            <li class=\"first active\">
                <div class=\"title\">
                    <div>Boutique</div>
                </div>
                <ul class=\"tier1\">

                    <li class=\"active expanded\">
                        <a class=\"tier1title\" href=\"index.html\">Accueil</a>
                    </li>

                    <li class=\"\">
                        <a class=\"tier1title\" href=\"collections.html\">Toute la Collection</a>
                    </li>
                    ";
        // line 18
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 19
        echo "                    <li class=\"\">
                        <a class=\"tier1title\" href=\"blogs/news.html\">Blog</a>
                        <button class=\"coolbutton\"><span class=\"icon-plus\"></span></button>
                    </li>
                </ul>
            </li>

            <li >
                <div class=\"title\">
                    Pr&eacute;sentation
                </div>



                <ul class=\"tier1\">
                    <li class=\"\">


                        <a class=\"tier1title\" href=\"pages/about-us.html\">About Us</a>

                    </li>
                    <li class=\"\">


                        <a class=\"tier1title\" href=\"blogs/news.html\">Our Blog</a>

                    </li>
                    <li class=\"\">


                        <a class=\"tier1title\" href=\"pages/contact-us.html\">Contact Us</a>

                    </li>
                    <li class=\"\">


                        <a class=\"tier1title\" href=\"search.html\">Site Search</a>

                    </li>

                </ul>

            </li>

        </ul>
    </div>
";
        
        $__internal_f3771a9e3d18e86d9831e0701ead284747116ce3068106b9bc65a1ef293af1c8->leave($__internal_f3771a9e3d18e86d9831e0701ead284747116ce3068106b9bc65a1ef293af1c8_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 19,  41 => 18,  22 => 1,);
    }
}
/* */
/*     <div class="mainnav">*/
/* */
/*         <ul>*/
/*             <li class="first active">*/
/*                 <div class="title">*/
/*                     <div>Boutique</div>*/
/*                 </div>*/
/*                 <ul class="tier1">*/
/* */
/*                     <li class="active expanded">*/
/*                         <a class="tier1title" href="index.html">Accueil</a>*/
/*                     </li>*/
/* */
/*                     <li class="">*/
/*                         <a class="tier1title" href="collections.html">Toute la Collection</a>*/
/*                     </li>*/
/*                     {% render(controller('EcommerceBundle:Categories:menu')) %}*/
/*                     <li class="">*/
/*                         <a class="tier1title" href="blogs/news.html">Blog</a>*/
/*                         <button class="coolbutton"><span class="icon-plus"></span></button>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li >*/
/*                 <div class="title">*/
/*                     Pr&eacute;sentation*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <ul class="tier1">*/
/*                     <li class="">*/
/* */
/* */
/*                         <a class="tier1title" href="pages/about-us.html">About Us</a>*/
/* */
/*                     </li>*/
/*                     <li class="">*/
/* */
/* */
/*                         <a class="tier1title" href="blogs/news.html">Our Blog</a>*/
/* */
/*                     </li>*/
/*                     <li class="">*/
/* */
/* */
/*                         <a class="tier1title" href="pages/contact-us.html">Contact Us</a>*/
/* */
/*                     </li>*/
/*                     <li class="">*/
/* */
/* */
/*                         <a class="tier1title" href="search.html">Site Search</a>*/
/* */
/*                     </li>*/
/* */
/*                 </ul>*/
/* */
/*             </li>*/
/* */
/*         </ul>*/
/*     </div>*/
/* */
