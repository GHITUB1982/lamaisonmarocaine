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

/* order/index.html.twig */
class __TwigTemplate_e43f53fe383d0f7123bb912e7e7381cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
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

        yield "Mon Commande";
        
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
    <h1 class=\"mb-4\"><i data-feather=\"shopping-cart\"></i> Ma Commande</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deliveryForm"]) || array_key_exists("deliveryForm", $context) ? $context["deliveryForm"] : (function () { throw new RuntimeError('Variable "deliveryForm" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
            <h2>Informations de Livraison</h2>
            <div class=\"mb-3\" style=\"margin-top: 20px; border-bottom: 2px solid #ccc; padding: 20px;\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["deliveryForm"]) || array_key_exists("deliveryForm", $context) ? $context["deliveryForm"] : (function () { throw new RuntimeError('Variable "deliveryForm" does not exist.', 14, $this->source); })()), "addresses", [], "any", false, false, false, 14), 'row', ["label" => "Choisir Adresses de livraison"]);
        yield "
                 <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_form");
        yield "\">
                     Ajouter une nouvelle Adresse</a> 
            </div>
<tr>
             <div class=\"mb-3\">

                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["deliveryForm"]) || array_key_exists("deliveryForm", $context) ? $context["deliveryForm"] : (function () { throw new RuntimeError('Variable "deliveryForm" does not exist.', 21, $this->source); })()), "carrier", [], "any", false, false, false, 21), 'row', ["label" => "Choisir le Transporteur"]);
        yield "

            </div>

            ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deliveryForm"]) || array_key_exists("deliveryForm", $context) ? $context["deliveryForm"] : (function () { throw new RuntimeError('Variable "deliveryForm" does not exist.', 25, $this->source); })()), 'form_end');
        yield "
                        
        </div>
    </div>
    
    
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
        return "order/index.html.twig";
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
        return array (  133 => 25,  126 => 21,  117 => 15,  113 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Commande{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h1 class=\"mb-4\"><i data-feather=\"shopping-cart\"></i> Ma Commande</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_start(deliveryForm)}}
            <h2>Informations de Livraison</h2>
            <div class=\"mb-3\" style=\"margin-top: 20px; border-bottom: 2px solid #ccc; padding: 20px;\">
                {{form_row(deliveryForm.addresses, {'label': 'Choisir Adresses de livraison'})}}
                 <a href=\"{{path('app_account_address_form')}}\">
                     Ajouter une nouvelle Adresse</a> 
            </div>
<tr>
             <div class=\"mb-3\">

                {{ form_row(deliveryForm.carrier, {'label': 'Choisir le Transporteur'}) }}

            </div>

            {{ form_end(deliveryForm)}}
                        
        </div>
    </div>
    
    
</div>
{% endblock %}", "order/index.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\order\\index.html.twig");
    }
}
