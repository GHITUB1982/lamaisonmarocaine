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

/* base.html.twig */
class __TwigTemplate_75ac2da74d322c6f8476d6e5c39f27b7 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\" data-bs-theme=\"auto\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>La Boutique Marocaine - 100% Made in Morocco</title>
    <meta name=\"description\" content=\"La boutique spécialisée dans la fabrication Made In France\">

    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/style.css"), "html", null, true);
        yield "\">

    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/carousel.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/css/custom.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/feather-icons\"></script>
</head>

<body>

<header data-bs-theme=\"dark\">
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">La Boutique Marocaine</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Acceuil</a>
                    </li>
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            yield "                            <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "</a>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                   
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\">A propos</a>                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/register\">Register</a>
                    </li>
                </ul>
                <div class=\"speed-menu\">
                ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            yield "\"><i data-feather=\"user\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "firstname", [], "any", false, false, false, 47), "html", null, true);
            yield "</a>
                    <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><i data-feather=\"log-out\"></i>Logout</a>
                ";
        } else {
            // line 50
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><i data-feather=\"user\"></i></a>
                ";
        }
        // line 52
        yield "                    ";
        // line 55
        yield "                </div>
            </div>
        </div>
    </nav>
</header>
<main class=\"container mt-5\">
                <div class=\"container m5\"> 
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "flashbag", [], "any", false, false, false, 62), "all", [], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 63
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 64
                yield "                                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                                        ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                    </div

";
        // line 71
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 75
        yield "
<footer class=\"container mt-5\">
    <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
    <p>&copy; 2023 La Boutique Marocaine &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
</footer>   
</main> 

<script src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/js/global.js"), "html", null, true);
        yield "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 71
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

        // line 72
        yield "    ";
        yield from $this->loadTemplate("_partials/_flashes.html.twig", "base.html.twig", 72)->unwrap()->yield($context);
        // line 73
        yield "
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
        return "base.html.twig";
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
        return array (  236 => 73,  233 => 72,  220 => 71,  205 => 83,  201 => 82,  192 => 75,  190 => 71,  186 => 69,  180 => 68,  171 => 65,  166 => 64,  161 => 63,  157 => 62,  148 => 55,  146 => 52,  140 => 50,  135 => 48,  128 => 47,  126 => 46,  116 => 38,  105 => 35,  102 => 34,  98 => 33,  86 => 24,  74 => 15,  70 => 14,  64 => 11,  59 => 9,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\" data-bs-theme=\"auto\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>La Boutique Marocaine - 100% Made in Morocco</title>
    <meta name=\"description\" content=\"La boutique spécialisée dans la fabrication Made In France\">

    <link rel=\"stylesheet\" href=\"{{asset('/assets/css/style.css')}}\">

    <link href=\"{{asset('/assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('/assets/css/carousel.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('/assets/css/custom.css')}}\" rel=\"stylesheet\">
    <script src=\"https://unpkg.com/feather-icons\"></script>
</head>

<body>

<header data-bs-theme=\"dark\">
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">La Boutique Marocaine</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Acceuil</a>
                    </li>
                    {% for category in categories %}
                            <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('show_category', {'slug': category.slug}) }}\">{{ category }}</a>
                    </li>
                    {% endfor %}
                   
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\">A propos</a>                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/register\">Register</a>
                    </li>
                </ul>
                <div class=\"speed-menu\">
                {% if app.user %}
                    <a href=\"{{ path('app_account')}}\"><i data-feather=\"user\"></i>{{ app.user.firstname }}</a>
                    <a href=\"{{ path('app_logout') }}\"><i data-feather=\"log-out\"></i>Logout</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\"><i data-feather=\"user\"></i></a>
                {% endif %}
                    {# <a href=\"{{ path('app_cart')}}\"><i data-feather=\"shopping-cart\"></i>
                            <span class=\"badge bg-secondary\">{{ fullQuantity }} </span>
                    </a> #}
                </div>
            </div>
        </div>
    </nav>
</header>
<main class=\"container mt-5\">
                <div class=\"container m5\"> 
                            {% for label, messages in app.session.flashbag.all() %}
                                {% for message in messages %}
                                    <div class=\"alert alert-{{ label }}\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                            {% endfor %}
                    </div

{% block body %}
    {% include '_partials/_flashes.html.twig' %}

{% endblock %}

<footer class=\"container mt-5\">
    <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
    <p>&copy; 2023 La Boutique Marocaine &middot; <a href=\"#\">Privacy</a> &middot; <a href=\"#\">Terms</a></p>
</footer>   
</main> 

<script src=\"{{asset('/assets/js/bootstrap.bundle.min.js')}}\"></script>
<script src=\"{{asset('/assets/js/global.js')}}\"></script>
</body>
</html>
", "base.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\base.html.twig");
    }
}
