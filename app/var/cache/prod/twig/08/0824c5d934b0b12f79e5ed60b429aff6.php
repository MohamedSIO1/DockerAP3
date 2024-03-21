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

/* client/profil/profil.html.twig */
class __TwigTemplate_341f01762af92bd197640b50881574c5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/profil/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon Profil";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profil.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/profil/profil.html.twig", 10)->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t<div class=\"app_container app_padding\">
\t\t<div class=\"back_links\">
\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_profil");
        echo "\">Mon profil</a>
\t\t</div>
\t\t<h1>Mon profil</h1>
\t\t<div class=\"box_container\">
\t\t\t<div class=\"user-info\">
\t\t\t\t<h2 class=\"box_title\">
\t\t\t\t\t<span>Bonjour,</span>
\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "getFirstName", [], "method", false, false, false, 23), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 23), "getName", [], "method", false, false, false, 23), "html", null, true);
        echo "
\t\t\t\t</h2>
\t\t\t\t<p>
\t\t\t\t\t<span>Email :</span> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "getEmail", [], "method", false, false, false, 26), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<span>Téléphone :</span> ";
        // line 29
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "getPhone", [], "method", true, true, false, 29) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "getPhone", [], "method", false, false, false, 29)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 29), "getPhone", [], "method", false, false, false, 29), "html", null, true))) : (print ("À compléter")));
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<span>Adresse :</span> ";
        // line 32
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 32), "getAddress", [], "method", true, true, false, 32) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 32), "getAddress", [], "method", false, false, false, 32)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 32), "getAddress", [], "method", false, false, false, 32), "html", null, true))) : (print ("À compléter")));
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h2 class=\"box_title\">Mes dernières commandes</h2>
\t\t\t\t";
        // line 37
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "getOrders", [], "method", false, false, false, 37))) {
            // line 38
            echo "\t\t\t\t\t<div class=\"flex\">
\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 39), "getOrders", [], "method", false, false, false, 39), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "getDateTime", [], "method", false, false, false, 39) < twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "getDateTime", [], "method", false, false, false, 39)); }), 0, 4));
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
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 40
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("client/order_card.html.twig", "client/profil/profil.html.twig", 40)->display(twig_array_merge($context, ["order" => $context["order"]]));
                // line 41
                echo "\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"see_all_orders\">
\t\t\t\t\t\t<a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_my_orders");
            echo "\">Voir mes commandes</a>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t<p>Vous n'avez pas encore passé de commande sur notre site</p>
\t\t\t\t";
        }
        // line 49
        echo "\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a class=\"logout-button\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/profil/profil.html.twig";
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
        return array (  179 => 51,  175 => 49,  171 => 47,  165 => 44,  161 => 42,  147 => 41,  144 => 40,  127 => 39,  124 => 38,  122 => 37,  114 => 32,  108 => 29,  102 => 26,  94 => 23,  84 => 16,  80 => 14,  76 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/profil/profil.html.twig", "/usr/local/apache2/htdocs/templates/client/profil/profil.html.twig");
    }
}
