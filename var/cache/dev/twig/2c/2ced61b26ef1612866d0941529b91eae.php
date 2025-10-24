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

/* admin/roomlisting/index.html.twig */
class __TwigTemplate_98fb7f312a2adff316e8ad4550a31a4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/index.html.twig"));

        // line 3
        $context["primary_accent"] = "#facc15";
        // line 4
        $context["secondary_dark"] = "#111827";
        // line 1
        $this->parent = $this->load("admin/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        yield "Room Listings Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        yield "Room Listings";
        
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
        yield "<div class=\"max-w-7xl mx-auto\">

    <div class=\"flex justify-between items-center mb-8\">
        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_new");
        yield "\" 
           class=\"inline-flex items-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-md hover:bg-primary-accent/90 transition\">
            <svg class=\"w-4 h-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.5v15m7.5-7.5h-15\" />
            </svg>
            Create New Room
        </a>
    </div>

    ";
        // line 22
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["roomData"]) || array_key_exists("roomData", $context) ? $context["roomData"] : (function () { throw new RuntimeError('Variable "roomData" does not exist.', 22, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8\">
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["roomData"]) || array_key_exists("roomData", $context) ? $context["roomData"] : (function () { throw new RuntimeError('Variable "roomData" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 25
                yield "                ";
                $context["room_listing"] = CoreExtension::getAttribute($this->env, $this->source, $context["data"], "room", [], "any", false, false, false, 25);
                // line 26
                yield "                ";
                $context["currentBooking"] = CoreExtension::getAttribute($this->env, $this->source, $context["data"], "currentBooking", [], "any", false, false, false, 26);
                // line 27
                yield "                ";
                $context["durationDays"] = CoreExtension::getAttribute($this->env, $this->source, $context["data"], "durationDays", [], "any", false, false, false, 27);
                // line 28
                yield "                ";
                $context["durationHours"] = CoreExtension::getAttribute($this->env, $this->source, $context["data"], "durationHours", [], "any", false, false, false, 28);
                // line 29
                yield "
                <div class=\"bg-white shadow-xl rounded-xl overflow-hidden group transition duration-300 hover:shadow-2xl\">

                    <div class=\"relative h-48 bg-gray-100\">
                        ";
                // line 33
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 34
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/rooms/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34))), "html", null, true);
                    yield "\" 
                                 alt=\"Image of ";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["room_listing"] ?? null), "category", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 35, $this->source); })()), "category", [], "any", false, false, false, 35), "Room")) : ("Room")), "html", null, true);
                    yield " #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 35, $this->source); })()), "number", [], "any", false, false, false, 35), "html", null, true);
                    yield "\" 
                                 class=\"w-full h-full object-cover\">
                        ";
                } else {
                    // line 38
                    yield "                            <div class=\"w-full h-full flex items-center justify-center text-gray-400 border border-dashed border-gray-300\">
                                No Image Available
                            </div>
                        ";
                }
                // line 42
                yield "
                        ";
                // line 44
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 44, $this->source); })()), "isBlocked", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 45
                    yield "                            <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-yellow-500 text-white shadow-lg\">
                                Unavailable
                            </span>
                        ";
                } elseif ((($tmp =                 // line 48
(isset($context["currentBooking"]) || array_key_exists("currentBooking", $context) ? $context["currentBooking"] : (function () { throw new RuntimeError('Variable "currentBooking" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                            <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white shadow-lg\">
                                Occupied
                            </span>
                        ";
                } else {
                    // line 53
                    yield "                            <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white shadow-lg\">
                                Available
                            </span>
                        ";
                }
                // line 57
                yield "                    </div>

                    <div class=\"p-5 space-y-3\">
                        <div class=\"flex justify-between items-start\">
                            <h3 class=\"text-xl font-bold text-secondary-dark leading-tight\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["room_listing"] ?? null), "category", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 61, $this->source); })()), "category", [], "any", false, false, false, 61), "Room")) : ("Room")), "html", null, true);
                yield "</h3>
                            <p class=\"text-sm font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded-full border border-gray-200\">#";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 62, $this->source); })()), "number", [], "any", false, false, false, 62), "html", null, true);
                yield "</p>
                        </div>

                        <div class=\"text-lg font-extrabold text-primary-accent\">
                            \$";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 66, $this->source); })()), "pricePerNight", [], "any", false, false, false, 66), 2, ".", ","), "html", null, true);
                yield " 
                            <span class=\"text-sm font-medium text-gray-600\">/ night</span>
                        </div>

                        <p class=\"text-sm text-gray-500 line-clamp-2\" title=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["room_listing"] ?? null), "description", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "No description provided.")) : ("No description provided.")), "html", null, true);
                yield "\">
                            ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["room_listing"] ?? null), "description", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), "No description provided.")) : ("No description provided.")), "html", null, true);
                yield "
                        </p>

                        <div class=\"text-sm text-gray-600 pt-1\">
                            Max Guests: <span class=\"font-semibold\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 75, $this->source); })()), "capacity", [], "any", false, false, false, 75), "html", null, true);
                yield "</span>
                        </div>

                        ";
                // line 79
                yield "                        ";
                if ((($tmp = (isset($context["currentBooking"]) || array_key_exists("currentBooking", $context) ? $context["currentBooking"] : (function () { throw new RuntimeError('Variable "currentBooking" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 80
                    yield "                            <div class=\"border-t border-gray-200 pt-3 mt-3 text-sm text-gray-600\">
                                <p><span class=\"font-semibold\">Current Booking:</span> ";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentBooking"]) || array_key_exists("currentBooking", $context) ? $context["currentBooking"] : (function () { throw new RuntimeError('Variable "currentBooking" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81)), "html", null, true);
                    yield "</p>
                                <p><span class=\"font-semibold\">From:</span> ";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentBooking"]) || array_key_exists("currentBooking", $context) ? $context["currentBooking"] : (function () { throw new RuntimeError('Variable "currentBooking" does not exist.', 82, $this->source); })()), "startDate", [], "any", false, false, false, 82), "M d, Y H:i"), "html", null, true);
                    yield "</p>
                                <p><span class=\"font-semibold\">To:</span> ";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentBooking"]) || array_key_exists("currentBooking", $context) ? $context["currentBooking"] : (function () { throw new RuntimeError('Variable "currentBooking" does not exist.', 83, $this->source); })()), "endDate", [], "any", false, false, false, 83), "M d, Y H:i"), "html", null, true);
                    yield "</p>
                                <p><span class=\"font-semibold\">Duration:</span> ";
                    // line 84
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["durationDays"]) || array_key_exists("durationDays", $context) ? $context["durationDays"] : (function () { throw new RuntimeError('Variable "durationDays" does not exist.', 84, $this->source); })()), "html", null, true);
                    yield " days (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["durationHours"]) || array_key_exists("durationHours", $context) ? $context["durationHours"] : (function () { throw new RuntimeError('Variable "durationHours" does not exist.', 84, $this->source); })()), "html", null, true);
                    yield " hours)</p>
                            </div>
                        ";
                }
                // line 87
                yield "                    </div>

                    <div class=\"bg-gray-50 p-4 flex justify-between items-center border-t border-gray-100\">
                        <a href=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield "\" 
                           class=\"text-sm font-medium text-secondary-dark hover:text-primary-accent transition duration-150\">
                            Edit Details
                        </a>

                        <form method=\"POST\" action=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
                yield "\" 
                              onsubmit=\"return confirm('Confirm deletion of room #";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 96, $this->source); })()), "number", [], "any", false, false, false, 96), "html", null, true);
                yield "?');\" 
                              class=\"inline-block\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["room_listing"]) || array_key_exists("room_listing", $context) ? $context["room_listing"] : (function () { throw new RuntimeError('Variable "room_listing" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98))), "html", null, true);
                yield "\">
                            <button type=\"submit\" 
                                    class=\"text-sm font-medium text-red-600 hover:text-red-800 transition duration-150 underline bg-transparent border-none p-0 cursor-pointer\">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "        </div>
    ";
        } else {
            // line 109
            yield "        <div class=\"text-center py-16 bg-white shadow rounded-lg border border-gray-200\">
            <h3 class=\"mt-2 text-sm font-semibold text-gray-900\">No rooms listed</h3>
            <p class=\"mt-1 text-sm text-gray-500\">Get started by creating a new room listing.</p>
        </div>
    ";
        }
        // line 114
        yield "</div>
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
        return "admin/roomlisting/index.html.twig";
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
        return array (  334 => 114,  327 => 109,  323 => 107,  308 => 98,  303 => 96,  299 => 95,  291 => 90,  286 => 87,  278 => 84,  274 => 83,  270 => 82,  266 => 81,  263 => 80,  260 => 79,  254 => 75,  247 => 71,  243 => 70,  236 => 66,  229 => 62,  225 => 61,  219 => 57,  213 => 53,  207 => 49,  205 => 48,  200 => 45,  197 => 44,  194 => 42,  188 => 38,  180 => 35,  175 => 34,  173 => 33,  167 => 29,  164 => 28,  161 => 27,  158 => 26,  155 => 25,  151 => 24,  148 => 23,  146 => 22,  134 => 13,  129 => 10,  116 => 9,  93 => 7,  70 => 6,  59 => 1,  57 => 4,  55 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set primary_accent = '#facc15' %}
{% set secondary_dark = '#111827' %}

