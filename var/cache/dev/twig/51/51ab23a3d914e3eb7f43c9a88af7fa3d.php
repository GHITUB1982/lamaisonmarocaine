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

/* admin/order_state.html.twig */
class __TwigTemplate_2d473c587bd38267927f9030ca88005b extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order_state.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order_state.html.twig"));

        // line 13
        yield "
 ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 14, $this->source); })()), "value", [], "any", false, false, false, 14) == 0)) {
            // line 15
            yield "    <span class=\"badge badge-info\">En attente de paiement</span>

";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "value", [], "any", false, false, false, 17) == 1)) {
            // line 18
            yield "    <span class=\"badge badge-success\"> Paiement accepté</span>

";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "value", [], "any", false, false, false, 20) == 2)) {
            // line 21
            yield "    <span class=\"badge badge-secondary\">En cours de préparation</span>

";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })()), "value", [], "any", false, false, false, 23) == 3)) {
            // line 24
            yield "    <span class=\"badge badge-light\">En cours de Livraison</span>

";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 26, $this->source); })()), "value", [], "any", false, false, false, 26) == 4)) {
            // line 27
            yield "    <span class=\"badge badge-primary\">Livraison effectuée</span>

";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 29, $this->source); })()), "value", [], "any", false, false, false, 29) == 5)) {
            // line 30
            yield "    <span class=\"badge text-bg-warning>\">Commande annulée</span>

";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 32, $this->source); })()), "value", [], "any", false, false, false, 32) == 6)) {
            // line 33
            yield "    <span class=\"badge badge-dark\">Commande remboursée</span>

 ";
        }
        // line 36
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/order_state.html.twig";
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
        return array (  94 => 36,  89 => 33,  87 => 32,  83 => 30,  81 => 29,  77 => 27,  75 => 26,  71 => 24,  69 => 23,  65 => 21,  63 => 20,  59 => 18,  57 => 17,  53 => 15,  51 => 14,  48 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# /**
 * Représente l'état de la commande.
 * 0 = En attente de paiement
 * 1 = Paiement accepté
 * 2 = En cours de préparation
 * 3 = En cours de Livraison
 * 4 = Livraison effectuée
 * 5 = Commande annulée
 * 6 = Commande remboursée
 * * @var int|null
 * 
 */ #}

 {% if field.value == 0  %}
    <span class=\"badge badge-info\">En attente de paiement</span>

{% elseif field.value == 1 %}
    <span class=\"badge badge-success\"> Paiement accepté</span>

{% elseif field.value == 2 %}
    <span class=\"badge badge-secondary\">En cours de préparation</span>

{% elseif field.value == 3 %}
    <span class=\"badge badge-light\">En cours de Livraison</span>

{% elseif field.value == 4 %}
    <span class=\"badge badge-primary\">Livraison effectuée</span>

{% elseif field.value == 5 %}
    <span class=\"badge text-bg-warning>\">Commande annulée</span>

{% elseif field.value == 6 %}
    <span class=\"badge badge-dark\">Commande remboursée</span>

 {% endif %}

", "admin/order_state.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\admin\\order_state.html.twig");
    }
}
