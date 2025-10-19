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

/* home/index.html.twig */
class __TwigTemplate_06445297d8189a9eb0a8dc659fbc231c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- The page title is defined in the child templates (e.g., landing_page.twig) -->
<title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

<!-- FAVICON: Includes the current link with the cache-buster -->

<link rel=\"icon\" type=\"image/png\" href=\"/icons/staygrid16x16.png?v=1\"/>

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
        // line 31
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        yield " /* For page-specific styles if needed */

</style>

</head>
<body>

<!--
1. NAVIGATION BAR
The navigation bar is included from the separate header file.

FIX: Updated the path to assume the file is inside a &#39;partials&#39; directory 
(e.g., templates/partials/_header.html.twig), which is a common Twig structure.

-->

";
        // line 47
        yield from $this->load("partials/_header.html.twig", 47)->unwrap()->yield($context);
        // line 48
        yield "
<!--
2. PAGE CONTENT BLOCK
All page-specific content (Hero, Features, etc.) will go inside this block.
-->

<main>
";
        // line 55
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 56
        yield "</main>

<!-- You would put a footer block here if you had one, e.g.: ";
        // line 58
        yield from $this->load("_footer.html.twig", 58)->unwrap()->yield($context);
        yield " -->

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })()), "StayGrid Website")) : ("StayGrid Website")), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

    // line 55
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
        return "home/index.html.twig";
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
        return array (  182 => 55,  160 => 31,  137 => 8,  122 => 58,  118 => 56,  116 => 55,  107 => 48,  105 => 47,  86 => 31,  60 => 8,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- The page title is defined in the child templates (e.g., landing_page.twig) -->
<title>{% block title %}{{ page_title|default(\"StayGrid Website\") }}{% endblock %}</title>

<!-- FAVICON: Includes the current link with the cache-buster -->

<link rel=\"icon\" type=\"image/png\" href=\"/icons/staygrid16x16.png?v=1\"/>

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
1. NAVIGATION BAR
The navigation bar is included from the separate header file.

FIX: Updated the path to assume the file is inside a &#39;partials&#39; directory 
(e.g., templates/partials/_header.html.twig), which is a common Twig structure.

-->

{% include 'partials/_header.html.twig' %}

<!--
2. PAGE CONTENT BLOCK
All page-specific content (Hero, Features, etc.) will go inside this block.
-->

<main>
{% block content %}{% endblock %}
</main>

<!-- You would put a footer block here if you had one, e.g.: {% include '_footer.html.twig' %} -->

</body>
</html>", "home/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\home\\index.html.twig");
    }
}
