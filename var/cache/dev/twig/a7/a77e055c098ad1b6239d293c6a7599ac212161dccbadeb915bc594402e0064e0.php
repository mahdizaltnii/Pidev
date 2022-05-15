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

/* event/pdf.html.twig */
class __TwigTemplate_3d2c5728434a3728c3c16ca9c796174a56c17289e43b0b3a741d5fd3ef38d974 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/pdf.html.twig"));

        // line 1
        echo " <div class=\"content-wrapper\">

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
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

        echo " Gestion Des Evenements ";
        
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
        echo "<style type=\"text/css\">
        {
            font-family: Candara, Arial, sans-serif;
        }
         h1{
            font-family: Candara, Arial, sans-serif;
            color:blue;
            position: initial;
       
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }
        .gray {
            background-color: lightgreen;
        }
    </style>
    <style>
        table, td, th {
            border: 2px solid;
            background-color: #d1b771; 
        }

        table {
            width: 100%;
            border-collapse: separate;
             border-spacing: 10px;

            font-size: 10px;
        }
    </style>
<section id=\"user\" class=\"user\">
    <br>
    <br>
    <br>
    <div class=\"content-wrapper\">
    <h1>LISTE DES EVENEMENTS </h1>
   
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>NomEvenement</th>
                <th>Description</th>
                <th>lieu</th>
                <th>picture</th>
             
                <th>Date</th>
              
            </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 59
            echo "            <tr>
                
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "Name", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "lieu", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
              <td> <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, ("Uploads/image/" . twig_get_attribute($this->env, $this->source, $context["evenement"], "picture", [], "any", false, false, false, 64)), "html", null, true);
            echo "\" style=\"width: 80px\" style=\"height:60px\"></td> 
                <td>";
            // line 65
            ((twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
               
              
            </tr>
       
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>

</div>
</section><!-- End Contact Section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 72,  171 => 65,  167 => 64,  163 => 63,  159 => 62,  155 => 61,  151 => 59,  147 => 58,  93 => 6,  83 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"content-wrapper\">

{% block title %} Gestion Des Evenements {% endblock %}

{% block body %}
<style type=\"text/css\">
        {
            font-family: Candara, Arial, sans-serif;
        }
         h1{
            font-family: Candara, Arial, sans-serif;
            color:blue;
            position: initial;
       
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }
        .gray {
            background-color: lightgreen;
        }
    </style>
    <style>
        table, td, th {
            border: 2px solid;
            background-color: #d1b771; 
        }

        table {
            width: 100%;
            border-collapse: separate;
             border-spacing: 10px;

            font-size: 10px;
        }
    </style>
<section id=\"user\" class=\"user\">
    <br>
    <br>
    <br>
    <div class=\"content-wrapper\">
    <h1>LISTE DES EVENEMENTS </h1>
   
    <table class=\"table\">
        <thead>
            <tr>
                
                <th>NomEvenement</th>
                <th>Description</th>
                <th>lieu</th>
                <th>picture</th>
             
                <th>Date</th>
              
            </tr>
        </thead>
        <tbody>
        {% for evenement in event %}
            <tr>
                
                <td>{{ evenement.Name }}</td>
                <td>{{ evenement.description }}</td>
                <td>{{ evenement.lieu }}</td>
              <td> <img src=\"{{ 'Uploads/image/' ~evenement.picture }}\" style=\"width: 80px\" style=\"height:60px\"></td> 
                <td>{{ evenement.date ? evenement.date|date('Y-m-d') : '' }}</td>
               
              
            </tr>
       
            
        {% endfor %}
        </tbody>
    </table>

</div>
</section><!-- End Contact Section -->
{% endblock %}", "event/pdf.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\event\\pdf.html.twig");
    }
}
