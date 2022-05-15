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

/* base-front.html.twig */
class __TwigTemplate_fc5e7ed1bffa219cb458d421a95b9443701402b2a48b982ad77bba08d3c33b47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">
<meta
    http-equiv=\"content-type\"
    content=\"text/html;charset=UTF-8\" />
  <head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <title>Geek|";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"author\" content=\"Vecuro\" />
    <meta
      name=\"description\"
      content=\"Zocker - eSports and Gaming HTML Template\"
    />
    <meta name=\"keywords\" content=\"Zocker - eSports and Gaming HTML Template\" />
    <meta name=\"robots\" content=\"INDEX,FOLLOW\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width,initial-scale=1,shrink-to-fit=no\"
    />
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" />
    <link
      href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Montserrat:wght@700&amp;family=Roboto:wght@400;700&amp;display=swap\"
      rel=\"stylesheet\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"57x57\"
      href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-57x57.png"), "html", null, true);
        echo "\"
    />
    
    <link
      rel=\"apple-touch-icon\"
      sizes=\"60x60\"
      href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-60x60.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"72x72\"
      href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-72x72.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"76x76\"
      href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-76x76.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"114x114\"
      href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-114x114.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"120x120\"
      href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-120x120.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"144x144\"
      href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-144x144.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"152x152\"
      href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-152x152.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"180x180\"
      href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/apple-icon-180x180.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"192x192\"
      href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/android-icon-192x192.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"32x32\"
      href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-32x32.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"96x96\"
      href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-96x96.png"), "html", null, true);
        echo "\"
    />
    <link
      rel=\"icon\"
      type=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/image/png"), "html", null, true);
        echo "\"
      sizes=\"16x16\"
      href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/favicon-16x16.png"), "html", null, true);
        echo "\"
    />
    <link rel=\"manifest\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/manifest.html"), "html", null, true);
        echo "\" />
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\" />
    <meta
      name=\"msapplication-TileImage\"
      content=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/favicons/ms-icon-144x144.png"), "html", null, true);
        echo "\"
    />
     ";
        // line 104
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 120
        echo "
  </head>
  <body>
 <div class=\"preloader\">
      <button class=\"vs-btn preloaderCls\">Cancel Preloader</button>
      <div class=\"preloader-inner\"> 
        <div class=\"loader-logo\">
          <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.png"), "html", null, true);
        echo "\" alt=\"Loader Image\" />
        </div>
        <div class=\"loader-wrap pt-4\"><span class=\"loader\"></span></div>
      </div>
    </div>
    <div class=\"sidemenu-wrapper d-none d-lg-block\">
      <div class=\"sidemenu-content bg-light-dark\">
        <button
          class=\"closeButton border-theme text-theme bg-theme-hover sideMenuCls\"
        >
          <i class=\"fal fa-times\"></i>
        </button>
        <div class=\"about-box\">
          <a href=\"indeax.html\">
          <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.png"), "html", null, true);
        echo "\" alt=\"Zocker\"/>
          </a>
          <div class=\"info-style1\">
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">You Email</p>
              <p class=\"text-white mb-0\">
                <a href=\"#\" class=\"text-inherit\">
                  ";
        // line 147
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147)) {
            // line 148
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "email", [], "any", false, false, false, 148), "html", null, true);
            echo "
                  ";
        }
        // line 150
        echo "                </a
                >
              </p>
            </div>
            <div class=\"info-style1\">
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">You Username</p>
              <p class=\"text-white mb-0\">
                <a href=\"#\" class=\"text-inherit\">
                  ";
        // line 158
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158)) {
            // line 159
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "username", [], "any", false, false, false, 159), "html", null, true);
            echo "
                  ";
        }
        // line 161
        echo "                </a
                >
              </p>
            </div>
          <div class=\"my-40\">
            <div class=\"info-style1\">
              ";
        // line 170
        echo "              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Team</p>
              <p class=\"text-white mb-0\">
                ";
        // line 172
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172)) {
            // line 173
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "team", [], "any", false, false, false, 173)) {
                // line 174
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "user", [], "any", false, false, false, 174), "team", [], "any", false, false, false, 174), "html", null, true);
                echo "
                    <br>
                    <a href=\"";
                // line 176
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("QuitTeam");
                echo "\" class=\"text-inherit\">Quit Team</a>
                  ";
            } else {
                // line 178
                echo "                    You don't belong to any team<br>
                    <a href=\"";
                // line 179
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user/Teams");
                echo "\" class=\"text-inherit\">Join Team</a>
                  ";
            }
            // line 181
            echo "                ";
        }
        // line 182
        echo "              </p>
            </div>
            <a href=\"#\" class=\"vs-btn outline1 d-none d-xl-inline-block\" data-toggle=\"modal\" data-target=\"#login\">
                    <i class=\"fab fa-twitch\"></i> Modify Profile
                    </a>
            ";
        // line 195
        echo "          </div>
        </div>
        <h3 class=\"sidebox-title text-white h5\">About Us</h3>
        <div class=\"post-thumb-style1\">
          
          <div class=\"my-40\">
            <div class=\"info-style1\">
              <span class=\"icon-btn2\"
                ><i class=\"fal fa-map-marker-alt\"></i
              ></span>
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Address</p>
              <p class=\"text-white mb-0\">
                301 Massachusetts Ave, Lunenburg MA 1462
              </p>
            </div>
            <div class=\"info-style1\">
              <span class=\"icon-btn2\"><i class=\"fal fa-phone\"></i></span>
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Get In Touch</p>
              <p class=\"text-white mb-0\">
                <a href=\"tel:13456789\" class=\"text-inherit\"
                  >85 125 1256 12145</a
                >
              </p>
            </div>
            <div class=\"info-style1\">
              <span class=\"icon-btn2\"><i class=\"fal fa-envelope\"></i></span>
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Mail Us</p>
              <p class=\"text-white mb-0\">
                <a href=\"mailto:zocker@gmail.com\" class=\"text-inherit\"
                  >zocker@example.com</a
                >
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class=\"popup-search-box d-none d-lg-block\">
      <button class=\"searchClose border-theme text-theme\">
        <i class=\"fal fa-times\"></i>
      </button>
      <form action=\"#\">
        <input
          type=\"text\"
          class=\"border-theme\"
          placeholder=\"What are you looking for\"
        />
        <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
      </form>
    </div>
    <div class=\"vs-menu-wrapper\">
      <div class=\"vs-menu-area bg-dark\">
        <button class=\"vs-menu-toggle\"><i class=\"fal fa-times\"></i></button>
        <div class=\"mobile-logo\">
          <a href=\"index-2.html\"
            ><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.png"), "html", null, true);
        echo "\" alt=\"Zocker\"
          /></a>
        </div>
        <div class=\"vs-mobile-menu link-inherit\"></div>
      </div>
    </div>
    <header
      class=\"header-wrapper header-layout1 position-absolute top-0 start-0 w-100 z-index-step1\"
    >
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row py-md-2\">
            <div class=\"col-sm-6 d-none d-md-block\"></div>
            <div class=\"col-sm-6 text-end d-none d-md-block\">
              <ul class=\"social-links fs-xs text-white\">
                <li>
                  <a href=\"https://google.com/\"
                    ><i class=\"fab fa-facebook-f\"></i
                  ></a>
                </li>
                <li>
                  <a href=\"https://google.com/\"
                    ><i class=\"fab fa-twitter\"></i
                  ></a>
                </li>
                <li>
                  <a href=\"https://google.com/\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </li>
                ";
        // line 281
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "user", [], "any", false, false, false, 281)) {
            // line 282
            echo "                  ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 282, $this->source); })()), "user", [], "any", false, false, false, 282), "roles", [], "any", false, false, false, 282), 0, [], "array", false, false, false, 282), "ROLE_ADMIN"))) {
                // line 283
                echo "                    <li>
                      <a href=\"";
                // line 284
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/index");
                echo "\">
                      <i class=\"fal fa-dashboard\"> Dashboard </i>
                      </a>
                    </li>
                  ";
            }
            // line 289
            echo "                ";
        }
        // line 290
        echo "              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"header-main\">
        <div class=\"container position-relative\">
          <div class=\"bg-dark px-50\">
            <div class=\"row align-items-center\">
              <div class=\"col-6 col-lg-4 d-block d-xl-none py-3 py-xl-0\">
                <div class=\"header-logo\">
                  <a href=\"index-2.html\"
                    ><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo-2.png"), "html", null, true);
        echo "\" alt=\"Zocker\"
                  /></a>
                </div>
              </div>
              <div class=\"col-6 col-lg-8 col-xl-5 text-end text-xl-start\">
                <nav class=\"main-menu menu-style1 mobile-menu-active\"data-expand=\"992\">
                  <ul>
                    ";
        // line 310
        echo "                    <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Forum</a></li>
                    <li><a href=\"";
        // line 311
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_index");
        echo "\">reclamations</a></li>
                    <li><a href=\"";
        // line 312
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listAnnoncesF");
        echo "\">Annonces</a></li>
                    <li><a href=\"";
        // line 313
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show_front");
        echo "\">Event</a></li>
                  </ul>
                </nav>
                <button
                  type=\"button\"
                  class=\"vs-menu-toggle text-white d-inline-block d-lg-none\"
                >
                  <i class=\"far fa-bars\"></i>
                </button>
              </div>
              <div class=\"col-md-4 col-lg-2 text-center d-none d-xl-block\">
                <div class=\"header-logo1\">
                  <a href=\"";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logo.png"), "html", null, true);
        echo "\" alt=\"Zocker\" /></a>
                </div>
              </div>
              <div class=\"col-md-4 col-lg-5 d-none d-xl-block\">
                <div
                  class=\"header-right d-flex align-items-center justify-content-end\"
                >
                   ";
        // line 332
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 332, $this->source); })()), "user", [], "any", false, false, false, 332)) {
            // line 333
            echo "                    <a href=\"#\" class=\"vs-btn outline1 d-none d-xl-inline-block\" data-toggle=\"modal\" data-target=\"#login\">
                    <i class=\"fab fa-twitch\"></i> Sign In
                    </a>
                  ";
        } else {
            // line 337
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"vs-btn outline1 d-none d-xl-inline-block\">
                    <i class=\"fab fa-twitch\"></i> 
                    Log out
                    </a>
                    ";
            // line 342
            echo "                  ";
        }
        // line 343
        echo "                  ";
        // line 345
        echo "                    ";
        // line 347
        echo "                  ";
        // line 349
        echo "                  <ul class=\"header-list1 list-style-none ml-30\">
                    <li>
                      <ul class=\"dropdown-menu\"></ul>
                    </li>
                    <li>
                      <button class=\"searchBoxTggler\">
                        <i class=\"fal fa-search\"></i>
                      </button>
                    </li>
                    <li>
                      <button class=\"sideMenuToggler\">
                        <i class=\"fal fa-grip-horizontal fs-2\"></i>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    ";
        // line 371
        $this->displayBlock('body', $context, $blocks);
        // line 372
        echo "    <footer class=\"footer-wrapper footer-layout1 bg-fluid bg-major-black position-relative\">
      <div
        class=\"bg-fluid d-none d-none d-xl-block position-absolute start-0 top-0 w-100 h-100\"
        data-bg-src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/bg/footer-bg-1-1.jpg"), "html", null, true);
        echo "\"
      ></div>
      <div class=\"footer-widget-wrapper dark-style1 z-index-common\">
        <div class=\"container\">
          <div class=\"row justify-content-between\">
            <div class=\"col-md-6 col-lg-3 col-xl-4\">
              <div class=\"widget footer-widget pt-0\">
                <h3 class=\"widget_title\">About Us</h3>
                <div class=\"vs-widget-about\">
                  <p class=\"about-text text-footer1 pe-xl-5\">
                    The League of Legends offseason is in full effect and teams
                    are looking to sign new players to strengthen their roster
                    or to re-sign their current players.
                  </p>
                  <div class=\"d-flex gap-2 text-white mt-45\">
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-linkedin-in\"></i
                    ></a>
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-youtube\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-6 col-md-6 col-lg-3 col-xl-2\">
              <div class=\"widget widget_categories footer-widget\">
                <h3 class=\"widget_title\">Categories</h3>
                <ul>
                  <li><a href=\"#\">Ancient</a></li>
                  <li><a href=\"#\">Fantasy</a></li>
                  <li><a href=\"#\">Horror</a></li>
                  <li><a href=\"#\">Shooting</a></li>
                  <li><a href=\"#\">MS-XBOX</a></li>
                </ul>
              </div>
            </div>
            <div class=\"col-sm-6 col-md-6 col-lg-3 col-xl-2\">
              <div class=\"widget widget_nav_menu footer-widget\">
                <h3 class=\"widget_title\">NEED HELP?</h3>
                <div class=\"menu-all-pages-container\">
                  <ul class=\"menu\">
                    <li><a href=\"#\">Company</a></li>
                    <li><a href=\"#\">For the fans</a></li>
                    <li><a href=\"#\">Press</a></li>
                    <li><a href=\"#\">Privacy</a></li>
                    <li><a href=\"#\">Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-md-6 col-lg-3 col-xl-3\">
              <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">Contact Us</h3>
                <div class=\"vs-widget-about\">
                  <p class=\"contact-info\">
                    <i class=\"fal fa-map-marker-alt text-white\"></i>121 King St,
                    Melbourne VIC 3000, Australia
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-phone text-white\"></i
                    ><a href=\"tel:+65965252561\">(888)-659-252561</a>
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-fax text-white\"></i
                    ><a href=\"tel:+65965252561\">(888)-123-45678</a>
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-envelope text-white\"></i
                    ><a href=\"mailto:zocker@webmail.com\">zocker@email.com</a>
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-globe text-white\"></i
                    ><a href=\"https://zocker.com/\">www.zockerexample.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"footer-copyright bg-black z-index-step1\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-8 d-none d-xl-block\">
              <div class=\"footer-menu\">
                <ul>
                  <li><a href=\"";
        // line 468
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Home");
        echo "\">Home</a></li>
                  <li><a href=\"";
        // line 469
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Forum</a></li>
                  <li><a href=\"";
        // line 470
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Marketplace");
        echo "\">Marketplace</a></li>
                  <li><a href=\"";
        // line 471
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Annoces");
        echo "\">Annonces</a></li>
                  <li><a href=\"";
        // line 472
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show_front");
        echo "\">Event</a></li>
                  ";
        // line 475
        echo "                </ul>
              </div>
            </div>
            <div class=\"col-xl-4 align-self-center text-center py-3 py-xl-0 text-xl-end\">
              <p class=\"text-light fw-bold text-bold mb-0\">
                &copy; 2021
                <a class=\"text-white\" href=\"index-2.html\">Geek</a> By
                <a class=\"text-white\" href=\"https://themeforest.net/user/vecuro\"
                  >Leaders</a
                >. All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href=\"#\" class=\"scrollToTop icon-btn3\"
      ><i class=\"far fa-angle-up\"></i>
    </a> 
    <!-- Login Area Start -->
