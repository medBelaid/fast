<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_8f7c2d562530fa016cb77ff191de722b085e6eaf4d0297f715e3451923d4c1e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8afec07379230423ae2f83b735391df4b6286f79d62d068be7cd82f6fa53ba7 = $this->env->getExtension("native_profiler");
        $__internal_a8afec07379230423ae2f83b735391df4b6286f79d62d068be7cd82f6fa53ba7->enter($__internal_a8afec07379230423ae2f83b735391df4b6286f79d62d068be7cd82f6fa53ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8afec07379230423ae2f83b735391df4b6286f79d62d068be7cd82f6fa53ba7->leave($__internal_a8afec07379230423ae2f83b735391df4b6286f79d62d068be7cd82f6fa53ba7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fd215ba6dd16a9aa5f1a63cc48f2dc9f27aedf1e6b64574720636c190b32730 = $this->env->getExtension("native_profiler");
        $__internal_4fd215ba6dd16a9aa5f1a63cc48f2dc9f27aedf1e6b64574720636c190b32730->enter($__internal_4fd215ba6dd16a9aa5f1a63cc48f2dc9f27aedf1e6b64574720636c190b32730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"content\">

        <div class=\"flexslider type-header scaled-text-base\">
            <ul class=\"slides\">

                <li class=\"slide slide-1\">
                    <a href=\"collections/swimwear.html\">
                        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/slide_1f6e3.jpg?12592113263448129181"), "html", null, true);
        echo "\" alt=\"Slide 1\" />

                        <div class=\"overlay-text posy-bottom posx-left col-light\">
                            <div class=\"inner\">

                                <h1 class=\"text-1\"><span class=\"scaled-text\"><span style=\"font-weight:100\">Tampons personalis&eacute;es</span></span></h1>


                                <h2 class=\"text-2\"><span class=\"scaled-text\">Voir la collection &raquo;</span></h2>

                            </div>
                        </div>

                    </a>
                </li>

                <li class=\"slide slide-2\">
                    <a href=\"collections/swimwear.html\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/slide_2f6e3.jpg?12592113263448129181"), "html", null, true);
        echo "\" alt=\"Slide 2\" />

                        <div class=\"overlay-text posy-top posx-left col-dark\">
                            <div class=\"inner\">

                                <h1 class=\"text-1\"><span class=\"scaled-text\"><span style=\"font-weight:100\">WALK ON WATER</span></span></h1>


                                <h2 class=\"text-2\"><span class=\"scaled-text\">Shop Swim &raquo;</span></h2>

                            </div>
                        </div>

                    </a>
                </li>

                <li class=\"slide slide-3\">
                    <a href=\"https://themes.shopify.com/themes/masonry/styles/flamingo/?ref=cleancanvas\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/slide_3f6e3.jpg?12592113263448129181"), "html", null, true);
        echo "\" alt=\"Slide 3\" />

                        <div class=\"overlay-text posy-top posx-left col-light\">
                            <div class=\"inner\">

                                <h1 class=\"text-1\"><span class=\"scaled-text\"><span style=\"font-weight:100\">MASONRY<br />for Shopify</span></span></h1>


                                <h2 class=\"text-2\"><span class=\"scaled-text\">Trial this theme today</span></h2>

                            </div>
                        </div>

                    </a>
                </li>

            </ul>
        </div>


        <div class=\"blocklayout\">
           ";
        // line 69
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 70
            echo "               ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 71
                echo "            <div class=\"block product size-medium initially-hidden\">
                <div class=\"main\">
                    <a class=\"img-link\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "\">

                        <img src=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produitThumb"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\" />
                    </a>


                    <div class=\"quick-buy-row\">
                        <a href=\"#\" class=\"quick-buy button\">Aperçu rapide +</a>
                    </div>

                </div>

                <div class=\"sub\">
                    <div><a class=\"title\" href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</a></div>
                    <div class=\"pricearea\">


                        <span class=\"price\">";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " dt</span>
                    </div>


                </div>


                <script>productJSON.id106090352 = {\"id\":106090352,\"title\":\"Aspen\",\"handle\":\"aspen\",\"description\":\"\\u003cmeta charset=\\\"utf-8\\\"\\u003e\\n\\u003cp\\u003e\\u003cem\\u003eThis is a demonstration store.\\u003c\\/em\\u003e\\u003c\\/p\\u003e\\n\\u003cp\\u003eYou can purchase or trial this theme by heading here: \\u003c\\/p\\u003e\\n\\u003cp\\u003e\\u003ca href=\\\"https:\\/\\/themes.shopify.com\\/designers\\/cleancanvas?ref=cleancanvas\\\" target=\\\"_blank\\\" title=\\\"Clean Themes for Shopify\\\"\\u003ehttps:\\/\\/themes.shopify.com\\/designers\\/cleancanvas\\u003c\\/a\\u003e\\u003c\\/p\\u003e\\n\\u003cp\\u003eYour product description may be the tipping point toward a sale, make sure your customers get all the information they need to help them make a decision! Our theme supports image swapping (eg. choose a color and the images swap automatically to match the selection).\\u003c\\/p\\u003e\\n\\u003cp\\u003eYou can also upload as many product images as you need.\\u003c\\/p\\u003e\",\"published_at\":\"2012-09-27T08:28:00-04:00\",\"created_at\":\"2012-09-27T08:28:59-04:00\",\"vendor\":\"Flamingo\",\"type\":\"Swimwear\",\"tags\":[\"Beige\",\"Delicious\",\"Separates\",\"Stretch\"],\"price\":2999,\"price_min\":2999,\"price_max\":2999,\"available\":true,\"price_varies\":false,\"compare_at_price\":null,\"compare_at_price_min\":0,\"compare_at_price_max\":0,\"compare_at_price_varies\":false,\"variants\":[{\"id\":243178390,\"title\":\"Default Title\",\"option1\":\"Default Title\",\"option2\":null,\"option3\":null,\"sku\":\"\",\"requires_shipping\":true,\"taxable\":true,\"featured_image\":null,\"available\":true,\"options\":[\"Default Title\"],\"price\":2999,\"weight\":0,\"compare_at_price\":null,\"inventory_quantity\":-8,\"inventory_management\":null,\"inventory_policy\":\"deny\",\"barcode\":null}],\"images\":[\"\\/\\/cdn.shopify.com\\/s\\/files\\/1\\/0183\\/5415\\/products\\/shutterstock_109310339.jpeg?v=1348748941\"],\"featured_image\":\"\\/\\/cdn.shopify.com\\/s\\/files\\/1\\/0183\\/5415\\/products\\/shutterstock_109310339.jpeg?v=1348748941\",\"options\":[\"Style\"],\"content\":\"\\u003cmeta charset=\\\"utf-8\\\"\\u003e\\n\\u003cp\\u003e\\u003cem\\u003eThis is a demonstration store.\\u003c\\/em\\u003e\\u003c\\/p\\u003e\\n\\u003cp\\u003eYou can purchase or trial this theme by heading here: \\u003c\\/p\\u003e\\n\\u003cp\\u003e\\u003ca href=\\\"https:\\/\\/themes.shopify.com\\/designers\\/cleancanvas?ref=cleancanvas\\\" target=\\\"_blank\\\" title=\\\"Clean Themes for Shopify\\\"\\u003ehttps:\\/\\/themes.shopify.com\\/designers\\/cleancanvas\\u003c\\/a\\u003e\\u003c\\/p\\u003e\\n\\u003cp\\u003eYour product description may be the tipping point toward a sale, make sure your customers get all the information they need to help them make a decision! Our theme supports image swapping (eg. choose a color and the images swap automatically to match the selection).\\u003c\\/p\\u003e\\n\\u003cp\\u003eYou can also upload as many product images as you need.\\u003c\\/p\\u003e\"};</script>
                <script id=\"product-block-template-106090352\" type=\"text/template\">
                    <form class=\"quickbuy-form cf\" action=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" method=\"get\" enctype=\"multipart/form-data\" id=\"product-form\">
                        <div id=\"product-gallery\">

                            <div class=\"main-image onlyimage\">
                                <div class=\"bip\" title=\"Aspen\" data-index=\"0\">
                                    <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($context["produit"], "image", array()), "AssetPath", array()), "produit"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "name", array()), "html", null, true);
                echo "\"/>
                                </div>
                            </div>

                        </div>
                        <div id=\"product-info\">
                            <div class=\"inner\">
                                <div class=\"majorinfo \">

                                    <h1 class=\"product-title\">";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h1>
                                    <div class=\"pricearea\">";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " dt</div>
                                </div>

                                <div class=\"productoptions section\">


                                    <input type=\"hidden\" name=\"id\" value=\"243178390\" />

                                    ";
                // line 122
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 123
                    echo "                                    <div>
                                        <label for=\"quantity\">Quantité</label>

                                            <a class=\"btn\" href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                        <div class=\"quantadd\">
                                            <input id=\"quantity\" name=\"qte\" value=\"1\" size=\"2\" />
                                            <input type=\"submit\" name=\"add\" id=\"add-to-cart\" value=\"Ajouter au panier\" />
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                // line 134
                echo "

                                <div class=\"section\"><a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\" title=\"\">Voir tous les d&eacute;tails <span class=\"icon-arrow3-right\"></span></a></div>
                            </div>
                        </div>
                    </form>
                </script>

            </div>
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
               <div class=\"navigation\">
                   ";
            // line 146
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            echo "
               </div>

           ";
        } else {
            // line 150
            echo "               Aucun produit
               ";
        }
        // line 152
        echo "

        </div>


    </div>

