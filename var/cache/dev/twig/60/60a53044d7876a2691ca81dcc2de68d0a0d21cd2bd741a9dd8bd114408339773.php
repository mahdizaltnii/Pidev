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

/* blog/index.html.twig */
class __TwigTemplate_faeeec8cbd968978dfa1e2f8e0542eb70e52db3c72230c3b582f49936998cd29 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "blog/index.html.twig", 1);
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
<div class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\" data-bg-src=\"Front/img/breadcumb/breadcumb-1.jpg\"
  data-overlay>
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
<section class=\"vs-blog-wrapper blog-single-layout1 space-top newsletter-pb\">
  <div class=\"container\">
    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutpost");
            echo "\" class=\"\"> <button class=\"button-28\" role=\"button\" style=\"color:black;appearance: none;
  background-color: transparent;
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #3B3B3B;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,\" Segoe UI\",Helvetica,Arial,sans-serif,\"Apple Color
        Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\"; font-size: 16px; font-weight: 600; line-height: normal; margin: 0;
        min-height: 60px; min-width: 0; outline: none; padding: 16px 24px; text-align: center; text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1); user-select: none; -webkit-user-select: none; touch-action:
        manipulation; width: 100%; will-change: transform;pointer-events: none;color: #fff; background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px; transform: translateY(-2px);box-shadow: none; transform:
        translateY(0);\">add new post</button></a>
    ";
        }
        // line 38
        echo "    <br>

    <br>
    <div class=\"row\">
      <div class=\"col-lg-8\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "
        <div class=\"blog\">
          <div class=\"blog-image \">
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_posts", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><img src=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "picture", [], "any", false, false, false, 47), "html", null, true);
            echo "\"
                style=\"width: 99%;\" alt=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" /></a>
          </div>
          <div class=\"blog-meta bg-smoke has-border\">

            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_posts", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><i class=\"fal fa-calendar-alt\"></i>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 52), "d/m/Y H:i"), "html", null, true);
            echo "
            </a>
            ";
            // line 55
            echo "
            <div class=\"cat-list\">

              ";
            // line 63
            echo "                
                   ";
            // line 67
            echo "

                 ";
            // line 70
            echo "                
                
                
               </a>
                 ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74)) {
                // line 75
                echo "               <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_like", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\" class=\"btn btn-link js-like\">    
                  <span class=\"js-likes\">";
                // line 76
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "likes", [], "any", false, false, false, 76)), "html", null, true);
                echo "</span>
                               ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77) && twig_get_attribute($this->env, $this->source, $context["post"], "likedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)], "method", false, false, false, 77))) {
                    // line 78
                    echo "                                <i class=\"fas fa-thumbs-up\"></i>
                            ";
                } else {
                    // line 80
                    echo "                                <i class=\"far fa-thumbs-up\"></i>
                            ";
                }
                // line 82
                echo "                           

                  <span class=\"js-label\">j'aime </span>
                  ";
            }
            // line 86
            echo "                  </a> 


<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 


     <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rating", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 92), "nbr" => 1]), "html", null, true);
            echo "\"> <span class=\"fas fa-star\" data-star=\"1\" ></span></a>
       <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rating", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 93), "nbr" => 2]), "html", null, true);
            echo "\"><span class=\"fas fa-star\" data-star=\"2\"></span></a>
       <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rating", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 94), "nbr" => 3]), "html", null, true);
            echo "\"><span class=\"fas fa-star\" data-star=\"3\"></span></a>
       <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rating", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 95), "nbr" => 4]), "html", null, true);
            echo "\"><span class=\"fas fa-star\" data-star=\"4\"></span></a>
       <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rating", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 96), "nbr" => 5]), "html", null, true);
            echo "\"><span class=\"fas fa-star\" data-star=\"5\"></span></a>
    
