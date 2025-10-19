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

/* roomlisting/_form.html.twig */
class __TwigTemplate_cd4d20d7add43534b29e78bfda235135 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roomlisting/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "roomlisting/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-8 divide-y divide-gray-200"]]);
        yield "

    <div class=\"space-y-8 divide-y divide-gray-200 sm:space-y-5\">
        <div>
            <h3 class=\"text-xl leading-6 font-medium text-gray-900\">Room Details</h3>
            <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                Provide the essential information for your new room listing.
            </p>

            <div class=\"mt-6 space-y-6 sm:space-y-5\">
                
                ";
        // line 15
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "category", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "category", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "label", [], "any", false, false, false, 17), "html", null, true);
        yield "
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "category", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"]]);
        // line 22
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "category", [], "any", false, false, false, 23), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 28
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "number", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "number", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "label", [], "any", false, false, false, 30), "html", null, true);
        yield "
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "number", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm"]]);
        // line 35
        yield "
                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "number", [], "any", false, false, false, 36), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 41
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "pricePerNight", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "pricePerNight", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "label", [], "any", false, false, false, 43), "html", null, true);
        yield "
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        <div class=\"relative mt-1 rounded-md shadow-sm max-w-lg\">
                            <div class=\"pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3\">
                                <span class=\"text-gray-500 sm:text-sm\">\$</span>
                            </div>
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "pricePerNight", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm", "placeholder" => "0.00"]]);
        // line 53
        yield "
                            <div class=\"pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3\">
                                <span class=\"text-gray-500 sm:text-sm\" id=\"price-currency\">USD</span>
                            </div>
                        </div>
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "pricePerNight", [], "any", false, false, false, 58), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 63
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "capacity", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "capacity", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65), "html", null, true);
        yield "
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "capacity", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm", "min" => 1]]);
        // line 71
        yield "
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "capacity", [], "any", false, false, false, 72), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 77
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        yield "\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "label", [], "any", false, false, false, 79), "html", null, true);
        yield "
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'widget', ["attr" => ["rows" => 4, "class" => "block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm", "placeholder" => "A cozy room with a view..."]]);
        // line 86
        yield "
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "description", [], "any", false, false, false, 87), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 92
        yield "                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        Availability
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        <div class=\"flex items-center\">
                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "isAvailable", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray-300 text-yellow-600 focus:ring-yellow-500"]]);
        // line 100
        yield "
                            <label for=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "isAvailable", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "html", null, true);
        yield "\" class=\"ml-2 block text-sm text-gray-900\">
                                ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "isAvailable", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "label", [], "any", false, false, false, 102), "html", null, true);
        yield "
                            </label>
                        </div>
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "isAvailable", [], "any", false, false, false, 105), 'errors');
        yield "
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"pt-5\">
        <div class=\"flex justify-end\">
            <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_roomlisting_index");
        yield "\" class=\"rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2\">
                Cancel
            </a>
            <button type=\"submit\" 
                    class=\"ml-3 inline-flex justify-center rounded-md border border-transparent bg-yellow-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2\">
                ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 120, $this->source); })()), "Create Room")) : ("Create Room")), "html", null, true);
        yield "
            </button>
        </div>
    </div>

