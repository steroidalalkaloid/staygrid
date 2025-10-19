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

/* landing/roomlisting.html.twig */
class __TwigTemplate_312ae536eceda2aa761c1325dcbeea2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/roomlisting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/roomlisting.html.twig"));

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

        yield "Room Listing - StayGrid";
        
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
        yield "<div class=\"max-w-6xl mx-auto py-12 px-6\">
    <h1 class=\"text-4xl font-bold text-center mb-12\">Available Rooms</h1>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 11
            yield "            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition\">
                ";
            // line 12
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["room"], "mainPhotoFilename", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["room"], "mainPhotoFilename", [], "any", false, false, false, 13))), "html", null, true);
                yield "\" 
                         alt=\"";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "croom", [], "any", false, false, false, 14), "html", null, true);
                yield "\" class=\"w-full h-48 object-cover\">
                ";
            }
            // line 16
            yield "                <div class=\"p-6\">
                    <h2 class=\"text-2xl font-semibold mb-2\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "croom", [], "any", false, false, false, 17), "html", null, true);
            yield "</h2>
                    <p class=\"text-gray-600 mb-4\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 18), "html", null, true);
            yield "</p>
                    <p class=\"text-yellow-600 font-bold mb-4\">
                        ₱";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 20), 2, ".", ","), "html", null, true);
            yield " / night
                    </p>
                    <a href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"
                       class=\"inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold\">
                        Book This Stay
                    </a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 28
        if (!$context['_iterated']) {
            // line 29
            yield "            <p class=\"col-span-3 text-center text-gray-500\">No rooms available.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "    </div>
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
        return "landing/roomlisting.html.twig";
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
        return array (  163 => 31,  156 => 29,  154 => 28,  143 => 22,  138 => 20,  133 => 18,  129 => 17,  126 => 16,  121 => 14,  116 => 13,  114 => 12,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Room Listing - StayGrid{% endblock %}

{% block content %}
<div class=\"max-w-6xl mx-auto py-12 px-6\">
    <h1 class=\"text-4xl font-bold text-center mb-12\">Available Rooms</h1>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
        {% for room in rooms %}
            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition\">
                {% if room.mainPhotoFilename %}
                    <img src=\"{{ asset('uploads/' ~ room.mainPhotoFilename) }}\" 
                         alt=\"{{ room.croom }}\" class=\"w-full h-48 object-cover\">
                {% endif %}
                <div class=\"p-6\">
                    <h2 class=\"text-2xl font-semibold mb-2\">{{ room.croom }}</h2>
                    <p class=\"text-gray-600 mb-4\">{{ room.description }}</p>
                    <p class=\"text-yellow-600 font-bold mb-4\">
                        ₱{{ room.price|number_format(2, '.', ',') }} / night
                    </p>
                    <a href=\"{{ path('app_login') }}\"
                       class=\"inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold\">
                        Book This Stay
                    </a>
                </div>
            </div>
        {% else %}
            <p class=\"col-span-3 text-center text-gray-500\">No rooms available.</p>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "landing/roomlisting.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\landing\\roomlisting.html.twig");
    }
}