\t<div class=\"modal fade login-modal\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"login\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t<img class=\"logo\" src=\"Front/img/logo.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-area\">
            <form action=\"";
        // line 508
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-group\">
                  <label for=\"login-input-email\">Email*</label>
                  <input type=\"email\" name=\"_username\" class=\"input-field\" id=\"login-input-email\" placeholder=\"Enter your Email\">
              </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"login-input-password\">Password*</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" class=\"input-field\" id=\"login-input-password\" placeholder=\"Password\">
                  ";
        // line 517
        echo "              </div>
                <div class=\"form-group\">
                  <div class=\"box\">
                    <div class=\"left\">
                        <input type=\"checkbox\" class=\"check-box-field\" id=\"input-save-password\" checked=\"\">
                      <label for=\"input-save-password\">Remember Password</label>
                    </div>
                    <div class=\"right\">
                      <a href=\"http://pixner.net/dooplo/dooplo/terms-conditions-details.html#\" class=\"docs-creator\">
                        Forgot Password?
                      </a>
                    </div>
                  </div>
                </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t   <button type=\"submit\" class=\"mybtn1\">Log In</button>
\t\t\t\t\t\t\t</div>
            </form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-footer\">
\t\t\t\t\t\t<p>Not a member? 
              <button type=\"button\" class=\"close\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<a href=\"#\" data-target=\"#signin\" data-toggle=\"modal\" class=\"docs-creator\">
                  <span aria-hidden=\"true\">Create account</span>
                  <i class=\"fal fa-angle-double-right\"></i>
                </a>
              </button> 
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!-- Login Area End -->
\t
\t\t<!-- SignIn Area Start -->
\t\t<div class=\"modal fade login-modal sign-in\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"signin\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered \" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t\t<img class=\"logo\" src=\"Front/img/logo.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-area\">
            ";
        // line 566
        if (array_key_exists("form", $context)) {
            // line 567
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 567, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
            // line 570
            echo "                    ";
            // line 571
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 571, $this->source); })()), "username", [], "any", false, false, false, 571), 'label', ["attr" => ["class" => "input-name"], "label" => "username*"]);
            echo "
                    ";
            // line 572
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 572, $this->source); })()), "username", [], "any", false, false, false, 572), 'errors');
            echo "
                    ";
            // line 573
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 573, $this->source); })()), "username", [], "any", false, false, false, 573), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "username"]]);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
            // line 577
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 577, $this->source); })()), "email", [], "any", false, false, false, 577), 'label', ["attr" => ["class" => "input-email "], "label" => "email*"]);
            echo "
                    ";
            // line 578
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 578, $this->source); })()), "email", [], "any", false, false, false, 578), 'errors');
            echo "
                    ";
            // line 579
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 579, $this->source); })()), "email", [], "any", false, false, false, 579), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Lastname"]]);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                    ";
            // line 582
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 582, $this->source); })()), "password", [], "any", false, false, false, 582), 'label', ["attr" => ["class" => "input-password"], "label" => "password*"]);
            echo "
                    ";
            // line 583
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 583, $this->source); })()), "password", [], "any", false, false, false, 583), 'errors');
            echo "
                    ";
            // line 584
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "password", [], "any", false, false, false, 584), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Email"]]);
            echo " 
