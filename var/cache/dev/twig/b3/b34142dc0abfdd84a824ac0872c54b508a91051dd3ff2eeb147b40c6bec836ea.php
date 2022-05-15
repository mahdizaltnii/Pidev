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

/* Front-office/Events.html.twig */
class __TwigTemplate_4cae6fbdd8a73950f31088efac322d7c58718c68629585a54d5ca99412975076 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Events.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Events.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-office/Events.html.twig", 1);
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
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-1.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2021 WORLD CHAMPIONSHIP</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>June 1 - October 31,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>Dota2
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>280
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>120,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-2.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2021 Rank Topper</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>July 05 - November 31,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>PUBG
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>320
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>112,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-3.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2021 WORLD Legend</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>Augest 1 - October 22,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>FreeFire
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>522
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>99,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-4.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2022 Topper game</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>July 12 - Augest 18,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>Bulker
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>85
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>123,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"vs-match-wrapper vs-match-layout1 newsletter-pb\">
      <div class=\"container\">
        <div class=\"text-center\">
          <div class=\"filter-menu-style1 filter-menu-active mb-70\">
            <button data-filter=\"*\" class=\"active\">All</button>
            <button data-filter=\".csgo\">csgo</button>
            <button data-filter=\".dota\">dota 2</button>
            <button data-filter=\".fortnite\">fortnite</button>
            <button data-filter=\".pubg\">pubg</button>
          </div>
        </div>
        <div class=\"mb-15 filter-active row\">
          <div class=\"col-md-6 col-lg-12 grid-item pubg fortnite csgo\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-7.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-8.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">esports mirax</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">werewolf</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">3 : 8</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-12 grid-item fortnite csgo dota\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-1.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-2.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">DARKEN GG</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">MAXDOM</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">3 : 5</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-12 grid-item pubg csgo dota\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-3.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-4.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">KRONTON</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">ECLIPSE</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">2 : 4</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-12 grid-item pubg fortnite dota\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-5.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-6.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">WAR HORNS</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">LINGTINGO</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">1 : 6</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
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
        return "Front-office/Events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
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
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-1.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2021 WORLD CHAMPIONSHIP</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>June 1 - October 31,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>Dota2
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>280
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>120,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-2.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2021 Rank Topper</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>July 05 - November 31,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>PUBG
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>320
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>112,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-3.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2021 WORLD Legend</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>Augest 1 - October 22,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>FreeFire
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>522
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>99,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6\">
            <div
              class=\"vs-events d-lg-flex\"
              data-bg-src=\"Front/img/shape/events-bg-1.png\"
            >
              <div class=\"media-img\">
                <img
                  src=\"Front/img/tournament/t-img-4.png\"
                  alt=\"Tournament Image\"
                />
              </div>
              <div class=\"media-body align-self-center\">
                <h3 class=\"events-name h5 text-white\">
                  <a href=\"tournament-details.html\">2022 Topper game</a>
                </h3>
                <ul class=\"events-list list-style-none\">
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Date:</span>July 12 - Augest 18,
                    2021
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Game:</span>Bulker
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Teams:</span>85
                  </li>
                  <li class=\"text-light2\">
                    <span class=\"text-white\">Prize Pool:</span>123,000\$
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=\"vs-match-wrapper vs-match-layout1 newsletter-pb\">
      <div class=\"container\">
        <div class=\"text-center\">
          <div class=\"filter-menu-style1 filter-menu-active mb-70\">
            <button data-filter=\"*\" class=\"active\">All</button>
            <button data-filter=\".csgo\">csgo</button>
            <button data-filter=\".dota\">dota 2</button>
            <button data-filter=\".fortnite\">fortnite</button>
            <button data-filter=\".pubg\">pubg</button>
          </div>
        </div>
        <div class=\"mb-15 filter-active row\">
          <div class=\"col-md-6 col-lg-12 grid-item pubg fortnite csgo\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-7.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-8.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">esports mirax</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">werewolf</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">3 : 8</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-12 grid-item fortnite csgo dota\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-1.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-2.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">DARKEN GG</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">MAXDOM</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">3 : 5</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-12 grid-item pubg csgo dota\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-3.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-4.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">KRONTON</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">ECLIPSE</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">2 : 4</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-12 grid-item pubg fortnite dota\">
            <div class=\"vs-match\">
              <div
                class=\"row align-items-center justify-content-center justify-content-lg-start\"
              >
                <div class=\"col-lg-3\">
                  <div class=\"match-logo\">
                    <a href=\"team-details.html\"
                      ><img
                        src=\"Front/img/logos/logo-1-5.png\"
                        alt=\"Team Logo\" /></a
                    ><span class=\"versus\">vs</span>
                    <a href=\"team-details.html\"
                      ><img src=\"Front/img/logos/logo-1-6.png\" alt=\"Team Logo\"
                    /></a>
                  </div>
                </div>
                <div class=\"col-lg\">
                  <div class=\"match-about pl-35\">
                    <h3 class=\"team-name h5 text-white mb-1 mb-lg-2\">
                      <a href=\"team-details.html\">WAR HORNS</a>
                      <span class=\"text-theme\">vs</span>
                      <a href=\"team-details.html\">LINGTINGO</a>
                    </h3>
                    <p class=\"match-date mb-0\">December 25, 2021 4:00 PM</p>
                  </div>
                </div>
                <div class=\"col-auto col-xl-2\">
                  <div class=\"match-time text-white\">1 : 6</div>
                </div>
                <div class=\"col-auto col-xl-2 text-end\">
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-twitch\"></i
                  ></a>
                  <a
                    href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                    class=\"icon-btn1 popup-video\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

{% endblock %}", "Front-office/Events.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-office\\Events.html.twig");
    }
}
