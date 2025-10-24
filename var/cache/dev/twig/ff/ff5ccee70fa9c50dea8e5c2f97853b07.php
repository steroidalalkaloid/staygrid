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

/* admin/users/index.html.twig */
class __TwigTemplate_ddbf770d071b179efdf339bbba14c510 extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

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

        yield "Active Users";
        
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
        yield "<div class=\"max-w-6xl mx-auto py-10\">
    <div class=\"flex justify-between items-center mb-6\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Active Users</h1>
    </div>

    <div class=\"overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Roles</th>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Verified</th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            yield "                    <tr>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 27), ", "), "html", null, true);
            yield "
                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm\">
                            ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", true, true, false, 30) && CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 30))) {
                // line 31
                yield "                                <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                    Verified
                                </span>
                            ";
            } else {
                // line 35
                yield "                                <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
                                    Pending
                                </span>
                            ";
            }
            // line 39
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "                    <tr>
                        <td colspan=\"4\" class=\"px-6 py-4 text-center text-gray-500\">
                            No users found.
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return "admin/users/index.html.twig";
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
        return array (  174 => 48,  163 => 42,  161 => 41,  155 => 39,  149 => 35,  143 => 31,  141 => 30,  135 => 27,  130 => 25,  126 => 24,  123 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Active Users{% endblock %}

{% block body %}
<div class=\"max-w-6xl mx-auto py-10\">
    <div class=\"flex justify-between items-center mb-6\">
        <h1 class=\"text-3xl font-bold text-gray-800\">Active Users</h1>
    </div>

    <div class=\"overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg\">
        <table class=\"min-w-full divide-y divide-gray-200\">
            <thead class=\"bg-gray-50\">
                <tr>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">ID</th>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Email</th>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Roles</th>
                    <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Verified</th>
                </tr>
            </thead>
            <tbody class=\"bg-white divide-y divide-gray-200\">
                {% for user in users %}
                    <tr>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">{{ user.id }}</td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-900\">{{ user.email }}</td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                            {{ user.roles|join(', ') }}
                        </td>
                        <td class=\"px-6 py-4 whitespace-nowrap text-sm\">
                            {% if user.isVerified is defined and user.isVerified %}
                                <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800\">
                                    Verified
                                </span>
                            {% else %}
                                <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800\">
                                    Pending
                                </span>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" class=\"px-6 py-4 text-center text-gray-500\">
                            No users found.
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "admin/users/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\users\\index.html.twig");
    }
}
