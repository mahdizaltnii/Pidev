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

/* stat/index.html.twig */
class __TwigTemplate_b06a844c6053836b489d0343d9c34a119ab1663e5254542ec6db882cef0e806b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stat/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "stat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello StatistiquesController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<section id=\"user\" class=\"user\">
    
        <div class=\"content-wrapper\">


<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css
\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">

<div class=\"container\">
    <canvas id=\"users\" width=\"400\" height=\"120\"></canvas>

    <canvas id=\"annonces\" width=\"400\" height=\"100\"></canvas>
</div>


<div class=\"dropbtn\">
<select id=\"mySelect\" onchange=\"myFunction()\">
  <option value=\"pie\" >reclamation</option>
  <option value=\"doughnut\">reponse</option>
</select>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js
\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
<script>
function myFunction() {

    var x = document.getElementById(\"mySelect\").value;
    let users = document.querySelector(\"#users\")
    let UserGraph    = new Chart(users, {
        type: x,
        data: {
            labels: [\"Nombre des réclamations\",\"Nombre des réponses\"],
            datasets: [{
                label: \"Répartition des Coachs\",
                data: [";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["EntreprisesNbr"]) || array_key_exists("EntreprisesNbr", $context) ? $context["EntreprisesNbr"] : (function () { throw new RuntimeError('Variable "EntreprisesNbr" does not exist.', 42, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["EtudiantsNbr"]) || array_key_exists("EtudiantsNbr", $context) ? $context["EtudiantsNbr"] : (function () { throw new RuntimeError('Variable "EtudiantsNbr" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "],
                backgroundColor: [\"#ccff00\",\"#0abab5\"]
            }]
        }
    })}
</script>
</div>
</section><!-- End Contact Section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}


{% block title %}Hello StatistiquesController!{% endblock %}

{% block body %}
<section id=\"user\" class=\"user\">
    
        <div class=\"content-wrapper\">


<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css
\" integrity=\"sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==\" crossorigin=\"anonymous\">

<div class=\"container\">
    <canvas id=\"users\" width=\"400\" height=\"120\"></canvas>

    <canvas id=\"annonces\" width=\"400\" height=\"100\"></canvas>
</div>


<div class=\"dropbtn\">
<select id=\"mySelect\" onchange=\"myFunction()\">
  <option value=\"pie\" >reclamation</option>
  <option value=\"doughnut\">reponse</option>
</select>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js
\" integrity=\"sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==\" crossorigin=\"anonymous\"></script>
<script>
function myFunction() {

    var x = document.getElementById(\"mySelect\").value;
    let users = document.querySelector(\"#users\")
    let UserGraph    = new Chart(users, {
        type: x,
        data: {
            labels: [\"Nombre des réclamations\",\"Nombre des réponses\"],
            datasets: [{
                label: \"Répartition des Coachs\",
                data: [{{ EntreprisesNbr }},{{ EtudiantsNbr }}],
                backgroundColor: [\"#ccff00\",\"#0abab5\"]
            }]
        }
    })}
</script>
</div>
</section><!-- End Contact Section -->
{%endblock %}", "stat/index.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\stat\\index.html.twig");
    }
}
