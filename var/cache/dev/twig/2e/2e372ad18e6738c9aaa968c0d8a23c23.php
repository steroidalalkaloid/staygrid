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

/* admin/base.html.twig */
class __TwigTemplate_a305ca6d1dd3a7222af4f5e994aa363d extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header_title' => [$this, 'block_header_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/staygrid16x16.png"), "html", null, true);
        yield "\"/>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        // Customizing Tailwind to use the Inter font and your new color palette
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        // Core Colors (Sidebar)
                        'dark-bg': '#1e293b',     // Sidebar: Slate-800
                        'dark-text': '#f1f5f9',    // Sidebar Text: Slate-100
                        
                        // New Accent Colors
                        'primary-accent': '#facc15', // Main Accent: Yellow-400 (Custom for branding)
                        'secondary-dark': '#111827', // Black/Deep Gray: Gray-900 (Used for text and titles)
                    }
                }
            }
        }
    </script>
    <style>
        /* Simple style to ensure font applies correctly */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Style for the icons from Heroicons - for a cleaner look */
        .icon {
            width: 1.25rem; /* 20px */
            height: 1.25rem; /* 20px */
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
        }
    </style>
    ";
        // line 45
        yield "    ";
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 46
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 47
        yield "</head>
<body class=\"bg-white text-gray-800 flex min-h-screen\">

    ";
        // line 51
        yield "    <aside class=\"w-64 bg-dark-bg text-dark-text shadow-xl z-20 transition-all duration-300 fixed min-h-screen\">
        <div class=\"p-6\">
            <h2 class=\"text-2xl font-extrabold text-white tracking-wider mb-8\">StayGrid<span class=\"text-primary-accent\">.</span></h2>
        </div>

        <nav class=\"flex flex-col px-4 pb-6 space-y-2\">
            ";
        // line 58
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_home");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59) == "app_admin_home")) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 12l8.954-8.955c.44-.439 1.144-.439 1.583 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125h2.25a1.125 1.125 0 001.125-1.125V13.5a1.125 1.125 0 011.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v6.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21H12M15.75 21H19.5\" />
                </svg>
                Dashboard
            </a>
            
            ";
        // line 67
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_index");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 68
        if (CoreExtension::inFilter("roomlisting", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", ["_route"], "method", false, false, false, 68))) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 14.25h18\" />
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 7.5a4.5 4.5 0 00-9 0v1.5a4.5 4.5 0 009 0V7.5z\" />
                </svg>
                Room Listings
            </a>
            
            ";
        // line 77
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_index");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 78
        if (CoreExtension::inFilter("users", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "request", [], "any", false, false, false, 78), "attributes", [], "any", false, false, false, 78), "get", ["_route"], "method", false, false, false, 78))) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM12 17.25a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z\" />
                </svg>
                Users
            </a>

            ";
        // line 86
        yield "            <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profile_edit");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 87
        if (CoreExtension::inFilter("profile", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "attributes", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87))) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75\" />
                </svg>
                Admin Profile
            </a>

            ";
        // line 95
        yield "           <div class=\"mt-4 border-t border-slate-700 pt-4\">
    <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_logout");
        yield "\"
       onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\"
       class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out text-primary-accent hover:bg-primary-accent/10 hover:text-white\">
        <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H6\" />
        </svg>
        Logout
    </a>

    <form id=\"logout-form\" action=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_logout");
        yield "\" method=\"POST\" class=\"hidden\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("logout"), "html", null, true);
        yield "\">
    </form>
