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
        // line 482
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "blog/index.html.twig", 482);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 483
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 484
        echo " <link rel=\"stylesheet\" href=\"https://www.refinery29.com/assets/styles.8008df49baca21994089.css\" />
 <script src=\"https://www.refinery29.com/assets/33.6d60d4e806a8dd92521c.js\"></script>
 <script src=\"https://www.refinery29.com/assets/ads.a85b7d809de77f2df6b1.js\"></script>
 <script src=\"https://www.refinery29.com/assets/article.fcc9673f8e1e42ccb127.js\"></script>
 <script src=\"https://www.refinery29.com/assets/channel.3d37dd4e003098d6fa32.js\"></script>
 <script src=\"https://www.refinery29.com/assets/raven-js.65d68861b4764cbd2669.js\"></script>
 <script src=\"https://www.refinery29.com/assets/react_intl_en.6fff4fcfceafa836ad5a.js\"></script>
 <script src=\"https://www.refinery29.com/assets/runtime.f66cc7f6cc14c621fee4.js\"></script>
 <script src=\"https://www.refinery29.com/assets/scripts.5917eb568a5ada30de0e.js\"></script>
 <script src=\"https://www.refinery29.com/assets/swiper.9912993d659616517929.js\"></script>
 <script src=\"https://www.refinery29.com/assets/vendor.53d4bc00ac20199f896e.js\"></script>

 <div id=\"r29-container\">
   <div id=\"below-the-fold-modules\">
     <div>
       <div class=\"module\">
         <div>
           <div>
             <div class=\"section-html\">
               <div id=\"0\">
                 <!-- GG, Custom Channel, Static hero v1.0 -->

                 <style class=\"r29-custom-embed\">
                   /* ****************************************************************************** */
                   /* CHANGE -- Styles */

                   /* Overall background color */



                   body {
                     background-color: #000 !important;
                   }

                   @media only screen and (max-width: 760px) {
                     body {
                       background-color: #000 !important;
                     }
                   }

                   /* Hero background color */
                   /* Only seen up when images are loading */
                   /* Best to make it same color as hero image */
                   .hero-row {
                     background-color: #000 !important;
                   }

                   /* ****************************************************************************** */
                   /* Big story cards - Background color */
                   .card.prime {
                     background-color: #16FCE6 !important;
                   }

                   /* Big story cards - Title color */
                   .card.prime .story-content .title {
                     color: #000 !important;
                   }

                   /* Big story cards - Category/label color */
                   .card.prime .story-content .section {
                     color: #000 !important;
                   }

                   /* Big story cards - Author color */
                   .card.prime .story-content .author {
                     color: #000 !important;
                   }

                   /* Big story cards - Date/time color */
                   .card.prime .story-content .publish-date {
                     color: #000 !important;
                   }

                   /* Big story card - Fonts, Font Size, Font Weight & Letterspacing ( Playfair or Brown ) */
                   .card.prime .story-content .title {
                     /* font-family: Playfair Display, georgia, serif !important; */
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     /* font-size: 18px !important; */
                     letter-spacing: 0em !important;
                     font-weight: 300 !important;
                   }

                   /* Big story cards - Underline or not? */
                   .card.prime .story-content .title span {
                     border-bottom: 1px solid #16FCE6 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* Big story cards - Rollover underline & underline highlight color */
                   .card.prime:hover .story-content .title span {
                     color: #000 !important;
                     border-bottom: 1px solid #000 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* ****************************************************************************** */
                   /* Story card background color */
                   .card {
                     background-color: #16FCE6 !important;
                   }

                   /* Story title color */
                   .card .story-content .title {
                     color: #000 !important;
                   }

                   /* Story card category label color */
                   .card .story-content .section {
                     color: #000 !important;
                   }

                   /* Story card author color */
                   .card .story-content .author {
                     color: #000 !important;
                   }

                   /* Story card date/time color */
                   .card .story-content .publish-date {
                     color: #000 !important;
                   }

                   /* Story card - Fonts, Font Size, Font Weight & Letterspacing ( Playfair & Brown ) */
                   .card .story-content .title {
                     /* font-family: Playfair Display, georgia, serif !important; */
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     /* font-size: 16px !important; */
                     letter-spacing: 0 !important;
                     font-weight: 300 !important;
                   }

                   /* Story card - Underline or not? */
                   .card .story-content .title span {
                     border-bottom: 1px solid #16FCE6 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* Story card - Rollover underline & underline highlight color */
                   .card:hover .story-content .title span {
                     color: #000 !important;
                     border-bottom: 1px solid #000 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* ****************************************************************************** */
                   /* Card hover shadow - Uncomment the box-shadow to turn shadow off */

                   .card:hover {
                     /* box-shadow: none !important; */
                   }

                   /* ****************************************************************************** */
                   /* More stories button - Default */
                   button.red {
                     background-color: #9F45FF !important;
                     color: #fff !important;
                   }

                   /* More stories button - Outline color, set to 0 to hide */
                   button.pill {
                     border: 0px solid #9F45FF !important;
                   }

                   /* More stories button - Rollover colors + font color */
                   button.red:hover {
                     background-color: #16FCE6 !important;
                     color: #000 !important;
                   }

                   /* ****************************************************************************** */
                   /* Sponsor Banner, block = on, none = off */
                   .tmp-sponsor-banner {
                     display: block !important;
                   }

                   /* ****************************************************************************** */
                   /* Ad Banner 'Advertisment' label */
                   .row-ad span {
                     color: #ccc;
                   }


                   /* ****************************************************************************** */
                   /* Intro Dek */
                   .tmp-intro {
                     width: 100%;
                     max-width: 1100px;
                     margin: 20px auto;
                     display: none;
                   }

                   .tmp-intro p {
                     /* font-family: Playfair Display, georgia, serif !important; */
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     /* font-size: 16px !important; */
                     letter-spacing: 0 !important;
                     font-weight: 300 !important;
                     font-size: 26px;
                     padding: 0 20px 20px;
                     color: #fff;
                     text-align: center;
                   }

                   @media only screen and (max-width: 760px) {
                     .tmp-intro p {
                       font-size: 21px;
                       padding-bottom: 50px;
                     }
                   }



                   /* ****************************************************************************** */
                   /* DO NOT CHANGE */
                   #tmp {
                     position: relative;
                     max-width: 1800px;
                     margin: 0 auto;
                   }

                   .tmp-hero {
                     margin: 0 auto;
                     padding: 0 0 36.5% 0;
                     text-align: center;
                     width: 100%;
                   }

                   .tmp-hero-layer {
                     position: absolute;
                     top: 0;
                     left: 0;
                     right: 0;
                     margin-top: 0;
                   }

                   .tmp-hero-container {
                     position: relative;
                     margin: 0 auto;
                     padding: 0;
                     text-align: center;
                     width: 100%;
                     height: 100%;
                   }

                   .tmp-hero-container img {
                     width: 100%;
                   }

                   @media only screen and (max-width: 760.99px) {
                     .global-header.transparent {
                       background-color: #fff !important;
                     }
                   }

                   .featured-stories,
                   .cta-bar,
                   .stripe,
                   .about-section,
                   .jump-wrapper {
                     display: none !important;
                   }

                   .global-footer {
                     margin-top: 60px !important;
                   }

                   .card.prime .story-content .title span,
                   .card.prime:hover .story-content .title span {
                     -webkit-transition: none !important;
                     transition: none !important;
                   }

                   .discover .nav-category:before {
                     background-color: #fff !important;
                   }

                   .discover-active .discover .nav-category {
                     color: #fff !important;
                   }

                   .discover:hover .nav-category {
                     color: #ef4b4b !important;
                   }

                   .discover:hover .nav-category:before {
                     background-color: #ef4b4b !important;
                   }

                   @media only screen and (max-width: 768px) {
                     .discover-active .discover .nav-category {
                       color: #191919 !important;
                     }

                     .discover-active .discover:hover .nav-category {
                       color: #ef4b4b !important;
                     }
                   }

                   .header-ad-container {
                     margin-bottom: 0 !important;
                   }

                   .row-ad {
                     background-color: transparent !important;
                   }

                   .tmp-sponsor-banner {
                     margin: 0 auto;
                     width: 100%;
                     max-width: 360px;
                     padding: 10px 0 30px;
                   }

                   .tmp-sponsor-banner img {
                     margin: 0;
                     width: 100%;
                     max-width: 360px;
                     padding: 0;
                   }

                   .tmp-hero-desktop {
                     display: block;
                   }

                   .tmp-hero-mobile {
                     display: none;
                   }

                   @media only screen and (max-width: 1800px) {
                     .tmp-hero {
                       padding: 0 0 36.5% 0;
                     }

                     .tmp-hero-desktop {
                       display: block;
                     }

                     .tmp-hero-tablet {
                       display: none;
                     }

                     .tmp-hero-mobile {
                       display: none;
                     }
                   }

                   @media only screen and (max-width: 760px) {
                     .tmp-hero {
                       padding: 0 0 105.3% 0;
                       margin-top: 45px;
                     }

                     .tmp-hero-desktop {
                       display: none;
                     }

                     .tmp-hero-mobile {
                       display: block;
                     }
                   }

                   .main {
                     overflow-x: hidden;
                   }

                   .about-section {
                     display: block !important;
                     background-color: transparent !important;
                     text-align: center !important;
                   }

                   .about-title,
                   .about-static {
                     display: none !important;
                   }

                   .about-content {
                     display: none !important;
                   }

                   /* ****************************************************************************** */
                   /* ADJUST HEIGHT OF HERO IMAGE */

                   /* Desktop & Tablet */
                   .tmp-hero {
                     padding: 0px 0 36.5% 0 !important;
                     /* This is usually 37.5% for 2000x750 */
                   }

                   @media only screen and (max-width: 760px) {

                     /* Mobile */
                     .tmp-hero {
                       padding: 0 0 118% 0 !important;
                     }

                   }

                   .about-section {
                     display: block !important;
                     background-color: transparent !important;
                     text-align: center !important;
                   }

                   .about-title,
                   .about-static {
                     display: none !important;
                   }

                   .about-content {
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     font-size: 12px !important;
                     letter-spacing: 0.1em !important;
                     font-weight: 400 !important;
                     color: #fff !important;
                     text-transform: uppercase !important;
                     display: block !important;
                   }
                 </style>



                 <!-- ****************************************************************************** -->
                 <!-- Template -->
                 <div id=\"tmp\" class=\"r29-custom-embed\">
                   <div class=\"tmp-hero\">
                     <div class=\"tmp-hero-layer\">
                       <div class=\"tmp-hero-container\">



                         <!-- ****************************************************************************** -->
                         <!-- CHANGE -- Hero, Desktop wide browsers 2000x750, iPad Pro -->
                         <!-- CHANGE -- Alt tag, add text that's baked into the image -->
                         <img class=\"tmp-hero-desktop\" src=\"https://www.refinery29.com/images/10792134.png\"
                           alt=\"GG. Good Game. Every gamer says GG at the end of a tough battle, but the real-life road to a good game has many thrills, challenges, and adventures. GG celebrates the gamers who are pushing the status quo and playing to win online and IRL.\">
                         <!-- ****************************************************************************** -->
                         <!-- CHANGE -- Hero, Mobile, Narrow desktop, 960x1280 -->
                         <!-- CHANGE -- Alt tag, add text that's baked into the image -->
                         <img class=\"tmp-hero-mobile\" src=\"https://www.refinery29.com/images/10792133.png\"
                           alt=\"GG. Good Game. Every gamer says GG at the end of a tough battle, but the real-life road to a good game has many thrills, challenges, and adventures. GG celebrates the gamers who are pushing the status quo and playing to win online and IRL.\">



                       </div>
                     </div>
                   </div>
                 </div>

                 <!-- Intro Dek -->
                 <div class=\"tmp-intro\">
                   <p></p>
                 </div>







                 <!-- ****************************************************************************** -->
                 <!-- CHANGE -- Sponsor impression tracker, delete the script tags if there isn't one -->
                 <!--  -->



                 <!-- GG, Custom Channel, Static hero v1.0 -->
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div>
       <div class=\"module\">
         <div>
           <div>
             ";
        // line 988
        echo "           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/04/10907071/leslie-fu-fuslie-twitch-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10955231.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10955231.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Leslie Fu aka Fuslie\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Fuslie Proves Being Yourself Is Never Out Of Character</span></div>
                       <div class=\"abstract\">Tens of thousands of people watch streamer Leslie Fu roleplay as someone
                         else on Twitch. By immersing herself into another life, she’s come into her own </div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/working-in-metaverse-workrooms-real-story\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10907846.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10907846.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"An orange avatar with glasses surrounded by office supplies\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">So, How Is It Really?</div>
                       <div class=\"title\"><span>So, How Is It Really? Going To Work In The Metaverse</span></div>
                       <div class=\"abstract\">These days it seems like all I ever hear about is the metaverse. From the
                         buying and selling of virtual real estate to Facebook officially changing its nam</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Hannah Rimm</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/metaverse-fashion-virtual-clothing-designers-roblox\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10896317.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10896317.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"H&amp;M clothing and accessory collage\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">Dedicated Feature</div>
                       <div class=\"title\"><span>Inside The World Of Metaverse Fashion: How Gamers Are Earning
                           \$\$\$...</span></div>
                       <div class=\"abstract\">Every gamer says “gg” at the end of a tough battle, but the real-life road
                         to a good game has just as many thrills, challenges, and adventures.</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Andrea Cheng</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/03/10856168/faze-kalei-renay-twitch-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10873647.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10873647.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Kalei\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Kalei Is FaZe Clan’s Only Woman Creator. She’s Also
                           Unapologetica...</span></div>
                       <div class=\"abstract\">With jet black hair, heavy winged eyeliner, septum piercing, and a
                         collection of bug tattoos, Kalei Renay has heard the comparisons to her music idol Billi</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
             <div class=\"row row-ad feed-row-47\"><span>Advertisement</span>
               <div class=\"ad\" data-ad-size=\"10x10,728x90,300x250\" data-ad-position=\"top\" data-slot-id=\"aggregation-top\"
                 data-targeting=\"{&quot;sponsorship&quot;:null,&quot;section_name&quot;:[&quot;dedicated-feature&quot;,&quot;fashion&quot;,&quot;gg-good-game&quot;,&quot;good-game&quot;],&quot;collections&quot;:[],&quot;aggregations&quot;:null,&quot;entityid&quot;:10792287,&quot;aid&quot;:&quot;gg-good-game&quot;,&quot;pageid&quot;:&quot;gg-good-game&quot;,&quot;pagetype&quot;:&quot;aggregation&quot;,&quot;test&quot;:null,&quot;is_sensitive_content&quot;:false,&quot;edition&quot;:&quot;en-us&quot;,&quot;utm_source&quot;:null,&quot;utm_medium&quot;:null,&quot;utm_content&quot;:null,&quot;utm_campaign&quot;:null,&quot;vertical&quot;:&quot;r29&quot;,&quot;document.referrer&quot;:&quot;www.refinery29.com/en-us/entertainment&quot;,&quot;ad_count&quot;:53}\"
                 id=\"ad-feed-row-47\"></div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/02/10869313/paidia-women-gaming-safe-spaces\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10872480.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10872480.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"female gamer and streamer is playing video games on her computer. She is putting on her headphones, getting ready to play and livestream.\"
                           class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Paidia Wants To Be The Safe Space Gaming Needs</span></div>
                       <div class=\"abstract\">Jeannail Carter a.k.a Cuddle_Core remembers a lot from her first televised
                         tournament as a professional Tekken player. There were the pre-show jitters, the</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Katherine Singh</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/02/10838043/ricki-ortiz-street-fighter-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10854255.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10854255.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Ricki Ortiz\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Ricki Ortiz’s Fight To The Top Goes Beyond Just Esports</span></div>
                       <div class=\"abstract\">For years, Ricki Ortiz had worked to establish herself as one of the most
                         dominant esports athletes in a field of intense competitors. The fighting game pr</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Jolene Latimer</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/top-cozy-games-jobs-trend\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10832738.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10832738.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Gamification of work illustration\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Workplace Burnout Is An Epidemic, But I’ll Never Quit My Animal
                           C...</span></div>
                       <div class=\"abstract\">When the Omicron wave hit, it felt eerily similar to March 2020. Back then,
                         travel plans were canceled, parties were rescheduled, and we huddled inside, av</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Hannah Rimm</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2022/01/10796344/pikachulita-katie-robinson-black-women-gaming\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10823243.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10823243.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Pikachulita\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Twitch Streamer PikaChulita Doesn’t Just Talk The Talk</span></div>
                       <div class=\"abstract\">“I can talk a hole in the side of somebody’s head,” Katie Robinson laughs.
                         And it’s true. What was supposed to be an hour-long conversation with th</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10711961/brookeab-100-thieves-twitch-harassment-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10789849.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10789849.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Brooke Ashley poses in front of a purple and orange background wearing an orange top, white skirt, white boots, and gold necklace.\"
                           class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>How The Unbreakable BrookeAB Took Her Life Back After Being
                           Bullied</span></div>
                       <div class=\"abstract\">She’s seen two years of harassment and death threats so intense that the
                         FBI had to step in. Now, the Twitch streamer has a message for her tormentors: I</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10711964/gamers-with-disabilities-accessible-video-games\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10788663.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10788663.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Illustration of 3 disabled gamers using adaptive technologies that make gaming more accessible\"
                           class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Gaming Is Becoming Accessible, But We Need To Keep Asking For
                           More</span></div>
                       <div class=\"abstract\">On her left arm, Twitch streamer LittleNavi has a tattoo of WASD, the four
                         keyboard keys PC gamers typically use to move their characters. “It’s ironic</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Jennifer Mulrow</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10791320/michaela-lintrup-mimi-twitch-women-esports\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10791448.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10791448.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Michaela &quot;mimi&quot; Lintrup of G2 Esports.a\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>G2 Esports’ Michaela Lintrup Makes The Case For Women’s Lea...</span>
                       </div>
                       <div class=\"abstract\">“Having that raw, crisp aim, and you just tap and someone dies, is so
                         satisfying,” Michaela Lintrup says, her fingers punctuating each word. Sitting on</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10722328/black-women-video-game-developers-community\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10790065.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10790065.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Jay-Ann Lopez of Black Girl Gamers.\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Black Women Gamers Aren’t Unicorns — They’re The Future</span></div>
                       <div class=\"abstract\">Many people still think that being a gamer and a Black woman is a
                         juxtaposition. It’s not. We’re not unicorns. Just like in any other industry, there a</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Jay-Ann Lopez</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div>
     <div class=\"oop-ad-unit-container\">
       <div id=\"div-gpt-ad-1494528017690-0\" data-slot-id=\"\" data-ad-position=\"outstream\"
         data-targeting=\"{&quot;ad_count&quot;:1}\"></div>
     </div>
   </div>
   <div class=\"row footer-ad oop-ad-unit-container\"></div>
 </div>
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
        return array (  554 => 988,  68 => 484,  58 => 483,  35 => 482,);
    }

    public function getSourceContext()
    {
        return new Source(" {# {% extends \"base-front.html.twig\" %} 
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

 {# <div class=\"cat-list\"> #}

 {# <a href=\"{{ path('')}}\"  id=\"blog-like\"
              data-entity-id=\"{{post.id}}\"
              data-csrf-token=\"{{isBlogAlreadyLiked == true ? '1' : '0'}}\"
              class=\"btn-like\">&nbsp;
              >  #}

 {# <i class=\"far fa-thumbs-up {{isBlogAlreadyLiked == true ? 'liked' : ''}}\">
                  {{isBlogAlreadyLiked == true ? 'Unlike' : 'Like'}}
                  </i>  #}


 {# <span class=\"js-likes\">{{post.likes | length}}</span>  #}



 {# </a>
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
            </li> #}
 {# <li>
              <a href=\"#\"><span class=\"text\">{{ knp_pagination_render(posts) }}</span></a>
            </li>
            <li>
              <a href=\"#\"><span class=\"text\">{{ knp_pagination_render(posts) }}</span></a>
            </li>
            <li>
              <a href=\"#\"><span class=\"text\">{{ knp_pagination_render(posts) }}</span></a>
            </li> #}
 {# </ul>
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



{% endblock %} #}

 {% extends \"base-front.html.twig\" %}
 {% block body %}
 <link rel=\"stylesheet\" href=\"https://www.refinery29.com/assets/styles.8008df49baca21994089.css\" />
 <script src=\"https://www.refinery29.com/assets/33.6d60d4e806a8dd92521c.js\"></script>
 <script src=\"https://www.refinery29.com/assets/ads.a85b7d809de77f2df6b1.js\"></script>
 <script src=\"https://www.refinery29.com/assets/article.fcc9673f8e1e42ccb127.js\"></script>
 <script src=\"https://www.refinery29.com/assets/channel.3d37dd4e003098d6fa32.js\"></script>
 <script src=\"https://www.refinery29.com/assets/raven-js.65d68861b4764cbd2669.js\"></script>
 <script src=\"https://www.refinery29.com/assets/react_intl_en.6fff4fcfceafa836ad5a.js\"></script>
 <script src=\"https://www.refinery29.com/assets/runtime.f66cc7f6cc14c621fee4.js\"></script>
 <script src=\"https://www.refinery29.com/assets/scripts.5917eb568a5ada30de0e.js\"></script>
 <script src=\"https://www.refinery29.com/assets/swiper.9912993d659616517929.js\"></script>
 <script src=\"https://www.refinery29.com/assets/vendor.53d4bc00ac20199f896e.js\"></script>

 <div id=\"r29-container\">
   <div id=\"below-the-fold-modules\">
     <div>
       <div class=\"module\">
         <div>
           <div>
             <div class=\"section-html\">
               <div id=\"0\">
                 <!-- GG, Custom Channel, Static hero v1.0 -->

                 <style class=\"r29-custom-embed\">
                   /* ****************************************************************************** */
                   /* CHANGE -- Styles */

                   /* Overall background color */



                   body {
                     background-color: #000 !important;
                   }

                   @media only screen and (max-width: 760px) {
                     body {
                       background-color: #000 !important;
                     }
                   }

                   /* Hero background color */
                   /* Only seen up when images are loading */
                   /* Best to make it same color as hero image */
                   .hero-row {
                     background-color: #000 !important;
                   }

                   /* ****************************************************************************** */
                   /* Big story cards - Background color */
                   .card.prime {
                     background-color: #16FCE6 !important;
                   }

                   /* Big story cards - Title color */
                   .card.prime .story-content .title {
                     color: #000 !important;
                   }

                   /* Big story cards - Category/label color */
                   .card.prime .story-content .section {
                     color: #000 !important;
                   }

                   /* Big story cards - Author color */
                   .card.prime .story-content .author {
                     color: #000 !important;
                   }

                   /* Big story cards - Date/time color */
                   .card.prime .story-content .publish-date {
                     color: #000 !important;
                   }

                   /* Big story card - Fonts, Font Size, Font Weight & Letterspacing ( Playfair or Brown ) */
                   .card.prime .story-content .title {
                     /* font-family: Playfair Display, georgia, serif !important; */
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     /* font-size: 18px !important; */
                     letter-spacing: 0em !important;
                     font-weight: 300 !important;
                   }

                   /* Big story cards - Underline or not? */
                   .card.prime .story-content .title span {
                     border-bottom: 1px solid #16FCE6 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* Big story cards - Rollover underline & underline highlight color */
                   .card.prime:hover .story-content .title span {
                     color: #000 !important;
                     border-bottom: 1px solid #000 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* ****************************************************************************** */
                   /* Story card background color */
                   .card {
                     background-color: #16FCE6 !important;
                   }

                   /* Story title color */
                   .card .story-content .title {
                     color: #000 !important;
                   }

                   /* Story card category label color */
                   .card .story-content .section {
                     color: #000 !important;
                   }

                   /* Story card author color */
                   .card .story-content .author {
                     color: #000 !important;
                   }

                   /* Story card date/time color */
                   .card .story-content .publish-date {
                     color: #000 !important;
                   }

                   /* Story card - Fonts, Font Size, Font Weight & Letterspacing ( Playfair & Brown ) */
                   .card .story-content .title {
                     /* font-family: Playfair Display, georgia, serif !important; */
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     /* font-size: 16px !important; */
                     letter-spacing: 0 !important;
                     font-weight: 300 !important;
                   }

                   /* Story card - Underline or not? */
                   .card .story-content .title span {
                     border-bottom: 1px solid #16FCE6 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* Story card - Rollover underline & underline highlight color */
                   .card:hover .story-content .title span {
                     color: #000 !important;
                     border-bottom: 1px solid #000 !important;
                     /* Set to 0px, to remove line */
                     -webkit-transition: 0.2s !important;
                     transition: 0.2s !important;
                   }

                   /* ****************************************************************************** */
                   /* Card hover shadow - Uncomment the box-shadow to turn shadow off */

                   .card:hover {
                     /* box-shadow: none !important; */
                   }

                   /* ****************************************************************************** */
                   /* More stories button - Default */
                   button.red {
                     background-color: #9F45FF !important;
                     color: #fff !important;
                   }

                   /* More stories button - Outline color, set to 0 to hide */
                   button.pill {
                     border: 0px solid #9F45FF !important;
                   }

                   /* More stories button - Rollover colors + font color */
                   button.red:hover {
                     background-color: #16FCE6 !important;
                     color: #000 !important;
                   }

                   /* ****************************************************************************** */
                   /* Sponsor Banner, block = on, none = off */
                   .tmp-sponsor-banner {
                     display: block !important;
                   }

                   /* ****************************************************************************** */
                   /* Ad Banner 'Advertisment' label */
                   .row-ad span {
                     color: #ccc;
                   }


                   /* ****************************************************************************** */
                   /* Intro Dek */
                   .tmp-intro {
                     width: 100%;
                     max-width: 1100px;
                     margin: 20px auto;
                     display: none;
                   }

                   .tmp-intro p {
                     /* font-family: Playfair Display, georgia, serif !important; */
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     /* font-size: 16px !important; */
                     letter-spacing: 0 !important;
                     font-weight: 300 !important;
                     font-size: 26px;
                     padding: 0 20px 20px;
                     color: #fff;
                     text-align: center;
                   }

                   @media only screen and (max-width: 760px) {
                     .tmp-intro p {
                       font-size: 21px;
                       padding-bottom: 50px;
                     }
                   }



                   /* ****************************************************************************** */
                   /* DO NOT CHANGE */
                   #tmp {
                     position: relative;
                     max-width: 1800px;
                     margin: 0 auto;
                   }

                   .tmp-hero {
                     margin: 0 auto;
                     padding: 0 0 36.5% 0;
                     text-align: center;
                     width: 100%;
                   }

                   .tmp-hero-layer {
                     position: absolute;
                     top: 0;
                     left: 0;
                     right: 0;
                     margin-top: 0;
                   }

                   .tmp-hero-container {
                     position: relative;
                     margin: 0 auto;
                     padding: 0;
                     text-align: center;
                     width: 100%;
                     height: 100%;
                   }

                   .tmp-hero-container img {
                     width: 100%;
                   }

                   @media only screen and (max-width: 760.99px) {
                     .global-header.transparent {
                       background-color: #fff !important;
                     }
                   }

                   .featured-stories,
                   .cta-bar,
                   .stripe,
                   .about-section,
                   .jump-wrapper {
                     display: none !important;
                   }

                   .global-footer {
                     margin-top: 60px !important;
                   }

                   .card.prime .story-content .title span,
                   .card.prime:hover .story-content .title span {
                     -webkit-transition: none !important;
                     transition: none !important;
                   }

                   .discover .nav-category:before {
                     background-color: #fff !important;
                   }

                   .discover-active .discover .nav-category {
                     color: #fff !important;
                   }

                   .discover:hover .nav-category {
                     color: #ef4b4b !important;
                   }

                   .discover:hover .nav-category:before {
                     background-color: #ef4b4b !important;
                   }

                   @media only screen and (max-width: 768px) {
                     .discover-active .discover .nav-category {
                       color: #191919 !important;
                     }

                     .discover-active .discover:hover .nav-category {
                       color: #ef4b4b !important;
                     }
                   }

                   .header-ad-container {
                     margin-bottom: 0 !important;
                   }

                   .row-ad {
                     background-color: transparent !important;
                   }

                   .tmp-sponsor-banner {
                     margin: 0 auto;
                     width: 100%;
                     max-width: 360px;
                     padding: 10px 0 30px;
                   }

                   .tmp-sponsor-banner img {
                     margin: 0;
                     width: 100%;
                     max-width: 360px;
                     padding: 0;
                   }

                   .tmp-hero-desktop {
                     display: block;
                   }

                   .tmp-hero-mobile {
                     display: none;
                   }

                   @media only screen and (max-width: 1800px) {
                     .tmp-hero {
                       padding: 0 0 36.5% 0;
                     }

                     .tmp-hero-desktop {
                       display: block;
                     }

                     .tmp-hero-tablet {
                       display: none;
                     }

                     .tmp-hero-mobile {
                       display: none;
                     }
                   }

                   @media only screen and (max-width: 760px) {
                     .tmp-hero {
                       padding: 0 0 105.3% 0;
                       margin-top: 45px;
                     }

                     .tmp-hero-desktop {
                       display: none;
                     }

                     .tmp-hero-mobile {
                       display: block;
                     }
                   }

                   .main {
                     overflow-x: hidden;
                   }

                   .about-section {
                     display: block !important;
                     background-color: transparent !important;
                     text-align: center !important;
                   }

                   .about-title,
                   .about-static {
                     display: none !important;
                   }

                   .about-content {
                     display: none !important;
                   }

                   /* ****************************************************************************** */
                   /* ADJUST HEIGHT OF HERO IMAGE */

                   /* Desktop & Tablet */
                   .tmp-hero {
                     padding: 0px 0 36.5% 0 !important;
                     /* This is usually 37.5% for 2000x750 */
                   }

                   @media only screen and (max-width: 760px) {

                     /* Mobile */
                     .tmp-hero {
                       padding: 0 0 118% 0 !important;
                     }

                   }

                   .about-section {
                     display: block !important;
                     background-color: transparent !important;
                     text-align: center !important;
                   }

                   .about-title,
                   .about-static {
                     display: none !important;
                   }

                   .about-content {
                     font-family: Brown Regular, arial, helvetica, sans-serif !important;
                     font-size: 12px !important;
                     letter-spacing: 0.1em !important;
                     font-weight: 400 !important;
                     color: #fff !important;
                     text-transform: uppercase !important;
                     display: block !important;
                   }
                 </style>



                 <!-- ****************************************************************************** -->
                 <!-- Template -->
                 <div id=\"tmp\" class=\"r29-custom-embed\">
                   <div class=\"tmp-hero\">
                     <div class=\"tmp-hero-layer\">
                       <div class=\"tmp-hero-container\">



                         <!-- ****************************************************************************** -->
                         <!-- CHANGE -- Hero, Desktop wide browsers 2000x750, iPad Pro -->
                         <!-- CHANGE -- Alt tag, add text that's baked into the image -->
                         <img class=\"tmp-hero-desktop\" src=\"https://www.refinery29.com/images/10792134.png\"
                           alt=\"GG. Good Game. Every gamer says GG at the end of a tough battle, but the real-life road to a good game has many thrills, challenges, and adventures. GG celebrates the gamers who are pushing the status quo and playing to win online and IRL.\">
                         <!-- ****************************************************************************** -->
                         <!-- CHANGE -- Hero, Mobile, Narrow desktop, 960x1280 -->
                         <!-- CHANGE -- Alt tag, add text that's baked into the image -->
                         <img class=\"tmp-hero-mobile\" src=\"https://www.refinery29.com/images/10792133.png\"
                           alt=\"GG. Good Game. Every gamer says GG at the end of a tough battle, but the real-life road to a good game has many thrills, challenges, and adventures. GG celebrates the gamers who are pushing the status quo and playing to win online and IRL.\">



                       </div>
                     </div>
                   </div>
                 </div>

                 <!-- Intro Dek -->
                 <div class=\"tmp-intro\">
                   <p></p>
                 </div>







                 <!-- ****************************************************************************** -->
                 <!-- CHANGE -- Sponsor impression tracker, delete the script tags if there isn't one -->
                 <!--  -->



                 <!-- GG, Custom Channel, Static hero v1.0 -->
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div>
       <div class=\"module\">
         <div>
           <div>
             {# <div class=\"row\">
               <div>
                 <div class=\"card prime\"><a href=\"/en-us/nostalgic-90s-computer-games\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10967446.jpg?format=webp&amp;width=728&amp;height=273&amp;quality=85&amp;crop=8%3A3\"
                           srcset=\"https://www.refinery29.com/images/10967446.jpg?format=webp&amp;width=1456&amp;height=546&amp;quality=85&amp;crop=8%3A3 2x\"
                           alt=\"The Sims, 2000\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">Tech</div>
                       <div class=\"title\"><span>20 Old Computer Games You Completely Forgot About</span></div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span class=\"author-name\">Madeline Buxton</span></div>
                         <div class=\"publish-date\"><span>May 4, 2022</span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div> #}
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/04/10907071/leslie-fu-fuslie-twitch-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10955231.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10955231.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Leslie Fu aka Fuslie\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Fuslie Proves Being Yourself Is Never Out Of Character</span></div>
                       <div class=\"abstract\">Tens of thousands of people watch streamer Leslie Fu roleplay as someone
                         else on Twitch. By immersing herself into another life, she’s come into her own </div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/working-in-metaverse-workrooms-real-story\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10907846.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10907846.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"An orange avatar with glasses surrounded by office supplies\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">So, How Is It Really?</div>
                       <div class=\"title\"><span>So, How Is It Really? Going To Work In The Metaverse</span></div>
                       <div class=\"abstract\">These days it seems like all I ever hear about is the metaverse. From the
                         buying and selling of virtual real estate to Facebook officially changing its nam</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Hannah Rimm</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/metaverse-fashion-virtual-clothing-designers-roblox\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10896317.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10896317.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"H&amp;M clothing and accessory collage\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">Dedicated Feature</div>
                       <div class=\"title\"><span>Inside The World Of Metaverse Fashion: How Gamers Are Earning
                           \$\$\$...</span></div>
                       <div class=\"abstract\">Every gamer says “gg” at the end of a tough battle, but the real-life road
                         to a good game has just as many thrills, challenges, and adventures.</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Andrea Cheng</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/03/10856168/faze-kalei-renay-twitch-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10873647.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10873647.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Kalei\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Kalei Is FaZe Clan’s Only Woman Creator. She’s Also
                           Unapologetica...</span></div>
                       <div class=\"abstract\">With jet black hair, heavy winged eyeliner, septum piercing, and a
                         collection of bug tattoos, Kalei Renay has heard the comparisons to her music idol Billi</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
             <div class=\"row row-ad feed-row-47\"><span>Advertisement</span>
               <div class=\"ad\" data-ad-size=\"10x10,728x90,300x250\" data-ad-position=\"top\" data-slot-id=\"aggregation-top\"
                 data-targeting=\"{&quot;sponsorship&quot;:null,&quot;section_name&quot;:[&quot;dedicated-feature&quot;,&quot;fashion&quot;,&quot;gg-good-game&quot;,&quot;good-game&quot;],&quot;collections&quot;:[],&quot;aggregations&quot;:null,&quot;entityid&quot;:10792287,&quot;aid&quot;:&quot;gg-good-game&quot;,&quot;pageid&quot;:&quot;gg-good-game&quot;,&quot;pagetype&quot;:&quot;aggregation&quot;,&quot;test&quot;:null,&quot;is_sensitive_content&quot;:false,&quot;edition&quot;:&quot;en-us&quot;,&quot;utm_source&quot;:null,&quot;utm_medium&quot;:null,&quot;utm_content&quot;:null,&quot;utm_campaign&quot;:null,&quot;vertical&quot;:&quot;r29&quot;,&quot;document.referrer&quot;:&quot;www.refinery29.com/en-us/entertainment&quot;,&quot;ad_count&quot;:53}\"
                 id=\"ad-feed-row-47\"></div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/02/10869313/paidia-women-gaming-safe-spaces\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10872480.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10872480.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"female gamer and streamer is playing video games on her computer. She is putting on her headphones, getting ready to play and livestream.\"
                           class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Paidia Wants To Be The Safe Space Gaming Needs</span></div>
                       <div class=\"abstract\">Jeannail Carter a.k.a Cuddle_Core remembers a lot from her first televised
                         tournament as a professional Tekken player. There were the pre-show jitters, the</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Katherine Singh</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/2022/02/10838043/ricki-ortiz-street-fighter-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10854255.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10854255.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Ricki Ortiz\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Ricki Ortiz’s Fight To The Top Goes Beyond Just Esports</span></div>
                       <div class=\"abstract\">For years, Ricki Ortiz had worked to establish herself as one of the most
                         dominant esports athletes in a field of intense competitors. The fighting game pr</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Jolene Latimer</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a href=\"/en-us/top-cozy-games-jobs-trend\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10832738.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10832738.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Gamification of work illustration\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Workplace Burnout Is An Epidemic, But I’ll Never Quit My Animal
                           C...</span></div>
                       <div class=\"abstract\">When the Omicron wave hit, it felt eerily similar to March 2020. Back then,
                         travel plans were canceled, parties were rescheduled, and we huddled inside, av</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Hannah Rimm</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2022/01/10796344/pikachulita-katie-robinson-black-women-gaming\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10823243.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10823243.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Pikachulita\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Twitch Streamer PikaChulita Doesn’t Just Talk The Talk</span></div>
                       <div class=\"abstract\">“I can talk a hole in the side of somebody’s head,” Katie Robinson laughs.
                         And it’s true. What was supposed to be an hour-long conversation with th</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10711961/brookeab-100-thieves-twitch-harassment-interview\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10789849.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10789849.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Brooke Ashley poses in front of a purple and orange background wearing an orange top, white skirt, white boots, and gold necklace.\"
                           class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>How The Unbreakable BrookeAB Took Her Life Back After Being
                           Bullied</span></div>
                       <div class=\"abstract\">She’s seen two years of harassment and death threats so intense that the
                         FBI had to step in. Now, the Twitch streamer has a message for her tormentors: I</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10711964/gamers-with-disabilities-accessible-video-games\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10788663.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10788663.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Illustration of 3 disabled gamers using adaptive technologies that make gaming more accessible\"
                           class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Gaming Is Becoming Accessible, But We Need To Keep Asking For
                           More</span></div>
                       <div class=\"abstract\">On her left arm, Twitch streamer LittleNavi has a tattoo of WASD, the four
                         keyboard keys PC gamers typically use to move their characters. “It’s ironic</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Jennifer Mulrow</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
           <div>
             <div class=\"row\">
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10791320/michaela-lintrup-mimi-twitch-women-esports\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10791448.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10791448.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Michaela &quot;mimi&quot; Lintrup of G2 Esports.a\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>G2 Esports’ Michaela Lintrup Makes The Case For Women’s Lea...</span>
                       </div>
                       <div class=\"abstract\">“Having that raw, crisp aim, and you just tap and someone dies, is so
                         satisfying,” Michaela Lintrup says, her fingers punctuating each word. Sitting on</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Melissah Yang</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
               <div>
                 <div class=\"card standard\"><a
                     href=\"/en-us/2021/12/10722328/black-women-video-game-developers-community\">
                     <div>
                       <div class=\"opener-image\"><img
                           src=\"https://www.refinery29.com/images/10790065.jpg?format=webp&amp;width=140&amp;height=168&amp;quality=85&amp;crop=5%3A6\"
                           srcset=\"https://www.refinery29.com/images/10790065.jpg?format=webp&amp;width=280&amp;height=336&amp;quality=85&amp;crop=5%3A6 2x\"
                           alt=\"Jay-Ann Lopez of Black Girl Gamers.\" class=\"\"></div>
                     </div>
                     <div class=\"story-content\">
                       <div class=\"section\">GG Good Game</div>
                       <div class=\"title\"><span>Black Women Gamers Aren’t Unicorns — They’re The Future</span></div>
                       <div class=\"abstract\">Many people still think that being a gamer and a Black woman is a
                         juxtaposition. It’s not. We’re not unicorns. Just like in any other industry, there a</div>
                       <div class=\"story-meta\">
                         <div class=\"author\"><span>by <span class=\"author-name\">Jay-Ann Lopez</span></span></div>
                       </div>
                     </div>
                   </a></div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div>
     <div class=\"oop-ad-unit-container\">
       <div id=\"div-gpt-ad-1494528017690-0\" data-slot-id=\"\" data-ad-position=\"outstream\"
         data-targeting=\"{&quot;ad_count&quot;:1}\"></div>
     </div>
   </div>
   <div class=\"row footer-ad oop-ad-unit-container\"></div>
 </div>
 {% endblock %}", "blog/index.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\blog\\index.html.twig");
    }
}