\t\t\t\t\t\t\t\t</div>
                <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
            // line 588
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 588, $this->source); })()), "confirm_password", [], "any", false, false, false, 588), 'label', ["attr" => ["class" => "input-con-password"], "label" => "Confirm Password*"]);
            echo "
                    ";
            // line 589
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 589, $this->source); })()), "confirm_password", [], "any", false, false, false, 589), 'errors');
            echo "
                    ";
            // line 590
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "confirm_password", [], "any", false, false, false, 590), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Confirm Password"]]);
            echo "
\t\t\t\t\t\t\t\t</div>
                <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
            // line 594
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 594, $this->source); })()), "picture_profil", [], "any", false, false, false, 594), 'label', ["label" => "Picture"]);
            echo "<br>
                    ";
            // line 595
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 595, $this->source); })()), "picture_profil", [], "any", false, false, false, 595), 'widget');
            echo "
                    ";
            // line 597
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 598
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 598, $this->source); })()), 'form_end');
            echo "
              ";
        }
        // line 600
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t<!-- SignIn Area End -->
    
    ";
        // line 607
        $this->displayBlock('javascripts', $context, $blocks);
        // line 682
        echo "  </body>
  
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 105
        echo "    <meta name=\"theme-color\" content=\"#ffffff\" />
    <link rel=\"stylesheet\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/app.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/fontawesome.css"), "html", null, true);
        echo "\"/>

    ";
        // line 111
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/theme-color1.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    ";
        // line 116
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/responsive.css"), "html", null, true);
        echo "\" />

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 371
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 607
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 608
        echo "    <div class=\"vs-cursor\"></div>
    <div class=\"vs-cursor2\"></div>
    <script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vscustom-carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vs-cursor.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/vsmenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/ajax-mail.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\" defer></script>

    <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/jquery.js.téléchargement"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/popper.min.js.téléchargement"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/bootstrap.min.js.téléchargement"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/plugin.js.téléchargement"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/TweenMax.js.téléchargement"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/mousemoveparallax.js.téléchargement"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/login/main.js.téléchargement"), "html", null, true);
        echo "\"></script>



