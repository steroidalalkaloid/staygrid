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

/* contact/index.html.twig */
class __TwigTemplate_01fa19eba46684902a8dc8e9900c549b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>


    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
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
        // line 27
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
        // line 46
        $context["nav_items"] = [["name" => "Home", "url" => "/"], ["name" => "Rooms", "url" => "/rooms"], ["name" => "About", "url" => "/about"], ["name" => "Contact", "url" => "/contact"]];
        // line 52
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nav_items"]) || array_key_exists("nav_items", $context) ? $context["nav_items"] : (function () { throw new RuntimeError('Variable "nav_items" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 53), "html", null, true);
            yield "\" class=\"nav-link text-sm font-medium flex items-center\">
                    ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 54), "html", null, true);
            yield "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "        </div>

      
        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
        yield "\" 
       class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
        Book Now
    </a>
    </div>
</div>

</nav>


<section class=\"relative bg-white overflow-hidden\">
  <div class=\"grid grid-cols-1 md:grid-cols-2 items-center\">
   
    <div class=\"bg-black text-white p-12 md:p-20 flex flex-col justify-center\">
      <h1 class=\"text-4xl font-extrabold mb-4\">Contact</h1>
      <p class=\"text-lg leading-relaxed\">
        Our StayGrid support team is always ready to help you with any questions or bookings. <br>
        Reach out — we’d love to hear from you!
      </p>
    </div>

    <div class=\"relative h-64 md:h-full\">
      <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner.png"), "html", null, true);
        yield "\"
           alt=\"Contact StayGrid\"
           class=\"object-cover w-full h-full\">
    </div>
  </div>
</section>

