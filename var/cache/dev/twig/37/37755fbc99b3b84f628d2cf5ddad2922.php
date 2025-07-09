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

/* admin/order_show.html.twig */
class __TwigTemplate_0893285648379ffe15cabb6b91095384 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/order_show.html.twig"));

        // line 2
        yield "<h4>Détails de la commande</h4>
<table class=\"table table-bordered table-striped align-middle\">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Illustration</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>TVA (%)</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "instance", [], "any", false, false, false, 14), "orderDetails", [], "any", false, false, false, 14));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 15
            yield "            <tr>
                <td><strong>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "productName", [], "any", false, false, false, 16), "html", null, true);
            yield "</strong></td>
                <td>
                    <img
                        src=\"/uploads/products/";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "productIllustration", [], "any", false, false, false, 19), "html", null, true);
            yield "\"
                        alt=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "productName", [], "any", false, false, false, 20), "html", null, true);
            yield "\"
                        class=\"img-fluid rounded\"
                        style=\"max-width: 80px; height: auto; border: 1px solid #ddd;\"
                    >
                </td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "productQuantity", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "productPrice", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "productTva", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 29
        if (!$context['_iterated']) {
            // line 30
            yield "            <tr>
                <td colspan=\"5\" class=\"text-center\">Aucun détail pour cette commande.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/order_show.html.twig";
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
        return array (  114 => 34,  105 => 30,  103 => 29,  96 => 27,  92 => 26,  88 => 25,  80 => 20,  76 => 19,  70 => 16,  67 => 15,  62 => 14,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# admin/order_show.html.twig #}
<h4>Détails de la commande</h4>
<table class=\"table table-bordered table-striped align-middle\">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Illustration</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>TVA (%)</th>
        </tr>
    </thead>
    <tbody>
        {% for detail in entity.instance.orderDetails %}
            <tr>
                <td><strong>{{ detail.productName }}</strong></td>
                <td>
                    <img
                        src=\"/uploads/products/{{ detail.productIllustration }}\"
                        alt=\"{{ detail.productName }}\"
                        class=\"img-fluid rounded\"
                        style=\"max-width: 80px; height: auto; border: 1px solid #ddd;\"
                    >
                </td>
                <td>{{ detail.productQuantity }}</td>
                <td>{{ detail.productPrice }}</td>
                <td>{{ detail.productTva }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\" class=\"text-center\">Aucun détail pour cette commande.</td>
            </tr>
        {% endfor %}
    </tbody>
</table>", "admin/order_show.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\admin\\order_show.html.twig");
    }
}
