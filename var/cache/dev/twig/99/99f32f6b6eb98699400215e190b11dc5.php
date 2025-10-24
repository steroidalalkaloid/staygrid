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

/* admin/home.html.twig */
class __TwigTemplate_4db2deaabbebed4589ab0ea908172ded extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
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

    <!-- Sidebar Navigation -->
    <aside class=\"w-64 bg-dark-bg text-dark-text shadow-xl z-20 transition-all duration-300 fixed min-h-screen\">
        <div class=\"p-6\">
            <h2 class=\"text-2xl font-extrabold text-white tracking-wider mb-8\">StayGrid<span class=\"text-primary-accent\">.</span></h2>
        </div>

        <nav class=\"flex flex-col px-4 pb-6 space-y-2\">
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_home");
        yield "\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "attributes", [], "any", false, false, false, 38), "get", ["_route"], "method", false, false, false, 38) == "app_admin_home")) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 12l8.954-8.955c.44-.439 1.144-.439 1.583 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125h2.25a1.125 1.125 0 001.125-1.125V13.5a1.125 1.125 0 011.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v6.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21H12M15.75 21H19.5\" />
                </svg>
                Dashboard
            </a>

            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_index");
        yield "\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        if (CoreExtension::inFilter("roomlisting", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45))) {
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
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_index");
        yield "\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        if (CoreExtension::inFilter("users", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "get", ["_route"], "method", false, false, false, 53))) {
            yield "bg-primary-accent text-secondary-dark font-bold shadow-lg";
        }
        yield "\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM12 17.25a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z\" />
                </svg>
                Users
            </a>

            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profile_edit");
        yield "\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white ";
        if (CoreExtension::inFilter("profile", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60))) {
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
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_logout");
        yield "\" onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out text-primary-accent hover:bg-primary-accent/10 hover:text-white\">
                    <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H6\" />
                    </svg>
                    Logout
                </a>
                <form id=\"logout-form\" action=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_logout");
        yield "\" method=\"POST\" class=\"hidden\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("logout"), "html", null, true);
        yield "\">
                </form>
            </div>
        </nav>
    </aside>

    <!-- Main Content Area -->
    <main class=\"flex-1 ml-64\">
        <header class=\"bg-white shadow-md py-4 px-8 sticky top-0 z-10 flex justify-between items-center\">
            <h1 class=\"text-xl font-extrabold text-secondary-dark\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "</h1>
            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\" placeholder=\"Search users, rooms, or reports...\" class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-500 transition duration-150\">
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        <div class=\"p-8 bg-white min-h-screen text-gray-800\">
            <!-- Statistics Cards -->
            <div class=\"grid grid-cols-1 sm:grid-cols-4 gap-6 mb-8\">
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-blue-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Total Rooms</h2>
                    <p class=\"text-4xl font-bold mt-2 text-blue-500\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_rooms"]) || array_key_exists("total_rooms", $context) ? $context["total_rooms"] : (function () { throw new RuntimeError('Variable "total_rooms" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-green-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Available Rooms</h2>
                    <p class=\"text-4xl font-bold mt-2 text-green-500\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["available_rooms"]) || array_key_exists("available_rooms", $context) ? $context["available_rooms"] : (function () { throw new RuntimeError('Variable "available_rooms" does not exist.', 102, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-red-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Occupied Rooms</h2>
                    <p class=\"text-4xl font-bold mt-2 text-red-500\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["occupied_rooms"]) || array_key_exists("occupied_rooms", $context) ? $context["occupied_rooms"] : (function () { throw new RuntimeError('Variable "occupied_rooms" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-yellow-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Total Revenue</h2>
                    <p class=\"text-4xl font-bold mt-2 text-yellow-500\">\$";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 110, $this->source); })()), "html", null, true);
        yield "</p>
                </div>
            </div>

            <!-- Room Inventory Table -->
            <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300\">
                <h2 class=\"text-lg font-semibold text-gray-700 mb-4\">Room Inventory</h2>
                <table class=\"w-full table-auto border-collapse border border-gray-300\">
                    <thead class=\"bg-gray-100 text-gray-700\">
                        <tr>
                            <th class=\"border border-gray-300 px-4 py-2\">ID</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Number</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Category</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Status</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 128, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 129
            yield "                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"border border-gray-300 px-4 py-2\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
                                <td class=\"border border-gray-300 px-4 py-2\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                                <td class=\"border border-gray-300 px-4 py-2\">";
            // line 132
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["room"], "category", [], "any", false, false, false, 132)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "category", [], "any", false, false, false, 132), "html", null, true)) : ("N/A"));
            yield "</td>
                                <td class=\"border border-gray-300 px-4 py-2\">
                                    ";
            // line 134
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "isAvailable", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "                                        <span class=\"px-2 py-1 rounded bg-green-500 text-white\">Available</span>
                                    ";
            } else {
                // line 137
                yield "                                        <span class=\"px-2 py-1 rounded bg-red-500 text-white\">Occupied</span>
                                    ";
            }
            // line 139
            yield "                                </td>
                                <td class=\"border border-gray-300 px-4 py-2\">\$";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "pricePerNight", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 142
        if (!$context['_iterated']) {
            // line 143
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">No rooms found.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "                    </tbody>
                </table>
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
        return "admin/home.html.twig";
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
        return array (  284 => 147,  275 => 143,  273 => 142,  266 => 140,  263 => 139,  259 => 137,  255 => 135,  253 => 134,  248 => 132,  244 => 131,  240 => 130,  237 => 129,  232 => 128,  211 => 110,  204 => 106,  197 => 102,  190 => 98,  173 => 84,  161 => 75,  157 => 74,  148 => 68,  133 => 60,  119 => 53,  104 => 45,  90 => 38,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ page_title }}</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
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

    <!-- Sidebar Navigation -->
    <aside class=\"w-64 bg-dark-bg text-dark-text shadow-xl z-20 transition-all duration-300 fixed min-h-screen\">
        <div class=\"p-6\">
            <h2 class=\"text-2xl font-extrabold text-white tracking-wider mb-8\">StayGrid<span class=\"text-primary-accent\">.</span></h2>
        </div>

        <nav class=\"flex flex-col px-4 pb-6 space-y-2\">
            <a href=\"{{ path('app_admin_home') }}\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if app.request.attributes.get('_route') == 'app_admin_home' %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.25 12l8.954-8.955c.44-.439 1.144-.439 1.583 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125h2.25a1.125 1.125 0 001.125-1.125V13.5a1.125 1.125 0 011.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v6.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21H12M15.75 21H19.5\" />
                </svg>
                Dashboard
            </a>

            <a href=\"{{ path('app_admin_roomlisting_index') }}\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'roomlisting' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 14.25h18\" />
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M19.5 7.5a4.5 4.5 0 00-9 0v1.5a4.5 4.5 0 009 0V7.5z\" />
                </svg>
                Room Listings
            </a>

            <a href=\"{{ path('app_admin_users_index') }}\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'users' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM12 17.25a7.5 7.5 0 00-7.5 7.5h15a7.5 7.5 0 00-7.5-7.5z\" />
                </svg>
                Users
            </a>

            <a href=\"{{ path('app_admin_profile_edit') }}\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out hover:bg-slate-700/50 hover:text-white {% if 'profile' in app.request.attributes.get('_route') %}bg-primary-accent text-secondary-dark font-bold shadow-lg{% endif %}\">
                <svg class=\"icon\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\">
                  <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75\" />
                </svg>
                Admin Profile
            </a>

            <div class=\"mt-4 border-t border-slate-700 pt-4\">
                <a href=\"{{ path('app_admin_logout') }}\" onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\" class=\"flex items-center px-4 py-3 rounded-lg text-sm font-medium transition duration-150 ease-in-out text-primary-accent hover:bg-primary-accent/10 hover:text-white\">
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

    <!-- Main Content Area -->
    <main class=\"flex-1 ml-64\">
        <header class=\"bg-white shadow-md py-4 px-8 sticky top-0 z-10 flex justify-between items-center\">
            <h1 class=\"text-xl font-extrabold text-secondary-dark\">{{ page_title }}</h1>
            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\" placeholder=\"Search users, rooms, or reports...\" class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-500 transition duration-150\">
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        <div class=\"p-8 bg-white min-h-screen text-gray-800\">
            <!-- Statistics Cards -->
            <div class=\"grid grid-cols-1 sm:grid-cols-4 gap-6 mb-8\">
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-blue-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Total Rooms</h2>
                    <p class=\"text-4xl font-bold mt-2 text-blue-500\">{{ total_rooms }}</p>
                </div>
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-green-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Available Rooms</h2>
                    <p class=\"text-4xl font-bold mt-2 text-green-500\">{{ available_rooms }}</p>
                </div>
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-red-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Occupied Rooms</h2>
                    <p class=\"text-4xl font-bold mt-2 text-red-500\">{{ occupied_rooms }}</p>
                </div>
                <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300 hover:border-yellow-500 transition\">
                    <h2 class=\"text-lg font-semibold text-gray-700\">Total Revenue</h2>
                    <p class=\"text-4xl font-bold mt-2 text-yellow-500\">\${{ total_revenue }}</p>
                </div>
            </div>

            <!-- Room Inventory Table -->
            <div class=\"bg-white p-6 rounded-2xl shadow-lg border border-gray-300\">
                <h2 class=\"text-lg font-semibold text-gray-700 mb-4\">Room Inventory</h2>
                <table class=\"w-full table-auto border-collapse border border-gray-300\">
                    <thead class=\"bg-gray-100 text-gray-700\">
                        <tr>
                            <th class=\"border border-gray-300 px-4 py-2\">ID</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Number</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Category</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Status</th>
                            <th class=\"border border-gray-300 px-4 py-2\">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for room in rooms %}
                            <tr class=\"hover:bg-gray-50\">
                                <td class=\"border border-gray-300 px-4 py-2\">{{ room.id }}</td>
                                <td class=\"border border-gray-300 px-4 py-2\">{{ room.number }}</td>
                                <td class=\"border border-gray-300 px-4 py-2\">{{ room.category ?: 'N/A' }}</td>
                                <td class=\"border border-gray-300 px-4 py-2\">
                                    {% if room.isAvailable %}
                                        <span class=\"px-2 py-1 rounded bg-green-500 text-white\">Available</span>
                                    {% else %}
                                        <span class=\"px-2 py-1 rounded bg-red-500 text-white\">Occupied</span>
                                    {% endif %}
                                </td>
                                <td class=\"border border-gray-300 px-4 py-2\">\${{ room.pricePerNight }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center py-4\">No rooms found.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
", "admin/home.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\home.html.twig");
    }
}
