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

/* Back-office/posts/index.html.twig */
class __TwigTemplate_d59d30a5d0293f28580441ae05e6c38f277e7de2efbad1424e789f0770cd4777 extends Template
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
        // line 62
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/posts/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/posts/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "Back-office/posts/index.html.twig", 62);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "<section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">la Listes des Postes</h3>
                    <a class=\"text-warning\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_posts");
        echo "\"><i class=\"mdi mdi-database-plus\"></i> Nouveau post</a>
                </div>
                        <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                             <th>Id</th>
                                    <th>Objet</th>
                                    <th>content</th>
                                    <th>picture</th>
                                    <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 87
            echo "                            <tr>
                             <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                      <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Objet", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                            <td> <img src=\"/uploads/";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 91), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "\"/></td>
                            <td>X</td>
                            <td style=\"text-align: center;\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-info\">Actions</button>
                                    <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\" data-toggle=\"dropdown\">
                                    </button>
                                    <div class=\"dropdown-menu\" role=\"menu\">
                                    <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_posts", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">Modify</a>
                                    <a class=\"dropdown-item\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer_posts", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">Delete</a>
                                </div>
                            </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                    <th>Objet</th>
                                    <th>content</th>
                                    <th>picture</th>
                                    <th>action</th>
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
        return "Back-office/posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 105,  131 => 100,  127 => 99,  114 => 91,  110 => 90,  106 => 89,  102 => 88,  99 => 87,  95 => 86,  77 => 71,  68 => 64,  58 => 63,  35 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base-back.html.twig' %}

{% block body %}
    <div class=\"main-panel\">
          <div class=\"content-wrapper\"> 
            <div class=\"row \" style=\"
    position: relative;
    right: 10%;\">
              <div class=\"col-12 grid-margin\">
                 <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Liste des posts</h4>
                        <a class=\"text-warning\" href=\"{{ path('ajout_posts') }}\"><i class=\"mdi mdi-database-plus\"></i> Nouveau post</a>
                        <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Objet</th>
                                    <th>content</th>
                                    <th>picture</th>
                                    <th>action</th>
                                    
                                </tr>h
                            </thead>
                            <tbody>
                            {% for post in posts %}
                                <tr>
                                    
                                    <td>{{ post.id }}</td>
                                      <td>{{ post.Objet }}</td>
                                    <td>{{ post.content }}</td>
                                  
                                    <td> <img src=\"/uploads/{{ post.picture }}\" alt=\"{{ post.id }}\"/></td>
                                    
                                    <td>
                                        <form method=\"post\" action=\"{{ path('supprimer_posts', {'id': post.id}) }}\" onsubmit=\"return confirm('vous etes sure de vouloir supprimer ?');\">
                                            <div style=\"margin-left: auto; margin-right: auto;\">
                                            <a class=\"text-warning\" href=\"{{ path('voir_posts', {'id': post.id}) }}\"><i class=\"mdi mdi-eye\"></i></a>
                                            <a href=\"{{ path('modifier_posts', {'id': post.id}) }}\"><i class=\"mdi mdi-tooltip-edit\"></i></a>
                                            <button class=\"text-danger\" style=\"font-size: 14px;background:none; border:none;margin:0;padding:0;cursor: pointer;text-decoration: underline red;\" class=\"btn-primary btn\" type=\"submit\">supprimer</button>
                                            
                                    </td>
                                </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"3\">Aucun post trouvée</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    
{% endblock %} #}
{% extends 'base-back.html.twig' %}
{% block body %}
<section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">la Listes des Postes</h3>
                    <a class=\"text-warning\" href=\"{{ path('ajout_posts') }}\"><i class=\"mdi mdi-database-plus\"></i> Nouveau post</a>
                </div>
                        <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                             <th>Id</th>
                                    <th>Objet</th>
                                    <th>content</th>
                                    <th>picture</th>
                                    <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for post in posts %}
                            <tr>
                             <td>{{ post.id }}</td>
                                      <td>{{ post.Objet }}</td>
                                    <td>{{ post.content }}</td>
                            <td> <img src=\"/uploads/{{ post.picture }}\" alt=\"{{ post.id }}\"/></td>
                            <td>X</td>
                            <td style=\"text-align: center;\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-info\">Actions</button>
                                    <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\" data-toggle=\"dropdown\">
                                    </button>
                                    <div class=\"dropdown-menu\" role=\"menu\">
                                    <a href=\"{{ path('modifier_posts', {'id': post.id}) }}\">Modify</a>
                                    <a class=\"dropdown-item\" href=\"{{ path('supprimer_posts', {'id': post.id}) }}\">Delete</a>
                                </div>
                            </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                    <th>Objet</th>
                                    <th>content</th>
                                    <th>picture</th>
                                    <th>action</th>
                            </tr>
                            </tfoot>
                    </table>
                </div>
            </div> 
        </div> 
        </div> 
        </div> 
</section>         
{% endblock %}", "Back-office/posts/index.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Back-office\\posts\\index.html.twig");
    }
}
