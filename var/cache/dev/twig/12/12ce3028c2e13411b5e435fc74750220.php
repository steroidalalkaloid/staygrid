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

/* crudroom/new.html.twig */
class __TwigTemplate_7584dbc75606bcdeb6f85c353f86c7fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crudroom/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crudroom/new.html.twig"));

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

        yield "Create Room | StayGrid";
        
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
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4 pt-3\">
        <h1 class=\"h2 text-dark\">CREATE NEW ROOM LISTING</h1>
    </div>
    
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card card-staygrid shadow mb-5\">
                <div class=\"card-header bg-dark text-white p-3\">
                    <h5 class=\"mb-0\">Room Details</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 18
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
                        
                        ";
        // line 21
        yield "                        <div class=\"mb-3\">
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "number", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "fw-bold"]]);
        yield "
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "number", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control border-dark"]]);
        yield "
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "number", [], "any", false, false, false, 24), 'errors');
        yield "
                        </div>
                        
                        <div class=\"mb-3\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "capacity", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "fw-bold"]]);
        yield "
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "capacity", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control border-dark"]]);
        yield "
                            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "capacity", [], "any", false, false, false, 30), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "fw-bold"]]);
        yield "
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control border-dark"]]);
        yield "
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 'errors');
        yield "
                        </div>

                        ";
        // line 40
        yield "                        <div class=\"mb-4\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "fw-bold"]]);
        yield "
                            ";
        // line 43
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control border-dark", "rows" => 5]]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'errors');
        yield "
                        </div>
                        ";
        // line 47
        yield "
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_index");
        yield "\" class=\"btn btn-outline-dark\">BACK TO LIST</a>
                            <button class=\"btn btn-primary shadow-lg\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 50, $this->source); })()), "SAVE LISTING")) : ("SAVE LISTING")), "html", null, true);
        yield "</button>
                        </div>
                    ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
                </div>
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
        return "crudroom/new.html.twig";
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
        return array (  196 => 52,  191 => 50,  187 => 49,  183 => 47,  178 => 44,  173 => 43,  169 => 41,  166 => 40,  160 => 36,  156 => 35,  152 => 34,  145 => 30,  141 => 29,  137 => 28,  130 => 24,  126 => 23,  122 => 22,  119 => 21,  113 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Room | StayGrid{% endblock %}

{% block body %}
    <div class=\"d-flex justify-content-between align-items-center mb-4 pt-3\">
        <h1 class=\"h2 text-dark\">CREATE NEW ROOM LISTING</h1>
    </div>
    
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card card-staygrid shadow mb-5\">
                <div class=\"card-header bg-dark text-white p-3\">
                    <h5 class=\"mb-0\">Room Details</h5>
                </div>
                <div class=\"card-body\">
                    {# Form Start: 'form' is the variable passed from the controller #}
                    {{ form_start(form) }}
                        
                        {# Render fields individually for control, or use form_row(form) #}
                        <div class=\"mb-3\">
                            {{ form_label(form.number, null, {'label_attr': {'class': 'fw-bold'}}) }}
                            {{ form_widget(form.number, {'attr': {'class': 'form-control border-dark'}}) }}
                            {{ form_errors(form.number) }}
                        </div>
                        
                        <div class=\"mb-3\">
                            {{ form_label(form.capacity, null, {'label_attr': {'class': 'fw-bold'}}) }}
                            {{ form_widget(form.capacity, {'attr': {'class': 'form-control border-dark'}}) }}
                            {{ form_errors(form.capacity) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(form.price, null, {'label_attr': {'class': 'fw-bold'}}) }}
                            {{ form_widget(form.price, {'attr': {'class': 'form-control border-dark'}}) }}
                            {{ form_errors(form.price) }}
                        </div>

                        {# --- ADDED DESCRIPTION FIELD WITH ROWS ATTRIBUTE --- #}
                        <div class=\"mb-4\">
                            {{ form_label(form.description, null, {'label_attr': {'class': 'fw-bold'}}) }}
                            {# The 'rows': 5 attribute controls the height of the textarea #}
                            {{ form_widget(form.description, {'attr': {'class': 'form-control border-dark', 'rows': 5}}) }}
                            {{ form_errors(form.description) }}
                        </div>
                        {# -------------------------------------------------- #}

                        <div class=\"d-flex justify-content-between\">
                            <a href=\"{{ path('app_room_index') }}\" class=\"btn btn-outline-dark\">BACK TO LIST</a>
                            <button class=\"btn btn-primary shadow-lg\">{{ button_label|default('SAVE LISTING') }}</button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "crudroom/new.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\crudroom\\new.html.twig");
    }
}
