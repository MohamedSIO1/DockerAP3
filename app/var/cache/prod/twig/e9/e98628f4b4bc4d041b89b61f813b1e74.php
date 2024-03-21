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

/* client/cart/update_cart.html.twig */
class __TwigTemplate_efc3c2c2309b533c59b2335f111009b7 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["response"] ?? null), "orderPrice", [], "any", true, true, false, 1)) {
            // line 2
            echo "    ";
            $context["response"] = twig_array_merge(($context["response"] ?? null), ["orderPrice" => $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["response"] ?? null), "orderPrice", [], "any", false, false, false, 2), "EUR")]);
        }
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["response"] ?? null), "productPrice", [], "any", true, true, false, 4)) {
            // line 5
            echo "    ";
            $context["response"] = twig_array_merge(($context["response"] ?? null), ["productPrice" => $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, ($context["response"] ?? null), "productPrice", [], "any", false, false, false, 5), "EUR")]);
        }
        // line 7
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, json_encode(($context["response"] ?? null)), "html", null, true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/cart/update_cart.html.twig";
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
        return array (  52 => 8,  49 => 7,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/cart/update_cart.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\cart\\update_cart.html.twig");
    }
}
