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

/* Back-office/list_team.html.twig */
class __TwigTemplate_b0a28e5c0c5aa9a08626fbb17b6f8743361c99a78eebe867a93dafdbe62c7a8b extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/list_team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/list_team.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "Back-office/list_team.html.twig", 1);
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
        echo "<section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">DataTable with default features</h3>
                    
                </div>
                        <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>picture</th>
                            <th>Users</th>
                            <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 26
            echo "                            <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "TeamName", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Picture", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td style=\"text-align: center;\">
                                <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-info\">Users</button>
                                        <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\" data-toggle=\"dropdown\">
                                        ";
            // line 35
            echo "                                        </button>
                                        <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\">User 1</a>
                                        <a class=\"dropdown-item\">User 2</a>
                                    </div>
                            </td>
                            <td style=\"text-align: center;\">
                                <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-info\">Actions</button>
                                        <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\" data-toggle=\"dropdown\">
                                        ";
            // line 46
            echo "                                        </button>
                                        <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\" href=\"#\">Modify</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteTeam", ["id" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Delete</a>
                                    </div>
                            </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Creation Date</th>
                                <th>Users</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                    </table>
                </div>
            </div> 
        </div> 
        </div> 
        </div> 
</section>         
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back-office/list_team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  132 => 49,  127 => 46,  115 => 35,  107 => 29,  103 => 28,  99 => 27,  96 => 26,  92 => 25,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}
<section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">DataTable with default features</h3>
                    
                </div>
                        <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>picture</th>
                            <th>Users</th>
                            <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for team in teams %}
                            <tr>
                            <td>{{team.TeamName}}</td>
                            <td>{{team.Description}}</td>
                            <td>{{team.Picture}}</td>
                            <td style=\"text-align: center;\">
                                <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-info\">Users</button>
                                        <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\" data-toggle=\"dropdown\">
                                        {# <span class=\"sr-only\">Toggle Dropdown</span> #}
                                        </button>
                                        <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\">User 1</a>
                                        <a class=\"dropdown-item\">User 2</a>
                                    </div>
                            </td>
                            <td style=\"text-align: center;\">
                                <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-info\">Actions</button>
                                        <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\" data-toggle=\"dropdown\">
                                        {# <span class=\"sr-only\">Toggle Dropdown</span> #}
                                        </button>
                                        <div class=\"dropdown-menu\" role=\"menu\">
                                        <a class=\"dropdown-item\" href=\"#\">Modify</a>
                                        <a class=\"dropdown-item\" href=\"{{path('deleteTeam',{'id':team.id})}}\">Delete</a>
                                    </div>
                            </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Creation Date</th>
                                <th>Users</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                    </table>
                </div>
            </div> 
        </div> 
        </div> 
        </div> 
</section>         
{% endblock %}", "Back-office/list_team.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Back-office\\list_team.html.twig");
    }
}
