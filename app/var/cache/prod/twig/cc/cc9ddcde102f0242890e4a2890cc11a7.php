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

/* header.html.twig */
class __TwigTemplate_ce4cd48cedbc7445d1e1ab0aa9838207 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header_links' => [$this, 'block_header_links'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"header-app\" class=\"header-app\">
\t<div class=\"header-app__content\">
\t\t<div class=\"header-app__logo\">
\t\t\t<a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_home");
        echo "\" title=\"All4Sport\">
\t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/header/logo.png"), "html", null, true);
        echo "\" alt=\"Logo All4Sport\">
\t\t\t</a>
\t\t</div>
\t\t<div class=\"header-app__search\">
\t\t\t<form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_categories");
        echo "\">
\t\t\t\t<input type=\"search\" name=\"p\" placeholder=\"Rechercher un produit...\">
\t\t\t</form>
\t\t</div>
\t\t<nav class=\"header-app__nav\">
\t\t\t<ul>
\t\t\t\t";
        // line 15
        $this->displayBlock('header_links', $context, $blocks);
        // line 16
        echo "\t\t\t</ul>
\t\t</nav>
\t</div>
</header>
";
    }

    // line 15
    public function block_header_links($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.html.twig";
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
        return array (  73 => 15,  65 => 16,  63 => 15,  54 => 9,  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\header.html.twig");
    }
}
