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

/* event/index.html.twig */
class __TwigTemplate_70f85ab3f626b26f04d0e396cfafcddf149c78578f5f42483b0e664e0f630d4e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "event/index.html.twig", 1);
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

        echo "Gestion Des Evenements";
        
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
        echo "    <h1>Gestion Des Evenements</h1>
    <br> <br>
  <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_pdf");
        echo "\"> PDF</a>
  <br> <br>
  <div class=\"pcoded-search-box\" style=\"position: relative; \">
        <input onkeyup=\"searchEnt()\" type=\"text\" id=\"searchEnt\" class=\"form-control\" placeholder=\"Search\">
    </div>
    <br> 
     <a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DESCr");
        echo "\">Décroissant</a>
<a class=\"btn btn-success\"href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ASCr");
        echo "\">Croissant</a>
     <br> <br>           
    <table class=\"table\">
    
        <thead>
          <tr >
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>Description</th>
                <th>Picture</th>
             
            </tr>
        </thead>
        <tbody>








        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 40
            echo "            <tr name=\"elements\" id=\"";
            echo twig_escape_filter($this->env, ("event" . twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 40)), "html", null, true);
            echo "\">
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
               <td ><img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/image/" . twig_get_attribute($this->env, $this->source, $context["event"], "picture", [], "any", false, false, false, 46))), "html", null, true);
            echo "\" style=\"width: 60px\" style=\"height:60px\"></td>
                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
        
    </table>
    <script >

function searchEnt() {
    let searchString = document.getElementById('searchEnt').value; // recuperation de l'input de la recherche
    const elements = document.getElementsByName('elements') //recuperation de la reference du dom (liste des tr)
    if (searchString.length!==0){
        \$.ajax({
            url: '/event/search1/'+searchString,
            success: function (data) {
                console.log(\"data :\",data)
                for (let i = 0; i < elements.length; i++){
                    elements[i].style.display = \"none\";
                }
                for (let j = 0; j < data.length; j++) {
                    \$('#event'+data[j].id).show('slow');
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(\"erreur lors de la recuperation des données\")
            }
        });
    }else{
        for (let i = 0; i < elements.length; i++){
            elements[i].style.display = \"revert\";
        }
    }
}
</script>
    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
        echo "\">Create new</a>
    <br>
    
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 88,  189 => 57,  180 => 53,  171 => 49,  167 => 48,  162 => 46,  158 => 45,  154 => 44,  150 => 43,  146 => 42,  142 => 41,  137 => 40,  132 => 39,  105 => 15,  101 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Gestion Des Evenements{% endblock %}

{% block body %}
    <h1>Gestion Des Evenements</h1>
    <br> <br>
  <a href=\"{{ path('evenement_pdf') }}\"> PDF</a>
  <br> <br>
  <div class=\"pcoded-search-box\" style=\"position: relative; \">
        <input onkeyup=\"searchEnt()\" type=\"text\" id=\"searchEnt\" class=\"form-control\" placeholder=\"Search\">
    </div>
    <br> 
     <a class=\"btn btn-success\" href=\"{{path('DESCr') }}\">Décroissant</a>
<a class=\"btn btn-success\"href=\"{{path('ASCr') }}\">Croissant</a>
     <br> <br>           
    <table class=\"table\">
    
        <thead>
          <tr >
                <th>Id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>Description</th>
                <th>Picture</th>
             
            </tr>
        </thead>
        <tbody>








        {% for event in events %}
            <tr name=\"elements\" id=\"{{'event'~ event.id}}\">
                <td>{{ event.id }}</td>
                <td>{{ event.Name }}</td>
                <td>{{ event.date ? event.date|date('Y-m-d') : '' }}</td>
                <td>{{ event.lieu }}</td>
                <td>{{ event.description }}</td>
               <td ><img src=\"{{ asset('Uploads/image/' ~event.picture) }}\" style=\"width: 60px\" style=\"height:60px\"></td>
                <td>
                    <a href=\"{{ path('event_show', {'id': event.id}) }}\">show</a>
                    <a href=\"{{ path('event_edit', {'id': event.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        
    </table>
    <script >

function searchEnt() {
    let searchString = document.getElementById('searchEnt').value; // recuperation de l'input de la recherche
    const elements = document.getElementsByName('elements') //recuperation de la reference du dom (liste des tr)
    if (searchString.length!==0){
        \$.ajax({
            url: '/event/search1/'+searchString,
            success: function (data) {
                console.log(\"data :\",data)
                for (let i = 0; i < elements.length; i++){
                    elements[i].style.display = \"none\";
                }
                for (let j = 0; j < data.length; j++) {
                    \$('#event'+data[j].id).show('slow');
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(\"erreur lors de la recuperation des données\")
            }
        });
    }else{
        for (let i = 0; i < elements.length; i++){
            elements[i].style.display = \"revert\";
        }
    }
}
</script>
    <a href=\"{{ path('event_new') }}\">Create new</a>
    <br>
    
 
{% endblock %}
", "event/index.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\event\\index.html.twig");
    }
}
