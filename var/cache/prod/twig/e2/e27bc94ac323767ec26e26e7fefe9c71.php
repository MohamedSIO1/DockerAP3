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

/* security/login.html.twig */
class __TwigTemplate_9d7fefa6029a1d6148caae6785e7e2f0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/form.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "getHost", [], "method", false, false, false, 10)) && is_string($__internal_compile_1 = "logistique.") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 11
            echo "        ";
            $this->loadTemplate("logistics/header_links.html.twig", "security/login.html.twig", 11)->display($context);
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            $this->loadTemplate("client/header_links.html.twig", "security/login.html.twig", 13)->display($context);
            // line 14
            echo "    ";
        }
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"app_container app_padding\">
        <div class=\"form\">
            <form method=\"POST\">
                <h1 class=\"h3 mb-3 font-weight-normal\">Connexion</h1>
                ";
        // line 22
        if (($context["error"] ?? null)) {
            // line 23
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 23), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 25
        echo "                <label>
                    Email
                    <input type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" class=\"form-control\" autocomplete=\"username\" required autofocus>
                </label>
                <label>
                    Mot de passe
                    <div class=\"toggle-password-button\">
                        <div id=\"toggle-password-button_icon\" class=\"toggle-password-button_icon\">
                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/form/eye-password-show.svg"), "html", null, true);
        echo "\" alt=\"Icon pour afficher/cacher le mot de passe\">
                        </div>
                        <input type=\"password\" name=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
                    </div>
                </label>
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\" checked>
                    Rester connecté
                </label>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <button>Connexion</button>
                <p class=\"GoToSign\">Pas encore inscrit ? <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_register");
        echo "\">Inscrivez-vous</a> dès maintenant !</p>
            </form>
        </div>
    </div>
";
    }

    // line 50
    public function block_javascripts_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/form.js"), "html", null, true);
        echo "\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  150 => 51,  146 => 50,  137 => 44,  132 => 42,  120 => 33,  111 => 27,  107 => 25,  101 => 23,  99 => 22,  93 => 18,  89 => 17,  84 => 14,  81 => 13,  78 => 12,  75 => 11,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\security\\login.html.twig");
    }
}