<section class=\"py-20 bg-white\">
  <div class=\"max-w-5xl mx-auto px-6\">

    <div class=\"text-center mb-10\">
      <h2 class=\"text-4xl font-extrabold text-gray-900 mb-4\"> </h2>
      <p class=\"text-gray-600 text-lg\"> </p>
    </div>

    <form action=\"#\" method=\"POST\" class=\"bg-gray-50 rounded-lg shadow-lg p-8 mb-12\">
      <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
        <div>
          <label for=\"email\" class=\"block text-gray-700 mb-2 font-medium\">Email</label>
          <input type=\"email\" id=\"email\" name=\"email\" required
                 placeholder=\"Enter a valid email address\"
                 class=\"w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400\">
        </div>
        <div>
          <label for=\"name\" class=\"block text-gray-700 mb-2 font-medium\">Name</label>
          <input type=\"text\" id=\"name\" name=\"name\" required
                 placeholder=\"Enter your name\"
                 class=\"w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400\">
        </div>
      </div>

      <div class=\"text-center\">
        <button type=\"submit\"
                class=\"w-full md:w-1/3 py-3 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold rounded-md shadow-md transition duration-150 ease-in-out\">
          SUBMIT
        </button>
      </div>
    </form>


    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10 text-center\">
      
      <div class=\"group cursor-pointer\">
        <div class=\"flex justify-center mb-4\">
          <div class=\"w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-lg
                      transform transition-all duration-500 ease-in-out group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-400 group-hover:text-white\">
            <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M16 8a6 6 0 11-8 8 6 6 0 018-8zm0 0V4m0 4h4\" />
            </svg>
          </div>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">SOCIAL MEDIA</h3>
        <div class=\"opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2 transition-all duration-500 ease-in-out\">
          <p class=\"text-gray-600\">
              Instagram: <span class=\"font-semibold\">StayGrid</span><br>
              Facebook: <span class=\"font-semibold\">StayGrid Homes</span>
          </p>
        </div>
      </div>

      <div class=\"group cursor-pointer\">
        <div class=\"flex justify-center mb-4\">
          <div class=\"w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-lg
                      transform transition-all duration-500 ease-in-out group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-400 group-hover:text-white\">
            <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M3 8l9 6 9-6M21 8v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8l9 6 9-6z\" />
            </svg>
          </div>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">EMAIL</h3>
        <div class=\"opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2 transition-all duration-500 ease-in-out\">
          <p class=\"text-gray-600\">staygridofficial@corps.com</p>
        </div>
      </div>

      <div class=\"group cursor-pointer\">
        <div class=\"flex justify-center mb-4\">
          <div class=\"w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-lg
                      transform transition-all duration-500 ease-in-out group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-400 group-hover:text-white\">
            <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z\" />
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M12 22s8-6.716 8-14a8 8 0 10-16 0c0 7.284 8 14 8 14z\" />
            </svg>
          </div>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">OUR OFFICE LOCATION</h3>
        <div class=\"opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2 transition-all duration-500 ease-in-out\">
          <p class=\"text-gray-600\">
            Negros Oriental, 6200, Dumaguete City<br>
            Cervantes Street, Staygrid Building
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
</main>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 7, $this->source); })()), "Contact StayGrid")) : ("Contact StayGrid")), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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
        return "contact/index.html.twig";
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
        return array (  296 => 27,  273 => 7,  157 => 82,  132 => 60,  127 => 57,  118 => 54,  113 => 53,  108 => 52,  106 => 46,  84 => 27,  64 => 10,  58 => 7,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>{% block title %}{{ page_title|default(\"Contact StayGrid\") }}{% endblock %}</title>


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


<section class=\"relative bg-white overflow-hidden\">
  <div class=\"grid grid-cols-1 md:grid-cols-2 items-center\">
   
    <div class=\"bg-black text-white p-12 md:p-20 flex flex-col justify-center\">
      <h1 class=\"text-4xl font-extrabold mb-4\">Contact</h1>
      <p class=\"text-lg leading-relaxed\">
        Our StayGrid support team is always ready to help you with any questions or bookings. <br>
        Reach out — we’d love to hear from you!
      </p>
    </div>

    <div class=\"relative h-64 md:h-full\">
      <img src=\"{{ asset('images/banner.png') }}\"
           alt=\"Contact StayGrid\"
           class=\"object-cover w-full h-full\">
    </div>
  </div>
</section>

<section class=\"py-20 bg-white\">
  <div class=\"max-w-5xl mx-auto px-6\">

    <div class=\"text-center mb-10\">
      <h2 class=\"text-4xl font-extrabold text-gray-900 mb-4\"> </h2>
      <p class=\"text-gray-600 text-lg\"> </p>
    </div>

    <form action=\"#\" method=\"POST\" class=\"bg-gray-50 rounded-lg shadow-lg p-8 mb-12\">
      <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-6\">
        <div>
          <label for=\"email\" class=\"block text-gray-700 mb-2 font-medium\">Email</label>
          <input type=\"email\" id=\"email\" name=\"email\" required
                 placeholder=\"Enter a valid email address\"
                 class=\"w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400\">
        </div>
        <div>
          <label for=\"name\" class=\"block text-gray-700 mb-2 font-medium\">Name</label>
          <input type=\"text\" id=\"name\" name=\"name\" required
                 placeholder=\"Enter your name\"
                 class=\"w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400\">
        </div>
      </div>

      <div class=\"text-center\">
        <button type=\"submit\"
                class=\"w-full md:w-1/3 py-3 bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-semibold rounded-md shadow-md transition duration-150 ease-in-out\">
          SUBMIT
        </button>
      </div>
    </form>


    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10 text-center\">
      
      <div class=\"group cursor-pointer\">
        <div class=\"flex justify-center mb-4\">
          <div class=\"w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-lg
                      transform transition-all duration-500 ease-in-out group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-400 group-hover:text-white\">
            <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M16 8a6 6 0 11-8 8 6 6 0 018-8zm0 0V4m0 4h4\" />
            </svg>
          </div>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">SOCIAL MEDIA</h3>
        <div class=\"opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2 transition-all duration-500 ease-in-out\">
          <p class=\"text-gray-600\">
              Instagram: <span class=\"font-semibold\">StayGrid</span><br>
              Facebook: <span class=\"font-semibold\">StayGrid Homes</span>
          </p>
        </div>
      </div>

      <div class=\"group cursor-pointer\">
        <div class=\"flex justify-center mb-4\">
          <div class=\"w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-lg
                      transform transition-all duration-500 ease-in-out group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-400 group-hover:text-white\">
            <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M3 8l9 6 9-6M21 8v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8l9 6 9-6z\" />
            </svg>
          </div>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">EMAIL</h3>
        <div class=\"opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2 transition-all duration-500 ease-in-out\">
          <p class=\"text-gray-600\">staygridofficial@corps.com</p>
        </div>
      </div>

      <div class=\"group cursor-pointer\">
        <div class=\"flex justify-center mb-4\">
          <div class=\"w-16 h-16 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-lg
                      transform transition-all duration-500 ease-in-out group-hover:scale-110 group-hover:rotate-6 group-hover:bg-yellow-400 group-hover:text-white\">
            <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5 9 6.343 9 8s1.343 3 3 3z\" />
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\"
                    d=\"M12 22s8-6.716 8-14a8 8 0 10-16 0c0 7.284 8 14 8 14z\" />
            </svg>
          </div>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">OUR OFFICE LOCATION</h3>
        <div class=\"opacity-0 group-hover:opacity-100 transform group-hover:translate-y-0 translate-y-2 transition-all duration-500 ease-in-out\">
          <p class=\"text-gray-600\">
            Negros Oriental, 6200, Dumaguete City<br>
            Cervantes Street, Staygrid Building
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
</main>


</body>
</html>", "contact/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\contact\\index.html.twig");
    }
}
