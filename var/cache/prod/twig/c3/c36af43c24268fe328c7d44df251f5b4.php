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

/* client/header_links.html.twig */
class __TwigTemplate_e7666b31256f67cc1a21bfdc2b251038 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header_links' => [$this, 'block_header_links'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("header.html.twig", "client/header_links.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "getPathInfo", [], "method", false, false, false, 4);
        // line 5
        echo "    <li>
        <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_home");
        echo "\" class=\"";
        echo (((($context["path"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_home"))) ? ("on") : (""));
        echo "\" title=\"Accueil\">Accueil</a>
    </li>
    <li>
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_categories");
        echo "\" class=\"";
        echo (((($context["path"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_categories"))) ? ("on") : (""));
        echo "\" title=\"Catalogue\">Catalogue</a>
    </li>
    ";
        // line 12
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "        <li>
            <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profil");
            echo "\" class=\"";
            echo (((($context["path"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profil"))) ? ("on") : (""));
            echo "\" title=\"Mon profil\">Mon profil</a>
        </li>
    ";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "        <li>
            <a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"";
            echo (((($context["path"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login"))) ? ("on") : (""));
            echo "\" title=\"Connexion\">Connexion</a>
        </li>
    ";
        }
        // line 22
        echo "    <li>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_cart");
        echo "\" class=\"";
        echo (((($context["path"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_cart"))) ? ("on") : (""));
        echo "\" title=\"Mon panier\">
            Mon panier
            <span class=\"order_price_value\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "getOrderPriceHT", [], "method", false, false, false, 25), "EUR"), "html", null, true);
        echo "</span>
        </a>
    </li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/header_links.html.twig";
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
        return array (  108 => 25,  101 => 23,  98 => 22,  90 => 19,  87 => 18,  84 => 17,  77 => 14,  74 => 13,  71 => 12,  64 => 9,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/header_links.html.twig", "/usr/local/apache2/htdocs/templates/client/header_links.html.twig");
    }
}
