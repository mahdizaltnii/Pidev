<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/_form.html.twig */
class __TwigTemplate_0c5d5d6811334679690c9066f278e57a8f36c25c9283a45bafd3a752771145d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/_form.html.twig"));

        // line 1
        echo "  ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["postform"]) || array_key_exists("postform", $context) ? $context["postform"] : (function () { throw new RuntimeError('Variable "postform" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postform"]) || array_key_exists("postform", $context) ? $context["postform"] : (function () { throw new RuntimeError('Variable "postform" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["postform"]) || array_key_exists("postform", $context) ? $context["postform"] : (function () { throw new RuntimeError('Variable "postform" does not exist.', 4, $this->source); })()), 'widget');
        echo "

        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postform"]) || array_key_exists("postform", $context) ? $context["postform"] : (function () { throw new RuntimeError('Variable "postform" does not exist.', 6, $this->source); })()), 'form_end');
        echo "

    ";
        // line 12
        echo "       ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  57 => 6,  52 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% form_theme postform 'bootstrap_4_layout.html.twig' %}
        {{ form_start(postform,{'attr':{'novalidate':'novalidate'}}) }}

        {{ form_widget(postform) }}

        {{ form_end(postform) }}

    {# position: relative;
    width: fit-content;
    right: auto;
    left: 100px; #}
       ", "blog/_form.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\blog\\_form.html.twig");
    }
}
