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

/* roomlisting/show.html.twig */
class __TwigTemplate_118d6e0a0c533c40c71e2808ab81b84a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roomlisting/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roomlisting/show.html.twig"));

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

        yield "Room Details";
        
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
        yield "<div class=\"max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg\">
    ";
        // line 8
        yield "    <h1 class=\"text-3xl font-bold text-gray-900 mb-6\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        yield " (ID: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield ")</h1>

    <div class=\"space-y-4\">
        <p class=\"text-gray-700\">
            ";
        // line 13
        yield "            <strong class=\"font-semibold\">Status:</strong> 
            <span class=\"px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 15, $this->source); })()), "isAvailable", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "bg-green-100 text-green-800";
        } else {
            yield "bg-red-100 text-red-800";
        }
        yield "\">
                ";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 16, $this->source); })()), "isAvailable", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Available") : ("Booked"));
        yield "
            </span>
        </p>
        
        <p class=\"text-gray-700\">
            <strong class=\"font-semibold\">Description:</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "
        </p>

        <p class=\"text-gray-700\">
            ";
        // line 26
        yield "            <strong class=\"font-semibold\">Price:</strong> \$";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 26, $this->source); })()), "pricePerNight", [], "any", false, false, false, 26), 2, ".", ","), "html", null, true);
        yield " per night
        </p>

        <p class=\"text-gray-700\">
            <strong class=\"font-semibold\">Capacity:</strong> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 30, $this->source); })()), "capacity", [], "any", false, false, false, 30), "html", null, true);
        yield " guests
        </p>

        ";
        // line 34
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 34, $this->source); })()), "mainPhotoFilename", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "            <div class=\"mt-6\">
                <img src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 36, $this->source); })()), "mainPhotoFilename", [], "any", false, false, false, 36))), "html", null, true);
            yield "\" 
                     alt=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), "html", null, true);
            yield "\" 
                     class=\"rounded-lg shadow-md w-full max-h-96 object-cover\">
            </div>
        ";
        }
        // line 41
        yield "    </div>

    <div class=\"mt-8 flex space-x-4\">
        <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roomlisting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\"
           class=\"bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition\">
            Edit
        </a>
        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roomlisting_index");
        yield "\"
           class=\"bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg transition\">
            Back to list
        </a>
        ";
        // line 53
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "roomlisting/_delete_form.html.twig");
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
        return "roomlisting/show.html.twig";
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
        return array (  190 => 53,  183 => 48,  176 => 44,  171 => 41,  164 => 37,  160 => 36,  157 => 35,  154 => 34,  148 => 30,  140 => 26,  133 => 21,  125 => 16,  117 => 15,  113 => 13,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Room Details{% endblock %}

{% block content %}
<div class=\"max-w-4xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg\">
    {# FIX 1: Change 'room' to 'room_listing' and 'croom' to 'title' #}
    <h1 class=\"text-3xl font-bold text-gray-900 mb-6\">{{ room_listing.title }} (ID: {{ room_listing.id }})</h1>

    <div class=\"space-y-4\">
        <p class=\"text-gray-700\">
            {# FIX 2: Added 'isAvailable' status #}
            <strong class=\"font-semibold\">Status:</strong> 
            <span class=\"px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                {% if room_listing.isAvailable %}bg-green-100 text-green-800{% else %}bg-red-100 text-red-800{% endif %}\">
                {{ room_listing.isAvailable ? 'Available' : 'Booked' }}
            </span>
        </p>
        
        <p class=\"text-gray-700\">
            <strong class=\"font-semibold\">Description:</strong> {{ room_listing.description }}
        </p>

        <p class=\"text-gray-700\">
            {# FIX 3: Change 'room.price' to 'room_listing.pricePerNight' and format it #}
            <strong class=\"font-semibold\">Price:</strong> \${{ room_listing.pricePerNight|number_format(2, '.', ',') }} per night
        </p>

        <p class=\"text-gray-700\">
            <strong class=\"font-semibold\">Capacity:</strong> {{ room_listing.capacity }} guests
        </p>

        {# Use mainPhotoFilename (string) field to display the image #}
        {% if room_listing.mainPhotoFilename %}
            <div class=\"mt-6\">
                <img src=\"{{ asset('uploads/' ~ room_listing.mainPhotoFilename) }}\" 
                     alt=\"{{ room_listing.title }}\" 
                     class=\"rounded-lg shadow-md w-full max-h-96 object-cover\">
            </div>
        {% endif %}
    </div>

    <div class=\"mt-8 flex space-x-4\">
        <a href=\"{{ path('app_roomlisting_edit', {'id': room_listing.id}) }}\"
           class=\"bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition\">
            Edit
        </a>
        <a href=\"{{ path('app_roomlisting_index') }}\"
           class=\"bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg transition\">
            Back to list
        </a>
        {# Include the corrected delete form partial #}
        {{ include('roomlisting/_delete_form.html.twig') }} 
    </div>
</div>
{% endblock %}", "roomlisting/show.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\roomlisting\\show.html.twig");
    }
}
