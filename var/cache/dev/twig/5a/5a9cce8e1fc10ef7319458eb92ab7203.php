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

/* rooms/family_apartment.html.twig */
class __TwigTemplate_3a267c7f62f21fd02bbbc4ddc11d23f2 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/family_apartment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/family_apartment.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Family Apartment - StayGrid";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<!-- Hero Section -->
<section class=\"pt-20 pb-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-10 items-center\">

            <!-- Room Image -->
            <div class=\"relative\">
                <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/familyapartmentFH.png"), "html", null, true);
        yield "\" alt=\"Family Apartment\" class=\"rounded-xl shadow-lg w-full object-cover\">
                <span class=\"absolute top-4 left-4 bg-yellow-500 text-gray-900 font-semibold px-3 py-1 rounded-lg text-sm\">
                    Family Apartment
                </span>
            </div>

            <!-- Room Description -->
            <div>
                <h1 class=\"text-4xl font-extrabold text-gray-900 mb-4\">Family Apartment</h1>
                <p class=\"text-lg text-gray-600 mb-6\">
                    Ideal for families or groups looking for extra space and comfort. Enjoy multiple bedrooms, a fully equipped kitchen, and a cozy living area designed for shared memories.
                </p>

                <ul class=\"space-y-3 text-gray-700\">
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 7h18M3 12h18m-9 5h9\" />
                        </svg>
                        3 spacious bedrooms with queen beds
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6 1.5A9 9 0 1112 3a9 9 0 019 9v4.5z\" />
                        </svg>
                        2 modern bathrooms with hot showers
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h8m-8 6h16\" />
                        </svg>
                        Fully equipped kitchen and dining area
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 16l4-4m0 0l-4-4m4 4H7\" />
                        </svg>
                        High-speed Wi-Fi and Smart TV
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 17l4 4 4-4m0-5l-4-4-4 4\" />
                        </svg>
                        Access to rooftop lounge and pool
                    </li>
                </ul>

                <div class=\"mt-8\">
                   <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
        yield "\"class=\"inline-block px-6 py-3 bg-yellow-500 text-gray-900 font-semibold rounded-lg shadow-md hover:bg-yellow-400 transition\">
                        Book This Stay
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"py-16 bg-gray-200\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <h6 class=\"text-3xl font-bold text-black mb-10 text-center\">Family Apartment Rooms</h6>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8\">

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/familyapartmentX.png"), "html", null, true);
        yield "\" alt=\"Bedroom View\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Bedroom View</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/familyapartmentla.png"), "html", null, true);
        yield "\" alt=\"Living Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Cozy Living Area</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/familyapartmentkitchen.png"), "html", null, true);
        yield "\" alt=\"Kitchen Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Full Kitchen & Dining</p>
            </div>

        </div>
    </div>
</section>

<section class=\"py-16 bg-gray-50\">
    <div class=\"max-w-5xl mx-auto text-center mb-10\">
        <h2 class=\"text-3xl font-bold text-gray-900 mb-4\">Available Family Apartments</h2>
        <p class=\"text-gray-600 text-lg\">
            Discover our spacious family apartments designed for comfort, convenience, and unforgettable stays.
        </p>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto\">
        
        <!-- Apartment 1 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fac.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Classic Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Classic Family Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Comfortable two-bedroom unit with modern interiors and a cozy lounge area.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$310 / night</p>
                <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
        yield "\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

        <!-- Apartment 2 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fab.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Balcony Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Balcony View Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Enjoy your morning coffee with panoramic views from a spacious balcony.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$340 / night</p>
                <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
        yield "\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

<!-- Apartment 3 -->
<div class=\"bg-white rounded-lg -md overflow-hidden hover:shadow-2xl transition transform hover:scale-105\">
    <img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fad.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover rounded-t-lg\" alt=\"Deluxe Family Apartment\">
    <div class=\"p-6 text-left\">
        <h3 class=\"text-xl font-semibold mb-2\">Deluxe Family Apartment</h3>
        <p class=\"text-gray-600 mb-3\">Spacious three-bedroom layout with elegant decor and a private dining area.</p>
        <p class=\"text-yellow-600 font-semibold mb-4\">\$380 / night</p>
        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
        yield "\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
            Book Now
        </a>
    </div>
</div>

        <!-- Apartment 4 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fam.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Modern Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Modern Family Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Stylish open-concept design with smart home features and ambient lighting.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$360 / night</p>
                <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
        yield "\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

        <!-- Apartment 5 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fagraden.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Garden Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Garden View Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Relax amidst greenery in this charming unit with direct garden access.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$330 / night</p>
                <a href=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
        yield "\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

        <!-- Apartment 6 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/falux.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Luxury Family Suite\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Luxury Family Suite</h3>
                <p class=\"text-gray-600 mb-3\">Top-tier comfort with private balcony, premium furnishings, and full kitchen.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$420 / night</p>
                <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
        yield "\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

    </div>
