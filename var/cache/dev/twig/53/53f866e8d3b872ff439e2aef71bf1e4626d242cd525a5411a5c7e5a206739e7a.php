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

/* blog/details.html.twig */
class __TwigTemplate_51c7a1b1dfd043eb3d0699161ef1890878160cab8297e004142a939fc5edb18c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/details.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "blog/details.html.twig", 1);
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
        echo "<div id=\"fb-root\"></div>


<script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

       <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk/debug.js\" nonce=\"J1tpdd1I\"></script>
        <script>
            document.getElementById('shareBtn').onclick = function() {
                FB.ui({
                    display: 'popup',
                    method: 'share',
                    href: 'http://localhost:8000/detail/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "',
                }, function(response){});
            }
        </script>

 <div class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\" data-bg-src=\"assets/img/breadcumb/breadcumb-1.jpg\"
   data-overlay=\"\" style=\"background-image: url(&quot;assets/img/breadcumb/breadcumb-1.jpg&quot;);\">
   <div class=\"container z-index-common\">
     <div class=\"breadcumb-content text-center\">
       <h1 class=\"breadcumb-title h1 text-white my-0\">Blog Details</h1>
       <h2 class=\"breadcumb-bg-title\">News</h2>
       <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
         <li><a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a></li>
         <li class=\"active\">Blog Details</li>
       </ul>
     </div>
   </div>
 </div>
 <section class=\"vs-blog-wrapper blog-single-layout1 space-top newsletter-pb\">
   <div class=\"container\">
  ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            echo "  ";
            if ((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 41, $this->source); })())) {
                // line 42
                echo "     <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"vs-btn outline1 d-none d-xl-inline-block\"
       style=\"color:black;\">Modifier la post!</a>
        
       <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"vs-btn outline1 d-none d-xl-inline-block\"
       style=\"color:black;\">supprimer la post!</a>
        ";
            }
            // line 48
            echo "        ";
        }
        // line 49
        echo "     <br>
     <br>
     <div class=\"row\">
       <div class=\"col-lg-8\">
         <div class=\"vs-blog\">
           <div class=\"blog-image image-scale-hover\">
             <a href=\"blog-details.html\"><img src=\"/uploads/";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 55, $this->source); })()), "picture", [], "any", false, false, false, 55), "html", null, true);
        echo "\" style=\"width: 99%;\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "\"
                 class=\"w-100\" alt=\"Blog Image\" /></a>
           </div>
           <div class=\"blog-meta bg-smoke has-border\">
             <a href=\"#\"><i class=\"fal fa-calendar-alt\"></i>created at ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })()), "createdAt", [], "any", false, false, false, 59), "d/m/Y H:i"), "html", null, true);
        echo "</a>
             <a href=\"#\"><i class=\"far fa-comments\"></i>";
        // line 60
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 60, $this->source); })())), "html", null, true);
        echo "</a>
              <h4 class=\"name\" style=\"color:black\">posted by ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61), "html", null, true);
        echo "</h4>
              ";
        // line 63
        echo "              ";
        // line 64
        echo "             ";
        // line 68
        echo "                <iframe src=\"https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F127.0.0.1%3A8000%2Fdetail%2F";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "&layout=button_count&size=small&width=91&height=20&appId\" width=\"91\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; 
clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>
           </div>
           <div class=\"blog-content bg-smoke\">
             <h2 class=\"blog-title h4 font-theme\">
               <a href=\"blog-details.html\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 73, $this->source); })()), "Objet", [], "any", false, false, false, 73), "html", null, true);
        echo "</a>
             </h2>
             <p>
               ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 76, $this->source); })()), "content", [], "any", false, false, false, 76), "html", null, true);
        echo "
             </p>
             

             ";
        // line 96
        echo "             ";
        // line 153
        echo "          
           </div>
         </div>
         
         <div class=\"vs-comment-area list-style-none vs-comments-layout1\">
           
           <h3 style=\"color:black\">";
        // line 159
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 159, $this->source); })())), "html", null, true);
        echo " Commentaires</h3>
           <ul class=\"comment-list\">
             <li class=\"vs-comment\">
             
               ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 164
            echo "               <div class=\"vs-post-comment\">
                 <div class=\"author-img\">
                   <img src=\"/uploads/";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 166, $this->source); })()), "picture", [], "any", false, false, false, 166), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 166, $this->source); })()), "id", [], "any", false, false, false, 166), "html", null, true);
            echo "\" />
                 </div>
                 <div class=\"comment-content\">
                   <div class=\"comment-top\">
                     <div class=\"comment-author\">
                       ";
            // line 172
            echo "                       <div class=\"mb-10\">
                         <span class=\"commented-on\">created at ";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "createdAt", [], "any", false, false, false, 173), "d/m/Y H:i"), "html", null, true);
            echo "</span>
                       </div>
                     </div>
                                      

                     <div class=\"reply_and_edit\">
                     ";
            // line 179
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179)) {
                // line 180
                echo "                       <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comments_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["comments"], "id", [], "any", false, false, false, 180)]), "html", null, true);
                echo "\" class=\"vs-btn\">Modifier</a>
                      
                                                     ";
            }
            // line 183
            echo "
                       <a href=\"#ajouter-commentaire\"   class=\"vs-btn\"><i class=\"fal fa-reply-all mr-10\"></i>Reply</a>
                     </div>
                   </div>
                   <p class=\"text\">
                   
                     ";
            // line 189
            echo twig_get_attribute($this->env, $this->source, $context["comments"], "content", [], "any", false, false, false, 189);
            echo "
                   </p>
                 </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "               <div class=\"clo-xs2 col-sm3\" id=\"ajouter-commentaire\">
               <h3 class=\"mt-n2 font-theme text-normal\" style=\"color:black\">Leave a Comment</h3>
               ";
        // line 196
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentform"]) || array_key_exists("Commentform", $context) ? $context["Commentform"] : (function () { throw new RuntimeError('Variable "Commentform" does not exist.', 196, $this->source); })()), 'form_start');
        echo "
               ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentform"]) || array_key_exists("Commentform", $context) ? $context["Commentform"] : (function () { throw new RuntimeError('Variable "Commentform" does not exist.', 197, $this->source); })()), "content", [], "any", false, false, false, 197), 'row', ["attr" => ["placeholder" => "Votre Commentaire"]]);
        echo "
               <button type=\"submit\" class=\"btn btn-success\">Commenter</button>
               ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentform"]) || array_key_exists("Commentform", $context) ? $context["Commentform"] : (function () { throw new RuntimeError('Variable "Commentform" does not exist.', 199, $this->source); })()), 'form_end');
        echo "
               </div>
               
             </li>
             

           </ul>
         </div>
         
       </div>
       <div class=\"col-lg-4\">
         <aside class=\"sidebar-area sticky-top overflow-hidden\">
           <div class=\"widget widget_search\">
             <form class=\"search-form\">
               <input type=\"text\" placeholder=\"Search Here\" />
               <button type=\"submit\"><i class=\"far fa-search\"></i></button>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-1.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-2.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-3.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-4.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-5.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-6.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-7.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-8.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-9.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-10.png\"
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-11.png\"
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-12.png\"
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
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-1.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                 </div>
               </div>
               <div class=\"col-6\">
                 <div class=\"image-scale-hover\">
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-2.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                 </div>
               </div>
               <div class=\"col-6\">
                 <div class=\"image-scale-hover\">
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-3.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                 </div>
               </div>
               <div class=\"col-6\">
                 <div class=\"image-scale-hover\">
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-4.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
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
        return "blog/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 199,  269 => 197,  265 => 196,  261 => 194,  250 => 189,  242 => 183,  235 => 180,  233 => 179,  224 => 173,  221 => 172,  211 => 166,  207 => 164,  203 => 163,  196 => 159,  188 => 153,  186 => 96,  179 => 76,  173 => 73,  164 => 68,  162 => 64,  160 => 63,  156 => 61,  152 => 60,  148 => 59,  139 => 55,  131 => 49,  128 => 48,  122 => 45,  115 => 42,  112 => 41,  110 => 40,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"base-front.html.twig\" %}
 {% block body %}
