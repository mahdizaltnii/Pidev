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

/* reclamation/index.html.twig */
class __TwigTemplate_2e362e195df0ce47454a4fe3b8a9ea16c4bb17e6a94feb4240e1907854328d38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "reclamation/index.html.twig", 1);
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
        echo "<br><br><br><br><br>
    <div class=\"clients\">
        <div class=\"client-head\">
        <br><br><br><br>


        


<style type=\"text/css\">
        {
            font-family: Candara, Arial, sans-serif;
        }
     
        h1{
            font-family: monospace;
            color:blue;
            position: initial;
         }
        
    </style>
         }







            
            <h1>what customer say about us !</h1>
       <section class=\"vs-events-wrapper events-layout1 space-top space-md-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
           ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 42
            echo "                
                    <div
                            class=\"vs-events d-lg-flex\"
                            data-bg-src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/shape/events-bg-1.png"), "html", null, true);
            echo "\"
                    >
                      
                        <div class=\"media-body align-self-center\">
                            <h3 class=\"events-name h5 text-dark\">
                                <a href=\"tournament-details.html\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "sujet", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>
                            </h3>
                            <ul class=\"events-list list-style-none\">
                                ";
            // line 53
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 53))) {
                echo "<p>reponse: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 53), "reponse", [], "any", false, false, false, 53), "html", null, true);
                echo "  date reponse : ";
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 53), "date", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 53), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "<p>";
            } else {
                echo " <h4> pas de reponse </h4> ";
            }
            // line 54
            echo "                    <label> ";
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 54), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</label>


                                <li class=\"text-dark\">
                                    <span class=\"text-dark\">Description:</span>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 58), "html", null, true);
            echo "
                                </li>
                                <div>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">show</button></a>
                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"><button class=\"btn btn-primary \">edit</button></a>
                        </div>
                            </ul>
                        </div>
                    </div>
               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                </div>


                </div>
            
        </div>
    </section>

    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_new");
        echo "\"><button class=\"btn \">Create new</button></a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 78,  189 => 69,  176 => 62,  172 => 61,  166 => 58,  158 => 54,  148 => 53,  142 => 50,  134 => 45,  129 => 42,  125 => 41,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Reclamation index{% endblock %}

{% block body %}
<br><br><br><br><br>
    <div class=\"clients\">
        <div class=\"client-head\">
        <br><br><br><br>


        


<style type=\"text/css\">
        {
            font-family: Candara, Arial, sans-serif;
        }
     
        h1{
            font-family: monospace;
            color:blue;
            position: initial;
         }
        
    </style>
         }







            
            <h1>what customer say about us !</h1>
       <section class=\"vs-events-wrapper events-layout1 space-top space-md-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
           {% for reclamation in reclamations %}
                
                    <div
                            class=\"vs-events d-lg-flex\"
                            data-bg-src=\"{{asset('Front/img/shape/events-bg-1.png')}}\"
                    >
                      
                        <div class=\"media-body align-self-center\">
                            <h3 class=\"events-name h5 text-dark\">
                                <a href=\"tournament-details.html\">{{ reclamation.sujet }}</a>
                            </h3>
                            <ul class=\"events-list list-style-none\">
                                {% if reclamation.reponse is not null %}<p>reponse: {{ reclamation.reponse.reponse }}  date reponse : {{ reclamation.reponse.date ? reclamation.date|date('Y-m-d H:i:s') : '' }}<p>{% else %} <h4> pas de reponse </h4> {% endif %}
                    <label> {{ reclamation.date ? reclamation.date|date('Y-m-d H:i:s') : '' }}</label>


                                <li class=\"text-dark\">
                                    <span class=\"text-dark\">Description:</span>{{ reclamation.description }}
                                </li>
                                <div>
                            <a href=\"{{ path('reclamation_show', {'id': reclamation.id}) }}\"><button class=\"btn btn-primary\">show</button></a>
                            <a href=\"{{ path('reclamation_edit', {'id': reclamation.id}) }}\"><button class=\"btn btn-primary \">edit</button></a>
                        </div>
                            </ul>
                        </div>
                    </div>
               
                {% endfor %}

                </div>


                </div>
            
        </div>
    </section>

    <a href=\"{{ path('reclamation_new') }}\"><button class=\"btn \">Create new</button></a>
{% endblock %}", "reclamation/index.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\reclamation\\index.html.twig");
    }
}
