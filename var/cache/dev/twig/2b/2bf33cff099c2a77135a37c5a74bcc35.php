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

/* rooms/studio_deluxe.html.twig */
class __TwigTemplate_fbe74b3b2fd685f400a2f7487796603d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/studio_deluxe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/studio_deluxe.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Studio Deluxe | StayGrid";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "<section class=\"pt-20 pb-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-10 items-center\">

            <!-- Room Image -->
            <div class=\"relative\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiodeluxefh.png"), "html", null, true);
        yield "\" alt=\"Studio Deluxe Room\" class=\"rounded-xl shadow-lg w-full object-cover\">
                <span class=\"absolute top-4 left-4 bg-yellow-500 text-gray-900 font-semibold px-3 py-1 rounded-lg text-sm\">
                    Studio Deluxe
                </span>
            </div>

            <!-- Room Description -->
            <div>
                <h1 class=\"text-4xl font-extrabold text-gray-900 mb-4\">Studio Deluxe</h1>
                <p class=\"text-lg text-gray-600 mb-6\">
                    A modern retreat designed for solo travelers and couples seeking relaxation and style. 
                    Enjoy an open-concept layout, premium finishes, and thoughtful amenities in a peaceful space.
                </p>

                <ul class=\"space-y-3 text-gray-700\">
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h8m-8 6h16\" />
                        </svg>
                        Spacious king-sized bed with premium linens
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6 1.5A9 9 0 1112 3a9 9 0 019 9v4.5z\" />
                        </svg>
                        Elegant ensuite bathroom with rainfall shower
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 12h14M12 5l7 7-7 7\" />
                        </svg>
                        Cozy workspace and high-speed Wi-Fi
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 17l4 4 4-4m0-5l-4-4-4 4\" />
                        </svg>
                        Access to rooftop pool and fitness area
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 10h18M3 14h18m-9 4h9\" />
                        </svg>
                        Complimentary minibar and daily housekeeping
                    </li>
                </ul>

                <div class=\"mt-8\">
                     <a href=\"";
        // line 58
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
        <h6 class=\"text-3xl font-bold text-black mb-10 text-center\">Studio Deluxe Rooms</h6>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8\">

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiosuiteX.png"), "html", null, true);
        yield "\" alt=\"Studio Deluxe Bedroom\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Serene Sleeping Area</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiodeluxela.png"), "html", null, true);
        yield "\" alt=\"Studio Deluxe Living Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Modern Living Space</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiodeluxebth.png"), "html", null, true);
        yield "\" alt=\"Studio Deluxe Bathroom\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Sparkling Ensuite Bathroom</p>
            </div>

        </div>
    </div>
