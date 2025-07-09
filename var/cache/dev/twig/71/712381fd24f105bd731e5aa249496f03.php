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

/* cart/index.html.twig */
class __TwigTemplate_940a1850b6fd57992fce986c146dae95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        yield "Mon panier";
        
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
    <h1 class=\"mb-4\"><i data-feather=\"shopping-cart\"></i> Mon Panier</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-8\">
            ";
        // line 10
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "                <div class=\"alert alert-warning text-center mt-5\">
                    <i data-feather=\"info\"></i> Votre panier est vide.
                </div>
            ";
        } else {
            // line 15
            yield "                <h4 class=\"mb-4\">Vous avez <span class=\"badge bg-primary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 15, $this->source); })())), "html", null, true);
            yield "</span> produit(s) dans votre panier.</h4>
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-hover shadow-sm rounded\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Illustration</th>
                                <th>Produit</th>
                                <th>Prix</th>
                                <th class=\"text-center\">Quantité</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 29
            $context["cart_total"] = 0;
            // line 30
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                yield "                                <tr>
                                    <td>
                                        <img src=\"";
                // line 33
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "illustration", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "illustration", [], "any", false, false, false, 33))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-product.png"), "html", null, true)));
                yield "\"
                                             alt=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
                yield "\" class=\"img-thumbnail\" style=\"width: 90px; height: 90px; object-fit: cover;\">
                                    </td>
                                    <td>
                                        <strong>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                yield "</strong>
                                        <div class=\"text-muted small\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "slug", [], "any", false, false, false, 38), "html", null, true);
                yield "</div>
                                    </td>
                                    <td>";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "pricewithtax", [], "any", false, false, false, 40)), "html", null, true);
                yield "</td>
                                    <td class=\"text-center\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_decrease", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-sm\">-</a>
                                            <span class=\"mx-2\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 44), "html", null, true);
                yield "</span>
                                            <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"btn btn-outline-success btn-sm\">+</a>
                                        </div>
                                    </td>
                                    <td>
                                        ";
                // line 49
                $context["total"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 49), "pricewithtax", [], "any", false, false, false, 49) * CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49));
                // line 50
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })())), "html", null, true);
                yield "
                                        ";
                // line 51
                $context["cart_total"] = ((isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 51, $this->source); })()) + (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()));
                // line 52
                yield "                                    </td>
                                    <td>
                                        <a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm\" title=\"Retirer ce produit\">
                                            <i data-feather=\"trash-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 64
        yield "        </div>
        ";
        // line 66
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 66, $this->source); })()))) {
            // line 67
            yield "        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-sm sticky-top\" style=\"top: 90px;\">
                <div class=\"card-body\">
                    <h4 class=\"card-title mb-3\">Récapitulatif</h4>
                    <ul class=\"list-group list-group-flush mb-3\">
                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 73
                yield "                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
                yield "
                                <span class=\"badge bg-primary rounded-pill\">x";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 75), "html", null, true);
                yield "</span>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                    </ul>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <span class=\"fw-bold\">Total commande :</span>
                        <span class=\"fw-bold text-success\" style=\"font-size:1.2em;\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtensions']->formatPrice((isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 81, $this->source); })())), "html", null, true);
            yield "</span>
                    </div>
                    <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            yield "\" class=\"btn btn-success w-100 mb-2\">
                        <i data-feather=\"credit-card\"></i> Commander
                    </a>
                    <a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove");
            yield "\" class=\"btn btn-outline-danger w-100\">
                        <i data-feather=\"trash\"></i> Vider le panier
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        // line 93
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
        return "cart/index.html.twig";
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
        return array (  273 => 93,  263 => 86,  257 => 83,  252 => 81,  247 => 78,  238 => 75,  234 => 74,  231 => 73,  227 => 72,  220 => 67,  217 => 66,  214 => 64,  208 => 60,  196 => 54,  192 => 52,  190 => 51,  185 => 50,  183 => 49,  176 => 45,  172 => 44,  168 => 43,  162 => 40,  157 => 38,  153 => 37,  147 => 34,  143 => 33,  139 => 31,  134 => 30,  132 => 29,  114 => 15,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1 class=\"mb-4\"><i data-feather=\"shopping-cart\"></i> Mon Panier</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-8\">
            {% if cart is empty %}
                <div class=\"alert alert-warning text-center mt-5\">
                    <i data-feather=\"info\"></i> Votre panier est vide.
                </div>
            {% else %}
                <h4 class=\"mb-4\">Vous avez <span class=\"badge bg-primary\">{{ cart|length }}</span> produit(s) dans votre panier.</h4>
                <div class=\"table-responsive\">
                    <table class=\"table align-middle table-hover shadow-sm rounded\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Illustration</th>
                                <th>Produit</th>
                                <th>Prix</th>
                                <th class=\"text-center\">Quantité</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {% set cart_total = 0 %}
                            {% for item in cart %}
                                <tr>
                                    <td>
                                        <img src=\"{{ item.product.illustration ? asset('uploads/products/' ~ item.product.illustration) : asset('images/default-product.png') }}\"
                                             alt=\"{{ item.product.name }}\" class=\"img-thumbnail\" style=\"width: 90px; height: 90px; object-fit: cover;\">
                                    </td>
                                    <td>
                                        <strong>{{ item.product.name }}</strong>
                                        <div class=\"text-muted small\">{{ item.product.slug }}</div>
                                    </td>
                                    <td>{{ item.product.pricewithtax|format_price }}</td>
                                    <td class=\"text-center\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"{{ path('app_cart_decrease', { id: item.product.id }) }}\" class=\"btn btn-outline-danger btn-sm\">-</a>
                                            <span class=\"mx-2\">{{ item.quantity }}</span>
                                            <a href=\"{{ path('app_cart_add', { id: item.product.id }) }}\" class=\"btn btn-outline-success btn-sm\">+</a>
                                        </div>
                                    </td>
                                    <td>
                                        {% set total = item.product.pricewithtax * item.quantity %}
                                        {{ total|format_price }}
                                        {% set cart_total = cart_total + total %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('app_cart_remove', { id: item.product.id }) }}\" class=\"btn btn-outline-secondary btn-sm\" title=\"Retirer ce produit\">
                                            <i data-feather=\"trash-2\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% endif %}
        </div>
        {# Recap colonne à droite #}
        {% if cart is not empty %}
        <div class=\"col-12 col-lg-4\">
            <div class=\"card shadow-sm sticky-top\" style=\"top: 90px;\">
                <div class=\"card-body\">
                    <h4 class=\"card-title mb-3\">Récapitulatif</h4>
                    <ul class=\"list-group list-group-flush mb-3\">
                        {% for item in cart %}
                            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                                {{ item.product.name }}
                                <span class=\"badge bg-primary rounded-pill\">x{{ item.quantity }}</span>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"d-flex justify-content-between mb-3\">
                        <span class=\"fw-bold\">Total commande :</span>
                        <span class=\"fw-bold text-success\" style=\"font-size:1.2em;\">{{ cart_total|format_price }}</span>
                    </div>
                    <a href=\"{{ path('app_order') }}\" class=\"btn btn-success w-100 mb-2\">
                        <i data-feather=\"credit-card\"></i> Commander
                    </a>
                    <a href=\"{{ path('app_cart_remove') }}\" class=\"btn btn-outline-danger w-100\">
                        <i data-feather=\"trash\"></i> Vider le panier
                    </a>
                </div>
            </div>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}", "cart/index.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\cart\\index.html.twig");
    }
}
