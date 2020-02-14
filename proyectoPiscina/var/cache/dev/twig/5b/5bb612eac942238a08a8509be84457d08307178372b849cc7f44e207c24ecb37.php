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

/* layout.html.twig */
class __TwigTemplate_0429c3d5aed8ccdc1282ee4f7276b22fa6b1294c31c90fdb88de375e9b91a0f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<header class=\"header\">
\t<nav class=\"navbar navbar-expand-md nav nav-justified nav-pills nav-tabs fixed-top\">
\t\t<a class=\"navbar-brand pl-lg-5 pl-md-4 pl-sm-3 mr-lg-3 mr-md-2 mr-sm-0\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_eventos");
        echo "\">
\t\t\t<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.jpg", "logos"), "html", null, true);
        echo "\" height=\"50\" alt=\"mdb logo\">
\t\t\t<a class=\"titulo-fenixmanises\">FENIX MANISES</a>
\t\t</a>
\t\t<button class=\"navbar-toggler navbar-light\" type=\"button\" data-toggle=\"collapse\"
\t\t\tdata-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
\t\t\taria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav ml-auto pr-0 pr-lg-5 pr-md-4 pr-sm-0\">
\t\t\t\t";
        // line 17
        $context["currentPath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17);
        // line 18
        echo "\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link nav-item text-white text-uppercase font-weight-bold ";
        // line 19
        if (0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 19, $this->source); })()), "main")) {
            echo " active";
        }
        echo "\"
\t\t\t\t\t\thref=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_index");
        echo "\">Inicio</a>
\t\t\t\t</li>
\t\t\t\t&nbsp;
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-white text-uppercase font-weight-bold ";
        // line 24
        if (0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 24, $this->source); })()), "equipo")) {
            echo " active";
        }
        echo "\"
\t\t\t\t\t\thref=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_equipo");
        echo "\">Equipo</a>
\t\t\t\t</li>
\t\t\t\t&nbsp;
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-white text-uppercase font-weight-bold ";
        // line 29
        if (0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 29, $this->source); })()), "eventos")) {
            echo " active";
        }
        echo "\"
\t\t\t\t\t\thref=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_eventos");
        echo "\">Eventos</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</header>

<div id=\"wrap\">
\t<main>
\t\t";
        // line 39
        $this->displayBlock('main', $context, $blocks);
        // line 40
        echo "\t</main>
</div>

<footer class=\"footer absolute-bottom pt-4\">

\t<div class=\"container-fluid text-center text-md-left principal pb-3\">

\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-7 mt-md-0 mt-3 pl-4 \">

\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center\">

\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<iframe
\t\t\t\t\t\t\tsrc=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d769.7452344481853!2d-0.4660964707488904!3d39.49234503366108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd605aa39604b26b%3A0x43c9142489ee4d85!2sPiscina%20Cubierta%20De%20Manises!5e0!3m2!1ses!2ses!4v1581353658750!5m2!1ses!2ses\"
\t\t\t\t\t\t\twidth=\"100%\" height=\"200px\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Dirección</strong> <br>
\t\t\t\t\t\t\t\t<a>Carrer de les Roses, 22 <br> 46940 Manises, Valencia</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"my-2\">
\t\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t\t\t<a>cnfenixmanises@gmail.com</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Teléfono</strong>
\t\t\t\t\t\t\t\t<a>961 84 92 44</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-5 mb-md-0 my-3 d-flex justify-content-center align-items-center rrss\">
\t\t\t\t<a href=\"https://www.facebook.com/clubnatacionfenixmanises/?locale2=es_ES\" target=\"_blank\"><i
\t\t\t\t\t\tclass=\"fab fa-facebook fa-2x\" style=\"color:white\"></i></a>
\t\t\t\t<a href=\"https://twitter.com/natacionfenix\" target=\"_blank\"><i class=\"fab fa-twitter fa-2x px-4\"
\t\t\t\t\t\tstyle=\"color:white\"></i></a>
\t\t\t\t<a href=\"https://www.instagram.com/cnfenixmanises/\" target=\"_blank\"><i class=\"fab fa-instagram fa-2x\"
\t\t\t\t\t\tstyle=\"color:white\"></i></a>
\t\t\t</div>


\t\t</div>
\t\t<div class=\"container-fluid text-center text-md-center principal pb-3\">
\t\t\t<a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logoR.png", "logos"), "html", null, true);
        echo "\" height=\"40\" alt=\"mdb logo\"
\t\t\t\tstyle=\"color:white\"></img></a></div>
\t</div>

