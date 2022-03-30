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

/* Back-office/comments/index.html.twig */
class __TwigTemplate_91fccc781cb4cbb3de5a74ac6ef56dc42afc78ddd1248551b2ad321c0f47077e extends Template
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
        // line 70
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/comments/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/comments/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "Back-office/comments/index.html.twig", 70);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "<section class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"card-title\">la Listes des Commentaires</h3>
                        <a class=\"text-warning\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_comments");
        echo "\">
                            <i class=\"mdi mdi-database-plus\">
                            </i> Nouveau Commentaire</a>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>content</th>

                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 96, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 97
            echo "                                <tr>
                                    <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                                    <td>";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 99);
            echo "</td>



                                    <td style=\"text-align: center;\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-info\">Actions</button>
                                            <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\"
                                                data-toggle=\"dropdown\">
                                            </button>
                                            <div class=\"dropdown-menu\" role=\"menu\">
                                                <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("voir_comments", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">Voir </a>
                                                <a class=\"dropdown-item\" role=\"menu\"
                                                    href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier_comments", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\">Modifier</a>
                                            </div>
                                    </td>
                                </tr>

                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            echo "                                <tr>
                                    <td>Aucun comment trouvée</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>content</th>

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
        return "Back-office/comments/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 122,  139 => 118,  128 => 112,  123 => 110,  109 => 99,  105 => 98,  102 => 97,  97 => 96,  77 => 79,  68 => 72,  58 => 71,  35 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base-back.html.twig' %}
{% block body %}

    <div class=\"main-panel\">
          <div class=\"content-wrapper\"> 
            <div class=\"row \" style=\"
    position: relative;
    right: 10%;
    /* margin-right: 72px; */
\">
              <div class=\"col-12 grid-margin\">
                 <div class=\"card\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Liste des comments</h4><br>
                    <a class=\"text-warning\" href=\"{{ path('ajout_comments') }}\">
                        <i class=\"mdi mdi-database-plus\"></i> Nouveau comment</a>
                        <div class=\"table-responsive\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>content</th>
                                    <th>voir details</th>
                                    <th>action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            {% for comment in comments %}
                                <tr>
                                    
                                    <td>{{ comment.id }}</td>
                                    <td>{{ comment.content }}</td>
                                    
                                    
                                    <td>
                                        <form method=\"comment\" action=\"{{ path('voir_comments', {'id': comment.id}) }}\" >
                                            <div style=\"margin-left: auto; margin-right: auto;\">
                                            <a class=\"text-warning\" href=\"{{ path('voir_comments', {'id': comment.id}) }}\"><i class=\"mdi mdi-eye\"></i></a>
                                            <a href=\"{{ path('modifier_comments', {'id': comment.id}) }}\"><i class=\"mdi mdi-tooltip-edit\"></i></a>
                                            <button class=\"btn btn-outline-danger\" style=\"font-size: 14px;background:none; border:none;margin:0;padding:0;cursor: pointer;text-decoration: underline red;\" class=\"btn\" type=\"submit\">Voir</button>
                                            </form>
                                    </td>
                                     <td>
                                        <form method=\"comment\" action=\"{{ path('supprimer_comments', {'id': comment.id}) }}\" onsubmit=\"return confirm('vous etes sure de vouloir supprimer ?');\">
                                            <div style=\"margin-left: auto; margin-right: auto;\">
                                            <a class=\"text-warning\" href=\"{{ path('voir_comments', {'id': comment.id}) }}\"><i class=\"mdi mdi-eye\"></i></a>
                                            <a href=\"{{ path('modifier_comments', {'id': comment.id}) }}\"><i class=\"mdi mdi-tooltip-edit\"></i></a>
                                            <button class=\"btn btn-outline-danger\" style=\"font-size: 14px;background:none; border:none;margin:0;padding:0;cursor: pointer;text-decoration: underline red;\" class=\"btn btn-outline-danger\" type=\"submit\">supprimer</button>
                                            </form>
                                    </td>
                                </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"3\">Aucun comment trouvée</td>
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
                        <h3 class=\"card-title\">la Listes des Commentaires</h3>
                        <a class=\"text-warning\" href=\"{{ path('ajout_comments') }}\">
                            <i class=\"mdi mdi-database-plus\">
                            </i> Nouveau Commentaire</a>
                    </div>
                    <!-- /.card-header -->
                    <div class=\"card-body\">
                        <table id=\"example1\" class=\"table table-bordered table-striped\">
                            <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>content</th>

                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for comment in comments %}
                                <tr>
                                    <td>{{ comment.id }}</td>
                                    <td>{{ comment.content |raw }}</td>



                                    <td style=\"text-align: center;\">
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-info\">Actions</button>
                                            <button type=\"button\" class=\"btn btn-info dropdown-toggle dropdown-icon\"
                                                data-toggle=\"dropdown\">
                                            </button>
                                            <div class=\"dropdown-menu\" role=\"menu\">
                                                <a href=\"{{ path('voir_comments', {'id': comment.id}) }}\">Voir </a>
                                                <a class=\"dropdown-item\" role=\"menu\"
                                                    href=\"{{ path('modifier_comments', {'id': comment.id}) }}\">Modifier</a>
                                            </div>
                                    </td>
                                </tr>

                                {% else %}
                                <tr>
                                    <td>Aucun comment trouvée</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>content</th>

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
{% endblock %}", "Back-office/comments/index.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Back-office\\comments\\index.html.twig");
    }
}
