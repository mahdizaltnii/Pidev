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

/* Back-office/RegBack.html.twig */
class __TwigTemplate_d86bfa7eb92e2973acbc102ef81d2f3e0b6a52501ad5853670ad95e3cfd6ab73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/RegBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back-office/RegBack.html.twig"));

        // line 29
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RegistrationAdminType"]) || array_key_exists("RegistrationAdminType", $context) ? $context["RegistrationAdminType"] : (function () { throw new RuntimeError('Variable "RegistrationAdminType" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), 'row');
        echo "
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-user\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          ";
        // line 38
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RegistrationAdminType"]) || array_key_exists("RegistrationAdminType", $context) ? $context["RegistrationAdminType"] : (function () { throw new RuntimeError('Variable "RegistrationAdminType" does not exist.', 38, $this->source); })()), "Email", [], "any", false, false, false, 38), 'row');
        echo "
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          ";
        // line 47
        echo "           ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RegistrationAdminType"]) || array_key_exists("RegistrationAdminType", $context) ? $context["RegistrationAdminType"] : (function () { throw new RuntimeError('Variable "RegistrationAdminType" does not exist.', 47, $this->source); })()), "Password", [], "any", false, false, false, 47), 'row');
        echo "
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          ";
        // line 56
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["RegistrationAdminType"]) || array_key_exists("RegistrationAdminType", $context) ? $context["RegistrationAdminType"] : (function () { throw new RuntimeError('Variable "RegistrationAdminType" does not exist.', 56, $this->source); })()), "Password", [], "any", false, false, false, 56), 'row');
        echo "
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <div class=\"row\">
          ";
        // line 72
        echo "          <!-- /.col -->
          <div class=\"col-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      ";
        // line 90
        echo "
      ";
        // line 92
        echo "    </div>
    <!-- /.form-box -->
    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["RegistrationAdminType"]) || array_key_exists("RegistrationAdminType", $context) ? $context["RegistrationAdminType"] : (function () { throw new RuntimeError('Variable "RegistrationAdminType" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 4 -->
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html> #}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Back-office/RegBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 104,  122 => 102,  117 => 100,  108 => 94,  104 => 92,  101 => 90,  91 => 72,  79 => 56,  67 => 47,  55 => 38,  43 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{# <!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Administrator | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"{{ asset('back-office/plugins/fontawesome-free/css/all.min.css') }}\">
  <!-- icheck bootstrap -->
  <link rel=\"stylesheet\" href=\"{{ asset('back-office/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('back-office/dist/css/adminlte.min.css') }}\">
</head>
<body class=\"hold-transition register-page\">
<div class=\"register-box\">
  <div class=\"card card-outline card-primary\">
    <div class=\"card-header text-center\">
      <a href=\"../../index2.html\" class=\"h1\"><b>Admin</b>LTE</a>
    </div>
    <div class=\"card-body\">
      <p class=\"login-box-msg\">Register a new membership</p>
        {{ form_start(RegistrationAdminType) }}
      <form action=\"../../index.html\" method=\"post\">
        <div class=\"input-group mb-3\">
          {# <input type=\"text\" class=\"form-control\" placeholder=\"Full name\"> #}
          {{ form_row(RegistrationAdminType.name) }}
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-user\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          {# <input type=\"email\" class=\"form-control\" placeholder=\"Email\"> #}
          {{ form_row(RegistrationAdminType.Email) }}
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-envelope\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          {# <input type=\"password\" class=\"form-control\" placeholder=\"Password\"> #}
           {{ form_row(RegistrationAdminType.Password) }}
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <div class=\"input-group mb-3\">
          {# <input type=\"password\" class=\"form-control\" placeholder=\"Retype password\"> #}
          {{ form_row(RegistrationAdminType.Password) }}
          <div class=\"input-group-append\">
            <div class=\"input-group-text\">
              <span class=\"fas fa-lock\"></span>
            </div>
          </div>
        </div>
        <div class=\"row\">
          {# <div class=\"col-8\">
            <div class=\"icheck-primary\">
              <input type=\"checkbox\" id=\"agreeTerms\" name=\"terms\" value=\"agree\">
              <label for=\"agreeTerms\">
               I agree to the <a href=\"#\">terms</a>
              </label>
            </div>
          </div> #}
          <!-- /.col -->
          <div class=\"col-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {# <div class=\"social-auth-links text-center\">
        <a href=\"#\" class=\"btn btn-block btn-primary\">
          <i class=\"fab fa-facebook mr-2\"></i>
          Sign up using Facebook
        </a>
        <a href=\"#\" class=\"btn btn-block btn-danger\">
          <i class=\"fab fa-google-plus mr-2\"></i>
          Sign up using Google+
        </a>
      </div> #}

      {# <a href=\"login.html\" class=\"text-center\">I already have a membership</a> #}
    </div>
    <!-- /.form-box -->
    {{ form_end(RegistrationAdminType) }}
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src=\"{{ asset('back-office/plugins/jquery/jquery.min.js') }}\"></script>
<!-- Bootstrap 4 -->
<script src=\"{{ asset('back-office/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('back-office/dist/js/adminlte.min.js') }}\"></script>
</body>
</html> #}
", "Back-office/RegBack.html.twig", "C:\\Users\\hp\\Desktop\\versionfinale\\Version 2\\PiDevGeek1\\templates\\Back-office\\RegBack.html.twig");
    }
}
