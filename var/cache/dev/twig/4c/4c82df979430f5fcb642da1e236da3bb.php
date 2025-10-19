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

/* security/login.html.twig */
class __TwigTemplate_1aa8c95c525c679f8c760e6bd45721ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Sign In to StayGrid";
        
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
        yield "<section class=\"min-h-screen flex flex-col items-center justify-start pt-20 bg-cover bg-center bg-no-repeat relative\"
         style=\"background-image: url('";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bgsign.png"), "html", null, true);
        yield "');\">

    <div class=\"absolute inset-0 bg-black/40\"></div>
 <br>
<br>
<br>
<br>


    <div class=\"relative text-center text-white mb-6 z-10\">
        <h2 class=\"text-4xl font-extrabold mb-1\">
            Sign in with <span class=\"text-yellow-400\">StayGrid</span>
        </h2>
        <p class=\"text-gray-200 text-sm md:text-base\">
            Experience comfort, innovation, and simplicity — every time you sign in.
        </p>
    </div>

    <div class=\"relative bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-2xl w-full max-w-sm border border-white/30 z-10\">

        <h3 class=\"text-xl font-bold text-white mb-3 text-center\">Sign In</h3>
        <p class=\"text-gray-200 text-center mb-5 text-sm\">
            Access your account to manage your bookings.
        </p>

        ";
        // line 32
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <div class=\"bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded mb-3 text-sm\">
                <strong class=\"font-bold\">Login Failed:</strong>
                ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageKey", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })()), "messageData", [], "any", false, false, false, 35), "security"), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 38
        yield "
        <form action=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" class=\"space-y-4\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
            <div>
                <label for=\"username\" class=\"text-gray-200 text-xs font-medium\">Email Address</label>
                <input id=\"username\" name=\"_username\" type=\"email\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "\"
                       required autocomplete=\"email\"
                       class=\"mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition\" 
                       placeholder=\"you@example.com\">
            </div>

            <div>
                <label for=\"password\" class=\"text-gray-200 text-xs font-medium\">Password</label>
                <input id=\"password\" name=\"_password\" type=\"password\"
                       required autocomplete=\"current-password\"
                       class=\"mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition\" 
                       placeholder=\"Enter your password\">
            </div>

            <div class=\"flex items-center justify-between text-xs\">
                <label class=\"flex items-center text-gray-200\">
                    <input type=\"checkbox\" name=\"_remember_me\" class=\"mr-1 rounded text-yellow-500 focus:ring-yellow-400\">
                    Remember me
                </label>
                <a href=\"#\" class=\"text-yellow-400 hover:underline\">Forgot password?</a>
            </div>

            <button type=\"submit\"
                    class=\"w-full py-2.5 mt-3 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold rounded-md shadow-lg transition active:scale-95 text-sm\">
                Sign In
            </button>

            <p class=\"text-center text-gray-200 text-xs mt-4\">
                Don’t have an account?
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-yellow-400 hover:underline\">Sign up here</a>
            </p>
        </form>
    </div>

    <p class=\"text-gray-300 italic text-xs mt-6 z-10\">
        “Over 10,000 guests trust StayGrid to make every stay seamless.”
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
        return "security/login.html.twig";
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
        return array (  188 => 72,  156 => 43,  150 => 40,  146 => 39,  143 => 38,  137 => 35,  133 => 33,  131 => 32,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sign In to StayGrid{% endblock %}

{% block content %}
<section class=\"min-h-screen flex flex-col items-center justify-start pt-20 bg-cover bg-center bg-no-repeat relative\"
         style=\"background-image: url('{{ asset('images/bgsign.png') }}');\">

    <div class=\"absolute inset-0 bg-black/40\"></div>
 <br>
<br>
<br>
<br>


    <div class=\"relative text-center text-white mb-6 z-10\">
        <h2 class=\"text-4xl font-extrabold mb-1\">
            Sign in with <span class=\"text-yellow-400\">StayGrid</span>
        </h2>
        <p class=\"text-gray-200 text-sm md:text-base\">
            Experience comfort, innovation, and simplicity — every time you sign in.
        </p>
    </div>

    <div class=\"relative bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-2xl w-full max-w-sm border border-white/30 z-10\">

        <h3 class=\"text-xl font-bold text-white mb-3 text-center\">Sign In</h3>
        <p class=\"text-gray-200 text-center mb-5 text-sm\">
            Access your account to manage your bookings.
        </p>

        {% if error %}
            <div class=\"bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded mb-3 text-sm\">
                <strong class=\"font-bold\">Login Failed:</strong>
                {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
        {% endif %}

        <form action=\"{{ path('app_login') }}\" method=\"post\" class=\"space-y-4\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <div>
                <label for=\"username\" class=\"text-gray-200 text-xs font-medium\">Email Address</label>
                <input id=\"username\" name=\"_username\" type=\"email\" value=\"{{ last_username }}\"
                       required autocomplete=\"email\"
                       class=\"mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition\" 
                       placeholder=\"you@example.com\">
            </div>

            <div>
                <label for=\"password\" class=\"text-gray-200 text-xs font-medium\">Password</label>
                <input id=\"password\" name=\"_password\" type=\"password\"
                       required autocomplete=\"current-password\"
                       class=\"mt-1 w-full px-3 py-2 rounded-md bg-white/80 text-gray-900 placeholder-gray-500 border border-gray-300 focus:ring-2 focus:ring-yellow-400 outline-none text-sm transition\" 
                       placeholder=\"Enter your password\">
            </div>

            <div class=\"flex items-center justify-between text-xs\">
                <label class=\"flex items-center text-gray-200\">
                    <input type=\"checkbox\" name=\"_remember_me\" class=\"mr-1 rounded text-yellow-500 focus:ring-yellow-400\">
                    Remember me
                </label>
                <a href=\"#\" class=\"text-yellow-400 hover:underline\">Forgot password?</a>
            </div>

            <button type=\"submit\"
                    class=\"w-full py-2.5 mt-3 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold rounded-md shadow-lg transition active:scale-95 text-sm\">
                Sign In
            </button>

            <p class=\"text-center text-gray-200 text-xs mt-4\">
                Don’t have an account?
                <a href=\"{{ path('app_register') }}\" class=\"text-yellow-400 hover:underline\">Sign up here</a>
            </p>
        </form>
    </div>

    <p class=\"text-gray-300 italic text-xs mt-6 z-10\">
        “Over 10,000 guests trust StayGrid to make every stay seamless.”
    </p>
</section>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\security\\login.html.twig");
    }
}