<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>

";
        // line 656
        echo "
 <script>
 
        const LIKE_ICON = 'far fa-thumbs-up';
        const UNLIKE_ICON = 'fas fa-thumbs-up';
        Array.from(document.querySelectorAll('a.js-like')).forEach(function (link) {
            link.addEventListener('click', onClickLink);
        });
        async function onClickLink(event) {
            event.preventDefault();
            const url = this.href;
            const icone = this.querySelector('i');
            const count = this.querySelector('span.js-likes');
            try {
                const result = await axios.post(url);
                const data = result.data;
                icone.className = icone.className === LIKE_ICON ? UNLIKE_ICON : LIKE_ICON;
                count.textContent = data.likes;
            } catch (error) {
                if (error.response.status === 403) {
                    window.location = '/login'
                }
            }
        }
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1045 => 656,  1036 => 627,  1032 => 626,  1028 => 625,  1024 => 624,  1020 => 623,  1016 => 622,  1012 => 621,  1008 => 620,  1002 => 617,  998 => 616,  994 => 615,  990 => 614,  986 => 613,  982 => 612,  978 => 611,  974 => 610,  970 => 608,  960 => 607,  942 => 371,  929 => 117,  924 => 116,  920 => 114,  916 => 113,  912 => 112,  909 => 111,  904 => 108,  900 => 107,  896 => 106,  893 => 105,  883 => 104,  865 => 9,  852 => 682,  850 => 607,  841 => 600,  836 => 598,  833 => 597,  829 => 595,  824 => 594,  818 => 590,  814 => 589,  809 => 588,  803 => 584,  799 => 583,  795 => 582,  789 => 579,  785 => 578,  780 => 577,  774 => 573,  770 => 572,  765 => 571,  763 => 570,  757 => 567,  755 => 566,  704 => 517,  693 => 508,  658 => 475,  654 => 472,  650 => 471,  646 => 470,  642 => 469,  638 => 468,  542 => 375,  537 => 372,  535 => 371,  511 => 349,  509 => 347,  507 => 345,  505 => 343,  502 => 342,  494 => 337,  488 => 333,  486 => 332,  474 => 325,  459 => 313,  455 => 312,  451 => 311,  446 => 310,  436 => 302,  422 => 290,  419 => 289,  411 => 284,  408 => 283,  405 => 282,  403 => 281,  370 => 251,  312 => 195,  305 => 182,  302 => 181,  297 => 179,  294 => 178,  289 => 176,  283 => 174,  280 => 173,  278 => 172,  274 => 170,  266 => 161,  260 => 159,  258 => 158,  248 => 150,  242 => 148,  240 => 147,  231 => 141,  214 => 127,  205 => 120,  203 => 104,  198 => 102,  191 => 98,  186 => 96,  181 => 94,  174 => 90,  165 => 84,  156 => 78,  147 => 72,  139 => 67,  131 => 62,  123 => 57,  115 => 52,  107 => 47,  99 => 42,  91 => 37,  82 => 31,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"zxx\">
<meta
    http-equiv=\"content-type\"
    content=\"text/html;charset=UTF-8\" />
  <head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
    <title>Geek|{% block title %}{% endblock %}</title>
    <meta name=\"author\" content=\"Vecuro\" />
    <meta
      name=\"description\"
      content=\"Zocker - eSports and Gaming HTML Template\"
    />
    <meta name=\"keywords\" content=\"Zocker - eSports and Gaming HTML Template\" />
    <meta name=\"robots\" content=\"INDEX,FOLLOW\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width,initial-scale=1,shrink-to-fit=no\"
    />
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\" crossorigin=\"anonymous\">

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" />
    <link
      href=\"https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Montserrat:wght@700&amp;family=Roboto:wght@400;700&amp;display=swap\"
      rel=\"stylesheet\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"57x57\"
      href=\"{{ asset('Front/img/favicons/apple-icon-57x57.png') }}\"
    />
    
    <link
      rel=\"apple-touch-icon\"
      sizes=\"60x60\"
      href=\"{{ asset('Front/img/favicons/apple-icon-60x60.png') }}\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"72x72\"
      href=\"{{ asset('Front/img/favicons/apple-icon-72x72.png') }}\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"76x76\"
      href=\"{{ asset('Front/img/favicons/apple-icon-76x76.png') }}\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"114x114\"
      href=\"{{ asset('Front/img/favicons/apple-icon-114x114.png') }}\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"120x120\"
      href=\"{{ asset('Front/img/favicons/apple-icon-120x120.png') }}\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"144x144\"
      href=\"{{ asset('Front/img/favicons/apple-icon-144x144.png') }}\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"152x152\"
      href=\"{{ asset('Front/img/favicons/apple-icon-152x152.png') }}\"
    />
    <link
      rel=\"apple-touch-icon\"
      sizes=\"180x180\"
      href=\"{{ asset('Front/img/favicons/apple-icon-180x180.png') }}\"
    />
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"192x192\"
      href=\"{{ asset('Front/img/favicons/android-icon-192x192.png') }}\"
    />
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"32x32\"
      href=\"{{ asset('Front/img/favicons/favicon-32x32.png') }}\"
    />
    <link
      rel=\"icon\"
      type=\"image/png\"
      sizes=\"96x96\"
      href=\"{{ asset('Front/img/favicons/favicon-96x96.png') }}\"
    />
    <link
      rel=\"icon\"
      type=\"{{ asset('Front/image/png') }}\"
      sizes=\"16x16\"
      href=\"{{ asset('Front/img/favicons/favicon-16x16.png') }}\"
    />
    <link rel=\"manifest\" href=\"{{ asset('Front/img/favicons/manifest.html') }}\" />
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\" />
    <meta
      name=\"msapplication-TileImage\"
      content=\"{{ asset('Front/img/favicons/ms-icon-144x144.png') }}\"
    />
     {% block stylesheets %}
    <meta name=\"theme-color\" content=\"#ffffff\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/app.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('Front/css/fontawesome.css') }}\"/>

    {# <link rel=\"stylesheet\" href=\"{{ asset('Front/css/bootstrap.min.css') }}\"/> #}

    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/style.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Front/css/theme-color1.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Front/login/bootstrap.min.css') }}\"/>
    {# <link rel=\"stylesheet\" href=\"{{ asset('Front/css/plugin.css') }}\" /> #}
    <link rel=\"stylesheet\" href=\"{{ asset('Front/login/style.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Front/login/responsive.css') }}\" />

    {% endblock %}

  </head>
  <body>
 <div class=\"preloader\">
      <button class=\"vs-btn preloaderCls\">Cancel Preloader</button>
      <div class=\"preloader-inner\"> 
        <div class=\"loader-logo\">
          <img src=\"{{ asset('Front/img/logo.png') }}\" alt=\"Loader Image\" />
        </div>
        <div class=\"loader-wrap pt-4\"><span class=\"loader\"></span></div>
      </div>
    </div>
    <div class=\"sidemenu-wrapper d-none d-lg-block\">
      <div class=\"sidemenu-content bg-light-dark\">
        <button
          class=\"closeButton border-theme text-theme bg-theme-hover sideMenuCls\"
        >
          <i class=\"fal fa-times\"></i>
        </button>
        <div class=\"about-box\">
          <a href=\"indeax.html\">
          <img src=\"{{ asset('Front/img/logo.png') }}\" alt=\"Zocker\"/>
          </a>
          <div class=\"info-style1\">
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">You Email</p>
              <p class=\"text-white mb-0\">
                <a href=\"#\" class=\"text-inherit\">
                  {% if app.user %}
                    {{app.user.email}}
                  {% endif %}
                </a
                >
              </p>
            </div>
            <div class=\"info-style1\">
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">You Username</p>
              <p class=\"text-white mb-0\">
                <a href=\"#\" class=\"text-inherit\">
                  {% if app.user %}
                    {{app.user.username}}
                  {% endif %}
                </a
                >
              </p>
            </div>
          <div class=\"my-40\">
            <div class=\"info-style1\">
              {# <span class=\"icon-btn2\"
                ><i class=\"fal fa-map-marker-alt\"></i
              ></span> #}
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Team</p>
              <p class=\"text-white mb-0\">
                {% if app.user %}
                  {% if app.user.team %}
                    {{app.user.team}}
                    <br>
                    <a href=\"{{path('QuitTeam')}}\" class=\"text-inherit\">Quit Team</a>
                  {% else %}
                    You don't belong to any team<br>
                    <a href=\"{{path('user/Teams')}}\" class=\"text-inherit\">Join Team</a>
                  {% endif %}
                {% endif %}
              </p>
            </div>
            <a href=\"#\" class=\"vs-btn outline1 d-none d-xl-inline-block\" data-toggle=\"modal\" data-target=\"#login\">
                    <i class=\"fab fa-twitch\"></i> Modify Profile
                    </a>
            {# <div class=\"info-style1\">
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Get In Touch</p>
              <p class=\"text-white mb-0\">
                <a href=\"tel:13456789\" class=\"text-inherit\"
                  >85 125 1256 12145</a
                >
              </p>
            </div> #}
          </div>
        </div>
        <h3 class=\"sidebox-title text-white h5\">About Us</h3>
        <div class=\"post-thumb-style1\">
          
          <div class=\"my-40\">
            <div class=\"info-style1\">
              <span class=\"icon-btn2\"
                ><i class=\"fal fa-map-marker-alt\"></i
              ></span>
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Address</p>
              <p class=\"text-white mb-0\">
                301 Massachusetts Ave, Lunenburg MA 1462
              </p>
            </div>
            <div class=\"info-style1\">
              <span class=\"icon-btn2\"><i class=\"fal fa-phone\"></i></span>
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Get In Touch</p>
              <p class=\"text-white mb-0\">
                <a href=\"tel:13456789\" class=\"text-inherit\"
                  >85 125 1256 12145</a
                >
              </p>
            </div>
            <div class=\"info-style1\">
              <span class=\"icon-btn2\"><i class=\"fal fa-envelope\"></i></span>
              <p class=\"fs-4 lh-1 fw-medium text-white mb-0\">Mail Us</p>
              <p class=\"text-white mb-0\">
                <a href=\"mailto:zocker@gmail.com\" class=\"text-inherit\"
                  >zocker@example.com</a
                >
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class=\"popup-search-box d-none d-lg-block\">
      <button class=\"searchClose border-theme text-theme\">
        <i class=\"fal fa-times\"></i>
      </button>
      <form action=\"#\">
        <input
          type=\"text\"
          class=\"border-theme\"
          placeholder=\"What are you looking for\"
        />
        <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
      </form>
    </div>
    <div class=\"vs-menu-wrapper\">
      <div class=\"vs-menu-area bg-dark\">
        <button class=\"vs-menu-toggle\"><i class=\"fal fa-times\"></i></button>
        <div class=\"mobile-logo\">
          <a href=\"index-2.html\"
            ><img src=\"{{ asset('Front/img/logo.png') }}\" alt=\"Zocker\"
          /></a>
        </div>
        <div class=\"vs-mobile-menu link-inherit\"></div>
      </div>
    </div>
    <header
      class=\"header-wrapper header-layout1 position-absolute top-0 start-0 w-100 z-index-step1\"
    >
      <div class=\"header-top\">
        <div class=\"container\">
          <div class=\"row py-md-2\">
            <div class=\"col-sm-6 d-none d-md-block\"></div>
            <div class=\"col-sm-6 text-end d-none d-md-block\">
              <ul class=\"social-links fs-xs text-white\">
                <li>
                  <a href=\"https://google.com/\"
                    ><i class=\"fab fa-facebook-f\"></i
                  ></a>
                </li>
                <li>
                  <a href=\"https://google.com/\"
                    ><i class=\"fab fa-twitter\"></i
                  ></a>
                </li>
                <li>
                  <a href=\"https://google.com/\"
                    ><i class=\"fab fa-youtube\"></i
                  ></a>
                </li>
                {% if app.user %}
                  {% if app.user.roles[0]==\"ROLE_ADMIN\" %}
                    <li>
                      <a href=\"{{ path('admin/index') }}\">
                      <i class=\"fal fa-dashboard\"> Dashboard </i>
                      </a>
                    </li>
                  {% endif %}
                {% endif %}
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"header-main\">
        <div class=\"container position-relative\">
          <div class=\"bg-dark px-50\">
            <div class=\"row align-items-center\">
              <div class=\"col-6 col-lg-4 d-block d-xl-none py-3 py-xl-0\">
                <div class=\"header-logo\">
                  <a href=\"index-2.html\"
                    ><img src=\"{{ asset('Front/img/logo-2.png') }}\" alt=\"Zocker\"
                  /></a>
                </div>
              </div>
              <div class=\"col-6 col-lg-8 col-xl-5 text-end text-xl-start\">
                <nav class=\"main-menu menu-style1 mobile-menu-active\"data-expand=\"992\">
                  <ul>
                    {# <li><a href=\"{{path('Home')}}\">Home</a></li> #}
                    <li><a href=\"{{path('blog')}}\">Forum</a></li>
                    <li><a href=\"{{path('reclamation_index')}}\">reclamations</a></li>
                    <li><a href=\"{{path('listAnnoncesF')}}\">Annonces</a></li>
                    <li><a href=\"{{path('event_show_front')}}\">Event</a></li>
                  </ul>
                </nav>
                <button
                  type=\"button\"
                  class=\"vs-menu-toggle text-white d-inline-block d-lg-none\"
                >
                  <i class=\"far fa-bars\"></i>
                </button>
              </div>
              <div class=\"col-md-4 col-lg-2 text-center d-none d-xl-block\">
                <div class=\"header-logo1\">
                  <a href=\"{{path('Home')}}\"><img src=\"{{ asset('Front/img/logo.png') }}\" alt=\"Zocker\" /></a>
                </div>
              </div>
              <div class=\"col-md-4 col-lg-5 d-none d-xl-block\">
                <div
                  class=\"header-right d-flex align-items-center justify-content-end\"
                >
                   {% if not app.user %}
                    <a href=\"#\" class=\"vs-btn outline1 d-none d-xl-inline-block\" data-toggle=\"modal\" data-target=\"#login\">
                    <i class=\"fab fa-twitch\"></i> Sign In
                    </a>
                  {% else %}
                    <a href=\"{{ path('logout') }}\" class=\"vs-btn outline1 d-none d-xl-inline-block\">
                    <i class=\"fab fa-twitch\"></i> 
                    Log out
                    </a>
                    {# <button type=\"submit\" class=\"vs-btn outline1 d-none d-xl-inline-block\" data-toggle=\"modal\">Log out</button> #}
                  {% endif%}
                  {# {% if app.user %}
                  {% if app.user.roles[0]==\"ROLE_ADMIN\" %} #}
                    {# <a href=\"{{ path('admin/index') }}\" class=\"vs-btn outline1 d-none d-xl-inline-block\">
                    <i class=\"fab fa-twitch\"></i> Dashboard </a> #}
                  {# {% endif %}
                  {% endif %} #}
                  <ul class=\"header-list1 list-style-none ml-30\">
                    <li>
                      <ul class=\"dropdown-menu\"></ul>
                    </li>
                    <li>
                      <button class=\"searchBoxTggler\">
                        <i class=\"fal fa-search\"></i>
                      </button>
                    </li>
                    <li>
                      <button class=\"sideMenuToggler\">
                        <i class=\"fal fa-grip-horizontal fs-2\"></i>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    {% block body %}{% endblock %}
    <footer class=\"footer-wrapper footer-layout1 bg-fluid bg-major-black position-relative\">
      <div
        class=\"bg-fluid d-none d-none d-xl-block position-absolute start-0 top-0 w-100 h-100\"
        data-bg-src=\"{{ asset('Front/img/bg/footer-bg-1-1.jpg') }}\"
      ></div>
      <div class=\"footer-widget-wrapper dark-style1 z-index-common\">
        <div class=\"container\">
          <div class=\"row justify-content-between\">
            <div class=\"col-md-6 col-lg-3 col-xl-4\">
              <div class=\"widget footer-widget pt-0\">
                <h3 class=\"widget_title\">About Us</h3>
                <div class=\"vs-widget-about\">
                  <p class=\"about-text text-footer1 pe-xl-5\">
                    The League of Legends offseason is in full effect and teams
                    are looking to sign new players to strengthen their roster
                    or to re-sign their current players.
                  </p>
                  <div class=\"d-flex gap-2 text-white mt-45\">
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-facebook-f\"></i
                    ></a>
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-twitter\"></i
                    ></a>
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-linkedin-in\"></i
                    ></a>
                    <a class=\"icon-btn1 skew-right\" href=\"https://google.com/\"
                      ><i class=\"fab fa-youtube\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-sm-6 col-md-6 col-lg-3 col-xl-2\">
              <div class=\"widget widget_categories footer-widget\">
                <h3 class=\"widget_title\">Categories</h3>
                <ul>
                  <li><a href=\"#\">Ancient</a></li>
                  <li><a href=\"#\">Fantasy</a></li>
                  <li><a href=\"#\">Horror</a></li>
                  <li><a href=\"#\">Shooting</a></li>
                  <li><a href=\"#\">MS-XBOX</a></li>
                </ul>
              </div>
            </div>
            <div class=\"col-sm-6 col-md-6 col-lg-3 col-xl-2\">
              <div class=\"widget widget_nav_menu footer-widget\">
                <h3 class=\"widget_title\">NEED HELP?</h3>
                <div class=\"menu-all-pages-container\">
                  <ul class=\"menu\">
                    <li><a href=\"#\">Company</a></li>
                    <li><a href=\"#\">For the fans</a></li>
                    <li><a href=\"#\">Press</a></li>
                    <li><a href=\"#\">Privacy</a></li>
                    <li><a href=\"#\">Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-md-6 col-lg-3 col-xl-3\">
              <div class=\"widget footer-widget\">
                <h3 class=\"widget_title\">Contact Us</h3>
                <div class=\"vs-widget-about\">
                  <p class=\"contact-info\">
                    <i class=\"fal fa-map-marker-alt text-white\"></i>121 King St,
                    Melbourne VIC 3000, Australia
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-phone text-white\"></i
                    ><a href=\"tel:+65965252561\">(888)-659-252561</a>
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-fax text-white\"></i
                    ><a href=\"tel:+65965252561\">(888)-123-45678</a>
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-envelope text-white\"></i
                    ><a href=\"mailto:zocker@webmail.com\">zocker@email.com</a>
                  </p>
                  <p class=\"contact-info\">
                    <i class=\"fal fa-globe text-white\"></i
                    ><a href=\"https://zocker.com/\">www.zockerexample.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"footer-copyright bg-black z-index-step1\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xl-8 d-none d-xl-block\">
              <div class=\"footer-menu\">
                <ul>
                  <li><a href=\"{{path('Home')}}\">Home</a></li>
                  <li><a href=\"{{path('blog')}}\">Forum</a></li>
                  <li><a href=\"{{path('Marketplace')}}\">Marketplace</a></li>
                  <li><a href=\"{{path('Annoces')}}\">Annonces</a></li>
                  <li><a href=\"{{path('event_show_front')}}\">Event</a></li>
                  {# <li><a href=\"#\">Cookie</a></li>
                  <li><a href=\"#\">Content</a></li> #}
                </ul>
              </div>
            </div>
            <div class=\"col-xl-4 align-self-center text-center py-3 py-xl-0 text-xl-end\">
              <p class=\"text-light fw-bold text-bold mb-0\">
                &copy; 2021
                <a class=\"text-white\" href=\"index-2.html\">Geek</a> By
                <a class=\"text-white\" href=\"https://themeforest.net/user/vecuro\"
                  >Leaders</a
                >. All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href=\"#\" class=\"scrollToTop icon-btn3\"
      ><i class=\"far fa-angle-up\"></i>
    </a> 
    <!-- Login Area Start -->
\t<div class=\"modal fade login-modal\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"login\" aria-hidden=\"true\" style=\"display: none;\">
\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t<img class=\"logo\" src=\"Front/img/logo.png\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-area\">
            <form action=\"{{path('login')}}\" method=\"post\">
\t\t\t\t\t\t\t<div class=\"form-group\">
                  <label for=\"login-input-email\">Email*</label>
                  <input type=\"email\" name=\"_username\" class=\"input-field\" id=\"login-input-email\" placeholder=\"Enter your Email\">
              </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"login-input-password\">Password*</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"_password\" class=\"input-field\" id=\"login-input-password\" placeholder=\"Password\">
                  {# <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"> #}
              </div>
                <div class=\"form-group\">
                  <div class=\"box\">
                    <div class=\"left\">
                        <input type=\"checkbox\" class=\"check-box-field\" id=\"input-save-password\" checked=\"\">
                      <label for=\"input-save-password\">Remember Password</label>
                    </div>
                    <div class=\"right\">
                      <a href=\"http://pixner.net/dooplo/dooplo/terms-conditions-details.html#\" class=\"docs-creator\">
                        Forgot Password?
                      </a>
                    </div>
                  </div>
                </div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t   <button type=\"submit\" class=\"mybtn1\">Log In</button>
\t\t\t\t\t\t\t</div>
            </form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-footer\">
\t\t\t\t\t\t<p>Not a member? 
              <button type=\"button\" class=\"close\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<a href=\"#\" data-target=\"#signin\" data-toggle=\"modal\" class=\"docs-creator\">
                  <span aria-hidden=\"true\">Create account</span>
                  <i class=\"fal fa-angle-double-right\"></i>
                </a>
              </button> 
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<!-- Login Area End -->
\t
\t\t<!-- SignIn Area Start -->
\t\t<div class=\"modal fade login-modal sign-in\" id=\"signin\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"signin\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog modal-dialog-centered \" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<div class=\"logo-area\">
\t\t\t\t\t\t\t\t<img class=\"logo\" src=\"Front/img/logo.png\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"header-area\">
\t\t\t\t\t\t\t<h4 class=\"title\">Great to have you back!</h4>
\t\t\t\t\t\t\t<p class=\"sub-title\">Enter your details below.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-area\">
            {% if form is defined %}
            {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{# <label for=\"input-name\">Name*</label> #}
                    {# {{form_widget(form.Name,{ 'attr': {'class': 'input-field','placeholder': 'name'} })}} #}
                    {{ form_label(form.username,\"username*\",{ 'attr': {'class': 'input-name'} }) }}
                    {{ form_errors(form.username) }}
                    {{form_widget(form.username,{ 'attr': {'class': 'input-field','placeholder': 'username'} })}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{# <label for=\"input-email\">Lastname*</label> #}
                    {{ form_label(form.email,\"email*\",{ 'attr': {'class': 'input-email '} }) }}
                    {{ form_errors(form.email) }}
                    {{form_widget(form.email,{ 'attr': {'class': 'input-field','placeholder': 'Lastname'} })}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                    {{ form_label(form.password,\"password*\",{ 'attr': {'class': 'input-password'} }) }}
                    {{ form_errors(form.password) }}
                    {{ form_widget(form.password,{ 'attr': {'class': 'input-field','placeholder': 'Email'} })}} 
\t\t\t\t\t\t\t\t</div>
                <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{# <label for=\"input-con-password\">Confirm Password*</label> #}
                    {{ form_label(form.confirm_password,\"Confirm Password*\",{ 'attr': {'class': 'input-con-password'} }) }}
                    {{ form_errors(form.confirm_password) }}
                    {{form_widget(form.confirm_password,{ 'attr': {'class': 'input-field','placeholder': 'Confirm Password'} })}}
\t\t\t\t\t\t\t\t</div>
                <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{# <label for=\"input-con-password\">Picture*</label> #}
                    {{ form_label(form.picture_profil,\"Picture\") }}<br>
                    {{ form_widget(form.picture_profil) }}
                    {# {{form_widget(form.picture,{ 'attr': {'class': 'input-field','placeholder': 'Picture'} })}} #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(form) }}
              {% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t<!-- SignIn Area End -->
    
    {% block javascripts %}
    <div class=\"vs-cursor\"></div>
    <div class=\"vs-cursor2\"></div>
    <script src=\"{{ asset('Front/js/vendor/jquery-1.12.4.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/app.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/vscustom-carousel.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/vs-cursor.min.js') }}\"></script>
    <script src=\"{{ asset('Front/js/vsmenu.min.js') }}\"></script>
    <script src=\"{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ') }}\"></script>
    <script src=\"{{ asset('Front/js/map.js') }}\"></script>
    <script src=\"{{ asset('Front/js/ajax-mail.js') }}\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\" defer></script>

    <script src=\"{{ asset('Front/js/main.js') }}\"></script>
    <script src=\"{{ asset('Front/login/jquery.js.téléchargement') }}\"></script>
    <script src=\"{{ asset('Front/login/popper.min.js.téléchargement') }}\"></script>
    <script src=\"{{ asset('Front/login/bootstrap.min.js.téléchargement') }}\"></script>
    <script src=\"{{ asset('Front/login/plugin.js.téléchargement') }}\"></script>
    <script src=\"{{ asset('Front/login/TweenMax.js.téléchargement') }}\"></script>
    <script src=\"{{ asset('Front/login/mousemoveparallax.js.téléchargement') }}\"></script>
    <script src=\"{{ asset('Front/login/main.js.téléchargement') }}\"></script>



<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>

{# <script>

function  onClickBtnLike(event)
{
event.preventDefault();

   const url=this.href;

   axios.get(url).then(function(response){

     console.log(response);
   }
   
   )
}
  document.querySelectorAll('a.js-like').forEach(function(link)

{
   link.EventListener('click',onClickBtnLike)
}
);

</script> #}

 <script>
 
        const LIKE_ICON = 'far fa-thumbs-up';
        const UNLIKE_ICON = 'fas fa-thumbs-up';
        Array.from(document.querySelectorAll('a.js-like')).forEach(function (link) {
            link.addEventListener('click', onClickLink);
        });
        async function onClickLink(event) {
            event.preventDefault();
            const url = this.href;
            const icone = this.querySelector('i');
            const count = this.querySelector('span.js-likes');
            try {
                const result = await axios.post(url);
                const data = result.data;
                icone.className = icone.className === LIKE_ICON ? UNLIKE_ICON : LIKE_ICON;
                count.textContent = data.likes;
            } catch (error) {
                if (error.response.status === 403) {
                    window.location = '/login'
                }
            }
        }
    </script>
    {% endblock %}
  </body>
  
</html>
", "base-front.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\base-front.html.twig");
    }
}
