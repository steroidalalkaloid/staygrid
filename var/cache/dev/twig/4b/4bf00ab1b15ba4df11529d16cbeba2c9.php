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

/* admin/profile/edit.html.twig */
class __TwigTemplate_ab9aa8d0d557b4f14168d353ee5220ca extends Template
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
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/edit.html.twig"));

        // line 6
        $context["primary_accent"] = "#facc15";
        // line 7
        $context["secondary_dark"] = "#111827";
        // line 1
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

        yield "Admin Profile Settings";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield "Admin Profile Settings";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "
    ";
        // line 12
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-8", "id" => "admin-profile-form"]]);
        // line 14
        yield "

    ";
        // line 17
        yield "    <div class=\"sticky top-16 z-10 bg-gray-50 pt-4 pb-4 border-b border-gray-200\">
        <div class=\"flex justify-between items-center max-w-4xl mx-auto px-4 sm:px-0\">
            <h1 class=\"text-2xl font-bold text-secondary-dark\">Profile Settings</h1>
            <button type=\"submit\" 
                    class=\"inline-flex justify-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-lg hover:bg-primary-accent/90 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:ring-offset-2 transition\">
                Save Changes
            </button>
        </div>
    </div>

    <div class=\"max-w-4xl mx-auto py-4\">

        ";
        // line 30
        yield "        ";
        // line 31
        yield "        ";
        // line 32
        yield "        <div class=\"bg-white shadow-xl overflow-hidden rounded-xl\">
            <div class=\"px-6 py-5 border-b border-gray-100\">
                <h2 class=\"text-xl font-bold text-secondary-dark\">Account Information</h2>
                <p class=\"text-sm text-gray-500 mt-1\">Manage your admin login email.</p>
            </div>
            
            <div class=\"p-6 space-y-6\">
                ";
        // line 40
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start\">
                    <label for=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-secondary-dark sm:mt-2\">
                        ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "label", [], "any", false, false, false, 42), "html", null, true);
        yield "
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0 max-w-md\">
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm"]]);
        // line 49
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        yield "
                        <p class=\"mt-2 text-xs text-gray-500\">This is the email address you use to sign in.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"mt-10\"></div>

        ";
        // line 60
        yield "        ";
        // line 61
        yield "        ";
        // line 62
        yield "        <div class=\"bg-white shadow-xl overflow-hidden rounded-xl\">
            <div class=\"px-6 py-5 border-b border-gray-100\">
                <h2 class=\"text-xl font-bold text-secondary-dark\">Password Management</h2>
                <p class=\"text-sm text-gray-500 mt-1\">Use a minimum of 8 characters with a mix of letters and numbers.</p>
            </div>

            <div class=\"p-6 space-y-6\">
                ";
        // line 70
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start\">
                    <label class=\"block text-sm font-medium text-secondary-dark sm:mt-2\">
                        New Password
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0 max-w-md space-y-4\">

                        ";
        // line 77
        yield "                        <div>
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 78, $this->source); })()), "plainPassword", [], "any", false, false, false, 78), "first", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_profile.plainPassword.first.placeholder")]]);
        // line 83
        yield "
                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), "first", [], "any", false, false, false, 84), 'errors');
        yield "
                        </div>

                        ";
        // line 88
        yield "                        <div>
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 89, $this->source); })()), "plainPassword", [], "any", false, false, false, 89), "second", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin_profile.plainPassword.second.placeholder")]]);
        // line 94
        yield "
                            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 95, $this->source); })()), "plainPassword", [], "any", false, false, false, 95), "second", [], "any", false, false, false, 95), 'errors');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 104
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 104, $this->source); })()), 'rest');
        yield "

    ";
        // line 106
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profileForm"]) || array_key_exists("profileForm", $context) ? $context["profileForm"] : (function () { throw new RuntimeError('Variable "profileForm" does not exist.', 106, $this->source); })()), 'form_end');
        yield "
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
        return "admin/profile/edit.html.twig";
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
        return array (  256 => 106,  250 => 104,  239 => 95,  236 => 94,  234 => 89,  231 => 88,  225 => 84,  222 => 83,  220 => 78,  217 => 77,  209 => 70,  200 => 62,  198 => 61,  196 => 60,  184 => 50,  181 => 49,  179 => 45,  173 => 42,  169 => 41,  166 => 40,  157 => 32,  155 => 31,  153 => 30,  139 => 17,  135 => 14,  132 => 12,  129 => 10,  116 => 9,  93 => 4,  70 => 3,  59 => 1,  57 => 7,  55 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title %}Admin Profile Settings{% endblock %}
{% block header_title %}Admin Profile Settings{% endblock %}

