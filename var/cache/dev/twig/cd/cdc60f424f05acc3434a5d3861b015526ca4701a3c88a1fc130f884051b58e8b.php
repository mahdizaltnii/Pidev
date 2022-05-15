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

/* Back-office/UserPDF.html.twig */
class __TwigTemplate_ebee2321bd749ba49b2c2c636ddc1a58f277deed21a96623e7b3ad728b4dc5ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/UserPDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/UserPDF.html.twig"));

        // line 1
        echo "<body
";
        // line 3
        echo ">
    <div style=\"background-color:#DA90F9; height:10 %\">
        <h1 style=\"text-align: center\">list GEEKss Users</h1>
        ";
        // line 7
        echo "    </div>
    <hr>
    <table  style=\"text-align: center; 
    margin: auto; 
    width : 100%; 
    border-collapse: collapse;
    border: 1px solid;
    \">
            <thead>
            ";
        // line 17
        echo "            ";
        // line 19
        echo "
            <th>ID</th>
            <th>EMAIL</th>
            <th>NAME</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "            <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Creation Date</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
            </tfoot>
    </table>
</body>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Back-office/UserPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  88 => 30,  84 => 29,  80 => 28,  77 => 27,  73 => 26,  64 => 19,  62 => 17,  51 => 7,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body
{# style=\"background-image: url(\"{{ asset('Front/img/logo.png') }}\");\" #}
>
    <div style=\"background-color:#DA90F9; height:10 %\">
        <h1 style=\"text-align: center\">list GEEKss Users</h1>
        {# <img src=\"{{ asset('Front/img/logo.png') }}\" alt=\"Photo de montagne\" style=\"width:10%;opacity: 0.5;\" /> #}
    </div>
    <hr>
    <table  style=\"text-align: center; 
    margin: auto; 
    width : 100%; 
    border-collapse: collapse;
    border: 1px solid;
    \">
            <thead>
            {# <tr> #}
            {# <th
            style=\"background-image: url(\"Front/img/logo.png\") alt=\"Photo de montagne\";\"> #}

            <th>ID</th>
            <th>EMAIL</th>
            <th>NAME</th>
            </tr>
            </thead>
            <tbody>
            {% for user in users %}
            <tr>
            <td>{{ user.id }}</td>
            <td>{{ user.Email }}</td>
            <td>{{ user.username }}</td>
            </tr>
            {% endfor %}
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Creation Date</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
            </tfoot>
    </table>
</body>
", "Back-office/UserPDF.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Back-office\\UserPDF.html.twig");
    }
}