</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 39,  193 => 90,  141 => 40,  139 => 39,  127 => 30,  121 => 29,  114 => 25,  108 => 24,  101 => 20,  95 => 19,  92 => 18,  90 => 17,  77 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<header class=\"header\">
\t<nav class=\"navbar navbar-expand-md nav nav-justified nav-pills nav-tabs fixed-top\">
\t\t<a class=\"navbar-brand pl-lg-5 pl-md-4 pl-sm-3 mr-lg-3 mr-md-2 mr-sm-0\" href=\"{{ path('main_eventos') }}\">
\t\t\t<img src=\"{{ asset ('logo.jpg', 'logos')}}\" height=\"50\" alt=\"mdb logo\">
\t\t\t<a class=\"titulo-fenixmanises\">FENIX MANISES</a>
\t\t</a>
\t\t<button class=\"navbar-toggler navbar-light\" type=\"button\" data-toggle=\"collapse\"
\t\t\tdata-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
\t\t\taria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav ml-auto pr-0 pr-lg-5 pr-md-4 pr-sm-0\">
\t\t\t\t{% set currentPath = app.request.attributes.get('_route') %}
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link nav-item text-white text-uppercase font-weight-bold {% if currentPath == 'main' %} active{% endif %}\"
\t\t\t\t\t\thref=\"{{ path('main_index') }}\">Inicio</a>
\t\t\t\t</li>
\t\t\t\t&nbsp;
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-white text-uppercase font-weight-bold {% if currentPath == 'equipo' %} active{% endif %}\"
\t\t\t\t\t\thref=\"{{ path('main_equipo') }}\">Equipo</a>
\t\t\t\t</li>
\t\t\t\t&nbsp;
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link text-white text-uppercase font-weight-bold {% if currentPath == 'eventos' %} active{% endif %}\"
\t\t\t\t\t\thref=\"{{ path('main_eventos') }}\">Eventos</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</nav>
</header>

<div id=\"wrap\">
\t<main>
\t\t{% block main %}{% endblock %}
\t</main>
</div>

<footer class=\"footer absolute-bottom pt-4\">

\t<div class=\"container-fluid text-center text-md-left principal pb-3\">

\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-7 mt-md-0 mt-3 pl-4 \">

\t\t\t\t<div class=\"row d-flex justify-content-center align-items-center\">

\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t<iframe
\t\t\t\t\t\t\tsrc=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d769.7452344481853!2d-0.4660964707488904!3d39.49234503366108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd605aa39604b26b%3A0x43c9142489ee4d85!2sPiscina%20Cubierta%20De%20Manises!5e0!3m2!1ses!2ses!4v1581353658750!5m2!1ses!2ses\"
\t\t\t\t\t\t\twidth=\"100%\" height=\"200px\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Dirección</strong> <br>
\t\t\t\t\t\t\t\t<a>Carrer de les Roses, 22 <br> 46940 Manises, Valencia</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"my-2\">
\t\t\t\t\t\t\t\t<strong>Email</strong>
\t\t\t\t\t\t\t\t<a>cnfenixmanises@gmail.com</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<strong>Teléfono</strong>
\t\t\t\t\t\t\t\t<a>961 84 92 44</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-5 mb-md-0 my-3 d-flex justify-content-center align-items-center rrss\">
\t\t\t\t<a href=\"https://www.facebook.com/clubnatacionfenixmanises/?locale2=es_ES\" target=\"_blank\"><i
\t\t\t\t\t\tclass=\"fab fa-facebook fa-2x\" style=\"color:white\"></i></a>
\t\t\t\t<a href=\"https://twitter.com/natacionfenix\" target=\"_blank\"><i class=\"fab fa-twitter fa-2x px-4\"
\t\t\t\t\t\tstyle=\"color:white\"></i></a>
\t\t\t\t<a href=\"https://www.instagram.com/cnfenixmanises/\" target=\"_blank\"><i class=\"fab fa-instagram fa-2x\"
\t\t\t\t\t\tstyle=\"color:white\"></i></a>
\t\t\t</div>


\t\t</div>
\t\t<div class=\"container-fluid text-center text-md-center principal pb-3\">
\t\t\t<a href=\"{{ path('app_login') }}\" target=\"_blank\"><img src=\"{{ asset ('logoR.png', 'logos')}}\" height=\"40\" alt=\"mdb logo\"
\t\t\t\tstyle=\"color:white\"></img></a></div>
\t</div>

</footer>
{% endblock %}", "layout.html.twig", "C:\\symfony\\PI\\proyectoPiscina\\templates\\layout.html.twig");
    }
}
