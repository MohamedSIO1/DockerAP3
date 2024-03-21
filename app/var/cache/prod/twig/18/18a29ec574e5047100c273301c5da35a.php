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

/* base.html.twig */
class __TwigTemplate_118f465a861095e4d9c09d3abc009eec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts_head' => [$this, 'block_javascripts_head'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts_body' => [$this, 'block_javascripts_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>A4S • ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/header/logo.png"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/header.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/footer.css"), "html", null, true);
        echo "\">
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 13
        echo "    </head>
    <body class=\"loading\">
        <div id=\"body_loading\" class=\"body_loading\">
            <div>
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/header/logo.png"), "html", null, true);
        echo "\" alt=\"Logo All4Sport\" width=\"50\">
            </div>
        </div>
        <div class=\"app\">
            ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "            <main id=\"main-app\" class=\"main-app\">
                ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            </main>
            ";
        // line 25
        $this->loadTemplate("footer.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "        </div>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/base.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 28
        $this->displayBlock('javascripts_body', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_javascripts_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 28
    public function block_javascripts_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  145 => 28,  139 => 23,  133 => 21,  127 => 12,  121 => 11,  115 => 6,  109 => 29,  107 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  88 => 21,  81 => 17,  75 => 13,  72 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/usr/local/apache2/htdocs/templates/base.html.twig");
    }
}
