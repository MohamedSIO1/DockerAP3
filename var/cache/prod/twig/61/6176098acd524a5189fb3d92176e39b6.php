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

/* @ApiPlatform/Graphiql/index.html.twig */
class __TwigTemplate_ef9bb834952b8cca8bc7eeb1a7a8f796 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'title' => [$this, 'block_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head_metas', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 21
        echo "</head>

<body>
<div id=\"graphiql\">Loading...</div>

";
        // line 26
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 32
        echo "
</body>
</html>
";
    }

    // line 4
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <meta charset=\"UTF-8\">
    ";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        <title>";
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " - ";
        }
        echo "API Platform</title>
    ";
    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphiql/graphiql.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphiql-style.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
    ";
    }

    // line 17
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
        // line 19
        echo "        <script id=\"graphiql-data\" type=\"application/json\">";
        echo json_encode(($context["graphiql_data"] ?? null), 65);
        echo "</script>
    ";
    }

    // line 26
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/react/react.production.min.js", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/react/react-dom.production.min.js", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/graphiql/graphiql.min.js", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-graphiql.js", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ApiPlatform/Graphiql/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  148 => 30,  144 => 29,  140 => 28,  135 => 27,  131 => 26,  124 => 19,  122 => 18,  118 => 17,  112 => 14,  107 => 13,  103 => 12,  93 => 9,  89 => 8,  84 => 5,  80 => 4,  73 => 32,  71 => 26,  64 => 21,  62 => 17,  59 => 16,  57 => 12,  54 => 11,  52 => 8,  49 => 7,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ApiPlatform/Graphiql/index.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\vendor\\api-platform\\core\\src\\Symfony\\Bundle\\Resources\\views\\Graphiql\\index.html.twig");
    }
}
