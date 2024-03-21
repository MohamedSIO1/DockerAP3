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

/* client/home/home.html.twig */
class __TwigTemplate_87ba876dbd0ce827d9d37dd0db40d547 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/home.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/home/home.html.twig", 10)->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"app_container app_padding\">
        <section class=\"top-content\">
            <h2 class=\"section_title\">
                <span>Nos meilleures ventes ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
            </h2>
            <div class=\"slider-container\">
                <div class=\"slider-cards\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestSells"] ?? null));
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
            // line 22
            echo "                        <div class=\"card\">
                            <div class=\"flex\">
                                ";
            // line 24
            $context["images"] = twig_get_attribute($this->env, $this->source, $context["product"], "getProductImgs", [], "method", false, false, false, 24);
            // line 25
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "getSlug", [], "method", false, false, false, 25)]), "html", null, true);
            echo "\" title=\"Voir le produit\">
                                    <img class=\"product_card-image--selected\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/images/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 26)) . "/") . twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["images"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "getName", [], "method", false, false, false, 26))), "html", null, true);
            echo "\" alt=\"Image du produit\">
                                </a>
                                <div class=\"product_card-images_list\">
                                    ";
            // line 29
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
                // line 30
                echo "                                        <div class=\"product_card-image";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)) ? (" selected") : (""));
                echo "\">
                                            <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((("media/images/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 31)) . "/") . twig_get_attribute($this->env, $this->source, $context["image"], "getName", [], "method", false, false, false, 31))), "html", null, true);
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
            // line 34
            echo "                                </div>
                            </div>
                            <div class=\"card-content\">
                                <div class=\"left\">
                                    <a class=\"product_card-name\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "getSlug", [], "method", false, false, false, 38)]), "html", null, true);
            echo "\" title=\"Voir le produit\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 38), "html", null, true);
            echo "</a>
                                    <p class=\"product_card-description\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 39)), "truncate", [20, "...", false], "method", false, false, false, 39), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"right\">
                                    <div class=\"left-of-right\">
                                        <p class=\"product_card-price\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["product"], "getUnitPrice", [], "method", false, false, false, 43), "EUR"), "html", null, true);
            echo "</p>
                                        ";
            // line 44
            $this->loadTemplate("client/product_card-stock.html.twig", "client/home/home.html.twig", 44)->display(twig_array_merge($context, ["stock_store" => twig_get_attribute($this->env, $this->source, $context["product"], "getStockStores", [], "method", false, false, false, 44), "stock_web" => twig_get_attribute($this->env, $this->source, $context["product"], "getStockShelves", [], "method", false, false, false, 44)]));
            // line 45
            echo "                                    </div>
                                    <div class=\"right-of-right product_card-buttons\">
                                        <a class=\"product_card-button_basic\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "getSlug", [], "method", false, false, false, 47)]), "html", null, true);
            echo "\" title=\"Voir le produit\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><g fill=\"none\" fill-rule=\"evenodd\"><path d=\"M18 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h5M15 3h6v6M10 14L20.2 3.8\"/></g></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    <button id=\"prevButton\" class=\"slider_btn slider_btn--left\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--whiteColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M19 12H6M12 5l-7 7 7 7\"/></svg>
                    </button>
                    <button id=\"nextButton\" class=\"slider_btn slider_btn--right\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--whiteColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M5 12h13M12 5l7 7-7 7\"/></svg>
                    </button>
                </div>
            </div>
        </section>
        <section class=\"bottom-content\">
            <h2 class=\"section_title\">
                <span>Notre sélection du moment</span>
            </h2>
            <div class=\"product_cards\">
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestProductByCategory"] ?? null));
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
            // line 70
            echo "                    ";
            $this->loadTemplate("client/product_card.html.twig", "client/home/home.html.twig", 70)->display(twig_array_merge($context, ["product" => $context["product"]]));
            // line 71
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </div>
        </section>
    </div>
";
    }

    // line 77
    public function block_javascripts_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/home/home.html.twig";
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
        return array (  278 => 78,  274 => 77,  267 => 72,  253 => 71,  250 => 70,  233 => 69,  217 => 55,  195 => 47,  191 => 45,  189 => 44,  185 => 43,  178 => 39,  172 => 38,  166 => 34,  149 => 31,  144 => 30,  127 => 29,  121 => 26,  116 => 25,  114 => 24,  110 => 22,  93 => 21,  86 => 17,  81 => 14,  77 => 13,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/home/home.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\home\\home.html.twig");
    }
}
