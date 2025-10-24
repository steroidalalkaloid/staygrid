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

/* admin/roomlisting/_form.html.twig */
class __TwigTemplate_97e5752b6957725be370c0f9381cdca3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/roomlisting/_form.html.twig"));

        // line 2
        $context["primary_accent"] = "#facc15";
        // line 3
        $context["secondary_dark"] = "#111827";
        // line 4
        yield "
";
        // line 5
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-10"], "enctype" => "multipart/form-data"]);
        yield "

<div>
    <h3 class=\"text-2xl font-extrabold text-secondary-dark border-b border-gray-100 pb-3 mb-6\">Room Details</h3>
    <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
        Provide the essential information for your room listing.
    </p>
</div>

<div class=\"space-y-6\">
    ";
        // line 16
        yield "    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3\">
        <label for=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "category", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "category", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "label", [], "any", false, false, false, 18), "html", null, true);
        yield "
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "category", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm"]]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 27
        yield "    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "number", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "number", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "label", [], "any", false, false, false, 29), "html", null, true);
        yield "
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "number", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm"]]);
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "number", [], "any", false, false, false, 33), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 38
        yield "    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "pricePerNight", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "pricePerNight", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "label", [], "any", false, false, false, 40), "html", null, true);
        yield "
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            <div class=\"relative mt-1 rounded-lg shadow-sm max-w-lg\">
                <div class=\"pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3\">
                    <span class=\"text-gray-500 sm:text-sm\">\$</span>
                </div>
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "pricePerNight", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "block w-full rounded-lg border-gray-300 pl-7 pr-12 focus:border-primary-accent focus:ring-primary-accent sm:text-sm", "placeholder" => "0.00"]]);
        yield "
                <div class=\"pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3\">
                    <span class=\"text-gray-500 sm:text-sm\" id=\"price-currency\">USD</span>
                </div>
            </div>
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "pricePerNight", [], "any", false, false, false, 52), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 57
        yield "    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "capacity", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "capacity", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59), "html", null, true);
        yield "
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "capacity", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm", "min" => 1]]);
        yield "
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "capacity", [], "any", false, false, false, 63), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 68
        yield "    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "label", [], "any", false, false, false, 70), "html", null, true);
        yield "
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), 'widget', ["attr" => ["rows" => 4, "class" => "block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm", "placeholder" => "A cozy room with a view..."]]);
        yield "
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 79
        yield "    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            Mark as Unavailable (Admin Block)
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            <div class=\"flex items-center\">
                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "isBlocked", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "h-5 w-5 rounded border-gray-300 text-primary-accent focus:ring-primary-accent"]]);
        yield "
                <label for=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "isBlocked", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        yield "\" class=\"ml-2 block text-sm text-secondary-dark font-medium\">
                    ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "isBlocked", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "label", [], "any", false, false, false, 87), "html", null, true);
        yield "
                </label>
            </div>
            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "isBlocked", [], "any", false, false, false, 90), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 95
        yield "    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "image", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            Room Image
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "image", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "block w-full text-sm text-gray-500 file:border file:border-gray-300 file:rounded-lg file:px-3 file:py-2 file:text-sm file:font-medium file:bg-white file:text-secondary-dark hover:file:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent"]]);
        yield "
            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "image", [], "any", false, false, false, 101), 'errors');
        yield "
            ";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "image", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/rooms/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "vars", [], "any", false, false, false, 103), "value", [], "any", false, false, false, 103), "image", [], "any", false, false, false, 103))), "html", null, true);
            yield "\" alt=\"Room Image\" class=\"mt-3 max-h-40 rounded-lg shadow-sm\">
            ";
        }
        // line 105
        yield "        </div>
    </div>
</div>

<div class=\"pt-6 border-t border-gray-200\">
    <div class=\"flex justify-end space-x-3\">
        <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_roomlisting_index");
        yield "\" 
           class=\"rounded-lg border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:ring-offset-2 transition\">
            Cancel
        </a>
        
        <button type=\"submit\" 
                class=\"inline-flex justify-center rounded-lg border border-transparent bg-primary-accent py-2 px-4 text-sm font-bold text-secondary-dark shadow-lg hover:bg-primary-accent/90 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:ring-offset-2 transition\">
            ";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 118, $this->source); })()), "Save Room")) : ("Save Room")), "html", null, true);
        yield "
        </button>
    </div>
</div>

