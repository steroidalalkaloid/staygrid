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

/* about/index.html.twig */
class __TwigTemplate_537d546ad482044edc25195157c45f17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

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
        // line 11
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
        // line 29
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
        // line 45
        $context["nav_items"] = [["name" => "Home", "url" => "/"], ["name" => "Rooms", "url" => "/rooms"], ["name" => "About", "url" => "/about"], ["name" => "Contact", "url" => "/contact"]];
        // line 51
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nav_items"]) || array_key_exists("nav_items", $context) ? $context["nav_items"] : (function () { throw new RuntimeError('Variable "nav_items" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 52), "html", null, true);
            yield "\" class=\"nav-link text-sm font-medium flex items-center\">
                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 53), "html", null, true);
            yield "
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </div>

        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
        yield "\" 
       class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
        Book Now
    </a>
    </div>
</div>

</nav>

<section class=\"py-20 bg-gray-50\">
  <div class=\"max-w-7xl mx-auto px-6 lg:px-8 text-center\">
    <h2 class=\"text-4xl font-extrabold text-gray-900 mb-12\">
      Why Choose StayGrid?
    </h2>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12\">
      ";
        // line 74
        $context["features"] = [["title" => "Smart System", "description" => "Our intelligent booking and room management system ensures a seamless and efficient experience for both guests and administrators.", "icon" => "M9.75 17L9 20l-1 1h8l-1-1v-3m2-4v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m12 0a2 2 0 00-2-2H9a2 2 0 00-2 2m12 0h.01M17 10h.01"], ["title" => "Secure Platform", "description" => "We prioritize security with end-to-end encryption, ensuring that your personal information and payment data are fully protected.", "icon" => "M13 10V3L4 14h7v7l9-11h-7z"], ["title" => "24/7 Support", "description" => "Our friendly and reliable customer support team is available at all hours to assist you — because your comfort matters most.", "icon" => "M5 13a10 10 0 0010 10h1v-2a8 8 0 01-8-8H5z"]];
        // line 91
        yield "
      ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 93
            yield "      <div class=\"group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2\">
        <div class=\"w-20 h-20 mx-auto flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-inner mb-6 group-hover:scale-110 transition\">
          <svg class=\"w-10 h-10\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "icon", [], "any", false, false, false, 96), "html", null, true);
            yield "\" />
          </svg>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-3\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 99), "html", null, true);
            yield "</h3>
        <p class=\"text-gray-600 text-base\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 100), "html", null, true);
            yield "</p>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "    </div>
  </div>
</section>

<section class=\"py-24 bg-white\">
  <div class=\"max-w-6xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center\">
    <div class=\"space-y-6\">
      <h2 class=\"text-3xl font-extrabold text-gray-900\">About StayGrid</h2>
      <p class=\"text-gray-600 text-lg leading-relaxed\">
        StayGrid was founded with a vision to redefine convenience and comfort in the hospitality industry. 
        We believe booking a stay should be simple, fast, and stress-free — powered by technology that works for you.
      </p>
      <p class=\"text-gray-600 text-lg leading-relaxed\">
        From smart room automation to seamless guest management, our goal is to make every stay memorable 
        — for both travelers and hotel owners alike.
      </p>
    </div>
    <div>
      <img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/staygridposterx.png"), "html", null, true);
        yield "\" alt=\"StayGrid Team\" class=\"rounded-2xl shadow-lg w-full object-cover\">
    </div>
  </div>
</section>

<section class=\"py-20 bg-gray-900 text-white\">
  <div class=\"max-w-6xl mx-auto px-6 lg:px-8 text-center\">
    <h2 class=\"text-3xl font-bold mb-8\">Our Mission & Values</h2>
    <p class=\"max-w-3xl mx-auto text-lg text-gray-300 mb-12\">
      At StayGrid, we are committed to delivering comfort, reliability, and trust through our innovative booking solutions.
      We believe in people-first design — ensuring our technology empowers rather than complicates.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10\">
      <div class=\"bg-gray-800 p-8 rounded-xl shadow-md hover:bg-gray-700 transition\">
        <h3 class=\"text-xl font-semibold mb-3 text-yellow-400\">Innovation</h3>
        <p class=\"text-gray-300\">We continuously improve our platform to meet modern hospitality standards and user needs.</p>
      </div>
      <div class=\"bg-gray-800 p-8 rounded-xl shadow-md hover:bg-gray-700 transition\">
        <h3 class=\"text-xl font-semibold mb-3 text-yellow-400\">Integrity</h3>
        <p class=\"text-gray-300\">Transparency and honesty guide every interaction with our partners and users.</p>
      </div>
      <div class=\"bg-gray-800 p-8 rounded-xl shadow-md hover:bg-gray-700 transition\">
        <h3 class=\"text-xl font-semibold mb-3 text-yellow-400\">Service</h3>
        <p class=\"text-gray-300\">Customer satisfaction drives everything we do — from booking to support.</p>
      </div>
    </div>
  </div>
