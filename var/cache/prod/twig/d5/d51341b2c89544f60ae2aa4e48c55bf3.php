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

/* client/profil/confirm_order.html.twig */
class __TwigTemplate_9c9e6a455e87121233ab5baede5ad21d extends Template
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
        $context["user"] = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getUser", [], "method", false, false, false, 1);
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: \"DejaVu Sans\";
            line-height: 1;
            padding: 40px 20px;
        }

        ul {
            display: inline-block;
        }

        ul, li {
            list-style: none;
        }

        .text_left {
            text-align: left;
        }

        .text_center {
            text-align: center;
        }

        .text_right {
            text-align: right;
        }

        .text_important {
            font-weight: bold;
            text-transform: uppercase;
        }

        .text_bold {
            font-weight: bold;
        }

        .mr-10 {
            margin-right: 10px;
        }

        .void {
            border: 0;
        }

        .user_name {
            font-size: 1.2em;
            font-weight: bold;
        }

        .header {
            margin-bottom: 60px;
        }

        .header a {
            position: absolute;
        }

        .company_infos {
            margin-bottom: 20px;
        }

        .flex {
            margin-bottom: 40px;
        }
        .flex:after {
            content: \"\";
            display: block;
            clear: both;
        }

        .user_infos {
            float: left;
        }

        .order_infos {
            float: right;
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px 10px;
            border: 1px solid #000;
        }

        th {
            background-color: #000;
            color: #fff;
            text-transform: uppercase;
        }

        .product_quantity {
            width: 8%;
        }

        .product_name {
            width: 52%;
        }

        .product_price {
            text-align: right;
            width: 20%;
        }

        .product_total_price {
            text-align: right;
            width: 20%;
        }
    </style>
</head>
<body>
<div class=\"header\">
    <a href=\"http://";
        // line 130
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo (((is_string($__internal_compile_0 = ($context["host"] ?? null)) && is_string($__internal_compile_1 = "www.localhost") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? (":8000") : (null));
        echo "\">
        <img src=\"data:image/png;base64,";
        // line 131
        echo twig_escape_filter($this->env, ($context["logo"] ?? null), "html", null, true);
        echo "\" alt=\"Logo All4Sport\" width=\"60\">
    </a>
    <h1 class=\"text_right\">";
        // line 133
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
</div>
<div class=\"company_infos\">
    <div>
        <a href=\"http://";
        // line 137
        echo twig_escape_filter($this->env, ($context["host"] ?? null), "html", null, true);
        echo (((is_string($__internal_compile_2 = ($context["host"] ?? null)) && is_string($__internal_compile_3 = "www.localhost") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? (":8000") : (null));
        echo "\">All4Sport.fr</a>
    </div>
    <p>03.XX.XX.XX.XX</p>
    <p>contact@all4sport.fr</p>
    <p>XX rue des XXXXXXXX</p>
</div>
<div class=\"flex\">
    <div class=\"user_infos\">
        <p>Envoyé à</p>
        <p class=\"user_name\">";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFirstName", [], "method", false, false, false, 146), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getName", [], "method", false, false, false, 146)), "html", null, true);
        echo "</p>
        <p>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getCredential", [], "method", false, false, false, 147), "getEmail", [], "method", false, false, false, 147), "html", null, true);
        echo "</p>
        <p>";
        // line 148
        echo (( !twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getShippingCost", [], "method", false, false, false, 148)) ? ("All4Sport") : (""));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getAddress", [], "method", false, false, false, 148), "html", null, true);
        echo "</p>
    </div>
    <div class=\"order_infos\">
        <ul class=\"text_left mr-10\">
            <li>Commande</li>
            <li>Client</li>
            <li>Date de facture</li>
            <li>Quantité de produits</li>
        </ul>
        <ul class=\"text_bold\">
            <li>n° ";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 158), "html", null, true);
        echo "</li>
            <li>n° ";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getId", [], "method", false, false, false, 159), "html", null, true);
        echo "</li>
            <li>";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDateTime", [], "method", false, false, false, 160), "medium", "dd/MM/y 'à' HH'h'mm", null, "gregorian", "fr"), "html", null, true);
        echo "</li>
            <li>";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getProductQuantity", [], "method", false, false, false, 161), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div>
    <table>
        <tbody>
        <tr>
            <th class=\"first\">Qté</th>
            <th class=\"second\">Désignation</th>
            <th class=\"third\">Prix unit</th>
            <th class=\"four\">Montant</th>
        </tr>
        ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderDetail", [], "method", false, false, false, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 175
            echo "            <tr>
                <td class=\"text_center product_quantity\">";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "getQuantity", [], "method", false, false, false, 176), "html", null, true);
            echo "</td>
                <td class=\"product_name\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "getProduct", [], "method", false, false, false, 177), "getName", [], "method", false, false, false, 177), "html", null, true);
            echo "</td>
                <td class=\"text_center product_price\">";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["detail"], "getUnitPrice", [], "method", false, false, false, 178), "EUR"), "html", null, true);
            echo "</td>
                <td class=\"text_center product_total_price\">";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, $context["detail"], "getUnitPrice", [], "method", false, false, false, 179) * twig_get_attribute($this->env, $this->source, $context["detail"], "getQuantity", [], "method", false, false, false, 179)), "EUR"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getShippingCost", [], "method", false, false, false, 182)) {
            // line 183
            echo "            <tr>
                <td class=\"void\"></td>
                <td class=\"void\"></td>
                <td class=\"text_center text_important\">Livraison</td>
                <td class=\"text_center product_total_price\">+ ";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getShippingCost", [], "method", false, false, false, 187), "EUR"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 190
        echo "        <tr>
            <td class=\"void\"></td>
            <td class=\"void\"></td>
            <td class=\"text_center text_important\">Total HT</td>
            <td class=\"text_center product_total_price\">";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalPriceHT", [], "method", false, false, false, 194), "EUR"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class=\"void\"></td>
            <td class=\"void\"></td>
            <td class=\"text_center text_important\">TVA</td>
            <td class=\"text_center product_total_price\">";
        // line 200
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTax", [], "method", false, false, false, 200), "html", null, true);
        echo " %</td>
        </tr>
        <tr>
            <td class=\"void\"></td>
            <td class=\"void\"></td>
            <td class=\"text_center text_important\">Total TTC</td>
            <td class=\"text_center product_total_price\">";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalPriceHT", [], "method", false, false, false, 206) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalPriceHT", [], "method", false, false, false, 206) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTax", [], "method", false, false, false, 206)) / 100)), "EUR"), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/profil/confirm_order.html.twig";
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
        return array (  322 => 206,  313 => 200,  304 => 194,  298 => 190,  292 => 187,  286 => 183,  283 => 182,  274 => 179,  270 => 178,  266 => 177,  262 => 176,  259 => 175,  255 => 174,  239 => 161,  235 => 160,  231 => 159,  227 => 158,  212 => 148,  208 => 147,  202 => 146,  189 => 137,  182 => 133,  177 => 131,  172 => 130,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/profil/confirm_order.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\profil\\confirm_order.html.twig");
    }
}
