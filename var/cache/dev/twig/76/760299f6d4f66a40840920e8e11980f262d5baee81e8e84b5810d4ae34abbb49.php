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

/* Front-office/Home.html.twig */
class __TwigTemplate_e29832c93efcf15deb2ccb6d60deac08603ebe1de50b297847b98564f2ec0eb7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Home.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-office/Home.html.twig", 1);
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
        echo " <section class=\"vs-hero-wrapper\">
      <div
        class=\"vs-hero-carousel\"
        data-height=\"900\"
        data-container=\"1170\"
        data-slidertype=\"fullwidth\"
      >
        <a
          href=\"#\"
          class=\"ls-arrow text-white d-none d-xl-inline-block\"
          data-ls-go=\"next\"
          >Next<i class=\"fal fa-arrow-right\"></i
        ></a>
        <a
          href=\"#\"
          class=\"ls-arrow text-white d-none d-xl-inline-block\"
          data-ls-go=\"prev\"
          ><i class=\"fal fa-arrow-left\"></i>Prev</a
        >
        <div class=\"ls-slide\" data-ls=\"duration: 8000; transition2d: 5;\">
          <img
            src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero-img-1.jpg"), "html", null, true);
        echo "\"
            alt=\"Hero Bg Image\"
            class=\"ls-bg\"
          />
          <p
            class=\"ls-l mb-2 mb-md-0 ls-hide-phone\"
            style=\"
              left: 0;
              top: 350px;
              width: 318px;
              min-width: 200px;
              min-height: 20px;
              height: 30px;
              line-height: 1;
              padding: 5px 40px;
              background-image: -webkit-linear-gradient(
                0deg,
                rgb(75, 21, 135) 0%,
                rgb(156, 85, 235) 100%
              );
            \"
            data-ls=\"offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          ></p>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 40px;
              top: 363px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 16px;
              line-height: 1;
              letter-spacing: 0.2em;
            \"
            data-ls=\"minfontsize: 10px; offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; texttypein: chars_asc; textstartatin: transitioninstart; textdurationin: 100; textfadein: true; textoffsetxin: -20; textshiftin: 20;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Professional eSports Team
          </p>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 300px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 400px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 500; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Pro League
          </h2>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 450px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 480px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 400; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Esports Team
          </h2>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 0;
              top: 575px;
              color: #b0b1be;
              font-size: 18px;
              width: 700px;
              min-width: 230px;
              white-space: normal;
            \"
            data-ls=\"minfontsize: 16px; durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Exclusive insights, latest news, content and exciting offers.
          </p>
          <div
            class=\"ls-l ls-center-xs ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 660px; width: 100px; height: 100px;\"
            style=\"left: 0; top: 635px\"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            <div class=\"ls-btn-group\">
              <a href=\"team.html\" class=\"vs-btn gradient-btn\">Meet with team</a>
              <a href=\"shop.html\" class=\"vs-btn black-skew\"
                ><i class=\"fal fa-shopping-cart\"></i>Merch shop</a
              >
            </div>
          </div>
        </div>
        <div class=\"ls-slide\" data-ls=\"duration: 8000; transition2d: 5;\">
          <img
            src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero-img-2.jpg"), "html", null, true);
        echo "\"
            alt=\"Hero Bg Image\"
            class=\"ls-bg\"
          />
          <p
            class=\"ls-l mb-2 mb-md-0 ls-hide-phone\"
            style=\"
              left: 0;
              top: 350px;
              width: 318px;
              min-width: 200px;
              min-height: 20px;
              height: 30px;
              line-height: 1;
              padding: 5px 40px;
              background-image: -webkit-linear-gradient(
                0deg,
                rgb(75, 21, 135) 0%,
                rgb(156, 85, 235) 100%
              );
            \"
            data-ls=\"offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          ></p>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 40px;
              top: 363px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 16px;
              line-height: 1;
              letter-spacing: 0.2em;
            \"
            data-ls=\"minfontsize: 10px; offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; texttypein: chars_asc; textstartatin: transitioninstart; textdurationin: 100; textfadein: true; textoffsetxin: -20; textshiftin: 20;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Professional Action Team
          </p>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 300px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 400px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 500; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Pro Legend
          </h2>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 450px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 480px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 400; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Action Team
          </h2>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 0;
              top: 575px;
              color: #b0b1be;
              font-size: 18px;
              width: 700px;
              min-width: 230px;
              white-space: normal;
            \"
            data-ls=\"minfontsize: 16px; durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Exclusive insights, latest news, content and exciting offers.
          </p>
          <div
            class=\"ls-l ls-center-xs ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 660px; width: 100px; height: 100px;\"
            style=\"left: 0; top: 635px\"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            <div class=\"ls-btn-group\">
              <a href=\"team.html\" class=\"vs-btn gradient-btn\">Meet with team</a>
              <a href=\"shop.html\" class=\"vs-btn black-skew\"
                ><i class=\"fal fa-shopping-cart\"></i>Merch shop</a
              >
            </div>
          </div>
        </div>
        <div class=\"ls-slide\" data-ls=\"duration: 8000; transition2d: 5;\">
          <img
            src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/hero/hero-img-3.jpg"), "html", null, true);
        echo "\"
            alt=\"Hero Bg Image\"
            class=\"ls-bg\"
          />
          <p
            class=\"ls-l mb-2 mb-md-0 ls-hide-phone\"
            style=\"
              left: 0;
              top: 350px;
              width: 318px;
              min-width: 200px;
              min-height: 20px;
              height: 30px;
              line-height: 1;
              padding: 5px 40px;
              background-image: -webkit-linear-gradient(
                0deg,
                rgb(75, 21, 135) 0%,
                rgb(156, 85, 235) 100%
              );
            \"
            data-ls=\"offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          ></p>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 40px;
              top: 363px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 16px;
              line-height: 1;
              letter-spacing: 0.2em;
            \"
            data-ls=\"minfontsize: 10px; offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; texttypein: chars_asc; textstartatin: transitioninstart; textdurationin: 100; textfadein: true; textoffsetxin: -20; textshiftin: 20;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Professional Ranking Team
          </p>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 300px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 400px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 500; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Top Danger
          </h2>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 450px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 480px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 400; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Loliga Team
          </h2>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 0;
              top: 575px;
              color: #b0b1be;
              font-size: 18px;
              width: 700px;
              min-width: 230px;
              white-space: normal;
            \"
            data-ls=\"minfontsize: 16px; durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Exclusive insights, latest news, content and exciting offers.
          </p>
          <div
            class=\"ls-l ls-center-xs ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 660px; width: 100px; height: 100px;\"
            style=\"left: 0; top: 635px\"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            <div class=\"ls-btn-group\">
              <a href=\"team.html\" class=\"vs-btn gradient-btn\">Meet with team</a>
              <a href=\"shop.html\" class=\"vs-btn black-skew\"
                ><i class=\"fal fa-shopping-cart\"></i>Merch shop</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <div
      class=\"bg1 bg-light-dark bg-fixed\"
      data-bg-src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/bg/bg-1.jpg"), "html", null, true);
        echo "\"
    >
      <div class=\"vs-video-area space-top\">
        <div class=\"container\">
          <div
            class=\"row align-items-center gx-xl-0 arrow-white vs-carousel\"
            data-slide-show=\"3\"
            data-sm-slide-show=\"2\"
            data-xs-slide-show=\"1\"
            data-arrows=\"true\"
            data-xl-arrows=\"true\"
            data-ml-arrows=\"true\"
            data-center-mode=\"true\"
            data-xl-center-mode=\"true\"
            data-ml-center-mode=\"true\"
            data-lg-center-mode=\"true\"
            data-md-center-mode=\"true\"
          >
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/video/video-img-1-1.jpg"), "html", null, true);
        echo "\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/video/video-img-1-2.jpg"), "html", null, true);
        echo "\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/video/video-img-1-3.jpg"), "html", null, true);
        echo "\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/video/video-img-1-4.jpg"), "html", null, true);
        echo "\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class=\"vs-match-wrapper vs-match-layout1 space-top space-bottom\">
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-md-5 col-xl-6\">
              <div class=\"section-title\">
                <span class=\"sub-title1\">trending match</span>
                <h2 class=\"sec-title1 text-white\">matchs</h2>
              </div>
            </div>
            <div class=\"col-lg-7 col-xl-6 text-center text-lg-end\">
              <div class=\"filter-menu-style1 filter-menu-active mb-70\">
                <button data-filter=\"*\" class=\"active\">All</button>
                <button data-filter=\".csgo\">csgo</button>
                <button data-filter=\".dota\">dota 2</button>
                <button data-filter=\".fortnite\">fortnite</button>
                <button data-filter=\".pubg\">pubg</button>
              </div>
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
                          src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-7.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-8.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\"
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
                          src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-1.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-2.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\"
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
                          src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-3.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-4.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\"
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
                          src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-5.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/logos/logo-1-6.png"), "html", null, true);
        echo "\"
                          alt=\"Team Logo\"
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
    </div>
    <section
      class=\"vs-blog-wrapper bg-dark vs-blog-layout1 link-inherit space-top space-md-bottom\"
      id=\"blog\"
    >
      <div class=\"container\">
        <div class=\"section-title\">
          <span class=\"sub-title1\">blog</span>
          <h2 class=\"sec-title1 text-white\">news feeds</h2>
        </div>
        <div
          class=\"row vs-carousel arrow-white\"
          data-slide-show=\"3\"
          data-md-slide-show=\"2\"
          data-sm-slide-show=\"1\"
          data-xs-slide-show=\"1\"
          data-arrows=\"true\"
          data-xl-arrows=\"true\"
        >
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/blog-img-1-1.jpg"), "html", null, true);
        echo "\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">esports</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >Hundreds of demonstrator march against the death</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>June 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/blog-img-1-2.jpg"), "html", null, true);
        echo "\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">Action</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >Lorem ipsum dolor sectetur adipiscing print have</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>Augest 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/blog-img-1-3.jpg"), "html", null, true);
        echo "\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">Classic</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >From its medieval origins digital learn graphic or web</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>March 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/img/blog/blog-img-1-4.jpg"), "html", null, true);
        echo "\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">Modern</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >The purpose of lorem ipsum natural looking century</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>Feb 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class=\"vs-member-area vs-member-layout1 bg-light-dark space-top space-md-bottom\"
    >
      
    </section>
    
    <section class=\"vs-contact-wrapper bg-light-dark space\">
      <div class=\"container\">
        <div class=\"section-title\" id=\"contact\">
          <span class=\"sub-title1\">Contact</span>
          <h2 class=\"sec-title1 text-white\">Get in touch</h2>
        </div>
        <form
          action=\"https://html.vecuro.com/foodelio/zocker/demo/mail.php\"
          method=\"POST\"
          class=\"contact-form contact-form-style1 form-dark px-80 py-80\"
        >
          <div class=\"row\">
            <div class=\"col-lg-6 form-group\">
              <label class=\"text-white\" for=\"name\">Enter Name</label>
              <input
                type=\"text\"
                id=\"name\"
                name=\"name\"
                class=\"form-control\"
                placeholder=\"Enter Your Name\"
              />
              <i class=\"fal fa-user\"></i>
            </div>
            <div class=\"col-lg-6 form-group\">
              <label class=\"text-white\" for=\"email\">Enter Email</label>
              <input
                type=\"text\"
                id=\"email\"
                name=\"email\"
                class=\"form-control\"
                placeholder=\"Enter Your Email\"
              />
              <i class=\"fal fa-envelope\"></i>
            </div>
            <div class=\"col-12 form-group\">
              <label class=\"text-white\" for=\"message\">Enter Message</label>
              <textarea
                class=\"form-control\"
                id=\"message\"
                rows=\"11\"
                cols=\"50\"
                name=\"message\"
                placeholder=\"Your Message\"
              ></textarea>
              <i class=\"fal fa-pencil-alt\"></i>
            </div>
            <div class=\"col-12 form-group mb-0 text-center\">
              <button type=\"submit\" class=\"vs-btn gradient-btn\">
                Submit Your Quote
              </button>
              <p class=\"form-messages text-white mt-20 mb-0 text-center\"></p>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class=\"vs-newsletter-wrapper bg-dark z-index-step1\">
      <div class=\"container\">
        <div class=\"position-relative\">
          <div
            class=\"inner-wrapper bg-black position-absolute top-50 start-50 translate-middle w-100 px-60 py-40\"
          >
            <div class=\"row align-items-center justify-content-center\">
              <div class=\"col-xl-6 text-center text-xl-start mb-3 mb-xl-0\">
                <span class=\"sub-title2 mt-2\">Newsletter</span>
                <h2 class=\"mb-0 text-white\">get monthly updates</h2>
              </div>
              <div class=\"col-md-10 col-lg-8 col-xl-6\">
                <form action=\"#\" class=\"newsletter-style1 d-md-flex\">
                  <input
                    type=\"email\"
                    class=\"form-control\"
                    placeholder=\"Enter email address\"
                  />
                  <button class=\"vs-btn gradient-btn\">Subscribe Now</button>
                </form>
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
        return "Front-office/Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  858 => 734,  829 => 708,  800 => 682,  771 => 656,  708 => 596,  700 => 591,  655 => 549,  647 => 544,  602 => 502,  594 => 497,  549 => 455,  541 => 450,  495 => 407,  475 => 390,  455 => 373,  435 => 356,  408 => 332,  301 => 228,  196 => 126,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base-front.html.twig\" %}
{% block body %}
 <section class=\"vs-hero-wrapper\">
      <div
        class=\"vs-hero-carousel\"
        data-height=\"900\"
        data-container=\"1170\"
        data-slidertype=\"fullwidth\"
      >
        <a
          href=\"#\"
          class=\"ls-arrow text-white d-none d-xl-inline-block\"
          data-ls-go=\"next\"
          >Next<i class=\"fal fa-arrow-right\"></i
        ></a>
        <a
          href=\"#\"
          class=\"ls-arrow text-white d-none d-xl-inline-block\"
          data-ls-go=\"prev\"
          ><i class=\"fal fa-arrow-left\"></i>Prev</a
        >
        <div class=\"ls-slide\" data-ls=\"duration: 8000; transition2d: 5;\">
          <img
            src=\"{{ asset('Front/img/hero/hero-img-1.jpg') }}\"
            alt=\"Hero Bg Image\"
            class=\"ls-bg\"
          />
          <p
            class=\"ls-l mb-2 mb-md-0 ls-hide-phone\"
            style=\"
              left: 0;
              top: 350px;
              width: 318px;
              min-width: 200px;
              min-height: 20px;
              height: 30px;
              line-height: 1;
              padding: 5px 40px;
              background-image: -webkit-linear-gradient(
                0deg,
                rgb(75, 21, 135) 0%,
                rgb(156, 85, 235) 100%
              );
            \"
            data-ls=\"offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          ></p>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 40px;
              top: 363px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 16px;
              line-height: 1;
              letter-spacing: 0.2em;
            \"
            data-ls=\"minfontsize: 10px; offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; texttypein: chars_asc; textstartatin: transitioninstart; textdurationin: 100; textfadein: true; textoffsetxin: -20; textshiftin: 20;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Professional eSports Team
          </p>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 300px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 400px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 500; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Pro League
          </h2>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 450px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 480px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 400; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Esports Team
          </h2>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 0;
              top: 575px;
              color: #b0b1be;
              font-size: 18px;
              width: 700px;
              min-width: 230px;
              white-space: normal;
            \"
            data-ls=\"minfontsize: 16px; durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Exclusive insights, latest news, content and exciting offers.
          </p>
          <div
            class=\"ls-l ls-center-xs ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 660px; width: 100px; height: 100px;\"
            style=\"left: 0; top: 635px\"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            <div class=\"ls-btn-group\">
              <a href=\"team.html\" class=\"vs-btn gradient-btn\">Meet with team</a>
              <a href=\"shop.html\" class=\"vs-btn black-skew\"
                ><i class=\"fal fa-shopping-cart\"></i>Merch shop</a
              >
            </div>
          </div>
        </div>
        <div class=\"ls-slide\" data-ls=\"duration: 8000; transition2d: 5;\">
          <img
            src=\"{{ asset('Front/img/hero/hero-img-2.jpg') }}\"
            alt=\"Hero Bg Image\"
            class=\"ls-bg\"
          />
          <p
            class=\"ls-l mb-2 mb-md-0 ls-hide-phone\"
            style=\"
              left: 0;
              top: 350px;
              width: 318px;
              min-width: 200px;
              min-height: 20px;
              height: 30px;
              line-height: 1;
              padding: 5px 40px;
              background-image: -webkit-linear-gradient(
                0deg,
                rgb(75, 21, 135) 0%,
                rgb(156, 85, 235) 100%
              );
            \"
            data-ls=\"offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          ></p>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 40px;
              top: 363px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 16px;
              line-height: 1;
              letter-spacing: 0.2em;
            \"
            data-ls=\"minfontsize: 10px; offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; texttypein: chars_asc; textstartatin: transitioninstart; textdurationin: 100; textfadein: true; textoffsetxin: -20; textshiftin: 20;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Professional Action Team
          </p>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 300px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 400px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 500; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Pro Legend
          </h2>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 450px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 480px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 400; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Action Team
          </h2>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 0;
              top: 575px;
              color: #b0b1be;
              font-size: 18px;
              width: 700px;
              min-width: 230px;
              white-space: normal;
            \"
            data-ls=\"minfontsize: 16px; durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Exclusive insights, latest news, content and exciting offers.
          </p>
          <div
            class=\"ls-l ls-center-xs ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 660px; width: 100px; height: 100px;\"
            style=\"left: 0; top: 635px\"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            <div class=\"ls-btn-group\">
              <a href=\"team.html\" class=\"vs-btn gradient-btn\">Meet with team</a>
              <a href=\"shop.html\" class=\"vs-btn black-skew\"
                ><i class=\"fal fa-shopping-cart\"></i>Merch shop</a
              >
            </div>
          </div>
        </div>
        <div class=\"ls-slide\" data-ls=\"duration: 8000; transition2d: 5;\">
          <img
            src=\"{{ asset('Front/img/hero/hero-img-3.jpg') }}\"
            alt=\"Hero Bg Image\"
            class=\"ls-bg\"
          />
          <p
            class=\"ls-l mb-2 mb-md-0 ls-hide-phone\"
            style=\"
              left: 0;
              top: 350px;
              width: 318px;
              min-width: 200px;
              min-height: 20px;
              height: 30px;
              line-height: 1;
              padding: 5px 40px;
              background-image: -webkit-linear-gradient(
                0deg,
                rgb(75, 21, 135) 0%,
                rgb(156, 85, 235) 100%
              );
            \"
            data-ls=\"offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          ></p>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 40px;
              top: 363px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 16px;
              line-height: 1;
              letter-spacing: 0.2em;
            \"
            data-ls=\"minfontsize: 10px; offsetxin: -100; durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; texttypein: chars_asc; textstartatin: transitioninstart; textdurationin: 100; textfadein: true; textoffsetxin: -20; textshiftin: 20;  transitionout: true; offsetxout: 600; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Professional Ranking Team
          </p>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 300px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 400px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 500; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Top Danger
          </h2>
          <h2
            class=\"ls-l ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 450px; text-align: center; font-size: 110px;\"
            style=\"
              left: -2px;
              top: 480px;
              text-transform: uppercase;
              color: #ffffff;
              font-weight: 700;
              font-size: 72px;
              letter-spacing: -0.03em;
            \"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; texttransitionin: true; textfadein: true; texttypein: words_asc; textstartatin: transitioninstart; textshiftin: 300; textoffsetyin: 50; transitionout: true; offsetxout: 400; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Loliga Team
          </h2>
          <p
            class=\"ls-l ls-hide-phone\"
            style=\"
              left: 0;
              top: 575px;
              color: #b0b1be;
              font-size: 18px;
              width: 700px;
              min-width: 230px;
              white-space: normal;
            \"
            data-ls=\"minfontsize: 16px; durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            Exclusive insights, latest news, content and exciting offers.
          </p>
          <div
            class=\"ls-l ls-center-xs ls-responsive\"
            data-ls-mobile=\"left: 50%; top: 660px; width: 100px; height: 100px;\"
            style=\"left: 0; top: 635px\"
            data-ls=\"durationin: 1000; delayin: 0; easingin:easeOutQuint; offsetyin: 50; transitionout: true; offsetxout: 300; durationout: 3000; fadeout: true; skewxout: 10;\"
          >
            <div class=\"ls-btn-group\">
              <a href=\"team.html\" class=\"vs-btn gradient-btn\">Meet with team</a>
              <a href=\"shop.html\" class=\"vs-btn black-skew\"
                ><i class=\"fal fa-shopping-cart\"></i>Merch shop</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <div
      class=\"bg1 bg-light-dark bg-fixed\"
      data-bg-src=\"{{ asset('Front/img/bg/bg-1.jpg') }}\"
    >
      <div class=\"vs-video-area space-top\">
        <div class=\"container\">
          <div
            class=\"row align-items-center gx-xl-0 arrow-white vs-carousel\"
            data-slide-show=\"3\"
            data-sm-slide-show=\"2\"
            data-xs-slide-show=\"1\"
            data-arrows=\"true\"
            data-xl-arrows=\"true\"
            data-ml-arrows=\"true\"
            data-center-mode=\"true\"
            data-xl-center-mode=\"true\"
            data-ml-center-mode=\"true\"
            data-lg-center-mode=\"true\"
            data-md-center-mode=\"true\"
          >
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"{{ asset('Front/img/video/video-img-1-1.jpg') }}\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"{{ asset('Front/img/video/video-img-1-2.jpg') }}\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"{{ asset('Front/img/video/video-img-1-3.jpg') }}\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"video-box1\">
                <a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"popup-video\"
                  ><img
                    src=\"{{ asset('Front/img/video/video-img-1-4.jpg') }}\"
                    alt=\"Video Image\"
                    class=\"w-100\"
                  /> </a
                ><a
                  href=\"https://www.youtube-nocookie.com/embed/uoonAnmKQhI\"
                  class=\"play-btn popup-video overlay-center\"
                  ><i class=\"fas fa-play\"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class=\"vs-match-wrapper vs-match-layout1 space-top space-bottom\">
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-md-5 col-xl-6\">
              <div class=\"section-title\">
                <span class=\"sub-title1\">trending match</span>
                <h2 class=\"sec-title1 text-white\">matchs</h2>
              </div>
            </div>
            <div class=\"col-lg-7 col-xl-6 text-center text-lg-end\">
              <div class=\"filter-menu-style1 filter-menu-active mb-70\">
                <button data-filter=\"*\" class=\"active\">All</button>
                <button data-filter=\".csgo\">csgo</button>
                <button data-filter=\".dota\">dota 2</button>
                <button data-filter=\".fortnite\">fortnite</button>
                <button data-filter=\".pubg\">pubg</button>
              </div>
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
                          src=\"{{ asset('Front/img/logos/logo-1-7.png') }}\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"{{ asset('Front/img/logos/logo-1-8.png') }}\"
                          alt=\"Team Logo\"
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
                          src=\"{{ asset('Front/img/logos/logo-1-1.png') }}\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"{{ asset('Front/img/logos/logo-1-2.png') }}\"
                          alt=\"Team Logo\"
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
                          src=\"{{ asset('Front/img/logos/logo-1-3.png') }}\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"{{ asset('Front/img/logos/logo-1-4.png') }}\"
                          alt=\"Team Logo\"
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
                          src=\"{{ asset('Front/img/logos/logo-1-5.png') }}\"
                          alt=\"Team Logo\" /></a
                      ><span class=\"versus\">vs</span>
                      <a href=\"team-details.html\"
                        ><img
                          src=\"{{ asset('Front/img/logos/logo-1-6.png') }}\"
                          alt=\"Team Logo\"
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
    </div>
    <section
      class=\"vs-blog-wrapper bg-dark vs-blog-layout1 link-inherit space-top space-md-bottom\"
      id=\"blog\"
    >
      <div class=\"container\">
        <div class=\"section-title\">
          <span class=\"sub-title1\">blog</span>
          <h2 class=\"sec-title1 text-white\">news feeds</h2>
        </div>
        <div
          class=\"row vs-carousel arrow-white\"
          data-slide-show=\"3\"
          data-md-slide-show=\"2\"
          data-sm-slide-show=\"1\"
          data-xs-slide-show=\"1\"
          data-arrows=\"true\"
          data-xl-arrows=\"true\"
        >
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"{{ asset('Front/img/blog/blog-img-1-1.jpg') }}\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">esports</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >Hundreds of demonstrator march against the death</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>June 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"{{ asset('Front/img/blog/blog-img-1-2.jpg') }}\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">Action</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >Lorem ipsum dolor sectetur adipiscing print have</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>Augest 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"{{ asset('Front/img/blog/blog-img-1-3.jpg') }}\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">Classic</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >From its medieval origins digital learn graphic or web</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>March 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"{{ asset('Front/img/blog/blog-img-1-4.jpg') }}\"
                    alt=\"Blog Image\"
                    class=\"w-100\"
                /></a>
                <div class=\"blog-category\"><a href=\"blog.html\">Modern</a></div>
              </div>
              <div class=\"blog-content\">
                <h3 class=\"blog-title text-white fs-20\">
                  <a href=\"blog-details.html\"
                    >The purpose of lorem ipsum natural looking century</a
                  >
                </h3>
                <div class=\"blog-meta text-light fs-xs\">
                  <a href=\"blog.html\"
                    ><i class=\"fal fa-calendar-alt\"></i>Feb 21, 2021</a
                  >
                  <a href=\"blog.html\"><i class=\"fal fa-user\"></i>Admin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section
      class=\"vs-member-area vs-member-layout1 bg-light-dark space-top space-md-bottom\"
    >
      
    </section>
    
    <section class=\"vs-contact-wrapper bg-light-dark space\">
      <div class=\"container\">
        <div class=\"section-title\" id=\"contact\">
          <span class=\"sub-title1\">Contact</span>
          <h2 class=\"sec-title1 text-white\">Get in touch</h2>
        </div>
        <form
          action=\"https://html.vecuro.com/foodelio/zocker/demo/mail.php\"
          method=\"POST\"
          class=\"contact-form contact-form-style1 form-dark px-80 py-80\"
        >
          <div class=\"row\">
            <div class=\"col-lg-6 form-group\">
              <label class=\"text-white\" for=\"name\">Enter Name</label>
              <input
                type=\"text\"
                id=\"name\"
                name=\"name\"
                class=\"form-control\"
                placeholder=\"Enter Your Name\"
              />
              <i class=\"fal fa-user\"></i>
            </div>
            <div class=\"col-lg-6 form-group\">
              <label class=\"text-white\" for=\"email\">Enter Email</label>
              <input
                type=\"text\"
                id=\"email\"
                name=\"email\"
                class=\"form-control\"
                placeholder=\"Enter Your Email\"
              />
              <i class=\"fal fa-envelope\"></i>
            </div>
            <div class=\"col-12 form-group\">
              <label class=\"text-white\" for=\"message\">Enter Message</label>
              <textarea
                class=\"form-control\"
                id=\"message\"
                rows=\"11\"
                cols=\"50\"
                name=\"message\"
                placeholder=\"Your Message\"
              ></textarea>
              <i class=\"fal fa-pencil-alt\"></i>
            </div>
            <div class=\"col-12 form-group mb-0 text-center\">
              <button type=\"submit\" class=\"vs-btn gradient-btn\">
                Submit Your Quote
              </button>
              <p class=\"form-messages text-white mt-20 mb-0 text-center\"></p>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section class=\"vs-newsletter-wrapper bg-dark z-index-step1\">
      <div class=\"container\">
        <div class=\"position-relative\">
          <div
            class=\"inner-wrapper bg-black position-absolute top-50 start-50 translate-middle w-100 px-60 py-40\"
          >
            <div class=\"row align-items-center justify-content-center\">
              <div class=\"col-xl-6 text-center text-xl-start mb-3 mb-xl-0\">
                <span class=\"sub-title2 mt-2\">Newsletter</span>
                <h2 class=\"mb-0 text-white\">get monthly updates</h2>
              </div>
              <div class=\"col-md-10 col-lg-8 col-xl-6\">
                <form action=\"#\" class=\"newsletter-style1 d-md-flex\">
                  <input
                    type=\"email\"
                    class=\"form-control\"
                    placeholder=\"Enter email address\"
                  />
                  <button class=\"vs-btn gradient-btn\">Subscribe Now</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
{% endblock %}", "Front-office/Home.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-office\\Home.html.twig");
    }
}
