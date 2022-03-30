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

/* reclamation/_form.html.twig */
class __TwigTemplate_88e0105c9fd89af4ced17639517d226a977b0fd2e991f3d28df9d5698bcbf3b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["recform"]) || array_key_exists("recform", $context) ? $context["recform"] : (function () { throw new RuntimeError('Variable "recform" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class=\"contact-form\">

    <div class=\"contact-to\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["recform"]) || array_key_exists("recform", $context) ? $context["recform"] : (function () { throw new RuntimeError('Variable "recform" does not exist.', 5, $this->source); })()), "sujet", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "string", "placeholder" => "Sujet"]]);
        echo "
    </div>
    <br>
    <div class=\"text2\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["recform"]) || array_key_exists("recform", $context) ? $context["recform"] : (function () { throw new RuntimeError('Variable "recform" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "text", "placeholder" => "Subject"]]);
        echo "
    </div>
     
    <span>    <button class=\"btn btn-primary\">";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 12, $this->source); })()), "Send Your Claim")) : ("Send Your Claim")), "html", null, true);
        echo "</button></span>
</div>

";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["recform"]) || array_key_exists("recform", $context) ? $context["recform"] : (function () { throw new RuntimeError('Variable "recform" does not exist.', 15, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  63 => 12,  57 => 9,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(recform,{'attr': {'novalidate': 'novalidate'}} ) }}
<div class=\"contact-form\">

    <div class=\"contact-to\">
        {{ form_widget(recform.sujet,{'attr': {'class': 'string' , 'placeholder' : 'Sujet'}}) }}
    </div>
    <br>
    <div class=\"text2\">
        {{ form_widget(recform.description,{'attr': {'class': 'text' , 'placeholder' : 'Subject'}}) }}
    </div>
     
    <span>    <button class=\"btn btn-primary\">{{ button_label|default('Send Your Claim') }}</button></span>
</div>

{{ form_end(recform) }}


", "reclamation/_form.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\reclamation\\_form.html.twig");
    }
}
