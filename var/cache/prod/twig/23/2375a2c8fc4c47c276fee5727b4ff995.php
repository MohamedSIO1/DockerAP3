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

/* client/product_card.html.twig */
class __TwigTemplate_609c03f926d4102ed0e096651e32e025 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["hasProduct"] = array_key_exists("product", $context);
        // line 2
        $context["hasQuantity"] = array_key_exists("quantity", $context);
        // line 3
        $context["hasOrderDetail"] = array_key_exists("orderDetail", $context);
        // line 4
        $context["hasOrderPrice"] = array_key_exists("orderPrice", $context);
        // line 5
        echo "
";
        // line 6
        if (($context["hasProduct"] ?? null)) {
            // line 7
            echo "    ";
            $context["product_id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getId", [], "method", false, false, false, 7);
            // line 8
            echo "    ";
            $context["product_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_product", ["slug" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getSlug", [], "method", false, false, false, 8)]);
            // line 9
            echo "
    <div id=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["product_id"] ?? null), "html", null, true);
            echo "\" class=\"product_card\">
        <div class=\"product_card-images\">
            ";
            // line 12
            $context["images"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getProductImgs", [], "method", false, false, false, 12);
            // line 13
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["product_uri"] ?? null), "html", null, true);
            echo "\" title=\"Voir le produit\">
                <img class=\"product_card-image--selected\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/images/product/" . ($context["product_id"] ?? null)) . "/") . twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "getName", [], "method", false, false, false, 14))), "html", null, true);
            echo "\" alt=\"Image du produit\">
            </a>
            <div class=\"product_card-images_list\">
                ";
            // line 17
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
                // line 18
                echo "                    <div class=\"product_card-image";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) ? (" selected") : (""));
                echo "\">
                        <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/images/product/" . ($context["product_id"] ?? null)) . "/") . twig_get_attribute($this->env, $this->source, $context["image"], "getName", [], "method", false, false, false, 19))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, ((("Image " . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19)) . " du produit nº") . ($context["product_id"] ?? null)), "html", null, true);
                echo "\">
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
            // line 22
            echo "            </div>
        </div>
        <a class=\"product_card-name\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["product_uri"] ?? null), "html", null, true);
            echo "\" title=\"Voir le produit\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getName", [], "method", false, false, false, 24), "html", null, true);
            echo "</a>
        ";
            // line 25
            if (($context["hasQuantity"] ?? null)) {
                // line 26
                echo "            <p class=\"product_card-quantity\">x<span class=\"product_card-quantity_value\">";
                echo twig_escape_filter($this->env, ($context["quantity"] ?? null), "html", null, true);
                echo "</span></p>
        ";
            }
            // line 28
            echo "        <p class=\"product_card-price\">
            ";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(((($context["hasOrderPrice"] ?? null)) ? (($context["orderPrice"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getUnitPrice", [], "method", false, false, false, 29))), "EUR", ["multiplier" => ((array_key_exists("quantity", $context)) ? (_twig_default_filter(($context["quantity"] ?? null), 1)) : (1))]), "html", null, true);
            echo "
        </p>
        <div class=\"product_card-buttons\">
            ";
            // line 32
            if ((($context["hasQuantity"] ?? null) &&  !($context["hasOrderDetail"] ?? null))) {
                // line 33
                echo "                <button class=\"update-product-cart product_card-button_add\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_cart");
                echo "\" data-productid=\"";
                echo twig_escape_filter($this->env, ($context["product_id"] ?? null), "html", null, true);
                echo "\" data-action=\"add\" title=\"Ajouter\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--greenColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg>
                </button>
                <button class=\"update-product-cart product_card-button_remove\" data-productid=\"";
                // line 36
                echo twig_escape_filter($this->env, ($context["product_id"] ?? null), "html", null, true);
                echo "\" data-action=\"remove\" title=\"Retirer\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--redColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg>
                </button>
            ";
            }
            // line 40
            echo "            <a class=\"product_card-button_basic\" href=\"";
            echo twig_escape_filter($this->env, ($context["product_uri"] ?? null), "html", null, true);
            echo "\" title=\"Voir le produit\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><g fill=\"none\" fill-rule=\"evenodd\"><path d=\"M18 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h5M15 3h6v6M10 14L20.2 3.8\"/></g></svg>
            </a>
            ";
            // line 43
            if ( !($context["hasOrderDetail"] ?? null)) {
                // line 44
                echo "                ";
                if (($context["hasQuantity"] ?? null)) {
                    // line 45
                    echo "                    <button class=\"update-product-cart product_card-button_delete\" data-productid=\"";
                    echo twig_escape_filter($this->env, ($context["product_id"] ?? null), "html", null, true);
                    echo "\" data-action=\"delete\" title=\"Supprimer\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>
                    </button>
                ";
                } else {
                    // line 49
                    echo "                    <button class=\"update-product-cart product_card-button_basic\" data-productid=\"";
                    echo twig_escape_filter($this->env, ($context["product_id"] ?? null), "html", null, true);
                    echo "\" data-action=\"add\" title=\"Ajouter au panier\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--whiteColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"10\" cy=\"20.5\" r=\"1\"/><circle cx=\"18\" cy=\"20.5\" r=\"1\"/><path d=\"M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1\"/></svg>
                    </button>
                ";
                }
                // line 53
                echo "            ";
            }
            // line 54
            echo "        </div>
        ";
            // line 55
            if ( !($context["hasOrderDetail"] ?? null)) {
                // line 56
                echo "            ";
                $this->loadTemplate("client/product_card-stock.html.twig", "client/product_card.html.twig", 56)->display(twig_array_merge($context, ["stock_store" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getStockStores", [], "method", false, false, false, 56), "stock_web" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getStockShelves", [], "method", false, false, false, 56)]));
                // line 57
                echo "        ";
            }
            // line 58
            echo "    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/product_card.html.twig";
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
        return array (  205 => 58,  202 => 57,  199 => 56,  197 => 55,  194 => 54,  191 => 53,  183 => 49,  175 => 45,  172 => 44,  170 => 43,  163 => 40,  156 => 36,  147 => 33,  145 => 32,  139 => 29,  136 => 28,  130 => 26,  128 => 25,  122 => 24,  118 => 22,  99 => 19,  94 => 18,  77 => 17,  71 => 14,  66 => 13,  64 => 12,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/product_card.html.twig", "/usr/local/apache2/htdocs/templates/client/product_card.html.twig");
    }
}
