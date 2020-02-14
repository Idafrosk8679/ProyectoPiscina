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

/* equipo/index.html.twig */
class __TwigTemplate_89ca14547df82329e3482ed4aecba9e3f4f653dc9efd2bfd194409812b362e49 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipo/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipo/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "equipo/index.html.twig", 1);
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
<div class=\"background-equipo\">

<div class=\"jumbotron-fluid equipo d-flex justify-content-center align-items-center\">

\t\t<div class=\"container-fluid\">
\t
\t\t\t<h1 class=\"text-uppercase text-bold titulo-jb\">equipo</h1>
\t
\t\t</div>
\t
\t</div>
\t

\t<div class=\"container\">
\t<hr class=\"separador-top\">

\t\t<div class=\"titulo-seccion\">
\t\t\tJunta Directiva
\t\t</div>
\t\t\t<div class=\"row row-equipo justify-content-center\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t


\t\t<div class=\"titulo-seccion\">
\t\t\tEntrenadores
\t\t</div>

\t\t
\t\t\t<div class=\"row row-equipo justify-content-center\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>




\t\t<div class=\"titulo-seccion\">
\t\t\tNadadores
\t\t</div>


\t\t\t<div class=\"row row-equipo justify-content-center\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image.jpg", "fotos"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>

\t</div>

</div>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  207 => 104,  195 => 95,  184 => 87,  173 => 79,  150 => 59,  127 => 39,  116 => 31,  90 => 7,  80 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{title}}
{% endblock %}

{% block main %}

<div class=\"background-equipo\">

<div class=\"jumbotron-fluid equipo d-flex justify-content-center align-items-center\">

\t\t<div class=\"container-fluid\">
\t
\t\t\t<h1 class=\"text-uppercase text-bold titulo-jb\">equipo</h1>
\t
\t\t</div>
\t
\t</div>
\t

\t<div class=\"container\">
\t<hr class=\"separador-top\">

\t\t<div class=\"titulo-seccion\">
\t\t\tJunta Directiva
\t\t</div>
\t\t\t<div class=\"row row-equipo justify-content-center\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t


\t\t<div class=\"titulo-seccion\">
\t\t\tEntrenadores
\t\t</div>

\t\t
\t\t\t<div class=\"row row-equipo justify-content-center\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>




\t\t<div class=\"titulo-seccion\">
\t\t\tNadadores
\t\t</div>


\t\t\t<div class=\"row row-equipo justify-content-center\">

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<div class=\"img__wrap\">
\t\t\t\t\t\t<img class=\"img__img\" src=\"{{ asset ('image.jpg', 'fotos')}}\" />
\t\t\t\t\t\t<p class=\"img__title\">xxxx</p>
\t\t\t\t\t\t<p class=\"img__description\">descrip</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>

\t</div>

</div>
\t
{% endblock %}

", "equipo/index.html.twig", "C:\\symfony\\PI\\proyectoPiscina\\templates\\equipo\\index.html.twig");
    }
}
