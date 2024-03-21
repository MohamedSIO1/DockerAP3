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

/* client/cart/cart.html.twig */
class __TwigTemplate_b5e527d761644daf071049cbf6aff398 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/cart/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/cart/cart.html.twig", 10)->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"app_container app_padding\">
        <h1>Mon panier</h1>
        ";
        // line 16
        if ( !twig_test_empty(($context["products"] ?? null))) {
            // line 17
            echo "            <div class=\"flex\">
                <div class=\"product_cards\">
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "                        ";
                $context["product"] = twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 20);
                // line 21
                echo "                        ";
                $context["quantity"] = twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 21);
                // line 22
                echo "                        ";
                $this->loadTemplate("client/product_card.html.twig", "client/cart/cart.html.twig", 22)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null), "quantity" => ($context["quantity"] ?? null)]));
                // line 23
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </div>
                <div class=\"priceAndConfirmOrder\">
                    <div class=\"order_price\">
                        <p>
                            Nombre d'articles<br>
                            <span class=\"nb_products_value\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getNbProducts", [], "method", false, false, false, 29), "html", null, true);
            echo "</span>
                        </p>
                        <p>
                            Total de la commande<br>
                            <span class=\"order_price_value\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getOrderPriceHT", [], "method", false, false, false, 33), "EUR"), "html", null, true);
            echo "</span>
                        </p>
                    </div>
                    <div class=\"confirm-order\">
                        <a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_delivery_choice");
            echo "\">Passer la commande</a>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 42
            echo "            <p class=\"noProductInCart\">Votre panier ne contient pas de produit, ajoutez-en <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_categories");
            echo "\">ici</a></p>
        ";
        }
        // line 44
        echo "    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/cart/cart.html.twig";
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
        return array (  165 => 44,  159 => 42,  151 => 37,  144 => 33,  137 => 29,  130 => 24,  116 => 23,  113 => 22,  110 => 21,  107 => 20,  90 => 19,  86 => 17,  84 => 16,  80 => 14,  76 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/cart/cart.html.twig", "/usr/local/apache2/htdocs/templates/client/cart/cart.html.twig");
    }
}