</section>

<section x-data=\"{ activeSlide: 1 }\" 
         x-init=\"setInterval(() => activeSlide = activeSlide === 5 ? 1 : activeSlide + 1, 5000)\"
         class=\"relative py-24 bg-gradient-to-b from-white via-gray-50 to-gray-100 overflow-hidden\">

  <div class=\"absolute -top-16 left-1/2 transform -translate-x-1/2 w-[700px] h-[700px] bg-yellow-100 opacity-30 rounded-full blur-3xl -z-10\"></div>

  <div class=\"max-w-6xl mx-auto text-center px-6\">
    <h2 class=\"text-4xl font-extrabold text-gray-900 mb-6\">What Our <span class=\"text-yellow-500\">Clients Say</span></h2>
    <p class=\"text-gray-600 text-lg max-w-2xl mx-auto mb-12\">
      Hear from travelers and partners who have experienced StayGrid’s comfort and innovation firsthand.
    </p>

    <div class=\"relative w-full max-w-4xl mx-auto\">
  
      <div x-show=\"activeSlide === 1\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jas Pineda.jpg"), "html", null, true);
        yield "\" alt=\"Client 1\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Jas Pineda</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Marketing Executive, Airbnb Traveler</p>
          <p class=\"text-gray-700 italic\">“StayGrid made our family vacation smooth and enjoyable. The booking process was fast, and the rooms were beyond expectations!”</p>
        </div>
      </div>

  
      <div x-show=\"activeSlide === 2\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/JimAshley.jpg"), "html", null, true);
        yield "\" alt=\"Client 2\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Jim Ashley</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Entrepreneur, Business Traveler</p>
          <p class=\"text-gray-700 italic\">“I loved the smart booking feature! StayGrid feels like the future of hotel stays. Everything was efficient and seamless.”</p>
        </div>
      </div>

      <div x-show=\"activeSlide === 3\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Rhyza.jpg"), "html", null, true);
        yield "\" alt=\"Client 3\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Ryza Mahinay</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Tech Startup Founder</p>
          <p class=\"text-gray-700 italic\">“StayGrid’s secure and smart system gave me peace of mind. It’s clear that innovation drives everything they do.”</p>
        </div>
      </div>

      <div x-show=\"activeSlide === 4\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DemiJane.jpg"), "html", null, true);
        yield "\" alt=\"Client 4\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Demi Jane</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Frequent Traveler</p>
          <p class=\"text-gray-700 italic\">“The comfort and attention to detail in StayGrid properties are unmatched. Definitely my go-to booking platform now.”</p>
        </div>
      </div>

      <div x-show=\"activeSlide === 5\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Jasmine.jpg"), "html", null, true);
        yield "\" alt=\"Client 5\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Jasmine Armentano</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Hotel Owner Partner</p>
          <p class=\"text-gray-700 italic\">“Partnering with StayGrid has elevated our guest experience and increased our bookings. Their platform is top-notch.”</p>
        </div>
      </div>
    </div>


    <div class=\"flex justify-center mt-10 space-x-3\">
      <template x-for=\"i in 5\">
        <button @click=\"activeSlide = i\"
                class=\"w-3 h-3 rounded-full transition\"
                :class=\"activeSlide === i ? 'bg-yellow-500 scale-125' : 'bg-gray-400'\"></button>
      </template>
    </div>
  </div>
</section>

<!-- Alpine.js (for slider animation) -->
<script src=\"https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js\" defer></script>


