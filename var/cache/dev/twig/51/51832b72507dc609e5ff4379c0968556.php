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

/* roomlisting/index.html.twig */
class __TwigTemplate_ac5a4caabece9f9f0233f64562fe51bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roomlisting/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roomlisting/index.html.twig"));

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

        yield "Room Listings Index";
        
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
        yield "<div class=\"max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 pt-24\">
    <div class=\"flex justify-between items-center mb-6\">
        <h1 class=\"text-3xl font-extrabold text-gray-900\">Room Listings</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roomlisting_new");
        yield "\" class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
            Create New Room
        </a>
    </div>

    ";
        // line 15
        yield "    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Category</th> ";
        // line 21
        yield "                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Number</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Price/Night</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Capacity</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Description</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Status</th>
                    <th scope=\"col\" class=\"relative px-6 py-3\"><span class=\"sr-only\">Actions</span></th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["room_listings"]) || array_key_exists("room_listings", $context) ? $context["room_listings"] : (function () { throw new RuntimeError('Variable "room_listings" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room_listing"]) {
            // line 31
            yield "                <tr>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "category", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "category", [], "any", false, false, false, 33), "N/A")) : ("N/A")), "html", null, true);
            yield "</td> ";
            // line 34
            yield "                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "number", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">\$";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "pricePerNight", [], "any", false, false, false, 35), 2, ".", ","), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "capacity", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                    <td class=\"px-6 py-4 text-sm text-gray-500 max-w-xs overflow-hidden truncate\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "description", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "description", [], "any", false, false, false, 37), "N/A")) : ("N/A")), "html", null, true);
            yield "</td> 
                    
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm\">
                        ";
            // line 40
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "isAvailable", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Available</span>
                        ";
            } else {
                // line 43
                yield "                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Not Available</span>
                        ";
            }
            // line 45
            yield "                    </td>
                    
                    <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2\">
                        <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roomlisting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"text-yellow-600 hover:text-yellow-800\">Edit</a>
                        
                        <form method=\"POST\" action=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roomlisting_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete room #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "number", [], "any", false, false, false, 50), "html", null, true);
            yield "?');\" class=\"inline-block ml-2\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["room_listing"], "id", [], "any", false, false, false, 51))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"text-red-600 hover:text-red-800 text-sm font-medium underline focus:outline-none bg-transparent border-none p-0 cursor-pointer\">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "                <tr>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\" colspan=\"8\">
                        No room listings found.
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room_listing'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "            </tbody>
        </table>
    </div>
    ";
        // line 69
        yield "
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
        return "roomlisting/index.html.twig";
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
        return array (  221 => 69,  216 => 65,  205 => 59,  203 => 58,  191 => 51,  185 => 50,  180 => 48,  175 => 45,  171 => 43,  167 => 41,  165 => 40,  159 => 37,  155 => 36,  151 => 35,  146 => 34,  143 => 33,  139 => 32,  136 => 31,  131 => 30,  120 => 21,  113 => 15,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Room Listings Index{% endblock %}

{% block content %}
<div class=\"max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 pt-24\">
    <div class=\"flex justify-between items-center mb-6\">
        <h1 class=\"text-3xl font-extrabold text-gray-900\">Room Listings</h1>
        <a href=\"{{ path('app_roomlisting_new') }}\" class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
            Create New Room
        </a>
    </div>

    {# --- START STYLED DATA TABLE --- #}
    <div class=\"shadow overflow-hidden border-b border-gray-200 sm:rounded-lg\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Category</th> {# NEW HEADER #}
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Number</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Price/Night</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Capacity</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Description</th>
                    <th scope=\"col\" class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Status</th>
                    <th scope=\"col\" class=\"relative px-6 py-3\"><span class=\"sr-only\">Actions</span></th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                {% for room_listing in room_listings %}
                <tr>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">{{ room_listing.id }}</td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ room_listing.category|default('N/A') }}</td> {# NEW DATA CELL #}
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ room_listing.number }}</td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">\${{ room_listing.pricePerNight|number_format(2, '.', ',') }}</td>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">{{ room_listing.capacity }}</td>
                    <td class=\"px-6 py-4 text-sm text-gray-500 max-w-xs overflow-hidden truncate\">{{ room_listing.description|default('N/A') }}</td> 
                    
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm\">
                        {% if room_listing.isAvailable %}
                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">Available</span>
                        {% else %}
                            <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">Not Available</span>
                        {% endif %}
                    </td>
                    
                    <td class=\"px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2\">
                        <a href=\"{{ path('app_roomlisting_edit', {'id': room_listing.id}) }}\" class=\"text-yellow-600 hover:text-yellow-800\">Edit</a>
                        
                        <form method=\"POST\" action=\"{{ path('app_roomlisting_delete', {'id': room_listing.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete room #{{ room_listing.number }}?');\" class=\"inline-block ml-2\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ room_listing.id) }}\">
                            <button type=\"submit\" class=\"text-red-600 hover:text-red-800 text-sm font-medium underline focus:outline-none bg-transparent border-none p-0 cursor-pointer\">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center\" colspan=\"8\">
                        No room listings found.
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    {# --- END STYLED DATA TABLE --- #}

</div>
{% endblock %}", "roomlisting/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\roomlisting\\index.html.twig");
    }
}
