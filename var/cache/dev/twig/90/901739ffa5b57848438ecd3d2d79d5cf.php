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

/* category/show.html.twig */
class __TwigTemplate_c33345145f387a73d9a26990591869a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/show.html.twig", 1);
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

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "
\t- Produits
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
\t<div class=\"container \">
\t\t<h1>Catégorie:
\t\t\t<strong>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        yield "</strong>
\t\t</h1>
\t\t<p class=\"text-muted\">Slug:
\t\t\t<strong>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15), "html", null, true);
        yield "</strong>
\t\t</p>
\t\t";
        // line 17
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 17, $this->source); })()), "products", [], "any", false, false, false, 17))) {
            // line 18
            yield "\t\t\t<h4 class=\"text-muted mt-5 \">Aucune catégorie trouvée.</h4>
\t\t";
        } else {
            // line 20
            yield "\t\t\t<div class=\"row g-4\">
\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 21, $this->source); })()), "products", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                yield "\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t<img src=\"/uploads/products/";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "illustration", [], "any", false, false, false, 24), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"object-fit:cover; height:200px;\">
\t\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26), "html", null, true);
                yield "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text text-truncate\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 27)), 0, 80) . "..."), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"btn btn-primary mt-auto\"><i data-feather=\"eye\"></i> Voir le produit</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "\t\t\t</div>

\t\t";
        }
        // line 36
        yield "\t</div>
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
        return "category/show.html.twig";
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
        return array (  169 => 36,  164 => 33,  153 => 28,  149 => 27,  145 => 26,  138 => 24,  134 => 22,  130 => 21,  127 => 20,  123 => 18,  121 => 17,  116 => 15,  110 => 12,  105 => 9,  92 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{category.name}}
\t- Produits
{% endblock %}

{% block body %}

\t<div class=\"container \">
\t\t<h1>Catégorie:
\t\t\t<strong>{{ category.name }}</strong>
\t\t</h1>
\t\t<p class=\"text-muted\">Slug:
\t\t\t<strong>{{ category.slug }}</strong>
\t\t</p>
\t\t{% if category.products is empty %}
\t\t\t<h4 class=\"text-muted mt-5 \">Aucune catégorie trouvée.</h4>
\t\t{% else %}
\t\t\t<div class=\"row g-4\">
\t\t\t\t{% for product in category.products %}
\t\t\t\t\t<div class=\"col-12 col-sm-6 col-md-4 col-lg-3\">
\t\t\t\t\t\t<div class=\"card h-100 shadow-sm\">
\t\t\t\t\t\t\t<img src=\"/uploads/products/{{ product.illustration }}\" alt=\"{{ product.name }}\" class=\"card-img-top\" style=\"object-fit:cover; height:200px;\">
\t\t\t\t\t\t\t<div class=\"card-body d-flex flex-column\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ product.name }}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text text-truncate\">{{ product.description|striptags|slice(0, 80) ~ '...' }}</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_product', {'slug': product.slug}) }}\" class=\"btn btn-primary mt-auto\"><i data-feather=\"eye\"></i> Voir le produit</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t{% endif %}
\t</div>
{% endblock %}
", "category/show.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\category\\show.html.twig");
    }
}
