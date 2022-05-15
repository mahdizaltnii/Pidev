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

/* base-back.html.twig */
class __TwigTemplate_f5b4635b762834a7037172883a338391d12379f4a6508a160b54c09e31abac28 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Dashboard-";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"), "html", null, true);
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/summernote/summernote-bs4.min.css"), "html", null, true);
        echo "\">
  <!-- DataTables -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"), "html", null, true);
        echo "\">

</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
    <div class=\"wrapper\">

    <!-- Preloader -->
    <div class=\"preloader flex-column justify-content-center align-items-center\">
        <img class=\"animation__shake\" src=\"Back/dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
    </div>

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            ";
        // line 51
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Home");
        echo "\" class=\"nav-link\">Home</a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"#\" class=\"nav-link\">Contact</a>
        </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
        <!-- Navbar Search -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
            <i class=\"fas fa-search\"></i>
            </a>
            <div class=\"navbar-search-block\">
            <form class=\"form-inline\">
                <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                    <i class=\"fas fa-search\"></i>
                    </button>
                    <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
            </form>
            </div>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"control-sidebar\" data-controlsidebar-slide=\"true\" href=\"#\" role=\"button\">
            <i class=\"fas fa-th-large\"></i>
            </a>
        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"#\" class=\"brand-link\">
        <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/img/AdminLTELogo.png"), "html", null, true);
        echo "\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">Administrator</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\"></div>

        <!-- SidebarSearch Form -->
        <div class=\"form-inline\">
            <div class=\"input-group\" data-widget=\"sidebar-search\">
            <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-sidebar\">
                <i class=\"fas fa-search fa-fw\"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-user-tie\"></i>
                        <p>
                        Users
                        <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                        <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/Users");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-list\"></i>
                        <p> List Users</p>
                        </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-users\"></i>
                        <p>
                        Teams
                        <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                        <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/Teams");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-list\"></i>
                        <p> List Teams</p>
                        </a>
                        </li>
                        <li class=\"nav-item\">
                        <a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/AddTeam");
        echo "\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-plus\"></i>
                        <p> Add Teams</p>
                        </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item \">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-box-open\"></i>
                    <p>
                        Products
                        <i class=\"right fas fa-angle-left\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            ";
        // line 176
        echo "                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-plus\"></i>
                            <p>Add Product</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            ";
        // line 183
        echo "                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-list\"></i>
                            <p>Poduct List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-edit\"></i>
                    <p>
                        Forum
                        <i class=\"fas fa-angle-left right\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_posts");
        echo "\" class=\"nav-link\">
                            <i class=\"far fa-circle nav-icon\"></i>
                            <p>Posts</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_comments");
        echo "\" class=\"nav-link\">
                            <i class=\"far fa-circle nav-icon\"></i>
                            <p>Comments</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bad_words_index");
        echo "\" class=\"nav-link\">
                            <i class=\"far fa-circle nav-icon\"></i>
                            <p>bad words</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-bullhorn\"></i>
                    <p>
                        Announcement
                        <i class=\"right fas fa-angle-left\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            ";
        // line 230
        echo "                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-list\"></i>
                            <p>Show Announcement</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            ";
        // line 237
        echo "                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-plus\"></i>
                            <p>Add Announcement</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-tree\"></i>
                    <p>
                        Events
                        <i class=\"fas fa-angle-left right\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            ";
        // line 255
        echo "                            <a href=\"#\" class=\"nav-link\"
                            <i class=\"nav-icon fas fa-list\"></i>
                            <p>Show Events</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            ";
        // line 262
        echo "                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-plus\"></i>
                            <p>Plan Event</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul> 
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1 class=\"m-0\">Dashboard</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\"></div>
                    <!-- /.card -->
                </section>
                    ";
        // line 295
        $this->displayBlock('body', $context, $blocks);
        // line 298
        echo "                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2022 <a href=\"https://adminlte.io\">Administrator</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
        <b>Version</b> 3.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    \$.widget.bridge('uibutton', \$.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartJS -->
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jqvmap/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jqvmap/maps/jquery.vmap.usa.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Summernote -->
    <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- overlayScrollbars -->
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <!-- DataTables  & Plugins -->
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/jszip/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/pdfmake/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/pdfmake/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/plugins/datatables-buttons/js/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 385
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 295
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 296
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 296,  600 => 295,  581 => 6,  568 => 385,  564 => 367,  560 => 366,  556 => 365,  552 => 364,  548 => 363,  544 => 362,  540 => 361,  536 => 360,  532 => 359,  528 => 358,  524 => 357,  519 => 355,  515 => 354,  509 => 351,  504 => 349,  499 => 347,  494 => 345,  489 => 343,  485 => 342,  480 => 340,  475 => 338,  471 => 337,  466 => 335,  461 => 333,  456 => 331,  447 => 325,  442 => 323,  415 => 298,  413 => 295,  378 => 262,  370 => 255,  351 => 237,  343 => 230,  323 => 212,  314 => 206,  305 => 200,  286 => 183,  278 => 176,  258 => 158,  249 => 152,  229 => 135,  190 => 99,  138 => 51,  116 => 31,  112 => 30,  108 => 29,  103 => 27,  98 => 25,  93 => 23,  88 => 21,  83 => 19,  78 => 17,  73 => 15,  68 => 13,  63 => 11,  58 => 9,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Dashboard-{% block title %}Home{% endblock %}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/fontawesome-free/css/all.min.css') }}\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}\">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
  <!-- JQVMap -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/jqvmap/jqvmap.min.css') }}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/dist/css/adminlte.min.css') }}\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/daterangepicker/daterangepicker.css') }}\">
  <!-- summernote -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/summernote/summernote-bs4.min.css') }}\">
  <!-- DataTables -->
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('Back/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}\">

</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
    <div class=\"wrapper\">

    <!-- Preloader -->
    <div class=\"preloader flex-column justify-content-center align-items-center\">
        <img class=\"animation__shake\" src=\"Back/dist/img/AdminLTELogo.png\" alt=\"AdminLTELogo\" height=\"60\" width=\"60\">
    </div>

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            {# <a href=\"{{path('index')}}\" class=\"nav-link\">Home</a> #}
            <a href=\"{{path('Home')}}\" class=\"nav-link\">Home</a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"#\" class=\"nav-link\">Contact</a>
        </li>
        </ul>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
        <!-- Navbar Search -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"navbar-search\" href=\"#\" role=\"button\">
            <i class=\"fas fa-search\"></i>
            </a>
            <div class=\"navbar-search-block\">
            <form class=\"form-inline\">
                <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                    <i class=\"fas fa-search\"></i>
                    </button>
                    <button class=\"btn btn-navbar\" type=\"button\" data-widget=\"navbar-search\">
                    <i class=\"fas fa-times\"></i>
                    </button>
                </div>
                </div>
            </form>
            </div>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"fas fa-expand-arrows-alt\"></i>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"control-sidebar\" data-controlsidebar-slide=\"true\" href=\"#\" role=\"button\">
            <i class=\"fas fa-th-large\"></i>
            </a>
        </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"#\" class=\"brand-link\">
        <img src=\"{{ asset('Back/dist/img/AdminLTELogo.png')}}\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
        <span class=\"brand-text font-weight-light\">Administrator</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\"></div>

        <!-- SidebarSearch Form -->
        <div class=\"form-inline\">
            <div class=\"input-group\" data-widget=\"sidebar-search\">
            <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-sidebar\">
                <i class=\"fas fa-search fa-fw\"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-user-tie\"></i>
                        <p>
                        Users
                        <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                        <a href=\"{{path('admin/Users')}}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-list\"></i>
                        <p> List Users</p>
                        </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-users\"></i>
                        <p>
                        Teams
                        <i class=\"right fas fa-angle-left\"></i>
                        </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                        <a href=\"{{path('admin/Teams')}}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-list\"></i>
                        <p> List Teams</p>
                        </a>
                        </li>
                        <li class=\"nav-item\">
                        <a href=\"{{path('admin/AddTeam')}}\" class=\"nav-link\">
                        <i class=\"nav-icon fas fa-plus\"></i>
                        <p> Add Teams</p>
                        </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item \">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-box-open\"></i>
                    <p>
                        Products
                        <i class=\"right fas fa-angle-left\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            {# <a href=\"{{path('ddProduct')}}\" class=\"nav-link\"> #}
                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-plus\"></i>
                            <p>Add Product</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            {# <a href=\"{{path('listProduct')}}\" class=\"nav-link\"> #}
                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-list\"></i>
                            <p>Poduct List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-edit\"></i>
                    <p>
                        Forum
                        <i class=\"fas fa-angle-left right\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            <a href=\"{{path('list_posts')}}\" class=\"nav-link\">
                            <i class=\"far fa-circle nav-icon\"></i>
                            <p>Posts</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{path('list_comments')}}\" class=\"nav-link\">
                            <i class=\"far fa-circle nav-icon\"></i>
                            <p>Comments</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{path('app_bad_words_index')}}\" class=\"nav-link\">
                            <i class=\"far fa-circle nav-icon\"></i>
                            <p>bad words</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-bullhorn\"></i>
                    <p>
                        Announcement
                        <i class=\"right fas fa-angle-left\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            {# <a href=\"{{path('showAnnouncement')}}\" class=\"nav-link\"> #}
                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-list\"></i>
                            <p>Show Announcement</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            {# <a href=\"{{path('addAnnouncement')}}\" class=\"nav-link\"> #}
                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-plus\"></i>
                            <p>Add Announcement</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-tree\"></i>
                    <p>
                        Events
                        <i class=\"fas fa-angle-left right\"></i>
                    </p>
                    </a>
                    <ul class=\"nav nav-treeview\">
                        <li class=\"nav-item\">
                            {# <a href=\"{{path('showEvent')}}\" class=\"nav-link\"> #}
                            <a href=\"#\" class=\"nav-link\"
                            <i class=\"nav-icon fas fa-list\"></i>
                            <p>Show Events</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            {# <a href=\"{{path('addEvent')}}\" class=\"nav-link\"> #}
                            <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-plus\"></i>
                            <p>Plan Event</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul> 
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
        <div class=\"container-fluid\">
            <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1 class=\"m-0\">Dashboard</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\"></div>
                    <!-- /.card -->
                </section>
                    {% block body %}

                    {% endblock %}
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2022 <a href=\"https://adminlte.io\">Administrator</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
        <b>Version</b> 3.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src=\"{{ asset('Back/plugins/jquery/jquery.min.js') }}\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"{{ asset('Back/plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    \$.widget.bridge('uibutton', \$.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src=\"{{ asset('Back/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- ChartJS -->
    <script src=\"{{ asset('Back/plugins/chart.js/Chart.min.js') }}\"></script>
    <!-- Sparkline -->
    <script src=\"{{ asset('Back/plugins/sparklines/sparkline.js') }}\"></script>
    <!-- JQVMap -->
    <script src=\"{{ asset('Back/plugins/jqvmap/jquery.vmap.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/jqvmap/maps/jquery.vmap.usa.js') }}\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"{{ asset('Back/plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
    <!-- daterangepicker -->
    <script src=\"{{ asset('Back/plugins/moment/moment.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/daterangepicker/daterangepicker.js') }}\"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src=\"{{ asset('Back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
    <!-- Summernote -->
    <script src=\"{{ asset('Back/plugins/summernote/summernote-bs4.min.js') }}\"></script>
    <!-- overlayScrollbars -->
    <script src=\"{{ asset('Back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('Back/dist/js/adminlte.js') }}\"></script>
    <!-- AdminLTE for demo purposes -->
    
    <script src=\"{{ asset('Back/dist/js/pages/dashboard.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables/jquery.dataTables.min.js') }}\"></script>
    <!-- DataTables  & Plugins -->
    <script src=\"{{ asset('Back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/jszip/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/pdfmake/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/pdfmake/vfs_fonts.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables-buttons/js/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables-buttons/js/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('Back/plugins/datatables-buttons/js/buttons.colVis.min.js') }}\"></script>
    {# <script>
  \$(function () {
    \$(\"#example1\").DataTable({
      \"responsive\": true, \"lengthChange\": false, \"autoWidth\": false,
      \"buttons\": [\"copy\", \"csv\", \"excel\", \"pdf\", \"print\", \"colvis\"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    \$('#example2').DataTable({
      \"paging\": true,
      \"lengthChange\": false,
      \"searching\": false,
      \"ordering\": true,
      \"info\": true,
      \"autoWidth\": false,
      \"responsive\": true,
    });
  });
</script> #}

</body>
</html>
", "base-back.html.twig", "C:\\Users\\hp\\Desktop\\projects\\versionfinale\\Version 2\\PiDevGeek1\\templates\\base-back.html.twig");
    }
}
