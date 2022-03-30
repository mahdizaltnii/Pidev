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

/* reclamation/indexBack.html.twig */
class __TwigTemplate_e15594b5a81bde9f2537a0c281bc239d617400658bbfe160b2f62712f5278f09 extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/indexBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/indexBack.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "reclamation/indexBack.html.twig", 1);
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

        echo "Reclamation index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<center>
    <section id=\"main-content\">
        <section class=\"wrapper site-min-height\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
       <div class=\"pcoded-search-box\" style=\"position: relative; \">
        <input  type=\"text\" id=\"searchEnt\" class=\"form-control\" placeholder=\"Search\">
    


    </div> 
    <button onclick=\"myFunction()\">Click me</button>
    <p id=\"demo\"></p>

<script>
function myFunction() {
    let searchString = document.getElementById('searchEnt').value; // recuperation de l'input de la recherche
        window.location = ('http://localhost:8000/reclamation/order1/'+searchString
);
}
</script>
  




        <br>      <br>      <br>      <br>      <br>

<a class=\"btn btn-success\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decroissant");
        echo "\">Trier en ordre décroissant</a>
<a class=\"btn btn-success\"href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("croissant");
        echo "\">Trier en ordre croissant</a>
                
                
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 39
            echo "                   <tr>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"custom-box\">
                            <div class=\"servicetitle\">
                                <h4>Nom user</h4>
                                <hr>
                            </div>
                            <h5>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</h5>
                            <h5>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 47), "html", null, true);
            echo "</h5>
                            <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
                            <ul class=\"pricing\">
                                <li>";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 50), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</li>
                                <li>  ";
            // line 51
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 51))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 51), "reponse", [], "any", false, false, false, 51), "html", null, true);
                echo " ";
            } else {
                echo " <h4> pas de reponse </h4>  ";
            }
            echo "  </li>
                                <li>  </li>

                            </ul>
                            <a class=\"btn btn-theme\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show_back", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">show</a>
                            ";
            // line 56
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 56))) {
                echo "   ";
            } else {
                echo " <a class=\"btn btn-theme\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_new2", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">repondre  </a>  ";
            }
            // line 57
            echo "
                        </div>
                        <!-- end custombox -->
                    </div>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </div>
                <!--  /col-lg-12 -->
            </div>
            <!--  /row -->
        </section>
        <!-- /wrapper -->
    </section>
    
</center>
   





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/indexBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 63,  183 => 57,  175 => 56,  171 => 55,  158 => 51,  154 => 50,  149 => 48,  145 => 47,  141 => 46,  132 => 39,  128 => 38,  122 => 35,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Reclamation index{% endblock %}

{% block body %}
<center>
    <section id=\"main-content\">
        <section class=\"wrapper site-min-height\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
       <div class=\"pcoded-search-box\" style=\"position: relative; \">
        <input  type=\"text\" id=\"searchEnt\" class=\"form-control\" placeholder=\"Search\">
    


    </div> 
    <button onclick=\"myFunction()\">Click me</button>
    <p id=\"demo\"></p>

<script>
function myFunction() {
    let searchString = document.getElementById('searchEnt').value; // recuperation de l'input de la recherche
        window.location = ('http://localhost:8000/reclamation/order1/'+searchString
);
}
</script>
  




        <br>      <br>      <br>      <br>      <br>

<a class=\"btn btn-success\" href=\"{{path('decroissant') }}\">Trier en ordre décroissant</a>
<a class=\"btn btn-success\"href=\"{{path('croissant') }}\">Trier en ordre croissant</a>
                
                
                    {% for reclamation in reclamations %}
                   <tr>
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"custom-box\">
                            <div class=\"servicetitle\">
                                <h4>Nom user</h4>
                                <hr>
                            </div>
                            <h5>{{ reclamation.id }}</h5>
                            <h5>{{ reclamation.sujet }}</h5>
                            <p>{{ reclamation.description }}</p>
                            <ul class=\"pricing\">
                                <li>{{ reclamation.date ? reclamation.date|date('Y-m-d H:i:s') : '' }}</li>
                                <li>  {% if reclamation.reponse is not null %} {{ reclamation.reponse.reponse }} {% else %} <h4> pas de reponse </h4>  {% endif %}  </li>
                                <li>  </li>

                            </ul>
                            <a class=\"btn btn-theme\" href=\"{{ path('reclamation_show_back', {'id': reclamation.id}) }}\">show</a>
                            {% if reclamation.reponse is not null %}   {% else %} <a class=\"btn btn-theme\" href=\"{{ path('reponse_new2', {'id': reclamation.id}) }}\">repondre  </a>  {% endif %}

                        </div>
                        <!-- end custombox -->
                    </div>
                    </tr>
                    {% endfor %}
                </div>
                <!--  /col-lg-12 -->
            </div>
            <!--  /row -->
        </section>
        <!-- /wrapper -->
    </section>
    
</center>
   





{% endblock %}

", "reclamation/indexBack.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\reclamation\\indexBack.html.twig");
    }
}
