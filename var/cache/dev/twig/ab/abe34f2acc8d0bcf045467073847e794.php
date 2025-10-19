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

/* landing/landingpage.html.twig */
class __TwigTemplate_4ed1bceaa3f16ec62e02fb8a35063ad3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/landingpage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing/landingpage.html.twig"));

        // line 1
        $context["page_title"] = "StayGrid";
        // line 2
        $context["hero_headline"] = "Smart Stays, Staygrid";
        // line 3
        $context["hero_subtitle"] = "Discover the best rooms and accommodations with an easy booking experience.";
        // line 4
        yield "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "</title>

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
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
        // line 35
        $context["nav_items"] = [["name" => "Home", "url" => "/"], ["name" => "Rooms", "url" => "/rooms"], ["name" => "About", "url" => "/about"], ["name" => "Contact", "url" => "/contact"]];
        // line 41
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nav_items"]) || array_key_exists("nav_items", $context) ? $context["nav_items"] : (function () { throw new RuntimeError('Variable "nav_items" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 42), "html", null, true);
            yield "\" class=\"nav-link text-sm font-medium flex items-center\">
                        ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield "
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "            </div>

          ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_booking");
            yield "\" 
       class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
        Book Now
    </a>
";
        } else {
            // line 54
            yield "       <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
            yield "\"class=\"inline-block px-6 py-3 bg-yellow-500 text-gray-900 font-semibold rounded-lg shadow-md hover:bg-yellow-400 transition\">
                        Book Now
                    </a>
";
        }
        // line 58
        yield "        </div>
    </div>
</nav>


<section class=\"relative w-full overflow-hidden h-[500px]\">
    <div id=\"carousel\" class=\"flex transition-transform duration-700 ease-in-out\">

        <div class=\"min-w-full h-[500px] relative\">
            <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/smarthouse1.png"), "html", null, true);
        yield "\" alt=\"Modern Suite\" class=\"w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                <div class=\"text-center text-white\">
                    <h1 class=\"text-4xl md:text-5xl font-bold mb-4\">Welcome to StayGrid</h1>
                    <p class=\"text-lg md:text-xl\">Experience comfort and innovation in every stay.</p>
                </div>
            </div>
        </div>

        <div class=\"min-w-full h-[500px] relative\">
            <img src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/smarthouse2.png"), "html", null, true);
        yield "\" alt=\"Luxury Room\" class=\"w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                <div class=\"text-center text-white\">
                    <h1 class=\"text-4xl md:text-5xl font-bold mb-4\">Book Your Perfect Stay</h1>
                    <p class=\"text-lg md:text-xl\">Smart. Secure. Seamless.</p>
                </div>
            </div>
        </div>

        <div class=\"min-w-full h-[500px] relative\">
            <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/smarthouse3.jpg"), "html", null, true);
        yield "\" alt=\"Hotel View\" class=\"w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                <div class=\"text-center text-white\">
                    <h1 class=\"text-4xl md:text-5xl font-bold mb-4\">Discover the Difference</h1>
                    <p class=\"text-lg md:text-xl\">Where technology meets hospitality.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-3\">
        <span class=\"w-3 h-3 bg-yellow-500 rounded-full opacity-80\"></span>
        <span class=\"w-3 h-3 bg-gray-300 rounded-full opacity-80\"></span>
        <span class=\"w-3 h-3 bg-gray-300 rounded-full opacity-80\"></span>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const dots = document.querySelectorAll('section div span');
    let index = 0;

    setInterval(() => {
        index = (index + 1) % 3;
        carousel.style.transform = `translateX(-\${index * 100}%)`;

        dots.forEach((dot, i) => {
            dot.classList.remove('bg-yellow-500');
            dot.classList.add('bg-gray-300');
            if (i === index) {
                dot.classList.add('bg-yellow-500');
                dot.classList.remove('bg-gray-300');
            }
        });
    }, 5000); 
});
</script>



