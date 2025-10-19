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

/* rooms/index.html.twig */
class __TwigTemplate_774086b4e7eab8f193417365399125e7 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rooms/index.html.twig"));

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
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/staygrid16x16.png"), "html", null, true);
        yield "\"/>
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
        // line 22
        yield from $this->unwrap()->yieldBlock('styles', $context, $blocks);
        // line 23
        yield "  </style>
</head>

<body>

  ";
        // line 29
        yield "  <nav class=\"bg-white shadow-sm sticky top-0 z-10\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
      <div class=\"flex justify-between items-center h-16\">
        <a href=\"/\" class=\"flex items-center space-x-2 text-xl font-bold text-gray-800\">
          StayGrid
        </a>

        <div class=\"hidden md:flex space-x-6 items-center\">
          ";
        // line 37
        $context["nav_items"] = [["name" => "Home", "url" => "/"], ["name" => "Rooms", "url" => "/rooms"], ["name" => "About", "url" => "/about"], ["name" => "Contact", "url" => "/contact"]];
        // line 43
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nav_items"]) || array_key_exists("nav_items", $context) ? $context["nav_items"] : (function () { throw new RuntimeError('Variable "nav_items" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 44), "html", null, true);
            yield "\" class=\"nav-link text-sm font-medium flex items-center\">
              ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 45), "html", null, true);
            yield "
            </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </div>

      <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
        yield "\" 
       class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
        Book Now
    </a>
      </div>
    </div>
  </nav>

<br>
<br>
<br>

<section class=\"relative py-20 bg-gradient-to-b from-gray-50 via-white to-white overflow-hidden\">

    <div class=\"absolute inset-0 -z-10\">
    <div class=\"absolute -top-24 -left-24 w-96 h-96 bg-yellow-300 opacity-20 rounded-full blur-3xl animate-pulse\"></div>
    <div class=\"absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-yellow-400 opacity-10 rounded-full blur-3xl\"></div>
  </div>

    <div class=\"text-center mb-16 relative\">
    <h2 class=\"text-5xl font-extrabold text-gray-900 tracking-tight mb-4\">
      Explore Our <span class=\"text-yellow-500\">Available Rooms</span>
    </h2>

    <div class=\"flex justify-center mt-3\">
      <span class=\"inline-block w-32 h-1 bg-yellow-400 rounded-full animate-pulse\"></span>
    </div>

    <p class=\"text-gray-600 text-lg max-w-2xl mx-auto mt-4\">
      Experience comfort, elegance, and innovation in every StayGrid room.
    </p>
  </div>

  <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10 px-6 max-w-7xl mx-auto\">
    
    <div class=\"group relative overflow-hidden rounded-lg shadow-lg transition-all duration-500 hover:shadow-yellow-200/70 hover:-translate-y-2\">
      <img src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studioMP.png"), "html", null, true);
        yield "\" 
           alt=\"Studio Deluxe\" 
           class=\"w-full h-84 object-cover transition-transform duration-700 group-hover:scale-110\">
      
      <div class=\"absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent\"></div>
      
      <div class=\"absolute bottom-0 p-6 text-left text-white\">
        <h3 class=\"text-2xl font-bold mb-2\">Studio Deluxe</h3>
        <p class=\"text-gray-200 mb-4\">Perfect for solo travelers or couples.</p>
        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_studio_deluxe");
        yield "\" 
           class=\"inline-block px-5 py-2 border-2 border-yellow-400 text-yellow-300 font-semibold rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-gray-900 hover:shadow-lg hover:shadow-yellow-300/50 active:scale-95\">
          View Rooms →
        </a>
      </div>
    </div>

    <div class=\"group relative overflow-hidden rounded-lg shadow-lg transition-all duration-500 hover:shadow-yellow-200/70 hover:-translate-y-2\">
      <img src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executiveMP.png"), "html", null, true);
        yield "\" 
           alt=\"Executive Suite\" 
           class=\"w-full h-84 object-cover transition-transform duration-700 group-hover:scale-110\">
      
      <div class=\"absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent\"></div>
      
      <div class=\"absolute bottom-0 p-6 text-left text-white\">
        <h3 class=\"text-2xl font-bold mb-2\">Executive Suite</h3> 
        <p class=\"text-gray-200 mb-4\">Spacious luxury stay with a full kitchen.</p>
        <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_executive_suite");
        yield "\" 
           class=\"inline-block px-5 py-2 border-2 border-yellow-400 text-yellow-300 font-semibold rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-gray-900 hover:shadow-lg hover:shadow-yellow-300/50 active:scale-95\">
          View Rooms →
        </a>
      </div>
    </div>

    <div class=\"group relative overflow-hidden rounded-lg shadow-lg transition-all duration-500 hover:shadow-yellow-200/70 hover:-translate-y-2\">
      <img src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/faMP.png"), "html", null, true);
        yield "\" 
           alt=\"Family Apartment\" 
           class=\"w-full h-84 object-cover transition-transform duration-700 group-hover:scale-110\">
      
      <div class=\"absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent\"></div>
      
      <div class=\"absolute bottom-0 p-6 text-left text-white\">
        <h3 class=\"text-2xl font-bold mb-2\">Family Apartment</h3>
        <p class=\"text-gray-200 mb-4\">Spacious comfort for families and groups.</p>
        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_family_apartment");
        yield "\" 
           class=\"inline-block px-5 py-2 border-2 border-yellow-400 text-yellow-300 font-semibold rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-gray-900 hover:shadow-lg hover:shadow-yellow-300/50 active:scale-95\">
          View Rooms →
        </a>
      </div>
    </div>

  </div>