<div id=\"fb-root\"></div>


<script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

       <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk/debug.js\" nonce=\"J1tpdd1I\"></script>
        <script>
            document.getElementById('shareBtn').onclick = function() {
                FB.ui({
                    display: 'popup',
                    method: 'share',
                    href: 'http://localhost:8000/detail/{{post.id}}',
                }, function(response){});
            }
        </script>

 <div class=\"breadcumb-wrapper breadcumb-layout1 pt-200 pb-50\" data-bg-src=\"assets/img/breadcumb/breadcumb-1.jpg\"
   data-overlay=\"\" style=\"background-image: url(&quot;assets/img/breadcumb/breadcumb-1.jpg&quot;);\">
   <div class=\"container z-index-common\">
     <div class=\"breadcumb-content text-center\">
       <h1 class=\"breadcumb-title h1 text-white my-0\">Blog Details</h1>
       <h2 class=\"breadcumb-bg-title\">News</h2>
       <ul class=\"breadcumb-menu-style1 text-white mx-auto fs-xs\">
         <li><a href=\"index-2.html\"><i class=\"fal fa-home\"></i>Home</a></li>
         <li class=\"active\">Blog Details</li>
       </ul>
     </div>
   </div>
 </div>
 <section class=\"vs-blog-wrapper blog-single-layout1 space-top newsletter-pb\">
   <div class=\"container\">
  {% if app.user %}
  {% if result %}
     <a href=\"{{path('posts_edit', {'id': post.id})}}\" class=\"vs-btn outline1 d-none d-xl-inline-block\"
       style=\"color:black;\">Modifier la post!</a>
        
       <a href=\"{{path('posts_delete', {'id': post.id})}}\" class=\"vs-btn outline1 d-none d-xl-inline-block\"
       style=\"color:black;\">supprimer la post!</a>
        {% endif %}
        {% endif %}
     <br>
     <br>
     <div class=\"row\">
       <div class=\"col-lg-8\">
         <div class=\"vs-blog\">
           <div class=\"blog-image image-scale-hover\">
             <a href=\"blog-details.html\"><img src=\"/uploads/{{ post.picture }}\" style=\"width: 99%;\" alt=\"{{ post.id }}\"
                 class=\"w-100\" alt=\"Blog Image\" /></a>
           </div>
           <div class=\"blog-meta bg-smoke has-border\">
             <a href=\"#\"><i class=\"fal fa-calendar-alt\"></i>created at {{post.createdAt | date('d/m/Y H:i')}}</a>
             <a href=\"#\"><i class=\"far fa-comments\"></i>{{comment | length}}</a>
              <h4 class=\"name\" style=\"color:black\">posted by {{post.user.username}}</h4>
              {# <div class=\"fb-share-button\" data-href=\"http://localhost:8000/detail/{{post.id}}\" data-layout=\"button_count\" data-size=\"large\"><a target=\"_blank\"  class=\"fb-xfbml-parse-ignore\">Partager</a></div> #}
              {# <iframe src=\"https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%3A8000%2Fdetail%2F1&layout=button_count&size=large&width=104&height=28&appId\" width=\"104\" height=\"28\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe> #}
             {# <div class=\"cat-list\">
                  <i class=\"far fa-folder-open\"></i> <a href=\"#\">e-sports</a>
                  <a href=\"#\">gaming</a> <a href=\"#\">pro</a>
                </div> #}
                <iframe src=\"https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F127.0.0.1%3A8000%2Fdetail%2F{{post.id}}&layout=button_count&size=small&width=91&height=20&appId\" width=\"91\" height=\"20\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; 
clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>
           </div>
           <div class=\"blog-content bg-smoke\">
             <h2 class=\"blog-title h4 font-theme\">
               <a href=\"blog-details.html\">{{ post.Objet}}</a>
             </h2>
             <p>
               {{ post.content}}
             </p>
             

             {# <div class=\"row my-25\">
                  <div class=\"col-md-6 mb-30 mb-md-0\">
                    <img
                      src=\"assets/img/blog/blog-d-1-4.jpg\"
                      class=\"w-100\"
                      alt=\"Blog Image\"
                    />
                  </div>
                  <div class=\"col-md-6\">
                    <img
                      src=\"assets/img/blog/blog-d-1-5.jpg\"
                      class=\"w-100\"
                      alt=\"Blog Image\"
                    />
                  </div>
                </div> #}
             {# <h3 class=\"h4\">implement client-centric models through</h3>
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
                    src=\"assets/img/blog/blog-d-1-6.jpg\"
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
                </p> #}
          
           </div>
         </div>
         
         <div class=\"vs-comment-area list-style-none vs-comments-layout1\">
           
           <h3 style=\"color:black\">{{ comment | length}} Commentaires</h3>
           <ul class=\"comment-list\">
             <li class=\"vs-comment\">
             
               {% for comments in comment %}
               <div class=\"vs-post-comment\">
                 <div class=\"author-img\">
                   <img src=\"/uploads/{{ post.picture }}\" alt=\"{{ post.id }}\" />
                 </div>
                 <div class=\"comment-content\">
                   <div class=\"comment-top\">
                     <div class=\"comment-author\">
                       {# <h4 class=\"name\" style=\"color:black\">posted by {{post.user.username}}</h4> #}
                       <div class=\"mb-10\">
                         <span class=\"commented-on\">created at {{comments.createdAt | date('d/m/Y H:i' )}}</span>
                       </div>
                     </div>
                                      

                     <div class=\"reply_and_edit\">
                     {% if app.user %}
                       <a href=\"{{path('comments_edit', {'id': comments.id})}}\" class=\"vs-btn\">Modifier</a>
                      
                                                     {% endif %}

                       <a href=\"#ajouter-commentaire\"   class=\"vs-btn\"><i class=\"fal fa-reply-all mr-10\"></i>Reply</a>
                     </div>
                   </div>
                   <p class=\"text\">
                   
                     {{ comments.content|raw }}
                   </p>
                 </div>
               </div>
               {% endfor %}
               <div class=\"clo-xs2 col-sm3\" id=\"ajouter-commentaire\">
               <h3 class=\"mt-n2 font-theme text-normal\" style=\"color:black\">Leave a Comment</h3>
               {{ form_start(Commentform) }}
               {{ form_row(Commentform.content,{'attr':{'placeholder':\"Votre Commentaire\"}})}}
               <button type=\"submit\" class=\"btn btn-success\">Commenter</button>
               {{ form_end(Commentform) }}
               </div>
               
             </li>
             

           </ul>
         </div>
         
       </div>
       <div class=\"col-lg-4\">
         <aside class=\"sidebar-area sticky-top overflow-hidden\">
           <div class=\"widget widget_search\">
             <form class=\"search-form\">
               <input type=\"text\" placeholder=\"Search Here\" />
               <button type=\"submit\"><i class=\"far fa-search\"></i></button>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-1.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-2.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-3.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-4.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-5.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-6.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-7.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-8.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-9.png\"
                         alt=\"Recent Post\" /></a>
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-10.png\"
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-11.png\"
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
                     <a href=\"blog-details.html\"><img src=\"assets/img/widget/recent-post-1-12.png\"
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
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-1.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                 </div>
               </div>
               <div class=\"col-6\">
                 <div class=\"image-scale-hover\">
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-2.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                 </div>
               </div>
               <div class=\"col-6\">
                 <div class=\"image-scale-hover\">
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-3.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
                 </div>
               </div>
               <div class=\"col-6\">
                 <div class=\"image-scale-hover\">
                   <a href=\"#\"><img src=\"assets/img/widget/sidebbox-img-4.jpg\" class=\"w-100\" alt=\"Sidebox Image\" /></a>
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

 ", "blog/details.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\blog\\details.html.twig");
    }
}
