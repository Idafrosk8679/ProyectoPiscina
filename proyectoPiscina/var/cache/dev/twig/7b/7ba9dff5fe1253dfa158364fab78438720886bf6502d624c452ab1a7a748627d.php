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

/* main/index.html.twig */
class __TwigTemplate_8a213dfd52835c1d520e6e98caeafb2b710454d2de481b4445150eaa1c606a60 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "
<div class=\"jumbotron-fluid d-flex justify-content-center align-items-center\">

\t<div class=\"container-fluid\">

\t\t<h1 class=\"text-uppercase text-bold titulo-jb\">Eslogan</h1>

\t</div>

</div>

<div class=\"container-fluid actividades p-0 m-0\">

\t<div class=\"row pl-md-3 h-100 min-vh-100 m-0\">

\t\t<div class=\"col py-5 px-5 align-items-center row justify-content-between m-0\">

\t\t\t<div class=\"col-12\">
\t\t\t\t<p class=\"py-3\">
\t\t\t\t\tEn <strong>Enero de 2011</strong> un grupo de padres decidieron formar un club de natación en
\t\t\t\t\tManises,
\t\t\t\t\tel club <strong>Fenix
\t\t\t\t\t\tManises</strong> .
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p class=\"py-3\">
\t\t\t\t\tAnte la ausencia de un club de natación en <strong>Manises</strong> muchos maniseros buscaron otro
\t\t\t\t\tclub
\t\t\t\t\ten poblaciones cercanas.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p class=\"py-3\">
\t\t\t\t\tTodas las gestiones fueron realizadas en tiempo record, gracias a la <strong>concejalía de
\t\t\t\t\t\tdeportes</strong> y a la
\t\t\t\t\tdirección de la <strong>Piscina Municipal de Manises</strong>.

\t\t\t\t</p>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"col m-0 p-0 \">
\t\t\t<div class=\"img-ajustado h-100 min-vh-100\">

\t\t\t</div>
\t\t</div>

\t</div>

\t<div class=\"row py-3 px-3 px-md-5 align-items-center justify-content-center background-equipo h-100 min-vh-100 m-0\">


\t\t<div class=\"col-6 col-md-9 pt-4 col-xs-6 order-1 order-md-0 mb-5 align-items-center row justify-content-between m-0\">

\t\t\t<div class=\"col-12\">
\t\t\t\t<p>
\t\t\t\t\tGracias al <strong>prestigio</strong> que nos hemos ganado, el club está <strong>creciendo</strong>
\t\t\t\t\ta un
\t\t\t\t\tgran ritmo.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p>

\t\t\t\t\tEl club está inscrito en la federación de la <strong>Comunidad Valenciana</strong> y participa en
\t\t\t\t\tlas
\t\t\t\t\t<strong>ligas provinciales y autonómicas</strong>, algunos de nuestros nadadores compiten a<strong>
\t\t\t\t\t\tnivel nacional</strong> .
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p>
\t\t\t\t\tEl club ya ha enviado nadadores a los campeonatos de <strong>España</strong> representando a la
\t\t\t\t\t<strong>Comunidad Valenciana</strong>.
\t\t\t\t</p>
\t\t\t</div>


\t\t</div>



\t\t<div class=\"col-6 col-md-12 order-0 order-md-1 carousel slide carousel-multi-item mb-3\" id=\"carousel-with-lb\"
\t\t\tdata-ride=\"carousel\">

\t\t\t";
        // line 98
        $context["itemsPerpage"] = 3;
        // line 99
        echo "\t\t\t";
        $context["numPages"] = (twig_length_filter($this->env, (isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 99, $this->source); })())) / (isset($context["itemsPerpage"]) || array_key_exists("itemsPerpage", $context) ? $context["itemsPerpage"] : (function () { throw new RuntimeError('Variable "itemsPerpage" does not exist.', 99, $this->source); })()));
        // line 100
        echo "



\t\t\t<div class=\"carousel-inner mdb-lightbox\" role=\"listbox\">

\t\t\t\t<div id=\"mdb-lightbox-ui\"></div>