";
        
        $__internal_4fd215ba6dd16a9aa5f1a63cc48f2dc9f27aedf1e6b64574720636c190b32730->leave($__internal_4fd215ba6dd16a9aa5f1a63cc48f2dc9f27aedf1e6b64574720636c190b32730_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 152,  255 => 150,  248 => 146,  244 => 144,  230 => 136,  226 => 134,  215 => 126,  210 => 123,  208 => 122,  197 => 114,  193 => 113,  179 => 104,  171 => 99,  159 => 90,  150 => 86,  134 => 75,  127 => 73,  123 => 71,  118 => 70,  116 => 69,  92 => 48,  71 => 30,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div id="content">*/
/* */
/*         <div class="flexslider type-header scaled-text-base">*/
/*             <ul class="slides">*/
/* */
/*                 <li class="slide slide-1">*/
/*                     <a href="collections/swimwear.html">*/
/*                         <img src="{{ asset('assets/slide_1f6e3.jpg?12592113263448129181') }}" alt="Slide 1" />*/
/* */
/*                         <div class="overlay-text posy-bottom posx-left col-light">*/
/*                             <div class="inner">*/
/* */
/*                                 <h1 class="text-1"><span class="scaled-text"><span style="font-weight:100">Tampons personalis&eacute;es</span></span></h1>*/
/* */
/* */
/*                                 <h2 class="text-2"><span class="scaled-text">Voir la collection &raquo;</span></h2>*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li class="slide slide-2">*/
/*                     <a href="collections/swimwear.html">*/
/*                         <img src="{{ asset('assets/slide_2f6e3.jpg?12592113263448129181') }}" alt="Slide 2" />*/
/* */
/*                         <div class="overlay-text posy-top posx-left col-dark">*/
/*                             <div class="inner">*/
/* */
/*                                 <h1 class="text-1"><span class="scaled-text"><span style="font-weight:100">WALK ON WATER</span></span></h1>*/
/* */
/* */
/*                                 <h2 class="text-2"><span class="scaled-text">Shop Swim &raquo;</span></h2>*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </a>*/
/*                 </li>*/
/* */
/*                 <li class="slide slide-3">*/
/*                     <a href="https://themes.shopify.com/themes/masonry/styles/flamingo/?ref=cleancanvas">*/
/*                         <img src="{{ asset('assets/slide_3f6e3.jpg?12592113263448129181') }}" alt="Slide 3" />*/
/* */
/*                         <div class="overlay-text posy-top posx-left col-light">*/
/*                             <div class="inner">*/
/* */
/*                                 <h1 class="text-1"><span class="scaled-text"><span style="font-weight:100">MASONRY<br />for Shopify</span></span></h1>*/
/* */
/* */
/*                                 <h2 class="text-2"><span class="scaled-text">Trial this theme today</span></h2>*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </a>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </div>*/
/* */
/* */
/*         <div class="blocklayout">*/
/*            {% if produits|length != 0 %}*/
/*                {% for produit in produits %}*/
/*             <div class="block product size-medium initially-hidden">*/
/*                 <div class="main">*/
/*                     <a class="img-link" href="{{ path('presentation', { 'id' : produit.id }) }}" title="{{ produit.nom }}">*/
/* */
/*                         <img src="{{ produit.image.AssetPath|imagine_filter('produitThumb') }}" alt="{{ produit.image.name }}" />*/
/*                     </a>*/
/* */
/* */
/*                     <div class="quick-buy-row">*/
/*                         <a href="#" class="quick-buy button">Aperçu rapide +</a>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sub">*/
/*                     <div><a class="title" href="{{ path('presentation', { 'id' : produit.id }) }}">{{ produit.nom }}</a></div>*/
/*                     <div class="pricearea">*/
/* */
/* */
/*                         <span class="price">{{ produit.prix|tva(produit.tva.multiplicate) }} dt</span>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/* */
/* */
/*                 <script>productJSON.id106090352 = {"id":106090352,"title":"Aspen","handle":"aspen","description":"\u003cmeta charset=\"utf-8\"\u003e\n\u003cp\u003e\u003cem\u003eThis is a demonstration store.\u003c\/em\u003e\u003c\/p\u003e\n\u003cp\u003eYou can purchase or trial this theme by heading here: \u003c\/p\u003e\n\u003cp\u003e\u003ca href=\"https:\/\/themes.shopify.com\/designers\/cleancanvas?ref=cleancanvas\" target=\"_blank\" title=\"Clean Themes for Shopify\"\u003ehttps:\/\/themes.shopify.com\/designers\/cleancanvas\u003c\/a\u003e\u003c\/p\u003e\n\u003cp\u003eYour product description may be the tipping point toward a sale, make sure your customers get all the information they need to help them make a decision! Our theme supports image swapping (eg. choose a color and the images swap automatically to match the selection).\u003c\/p\u003e\n\u003cp\u003eYou can also upload as many product images as you need.\u003c\/p\u003e","published_at":"2012-09-27T08:28:00-04:00","created_at":"2012-09-27T08:28:59-04:00","vendor":"Flamingo","type":"Swimwear","tags":["Beige","Delicious","Separates","Stretch"],"price":2999,"price_min":2999,"price_max":2999,"available":true,"price_varies":false,"compare_at_price":null,"compare_at_price_min":0,"compare_at_price_max":0,"compare_at_price_varies":false,"variants":[{"id":243178390,"title":"Default Title","option1":"Default Title","option2":null,"option3":null,"sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"options":["Default Title"],"price":2999,"weight":0,"compare_at_price":null,"inventory_quantity":-8,"inventory_management":null,"inventory_policy":"deny","barcode":null}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0183\/5415\/products\/shutterstock_109310339.jpeg?v=1348748941"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0183\/5415\/products\/shutterstock_109310339.jpeg?v=1348748941","options":["Style"],"content":"\u003cmeta charset=\"utf-8\"\u003e\n\u003cp\u003e\u003cem\u003eThis is a demonstration store.\u003c\/em\u003e\u003c\/p\u003e\n\u003cp\u003eYou can purchase or trial this theme by heading here: \u003c\/p\u003e\n\u003cp\u003e\u003ca href=\"https:\/\/themes.shopify.com\/designers\/cleancanvas?ref=cleancanvas\" target=\"_blank\" title=\"Clean Themes for Shopify\"\u003ehttps:\/\/themes.shopify.com\/designers\/cleancanvas\u003c\/a\u003e\u003c\/p\u003e\n\u003cp\u003eYour product description may be the tipping point toward a sale, make sure your customers get all the information they need to help them make a decision! Our theme supports image swapping (eg. choose a color and the images swap automatically to match the selection).\u003c\/p\u003e\n\u003cp\u003eYou can also upload as many product images as you need.\u003c\/p\u003e"};</script>*/
/*                 <script id="product-block-template-106090352" type="text/template">*/
/*                     <form class="quickbuy-form cf" action="{{ path('ajouter', { 'id' : produit.id }) }}" method="get" enctype="multipart/form-data" id="product-form">*/
/*                         <div id="product-gallery">*/
/* */
/*                             <div class="main-image onlyimage">*/
/*                                 <div class="bip" title="Aspen" data-index="0">*/
/*                                     <img src="{{ produit.image.AssetPath|imagine_filter('produit') }}" alt="{{ produit.image.name }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div id="product-info">*/
/*                             <div class="inner">*/
/*                                 <div class="majorinfo ">*/
/* */
/*                                     <h1 class="product-title">{{ produit.nom }}</h1>*/
/*                                     <div class="pricearea">{{ produit.prix|tva(produit.tva.multiplicate) }} dt</div>*/
/*                                 </div>*/
/* */
/*                                 <div class="productoptions section">*/
/* */
/* */
/*                                     <input type="hidden" name="id" value="243178390" />*/
/* */
/*                                     {% if panier[produit.id] is not defined %}*/
/*                                     <div>*/
/*                                         <label for="quantity">Quantité</label>*/
/* */
/*                                             <a class="btn" href="{{ path('ajouter', { 'id' : produit.id }) }}">Ajouter au panier</a>*/
/*                                         <div class="quantadd">*/
/*                                             <input id="quantity" name="qte" value="1" size="2" />*/
/*                                             <input type="submit" name="add" id="add-to-cart" value="Ajouter au panier" />*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% endif %}*/
/* */
/* */
/*                                 <div class="section"><a href="{{ path('presentation', { 'id' : produit.id }) }}" title="">Voir tous les d&eacute;tails <span class="icon-arrow3-right"></span></a></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </script>*/
/* */
/*             </div>*/
/*                    {% endfor %}*/
/* */
/*                <div class="navigation">*/
/*                    {{ knp_pagination_render(produits) }}*/
/*                </div>*/
/* */
/*            {% else %}*/
/*                Aucun produit*/
/*                {% endif %}*/
/* */
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
