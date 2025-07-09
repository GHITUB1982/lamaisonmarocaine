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

/* category/index.html.twig */
class __TwigTemplate_0890cf3738e2b2ba15f93d7b48b4368d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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

        yield "Bonjour toutes les categories par Slug!";
        
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
        yield "
<div class=\"container\"> 
    <h2>Bonjour toutes les categories par Slug!</h2>

    <div class=\"row\">
        <h1>Liste des catégories</h1>
        <div><h2>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })())), "html", null, true);
        yield " catégories trouvées.</h2></div>

        ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            yield "            <p>Bonjour ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "firstname", [], "any", false, false, false, 15), "html", null, true);
            yield "!</p>
        ";
        } else {
            // line 17
            yield "            <p>Bonjour Invité!</p>
        ";
        }
        // line 19
        yield "
        ";
        // line 20
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "            <p>Aucune catégorie trouvée.</p>
        ";
        } else {
            // line 23
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 24
                yield "                <div class=\"col-12\">
                    <h3>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25), "html", null, true);
                yield "</h3>
                </div>
                ";
                // line 27
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 27))) {
                    // line 28
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 28));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 29
                        yield "                        <div class=\"col-md-3\">
                            <div class=\"card mb-3\">
                                <div class=\"card-header\">
                                    <h5>";
                        // line 32
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32), "html", null, true);
                        yield "</h5>
                                </div>
                                <img src=\"uploads/products/";
                        // line 34
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 34), "html", null, true);
                        yield "\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34), "html", null, true);
                        yield "\" class=\"img-fluid\">
                                <div class=\"card-body\">
                                    <p>Slug : ";
                        // line 36
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 36), "html", null, true);
                        yield "</p>
                                    <h6>Prix : ";
                        // line 37
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "pricewithtax", [], "any", false, false, false, 37), "html", null, true);
                        yield " €</h6>
                                    <p>Description : ";
                        // line 38
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 38), "html", null, true);
                        yield "</p>
                                </div>
                            </div>
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    yield "                ";
                } else {
                    // line 44
                    yield "                    <div class=\"col-12\">
                        <p>Aucun produit dans cette catégorie.</p>
                    </div>
                ";
                }
                // line 48
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "        ";
        }
        // line 50
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
        return "category/index.html.twig";
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
        return array (  208 => 50,  205 => 49,  199 => 48,  193 => 44,  190 => 43,  179 => 38,  175 => 37,  171 => 36,  164 => 34,  159 => 32,  154 => 29,  149 => 28,  147 => 27,  142 => 25,  139 => 24,  134 => 23,  130 => 21,  128 => 20,  125 => 19,  121 => 17,  115 => 15,  113 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bonjour toutes les categories par Slug!{% endblock %}

{% block body %}

<div class=\"container\"> 
    <h2>Bonjour toutes les categories par Slug!</h2>

    <div class=\"row\">
        <h1>Liste des catégories</h1>
        <div><h2>{{ categories|length }} catégories trouvées.</h2></div>

        {% if app.user %}
            <p>Bonjour {{ app.user.firstname }}!</p>
        {% else %}
            <p>Bonjour Invité!</p>
        {% endif %}

        {% if categories is empty %}
            <p>Aucune catégorie trouvée.</p>
        {% else %}
            {% for category in categories %}
                <div class=\"col-12\">
                    <h3>{{ category.name }}</h3>
                </div>
                {% if category.products is not empty %}
                    {% for product in category.products %}
                        <div class=\"col-md-3\">
                            <div class=\"card mb-3\">
                                <div class=\"card-header\">
                                    <h5>{{ product.name }}</h5>
                                </div>
                                <img src=\"uploads/products/{{ product.illustration }}\" alt=\"{{ product.name }}\" class=\"img-fluid\">
                                <div class=\"card-body\">
                                    <p>Slug : {{ product.slug }}</p>
                                    <h6>Prix : {{ product.pricewithtax }} €</h6>
                                    <p>Description : {{ product.description }}</p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"col-12\">
                        <p>Aucun produit dans cette catégorie.</p>
                    </div>
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>
</div>
{% endblock %}", "category/index.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\category\\index.html.twig");
    }
}
