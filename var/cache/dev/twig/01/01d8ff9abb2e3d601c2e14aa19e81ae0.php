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

/* rooms/executive_suite.html.twig */
class __TwigTemplate_2374fe7ce265bd919751f1eb916be54d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/executive_suite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/executive_suite.html.twig"));

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

        yield "Executive Suite StayGrid";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executiveFC.png"), "html", null, true);
        yield "\" alt=\"Executive Suite\" class=\"rounded-xl shadow-lg w-full object-cover\">
                <span class=\"absolute top-4 left-4 bg-yellow-500 text-gray-900 font-semibold px-3 py-1 rounded-lg text-sm\">
                    Executive Suite
                </span>
            </div>

            <!-- Room Description -->
            <div>
                <h1 class=\"text-4xl font-extrabold text-gray-900 mb-4\">Executive Suite</h1>
                <p class=\"text-lg text-gray-600 mb-6\">
                   Executive Suite Airbnb offers a premium downtown experience for discerning travelers, corporate executives, or couples. Located high above the city, it features stunning panoramic views, world-class amenities, and an unbeatable location near the central business district, fine dining, and nightlife.
                </p>

                <ul class=\"space-y-3 text-gray-700\">
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 7h18M3 12h18m-9 5h9\" />
                        </svg>
                        Premium Connectivity and Entertainment
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6 1.5A9 9 0 1112 3a9 9 0 019 9v4.5z\" />
                        </svg>
                        Exclusive Amenity Access
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h8m-8 6h16\" />
                        </svg>
                        3 Executive Bedrooms
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 16l4-4m0 0l-4-4m4 4H7\" />
                        </svg>
                        4 Spa-Inspired Bathrooms
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 17l4 4 4-4m0-5l-4-4-4 4\" />
                        </svg>
                        Gourmet Chef's Kitchen Dining
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

<!-- Gallery Section -->
<section class=\"py-16 bg-gray-200\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <h6 class=\"text-3xl font-bold text-black mb-10 text-center\">Executive Suite Rooms</h6>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8\">

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executivesuite.png"), "html", null, true);
        yield "\" alt=\"Executive Bedroom\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">King Bed & Workspace</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executivela.png"), "html", null, true);
        yield "\" alt=\"Executive Living Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Sophisticated Living Area</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executivekitchen.png"), "html", null, true);
        yield "\" alt=\"Executive Kitchen Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Sleek Gourmet Kitchen</p>
            </div>

        </div>
    </div>
