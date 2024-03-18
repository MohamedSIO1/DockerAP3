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

/* @ApiPlatform/SwaggerUi/index.html.twig */
class __TwigTemplate_06027ac36d4766fb77e6fb71e76ae5b7 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'header' => [$this, 'block_header'],
            'javascript' => [$this, 'block_javascript'],
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
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $context["oauth_data"] = ["oauth" => twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["swagger_data"] ?? null), "oauth", [], "any", false, false, false, 19), ["redirectUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/oauth2-redirect.html", ($context["assetPackage"] ?? null)))])];
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 25
        echo "</head>

<body>
<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"svg-icons\">
    <defs>
        <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"locked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"close\">
            <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
            <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
            <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"></path>
        </symbol>


        <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
            <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 24 24\" id=\"expand\">
            <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"></path>
        </symbol>

    </defs>
</svg>

";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        if (($context["showWebby"] ?? null)) {
            // line 69
            echo "    <div class=\"web\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/web.png", ($context["assetPackage"] ?? null)), "html", null, true);
            echo "\"></div>
    <div class=\"webby\"><img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/webby.png", ($context["assetPackage"] ?? null)), "html", null, true);
            echo "\"></div>
";
        }
        // line 72
        echo "
<div id=\"swagger-ui\" class=\"api-platform\"></div>

<div class=\"swagger-ui\" id=\"formats\">
    <div class=\"information-container wrapper\">
        <div class=\"info\">
            Available formats:
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["formats"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 80
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["originalRoute"] ?? null), twig_array_merge(($context["originalRouteParams"] ?? null), ["_format" => $context["format"]])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["format"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            <br>
            Other API docs:
            ";
        // line 84
        $context["active_ui"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 84), "get", ["ui", "swagger_ui"], "method", false, false, false, 84);
        // line 85
        echo "            ";
        if ((($context["swaggerUiEnabled"] ?? null) && (($context["active_ui"] ?? null) != "swagger_ui"))) {
            echo "<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_doc");
            echo "\">Swagger UI</a>";
        }
        // line 86
        echo "            ";
        if ((($context["reDocEnabled"] ?? null) && (($context["active_ui"] ?? null) != "re_doc"))) {
            echo "<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_doc", ["ui" => "re_doc"]);
            echo "\">ReDoc</a>";
        }
        // line 87
        echo "            ";
        if (( !($context["graphQlEnabled"] ?? null) || ($context["graphiQlEnabled"] ?? null))) {
            echo "<a ";
            if (($context["graphiQlEnabled"] ?? null)) {
                echo "href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_graphql_graphiql");
                echo "\"";
            }
            echo " class=\"graphiql-link\">GraphiQL</a>";
        }
        // line 88
        echo "            ";
        if (($context["graphQlPlaygroundEnabled"] ?? null)) {
            echo "<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_graphql_graphql_playground");
            echo "\">GraphQL Playground (deprecated)</a>";
        }
        // line 89
        echo "        </div>
    </div>
</div>

";
        // line 93
        $this->displayBlock('javascript', $context, $blocks);
        // line 104
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
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/fonts/open-sans/400.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/fonts/open-sans/700.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/style.css", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\">
    ";
    }

    // line 21
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        // line 23
        echo "        <script id=\"swagger-data\" type=\"application/json\">";
        echo json_encode(twig_array_merge(($context["swagger_data"] ?? null), ($context["oauth_data"] ?? null)), 65);
        echo "</script>
    ";
    }

    // line 62
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    <header>
        <a id=\"logo\" href=\"https://api-platform.com\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/logo-header.svg", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\" alt=\"API Platform\"></a>
    </header>
";
    }

    // line 93
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "    ";
        if (((($context["reDocEnabled"] ?? null) &&  !($context["swaggerUiEnabled"] ?? null)) || (($context["reDocEnabled"] ?? null) && ("re_doc" == ($context["active_ui"] ?? null))))) {
            // line 95
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/redoc/redoc.standalone.js", ($context["assetPackage"] ?? null)), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-redoc-ui.js", ($context["assetPackage"] ?? null)), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // line 98
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-bundle.js", ($context["assetPackage"] ?? null)), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-standalone-preset.js", ($context["assetPackage"] ?? null)), "html", null, true);
            echo "\"></script>
        <script src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-swagger-ui.js", ($context["assetPackage"] ?? null)), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 102
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-common-ui.js", ($context["assetPackage"] ?? null)), "html", null, true);
        echo "\" defer></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@ApiPlatform/SwaggerUi/index.html.twig";
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
        return array (  307 => 102,  302 => 100,  298 => 99,  293 => 98,  288 => 96,  283 => 95,  280 => 94,  276 => 93,  269 => 64,  266 => 63,  262 => 62,  255 => 23,  253 => 22,  249 => 21,  243 => 16,  239 => 15,  235 => 14,  230 => 13,  226 => 12,  216 => 9,  212 => 8,  207 => 5,  203 => 4,  196 => 104,  194 => 93,  188 => 89,  181 => 88,  170 => 87,  163 => 86,  156 => 85,  154 => 84,  150 => 82,  139 => 80,  135 => 79,  126 => 72,  121 => 70,  116 => 69,  114 => 68,  111 => 67,  109 => 62,  70 => 25,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  58 => 12,  55 => 11,  53 => 8,  50 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ApiPlatform/SwaggerUi/index.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\vendor\\api-platform\\core\\src\\Symfony\\Bundle\\Resources\\views\\SwaggerUi\\index.html.twig");
    }
}
