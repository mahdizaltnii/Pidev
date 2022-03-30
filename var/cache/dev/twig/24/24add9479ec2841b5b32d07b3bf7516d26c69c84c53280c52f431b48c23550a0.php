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

/* Front-office/team.html.twig */
class __TwigTemplate_aa181da05438a44a82fe2acdaa1620aa46190fb4cf648ba22ae1c6147985ecb1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/team.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-office/team.html.twig", 1);
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
        echo "    <div
      class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\"
      data-bg-src=\"Front/img/breadcumb/breadcumb-1.jpg\"
      data-overlay>
      <div class=\"container z-index-common\">
        <div class=\"breadcumb-content text-center\">
          <h1 class=\"breadcumb-title h1 text-white my-0\">Teams</h1>
          <h2 class=\"breadcumb-bg-title\">Teams</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Tournament</li>
          </ul>
        </div>
      </div>
    </div>
    
    <section class=\"vs-match-wrapper vs-match-layout1 newsletter-pb\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 23
            echo "      <div class=\"container\">
        <div class=\"mb-15 filter-active row\">
          <div class=\"col-md-6 col-lg-12 grid-item pubg fortnite csgo\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\">
                    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Front/img/team/" . twig_get_attribute($this->env, $this->source, $context["team"], "Picture", [], "any", false, false, false, 33))), "html", null, true);
            echo "\" alt=\"Team Logo\"/>
                    </a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "TeamName", [], "any", false, false, false, 40), "html", null, true);
            echo "</a>
                    </h3>
                    <p class=\"match-date mb-0\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "Description", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  ";
            // line 51
            echo "                  ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "team", [], "any", false, false, false, 51)) {
                // line 52
                echo "                    <a
                    href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JoinTeam", ["id" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\"
                    class=\"icon-btn1\"
                    ><i class=\"\">join</i
                  ></a>
                  ";
            }
            // line 58
            echo "                </div>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front-office/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  141 => 58,  133 => 53,  130 => 52,  127 => 51,  120 => 42,  115 => 40,  105 => 33,  93 => 23,  89 => 22,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}
{% block body %}
    <div
      class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\"
      data-bg-src=\"Front/img/breadcumb/breadcumb-1.jpg\"
      data-overlay>
      <div class=\"container z-index-common\">
        <div class=\"breadcumb-content text-center\">
          <h1 class=\"breadcumb-title h1 text-white my-0\">Teams</h1>
          <h2 class=\"breadcumb-bg-title\">Teams</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Tournament</li>
          </ul>
        </div>
      </div>
    </div>
    
    <section class=\"vs-match-wrapper vs-match-layout1 newsletter-pb\">
    {% for team in teams %}
      <div class=\"container\">
        <div class=\"mb-15 filter-active row\">
          <div class=\"col-md-6 col-lg-12 grid-item pubg fortnite csgo\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\">
                    <img src=\"{{ asset('/Front/img/team/'~team.Picture) }}\" alt=\"Team Logo\"/>
                    </a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">{{ team.TeamName}}</a>
                    </h3>
                    <p class=\"match-date mb-0\">{{ team.Description}}</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  {# <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a> #}
                  {% if not app.user.team %}
                    <a
                    href=\"{{ path('JoinTeam',{'id':team.id}) }}\"
                    class=\"icon-btn1\"
                    ><i class=\"\">join</i
                  ></a>
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
          {% endfor %}
    </section>
{% endblock %}", "Front-office/team.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-office\\team.html.twig");
    }
}
