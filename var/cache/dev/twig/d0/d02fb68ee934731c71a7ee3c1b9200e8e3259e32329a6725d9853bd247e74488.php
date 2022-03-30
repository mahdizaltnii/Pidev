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

/* Front-Annonces/_filtrerannonce.html.twig */
class __TwigTemplate_b831af1664bb61b64c2a370a92e0946d96e38aaeb590884a3479c252785feae6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/_filtrerannonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/_filtrerannonce.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "filter"]]);
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 3, $this->source); })()), "q", [], "any", false, false, false, 3), 'row');
        echo "

    <h4 style=\"color: black;\">Catégorie</h4>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 6, $this->source); })()), "categorie", [], "any", false, false, false, 6), 'row');
        echo "

    <h4 style=\"color: black;\">Prix</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 11, $this->source); })()), "min", [], "any", false, false, false, 11), 'row');
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 14, $this->source); })()), "max", [], "any", false, false, false, 14), 'row');
        echo "
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"margin-bottom: 10px;\">Filtrer</button>
    <button type=\"submit\" class=\"btn btn-primary w-100\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutAnnonce");
        echo "\">Ajouter un Annonce</a></button>
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Front-Annonces/_filtrerannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  78 => 19,  70 => 14,  64 => 11,  56 => 6,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(annonceform, {attr: {class: 'filter' }}) }}
    {{ form_row(annonceform.q) }}

    <h4 style=\"color: black;\">Catégorie</h4>
    {{ form_row(annonceform.categorie) }}

    <h4 style=\"color: black;\">Prix</h4>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_row(annonceform.min) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(annonceform.max) }}
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"margin-bottom: 10px;\">Filtrer</button>
    <button type=\"submit\" class=\"btn btn-primary w-100\"><a href=\"{{ path('ajoutAnnonce') }}\">Ajouter un Annonce</a></button>
{{ form_end(annonceform) }}
", "Front-Annonces/_filtrerannonce.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-Annonces\\_filtrerannonce.html.twig");
    }
}
