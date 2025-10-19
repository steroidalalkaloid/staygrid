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

/* booking/book.html.twig */
class __TwigTemplate_b32edb78d22ec60c923ab94b437b3e35 extends Template
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
            'styles' => [$this, 'block_styles'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/book.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "booking/book.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- The page title is defined in the child templates and defaults to \"StayGrid\" -->
<title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

<!-- FAVICON: Includes the current link with the cache-buster -->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/staygrid16x16.png"), "html", null, true);
        yield "\"/>

<!-- Tailwind CSS CDN -->
<script src=\"https://cdn.tailwindcss.com\"></script>

<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f7f9fc;
    }
    .nav-link { color: #4b5563; }
    .nav-link:hover { color: #FFD700; }
    .btn-primary { background-color: #FFD700; border-color: #FFD700; }
    .btn-primary:hover { background-color: #e6c200; } /* darker gold */

    /* Custom style for the subtle gold background on feature icons */
    .feature-icon-bg { background-color: #FFF4B0; color: #FFD700; }

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        yield " /* For page-specific styles if needed */

</style>

</head>
<body>

<!--

NAVIGATION BAR (Included directly in the base layout)
-->

<nav class=\"bg-white shadow-sm sticky top-0 z-10\">
<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
<div class=\"flex justify-between items-center h-16\">
<!-- Logo -->
<a href=\"/\" class=\"flex items-center space-x-2 text-xl font-bold text-gray-800\">
StayGrid
</a>

        <!-- Nav Links -->
        <div class=\"hidden md:flex space-x-6 items-center\">
            ";
        // line 51
        $context["nav_items"] = [["name" => "Home", "url" => "/"], ["name" => "Rooms", "url" => "/rooms"], ["name" => "About", "url" => "/about"], ["name" => "Contact", "url" => "/contact"]];
        // line 57
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nav_items"]) || array_key_exists("nav_items", $context) ? $context["nav_items"] : (function () { throw new RuntimeError('Variable "nav_items" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 58), "html", null, true);
            yield "\" class=\"nav-link text-sm font-medium flex items-center\">
                    ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </div>

        <!-- Book Now Button -->
        <a href=\"/book\" class=\"btn-primary inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white shadow-sm transition duration-150 ease-in-out\">
            Book Now
        </a>
    </div>
</div>

</nav>

<!--
2. MAIN CONTENT BLOCK
All page-specific content (Hero, Forms, etc.) will go inside this block.
-->

<main>
";
        // line 79
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 80
        yield "</main>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })()), "Book with StayGrid")) : ("Book with StayGrid")), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "booking/book.html.twig";
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
        return array (  214 => 79,  192 => 29,  169 => 8,  154 => 80,  152 => 79,  133 => 62,  124 => 59,  119 => 58,  114 => 57,  112 => 51,  87 => 29,  66 => 11,  60 => 8,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- The page title is defined in the child templates and defaults to \"StayGrid\" -->
<title>{% block title %}{{ page_title|default(\"Book with StayGrid\") }}{% endblock %}</title>

<!-- FAVICON: Includes the current link with the cache-buster -->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('icons/staygrid16x16.png') }}\"/>

<!-- Tailwind CSS CDN -->
<script src=\"https://cdn.tailwindcss.com\"></script>

<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f7f9fc;
    }
    .nav-link { color: #4b5563; }
    .nav-link:hover { color: #FFD700; }
    .btn-primary { background-color: #FFD700; border-color: #FFD700; }
    .btn-primary:hover { background-color: #e6c200; } /* darker gold */

    /* Custom style for the subtle gold background on feature icons */
    .feature-icon-bg { background-color: #FFF4B0; color: #FFD700; }

    {% block styles %}{% endblock %} /* For page-specific styles if needed */

</style>

</head>
<body>

<!--

NAVIGATION BAR (Included directly in the base layout)
-->

<nav class=\"bg-white shadow-sm sticky top-0 z-10\">
<div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
<div class=\"flex justify-between items-center h-16\">
<!-- Logo -->
<a href=\"/\" class=\"flex items-center space-x-2 text-xl font-bold text-gray-800\">
StayGrid
</a>

        <!-- Nav Links -->
        <div class=\"hidden md:flex space-x-6 items-center\">
            {% set nav_items = [
                { name: 'Home', url: '/' },
                { name: 'Rooms', url: '/rooms' },
                { name: 'About', url: '/about' },
                { name: 'Contact', url: '/contact' }
            ] %}
            {% for item in nav_items %}
                <a href=\"{{ item.url }}\" class=\"nav-link text-sm font-medium flex items-center\">
                    {{ item.name }}
                </a>
            {% endfor %}
        </div>

        <!-- Book Now Button -->
        <a href=\"/book\" class=\"btn-primary inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg text-white shadow-sm transition duration-150 ease-in-out\">
            Book Now
        </a>
    </div>
</div>

</nav>

<!--
2. MAIN CONTENT BLOCK
All page-specific content (Hero, Forms, etc.) will go inside this block.
-->

<main>
{% block content %}{% endblock %}
</main>


</body>
</html>", "booking/book.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\booking\\book.html.twig");
    }
}
