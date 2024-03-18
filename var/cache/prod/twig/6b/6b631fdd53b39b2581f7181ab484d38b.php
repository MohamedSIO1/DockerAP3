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

/* logistics/header_links.html.twig */
class __TwigTemplate_9c75ce8e5551f7fedae2986cc33dab34 extends Template
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
        $this->parent = $this->loadTemplate("header.html.twig", "logistics/header_links.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics_dashboard");
        echo "\" class=\"";
        echo (((($context["path"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics_dashboard"))) ? ("on") : (""));
        echo "\" title=\"Tableau de bord\">Tableau de bord</a>
    </li>
    <li>
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics_account");
        echo "\" class=\"";
        echo (((($context["path"] ?? null) == $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logistics_account"))) ? ("on") : (""));
        echo "\" title=\"Compte\">Profil</a>
    </li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logistics/header_links.html.twig";
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
        return array (  64 => 9,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "logistics/header_links.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\logistics\\header_links.html.twig");
    }
}
