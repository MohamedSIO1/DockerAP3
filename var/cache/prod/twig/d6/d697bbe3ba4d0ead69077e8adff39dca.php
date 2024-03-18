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

/* logistics/product/index.html.twig */
class __TwigTemplate_fa6f5c6b2195d1080eba0292064c6c55 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "logistics/product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Emplacement produit ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["products"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "getProduct", [], "method", false, false, false, 3), "getId", [], "method", false, false, false, 3)), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <style>
        .item {
            display: block;
            background-color: #F1F1F1;
            color: var(--primaryColor);
            margin: 10px 0;
            padding: 20px;
            border: 1px solid transparent;
            border-radius: var(--radiusBorder);
            transition: .2s ease;
            transition-property: background-color, border-color;
        }
        .item:hover {
            background-color: #E1E1E1;
            border-color: #aaa;
        }
    </style>
";
    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->loadTemplate("logistics/header_links.html.twig", "logistics/product/index.html.twig", 26)->display($context);
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <div class=\"app_container app_padding\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 32
            echo "            <div class=\"item\">
                ";
            // line 33
            $context["warehouseId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getShelf", [], "method", false, false, false, 33), "getSection", [], "method", false, false, false, 33), "getWay", [], "method", false, false, false, 33), "getModule", [], "method", false, false, false, 33), "getBuilding", [], "method", false, false, false, 33), "getWarehouse", [], "method", false, false, false, 33), "getId", [], "method", false, false, false, 33);
            // line 34
            echo "                ";
            $context["warehouseCity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getShelf", [], "method", false, false, false, 34), "getSection", [], "method", false, false, false, 34), "getWay", [], "method", false, false, false, 34), "getModule", [], "method", false, false, false, 34), "getBuilding", [], "method", false, false, false, 34), "getWarehouse", [], "method", false, false, false, 34), "getCity", [], "method", false, false, false, 34);
            // line 35
            echo "                ";
            $context["building"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getShelf", [], "method", false, false, false, 35), "getSection", [], "method", false, false, false, 35), "getWay", [], "method", false, false, false, 35), "getModule", [], "method", false, false, false, 35), "getBuilding", [], "method", false, false, false, 35), "getCode", [], "method", false, false, false, 35);
            // line 36
            echo "                ";
            $context["module"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getShelf", [], "method", false, false, false, 36), "getSection", [], "method", false, false, false, 36), "getWay", [], "method", false, false, false, 36), "getModule", [], "method", false, false, false, 36), "getCode", [], "method", false, false, false, 36);
            // line 37
            echo "                ";
            $context["way"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getShelf", [], "method", false, false, false, 37), "getSection", [], "method", false, false, false, 37), "getWay", [], "method", false, false, false, 37), "getCode", [], "method", false, false, false, 37);
            // line 38
            echo "                ";
            $context["section"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getShelf", [], "method", false, false, false, 38), "getSection", [], "method", false, false, false, 38), "getCode", [], "method", false, false, false, 38);
            // line 39
            echo "                ";
            $context["shelf"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getShelf", [], "method", false, false, false, 39), "getCode", [], "method", false, false, false, 39);
            // line 40
            echo "                <p>Entrepôt : ";
            echo twig_escape_filter($this->env, ($context["warehouseCity"] ?? null), "html", null, true);
            echo "</p>
                <p>Bâtiment : ";
            // line 41
            echo twig_escape_filter($this->env, ($context["building"] ?? null), "html", null, true);
            echo "</p>
                <p>Module : ";
            // line 42
            echo twig_escape_filter($this->env, ($context["module"] ?? null), "html", null, true);
            echo "</p>
                <p>Rangée : ";
            // line 43
            echo twig_escape_filter($this->env, ($context["way"] ?? null), "html", null, true);
            echo "</p>
                <p>Section : ";
            // line 44
            echo twig_escape_filter($this->env, ($context["section"] ?? null), "html", null, true);
            echo "</p>
                <p>Étagère : ";
            // line 45
            echo twig_escape_filter($this->env, ($context["shelf"] ?? null), "html", null, true);
            echo "</p>
                <br>
                <p>Quantité : ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getQuantity", [], "method", false, false, false, 47), "html", null, true);
            echo "</p>
                <p>Emplacement : <b>";
            // line 48
            echo twig_escape_filter($this->env, ($context["warehouseId"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["building"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["module"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["way"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["section"] ?? null), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, ($context["shelf"] ?? null), "html", null, true);
            echo "</b></p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logistics/product/index.html.twig";
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
        return array (  170 => 51,  155 => 48,  151 => 47,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  130 => 41,  125 => 40,  122 => 39,  119 => 38,  116 => 37,  113 => 36,  110 => 35,  107 => 34,  105 => 33,  102 => 32,  98 => 31,  95 => 30,  91 => 29,  86 => 26,  82 => 25,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "logistics/product/index.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\logistics\\product\\index.html.twig");
    }
}
