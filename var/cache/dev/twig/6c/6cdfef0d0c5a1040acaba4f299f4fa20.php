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

/* admin/admin_home/home.html.twig */
class __TwigTemplate_6a63167c03086a3e30dc701660007a88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_home/home.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"p-8 bg-slate-900 min-h-screen text-white\">
    <h1 class=\"text-3xl font-bold mb-6\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1>

    <div class=\"grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8\">
        <!-- Total Rooms -->
        <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 hover:border-blue-500 transition\">
            <h2 class=\"text-lg font-semibold text-gray-300\">Total Rooms</h2>
            <p class=\"text-4xl font-bold mt-2 text-blue-400\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_rooms"]) || array_key_exists("total_rooms", $context) ? $context["total_rooms"] : (function () { throw new RuntimeError('Variable "total_rooms" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</p>
        </div>

        <!-- Available Rooms -->
        <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 hover:border-green-500 transition\">
            <h2 class=\"text-lg font-semibold text-gray-300\">Available Rooms</h2>
            <p class=\"text-4xl font-bold mt-2 text-green-400\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["available_rooms"]) || array_key_exists("available_rooms", $context) ? $context["available_rooms"] : (function () { throw new RuntimeError('Variable "available_rooms" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</p>
        </div>

        <!-- Occupied Rooms -->
        <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 hover:border-red-500 transition\">
            <h2 class=\"text-lg font-semibold text-gray-300\">Occupied Rooms</h2>
            <p class=\"text-4xl font-bold mt-2 text-red-400\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["occupied_rooms"]) || array_key_exists("occupied_rooms", $context) ? $context["occupied_rooms"] : (function () { throw new RuntimeError('Variable "occupied_rooms" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</p>
        </div>
    </div>

    <!-- Inventory Table -->
    <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700\">
        <h2 class=\"text-lg font-semibold text-gray-300 mb-4\">Room Inventory</h2>
        <table class=\"w-full table-auto border-collapse border border-gray-700\">
            <thead class=\"bg-gray-700 text-gray-300\">
                <tr>
                    <th class=\"border border-gray-600 px-4 py-2\">ID</th>
                    <th class=\"border border-gray-600 px-4 py-2\">Number</th>
                    <th class=\"border border-gray-600 px-4 py-2\">Category</th>
                    <th class=\"border border-gray-600 px-4 py-2\">Status</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 43
            yield "                    <tr class=\"hover:bg-gray-700\">
                        <td class=\"border border-gray-600 px-4 py-2\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                        <td class=\"border border-gray-600 px-4 py-2\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                        <td class=\"border border-gray-600 px-4 py-2\">";
            // line 46
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["room"], "category", [], "any", false, false, false, 46)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "category", [], "any", false, false, false, 46), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td class=\"border border-gray-600 px-4 py-2\">
                            ";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "isAvailable", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                                <span class=\"px-2 py-1 rounded bg-green-500 text-white\">Available</span>
                            ";
            } else {
                // line 51
                yield "                                <span class=\"px-2 py-1 rounded bg-red-500 text-white\">Occupied</span>
                            ";
            }
            // line 53
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 55
        if (!$context['_iterated']) {
            // line 56
            yield "                    <tr>
                        <td colspan=\"4\" class=\"text-center py-4\">No rooms found.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "            </tbody>
        </table>
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
        return "admin/admin_home/home.html.twig";
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
        return array (  198 => 60,  189 => 56,  187 => 55,  181 => 53,  177 => 51,  173 => 49,  171 => 48,  166 => 46,  162 => 45,  158 => 44,  155 => 43,  150 => 42,  130 => 25,  121 => 19,  112 => 13,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ page_title }}{% endblock %}

{% block body %}
<div class=\"p-8 bg-slate-900 min-h-screen text-white\">
    <h1 class=\"text-3xl font-bold mb-6\">{{ page_title }}</h1>

    <div class=\"grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8\">
        <!-- Total Rooms -->
        <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 hover:border-blue-500 transition\">
            <h2 class=\"text-lg font-semibold text-gray-300\">Total Rooms</h2>
            <p class=\"text-4xl font-bold mt-2 text-blue-400\">{{ total_rooms }}</p>
        </div>

        <!-- Available Rooms -->
        <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 hover:border-green-500 transition\">
            <h2 class=\"text-lg font-semibold text-gray-300\">Available Rooms</h2>
            <p class=\"text-4xl font-bold mt-2 text-green-400\">{{ available_rooms }}</p>
        </div>

        <!-- Occupied Rooms -->
        <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 hover:border-red-500 transition\">
            <h2 class=\"text-lg font-semibold text-gray-300\">Occupied Rooms</h2>
            <p class=\"text-4xl font-bold mt-2 text-red-400\">{{ occupied_rooms }}</p>
        </div>
    </div>

    <!-- Inventory Table -->
    <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700\">
        <h2 class=\"text-lg font-semibold text-gray-300 mb-4\">Room Inventory</h2>
        <table class=\"w-full table-auto border-collapse border border-gray-700\">
            <thead class=\"bg-gray-700 text-gray-300\">
                <tr>
                    <th class=\"border border-gray-600 px-4 py-2\">ID</th>
                    <th class=\"border border-gray-600 px-4 py-2\">Number</th>
                    <th class=\"border border-gray-600 px-4 py-2\">Category</th>
                    <th class=\"border border-gray-600 px-4 py-2\">Status</th>
                </tr>
            </thead>
            <tbody>
                {% for room in rooms %}
                    <tr class=\"hover:bg-gray-700\">
                        <td class=\"border border-gray-600 px-4 py-2\">{{ room.id }}</td>
                        <td class=\"border border-gray-600 px-4 py-2\">{{ room.number }}</td>
                        <td class=\"border border-gray-600 px-4 py-2\">{{ room.category ?: 'N/A' }}</td>
                        <td class=\"border border-gray-600 px-4 py-2\">
                            {% if room.isAvailable %}
                                <span class=\"px-2 py-1 rounded bg-green-500 text-white\">Available</span>
                            {% else %}
                                <span class=\"px-2 py-1 rounded bg-red-500 text-white\">Occupied</span>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"text-center py-4\">No rooms found.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "admin/admin_home/home.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\admin_home\\home.html.twig");
    }
}