\t\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPages"]) || array_key_exists("numPages", $context) ? $context["numPages"] : (function () { throw new RuntimeError('Variable "numPages" does not exist.', 108, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            echo "
\t\t\t\t<div class=\" carousel-item ";
            // line 110
            if (0 === twig_compare($context["i"], 1)) {
                echo " active ";
            }
            echo " text-center\">

\t\t\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((($context["i"] * (isset($context["itemsPerpage"]) || array_key_exists("itemsPerpage", $context) ? $context["itemsPerpage"] : (function () { throw new RuntimeError('Variable "itemsPerpage" does not exist.', 112, $this->source); })())) - (isset($context["itemsPerpage"]) || array_key_exists("itemsPerpage", $context) ? $context["itemsPerpage"] : (function () { throw new RuntimeError('Variable "itemsPerpage" does not exist.', 112, $this->source); })())), (($context["i"] * (isset($context["itemsPerpage"]) || array_key_exists("itemsPerpage", $context) ? $context["itemsPerpage"] : (function () { throw new RuntimeError('Variable "itemsPerpage" does not exist.', 112, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["numImg"]) {
                // line 113
                echo "
\t\t\t\t\t";
                // line 114
                if (0 !== twig_compare(twig_spaceless(twig_get_attribute($this->env, $this->source, (isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 114, $this->source); })()), $context["numImg"], [], "array", false, false, false, 114)), "")) {
                    // line 115
                    echo "
\t\t\t\t\t<figure class=\"col-12 col-md-3 d-md-inline-block\">
\t\t\t\t\t\t<img src=\"/img/muestra/";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["imagenes"]) || array_key_exists("imagenes", $context) ? $context["imagenes"] : (function () { throw new RuntimeError('Variable "imagenes" does not exist.', 117, $this->source); })()), $context["numImg"], [], "array", false, false, false, 117), "html", null, true);
                    echo "\" class=\"img-fluid\">
\t\t\t\t\t</figure>

\t\t\t\t\t";
                }
                // line 121
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numImg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
\t\t\t\t</div>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
\t\t\t\t<div id=\"myModal\" class=\"modal\">
\t\t\t\t\t
\t\t\t\t\t<img class=\"modal-content\"><span class=\"close\">&times;</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ol class=\"carousel-indicators \">