";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        yield "
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
        return "admin/roomlisting/_form.html.twig";
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
        return array (  277 => 123,  269 => 118,  259 => 111,  251 => 105,  245 => 103,  243 => 102,  239 => 101,  235 => 100,  228 => 96,  225 => 95,  218 => 90,  212 => 87,  208 => 86,  204 => 85,  196 => 79,  189 => 74,  185 => 73,  179 => 70,  175 => 69,  172 => 68,  165 => 63,  161 => 62,  155 => 59,  151 => 58,  148 => 57,  141 => 52,  133 => 47,  123 => 40,  119 => 39,  116 => 38,  109 => 33,  105 => 32,  99 => 29,  95 => 28,  92 => 27,  85 => 22,  81 => 21,  75 => 18,  71 => 17,  68 => 16,  55 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/roomlisting/_form.html.twig #}
{% set primary_accent = '#facc15' %}
{% set secondary_dark = '#111827' %}

{{ form_start(form, {'attr': {'class': 'space-y-10'}, 'enctype': 'multipart/form-data'}) }}

<div>
    <h3 class=\"text-2xl font-extrabold text-secondary-dark border-b border-gray-100 pb-3 mb-6\">Room Details</h3>
    <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
        Provide the essential information for your room listing.
    </p>
</div>

<div class=\"space-y-6\">
    {# Room Category #}
    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3\">
        <label for=\"{{ form.category.vars.id }}\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            {{ form.category.vars.label }}
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            {{ form_widget(form.category, {'attr': {'class': 'block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm'}}) }}
            {{ form_errors(form.category) }}
        </div>
    </div>

    {# Room Number #}
    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"{{ form.number.vars.id }}\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            {{ form.number.vars.label }}
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            {{ form_widget(form.number, {'attr': {'class': 'block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm'}}) }}
            {{ form_errors(form.number) }}
        </div>
    </div>

    {# Price Per Night #}
    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"{{ form.pricePerNight.vars.id }}\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            {{ form.pricePerNight.vars.label }}
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            <div class=\"relative mt-1 rounded-lg shadow-sm max-w-lg\">
                <div class=\"pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3\">
                    <span class=\"text-gray-500 sm:text-sm\">\$</span>
                </div>
                {{ form_widget(form.pricePerNight, {'attr': {'class': 'block w-full rounded-lg border-gray-300 pl-7 pr-12 focus:border-primary-accent focus:ring-primary-accent sm:text-sm','placeholder': '0.00'}}) }}
                <div class=\"pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3\">
                    <span class=\"text-gray-500 sm:text-sm\" id=\"price-currency\">USD</span>
                </div>
            </div>
            {{ form_errors(form.pricePerNight) }}
        </div>
    </div>

    {# Capacity #}
    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"{{ form.capacity.vars.id }}\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            {{ form.capacity.vars.label }}
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            {{ form_widget(form.capacity, {'attr': {'class': 'block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm','min': 1}}) }}
            {{ form_errors(form.capacity) }}
        </div>
    </div>

    {# Description #}
    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"{{ form.description.vars.id }}\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            {{ form.description.vars.label }}
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            {{ form_widget(form.description, {'attr': {'rows': 4,'class': 'block w-full max-w-lg rounded-lg border-gray-300 shadow-sm focus:border-primary-accent focus:ring-primary-accent sm:text-sm','placeholder': 'A cozy room with a view...'}}) }}
            {{ form_errors(form.description) }}
        </div>
    </div>

    {# 🔹 Admin Block Toggle #}
    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            Mark as Unavailable (Admin Block)
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            <div class=\"flex items-center\">
                {{ form_widget(form.isBlocked, {'attr': {'class': 'h-5 w-5 rounded border-gray-300 text-primary-accent focus:ring-primary-accent'}}) }}
                <label for=\"{{ form.isBlocked.vars.id }}\" class=\"ml-2 block text-sm text-secondary-dark font-medium\">
                    {{ form.isBlocked.vars.label }}
                </label>
            </div>
            {{ form_errors(form.isBlocked) }}
        </div>
    </div>

    {# Image Upload #}
    <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start pt-3 border-t border-gray-100\">
        <label for=\"{{ form.image.vars.id }}\" class=\"block text-sm font-medium text-secondary-dark sm:mt-px sm:pt-2\">
            Room Image
        </label>
        <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
            {{ form_widget(form.image, {'attr': {'class': 'block w-full text-sm text-gray-500 file:border file:border-gray-300 file:rounded-lg file:px-3 file:py-2 file:text-sm file:font-medium file:bg-white file:text-secondary-dark hover:file:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:border-primary-accent'}}) }}
            {{ form_errors(form.image) }}
            {% if form.vars.value.image %}
                <img src=\"{{ asset('uploads/rooms/' ~ form.vars.value.image) }}\" alt=\"Room Image\" class=\"mt-3 max-h-40 rounded-lg shadow-sm\">
            {% endif %}
        </div>
    </div>
</div>

<div class=\"pt-6 border-t border-gray-200\">
    <div class=\"flex justify-end space-x-3\">
        <a href=\"{{ path('app_admin_roomlisting_index') }}\" 
           class=\"rounded-lg border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:ring-offset-2 transition\">
            Cancel
        </a>
        
        <button type=\"submit\" 
                class=\"inline-flex justify-center rounded-lg border border-transparent bg-primary-accent py-2 px-4 text-sm font-bold text-secondary-dark shadow-lg hover:bg-primary-accent/90 focus:outline-none focus:ring-2 focus:ring-primary-accent focus:ring-offset-2 transition\">
            {{ button_label|default('Save Room') }}
        </button>
    </div>
</div>

{{ form_end(form) }}
", "admin/roomlisting/_form.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\admin\\roomlisting\\_form.html.twig");
    }
}
