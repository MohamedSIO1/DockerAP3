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

/* client/order_card.html.twig */
class __TwigTemplate_b1fcfccb157fd85f8f5fd7b7dfff605d extends Template
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
        $context["hasOrder"] = array_key_exists("order", $context);
        // line 2
        echo "
";
        // line 3
        if (($context["hasOrder"] ?? null)) {
            // line 4
            echo "    <a class=\"order_card\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_my_order", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 4)]), "html", null, true);
            echo "\" title=\"Voir commande nº ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 4), "html", null, true);
            echo "\">
        <p class=\"order_num\">Commande nº ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 5), "html", null, true);
            echo "</p>
        <div class=\"order_card-body\">
            <p>
                <span>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderRanks", [], "method", false, false, false, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "getOrderState", [], "method", false, false, false, 8), "getName", [], "method", false, false, false, 8), "html", null, true);
            echo "</span>
                le ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getDateTime", [], "method", false, false, false, 9), "medium", "EEEE d MMMM y 'à' HH'h'mm", null, "gregorian", "fr"), "html", null, true);
            echo "
            </p>
            <p>
                <span>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getProductQuantity", [], "method", false, false, false, 12), "html", null, true);
            echo "</span>
                article";
            // line 13
            echo (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getProductQuantity", [], "method", false, false, false, 13) > 1)) ? ("s") : (""));
            echo "
            </p>
        </div>
        <p class=\"order_price\">
            Prix TTC :
            <span>";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalPriceHT", [], "method", false, false, false, 18) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalPriceHT", [], "method", false, false, false, 18) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTax", [], "method", false, false, false, 18)) / 100)), "EUR"), "html", null, true);
            echo "</span>
        </p>
    </a>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/order_card.html.twig";
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
        return array (  79 => 18,  71 => 13,  67 => 12,  61 => 9,  57 => 8,  51 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/order_card.html.twig", "/usr/local/apache2/htdocs/templates/client/order_card.html.twig");
    }
}
