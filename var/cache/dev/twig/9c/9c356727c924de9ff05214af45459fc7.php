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

/* product/index.html.twig */
class __TwigTemplate_3fce1332861af7b940949de759af168b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        yield "Produit";
        
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
        yield "<div class=\"container my-5\">
    <h1 class=\"mb-4\">Description du Produit Choisi</h1>
    <div class=\"row justify-content-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 10
            yield "            <div class=\"col-12 col-md-10 col-lg-8\">
                <div class=\"card shadow-lg mb-4\">
                    <div class=\"row g-0 align-items-center\">
                        <div class=\"col-md-5 text-center p-4\">
                            <img src=\"/uploads/products/";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "illustration", [], "any", false, false, false, 14), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 14), "html", null, true);
            yield "\" class=\"img-fluid rounded\" style=\"max-height: 320px; object-fit: contain;\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"card-body d-flex flex-column h-100\">
                                <h3 class=\"card-title\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</h3>
                                <h5 class=\"text-primary mb-3\">Prix : ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "pricewithtax", [], "any", false, false, false, 19)), "html", null, true);
            yield "</h5>
                                <p class=\"card-text mb-2\"><strong>Description :</strong> ";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "description", [], "any", false, false, false, 20);
            yield "</p>
                                <p class=\"card-text mb-2\"><strong>Slug :</strong> ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "slug", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>
                                <div class=\"mb-3\">
                                    <a href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "category", [], "any", false, false, false, 23), "slug", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\">
                                        <i data-feather=\"folder\"></i> Catégorie : ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "category", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            yield "
                                    </a>
                                </div>
                                <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-success mt-auto w-100\">
                                    <i data-feather=\"shopping-cart\"></i> Ajouter au Panier
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prod'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    </div>
</div>
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
        return "product/index.html.twig";
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
        return array (  166 => 36,  151 => 27,  145 => 24,  141 => 23,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  115 => 14,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1 class=\"mb-4\">Description du Produit Choisi</h1>
    <div class=\"row justify-content-center\">
        {% for prod in product %}
            <div class=\"col-12 col-md-10 col-lg-8\">
                <div class=\"card shadow-lg mb-4\">
                    <div class=\"row g-0 align-items-center\">
                        <div class=\"col-md-5 text-center p-4\">
                            <img src=\"/uploads/products/{{ prod.illustration }}\" alt=\"{{ prod.name }}\" class=\"img-fluid rounded\" style=\"max-height: 320px; object-fit: contain;\">
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"card-body d-flex flex-column h-100\">
                                <h3 class=\"card-title\">{{ prod.name }}</h3>
                                <h5 class=\"text-primary mb-3\">Prix : {{ prod.pricewithtax|format_price }}</h5>
                                <p class=\"card-text mb-2\"><strong>Description :</strong> {{ prod.description|raw }}</p>
                                <p class=\"card-text mb-2\"><strong>Slug :</strong> {{ prod.slug }}</p>
                                <div class=\"mb-3\">
                                    <a href=\"{{ path('show_category', { slug: prod.category.slug }) }}\" class=\"btn btn-outline-info\">
                                        <i data-feather=\"folder\"></i> Catégorie : {{ prod.category.name }}
                                    </a>
                                </div>
                                <a href=\"{{ path('app_cart_add', { id: prod.id }) }}\" class=\"btn btn-success mt-auto w-100\">
                                    <i data-feather=\"shopping-cart\"></i> Ajouter au Panier
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "product/index.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\product\\index.html.twig");
    }
}
