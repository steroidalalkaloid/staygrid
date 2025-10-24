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
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/staygrid16x16.png"), "html", null, true);
        yield "\"/>
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
    <main class=\"flex-1 ml-64 bg-gray-50 min-h-screen p-6\">
        <!-- Header -->
        <header class=\"flex justify-between items-center mb-8 sticky top-0 z-10 bg-gray-50 py-4 px-6 shadow-sm rounded-md\">
            <h1 class=\"text-2xl font-bold text-gray-800\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 85, $this->source); })()), "html", null, true);
        yield "</h1>
            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\" placeholder=\"Search users, rooms, or reports...\" 
                    class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-400 transition duration-200\">
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        <!-- Stats Cards -->
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
            <!-- Total Rooms -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-blue-500 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Total Rooms</h3>
                <p class=\"text-3xl font-bold text-gray-800\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_rooms"]) || array_key_exists("total_rooms", $context) ? $context["total_rooms"] : (function () { throw new RuntimeError('Variable "total_rooms" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</p>
            </div>
            <!-- Available Rooms -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-green-500 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Available Rooms</h3>
                <p class=\"text-3xl font-bold text-gray-800\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["available_rooms"]) || array_key_exists("available_rooms", $context) ? $context["available_rooms"] : (function () { throw new RuntimeError('Variable "available_rooms" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</p>
            </div>
            <!-- Occupied Rooms -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-red-500 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Occupied Rooms</h3>
                <p class=\"text-3xl font-bold text-gray-800\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["occupied_rooms"]) || array_key_exists("occupied_rooms", $context) ? $context["occupied_rooms"] : (function () { throw new RuntimeError('Variable "occupied_rooms" does not exist.', 110, $this->source); })()), "html", null, true);
        yield "</p>
            </div>
            <!-- Total Revenue -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-yellow-400 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Total Revenue</h3>
                <p class=\"text-3xl font-bold text-gray-800\">\$";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_revenue"]) || array_key_exists("total_revenue", $context) ? $context["total_revenue"] : (function () { throw new RuntimeError('Variable "total_revenue" does not exist.', 115, $this->source); })()), "html", null, true);
        yield "</p>
            </div>
        </div>

        <!-- Bookings Chart -->
        <div class=\"bg-white rounded-xl shadow-lg p-6 mb-8\">
            <h2 class=\"text-gray-700 font-semibold mb-4\">Bookings per Room Category</h2>
            <canvas id=\"roomBookingChart\" class=\"w-full h-64 rounded-lg\"></canvas>
        </div>

        <!-- Room Inventory Table -->
        <div class=\"bg-white rounded-xl shadow-lg p-6 overflow-x-auto\">
            <h2 class=\"text-gray-700 font-semibold mb-4\">Room Inventory</h2>
            <table class=\"min-w-full table-auto border-collapse\">
                <thead class=\"bg-gray-100 sticky top-0 z-10\">
                    <tr>
                        <th class=\"px-4 py-2 text-left text-gray-600\">ID</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Number</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Category</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Status</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Price</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 139, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 140
            yield "                        ";
            $context["status"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "isBlocked", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Blocked") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "isAvailable", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Available") : ("Occupied"))));
            // line 141
            yield "                        ";
            $context["badgeColor"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "isBlocked", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-gray-300 text-gray-700") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "isAvailable", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-green-100 text-green-800") : ("bg-red-100 text-red-800"))));
            // line 142
            yield "                        <tr class=\"hover:bg-gray-50 transition-colors ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 142) % 2 == 0)) {
                yield "bg-gray-50";
            }
            yield "\">
                            <td class=\"px-4 py-2 text-gray-700\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 143), "html", null, true);
            yield "</td>
                            <td class=\"px-4 py-2 text-gray-700\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                            <td class=\"px-4 py-2 text-gray-700\">";
            // line 145
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["room"], "category", [], "any", false, false, false, 145)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "category", [], "any", false, false, false, 145), "html", null, true)) : ("N/A"));
            yield "</td>
                            <td class=\"px-4 py-2\">
                                <span class=\"inline-block px-3 py-1 rounded-full text-sm font-medium ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["badgeColor"]) || array_key_exists("badgeColor", $context) ? $context["badgeColor"] : (function () { throw new RuntimeError('Variable "badgeColor" does not exist.', 147, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 147, $this->source); })()), "html", null, true);
            yield "</span>
                            </td>
                            <td class=\"px-4 py-2 text-gray-700\">\$";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "pricePerNight", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 151
        if (!$context['_iterated']) {
            // line 152
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4 text-gray-500\">No rooms found.</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                </tbody>
            </table>
        </div>
    </main>

    <!-- Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const ctx = document.getElementById('roomBookingChart').getContext('2d');
        const roomBookingChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ";
        // line 168
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["bookingsStats"]) || array_key_exists("bookingsStats", $context) ? $context["bookingsStats"] : (function () { throw new RuntimeError('Variable "bookingsStats" does not exist.', 168, $this->source); })())));
        yield ",
                datasets: [{
                    label: 'Number of Bookings',
                    data: ";
        // line 171
        yield json_encode((isset($context["bookingsStats"]) || array_key_exists("bookingsStats", $context) ? $context["bookingsStats"] : (function () { throw new RuntimeError('Variable "bookingsStats" does not exist.', 171, $this->source); })()));
        yield ",
                    backgroundColor: [
                        '#facc15', '#34d399', '#3b82f6', '#f87171', '#a855f7', '#f43f5e'
                    ],
                    borderRadius: 6,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    y: { beginAtZero: true, ticks: { stepSize: 1 } }
                }
            }
        });
    </script>
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
        return array (  343 => 171,  337 => 168,  323 => 156,  314 => 152,  312 => 151,  297 => 149,  290 => 147,  285 => 145,  281 => 144,  277 => 143,  270 => 142,  267 => 141,  264 => 140,  246 => 139,  219 => 115,  211 => 110,  203 => 105,  195 => 100,  177 => 85,  164 => 75,  160 => 74,  151 => 68,  136 => 60,  122 => 53,  107 => 45,  93 => 38,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ page_title }}</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('icons/staygrid16x16.png') }}\"/>
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
    <main class=\"flex-1 ml-64 bg-gray-50 min-h-screen p-6\">
        <!-- Header -->
        <header class=\"flex justify-between items-center mb-8 sticky top-0 z-10 bg-gray-50 py-4 px-6 shadow-sm rounded-md\">
            <h1 class=\"text-2xl font-bold text-gray-800\">{{ page_title }}</h1>
            <div class=\"relative w-full max-w-sm\">
                <input type=\"text\" placeholder=\"Search users, rooms, or reports...\" 
                    class=\"w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent text-sm placeholder-gray-400 transition duration-200\">
                <svg class=\"absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
                </svg>
            </div>
        </header>

        <!-- Stats Cards -->
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8\">
            <!-- Total Rooms -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-blue-500 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Total Rooms</h3>
                <p class=\"text-3xl font-bold text-gray-800\">{{ total_rooms }}</p>
            </div>
            <!-- Available Rooms -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-green-500 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Available Rooms</h3>
                <p class=\"text-3xl font-bold text-gray-800\">{{ available_rooms }}</p>
            </div>
            <!-- Occupied Rooms -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-red-500 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Occupied Rooms</h3>
                <p class=\"text-3xl font-bold text-gray-800\">{{ occupied_rooms }}</p>
            </div>
            <!-- Total Revenue -->
            <div class=\"bg-white shadow-lg rounded-xl p-6 border-l-8 border-yellow-400 hover:shadow-2xl transition-all\">
                <h3 class=\"text-gray-500 font-medium mb-2\">Total Revenue</h3>
                <p class=\"text-3xl font-bold text-gray-800\">\${{ total_revenue }}</p>
            </div>
        </div>

        <!-- Bookings Chart -->
        <div class=\"bg-white rounded-xl shadow-lg p-6 mb-8\">
            <h2 class=\"text-gray-700 font-semibold mb-4\">Bookings per Room Category</h2>
            <canvas id=\"roomBookingChart\" class=\"w-full h-64 rounded-lg\"></canvas>
        </div>

        <!-- Room Inventory Table -->
        <div class=\"bg-white rounded-xl shadow-lg p-6 overflow-x-auto\">
            <h2 class=\"text-gray-700 font-semibold mb-4\">Room Inventory</h2>
            <table class=\"min-w-full table-auto border-collapse\">
                <thead class=\"bg-gray-100 sticky top-0 z-10\">
                    <tr>
                        <th class=\"px-4 py-2 text-left text-gray-600\">ID</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Number</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Category</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Status</th>
                        <th class=\"px-4 py-2 text-left text-gray-600\">Price</th>
                    </tr>
                </thead>
                <tbody>
                    {% for room in rooms %}
                        {% set status = room.isBlocked ? 'Blocked' : (room.isAvailable ? 'Available' : 'Occupied') %}
                        {% set badgeColor = room.isBlocked ? 'bg-gray-300 text-gray-700' : (room.isAvailable ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800') %}
                        <tr class=\"hover:bg-gray-50 transition-colors {% if loop.index0 is even %}bg-gray-50{% endif %}\">
                            <td class=\"px-4 py-2 text-gray-700\">{{ room.id }}</td>
                            <td class=\"px-4 py-2 text-gray-700\">{{ room.number }}</td>
                            <td class=\"px-4 py-2 text-gray-700\">{{ room.category ?: 'N/A' }}</td>
                            <td class=\"px-4 py-2\">
                                <span class=\"inline-block px-3 py-1 rounded-full text-sm font-medium {{ badgeColor }}\">{{ status }}</span>
                            </td>
                            <td class=\"px-4 py-2 text-gray-700\">\${{ room.pricePerNight }}</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center py-4 text-gray-500\">No rooms found.</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </main>

    <!-- Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const ctx = document.getElementById('roomBookingChart').getContext('2d');
        const roomBookingChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {{ bookingsStats|keys|json_encode|raw }},
                datasets: [{
                    label: 'Number of Bookings',
                    data: {{ bookingsStats|json_encode|raw }},
                    backgroundColor: [
                        '#facc15', '#34d399', '#3b82f6', '#f87171', '#a855f7', '#f43f5e'
                    ],
                    borderRadius: 6,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    y: { beginAtZero: true, ticks: { stepSize: 1 } }
                }
            }
        });
    </script>
</body>
</html>
", "admin/home.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\home.html.twig");
    }
}
