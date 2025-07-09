<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* order/summary.html.twig */
class __TwigTemplate_f43be300ee17b884db043cb5c52e07fc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/summary.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/summary.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mon Récapitulatif";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "\t<div class=\"container my-5\">
\t\t<h1 class=\"mb-4\">
\t\t\t<i data-feather=\"list\"></i>
\t\t\tMon Récapitulatif</h1>

\t\t<div class=\"row\">
\t\t\t<!-- Colonne de gauche - Contenu du panier et infos livraison -->
\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t<h3 class=\"mb-4\">
\t\t\t\t\t<i data-feather=\"shopping-cart\"></i>
\t\t\t\t\tContenu de mon Panier</h3>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table align-left table-hover rounded\">
\t\t\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 23
        $context["cart_total"] = 0;
        // line 24
        yield "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            yield "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 27
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "illustration", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "illustration", [], "any", false, false, false, 27))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-product.png"), "html", null, true)));
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            yield "\" class=\"img-thumbnail\" style=\"width: 90px; height: 90px; object-fit: cover;\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</strong>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "slug", [], "any", false, false, false, 31), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong>Prix hors taxe:</strong> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "price", [], "any", false, false, false, 34), "html", null, true);
            yield " <br>
\t\t\t\t\t\t\t\t\t\t";
            // line 35
            $context["total"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "pricewithtax", [], "any", false, false, false, 35) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 35));
            // line 36
            yield "\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 36, $this->source); })())), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
            // line 37
            $context["cart_total"] = ((isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 37, $this->source); })()) + (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 37, $this->source); })()));
            // line 38
            yield "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t<h2><i data-feather=\"truck\"></i> Informations de Livraison</h2>
\t\t\t\t\t<div class=\"mb-3\" style=\"margin-top: 20px; border-bottom: 2px solid #ccc; padding: 20px;\">
\t\t\t\t\t\t<h3>Adresse de livraison</h3>
\t\t\t\t\t\t<strong>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 49, $this->source); })()), "addresses", [], "any", false, false, false, 49), "firstname", [], "any", false, false, false, 49), "html", null, true);
        yield "</strong>
\t\t\t\t\t\t<strong>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 50, $this->source); })()), "addresses", [], "any", false, false, false, 50), "lastname", [], "any", false, false, false, 50), "html", null, true);
        yield "</strong>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 52, $this->source); })()), "addresses", [], "any", false, false, false, 52), "address", [], "any", false, false, false, 52), "html", null, true);
        yield "<br>
\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 53, $this->source); })()), "addresses", [], "any", false, false, false, 53), "postal", [], "any", false, false, false, 53), "html", null, true);
        yield "
\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 54, $this->source); })()), "addresses", [], "any", false, false, false, 54), "city", [], "any", false, false, false, 54), "html", null, true);
        yield "
\t\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 55, $this->source); })()), "addresses", [], "any", false, false, false, 55), "country", [], "any", false, false, false, 55), "html", null, true);
        yield "<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\" style=\"margin-top: 20px; border-bottom: 2px solid #ccc; padding: 20px;\">
\t\t\t\t\t\t<h2>Transporteur choisi</h3>
\t\t\t\t\t\t<strong>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 59, $this->source); })()), "carrier", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
        yield "</strong><br>
\t\t\t\t\t\t";
        // line 60
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 60, $this->source); })()), "carrier", [], "any", false, false, false, 60), "description", [], "any", false, false, false, 60);
        yield "<br>
