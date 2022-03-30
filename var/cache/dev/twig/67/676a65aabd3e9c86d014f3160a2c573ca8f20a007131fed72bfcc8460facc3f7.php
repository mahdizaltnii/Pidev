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

/* Front-office/Forum.html.twig */
class __TwigTemplate_ef4ccb717c508e11b534e729851d2a4f52ddf373699a6002d46e71e8140efb25 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Forum.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Forum.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-office/Forum.html.twig", 1);
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
          <h1 class=\"breadcumb-title h1 text-white my-0\">Latest Posts</h1>
          <h2 class=\"breadcumb-bg-title\">Forum</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Blog</li>
          </ul>
        </div>
      </div>
    </div>
    <section
      class=\"vs-blog-wrapper blog-single-layout1 space-top newsletter-pb\"
    >
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8\">
           ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "
            <div class=\"vs-blog\">
              <div
                class=\"blog-image arrow-white vs-carousel\"
                data-slide-show=\"1\"
                data-arrows=\"true\"
                data-prev-arrow=\"fal fa-chevron-left\"
                data-next-arrow=\"fal fa-chevron-right\"
              >
                <a href=\"blog-details.html\"
                  ><img
                    src=\"Front/img/blog/blog-d-1-2.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\" /></a
                ><a href=\"blog-details.html\"
                  ><img
                    src=\"Front/img/blog/blog-d-1-3.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\"
                /></a>
              </div>
              <div class=\"blog-meta bg-smoke has-border\">
                <a href=\"#\"
                  ><i class=\"fal fa-calendar-alt\"></i>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", [], "any", false, false, false, 52), "html", null, true);
            echo "</a
                >
                <a href=\"#\"><i class=\"fal fa-comments\"></i>263</a>
                <div class=\"cat-list\">
                  <i class=\"fal fa-folder-open\"></i> <a href=\"#\">e-sports</a>
                  <a href=\"#\">gaming</a> <a href=\"#\">pro</a>
                </div>
              </div>
              <div class=\"blog-content bg-smoke\">
                <h2 class=\"blog-title h4 font-theme\">
                  <a href=\"blog-details.html\"
                    >";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</a
                  >
                </h2>
                <p>
                  Distinctively impact standards compliant supply chains for
                  installed base core competencies. Continually incubate
                  top-line e-business and value-added ideas. Professionally
                  empower progressive processes without cooperative methods of
                  empowerment.
                </p>
                <div class=\"author-box d-flex\">
                  <img
                    src=\"Front/img/author/author-1.jpg\"
                    alt=\"Author Image\"
                  />
                  <div class=\"media-body align-self-center\">
                    <h6 class=\"name mb-0 text-normal lh-base\">
                      <a href=\"#\">David Smith</a>
                    </h6>
                    <span class=\"fs-xs\">250k views</span>
                  </div>
                </div>
              </div>
            </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            <div class=\"pagination-wrapper pagination-layout1 pt-lg-30 pb-30\">
              <ul>
                <li>
                  <a href=\"#\" class=\"active\"><span class=\"text\">1</span></a>
                </li>
                <li>
                  <a href=\"#\"><span class=\"text\">2</span></a>
                </li>
                <li>
                  <a href=\"#\"><span class=\"text\">3</span></a>
                </li>
                <li>
                  <a href=\"#\"><span class=\"text\">4</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <aside class=\"sidebar-area sticky-top overflow-hidden\">
              <div class=\"widget widget_search\">
                <form class=\"search-form\">
                  <input type=\"text\" placeholder=\"Search Here\" />
                  <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
                </form>
              </div>
              <h3 class=\"sidebox-title-v2 h5\">Latest Updates</h3>
              <div class=\"vs-sidebox-v2 px-0 pb-0 pt-20 mb-0\">
                <div
                  class=\"nav nav-fill tab-menu1 tab-indicator bg-white\"
                  role=\"tablist\"
                >
                  <a
                    class=\"nav-link active\"
                    id=\"recent-tab\"
                    data-bs-toggle=\"tab\"
                    href=\"#recent\"
                    role=\"tab\"
                    aria-controls=\"recent\"
                    aria-selected=\"true\"
                    >Recent</a
                  >
                  <a
                    class=\"nav-link\"
                    id=\"popular-tab\"
                    data-bs-toggle=\"tab\"
                    href=\"#popular\"
                    role=\"tab\"
                    aria-controls=\"popular\"
                    aria-selected=\"false\"
                    >Popular</a
                  >
                  <a
                    class=\"nav-link\"
                    id=\"latest-tab\"
                    data-bs-toggle=\"tab\"
                    href=\"#latest\"
                    role=\"tab\"
                    aria-controls=\"latest\"
                    aria-selected=\"false\"
                    >latest</a
                  >
                </div>
              </div>
              <div class=\"tab-content\">
                <div
                  class=\"tab-pane show active\"
                  id=\"recent\"
                  role=\"tabpanel\"
                  aria-labelledby=\"recent-tab\"
                >
                  <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-1.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >The General Sery vice Administr</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-2.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >THE STRENGTH OF LOREM IPSUM</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-3.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >LOREM IPSUM IS SO UBIQU BECAUSE</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-4.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >BUT DESPITE ZEALOUS CRIES THE DEMISE</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class=\"tab-pane\"
                  id=\"popular\"
                  role=\"tabpanel\"
                  aria-labelledby=\"popular-tab\"
                >
                  <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-5.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >The General Sery vice Administr</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-6.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Lorem ipsum began as nonsensical</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-7.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Finibus Bonorum et Malorum century</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-8.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Until recently prev-ailing view assumed</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class=\"tab-pane\"
                  id=\"latest\"
                  role=\"tabpanel\"
                  aria-labelledby=\"latest-tab\"
                >
                  <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-9.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Richard McClintock, a Latin scholar</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-10.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >McClintock to a passage De Finibus</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-11.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >In particular, the garbled words</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-12.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >McClintock's eye for detail certainly</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class=\"sidebox-title-v2 h5\">Categories</h3>
              <div class=\"vs-sidebox-v2\">
                <ul class=\"vs-cat-list1\">
                  <li>
                    <a href=\"blog.html\"
                      >Football <span class=\"cat-number\">10</span></a
                    >
                  </li>
                  <li>
                    <a href=\"blog.html\"
                      >baseball <span class=\"cat-number\">07</span></a
                    >
                  </li>
                  <li>
                    <a href=\"blog.html\"
                      >basketball <span class=\"cat-number\">05</span></a
                    >
                  </li>
                  <li>
                    <a href=\"blog.html\"
                      >esports <span class=\"cat-number\">02</span></a
                    >
                  </li>
                </ul>
              </div>
              <h3 class=\"sidebox-title-v2 h5\">Top Games</h3>
              <div class=\"vs-sidebox bg-smoke\">
                <div class=\"row no-gutters g-2\">
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-1.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-2.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-3.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-4.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
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
        return "Front-office/Forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 88,  138 => 63,  124 => 52,  99 => 29,  95 => 28,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"base-front.html.twig\" %}
{% block body %}

