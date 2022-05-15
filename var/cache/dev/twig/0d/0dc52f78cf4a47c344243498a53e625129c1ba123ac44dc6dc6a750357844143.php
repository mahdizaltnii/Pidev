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

/* event/showfront.html.twig */
class __TwigTemplate_6b391390d7a0f073a9f35ecd77932e7213cbafe148f9128faf2e4545b7cbcce1 extends Template
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
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/showfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/showfront.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "event/showfront.html.twig", 1);
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
        echo "
    <div
            class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\"
            data-bg-src=\"Front/img/breadcumb/breadcumb-1.jpg\"
            data-overlay
    >
        <div class=\"container z-index-common\">
            <div class=\"breadcumb-content text-center\">
                <h1 class=\"breadcumb-title h1 text-white my-0\">Events</h1>
                <h2 class=\"breadcumb-bg-title\">Events</h2>
                <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
                    <li>
                        <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
                    </li>
                    <li class=\"active\">Tournament</li>
                </ul>
            </div>
        </div>
    </div>
    <section class=\"vs-events-wrapper events-layout1 space-top space-md-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 27
            echo "                
                    <div
                            class=\"vs-events d-lg-flex\"
                            data-bg-src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/shape/events-bg-1.png"), "html", null, true);
            echo "\"
                    >
                        <div class=\"media-img\">

                          <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/image/" . twig_get_attribute($this->env, $this->source, $context["event"], "picture", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" style=\"width: 100px\" style=\"height:100px\">

                        </div>
                        <div class=\"media-body align-self-center\">
                            <h3 class=\"events-name h5 text-dark\">
                                <a href=\"tournament-details.html\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "Name", [], "any", false, false, false, 39), "html", null, true);
            echo "</a>
                            </h3>
                            <ul class=\"events-list list-style-none\">
                                <li class=\"text-light2\">
                                <br>
                                    <span class=\"text-dark\">Date:</span>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true);
            echo "

                                </li>
                                <li class=\"text-light2\">
                                    <span class=\"text-dark\">Lieu:</span>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                </li>
                                <li class=\"text-light2\">
                                    <span class=\"text-dark\">Description:</span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 51), "html", null, true);
            echo "
                                </li>

                            </ul>
                        </div>
                    </div>
               
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
                </div>


                </div>
            
        </div>
    </section>




    <!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/622774d1a34c2456412a0f0f/1ftl20l2o';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->





<div style=\"margin :20px 0 0px 850px \" class=\"text-light2\">
    ";
        // line 90
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 90, $this->source); })()));
        echo "
    </div>


    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/showfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 90,  152 => 59,  138 => 51,  132 => 48,  125 => 44,  117 => 39,  109 => 34,  102 => 30,  97 => 27,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}
{% block body %}

    <div
            class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\"
            data-bg-src=\"Front/img/breadcumb/breadcumb-1.jpg\"
            data-overlay
    >
        <div class=\"container z-index-common\">
            <div class=\"breadcumb-content text-center\">
                <h1 class=\"breadcumb-title h1 text-white my-0\">Events</h1>
                <h2 class=\"breadcumb-bg-title\">Events</h2>
                <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
                    <li>
                        <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
                    </li>
                    <li class=\"active\">Tournament</li>
                </ul>
            </div>
        </div>
    </div>
    <section class=\"vs-events-wrapper events-layout1 space-top space-md-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
            {% for event in events %}
                
                    <div
                            class=\"vs-events d-lg-flex\"
                            data-bg-src=\"{{asset('Front/img/shape/events-bg-1.png')}}\"
                    >
                        <div class=\"media-img\">

                          <img src=\"{{ asset('Uploads/image/' ~event.picture) }}\" style=\"width: 100px\" style=\"height:100px\">

                        </div>
                        <div class=\"media-body align-self-center\">
                            <h3 class=\"events-name h5 text-dark\">
                                <a href=\"tournament-details.html\">{{ event.Name }}</a>
                            </h3>
                            <ul class=\"events-list list-style-none\">
                                <li class=\"text-light2\">
                                <br>
                                    <span class=\"text-dark\">Date:</span>{{ event.date|date('Y-m-d') }}

                                </li>
                                <li class=\"text-light2\">
                                    <span class=\"text-dark\">Lieu:</span>{{ event.lieu }}
                                </li>
                                <li class=\"text-light2\">
                                    <span class=\"text-dark\">Description:</span>{{ event.description }}
                                </li>

                            </ul>
                        </div>
                    </div>
               
                {% endfor %}

                </div>


                </div>
            
        </div>
    </section>




    <!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/622774d1a34c2456412a0f0f/1ftl20l2o';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->





<div style=\"margin :20px 0 0px 850px \" class=\"text-light2\">
    {{knp_pagination_render(events) }}
    </div>


    
{% endblock %}


































































































































































 ", "event/showfront.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\event\\showfront.html.twig");
    }
}