\t\t\t\t\t\tMode de paiement choisi<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Colonne de droite - Récapitulatif -->
\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t<div class=\"card shadow-sm sticky-top\" style=\"top: 90px;\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title mb-3\">Récapitulatif</h4>
\t\t\t\t\t\t<ul class=\"list-group list-group-flush mb-3\">
\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\tTotal produits
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice((isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 74, $this->source); })())), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 76
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 76, $this->source); })()), "carrier", [], "any", false, false, false, 76))) {
            // line 77
            yield "\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\tTransporteur (";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 78, $this->source); })()), "carrier", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
            yield ")
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 79, $this->source); })()), "carrier", [], "any", false, false, false, 79), "price", [], "any", false, false, false, 79)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 82
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-3\">
\t\t\t\t\t\t\t<span class=\"fw-bold\">Total commande :</span>
\t\t\t\t\t\t\t<span class=\"fw-bold text-success\" style=\"font-size:1.2em;\">
\t\t\t\t\t\t\t\t";
        // line 86
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 86, $this->source); })()), "carrier", [], "any", false, false, false, 86))) {
            // line 87
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice(((isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 87, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 87, $this->source); })()), "carrier", [], "any", false, false, false, 87), "price", [], "any", false, false, false, 87))), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
        } else {
            // line 89
            yield "\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice((isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 89, $this->source); })())), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
        }
        // line 91
        yield "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payement", ["id_order" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        yield "\" class=\"btn btn-success w-100 mb-2\">
\t\t\t\t\t\t\t<i data-feather=\"credit-card\"></i>
\t\t\t\t\t\t\tPayer ma commande 
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove");
        yield "\" class=\"btn btn-outline-danger w-100\">
\t\t\t\t\t\t\t<i data-feather=\"trash\"></i>
\t\t\t\t\t\t\tVider le panier
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "order/summary.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  279 => 97,  272 => 93,  268 => 91,  262 => 89,  256 => 87,  254 => 86,  248 => 82,  242 => 79,  238 => 78,  235 => 77,  233 => 76,  228 => 74,  211 => 60,  207 => 59,  200 => 55,  196 => 54,  192 => 53,  188 => 52,  183 => 50,  179 => 49,  169 => 41,  161 => 38,  159 => 37,  154 => 36,  152 => 35,  148 => 34,  142 => 31,  138 => 30,  130 => 27,  126 => 25,  121 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Récapitulatif{% endblock %}

{% block body %}
\t<div class=\"container my-5\">
\t\t<h1 class=\"mb-4\">
\t\t\t<i data-feather=\"list\"></i>
\t\t\tMon Récapitulatif</h1>

\t\t<div class=\"row\">
\t\t\t<!-- Colonne de gauche - Contenu du panier et infos livraison -->
\t\t\t<div class=\"col-12 col-lg-8\">
\t\t\t\t<h3 class=\"mb-4\">
\t\t\t\t\t<i data-feather=\"shopping-cart\"></i>
\t\t\t\t\tContenu de mon Panier</h3>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table align-left table-hover rounded\">
\t\t\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t{% set cart_total = 0 %}
\t\t\t\t\t\t\t{% for item in cart %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ item.product.illustration ? asset('uploads/products/' ~ item.product.illustration) : asset('images/default-product.png') }}\" alt=\"{{ item.product.name }}\" class=\"img-thumbnail\" style=\"width: 90px; height: 90px; object-fit: cover;\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong>{{ item.product.name }}</strong>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small\">{{ item.product.slug }}</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<strong>Prix hors taxe:</strong> {{ item.product.price }} <br>
\t\t\t\t\t\t\t\t\t\t{% set total = item.product.pricewithtax * item.quantity %}
\t\t\t\t\t\t\t\t\t\t{{ total|format_price }}
\t\t\t\t\t\t\t\t\t\t{% set cart_total = cart_total + total %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t<h2><i data-feather=\"truck\"></i> Informations de Livraison</h2>
\t\t\t\t\t<div class=\"mb-3\" style=\"margin-top: 20px; border-bottom: 2px solid #ccc; padding: 20px;\">
\t\t\t\t\t\t<h3>Adresse de livraison</h3>
\t\t\t\t\t\t<strong>{{choices.addresses.firstname}}</strong>
\t\t\t\t\t\t<strong>{{choices.addresses.lastname}}</strong>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t{{choices.addresses.address}}<br>
\t\t\t\t\t\t{{choices.addresses.postal}}
\t\t\t\t\t\t{{choices.addresses.city}}
\t\t\t\t\t\t{{choices.addresses.country}}<br>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\" style=\"margin-top: 20px; border-bottom: 2px solid #ccc; padding: 20px;\">
\t\t\t\t\t\t<h2>Transporteur choisi</h3>
\t\t\t\t\t\t<strong>{{choices.carrier.name}}</strong><br>
\t\t\t\t\t\t{{choices.carrier.description|raw}}<br>
\t\t\t\t\t\tMode de paiement choisi<br>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Colonne de droite - Récapitulatif -->
\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t<div class=\"card shadow-sm sticky-top\" style=\"top: 90px;\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title mb-3\">Récapitulatif</h4>
\t\t\t\t\t\t<ul class=\"list-group list-group-flush mb-3\">
\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\tTotal produits
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">{{ cart_total|format_price }}</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if choices.carrier is not empty %}
\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\tTransporteur ({{ choices.carrier.name }})
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold\">{{ choices.carrier.price|format_price }}</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between mb-3\">
\t\t\t\t\t\t\t<span class=\"fw-bold\">Total commande :</span>
\t\t\t\t\t\t\t<span class=\"fw-bold text-success\" style=\"font-size:1.2em;\">
\t\t\t\t\t\t\t\t{% if choices.carrier is not empty %}
\t\t\t\t\t\t\t\t\t{{ (cart_total + choices.carrier.price)|format_price }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ cart_total|format_price }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"{{ path('app_payement', {'id_order': order.id })}}\" class=\"btn btn-success w-100 mb-2\">
\t\t\t\t\t\t\t<i data-feather=\"credit-card\"></i>
\t\t\t\t\t\t\tPayer ma commande 
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app_cart_remove') }}\" class=\"btn btn-outline-danger w-100\">
\t\t\t\t\t\t\t<i data-feather=\"trash\"></i>
\t\t\t\t\t\t\tVider le panier
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "order/summary.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\order\\summary.html.twig");
    }
}
