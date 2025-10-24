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

/* admin/roomlisting/index.html.twig */
class __TwigTemplate_98fb7f312a2adff316e8ad4550a31a4a extends Template
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
            'header_title' => [$this, 'block_header_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/index.html.twig"));

        // line 4
        $context["primary_accent"] = "#facc15";
        // line 5
        $context["secondary_dark"] = "#111827";
        // line 2
        $this->parent = $this->load("admin/base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
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

        yield "Room Listings Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_title"));

        yield "Room Listings";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    <div class=\"max-w-7xl mx-auto\">
        
        ";
        // line 15
        yield "        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-3xl font-extrabold text-secondary-dark\">Room Listings</h1>
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_new");
        yield "\" 
               class=\"inline-flex items-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-md hover:bg-primary-accent/90 transition\">
                <svg class=\"w-4 h-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.5v15m7.5-7.5h-15\" />
                </svg>
                Create New Room
            </a>
        </div>

        ";
        // line 27
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["room_listings"]) || array_key_exists("room_listings", $context) ? $context["room_listings"] : (function () { throw new RuntimeError('Variable "room_listings" does not exist.', 27, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8\">
                
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["room_listings"]) || array_key_exists("room_listings", $context) ? $context["room_listings"] : (function () { throw new RuntimeError('Variable "room_listings" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["room_listing"]) {
                // line 31
                yield "                    <div class=\"bg-white shadow-xl rounded-xl overflow-hidden group transition duration-300 hover:shadow-2xl\">
                        
                        ";
                // line 34
                yield "                        <div class=\"relative h-48 bg-gray-100\">
                            ";
                // line 35
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "image", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/rooms/" . CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "image", [], "any", false, false, false, 36))), "html", null, true);
                    yield "\" 
                                     alt=\"Image of ";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "category", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "category", [], "any", false, false, false, 37), "Room")) : ("Room")), "html", null, true);
                    yield " #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "number", [], "any", false, false, false, 37), "html", null, true);
                    yield "\" 
                                     class=\"w-full h-full object-cover\">
                            ";
                } else {
                    // line 40
                    yield "                                ";
                    // line 41
                    yield "                                <div class=\"w-full h-full flex items-center justify-center text-gray-400 border border-dashed border-gray-300\">
                                    No Image Available
                                </div>
                            ";
                }
                // line 45
                yield "                            
                            ";
                // line 47
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "isAvailable", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "                                <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white shadow-lg\">Available</span>
                            ";
                } else {
                    // line 50
                    yield "                                <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white shadow-lg\">Occupied</span>
                            ";
                }
                // line 52
                yield "                        </div>

                        ";
                // line 55
                yield "                        <div class=\"p-5 space-y-3\">
                            
                            ";
                // line 58
                yield "                            <div class=\"flex justify-between items-start\">
                                <h3 class=\"text-xl font-bold text-secondary-dark leading-tight\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "category", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "category", [], "any", false, false, false, 59), "Room")) : ("Room")), "html", null, true);
                yield "</h3>
                                <p class=\"text-sm font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded-full border border-gray-200\">#";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "number", [], "any", false, false, false, 60), "html", null, true);
                yield "</p>
                            </div>
                            
                            ";
                // line 64
                yield "                            <div class=\"text-lg font-extrabold text-primary-accent\">
                                \$";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "pricePerNight", [], "any", false, false, false, 65), 2, ".", ","), "html", null, true);
                yield " <span class=\"text-sm font-medium text-gray-600\">/ night</span>
                            </div>
                            
                            <p class=\"text-sm text-gray-500 line-clamp-2\" title=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "description", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "description", [], "any", false, false, false, 68), "No description provided.")) : ("No description provided.")), "html", null, true);
                yield "\">
                                ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "description", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "description", [], "any", false, false, false, 69), "No description provided.")) : ("No description provided.")), "html", null, true);
                yield "
                            </p>
                            
                            <div class=\"text-sm text-gray-600 pt-1\">
                                Max Guests: <span class=\"font-semibold\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "capacity", [], "any", false, false, false, 73), "html", null, true);
                yield "</span>
                            </div>
                        </div>

                        ";
                // line 78
                yield "                        <div class=\"bg-gray-50 p-4 flex justify-between items-center border-t border-gray-100\">
                            
                            ";
                // line 81
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                yield "\" 
                               class=\"text-sm font-medium text-secondary-dark hover:text-primary-accent transition duration-150\">
                                Edit Details
                            </a>
                            
                            ";
                // line 87
                yield "                            <form method=\"POST\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" 
                                  onsubmit=\"return confirm('Confirm deletion of room #";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "number", [], "any", false, false, false, 88), "html", null, true);
                yield "?');\" 
                                  class=\"inline-block\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "id", [], "any", false, false, false, 90))), "html", null, true);
                yield "\">
                                <button type=\"submit\" 
                                        class=\"text-sm font-medium text-red-600 hover:text-red-800 transition duration-150 underline bg-transparent border-none p-0 cursor-pointer\">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['room_listing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "
            </div>
        ";
        } else {
            // line 102
            yield "            ";
            // line 103
            yield "            <div class=\"text-center py-16 bg-white shadow rounded-lg border border-gray-200\">
                <svg class=\"mx-auto h-12 w-12 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 21h19.5m-1.5-18L18 3m-2.25 0h2.25A2.25 2.25 0 0118 5.25v13.5A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V5.25A2.25 2.25 0 015.25 3h1.5m6-1.5h.75m-6-.75v.75m1.5-1.5h.75m-6-.75v.75m1.5-1.5h.75m1.5-1.5h.75m-1.5 0v.75m-6-.75v.75m1.5-1.5h.75m-6-.75v.75m-1.5-1.5h.75m6 0h.75m1.5 0h.75\" />
                </svg>
                <h3 class=\"mt-2 text-sm font-semibold text-gray-900\">No rooms listed</h3>
                <p class=\"mt-1 text-sm text-gray-500\">Get started by creating a new room listing.</p>
                <div class=\"mt-6\">
                    <a href=\"";
            // line 110
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_new");
            yield "\" 
                       class=\"inline-flex items-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-md hover:bg-primary-accent/90 transition\">
                        <svg class=\"w-4 h-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.5v15m7.5-7.5h-15\" />
                        </svg>
                        Create New Room
                    </a>
                </div>
            </div>
        ";
        }
        // line 120
        yield "        ";
        // line 121
        yield "    </div>
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
        return "admin/roomlisting/index.html.twig";
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
        return array (  321 => 121,  319 => 120,  306 => 110,  297 => 103,  295 => 102,  290 => 99,  275 => 90,  270 => 88,  265 => 87,  256 => 81,  252 => 78,  245 => 73,  238 => 69,  234 => 68,  228 => 65,  225 => 64,  219 => 60,  215 => 59,  212 => 58,  208 => 55,  204 => 52,  200 => 50,  196 => 48,  193 => 47,  190 => 45,  184 => 41,  182 => 40,  174 => 37,  169 => 36,  167 => 35,  164 => 34,  160 => 31,  156 => 30,  152 => 28,  149 => 27,  137 => 17,  133 => 15,  129 => 12,  116 => 11,  93 => 9,  70 => 7,  59 => 2,  57 => 5,  55 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/roomlisting/index.html.twig #}
{% extends 'admin/base.html.twig' %}

{% set primary_accent = '#facc15' %}
{% set secondary_dark = '#111827' %}

{% block title %}Room Listings Index{% endblock %}

{% block header_title %}Room Listings{% endblock %}

{% block body %}
    <div class=\"max-w-7xl mx-auto\">
        
        {# Page Header: Title and Create Button #}
        <div class=\"flex justify-between items-center mb-8\">
            <h1 class=\"text-3xl font-extrabold text-secondary-dark\">Room Listings</h1>
            <a href=\"{{ path('app_admin_roomlisting_new') }}\" 
               class=\"inline-flex items-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-md hover:bg-primary-accent/90 transition\">
                <svg class=\"w-4 h-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.5v15m7.5-7.5h-15\" />
                </svg>
                Create New Room
            </a>
        </div>

        {# --- START ROOM CARD GRID --- #}
        {% if room_listings is not empty %}
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8\">
                
                {% for room_listing in room_listings %}
                    <div class=\"bg-white shadow-xl rounded-xl overflow-hidden group transition duration-300 hover:shadow-2xl\">
                        
                        {# Image Section #}
                        <div class=\"relative h-48 bg-gray-100\">
                            {% if room_listing.image %}
                                <img src=\"{{ asset('uploads/rooms/' ~ room_listing.image) }}\" 
                                     alt=\"Image of {{ room_listing.category|default('Room') }} #{{ room_listing.number }}\" 
                                     class=\"w-full h-full object-cover\">
                            {% else %}
                                {# Placeholder for rooms without images #}
                                <div class=\"w-full h-full flex items-center justify-center text-gray-400 border border-dashed border-gray-300\">
                                    No Image Available
                                </div>
                            {% endif %}
                            
                            {# Status Badge #}
                            {% if room_listing.isAvailable %}
                                <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white shadow-lg\">Available</span>
                            {% else %}
                                <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white shadow-lg\">Occupied</span>
                            {% endif %}
                        </div>

                        {# Details Section #}
                        <div class=\"p-5 space-y-3\">
                            
                            {# Title and Room Number #}
                            <div class=\"flex justify-between items-start\">
                                <h3 class=\"text-xl font-bold text-secondary-dark leading-tight\">{{ room_listing.category|default('Room') }}</h3>
                                <p class=\"text-sm font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded-full border border-gray-200\">#{{ room_listing.number }}</p>
                            </div>
                            
                            {# Price and Capacity #}
                            <div class=\"text-lg font-extrabold text-primary-accent\">
                                \${{ room_listing.pricePerNight|number_format(2, '.', ',') }} <span class=\"text-sm font-medium text-gray-600\">/ night</span>
                            </div>
                            
                            <p class=\"text-sm text-gray-500 line-clamp-2\" title=\"{{ room_listing.description|default('No description provided.') }}\">
                                {{ room_listing.description|default('No description provided.') }}
                            </p>
                            
                            <div class=\"text-sm text-gray-600 pt-1\">
                                Max Guests: <span class=\"font-semibold\">{{ room_listing.capacity }}</span>
                            </div>
                        </div>

                        {# Actions Section (Admin Links) #}
                        <div class=\"bg-gray-50 p-4 flex justify-between items-center border-t border-gray-100\">
                            
                            {# Edit Button #}
                            <a href=\"{{ path('app_admin_roomlisting_edit', {'id': room_listing.id}) }}\" 
                               class=\"text-sm font-medium text-secondary-dark hover:text-primary-accent transition duration-150\">
                                Edit Details
                            </a>
                            
                            {# Delete Button (Small Form) #}
                            <form method=\"POST\" action=\"{{ path('app_admin_roomlisting_delete', {'id': room_listing.id}) }}\" 
                                  onsubmit=\"return confirm('Confirm deletion of room #{{ room_listing.number }}?');\" 
                                  class=\"inline-block\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ room_listing.id) }}\">
                                <button type=\"submit\" 
                                        class=\"text-sm font-medium text-red-600 hover:text-red-800 transition duration-150 underline bg-transparent border-none p-0 cursor-pointer\">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                {% endfor %}

            </div>
        {% else %}
            {# Empty State #}
            <div class=\"text-center py-16 bg-white shadow rounded-lg border border-gray-200\">
                <svg class=\"mx-auto h-12 w-12 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 21h19.5m-1.5-18L18 3m-2.25 0h2.25A2.25 2.25 0 0118 5.25v13.5A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V5.25A2.25 2.25 0 015.25 3h1.5m6-1.5h.75m-6-.75v.75m1.5-1.5h.75m-6-.75v.75m1.5-1.5h.75m1.5-1.5h.75m-1.5 0v.75m-6-.75v.75m1.5-1.5h.75m-6-.75v.75m-1.5-1.5h.75m6 0h.75m1.5 0h.75\" />
                </svg>
                <h3 class=\"mt-2 text-sm font-semibold text-gray-900\">No rooms listed</h3>
                <p class=\"mt-1 text-sm text-gray-500\">Get started by creating a new room listing.</p>
                <div class=\"mt-6\">
                    <a href=\"{{ path('app_admin_roomlisting_new') }}\" 
                       class=\"inline-flex items-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-md hover:bg-primary-accent/90 transition\">
                        <svg class=\"w-4 h-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.5v15m7.5-7.5h-15\" />
                        </svg>
                        Create New Room
                    </a>
                </div>
            </div>
        {% endif %}
        {# --- END ROOM CARD GRID --- #}
    </div>
{% endblock %}", "admin/roomlisting/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\roomlisting\\index.html.twig");
    }
}