</section>


</body>
</html>
";
        
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 6, $this->source); })()), "StayGrid - Our Rooms")) : ("StayGrid - Our Rooms")), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "rooms/index.html.twig";
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
        return array (  268 => 22,  245 => 6,  220 => 129,  208 => 120,  197 => 112,  185 => 103,  174 => 95,  162 => 86,  123 => 50,  119 => 48,  110 => 45,  105 => 44,  100 => 43,  98 => 37,  88 => 29,  81 => 23,  79 => 22,  62 => 8,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{% block title %}{{ page_title|default(\"StayGrid - Our Rooms\") }}{% endblock %}</title>

  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('icons/staygrid16x16.png') }}\"/>
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

  {# --- NAVBAR --- #}
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

<br>
<br>
<br>

<section class=\"relative py-20 bg-gradient-to-b from-gray-50 via-white to-white overflow-hidden\">

    <div class=\"absolute inset-0 -z-10\">
    <div class=\"absolute -top-24 -left-24 w-96 h-96 bg-yellow-300 opacity-20 rounded-full blur-3xl animate-pulse\"></div>
    <div class=\"absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-yellow-400 opacity-10 rounded-full blur-3xl\"></div>
  </div>

    <div class=\"text-center mb-16 relative\">
    <h2 class=\"text-5xl font-extrabold text-gray-900 tracking-tight mb-4\">
      Explore Our <span class=\"text-yellow-500\">Available Rooms</span>
    </h2>

    <div class=\"flex justify-center mt-3\">
      <span class=\"inline-block w-32 h-1 bg-yellow-400 rounded-full animate-pulse\"></span>
    </div>

    <p class=\"text-gray-600 text-lg max-w-2xl mx-auto mt-4\">
      Experience comfort, elegance, and innovation in every StayGrid room.
    </p>
  </div>

  <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10 px-6 max-w-7xl mx-auto\">
    
    <div class=\"group relative overflow-hidden rounded-lg shadow-lg transition-all duration-500 hover:shadow-yellow-200/70 hover:-translate-y-2\">
      <img src=\"{{ asset('images/studioMP.png') }}\" 
           alt=\"Studio Deluxe\" 
           class=\"w-full h-84 object-cover transition-transform duration-700 group-hover:scale-110\">
      
      <div class=\"absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent\"></div>
      
      <div class=\"absolute bottom-0 p-6 text-left text-white\">
        <h3 class=\"text-2xl font-bold mb-2\">Studio Deluxe</h3>
        <p class=\"text-gray-200 mb-4\">Perfect for solo travelers or couples.</p>
        <a href=\"{{ path('app_room_studio_deluxe') }}\" 
           class=\"inline-block px-5 py-2 border-2 border-yellow-400 text-yellow-300 font-semibold rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-gray-900 hover:shadow-lg hover:shadow-yellow-300/50 active:scale-95\">
          View Rooms →
        </a>
      </div>
    </div>

    <div class=\"group relative overflow-hidden rounded-lg shadow-lg transition-all duration-500 hover:shadow-yellow-200/70 hover:-translate-y-2\">
      <img src=\"{{ asset('images/executiveMP.png') }}\" 
           alt=\"Executive Suite\" 
           class=\"w-full h-84 object-cover transition-transform duration-700 group-hover:scale-110\">
      
      <div class=\"absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent\"></div>
      
      <div class=\"absolute bottom-0 p-6 text-left text-white\">
        <h3 class=\"text-2xl font-bold mb-2\">Executive Suite</h3> 
        <p class=\"text-gray-200 mb-4\">Spacious luxury stay with a full kitchen.</p>
        <a href=\"{{ path('app_room_executive_suite') }}\" 
           class=\"inline-block px-5 py-2 border-2 border-yellow-400 text-yellow-300 font-semibold rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-gray-900 hover:shadow-lg hover:shadow-yellow-300/50 active:scale-95\">
          View Rooms →
        </a>
      </div>
    </div>

    <div class=\"group relative overflow-hidden rounded-lg shadow-lg transition-all duration-500 hover:shadow-yellow-200/70 hover:-translate-y-2\">
      <img src=\"{{ asset('images/faMP.png') }}\" 
           alt=\"Family Apartment\" 
           class=\"w-full h-84 object-cover transition-transform duration-700 group-hover:scale-110\">
      
      <div class=\"absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent\"></div>
      
      <div class=\"absolute bottom-0 p-6 text-left text-white\">
        <h3 class=\"text-2xl font-bold mb-2\">Family Apartment</h3>
        <p class=\"text-gray-200 mb-4\">Spacious comfort for families and groups.</p>
        <a href=\"{{ path('app_room_family_apartment') }}\" 
           class=\"inline-block px-5 py-2 border-2 border-yellow-400 text-yellow-300 font-semibold rounded-full transition-all duration-300 hover:bg-yellow-400 hover:text-gray-900 hover:shadow-lg hover:shadow-yellow-300/50 active:scale-95\">
          View Rooms →
        </a>
      </div>
    </div>

  </div>
</section>


</body>
</html>
", "rooms/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\rooms\\index.html.twig");
    }
}