<header class=\"pt-20 pb-16 bg-white overflow-hidden\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-12 items-center\">
            <!-- Left Content: Text and Buttons -->
            <div class=\"text-left\">
                <h1 class=\"text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 mb-6 leading-tight\">
                    ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hero_headline"]) || array_key_exists("hero_headline", $context) ? $context["hero_headline"] : (function () { throw new RuntimeError('Variable "hero_headline" does not exist.', 134, $this->source); })()), "html", null, true);
        yield "
                </h1>
                <p class=\"mt-3 text-xl text-gray-500 mb-8 max-w-lg\">
                    ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hero_subtitle"]) || array_key_exists("hero_subtitle", $context) ? $context["hero_subtitle"] : (function () { throw new RuntimeError('Variable "hero_subtitle" does not exist.', 137, $this->source); })()), "html", null, true);
        yield "
                </p>
                <div class=\"flex space-x-4\">
                     <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
        yield "\" class=\"inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white btn-primary\">
                        Book Now &rarr;
                    </a>
                    <a href=\"/rooms\" class=\"inline-flex items-center justify-center px-6 py-3 text-base font-medium rounded-lg\" style=\"color:#FFD700; border: 2px solid #FFD700;\">
                        View Rooms
                    </a>
                </div>
            </div>

            <div class=\"hidden md:block relative w-full h-80 rounded-xl shadow-2xl overflow-hidden\">
                <div id=\"hero-slider\" class=\"absolute inset-0\">
                
                    <img class=\"absolute inset-0 w-full h-full object-cover transition-opacity duration-1000\" 
                        src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/smart_familysuite.png"), "html", null, true);
        yield "\" 
                        alt=\"Smart Family Suite View\">

                    <img class=\"absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 hidden\" 
                        src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/smart_bed.png"), "html", null, true);
        yield "\" 
                        alt=\"Smart Bed View\">

                    <img class=\"absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 hidden\" 
                        src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/smart_kitchen.png"), "html", null, true);
        yield "\" 
                        alt=\"Smart Kitchen View\">
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('hero-slider');
        if (!slider) return;

        const slides = slider.querySelectorAll('img');
        let currentSlide = 0;

        const showSlide = (index) => {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('hidden');
                } else {
                    slide.classList.add('hidden');
                }
            });
        };

        const nextSlide = () => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        };

        showSlide(currentSlide);

        setInterval(nextSlide, 3000); 
    });
</script>

";
        // line 198
        $context["features"] = [["title" => "Smart System", "icon_path" => "M9.75 17L9 20l-1 1h8l-1-1v-3m2-4v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m12 0a2 2 0 00-2-2H9a2 2 0 00-2 2m12 0h.01M17 10h.01"], ["title" => "Secure Platform", "icon_path" => "M13 10V3L4 14h7v7l9-11h-7z"], ["title" => "24/7 Support", "icon_path" => "M12 6V4m0 16v-2m8-6h2M4 12H2m15.364 6.364l1.414 1.414M6.343 6.343L4.929 4.929M17.657 6.343l1.414-1.414M6.343 17.657l-1.414 1.414"]];
        // line 203
        yield "
<section class=\"py-16 bg-white\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h2 class=\"text-3xl font-extrabold text-gray-900 text-center mb-12\">Why Choose StayGrid?</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10 text-center\">
            ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 208, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 209
            yield "                <div class=\"flex flex-col items-center\">
                    <div class=\"w-16 h-16 flex items-center justify-center rounded-full mb-4 shadow-xl feature-icon-bg\">
                        <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "icon_path", [], "any", false, false, false, 212), "html", null, true);
            yield "\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-bold text-gray-900 mb-2\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 215), "html", null, true);
            yield "</h3>
                    <p class=\"text-gray-500 text-center\">
                        Fast, reliable, and modern platform features to make your booking journey seamless.
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        yield "        </div>
    </div>
</section>


