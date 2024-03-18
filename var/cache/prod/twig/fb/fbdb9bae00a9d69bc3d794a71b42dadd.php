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

/* client/cart/confirm_order.html.twig */
class __TwigTemplate_ae848fcbaec90f08adac5169135a47d9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "client/cart/confirm_order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Commande passée !";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/cart.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("client/header_links.html.twig", "client/cart/confirm_order.html.twig", 10)->display($context);
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"app_container app_padding\">
        <h1>Votre commande (nº ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getId", [], "method", false, false, false, 15), "html", null, true);
        echo ") d'un montant de ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalPriceHT", [], "method", false, false, false, 15) + ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalPriceHT", [], "method", false, false, false, 15) * twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTax", [], "method", false, false, false, 15)) / 100)), "EUR"), "html", null, true);
        echo ", a bien été enregistré</h1>
        <p>Vous allez être redirigé vers votre profil dans <span id=\"sec\">10</span>s</p>
    </div>
";
    }

    // line 20
    public function block_javascripts_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart.js"), "html", null, true);
        echo "\"></script>
    <script>
        orderPrice.forEach(el => el.innerHTML = formatPrice(0));

        const sec = document.getElementById(\"sec\");
        let i = 10;

        sec.innerText = i.toString();
        i--;

        const countdown = setInterval(() => {

            sec.innerText = i.toString();
            i--;

            if(i < 0) {

                clearInterval(countdown);
                location.replace(\"/profil\");
            }

        }, 1000);
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "client/cart/confirm_order.html.twig";
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
        return array (  98 => 21,  94 => 20,  84 => 15,  81 => 14,  77 => 13,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "client/cart/confirm_order.html.twig", "C:\\Users\\coren\\Desktop\\DockerAP3\\templates\\client\\cart\\confirm_order.html.twig");
    }
}
