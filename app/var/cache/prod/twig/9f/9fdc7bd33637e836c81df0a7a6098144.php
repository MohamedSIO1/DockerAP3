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

/* client/profil/order.html.twig */
class __TwigTemplate_f28a3264c556eb0cbfa306cb05390ca6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/profil/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Commande nº ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profil.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/order.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/profil/order.html.twig", 12)->display($context);
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t<div class=\"app_container app_padding\">
        <div class=\"back_links\">
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profil");
        echo "\">Mon profil</a>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_my_order", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 19)]), "html", null, true);
        echo "\">Commande nº ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 19), "html", null, true);
        echo "</a>
        </div>
        <h1>Commande nº ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 21), "html", null, true);
        echo "</h1>
        <div class=\"order-info\">
            <div class=\"confirm_order\">
                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_my_confirm_order", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 24)]), "html", null, true);
        echo "\">Voir ma facture</a>
            </div>
            <p>Suivre l'avancée de votre commande</p>
            <div class=\"order_states\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderRanks", [], "method", false, false, false, 28));
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
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 29
            echo "                    <div>
                        ";
            // line 30
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) {
                // line 31
                echo "                            <hr>
                        ";
            }
            // line 33
            echo "                        <p>
                            <span>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rank"], "getOrderState", [], "method", false, false, false, 34), "getName", [], "method", false, false, false, 34), "html", null, true);
            echo "</span>
                            le ";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, $context["rank"], "getDateTime", [], "method", false, false, false, 35), "medium", "EEEE d MMMM y 'à' HH'h'mm", null, "gregorian", "fr"), "html", null, true);
            echo "
                        </p>
                        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37) < twig_length_filter($this->env, ($context["orderStates"] ?? null))))) {
                // line 38
                echo "                            <hr>
                            <p class=\"future\">
                                <span>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["orderStates"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40)] ?? null) : null), "getName", [], "method", false, false, false, 40), "html", null, true);
                echo "</span>
                                À venir...
                            </p>
                        ";
            }
            // line 44
            echo "                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
        </div>
        <div class=\"product_cards\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderDetail", [], "method", false, false, false, 49));
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
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 50
            echo "                ";
            $this->loadTemplate("client/product_card.html.twig", "client/profil/order.html.twig", 50)->display(twig_array_merge($context, ["product" => twig_get_attribute($this->env, $this->source,             // line 51
$context["detail"], "getProduct", [], "method", false, false, false, 51), "quantity" => twig_get_attribute($this->env, $this->source,             // line 52
$context["detail"], "getQuantity", [], "method", false, false, false, 52), "orderDetail" => true, "orderPrice" => twig_get_attribute($this->env, $this->source,             // line 54
$context["detail"], "getUnitPrice", [], "method", false, false, false, 54)]));
            // line 56
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
\t</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/profil/order.html.twig";
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
        return array (  225 => 57,  211 => 56,  209 => 54,  208 => 52,  207 => 51,  205 => 50,  188 => 49,  183 => 46,  168 => 44,  161 => 40,  157 => 38,  155 => 37,  150 => 35,  146 => 34,  143 => 33,  139 => 31,  137 => 30,  134 => 29,  117 => 28,  110 => 24,  104 => 21,  97 => 19,  93 => 18,  89 => 16,  85 => 15,  80 => 12,  76 => 11,  70 => 8,  66 => 7,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/profil/order.html.twig", "/usr/local/apache2/htdocs/templates/client/profil/order.html.twig");
    }
}