</section>
<section class=\"py-16 bg-gray-50\">
  <div class=\"max-w-6xl mx-auto px-4 text-center\">
    <h2 class=\"text-3xl font-bold text-gray-900 mb-4\">Executive Suite</h2>
    <p class=\"text-gray-600 mb-10\">
      Experience luxury with a spacious suite featuring a full kitchen and elegant decor.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executiveloft.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Modern Loft Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Modern Loft Suite</h3>
          <p class=\"text-gray-600 mb-3\">A two-level open concept suite with skyline views and a private kitchen.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$310 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executivebeachview.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Ocean View Executive Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Ocean View Executive Suite</h3>
          <p class=\"text-gray-600 mb-3\">Wake up to panoramic sea views and enjoy the serenity of coastal luxury.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$340 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executivevintage.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Vintage Executive Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Vintage Elegance Suite</h3>
          <p class=\"text-gray-600 mb-3\">Step into timeless charm with antique furnishings and a clawfoot tub.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$295 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executiveart.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Art Deco Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Art Deco Executive Suite</h3>
          <p class=\"text-gray-600 mb-3\">Bold designs and luxury décor inspired by the 1920s — elegance redefined.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$360 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executiveph.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Penthouse Executive Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Penthouse Skyline Suite</h3>
          <p class=\"text-gray-600 mb-3\">Enjoy 360° city views with a private balcony, hot tub, and bar lounge.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$420 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executivegarden.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Garden Terrace Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Garden Terrace Suite</h3>
          <p class=\"text-gray-600 mb-3\">Private access to a lush garden terrace with modern indoor greenery.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$280 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
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
        return "rooms/executive_suite.html.twig";
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
        return array (  285 => 159,  271 => 148,  257 => 137,  243 => 126,  229 => 115,  215 => 104,  196 => 88,  188 => 83,  180 => 78,  159 => 60,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Executive Suite StayGrid{% endblock %}

{% block content %}
<!-- Hero Section -->
<section class=\"pt-20 pb-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-10 items-center\">

            <!-- Room Image -->
            <div class=\"relative\">
                <img src=\"{{ asset('images/executiveFC.png') }}\" alt=\"Executive Suite\" class=\"rounded-xl shadow-lg w-full object-cover\">
                <span class=\"absolute top-4 left-4 bg-yellow-500 text-gray-900 font-semibold px-3 py-1 rounded-lg text-sm\">
                    Executive Suite
                </span>
            </div>

            <!-- Room Description -->
            <div>
                <h1 class=\"text-4xl font-extrabold text-gray-900 mb-4\">Executive Suite</h1>
                <p class=\"text-lg text-gray-600 mb-6\">
                   Executive Suite Airbnb offers a premium downtown experience for discerning travelers, corporate executives, or couples. Located high above the city, it features stunning panoramic views, world-class amenities, and an unbeatable location near the central business district, fine dining, and nightlife.
                </p>

                <ul class=\"space-y-3 text-gray-700\">
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 7h18M3 12h18m-9 5h9\" />
                        </svg>
                        Premium Connectivity and Entertainment
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6 1.5A9 9 0 1112 3a9 9 0 019 9v4.5z\" />
                        </svg>
                        Exclusive Amenity Access
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h8m-8 6h16\" />
                        </svg>
                        3 Executive Bedrooms
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 16l4-4m0 0l-4-4m4 4H7\" />
                        </svg>
                        4 Spa-Inspired Bathrooms
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 17l4 4 4-4m0-5l-4-4-4 4\" />
                        </svg>
                        Gourmet Chef's Kitchen Dining
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

<!-- Gallery Section -->
<section class=\"py-16 bg-gray-200\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <h6 class=\"text-3xl font-bold text-black mb-10 text-center\">Executive Suite Rooms</h6>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8\">

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/executivesuite.png') }}\" alt=\"Executive Bedroom\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">King Bed & Workspace</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/executivela.png') }}\" alt=\"Executive Living Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Sophisticated Living Area</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/executivekitchen.png') }}\" alt=\"Executive Kitchen Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Sleek Gourmet Kitchen</p>
            </div>

        </div>
    </div>
</section>
<section class=\"py-16 bg-gray-50\">
  <div class=\"max-w-6xl mx-auto px-4 text-center\">
    <h2 class=\"text-3xl font-bold text-gray-900 mb-4\">Executive Suite</h2>
    <p class=\"text-gray-600 mb-10\">
      Experience luxury with a spacious suite featuring a full kitchen and elegant decor.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/executiveloft.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Modern Loft Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Modern Loft Suite</h3>
          <p class=\"text-gray-600 mb-3\">A two-level open concept suite with skyline views and a private kitchen.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$310 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/executivebeachview.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Ocean View Executive Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Ocean View Executive Suite</h3>
          <p class=\"text-gray-600 mb-3\">Wake up to panoramic sea views and enjoy the serenity of coastal luxury.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$340 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/executivevintage.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Vintage Executive Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Vintage Elegance Suite</h3>
          <p class=\"text-gray-600 mb-3\">Step into timeless charm with antique furnishings and a clawfoot tub.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$295 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/executiveart.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Art Deco Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Art Deco Executive Suite</h3>
          <p class=\"text-gray-600 mb-3\">Bold designs and luxury décor inspired by the 1920s — elegance redefined.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$360 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/executiveph.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Penthouse Executive Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Penthouse Skyline Suite</h3>
          <p class=\"text-gray-600 mb-3\">Enjoy 360° city views with a private balcony, hot tub, and bar lounge.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$420 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/executivegarden.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Garden Terrace Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Garden Terrace Suite</h3>
          <p class=\"text-gray-600 mb-3\">Private access to a lush garden terrace with modern indoor greenery.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$280 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>
{% endblock %}
", "rooms/executive_suite.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\rooms\\executive_suite.html.twig");
    }
}