";
        // line 226
        $context["featured_rooms"] = [["name" => "Studio Deluxe", "description" => "Perfect for solo travelers or couples.", "image_url" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/studiodeluxefh.png"), "alt" => "Studio Suites View"], ["name" => "Executive Suite", "description" => "Spacious stay with a full kitchen.", "image_url" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/executiveFC.png"), "alt" => "Executive Suite View"], ["name" => "Family Apartment", "description" => "Multiple rooms ideal for groups.", "image_url" => $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/familyapartmentFH.png"), "alt" => "Family Apartment View"]];
        // line 231
        yield "
<section class=\"py-20 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h2 class=\"text-3xl font-extrabold text-gray-900 text-center mb-4\">Our Featured Stays</h2>
        <p class=\"text-xl text-gray-500 text-center mb-12\">Explore accommodations that match your style and needs.</p>
        
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featured_rooms"]) || array_key_exists("featured_rooms", $context) ? $context["featured_rooms"] : (function () { throw new RuntimeError('Variable "featured_rooms" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 239
            yield "                <div class=\"bg-white rounded-xl shadow-lg overflow-hidden transition transform hover:scale-[1.02] duration-300\">
                    <img class=\"w-full h-48 object-cover\" src=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "image_url", [], "any", false, false, false, 240), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "name", [], "any", false, false, false, 240), "html", null, true);
            yield "\">
                    <div class=\"p-6\">
                        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "name", [], "any", false, false, false, 242), "html", null, true);
            yield "</h3>
                        <p class=\"text-gray-600 mb-4\">";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["room"], "description", [], "any", false, false, false, 243), "html", null, true);
            yield "</p>
                         <a href=\"";
            // line 244
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["redirect" => "book"]);
            yield "\" class=\"inline-flex items-center text-sm font-medium transition duration-150 ease-in-out\" style=\"color: #FFD700;\">
                            Book This Stay &rarr;
                        </a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['room'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        yield "        </div>

        <div class=\"text-center mt-12\">
             <a href=\"/rooms\" class=\"inline-flex items-center justify-center px-6 py-3 text-base font-medium rounded-lg\" style=\"color:#FFD700; border: 2px solid #FFD700;\">
                View All Rooms
            </a>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing/landingpage.html.twig";
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
        return array (  394 => 250,  382 => 244,  378 => 243,  374 => 242,  367 => 240,  364 => 239,  360 => 238,  351 => 231,  349 => 226,  342 => 221,  330 => 215,  324 => 212,  319 => 209,  315 => 208,  308 => 203,  306 => 198,  266 => 161,  259 => 157,  252 => 153,  236 => 140,  230 => 137,  224 => 134,  174 => 87,  161 => 77,  148 => 67,  137 => 58,  129 => 54,  120 => 49,  118 => 48,  114 => 46,  105 => 43,  100 => 42,  95 => 41,  93 => 35,  67 => 12,  62 => 10,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set page_title = \"StayGrid\" %}
{% set hero_headline = \"Smart Stays, Staygrid\" %}
{% set hero_subtitle = \"Discover the best rooms and accommodations with an easy booking experience.\" %}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{{ page_title }}</title>

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

          {% if app.user %}
    <a href=\"{{ path('app_booking') }}\" 
       class=\"bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg transition duration-200\">
        Book Now
    </a>
{% else %}
       <a href=\"{{ path('app_login', {'redirect': 'book'}) }}\"class=\"inline-block px-6 py-3 bg-yellow-500 text-gray-900 font-semibold rounded-lg shadow-md hover:bg-yellow-400 transition\">
                        Book Now
                    </a>
{% endif %}
        </div>
    </div>
</nav>


<section class=\"relative w-full overflow-hidden h-[500px]\">
    <div id=\"carousel\" class=\"flex transition-transform duration-700 ease-in-out\">

        <div class=\"min-w-full h-[500px] relative\">
            <img src=\"{{ asset('images/smarthouse1.png') }}\" alt=\"Modern Suite\" class=\"w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                <div class=\"text-center text-white\">
                    <h1 class=\"text-4xl md:text-5xl font-bold mb-4\">Welcome to StayGrid</h1>
                    <p class=\"text-lg md:text-xl\">Experience comfort and innovation in every stay.</p>
                </div>
            </div>
        </div>

        <div class=\"min-w-full h-[500px] relative\">
            <img src=\"{{ asset('images/smarthouse2.png') }}\" alt=\"Luxury Room\" class=\"w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                <div class=\"text-center text-white\">
                    <h1 class=\"text-4xl md:text-5xl font-bold mb-4\">Book Your Perfect Stay</h1>
                    <p class=\"text-lg md:text-xl\">Smart. Secure. Seamless.</p>
                </div>
            </div>
        </div>

        <div class=\"min-w-full h-[500px] relative\">
            <img src=\"{{ asset('images/smarthouse3.jpg') }}\" alt=\"Hotel View\" class=\"w-full h-full object-cover\">
            <div class=\"absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center\">
                <div class=\"text-center text-white\">
                    <h1 class=\"text-4xl md:text-5xl font-bold mb-4\">Discover the Difference</h1>
                    <p class=\"text-lg md:text-xl\">Where technology meets hospitality.</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-3\">
        <span class=\"w-3 h-3 bg-yellow-500 rounded-full opacity-80\"></span>
        <span class=\"w-3 h-3 bg-gray-300 rounded-full opacity-80\"></span>
        <span class=\"w-3 h-3 bg-gray-300 rounded-full opacity-80\"></span>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const dots = document.querySelectorAll('section div span');
    let index = 0;

    setInterval(() => {
        index = (index + 1) % 3;
        carousel.style.transform = `translateX(-\${index * 100}%)`;

        dots.forEach((dot, i) => {
            dot.classList.remove('bg-yellow-500');
            dot.classList.add('bg-gray-300');
            if (i === index) {
                dot.classList.add('bg-yellow-500');
                dot.classList.remove('bg-gray-300');
            }
        });
    }, 5000); 
});
</script>



<header class=\"pt-20 pb-16 bg-white overflow-hidden\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-12 items-center\">
            <!-- Left Content: Text and Buttons -->
            <div class=\"text-left\">
                <h1 class=\"text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 mb-6 leading-tight\">
                    {{ hero_headline }}
                </h1>
                <p class=\"mt-3 text-xl text-gray-500 mb-8 max-w-lg\">
                    {{ hero_subtitle }}
                </p>
                <div class=\"flex space-x-4\">
                     <a href=\"{{ path('app_login', {'redirect': 'book'}) }}\" class=\"inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white btn-primary\">
                        Book Now &rarr;
                    </a>
                    <a href=\"/rooms\" class=\"inline-flex items-center justify-center px-6 py-3 text-base font-medium rounded-lg\" style=\"color:#FFD700; border: 2px solid #FFD700;\">
                        View Rooms
                    </a>
                </div>
            </div>

            <div class=\"hidden md:block relative w-full h-80 rounded-xl shadow-2xl overflow-hidden\">
                <div id=\"hero-slider\" class=\"absolute inset-0\">
                
                    <img class=\"absolute inset-0 w-full h-full object-cover transition-opacity duration-1000\" 
                        src=\"{{ asset('images/smart_familysuite.png') }}\" 
                        alt=\"Smart Family Suite View\">

                    <img class=\"absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 hidden\" 
                        src=\"{{ asset('images/smart_bed.png') }}\" 
                        alt=\"Smart Bed View\">

                    <img class=\"absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 hidden\" 
                        src=\"{{ asset('images/smart_kitchen.png') }}\" 
                        alt=\"Smart Kitchen View\">
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('hero-slider');
        if (!slider) return;

        const slides = slider.querySelectorAll('img');
        let currentSlide = 0;

        const showSlide = (index) => {
            slides.forEach((slide, i) => {
                if (i === index) {
                    slide.classList.remove('hidden');
                } else {
                    slide.classList.add('hidden');
                }
            });
        };

        const nextSlide = () => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        };

        showSlide(currentSlide);

        setInterval(nextSlide, 3000); 
    });
