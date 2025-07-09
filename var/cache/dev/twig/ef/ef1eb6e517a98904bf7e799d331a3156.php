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

/* account/_menu.html.twig */
class __TwigTemplate_675eb8409fdd7e9c5667977eb293694f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/_menu.html.twig"));

        // line 1
        yield "<div class=\"container mb-3 bg-light \" style=\"height: 100vh; max-width: 320px;\">
\t<div class=\"nav flex-column nav-pills shadow rounded h-100 p-3 bg-white\">
\t\t<h3 class=\"text-center mb-4\">Mon Compte</h3>


\t\t<div class=\"nav flex-column nav-pills\">
\t\t\t<a class=\"nav-link \" href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        yield "\">
\t\t\t\t<i data-feather=\"user\"></i>
\t\t\t\tMon compte
\t\t\t</a>
\t\t\t<a class=\"nav-link \" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_command");
        yield "\">
\t\t\t\t<i data-feather=\"user\"></i>
\t\t\t\tMes dernières commandes
\t\t\t</a>
\t\t\t<a class=\"nav-link \" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_address");
        yield "\">
\t\t\t\t<i data-feather=\"user\"></i>
\t\t\t\tMes Adresses
\t\t\t</a>
            <a class=\"nav-link\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "?crudControllerFqcn=App\\\\Controller\\\\Admin\\\\CarrierCrudController\">
                <i data-feather=\"truck\"></i>
                Mes Transporteurs
            </a>
            
\t\t\t<a class=\"nav-link\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_edit");
        yield "\">
\t\t\t\t<i data-feather=\"key\"></i>
\t\t\t\tModifier le mot de passe
\t\t\t</a>
\t\t\t<a class=\"nav-link\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
\t\t\t\t<i data-feather=\"log-out\"></i>
\t\t\t\tSe déconnecter
\t\t\t</a>


\t</div>
</div>

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
        return "account/_menu.html.twig";
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
        return array (  92 => 28,  85 => 24,  77 => 19,  70 => 15,  63 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mb-3 bg-light \" style=\"height: 100vh; max-width: 320px;\">
\t<div class=\"nav flex-column nav-pills shadow rounded h-100 p-3 bg-white\">
\t\t<h3 class=\"text-center mb-4\">Mon Compte</h3>


\t\t<div class=\"nav flex-column nav-pills\">
\t\t\t<a class=\"nav-link \" href=\"{{ path('app_account') }}\">
\t\t\t\t<i data-feather=\"user\"></i>
\t\t\t\tMon compte
\t\t\t</a>
\t\t\t<a class=\"nav-link \" href=\"{{ path('app_command') }}\">
\t\t\t\t<i data-feather=\"user\"></i>
\t\t\t\tMes dernières commandes
\t\t\t</a>
\t\t\t<a class=\"nav-link \" href=\"{{ path('app_address') }}\">
\t\t\t\t<i data-feather=\"user\"></i>
\t\t\t\tMes Adresses
\t\t\t</a>
            <a class=\"nav-link\" href=\"{{ path('admin') }}?crudControllerFqcn=App\\\\Controller\\\\Admin\\\\CarrierCrudController\">
                <i data-feather=\"truck\"></i>
                Mes Transporteurs
            </a>
            
\t\t\t<a class=\"nav-link\" href=\"{{ path('app_account_edit') }}\">
\t\t\t\t<i data-feather=\"key\"></i>
\t\t\t\tModifier le mot de passe
\t\t\t</a>
\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
\t\t\t\t<i data-feather=\"log-out\"></i>
\t\t\t\tSe déconnecter
\t\t\t</a>


\t</div>
</div>

", "account/_menu.html.twig", "C:\\laragon\\www\\udemy_E_commerce\\templates\\account\\_menu.html.twig");
    }
}
