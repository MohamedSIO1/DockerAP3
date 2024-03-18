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

/* client/cart/place_order.html.twig */
class __TwigTemplate_fc32434d6186a10fa89fd8688eb09977 extends Template
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
            'javascripts_body' => [$this, 'block_javascripts_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/cart/place_order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Confirmer votre commande";
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
        $this->loadTemplate("client/header_links.html.twig", "client/cart/place_order.html.twig", 10)->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"app_container app_padding\">
        <h1>Livraison</h1>
        <div class=\"modify_cart\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_cart");
        echo "\" title=\"Modifier mon panier\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--primaryColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M19 12H6M12 5l-7 7 7 7\"/></svg>
                Modifier mon panier
            </a>
        </div>
        <form class=\"flex\" method=\"POST\" action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_place_order");
        echo "\">
            <div class=\"order_details\">
                <div class=\"delivery_choice\">
                    <p class=\"delivery_choice-title\">Choix de livraison</p>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 27
            echo "                        <p class=\"error\">";
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    <div class=\"delivery_choice-box\">
                        <input type=\"radio\" id=\"delivery-choice-store\" name=\"delivery-choice\">
                        <label for=\"delivery-choice-store\">En magasin</label>
                        <div class=\"form\">
                            <select name=\"store\">
                                <option value=\"\">Choisissez un magasin</option>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 36
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "getId", [], "method", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "getCity", [], "method", false, false, false, 36), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"delivery_choice-box\">
                        <input type=\"radio\" id=\"delivery-choice-home\" name=\"delivery-choice\">
                        <label for=\"delivery-choice-home\">À domicile (+ ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(($context["shipping_cost"] ?? null), "EUR"), "html", null, true);
        echo ")</label>
                        <div class=\"form\">
                            <div class=\"flex\">
                                <div class=\"box-input\">
                                    <label for=\"street\">Rue</label>
                                    <input type=\"text\" id=\"street\" name=\"street\">
                                </div>
                                <div class=\"box-input\">
                                    <label for=\"zip-code\">Code postal</label>
                                    <input type=\"text\" id=\"zip-code\" name=\"zip-code\">
                                </div>
                            </div>
                            <div class=\"box-input\">
                                <label for=\"city\">Ville</label>
                                <input type=\"text\" id=\"city\" name=\"city\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"priceAndConfirmOrder\">
                <div class=\"order_price\">
                    <p>
                        Nombre d'articles<br>
                        <span class=\"nb_products_value\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getNbProducts", [], "method", false, false, false, 67), "html", null, true);
        echo "</span>
                    </p>
                    <p id=\"delivery-choice-home-value\" hidden>
                        Livraison à domicile<br>
                        <span>";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(($context["shipping_cost"] ?? null), "EUR"), "html", null, true);
        echo "</span>
                    </p>
                    <p>
                        Total de la commande<br>
                        <span id=\"order-price-ht-value\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getOrderPriceHT", [], "method", false, false, false, 75), "EUR"), "html", null, true);
        echo "</span>
                    </p>
                    <p>
                        TVA<br>
                        <span>";
        // line 79
        echo twig_escape_filter($this->env, ($context["tva"] ?? null), "html", null, true);
        echo " %</span>
                    </p>
                    <p>
                        Total de la commande TTC<br>
                        <span id=\"order-price-ttc-value\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getOrderPriceHT", [], "method", false, false, false, 83) + ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getOrderPriceHT", [], "method", false, false, false, 83) * ($context["tva"] ?? null)) / 100)), "EUR"), "html", null, true);
        echo "</span>
                    </p>
                </div>
                <div class=\"confirm-order\">
                    <button name=\"confirm-order\">Passer la commande</button>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 94
    public function block_javascripts_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "    <script>
        const orderPriceHT = ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getOrderPriceHT", [], "method", false, false, false, 96), "html", null, true);
        echo ";
        const tax = ";
        // line 97
        echo twig_escape_filter($this->env, ($context["tva"] ?? null), "html", null, true);
        echo ";
        const shippingCost = ";
        // line 98
        echo twig_escape_filter($this->env, ($context["shipping_cost"] ?? null), "html", null, true);
        echo ";
    </script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        echo "\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/cart/place_order.html.twig";
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
        return array (  233 => 100,  228 => 98,  224 => 97,  220 => 96,  217 => 95,  213 => 94,  199 => 83,  192 => 79,  185 => 75,  178 => 71,  171 => 67,  144 => 43,  137 => 38,  126 => 36,  122 => 35,  114 => 29,  105 => 27,  101 => 26,  94 => 22,  86 => 17,  81 => 14,  77 => 13,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/cart/place_order.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\cart\\place_order.html.twig");
    }
}
