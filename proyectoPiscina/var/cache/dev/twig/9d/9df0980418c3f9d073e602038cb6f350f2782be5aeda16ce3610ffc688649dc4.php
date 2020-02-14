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

/* layoutApp.html.twig */
class __TwigTemplate_52bd466807aa44f782cc7da67ff6c48ed47d82307e16f15c3c2ead7dfaae4877 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layoutApp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layoutApp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layoutApp.html.twig", 1);
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
        echo "<div class=\"container-fluid h-100\">
\t<div class=\"row h-100\">

\t\t<div class=\"col-12 p-0\">
\t\t\t<header class=\"header\">
\t\t\t\t<nav class=\"navbar nav navbar-expand-lg\">
\t\t\t\t\t<div class=\"row w-100\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-10 d-flex align-items-center\">
\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-light\" type=\"button\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
\t\t\t\t\t\t\t\taria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t</button>



\t\t\t\t\t\t\t<a class=\"navbar-brand pl-lg-5 pl-md-4 pl-sm-3 mr-lg-3 mr-md-2 mr-sm-0\"
\t\t\t\t\t\t\t\thref=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main_index");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logoR.png", "logos"), "html", null, true);
        echo "\" height=\"70\" alt=\"mdb logo\">
\t\t\t\t\t\t\t\t<h2 id=\"app\">FENIX MANISES</h2>
\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-12 col-lg-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<h5>Hola ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "nombre", [], "any", false, false, false, 29), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</header>
\t\t</div>

\t\t<div class=\"col-12 col-md-12 col-lg-2 nav-vertical navbar-collapse text-center text-lg-left collapse show\"
\t\t\tid=\"navbarSupportedContent\">

\t\t\t<ul class=\"nav flex-column p-4\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Inicio</a>
\t\t\t\t</li>

\t\t\t\t";
        // line 44
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "rol", [], "any", false, false, false, 44), "usuario") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "rol", [], "any", false, false, false, 44), "admin"))) {
            // line 45
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Físico</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Tiempos</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 52
        echo "
\t\t\t\t";
        // line 53
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "rol", [], "any", false, false, false, 53), "entrenador") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "rol", [], "any", false, false, false, 53), "junta")) || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "rol", [], "any", false, false, false, 53), "admin"))) {
            // line 54
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add");
            echo "\">Añadir</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit");
            echo "\">Modificar</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remove");
            echo "\">Eliminar</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 64
        echo "
\t\t\t\t";
        // line 65
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "rol", [], "any", false, false, false, 65), "junta") || 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "rol", [], "any", false, false, false, 65), "admin"))) {
            // line 66
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Web</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 70
        echo "
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Editar perfil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Cerrar sesión</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t</div>

\t\t<div class=\"col-12 col-md-12 col-lg-10 d-flex justify-content-center\" id=\"wrap\">
\t\t\t<main class=\"container-fluid\">
\t\t\t\t";
        // line 83
        $this->displayBlock('main', $context, $blocks);
        // line 84
        echo "\t\t\t</main>
\t\t</div>

\t</div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
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
        return "layoutApp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 83,  191 => 84,  189 => 83,  178 => 75,  171 => 70,  165 => 66,  163 => 65,  160 => 64,  154 => 61,  148 => 58,  142 => 55,  139 => 54,  137 => 53,  134 => 52,  125 => 45,  123 => 44,  117 => 41,  102 => 29,  92 => 22,  88 => 21,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"container-fluid h-100\">
\t<div class=\"row h-100\">

\t\t<div class=\"col-12 p-0\">
\t\t\t<header class=\"header\">
\t\t\t\t<nav class=\"navbar nav navbar-expand-lg\">
\t\t\t\t\t<div class=\"row w-100\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-10 d-flex align-items-center\">
\t\t\t\t\t\t\t<button class=\"navbar-toggler navbar-light\" type=\"button\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\tdata-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
\t\t\t\t\t\t\t\taria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t</button>



\t\t\t\t\t\t\t<a class=\"navbar-brand pl-lg-5 pl-md-4 pl-sm-3 mr-lg-3 mr-md-2 mr-sm-0\"
\t\t\t\t\t\t\t\thref=\"{{ path('main_index') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset ('logoR.png', 'logos')}}\" height=\"70\" alt=\"mdb logo\">
\t\t\t\t\t\t\t\t<h2 id=\"app\">FENIX MANISES</h2>
\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-12 col-lg-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t<h5>Hola {{ user.nombre }}</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</header>
\t\t</div>

\t\t<div class=\"col-12 col-md-12 col-lg-2 nav-vertical navbar-collapse text-center text-lg-left collapse show\"
\t\t\tid=\"navbarSupportedContent\">

\t\t\t<ul class=\"nav flex-column p-4\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_index')}}\">Inicio</a>
\t\t\t\t</li>

\t\t\t\t{% if user.rol == 'usuario' or user.rol == 'admin' %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Físico</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Tiempos</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{% if user.rol == 'entrenador' or user.rol == 'junta' or user.rol == 'admin' %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_add') }}\">Añadir</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_edit') }}\">Modificar</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_remove') }}\">Eliminar</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{% if user.rol == 'junta' or user.rol == 'admin' %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Web</a>
\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Editar perfil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Cerrar sesión</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t</div>

\t\t<div class=\"col-12 col-md-12 col-lg-10 d-flex justify-content-center\" id=\"wrap\">
\t\t\t<main class=\"container-fluid\">
\t\t\t\t{% block main %}{% endblock %}
\t\t\t</main>
\t\t</div>

\t</div>

</div>

{% endblock %}", "layoutApp.html.twig", "C:\\symfony\\PI\\proyectoPiscina\\templates\\layoutApp.html.twig");
    }
}