</section>
<section class=\"py-16 bg-gray-50\">
  <div class=\"max-w-6xl mx-auto px-4 text-center\">
    <h2 class=\"text-3xl font-bold text-gray-900 mb-4\">Studio Deluxe</h2>
    <p class=\"text-gray-600 mb-10\">
      Perfect for solo travelers or couples seeking comfort and style — explore our variety of Studio Deluxe rooms.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiocityview.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"City View Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">City View Studio</h3>
          <p class=\"text-gray-600 mb-3\">Enjoy a cozy modern space with large windows overlooking the city skyline.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$180 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiobalcony.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Studio with Balcony\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Studio with Balcony</h3>
          <p class=\"text-gray-600 mb-3\">Breathe in fresh air on your private balcony while sipping your morning coffee.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$195 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/CozyStudio.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Cozy Corner Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Cozy Corner Studio</h3>
          <p class=\"text-gray-600 mb-3\">A warm and inviting studio perfect for quiet nights and relaxing weekends.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$170 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studioindustrial.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Industrial Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Industrial Chic Studio</h3>
          <p class=\"text-gray-600 mb-3\">Sleek interiors with industrial accents — ideal for design-conscious travelers.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$200 / night</p>
          <br> 
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiogarden.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Garden View Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Garden View Studio</h3>
          <p class=\"text-gray-600 mb-3\">Wake up to lush garden views and natural light in this peaceful studio retreat.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$185 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studioluxury.png"), "html", null, true);
        yield "\" class=\"w-full h-48 object-cover\" alt=\"Luxury Studio Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Luxury Studio Suite</h3>
          <p class=\"text-gray-600 mb-3\">Premium finishes, rainfall shower, and king-sized bed for ultimate relaxation.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$220 / night</p>
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
        return "rooms/studio_deluxe.html.twig";
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
        return array (  285 => 157,  271 => 146,  257 => 135,  243 => 124,  229 => 113,  215 => 102,  195 => 85,  187 => 80,  179 => 75,  159 => 58,  108 => 10,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Studio Deluxe | StayGrid{% endblock %}
{% block content %}
<section class=\"pt-20 pb-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-6\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-10 items-center\">

            <!-- Room Image -->
            <div class=\"relative\">
                <img src=\"{{ asset('images/studiodeluxefh.png') }}\" alt=\"Studio Deluxe Room\" class=\"rounded-xl shadow-lg w-full object-cover\">
                <span class=\"absolute top-4 left-4 bg-yellow-500 text-gray-900 font-semibold px-3 py-1 rounded-lg text-sm\">
                    Studio Deluxe
                </span>
            </div>

            <!-- Room Description -->
            <div>
                <h1 class=\"text-4xl font-extrabold text-gray-900 mb-4\">Studio Deluxe</h1>
                <p class=\"text-lg text-gray-600 mb-6\">
                    A modern retreat designed for solo travelers and couples seeking relaxation and style. 
                    Enjoy an open-concept layout, premium finishes, and thoughtful amenities in a peaceful space.
                </p>

                <ul class=\"space-y-3 text-gray-700\">
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h8m-8 6h16\" />
                        </svg>
                        Spacious king-sized bed with premium linens
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 8v4l3 3m6 1.5A9 9 0 1112 3a9 9 0 019 9v4.5z\" />
                        </svg>
                        Elegant ensuite bathroom with rainfall shower
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5 12h14M12 5l7 7-7 7\" />
                        </svg>
                        Cozy workspace and high-speed Wi-Fi
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 17l4 4 4-4m0-5l-4-4-4 4\" />
                        </svg>
                        Access to rooftop pool and fitness area
                    </li>
                    <li class=\"flex items-center\">
                        <svg class=\"w-5 h-5 text-yellow-500 mr-2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 10h18M3 14h18m-9 4h9\" />
                        </svg>
                        Complimentary minibar and daily housekeeping
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
        <h6 class=\"text-3xl font-bold text-black mb-10 text-center\">Studio Deluxe Rooms</h6>

        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8\">

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/studiosuiteX.png') }}\" alt=\"Studio Deluxe Bedroom\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Serene Sleeping Area</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/studiodeluxela.png') }}\" alt=\"Studio Deluxe Living Area\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Modern Living Space</p>
            </div>

            <div class=\"flex flex-col items-center\">
                <img src=\"{{ asset('images/studiodeluxebth.png') }}\" alt=\"Studio Deluxe Bathroom\" class=\"rounded-xl shadow-lg hover:shadow-xl transition duration-300 w-full h-auto\">
                <p class=\"mt-3 text-lg font-medium text-gray-700\">Sparkling Ensuite Bathroom</p>
            </div>

        </div>
    </div>
</section>
<section class=\"py-16 bg-gray-50\">
  <div class=\"max-w-6xl mx-auto px-4 text-center\">
    <h2 class=\"text-3xl font-bold text-gray-900 mb-4\">Studio Deluxe</h2>
    <p class=\"text-gray-600 mb-10\">
      Perfect for solo travelers or couples seeking comfort and style — explore our variety of Studio Deluxe rooms.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/studiocityview.png') }}\" class=\"w-full h-48 object-cover\" alt=\"City View Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">City View Studio</h3>
          <p class=\"text-gray-600 mb-3\">Enjoy a cozy modern space with large windows overlooking the city skyline.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$180 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/studiobalcony.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Studio with Balcony\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Studio with Balcony</h3>
          <p class=\"text-gray-600 mb-3\">Breathe in fresh air on your private balcony while sipping your morning coffee.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$195 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/CozyStudio.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Cozy Corner Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Cozy Corner Studio</h3>
          <p class=\"text-gray-600 mb-3\">A warm and inviting studio perfect for quiet nights and relaxing weekends.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$170 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/studioindustrial.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Industrial Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Industrial Chic Studio</h3>
          <p class=\"text-gray-600 mb-3\">Sleek interiors with industrial accents — ideal for design-conscious travelers.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$200 / night</p>
          <br> 
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/studiogarden.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Garden View Studio\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Garden View Studio</h3>
          <p class=\"text-gray-600 mb-3\">Wake up to lush garden views and natural light in this peaceful studio retreat.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$185 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

      <div class=\"bg-white rounded-lg -md overflow-hidden\">
        <img src=\"{{ asset('images/studioluxury.png') }}\" class=\"w-full h-48 object-cover\" alt=\"Luxury Studio Suite\">
        <div class=\"p-6 text-left\">
          <h3 class=\"text-xl font-semibold mb-2\">Luxury Studio Suite</h3>
          <p class=\"text-gray-600 mb-3\">Premium finishes, rainfall shower, and king-sized bed for ultimate relaxation.</p>
          <p class=\"text-yellow-600 font-semibold mb-4\">\$220 / night</p>
          <br>
          <a href=\"#\" class=\"bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md\">Book Now</a>
        </div>
      </div>

    </div>
  </div>
</section>
{% endblock %}
", "rooms/studio_deluxe.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\rooms\\studio_deluxe.html.twig");
    }
}
