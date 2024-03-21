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

/* client/categories/categories.html.twig */
class __TwigTemplate_5ab4c1a9fcb115bd6d1cd3b212268e6f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/categories/categories.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Catalogue";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/category.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/categories/categories.html.twig", 10)->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t<h1>Catalogue</h1>
\t<div class=\"app_container app_padding\">
\t\t<!-- Barre de recherche -->
\t\t<form method=\"GET\" class=\"search-bar\">
\t\t\t<input type=\"search\" name=\"p\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", ["p"], "method", false, false, false, 18), "html", null, true);
        echo "\" placeholder=\"Rechercher un produit...\" required>
\t\t\t<select name=\"c\">
\t\t\t\t<option class=\"select-category\" value=\"\">Toutes catégories</option>
\t\t\t\t<!-- Boucle pour afficher toutes les catégories disponibles -->
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "method", false, false, false, 23), "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "method", false, false, false, 23) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 23), "query", [], "any", false, false, false, 23), "get", ["c"], "method", false, false, false, 23))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "method", false, false, false, 23), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t</select>
\t\t\t<button>🔍</button>
\t\t</form>
\t\t<div class=\"categories\">
\t\t\t";
        // line 29
        if ( !(null === ($context["searchResult"] ?? null))) {
            // line 30
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["searchResult"] ?? null));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["category"] => $context["products"]) {
                // line 31
                echo "\t\t\t\t\t<div class=\"category\">
\t\t\t\t\t\t";
                // line 32
                $context["categoryNameAndSlug"] = twig_split_filter($this->env, $context["category"], " ");
                // line 33
                echo "\t\t\t\t\t\t<a class=\"category-name\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_category", ["slug" => (($__internal_compile_0 = ($context["categoryNameAndSlug"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[2] ?? null) : null)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["categoryNameAndSlug"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($__internal_compile_2 = ($context["categoryNameAndSlug"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null)), "html", null, true);
                echo " 🔗</a>
\t\t\t\t\t\t<div class=\"product_cards\">
\t\t\t\t\t\t\t";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $context["products"], 0, 8));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t";
                    $this->loadTemplate("client/product_card.html.twig", "client/categories/categories.html.twig", 36)->display(twig_array_merge($context, ["product" => $context["product"]]));
                    // line 37
                    echo "\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 39
                if ((twig_length_filter($this->env, $context["products"]) > 8)) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<div style=\"text-align: center;margin: 10px 0\">
\t\t\t\t\t\t\t\t<a class=\"link\" href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_category", ["slug" => (($__internal_compile_3 = ($context["categoryNameAndSlug"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[2] ?? null) : null)]), "html", null, true);
                    echo "\" title=\"Voir plus\">Voir plus</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t</div>
\t\t\t\t";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 46
                echo "\t\t\t\t\t<p>Aucun produit trouvé</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['products'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 50
                echo "\t\t\t\t\t<div class=\"category\">
\t\t\t\t\t\t<a class=\"category-name\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "getSlug", [], "method", false, false, false, 51)]), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "method", false, false, false, 51), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getName", [], "method", false, false, false, 51)), "html", null, true);
                echo " 🔗</a>
\t\t\t\t\t\t<div class=\"product_cards\">
\t\t\t\t\t\t\t<!-- Boucle pour afficher les produits de chaque catégorie -->
\t\t\t\t\t\t\t";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getProducts", [], "method", false, false, false, 54), 0, 8));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t";
                    $this->loadTemplate("client/product_card.html.twig", "client/categories/categories.html.twig", 55)->display(twig_array_merge($context, ["product" => $context["product"]]));
                    // line 56
                    echo "\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 58
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getProducts", [], "method", false, false, false, 58)) > 8)) {
                    // line 59
                    echo "\t\t\t\t\t\t\t<div style=\"text-align: center;margin: 10px 0\">
\t\t\t\t\t\t\t\t<a class=\"link\" href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "getSlug", [], "method", false, false, false, 60)]), "html", null, true);
                    echo "\" title=\"Voir plus\">Voir plus</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t</div>
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t";
        }
        // line 66
        echo "\t\t</div>
\t</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/categories/categories.html.twig";
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
        return array (  321 => 66,  318 => 65,  303 => 63,  297 => 60,  294 => 59,  292 => 58,  289 => 57,  275 => 56,  272 => 55,  255 => 54,  245 => 51,  242 => 50,  224 => 49,  221 => 48,  214 => 46,  200 => 44,  194 => 41,  191 => 40,  189 => 39,  186 => 38,  172 => 37,  169 => 36,  152 => 35,  142 => 33,  140 => 32,  137 => 31,  118 => 30,  116 => 29,  110 => 25,  97 => 23,  93 => 22,  86 => 18,  80 => 14,  76 => 13,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/categories/categories.html.twig", "/usr/local/apache2/htdocs/templates/client/categories/categories.html.twig");
    }
}