</script>

{% set features = [
    { title: 'Smart System', icon_path: 'M9.75 17L9 20l-1 1h8l-1-1v-3m2-4v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m12 0a2 2 0 00-2-2H9a2 2 0 00-2 2m12 0h.01M17 10h.01' },
    { title: 'Secure Platform', icon_path: 'M13 10V3L4 14h7v7l9-11h-7z' },
    { title: '24/7 Support', icon_path: 'M12 6V4m0 16v-2m8-6h2M4 12H2m15.364 6.364l1.414 1.414M6.343 6.343L4.929 4.929M17.657 6.343l1.414-1.414M6.343 17.657l-1.414 1.414' }
] %}

<section class=\"py-16 bg-white\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h2 class=\"text-3xl font-extrabold text-gray-900 text-center mb-12\">Why Choose StayGrid?</h2>
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-10 text-center\">
            {% for feature in features %}
                <div class=\"flex flex-col items-center\">
                    <div class=\"w-16 h-16 flex items-center justify-center rounded-full mb-4 shadow-xl feature-icon-bg\">
                        <svg class=\"w-8 h-8\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"{{ feature.icon_path }}\"></path>
                        </svg>
                    </div>
                    <h3 class=\"text-xl font-bold text-gray-900 mb-2\">{{ feature.title }}</h3>
                    <p class=\"text-gray-500 text-center\">
                        Fast, reliable, and modern platform features to make your booking journey seamless.
                    </p>
                </div>
            {% endfor %}
        </div>
    </div>