\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["numPages"]) || array_key_exists("numPages", $context) ? $context["numPages"] : (function () { throw new RuntimeError('Variable "numPages" does not exist.', 136, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 137
            echo "
\t\t\t\t<li data-target=\"#carousel-with-lb\" data-slide-to=\"";
            // line 138
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"
\t\t\t\t\tclass=\"";
            // line 139
            if (0 === twig_compare($context["i"], 0)) {
                echo " active ";
            }
            echo " danger\"></li>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "
\t\t\t</ol>

\t\t</div>
\t</div>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 142,  270 => 139,  266 => 138,  263 => 137,  259 => 136,  248 => 127,  239 => 123,  232 => 121,  225 => 117,  221 => 115,  219 => 114,  216 => 113,  212 => 112,  205 => 110,  202 => 109,  198 => 108,  188 => 100,  185 => 99,  183 => 98,  90 => 7,  80 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{title}}
{% endblock %}

{% block main %}

<div class=\"jumbotron-fluid d-flex justify-content-center align-items-center\">

\t<div class=\"container-fluid\">

\t\t<h1 class=\"text-uppercase text-bold titulo-jb\">Eslogan</h1>

\t</div>

</div>

<div class=\"container-fluid actividades p-0 m-0\">

\t<div class=\"row pl-md-3 h-100 min-vh-100 m-0\">

\t\t<div class=\"col py-5 px-5 align-items-center row justify-content-between m-0\">

\t\t\t<div class=\"col-12\">
\t\t\t\t<p class=\"py-3\">
\t\t\t\t\tEn <strong>Enero de 2011</strong> un grupo de padres decidieron formar un club de natación en
\t\t\t\t\tManises,
\t\t\t\t\tel club <strong>Fenix
\t\t\t\t\t\tManises</strong> .
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p class=\"py-3\">
\t\t\t\t\tAnte la ausencia de un club de natación en <strong>Manises</strong> muchos maniseros buscaron otro
\t\t\t\t\tclub
\t\t\t\t\ten poblaciones cercanas.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p class=\"py-3\">
\t\t\t\t\tTodas las gestiones fueron realizadas en tiempo record, gracias a la <strong>concejalía de
\t\t\t\t\t\tdeportes</strong> y a la
\t\t\t\t\tdirección de la <strong>Piscina Municipal de Manises</strong>.

\t\t\t\t</p>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"col m-0 p-0 \">
\t\t\t<div class=\"img-ajustado h-100 min-vh-100\">

\t\t\t</div>
\t\t</div>

\t</div>

\t<div class=\"row py-3 px-3 px-md-5 align-items-center justify-content-center background-equipo h-100 min-vh-100 m-0\">


\t\t<div class=\"col-6 col-md-9 pt-4 col-xs-6 order-1 order-md-0 mb-5 align-items-center row justify-content-between m-0\">

\t\t\t<div class=\"col-12\">
\t\t\t\t<p>
\t\t\t\t\tGracias al <strong>prestigio</strong> que nos hemos ganado, el club está <strong>creciendo</strong>
\t\t\t\t\ta un
\t\t\t\t\tgran ritmo.
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p>

\t\t\t\t\tEl club está inscrito en la federación de la <strong>Comunidad Valenciana</strong> y participa en
\t\t\t\t\tlas
\t\t\t\t\t<strong>ligas provinciales y autonómicas</strong>, algunos de nuestros nadadores compiten a<strong>
\t\t\t\t\t\tnivel nacional</strong> .
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<div class=\"col-12\">
\t\t\t\t<p>
\t\t\t\t\tEl club ya ha enviado nadadores a los campeonatos de <strong>España</strong> representando a la
\t\t\t\t\t<strong>Comunidad Valenciana</strong>.
\t\t\t\t</p>
\t\t\t</div>


\t\t</div>



\t\t<div class=\"col-6 col-md-12 order-0 order-md-1 carousel slide carousel-multi-item mb-3\" id=\"carousel-with-lb\"
\t\t\tdata-ride=\"carousel\">

\t\t\t{% set itemsPerpage = 3 %}
\t\t\t{% set numPages = imagenes|length / itemsPerpage %}




\t\t\t<div class=\"carousel-inner mdb-lightbox\" role=\"listbox\">

\t\t\t\t<div id=\"mdb-lightbox-ui\"></div>

\t\t\t\t{% for i in 1.. numPages %}

\t\t\t\t<div class=\" carousel-item {% if i == 1 %} active {% endif %} text-center\">

\t\t\t\t\t{% for numImg in i * itemsPerpage - itemsPerpage .. i * itemsPerpage - 1 %}

\t\t\t\t\t{% if imagenes[numImg]|spaceless != ''  %}

\t\t\t\t\t<figure class=\"col-12 col-md-3 d-md-inline-block\">
\t\t\t\t\t\t<img src=\"/img/muestra/{{ imagenes[numImg] }}\" class=\"img-fluid\">
\t\t\t\t\t</figure>

\t\t\t\t\t{% endif %}

\t\t\t\t\t{% endfor %}

\t\t\t\t</div>

\t\t\t\t{% endfor %}

\t\t\t\t<div id=\"myModal\" class=\"modal\">
\t\t\t\t\t
\t\t\t\t\t<img class=\"modal-content\"><span class=\"close\">&times;</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ol class=\"carousel-indicators \">

\t\t\t\t{% for i in 0.. numPages - 1 %}

\t\t\t\t<li data-target=\"#carousel-with-lb\" data-slide-to=\"{{i}}\"
\t\t\t\t\tclass=\"{% if i == 0 %} active {% endif %} danger\"></li>

\t\t\t\t{% endfor %}

\t\t\t</ol>

\t\t</div>
\t</div>
</div>

</div>
{% endblock %}", "main/index.html.twig", "C:\\symfony\\PI\\proyectoPiscina\\templates\\main\\index.html.twig");
    }
}
