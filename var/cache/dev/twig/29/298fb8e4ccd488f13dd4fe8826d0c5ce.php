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

/* admin/roomlisting/show.html.twig */
class __TwigTemplate_8c13d30a4935de11c3a74fc087a24a1c extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/show.html.twig"));

        $this->parent = $this->load("admin/base.html.twig", 1);
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

        yield "Room ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 3, $this->source); })()), "number", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8 pt-24\">
    <div class=\"bg-white shadow overflow-hidden sm:rounded-lg\">
        <div class=\"px-4 py-5 sm:px-6\">
            <h3 class=\"text-2xl leading-6 font-medium text-gray-900\">
                Room Listing Details
            </h3>
            <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                Detailed information for Room Number: **";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 13, $this->source); })()), "number", [], "any", false, false, false, 13), "html", null, true);
        yield "**
            </p>
        </div>
        <div class=\"border-t border-gray-200\">
            <dl>
                ";
        // line 19
        yield "                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">ID</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "</dd>
                </div>
                
                ";
        // line 25
        yield "                <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Category</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["room_listing"] ?? null), "category", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 27, $this->source); })()), "category", [], "any", false, false, false, 27), "N/A")) : ("N/A")), "html", null, true);
        yield "</dd>
                </div>
                
                ";
        // line 31
        yield "                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Room Number/Code</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 33, $this->source); })()), "number", [], "any", false, false, false, 33), "html", null, true);
        yield "</dd>
                </div>
                
                ";
        // line 37
        yield "                <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Price Per Night</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                        \$";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 40, $this->source); })()), "pricePerNight", [], "any", false, false, false, 40), 2, ".", ","), "html", null, true);
        yield "
                    </dd>
                </div>
                
                ";
        // line 45
        yield "                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Max Capacity</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 47, $this->source); })()), "capacity", [], "any", false, false, false, 47), "html", null, true);
        yield " Guests</dd>
                </div>
                
                ";
        // line 51
        yield "                <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Availability Status</dt>
                    <dd class=\"mt-1 text-sm sm:mt-0 sm:col-span-2\">
                        ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 54, $this->source); })()), "isAvailable", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Available</span>
                        ";
        } else {
            // line 57
            yield "                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Not Available</span>
                        ";
        }
        // line 59
        yield "                    </dd>
                </div>

                ";
        // line 63
        yield "                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Description</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 whitespace-pre-wrap\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["room_listing"] ?? null), "description", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), "No description provided.")) : ("No description provided.")), "html", null, true);
        yield "</dd>
                </div>
                
            </dl>
        </div>
    </div>

    <div class=\"mt-6 flex space-x-4\">
        <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" 
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition\">
            Edit
        </a>
        
        ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/roomlisting/_delete_form.html.twig");
        yield "

        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_index");
        yield "\" 
           class=\"inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition\">
            Back to list
        </a>
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
        return "admin/roomlisting/show.html.twig";
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
        return array (  218 => 80,  213 => 78,  205 => 73,  194 => 65,  190 => 63,  185 => 59,  181 => 57,  177 => 55,  175 => 54,  170 => 51,  164 => 47,  160 => 45,  153 => 40,  148 => 37,  142 => 33,  138 => 31,  132 => 27,  128 => 25,  122 => 21,  118 => 19,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Room {{ room_listing.number }}{% endblock %}

{% block content %}
<div class=\"max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8 pt-24\">
    <div class=\"bg-white shadow overflow-hidden sm:rounded-lg\">
        <div class=\"px-4 py-5 sm:px-6\">
            <h3 class=\"text-2xl leading-6 font-medium text-gray-900\">
                Room Listing Details
            </h3>
            <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                Detailed information for Room Number: **{{ room_listing.number }}**
            </p>
        </div>
        <div class=\"border-t border-gray-200\">
            <dl>
                {# ID #}
                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">ID</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">{{ room_listing.id }}</dd>
                </div>
                
                {# NEW: Room Category #}
                <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Category</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">{{ room_listing.category|default('N/A') }}</dd>
                </div>
                
                {# Room Number/Code #}
                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Room Number/Code</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">{{ room_listing.number }}</dd>
                </div>
                
                {# Price Per Night #}
                <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Price Per Night</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">
                        \${{ room_listing.pricePerNight|number_format(2, '.', ',') }}
                    </dd>
                </div>
                
                {# Max Capacity #}
                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Max Capacity</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2\">{{ room_listing.capacity }} Guests</dd>
                </div>
                
                {# Availability Status #}
                <div class=\"bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Availability Status</dt>
                    <dd class=\"mt-1 text-sm sm:mt-0 sm:col-span-2\">
                        {% if room_listing.isAvailable %}
                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Available</span>
                        {% else %}
                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Not Available</span>
                        {% endif %}
                    </dd>
                </div>

                {# Description #}
                <div class=\"bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6\">
                    <dt class=\"text-sm font-medium text-gray-500\">Description</dt>
                    <dd class=\"mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 whitespace-pre-wrap\">{{ room_listing.description|default('No description provided.') }}</dd>
                </div>
                
            </dl>
        </div>
    </div>

    <div class=\"mt-6 flex space-x-4\">
        <a href=\"{{ path('app_admin_roomlisting_edit', {'id': room_listing.id}) }}\" 
           class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-yellow-500 hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition\">
            Edit
        </a>
        
        {{ include('admin/roomlisting/_delete_form.html.twig') }}

        <a href=\"{{ path('app_admin_roomlisting_index') }}\" 
           class=\"inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition\">
            Back to list
        </a>
    </div>
</div>
{% endblock %}", "admin/roomlisting/show.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\roomlisting\\show.html.twig");
    }
}
