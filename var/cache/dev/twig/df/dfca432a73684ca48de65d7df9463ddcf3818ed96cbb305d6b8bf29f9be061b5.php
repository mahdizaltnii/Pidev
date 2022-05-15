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

/* Front-Annonces/afficheAnnonce.html.twig */
class __TwigTemplate_426c37fc7bb777b7d29b2af4f403e3e06a2f319bc87af84f14c8ce3a4eb1dc82 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/afficheAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/afficheAnnonce.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-Annonces/afficheAnnonce.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Annonces ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
    <style>
        .grid{
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            grid-gap: 20px;
        }
        .filter{
            display:block;
            position:sticky;
            top: 20px;
        }
    </style>
    <div class=\"container\" style=\"position: relative; max-height: 100%;top: 250px;\">
        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "                <div class=\"alert alert-danger\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            <div class=\"col-md-3\">
                ";
        // line 31
        $this->loadTemplate("Front-Annonces/_filtrerannonce.html.twig", "Front-Annonces/afficheAnnonce.html.twig", 31)->display(twig_to_array(["annonceform" => (isset($context["annonceform"]) || array_key_exists("annonceform", $context) ? $context["annonceform"] : (function () { throw new RuntimeError('Variable "annonceform" does not exist.', 31, $this->source); })())]));
        // line 32
        echo "            </div>
        </div>
            <div class=\"grid\" style=\"padding-bottom: 350px; position: relative;top: 50px;\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 36
            echo "                    <div class=\"card\" style=\"position:relative;\">
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/front/annonces/img/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 37))), "html", null, true);
            echo "\" alt=\"\" class=\"card-img-top\"></a>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\" style=\"color: black;\">
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_show", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" style=\"color: black;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                            </h5>
                            <div class=\"card-title text-primary\" style=\"font-weight: bold; font-size: 1.5rem;\">
                                ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 43), "html", null, true);
            echo " TND
                            </div>
                            <p class=\"text text-muted\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                            <em class=\"text-muted text-primary text-italic\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "localisation", [], "any", false, false, false, 46), "html", null, true);
            echo "</em>
                            <br>
                            <em class=\"text-muted text-primary text-italic\">#";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "categorie", [], "any", false, false, false, 48), "nom", [], "any", false, false, false, 48), "html", null, true);
            echo "</em>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>

    </div>
    ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 55, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front-Annonces/afficheAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  195 => 52,  185 => 48,  180 => 46,  176 => 45,  171 => 43,  163 => 40,  155 => 37,  152 => 36,  148 => 35,  143 => 32,  141 => 31,  138 => 30,  129 => 27,  126 => 26,  121 => 25,  112 => 22,  109 => 21,  105 => 20,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Annonces {% endblock %}
{% block body %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
    <style>
        .grid{
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            grid-gap: 20px;
        }
        .filter{
            display:block;
            position:sticky;
            top: 20px;
        }
    </style>
    <div class=\"container\" style=\"position: relative; max-height: 100%;top: 250px;\">
        <div class=\"row\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('danger') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}
            <div class=\"col-md-3\">
                {% include 'Front-Annonces/_filtrerannonce.html.twig' with {annonceform: annonceform} only %}
            </div>
        </div>
            <div class=\"grid\" style=\"padding-bottom: 350px; position: relative;top: 50px;\">
                {% for a in annonce %}
                    <div class=\"card\" style=\"position:relative;\">
                        <a href=\"{{ path('annonce_show',{id: a.id}) }}\"><img src=\"{{ asset('/front/annonces/img/'~a.image)}}\" alt=\"\" class=\"card-img-top\"></a>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\" style=\"color: black;\">
                                <a href=\"{{ path('annonce_show',{id: a.id}) }}\" style=\"color: black;\">{{ a.title}}</a>
                            </h5>
                            <div class=\"card-title text-primary\" style=\"font-weight: bold; font-size: 1.5rem;\">
                                {{ a.prix }} TND
                            </div>
                            <p class=\"text text-muted\">{{ a.description }}</p>
                            <em class=\"text-muted text-primary text-italic\">{{ a.localisation }}</em>
                            <br>
                            <em class=\"text-muted text-primary text-italic\">#{{ a.categorie.nom}}</em>
                        </div>
                    </div>
                {% endfor %}
            </div>

    </div>
    {{ knp_pagination_render(annonce) }}
{% endblock %}", "Front-Annonces/afficheAnnonce.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-Annonces\\afficheAnnonce.html.twig");
    }
}
