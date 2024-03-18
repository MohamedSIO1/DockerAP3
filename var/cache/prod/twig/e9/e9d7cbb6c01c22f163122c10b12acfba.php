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

/* client/product_card-stock.html.twig */
class __TwigTemplate_fc9e4ea8cf3f8789b9e1fdc174ce8e15 extends Template
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
        $context["svgCheck"] = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--greenColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg>";
        // line 2
        $context["svgNotCheck"] = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"var(--redColor)\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line></svg>";
        // line 3
        echo "
<div class=\"product_card-stock\">
    <div class=\"flex\">
        ";
        // line 6
        $context["quantityStockWebs"] = 0;
        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_web"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 8
            echo "            ";
            $context["quantityStockWebs"] = (($context["quantityStockWebs"] ?? null) + twig_get_attribute($this->env, $this->source, $context["stock"], "getQuantity", [], "method", false, false, false, 8));
            // line 9
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        <p>
            ";
        // line 11
        echo (((($context["quantityStockWebs"] ?? null) <= 0)) ? (($context["svgNotCheck"] ?? null)) : (($context["svgCheck"] ?? null)));
        echo "
            Internet
        </p>
        ";
        // line 14
        $context["quantityStore"] = 0;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_store"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 16
            echo "            ";
            $context["quantityStore"] = (($context["quantityStore"] ?? null) + twig_get_attribute($this->env, $this->source, $context["stock"], "getQuantity", [], "method", false, false, false, 16));
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <p>
            ";
        // line 19
        echo (((($context["quantityStore"] ?? null) <= 0)) ? (($context["svgNotCheck"] ?? null)) : (($context["svgCheck"] ?? null)));
        echo "
            Magasin
        </p>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/product_card-stock.html.twig";
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
        return array (  90 => 19,  87 => 18,  81 => 17,  78 => 16,  73 => 15,  71 => 14,  65 => 11,  62 => 10,  56 => 9,  53 => 8,  48 => 7,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/product_card-stock.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\product_card-stock.html.twig");
    }
}
