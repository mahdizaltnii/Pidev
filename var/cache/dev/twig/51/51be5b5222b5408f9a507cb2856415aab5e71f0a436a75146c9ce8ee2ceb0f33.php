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

/* Back-office/add_team.html.twig */
class __TwigTemplate_adfaca3fd3ce4113e31b3e7dc2341391cbd88726579a128dff767370cd9cce50 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/add_team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/add_team.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "Back-office/add_team.html.twig", 1);
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
        echo "    <section class=\"content\">
        <!-- general form elements disabled -->
            <div class=\"card card-warning\" style=\"margin: 30 px\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Add Teams</h3>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body\">
                ";
        // line 12
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "TeamName", [], "any", false, false, false, 16), 'label', ["label" => "Name"]);
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "TeamName", [], "any", false, false, false, 17), 'errors');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "TeamName", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter ..."]]);
        echo "
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"custom-file\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Picture", [], "any", false, false, false, 23), 'label', ["label" => "Picture"]);
        echo "<br>
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Picture", [], "any", false, false, false, 24), 'errors');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Picture", [], "any", false, false, false, 25), 'widget');
        echo "
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <!-- textarea -->
                      <div class=\"form-group\">
                        ";
        // line 34
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Description", [], "any", false, false, false, 34), 'label', ["label" => "Description"]);
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Description", [], "any", false, false, false, 35), 'errors');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "Description", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter ...", "rows" => "3"]]);
        echo "
                      </div>
                    </div>
                    <div style=\"margin-top: 80px; margin-left: 390px;\">
                        <div class=\"col-sm-6\">
                                ";
        // line 48
        echo "                            </div>
                        <div>
                    </div>
                  </div>
                ";
        // line 53
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
              </div>
              <!-- /.card-body -->
            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back-office/add_team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  137 => 48,  129 => 36,  125 => 35,  120 => 34,  110 => 25,  106 => 24,  102 => 23,  94 => 18,  90 => 17,  86 => 16,  78 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}
    <section class=\"content\">
        <!-- general form elements disabled -->
            <div class=\"card card-warning\" style=\"margin: 30 px\">
              <div class=\"card-header\">
                <h3 class=\"card-title\">Add Teams</h3>
              </div>
              <!-- /.card-header -->
              <div class=\"card-body\">
                {# <form> #}
                {{form_start(form,{'attr':{'novalidate':'novalidate'}})}}
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <div class=\"form-group\">
                        {{ form_label(form.TeamName,\"Name\") }}
                        {{ form_errors(form.TeamName) }}
                        {{ form_widget(form.TeamName,{'attr':{'class':'form-control','placeholder':'Enter ...'}}) }}
                      </div>
                    </div>
                    <div class=\"col-sm-6\">
                      <div class=\"custom-file\">
                        {{ form_label(form.Picture,\"Picture\") }}<br>
                        {{ form_errors(form.Picture) }}
                        {{ form_widget(form.Picture) }}
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <!-- textarea -->
                      <div class=\"form-group\">
                        {# <label>Description</label>
                        <textarea class=\"form-control\" rows=\"3\" placeholder=\"Enter ...\"></textarea> #}
                        {{ form_label(form.Description,\"Description\") }}
                        {{ form_errors(form.Description) }}
                        {{ form_widget(form.Description,{'attr':{'class':'form-control','placeholder':'Enter ...','rows':'3'}}) }}
                      </div>
                    </div>
                    <div style=\"margin-top: 80px; margin-left: 390px;\">
                        <div class=\"col-sm-6\">
                                {# <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                            <label class=\"btn bg-olive active\">
                                <input type=\"radio\" name=\"options\" id=\"option_b1\" autocomplete=\"off\" checked> Add
                            </label>
                            <label class=\"btn bg-olive\">
                                <input type=\"radio\" name=\"options\" id=\"option_b2\" autocomplete=\"off\"> Reset
                            </label> #}
                            </div>
                        <div>
                    </div>
                  </div>
                {# </form> #}
                {{ form_end(form) }}
              </div>
              <!-- /.card-body -->
            </div>
    </section>
{% endblock %}", "Back-office/add_team.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Back-office\\add_team.html.twig");
    }
}
