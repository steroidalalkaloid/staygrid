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

/* crudroom/index.html.twig */
class __TwigTemplate_1f303155c5cd56b3b5dd06948d64fdea extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crudroom/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crudroom/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Rooms Inventory | StayGrid";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4 pt-3\">
        <h1 class=\"h2 text-dark\">ROOMS INVENTORY</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_new");
        yield "\" class=\"btn btn-primary shadow-lg\">
            ADD NEW ROOM
        </a>
    </div>

    ";
        // line 15
        yield "    <div class=\"card card-staygrid shadow mb-5\">
        <div class=\"card-header bg-dark text-white p-3\">
            <h5 class=\"mb-0\">Current Listings</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-striped\" width=\"100%\" cellspacing=\"0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">ID</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Number</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Capacity</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Price</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 34
            yield "                        <tr>
                            <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                            <td>**";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 36), "html", null, true);
            yield "**</td>
                            <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "capacity", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                            <td class=\"text-success\">\$";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 38), 2, ".", ","), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-dark me-1\">VIEW</a>
                                <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">EDIT</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 44
        if (!$context['_iterated']) {
            // line 45
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center p-4\">
                                <span class=\"text-danger fw-bold\">NO ROOMS FOUND.</span> Click 'Add New Room' to start inventory.
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                    </tbody>
                </table>
            </div>
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
        return "crudroom/index.html.twig";
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
        return array (  182 => 51,  171 => 45,  169 => 44,  161 => 41,  157 => 40,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  137 => 34,  131 => 33,  112 => 15,  104 => 9,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Extends the base layout #}
{% extends 'base.html.twig' %}

{% block title %}Rooms Inventory | StayGrid{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mb-4 pt-3\">
        <h1 class=\"h2 text-dark\">ROOMS INVENTORY</h1>
        <a href=\"{{ path('app_room_new') }}\" class=\"btn btn-primary shadow-lg\">
            ADD NEW ROOM
        </a>
    </div>

    {# The main data card uses the custom brutalist style #}
    <div class=\"card card-staygrid shadow mb-5\">
        <div class=\"card-header bg-dark text-white p-3\">
            <h5 class=\"mb-0\">Current Listings</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-striped\" width=\"100%\" cellspacing=\"0\">
                    <thead class=\"bg-light\">
                        <tr>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">ID</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Number</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Capacity</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Price</th>
                            <th class=\"text-uppercase\" style=\"color: var(--staygrid-primary-yellow);\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {# Loop through the 'rooms' variable from the controller #}
                    {% for room in rooms %}
                        <tr>
                            <td>{{ room.id }}</td>
                            <td>**{{ room.number }}**</td>
                            <td>{{ room.capacity }}</td>
                            <td class=\"text-success\">\${{ room.price|number_format(2, '.', ',') }}</td>
                            <td>
                                <a href=\"{{ path('app_room_show', {'id': room.id}) }}\" class=\"btn btn-sm btn-outline-dark me-1\">VIEW</a>
                                <a href=\"{{ path('app_room_edit', {'id': room.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">EDIT</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center p-4\">
                                <span class=\"text-danger fw-bold\">NO ROOMS FOUND.</span> Click 'Add New Room' to start inventory.
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "crudroom/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\crudroom\\index.html.twig");
    }
}