</div>

        </nav>
    </aside>

    ";
        // line 114
        yield "    <main class=\"flex-1 ml-64\">
        
        ";
        // line 117
        yield "        <header class=\"bg-white shadow-md py-4 px-8 sticky top-0 z-10 flex justify-between items-center\">
            <h1 class=\"text-xl font-extrabold text-secondary-dark\">";
        // line 118
        yield from $this->unwrap()->yieldBlock('header_title', $context, $blocks);
        yield "</h1>

            ";
        // line 121
        yield "            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\"
                        placeholder=\"Search users, rooms, or reports...\"
                        class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-500 transition duration-150\"
                >
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        ";
        // line 133
        yield "        <div class=\"p-8\">
            ";
        // line 134
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 138
        yield "        </div>
    </main>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "StayGrid Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        yield "Dashboard Overview";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 134
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

        // line 135
        yield "                ";
        // line 136
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
        return "admin/base.html.twig";
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
        return array (  371 => 136,  369 => 135,  356 => 134,  333 => 118,  311 => 46,  289 => 45,  266 => 6,  251 => 138,  249 => 134,  246 => 133,  233 => 121,  228 => 118,  225 => 117,  221 => 114,  211 => 106,  207 => 105,  195 => 96,  192 => 95,  180 => 87,  175 => 86,  163 => 78,  158 => 77,  145 => 68,  140 => 67,  128 => 59,  123 => 58,  115 => 51,  110 => 47,  107 => 46,  104 => 45,  64 => 7,  60 => 6,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}StayGrid Admin{% endblock %}</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('icons/staygrid16x16.png') }}\"/>
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        // Customizing Tailwind to use the Inter font and your new color palette
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        // Core Colors (Sidebar)
                        'dark-bg': '#1e293b',     // Sidebar: Slate-800
                        'dark-text': '#f1f5f9',    // Sidebar Text: Slate-100
                        
                        // New Accent Colors
                        'primary-accent': '#facc15', // Main Accent: Yellow-400 (Custom for branding)
                        'secondary-dark': '#111827', // Black/Deep Gray: Gray-900 (Used for text and titles)
                    }
                }
            }
        }
    </script>
    <style>
        /* Simple style to ensure font applies correctly */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Style for the icons from Heroicons - for a cleaner look */
        .icon {
            width: 1.25rem; /* 20px */
            height: 1.25rem; /* 20px */
            display: inline-block;
            vertical-align: middle;
            margin-right: 0.5rem;
        }
    </style>
    {# Add any block for stylesheets or extra headers here #}
    {% block stylesheets %}{% endblock %}
    {% block javascripts %}{% endblock %}
</head>
<body class=\"bg-white text-gray-800 flex min-h-screen\">

    {# Sidebar Navigation #}
    <aside class=\"w-64 bg-dark-bg text-dark-text shadow-xl z-20 transition-all duration-300 fixed min-h-screen\">
        <div class=\"p-6\">
            <h2 class=\"text-2xl font-extrabold text-white tracking-wider mb-8\">StayGrid<span class=\"text-primary-accent\">.</span></h2>
        </div>

        <nav class=\"flex flex-col px-4 pb-6 space-y-2\">
            {# Dashboard Link #}
            <a href=\"{{ path('app_admin_home') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if app.request.attributes.get('_route') == 'app_admin_home' %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 12l8.954-8.955c.44-.439 1.144-.439 1.583 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125h2.25a1.125 1.125 0 001.125-1.125V13.5a1.125 1.125 0 011.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v6.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21H12M15.75 21H19.5\" />
                </svg>
                Dashboard
            </a>
            
            {# Room Listings Link #}
            <a href=\"{{ path('app_admin_roomlisting_index') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'roomlisting' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 14.25h18\" />
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 7.5a4.5 4.5 0 00-9 0v1.5a4.5 4.5 0 009 0V7.5z\" />
                </svg>
                Room Listings
            </a>
            
            {# Users Link #}
            <a href=\"{{ path('app_admin_users_index') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'users' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM12 17.25a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z\" />
                </svg>
                Users
            </a>

            {# NEW: Admin Profile/Settings Link #}
            <a href=\"{{ path('app_admin_profile_edit') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'profile' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75\" />
                </svg>
                Admin Profile
            </a>

            {# MOVED: Logout Button #}
           <div class=\"mt-4 border-t border-slate-700 pt-4\">
    <a href=\"{{ path('app_admin_logout') }}\"
       onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\"
       class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out text-primary-accent hover:bg-primary-accent/10 hover:text-white\">
        <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
          <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H6\" />
        </svg>
        Logout
    </a>

    <form id=\"logout-form\" action=\"{{ path('app_admin_logout') }}\" method=\"POST\" class=\"hidden\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('logout') }}\">
    </form>
</div>

        </nav>
    </aside>

    {# Main Content Area #}
    <main class=\"flex-1 ml-64\">
        
        {# Header / Top Bar #}
        <header class=\"bg-white shadow-md py-4 px-8 sticky top-0 z-10 flex justify-between items-center\">
            <h1 class=\"text-xl font-extrabold text-secondary-dark\">{% block header_title %}Dashboard Overview{% endblock %}</h1>

            {# Search Bar #}
            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\"
                        placeholder=\"Search users, rooms, or reports...\"
                        class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-500 transition duration-150\"
                >
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        {# Page Content Block #}
        <div class=\"p-8\">
            {% block body %}
                {# Default content for the dashboard/homepage #}
            
            {% endblock %}
        </div>
    </main>

</body>
</html>", "admin/base.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\base.html.twig");
    }
}
