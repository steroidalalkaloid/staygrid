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

/* base.html.twig */
class __TwigTemplate_e58eb461d9993d0f51a307557ed9cde7 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<title>";
        // line 8
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/staygrid16x16.png"), "html", null, true);
        yield "\"/>
<link rel=\"icon\" type=\"image/png\" href=\"/icons/staygrid16x16.png?v=1\"/>

<script src=\"https://cdn.tailwindcss.com\"></script>

<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f7f9fc;
    }
    .nav-link { color: #4b5563; }
    .nav-link:hover { color: #FFD700; }
    .btn-primary { background-color: #FFD700; border-color: #FFD700; }
    .btn-primary:hover { background-color: #e6c200; } 

    .feature-icon-bg { background-color: #FFF4B0; color: #FFD700; }

    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        yield " 

</style>

</head>
<body>

      <nav class=\"bg-white shadow-sm sticky top-0 z-10\">
      <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
      <div class=\"flex justify-between items-center h-16\">
           <a href=\"/\" class=\"flex items-center space-x-2 text-xl font-bold text-gray-800\">
           StayGrid
           </a>

         <div class=\"hidden md:flex space-x-6 items-center\">
             ";
        // line 41
        $context["nav_items"] = [["name" => "Home", "url" => "/"], ["name" => "Rooms", "url" => "/rooms"], ["name" => "About", "url" => "/about"], ["name" => "Contact", "url" => "/contact"]];
        // line 47
        yield "             ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nav_items"]) || array_key_exists("nav_items", $context) ? $context["nav_items"] : (function () { throw new RuntimeError('Variable "nav_items" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            yield "                 <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 48), "html", null, true);
            yield "\" class=\"nav-link text-sm font-medium flex items-center\">
                     ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 49), "html", null, true);
            yield "
                 </a>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "         </div>
         
          <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
        yield "\" 
               class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
              Book Now
          </a>
       </div>
       </div>

   </nav>

      <main>
          ";
        // line 65
        yield "          ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 66
        yield "      </main>
      
       <footer> 
            ";
        // line 69
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 70
        yield "       </footer> 

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })()), "StayGrid")) : ("StayGrid")), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

    // line 65
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

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  232 => 69,  210 => 65,  188 => 26,  165 => 8,  151 => 70,  149 => 69,  144 => 66,  141 => 65,  128 => 54,  124 => 52,  115 => 49,  110 => 48,  105 => 47,  103 => 41,  85 => 26,  65 => 9,  61 => 8,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<title>{% block title %}{{ page_title|default(\"StayGrid\") }}{% endblock %}</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('icons/staygrid16x16.png') }}\"/>
<link rel=\"icon\" type=\"image/png\" href=\"/icons/staygrid16x16.png?v=1\"/>

<script src=\"https://cdn.tailwindcss.com\"></script>

<style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f7f9fc;
    }
    .nav-link { color: #4b5563; }
    .nav-link:hover { color: #FFD700; }
    .btn-primary { background-color: #FFD700; border-color: #FFD700; }
    .btn-primary:hover { background-color: #e6c200; } 

    .feature-icon-bg { background-color: #FFF4B0; color: #FFD700; }

    {% block styles %}{% endblock %} 

</style>

</head>
<body>

      <nav class=\"bg-white shadow-sm sticky top-0 z-10\">
      <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
      <div class=\"flex justify-between items-center h-16\">
           <a href=\"/\" class=\"flex items-center space-x-2 text-xl font-bold text-gray-800\">
           StayGrid
           </a>

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
         
          <a href=\"{{ path('app_login', {'redirect': 'book'}) }}\" 
               class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
              Book Now
          </a>
       </div>
       </div>

   </nav>

      <main>
          {# 🛑 CRITICAL FIX: The missing content block was preventing child templates from rendering their body content. #}
          {% block content %}{# All page-specific content will be rendered here #}{% endblock %}
      </main>
      
       <footer> 
            {% block footer %}{# Add your footer content here #}{% endblock %}
       </footer> 

    </body>
</html>", "base.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\base.html.twig");
    }
}
