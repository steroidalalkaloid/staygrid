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

/* registration/register.html.twig */
class __TwigTemplate_77d8ed23468830c95bfa8bec46c59c76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Sign Up with StayGrid";
        
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
        yield "<!-- 🌄 Background Section -->
<section class=\"min-h-screen flex flex-col items-center justify-start pt-20 bg-cover bg-center bg-no-repeat relative\"
         style=\"background-image: url('";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bgsign.png"), "html", null, true);
        yield "');\">

    <!-- Dark Overlay -->
    <div class=\"absolute inset-0 bg-black/40\"></div>
    <br><br><br><br>

    <!-- Header -->
    <div class=\"relative text-center text-white mb-6 z-10\">
        <h2 class=\"text-4xl font-extrabold mb-1\">
            Sign up with <span class=\"text-yellow-400\">StayGrid</span>
        </h2>
        <p class=\"text-gray-200 text-sm md:text-base\">
            Join thousands of guests experiencing comfort, innovation, and simplicity.
        </p>
    </div>

    <!-- Sign-Up Form -->
    <div class=\"relative bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-2xl w-full max-w-sm border border-white/30 z-10\">

        <h3 class=\"text-xl font-bold text-white mb-3 text-center\">Sign Up</h3>
        <p class=\"text-gray-200 text-center mb-5 text-sm\">
            Start your StayGrid journey today.
        </p>

        ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-4"]]);
        yield "

            <!-- Email -->
            <div>
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "text-gray-200 text-xs font-medium"], "label" => "Email Address"]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => "you@example.com", "class" => "mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition"]]);
        // line 42
        yield "
            </div>

            <!-- Password -->
            <div>
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "text-gray-200 text-xs font-medium"], "label" => "Password"]);
        yield "
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), 'widget', ["attr" => ["placeholder" => "Enter your password", "class" => "mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition"]]);
        // line 53
        yield "
            </div>

            <!-- Agree Terms -->
            <div class=\"flex items-center justify-center text-xs text-gray-200\">
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "agreeTerms", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "mr-2 h-4 w-4 text-yellow-500 focus:ring-yellow-400 border-gray-300 rounded"]]);
        // line 62
        yield "
                <label for=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "agreeTerms", [], "any", false, false, false, 63)), "html", null, true);
        yield "\">Agree to Terms</label>
            </div>

            <!-- Submit Button -->
            <button type=\"submit\"
                    class=\"w-full py-2.5 mt-3 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold rounded-md shadow-lg transition active:scale-95 text-sm\">
                Create Account
            </button>

        ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), 'form_end');
        yield "

        <!-- Login Link -->
        <p class=\"text-center text-gray-200 text-xs mt-4\">
            Already have an account?
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-yellow-400 hover:underline\">Sign in here</a>
        </p>
    </div>

    <!-- Footer Note -->
    <p class=\"text-gray-300 italic text-xs mt-6 z-10\">
        “Your StayGrid experience starts with one click — let comfort meet innovation.”
    </p>
</section>
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
        return "registration/register.html.twig";
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
        return array (  189 => 77,  181 => 72,  169 => 63,  166 => 62,  164 => 58,  157 => 53,  155 => 48,  151 => 47,  144 => 42,  142 => 37,  138 => 36,  131 => 32,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sign Up with StayGrid{% endblock %}

{% block content %}
<!-- 🌄 Background Section -->
<section class=\"min-h-screen flex flex-col items-center justify-start pt-20 bg-cover bg-center bg-no-repeat relative\"
         style=\"background-image: url('{{ asset('images/bgsign.png') }}');\">

    <!-- Dark Overlay -->
    <div class=\"absolute inset-0 bg-black/40\"></div>
    <br><br><br><br>

    <!-- Header -->
    <div class=\"relative text-center text-white mb-6 z-10\">
        <h2 class=\"text-4xl font-extrabold mb-1\">
            Sign up with <span class=\"text-yellow-400\">StayGrid</span>
        </h2>
        <p class=\"text-gray-200 text-sm md:text-base\">
            Join thousands of guests experiencing comfort, innovation, and simplicity.
        </p>
    </div>

    <!-- Sign-Up Form -->
    <div class=\"relative bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-2xl w-full max-w-sm border border-white/30 z-10\">

        <h3 class=\"text-xl font-bold text-white mb-3 text-center\">Sign Up</h3>
        <p class=\"text-gray-200 text-center mb-5 text-sm\">
            Start your StayGrid journey today.
        </p>

        {{ form_start(registrationForm, {'attr': {'class': 'space-y-4'}}) }}

            <!-- Email -->
            <div>
                {{ form_label(registrationForm.email, 'Email Address', {'label_attr': {'class': 'text-gray-200 text-xs font-medium'}}) }}
                {{ form_widget(registrationForm.email, {
                    'attr': {
                        'placeholder': 'you@example.com',
                        'class': 'mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition'
                    }
                }) }}
            </div>

            <!-- Password -->
            <div>
                {{ form_label(registrationForm.plainPassword, 'Password', {'label_attr': {'class': 'text-gray-200 text-xs font-medium'}}) }}
                {{ form_widget(registrationForm.plainPassword, {
                    'attr': {
                        'placeholder': 'Enter your password',
                        'class': 'mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition'
                    }
                }) }}
            </div>

            <!-- Agree Terms -->
            <div class=\"flex items-center justify-center text-xs text-gray-200\">
                {{ form_widget(registrationForm.agreeTerms, {
                    'attr': {
                        'class': 'mr-2 h-4 w-4 text-yellow-500 focus:ring-yellow-400 border-gray-300 rounded'
                    }
                }) }}
                <label for=\"{{ field_name(registrationForm.agreeTerms) }}\">Agree to Terms</label>
            </div>

            <!-- Submit Button -->
            <button type=\"submit\"
                    class=\"w-full py-2.5 mt-3 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold rounded-md shadow-lg transition active:scale-95 text-sm\">
                Create Account
            </button>

        {{ form_end(registrationForm) }}

        <!-- Login Link -->
        <p class=\"text-center text-gray-200 text-xs mt-4\">
            Already have an account?
            <a href=\"{{ path('app_login') }}\" class=\"text-yellow-400 hover:underline\">Sign in here</a>
        </p>
    </div>

    <!-- Footer Note -->
    <p class=\"text-gray-300 italic text-xs mt-6 z-10\">
        “Your StayGrid experience starts with one click — let comfort meet innovation.”
    </p>
</section>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\registration\\register.html.twig");
    }
}