{% set primary_accent = '#facc15' %}
{% set secondary_dark = '#111827' %}

{% block body %}

    {# Form Start with CSRF protection #}
    {{ form_start(profileForm, {
        'attr': {'class': 'space-y-8', 'id': 'admin-profile-form'}
    }) }}

    {# Sticky Header/Save Button Area #}
    <div class=\"sticky top-16 z-10 bg-gray-50 pt-4 pb-4 border-b border-gray-200\">
        <div class=\"flex justify-between items-center max-w-4xl mx-auto px-4 sm:px-0\">
            <h1 class=\"text-2xl font-bold text-secondary-dark\">Profile Settings</h1>
            <button type=\"submit\" 
                    class=\"inline-flex justify-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-lg hover:bg-primary-accent/90 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:ring-offset-2 transition\">
                Save Changes
            </button>
        </div>
    </div>

    <div class=\"max-w-4xl mx-auto py-4\">

        {# ------------------------------------ #}
        {# PANEL 1: ACCOUNT DETAILS #}
        {# ------------------------------------ #}
        <div class=\"bg-white shadow-xl overflow-hidden rounded-xl\">
            <div class=\"px-6 py-5 border-b border-gray-100\">
                <h2 class=\"text-xl font-bold text-secondary-dark\">Account Information</h2>
                <p class=\"text-sm text-gray-500 mt-1\">Manage your admin login email.</p>
            </div>
            
            <div class=\"p-6 space-y-6\">
                {# Email Field #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start\">
                    <label for=\"{{ profileForm.email.vars.id }}\" class=\"block text-sm font-medium text-secondary-dark sm:mt-2\">
                        {{ profileForm.email.vars.label }}
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0 max-w-md\">
                        {{ form_widget(profileForm.email, {
                            'attr': {
                                'class': 'block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm'
                            }
                        }) }}
                        {{ form_errors(profileForm.email) }}
                        <p class=\"mt-2 text-xs text-gray-500\">This is the email address you use to sign in.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"mt-10\"></div>

        {# ------------------------------------ #}
        {# PANEL 2: PASSWORD CHANGE #}
        {# ------------------------------------ #}
        <div class=\"bg-white shadow-xl overflow-hidden rounded-xl\">
            <div class=\"px-6 py-5 border-b border-gray-100\">
                <h2 class=\"text-xl font-bold text-secondary-dark\">Password Management</h2>
                <p class=\"text-sm text-gray-500 mt-1\">Use a minimum of 8 characters with a mix of letters and numbers.</p>
            </div>

            <div class=\"p-6 space-y-6\">
                {# Password fields container #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start\">
                    <label class=\"block text-sm font-medium text-secondary-dark sm:mt-2\">
                        New Password
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0 max-w-md space-y-4\">

                        {# First password input with translation placeholder #}
                        <div>
                            {{ form_widget(profileForm.plainPassword.first, {
                                'attr': {
                                    'class': 'block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm',
                                    'placeholder': 'admin_profile.plainPassword.first.placeholder'|trans
                                }
                            }) }}
                            {{ form_errors(profileForm.plainPassword.first) }}
                        </div>

                        {# Second password input with translation placeholder #}
                        <div>
                            {{ form_widget(profileForm.plainPassword.second, {
                                'attr': {
                                    'class': 'block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm',
                                    'placeholder': 'admin_profile.plainPassword.second.placeholder'|trans
                                }
                            }) }}
                            {{ form_errors(profileForm.plainPassword.second) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Render remaining hidden fields including CSRF token #}
    {{ form_rest(profileForm) }}

    {{ form_end(profileForm) }}
{% endblock %}
", "admin/profile/edit.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\profile\\edit.html.twig");
    }
}