<main>
";
        // line 233
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 234
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("page_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })()), "About StayGrid")) : ("About StayGrid")), "html", null, true);
        
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

    // line 233
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
        return "about/index.html.twig";
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
        return array (  395 => 233,  373 => 29,  350 => 8,  335 => 234,  333 => 233,  305 => 208,  292 => 198,  279 => 188,  266 => 178,  252 => 167,  203 => 121,  183 => 103,  174 => 100,  170 => 99,  164 => 96,  159 => 93,  155 => 92,  152 => 91,  150 => 74,  131 => 58,  127 => 56,  118 => 53,  113 => 52,  108 => 51,  106 => 45,  87 => 29,  66 => 11,  60 => 8,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
 
<title>{% block title %}{{ page_title|default(\"About StayGrid\") }}{% endblock %}</title>

 
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

<section class=\"py-20 bg-gray-50\">
  <div class=\"max-w-7xl mx-auto px-6 lg:px-8 text-center\">
    <h2 class=\"text-4xl font-extrabold text-gray-900 mb-12\">
      Why Choose StayGrid?
    </h2>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12\">
      {% set features = [
        {
          title: 'Smart System',
          description: 'Our intelligent booking and room management system ensures a seamless and efficient experience for both guests and administrators.',
          icon: 'M9.75 17L9 20l-1 1h8l-1-1v-3m2-4v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m12 0a2 2 0 00-2-2H9a2 2 0 00-2 2m12 0h.01M17 10h.01'
        },
        {
          title: 'Secure Platform',
          description: 'We prioritize security with end-to-end encryption, ensuring that your personal information and payment data are fully protected.',
          icon: 'M13 10V3L4 14h7v7l9-11h-7z'
        },
        {
          title: '24/7 Support',
          description: 'Our friendly and reliable customer support team is available at all hours to assist you — because your comfort matters most.',
          icon: 'M5 13a10 10 0 0010 10h1v-2a8 8 0 01-8-8H5z'
        }
      ] %}

      {% for feature in features %}
      <div class=\"group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2\">
        <div class=\"w-20 h-20 mx-auto flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 shadow-inner mb-6 group-hover:scale-110 transition\">
          <svg class=\"w-10 h-10\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"{{ feature.icon }}\" />
          </svg>
        </div>
        <h3 class=\"text-xl font-bold text-gray-900 mb-3\">{{ feature.title }}</h3>
        <p class=\"text-gray-600 text-base\">{{ feature.description }}</p>
      </div>
      {% endfor %}
    </div>
  </div>
</section>

<section class=\"py-24 bg-white\">
  <div class=\"max-w-6xl mx-auto px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center\">
    <div class=\"space-y-6\">
      <h2 class=\"text-3xl font-extrabold text-gray-900\">About StayGrid</h2>
      <p class=\"text-gray-600 text-lg leading-relaxed\">
        StayGrid was founded with a vision to redefine convenience and comfort in the hospitality industry. 
        We believe booking a stay should be simple, fast, and stress-free — powered by technology that works for you.
      </p>
      <p class=\"text-gray-600 text-lg leading-relaxed\">
        From smart room automation to seamless guest management, our goal is to make every stay memorable 
        — for both travelers and hotel owners alike.
      </p>
    </div>
    <div>
      <img src=\"{{ asset('images/staygridposterx.png') }}\" alt=\"StayGrid Team\" class=\"rounded-2xl shadow-lg w-full object-cover\">
    </div>
  </div>
</section>

<section class=\"py-20 bg-gray-900 text-white\">
  <div class=\"max-w-6xl mx-auto px-6 lg:px-8 text-center\">
    <h2 class=\"text-3xl font-bold mb-8\">Our Mission & Values</h2>
    <p class=\"max-w-3xl mx-auto text-lg text-gray-300 mb-12\">
      At StayGrid, we are committed to delivering comfort, reliability, and trust through our innovative booking solutions.
      We believe in people-first design — ensuring our technology empowers rather than complicates.
    </p>

    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10\">
      <div class=\"bg-gray-800 p-8 rounded-xl shadow-md hover:bg-gray-700 transition\">
        <h3 class=\"text-xl font-semibold mb-3 text-yellow-400\">Innovation</h3>
        <p class=\"text-gray-300\">We continuously improve our platform to meet modern hospitality standards and user needs.</p>
      </div>
      <div class=\"bg-gray-800 p-8 rounded-xl shadow-md hover:bg-gray-700 transition\">
        <h3 class=\"text-xl font-semibold mb-3 text-yellow-400\">Integrity</h3>
        <p class=\"text-gray-300\">Transparency and honesty guide every interaction with our partners and users.</p>
      </div>
      <div class=\"bg-gray-800 p-8 rounded-xl shadow-md hover:bg-gray-700 transition\">
        <h3 class=\"text-xl font-semibold mb-3 text-yellow-400\">Service</h3>
        <p class=\"text-gray-300\">Customer satisfaction drives everything we do — from booking to support.</p>
      </div>
    </div>
  </div>
</section>

<section x-data=\"{ activeSlide: 1 }\" 
         x-init=\"setInterval(() => activeSlide = activeSlide === 5 ? 1 : activeSlide + 1, 5000)\"
         class=\"relative py-24 bg-gradient-to-b from-white via-gray-50 to-gray-100 overflow-hidden\">

  <div class=\"absolute -top-16 left-1/2 transform -translate-x-1/2 w-[700px] h-[700px] bg-yellow-100 opacity-30 rounded-full blur-3xl -z-10\"></div>

  <div class=\"max-w-6xl mx-auto text-center px-6\">
    <h2 class=\"text-4xl font-extrabold text-gray-900 mb-6\">What Our <span class=\"text-yellow-500\">Clients Say</span></h2>
    <p class=\"text-gray-600 text-lg max-w-2xl mx-auto mb-12\">
      Hear from travelers and partners who have experienced StayGrid’s comfort and innovation firsthand.
    </p>

    <div class=\"relative w-full max-w-4xl mx-auto\">
  
      <div x-show=\"activeSlide === 1\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"{{ asset('images/Jas Pineda.jpg') }}\" alt=\"Client 1\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Jas Pineda</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Marketing Executive, Airbnb Traveler</p>
          <p class=\"text-gray-700 italic\">“StayGrid made our family vacation smooth and enjoyable. The booking process was fast, and the rooms were beyond expectations!”</p>
        </div>
      </div>

  
      <div x-show=\"activeSlide === 2\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"{{ asset('images/JimAshley.jpg') }}\" alt=\"Client 2\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Jim Ashley</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Entrepreneur, Business Traveler</p>
          <p class=\"text-gray-700 italic\">“I loved the smart booking feature! StayGrid feels like the future of hotel stays. Everything was efficient and seamless.”</p>
        </div>
      </div>

      <div x-show=\"activeSlide === 3\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"{{ asset('images/Rhyza.jpg') }}\" alt=\"Client 3\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Ryza Mahinay</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Tech Startup Founder</p>
          <p class=\"text-gray-700 italic\">“StayGrid’s secure and smart system gave me peace of mind. It’s clear that innovation drives everything they do.”</p>
        </div>
      </div>

      <div x-show=\"activeSlide === 4\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"{{ asset('images/DemiJane.jpg') }}\" alt=\"Client 4\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Demi Jane</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Frequent Traveler</p>
          <p class=\"text-gray-700 italic\">“The comfort and attention to detail in StayGrid properties are unmatched. Definitely my go-to booking platform now.”</p>
        </div>
      </div>

      <div x-show=\"activeSlide === 5\" x-transition
           class=\"bg-white rounded-2xl shadow-xl p-10 flex flex-col md:flex-row items-center text-left space-y-6 md:space-y-0 md:space-x-8\">
        <img src=\"{{ asset('images/Jasmine.jpg') }}\" alt=\"Client 5\" class=\"w-24 h-24 rounded-full object-cover shadow-md\">
        <div>
          <h3 class=\"text-xl font-bold text-gray-900 mb-2\">Jasmine Armentano</h3>
          <p class=\"text-gray-500 mb-3 text-sm\">Hotel Owner Partner</p>
          <p class=\"text-gray-700 italic\">“Partnering with StayGrid has elevated our guest experience and increased our bookings. Their platform is top-notch.”</p>
        </div>
      </div>
    </div>


    <div class=\"flex justify-center mt-10 space-x-3\">
      <template x-for=\"i in 5\">
        <button @click=\"activeSlide = i\"
                class=\"w-3 h-3 rounded-full transition\"
                :class=\"activeSlide === i ? 'bg-yellow-500 scale-125' : 'bg-gray-400'\"></button>
      </template>
    </div>
  </div>
</section>

<!-- Alpine.js (for slider animation) -->
<script src=\"https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js\" defer></script>


<main>
{% block content %}{% endblock %}
</main>


</body>
</html>", "about/index.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\about\\index.html.twig");
    }
}
