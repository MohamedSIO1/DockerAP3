<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* client/product/product.html.twig */
class __TwigTemplate_43b6e501c2da32a32fa481a58a9f0225 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "client/product/product.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getName", [], "method", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/product.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/product/product.html.twig", 10)->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <section class=\"app_container app_padding\">
        <div class=\"product\">
            <div class=\"product_card-images\">
                ";
        // line 17
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getProductImgs", [], "method", false, false, false, 17);
        // line 18
        echo "            <img class=\"product_card-image--selected\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/images/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getId", [], "method", false, false, false, 18)) . "/") . twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "getName", [], "method", false, false, false, 18))), "html", null, true);
        echo "\" alt=\"Image du produit\">
            <div class=\"product_card-images_list\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "                    <div class=\"product_card-image";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) ? (" selected") : (""));
            echo "\">
                        <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/images/product/" . twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getId", [], "method", false, false, false, 22)) . "/") . twig_get_attribute($this->env, $this->source, $context["image"], "getName", [], "method", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"Image du produit\">
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
            </div>
            <div class=\"product-details\">
                <h2>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getName", [], "method", false, false, false, 28), "html", null, true);
        echo "</h2>
                <p class=\"product_card-price\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getUnitPrice", [], "method", false, false, false, 29), "EUR"), "html", null, true);
        echo "</p>
                <p class=\"product_card-description\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getDescription", [], "method", false, false, false, 30), "html", null, true);
        echo "</p>
                <button class=\"update-product-cart\" data-productid=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getid", [], "method", false, false, false, 31), "html", null, true);
        echo "\" data-action=\"add\" title=\"Ajouter au panier\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--whiteColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"10\" cy=\"20.5\" r=\"1\"/><circle cx=\"18\" cy=\"20.5\" r=\"1\"/><path d=\"M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1\"/></svg>
                </button>
                ";
        // line 34
        $this->loadTemplate("client/product_card-stock.html.twig", "client/product/product.html.twig", 34)->display(twig_array_merge($context, ["stock_store" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getStockStores", [], "method", false, false, false, 34), "stock_web" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getStockShelves", [], "method", false, false, false, 34)]));
        // line 35
        echo "            </div>
        </div>
        <div class=\"stock-info\">
            <h3>Stock internet</h3>
            <ul>
                ";
        // line 40
        $context["quantityStockWebs"] = 0;
        // line 41
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getStockShelves", [], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 42
            echo "                    ";
            $context["quantityStockWebs"] = (($context["quantityStockWebs"] ?? null) + twig_get_attribute($this->env, $this->source, $context["stock"], "getQuantity", [], "method", false, false, false, 42));
            // line 43
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                ";
        if ((($context["quantityStockWebs"] ?? null) > 0)) {
            // line 45
            echo "                    <li>";
            echo twig_escape_filter($this->env, ($context["quantityStockWebs"] ?? null), "html", null, true);
            echo " unités restantes</li>
                ";
        } else {
            // line 47
            echo "                    <p>Stock internet épuisé pour ce produit</p>
                ";
        }
        // line 49
        echo "            </ul>
        </div>
        <div class=\"stock-info\">
            <h3>Nos magasins avec ce produit en stock</h3>
            <ul>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getStockStores", [], "method", false, false, false, 54));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 55
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock"], "getQuantity", [], "method", false, false, false, 55) > 10)) {
                // line 56
                echo "                        <li><span class=\"stock-location\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stock"], "getStore", [], "method", false, false, false, 56), "getCity", [], "method", false, false, false, 56), "html", null, true);
                echo "</span> : En stock</li>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 57
$context["stock"], "getQuantity", [], "method", false, false, false, 57) > 0)) {
                // line 58
                echo "                        <li><span class=\"stock-location\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stock"], "getStore", [], "method", false, false, false, 58), "getCity", [], "method", false, false, false, 58), "html", null, true);
                echo "</span> : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "getQuantity", [], "method", false, false, false, 58), "html", null, true);
                echo " unit.</li>
                    ";
            } else {
                // line 60
                echo "                        <p>Produit en rupture de stock dans nos magasins</p>
                    ";
            }
            // line 62
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "                    <p>Produit en rupture de stock dans nos magasins</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </ul>
        </div>
        <div class=\"products-suggestions\">
            <h3>Des produits qui pourraient vous intéresser</h3>
            <div class=\"product_cards\">
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getCategory", [], "method", false, false, false, 70), "getProducts", [], "method", false, false, false, 70));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["productOfSameCategory"]) {
            echo " 
                    ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["productOfSameCategory"], "getId", [], "method", false, false, false, 71) != twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getId", [], "method", false, false, false, 71))) {
                echo "      
                        ";
                // line 72
                $this->loadTemplate("client/product_card.html.twig", "client/product/product.html.twig", 72)->display(twig_array_merge($context, ["product" => $context["productOfSameCategory"]]));
                // line 73
                echo "                    ";
            }
            // line 74
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productOfSameCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </div>
        </div>
    </section>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/product/product.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  288 => 75,  274 => 74,  271 => 73,  269 => 72,  265 => 71,  246 => 70,  239 => 65,  232 => 63,  227 => 62,  223 => 60,  215 => 58,  213 => 57,  208 => 56,  205 => 55,  200 => 54,  193 => 49,  189 => 47,  183 => 45,  180 => 44,  174 => 43,  171 => 42,  166 => 41,  164 => 40,  157 => 35,  155 => 34,  149 => 31,  145 => 30,  141 => 29,  137 => 28,  132 => 25,  115 => 22,  110 => 21,  93 => 20,  87 => 18,  85 => 17,  80 => 14,  76 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/product/product.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\product\\product.html.twig");
    }
}
