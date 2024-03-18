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

/* client/registration/register.html.twig */
class __TwigTemplate_bcdb79bbb20030144d1a89b742f1a438 extends Template
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
            'javascript_head' => [$this, 'block_javascript_head'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
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
    public function block_javascript_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <script></script>
";
    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/registration/register.html.twig", 14)->display($context);
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t<div class=\"app_container app_padding\">
        <h1>Inscription</h1>
        <div class=\"form\">
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'errors');
        echo "
                <div>
                    <label>
                        ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 25)), "html", null, true);
        echo "
                        <input type=\"email\" name=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 26)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 26)), "html", null, true);
        echo "\" required>
                    </label>
                </div>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 30
            echo "                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                <div class=\"flex\">
                    <div>
                        <label>
                            ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "name", [], "any", false, false, false, 35)), "html", null, true);
        echo "
                            <input type=\"text\" name=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "name", [], "any", false, false, false, 36)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "name", [], "any", false, false, false, 36)), "html", null, true);
        echo "\" required>
                        </label>
                    </div>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "name", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 40
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    <div>
                        <label>
                            ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 44)), "html", null, true);
        echo "
                            <input type=\"text\" name=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" required>
                        </label>
                    </div>
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstname", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "errors", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 49
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </div>
                <div class=\"flex\">
                    <div>
                        <label>
                            ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "street", [], "any", false, false, false, 55)), "html", null, true);
        echo "
                            <input type=\"text\" name=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "street", [], "any", false, false, false, 56)), "html", null, true);
        echo "\">
                        </label>
                    </div>
                    <div>
                        <label>
                            ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "zip_code", [], "any", false, false, false, 61)), "html", null, true);
        echo "
                            <input type=\"text\" name=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "zip_code", [], "any", false, false, false, 62)), "html", null, true);
        echo "\">
                        </label>
                    </div>
                </div>
                <div class=\"flex\">
                    <div>
                        <label>
                            ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 69)), "html", null, true);
        echo "
                            <input type=\"text\" name=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", false, false, false, 70)), "html", null, true);
        echo "\">
                        </label>
                    </div>
                    <div>
                        <label>
                            ";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 75)), "html", null, true);
        echo "
                            <input type=\"tel\" name=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "phone", [], "any", false, false, false, 76)), "html", null, true);
        echo "\">
                        </label>
                    </div>
                </div>
                <div>
                    <label>
                        ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 82), "first", [], "any", false, false, false, 82)), "html", null, true);
        echo "
                        <div class=\"toggle-password-button\">
                            <div id=\"toggle-password-button_icon\" class=\"toggle-password-button_icon\">
                                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/images/form/eye-password-show.svg"), "html", null, true);
        echo "\" alt=\"Icon pour afficher/cacher le mot de passe\">
                            </div>
                            <input type=\"password\" name=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 87), "first", [], "any", false, false, false, 87)), "html", null, true);
        echo "\" autocomplete=\"new-password\" required>
                        </div>
                    </label>
                    <label>
                        ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 91), "second", [], "any", false, false, false, 91)), "html", null, true);
        echo "
                        <input type=\"password\" name=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 92), "second", [], "any", false, false, false, 92)), "html", null, true);
        echo "\" autocomplete=\"new-password\" required>
                    </label>
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 94), "first", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 95
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 95), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </div>
                <div>
                    <label>
                        <input type=\"checkbox\" name=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 100)), "html", null, true);
        echo "\" required>
                        ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 101)), "html", null, true);
        echo "
                    </label>
                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 104
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 104), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                </div>
                <button class=\"btn\">S'inscrire</button>
            ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
        </div>
        <p class=\"GoToSign\">Déjà membre ? <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous</a></p>
\t</div>
";
    }

    // line 114
    public function block_javascripts_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
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
        return "client/registration/register.html.twig";
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
        return array (  334 => 115,  330 => 114,  323 => 110,  318 => 108,  314 => 106,  305 => 104,  301 => 103,  296 => 101,  292 => 100,  287 => 97,  278 => 95,  274 => 94,  269 => 92,  265 => 91,  258 => 87,  253 => 85,  247 => 82,  238 => 76,  234 => 75,  226 => 70,  222 => 69,  212 => 62,  208 => 61,  200 => 56,  196 => 55,  190 => 51,  181 => 49,  177 => 48,  169 => 45,  165 => 44,  161 => 42,  152 => 40,  148 => 39,  140 => 36,  136 => 35,  131 => 32,  122 => 30,  118 => 29,  110 => 26,  106 => 25,  100 => 22,  96 => 21,  91 => 18,  87 => 17,  82 => 14,  78 => 13,  73 => 10,  69 => 9,  62 => 6,  58 => 5,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/registration/register.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\registration\\register.html.twig");
    }
}
