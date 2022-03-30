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

/* Front-office/Annoces.html.twig */
class __TwigTemplate_f8efc330495293fb299b3655076f0fedefa05539098df51df7f305dcf7fca71d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Annoces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Annoces.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-office/Annoces.html.twig", 1);
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
          <h1 class=\"breadcumb-title h1 text-white my-0\">Announces</h1>
          <h2 class=\"breadcumb-bg-title\">Annonce</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Blog Details</li>
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
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"Front/img/blog/blog-d-1-1.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\"
                /></a>
              </div>
              <div class=\"blog-meta bg-smoke has-border\">
                <a href=\"#\"><i class=\"fal fa-calendar-alt\"></i>June 20, 2021</a>
                <a href=\"#\"><i class=\"fal fa-comments\"></i>263</a>
                <div class=\"cat-list\">
                  <i class=\"fal fa-folder-open\"></i> <a href=\"#\">e-sports</a>
                  <a href=\"#\">gaming</a> <a href=\"#\">pro</a>
                </div>
              </div>
              <div class=\"blog-content bg-smoke\">
                <h2 class=\"blog-title h4 font-theme\">
                  <a href=\"blog-details.html\"
                    >Progressively visualize intellectual capital rather</a
                  >
                </h2>
                <p>
                  Distinctively impact standards compliant supply chains for
                  installed base core competencies. Continually incubate
                  top-line e-business and value-added ideas. Professionally
                  empower progressive processes without cooperative methods of
                  empowerment. Progressively integrate inexpensive best
                  practices for seamless users. Competently syndicate global
                  partnerships before multifunctional internal or \"organic\"
                  sources. Energistically facilitate holistic solutions
                  vis-a-vis 24/7 customer service. Objectively pursue granular
                  catalysts for change with open-source leadership.
                </p>
                <blockquote>
                  <p>
                    Dramatically revolutionize just in time interfaces whereas
                    optimal web services. Completely brand mission-critical
                    e-markets vis-a-vis distinctive interfaces through
                  </p>
                </blockquote>
                <p>
                  Professionally empower progressive processes without
                  cooperative methods of empowerment. Progressively integrate
                  inexpensive best practices for seamless users. Competently
                  syndicate global partnerships.
                </p>
                <div class=\"row my-25\">
                  <div class=\"col-md-6 mb-30 mb-md-0\">
                    <img
                      src=\"Front/img/blog/blog-d-1-4.jpg\"
                      class=\"w-100\"
                      alt=\"Blog Image\"
                    />
                  </div>
                  <div class=\"col-md-6\">
                    <img
                      src=\"Front/img/blog/blog-d-1-5.jpg\"
                      class=\"w-100\"
                      alt=\"Blog Image\"
                    />
                  </div>
                </div>
                <h3 class=\"h4\">implement client-centric models through</h3>
                <p>
                  Phosfluorescently procrastinate cross functional
                  functionalities and progressive markets. Competently
                  orchestrate front-end e-markets without interactive paradigms.
                  Compellingly incentivize orthogonal networks rather than
                  mission-critical results.
                </p>
                <p>
                  Synergistically facilitate cost effective strategic theme
                  areas before low-risk high-yield leadership skills.
                  Interactively provide access to front-end networks vis-a-vis
                  prospective infomediaries. Completely extend distinctive
                  methods of empowerment via covalent strategic theme areas
                  ynamically customize customized process.
                </p>
                <div class=\"my-25\">
                  <img
                    src=\"Front/img/blog/blog-d-1-6.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\"
                  />
                </div>
                <h4>implement client-centric models through</h4>
                <p>
                  Phosfluorescently procrastinate cross functional
                  functionalities and progressive markets. Competently
                  orchestrate front-end e-markets without interactive paradigms.
                  Compellingly incentivize orthogonal networks rather than
                  mission-critical results.
                </p>
                <ul>
                  <li>
                    How will digital activities impact traditional
                    manufacturing.
                  </li>
                  <li>
                    All these digital elements and projects aim to enhance .
                  </li>
                  <li>
                    I monitor my staff with software that takes screenshots.
                  </li>
                  <li>
                    Laoreet dolore magna niacin sodium glutimate aliquam
                    hendrerit.
                  </li>
                  <li>
                    Minim veniam quis niacin sodium glutimate nostrud exerci
                    dolor.
                  </li>
                </ul>
                <p>
                  Interactively provide access to front-end networks vis-a-vis
                  prospective infomediaries. Completely extend distinctive
                  methods of empowerment via covalent strategic theme areas
                  ynamically customize customized process.
                </p>
                <div class=\"blog-share-links d-md-flex align-items-center\">
                  <h5
                    class=\"font-theme text-normal d-inline-block mb-3 mb-md-0 mr-20\"
                  >
                    Related Tags:
                  </h5>
                  <div class=\"tagcloud\">
                    <a href=\"blog.html\">Tech</a>
                    <a href=\"blog.html\">Tournament</a>
                    <a href=\"blog.html\">esports</a>
                  </div>
                </div>
                <div class=\"blog-social-links\">
                  <ul class=\"nav nav-fill\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-facebook-f\">Facebook</span></a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-twitter\">Twitter</span></a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-youtube\">Linkedin</span></a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-vimeo\">Instagram</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div
              class=\"blog-written-author d-md-flex bg-smoke px-60 pb-60 pt-55 my-40\"
            >
              <div class=\"media-img mb-10 mb-md-0 mr-40 align-self-center\">
                <img
                  src=\"Front/img/author/blog-author.png\"
                  alt=\"Blog Author\"
                  class=\"rounded-circle\"
                />
              </div>
              <div class=\"media-body text-center text-md-start\">
                <span class=\"fs-xs text-theme2\">Written by</span>
                <h3 class=\"font-theme text-normal mb-1\">David Smith</h3>
                <p>
                  Distinctively innovate pandemic channels through superior
                  action items. Conveniently productivate tactical.
                </p>
                <div class=\"d-flex gap-2 text-white\">
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-facebook-f\"></i
                  ></a>
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-twitter\"></i
                  ></a>
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-linkedin-in\"></i
                  ></a>
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-instagram\"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class=\"vs-comment-area list-style-none vs-comments-layout1\">
              <h3 class=\"mt-n2 font-theme text-normal\">Leave a Comment</h3>
              <ul class=\"comment-list\">
                <li class=\"vs-comment\">
                  <div class=\"vs-post-comment\">
                    <div class=\"author-img\">
                      <img
                        src=\"Front/img/author/comment-1-1.png\"
                        alt=\"Comment Author\"
                      />
                    </div>
                    <div class=\"comment-content\">
                      <div class=\"comment-top\">
                        <div class=\"comment-author\">
                          <h4 class=\"name\">Mark Jack</h4>
                          <div class=\"mb-10\">
                            <span class=\"commented-on\">22 April, 2021</span>
                          </div>
                        </div>
                        <div class=\"reply_and_edit\">
                          <a href=\"blog-details.html\" class=\"vs-btn\"
                            ><i class=\"fal fa-reply-all mr-10\"></i>Replay</a
                          >
                        </div>
                      </div>
                      <p class=\"text\">
                        Progressively procrastinate mission-critical action
                        items before team building ROI. Interactively provide
                        access to cross functional quality vectors for
                        client-centric catalysts for change.
                      </p>
                    </div>
                  </div>
                  <ul class=\"children\">
                    <li class=\"vs-comment\">
                      <div class=\"vs-post-comment\">
                        <div class=\"author-img\">
                          <img
                            src=\"Front/img/author/comment-1-2.png\"
                            alt=\"Comment Author\"
                          />
                        </div>
                        <div class=\"comment-content\">
                          <div class=\"comment-top\">
                            <div class=\"comment-author\">
                              <h4 class=\"name\">Peter Parker</h4>
                              <div class=\"mb-10\">
                                <span class=\"commented-on\">22 April, 2021</span>
                              </div>
                            </div>
                            <div class=\"reply_and_edit\">
                              <a href=\"blog-details.html\" class=\"vs-btn\"
                                ><i class=\"fal fa-reply-all mr-10\"></i>Replay</a
                              >
                            </div>
                          </div>
                          <p class=\"text\">
                            Competently provide access to fully researched
                            methods of empowerment without sticky models.
                            Credibly morph front-end niche markets.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class=\"vs-comment\">
                  <div class=\"vs-post-comment\">
                    <div class=\"author-img\">
                      <img
                        src=\"Front/img/author/comment-1-3.png\"
                        alt=\"Comment Author\"
                      />
                    </div>
                    <div class=\"comment-content\">
                      <div class=\"comment-top\">
                        <div class=\"comment-author\">
                          <h4 class=\"name\">John Deo</h4>
                          <div class=\"mb-10\">
                            <span class=\"commented-on\">22 April, 2021</span>
                          </div>
                        </div>
                        <div class=\"reply_and_edit\">
                          <a href=\"blog-details.html\" class=\"vs-btn\"
                            ><i class=\"fal fa-reply-all mr-10\"></i>Replay</a
                          >
                        </div>
                      </div>
                      <p class=\"text\">
                        Competently provide access to fully researched methods
                        of empowerment without sticky models. Credibly morph
                        front-end niche markets whereas 2.0 users.
                        Enthusiastically seize team.
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"vs-comment-form comment-form-layout1 mt-10 mb-30\">
              <div class=\"form-title mb-20\">
                <h3 class=\"mt-n2 font-theme text-normal mb-1\">
                  Leave a Comment
                </h3>
                <p class=\"\">
                  Your email address will not be published. Required fields are
                  marked *
                </p>
              </div>
              <div class=\"row\">
                <div class=\"col-12 form-group\">
                  <textarea
                    placeholder=\"Write a Message\"
                    rows=\"10\"
                    class=\"form-control bg-smoke\"
                  ></textarea>
                  <i class=\"fal fa-pencil-alt me-2\"></i>
                </div>
                <div class=\"col-md-6 form-group\">
                  <input
                    type=\"text\"
                    placeholder=\"Your Name\"
                    class=\"form-control bg-smoke\"
                  />
                  <i class=\"fal fa-user me-2\"></i>
                </div>
                <div class=\"col-md-6 form-group\">
                  <input
                    type=\"text\"
                    placeholder=\"Your Email\"
                    class=\"form-control bg-smoke\"
                  />
                  <i class=\"fal fa-envelope me-2\"></i>
                </div>
                <div class=\"col-12 form-group pt-xl-20 mb-0\">
                  <button class=\"vs-btn gradient-btn\">Submit Message</button>
                </div>
              </div>
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
        return "Front-office/Annoces.html.twig";
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
          <h1 class=\"breadcumb-title h1 text-white my-0\">Announces</h1>
          <h2 class=\"breadcumb-bg-title\">Annonce</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Blog Details</li>
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
            <div class=\"vs-blog\">
              <div class=\"blog-image image-scale-hover\">
                <a href=\"blog-details.html\"
                  ><img
                    src=\"Front/img/blog/blog-d-1-1.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\"
                /></a>
              </div>
              <div class=\"blog-meta bg-smoke has-border\">
                <a href=\"#\"><i class=\"fal fa-calendar-alt\"></i>June 20, 2021</a>
                <a href=\"#\"><i class=\"fal fa-comments\"></i>263</a>
                <div class=\"cat-list\">
                  <i class=\"fal fa-folder-open\"></i> <a href=\"#\">e-sports</a>
                  <a href=\"#\">gaming</a> <a href=\"#\">pro</a>
                </div>
              </div>
              <div class=\"blog-content bg-smoke\">
                <h2 class=\"blog-title h4 font-theme\">
                  <a href=\"blog-details.html\"
                    >Progressively visualize intellectual capital rather</a
                  >
                </h2>
                <p>
                  Distinctively impact standards compliant supply chains for
                  installed base core competencies. Continually incubate
                  top-line e-business and value-added ideas. Professionally
                  empower progressive processes without cooperative methods of
                  empowerment. Progressively integrate inexpensive best
                  practices for seamless users. Competently syndicate global
                  partnerships before multifunctional internal or \"organic\"
                  sources. Energistically facilitate holistic solutions
                  vis-a-vis 24/7 customer service. Objectively pursue granular
                  catalysts for change with open-source leadership.
                </p>
                <blockquote>
                  <p>
                    Dramatically revolutionize just in time interfaces whereas
                    optimal web services. Completely brand mission-critical
                    e-markets vis-a-vis distinctive interfaces through
                  </p>
                </blockquote>
                <p>
                  Professionally empower progressive processes without
                  cooperative methods of empowerment. Progressively integrate
                  inexpensive best practices for seamless users. Competently
                  syndicate global partnerships.
                </p>
                <div class=\"row my-25\">
                  <div class=\"col-md-6 mb-30 mb-md-0\">
                    <img
                      src=\"Front/img/blog/blog-d-1-4.jpg\"
                      class=\"w-100\"
                      alt=\"Blog Image\"
                    />
                  </div>
                  <div class=\"col-md-6\">
                    <img
                      src=\"Front/img/blog/blog-d-1-5.jpg\"
                      class=\"w-100\"
                      alt=\"Blog Image\"
                    />
                  </div>
                </div>
                <h3 class=\"h4\">implement client-centric models through</h3>
                <p>
                  Phosfluorescently procrastinate cross functional
                  functionalities and progressive markets. Competently
                  orchestrate front-end e-markets without interactive paradigms.
                  Compellingly incentivize orthogonal networks rather than
                  mission-critical results.
                </p>
                <p>
                  Synergistically facilitate cost effective strategic theme
                  areas before low-risk high-yield leadership skills.
                  Interactively provide access to front-end networks vis-a-vis
                  prospective infomediaries. Completely extend distinctive
                  methods of empowerment via covalent strategic theme areas
                  ynamically customize customized process.
                </p>
                <div class=\"my-25\">
                  <img
                    src=\"Front/img/blog/blog-d-1-6.jpg\"
                    class=\"w-100\"
                    alt=\"Blog Image\"
                  />
                </div>
                <h4>implement client-centric models through</h4>
                <p>
                  Phosfluorescently procrastinate cross functional
                  functionalities and progressive markets. Competently
                  orchestrate front-end e-markets without interactive paradigms.
                  Compellingly incentivize orthogonal networks rather than
                  mission-critical results.
                </p>
                <ul>
                  <li>
                    How will digital activities impact traditional
                    manufacturing.
                  </li>
                  <li>
                    All these digital elements and projects aim to enhance .
                  </li>
                  <li>
                    I monitor my staff with software that takes screenshots.
                  </li>
                  <li>
                    Laoreet dolore magna niacin sodium glutimate aliquam
                    hendrerit.
                  </li>
                  <li>
                    Minim veniam quis niacin sodium glutimate nostrud exerci
                    dolor.
                  </li>
                </ul>
                <p>
                  Interactively provide access to front-end networks vis-a-vis
                  prospective infomediaries. Completely extend distinctive
                  methods of empowerment via covalent strategic theme areas
                  ynamically customize customized process.
                </p>
                <div class=\"blog-share-links d-md-flex align-items-center\">
                  <h5
                    class=\"font-theme text-normal d-inline-block mb-3 mb-md-0 mr-20\"
                  >
                    Related Tags:
                  </h5>
                  <div class=\"tagcloud\">
                    <a href=\"blog.html\">Tech</a>
                    <a href=\"blog.html\">Tournament</a>
                    <a href=\"blog.html\">esports</a>
                  </div>
                </div>
                <div class=\"blog-social-links\">
                  <ul class=\"nav nav-fill\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-facebook-f\">Facebook</span></a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-twitter\">Twitter</span></a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-youtube\">Linkedin</span></a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"https://vecuro.com/\"
                        ><span class=\"fab fa-vimeo\">Instagram</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div
              class=\"blog-written-author d-md-flex bg-smoke px-60 pb-60 pt-55 my-40\"
            >
              <div class=\"media-img mb-10 mb-md-0 mr-40 align-self-center\">
                <img
                  src=\"Front/img/author/blog-author.png\"
                  alt=\"Blog Author\"
                  class=\"rounded-circle\"
                />
              </div>
              <div class=\"media-body text-center text-md-start\">
                <span class=\"fs-xs text-theme2\">Written by</span>
                <h3 class=\"font-theme text-normal mb-1\">David Smith</h3>
                <p>
                  Distinctively innovate pandemic channels through superior
                  action items. Conveniently productivate tactical.
                </p>
                <div class=\"d-flex gap-2 text-white\">
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-facebook-f\"></i
                  ></a>
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-twitter\"></i
                  ></a>
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-linkedin-in\"></i
                  ></a>
                  <a class=\"icon-btn3 size-40\" href=\"https://google.com/\"
                    ><i class=\"fab fa-instagram\"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class=\"vs-comment-area list-style-none vs-comments-layout1\">
              <h3 class=\"mt-n2 font-theme text-normal\">Leave a Comment</h3>
              <ul class=\"comment-list\">
                <li class=\"vs-comment\">
                  <div class=\"vs-post-comment\">
                    <div class=\"author-img\">
                      <img
                        src=\"Front/img/author/comment-1-1.png\"
                        alt=\"Comment Author\"
                      />
                    </div>
                    <div class=\"comment-content\">
                      <div class=\"comment-top\">
                        <div class=\"comment-author\">
                          <h4 class=\"name\">Mark Jack</h4>
                          <div class=\"mb-10\">
                            <span class=\"commented-on\">22 April, 2021</span>
                          </div>
                        </div>
                        <div class=\"reply_and_edit\">
                          <a href=\"blog-details.html\" class=\"vs-btn\"
                            ><i class=\"fal fa-reply-all mr-10\"></i>Replay</a
                          >
                        </div>
                      </div>
                      <p class=\"text\">
                        Progressively procrastinate mission-critical action
                        items before team building ROI. Interactively provide
                        access to cross functional quality vectors for
                        client-centric catalysts for change.
                      </p>
                    </div>
                  </div>
                  <ul class=\"children\">
                    <li class=\"vs-comment\">
                      <div class=\"vs-post-comment\">
                        <div class=\"author-img\">
                          <img
                            src=\"Front/img/author/comment-1-2.png\"
                            alt=\"Comment Author\"
                          />
                        </div>
                        <div class=\"comment-content\">
                          <div class=\"comment-top\">
                            <div class=\"comment-author\">
                              <h4 class=\"name\">Peter Parker</h4>
                              <div class=\"mb-10\">
                                <span class=\"commented-on\">22 April, 2021</span>
                              </div>
                            </div>
                            <div class=\"reply_and_edit\">
                              <a href=\"blog-details.html\" class=\"vs-btn\"
                                ><i class=\"fal fa-reply-all mr-10\"></i>Replay</a
                              >
                            </div>
                          </div>
                          <p class=\"text\">
                            Competently provide access to fully researched
                            methods of empowerment without sticky models.
                            Credibly morph front-end niche markets.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class=\"vs-comment\">
                  <div class=\"vs-post-comment\">
                    <div class=\"author-img\">
                      <img
                        src=\"Front/img/author/comment-1-3.png\"
                        alt=\"Comment Author\"
                      />
                    </div>
                    <div class=\"comment-content\">
                      <div class=\"comment-top\">
                        <div class=\"comment-author\">
                          <h4 class=\"name\">John Deo</h4>
                          <div class=\"mb-10\">
                            <span class=\"commented-on\">22 April, 2021</span>
                          </div>
                        </div>
                        <div class=\"reply_and_edit\">
                          <a href=\"blog-details.html\" class=\"vs-btn\"
                            ><i class=\"fal fa-reply-all mr-10\"></i>Replay</a
                          >
                        </div>
                      </div>
                      <p class=\"text\">
                        Competently provide access to fully researched methods
                        of empowerment without sticky models. Credibly morph
                        front-end niche markets whereas 2.0 users.
                        Enthusiastically seize team.
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class=\"vs-comment-form comment-form-layout1 mt-10 mb-30\">
              <div class=\"form-title mb-20\">
                <h3 class=\"mt-n2 font-theme text-normal mb-1\">
                  Leave a Comment
                </h3>
                <p class=\"\">
                  Your email address will not be published. Required fields are
                  marked *
                </p>
              </div>
              <div class=\"row\">
                <div class=\"col-12 form-group\">
                  <textarea
                    placeholder=\"Write a Message\"
                    rows=\"10\"
                    class=\"form-control bg-smoke\"
                  ></textarea>
                  <i class=\"fal fa-pencil-alt me-2\"></i>
                </div>
                <div class=\"col-md-6 form-group\">
                  <input
                    type=\"text\"
                    placeholder=\"Your Name\"
                    class=\"form-control bg-smoke\"
                  />
                  <i class=\"fal fa-user me-2\"></i>
                </div>
                <div class=\"col-md-6 form-group\">
                  <input
                    type=\"text\"
                    placeholder=\"Your Email\"
                    class=\"form-control bg-smoke\"
                  />
                  <i class=\"fal fa-envelope me-2\"></i>
                </div>
                <div class=\"col-12 form-group pt-xl-20 mb-0\">
                  <button class=\"vs-btn gradient-btn\">Submit Message</button>
                </div>
              </div>
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

{% endblock %}", "Front-office/Annoces.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-office\\Annoces.html.twig");
    }
}
