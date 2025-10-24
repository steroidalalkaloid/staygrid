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

/* admin/roomlisting/edit.html.twig */
class __TwigTemplate_ea8b5a4aef73919afd2b283b2396df27 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/edit.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Room Listing - StayGrid Admin</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'dark-bg': '#1e293b',
                        'dark-text': '#f1f5f9',
                        'primary-accent': '#facc15',
                        'secondary-dark': '#111827',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .icon { width: 1.25rem; height: 1.25rem; display: inline-block; vertical-align: middle; margin-right: 0.5rem; }
    </style>
</head>
<body class=\"bg-white text-gray-800 flex min-h-screen\">

    ";
        // line 35
        yield "    <aside class=\"w-64 bg-dark-bg text-dark-text shadow-xl z-20 transition-all duration-300 fixed min-h-screen\">
        <div class=\"p-6\">
            <h2 class=\"text-2xl font-extrabold text-white tracking-wider mb-8\">StayGrid<span class=\"text-primary-accent\">.</span></h2>
        </div>

        <nav class=\"flex flex-col px-4 pb-6 space-y-2\">
            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_home");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42) == "app_admin_home")) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 12l8.954-8.955c.44-.439 1.144-.439 1.583 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125h2.25a1.125 1.125 0 001.125-1.125V13.5a1.125 1.125 0 011.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v6.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21H12M15.75 21H19.5\" />
                </svg>
                Dashboard
            </a>

            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_index");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 50
        if (CoreExtension::inFilter("roomlisting", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", ["_route"], "method", false, false, false, 50))) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 14.25h18\" />
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 7.5a4.5 4.5 0 00-9 0v1.5a4.5 4.5 0 009 0V7.5z\" />
                </svg>
                Room Listings
            </a>

            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_index");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 59
        if (CoreExtension::inFilter("users", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59))) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM12 17.25a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z\" />
                </svg>
                Users
            </a>

            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profile_edit");
        yield "\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        // line 67
        if (CoreExtension::inFilter("profile", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", ["_route"], "method", false, false, false, 67))) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75\" />
                </svg>
                Admin Profile
            </a>

            <div class=\"mt-4 border-t border-slate-700 pt-4\">
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_login");
        yield "\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out text-primary-accent hover:bg-primary-accent/10 hover:text-white\">
                    <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H6\" />
                    </svg>
                    Logout
                </a>
            </div>
        </nav>
    </aside>

    ";
        // line 87
        yield "    <main class=\"flex-1 ml-64\">
        ";
        // line 89
        yield "        <header class=\"bg-white shadow-md py-4 px-8 sticky top-0 z-10 flex justify-between items-center\">
            <h1 class=\"text-xl font-extrabold text-secondary-dark\">Edit Room Listing</h1>

            ";
        // line 93
        yield "            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\"
                       placeholder=\"Search users, rooms, or reports...\"
                       class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-500 transition duration-150\">
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        ";
        // line 104
        yield "        <div class=\"p-8\">
            <div class=\"max-w-3xl mx-auto py-10 px-6 bg-white shadow-lg rounded-xl mt-6\">
                <h1 class=\"text-3xl font-bold text-gray-800 mb-6 text-center\">Edit Room Listing</h1>

                ";
        // line 108
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/roomlisting/_form.html.twig", ["button_label" => "Update"]);
        yield "

                <div class=\"mt-6 flex justify-between items-center\">
                    <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_index");
        yield "\"
                       class=\"bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg transition\">
                        ← Back to List
                    </a>

                    ";
        // line 116
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/roomlisting/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </main>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/roomlisting/edit.html.twig";
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
        return array (  210 => 116,  202 => 111,  196 => 108,  190 => 104,  178 => 93,  173 => 89,  170 => 87,  156 => 75,  143 => 67,  139 => 66,  127 => 59,  123 => 58,  110 => 50,  106 => 49,  94 => 42,  90 => 41,  82 => 35,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/roomlisting/edit.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Room Listing - StayGrid Admin</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'dark-bg': '#1e293b',
                        'dark-text': '#f1f5f9',
                        'primary-accent': '#facc15',
                        'secondary-dark': '#111827',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .icon { width: 1.25rem; height: 1.25rem; display: inline-block; vertical-align: middle; margin-right: 0.5rem; }
    </style>
</head>
<body class=\"bg-white text-gray-800 flex min-h-screen\">

    {# Sidebar Navigation #}
    <aside class=\"w-64 bg-dark-bg text-dark-text shadow-xl z-20 transition-all duration-300 fixed min-h-screen\">
        <div class=\"p-6\">
            <h2 class=\"text-2xl font-extrabold text-white tracking-wider mb-8\">StayGrid<span class=\"text-primary-accent\">.</span></h2>
        </div>

        <nav class=\"flex flex-col px-4 pb-6 space-y-2\">
            <a href=\"{{ path('app_admin_home') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if app.request.attributes.get('_route') == 'app_admin_home' %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 12l8.954-8.955c.44-.439 1.144-.439 1.583 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125h2.25a1.125 1.125 0 001.125-1.125V13.5a1.125 1.125 0 011.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v6.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21H12M15.75 21H19.5\" />
                </svg>
                Dashboard
            </a>

            <a href=\"{{ path('app_admin_roomlisting_index') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'roomlisting' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 14.25h18\" />
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 7.5a4.5 4.5 0 00-9 0v1.5a4.5 4.5 0 009 0V7.5z\" />
                </svg>
                Room Listings
            </a>

            <a href=\"{{ path('app_admin_users_index') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'users' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM12 17.25a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z\" />
                </svg>
                Users
            </a>

            <a href=\"{{ path('app_admin_profile_edit') }}\"
               class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'profile' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75\" />
                </svg>
                Admin Profile
            </a>

            <div class=\"mt-4 border-t border-slate-700 pt-4\">
                <a href=\"{{ path('app_admin_login') }}\"
                   class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out text-primary-accent hover:bg-primary-accent/10 hover:text-white\">
                    <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                      <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H6\" />
                    </svg>
                    Logout
                </a>
            </div>
        </nav>
    </aside>

    {# Main Content Area #}
    <main class=\"flex-1 ml-64\">
        {# Header / Top Bar #}
        <header class=\"bg-white shadow-md py-4 px-8 sticky top-0 z-10 flex justify-between items-center\">
            <h1 class=\"text-xl font-extrabold text-secondary-dark\">Edit Room Listing</h1>

            {# Search Bar #}
            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\"
                       placeholder=\"Search users, rooms, or reports...\"
                       class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-500 transition duration-150\">
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        {# Page Content: Edit Form #}
        <div class=\"p-8\">
            <div class=\"max-w-3xl mx-auto py-10 px-6 bg-white shadow-lg rounded-xl mt-6\">
                <h1 class=\"text-3xl font-bold text-gray-800 mb-6 text-center\">Edit Room Listing</h1>

                {{ include('admin/roomlisting/_form.html.twig', {'button_label': 'Update'}) }}

                <div class=\"mt-6 flex justify-between items-center\">
                    <a href=\"{{ path('app_admin_roomlisting_index') }}\"
                       class=\"bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg transition\">
                        ← Back to List
                    </a>

                    {{ include('admin/roomlisting/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </main>

</body>
</html>
", "admin/roomlisting/edit.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\roomlisting\\edit.html.twig");
    }
}
