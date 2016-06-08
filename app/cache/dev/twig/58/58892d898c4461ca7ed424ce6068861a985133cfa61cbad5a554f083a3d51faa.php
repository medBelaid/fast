<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_3cc97ddcb6712ce18bb63a1454f629efd67c633ade8987e32e896dfbe9d6822b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_237ac42d7fd2b0a81731ea6ab5d087e91be8ede3d1131aa8b5427bbb12f41c67 = $this->env->getExtension("native_profiler");
        $__internal_237ac42d7fd2b0a81731ea6ab5d087e91be8ede3d1131aa8b5427bbb12f41c67->enter($__internal_237ac42d7fd2b0a81731ea6ab5d087e91be8ede3d1131aa8b5427bbb12f41c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237ac42d7fd2b0a81731ea6ab5d087e91be8ede3d1131aa8b5427bbb12f41c67->leave($__internal_237ac42d7fd2b0a81731ea6ab5d087e91be8ede3d1131aa8b5427bbb12f41c67_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_046b71a4c42f04525850e9957e3ad70443d413a479a2a9a1ae70d4b96c9083b7 = $this->env->getExtension("native_profiler");
        $__internal_046b71a4c42f04525850e9957e3ad70443d413a479a2a9a1ae70d4b96c9083b7->enter($__internal_046b71a4c42f04525850e9957e3ad70443d413a479a2a9a1ae70d4b96c9083b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_046b71a4c42f04525850e9957e3ad70443d413a479a2a9a1ae70d4b96c9083b7->leave($__internal_046b71a4c42f04525850e9957e3ad70443d413a479a2a9a1ae70d4b96c9083b7_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_59445c16dcb79ae19f93803865996bac7f3a19340b96170bbe30271795835902 = $this->env->getExtension("native_profiler");
        $__internal_59445c16dcb79ae19f93803865996bac7f3a19340b96170bbe30271795835902->enter($__internal_59445c16dcb79ae19f93803865996bac7f3a19340b96170bbe30271795835902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        
        $__internal_59445c16dcb79ae19f93803865996bac7f3a19340b96170bbe30271795835902->leave($__internal_59445c16dcb79ae19f93803865996bac7f3a19340b96170bbe30271795835902_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_265d3c371bc89eae567fea101ea3f00f2ae634f5f10074ae1ec8c18d63625e12 = $this->env->getExtension("native_profiler");
        $__internal_265d3c371bc89eae567fea101ea3f00f2ae634f5f10074ae1ec8c18d63625e12->enter($__internal_265d3c371bc89eae567fea101ea3f00f2ae634f5f10074ae1ec8c18d63625e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div id=\"content\">
    <div class=\"block text padded\" itemscope itemtype=\"http://data-vocabulary.org/Product\">
        <meta itemprop=\"url\" content=\"http://flamingo-theme.myshopify.com/products/aspen\" />
        <meta itemprop=\"image\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "AssetPath", array()), "produit"), "html", null, true);
        echo "\" />

        <div id=\"crumbregion\" class=\"padded\">

            <div class=\"crumbs desktop-only\">

            </div>
        </div>

        <div class=\"padded cf\">
            <div id=\"product-gallery\" class=\"lb\">
                <div class=\"main-image onlyimage\">
                    <a href=\"../../cdn.shopify.com/s/files/1/0183/5415/products/shutterstock_109310339b500.jpg?v=1348748941\" title=\"Aspen\" data-index=\"0\">
                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "AssetPath", array()), "produit"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "\"/>
                    </a>
                </div>


            </div><!-- /#product-gallery -->

            <div id=\"product-info\">
                <div class=\"inner\">


                    <div class=\"majorinfo \">


                        <h1 class=\"product-title\" itemprop=\"name\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h1>

                        <div class=\"pricearea\" itemprop=\"offerDetails\" itemscope itemtype=\"http://data-vocabulary.org/Offer\">

                            <span class=\"price\" itemprop=\"price\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo " dt</span>
                            <meta itemprop=\"currency\" content=\"GBP\" />
                        </div>

                        <p>Cat&eacute;gorie: <span itemprop=\"brand\"><a href=\"\" title=\"\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</a></span></p>

                    </div>


                        <div class=\"productoptions section\">


                            <input type=\"hidden\" name=\"id\" value=\"243178390\" />


                            ";
        // line 56
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()), array(), "array", true, true)) {
            // line 57
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                    <div>
                                        <label for=\"quantity\">Quantit&eacute;</label>
                                        <div class=\"quantadd\">
                                            <input id=\"quantity\" name=\"qte\" value=\"1\" size=\"2\" />
                                            <input type=\"submit\" name=\"add\" id=\"add-to-cart\" value=\"Ajouter au panier\" />
                                        </div>
                                    </div>

                                </form>
                            ";
        } else {
            // line 68
            echo "                                <div>
                                    <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\" class=\"btn btn-primary\">Le produit est déjà dans votre panier</a>
                                </div>
                            ";
        }
        // line 72
        echo "
                        </div><!-- /.options -->


                    <div class=\"morelinks section\">

                        <div class=\"contentsection\">Voir plus: <a href=\"\" title=\"Fruit\">Fruit</a></div>

                        <div class=\"tags\">Mots clés:

                            <a href=\"\">impression,</a>
                            <a href=\"\">rouge,</a>

                        </div>

                    </div><!-- /.morelinks -->


                    <div class=\"social sharing row\">
                        <span class=\"label\">Partager</span>

                        <ul>

                            <li class=\"facebook\"><a title=\"Share on Facebook\" target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=http://flamingo-theme.myshopify.com/products/aspen\"><i class=\"icon-facebook\"></i></a></li>

                            <li class=\"twitter\"><a title=\"Share on Twitter\" target=\"_blank\" href=\"https://twitter.com/intent/tweet?text=Check%20out%20Aspen:%20http://flamingo-theme.myshopify.com/products/aspen\"><i class=\"icon-twitter\"></i></a></li>


                            <li class=\"pinterest\"><a title=\"Pin the main image\" target=\"_blank\" href=\"../../pinterest.com/pin/create/button/index0fbe.html?url=http://flamingo-theme.myshopify.com/products/aspen&amp;media=http://cdn.shopify.com/s/files/1/0183/5415/products/shutterstock_109310339.jpeg?v=1348748941&amp;description=Aspen\"><i class=\"icon-pinterest\"></i></a></li>


                            <li class=\"google\"><a title=\"Share on Google+\" target=\"_blank\" href=\"https://plus.google.com/share?url=http://flamingo-theme.myshopify.com/products/aspen\"><i class=\"icon-googleplus\"></i></a></li>

                            <li class=\"email\"><a title=\"Share using email\" href=\"mailto:?subject=Check%20out%20Aspen&amp;body=Check%20out%20Aspen:%0D%0A%0D%0Ahttp://flamingo-theme.myshopify.com/products/aspen\"><i class=\"icon-mail\"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div><!-- /#product-info -->
        </div><!-- /.padded -->

        <div class=\"descriptionunder padded\" itemprop=\"description\">
            <meta charset=\"utf-8\">
            <p>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo ".</p>
        </div>

    </div></div>
";
        
        $__internal_265d3c371bc89eae567fea101ea3f00f2ae634f5f10074ae1ec8c18d63625e12->leave($__internal_265d3c371bc89eae567fea101ea3f00f2ae634f5f10074ae1ec8c18d63625e12_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 115,  160 => 72,  154 => 69,  151 => 68,  136 => 57,  134 => 56,  120 => 45,  113 => 41,  106 => 37,  87 => 23,  71 => 10,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block titre %}{{ produit.nom }}{% endblock %}*/
/* {% block description %}{{ produit.description }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="content">*/
/*     <div class="block text padded" itemscope itemtype="http://data-vocabulary.org/Product">*/
/*         <meta itemprop="url" content="http://flamingo-theme.myshopify.com/products/aspen" />*/
/*         <meta itemprop="image" content="{{ produit.image.AssetPath|imagine_filter('produit') }}" />*/
/* */
/*         <div id="crumbregion" class="padded">*/
/* */
/*             <div class="crumbs desktop-only">*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="padded cf">*/
/*             <div id="product-gallery" class="lb">*/
/*                 <div class="main-image onlyimage">*/
/*                     <a href="../../cdn.shopify.com/s/files/1/0183/5415/products/shutterstock_109310339b500.jpg?v=1348748941" title="Aspen" data-index="0">*/
/*                         <img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" alt="{{ produit.nom }}"/>*/
/*                     </a>*/
/*                 </div>*/
/* */
/* */
/*             </div><!-- /#product-gallery -->*/
/* */
/*             <div id="product-info">*/
/*                 <div class="inner">*/
/* */
/* */
/*                     <div class="majorinfo ">*/
/* */
/* */
/*                         <h1 class="product-title" itemprop="name">{{ produit.nom }}</h1>*/
/* */
/*                         <div class="pricearea" itemprop="offerDetails" itemscope itemtype="http://data-vocabulary.org/Offer">*/
/* */
/*                             <span class="price" itemprop="price">{{ produit.prix|tva(produit.tva.multiplicate) }} dt</span>*/
/*                             <meta itemprop="currency" content="GBP" />*/
/*                         </div>*/
/* */
/*                         <p>Cat&eacute;gorie: <span itemprop="brand"><a href="" title="">{{ produit.categorie.nom }}</a></span></p>*/
/* */
/*                     </div>*/
/* */
/* */
/*                         <div class="productoptions section">*/
/* */
/* */
/*                             <input type="hidden" name="id" value="243178390" />*/
/* */
/* */
/*                             {% if panier[produit.id] is not defined %}*/
/*                                 <form action="{{ path('ajouter', { 'id' : produit.id }) }}" method="get">*/
/*                                     <div>*/
/*                                         <label for="quantity">Quantit&eacute;</label>*/
/*                                         <div class="quantadd">*/
/*                                             <input id="quantity" name="qte" value="1" size="2" />*/
/*                                             <input type="submit" name="add" id="add-to-cart" value="Ajouter au panier" />*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 </form>*/
/*                             {% else %}*/
/*                                 <div>*/
/*                                     <a href="{{ path('panier') }}" class="btn btn-primary">Le produit est déjà dans votre panier</a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/* */
/*                         </div><!-- /.options -->*/
/* */
/* */
/*                     <div class="morelinks section">*/
/* */
/*                         <div class="contentsection">Voir plus: <a href="" title="Fruit">Fruit</a></div>*/
/* */
/*                         <div class="tags">Mots clés:*/
/* */
/*                             <a href="">impression,</a>*/
/*                             <a href="">rouge,</a>*/
/* */
/*                         </div>*/
/* */
/*                     </div><!-- /.morelinks -->*/
/* */
/* */
/*                     <div class="social sharing row">*/
/*                         <span class="label">Partager</span>*/
/* */
/*                         <ul>*/
/* */
/*                             <li class="facebook"><a title="Share on Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://flamingo-theme.myshopify.com/products/aspen"><i class="icon-facebook"></i></a></li>*/
/* */
/*                             <li class="twitter"><a title="Share on Twitter" target="_blank" href="https://twitter.com/intent/tweet?text=Check%20out%20Aspen:%20http://flamingo-theme.myshopify.com/products/aspen"><i class="icon-twitter"></i></a></li>*/
/* */
/* */
/*                             <li class="pinterest"><a title="Pin the main image" target="_blank" href="../../pinterest.com/pin/create/button/index0fbe.html?url=http://flamingo-theme.myshopify.com/products/aspen&amp;media=http://cdn.shopify.com/s/files/1/0183/5415/products/shutterstock_109310339.jpeg?v=1348748941&amp;description=Aspen"><i class="icon-pinterest"></i></a></li>*/
/* */
/* */
/*                             <li class="google"><a title="Share on Google+" target="_blank" href="https://plus.google.com/share?url=http://flamingo-theme.myshopify.com/products/aspen"><i class="icon-googleplus"></i></a></li>*/
/* */
/*                             <li class="email"><a title="Share using email" href="mailto:?subject=Check%20out%20Aspen&amp;body=Check%20out%20Aspen:%0D%0A%0D%0Ahttp://flamingo-theme.myshopify.com/products/aspen"><i class="icon-mail"></i></a></li>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /#product-info -->*/
/*         </div><!-- /.padded -->*/
/* */
/*         <div class="descriptionunder padded" itemprop="description">*/
/*             <meta charset="utf-8">*/
/*             <p>{{ produit.description }}.</p>*/
/*         </div>*/
/* */
/*     </div></div>*/
/* {% endblock %}*/
