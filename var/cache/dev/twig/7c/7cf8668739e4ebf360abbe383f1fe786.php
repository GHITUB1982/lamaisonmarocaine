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

/* account/address/index.html.twig */
class __TwigTemplate_fbe0b4261ee811e6c2846dea1953754a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield " <div class=\"container my-5 flex-column\">
         <h2>La Maison Marocaine</h2>
        <div class=\"row\">
            <!-- Menu de gauche -->
            <div class=\"col-md-4\" style=\"flex: 1; display: flex;\">
                ";
        // line 9
        yield from $this->loadTemplate("account/_menu.html.twig", "account/address/index.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "            </div>

            
            <!-- Formulaire à droite -->
            <div class=\"col-md-8 m-5\">
                <h3 class=\"\">Mes Addresses:</h3>
                ";
        // line 16
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "addresses", [], "any", false, false, false, 16))) {
            // line 17
            yield "                    <p class=\"text-muted\">Vous n'avez pas encore d'addresses enregistrées.</p>
               
               ";
        } else {
            // line 20
            yield "                <h3 class=\"mb-3 mt-3 \">La liste de vos addresses:</h3>
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "addresses", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 22
                yield "                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 24), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 24), "html", null, true);
                yield "</h5>        
                            <p class=\"card-text\">";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>
                            <p class=\"card-text\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postal", [], "any", false, false, false, 26), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 26), "html", null, true);
                yield "</p>  
                            <p class=\"card-text\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 27), "html", null, true);
                yield "</p>
                            <p class=\"card-text\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["address"], "phone", [], "any", false, false, false, 28), "html", null, true);
                yield "</p>
                            <a href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_form", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Modifier</a>
                            <a href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" class=\"btn btn-danger\">Supprimer</a>  
                        </div>
                    </div> 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 35
        yield "                 <div>
                <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_form");
        yield "\" class=\"btn btn-primary mb-3 mt-3 w-100\">Ajouter une addresse</a>
                </div>
             
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
        return "account/address/index.html.twig";
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
        return array (  153 => 36,  150 => 35,  139 => 30,  135 => 29,  131 => 28,  127 => 27,  121 => 26,  117 => 25,  111 => 24,  107 => 22,  103 => 21,  100 => 20,  95 => 17,  93 => 16,  85 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 <div class=\"container my-5 flex-column\">
         <h2>La Maison Marocaine</h2>
        <div class=\"row\">
            <!-- Menu de gauche -->
            <div class=\"col-md-4\" style=\"flex: 1; display: flex;\">
                {% include \"account/_menu.html.twig\" %}
            </div>

            
            <!-- Formulaire à droite -->
            <div class=\"col-md-8 m-5\">
                <h3 class=\"\">Mes Addresses:</h3>
                {% if app.user.addresses is empty %}
                    <p class=\"text-muted\">Vous n'avez pas encore d'addresses enregistrées.</p>
               
               {% else %}
                <h3 class=\"mb-3 mt-3 \">La liste de vos addresses:</h3>
                {% for address in app.user.addresses %}
                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ address.firstname }} {{ address.lastname }}</h5>        
                            <p class=\"card-text\">{{ address.address }}</p>
                            <p class=\"card-text\">{{ address.postal }} {{ address.city }}</p>  
                            <p class=\"card-text\">{{ address.country }}</p>
                            <p class=\"card-text\">{{ address.phone }}</p>
                            <a href=\"{{ path('app_account_address_form', {'id': address.id })}}\" class=\"btn btn-primary\">Modifier</a>
                            <a href=\"{{path('app_account_address_delete', {'id': address.id })}}\" class=\"btn btn-danger\">Supprimer</a>  
                        </div>
                    </div> 
                {% endfor %}
{% endif %}
                 <div>
                <a href=\"{{ path('app_account_address_form') }}\" class=\"btn btn-primary mb-3 mt-3 w-100\">Ajouter une addresse</a>
                </div>
             
            </div>
        </div>
    </div>
               
{% endblock %}
", "account/address/index.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\account\\address\\index.html.twig");
    }
}