{% block title %}Room Listings Index{% endblock %}
{% block header_title %}Room Listings{% endblock %}

{% block body %}
<div class=\"max-w-7xl mx-auto\">

    <div class=\"flex justify-between items-center mb-8\">
        <a href=\"{{ path('app_admin_roomlisting_new') }}\" 
           class=\"inline-flex items-center rounded-lg border border-transparent bg-primary-accent py-2 px-6 text-sm font-bold text-secondary-dark shadow-md hover:bg-primary-accent/90 transition\">
            <svg class=\"w-4 h-4 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"2.5\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 4.5v15m7.5-7.5h-15\" />
            </svg>
            Create New Room
        </a>
    </div>

    {% if roomData is not empty %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8\">
            {% for data in roomData %}
                {% set room_listing = data.room %}
                {% set currentBooking = data.currentBooking %}
                {% set durationDays = data.durationDays %}
                {% set durationHours = data.durationHours %}

                <div class=\"bg-white shadow-xl rounded-xl overflow-hidden group transition duration-300 hover:shadow-2xl\">

                    <div class=\"relative h-48 bg-gray-100\">
                        {% if room_listing.image %}
                            <img src=\"{{ asset('uploads/rooms/' ~ room_listing.image) }}\" 
                                 alt=\"Image of {{ room_listing.category|default('Room') }} #{{ room_listing.number }}\" 
                                 class=\"w-full h-full object-cover\">
                        {% else %}
                            <div class=\"w-full h-full flex items-center justify-center text-gray-400 border border-dashed border-gray-300\">
                                No Image Available
                            </div>
                        {% endif %}

                        {# Room Status Logic #}
                        {% if room_listing.isBlocked %}
                            <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-yellow-500 text-white shadow-lg\">
                                Unavailable
                            </span>
                        {% elseif currentBooking %}
                            <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-red-500 text-white shadow-lg\">
                                Occupied
                            </span>
                        {% else %}
                            <span class=\"absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full bg-green-500 text-white shadow-lg\">
                                Available
                            </span>
                        {% endif %}
                    </div>

                    <div class=\"p-5 space-y-3\">
                        <div class=\"flex justify-between items-start\">
                            <h3 class=\"text-xl font-bold text-secondary-dark leading-tight\">{{ room_listing.category|default('Room') }}</h3>
                            <p class=\"text-sm font-semibold text-gray-500 bg-gray-100 px-2 py-1 rounded-full border border-gray-200\">#{{ room_listing.number }}</p>
                        </div>

                        <div class=\"text-lg font-extrabold text-primary-accent\">
                            \${{ room_listing.pricePerNight|number_format(2, '.', ',') }} 
                            <span class=\"text-sm font-medium text-gray-600\">/ night</span>
                        </div>

                        <p class=\"text-sm text-gray-500 line-clamp-2\" title=\"{{ room_listing.description|default('No description provided.') }}\">
                            {{ room_listing.description|default('No description provided.') }}
                        </p>

                        <div class=\"text-sm text-gray-600 pt-1\">
                            Max Guests: <span class=\"font-semibold\">{{ room_listing.capacity }}</span>
                        </div>

                        {# Booking Duration Info #}
                        {% if currentBooking %}
                            <div class=\"border-t border-gray-200 pt-3 mt-3 text-sm text-gray-600\">
                                <p><span class=\"font-semibold\">Current Booking:</span> {{ currentBooking.status|capitalize }}</p>
                                <p><span class=\"font-semibold\">From:</span> {{ currentBooking.startDate|date('M d, Y H:i') }}</p>
                                <p><span class=\"font-semibold\">To:</span> {{ currentBooking.endDate|date('M d, Y H:i') }}</p>
                                <p><span class=\"font-semibold\">Duration:</span> {{ durationDays }} days ({{ durationHours }} hours)</p>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"bg-gray-50 p-4 flex justify-between items-center border-t border-gray-100\">
                        <a href=\"{{ path('app_admin_roomlisting_edit', {'id': room_listing.id}) }}\" 
                           class=\"text-sm font-medium text-secondary-dark hover:text-primary-accent transition duration-150\">
                            Edit Details
                        </a>

                        <form method=\"POST\" action=\"{{ path('app_admin_roomlisting_delete', {'id': room_listing.id}) }}\" 
                              onsubmit=\"return confirm('Confirm deletion of room #{{ room_listing.number }}?');\" 
                              class=\"inline-block\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ room_listing.id) }}\">
                            <button type=\"submit\" 
                                    class=\"text-sm font-medium text-red-600 hover:text-red-800 transition duration-150 underline bg-transparent border-none p-0 cursor-pointer\">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"text-center py-16 bg-white shadow rounded-lg border border-gray-200\">
            <h3 class=\"mt-2 text-sm font-semibold text-gray-900\">No rooms listed</h3>
            <p class=\"mt-1 text-sm text-gray-500\">Get started by creating a new room listing.</p>
        </div>
    {% endif %}
</div>
{% endblock %}
", "admin/roomlisting/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\roomlisting\\index.html.twig");
    }
}
