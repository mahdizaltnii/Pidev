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

/* Front-Annonces/show_annonce.html.twig */
class __TwigTemplate_c16125e44fa036410d7891bb91a877997235f7b85954ae81e65db209749d9abf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/show_annonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-Annonces/show_annonce.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-Annonces/show_annonce.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/c31c51f939.js\" crossorigin=\"anonymous\"></script>

<div class=\"container mt-4\" style=\"position: relative; max-height: 100%;top: 250px;\">
        <div class=\"row\" style=\"padding-bottom: 350px; position: relative;top: 50px;\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            <div class=\"col-md-8\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/front/annonces/img/" . twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" alt=\"\" class=\"card-img-top\">
            </div>
            <div class=\"col-md-4\">
                <p style=\"color:#6610f2; font-size:21px; font-weight: 700;\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "html", null, true);
        echo " DT</p>
                <p style=\"color: black; font-size: 18px; font-weight: 500;line-height: 30px;\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                <hr>
                <i class=\"fa-solid fa-phone\" style=\"color: black;\"></i><p style=\"color:black; margin-bottom: 20px;position:relative;font-size: 15px;display: inline; margin-left: 10px;\">+216 ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 21, $this->source); })()), "tel", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
                <br>
                <i class=\"fa-solid fa-bars-progress\" style=\"color: black;\"></i><p style=\"color:black; margin-bottom: 20px; position:relative; font-size: 15px;display: inline; margin-left: 10px;\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 23, $this->source); })()), "categorie", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                <br>
                <i class=\"fa-solid fa-location-dot\" style=\"color: black;\"></i><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("https://www.google.com/maps/place/" . twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 25, $this->source); })()), "localisation", [], "any", false, false, false, 25))), "html", null, true);
        echo "\" style=\"color:black;margin-bottom: 20px;position:relative; font-size: 15px; display: inline; margin-left: 10px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 25, $this->source); })()), "localisation", [], "any", false, false, false, 25), "html", null, true);
        echo "</a>
                <hr>
                <br>
                <p style=\"color: #6610f2; font-size: 21px; font-weight: 600; margin-left:0; padding-left: 0;\">Description : </p>
                <p style=\"padding: 8px 8px 8px 0px; color: black\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                <br>
                <button type=\"submit\" class=\"btn btn-primary w-100\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_annonce", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">Modifier Annonce</a></button>
                <br><br>
                <button type=\"submit\" class=\"btn btn-danger w-100\"><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_annonce", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">Delete Annonce</a></button><br><br>
                <button type=\"submit\" class=\"btn btn-primary
                 w-100\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listAnnoncesF");
        echo "\">Retourner aux listes</a></button>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front-Annonces/show_annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 35,  138 => 33,  133 => 31,  128 => 29,  119 => 25,  114 => 23,  109 => 21,  104 => 19,  100 => 18,  94 => 15,  91 => 14,  82 => 11,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block body %}
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/c31c51f939.js\" crossorigin=\"anonymous\"></script>

<div class=\"container mt-4\" style=\"position: relative; max-height: 100%;top: 250px;\">
        <div class=\"row\" style=\"padding-bottom: 350px; position: relative;top: 50px;\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}
            <div class=\"col-md-8\">
                <img src=\"{{ asset('/front/annonces/img/'~annonce.image)}}\" alt=\"\" class=\"card-img-top\">
            </div>
            <div class=\"col-md-4\">
                <p style=\"color:#6610f2; font-size:21px; font-weight: 700;\">{{ annonce.prix }} DT</p>
                <p style=\"color: black; font-size: 18px; font-weight: 500;line-height: 30px;\">{{ annonce.title }}</p>
                <hr>
                <i class=\"fa-solid fa-phone\" style=\"color: black;\"></i><p style=\"color:black; margin-bottom: 20px;position:relative;font-size: 15px;display: inline; margin-left: 10px;\">+216 {{ annonce.tel }}</p>
                <br>
                <i class=\"fa-solid fa-bars-progress\" style=\"color: black;\"></i><p style=\"color:black; margin-bottom: 20px; position:relative; font-size: 15px;display: inline; margin-left: 10px;\">{{ annonce.categorie.nom }}</p>
                <br>
                <i class=\"fa-solid fa-location-dot\" style=\"color: black;\"></i><a href=\"{{ asset('https://www.google.com/maps/place/'~annonce.localisation) }}\" style=\"color:black;margin-bottom: 20px;position:relative; font-size: 15px; display: inline; margin-left: 10px;\">{{ annonce.localisation }}</a>
                <hr>
                <br>
                <p style=\"color: #6610f2; font-size: 21px; font-weight: 600; margin-left:0; padding-left: 0;\">Description : </p>
                <p style=\"padding: 8px 8px 8px 0px; color: black\">{{ annonce.description}}</p>
                <br>
                <button type=\"submit\" class=\"btn btn-primary w-100\"><a href=\"{{ path('edit_annonce',{'id':annonce.id}) }}\">Modifier Annonce</a></button>
                <br><br>
                <button type=\"submit\" class=\"btn btn-danger w-100\"><a href=\"{{ path('delete_annonce',{'id':annonce.id} )}}\">Delete Annonce</a></button><br><br>
                <button type=\"submit\" class=\"btn btn-primary
                 w-100\"><a href=\"{{ path('listAnnoncesF') }}\">Retourner aux listes</a></button>

            </div>
        </div>
    </div>

{% endblock %}
", "Front-Annonces/show_annonce.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-Annonces\\show_annonce.html.twig");
    }
}