<script>
const allStars = document.querySelectorAll(\".fa-star\");
console.log(\"allStars\", allStars);
const highlightedStars = [];
const rating = document.querySelector(\".rating\");

init();

function init() {
  allStars.forEach((star) => {
    star.addEventListener(\"click\", saveRating);
    star.addEventListener(\"mouseover\", addCSS);
    star.addEventListener(\"mouseleave\", removeCSS);
  });
}

function saveRating(e) {
  console.log(e, e.target, e.target.nodeName, e.target.nodeType);
  console.dir(e.target);
  console.log(e.target.dataset);
  removeEventListenersToAllStars();
  rating.innerText = e.target.dataset.star;
}

function removeEventListenersToAllStars() {
  allStars.forEach((star) => {
    star.removeEventListener(\"click\", saveRating);
    star.removeEventListener(\"mouseover\", addCSS);
    star.removeEventListener(\"mouseleave\", removeCSS);
  });
}

function addCSS(e, css = \"checked\") {
  const overedStar = e.target;
  overedStar.classList.add(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  console.log(\"previousSiblings\", previousSiblings);
  previousSiblings.forEach((elem) => elem.classList.add(css));
}

function removeCSS(e, css = \"checked\") {
  const overedStar = e.target;
  overedStar.classList.remove(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  previousSiblings.forEach((elem) => elem.classList.remove(css));
}

function getPreviousSiblings(elem) {
  console.log(\"elem.previousSibling\", elem.previousSibling);
  let sibs = [];
  const spanNodeType = 1;
  while ((elem = elem.previousSibling)) {
    if (elem.nodeType === spanNodeType) {
      sibs = [elem, ...sibs];
    }
  }
  return sibs;
}
    </script>


            </div>
          </div>
          <br>
          <div class=\"blog-content bg-smoke\">
            <h2 class=\"blog-title h4 font-theme\">
              <a href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_posts", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            echo "\" style=\"
    color: black;
    font-size: inherit;\">";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 166), "html", null, true);
            echo "</a>
            </h2>
            <p>
              ";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Objet", [], "any", false, false, false, 169), "html", null, true);
            echo "
            </p>
            
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
        <div class=\"pagination-wrapper pagination-layout1 pt-lg-30 pb-30\">
          <ul>
            <li>
              <a href=\"#\" class=\"active\"><span class=\"text\">";
        // line 179
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 179, $this->source); })()));
        echo "</span></a>
            </li>
            ";
        // line 190
        echo "          </ul>
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
            <div class=\"nav nav-fill tab-menu1 tab-indicator bg-white\" role=\"tablist\">
              <a class=\"nav-link active\" id=\"recent-tab\" data-bs-toggle=\"tab\" href=\"#recent\" role=\"tab\"
                aria-controls=\"recent\" aria-selected=\"true\">Recent</a>
              <a class=\"nav-link\" id=\"popular-tab\" data-bs-toggle=\"tab\" href=\"#popular\" role=\"tab\"
                aria-controls=\"popular\" aria-selected=\"false\">Popular</a>
              <a class=\"nav-link\" id=\"latest-tab\" data-bs-toggle=\"tab\" href=\"#latest\" role=\"tab\" aria-controls=\"latest\"
                aria-selected=\"false\">latest</a>
            </div>
          </div>
          <div class=\"tab-content\">
            <div class=\"tab-pane show active\" id=\"recent\" role=\"tabpanel\" aria-labelledby=\"recent-tab\">
              <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-1.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">The General Sery vice Administr</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-2.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">THE STRENGTH OF LOREM IPSUM</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-3.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">LOREM IPSUM IS SO UBIQU BECAUSE</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-4.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">BUT DESPITE ZEALOUS CRIES THE DEMISE</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"popular\" role=\"tabpanel\" aria-labelledby=\"popular-tab\">
              <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-5.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">The General Sery vice Administr</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-6.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Lorem ipsum began as nonsensical</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-7.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Finibus Bonorum et Malorum century</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-8.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Until recently prev-ailing view assumed</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"latest\" role=\"tabpanel\" aria-labelledby=\"latest-tab\">
              <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-9.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Richard McClintock, a Latin scholar</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-10.png\"
                        alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">McClintock to a passage De Finibus</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-11.png\"
                        alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">In particular, the garbled words</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-12.png\"
                        alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">McClintock's eye for detail certainly</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
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
                <a href=\"blog.html\">Football <span class=\"cat-number\">10</span></a>
              </li>
              <li>
                <a href=\"blog.html\">baseball <span class=\"cat-number\">07</span></a>
              </li>
              <li>
                <a href=\"blog.html\">basketball <span class=\"cat-number\">05</span></a>
              </li>
              <li>
                <a href=\"blog.html\">esports <span class=\"cat-number\">02</span></a>
              </li>
            </ul>
          </div>
          <h3 class=\"sidebox-title-v2 h5\">Top Games</h3>
          <div class=\"vs-sidebox bg-smoke\">
            <div class=\"row no-gutters g-2\">
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-1.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-2.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-3.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-4.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>





<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/axios.min.js"), "html", null, true);
        echo "\"></script>

<script>
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
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  582 => 450,  320 => 190,  315 => 179,  309 => 175,  297 => 169,  291 => 166,  286 => 164,  215 => 96,  211 => 95,  207 => 94,  203 => 93,  199 => 92,  191 => 86,  185 => 82,  181 => 80,  177 => 78,  175 => 77,  171 => 76,  166 => 75,  164 => 74,  158 => 70,  154 => 67,  151 => 63,  146 => 55,  139 => 52,  132 => 48,  126 => 47,  121 => 44,  117 => 43,  110 => 38,  90 => 22,  88 => 21,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"base-front.html.twig\" %} 
{% block body %}

<div class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\" data-bg-src=\"Front/img/breadcumb/breadcumb-1.jpg\"
  data-overlay>
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
<section class=\"vs-blog-wrapper blog-single-layout1 space-top newsletter-pb\">
  <div class=\"container\">
    {% if app.user %}
    <a href=\"{{path('ajoutpost')}}\" class=\"\"> <button class=\"button-28\" role=\"button\" style=\"color:black;appearance: none;
  background-color: transparent;
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #3B3B3B;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,\" Segoe UI\",Helvetica,Arial,sans-serif,\"Apple Color
        Emoji\",\"Segoe UI Emoji\",\"Segoe UI Symbol\"; font-size: 16px; font-weight: 600; line-height: normal; margin: 0;
        min-height: 60px; min-width: 0; outline: none; padding: 16px 24px; text-align: center; text-decoration: none;
        transition: all 300ms cubic-bezier(.23, 1, 0.32, 1); user-select: none; -webkit-user-select: none; touch-action:
        manipulation; width: 100%; will-change: transform;pointer-events: none;color: #fff; background-color: #1A1A1A;
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px; transform: translateY(-2px);box-shadow: none; transform:
        translateY(0);\">add new post</button></a>
    {% endif %}
    <br>

    <br>
    <div class=\"row\">
      <div class=\"col-lg-8\">
        {% for post in posts %}

        <div class=\"blog\">
          <div class=\"blog-image \">
            <a href=\"{{ path('afficher_posts', {'id': post.id}) }}\"><img src=\"/uploads/{{ post.picture }}\"
                style=\"width: 99%;\" alt=\"{{ post.id }}\" /></a>
          </div>
          <div class=\"blog-meta bg-smoke has-border\">

            <a href=\"{{ path('afficher_posts', {'id': post.id}) }}\"><i class=\"fal fa-calendar-alt\"></i>{{post.createdAt | date('d/m/Y H:i')}}
            </a>
            {# <a href=\"#\"><i class=\"fal fa-comments\">{{ post.comment | length}} </i></a> #}

            <div class=\"cat-list\">

              {# <a href=\"{{ path('')}}\"  id=\"blog-like\"
              data-entity-id=\"{{post.id}}\"
              data-csrf-token=\"{{isBlogAlreadyLiked == true ? '1' : '0'}}\"
              class=\"btn-like\">&nbsp;
              >  #}
                
                   {# <i class=\"far fa-thumbs-up {{isBlogAlreadyLiked == true ? 'liked' : ''}}\">
                  {{isBlogAlreadyLiked == true ? 'Unlike' : 'Like'}}
                  </i>  #}


                 {# <span class=\"js-likes\">{{post.likes | length}}</span>  #}
                
                
                
               </a>
                 {% if app.user %}
               <a href=\"{{ path('post_like', {'id': post.id}) }}\" class=\"btn btn-link js-like\">    
                  <span class=\"js-likes\">{{post.likes | length}}</span>
                               {% if app.user and post.likedByUser(app.user) %}
                                <i class=\"fas fa-thumbs-up\"></i>
                            {% else %}
                                <i class=\"far fa-thumbs-up\"></i>
                            {% endif %}
                           

                  <span class=\"js-label\">j'aime </span>
                  {% endif %}
                  </a> 


<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" /> 


     <a href=\"{{ path('add_rating',{'id':post.id,'nbr':1}) }}\"> <span class=\"fas fa-star\" data-star=\"1\" ></span></a>
       <a href=\"{{ path('add_rating',{'id':post.id,'nbr':2}) }}\"><span class=\"fas fa-star\" data-star=\"2\"></span></a>
       <a href=\"{{ path('add_rating',{'id':post.id,'nbr':3}) }}\"><span class=\"fas fa-star\" data-star=\"3\"></span></a>
       <a href=\"{{ path('add_rating',{'id':post.id,'nbr':4}) }}\"><span class=\"fas fa-star\" data-star=\"4\"></span></a>
       <a href=\"{{ path('add_rating',{'id':post.id,'nbr':5}) }}\"><span class=\"fas fa-star\" data-star=\"5\"></span></a>
    
<script>
const allStars = document.querySelectorAll(\".fa-star\");
console.log(\"allStars\", allStars);
const highlightedStars = [];
const rating = document.querySelector(\".rating\");

init();

function init() {
  allStars.forEach((star) => {
    star.addEventListener(\"click\", saveRating);
    star.addEventListener(\"mouseover\", addCSS);
    star.addEventListener(\"mouseleave\", removeCSS);
  });
}

function saveRating(e) {
  console.log(e, e.target, e.target.nodeName, e.target.nodeType);
  console.dir(e.target);
  console.log(e.target.dataset);
  removeEventListenersToAllStars();
  rating.innerText = e.target.dataset.star;
}

function removeEventListenersToAllStars() {
  allStars.forEach((star) => {
    star.removeEventListener(\"click\", saveRating);
    star.removeEventListener(\"mouseover\", addCSS);
    star.removeEventListener(\"mouseleave\", removeCSS);
  });
}

function addCSS(e, css = \"checked\") {
  const overedStar = e.target;
  overedStar.classList.add(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  console.log(\"previousSiblings\", previousSiblings);
  previousSiblings.forEach((elem) => elem.classList.add(css));
}

function removeCSS(e, css = \"checked\") {
  const overedStar = e.target;
  overedStar.classList.remove(css);
  const previousSiblings = getPreviousSiblings(overedStar);
  previousSiblings.forEach((elem) => elem.classList.remove(css));
}

function getPreviousSiblings(elem) {
  console.log(\"elem.previousSibling\", elem.previousSibling);
  let sibs = [];
  const spanNodeType = 1;
  while ((elem = elem.previousSibling)) {
    if (elem.nodeType === spanNodeType) {
      sibs = [elem, ...sibs];
    }
  }
  return sibs;
}
    </script>


            </div>
          </div>
          <br>
          <div class=\"blog-content bg-smoke\">
            <h2 class=\"blog-title h4 font-theme\">
              <a href=\"{{ path('afficher_posts', {'id': post.id}) }}\" style=\"
    color: black;
    font-size: inherit;\">{{ post.title }}</a>
            </h2>
            <p>
              {{ post.Objet}}
            </p>
            
          </div>
        </div>
        {% endfor %}

        <div class=\"pagination-wrapper pagination-layout1 pt-lg-30 pb-30\">
          <ul>
            <li>
              <a href=\"#\" class=\"active\"><span class=\"text\">{{ knp_pagination_render(posts) }}</span></a>
            </li>
            {# <li>
              <a href=\"#\"><span class=\"text\">{{ knp_pagination_render(posts) }}</span></a>
            </li>
            <li>
              <a href=\"#\"><span class=\"text\">{{ knp_pagination_render(posts) }}</span></a>
            </li>
            <li>
              <a href=\"#\"><span class=\"text\">{{ knp_pagination_render(posts) }}</span></a>
            </li> #}
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
            <div class=\"nav nav-fill tab-menu1 tab-indicator bg-white\" role=\"tablist\">
              <a class=\"nav-link active\" id=\"recent-tab\" data-bs-toggle=\"tab\" href=\"#recent\" role=\"tab\"
                aria-controls=\"recent\" aria-selected=\"true\">Recent</a>
              <a class=\"nav-link\" id=\"popular-tab\" data-bs-toggle=\"tab\" href=\"#popular\" role=\"tab\"
                aria-controls=\"popular\" aria-selected=\"false\">Popular</a>
              <a class=\"nav-link\" id=\"latest-tab\" data-bs-toggle=\"tab\" href=\"#latest\" role=\"tab\" aria-controls=\"latest\"
                aria-selected=\"false\">latest</a>
            </div>
          </div>
          <div class=\"tab-content\">
            <div class=\"tab-pane show active\" id=\"recent\" role=\"tabpanel\" aria-labelledby=\"recent-tab\">
              <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-1.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">The General Sery vice Administr</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-2.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">THE STRENGTH OF LOREM IPSUM</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-3.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">LOREM IPSUM IS SO UBIQU BECAUSE</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-4.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">BUT DESPITE ZEALOUS CRIES THE DEMISE</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"popular\" role=\"tabpanel\" aria-labelledby=\"popular-tab\">
              <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-5.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">The General Sery vice Administr</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-6.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Lorem ipsum began as nonsensical</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-7.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Finibus Bonorum et Malorum century</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-8.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Until recently prev-ailing view assumed</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"latest\" role=\"tabpanel\" aria-labelledby=\"latest-tab\">
              <div class=\"post-thumb-style1 vs-sidebox-v2 pb-1\">
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-9.png\" alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">Richard McClintock, a Latin scholar</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-10.png\"
                        alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">McClintock to a passage De Finibus</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-11.png\"
                        alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">In particular, the garbled words</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
                    </div>
                  </div>
                </div>
                <div class=\"vs-blog d-flex gap-3\">
                  <div class=\"media-img\">
                    <a href=\"blog-details.html\"><img src=\"Front/img/widget/recent-post-1-12.png\"
                        alt=\"Recent Post\" /></a>
                  </div>
                  <div class=\"media-body align-self-center\">
                    <h4 class=\"h5 blog-title font-theme lh-base mb-0\">
                      <a href=\"blog-details.html\">McClintock's eye for detail certainly</a>
                    </h4>
                    <div class=\"blog-meta link-inherit fs-xs mt-1\">
                      <a href=\"blog.html\"><i class=\"fal fa-calendar-alt text-theme2\"></i>June
                        21, 2021</a>
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
                <a href=\"blog.html\">Football <span class=\"cat-number\">10</span></a>
              </li>
              <li>
                <a href=\"blog.html\">baseball <span class=\"cat-number\">07</span></a>
              </li>
              <li>
                <a href=\"blog.html\">basketball <span class=\"cat-number\">05</span></a>
              </li>
              <li>
                <a href=\"blog.html\">esports <span class=\"cat-number\">02</span></a>
              </li>
            </ul>
          </div>
          <h3 class=\"sidebox-title-v2 h5\">Top Games</h3>
          <div class=\"vs-sidebox bg-smoke\">
            <div class=\"row no-gutters g-2\">
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-1.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-2.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-3.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
              <div class=\"col-6\">
                <div class=\"image-scale-hover\">
                  <a href=\"#\"><img src=\"Front/img/widget/sidebbox-img-4.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>





<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script src=\"{{ asset('Front/js/axios.min.js') }}\"></script>

<script>
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

 
  ", "blog/index.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\blog\\index.html.twig");
    }
}
