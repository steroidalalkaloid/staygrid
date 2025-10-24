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

/* admin/dashboard/dashboard.html.twig */
class __TwigTemplate_dec1118307f9a3543c9ed07d9192df24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/dashboard.html.twig"));

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

    <!-- Inventory Summary -->
    <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 mb-8\">
        <h2 class=\"text-lg font-semibold text-gray-300 mb-4\">Inventory Summary</h2>
        <ul class=\"mt-4 space-y-2 text-gray-300\">
            <li>🏠 Total Rooms: <span class=\"text-white font-semibold\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_rooms"]) || array_key_exists("total_rooms", $context) ? $context["total_rooms"] : (function () { throw new RuntimeError('Variable "total_rooms" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</span></li>
            <li>✅ Available: <span class=\"text-green-400 font-semibold\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["available_rooms"]) || array_key_exists("available_rooms", $context) ? $context["available_rooms"] : (function () { throw new RuntimeError('Variable "available_rooms" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</span></li>
            <li>❌ Occupied: <span class=\"text-red-400 font-semibold\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["occupied_rooms"]) || array_key_exists("occupied_rooms", $context) ? $context["occupied_rooms"] : (function () { throw new RuntimeError('Variable "occupied_rooms" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</span></li>
        </ul>
    </div>

    <!-- Room Inventory Table -->
    <h3 class=\"mt-8 mb-4 text-xl font-semibold\">Room Inventory</h3>
    <div class=\"overflow-x-auto\">
        <table class=\"min-w-full bg-slate-800 text-white rounded-xl overflow-hidden\">
            <thead class=\"bg-slate-700\">
                <tr>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">ID</th>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">Room Number</th>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">Status</th>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">Category</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 53
            yield "                    <tr class=\"border-b border-slate-600 hover:bg-slate-700\">
                        <td class=\"px-6 py-3\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-3\">
                            ";
            // line 57
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "isAvailable", [], "method", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                                <span class=\"bg-green-500 text-white px-2 py-1 rounded-full text-xs\">Available</span>
                            ";
            } else {
                // line 60
                yield "                                <span class=\"bg-red-500 text-white px-2 py-1 rounded-full text-xs\">Occupied</span>
                            ";
            }
            // line 62
            yield "                        </td>
                        <td class=\"px-6 py-3\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "category", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 65
        if (!$context['_iterated']) {
            // line 66
            yield "                    <tr>
                        <td colspan=\"4\" class=\"px-6 py-3 text-center\">No rooms found.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return "admin/dashboard/dashboard.html.twig";
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
        return array (  217 => 70,  208 => 66,  206 => 65,  199 => 63,  196 => 62,  192 => 60,  188 => 58,  186 => 57,  181 => 55,  177 => 54,  174 => 53,  169 => 52,  149 => 35,  145 => 34,  141 => 33,  130 => 25,  121 => 19,  112 => 13,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    <!-- Inventory Summary -->
    <div class=\"bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-700 mb-8\">
        <h2 class=\"text-lg font-semibold text-gray-300 mb-4\">Inventory Summary</h2>
        <ul class=\"mt-4 space-y-2 text-gray-300\">
            <li>🏠 Total Rooms: <span class=\"text-white font-semibold\">{{ total_rooms }}</span></li>
            <li>✅ Available: <span class=\"text-green-400 font-semibold\">{{ available_rooms }}</span></li>
            <li>❌ Occupied: <span class=\"text-red-400 font-semibold\">{{ occupied_rooms }}</span></li>
        </ul>
    </div>

    <!-- Room Inventory Table -->
    <h3 class=\"mt-8 mb-4 text-xl font-semibold\">Room Inventory</h3>
    <div class=\"overflow-x-auto\">
        <table class=\"min-w-full bg-slate-800 text-white rounded-xl overflow-hidden\">
            <thead class=\"bg-slate-700\">
                <tr>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">ID</th>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">Room Number</th>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">Status</th>
                    <th class=\"px-6 py-3 text-left text-sm font-medium\">Category</th>
                </tr>
            </thead>
            <tbody>
                {% for room in rooms %}
                    <tr class=\"border-b border-slate-600 hover:bg-slate-700\">
                        <td class=\"px-6 py-3\">{{ room.id }}</td>
                        <td class=\"px-6 py-3\">{{ room.number }}</td>
                        <td class=\"px-6 py-3\">
                            {% if room.isAvailable() %}
                                <span class=\"bg-green-500 text-white px-2 py-1 rounded-full text-xs\">Available</span>
                            {% else %}
                                <span class=\"bg-red-500 text-white px-2 py-1 rounded-full text-xs\">Occupied</span>
                            {% endif %}
                        </td>
                        <td class=\"px-6 py-3\">{{ room.category }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"px-6 py-3 text-center\">No rooms found.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "admin/dashboard/dashboard.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\dashboard\\dashboard.html.twig");
    }
}
