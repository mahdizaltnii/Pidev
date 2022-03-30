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

/* Back-Annonces/afficheAnnonces.html.twig */
class __TwigTemplate_efec10ebff37cb2d60ad9c282fc4239ff4df467df480eb088ec322fc2ffcd3ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-Annonces/afficheAnnonces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-Annonces/afficheAnnonces.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "Back-Annonces/afficheAnnonces.html.twig", 1);
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
        echo "    <h1>List Annonces</h1>

    <div class=\"col-md-3\">
        ";
        // line 6
        $this->loadTemplate("Back-Annonces/_filtrerannonce.html.twig", "Back-Annonces/afficheAnnonces.html.twig", 6)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })())]));
        // line 7
        echo "    </div>

    <table border=\"1\" class=\"table\">
       <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Email</th>
        <th>Prix</th>
        <th>Tel</th>
        <th>Categorie</th>
        <th>Delete</th>
        <th>Update</th>
       </tr>
        <tr ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            echo ">
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/front/annonces/img/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 200px; height: 200px\"></td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "tel", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "categorie", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_annonceB", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Delete</a></td>
            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editB_annonce", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Update</a></td>
        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo ">
    </table>
    ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 35, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back-Annonces/afficheAnnonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  142 => 33,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 23,  92 => 22,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}
    <h1>List Annonces</h1>

    <div class=\"col-md-3\">
        {% include 'Back-Annonces/_filtrerannonce.html.twig' with {form: form} only %}
    </div>

    <table border=\"1\" class=\"table\">
       <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Email</th>
        <th>Prix</th>
        <th>Tel</th>
        <th>Categorie</th>
        <th>Delete</th>
        <th>Update</th>
       </tr>
        <tr {% for a in annonce %}>
            <td>{{ a.id }}</td>
            <td>{{ a.title }}</td>
            <td>{{ a.description }}</td>
            <td><img src=\"{{ asset('/front/annonces/img/'~a.image)}}\" alt=\"\" style=\"width: 200px; height: 200px\"></td>
            <td>{{ a.email }}</td>
            <td>{{ a.prix }}</td>
            <td>{{ a.tel }}</td>
            <td>{{ a.categorie.nom }}</td>
            <td><a href=\"{{ path('delete_annonceB',{'id':a.id}) }}\">Delete</a></td>
            <td><a href=\"{{ path('editB_annonce',{'id':a.id}) }}\">Update</a></td>
        </tr {% endfor %}>
    </table>
    {{ knp_pagination_render(annonce) }}
{% endblock %}", "Back-Annonces/afficheAnnonces.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Back-Annonces\\afficheAnnonces.html.twig");
    }
}