";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "roomlisting/_form.html.twig";
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
        return array (  250 => 125,  242 => 120,  234 => 115,  221 => 105,  215 => 102,  211 => 101,  208 => 100,  206 => 98,  198 => 92,  191 => 87,  188 => 86,  186 => 82,  180 => 79,  176 => 78,  173 => 77,  166 => 72,  163 => 71,  161 => 68,  155 => 65,  151 => 64,  148 => 63,  141 => 58,  134 => 53,  132 => 50,  122 => 43,  118 => 42,  115 => 41,  108 => 36,  105 => 35,  103 => 33,  97 => 30,  93 => 29,  90 => 28,  83 => 23,  80 => 22,  78 => 20,  72 => 17,  68 => 16,  65 => 15,  51 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/roomlisting/_form.html.twig #}

{{ form_start(form, {'attr': {'class': 'space-y-8 divide-y divide-gray-200'}}) }}

    <div class=\"space-y-8 divide-y divide-gray-200 sm:space-y-5\">
        <div>
            <h3 class=\"text-xl leading-6 font-medium text-gray-900\">Room Details</h3>
            <p class=\"mt-1 max-w-2xl text-sm text-gray-500\">
                Provide the essential information for your new room listing.
            </p>

            <div class=\"mt-6 space-y-6 sm:space-y-5\">
                
                {# NEW: Room Category #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"{{ form.category.vars.id }}\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        {{ form.category.vars.label }}
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        {{ form_widget(form.category, {'attr': {
                            'class': 'block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm'
                        }}) }}
                        {{ form_errors(form.category) }}
                    </div>
                </div>

                {# Room Number/Code #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"{{ form.number.vars.id }}\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        {{ form.number.vars.label }}
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        {{ form_widget(form.number, {'attr': {
                            'class': 'block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm'
                        }}) }}
                        {{ form_errors(form.number) }}
                    </div>
                </div>

                {# Price Per Night #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"{{ form.pricePerNight.vars.id }}\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        {{ form.pricePerNight.vars.label }}
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        <div class=\"relative mt-1 rounded-md shadow-sm max-w-lg\">
                            <div class=\"pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3\">
                                <span class=\"text-gray-500 sm:text-sm\">\$</span>
                            </div>
                            {{ form_widget(form.pricePerNight, {'attr': {
                                'class': 'block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm',
                                'placeholder': '0.00'
                            }}) }}
                            <div class=\"pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3\">
                                <span class=\"text-gray-500 sm:text-sm\" id=\"price-currency\">USD</span>
                            </div>
                        </div>
                        {{ form_errors(form.pricePerNight) }}
                    </div>
                </div>

                {# Max Capacity (Guests) #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"{{ form.capacity.vars.id }}\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        {{ form.capacity.vars.label }}
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        {{ form_widget(form.capacity, {'attr': {
                            'class': 'block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm',
                            'min': 1
                        }}) }}
                        {{ form_errors(form.capacity) }}
                    </div>
                </div>

                {# Description #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label for=\"{{ form.description.vars.id }}\" class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        {{ form.description.vars.label }}
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        {{ form_widget(form.description, {'attr': {
                            'rows': 4,
                            'class': 'block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm',
                            'placeholder': 'A cozy room with a view...'
                        }}) }}
                        {{ form_errors(form.description) }}
                    </div>
                </div>

                {# Room is currently available? #}
                <div class=\"sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5\">
                    <label class=\"block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2\">
                        Availability
                    </label>
                    <div class=\"mt-1 sm:col-span-2 sm:mt-0\">
                        <div class=\"flex items-center\">
                            {{ form_widget(form.isAvailable, {'attr': {
                                'class': 'h-4 w-4 rounded border-gray-300 text-yellow-600 focus:ring-yellow-500'
                            }}) }}
                            <label for=\"{{ form.isAvailable.vars.id }}\" class=\"ml-2 block text-sm text-gray-900\">
                                {{ form.isAvailable.vars.label }}
                            </label>
                        </div>
                        {{ form_errors(form.isAvailable) }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=\"pt-5\">
        <div class=\"flex justify-end\">
            <a href=\"{{ path('app_roomlisting_index') }}\" class=\"rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2\">
                Cancel
            </a>
            <button type=\"submit\" 
                    class=\"ml-3 inline-flex justify-center rounded-md border border-transparent bg-yellow-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2\">
                {{ button_label|default('Create Room') }}
            </button>
        </div>
    </div>

{{ form_end(form) }}", "roomlisting/_form.html.twig", "C:\\Users\\Jervine Alvarico\\staygrid\\staygrid\\templates\\roomlisting\\_form.html.twig");
    }
}
