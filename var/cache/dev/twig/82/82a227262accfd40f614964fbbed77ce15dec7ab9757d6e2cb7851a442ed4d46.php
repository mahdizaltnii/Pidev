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

/* Front-office/Marketplace.html.twig */
class __TwigTemplate_1cffe5137dcb7662f941898037b66060d2ca53617a6548497288a1113f253fa2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Marketplace.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front-office/Marketplace.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "Front-office/Marketplace.html.twig", 1);
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
          <h1 class=\"breadcumb-title h1 text-white my-0\">Marketplace</h1>
          <h2 class=\"breadcumb-bg-title\">Product</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Shop</li>
          </ul>
        </div>
      </div>
    </div>
    <section
      class=\"vs-product-wrapper vs-product-layout2 space-top newsletter-pb\"
    >
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8\">
            <div class=\"row align-items-center mb-30\">
              <div class=\"col-xl-5\">
                <p class=\"mb-0\">Showing 1–24 of 37 item(s)</p>
              </div>
              <div class=\"col-xl-7 mt-3 mt-xl-0\">
                <div
                  class=\"sort-btn d-flex flex-wrap justify-content-between justify-content-xl-end align-items-start\"
                >
                  <select
                    class=\"form-select form-select-lg\"
                    aria-label=\".form-select-lg example\"
                  >
                    <option selected=\"selected\">Open this select menu</option>
                    <option value=\"1\">One</option>
                    <option value=\"2\">Two</option>
                    <option value=\"3\">Three</option>
                  </select>
                  <div class=\"d-flex mt-3 mt-sm-0\">
                    <a href=\"#\" class=\"icon-btn3 active\"
                      ><i class=\"fal fa-border-all\"></i
                    ></a>
                    <a href=\"#\" class=\"icon-btn3\"
                      ><i class=\"fal fa-list\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-1.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >Continually exploit business information portals</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <span class=\"label\">HOT</span>
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-2.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >In particular, the garbled words of lorem ipsum</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-3.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >McClintock's eye for detail certainly helped</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-4.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >Creation timelines for the standard passage vary</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-5.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >So how did the classical Latin become so incoherent</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-6.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >Whether a medieval typesetter chose to garble a
                        well-known</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"pagination-wrapper pagination-layout1 mt-lg-30 mb-30\">
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
              <h3 class=\"sidebox-title-v2 h5\">Filter by Price</h3>
              <div class=\"vs-sidebox-v2\">
                <div class=\"range-slider-area\">
                  <div id=\"slider-range\"></div>
                  <div class=\"price-area\">
                    <span>Price:</span>
                    <input type=\"text\" readonly=\"readonly\" id=\"amount\" />
                  </div>
                  <a href=\"#\" class=\"vs-btn vs-style1\">Filter</a>
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
              <h3 class=\"sidebox-title-v2 h5\">Filter by Price</h3>
              <div class=\"vs-sidebox-v2\">
                <div class=\"latest-product-v1\">
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-1.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
                    </div>
                  </div>
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-2.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
                    </div>
                  </div>
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-3.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
                    </div>
                  </div>
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-4.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
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
        return "Front-office/Marketplace.html.twig";
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
          <h1 class=\"breadcumb-title h1 text-white my-0\">Marketplace</h1>
          <h2 class=\"breadcumb-bg-title\">Product</h2>
          <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
            <li>
              <a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a>
            </li>
            <li class=\"active\">Shop</li>
          </ul>
        </div>
      </div>
    </div>
    <section
      class=\"vs-product-wrapper vs-product-layout2 space-top newsletter-pb\"
    >
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8\">
            <div class=\"row align-items-center mb-30\">
              <div class=\"col-xl-5\">
                <p class=\"mb-0\">Showing 1–24 of 37 item(s)</p>
              </div>
              <div class=\"col-xl-7 mt-3 mt-xl-0\">
                <div
                  class=\"sort-btn d-flex flex-wrap justify-content-between justify-content-xl-end align-items-start\"
                >
                  <select
                    class=\"form-select form-select-lg\"
                    aria-label=\".form-select-lg example\"
                  >
                    <option selected=\"selected\">Open this select menu</option>
                    <option value=\"1\">One</option>
                    <option value=\"2\">Two</option>
                    <option value=\"3\">Three</option>
                  </select>
                  <div class=\"d-flex mt-3 mt-sm-0\">
                    <a href=\"#\" class=\"icon-btn3 active\"
                      ><i class=\"fal fa-border-all\"></i
                    ></a>
                    <a href=\"#\" class=\"icon-btn3\"
                      ><i class=\"fal fa-list\"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-1.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >Continually exploit business information portals</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <span class=\"label\">HOT</span>
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-2.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >In particular, the garbled words of lorem ipsum</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-3.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >McClintock's eye for detail certainly helped</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-4.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >Creation timelines for the standard passage vary</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-5.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >So how did the classical Latin become so incoherent</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"vs-product\">
                  <div class=\"product-img\">
                    <a href=\"shop-details.html\"
                      ><img
                        src=\"Front/img/product/product-2-6.jpg\"
                        class=\"w-100\"
                        alt=\"Product Image\"
                    /></a>
                    <div class=\"cart-btn-group\">
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-heart\"></i
                      ></a>
                      <a href=\"#\" class=\"vs-btn\">Add to cart</a>
                      <a href=\"#\" class=\"icon-btn3\"
                        ><i class=\"fal fa-search\"></i
                      ></a>
                    </div>
                  </div>
                  <div class=\"product-content\">
                    <div class=\"text-yellow fs-xs mb-2\">
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                      <i class=\"fal fa-star\"></i>
                    </div>
                    <h3
                      class=\"product-name text-normal font-theme fs-20 lh-base mb-2\"
                    >
                      <a class=\"text-inherit\" href=\"shop-details.html\"
                        >Whether a medieval typesetter chose to garble a
                        well-known</a
                      >
                    </h3>
                    <strong class=\"fs-18 text-theme2\">\$200.50</strong>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"pagination-wrapper pagination-layout1 mt-lg-30 mb-30\">
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
              <h3 class=\"sidebox-title-v2 h5\">Filter by Price</h3>
              <div class=\"vs-sidebox-v2\">
                <div class=\"range-slider-area\">
                  <div id=\"slider-range\"></div>
                  <div class=\"price-area\">
                    <span>Price:</span>
                    <input type=\"text\" readonly=\"readonly\" id=\"amount\" />
                  </div>
                  <a href=\"#\" class=\"vs-btn vs-style1\">Filter</a>
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
              <h3 class=\"sidebox-title-v2 h5\">Filter by Price</h3>
              <div class=\"vs-sidebox-v2\">
                <div class=\"latest-product-v1\">
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-1.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
                    </div>
                  </div>
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-2.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
                    </div>
                  </div>
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-3.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
                    </div>
                  </div>
                  <div class=\"d-flex post\">
                    <div class=\"media-img mr-25\">
                      <img
                        src=\"Front/img/product/p-thumb-1-4.jpg\"
                        alt=\"Product Thumb\"
                      />
                    </div>
                    <div class=\"media-body align-self-center\">
                      <div class=\"text-yellow fs-12\">
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i> <i class=\"fal fa-star\"></i>
                        <i class=\"fal fa-star\"></i>
                      </div>
                      <h4 class=\"h6 font-theme text-normal mb-0\">
                        <a href=\"#\" class=\"text-inherit\">Dolor sit cing elit</a>
                      </h4>
                      <del class=\"fs-12\">\$200.00</del>
                      <span class=\"text-theme2 fs-12 ms-2\">\$150.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

{% endblock %}", "Front-office/Marketplace.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Front-office\\Marketplace.html.twig");
    }
}