</section>

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
        return "rooms/family_apartment.html.twig";
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
        return array (  320 => 176,  312 => 171,  301 => 163,  293 => 158,  282 => 150,  274 => 145,  263 => 137,  255 => 132,  244 => 124,  236 => 119,  225 => 111,  217 => 106,  194 => 86,  186 => 81,  178 => 76,  159 => 60,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Family Apartment - StayGrid{% endblock %}

{% block content %}
<!-- Hero Section -->
<section class=\"pt-20 pb-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-10 items-center\">

            <!-- Room Image -->
            <div class=\"relative\">
                <img src=\"{{ asset('images/familyapartmentFH.png') }}\" alt=\"Family Apartment\" class=\"rounded-xl shadow-lg w-full object-cover\">
                <span class=\"absolute top-4 left-4 bg-yellow-500 text-gray-900 font-semibold px-3 py-1 rounded-lg text-sm\">
                    Family Apartment
                </span>
            </div>

            <!-- Room Description -->
            <div>
                <h1 class=\"text-4xl font-extrabold text-gray-900 mb-4\">Family Apartment</h1>
                <p class=\"text-lg text-gray-600 mb-6\">
                    Ideal for families or groups looking for extra space and comfort. Enjoy multiple bedrooms, a fully equipped kitchen, and a cozy living area designed for shared memories.
                </p>

                <ul class=\"space-y-3 text-gray-700\">
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 7h18M3 12h18m-9 5h9\" />
                        </svg>
                        3 spacious bedrooms with queen beds
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6 1.5A9 9 0 1112 3a9 9 0 019 9v4.5z\" />
                        </svg>
                        2 modern bathrooms with hot showers
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h8m-8 6h16\" />
                        </svg>
                        Fully equipped kitchen and dining area
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 16l4-4m0 0l-4-4m4 4H7\" />
                        </svg>
                        High-speed Wi-Fi and Smart TV
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 17l4 4 4-4m0-5l-4-4-4 4\" />
                        </svg>
                        Access to rooftop lounge and pool
                    </li>
                </ul>

                <div class=\"mt-8\">
                   <a href=\"{{ path('app_login', {'redirect': 'book'}) }}\"class=\"inline-block px-6 py-3 bg-yellow-500 text-gray-900 font-semibold rounded-lg shadow-md hover:bg-yellow-400 transition\">
                        Book This Stay
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"py-16 bg-gray-200\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <h6 class=\"text-3xl font-bold text-black mb-10 text-center\">Family Apartment Rooms</h6>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8\">

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/familyapartmentX.png') }}\" alt=\"Bedroom View\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Bedroom View</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/familyapartmentla.png') }}\" alt=\"Living Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Cozy Living Area</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/familyapartmentkitchen.png') }}\" alt=\"Kitchen Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Full Kitchen & Dining</p>
            </div>

        </div>
    </div>
</section>

<section class=\"py-16 bg-gray-50\">
    <div class=\"max-w-5xl mx-auto text-center mb-10\">
        <h2 class=\"text-3xl font-bold text-gray-900 mb-4\">Available Family Apartments</h2>
        <p class=\"text-gray-600 text-lg\">
            Discover our spacious family apartments designed for comfort, convenience, and unforgettable stays.
        </p>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto\">
        
        <!-- Apartment 1 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"{{ asset('images/fac.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Classic Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Classic Family Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Comfortable two-bedroom unit with modern interiors and a cozy lounge area.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$310 / night</p>
                <a href=\"{{ path('app_booking') }}\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

        <!-- Apartment 2 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"{{ asset('images/fab.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Balcony Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Balcony View Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Enjoy your morning coffee with panoramic views from a spacious balcony.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$340 / night</p>
                <a href=\"{{ path('app_booking') }}\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

<!-- Apartment 3 -->
<div class=\"bg-white rounded-lg -md overflow-hidden hover:shadow-2xl transition transform hover:scale-105\">
    <img src=\"{{ asset('images/fad.png') }}\" class=\"w-full h-48 object-cover rounded-t-lg\" alt=\"Deluxe Family Apartment\">
    <div class=\"p-6 text-left\">
        <h3 class=\"text-xl font-semibold mb-2\">Deluxe Family Apartment</h3>
        <p class=\"text-gray-600 mb-3\">Spacious three-bedroom layout with elegant decor and a private dining area.</p>
        <p class=\"text-yellow-600 font-semibold mb-4\">\$380 / night</p>
        <a href=\"{{ path('app_booking') }}\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
            Book Now
        </a>
    </div>
</div>

        <!-- Apartment 4 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"{{ asset('images/fam.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Modern Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Modern Family Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Stylish open-concept design with smart home features and ambient lighting.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$360 / night</p>
                <a href=\"{{ path('app_booking') }}\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

        <!-- Apartment 5 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"{{ asset('images/fagraden.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Garden Family Apartment\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Garden View Apartment</h3>
                <p class=\"text-gray-600 mb-3\">Relax amidst greenery in this charming unit with direct garden access.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$330 / night</p>
                <a href=\"{{ path('app_booking') }}\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

        <!-- Apartment 6 -->
        <div class=\"bg-white rounded-lg -md overflow-hidden\">
            <img src=\"{{ asset('images/falux.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Luxury Family Suite\">
            <div class=\"p-6 text-left\">
                <h3 class=\"text-xl font-semibold mb-2\">Luxury Family Suite</h3>
                <p class=\"text-gray-600 mb-3\">Top-tier comfort with private balcony, premium furnishings, and full kitchen.</p>
                <p class=\"text-yellow-600 font-semibold mb-4\">\$420 / night</p>
                <a href=\"{{ path('app_booking') }}\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">
                    Book Now
                </a>
            </div>
        </div>

    </div>
</section>

{% endblock %}
", "rooms/family_apartment.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\rooms\\family_apartment.html.twig");
    }
}