</section>


{% set featured_rooms = [
    { name: 'Studio Deluxe', description: 'Perfect for solo travelers or couples.', image_url: asset('images/studiodeluxefh.png'), alt: 'Studio Suites View' },
    { name: 'Executive Suite', description: 'Spacious stay with a full kitchen.', image_url: asset('images/executiveFC.png'), alt: 'Executive Suite View' },
    { name: 'Family Apartment', description: 'Multiple rooms ideal for groups.', image_url: asset('images/familyapartmentFH.png'), alt: 'Family Apartment View' }
] %}

<section class=\"py-20 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h2 class=\"text-3xl font-extrabold text-gray-900 text-center mb-4\">Our Featured Stays</h2>
        <p class=\"text-xl text-gray-500 text-center mb-12\">Explore accommodations that match your style and needs.</p>
        
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            {% for room in featured_rooms %}
                <div class=\"bg-white rounded-xl shadow-lg overflow-hidden transition transform hover:scale-[1.02] duration-300\">
                    <img class=\"w-full h-48 object-cover\" src=\"{{ room.image_url }}\" alt=\"{{ room.name }}\">
                    <div class=\"p-6\">
                        <h3 class=\"text-xl font-bold text-gray-900 mb-2\">{{ room.name }}</h3>
                        <p class=\"text-gray-600 mb-4\">{{ room.description }}</p>
                         <a href=\"{{ path('app_login', {'redirect': 'book'}) }}\" class=\"inline-flex items-center text-sm font-medium transition duration-150 ease-in-out\" style=\"color: #FFD700;\">
                            Book This Stay &rarr;
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"text-center mt-12\">
             <a href=\"/rooms\" class=\"inline-flex items-center justify-center px-6 py-3 text-base font-medium rounded-lg\" style=\"color:#FFD700; border: 2px solid #FFD700;\">
                View All Rooms
            </a>
        </div>
    </div>
</section>
</body>
</html>
", "landing/landingpage.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\landing\\landingpage.html.twig");
    }
}
