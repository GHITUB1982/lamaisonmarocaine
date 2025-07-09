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

/* account/address/form.html.twig */
class __TwigTemplate_458f359aa9c8f28e1bc9c48c89b63684 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/address/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/address/form.html.twig", 1);
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
        yield from $this->loadTemplate("account/_menu.html.twig", "account/address/form.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "            </div>
            
            <!-- Formulaire à droite -->
            <div class=\"col-md-8\">
                <h3 class=\"mb-4 m-5\">La forme de Mes Addresses:</h3>

                     ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
                     <div class=\"row\"> 
                            <div class=\"col-md-6\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 18, $this->source); })()), "firstname", [], "any", false, false, false, 18), 'row');
        yield "</div>
                            <div class=\"col-md-6\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 19, $this->source); })()), "lastname", [], "any", false, false, false, 19), 'row');
        yield " </div>
                            

                    </div>
                    <div >";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 23, $this->source); })()), "address", [], "any", false, false, false, 23), 'row');
        yield "</div>
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 26, $this->source); })()), "postal", [], "any", false, false, false, 26), 'row');
        yield "</div>
                        <div class=\"col-md-6\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 27, $this->source); })()), "city", [], "any", false, false, false, 27), 'row');
        yield "</div>
                        <div class=\"col-md-6\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 28, $this->source); })()), "country", [], "any", false, false, false, 28), 'row');
        yield "</div>  
                        <div class=\"col-md-6\">";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 29, $this->source); })()), "phone", [], "any", false, false, false, 29), 'row');
        yield "</div> 
                    </div>

                        
                     ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressform"]) || array_key_exists("addressform", $context) ? $context["addressform"] : (function () { throw new RuntimeError('Variable "addressform" does not exist.', 33, $this->source); })()), 'form_end');
        yield "

                       
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
        return "account/address/form.html.twig";
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
        return array (  134 => 33,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  109 => 23,  102 => 19,  98 => 18,  93 => 16,  85 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
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
            <div class=\"col-md-8\">
                <h3 class=\"mb-4 m-5\">La forme de Mes Addresses:</h3>

                     {{form_start(addressform)}}
                     <div class=\"row\"> 
                            <div class=\"col-md-6\">{{ form_row(addressform.firstname) }}</div>
                            <div class=\"col-md-6\">{{ form_row(addressform.lastname) }} </div>
                            

                    </div>
                    <div >{{ form_row(addressform.address) }}</div>
                    <div class=\"row\">
                        
                        <div class=\"col-md-6\">{{ form_row(addressform.postal) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressform.city) }}</div>
                        <div class=\"col-md-6\">{{ form_row(addressform.country) }}</div>  
                        <div class=\"col-md-6\">{{ form_row(addressform.phone) }}</div> 
                    </div>

                        
                     {{form_end(addressform)}}

                       
            </div>
        </div>

{% endblock %}
", "account/address/form.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\account\\address\\form.html.twig");
    }
}
