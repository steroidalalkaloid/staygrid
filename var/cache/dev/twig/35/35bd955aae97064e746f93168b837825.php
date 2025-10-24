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

/* admin/security/login.html.twig */
class __TwigTemplate_f9591ef3b3d809c94c321b8a1abe9518 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

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

        yield "Admin Login";
        
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
        yield "<div class=\"min-h-screen flex items-center justify-center bg-gray-100\">
    <div class=\"max-w-md w-full bg-white p-8 rounded-lg shadow-md\">
        <h2 class=\"text-center text-2xl font-bold mb-6 text-gray-800\">Admin Login</h2>

        ";
        // line 10
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\">
                <strong class=\"font-bold\">Error:</strong>
                <span class=\"block\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        // line 16
        yield "
        <form method=\"post\" action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_login");
        yield "\" class=\"space-y-4\">
            <div>
                <label for=\"username\" class=\"block text-sm font-medium text-gray-700\">Email</label>
                <input type=\"email\" name=\"_username\" id=\"username\" required
                       class=\"w-full p-3 border border-gray-300 rounded mt-1\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\">
            </div>

            <div>
                <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
                <input type=\"password\" name=\"_password\" id=\"password\" required
                       class=\"w-full p-3 border border-gray-300 rounded mt-1\">
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_authenticate"), "html", null, true);
        yield "\">

            <button type=\"submit\"
                    class=\"w-full bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded\">
                Sign In
            </button>
        </form>
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
        return "admin/security/login.html.twig";
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
        return array (  140 => 30,  128 => 21,  121 => 17,  118 => 16,  112 => 13,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Login{% endblock %}

{% block content %}
<div class=\"min-h-screen flex items-center justify-center bg-gray-100\">
    <div class=\"max-w-md w-full bg-white p-8 rounded-lg shadow-md\">
        <h2 class=\"text-center text-2xl font-bold mb-6 text-gray-800\">Admin Login</h2>

        {% if error %}
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4\">
                <strong class=\"font-bold\">Error:</strong>
                <span class=\"block\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
            </div>
        {% endif %}

        <form method=\"post\" action=\"{{ path('app_admin_login') }}\" class=\"space-y-4\">
            <div>
                <label for=\"username\" class=\"block text-sm font-medium text-gray-700\">Email</label>
                <input type=\"email\" name=\"_username\" id=\"username\" required
                       class=\"w-full p-3 border border-gray-300 rounded mt-1\" value=\"{{ last_username }}\">
            </div>

            <div>
                <label for=\"password\" class=\"block text-sm font-medium text-gray-700\">Password</label>
                <input type=\"password\" name=\"_password\" id=\"password\" required
                       class=\"w-full p-3 border border-gray-300 rounded mt-1\">
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('admin_authenticate') }}\">

            <button type=\"submit\"
                    class=\"w-full bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded\">
                Sign In
            </button>
        </form>
    </div>
</div>
{% endblock %}
", "admin/security/login.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\security\\login.html.twig");
    }
}
