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

/* Front-Annonces/ajoutAnnonce.html.twig */
class __TwigTemplate_1526c27fa9581274f45918713cb04660a4bb579fecf965558e0d05c6b12a4918 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/ajoutAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/ajoutAnnonce.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-Annonces/ajoutAnnonce.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <section class=\"vs-match-wrapper vs-match-layout1 newsletter-pb\" style=\"padding-bottom: 280px; position: relative;top: 50px;\">
    <div class=\"container\" style=\"position:relative; max-height:100%;top: 200px;\">
        ";
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 5, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 6
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 8, $this->source); })()), 'widget');
        echo "

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 10, $this->source); })()), 'form_end');
        echo "
        <button type=\"submit\" class=\"btn btn-primary\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listAnnoncesF");
        echo "\">Retourner aux listes d'annonces</a></button>
    </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front-Annonces/ajoutAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 11,  85 => 10,  80 => 8,  74 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block body %}
    <section class=\"vs-match-wrapper vs-match-layout1 newsletter-pb\" style=\"padding-bottom: 280px; position: relative;top: 50px;\">
    <div class=\"container\" style=\"position:relative; max-height:100%;top: 200px;\">
        {% form_theme annonceform 'bootstrap_4_layout.html.twig' %}
        {{ form_start(annonceform, {'attr': {'novalidate': 'novalidate'}}) }}

        {{ form_widget(annonceform) }}

        {{ form_end(annonceform) }}
        <button type=\"submit\" class=\"btn btn-primary\"><a href=\"{{ path('listAnnoncesF') }}\">Retourner aux listes d'annonces</a></button>
    </div>
    </section>
{% endblock %}", "Front-Annonces/ajoutAnnonce.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-Annonces\\ajoutAnnonce.html.twig");
    }
}