<div
      class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\"
      data-bg-src=\"Front/img/breadcumb/breadcumb-1.jpg\"
      data-overlay
    >
      <div class=\"container z-index-common\">
        <div class=\"breadcumb-content text-center\">
          <h1 class=\"breadcumb-title h1 text-white my-0\">Latest Posts</h1>
          <h2 class=\"breadcumb-bg-title\">Forum</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Blog</li>
          </ul>
        </div>
      </div>
    </div>
    <section
      class=\"vs-blog-wrapper blog-single-layout1 space-top newsletter-pb\"
    >
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8\">
           {% for post in posts %}

            <div class=\"vs-blog\">
              <div
                class=\"blog-image arrow-white vs-carousel\"
                data-slide-show=\"1\"
                data-arrows=\"true\"
                data-prev-arrow=\"fal fa-chevron-left\"
                data-next-arrow=\"fal fa-chevron-right\"
              >
                <a href=\"blog-details.html\"
                  ><img
                    src=\"Front/img/blog/blog-d-1-2.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\" /></a
                ><a href=\"blog-details.html\"
                  ><img
                    src=\"Front/img/blog/blog-d-1-3.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\"
                /></a>
              </div>
              <div class=\"blog-meta bg-smoke has-border\">
                <a href=\"#\"
                  ><i class=\"fal fa-calendar-alt\"></i>{{ post.created_at }}</a
                >
                <a href=\"#\"><i class=\"fal fa-comments\"></i>263</a>
                <div class=\"cat-list\">
                  <i class=\"fal fa-folder-open\"></i> <a href=\"#\">e-sports</a>
                  <a href=\"#\">gaming</a> <a href=\"#\">pro</a>
                </div>
              </div>
              <div class=\"blog-content bg-smoke\">
                <h2 class=\"blog-title h4 font-theme\">
                  <a href=\"blog-details.html\"
                    >{{ post.title }}</a
                  >
                </h2>
                <p>
                  Distinctively impact standards compliant supply chains for
                  installed base core competencies. Continually incubate
                  top-line e-business and value-added ideas. Professionally
                  empower progressive processes without cooperative methods of
                  empowerment.
                </p>
                <div class=\"author-box d-flex\">
                  <img
                    src=\"Front/img/author/author-1.jpg\"
                    alt=\"Author Image\"
                  />
                  <div class=\"media-body align-self-center\">
                    <h6 class=\"name mb-0 text-normal lh-base\">
                      <a href=\"#\">David Smith</a>
                    </h6>
                    <span class=\"fs-xs\">250k views</span>
                  </div>
                </div>
              </div>
            </div>
                  {% endfor %}
            <div class=\"pagination-wrapper pagination-layout1 pt-lg-30 pb-30\">
              <ul>
                <li>
                  <a href=\"#\" class=\"active\"><span class=\"text\">1</span></a>
                </li>
                <li>
                  <a href=\"#\"><span class=\"text\">2</span></a>
                </li>
                <li>
                  <a href=\"#\"><span class=\"text\">3</span></a>
                </li>
                <li>
                  <a href=\"#\"><span class=\"text\">4</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <aside class=\"sidebar-area sticky-top overflow-hidden\">
              <div class=\"widget widget_search\">
                <form class=\"search-form\">
                  <input type=\"text\" placeholder=\"Search Here\" />
                  <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
                </form>
              </div>
              <h3 class=\"sidebox-title-v2 h5\">Latest Updates</h3>
              <div class=\"vs-sidebox-v2 px-0 pb-0 pt-20 mb-0\">
                <div
                  class=\"nav nav-fill tab-menu1 tab-indicator bg-white\"
                  role=\"tablist\"
                >
                  <a
                    class=\"nav-link active\"
                    id=\"recent-tab\"
                    data-bs-toggle=\"tab\"
                    href=\"#recent\"
                    role=\"tab\"
                    aria-controls=\"recent\"
                    aria-selected=\"true\"
                    >Recent</a
                  >
                  <a
                    class=\"nav-link\"
                    id=\"popular-tab\"
                    data-bs-toggle=\"tab\"
                    href=\"#popular\"
                    role=\"tab\"
                    aria-controls=\"popular\"
                    aria-selected=\"false\"
                    >Popular</a
                  >
                  <a
                    class=\"nav-link\"
                    id=\"latest-tab\"
                    data-bs-toggle=\"tab\"
                    href=\"#latest\"
                    role=\"tab\"
                    aria-controls=\"latest\"
                    aria-selected=\"false\"
                    >latest</a
                  >
                </div>
              </div>
              <div class=\"tab-content\">
                <div
                  class=\"tab-pane show active\"
                  id=\"recent\"
                  role=\"tabpanel\"
                  aria-labelledby=\"recent-tab\"
                >
                  <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-1.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >The General Sery vice Administr</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-2.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >THE STRENGTH OF LOREM IPSUM</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-3.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >LOREM IPSUM IS SO UBIQU BECAUSE</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-4.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >BUT DESPITE ZEALOUS CRIES THE DEMISE</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class=\"tab-pane\"
                  id=\"popular\"
                  role=\"tabpanel\"
                  aria-labelledby=\"popular-tab\"
                >
                  <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-5.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >The General Sery vice Administr</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-6.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Lorem ipsum began as nonsensical</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-7.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Finibus Bonorum et Malorum century</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-8.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Until recently prev-ailing view assumed</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class=\"tab-pane\"
                  id=\"latest\"
                  role=\"tabpanel\"
                  aria-labelledby=\"latest-tab\"
                >
                  <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-9.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >Richard McClintock, a Latin scholar</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-10.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >McClintock to a passage De Finibus</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-11.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >In particular, the garbled words</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class=\"vs-blog d-flex gap-3\">
                      <div class=\"media-img\">
                        <a href=\"blog-details.html\"
                          ><img
                            src=\"Front/img/widget/recent-post-1-12.png\"
                            alt=\"Recent Post\"
                        /></a>
                      </div>
                      <div class=\"media-body align-self-center\">
                        <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                          <a href=\"blog-details.html\"
                            >McClintock's eye for detail certainly</a
                          >
                        </h4>
                        <div class=\"blog-meta link-inherit fs-xs mt-1\">
                          <a href=\"blog.html\"
                            ><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                            21, 2021</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class=\"sidebox-title-v2 h5\">Categories</h3>
              <div class=\"vs-sidebox-v2\">
                <ul class=\"vs-cat-list1\">
                  <li>
                    <a href=\"blog.html\"
                      >Football <span class=\"cat-number\">10</span></a
                    >
                  </li>
                  <li>
                    <a href=\"blog.html\"
                      >baseball <span class=\"cat-number\">07</span></a
                    >
                  </li>
                  <li>
                    <a href=\"blog.html\"
                      >basketball <span class=\"cat-number\">05</span></a
                    >
                  </li>
                  <li>
                    <a href=\"blog.html\"
                      >esports <span class=\"cat-number\">02</span></a
                    >
                  </li>
                </ul>
              </div>
              <h3 class=\"sidebox-title-v2 h5\">Top Games</h3>
              <div class=\"vs-sidebox bg-smoke\">
                <div class=\"row no-gutters g-2\">
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-1.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-2.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-3.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                  <div class=\"col-6\">
                    <div class=\"image-scale-hover\">
                      <a href=\"#\"
                        ><img
                          src=\"Front/img/widget/sidebbox-img-4.jpg\"
                          class=\"w-100\"
                          alt=\"Sidebox Image\"
                      /></a>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

{% endblock %} 

", "Front-office/Forum.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-office\\Forum.html.twig");
    }
}
